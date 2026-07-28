<?php
/* Smarty version 3.1.33, created on 2026-07-27 22:19:03
  from '/www/wwwroot/skyrealty.c-a.vn/application/views/home/project/_ajax.stock_new.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a6776e7ab3384_36708644',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8eb80c904a801a727b6f64f65935d9bc89d1b288' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/views/home/project/_ajax.stock_new.tpl',
      1 => 1783283460,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a6776e7ab3384_36708644 (Smarty_Internal_Template $_smarty_tpl) {
if (!empty($_smarty_tpl->tpl_vars['list_stocks']->value)) {?>

	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_stocks']->value, '_oStock', false, NULL, 'i', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oStock']->value) {
?>

		<tr class="p_row<?php if ($_smarty_tpl->tpl_vars['_oStock']->value['agency_id'] == @constant('_AGENCY_CNCN_ID')) {?> bg-purple<?php } elseif ($_smarty_tpl->tpl_vars['_oStock']->value['agency_id'] == @constant('_AGENCY_FH_ID')) {?> bg-label-fh<?php }?>">

			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lst_config_column']->value, '_field', false, 'key', 'i_field', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['_field']->value) {
?>

				<?php echo $_smarty_tpl->tpl_vars['clsStock']->value->getFieldStock(@constant('_BLOCK_TYPE_LOWFLOOR_SALE'),$_smarty_tpl->tpl_vars['_field']->value,$_smarty_tpl->tpl_vars['_oStock']->value,$_smarty_tpl->tpl_vars['arr_props_cached']->value,$_smarty_tpl->tpl_vars['arr_property_cached']->value);?>


			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

		</tr>

	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php } else { ?>

	<tr>

		<td colspan="<?php echo count($_smarty_tpl->tpl_vars['lst_config_column']->value);?>
">

			<div class="p-5 text-center">

				<img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/table-no-data.png" width="150px" />

				<p>Không có dữ liệu</p>

			</div>

		</td>

	</tr>

<?php }
}
}
