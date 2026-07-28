<?php if (!defined('ABSPATH')) exit('No direct script access allowed');
/**
 * Ghi bảng chốt hoa hồng theo LUỒNG MỚI của CRM (quyết toán → 1 dòng / giao dịch).
 *
 * Dùng chung bảng `default_commission` với model Commission, nhưng tách file vì
 * Commission.php là code crawl Google Sheet đang bị khai tử — trộn vào đó thì
 * khi dọn crawl sẽ kéo theo cả luồng mới. Mọi dòng do đây ghi mang
 * `more_information.source = 'crm'`; reader cũ phải bỏ qua dòng có khoá này.
 *
 * Số tiền ghi ở đây là số CHỐT tại thời điểm quyết toán (để kế toán trả tiền),
 * đồng thời giữ đủ dữ liệu gốc (`base`, `cumulative`, `tiers_sig`) để báo cáo năm
 * tính lại và chỉ ra chênh lệch — user chốt 27/07.
 */
class CommissionEntry extends DbBasic{
	const SOURCE = 'crm';
	const ENGINE = 1;

	function __construct(){
		$this->pkey = "commission_id";
		$this->tbl = DB_PREFIX."commission";
	}

	/**
	 * Dòng này do luồng mới ghi hay không.
	 *
	 * Hai màn cũ (popup "Xem giao dịch" và dashboard) LEFT JOIN sang bảng này rồi mở khối
	 * hoa hồng bằng `if(!empty($commission_information))`. Bảng vốn rỗng nên khối đó im;
	 * dòng đầu tiên của luồng mới sẽ đánh thức chúng, mà chúng đọc bộ khoá của luồng crawl
	 * (contract_comm_base, sales_commission_amount, tax_vat_amount…) nên mọi số ra 0đ.
	 * Chúng phải bỏ qua dòng luồng mới cho tới khi có màn xem hoa hồng riêng.
	 */
	public static function isNewFlow($commission_information){
		if(!is_array($commission_information) || empty($commission_information)){
			return false;
		}
		return isset($commission_information['source']) && $commission_information['source'] === self::SOURCE;
	}

	/** Nhớ tạm trong 1 lần chạy: 1 giao dịch co-sale hay có nhiều dòng cùng phòng. */
	private $chain_cache = array();
	private $dep_of_staff = array();
	private $year_shares = array();
	private $cumulative_cache = array();

	/** Vai trò per-share: cột trên `billing_sale` giữ người đảm nhiệm của DÒNG đó. */
	private function shareRoleColumn($role_key){
		if($role_key == 'TPKD') return 'head_of_dep_id';
		if($role_key == 'GD') return 'sale_dir_id';
		return '';
	}

	/** Chuỗi phòng ban của một phòng, tra 1 lần rồi nhớ lại. */
	private function depChain($department_id){
		$department_id = (int) $department_id;
		if($department_id <= 0){
			return array();
		}
		if(!isset($this->chain_cache[$department_id])){
			$clsProperty = new Property();
			$this->chain_cache[$department_id] = $clsProperty->resolveStaffDepChain($department_id);
		}
		return $this->chain_cache[$department_id];
	}

