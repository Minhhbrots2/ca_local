<?php
/* Smarty version 3.1.33, created on 2026-07-06 18:07:53
  from '/www/wwwroot/skyrealty.futureglobal.vn/admin/application/views/api_log/_ajax.logs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a4b8c89035dc6_39868819',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4adf2d964ffb77b193ab79ef10dae730a7e8b150' => 
    array (
      0 => '/www/wwwroot/skyrealty.futureglobal.vn/admin/application/views/api_log/_ajax.logs.tpl',
      1 => 1783314566,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a4b8c89035dc6_39868819 (Smarty_Internal_Template $_smarty_tpl) {
if (!empty($_smarty_tpl->tpl_vars['lstItem']->value)) {?>

	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lstItem']->value, '_oItem', false, NULL, 'i', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oItem']->value) {
?>

	<tr>

		<td><strong class="font-bold"><?php echo $_smarty_tpl->tpl_vars['clsUserAdmin']->value->getFullName($_smarty_tpl->tpl_vars['_oItem']->value['user_id']);?>
</strong></td>

		<td><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatDate($_smarty_tpl->tpl_vars['_oItem']->value['reg_date'],4);?>
</td>

	</tr>

	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php }
}
}
