<?php
/* Smarty version 3.1.33, created on 2026-07-14 11:09:54
  from '/www/wwwroot/skyrealty.c-a.vn/application/views/ajax/helper/_ajax.open_helper.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a55b692a20694_37222372',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e93f819f5e4a2c9eebcbb67e7566acad4e4fba5' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/views/ajax/helper/_ajax.open_helper.tpl',
      1 => 1783308688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a55b692a20694_37222372 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-dialog modal-ipad">

	<form class="modal-content">

		<div class="modal-header position-relative">

			<h5 class="modal-title">Trung tâm trợ giúp</h5>

			<button type="button" class="btn-close" data-bs-dismiss="modal"></button>

		</div>

		<div class="modal-body">

			<div class="form-group mb-2">

				<label for="nameSlideTop" class="form-label">Nội dung</label>

				<textarea id="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid();?>
" class="form-control isoTextArea" cols="255" rows="25" data-name="content"><?php echo $_smarty_tpl->tpl_vars['helper_page']->value['content'];?>
</textarea>

			</div>

		</div>

		<div class="modal-footer">

			<button data-toggle="ripple" type="button" class="btn btn-outline-default" data-bs-dismiss="modal">Đóng</button>

			<button data-toggle="ripple" type="button" onClick="$Core.helper.edit_helper(this, event)" action="_EDIT" mod_page="<?php echo $_smarty_tpl->tpl_vars['mod_page']->value;?>
" sub_page="<?php echo $_smarty_tpl->tpl_vars['sub_page']->value;?>
" act_page="<?php echo $_smarty_tpl->tpl_vars['act_page']->value;?>
" class="btn btn-primary">Lưu</button>

		</div>

	</form>

</div><?php }
}