	/**
	 * Ai giữ vai trò TPKD/GĐKD của DÒNG chia này.
	 *
	 * Ưu tiên giá trị đã lưu trên dòng (Admin chọn tay ở màn quyết toán — tin tuyệt đối).
	 * Chưa có thì suy từ CÂY PHÒNG BAN, đúng cách form bước 1 vẫn điền sẵn: đo live 27/07
	 * mới chỉ 2/404 dòng có sẵn 2 cột này, không có bước suy này thì quyết toán giao dịch
	 * cũ sẽ ra roles[] rỗng — không ai được hoa hồng quản lý.
	 */
	private function shareRolePerson($share, $role_key){
		global $core;
		$col = $this->shareRoleColumn($role_key);
		$pid = (int) $core->get_field($share, $col, 0);
		if($pid > 0){
			return $pid;
		}
		$dep = (int) $core->get_field($share, 'department_id', 0);
		if($dep <= 0){
			// 16/404 dòng có người bán mà thiếu phòng ban → tra qua hồ sơ nhân sự
			$staff_id = (int) $core->get_field($share, 'staff_id', 0);
			if($staff_id <= 0){
				return 0; // dòng của đại lý/CTV bên ngoài: vốn không có quản lý nội bộ
			}
			if(!isset($this->dep_of_staff[$staff_id])){
				$clsProfile = new Profile();
				$one = $clsProfile->getOne($staff_id, "`department_id`");
				$this->dep_of_staff[$staff_id] = (int) $core->get_field($one, 'department_id', 0);
			}
			$dep = $this->dep_of_staff[$staff_id];
		}
		$chain = $this->depChain($dep);
		if(empty($chain)){
			return 0;
		}
		// Đứng đầu PHÒNG = TPKD, đứng đầu KHỐI = GĐKD. Không tra theo role_id: live có
		// nhiều người cùng role_id=48, role không phân biệt được hai vị trí này.
		return ($role_key == 'TPKD')
			? (int) $core->get_field($chain, 'head_of_dep_id', 0)
			: (int) $core->get_field($chain, 'regional_director_id', 0);
	}

	/** Vai trò per-billing (PTĐT): khoá trong `billing.more_information`. */
	private function billingRoleKey($role_key){
		if($role_key == 'CV_PTDT') return 'ptdt_cv_id';
		if($role_key == 'TP_PTDT') return 'ptdt_tp_id';
		if($role_key == 'GD_PTDT') return 'ptdt_gd_id';
		return '';
	}

	/** Mốc đầu/cuối năm theo `deposit_date` (unix). */
	private function yearRange($year){
		$year = (int) $year;
		return array(mktime(0, 0, 0, 1, 1, $year), mktime(0, 0, 0, 1, 1, $year + 1));
	}

