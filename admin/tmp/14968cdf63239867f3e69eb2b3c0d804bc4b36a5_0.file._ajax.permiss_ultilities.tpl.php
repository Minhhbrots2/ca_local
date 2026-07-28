<?php
/* Smarty version 3.1.33, created on 2026-07-24 10:23:56
  from '/www/wwwroot/skyrealty.c-a.vn/admin/application/views/setting/_ajax.permiss_ultilities.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a62dacc7b1648_73819848',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14968cdf63239867f3e69eb2b3c0d804bc4b36a5' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/admin/application/views/setting/_ajax.permiss_ultilities.tpl',
      1 => 1783308537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a62dacc7b1648_73819848 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-dialog modal-xs">

	<form class="modal-content" method="POST">

		<div class="modal-header"> 

			<a href="javascript:void();" class="closeEv close_pop close"><span>×</span></a> 

			<h3 class="modal-title"><strong>Phân quyền menu tiện ích</strong></h3>

		</div>

		<div class="modal-body modal-body-scrollable">

			<?php if (!empty($_smarty_tpl->tpl_vars['list_ultilites']->value)) {?>

			<div class="drag_ultilites">

				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_ultilites']->value, '_oItem');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oItem']->value) {
?>

				<div class="d-flex align-items-center gap-2 mb-2 ultilites-item p-2 border" data-id="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['property_id'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['property_id'];?>
">

					<span class="btn btn-sm btn-icon btn-default zindex-1 bg-white btn_drag" title="Giữ vào kéo thả" type="button" style="right:calc(var(--bs-gutter-x) * 0.5)"><i class="fa fa-arrows" aria-hidden="true"></i></span>

					<span><?php echo $_smarty_tpl->tpl_vars['_oItem']->value['title'];?>
</span>

				</div>

				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

			</div>

			<?php }?>

		</div>

		<div class="modal-footer">

			<input type="hidden" name="permiss_ultilities" value='<?php echo $_smarty_tpl->tpl_vars['permiss_ultilities']->value;?>
'>

			<button type="button" class="btn btn-success" for_id="<?php echo $_smarty_tpl->tpl_vars['for_id']->value;?>
" profile_type="<?php echo $_smarty_tpl->tpl_vars['profile_type']->value;?>
" 

				onClick="$Core.property.save_permiss_ultilities(this, event)">

				<span>Lưu lại</span>

			</button>

		</div>

	</form>

</div>

	<?php }
}
