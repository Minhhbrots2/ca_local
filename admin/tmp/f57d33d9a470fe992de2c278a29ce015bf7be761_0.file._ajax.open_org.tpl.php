<?php
/* Smarty version 3.1.33, created on 2026-01-28 08:50:54
  from '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/setting/_ajax.open_org.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_69796b7e327b64_52102977',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f57d33d9a470fe992de2c278a29ce015bf7be761' => 
    array (
      0 => '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/setting/_ajax.open_org.tpl',
      1 => 1748079645,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69796b7e327b64_52102977 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-dialog modal-sm" style="max-width: 600px">
	<div class="modal-content">
		<div class="modal-header"> 
			<a href="javascript:void();" class="closeEv close_pop close"><span>×</span></a> 
			<h3 class="modal-title"><strong><?php echo $_smarty_tpl->tpl_vars['titlePage']->value;?>
</strong></h3>
		</div>
		<form method="post" action="" enctype="multipart/form-data">
			<div class="modal-body">
				<div class="form-group form-row">
					<label class="col-form-label text-right">Chức vụ</label>
					<select class="form-control iso-select2 required" name="role_id">
						<?php echo $_smarty_tpl->tpl_vars['clsProperty']->value->getListOption('_ROLE',$_smarty_tpl->tpl_vars['oneItem']->value['role_id']);?>

					</select>
				</div>
				<div class="form-group form-row">
					<label class="col-form-label text-right">Text</label>
					<input type="text" class="form-control" name="text_name" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['text_name'];?>
">
				</div>
				<div class="form-group form-row">
					<label class="col-form-label text-right">Đương nhiệm</label>
					<select class="form-control iso-select2" name="staff_id">
						<option value="0">--Chọn--</option>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lstProfile']->value, '_oProfile');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oProfile']->value) {
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['_oProfile']->value['profile_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['oneItem']->value['staff_id'] == $_smarty_tpl->tpl_vars['_oProfile']->value['profile_id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['clsProfile']->value->getFullname($_smarty_tpl->tpl_vars['_oProfile']->value['profile_id'],$_smarty_tpl->tpl_vars['_oProfile']->value);?>
</option>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
				</div>
			</div>
			<div class="modal-footer">
				<input type="hidden" name="level" value="<?php echo $_smarty_tpl->tpl_vars['level']->value;?>
">
				<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
				<input type="hidden" name="parent_id" value="<?php echo $_smarty_tpl->tpl_vars['parent_id']->value;?>
">
				<input type="hidden" name="common_parent_id" value="<?php echo $_smarty_tpl->tpl_vars['common_parent_id']->value;?>
">
				<input type="hidden" name="top" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['position']['top'];?>
">
				<input type="hidden" name="left" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['position']['left'];?>
">
				<button type="button" onClick="$Core.org_chart.render_node(this, event)" data-key="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="btn btn-success">
					<span>Lưu lại</span>
				</button>
				<button type="button" class="btn btn-default mr-half pull-right" data-dismiss="modal">
					<span>Đóng</span>
				</button>
			</div>
		</form>
	</div>
</div>
<?php }
}
