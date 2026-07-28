<?php
/* Smarty version 3.1.33, created on 2026-06-11 20:21:22
  from '/www/wwwroot/ca.futurehomes.vn/admin/application/views/member_mf/_ajax.assign_package.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a2ab652ec9591_62507141',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7a412bb39bf3d2c95f9a5843ad35a1f67700945' => 
    array (
      0 => '/www/wwwroot/ca.futurehomes.vn/admin/application/views/member_mf/_ajax.assign_package.tpl',
      1 => 1781183854,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a2ab652ec9591_62507141 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/www/wwwroot/ca.futurehomes.vn/core/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<a href="javascript:void();" class="closeEv close_pop close"><span>×</span></a>
			<h3 class="modal-title"><strong>Gán gói tài khoản</strong></h3>
		</div>
		<form method="post" action="" enctype="multipart/form-data">
			<div class="modal-body">
				<?php if (!empty($_smarty_tpl->tpl_vars['active']->value)) {?>
				<div class="alert alert-info" style="padding:8px 12px;margin-bottom:12px">
					Đang dùng: <strong><?php echo $_smarty_tpl->tpl_vars['active']->value['package_name'];?>
</strong><?php if ($_smarty_tpl->tpl_vars['active']->value['end_date']) {?> — hết hạn <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['active']->value['end_date'],"%d/%m/%Y");
} else { ?> — không giới hạn<?php }?>.
					<br><small class="text-muted">Gán gói mới sẽ thay thế gói hiện tại (gói cũ chuyển sang "Hết hạn").</small>
				</div>
				<?php }?>
				<div class="form-group">
					<label class="col-form-label">Gói <span class="text-red">*</span></label>
					<select name="package_id" class="form-control required">
						<option value="0">— Chọn gói —</option>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_packages']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['p']->value['property_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['title'];
if ($_smarty_tpl->tpl_vars['p']->value['property_code']) {?> (<?php echo $_smarty_tpl->tpl_vars['p']->value['property_code'];?>
)<?php }?></option>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
				</div>
				<div class="form-group form-row">
					<div class="col-md-6">
						<label class="col-form-label">Số ngày hiệu lực</label>
						<input type="number" min="0" step="1" class="form-control" name="days" value="90" />
						<small class="text-muted">Để trống / 0 = không giới hạn.</small>
					</div>
					<div class="col-md-6">
						<label class="col-form-label">Giá đã thu (VNĐ)</label>
						<input type="text" class="form-control" name="price_paid" placeholder="VD: 450.000" value="" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-form-label">Ghi chú</label>
					<textarea class="form-control" name="note" rows="2" placeholder="VD: Admin cấp gói cho CTV..."></textarea>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-success pull-right" onClick="$Core.member.save_member_package(this, event)" data-profile_id="<?php echo $_smarty_tpl->tpl_vars['profile_id']->value;?>
" data-mp_id="0">Lưu lại</button>
				<button type="button" class="btn btn-default mr-half pull-right" data-dismiss="modal">Đóng</button>
			</div>
		</form>
	</div>
</div>
<?php }
}
