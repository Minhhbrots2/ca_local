<?php
/* Smarty version 3.1.33, created on 2026-04-02 09:44:49
  from '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/slide/_ajax.open.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_69cdd8217a02e7_74213725',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e850d6893a47c3f87d9b6a8ef7863451737e5c07' => 
    array (
      0 => '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/slide/_ajax.open.tpl',
      1 => 1766217178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69cdd8217a02e7_74213725 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-dialog modal-md" style="max-width: 668px">
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
" accept="image/jpeg,image/jpg,image/png,gif" type="file" charset="UTF-8" 
				onChange="$Core.slide.upload_file(this, event)" name="upload_file" />
		</form>
		<form method="post" action="" enctype="multipart/form-data" id="frmAddSlide">
			<div class="modal-body">
				<div class="form-group">
					<label class="col-form-label text-right">Tiêu đề</label>
					<input class="form-control" placeholder="Tiêu đề" maxlength="255" name="title" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == '_edit') {
echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];
}?>" />
				</div>
				<div class="form-group">
					<label class="col-form-label text-right">Link</label>
					<input class="form-control" placeholder="Nhập đường dẫn" maxlength="255" name="link" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == '_edit') {
echo $_smarty_tpl->tpl_vars['oneItem']->value['link'];
}?>" />
				</div>
				<div class="form-group">
					<label class="col-form-label text-right">Hình ảnh</label>					
					<!--<div class="input-group">
						<input type="text" id="content_file_<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" class="form-control required" name="image" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
" placeholder="Hình ảnh"/>
						<div class="input-group-btn">
							<button type="button" toid="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" onclick="$Core.slide.select_file(this, event)" class="btn btn-default"><i class="fa fa-upload"></i> <span>Chọn</span></button>
						</div>
					</div>-->
					<div class="input-group">
						<input type="text" class="form-control" name="image" placeholder="Chọn hình ảnh" id="isoman_url_image" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
">
						<div class="input-group-btn"><button class="btn btn-icon btn-default ajOpenDialog" isoman_for_id="image" isoman_val="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
" isoman_name="image"><i class="fa fa-image"></i></button></div>	
					</div>
				</div>
				<div class="form-group">
					<label class="col-form-label text-right">Hình ảnh mobile (480x320px)</label>					
					<!--<div class="input-group">
						<input type="text" id="content_file_<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" class="form-control required" name="image" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
" placeholder="Hình ảnh"/>
						<div class="input-group-btn">
							<button type="button" toid="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" onclick="$Core.slide.select_file(this, event)" class="btn btn-default"><i class="fa fa-upload"></i> <span>Chọn</span></button>
						</div>
					</div>-->
					<div class="input-group">
						<input type="text" class="form-control" name="image_mobile" placeholder="Chọn hình ảnh" id="isoman_url_image_mobile" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image_mobile'];?>
">
						<div class="input-group-btn"><button class="btn btn-icon btn-default ajOpenDialog" isoman_for_id="image_mobile" isoman_val="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image_mobile'];?>
" isoman_name="image_mobile"><i class="fa fa-image"></i></button></div>	
					</div>
				</div>
				<div class="form-group">
					<label class="col-form-label">Nội dung</label>
					<textarea class="form-control isoTextArea" rows="5" cols="5" data-field="content" id="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid();?>
"><?php if ($_smarty_tpl->tpl_vars['action']->value == '_edit') {
echo $_smarty_tpl->tpl_vars['oneItem']->value['content'];
}?></textarea>
				</div>
				<?php $_smarty_tpl->_assignInScope('toId', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>
				<div class="form-group">
					<label class="col-form-label">Hiển thị</label>
					<select name="_site" id="" class="form-select form-control">
						<option value="">Chọn</option>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_domains']->value, '_oDomain', false, NULL, 'i', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oDomain']->value) {
?>						
							<option value="<?php echo $_smarty_tpl->tpl_vars['_oDomain']->value['domain'];?>
" <?php if ($_smarty_tpl->tpl_vars['oneItem']->value['_site'] == $_smarty_tpl->tpl_vars['_oDomain']->value['domain']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_oDomain']->value['domain'];?>
</option>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
				</div>
			</div>
			<div class="modal-footer">
				<input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">
				<button type="button" class="btn btn-default mr-half pull-right" data-dismiss="modal">
					<span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Close');?>
</span>
				</button>
				<button type="button" onClick="$Core.slide.save(this, event)" <?php echo $_smarty_tpl->tpl_vars['pkeyTable']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" class="btn btn-success">
					<span>Lưu lại</span>
				</button>
			</div>
		</form>
	</div>
</div>
<?php }
}
