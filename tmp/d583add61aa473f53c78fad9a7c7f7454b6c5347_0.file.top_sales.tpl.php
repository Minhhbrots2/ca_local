<?php
/* Smarty version 3.1.33, created on 2026-07-13 11:39:07
  from '/www/wwwroot/skyrealty.c-a.vn/application/views/report/top_sales.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a546bebc0bdd6_20132256',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd583add61aa473f53c78fad9a7c7f7454b6c5347' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/views/report/top_sales.tpl',
      1 => 1783659107,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a546bebc0bdd6_20132256 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-xxl flex-grow-1 pt-2 container-p-y">

	<div class="row">

		<div class="col-12 col-lg-10 offset-lg-1 col-xxxl-8 offset-xxxl-2">

			<div class="d-flex flex-wrap align-items-center justify-content-between mb-2">

				<div class="oOGXbGhDZt">

					<h4 class="fw-bold mb-0"><span>Báo cáo Sale chưa có GD</span></h4>

					<p class="text-muted mb-0">Tổng hợp kết quả bán hàng <?php echo @constant('BRAND_NAME');?>
</p>

				</div>

				<div class="xaQwJlqAyc">

					<div class="input-group">

						<select data-field="department_id" call_from="top_sales" class="search_field form-select" 

							onChange="$Core.report.do_change(this, event)">

							<?php echo $_smarty_tpl->tpl_vars['clsProperty']->value->getSelectSingleProperty('_DEPARTMENT',@constant('_DEPARTMENT_SALE_ID'),0,'Phòng kinh doanh');?>


						</select>

					</div>

				</div>

			</div>

			<div class="holder_report_top_sales">

				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_time_points']->value, '_OI', false, NULL, 'i', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_OI']->value) {
?>

				<div class="card mb-2">

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

									<th class="align-center bg-lighter h-px-35" width="30%">Ngày vào</th>

								</tr></thead>

								<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['list_preloaders']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = min(($__section_i_0_loop - 0), 10);
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>

								<tr>

									<?php if ($_smarty_tpl->tpl_vars['deviceType']->value != 'phone') {?><td class="text-center">

										<div class="animate-bg w-100 h-px-15 rounded-2"></div>

									</td><?php }?>

									<td class="align-center">

										<div class="animate-bg w-100 h-px-15 rounded-2"></div>

									</td>

									<td class="align-center">

										<div class="animate-bg w-100 h-px-15 rounded-2"></div>

									</td>

									<td class="align-center">

										<div class="animate-bg w-100 h-px-15 rounded-2"></div>

									</td>

								</tr>

								<?php
}
}
?>

							</table>

						</div>

					</div>

				</div>

				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

			</div>

		</div>

	</div>

</div><?php }
}
