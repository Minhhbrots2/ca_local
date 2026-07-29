<?php if (!defined('ABSPATH')) exit('No direct script access allowed');
/*======================================================================*\
|| #################################################################### ||
|| # The Classes configurations of the MaxxCMS                        # ||
|| # MaxxCMS 6.0.0 code by Bui Van Thiem (vanthiembui.it@gmail.com)   # ||
|| # ---------------------------------------------------------------- # ||
|| # All PHP code in this file is ©2007-2014 MaxCMS.                  # ||
|| # This file may not be redistributed in whole or significant part. # ||
|| # ---------------- MaxxCMS IS NOT FREE SOFTWARE ----------------   # ||
|| #################################################################### ||
\*======================================================================*/
/**
 * Khai báo schema "Cấu hình hệ thống" — NGUỒN CHÂN LÝ DUY NHẤT.
 *
 * Thêm/bớt/đổi field chỉ sửa file này: KHÔNG migration, KHÔNG sửa form,
 * KHÔNG sửa .tpl. Form admin và mọi getter đều đọc lại từ đây.
 *
 * Cấu trúc 3 tầng:
 *   '<group_key>' => [
 *       'label'       => tiêu đề nhóm                     (bắt buộc)
 *       'description' => mô tả cột trái                   (bắt buộc)
 *       'slug'        => id neo CỐ ĐỊNH, độc lập label (đổi tên nhóm không gãy anchor)
 *       'icon'        => tên icon FontAwesome cạnh tiêu đề
 *       'order'       => số nguyên sắp xếp thứ tự nhóm trên trang
 *       'permission'  => key quyền; thiếu quyền thì ẩn nhóm LẪN field và bỏ qua khi POST
 *       'hidden'      => true → không render nhưng giữ nguyên dữ liệu trong DB
 *       'value'       => [ '<field_key>' => [ ... ] ]
 *   ]
 *
 * Field option:
 *   type        text|textarea|editor|images|files|select|select2|color|number|checkbox|time
 *               → chỉ quyết định WIDGET, mọi giá trị đều lưu dạng TEXT
 *   label       nhãn field                       required    bắt input không được rỗng
 *   default     giá trị mặc định khi chưa có row  placeholder gợi ý trong ô nhập
 *   attention   ghi chú màu đỏ                    help        chú thích xám dưới field
 *   raw         field chứa HTML/script thô        rows        số dòng cho textarea
 *   title/link  chữ + url link hướng dẫn
 *   select      [k => v], bắt buộc với select/select2
 *   source      tên nguồn option động do controller nạp vào 'select' (không query trong .tpl)
 *   json        giá trị là mảng → lưu json_encode, đọc ra json_decode
 *   multiple    select nhận nhiều giá trị
 *
 * Khóa lưu trữ là chuỗi phẳng, dùng đúng key đang có trên live (không prefix)
 * nên module này thay thẳng màn hình cũ mà không cần migrate dữ liệu.
 *
 * KHÔNG dùng typed property / return type: host chạy PHP 7 nhưng không rõ bản
 * minor, và toàn bộ codebase này không có chỗ nào dùng cú pháp 7.4+.
 */
class ConfigDeclaration {
	/** @var array|null Schema là hằng trong 1 request — dựng 1 lần rồi tái dùng. */
	private static $system = null;

	/** @return array */
	public function system(){
		if(self::$system === null){
			self::$system = self::declaration();
		}
		return self::$system;
	}

	/**
	 * Danh sách key hợp lệ của toàn schema (kể cả key phụ của field ghép đôi).
	 * Dùng để chặn request giả gửi key không khai báo.
	 * @return array
	 */
	public function keywords(){
		$keywords = array();
		foreach($this->system() as $group){
			if(empty($group['value'])){
				continue;
			}
			foreach($group['value'] as $keyword => $field){
				$keywords[] = $keyword;
				if(!empty($field['pair_keyword'])){
					$keywords[] = $field['pair_keyword'];
				}
			}
		}
		return $keywords;
	}

	/**
	 * Nhóm chứa key này — cho Configuration::getGroup() và tra ngược khi debug.
	 * @return string
	 */
	public function findGroup($keyword){
		foreach($this->system() as $groupKey => $group){
			if(isset($group['value'][$keyword])){
				return $groupKey;
			}
		}
		return '';
	}

