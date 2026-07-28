<?php
	 ini_set('display_errors', '0');
	 ini_set('display_startup_errors', '0');
	 error_reporting(E_ALL);
	ini_set('memory_limit', '5048M');
	define('DS', DIRECTORY_SEPARATOR);
	define('ABSPATH',$_SERVER['DOCUMENT_ROOT']);
	define('ROOTPATH', $_SERVER['DOCUMENT_ROOT']);
	define("DIR_INCLUDES", ROOTPATH."/core");
	define("DIR_MODELS", ROOTPATH."/models");
	define("DIR_ADODB", DIR_INCLUDES."/adodb5");
	/** Required Config */
	require(ABSPATH.DS.'init.php');
	require(ABSPATH.DS.'setting.php');
	define("DIR_LANG", PCMS_DIR."/lang");
	if(!defined('LANG_DEFAULT')) 
		define("LANG_DEFAULT",'vn');
	/** Debugging */
	define("SMARTY_DEBUG", 	false);//debug or not
	define("COMPILE_CHECK", false);//compile check
	define("ADODB_DEBUG", 	false);//debug or not
	define("STOP_APP_IF_ERROR", 0);//stop if error happen 0: no, 1: yes
	/** DriverDatabase */
	require_once(DIR_ADODB."/adodb.inc.php");
	if(defined('ADODB_CACHED') && ADODB_CACHED==1){
		$ADODB_CACHE_DIR = DIR_CACHE_ADODB;
		$GLOBALS['ADODB_CACHE_DIR'] = DIR_CACHE_ADODB;
		$dbconn =& ADONewConnection(DB_TYPE);
		$dbconn->debug = ADODB_DEBUG;
		$dbconn->Connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		$dbconn->cacheSecs = ADODB_CACHED_TIME;
		$dbconn->setFetchMode(ADODB_FETCH_ASSOC);
	} else {
		$dbconn =& ADONewConnection(DB_TYPE);
		$dbconn->debug = ADODB_DEBUG;
		$dbconn->Connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		$dbconn->setFetchMode(ADODB_FETCH_ASSOC);
	}
	/** Core Requirement */
	require_once DIR_COMMON."/DbBasic.php";
	require_once DIR_COMMON."/App.php";
	//require_once DIR_COMMON."/Core.php";
	require_once DIR_COMMON."/Module.php";
	require_once DIR_COMMON."/Download.php";
	require_once DIR_COMMON."/Upload.php";
	require_once DIR_COMMON."/Config.php";
	require_once DIR_INCLUDES."/curl/vendor/autoload.php";
	require_once DIR_INCLUDES."/carbon/vendor/autoload.php";
	/** ClassRequirement */
	if(function_exists('spl_autoload_register')){
		function autoload($model){
			if(file_exists(DIR_MODELS.DS.$model.'.php')){
				require_once(DIR_MODELS.DS.$model.'.php');
			} else if(file_exists(DIR_MODELS.'/class.'.$model.'.php')){
				require_once(DIR_MODELS.'/class.'.$model.'.php');
			}
		}
		spl_autoload_register('autoload');
	}
	/** End ClassRequirement */	
	/** Library Requirement */
	if (is_dir(DIR_LIB)){
		$customLibArray = array();
		if ($dh = opendir(DIR_LIB)) {
			while (($file = readdir($dh)) !== false) {
				if (substr($file, -3)=='php')
				array_push($customLibArray, $file);
			}
			closedir($dh);
		}
		if(!empty($customLibArray)){
			foreach ($customLibArray as $customLib){
				require_once(DIR_LIB."/".$customLib);
			}
		}
	}
	global $profile_id;
	$profile_id = 0;
	/** End ClassRequirement */
	$clsISO = new ISO();
	$clsProperty = new Property();
	$clsProfile = new Profile();
	$clsLogCrawl = new LogCrawl();
	$clsCrawl = new Crawl();
	$clsCrawlLocal = new CrawlLocal();
	$clsStockLog = new StockLog();
	$clsStock = new Stock();
	$clsStockMeta = new StockMeta();
    $clsStockAgent = new StockAgent();
    $clsTmpStockAgent = new TmpStockAgent();
	$clsConfiguration = new Configuration();
	$cachedFile = DIR_CACHE_JSON.'/crawl/cache_agency_cronjob_highfloor.json';
	$cachedFileLog = DIR_CACHE_JSON.'/crawl/cache_agency_log_highfloor.json';
	###
	$decoder = new Webmozart\Json\JsonDecoder();		
	$encoder = new Webmozart\Json\JsonEncoder();
	if(file_exists($cachedFile)){
		$lstCache = $decoder->decodeFile($cachedFile);
	}
	if(file_exists($cachedFileLog)){
		$lstCacheLog = $decoder->decodeFile($cachedFileLog);
	}
	$apiresults = array(
		'error' => 1,
		'result' => 'error',
		'message' => 'Error'
	);
