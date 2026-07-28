<?php
/* Smarty version 3.1.33, created on 2026-03-12 13:14:11
  from '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/shop/_ajax.open.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_69b259b39baa54_24954539',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ff47eb2a6a2fc3e93cda85a93c8057b149c8cba' => 
    array (
      0 => '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/shop/_ajax.open.tpl',
      1 => 1760776335,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./_ajax.template.tpl' => 1,
  ),
),false)) {
function content_69b259b39baa54_24954539 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-dialog modal-md">
	<div class="modal-content">
		<div class="modal-header"> 
			<a href="javascript:void();" class="closeEv close_pop close"><span>×</span></a> 
			<h3 class="modal-title"><strong><?php echo $_smarty_tpl->tpl_vars['titlePage']->value;?>
</strong></h3>
		</div>
		<?php $_smarty_tpl->_assignInScope('gId', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>
		<form class="d-none" enctype="multipart/form-data">
			<input id="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" class="select_file_<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" accept="image/jpeg,image/jpg,image/png,application/pdf" type="file" charset="UTF-8" onChange="$Core.shop.upload_file(this, event)" name="upload_file" />
			<input id="select_image_<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" class="select_image_<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" accept="image/jpeg,image/jpg,image/png" type="file" charset="UTF-8" onChange="$Core.shop.upload_image(this, event)" name="upload_image[]" multiple />
		</form>
		<form method="post" action="" enctype="multipart/form-data">
			<div class="modal-body">
				<div class="form-group form-row">
					<label class="col-md-2 col-form-label text-right">Tiêu đề</label>
					<div class="col-md-7">
						<input class="form-control required" placeholder="Tên cửa hàng/tiện ích" maxlength="255" name="title" 
							   value="<?php if ($_smarty_tpl->tpl_vars['action']->value == '_edit') {
echo $_smarty_tpl->tpl_vars['oneShop']->value['title'];
}?>" />
					</div>
					<label class="col-md-1 col-form-label text-right">Danh mục</label>
					<?php $_smarty_tpl->_assignInScope('toId', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>
					<div class="col-md-2">
						<select class="form-control" onChange="$Core.shop.get_subcategory(this, event)" toId="<?php echo $_smarty_tpl->tpl_vars['toId']->value;?>
" name="cat_id">
							<?php echo $_smarty_tpl->tpl_vars['clsProperty']->value->getSelectSingleProperty('_SHOP',0,$_smarty_tpl->tpl_vars['oneShop']->value['cat_id'],"Chọn danh mục");?>

						</select>
					</div>
				</div>
				<div class="form-group form-row">
					<label class="col-md-2 col-form-label text-right">Template</label>
					<div class="col-md-10">
						<select name="template_id" class="form-control" onChange="$Core.shop.getForm(this, event)" data-shop-id="<?php echo $_smarty_tpl->tpl_vars['oneShop']->value['shop_id'];?>
" data-tempate-id="<?php if (isset($_smarty_tpl->tpl_vars['more_information']->value['dynamic']['template_id'])) {
echo $_smarty_tpl->tpl_vars['more_information']->value['dynamic']['template_id'];
}?>">
							<option value="">--- Chọn mẫu ---</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lstSetting']->value, 'itemSetting', false, 'keySetting', 'nameSetting', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['keySetting']->value => $_smarty_tpl->tpl_vars['itemSetting']->value) {
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['itemSetting']->value['setting_id'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['more_information']->value['dynamic']['template_id']) && $_smarty_tpl->tpl_vars['itemSetting']->value['setting_id'] == $_smarty_tpl->tpl_vars['more_information']->value['dynamic']['template_id']) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['itemSetting']->value['title'];?>
</option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</select>
					</div>
				</div>
                <div class="js-form-template">
                    <?php if (!empty($_smarty_tpl->tpl_vars['more_information']->value['dynamic']) && !empty($_smarty_tpl->tpl_vars['configForm']->value)) {?>
                        <?php $_smarty_tpl->_subTemplateRender("file:./_ajax.template.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('information'=>$_smarty_tpl->tpl_vars['more_information']->value['dynamic'],'configForm'=>$_smarty_tpl->tpl_vars['configForm']->value), 0, false);
?>
                    <?php }?>
                </div>
				<div class="form-group form-row">
					<label class="col-md-2 col-form-label text-right">Danh mục con</label>
					<div class="col-md-10">
						<select id="<?php echo $_smarty_tpl->tpl_vars['toId']->value;?>
" name="list_cat_id[]" multiple="multiple" class="form-control iso-select2">
							<?php echo $_smarty_tpl->tpl_vars['html_subcategory_options']->value;?>

						</select>
					</div>
				</div>
				<div class="form-group form-row">
					<label class="col-md-2 col-form-label text-right">Điện thoại</label>
					<div class="col-md-10">
						<input class="form-control" name="phone" placeholder="Nhập điện thoại..." value="<?php if ($_smarty_tpl->tpl_vars['action']->value == '_edit') {
echo $_smarty_tpl->tpl_vars['more_information']->value['phone'];
}?>" />
					</div>
				</div>
				<div class="form-group form-row">
					<label class="col-md-2 col-form-label text-right">Tags</label>
					<div class="col-md-10">
						<input class="form-control input-tags" placeholder="Nhập tag..." name="tags" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == '_edit') {
echo $_smarty_tpl->tpl_vars['oneShop']->value['tags'];
}?>" />
					</div>
				</div>
				<div class="form-group form-row">
					<label class="col-md-2 col-form-label text-right">Vị trí Map</label>
					<div class="col-md-10">
						<input class="form-control" name="map" placeholder="https://goo.gl/maps/..." value="<?php if ($_smarty_tpl->tpl_vars['action']->value == '_edit') {
echo $_smarty_tpl->tpl_vars['more_information']->value['map'];
}?>" />
					</div>
				</div>
				<div class="form-group form-row">
					<label class="col-md-2 col-form-label text-right">Thời gian mở</label>
					<div class="col-md-2">
						<input type="time" class="form-control" name="open_at_time" placeholder="https://goo.gl/maps/..." value="<?php if ($_smarty_tpl->tpl_vars['action']->value == '_edit') {
echo $_smarty_tpl->tpl_vars['more_information']->value['open_at_time'];
}?>" />
					</div>
					<label class="col-md-2 col-form-label text-right">Thời gian đóng</label>
					<div class="col-md-2">
						<input type="time" class="form-control" name="close_at_time" placeholder="https://goo.gl/maps/..." value="<?php if ($_smarty_tpl->tpl_vars['action']->value == '_edit') {
echo $_smarty_tpl->tpl_vars['more_information']->value['close_at_time'];
}?>" />
					</div>
				</div>
				<div class="form-group form-row">
					<label class="col-md-2 col-form-label text-right">Hình ảnh</label>
					<div class="col-md-10">
						<div class="input-group">
							<input type="text" id="content_file_<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" class="form-control required" name="image" 
								   value="<?php if ($_smarty_tpl->tpl_vars['action']->value == '_edit') {
echo $_smarty_tpl->tpl_vars['oneShop']->value['image'];
}?>" placeholder="Tài liệu đính kèm" />
							<div class="input-group-btn">
								<button type="button" toId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" onClick="$Core.shop.select_file(this, event)" 
								class="btn btn-default"><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('upload','Chọn');?>
</button>
								<!--<button type="button" toId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" onClick="$Core.shop.select_heic_file(this, event)" 
								class="btn btn-default"><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('upload','Chọn HEIC');?>
</button> -->
							</div>
						</div>
					</div>
				</div>
				<div class="form-group form-row">
					<label class="col-md-2 col-form-label text-right">Dự án</label>
					<div class="col-md-3">
						<select name="project_id" onChange="$Core.shop.select_block(this, event)" toId="slb_Block_Id" class="form-control">
							<option value="0">Chọn dự án</option>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_projects']->value, '_project', false, NULL, 'i', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_project']->value) {
?>
							<option<?php if ($_smarty_tpl->tpl_vars['oneShop']->value['project_id'] == $_smarty_tpl->tpl_vars['_project']->value['project_id']) {?> selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['_project']->value['project_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_project']->value['title'];?>
</option>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</select>
					</div>
					<label class="col-md-1 col-form-label">Phân khu</label>
					<div class="col-md-2">
						<select name="block_id" id="slb_Block_Id" onChange="$Core.shop.select_building(this, event)" 
						toId="slb_Building_Id" class="form-control iso-select2">
							<option>Chọn phân khu</option>
							<?php if (!empty($_smarty_tpl->tpl_vars['list_blocks']->value)) {?>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_blocks']->value, '_oBlock');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oBlock']->value) {
?>
								<option<?php if ($_smarty_tpl->tpl_vars['oneShop']->value['block_id'] == $_smarty_tpl->tpl_vars['_oBlock']->value['property_id']) {?> selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['_oBlock']->value['property_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_oBlock']->value['title'];?>
</option>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							<?php }?>
						</select>
					</div>
					<label class="col-md-1 col-form-label">Tòa nhà</label>
					<div class="col-md-3">
						<select name="building_id" id="slb_Building_Id" class="form-control iso-select2">
							<option>Chọn tòa nhà</option>
							<?php if (!empty($_smarty_tpl->tpl_vars['list_buildings']->value)) {?>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_buildings']->value, '_oBuilding');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oBuilding']->value) {
?>
								<option<?php if ($_smarty_tpl->tpl_vars['oneShop']->value['building_id'] == $_smarty_tpl->tpl_vars['_oBuilding']->value['property_id']) {?> selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['_oBuilding']->value['property_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_oBuilding']->value['title'];?>
</option>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							<?php }?>
						</select>
					</div>
				</div>
                <div class="form-group form-row">
					<label class="col-md-2 col-form-label text-right">Địa chị cụ thể: </label>
					<div class="col-md-10">
						<input type="text" class="form-control" name="address" placeholder="Địa chỉ cụ thể" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == '_edit') {
echo $_smarty_tpl->tpl_vars['more_information']->value['address'];
}?>" />
					</div>
				</div>
				<div class="form-group form-row">
					<label class="col-md-2 col-form-label text-right">Nội dung</label>
					<div class="col-md-10">
						<textarea class="form-control isoTextArea" data-field="intro" id="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid();?>
"><?php if ($_smarty_tpl->tpl_vars['action']->value == '_edit') {
echo $_smarty_tpl->tpl_vars['oneShop']->value['intro'];
}?></textarea>
					</div>
				</div>
                <div class="form-group config-gallery form-row">
                    <label class="col-md-2 col-form-label text-right">Ảnh menu</label>
					<div class="col-md-10">
                        <div class="dropzone content-image" style="cursor: pointer;" id="image-menu_select_image_<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
">
                            <?php $_smarty_tpl->_assignInScope('imagesMenu', $_smarty_tpl->tpl_vars['more_information']->value['image_menu']);?>
                            <?php if (!empty($_smarty_tpl->tpl_vars['imagesMenu']->value)) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['imagesMenu']->value, '_item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_item']->value) {
?>
                                    <div class="item-img" isoman_for_id="image-menu" isoman_val="" isoman_name="image">
                                        <img width="100" height="100" id="isoman_show_image-menu" src="<?php echo $_smarty_tpl->tpl_vars['_item']->value;?>
">
                                        <button type="button" class="btn btn-del-image" onClick="$Core.shop.del_photo(this, event)"><i class="fa fa-times-circle" aria-hidden="true"></i></button>
                                        <input type="hidden" name="image_menu[]" value="<?php echo $_smarty_tpl->tpl_vars['_item']->value;?>
">
                                    </div>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }?>
                            <div class="item-img img-empty" for_id="image-menu" isoman_multiple="1" toId="select_image_<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" folder_id="<?php echo @constant('GOOGLE_DRIVE_SHOP_MENU_ID');?>
" onClick="$Core.shop.select_file2(this, event)">
                                <i class="fa fa-plus-circle"></i>
                            </div>
                        </div>
                    </div>
				</div>
				<div class="form-group config-gallery form-row">
                    <label class="col-md-2 col-form-label text-right">Chọn ảnh Cửa hàng</label>
                    <div class="col-md-10">
                        <div class="dropzone content-image" style="cursor: pointer;" id="image-content_select_image_<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
">
                            <?php $_smarty_tpl->_assignInScope('imagesGallery', $_smarty_tpl->tpl_vars['more_information']->value['image_shop_gallery']);?>
                            <?php if (!empty($_smarty_tpl->tpl_vars['imagesGallery']->value)) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['imagesGallery']->value, '_item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_item']->value) {
?>
                                    <div class="item-img" isoman_for_id="image-content" isoman_val="" isoman_name="image">
                                        <img width="100" height="100" id="isoman_show_image-content" src="<?php echo $_smarty_tpl->tpl_vars['_item']->value;?>
">
                                        <button type="button" class="btn btn-del-image" onClick="$Core.shop.del_photo(this, event)"><i class="fa fa-times-circle" aria-hidden="true"></i></button>
                                        <input type="hidden" name="image_gallery[]" value="<?php echo $_smarty_tpl->tpl_vars['_item']->value;?>
">
                                    </div>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }?>
							<div class="item-img img-empty" for_id="image-content" isoman_multiple="1" toId="select_image_<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" folder_id="<?php echo @constant('GOOGLE_DRIVE_SHOP_ID');?>
" onClick="$Core.shop.select_file2(this, event)">
                                <i class="fa fa-plus-circle"></i>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" onClick="$Core.shop.save(this, event)" shop_id="<?php echo $_smarty_tpl->tpl_vars['shop_id']->value;?>
" class="btn btn-success">
					<span>Lưu lại</span>
				</button>
				<button type="button" class="btn btn-default mr-half pull-right" data-dismiss="modal">
					<span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Close');?>
</span>
				</button>
			</div>
		</form>
	</div>
</div><?php }
}