	/**
	 * Chuẩn hóa danh sách nhóm cho view: lọc permission/hidden, sắp theo order,
	 * tính sẵn slug, nạp option động. .tpl chỉ còn foreach.
	 *
	 * @param array $sources ['<source_name>' => [k => v]] — option động do controller nạp
	 * @return array
	 */
	public function normalize($sources = array()){
		$groups = array();
		$order = 0;
		foreach($this->system() as $groupKey => $group){
			$order++;
			if(!empty($group['hidden'])){
				continue;
			}
			if(!$this->allow($group)){
				continue;
			}
			$fields = $this->normalizeFields($group, $sources);
			if(empty($fields)){
				continue;
			}
			$icon = isset($group['icon']) ? $group['icon'] : 'cog';
			$groups[] = array(
				'key'         => $groupKey,
				'label'       => isset($group['label']) ? $group['label'] : $groupKey,
				'description' => isset($group['description']) ? $group['description'] : '',
				'slug'        => $this->slug($groupKey, $group),
				'icon'        => $icon,
				// Dựng sẵn class icon để .tpl chỉ truyền biến vào makeIcon(),
				// không phải ghép chuỗi bằng modifier trong template.
				'icon_class'  => $icon.' mr-5',
				'order'       => isset($group['order']) ? (int) $group['order'] : $order * 10,
				'fields'      => $fields
			);
		}
		usort($groups, array($this, 'compareOrder'));
		return $groups;
	}

	/**
	 * Gom giá trị POST theo whitelist schema → mảng phẳng cho Configuration::saveBatch().
	 * Field không khai báo bị bỏ qua; field thuộc nhóm không đủ quyền không có mặt
	 * trong $groups nên cũng không thể bị ghi đè bằng request giả.
	 *
	 * @param array $groups Kết quả normalize()
	 * @param array $posted $_POST['config'] thô — KHÔNG lọc trước, hàm này tự lọc
	 * @return array
	 */
	public function collect($groups, $posted){
		$data = array();
		if(empty($groups) || !is_array($posted)){
			return $data;
		}
		foreach($groups as $group){
			foreach($group['fields'] as $field){
				$this->collectField($field, $posted, $data);
			}
		}
		return $data;
	}

	/** Gom 1 field (và key phụ nếu là field ghép đôi) vào $data. */
	private function collectField($field, $posted, &$data){
		$keywords = array($field['keyword']);
		if(!empty($field['pair_keyword'])){
			$keywords[] = $field['pair_keyword'];
		}
		foreach($keywords as $keyword){
			if(!array_key_exists($keyword, $posted)){
				// Thiếu field trong POST (JS lỗi, input disabled) → giữ nguyên giá trị cũ,
				// tuyệt đối không ghi rỗng đè lên dữ liệu đang có.
				continue;
			}
			$value = $posted[$keyword];
			if(!empty($field['json'])){
				$data[$keyword] = json_encode(self::cleanList($value), JSON_UNESCAPED_UNICODE);
				continue;
			}
			if(is_array($value)){
				$value = implode(',', $value);
			}
			$data[$keyword] = (string) $value;
		}
	}

	/**
	 * Bỏ phần tử rỗng khỏi giá trị dạng mảng.
	 * Select rỗng và ô đánh dấu ẩn (giúp nhận biết "người dùng đã bỏ chọn hết")
	 * đều gửi lên chuỗi rỗng — không lưu chúng vào JSON.
	 * @return array
	 */
	private static function cleanList($value){
		if(!is_array($value)){
			return array();
		}
		$clean = array();
		foreach($value as $key => $item){
			if(is_array($item)){
				$item = self::cleanList($item);
			}
			if($item === '' || $item === null || $item === array()){
				continue;
			}
			if(is_int($key)){
				$clean[] = $item;
				continue;
			}
			$clean[$key] = $item;
		}
		return $clean;
	}

	/**
	 * Chuẩn hóa field trong 1 nhóm: gắn keyword, nạp option động, bỏ field rỗng nguồn.
	 * @return array
	 */
	private function normalizeFields($group, $sources){
		$fields = array();
		if(empty($group['value'])){
			return $fields;
		}
		foreach($group['value'] as $keyword => $field){
			$field['keyword'] = $keyword;
			$field['type'] = isset($field['type']) ? $field['type'] : 'text';
			$field['label'] = isset($field['label']) ? $field['label'] : $keyword;
			// Type tự dựng cả khối (nhãn nằm cạnh input, hoặc nhiều dòng) →
			// view không bọc thêm form-group chuẩn quanh nó.
			$field['bare'] = self::isBare($field['type']);
			if(!empty($field['source'])){
				$field['select'] = isset($sources[$field['source']]) ? $sources[$field['source']] : array();
			}
			if(self::needSelect($field['type']) && empty($field['select'])){
				// Không có option nào để chọn → ẩn hẳn, giống {if !empty($list_block_types)} của bản cũ.
				continue;
			}
			$fields[] = $field;
		}
		return $fields;
	}