//=============================
	$cond = "`property_type`='_AGENCY' AND `is_crawl`='1'";	
//	$cond .= " AND `property_id`='176'";	
	$lstAgency = $clsProperty->getAll($cond,$clsProperty->pkey.",more_information");
	$lstCrawl = $crawl_first = $crawl_second = $crawl = [];
	$stock_type = _BLOCK_TYPE_HIGHLEVEL_SALE; 
	
	/*giá min max*/
	$field_config_price = $clsConfiguration->getValue('field_config_price');
	$field_config_price = $clsISO->to_array_json($field_config_price);
	$arr_price_min_max = [];
	if(!empty($field_config_price)) {
		foreach ($field_config_price as $key => $val) {
			if($val["stock_type"] == $stock_type) {
				$arr_price_min_max[$val["project_id"]][$val["block_id"]] = $val;
			}			
		}
	}
	/*end giá min max*/
	$cachedFileConfig = DIR_CACHE_JSON.'/crawl/config_column_highfloor.json';
	$arr_column_data = array();
	if(file_exists($cachedFileConfig)){
		$arr_column_data = $decoder->decodeFile($cachedFileConfig);			
	}
	$config_column_data = json_encode($arr_column_data,JSON_UNESCAPED_UNICODE);
	$arr_status_id = [];
