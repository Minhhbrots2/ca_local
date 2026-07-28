<?php
/* Smarty version 3.1.33, created on 2026-07-13 11:39:00
  from '/www/wwwroot/skyrealty.c-a.vn/application/views/report/sales_has_trans.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a546be41b3f08_23427935',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9268bad10aaf2e22bb07b2178e39d5bcc8a539b4' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/views/report/sales_has_trans.tpl',
      1 => 1783659107,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a546be41b3f08_23427935 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-xxl flex-grow-1 pt-2 container-p-y">

	<div class="row">

		<div class="col-12 col-lg-10 offset-lg-1 col-xxxl-8 offset-xxxl-2">

			<div class="d-flex flex-wrap align-items-center justify-content-between mb-2">

				<div class="gonjJyjZjd mb-2 mb-lg-0">

					<h4 class="fw-bold mb-0">

						<span>Báo cáo Sales có GD</span>

					</h4>

					<p class="text-muted mb-0">Tổng hợp kết quả bán hàng <?php echo @constant('BRAND_NAME');?>
</p>

				</div>

				<div class="pjgNnfxUhT">

					<div class="input-group">

						<select data-field="billing_type" call_from="sales_has_trans" class="search_field form-select" 

							onChange="$Core.report.do_change(this, event)">

							<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getSelectByPropertyTypeTitle('_BILLING_TYPE',0,'Loại hình');?>


						</select>

						<select data-field="department_id" call_from="sales_has_trans" class="search_field form-select" 

							onChange="$Core.report.do_change(this, event)">

							<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getSelectByPropertyTypeTitle('_DEPARTMENT',$_smarty_tpl->tpl_vars['department_id']->value,'Phòng ban');?>


						</select>

						<select data-field="date_type" name="date_type" call_from="sales_has_trans" class="search_field form-select" 

							onChange="$Core.report.do_change(this, event)">

							<option value="_month">Theo Tháng</option>

							<option value="_quater">Theo Quý</option>

							<option value="_half_year">Theo 1/2 năm</option>

						</select>

						<select data-field="month" name="month" call_from="sales_has_trans" onChange="$Core.report.do_change(this, event)" class="form-control search_field form-select slb_Month" >

							<option>Chọn Tháng</option>

							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_months']->value, '_oT', false, NULL, 'i', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oT']->value) {
?>

							<option<?php if ($_smarty_tpl->tpl_vars['current_month']->value == $_smarty_tpl->tpl_vars['_oT']->value) {?> selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['_oT']->value;?>
">Tháng <?php echo $_smarty_tpl->tpl_vars['_oT']->value;?>
</option>

							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

						</select>

						<select data-field="year" name="year" call_from="sales_has_trans" class="form-control search_field form-select slb_Year" onChange="$Core.report.do_change(this, event)">

							<option>Chọn năm</option>

							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_years']->value, '_oY', false, NULL, 'i', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oY']->value) {
?>

							<option<?php if ($_smarty_tpl->tpl_vars['current_year']->value == $_smarty_tpl->tpl_vars['_oY']->value) {?> selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['_oY']->value;?>
">Năm <?php echo $_smarty_tpl->tpl_vars['_oY']->value;?>
</option>

							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

						</select>

					</div>

				</div>

			</div>

			<div class="card mb-3">

				<div class="card-header">

					<h3 class="card-title fs-5 mb-0"><?php echo $_smarty_tpl->tpl_vars['_OI']->value['title'];?>
</h3>

				</div>

				<div class="card-body">

					<div class="table-container no-shadow overflow-x-auto text-nowrap">

						<table class="table table-bordered" cellpadding="0" cellspacing="0">

							<thead><tr>

								<?php if ($_smarty_tpl->tpl_vars['deviceType']->value != 'phone') {?>

								<th width="5%" class="align-center h-px-35 bg-lighter text-center">No.</th>

								<?php }?>

								<th class="align-center bg-lighter h-px-35">Họ và tên</th>

								<th class="align-center bg-lighter h-px-35">Phòng ban</th>

								<th class="align-center bg-lighter h-px-35 text-center">Doanh số</th>

								<th class="align-center bg-lighter h-px-35 text-center">Số lượng</th>

								<th class="align-center bg-lighter h-px-35 text-center">Doanh số F1</th>

								<th class="align-center bg-lighter h-px-35 text-center">Quỹ F1</th>

								<th class="align-center bg-lighter h-px-35 text-center">Đã ký</th>

								<th class="align-center bg-lighter h-px-35 text-center">Đã hủy</th>

							</tr></thead>

							<tbody class="holder_reports_sales_has_trans">

								<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['list_preloaders']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = min(($__section_i_0_loop - 0), 30);
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $__section_i_0_total; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>

								<tr>

									<?php if ($_smarty_tpl->tpl_vars['deviceType']->value != 'phone') {?>

									<td class="text-center"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null);?>
</td><?php }?>

									<td class="align-center"><div class="animate-bg w-100 rounded-3 h-px-15"></div></td>

									<td class="align-center"><div class="animate-bg w-100 rounded-3 h-px-15"></div></td>

									<td class="align-center"><div class="animate-bg w-100 rounded-3 h-px-15"></div></td>

									<td class="align-center"><div class="animate-bg w-100 rounded-3 h-px-15"></div></td>

									<td class="align-center"><div class="animate-bg w-100 rounded-3 h-px-15"></div></td>

									<td class="align-center"><div class="animate-bg w-100 rounded-3 h-px-15"></div></td>

									<td class="align-center"><div class="animate-bg w-100 rounded-3 h-px-15"></div></td>

									<td class="align-center"><div class="animate-bg w-100 rounded-3 h-px-15"></div></td>

								</tr>

								<?php
}
}
?>

							</tbody>

						</table>

					</div>

				</div>

			</div>

			

		</div>

	</div>

</div><?php }
}