	/**
	 * Mọi dòng chia của một năm, kèm đủ trường để phân giải vai trò. Nạp 1 lần rồi nhớ lại.
	 *
	 * Phải nạp về PHP chứ không lọc bằng SQL: người giữ vai trò TPKD/GĐKD của một dòng
	 * có thể do CÂY PHÒNG BAN suy ra chứ không nằm trong cột (đo live 27/07: chỉ 2/404
	 * dòng có sẵn cột). Lọc bằng SQL trên cột thì lũy kế gần như bằng 0, ai cũng rơi
	 * xuống bậc thấp nhất — sai tiền một cách hệ thống.
	 */
	private function yearShares($year){
		global $dbconn;
		$year = (int) $year;
		if(isset($this->year_shares[$year])){
			return $this->year_shares[$year];
		}
		list($from, $to) = $this->yearRange($year);
		$tbl_share = DB_PREFIX."billing_sale";
		$tbl_bill = DB_PREFIX."billing";
		$rows = $dbconn->GetAll("SELECT `bs`.`billing_sale_id`, `bs`.`staff_id`, `bs`.`department_id`,
				`bs`.`head_of_dep_id`, `bs`.`sale_dir_id`, `bs`.`commission_value`
			FROM `{$tbl_share}` AS `bs`
			INNER JOIN `{$tbl_bill}` AS `b` ON `b`.`billing_id` = `bs`.`billing_id`
			WHERE `b`.`is_cancel` = 0 AND `b`.`is_trash` = 0
				AND `b`.`deposit_date` >= {$from} AND `b`.`deposit_date` < {$to}");
		$this->year_shares[$year] = empty($rows) ? array() : $rows;
		return $this->year_shares[$year];
	}

	/**
	 * Doanh số sau giảm trừ (AG) LUỸ KẾ CẢ NĂM của một người ở một vai trò —
	 * số dùng để tra bậc thang.
	 *
	 * Tính trên MỌI giao dịch chưa huỷ trong năm, không chỉ giao dịch đã quyết toán:
	 * bậc thang là "doanh số luỹ kế", không phải "doanh số đã chốt tiền".
	 */
	public function cumulativeFor($role_key, $profile_id, $year){
		global $dbconn;
		$profile_id = (int) $profile_id;
		$year = (int) $year;
		if($profile_id <= 0){
			return 0;
		}
		$memo = $role_key.'|'.$profile_id.'|'.$year;
		if(isset($this->cumulative_cache[$memo])){
			return $this->cumulative_cache[$memo];
		}
		$total = 0;
		if($this->shareRoleColumn($role_key) !== ''){
			// TPKD/GĐKD: cộng dòng nào mà người này giữ vai trò đó — phân giải bằng ĐÚNG
			// hàm mà lúc tính tiền dùng, nếu không thì gốc bậc thang lệch khỏi gốc trả tiền.
			foreach($this->yearShares($year) as $_row){
				if($this->shareRolePerson($_row, $role_key) === $profile_id){
					$total += (float) $_row['commission_value'];
				}
			}
		} else {
			$key = $this->billingRoleKey($role_key);
			if($key === ''){
				return 0;
			}
			// PTĐT chỉ lưu tường minh ở cấp giao dịch (không suy từ cây) nên lọc bằng SQL
			// là nhất quán; ăn trên tổng AG cả căn ⇒ cộng mọi dòng chia của căn đó.
			list($from, $to) = $this->yearRange($year);
			$tbl_share = DB_PREFIX."billing_sale";
			$tbl_bill = DB_PREFIX."billing";
			$row = $dbconn->GetRow("SELECT SUM(`bs`.`commission_value`) AS `total`
				FROM `{$tbl_share}` AS `bs`
				INNER JOIN `{$tbl_bill}` AS `b` ON `b`.`billing_id` = `bs`.`billing_id`
				WHERE JSON_EXTRACT(`b`.`more_information`, '$.{$key}') = {$profile_id}
					AND `b`.`is_cancel` = 0 AND `b`.`is_trash` = 0
					AND `b`.`deposit_date` >= {$from} AND `b`.`deposit_date` < {$to}");
			$total = empty($row['total']) ? 0 : (float) $row['total'];
		}
		// (float) chứ không money(): đây là cột số của DB, money() sẽ bỏ dấu chấm thập phân
		$this->cumulative_cache[$memo] = round($total);
		return $this->cumulative_cache[$memo];
	}

	/** Chữ ký cấu hình bậc thang, để báo cáo biết dòng cũ chốt bằng bộ số nào. */
	private function tiersSignature($tiers){
		return substr(md5(json_encode($tiers)), 0, 8);
	}

	/** `Q1_2026` — cùng định dạng với khoá cấu hình CommissionSheets. */
	private function quarterId($deposit_date){
		$ts = (int) $deposit_date;
		if($ts <= 0){
			$ts = time();
		}
		return 'Q'.((int) ceil(((int) date('n', $ts)) / 3)).'_'.date('Y', $ts);
	}

	/**
	 * Dựng `roles[]` — DANH SÁCH chứ không phải 1 ô/vai trò: một giao dịch co-sale
	 * hai phòng khác nhau có HAI người cùng vai trò TPKD, mỗi người ăn trên AG dòng mình.
	 */
	private function buildRoles($shares, $billing_information, $realized_total, $year, $tiers, $is_ptdt){
		global $core;
		$out = array();
		foreach(BillingCalc::roles() as $role_key => $_role){
			// Hai loại giao dịch ăn hai bộ hoa hồng KHÁC HẲN nhau, không giao nhau chút nào:
			// nội bộ ăn TPKD/GĐKD, PTĐT ăn CV/TP/GĐ PTĐT. Không chặn ở đây thì một GD PTĐT
			// do nhân viên nội bộ đứng tên sẽ được suy ra cả TPKD lẫn GĐKD từ cây phòng ban
			// và ăn thêm 2 khoản không hề tồn tại — màn quyết toán đã chặn, chỗ này phải chặn theo.
			$is_ptdt_role = ($this->billingRoleKey($role_key) !== '');
			if($is_ptdt_role !== (bool) $is_ptdt){
				continue;
			}
			$sig = $this->tiersSignature(isset($tiers[$role_key]) ? $tiers[$role_key] : array());
			$tier = isset($tiers[$role_key]) ? $tiers[$role_key] : array();
			$col = $this->shareRoleColumn($role_key);
			if($col !== ''){
				foreach($shares as $_share){
					$pid = $this->shareRolePerson($_share, $role_key);
					if($pid <= 0){
						continue;
					}
					// (float) chứ không money(): commission_value là cột double của DB,
					// money() bỏ dấu chấm nên một giá trị lẻ sẽ thành gấp 10/100 lần.
					$base = round((float) $core->get_field($_share, 'commission_value', 0));
					$cumulative = $this->cumulativeFor($role_key, $pid, $year);
					$rate = BillingCalc::resolveRate($tier, $cumulative);
					$out[] = array(
						'key' => $role_key,
						'staff_profile_id' => $pid,
						'billing_sale_id' => (int) $core->get_field($_share, 'billing_sale_id', 0),
						'base' => $base,
						'cumulative' => $cumulative,
						'rate' => $rate,
						'amount' => BillingCalc::roleAmount($base, $rate),
						'tiers_sig' => $sig
					);
				}
				continue;
			}
			// PTĐT: 1 người/vai trò/giao dịch, ăn trên tổng AG cả căn
			$key = $this->billingRoleKey($role_key);
			$pid = (int) $core->get_field($billing_information, $key, 0);
			if($pid <= 0){
				continue;
			}
			$cumulative = $this->cumulativeFor($role_key, $pid, $year);
			$rate = BillingCalc::resolveRate($tier, $cumulative);
			$out[] = array(
				'key' => $role_key,
				'staff_profile_id' => $pid,
				'billing_sale_id' => 0,
				'base' => $realized_total,
				'cumulative' => $cumulative,
				'rate' => $rate,
				'amount' => BillingCalc::roleAmount($realized_total, $rate),
				'tiers_sig' => $sig
			);
		}
		return $out;
	}

	/**
	 * Ghi/cập nhật dòng chốt hoa hồng của 1 giao dịch. Idempotent theo `billing_id`
	 * (bảng đã có UNIQUE KEY uq_billing nên ghi trùng là lỗi bắt được, không âm thầm).
	 *
	 * Trả về commission_id > 0 nếu thành công, 0 nếu hỏng — người gọi PHẢI kiểm.
	 */
	public function upsertFromBilling($oneBilling, $shares, $more_information, $profile_id = 0, $is_ptdt = false){
		global $core, $clsConfiguration;
		// $clsConfiguration không chắc được khởi tạo ở luồng front — cùng khuôn phòng thủ
		// mà BillingImport.php đang dùng, tránh gọi trên null.
		$_cfg = is_object($clsConfiguration) ? $clsConfiguration : new Configuration();
		$billing_id = (int) $core->get_field($oneBilling, 'billing_id', 0);
		if($billing_id <= 0 || empty($shares)){
			return 0;
		}
		// Bất biến Σ tỷ lệ = 100% — cùng ngưỡng mà bước lưu giao dịch đang dùng. Live đang có
		// GD #316 một dòng duy nhất share_ratio=200: không chặn thì AG và mọi gốc bậc thang
		// của giao dịch đó gấp đôi, âm thầm, ngay trong sổ kế toán dùng để trả tiền.
		$sum_ratio = 0;
		foreach($shares as $_s){
			$sum_ratio += BillingCalc::percent(isset($_s['share_ratio']) ? $_s['share_ratio'] : null, 100);
		}
		if(abs($sum_ratio - 100) > 1){
			return 0;
		}
		$deposit_date = (int) $core->get_field($oneBilling, 'deposit_date', 0);
		$year = (int) date('Y', $deposit_date > 0 ? $deposit_date : time());
		$totalgrand = BillingCalc::money($core->get_field($oneBilling, 'totalgrand', 0));
		$r_base = BillingCalc::money($core->get_field($more_information, 'commission_value', 0));
		if($r_base <= 0){
			$r_base = $totalgrand;
		}
		// Bậc thang: lấy cấu hình thật, chưa cấu hình thì dùng bộ mặc định của engine
		$saved = $_cfg->getValue('billing_commission_tiers', '');
		$tiers = !empty($saved) ? json_decode($saved, true) : array();
		if(!is_array($tiers)){
			$tiers = array();
		}
		foreach(BillingCalc::tiersDefault() as $_k => $_v){
			if(empty($tiers[$_k])){
				$tiers[$_k] = $_v;
			}
		}
		// Số từng dòng chia: tính lại bằng ĐÚNG engine mà màn quyết toán dùng, từ số đã lưu
		$inputs = array(
			'totalgrand' => $totalgrand,
			'commission_value' => $r_base,
			'commission' => $core->get_field($more_information, 'commission', 0),
			'total_deduction' => $core->get_field($more_information, 'total_deduction', 0),
			'total_deduction_percent_sales' => $core->get_field($more_information, 'total_deduction_percent_sales', 0),
			'total_deduction_company' => $core->get_field($more_information, 'total_deduction_company', 0),
			'total_deduction_sales' => array_key_exists('total_deduction_sales', (array) $more_information) ? $more_information['total_deduction_sales'] : null
		);
		$rows = array();
		$realized_total = $sales_amount_total = $sales_net_total = 0;
		foreach($shares as $_share){
			// KHÔNG dùng get_field cho share_ratio: nó coi "0" là rỗng nên trả về 100, mà
			// tỷ lệ 0 là trạng thái hợp lệ (sale phụ ăn trọn 100%) ⇒ cả sổ nhân đôi.
			// BillingCalc::percent() đã tự lấy 100 khi giá trị là null/rỗng thật.
			$ratio_raw = isset($_share['share_ratio']) ? $_share['share_ratio'] : null;
			$calc = BillingCalc::compute(array_merge($inputs, array(
				'share_ratio' => $ratio_raw,
				'sales_commission_rate' => $core->get_field($_share, 'sales_commission_rate', 0)
			)));
			$rows[] = array(
				'billing_sale_id' => (int) $core->get_field($_share, 'billing_sale_id', 0),
				// KHÔNG dùng khoá `staff_id`: ở luồng crawl cũ đó là Setting id, không phải profile_id
				'staff_profile_id' => (int) $core->get_field($_share, 'staff_id', 0),
				'seller_name' => (string) $core->get_field($_share, 'seller_name', ''),
				'share_ratio' => BillingCalc::percent($ratio_raw, 100),
				'realized' => $calc['realized'],
				'sales_commission_rate' => BillingCalc::percent($core->get_field($_share, 'sales_commission_rate', 0)),
				'sales_amount' => $calc['sales_amount'],
				'sales_deduct' => $calc['sales_deduct'],
				'sales_net' => $calc['sales_net'],
				'ctv_name' => (string) $core->get_field($_share, 'ctv_name', ''),
				'ctv_rate' => BillingCalc::percent($core->get_field($_share, 'ctv_rate', 0)),
				'ctv_amount' => BillingCalc::money($core->get_field($_share, 'ctv_amount', 0))
			);
			$realized_total += $calc['realized'];
			$sales_amount_total += $calc['sales_amount'];
			$sales_net_total += $calc['sales_net'];
		}
		$payload = array(
			'source' => self::SOURCE,
			'engine' => self::ENGINE,
			// Lấy theo nhận diện của người gọi, KHÔNG đọc lại khoá deal_type: khoá đó chỉ do
			// form bước 1 ghi, giao dịch cũ chưa mở lại lần nào sẽ bị dán nhãn "sale" oan.
			'deal_type' => $is_ptdt ? 'ptdt' : 'sale',
			'settled_date' => (int) $core->get_field($more_information, 'settled_date', time()),
			'settled_by' => (int) $profile_id,
			// Giữ số CHÍNH XÁC ở đây: cột contract_total là `float` (~7 chữ số có nghĩa) nên
			// 2.850.000.000 cất xuống thành 2.849.999.872 — sổ kế toán lệch với giao dịch.
			'totalgrand' => $totalgrand,
			'commission_base' => $r_base,
			'realized_total' => $realized_total,
			'sales_amount_total' => $sales_amount_total,
			'sales_net_total' => $sales_net_total,
			'agency_rate' => BillingCalc::percent($core->get_field($more_information, 'agency_rate', 0)),
			'agency_amount' => BillingCalc::money($core->get_field($more_information, 'agency_amount', 0)),
			'shares' => $rows,
			'roles' => $this->buildRoles($shares, $more_information, $realized_total, $year, $tiers, $is_ptdt)
		);
		$fields = array(
			'billing_id' => $billing_id,
			'project_id' => (int) $core->get_field($oneBilling, 'project_id', 0),
			'stock_code' => (string) $core->get_field($oneBilling, 'stock_code', ''),
			'quarter_id' => $this->quarterId($deposit_date),
			'contract_date' => $deposit_date,
			'contract_total' => $totalgrand,
			'more_information' => json_encode($payload, JSON_UNESCAPED_UNICODE),
			'upd_date' => time(),
			'user_id_update' => (int) $profile_id,
			'is_trash' => 0
		);
		$existing = $this->getOneByBilling($billing_id);
		if(!empty($existing)){
			$commission_id = (int) $existing['commission_id'];
			$this->updateOne($commission_id, $fields);
			return $commission_id;
		}
		$fields['reg_date'] = time();
		$fields['user_id'] = (int) $profile_id;
		// commission_id KHÔNG auto-increment, getMaxId() là MAX+1 không khoá, bảng MyISAM.
		// Hai người quyết toán 2 giao dịch KHÁC nhau cùng lúc sẽ nhận cùng một id và đâm
		// PRIMARY (không phải uq_billing) ⇒ thử lại vài lần trước khi bỏ cuộc.
		for($attempt = 0; $attempt < 3; $attempt++){
			$commission_id = $this->getMaxId();
			$fields[$this->pkey] = $commission_id;
			if($this->insert($fields)){
				return $commission_id;
			}
			// uq_billing chặn: ai đó vừa ghi dòng của CHÍNH giao dịch này ⇒ cập nhật, không bỏ số
			$existing = $this->getOneByBilling($billing_id);
			if(!empty($existing)){
				unset($fields[$this->pkey], $fields['reg_date'], $fields['user_id']);
				$this->updateOne((int) $existing['commission_id'], $fields);
				return (int) $existing['commission_id'];
			}
			// Không phải trùng billing ⇒ trùng id, vòng sau getMaxId() sẽ ra số mới
		}
		return 0;
	}

	/** Đọc dòng theo billing_id — không SELECT *. */
	public function getOneByBilling($billing_id){
		global $dbconn;
		$billing_id = (int) $billing_id;
		if($billing_id <= 0){
			return array();
		}
		$row = $dbconn->GetRow("SELECT `commission_id`, `billing_id`, `more_information`, `is_trash`
			FROM `{$this->tbl}` WHERE `billing_id` = {$billing_id} LIMIT 0,1");
		return empty($row) ? array() : $row;
	}

	/**
	 * Huỷ theo BILLING_ID, không theo commission_id cất trong billing.more_information —
	 * đó chính là chỗ hỏng của Billing::sync_commission (khoá không bao giờ được ghi
	 * nên updateOne(null,…) trả về ngay, huỷ câm).
	 */
	public function cancelByBilling($billing_id, $profile_id = 0){
		$existing = $this->getOneByBilling($billing_id);
		if(empty($existing)){
			return false;
		}
		$payload = json_decode((string) $existing['more_information'], true);
		if(!is_array($payload)){
			$payload = array();
		}
		$payload['canceled_date'] = time();
		$payload['canceled_by'] = (int) $profile_id;
		$this->updateOne((int) $existing['commission_id'], array(
			'is_trash' => 1,
			'more_information' => json_encode($payload, JSON_UNESCAPED_UNICODE),
			'upd_date' => time(),
			'user_id_update' => (int) $profile_id
		));
		return true;
	}
}