//=============================
	
	$arr_status_id = [];
	if(!empty($lstAgency)) {
		$is_crawl = $i = 0;
		$total_cronjob = 2;
		$arr_crawl = $crawl_tmp = [];
		foreach ($lstAgency as $key => $val) {
			$more_information = $val['more_information'];
			$more_information = $clsISO->to_array_json($more_information);
			$block_crawl = !empty($more_information["block_crawl"]) ? $more_information["block_crawl"] : array();
			$block_agency_crawl = !empty($lstCache[$val[$clsProperty->pkey]]) ? $lstCache[$val[$clsProperty->pkey]] : array();
			if(isset($more_information['stock_status_id']) && !empty($more_information['stock_status_id'])){
				$arr_status_id[$val[$clsProperty->pkey]] = $more_information['stock_status_id'];
			}
			if(!empty($block_crawl)) {
				foreach ($block_crawl as $block_id => $v_cr) {
					if(!empty($v_cr['is_crawl']) && !empty($v_cr["sheet_name"]) && !empty($v_cr["sheetID"])) {
						if(!isset($arr_cache_building[$block_id])) {
							$arr_cache_building[$block_id] = $clsProperty->getAll("`property_type`='_BUILDING' AND `for_id`='{$block_id}'",$clsProperty->pkey.",property_code,more_information");
						}
						$lstBuilding = $arr_cache_building[$block_id];
						$ranges = explode("|",$v_cr["sheet_name"]);
						
						$is_stock_point = !empty($v_cr["is_stock_point"]) ? $v_cr["is_stock_point"] : "";
						if($i < $total_cronjob) {
							$crawl_tmp[] = [
								"agency_id"	=>	$val[$clsProperty->pkey],
								"target_id"	=>	$block_id,
								"ranges"	=>	$ranges,
								"spreadsheetId"	=>	$v_cr["sheetID"],
								"oneAgency"	=>	$val,
								"config_column_data"	=>	$config_column_data,
								"lstBuilding"	=>	json_encode($lstBuilding,JSON_UNESCAPED_UNICODE),
							];
						}
						if(empty($block_agency_crawl) || (!empty($block_agency_crawl) && !$clsISO->checkItemInArray($block_id,$block_agency_crawl))) {	
							$crawl = [
								"agency_id"	=>	$val[$clsProperty->pkey],
								"target_id"	=>	$block_id,
								"ranges"	=>	$ranges,
								"spreadsheetId"	=>	$v_cr["sheetID"],
								"oneAgency"	=>	$val,
								"config_column_data"	=>	$config_column_data,
								"lstBuilding"	=>	json_encode($lstBuilding,JSON_UNESCAPED_UNICODE),
							];
							++$is_crawl;
							if($is_crawl <= $total_cronjob) {								
								$arr_crawl[] = $crawl;
							}							
							unset($crawl);
						}
						++$i;
						unset($is_stock_point);
					}
				}
			}
			if($is_crawl == $total_cronjob) {
				break;
			}
		}
	}
	if(empty($arr_crawl)) {
		$arr_crawl = $crawl_tmp;
		$lstCache = array();
		foreach ($arr_crawl as $key => $val) {
			if(!$clsISO->checkItemInArray($val["target_id"],$lstCache[$val['agency_id']])) {
				$lstCache[$val['agency_id']][] = $val['target_id'];
			}			
		}	
	}else{ 	
		foreach ($arr_crawl as $key => $val) {
			if(!$clsISO->checkItemInArray($val["target_id"],$lstCache[$val['agency_id']])) {
				$lstCache[$val['agency_id']][] = $val['target_id'];
			}
		}		
	}	
	$encoder->encodeFile($lstCache, $cachedFile);
	if(!empty($arr_crawl)) {
		foreach ($arr_crawl as $key => $crawl) {
//			=========================
			$target_id = $crawl["target_id"];
			$agency_id = $crawl["agency_id"];
			$spreadsheetId = $crawl["spreadsheetId"];
			$ranges = $crawl["ranges"];
			$is_stock_point = $crawl["is_stock_point"];
			//var_dump($spreadsheetId,$ranges,$target_id,$agency_id,$stock_type);die;
			$res = $clsCrawlLocal->getDataNew($spreadsheetId,$ranges,$target_id,$agency_id,$stock_type);
			if (empty($res["result"]) || empty($res["tblData"])) {
				$clsLogCrawl->log($agency_id, $target_id, [
					"title_log"   => 'File Google Sheet đã bị thay đổi hoặc lỗi đọc dữ liệu',
					"type"        => 1,
					"result_type" => "change_field",
				], $stock_type);
				echo json_encode(['result' => false, 'msg' => 'File Google Sheet đã bị thay đổi. Hãy cập nhật lại cấu hình']);
				die();
			}

			// -------------------------------------------------------------------------
			// 4. CHUẨN BỊ DỮ LIỆU (MAPPING & FILTERING)
			// -------------------------------------------------------------------------
			$arr_data = $res["tblData"];
			$arr_data_code = [];
			$arr_cdt_not_update = []; // Logic custom giữ nguyên của bạn

			foreach ($arr_data as $val) {
				$ms_code = $val['ms_code'] ?? '';
				if (!empty($ms_code) && preg_match(REGEX_MS_CODE, $ms_code)) {
					$ms_code_clean = $clsCrawlLocal->getCodeNotTemplate($ms_code);
					if (!$clsISO->checkItemInArray($ms_code_clean, $arr_cdt_not_update)) {
						$arr_data_code[$ms_code_clean] = $val;
					}
				}
			}

			$arr_ms_code = array_keys($arr_data_code);
			$str_code_in = implode("','", $arr_ms_code);

			// Truy vấn Stock hiện có trong DB
			$list_agency_stocks = $clsStock->getAll("`stock_type`='{$stock_type}' AND `block_id`='{$target_id}' 
				AND (`agency_id`<>'"._AGENCY_FH_ID."' OR (`agency_id` = '"._AGENCY_FH_ID."' AND `status_id`='"._STOCK_STATUS_SOLD_ID."')) 
				AND `mscode` IN ('".$str_code_in."')");
			$arr_stock_code_not_in = $arr_stock_id_not_in = $arr_code_old = [];

			if (!empty($list_agency_stocks)) {
				foreach ($list_agency_stocks as $oneStock) {
					$ms_code_raw = $oneStock["ms_code"];
					if (!$clsISO->checkItemInArray($ms_code_raw, $lstStock_sold)) {
						$arr_stock_id_not_in[] = $oneStock[$clsStock->pkey];
						$arr_stock_code_not_in[] = $ms_code_raw;

						$ms_code_clean = $clsCrawlLocal->getCodeNotTemplate($ms_code_raw);
						$arr_data_code[$ms_code_clean]["stock_id"] = $oneStock["stock_id"];
						$arr_data_code[$ms_code_clean]["oneStock"] = $oneStock;
						$arr_data_code[$ms_code_clean]["min"] = $min;
						$arr_data_code[$ms_code_clean]["max"] = $max;

						if ($oneStock['status_id'] == _STOCK_STATUS_LOCK_ID) {
							$arr_code_old[] = $ms_code_raw;
						}
					}
				}
			}

			$arr_ms_code_new = array_diff($arr_ms_code, $arr_code_old);
			$lstStock = array_values($arr_data_code);
			$total_stock_sold = $total_stock_new = $total_updated = 0;
			$arr_not_upd = $arr_upd = $ms_codes = $lst_stock_id = [];

			// -------------------------------------------------------------------------
			// 5. CẬP NHẬT CÁC CĂN THÀNH ĐÃ BÁN (Xử lý hàng loạt - Pre-fetch Meta)
			// -------------------------------------------------------------------------
			// (Đã bỏ transaction bao quanh: vòng lặp chỉ ~32 căn nên không cần gom commit; transaction giữ
			// khoá dòng cả vòng → kết hợp ignore_user_abort + bấm lại nhiều lần dễ gây lock-wait ~50s → 504.)

			$g_cond = "`agency_id`='{$agency_id}' AND (`status_id`>0 AND `status_id`<>'"._STOCK_STATUS_SOLD_ID."')
					   AND `stock_type`='{$stock_type}' AND `block_id`='{$target_id}'";
			if (!empty($arr_stock_id_not_in)) {
				$g_cond .= " AND `stock_id` NOT IN (" . implode(',', $arr_stock_id_not_in) . ")";
			}
			$list_sold_stocks = $clsStock->getAll($g_cond, "{$clsStock->pkey}, `ms_code`, `status_id`, `more_information`");
			if (!empty($list_sold_stocks)) {
				// Pre-fetch Meta cho list sold
				$sold_stock_ids = array_column($list_sold_stocks, $clsStock->pkey);
				$sold_metas = $clsStockMeta->getAll("`stock_id` IN (" . implode(',', $sold_stock_ids) . ")", "{$clsStockMeta->pkey}, `stock_id`, `logs`");
				$sold_meta_map = [];
				if (!empty($sold_metas)) {
					foreach ($sold_metas as $meta) $sold_meta_map[$meta['stock_id']] = $meta;
				}

				foreach ($list_sold_stocks as $val) {
					$s_id = $val[$clsStock->pkey];
					$more_info = $clsISO->to_array_json($val['more_information']);
					$more_info['status_id'] = _STOCK_STATUS_SOLD_ID;
					$more_info['user_id_update_sold'] = $profile_id;

					$oneStockMeta = $sold_meta_map[$s_id] ?? null;
					$logs = !empty($oneStockMeta['logs']) ? $clsISO->to_array_json($oneStockMeta['logs']) : [];

					$logs[$clsISO->getUniqid()] = [
						'reg_date' => time(), 
						'user_id' => $profile_id,
						'from_id' => $val['status_id'],
						'to_id' => _STOCK_STATUS_SOLD_ID,
						'field' => 'status_id',
						'from' => '_front',
					];

					if ($clsStock->updateOne($s_id, [
						'ms_date' => time(),
						'status_id' => _STOCK_STATUS_SOLD_ID,
						'more_information' => json_encode($more_info, JSON_UNESCAPED_UNICODE)
					])) {
						++$total_stock_sold;
						if ($oneStockMeta) {
							$clsStockMeta->updateOne($oneStockMeta[$clsStockMeta->pkey], [
								'logs' => json_encode($logs, JSON_UNESCAPED_UNICODE),
								'upd_date' => time()
							]);
						} else {
							$clsStockMeta->insert(['stock_id' => $s_id, 'logs' => json_encode($logs, JSON_UNESCAPED_UNICODE), 'reg_date' => time(), 'upd_date' => time()]);
						}
					}
				}
			}

			// -------------------------------------------------------------------------
			// 6. CẬP NHẬT DỮ LIỆU TỪ SHEET (Khắc phục N+1 Query và Code thừa)
			// -------------------------------------------------------------------------
			if (!empty($lstStock)) {
				// PRE-FETCH META CHO LIST STOCK TỪ SHEET
				$arr_update_ids = array_filter(array_column(array_column($lstStock, 'oneStock'), 'stock_id'));
				$meta_map = [];
				if (!empty($arr_update_ids)) {
					$all_metas = $clsStockMeta->getAll("`stock_id` IN (" . implode(',', $arr_update_ids) . ")", "{$clsStockMeta->pkey}, `stock_id`, `logs`");
					if (!empty($all_metas)) {
						foreach ($all_metas as $m) $meta_map[$m['stock_id']] = $m;
					}
				}

				foreach ($lstStock as $v_stock) {
					$oneStock = $v_stock["oneStock"] ?? null;
		//			$clsISO->print_pre($oneStock);die;
					if (empty($oneStock)) continue;

					$stock_id = $oneStock['stock_id'];
					$ms_code = $oneStock["ms_code"];
					$ms_codes[] = $ms_code;
					$lst_stock_id[] = $stock_id;

					// Extract giá trị từ Sheet
					$prices = [
						'total_price' => $clsISO->get_price_field($v_stock, "total_price", 0),
						'total_price_early' => $clsISO->get_price_field($v_stock, "total_price_early", 0),
						'total_price_progress' => $clsISO->get_price_field($v_stock, "total_price_progress", 0),
						'total_price_bank' => $clsISO->get_price_field($v_stock, "total_price_bank", 0),
						'total_price_bank_half' => $clsISO->get_price_field($v_stock, "total_price_bank_half", 0)
					];
					//$clsISO->print_pre($v_stock);
					//$clsISO->print_pre($prices);die;
					$total_price_vat = $clsISO->get_price_field($v_stock, "total_price_vat", 0);

					$more_info_stock = $clsISO->to_array_json($oneStock['more_information']);
					$more_info_stock['ms_code'] = $ms_code;
					$more_info_stock['agency_id'] = $agency_id;

					// Xử lý các trường cơ bản
					foreach (['DT_TT', 'csbh', 'date_deposit_sign', 'DT_Tim'] as $f) {
						$val = !empty($v_stock[$f]) ? $v_stock[$f] : "";
						if (!empty($val)) $more_info_stock[$f] = $val;
					}

					// Xử lý Logs từ Meta Map (Không query DB)

					$oneStockMeta = $meta_map[$stock_id] ?? null;
					$logs = !empty($oneStockMeta['logs']) ? $clsISO->to_array_json($oneStockMeta['logs']) : [];
					$check_log = 0;

					// Duyệt mảng cấu hình giá để Update & Log (Loại bỏ code if/else lặp lại)
					foreach ($prices as $key => $new_val) {
						if (!empty($new_val) && $new_val != ($more_info_stock[$key] ?? 0)) {
							$old_val = $more_info_stock[$key] ?? 0;
							$more_info_stock[$key] = $new_val;
							$logs = $clsCrawlLocal->renderArrayLog($logs, $key, $old_val, $new_val);
							$check_log = 1;
						}
					}

					// Logic tính VAT
					if (empty($total_price_vat)) {
						if (!empty($prices['total_price'])) {
							$total_price_vat = round($prices['total_price'] * _PERCENT_PRICE_VAT);
						} elseif (!empty($prices['total_price_early'])) {
		//                    $total_price_vat = $prices['total_price_early'];
						}
					}

					$upd_field = ['upd_date' => time(), 'agency_id' => $agency_id];

					if (!empty($total_price_vat) && $total_price_vat != $more_info_stock["total_price_vat"]) {
						$upd_field['total_price_vat'] = $total_price_vat;
						$more_info_stock['total_price_vat'] = $total_price_vat;
						$logs = $clsCrawlLocal->renderArrayLog($logs, "total_price_vat", $more_info_stock["total_price_vat"], $total_price_vat);
						$check_log = 1;
					}

					// Status & Agency Logs
					if ($agency_id != $oneStock["agency_id"]) {
						$logs = $clsCrawlLocal->renderArrayLog($logs, "agency_id", $oneStock["agency_id"], $agency_id);
						$check_log = 1;
					}
					if (!empty($stock_status_id) && $stock_status_id != $oneStock["status_id"]) {
						$upd_field['status_id'] = $stock_status_id;
						$more_info_stock['status_id'] = $stock_status_id;
						$logs = $clsCrawlLocal->renderArrayLog($logs, "status_id", $oneStock["status_id"], $stock_status_id);
						$check_log = 1;
					}

					// Logic thêm Price Sheets
					$price_sheet_title = !empty($v_stock["price_sheet_title"]) ? $v_stock["price_sheet_title"] : "PTG TẠM TÍNH";
					$sheet_link = !empty($v_stock["price_sheet_link"]) ? $v_stock["price_sheet_link"] : (!empty($v_stock["link_smartchip"]) ? $v_stock["link_smartchip"] : "");
					if (!empty($price_sheet_title) && !empty($sheet_link)) {
						$price_sheet_id = $clsISO->getUniqid();
						$more_info_stock['price_sheets'] = [
							$price_sheet_id => [
								'sheets' => [
									$clsISO->getUniqid() => [
										'title' => $price_sheet_title, 
										'image' => $sheet_link
									]
								],
								'reg_date' => time(), 
								'upd_date' => time(), 
								'csbh' => $more_info_stock['csbh'] ?? "",
								'user_id' => $profile_id, 
								'user_update_id' => $profile_id, 
								'from' => "_front"
							]
						];
					}
					$upd_field['more_information'] = json_encode($more_info_stock, JSON_UNESCAPED_UNICODE);
					//$clsISO->print_pre($upd_field);die;
					// Execute Update
					if ($clsStock->updateOne($stock_id, $upd_field)) {
						++$total_updated;
						$arr_upd[] = $ms_code;

						// Update or Insert Meta
						if(!empty($check_log)) {
							if ($oneStockMeta) {
								$clsStockMeta->updateOne($oneStockMeta[$clsStockMeta->pkey], ['logs' => json_encode($logs, JSON_UNESCAPED_UNICODE), 'upd_date' => time()]);
							} else {
								$clsStockMeta->insert(['stock_id' => $stock_id, 'logs' => json_encode($logs, JSON_UNESCAPED_UNICODE), 'reg_date' => time(), 'upd_date' => time()]);
							}     
						}
					} else {
						$arr_not_upd[] = $ms_code;
					}
				}

				/*if ($total_updated > 0) {                
					(new ActivityLog())->addActivityLog("Stock", "update");
				}*/
			}
			// -------------------------------------------------------------------------
			// 7. GHI LOG TỔNG HỢP & HOÀN TẤT
			// -------------------------------------------------------------------------
			$arr_ms_code_new = array_intersect($arr_ms_code_new, $arr_upd);
			$total_stock_new = count($arr_ms_code_new);

			$clsLogCrawl->log($agency_id, $block_id, [
				"total_stock_sold" => $total_stock_sold,
				"total_stock_new"  => $total_stock_new,
				"total_stock"      => $total_updated,
				"stock_not_upd"    => $arr_not_upd,
				"data_log"         => $arr_data,
				"title_log"        => "Tổng quỹ: $total_updated, Đã bán: $total_stock_sold, Nhập mới: $total_stock_new",
				"type"             => 1,
				"result_type"      => "update",
			], $stock_type);

			$clsTmpStockAgent->updateStockTmp($agency_id, $stock_type, $target_id, $ms_codes);            

			// Log dự báo thay đổi file
			$tmp = $clsStockLog->getByCond("`stock_type`='{$stock_type}' AND `agency_id`='{$agency_id}' 
				AND `block_id`='{$target_id}' AND FROM_UNIXTIME(`reg_date`,'%d/%m/%Y')='".date('d/m/Y')."'", "{$clsStockLog->pkey}, `more_information`");

			if (!empty($tmp)) {
				$clsStockLog->updateOne($tmp[$clsStockLog->pkey], ['more_information' => json_encode($lst_stock_id, JSON_UNESCAPED_UNICODE)]);
			} else {
				$clsStockLog->insert([
					'stock_type' => $stock_type, 'agency_id' => $agency_id, 'block_id' => $target_id,
					'more_information' => json_encode($lst_stock_id, JSON_UNESCAPED_UNICODE),
					'reg_date' => time(), 'user_id' => $profile_id
				]);
			}

			
			$lstCacheLog[] = [
				"target_id" => $target_id,
				"agency_id" => $agency_id,
				"time"		=>	date("d/m/Y H:i:s")
			];
			$encoder->encodeFile($lstCacheLog, $cachedFileLog);
			// $clsISO->print_pre($result);
			echo json_encode([
				'result'              => true,
				'msg'                 => "Tổng quỹ: $total_updated, Đã bán: $total_stock_sold, Nhập mới: $total_stock_new",
				'spreadsheetId_crawl' => $res["spreadsheetId_crawl"],
				'total_updated'       => $total_updated,
				'total_stock_sold'    => $total_stock_sold,
				'total_stock_new'     => $total_stock_new,
				'stock_not_upd'       => $arr_not_upd,
			]);die;
		}
	}
?>