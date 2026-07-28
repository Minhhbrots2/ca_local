<?php
/* Smarty version 3.1.33, created on 2026-07-08 14:46:58
  from '/www/wwwroot/skyrealty.c-a.vn/application/views/home/report/revenue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a4e0072b92ed1_48685188',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7cb8f116b945054a39b0a7d8e482a02676d53445' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/views/home/report/revenue.tpl',
      1 => 1783314653,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a4e0072b92ed1_48685188 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-xxl flex-grow-1 container-p-y pt-2">

	<form method="POST">

		<div class="d-flex flex-wrap justify-content-between align-items-center py-2 mb-2 mb-lg-0 gap-2">

			<div class="title mb-lg-0">

				<h4 class="fw-bold mb-1">Doanh số bán hàng</span></h4>

				<span class="text-muted">Báo cáo kết quả bán hàng</span>

			</div>

			<div class="search d-flex<?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?> flex-wrap<?php }?> align-items-center gap-1">

				<?php $_smarty_tpl->_assignInScope('gId', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>

				<?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?>

					<div class="input-group w-100 mb-1">

						<select id="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" name="billing_source" data-field="billing_source" class="form-control form-select search_field w-px-100 flex-fill"  onchange="$Core.dashboard.load_profile(this,event)" gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" >

							<option value="0">Nguồn quỹ</option>

							<?php echo $_smarty_tpl->tpl_vars['clsProperty']->value->getSelectByProperty('BILLING_SOURCE',$_smarty_tpl->tpl_vars['billing_source']->value);?>


						</select>

						<select onchange="$Core.dashboard.load_profile(this,event)" name="department_id" data-field="department_id" 

							class="form-control js__search-department-field search_field w-px-100 form-select flex-fill" gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" >

							<option value="0">Chọn vùng</option>

							<?php if (!empty($_smarty_tpl->tpl_vars['list_sale_departments']->value)) {?>

								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_sale_departments']->value, '_oG');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oG']->value) {
?>

								<option value="<?php echo $_smarty_tpl->tpl_vars['_oG']->value['property_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_oG']->value['title'];?>
</option>

								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

							<?php }?>

						</select>

						<select class="form-control form-select search_field w-px-150 flex-fill" name="profile_id" id="profile_<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" onChange="$Core.report.do_search(this,event)" style="display: none;"> 

							<option value="">Nhân viên</option>			

							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lstProfile']->value, '_oProfile');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oProfile']->value) {
?>

							<option value="<?php echo $_smarty_tpl->tpl_vars['_oProfile']->value['profile_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_oProfile']->value['full_name'];?>
</option>

							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

						</select>

					</div>

					<div class="d-flex align-items-center gap-1 mb-2 w-100">

						<select class="form-control form-select search_field w-px-100 flex-fill" name="date_type" gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" 

							onChange="$Core.dashboard.reload(this,event)"> 

							<option value="_month">Tháng</option>

							<option value="_quarter">Quý</option>

							<option value="_half_year">Nửa năm</option>

						</select>

						<select onchange="$Core.report.do_search(this,event)" name="month" data-field="month" 

							class="form-control search_field js__search-month-field w-px-100 form-select flex-fill" gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
">

							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_months']->value, '_month');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_month']->value) {
?>

							<option<?php if ($_smarty_tpl->tpl_vars['Current_Month']->value == $_smarty_tpl->tpl_vars['_month']->value) {?> selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['_month']->value;?>
">Tháng <?php echo $_smarty_tpl->tpl_vars['_month']->value;?>
</option>

							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

						</select>

						<select class="form-control search_field form-select w-px-100 flex-fill" name="year" data-field="year" gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" onChange="$Core.dashboard.reload(this,event)">

							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_years']->value, '_year');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_year']->value) {
?>

							<option<?php if ($_smarty_tpl->tpl_vars['_year']->value == $_smarty_tpl->tpl_vars['current_year']->value) {?> selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['_year']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['_year']->value;?>
</option>

							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

						</select>

					</div>

				<?php } else { ?>

					<div class="input-group">

						<select id="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" name="billing_source" data-field="billing_source" class="form-control search_field form-select w-px-100"  onchange="$Core.dashboard.load_profile(this,event)" gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" >

							<option value="0">Nguồn quỹ</option>

							<?php echo $_smarty_tpl->tpl_vars['clsProperty']->value->getSelectByProperty('BILLING_SOURCE',$_smarty_tpl->tpl_vars['billing_source']->value);?>


						</select>

						<select onchange="$Core.dashboard.load_profile(this,event)" name="department_id" data-field="department_id" 

							class="form-control js__search-department-field search_field w-px-100 form-select" gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" >

							<option value="0">Chọn vùng</option>

							<?php if (!empty($_smarty_tpl->tpl_vars['list_sale_departments']->value)) {?>

								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_sale_departments']->value, '_oG');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oG']->value) {
?>

								<option value="<?php echo $_smarty_tpl->tpl_vars['_oG']->value['property_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_oG']->value['title'];?>
</option>

								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

							<?php }?>

						</select>

						<select class="form-control form-select search_field w-px-150" name="profile_id" id="profile_<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" onChange="$Core.report.do_search(this,event)" style="display: none;"> 

							<option value="">Nhân viên</option>			

							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lstProfile']->value, '_oProfile');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oProfile']->value) {
?>

							<option value="<?php echo $_smarty_tpl->tpl_vars['_oProfile']->value['profile_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_oProfile']->value['full_name'];?>
</option>

							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

						</select>

						<select class="form-control search_field form-select w-px-100" name="date_type" gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" 

							onChange="$Core.dashboard.reload(this,event)"> 

							<option value="_month">Tháng</option>

							<option value="_quarter">Quý</option>

							<option value="_half_year">Nửa năm</option>

						</select>

						<select onchange="$Core.report.do_search(this,event)" name="month" data-field="month" 

							class="form-control search_field js__search-month-field w-px-100 form-select" gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
">

							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_months']->value, '_month');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_month']->value) {
?>

							<option<?php if ($_smarty_tpl->tpl_vars['Current_Month']->value == $_smarty_tpl->tpl_vars['_month']->value) {?> selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['_month']->value;?>
">Tháng <?php echo $_smarty_tpl->tpl_vars['_month']->value;?>
</option>

							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

						</select>

						<select class="form-control search_field form-select w-px-100" name="year" data-field="year" gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" onChange="$Core.dashboard.reload(this,event)">

							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_years']->value, '_year');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_year']->value) {
?>

							<option<?php if ($_smarty_tpl->tpl_vars['_year']->value == $_smarty_tpl->tpl_vars['current_year']->value) {?> selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['_year']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['_year']->value;?>
</option>

							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

						</select>

					</div>

				<?php }?>

			</div>

		</div>

	</form>

	<hr class="my-0" />

	<div class="ajax holder_revenue_reports" gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&sub=report&act=load_revenue" data-options='{}'>

		<div class="card mb-2">

			<div class="card-header d-flex flex-wrap align-items-center justify-content-between gap-2">

				<h5 class="card-title mb-2 mb-lg-0 me-2">Biểu đồ thống kê doanh số</h5>

			</div>

			<div class="card-body">

				<div class="animate-bg rounded-2 mb-2 h-px-15 w-100"></div>

				<div class="animate-bg rounded-2 mb-2 h-px-15 w-100"></div>

				<div class="animate-bg rounded-2 mb-2 h-px-15 w-100"></div>

				<div class="animate-bg rounded-2 mb-2 h-px-15 w-100"></div>

				<div class="animate-bg rounded-2 mb-2 h-px-15 w-100"></div>

				<div class="animate-bg rounded-2 mb-2 h-px-15 w-100"></div>

				<div class="animate-bg rounded-2 mb-2 h-px-15 w-100"></div>

				<div class="animate-bg rounded-2 mb-2 h-px-15 w-100"></div>

				<div class="animate-bg rounded-2 mb-2 h-px-15 w-100"></div>

				<div class="animate-bg rounded-2 mb-2 h-px-15 w-100"></div>

			</div>

		</div>

		<div class="card mb-2">

			<div class="card-header d-flex align-items-center justify-content-between">

				<h5 class="mb-0">Thống kê doanh số</h5>

				<a href="javascript:void(0);" class="text-muted help_pop openHelp" title="Trợ giúp">

					<i class="fa fa-question-circle"></i>

				</a>

			</div>

			<div class="card-body">

				<div class="table-container">

					<table border="0" cellspacing="0" cellpadding="0" class="table w-100">

						<thead><tr>

							<th class="align-center">Nhân viên</th>

							<th class="align-center text-center">...</th>

							<th class="align-center text-center">...</th>

							<th class="align-center text-center">...</th>

							<th class="align-center text-center">...</th>

							<th class="align-center text-center">...</th>

							<th class="align-center text-center">...</th>

						</tr></thead>

						<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['list_preloaders']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = min(($__section_i_0_loop - 0), 10);
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>

						<tr>

							<td><div class="animate-bg w-100 rounded-2 h-px-15"></div></td>

							<td><div class="animate-bg w-100 rounded-2 h-px-15"></div></td>

							<td><div class="animate-bg w-100 rounded-2 h-px-15"></div></td>

							<td><div class="animate-bg w-100 rounded-2 h-px-15"></div></td>

							<td><div class="animate-bg w-100 rounded-2 h-px-15"></div></td>

							<td><div class="animate-bg w-100 rounded-2 h-px-15"></div></td>

							<td><div class="animate-bg w-100 rounded-2 h-px-15"></div></td>

						</tr>

						<?php
}
}
?>

					</table>

				</div>

			</div>

		</div>

	</div>

	

	

</div>



<style type="text/css">

	.table-responsive td{

		text-align:left;

	}

	.multiselect-native-select{

		width:100%

	}

	.ui-datepicker,

	.select2-container--open{

		z-index:9999 !important;

	}

	.table-iloocal tr td {

		font-weight: 400;

		font-size: 14px;

		line-height: 20px;

		padding: 6px 15px;

		background: var(--bs-white);

		border: 1px solid rgba(0, 0, 0, 0.1);

		height: 40px;

	}

	.table-iloocal thead tr th {

		background: #F9F9F9;

		border: 1px solid rgba(0, 0, 0, 0.1);

		white-space: nowrap;

		font-weight: 600;

		font-size: 14px;

		line-height: 20px;

		padding: 10px 15px

	}

	.table-iloocal .js__add-report:not(.text-muted) {

		font-weight: 600;

		font-size: 14px;

		line-height: 19px;

		color: #1756C8 !important;

		cursor: pointer;

	}

	.table-iloocal .js__add-report span.icon {

		display: inline-block;

		width: 14px;

		height: 14px;

		text-align: center;

		line-height: 12px;

		background: #1756C8;

		border-radius: 2px;

		-moz-border-radius: 2px;

		-webkit-border-radius: 2px;

		color: var(--bs-white);

		padding:3px;

		font-size: 10px;

	}

</style>

<?php }
}
