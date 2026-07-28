<?php if (!defined('ABSPATH')) exit('No direct script access allowed');
/*======================================================================*\
|| #################################################################### ||
|| # The Classes configurations of the MaxxCMS                        # ||
|| # MaxxCMS 6.0.0 code by Bui Van Thiem (vanthiembui.it@gmail.com)   # ||
|| # ---------------------------------------------------------------- # ||
|| # All PHP code in this file is ©2007-2014 MaxCMS.                  # ||
|| # This file may not be redistributed in whole or significant part. # ||
|| # ---------------- MaxCMS IS NOT FREE SOFTWARE ----------------    # ||
|| #################################################################### ||
\*======================================================================*/
class Setting extends dbBasic{
	function __construct(){
		$this->pkey = "setting_id";
		$this->tbl = DB_PREFIX."setting";
	}
	function getCode($setting_id){
		global $core, $clsISO;
		$oneSetting = $this->getOne($setting_id,"more_information");
		$more_information = $oneSetting['more_information'];
		$more_information = $clsISO->to_array_json($more_information);
		return $core->get_field($more_information, "setting_code", "");
	}
	function getTitle($setting_id, $oDataTable = array()) {
        global $_LANG_ID;
		if(!isset($oDataTable['title'])){
			$oDataTable = $this->getOne($setting_id, "title");
		}
        return $oDataTable['title'];
    }
	function getTitleArray($ids, $data = array()){
		$titles = "";
		if(!empty($ids)){
			$tmp = array();
			$list = $this->getAll("{$this->pkey} in (".implode(",", $ids).")", "title");
			if(!empty($list)){
				foreach($list as $item){
					$tmp[] = $item['title'];
				}
				unset($list);
			}
			$titles = implode(', ', $tmp);
		}
		return $titles;
	}
	function getLabel($setting_id, $oDataTable = array(), $class="", $shorted = false){
		global $core,$dbconn,$clsISO;
		if((int) $setting_id > 0){
			if(empty($oDataTable)){
				$oDataTable = $this->getOne($setting_id,"`title`,`more_information`");
			}
			$more_information = $oDataTable['more_information'];
			$more_information = $clsISO->to_array_json($more_information);
			$title = ($shorted == true) ? $core->get_field($more_information, "setting_code", "") : $oDataTable['title'];
			$bgcolor = $core->get_field($more_information, "bgcolor", "");
			$textcolor = $core->get_field($more_information, "textcolor", "");
			return '<label class="badge_status badge'.$class.'" style="background:'.$bgcolor.'">'.$title.'</label>';
		} else {
			return '<label class="badge_status badge" style="background:#cbcbcb">Chưa rõ</label>';
		}
	}
    function getSelectBySettingOrigin($type, $for_id=0, $selected = 0, $title="") {
		global $core, $clsISO;
		if(!empty($title)){
			$html = '<option value="0">'.$title.'</option>';
		} else {
			$html = '<option value="0">'.$core->get_Lang('select').'</option>';
		}
		$field = "{$this->pkey},title";
		$tmp = $this->getAll("_type='{$type}' and for_id='{$for_id}' order by order_no ASC", $field);
		if (!empty($tmp)) {
			foreach ($tmp as $item) {
				$html .= '<option value="'. $item[$this->pkey]. '"' .($selected==$item[$this->pkey]?' selected':'').'>'.$item['title'].'</option>';
			}
			unset($tmp);
		}
		return $html;
	}
	function getOptionOrigin($type, $for_id=0, $selected = 0, $title="") {
		global $core, $clsISO;
		if(!empty($title)){
			$html = '<option value="0">'.$title.'</option>';
		} else {
			$html = '<option value="0">'.$core->get_Lang('select').'</option>';
		}
		$field = "{$this->pkey},title";
		$tmp = $this->getAll("_type='{$type}' and for_id='{$for_id}' order by order_no ASC", $field);
		if (!empty($tmp)) {
			foreach ($tmp as $item) {
				$html .= '<option value="'. $item[$this->pkey]. '"' .($selected==$item[$this->pkey]?' selected':'').'>'.$item['title'].'</option>';
			}
			unset($tmp);
		}
		return $html;
	}
    function getSelectSingleSetting($type, $parent_id = 0, $selected = 0, $cached = false) {
        global $core, $clsISO;
        #
		$field = "{$this->pkey},title";
        $tmp = $this->getAll("is_trash=0 and _type='{$type}' and parent_id='{$parent_id}' order by order_no ASC", $field);
        $html = '<option value="">Lựa chọn</option>';
        if (!empty($tmp)) {
            foreach ($tmp as $val) {
                $html.='<option value="'.$val[$this->pkey].'"'.($selected==$val[$this->pkey]?' selected':'').'>'.$val['title'].'</option>';
            }
        }
        return $html;
    }
	function getOItems($_type, $for_id = 0, $field=""){
		$cond = "`is_trash`='0' and `_type`='{$_type}'";
		if(intval($for_id) > 0) $cond .= " and `for_id`='{$for_id}'";
		$field = "{$this->pkey},`title`,`for_id`".(!empty($field)?",{$field}" : "");
		return $this->getAllCache("{$cond} order by `order_no` ASC", $field);
	}
	function getCacheItems($_type){
		$cachedName = sprintf('setting_%s_cached', $_type);
		$clsCache = new Cache();
		$data = array();
		// Cache-aside: nếu key bị expire/evict thì tự rebuild lại Redis.
		try{
			$data = $clsCache->get($cachedName);
		} catch(Exception $e){
			$data = array();
		}
		if(!empty($data) && is_array($data)){
			return $data;
		}
		$data = $this->getOItems($_type, 0, "`_type`,`parent_id`,`more_information`");
		if(!empty($data) && is_array($data)){
			try{
				$clsCache->put($cachedName, $data, CACHE_LIFETIME);
			} catch(Exception $e){}
		}
		return !empty($data) ? $data : array();
	}
	function getArraySearchByKey($_type,$id=0){
		global $core, $dbconn, $clsISO;
		$data = array();
		$tmp = $this->getCacheItems($_type);
		if(!empty($tmp)){
			foreach($tmp as $key => $val) {
				$setting_id = $val[$this->pkey];
				$more_information = $val['more_information'];
				$more_information = $clsISO->to_array_json($more_information);
				$data[$setting_id] = array(
					$this->pkey		=>	$setting_id,
					"_type"			=>	$val['_type'],
					"title"			=>	$val['title'],
					"slug"			=>	$val['slug'],
					"setting_code"	=>	$more_information['setting_code'],
					"bgcolor"		=>	$more_information['bgcolor'],
					"textcolor"		=>	$more_information['textcolor'],
					"for_id"		=>	$val['for_id'],
					"parent_id"		=>	$val['parent_id'],
					"more_information"	=>	$more_information,
				);
			}		
		}	
		if(!empty($id)) {
			return $data[$id];
		}
		return $data;
	}
    function getSelectBySetting($_type, $setting_id = 0, $title="", $cached=false, $is_event=false) {
        global $core, $clsISO;
		$html = '';
		if(IS_ADMIN_PAGE==1){
			$html = '<option value="0">'.(!empty($title) ? $title : 'Lựa chọn').'</option>';
		}
		if($cached == true){
			$tmp = $this->getCacheItems($_type);
		} else {
			$field = "{$this->pkey},`title`";
			$sort_type = ($_type=='_PERIOD') ? "DESC" : "ASC";
			$cond = "`is_trash`=0 AND `_type`='{$_type}'";
			$tmp = $this->getAll("{$cond} AND `parent_id`=0 ORDER BY `order_no` {$sort_type}", $field);
		}
        if(!empty($tmp)) { $i = 0;
            foreach ($tmp as $key => $val) {
                $html.='<option value="'.$val[$this->pkey].'"'.($val[$this->pkey]==$setting_id?' selected':'').'>'.$this->getTitle($val[$this->pkey], $val).'</option>';
                ++$i;
            }
			unset($tmp);
        }
        return $html;
    }
	function makeSelect($type, $selected=0, $cached = false) {
        global $core, $clsISO;
		if($cached == true){
			$tmp = $this->getCacheItems($type);
		} else {
			$field = "{$this->pkey},title";
			$tmp = $this->getAll("`is_trash`=0 AND `_type`='{$type}' ORDER BY `order_no` ASC", $field);
		}
		$html = '<option value="">Lựa chọn</option>';
        if (!empty($tmp)) {
            foreach($tmp as $val) {
                $html.='<option value="'.$val[$this->pkey].'"'.($selected==$val[$this->pkey]?' selected':'').'>
					'.$val['title'].'
				</option>';
            }
			unset($tmp);
        }
        return $html;
    }
	function getItems($setting_type, $setting_id=0, $field="*"){
		$cond = "`_type`='{$setting_type}'";
		if(intval($setting_id) > 0) 
			$cond .= " and `parent_id`='{$setting_id}'";
		return $this->getAll("{$cond} order by `order_no` ASC", $field);
	}
    function getListOption($setting_type="", $setting_id = '',$parent_id=0) {
        global $core, $dbconn, $clsISO;
		$html = ""; $arrOptions = array();
        $this->makeOption($parent_id, $setting_type, $setting_id, 0, $arrOptions);
		if(!empty($arrOptions)){
			foreach($arrOptions as $k => $v) {
				$selected = ($k == $setting_id) ? ' selected="selected"' : '';
				$html .= '<option value="'.$k.'"'.$selected.'>'.$v.'</option>';
			}
			unset($arrOptions);
		}
        return $html;
    }
    function makeOption($parent_id = 0, $setting_type = '', $selectedid = "", $level = 0, &$arrHtml) {
        global $core, $dbconn, $clsISO;
        $cond = "`is_trash`=0 AND `_type`='{$setting_type}' AND `parent_id`='{$parent_id}'";
		$field = "{$this->pkey},`title`,`more_information`";
        $arrListCat = $this->getAll($cond. " order by `order_no` ASC", $field);
        if (!empty($arrListCat)) {
            foreach ($arrListCat as $k => $v) {
				$value = $v[$this->pkey];
                $more_information = $v['more_information'];
			    $more_information = $clsISO->to_array_json($more_information);
                $selected = ($v[$this->pkey] == $selectedid) ? "selected" : "";
                $option = @str_repeat("|---- ", $level). sprintf('(%s) %s', $more_information['setting_code'], $v['title']);
                $arrHtml[$value] = $option;
                $this->makeOption($v[$this->pkey], $setting_type, $selectedid, $level + 1, $arrHtml);
            }
            return "";
        } else {
            return "";
        }
    }
}
?>
