<?php
/* Smarty version 3.1.33, created on 2026-07-04 14:28:38
  from '/www/wwwroot/ca.futurehomes.vn/admin/application/views/permiss/_ajax.permiss.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a48b62624f011_59516685',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a72364aaf4f80e533c46ff756f968e2e189903c9' => 
    array (
      0 => '/www/wwwroot/ca.futurehomes.vn/admin/application/views/permiss/_ajax.permiss.tpl',
      1 => 1781150635,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a48b62624f011_59516685 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-dialog">

	<div class="modal-content">

		<div class="modal-header"> 

			<a href="javascript:void();" class="closeEv close_pop close"><span>×</span></a> 

			<h3 class="modal-title"><strong><?php if ($_smarty_tpl->tpl_vars['action']->value == '_add') {?>Thêm<?php } else { ?>Sửa<?php }?> nhóm</strong></h3>

		</div>

		<form method="post" action="">

			<div class="modal-body">

				<div class="form-group mb-2">

					<label class="col-form-label">Mã nhóm<span class="text-red">*</span></label>

					<input type="text" class="form-control required" placeholder="Mã phân khu" name="code" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == '_edit') {
echo $_smarty_tpl->tpl_vars['onePermiss']->value['code'];
}?>" />

				</div>

				<div class="form-group mb-2">

					<label class="col-form-label">Tên nhóm<span class="text-red">*</span></label>

					<input type="text" class="form-control required" placeholder="Tên nhóm" name="title" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == '_edit') {
echo $_smarty_tpl->tpl_vars['onePermiss']->value['title'];
}?>" />

				</div>

				<div class="form-group mb-2">

					<label class="col-form-label">Miêu tả</label>

					<textarea class="form-control" placeholder="Miêu tả" name="description" cols="255" rows="3"><?php if ($_smarty_tpl->tpl_vars['action']->value == '_edit') {
echo $_smarty_tpl->tpl_vars['onePermiss']->value['description'];
}?></textarea>

				</div>

			</div>

			<div class="modal-footer">

				<button type="button" onClick="$Core.permiss.save_permiss(this, event)" permiss_id="<?php echo $_smarty_tpl->tpl_vars['permiss_id']->value;?>
" 

						profile_type="<?php echo $_smarty_tpl->tpl_vars['profile_type']->value;?>
" tp="<?php echo $_smarty_tpl->tpl_vars['tp']->value;?>
" parent_id="<?php echo $_smarty_tpl->tpl_vars['parent_id']->value;?>
" class="btn btn-success">Lưu lại</button>

				<button type="button" class="btn btn-default pull-right" data-dismiss="modal">Đóng</button>

			</div>

		</form>

	</div>

</div><?php }
}
