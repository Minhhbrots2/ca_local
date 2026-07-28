<?php
/* Smarty version 3.1.33, created on 2026-07-13 11:38:45
  from '/www/wwwroot/skyrealty.c-a.vn/application/views/report/top_10.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a546bd572d052_31923647',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a9a6b6c43214643d331b1852fd71ac5b4f1e27b' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/views/report/top_10.tpl',
      1 => 1783659107,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a546bd572d052_31923647 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/www/wwwroot/skyrealty.c-a.vn/core/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="container-xxl flex-grow-1 pt-2 container-p-y">

	<div class="row">

		<div class="col-12 col-lg-10 offset-lg-1 col-xxxl-8 offset-xxxl-2">

			<h4 class="fw-bold mb-0">

				<span>TOP kết quả bán hàng <?php echo smarty_modifier_date_format(time(),"%Y");?>
</span>

			</h4>

			<p class="text-muted mb-2">Tổng hợp kết quả bán hàng <?php echo @constant('BRAND_NAME');?>
</p>

			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_billing_types']->value, '_OI', false, NULL, 'i', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_OI']->value) {
?>

			<?php $_smarty_tpl->_assignInScope('list_staffs', $_smarty_tpl->tpl_vars['_OI']->value['list_staffs']);?>

			<?php if (!empty($_smarty_tpl->tpl_vars['list_staffs']->value)) {?>

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

								<th width="5%" class="align-center h-px-40 bg-lighter text-center">No.</th>

								<?php }?>

								<th class="align-center bg-lighter h-px-40">Họ và tên</th>

								<th class="align-center bg-lighter h-px-40">Phòng ban</th>

								<th width="10%" class="align-center bg-lighter h-px-40 text-center">Số GD</th>

								<th width="30%" class="align-center bg-lighter h-px-40">Doanh số</th>

							</tr></thead>

							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_staffs']->value, '_oStaff', false, NULL, 'k', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oStaff']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_k']->value['iteration']++;
?>

							<tr>

								<?php if ($_smarty_tpl->tpl_vars['deviceType']->value != 'phone') {?>

								<td class="text-center"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_k']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_k']->value['iteration'] : null);?>
</td><?php }?>

								<td class="align-center"><?php echo $_smarty_tpl->tpl_vars['_oStaff']->value['full_name'];?>
</td>

								<td class="align-center"><?php echo $_smarty_tpl->tpl_vars['_oStaff']->value['department_name'];?>
</td>

								<td class="text-center"><?php echo $_smarty_tpl->tpl_vars['_oStaff']->value['total_billings'];?>
</td>

								<td class="text-left">

									<strong class="text-main">

										<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->shortNumber($_smarty_tpl->tpl_vars['_oStaff']->value['total_revenue'],3);?>


									</strong>

								</td>

							</tr>

							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

						</table>

					</div>

				</div>

			</div>

			<?php }?>

			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

		</div>

	</div>

</div><?php }
}