	/** @return bool */
	private static function needSelect($type){
		return in_array($type, array('select', 'select2', 'stock_support'), true);
	}

	/** @return bool */
	private static function isBare($type){
		return in_array($type, array('checkbox', 'stock_support'), true);
	}

	/**
	 * Slug neo tab: ưu tiên khai báo, thiếu thì lấy chính group key.
	 * @return string
	 */
	private function slug($groupKey, $group){
		$slug = !empty($group['slug']) ? $group['slug'] : $groupKey;
		$slug = strtolower(preg_replace('/[^a-zA-Z0-9_-]+/', '-', $slug));
		return 'cfg-'.trim($slug, '-');
	}

	/** @return int */
	private function compareOrder($a, $b){
		if($a['order'] === $b['order']){
			return 0;
		}
		return $a['order'] < $b['order'] ? -1 : 1;
	}

	/**
	 * Quyền xem nhóm. Không khai 'permission' nghĩa là ai vào được trang thì xem được.
	 * @return bool
	 */
	private function allow($group){
		global $clsISO;
		if(empty($group['permission'])){
			return true;
		}
		if(!is_object($clsISO)){
			return false;
		}
		if($group['permission'] === 'dev'){
			return (int) $clsISO->_DEV() === 1;
		}
		return (int) $clsISO->checkPermission($group['permission']) === 1;
	}

