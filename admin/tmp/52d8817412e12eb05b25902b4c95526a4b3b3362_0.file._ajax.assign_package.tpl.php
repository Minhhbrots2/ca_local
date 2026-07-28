<?php
/* Smarty version 3.1.33, created on 2026-07-02 19:44:05
  from '/www/wwwroot/ca.futurehomes.vn/admin/application/views/member/_ajax.assign_package.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a465d158a9382_25867986',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52d8817412e12eb05b25902b4c95526a4b3b3362' => 
    array (
      0 => '/www/wwwroot/ca.futurehomes.vn/admin/application/views/member/_ajax.assign_package.tpl',
      1 => 1782979577,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a465d158a9382_25867986 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/www/wwwroot/ca.futurehomes.vn/core/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<a href="javascript:void();" class="closeEv close_pop close"><span>×</span></a>
			<h3 class="modal-title"><strong><?php if ($_smarty_tpl->tpl_vars['mp']->value['id']) {?>Sửa<?php } else { ?>Gán<?php }?> gói tài khoản</strong></h3>
		</div>
		<form method="post" action="" enctype="multipart/form-data">
			<div class="modal-body">
				<div class="form-group">
					<label class="col-form-label">Gói <span class="text-red">*</span></label>
					<select name="package_id" class="form-control required" onChange="$Core.member.package_changed(this)">
						<option value="0">— Chọn gói —</option>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_packages']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['p']->value['property_id'];?>
"<?php if ($_smarty_tpl->tpl_vars['mp']->value['package_id'] == $_smarty_tpl->tpl_vars['p']->value['property_id']) {?> selected<?php }?> data-price-1="<?php echo $_smarty_tpl->tpl_vars['p']->value['prices'][1];?>
" data-price-3="<?php echo $_smarty_tpl->tpl_vars['p']->value['prices'][3];?>
" data-price-6="<?php echo $_smarty_tpl->tpl_vars['p']->value['prices'][6];?>
" data-price-12="<?php echo $_smarty_tpl->tpl_vars['p']->value['prices'][12];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['title'], ENT_QUOTES, 'UTF-8', true);
if ($_smarty_tpl->tpl_vars['p']->value['property_code']) {?> (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['property_code'], ENT_QUOTES, 'UTF-8', true);?>
)<?php }?></option>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
				</div>
				<div class="form-group form-row">
					<div class="col-md-6">
						<label class="col-form-label">Thời hạn</label>
						<select name="duration_preset" class="form-control" onChange="$Core.member.apply_package_duration(this)">
							<option value="0">— Tự nhập ngày —</option>
							<option value="1">1 tháng</option>
							<option value="3">3 tháng</option>
							<option value="6">6 tháng</option>
							<option value="12">1 năm</option>
						</select>
					</div>
					<div class="col-md-6">
						<label class="col-form-label">Giá đã thu</label>
						<input type="text" class="form-control" name="price_paid" placeholder="VD: 450.000" value="<?php echo $_smarty_tpl->tpl_vars['mp']->value['price_paid'];?>
" />
					</div>
				</div>
				<div class="form-group form-row">
					<div class="col-md-6">
						<label class="col-form-label">Ngày bắt đầu</label>
						<input type="text" class="form-control datepicker" name="start_date" placeholder="dd/mm/yyyy" value="<?php if ($_smarty_tpl->tpl_vars['mp']->value['start_date']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['mp']->value['start_date'],'%d/%m/%Y');
}?>" />
					</div>
					<div class="col-md-6">
						<label class="col-form-label">Ngày hết hạn <small class="text-muted">(trống = không giới hạn)</small></label>
						<input type="text" class="form-control datepicker" name="end_date" placeholder="dd/mm/yyyy" value="<?php if ($_smarty_tpl->tpl_vars['mp']->value['end_date']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['mp']->value['end_date'],'%d/%m/%Y');
}?>" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-form-label">Trạng thái</label>
					<select name="status" class="form-control">
						<option value="active"<?php if (!$_smarty_tpl->tpl_vars['mp']->value['id'] || $_smarty_tpl->tpl_vars['mp']->value['status'] == 'active') {?> selected<?php }?>>Đang dùng</option>
						<option value="expired"<?php if ($_smarty_tpl->tpl_vars['mp']->value['status'] == 'expired') {?> selected<?php }?>>Hết hạn</option>
						<option value="cancelled"<?php if ($_smarty_tpl->tpl_vars['mp']->value['status'] == 'cancelled') {?> selected<?php }?>>Đã hủy</option>
					</select>
				</div>
				<div class="form-group">
					<label class="col-form-label">Ghi chú</label>
					<textarea class="form-control" name="note" rows="2"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mp']->value['note'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-success pull-right" onClick="$Core.member.save_member_package(this, event)" data-profile_id="<?php echo $_smarty_tpl->tpl_vars['profile_id']->value;?>
" data-mp_id="<?php if ($_smarty_tpl->tpl_vars['mp']->value['id']) {
echo $_smarty_tpl->tpl_vars['mp']->value['id'];
} else { ?>0<?php }?>">Lưu lại</button>
				<button type="button" class="btn btn-default mr-half pull-right" data-dismiss="modal">Đóng</button>
			</div>
		</form>
	</div>
</div>
<?php }
}
