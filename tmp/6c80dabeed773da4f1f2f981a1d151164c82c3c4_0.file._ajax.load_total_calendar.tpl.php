<?php
/* Smarty version 3.1.33, created on 2026-07-07 11:42:12
  from '/www/wwwroot/skyrealty.futureglobal.vn/application/views/home/calendar/_ajax.load_total_calendar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a4c83a472a486_93441909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c80dabeed773da4f1f2f981a1d151164c82c3c4' => 
    array (
      0 => '/www/wwwroot/skyrealty.futureglobal.vn/application/views/home/calendar/_ajax.load_total_calendar.tpl',
      1 => 1783314648,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a4c83a472a486_93441909 (Smarty_Internal_Template $_smarty_tpl) {
if (!empty($_smarty_tpl->tpl_vars['arr_data_admin']->value)) {?>

	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr_data_admin']->value, '_oAdmin');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oAdmin']->value) {
?>

		<tr class="trBilling">

			<td class="text-left"><?php echo $_smarty_tpl->tpl_vars['_oAdmin']->value['admin_name'];?>
</td>

			<td class="text-center"><?php echo $_smarty_tpl->tpl_vars['_oAdmin']->value['total_contract'];?>
</td>

			<td class="text-center"><?php echo $_smarty_tpl->tpl_vars['_oAdmin']->value['total_agree'];?>
</td>

		</tr>

	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php } else { ?>

	<tr class="trBilling">

		<td class="text-center" colspan="3">Danh sách trống</td>

	</tr>

<?php }
}
}
