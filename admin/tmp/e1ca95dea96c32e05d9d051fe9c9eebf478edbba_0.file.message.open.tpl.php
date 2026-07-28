<?php
/* Smarty version 3.1.33, created on 2025-11-28 18:41:38
  from '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/setting/message.open.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_69298a721877b2_26884984',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1ca95dea96c32e05d9d051fe9c9eebf478edbba' => 
    array (
      0 => '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/setting/message.open.tpl',
      1 => 1730083834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69298a721877b2_26884984 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-dialog" role="document">
	<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Tìm kiếm sản phẩm</h5>
			<button type="button" class="close close_pop" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		</div>
		<form method="post">
			<div class="modal-body">
				<div class="form-group">
					<label for="" class="form-control-label">KEY</label>
					<input type="text" class="form-control required" name="setting" placeholder="Tìm kiếm sản phẩm" />
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary close_pop" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Close');?>
</button>
				<button type="button" class="btn btn-success" onClick="add_message(this)"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Update');?>
</button>
			</div>
		</form>
	</div>
</div><?php }
}
