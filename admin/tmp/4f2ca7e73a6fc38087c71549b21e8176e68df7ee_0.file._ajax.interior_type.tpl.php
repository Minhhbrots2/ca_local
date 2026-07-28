<?php
/* Smarty version 3.1.33, created on 2026-06-24 11:04:40
  from '/www/wwwroot/ca.futurehomes.vn/admin/application/views/project/_ajax.interior_type.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a3b575857ea71_12659514',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f2ca7e73a6fc38087c71549b21e8176e68df7ee' => 
    array (
      0 => '/www/wwwroot/ca.futurehomes.vn/admin/application/views/project/_ajax.interior_type.tpl',
      1 => 1781361027,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a3b575857ea71_12659514 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('_uid', $_smarty_tpl->tpl_vars['s']->value['uid']);?>
<div class="interior-type-card" data-uid="<?php echo $_smarty_tpl->tpl_vars['_uid']->value;?>
">
	<input type="hidden" name="rows[<?php echo $_smarty_tpl->tpl_vars['_uid']->value;?>
][row_id]" value="<?php echo $_smarty_tpl->tpl_vars['s']->value['row_id'];?>
" />
	<div class="it-head">
		<div class="it-head-fields">
			<select class="form-control it-bedroom" name="rows[<?php echo $_smarty_tpl->tpl_vars['_uid']->value;?>
][bedroom_id]">
				<option value="0">— Loại căn —</option>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrBedrooms']->value, 'b');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['b']->value) {
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['b']->value['property_id'];?>
"<?php if ($_smarty_tpl->tpl_vars['s']->value['bedroom_id'] == $_smarty_tpl->tpl_vars['b']->value['property_id']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['b']->value['title'];?>
</option>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</select>
			<input type="text" class="form-control it-type" name="rows[<?php echo $_smarty_tpl->tpl_vars['_uid']->value;?>
][type_label]" value="<?php echo $_smarty_tpl->tpl_vars['s']->value['type_label'];?>
" placeholder="Type (vd: Type 5) — để trống nếu loại căn chỉ 1 layout" />
		</div>
		<a href="javascript:void(0);" class="it-remove text-red" onClick="remove_interior_type(this, event)" title="Bỏ Type này"><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('trash');?>
</a>
	</div>
	<div class="it-body row">
		<div class="col-md-6 it-cat">
			<label class="pm-label"><i class="fa fa-map-o"></i> Bóc mái (layout)</label>
			<input type="hidden" class="pm-json" uid="<?php echo $_smarty_tpl->tpl_vars['_uid']->value;?>
_bm" name="rows[<?php echo $_smarty_tpl->tpl_vars['_uid']->value;?>
][media_boc_mai]" value="<?php if ($_smarty_tpl->tpl_vars['s']->value['media_boc_mai']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value['media_boc_mai'], ENT_QUOTES, 'UTF-8', true);
} else { ?>[]<?php }?>" />
			<div class="pm-tools">
				<div class="pm-row pm-folder-wrap">
					<input type="text" class="form-control input-sm pm-folder" uid="<?php echo $_smarty_tpl->tpl_vars['_uid']->value;?>
_bm" name="rows[<?php echo $_smarty_tpl->tpl_vars['_uid']->value;?>
][folder_boc_mai]" value="<?php echo $_smarty_tpl->tpl_vars['s']->value['folder_boc_mai'];?>
" placeholder="Link FOLDER Google Drive (chia sẻ: Bất kỳ ai có link – Người xem)..." />
					<button type="button" class="btn btn-sm btn-primary pm-btn" onClick="$Core.project.progress_sync_drive(this, event)" uid="<?php echo $_smarty_tpl->tpl_vars['_uid']->value;?>
_bm"><i class="fa fa-cloud-download"></i> Đồng bộ</button>
				</div>
				<label class="btn btn-sm btn-default pm-upload-btn"><i class="fa fa-upload"></i> Upload
					<input type="file" accept="image/*" onchange="$Core.project.progress_upload_media(this, event)" uid="<?php echo $_smarty_tpl->tpl_vars['_uid']->value;?>
_bm" />
				</label>
				<div class="pm-row pm-link-wrap">
					<input type="text" class="form-control input-sm pm-link" uid="<?php echo $_smarty_tpl->tpl_vars['_uid']->value;?>
_bm" placeholder="Link lẻ (Drive / ảnh / YouTube)..." />
					<button type="button" class="btn btn-sm btn-default pm-btn" onClick="$Core.project.progress_add_link(this, event)" uid="<?php echo $_smarty_tpl->tpl_vars['_uid']->value;?>
_bm">Thêm</button>
				</div>
			</div>
			<div class="progress-media-grid pm-grid" uid="<?php echo $_smarty_tpl->tpl_vars['_uid']->value;?>
_bm"></div>
		</div>
		<div class="col-md-6 it-cat">
			<label class="pm-label"><i class="fa fa-bed"></i> Nội thất (căn mẫu)</label>
			<input type="hidden" class="pm-json" uid="<?php echo $_smarty_tpl->tpl_vars['_uid']->value;?>
_nt" name="rows[<?php echo $_smarty_tpl->tpl_vars['_uid']->value;?>
][media_noi_that]" value="<?php if ($_smarty_tpl->tpl_vars['s']->value['media_noi_that']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value['media_noi_that'], ENT_QUOTES, 'UTF-8', true);
} else { ?>[]<?php }?>" />
			<div class="pm-tools">
				<div class="pm-row pm-folder-wrap">
					<input type="text" class="form-control input-sm pm-folder" uid="<?php echo $_smarty_tpl->tpl_vars['_uid']->value;?>
_nt" name="rows[<?php echo $_smarty_tpl->tpl_vars['_uid']->value;?>
][folder_noi_that]" value="<?php echo $_smarty_tpl->tpl_vars['s']->value['folder_noi_that'];?>
" placeholder="Link FOLDER Google Drive (chia sẻ: Bất kỳ ai có link – Người xem)..." />
					<button type="button" class="btn btn-sm btn-primary pm-btn" onClick="$Core.project.progress_sync_drive(this, event)" uid="<?php echo $_smarty_tpl->tpl_vars['_uid']->value;?>
_nt"><i class="fa fa-cloud-download"></i> Đồng bộ</button>
				</div>
				<label class="btn btn-sm btn-default pm-upload-btn"><i class="fa fa-upload"></i> Upload
					<input type="file" accept="image/*" onchange="$Core.project.progress_upload_media(this, event)" uid="<?php echo $_smarty_tpl->tpl_vars['_uid']->value;?>
_nt" />
				</label>
				<div class="pm-row pm-link-wrap">
					<input type="text" class="form-control input-sm pm-link" uid="<?php echo $_smarty_tpl->tpl_vars['_uid']->value;?>
_nt" placeholder="Link lẻ (Drive / ảnh / YouTube)..." />
					<button type="button" class="btn btn-sm btn-default pm-btn" onClick="$Core.project.progress_add_link(this, event)" uid="<?php echo $_smarty_tpl->tpl_vars['_uid']->value;?>
_nt">Thêm</button>
				</div>
			</div>
			<div class="progress-media-grid pm-grid" uid="<?php echo $_smarty_tpl->tpl_vars['_uid']->value;?>
_nt"></div>
		</div>
	</div>
</div>
<?php }
}
