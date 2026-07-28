<?php if (!defined('ABSPATH')) exit('No direct script access allowed');
/**
 * BillingCalc — nơi tính tiền DUY NHẤT của giao dịch.
 *
 * Thuần tính toán: KHÔNG truy vấn DB, không đọc $_POST, không phụ thuộc global.
 * Mọi nơi (form nhập, modal quyết toán, import, báo cáo) phải gọi vào đây thay vì
 * chép lại công thức — chép lại là nguồn gốc của "đường tính đôi" (2 chỗ tính ra 2 số khác nhau).
 *
 * ⚠ ÉP KIỂU KHÁC NHAU THEO TỪNG TRƯỜNG — đây là bẫy đã gây sai 10×:
 *   tiền     → processSmartNumber()  : "3.6" ⇒ 36   (xoá dấu phân cách rồi ép int)
 *   phần trăm→ convertToNumber()     : "3.6" ⇒ 3.6  (giữ thập phân)
 * Live có 118/342 GD dùng % thập phân, nên dùng nhầm hàm là sai tiền hàng loạt.
 *
 * ⚠ ĐỤNG TÊN, đọc kỹ trước khi copy:
 *   billing.more_information['commission_value'] = R = Giá tính hoa hồng — một ĐẦU VÀO.
 *   billing_sale.commission_value                = AG = doanh số sau giảm trừ của TỪNG sale — một KẾT QUẢ.
 *   Hai thứ khác hẳn nhau dù trùng tên cột.
 *
 * Quy ước tiền tệ: làm tròn tới ĐỒNG bằng round(), và chỉ làm tròn ở đây.
 */
class BillingCalc {

	/** % hoa hồng sales thực nhận (AI) mặc định khi để trống. */
	const DEFAULT_SALES_COMMISSION_RATE = 50;
	/**
	 * Bộ vai trò ăn hoa hồng theo bậc thang. KHOÁ TẠI ĐÂY để mọi module dùng chung một bộ key.
	 * Trước đây khai báo trong sub_default.php (phạm vi module) nên module report không nạp được.
	 * Key phải khớp đúng cấu hình đã ship (Configuration `billing_commission_tiers`).
	 */
	public static function roles(){
		return array(
			'TPKD'     => array('label' => 'Trưởng phòng Kinh doanh', 'role_id' => 8586),
			'GD'       => array('label' => 'Giám đốc Kinh doanh',     'role_id' => 48),
			'CV_PTDT'  => array('label' => 'Chuyên viên PTĐT',        'role_id' => 9480),
			'TP_PTDT'  => array('label' => 'Trưởng phòng PTĐT',       'role_id' => 9479),
			'GD_PTDT'  => array('label' => 'Giám đốc PTĐT',           'role_id' => 9478)
		);
	}

	/**
	 * Nhãn vai trò dạng phẳng key => tên. Giữ ĐÚNG chuỗi mà màn cấu hình bậc thang
	 * đang hiển thị, để thay `_billing_commission_roles()` của module home mà không vỡ template.
	 */
	public static function roleLabels(){
		return array(
			'TPKD'    => 'TPKD',
			'GD'      => 'Giám đốc',
			'CV_PTDT' => 'CV PTĐT',
			'TP_PTDT' => 'TP PTĐT',
			'GD_PTDT' => 'Giám đốc PTĐT'
		);
	}

	/**
	 * Bậc thang mặc định (mốc doanh số luỹ kế → tỷ lệ %) khi Configuration chưa có cấu hình.
	 * Chép nguyên bộ số đang chạy ở module home để 2 nơi không lệch nhau.
	 */
	public static function tiersDefault(){
		return array(
			'TPKD'    => array(array('min'=>0,'rate'=>4), array('min'=>520000000,'rate'=>5), array('min'=>1040000000,'rate'=>6), array('min'=>1560000000,'rate'=>7), array('min'=>2080000000,'rate'=>8)),
			'GD'      => array(array('min'=>0,'rate'=>4), array('min'=>1560000000,'rate'=>5), array('min'=>3120000000,'rate'=>6), array('min'=>6420000000,'rate'=>7)),
			'CV_PTDT' => array(array('min'=>0,'rate'=>1.5), array('min'=>800000000,'rate'=>2), array('min'=>2500000000,'rate'=>2.5)),
			'TP_PTDT' => array(array('min'=>0,'rate'=>2), array('min'=>1000000000,'rate'=>2.5), array('min'=>3000000000,'rate'=>3)),
			'GD_PTDT' => array(array('min'=>0,'rate'=>1), array('min'=>2000000000,'rate'=>1.5), array('min'=>4000000000,'rate'=>2))
		);
	}

	/**
	 * Tra tỷ lệ % theo bậc thang: lấy bậc có `min` lớn nhất mà doanh số luỹ kế còn với tới.
	 * $tiers là mảng [['min'=>..,'rate'=>..], ...] KHÔNG bắt buộc sắp xếp sẵn.
	 */
	public static function resolveRate($tiers, $cumulative){
		if(!is_array($tiers) || empty($tiers)){
			return 0;
		}
		$cumulative = self::money($cumulative);
		$rate = 0;
		$best = null;
		foreach($tiers as $tier){
			if(!isset($tier['min'])){
				continue;
			}
			$min = self::money($tier['min']);
			if($cumulative < $min){
				continue;
			}
			if($best === null || $min >= $best){
				$best = $min;
				$rate = self::percent(isset($tier['rate']) ? $tier['rate'] : 0);
			}
		}
		return $rate;
	}

