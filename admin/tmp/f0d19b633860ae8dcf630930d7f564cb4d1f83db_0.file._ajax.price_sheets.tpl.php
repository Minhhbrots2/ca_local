<?php
/* Smarty version 3.1.33, created on 2026-07-04 17:21:53
  from '/www/wwwroot/ca.futurehomes.vn/admin/application/views/price_sheets/_ajax.price_sheets.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a48dec1138269_70844608',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0d19b633860ae8dcf630930d7f564cb4d1f83db' => 
    array (
      0 => '/www/wwwroot/ca.futurehomes.vn/admin/application/views/price_sheets/_ajax.price_sheets.tpl',
      1 => 1783156488,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a48dec1138269_70844608 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-dialog <?php if ($_smarty_tpl->tpl_vars['stock_type']->value == @constant('_BLOCK_TYPE_HIGHLEVEL_SALE')) {?>modal-mg<?php } else { ?>modal-ipad<?php }?>">
	<div class="modal-content">
		<div class="modal-header">
			<a href="javascript:void();" class="closeEv close_pop close"><span>×</span></a>
			<h3 class="modal-title"><strong><?php if ($_smarty_tpl->tpl_vars['action']->value == '_add') {?>Thêm mới<?php } else { ?>Chỉnh sửa<?php }?> PTG <?php echo $_smarty_tpl->tpl_vars['stock_type_title']->value;?>
</strong></h3>
		</div>
		<form method="post" action="" enctype="multipart/form-data">
			<input type="hidden" name="stock_type" value="<?php echo $_smarty_tpl->tpl_vars['stock_type']->value;?>
" />
			<div class="modal-body">
				<div class="form-group form-row">
					<div class="col-md-9">
						<label class="col-form-label">Tên PTG <span class="text-red">*</span></label>
						<input type="text" class="form-control required" placeholder="Nhập tên..." name="title" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == '_edit') {
echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];
}?>" />
					</div>
					<div class="col-md-3">
						<label class="col-form-label">Ngày áp dụng <span class="text-red">*</span></label>
						<input type="text" class="form-control datepicker required" placeholder="dd/mm/yy" name="apply_date" value="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->convertTimeToText($_smarty_tpl->tpl_vars['oneItem']->value['apply_date']);?>
" />
					</div>
				</div>
				<div class="form-group form-row">
					<div class="col-md-4">
						<label class="col-form-label">VAT <span class="text-red">*</span></label>
						<div class="input-group-suffix">
							<input type="text" class="form-control numberonly required" placeholder="Nhập VAT..."
								name="vat_rate" onClick="this.select()" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == '_edit') {
echo $_smarty_tpl->tpl_vars['oneItem']->value['vat_rate'];
}?>" />
							<span class="suffix">%</span>
						</div>
					</div>
					<div class="col-md-4">
						<label class="col-form-label">KPBT <span class="text-red">*</span></label>
						<div class="input-group-suffix">
							<input type="text" onClick="this.select()" class="form-control numberonly required" placeholder="Nhập KPBT"
								name="maintenance_rate" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == '_edit') {
echo $_smarty_tpl->tpl_vars['oneItem']->value['maintenance_rate'];
}?>" />
							<span class="suffix">%</span>
						</div>
					</div>
					<div class="col-md-4">
						<label class="col-form-label">Tiền cọc</label>
						<div class="input-group-suffix">
							<input type="text" class="form-control price-In" placeholder="0"
								name="deposit_amount" value="<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['deposit_amount']) {
echo $_smarty_tpl->tpl_vars['oneItem']->value['deposit_amount'];
}?>" />
							<span class="suffix">đ</span>
						</div>
					</div>
				</div>
				<div class="form-group form-row">
					<div class="col-md-4">
						<label class="col-form-label">Tiền đất không chịu thuế /m2</label>
						<div class="input-group-suffix">
							<input type="text" class="form-control price-In" placeholder="0"
								name="tax_fee_m2" value="<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['tax_fee_m2']) {
echo $_smarty_tpl->tpl_vars['oneItem']->value['tax_fee_m2'];
}?>" />
							<span class="suffix">đ</span>
						</div>
					</div>
					<div class="col-md-4">
						<label class="col-form-label">Chiết khấu khác <span class="text-red">*</span></label>
						<div class="input-group-suffix">
							<input type="text" class="form-control numberonly" placeholder="Nhập chiết khấu khác"
								name="other_discount" onClick="this.select()" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == '_edit') {
echo $_smarty_tpl->tpl_vars['oneItem']->value['other_discount'];
}?>" />
							<span class="suffix">%</span>
						</div>
					</div>
				</div>
				<fieldset>
					<legend>Chiết khấu early bird</legend>
						<div class="form-group form-row">
							<div class="col-md-6">
								<div class="scope_item scope_item_6a290aa2b0496588436225">
									<label class="col-form-label">Dành cho cư dân</label>
									<div class="form-row">
										<div class="col-md-8">
											<input type="text" onClick="this.select()" class="form-control numberonly " placeholder="Tiêu đề hiển thị" name="early_bird[early_bird_resident_label]" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == '_edit') {
echo $_smarty_tpl->tpl_vars['early_bird']->value['early_bird_resident_label'];
}?>" />
										</div>
										<div class="col-md-4">
											<div class="input-group-suffix">
												<input type="text" onClick="this.select()" class="form-control numberonly " placeholder="Nhập CK"
													name="early_bird[early_bird_resident_rate]" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == '_edit') {
echo $_smarty_tpl->tpl_vars['early_bird']->value['early_bird_resident_rate'];
}?>" />
												<span class="suffix">%</span>
											</div>
										</div>
									</div>	
								</div>							
							</div>
							<div class="col-md-6">
								<div class="scope_item scope_item_6a290aa2b0496588436225">
									<label class="col-form-label">Dành cho khách hàng khác</label>
									<div class="form-row">
										<div class="col-md-8">
											<input type="text" onClick="this.select()" class="form-control numberonly " placeholder="Tiêu đề hiển thị" name="early_bird[early_bird_other_label]" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == '_edit') {
echo $_smarty_tpl->tpl_vars['early_bird']->value['early_bird_other_label'];
}?>" />
										</div>
										<div class="col-md-4">
											<div class="input-group-suffix">
												<input type="text" onClick="this.select()" class="form-control numberonly " placeholder="Nhập CK"
													name="early_bird[early_bird_other_rate]" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == '_edit') {
echo $_smarty_tpl->tpl_vars['early_bird']->value['early_bird_other_rate'];
}?>" />
												<span class="suffix">%</span>
											</div>
										</div>
									</div>	
								</div>							
							</div>
						</div>
				</fieldset>
				<div class="form-group">
					<label class="col-form-label">Chính sách / Ghi chú thêm</label>
					<textarea class="form-control isoTextArea" id="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid();?>
" placeholder="VD: Early Bird KH mới 1% (ký VBTT trước 20/04); Miễn phí quản lý 12 tháng; Timeline có thể thay đổi theo CĐT..." data-name="description" rows="8" cols="255"><?php if ($_smarty_tpl->tpl_vars['action']->value == '_edit') {
echo $_smarty_tpl->tpl_vars['oneItem']->value['description'];
}?></textarea>
				</div>
				<fieldset>
					<legend>Phạm vi áp dụng</legend>
					<div class="group_scopes">
					<?php if (!empty($_smarty_tpl->tpl_vars['list_scopes']->value)) {?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_scopes']->value, '_oScope', false, 'uid', 'k', array (
  'first' => true,
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['uid']->value => $_smarty_tpl->tpl_vars['_oScope']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_k']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_k']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_k']->value['index'];
?>
						<?php $_smarty_tpl->_assignInScope('list_blocks', $_smarty_tpl->tpl_vars['_oScope']->value['list_blocks']);?>
						<?php $_smarty_tpl->_assignInScope('list_buildings', $_smarty_tpl->tpl_vars['_oScope']->value['list_buildings']);?>
						<div class="scope_item scope_item_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">
							<div class="form-group form-row">
								<div class="col-md-6">
									<label class="col-form-label">Chọn dự án</label>
									<select uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" onchange="$Core.price_sheets.load_option_block(this,event)" name="scope[<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
][project_id]" toId="block_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" class="form-control iso-select2 required">
										<option value="0">Chọn dự án</option>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_projects']->value, 'project', false, NULL, 'i', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['project']->value) {
?>
										<option<?php if ($_smarty_tpl->tpl_vars['project']->value['project_id'] == $_smarty_tpl->tpl_vars['_oScope']->value['project_id']) {?> selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['project']->value['project_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['project']->value['title'];?>
</option>
										<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</select>
								</div>
								<div class="col-md-6">
									<label class="col-form-label">Chọn phân khu</label>
									<?php if ($_smarty_tpl->tpl_vars['stock_type']->value == @constant('_BLOCK_TYPE_LOWFLOOR_SALE')) {?>
									<select uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" id="block_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" name="scope[<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
][block_id][]" multiple="multiple" class="form-control required iso-select2">
										<option value="0">Chọn phân khu</option>
										<?php if (!empty($_smarty_tpl->tpl_vars['list_blocks']->value)) {?>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_blocks']->value, '_oBlock', false, NULL, 'i', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oBlock']->value) {
?>
											<option<?php if ($_smarty_tpl->tpl_vars['_oBlock']->value['selected'] == '1') {?> selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['_oBlock']->value['property_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_oBlock']->value['title'];?>
</option>
											<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										<?php }?>
									</select>
									<?php } else { ?>
									<select uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" id="block_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" onchange="$Core.price_sheets.load_option_building(this,event)" toId="building_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" name="scope[<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
][block_id]" class="form-control required iso-select2">
										<option value="0">Chọn phân khu</option>
										<?php if (!empty($_smarty_tpl->tpl_vars['list_blocks']->value)) {?>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_blocks']->value, '_oBlock', false, NULL, 'i', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oBlock']->value) {
?>
											<option<?php if ($_smarty_tpl->tpl_vars['_oScope']->value['block_id'] == $_smarty_tpl->tpl_vars['_oBlock']->value['property_id']) {?> selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['_oBlock']->value['property_id'];?>
">(<?php echo $_smarty_tpl->tpl_vars['_oBlock']->value['property_code'];?>
) <?php echo $_smarty_tpl->tpl_vars['_oBlock']->value['title'];?>
</option>
											<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										<?php }?>
									</select>
									<?php }?>
								</div>
							</div>
							<?php if ($_smarty_tpl->tpl_vars['stock_type']->value == @constant('_BLOCK_TYPE_HIGHLEVEL_SALE')) {?>
								<div id="building_group_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" class="form-group">
									<label class="col-form-label">Chọn tòa áp dụng</label>
									<select uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" multiple="multiple" id="building_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" data-placeholder="Chọn tòa"
									name="scope[<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
][building_id][]" class="form-control required iso-select2">
										<?php if (!empty($_smarty_tpl->tpl_vars['list_buildings']->value)) {?>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_buildings']->value, '_oBuilding', false, NULL, 'i', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oBuilding']->value) {
?>
											<option<?php if ($_smarty_tpl->tpl_vars['_oBuilding']->value['selected']) {?> selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['_oBuilding']->value['property_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_oBuilding']->value['title'];?>
</option>
											<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										<?php }?>
									</select>
								</div>
							<?php }?>
							<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_k']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_k']->value['first'] : null)) {?>
							<div class="d-flex">
								<button type="button" uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" onClick="$Core.price_sheets.delete_scope(this,event)"
								class="btn btn-sm btn-default"><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('trash','Xóa');?>
</button>
							</div>
							<?php }?>
						</div>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php } else { ?>
						<?php $_smarty_tpl->_assignInScope('uid', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>
						<div class="scope_item scope_item_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">
							<div class="form-group form-row">
								<div class="col-md-6">
									<label class="col-form-label">Chọn dự án</label>
									<select uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" onchange="$Core.price_sheets.load_option_block(this,event)" name="scope[<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
][project_id]" toId="block_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" class="form-control iso-select2 required" data-error="Chưa chọn dự án">
										<option value="0">Chọn dự án</option>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_projects']->value, 'project', false, NULL, 'i', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['project']->value) {
?>
										<option <?php if ($_smarty_tpl->tpl_vars['project_id']->value == $_smarty_tpl->tpl_vars['project']->value['project_id']) {?> selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['project']->value['project_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['project']->value['title'];?>
</option>
										<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</select>
								</div>
								<div class="col-md-6">
									<label class="col-form-label">Chọn phân khu</label>
									<?php if ($_smarty_tpl->tpl_vars['stock_type']->value == @constant('_BLOCK_TYPE_LOWFLOOR_SALE')) {?>
									<select uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" id="block_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" toId="building_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" name="scope[<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
][block_id][]" multiple="multiple" class="form-control required iso-select2" data-error="Chưa chọn phân khu">
										<option value="0">Chọn phân khu</option>
										<?php if (!empty($_smarty_tpl->tpl_vars['list_blocks']->value)) {?>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_blocks']->value, '_oBlock', false, NULL, 'i', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oBlock']->value) {
?>
											<option<?php if ($_smarty_tpl->tpl_vars['block_id']->value == $_smarty_tpl->tpl_vars['_oBlock']->value['property_id']) {?> selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['_oBlock']->value['property_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_oBlock']->value['title'];?>
</option>
											<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										<?php }?>
									</select>
									<?php } else { ?>
									<select uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" id="block_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" onchange="$Core.price_sheets.load_option_building(this,event)" toId="building_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" name="scope[<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
][block_id]" class="form-control required iso-select2" data-error="Chưa chọn phân khu">
										<option value="0">Chọn phân khu</option>
										<?php if (!empty($_smarty_tpl->tpl_vars['list_blocks']->value)) {?>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_blocks']->value, '_oBlock', false, NULL, 'i', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oBlock']->value) {
?>
											<option<?php if ($_smarty_tpl->tpl_vars['block_id']->value == $_smarty_tpl->tpl_vars['_oBlock']->value['property_id']) {?> selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['_oBlock']->value['property_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_oBlock']->value['title'];?>
</option>
											<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										<?php }?>
									</select>
									<?php }?>
								</div>
							</div>
							<?php if ($_smarty_tpl->tpl_vars['stock_type']->value == @constant('_BLOCK_TYPE_HIGHLEVEL_SALE')) {?>
							<div id="building_group_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" class="form-group <?php if ($_smarty_tpl->tpl_vars['action']->value == '_add' && empty($_smarty_tpl->tpl_vars['building_id']->value)) {?>d-none<?php }?>">
								<label class="col-form-label">Chọn tòa áp dụng</label>
								<select uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" multiple="multiple" id="building_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" data-placeholder="Chọn tòa nhà"
								name="scope[<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
][building_id][]" class="form-control iso-select2" data-error="Chưa chọn tòa nhà">
									<?php if (!empty($_smarty_tpl->tpl_vars['list_buildings']->value)) {?>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_buildings']->value, '_oBuilding', false, NULL, 'i', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oBuilding']->value) {
?>
										<option <?php if ($_smarty_tpl->tpl_vars['building_id']->value == $_smarty_tpl->tpl_vars['_oBuilding']->value['property_id']) {?> selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['_oBuilding']->value['property_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_oBuilding']->value['title'];?>
</option>
										<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									<?php }?>
								</select>
							</div>
							<?php }?>
						</div>
					<?php }?>
					</div>
				</fieldset>
				<button type="button" onClick="$Core.price_sheets.add_scope(this, event)" stock_type="<?php echo $_smarty_tpl->tpl_vars['stock_type']->value;?>
" class="btn btn-default text-danger">Thêm áp dụng</button>
				<fieldset class="mt-3">
					<legend>Tiến độ thanh toán</legend>
					<ul class="nav nav-tabs nav-tabs-bordered tablinks_<?php echo $_smarty_tpl->tpl_vars['price_sheet_id']->value;?>
" role="tablist">
						<?php if (!empty($_smarty_tpl->tpl_vars['list_plans']->value)) {?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_plans']->value, '_oPlan', false, NULL, 'p', array (
  'first' => true,
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oPlan']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_p']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_p']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_p']->value['index'];
?>
							<li class="nav-item nav-item-<?php echo $_smarty_tpl->tpl_vars['price_sheet_id']->value;
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_p']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_p']->value['first'] : null)) {?> active<?php }?>">
								<a href="#<?php echo $_smarty_tpl->tpl_vars['_oPlan']->value['plan_id'];?>
" class="nav-link" data-toggle="tab" role="tab"><?php echo $_smarty_tpl->tpl_vars['_oPlan']->value['title'];?>
</a>
							</li>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<?php }?>
						<li class="nav-item">
							<a href="javascript:void(0);" class="nav-link text-danger" onClick="$Core.price_sheets.add_price_plan(this, event)" price_sheet_id="<?php echo $_smarty_tpl->tpl_vars['price_sheet_id']->value;?>
">+ Phương án</a>
						</li>
					</ul>
					<div class="tab-content tabcontents_<?php echo $_smarty_tpl->tpl_vars['price_sheet_id']->value;?>
">
						<?php if (!empty($_smarty_tpl->tpl_vars['list_plans']->value)) {?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_plans']->value, '_oPlan', false, NULL, 'p', array (
  'first' => true,
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oPlan']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_p']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_p']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_p']->value['index'];
?>
							<div class="tab-pane fade py-3<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_p']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_p']->value['first'] : null)) {?> active in<?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['_oPlan']->value['plan_id'];?>
" role="tabpanel">
								<div class="form-row" style="margin-bottom:10px">
									<div class="col-md-4">
										<label class="col-form-label">Chiết khấu</label>
										<input type="text" class="form-control input-sm" name="plan_meta[<?php echo $_smarty_tpl->tpl_vars['_oPlan']->value['plan_id'];?>
][discount_rate]" placeholder="VD: ~13% hoặc Không áp dụng" value="<?php echo $_smarty_tpl->tpl_vars['_oPlan']->value['discount_rate'];?>
" />
									</div>
									<div class="col-md-4">
										<label class="col-form-label">HTLS (Hỗ trợ lãi suất)</label>
										<input type="text" class="form-control input-sm" name="plan_meta[<?php echo $_smarty_tpl->tpl_vars['_oPlan']->value['plan_id'];?>
][htls_rate]" placeholder="VD: 0% hoặc Không áp dụng" value="<?php echo $_smarty_tpl->tpl_vars['_oPlan']->value['htls_rate'];?>
" />
									</div>
									<div class="col-md-4">
										<label class="col-form-label">HTLS đến</label>
										<input type="text" class="form-control input-sm" name="plan_meta[<?php echo $_smarty_tpl->tpl_vars['_oPlan']->value['plan_id'];?>
][htls_until]" placeholder="VD: 31/12/2028" value="<?php echo $_smarty_tpl->tpl_vars['_oPlan']->value['htls_until'];?>
" />
									</div>
								</div>
								<fieldset>
									<legend>Đợt thanh toán</legend>
									<div style="display:flex; align-items:center; gap:8px; margin-bottom:10px; flex-wrap:wrap">
										<label class="text-muted" style="margin:0">Giả định ngày cọc:</label>
										<input type="date" class="form-control input-sm ptg-cocdate" id="cocdate_<?php echo $_smarty_tpl->tpl_vars['price_sheet_id']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['_oPlan']->value['plan_id'];?>
" onchange="$Core.price_sheets.refresh_eta('<?php echo $_smarty_tpl->tpl_vars['price_sheet_id']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['_oPlan']->value['plan_id'];?>
')" data-ps="<?php echo $_smarty_tpl->tpl_vars['price_sheet_id']->value;?>
" data-pp="<?php echo $_smarty_tpl->tpl_vars['_oPlan']->value['plan_id'];?>
" style="max-width:170px" />
										<small class="text-muted">(chỉ xem trước, không lưu)</small>
									</div>
									<table class="table text-nowrap">
										<thead><tr>
											<th class="text-center" width="10%">Đợt</th>
											<th class="text-left" width="35%">Tên mốc/đợt</th>
											<th class="text-right" width="15%">Cách đợt trước</th>
											<th class="text-right" width="15%">Ngày dự kiến</th>
											<th class="text-right" width="10%">Tỉ lệ nộp</th>
											<th class="text-right" width="10%">VAT</th>
											<th class="text-center" width="5%"></th>
										</tr></thead>
										<tbody class="price_sheets_<?php echo $_smarty_tpl->tpl_vars['price_sheet_id']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['_oPlan']->value['plan_id'];?>
">
											<?php echo $_smarty_tpl->tpl_vars['_oPlan']->value['rows_html'];?>

										</tbody>
										<tfoot>
											<tr class="ptg-totals-<?php echo $_smarty_tpl->tpl_vars['price_sheet_id']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['_oPlan']->value['plan_id'];?>
">
												<td colspan="4" class="text-right text-muted"><strong>Tổng tỷ lệ:</strong></td>
												<td class="text-right ptg-total-rate"><strong>0%</strong></td>
												<td colspan="2" class="ptg-total-note text-muted"  style="white-space: break-spaces"></td>
											</tr>
										</tfoot>
									</table>
								</fieldset>
								<button type="button" onClick="$Core.price_sheets.open_option(this, event)" price_sheet_id="<?php echo $_smarty_tpl->tpl_vars['price_sheet_id']->value;?>
" price_plan_id="<?php echo $_smarty_tpl->tpl_vars['_oPlan']->value['plan_id'];?>
" stock_type="<?php echo $_smarty_tpl->tpl_vars['stock_type']->value;?>
" class="btn btn-default text-danger"><i class="fa fa-plus"></i> Thêm đợt thanh toán</button>
								<button type="button" onClick="$Core.price_sheets.edit_price_plan(this, event)" price_sheet_id="<?php echo $_smarty_tpl->tpl_vars['price_sheet_id']->value;?>
" price_plan_id="<?php echo $_smarty_tpl->tpl_vars['_oPlan']->value['plan_id'];?>
" class="btn btn-link text-muted"><i class="fa fa-edit"></i> Sửa tên</button>
								<button type="button" onClick="$Core.price_sheets.clone_price_plan(this, event)" price_sheet_id="<?php echo $_smarty_tpl->tpl_vars['price_sheet_id']->value;?>
" price_plan_id="<?php echo $_smarty_tpl->tpl_vars['_oPlan']->value['plan_id'];?>
" class="btn btn-link text-muted"><i class="fa fa-copy"></i> Nhân bản phương án</button>
								<button type="button" onClick="$Core.price_sheets.delete_price_plan(this, event)" price_sheet_id="<?php echo $_smarty_tpl->tpl_vars['price_sheet_id']->value;?>
" price_plan_id="<?php echo $_smarty_tpl->tpl_vars['_oPlan']->value['plan_id'];?>
" class="btn btn-link text-muted"><i class="fa fa-trash"></i> Xóa phương án</button>
							</div>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<?php } else { ?>
							<p class="text-muted py-3">Chưa có phương án. Bấm "+ Phương án" để thêm lịch thanh toán.</p>
						<?php }?>
					</div>
				</fieldset>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-success pull-right" onClick="$Core.price_sheets.pop_save_price_sheet(this, event)"
					price_sheet_id="<?php echo $_smarty_tpl->tpl_vars['price_sheet_id']->value;?>
"><?php if ($_smarty_tpl->tpl_vars['action']->value == '_add') {?>Lưu lại<?php } else { ?>Cập nhật<?php }?></button>
				<button type="button" class="btn btn-default mr-half pull-right" data-dismiss="modal">Đóng</button>
			</div>
		</form>
	</div>
</div>

<style type="text/css">
	.datepicker{ max-width:100%}
	.form-group{ margin-bottom:10px !important;}
	.scope_item{ padding:10px; margin-bottom:5px; border:1px solid #DDD; border-radius:3px; -moz-border-radius:3px; -webkit-border-radius:3px; -khtml-border-radius:3px; }
</style>

<?php }
}
