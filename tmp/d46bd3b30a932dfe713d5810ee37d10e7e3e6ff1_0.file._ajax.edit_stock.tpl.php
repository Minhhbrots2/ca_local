<?php
/* Smarty version 3.1.33, created on 2026-07-24 17:41:13
  from '/www/wwwroot/skyrealty.c-a.vn/application/views/tool/_ajax.edit_stock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a634149c80f16_34869431',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd46bd3b30a932dfe713d5810ee37d10e7e3e6ff1' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/views/tool/_ajax.edit_stock.tpl',
      1 => 1783308749,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a634149c80f16_34869431 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-dialog">
	<?php $_smarty_tpl->_assignInScope('toId', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>
	<form class="d-none" method="POST" enctype="multipart/form-data">
		<input type="file" onchange="$Core.tool.upload_stock_image(this,event)" accept="image/*" 
		id="<?php echo $_smarty_tpl->tpl_vars['toId']->value;?>
" toId="<?php echo $_smarty_tpl->tpl_vars['toId']->value;?>
" class="upload_stock_image" name="image" />
	</form>
	<form method="POST" class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['titlePage']->value;?>
</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['template_type']->value == 'video') {?>
		<div class="modal-body">
			<div class="form-group">
				<label class="col-form-label">Tiêu đề</label>
				<input name="title" value="<?php echo $_smarty_tpl->tpl_vars['oneVideo']->value['title'];?>
" class="form-control required" placeholder="Tiêu đề" />
			</div>
			<div class="form-group">
				<label class="col-form-label">Đường dẫn Video</label>
				<input name="url" value="<?php echo $_smarty_tpl->tpl_vars['oneVideo']->value['url'];?>
" class="form-control required" placeholder="https://" />
			</div>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
			<button type="button" media_id="<?php echo $_smarty_tpl->tpl_vars['media_id']->value;?>
" stock_meta_id="<?php echo $_smarty_tpl->tpl_vars['stock_meta_id']->value;?>
" class="btn btn-primary" 
			onClick="$Core.tool.add_stock_video(this, event)" >Lưu lại</button>
		</div>
		<?php } elseif ($_smarty_tpl->tpl_vars['template_type']->value == 'edit_image') {?>
		<div class="modal-body">
			<div class="form-group mb-3">
				<div class="thumbnail position-relative">
					<div class="dIimTDVyye position-absolute">
						<a href="javascript:;" class="text-dark" toId="<?php echo $_smarty_tpl->tpl_vars['toId']->value;?>
" onClick="$Core.tool.add_stock_image(this, event)"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIcon('bx-upload');?>
</a>
					</div>
					<input type="hidden" class="hidden_<?php echo $_smarty_tpl->tpl_vars['toId']->value;?>
" name="url" value="<?php echo $_smarty_tpl->tpl_vars['oneImage']->value['url'];?>
" />
					<img src="<?php echo $_smarty_tpl->tpl_vars['oneImage']->value['url'];?>
" class="img-fluid img-thumbnail image_<?php echo $_smarty_tpl->tpl_vars['toId']->value;?>
 radius-4" />
				</div>
			</div>
			<div class="form-group">
				<label class="col-form-label">Tiêu đề</label>
				<input type="text" name="title" class="form-control required" placeholder="Tiêu đề" 
				value="<?php echo $_smarty_tpl->tpl_vars['oneImage']->value['title'];?>
" maxlength="255" />
			</div>
		</div>
		<div class="modal-footer">
			<input type="hidden" name="submit" value="edit_image" />
			<input type="hidden" name="media_id" value="<?php echo $_smarty_tpl->tpl_vars['media_id']->value;?>
" />
			<button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
			<button type="button" stock_meta_id="<?php echo $_smarty_tpl->tpl_vars['stock_meta_id']->value;?>
" class="btn add_stock_image btn-primary" onClick="$Core.tool.add_stock_image(this, event)" >Lưu lại</button>
		</div>
		<?php } elseif ($_smarty_tpl->tpl_vars['template_type']->value == 'image') {?>
		<div class="modal-body">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_images']->value, '_oImage', false, NULL, 'i', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oImage']->value) {
?>
			<?php $_smarty_tpl->_assignInScope('uid', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>
			<div class="form-group">
				<div class="thumbnail">
					<img src="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getGoogleUrl($_smarty_tpl->tpl_vars['_oImage']->value);?>
" class="img-fluid img-thumbnail img-responsive" />
				</div>
				<label class="col-form-label">Tiêu đề</label>
				<input type="hidden" name="images[<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
][url]" value="<?php echo $_smarty_tpl->tpl_vars['_oImage']->value;?>
" />
				<input type="text" name="images[<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
][title]" class="form-control required" placeholder="Tiêu đề" />
			</div>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<div class="modal-footer">
				<input type="hidden" name="submit" value="add_image" />
				<button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" onClick="$Core.tool.add_stock_image(this, event)" stock_meta_id="<?php echo $_smarty_tpl->tpl_vars['stock_meta_id']->value;?>
" 
				class="btn btn-primary add_stock_image">Lưu lại</button>
			</div>
		</div>
		<?php } else { ?>
		<div class="modal-body">
			<div class="form-group">
				<textarea name="content" cols="255" rows="10" id="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid();?>
" 
				class="form-control hasIsoRedactor"><?php echo $_smarty_tpl->tpl_vars['p_value']->value;?>
</textarea>
			</div>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
			<button type="button" p_id="<?php echo $_smarty_tpl->tpl_vars['p_id']->value;?>
" p_field="<?php echo $_smarty_tpl->tpl_vars['p_field']->value;?>
" class="btn btn-primary" 
			onClick="$Core.tool.update_stock_field(this, event)" >Lưu lại</button>
		</div>
		<?php }?>
	</form>
</div><?php }
}
