<?php 
	global $core, $smarty, $clsISO;
	$current_year = date('Y');
	$start_date = sprintf('01/01/%s', $current_year);
	$last_day_of_year = cal_days_in_month(CAL_GREGORIAN, 12, $current_year);
	$end_date = sprintf('%s/12/%s', $last_day_of_year, $current_year);
	$smarty->assign('current_year', $current_year);
	$smarty->assign('start_date', $start_date);
	$smarty->assign('end_date', $end_date);

	$clsProperty = new Property();
	$lstDepartment = $clsProperty->getAll("is_trash=0 and property_type='_DEPARTMENT' and parent_id='"._DEPARTMENT_SALE_ID."' order by order_no ASC", "{$clsProperty->pkey},title");
	$smarty->assign("lstDepartment",$lstDepartment);
?>