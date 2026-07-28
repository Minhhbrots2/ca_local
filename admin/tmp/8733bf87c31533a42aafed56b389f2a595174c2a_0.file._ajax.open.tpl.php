<?php
/* Smarty version 3.1.33, created on 2026-05-07 16:56:52
  from '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/docs/_ajax.open.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_69fc61e48e7f22_77684009',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8733bf87c31533a42aafed56b389f2a595174c2a' => 
    array (
      0 => '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/docs/_ajax.open.tpl',
      1 => 1765511524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69fc61e48e7f22_77684009 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-dialog modal-ipad">
	<div class="modal-content">
		<div class="modal-header"> 
			<a href="javascript:void();" class="closeEv close_pop close"><span>×</span></a> 
			<h3 class="modal-title"><strong><?php echo $_smarty_tpl->tpl_vars['titlePage']->value;?>
</strong></h3>
		</div>
		<?php $_smarty_tpl->_assignInScope('toId', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>
		<form class="d-none" enctype="multipart/form-data">
			<input id="<?php echo $_smarty_tpl->tpl_vars['toId']->value;?>
" class="select_file_<?php echo $_smarty_tpl->tpl_vars['toId']->value;?>
" accept="image/jpeg,image/jpg,image/png,application/pdf" type="file" charset="UTF-8" onChange="$Core.docs.upload_file(this, event)" name="upload_file[]" multiple <?php if (!empty($_smarty_tpl->tpl_vars['more_information']->value['folder_id'])) {?> folder_id="<?php echo $_smarty_tpl->tpl_vars['more_information']->value['folder_id'];?>
"<?php }?> />
			<input id="<?php echo $_smarty_tpl->tpl_vars['toId']->value;?>
" class="select_image_<?php echo $_smarty_tpl->tpl_vars['toId']->value;?>
" accept="image/jpeg,image/jpg,image/png,application/pdf" type="file" charset="UTF-8" onChange="$Core.docs.upload_image(this, event)" name="upload_image"<?php if (!empty($_smarty_tpl->tpl_vars['more_information']->value['folder_id'])) {?> folder_id="<?php echo $_smarty_tpl->tpl_vars['more_information']->value['folder_id'];?>
"<?php }?> />
		</form>
		<form method="post" action="">
			<div class="modal-body">
				<div class="form-group">
					<label class="col-form-label">Tên tài liệu</label>
					<input type="text" id="title_field_<?php echo $_smarty_tpl->tpl_vars['toId']->value;?>
" class="form-control required" name="title" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == '_edit') {
echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];
}?>" placeholder="Tên tài liệu" />
				</div>
				<div class="form-group">
					<label class="form-label mb-1">Từ khóa tìm kiếm:</label>
					<input type="text" id="input-tags" class="input-tags" name="tags" placeholder="Nhập keyword" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == '_edit') {
echo $_smarty_tpl->tpl_vars['oneItem']->value['tags'];
}?>" />
				</div>
				<div class="form-group">
					<label class="col-form-label">Mô tả</label>
					<div class="d-flex align-items-center gap-2">
						<textarea name="intro" id="" cols="30" rows="4" class="form-control"><?php echo $_smarty_tpl->tpl_vars['more_information']->value['intro'];?>
</textarea>
					</div>
				</div>
				<div class="form-group form-row">
					<div class="col-md-6">
						<div class="d-flex align-items-center justify-content-between col-form-label">
							<span>Tài liệu đính kèm</span>
							<?php if (!empty($_smarty_tpl->tpl_vars['more_information']->value['folder_id'])) {?>
							<input type="hidden" name="folder_id" value="<?php echo $_smarty_tpl->tpl_vars['more_information']->value['folder_id'];?>
" />
							<a href="javascript:void(0);" toId="<?php echo $_smarty_tpl->tpl_vars['toId']->value;?>
" class="js__docs_folder" onClick="$Core.docs.delete_folder(this, event)" title="Thêm folder">Xoá folder</a>
							<?php } else { ?>
							<a href="javascript:void(0);" toId="<?php echo $_smarty_tpl->tpl_vars['toId']->value;?>
" class="js__docs_folder" onClick="$Core.docs.create_folder(this, event)" title="Thêm folder">Thêm folder</a>
							<?php }?>
						</div>
						<div class="input-group">
							<input type="text" id="content_file_<?php echo $_smarty_tpl->tpl_vars['toId']->value;?>
" class="form-control required" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == '_edit') {
echo $_smarty_tpl->tpl_vars['oneItem']->value['content'];
}?>" 
								   name="content" placeholder="Tài liệu đính kèm" />
							<div class="input-group-btn">
								<button type="button" toId="<?php echo $_smarty_tpl->tpl_vars['toId']->value;?>
" onClick="$Core.docs.select_file(this, event)" 
								class="btn btn-default"><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('upload','Chọn');?>
</button>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<label class="col-form-label">Danh mục</label>
						<select name="cat_id" class="form-control">
							<option value="0">Chọn danh mục</option>
							<?php if ($_smarty_tpl->tpl_vars['action']->value == '_add') {?>
								<?php echo $_smarty_tpl->tpl_vars['clsProperty']->value->getListOption('_CATEGORY_DOCS',$_smarty_tpl->tpl_vars['cat_id']->value);?>

							<?php } else { ?>
								<?php echo $_smarty_tpl->tpl_vars['clsProperty']->value->getListOption('_CATEGORY_DOCS',$_smarty_tpl->tpl_vars['oneItem']->value['cat_id']);?>

							<?php }?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-form-label">Ảnh đại diện</label>
					<div class="d-flex align-items-center gap-2">
						<img src="<?php echo $_smarty_tpl->tpl_vars['more_information']->value['image'];?>
" id="isoman_show_image" onerror="this.src='<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/no-image.jpg'" class="mr-2 border w-35px h-35px radius-3" />
						<div class="input-group w-100">
							<input class="form-control" id="isoman_hidden_image" name="image" value="<?php echo $_smarty_tpl->tpl_vars['more_information']->value['image'];?>
" />
							<div class="input-group-btn">
								<a class="btn btn-default ajOpenDialog" isoman_for_id="image" isoman_val="<?php echo $_smarty_tpl->tpl_vars['more_information']->value['image'];?>
" isoman_name="image"><i class="fa fa-image"></i> Thêm ảnh</a>
							</div>	
						</div>
					</div>
				</div>
				<div class="form-group form-row">
					<div class="col-xs-12 col-md-4">
						<label class="col-form-label">Dự án</label>
						<select name="project_id" onChange="$Core.docs.select_block(this, event)" toId="slb_Block_Id" class="form-control">
							<option value="0">Chọn dự án</option>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_projects']->value, '_project', false, NULL, 'i', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_project']->value) {
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['_project']->value['project_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['project_id']->value == $_smarty_tpl->tpl_vars['_project']->value['project_id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_project']->value['title'];?>
</option>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</select>
					</div>
					<div class="col-xs-12 col-md-8">
						<label class="col-form-label">Phân khu</label>
						<select name="block_ids[]" id="slb_Block_Id" multiple onChange="$Core.docs.select_building(this, event)" 
						toId="slb_Building_Id" class="form-control iso-select2">
							<option>Chọn phân khu</option>
							<?php if (!empty($_smarty_tpl->tpl_vars['list_blocks']->value)) {?>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_blocks']->value, '_oBlock');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oBlock']->value) {
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['_oBlock']->value['property_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkItemInArray($_smarty_tpl->tpl_vars['_oBlock']->value['property_id'],$_smarty_tpl->tpl_vars['block_ids']->value)) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_oBlock']->value['title'];?>
</option>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>								
							<?php }?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-form-label">Tòa nhà</label>
					<select name="building_ids[]" id="slb_Building_Id" multiple class="form-control iso-select2">						
						<?php if (!empty($_smarty_tpl->tpl_vars['list_buildings']->value)) {?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_buildings']->value, '_oBuilding');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oBuilding']->value) {
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['_oBuilding']->value['property_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkItemInArray($_smarty_tpl->tpl_vars['_oBuilding']->value['property_id'],$_smarty_tpl->tpl_vars['building_ids']->value)) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_oBuilding']->value['title'];?>
</option>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>								
						<?php }?>
					</select>
				</div>
			</div>
			<div class="modal-footer">
				<div class="d-flex justify-content-between align-items-center">
					<div class="d-flex align-items-center gap-2">
						<label class="switch">
							<input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['more_information']->value['is_expanded'] == '1') {?> checked<?php }?> 
								name="is_expanded" value="1">
							<span class="slider round"></span>
						</label>
						<span>Mở rộng</span>
					</div>
					<div class="d-flex align-items-center gap-2">
						<label class="switch">
							<input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['more_information']->value['is_model'] == '1') {?> checked<?php }?> 
								name="is_model" value="1">
							<span class="slider round"></span>
						</label>
						<span>Hiển thị nhà mẫu</span>
					</div>
					<div class="d-flex align-items-center gap-2">
						<label class="switch">
							<input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['more_information']->value['is_handoverSpecs'] == '1') {?> checked<?php }?> 
								name="is_handoverSpecs" value="1">
							<span class="slider round"></span>
						</label>
						<span>Hiển thị TCBG</span>
					</div>
					<div class="groups">
						<button type="button" onClick="$Core.docs.save(this, event)" project_meta_id="<?php echo $_smarty_tpl->tpl_vars['project_meta_id']->value;?>
" 
						class="btn btn-primary continue_add pull-right">Lưu + Thêm</button>
						<button type="button" onClick="$Core.docs.save(this, event)" project_meta_id="<?php echo $_smarty_tpl->tpl_vars['project_meta_id']->value;?>
" 
						class="btn btn-success pull-right mr-2">Lưu lại</button>
						<button type="button" class="btn btn-default pull-right mr-2" data-dismiss="modal">
							<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Close');?>

						</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div><?php }
}