	/**
	 * Khai báo thật. Chỉ sửa hàm này khi thêm/bớt cấu hình.
	 * Key giữ nguyên như dữ liệu đang chạy trên live để không phải migrate.
	 * @return array
	 */
	private static function declaration(){
		return array(
			'general' => array(
				'label'       => 'Cấu hình chung',
				'description' => 'Thông tin website được dùng để hiển thị và để khách hàng liên hệ đến bạn.',
				'slug'        => 'general',
				'icon'        => 'cog',
				'order'       => 10,
				'value'       => array(
					'site_name' => array(
						'type'        => 'text',
						'label'       => 'Tên website',
						'placeholder' => 'Nhập tên website',
						'required'    => true
					),
					'meta_title' => array(
						'type'        => 'text',
						'label'       => 'Tiêu đề trang chủ',
						'placeholder' => 'Nhập tiêu đề trang chủ',
						'required'    => true
					),
					'meta_description' => array(
						'type'        => 'textarea',
						'label'       => 'Mô tả trang chủ',
						'placeholder' => 'Nhập một mô tả để nâng cao xếp hạng trên công cụ tìm kiếm như Google.',
						'required'    => true,
						'rows'        => 2
					),
					'meta_keyword' => array(
						'type'        => 'textarea',
						'label'       => 'Thẻ từ khóa',
						'placeholder' => 'Nhập một danh sách từ khóa nâng cao xếp hạng trên công cụ tìm kiếm như Google',
						'rows'        => 2
					),
					'mail_it' => array(
						'type'        => 'text',
						'label'       => 'Email phòng công nghệ',
						'placeholder' => 'Chọn hiển thị email phòng công nghệ màn login'
					)
				)
			),
			'css' => array(
				'label'       => 'Cấu hình giao diện',
				'description' => 'Cấu hình giao diện web',
				'slug'        => 'css',
				'icon'        => 'check-circle',
				'order'       => 20,
				'value'       => array(
					'font' => array(
						'type'   => 'select',
						'label'  => 'Font chữ toàn bộ trang web',
						'select' => array(
							'Be Vietnam Pro' => 'Be Vietnam Pro'
						)
					)
				)
			),
			'target' => array(
				'label'       => 'Cấu hình mục tiêu',
				'description' => 'Cấu hình điểm số cá nhân và toàn công ty.',
				'slug'        => 'target',
				'icon'        => 'check-circle',
				'order'       => 20,
				'value'       => array(
					'total_transactions' => array(
						'type'  => 'number',
						'label' => 'Tổng giao dịch toàn công ty'
					),
					'total_score' => array(
						'type'  => 'number',
						'label' => 'Mục tiêu điểm số cá nhân'
					)
				)
			),
			'robots' => array(
				'label'       => 'Meta Robot',
				'description' => 'Meta Robot cho phép Google bot thu thập nội dung website của bạn.',
				'slug'        => 'robots',
				'icon'        => 'search',
				'order'       => 30,
				'value'       => array(
					'robots' => array(
						'type'  => 'text',
						'label' => 'Meta Robot'
					),
					'googlebot' => array(
						'type'  => 'text',
						'label' => 'Googlebot'
					)
				)
			),
			'notify' => array(
				'label'       => 'Thông báo Zalo',
				'description' => 'Nhận thông báo Zalo khi có yêu cầu mua gói data khách hàng.',
				'slug'        => 'notify',
				'icon'        => 'cloud',
				'order'       => 40,
				'value'       => array(
					'notify_zalo_recipient' => array(
						'type'        => 'select2',
						'label'       => 'Thành viên nhận thông báo',
						'placeholder' => 'Chọn nhân viên',
						'multiple'    => true,
						'json'        => true,
						'source'      => 'profile'
					)
				)
			),
			'tracking' => array(
				'label'       => 'Tích hợp & Mã theo dõi',
				'description' => 'Mã nhúng của bên thứ ba: Google, Facebook, LiveChat. Dán nguyên đoạn script được cấp.',
				'slug'        => 'tracking',
				'icon'        => 'line-chart',
				'order'       => 50,
				'value'       => array(
					'google_verity_key' => array(
						'type'  => 'text',
						'label' => 'Mã Google Verify Key',
						'help'  => '<meta name="google-site-verification" value="google_verity_key" />'
					),
					'google_analytic' => array(
						'type'        => 'textarea',
						'label'       => 'Script Google Analytics',
						'placeholder' => 'Nhập mã Google Analytics tại đây',
						'rows'        => 3,
						'raw'         => true
					),
					'facebook_pixel' => array(
						'type'        => 'textarea',
						'label'       => 'Facebook Pixel',
						'placeholder' => 'Nhập Facebook Pixel tại đây',
						'rows'        => 3,
						'raw'         => true
					),
					'livechat' => array(
						'type'        => 'textarea',
						'label'       => 'Script LiveChat',
						'placeholder' => 'Nhập Script LiveChat, vd: Subiz, Talk.to, Zalo, Facebook Messenger',
						'rows'        => 3,
						'raw'         => true
					)
				)
			),
			'payment' => array(
				'label'       => 'Thanh toán & Tín dụng',
				'description' => 'Liên hệ tín dụng, tài khoản hỗ trợ MOC và tài khoản nhận thanh toán nâng cấp gói.',
				'slug'        => 'payment',
				'icon'        => 'credit-card',
				'order'       => 60,
				'value'       => array(
					'zalo_credit' => array(
						'type'  => 'text',
						'label' => 'Zalo tín dụng'
					),
					'phone_credit' => array(
						'type'  => 'text',
						'label' => 'Điện thoại tín dụng'
					),
					'stock_support_configs' => array(
						'type'         => 'stock_support',
						'label'        => 'Tài khoản hỗ trợ MOC',
						'placeholder'  => 'Gõ tên [OR] email để tìm kiếm',
						'json'         => true,
						'source'       => 'block_type',
						'pair_keyword' => 'stock_support_extra_configs'
					),
					'bank_name_MOC' => array(
						'type'  => 'text',
						'label' => 'Tên ngân hàng'
					),
					'bank_number_MOC' => array(
						'type'  => 'number',
						'label' => 'Tài khoản ngân hàng'
					),
					'bank_user_name_MOC' => array(
						'type'  => 'text',
						'label' => 'Tên chủ tài khoản'
					),
					'email_support_MOC' => array(
						'type'  => 'text',
						'label' => 'Email hỗ trợ'
					),
					'phone_support_MOC' => array(
						'type'  => 'text',
						'label' => 'Điện thoại hỗ trợ'
					)
				)
			),
			'theme' => array(
				'label'       => 'Giao diện',
				'description' => 'Lựa chọn giao diện phù hợp cho website.',
				'slug'        => 'theme',
				'icon'        => 'list',
				'order'       => 70,
				'permission'  => 'dev',
				'value'       => array(
					'SiteTemplate' => array(
						'type'   => 'select',
						'label'  => 'Giao diện đang sử dụng',
						'source' => 'app_template'
					)
				)
			),
			'worktime' => array(
				'label'       => 'Thời gian cập nhật bảng hàng',
				'description' => 'Khung giờ cho phép cập nhật bảng hàng trong ngày.',
				'slug'        => 'worktime',
				'icon'        => 'bars',
				'order'       => 80,
				'hidden'      => true,
				'value'       => array(
					'morning_start' => array(
						'type'  => 'time',
						'label' => 'Buổi sáng — bắt đầu'
					),
					'morning_end' => array(
						'type'  => 'time',
						'label' => 'Buổi sáng — kết thúc'
					),
					'afternoon_start' => array(
						'type'  => 'time',
						'label' => 'Buổi chiều — bắt đầu'
					),
					'afternoon_end' => array(
						'type'  => 'time',
						'label' => 'Buổi chiều — kết thúc'
					)
				)
			)
		);
	}
}
?>