	/** Tiền: bỏ dấu phân cách rồi ép nguyên. Dùng cho MỌI trường tiền. */
	public static function money($value, $default = 0){
		if($value === null || $value === '' || $value === false){
			return $default;
		}
		$value = str_replace(array('₫', ' ', ';', '(', ')'), '', (string) $value);
		$value = str_replace(',', '.', $value);
		$value = str_replace('.', '', $value);
		return (int) $value;
	}

	/** Phần trăm: giữ phần thập phân. Dùng cho MỌI trường %. */
	public static function percent($value, $default = 0){
		if($value === null || $value === '' || $value === false){
			return $default;
		}
		$value = str_replace(array('₫', '%', ' ', ';', '(', ')'), '', (string) $value);
		$value = str_replace(',', '.', $value);
		return (float) $value;
	}

	/**
	 * Tính toàn bộ số tiền của MỘT DÒNG SALE (một phần chia của giao dịch).
	 *
	 * Vào (chấp nhận chuỗi thô từ form/sheet, tự ép kiểu):
	 *   commission_value               R  — Giá tính hoa hồng (tiền). Rỗng thì lấy totalgrand.
	 *   commission                     T  — % hoa hồng (%)
	 *   share_ratio                    U  — % chia cho sale này (%). Rỗng = 100.
	 *   totalgrand                     P  — Giá trị bán (tiền)
	 *   total_deduction                AB — Tổng tiền giảm trừ của CẢ CĂN (tiền)
	 *   total_deduction_percent_sales  AC — % phần sales chịu (%)
	 *   total_deduction_sales          AD — tiền sales chịu; null = tự tính AB×AC, khác null = SỬA ĐÈ
	 *   total_deduction_company        AE — công ty chịu (tiền)
	 *   total_deduction_company_commission AF — null = tự tính AB−AD−AE, khác null = SỬA ĐÈ
	 *   sales_commission_rate          AI — % sales thực nhận (%). Rỗng = 50.
	 *
	 * Ra:
	 *   share_value            Q  = P × U
	 *   deduction_sales        AD (cấp CĂN)
	 *   deduction_company_commission AF (cấp CĂN)
	 *   deduction_share        phần AF mà DÒNG SALE này gánh = AF × U
	 *   realized               AG = AH = R×U×T − (AF×U)   ← doanh số tính hoa hồng của sale này
	 *   sales_amount           AJ = AG × AI
	 *   sales_deduct           AL = AD × U
	 *   sales_net              AM = AJ − AL
	 *
	 * Vì sao AB/AD/AE/AF nhân thêm U: các số này là của CẢ CĂN, còn kết quả trả về là của
	 * MỘT sale. Không chia theo tỷ lệ thì mỗi sale trong một GD co-sale đều gánh nguyên
	 * phần giảm trừ của cả căn ⇒ trừ thừa nhiều lần.
	 */
	public static function compute($in){
		$get = function($key) use ($in){
			return isset($in[$key]) ? $in[$key] : null;
		};

		$P  = self::money($get('totalgrand'));
		$R  = self::money($get('commission_value'));
		if($R <= 0){
			$R = $P; // GD chưa nhập giá tính hoa hồng thì lấy giá trị bán
		}
		$T  = self::percent($get('commission'));
		$U  = self::percent($get('share_ratio'), 100);
		$AB = self::money($get('total_deduction'));
		$AC = self::percent($get('total_deduction_percent_sales'));
		$AE = self::money($get('total_deduction_company'));
		$AI = self::percent($get('sales_commission_rate'));
		if($AI <= 0){
			$AI = self::DEFAULT_SALES_COMMISSION_RATE;
		}

		// AD: mặc định AB×AC, nhưng cho sửa đè khi người nhập truyền vào giá trị khác null
		$AD = $get('total_deduction_sales');
		$AD = ($AD === null || $AD === '') ? ($AB * $AC / 100) : self::money($AD);

		// AF: mặc định AB−AD−AE, cũng cho sửa đè
		$AF = $get('total_deduction_company_commission');
		$AF = ($AF === null || $AF === '') ? ($AB - $AD - $AE) : self::money($AF);

		$ratio = $U / 100;
		$deduction_share = $AF * $ratio;              // phần giảm trừ dòng sale này gánh
		$realized = ($R * $ratio * $T / 100) - $deduction_share;
		$sales_amount = $realized * $AI / 100;
		$sales_deduct = $AD * $ratio;

		return array(
			'share_value'                 => round($P * $ratio),
			'deduction_sales'             => round($AD),
			'deduction_company_commission' => round($AF),
			'deduction_share'             => round($deduction_share),
			'realized'                    => round($realized),
			'sales_amount'                => round($sales_amount),
			'sales_deduct'                => round($sales_deduct),
			'sales_net'                   => round($sales_amount - $sales_deduct)
		);
	}

	/**
	 * Tiền hoa hồng của một vai trò quản lý = doanh số sau giảm trừ × tỷ lệ bậc thang.
	 * $rate là % (vd 0.35 nghĩa là 0,35%), luôn ép bằng percent() để không dính bẫy "3.6"→36.
	 */
	public static function roleAmount($realized, $rate){
		return round(self::money($realized) * self::percent($rate) / 100);
	}
}
