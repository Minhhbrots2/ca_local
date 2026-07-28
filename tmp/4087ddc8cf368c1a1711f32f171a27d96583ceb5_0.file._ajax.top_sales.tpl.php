<?php
/* Smarty version 3.1.33, created on 2026-07-13 11:39:09
  from '/www/wwwroot/skyrealty.c-a.vn/application/views/report/_ajax.top_sales.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a546bed588893_84127918',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4087ddc8cf368c1a1711f32f171a27d96583ceb5' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/views/report/_ajax.top_sales.tpl',
      1 => 1783308677,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a546bed588893_84127918 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_time_points']->value, '_OI', false, NULL, 'i', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_OI']->value) {
?>

	<?php $_smarty_tpl->_assignInScope('list_staffs', $_smarty_tpl->tpl_vars['_OI']->value['list_staffs']);?>

	<?php if (!empty($_smarty_tpl->tpl_vars['list_staffs']->value)) {
}?>

	<div class="card mb-2">

		<div class="card-header">

			<div class="d-flex align-items-center justify-content-between">

				<h3 class="card-title fs-5 mb-0"><?php echo $_smarty_tpl->tpl_vars['_OI']->value['title'];?>
</h3>

				<span class="text-muted text-fs-12"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->convertTimeToText($_smarty_tpl->tpl_vars['_OI']->value['start_date']);?>
 - <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->convertTimeToText($_smarty_tpl->tpl_vars['_OI']->value['end_date']);?>
</span>

			</div>

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

						<td class="align-center"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->convertTimeToText($_smarty_tpl->tpl_vars['_oStaff']->value['start_date']);?>
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

	

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
