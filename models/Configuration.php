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
class Configuration extends DbBasic{
	function __construct(){
		$this->pkey = "setting";
		$this->tbl = DB_PREFIX."configuration";
	}
	function getValue($key, $def=""){
		global $dbconn;
		$sql = "select `value` from ".$this->tbl." where setting='{$key}' limit 0,1";
		$tmp = $dbconn->GetAll($sql);
		if(!empty($tmp))
			return $tmp[0]['value'];
		return $def;
	}
	function getValues($settings){
		global $dbconn, $clsISO;
		if(!empty($settings)){
			$sql = "select `setting`,`value` from ".$this->tbl." where `setting` in ('".implode('\',\'',$settings)."')";
			$tmps = $dbconn->GetAll($sql);
			if(!empty($tmps)){
				foreach($tmps as $key => $val){
					$this->arrResults[$val['setting']] = $val['value'];
				}
			}
		}
		return $this->arrResults;
	}
	function updateValue($key,$val){
		global $dbconn;
		$sql = "select setting from ".$this->tbl." where setting='{$key}' limit 0,1";
		$tmp = $dbconn->GetAll($sql); 
		if(!empty($tmp) && $tmp[0]['setting']==$key){
			$this->updateByCond("setting='{$key}'","value='".addslashes($val)."'");
		}else{
			$this->insertOne("setting,value","'{$key}','".addslashes($val)."'");
		}
		return true; 
	}
	function stripUnicode($str){
		if(!$str) return false;
		$unicode = array(
			'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
			'd'=>'đ',
			'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
			'i'=>'í|ì|ỉ|ĩ|ị',
			'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
			'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
			'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
		);
		foreach($unicode as $nonUnicode=>$uni){
			$str = preg_replace("/($uni)/i",$nonUnicode,$str);
		}
		$str = str_replace(" ","-",$str);
		return $str;
	} 
}
?>