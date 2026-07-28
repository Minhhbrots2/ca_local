<?php
/* Smarty version 3.1.33, created on 2026-07-02 20:43:34
  from '/www/wwwroot/ca.futurehomes.vn/admin/application/views/package/_ajax.package.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a466b0634b0f4_94170167',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '607994decfee2072c2bc9b2de03108b58bda829d' => 
    array (
      0 => '/www/wwwroot/ca.futurehomes.vn/admin/application/views/package/_ajax.package.tpl',
      1 => 1781150634,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a466b0634b0f4_94170167 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-dialog modal-ipad">
	<div class="modal-content">
		<div class="modal-header">
			<a href="javascript:void();" class="closeEv close_pop close"><span>×</span></a>
			<h3 class="modal-title"><strong><?php if ($_smarty_tpl->tpl_vars['action']->value == '_add') {?>Thêm gói<?php } else { ?>Sửa gói<?php }?> tài khoản</strong></h3>
		</div>
		<form method="post" action="" enctype="multipart/form-data">
			<div class="modal-body">
				<div class="form-group form-row">
					<div class="col-md-8">
						<label class="col-form-label">Tên gói <span class="text-red">*</span></label>
						<input type="text" class="form-control required" placeholder="VD: Gói Pro" name="title" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
" />
					</div>
					<div class="col-md-4">
						<label class="col-form-label">Mã gói</label>
						<input type="text" class="form-control" placeholder="VD: PRO" name="property_code" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['property_code'];?>
" />
					</div>
				</div>
				<div class="form-group form-row">
					<div class="col-md-4">
						<label class="col-form-label">Giá 3 tháng</label>
						<div class="input-group-suffix">
							<input type="text" class="form-control price-In" placeholder="0" name="price_3month" value="<?php if ($_smarty_tpl->tpl_vars['mi']->value['price_3month']) {
echo $_smarty_tpl->tpl_vars['mi']->value['price_3month'];
}?>" />
							<span class="suffix">đ</span>
						</div>
					</div>
					<div class="col-md-4">
						<label class="col-form-label">Giá 6 tháng</label>
						<div class="input-group-suffix">
							<input type="text" class="form-control price-In" placeholder="0" name="price_6month" value="<?php if ($_smarty_tpl->tpl_vars['mi']->value['price_6month']) {
echo $_smarty_tpl->tpl_vars['mi']->value['price_6month'];
}?>" />
							<span class="suffix">đ</span>
						</div>
					</div>
					<div class="col-md-4">
						<label class="col-form-label">Giá 12 tháng</label>
						<div class="input-group-suffix">
							<input type="text" class="form-control price-In" placeholder="0" name="price_year" value="<?php if ($_smarty_tpl->tpl_vars['mi']->value['price_year']) {
echo $_smarty_tpl->tpl_vars['mi']->value['price_year'];
}?>" />
							<span class="suffix">đ</span>
						</div>
					</div>
				</div>
				<div class="form-group form-row">
					<div class="col-md-4">
						<label class="col-form-label">Số ngày dùng thử</label>
						<div class="input-group-suffix">
							<input type="number" min="0" step="1" class="form-control numberonly" placeholder="0" name="day_trial" value="<?php if ($_smarty_tpl->tpl_vars['mi']->value['day_trial']) {
echo $_smarty_tpl->tpl_vars['mi']->value['day_trial'];
}?>" />
							<span class="suffix">ngày</span>
						</div>
					</div>
					<div class="col-md-4">
						<label class="col-form-label">Thứ tự</label>
						<input type="number" class="form-control numberonly" name="order_no" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['order_no'];?>
" />
					</div>
					<div class="col-md-4">
						<label class="col-form-label">Hiển thị bảng giá (web)</label>
						<div>
							<label class="switch">
								<input type="hidden" name="show_pricing" value="0" />
								<input type="checkbox" name="show_pricing" value="1" <?php if ($_smarty_tpl->tpl_vars['mi']->value['show_pricing']) {?>checked<?php }?> />
								<span class="slider round"></span>
							</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-form-label">Quyền lợi / tính năng <small class="text-muted">(tạo danh sách ul/li, in đậm…)</small></label>
					<textarea class="form-control isoTextArea" id="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid();?>
" data-name="features" rows="8"><?php echo $_smarty_tpl->tpl_vars['mi']->value['features'];?>
</textarea>
				</div>
				<div class="form-group">
					<label class="col-form-label">Giới thiệu gói</label>
					<textarea class="form-control" name="package_intro" rows="3"><?php echo $_smarty_tpl->tpl_vars['mi']->value['package_intro'];?>
</textarea>
				</div>
				<div class="form-group">
					<label class="col-form-label">Điều khoản dùng thử</label>
					<textarea class="form-control" name="trial_terms" rows="3"><?php echo $_smarty_tpl->tpl_vars['mi']->value['trial_terms'];?>
</textarea>
				</div>
				<div class="form-group form-row">
					<div class="col-md-4">
						<label class="col-form-label">Màu nhãn gói</label>
						<input type="color" class="form-control" name="bgcolor" value="<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['bgcolor']) {
echo $_smarty_tpl->tpl_vars['oneItem']->value['bgcolor'];
} else { ?>#a4161a<?php }?>" />
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-success pull-right" onClick="$Core.package.pop_save(this, event)" property_id="<?php echo $_smarty_tpl->tpl_vars['property_id']->value;?>
"><?php if ($_smarty_tpl->tpl_vars['action']->value == '_add') {?>Lưu lại<?php } else { ?>Cập nhật<?php }?></button>
				<button type="button" class="btn btn-default mr-half pull-right" data-dismiss="modal">Đóng</button>
			</div>
		</form>
	</div>
</div>
<?php }
}
