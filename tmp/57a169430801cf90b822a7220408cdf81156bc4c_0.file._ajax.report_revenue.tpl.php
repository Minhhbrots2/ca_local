<?php
/* Smarty version 3.1.33, created on 2026-07-08 15:31:09
  from '/www/wwwroot/skyrealty.c-a.vn/application/views/home/report/_ajax.report_revenue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a4e0acd78ecf7_43526380',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57a169430801cf90b822a7220408cdf81156bc4c' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/views/home/report/_ajax.report_revenue.tpl',
      1 => 1783314653,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a4e0acd78ecf7_43526380 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card mb-2">

	<div class="card-header d-flex flex-wrap align-items-center justify-content-between gap-2">

		<h5 class="card-title mb-2 mb-lg-0 me-2">Biểu đồ thống kê doanh số</h5>

	</div>

	<div class="card-body">

		<div id="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" class="chartContainer h-px-300"></div>

	</div>

</div>

<div class="card mb-2">

	<div class="card-header d-flex align-items-center justify-content-between">

		<h5 class="mb-0">Thống kê doanh số</h5>

		<a href="javascript:void(0);" class="text-muted help_pop openHelp" title="Trợ giúp">

			<i class="fa fa-question-circle"></i>

		</a>

	</div>

	<div class="card-body holder_revenue_reports">

		<div class="table-container">

			<table border="0" cellspacing="0" cellpadding="0" class="table w-100">

				<thead><tr>

					<?php if ($_smarty_tpl->tpl_vars['deviceType']->value != 'phone') {?>

					<th class="align-center h-px-40 bg-lighter" width="40">STT</th>

					<?php }?>

					<th class="align-center h-px-40 bg-lighter">Dự án</th>

					<th class="align-center h-px-40 bg-lighter text-center" width="150">Doanh số</th>

					<th class="align-center h-px-40 bg-lighter text-center" width="100">Giao dịch</th>

				</tr></thead>

				<tbody>

					<?php if (!empty($_smarty_tpl->tpl_vars['arr_project']->value)) {?>

						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr_project']->value, '_oItem', false, 'key', 'i', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['_oItem']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']++;
?>

							<tr>

								<?php if ($_smarty_tpl->tpl_vars['deviceType']->value != 'phone') {?>

								<td class="text-center"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration'] : null);?>
</td>

								<?php }?>

								<td class=""><?php echo $_smarty_tpl->tpl_vars['_oItem']->value['title'];?>
</td>

								<td class="text-center text-main"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->priceFormat($_smarty_tpl->tpl_vars['_oItem']->value['total_sale'],0);?>
 đ</td>

								<td class="text-center text-info"><?php echo $_smarty_tpl->tpl_vars['_oItem']->value['total_billing'];?>
</td>

							</tr>

						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

						<tr>

							<td class="text-center bg-lighter text-main fw-bold text-upper" colspan="<?php if ($_smarty_tpl->tpl_vars['deviceType']->value != 'phone') {?>2<?php } else { ?>1<?php }?>">Tổng</td>

							<td class="text-center bg-lighter text-main fw-bold"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->priceFormat($_smarty_tpl->tpl_vars['total_sales']->value,0);?>
 đ</td>

							<td class="text-center bg-lighter text-info fw-bold"><?php echo $_smarty_tpl->tpl_vars['total_billings']->value;?>
</td>

						</tr>

					<?php }?>

				</tbody>

			</table>

		</div>

	</div>

</div><?php }
}
