<?php
/* Smarty version 3.1.33, created on 2026-02-02 14:52:08
  from '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/project/_ajax.sop.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_698057a8bccda0_71417288',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12bce9a0625311b8daf71440d80eec3109ea036a' => 
    array (
      0 => '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/project/_ajax.sop.tpl',
      1 => 1764657696,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_698057a8bccda0_71417288 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-dialog<?php if ($_smarty_tpl->tpl_vars['template']->value == '_sopItem') {?> modal-mg<?php }?>">
	<div class="modal-content">
		<div class="modal-header"> 
			<a href="javascript:void();" class="closeEv close_pop close"><span>×</span></a> 
			<h3 class="modal-title"><strong><?php echo $_smarty_tpl->tpl_vars['titlePage']->value;?>
</strong></h3>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['template']->value == '_sopItem') {?>
		<form method="post" action="" enctype="multipart/form-data">
			<div class="modal-body">
				<div class="form-group">
					<label for="" class="col-form-label"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Title');?>
<span class="text-red">*</span></label>
					<input type="text" class="form-control" name="title" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
" />	
				</div>
				<div class="form-group">
					<label for="" class="col-form-label text-right"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Image');?>
</label>
					<div class="input-group">
						<input type="text" class="form-control" name="image" placeholder="Chọn hình ảnh làm icon" id="isoman_url_sop_item_image_<?php echo $_smarty_tpl->tpl_vars['sop_item_id']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
">
						<div class="input-group-btn">
							<button class="btn btn-default ajOpenDialog" isoman_for_id="sop_item_image_<?php echo $_smarty_tpl->tpl_vars['sop_item_id']->value;?>
" isoman_val="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
" isoman_name="sop_item_image_<?php echo $_smarty_tpl->tpl_vars['sop_item_id']->value;?>
" style="padding:9px 10px 9px"><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('image');?>
</button>
						</div>	
					</div>
					<div class="row mt-4">
						<div class="col-xs-12 col-md-3">
							<div class="d-flex align-items-center">
								<label class="col-form-label mr-2">Resize hình ảnh:</label>
								<label class="switch">
									<input type="checkbox" value="1" onchange="sw_resize_status(this)" name="resize_status"<?php if ($_smarty_tpl->tpl_vars['more_information']->value['resize_status'] == '1') {?> checked="checked"<?php }?>>
									<span class="slider round"></span>
								</label>
							</div>
						</div>
						<div class="col-xs-12 col-md-2 resize-column<?php if ($_smarty_tpl->tpl_vars['more_information']->value['resize_status'] == '0') {?> hidden<?php }?>">
							<div class="custom-input-suffix">
								<input type="number" class="form-control" name="resize_width" placeholder="W" 
								value="<?php echo $_smarty_tpl->tpl_vars['more_information']->value['resize_width'];?>
" />
								<span class="suffix">px</span>
							</div>
						</div>
						<div class="col-xs-12 col-md-2 resize-column<?php if ($_smarty_tpl->tpl_vars['more_information']->value['resize_status'] == '0') {?> hidden<?php }?>">
							<div class="custom-input-suffix">
								<input type="number" class="form-control" name="resize_height" placeholder="H" 
								value="<?php echo $_smarty_tpl->tpl_vars['more_information']->value['resize_height'];?>
" />
								<span class="suffix">px</span>
							</div>
						</div>
					</div>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['oneSop']->value['template_type'] != '_carousel_slider' && $_smarty_tpl->tpl_vars['oneSop']->value['template_type'] != '_column' && $_smarty_tpl->tpl_vars['oneSop']->value['template_type'] != '_gallery_cycle' && $_smarty_tpl->tpl_vars['oneSop']->value['template_type'] != '_gallery_masony') {?>
				<div class="form-group lines-bar">
					<label class="col-form-label">Vị trí ảnh</label>
					<select class="form-control" name="position">
						<option <?php if ($_smarty_tpl->tpl_vars['oneItem']->value['position'] == 'left') {?>selected<?php }?> value="left">Trái</option>
						<option <?php if ($_smarty_tpl->tpl_vars['oneItem']->value['position'] == 'right') {?>selected<?php }?> value="right">Phải</option>
						<option <?php if ($_smarty_tpl->tpl_vars['oneItem']->value['position'] == 'center') {?>selected<?php }?> value="center">Giữa</option>
					</select>
				</div>
				<div class="form-group">
					<label for="" class="col-form-label text-right"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Content');?>
</label>
					<textarea class="isoTextArea" id="sopItem_content_<?php echo $_smarty_tpl->tpl_vars['sop_id']->value;?>
" rows="4" cols="255" style="width:100%"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['content'];?>
</textarea>
				</div>
				<?php }?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-success pull-right" onClick="$Core.project.pop_save_sop_item(this)" project_id="<?php echo $_smarty_tpl->tpl_vars['project_id']->value;?>
" sop_id="<?php echo $_smarty_tpl->tpl_vars['sop_id']->value;?>
" sop_item_id="<?php echo $_smarty_tpl->tpl_vars['sop_item_id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Save');?>
</button>
				<button type="button" class="btn btn-default mr-half pull-right" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Close');?>
</button>
			</div>
		</form>
		<?php } else { ?>
		<form method="post" action="" enctype="multipart/form-data">
			<div class="modal-body">
				<div class="row">
					<div class="form-group">
						<label class="col-form-label text-right col-md-2"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Title');?>

							<span class="text-red">*</span>
						</label>
						<div class="col-md-10">
							<input type="text" class="form-control required" name="title" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
" />	
						</div>
					</div>
					<div class="form-group">
						<label for="field_type" class="col-form-label text-right col-md-2"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Type');?>
</label>
						<div class="col-md-6">
							<select class="form-control" name="field_type" id="field_type" onchange="$Core.project.handle_field_type(this)">
								<option value="_textarea"<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['field_type'] == '_textarea') {?> selected<?php }?>>Văn bản & Hình ảnh</option>
								<option value="_list"<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['field_type'] == '_list') {?> selected<?php }?>>Danh sách</option>
							</select>
						</div>
					</div>
					<div class="form-group holder_template_type<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['field_type'] == '_textarea') {?> hidden<?php }?>">
						<label for="" class="col-form-label text-right col-md-2"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Template');?>
</label>
						<div class="col-md-6">
							<select class="form-control" name="template_type">
								<option value="_tab"<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['template_type'] == '_tab') {?> selected<?php }?>>Tab</option>
								<option value="_column"<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['template_type'] == '_column') {?> selected<?php }?>>Column</option>
								<option value="_column_text"<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['template_type'] == '_column_text') {?> selected<?php }?>>Column Text</option>
								<option value="_carousel"<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['template_type'] == '_carousel') {?> selected<?php }?>>Carousel</option>
								<option value="_carousel_text"<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['template_type'] == '_carousel_text') {?> selected<?php }?>>Carousel Text</option>
								<option value="_carousel_slider"<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['template_type'] == '_carousel_slider') {?> selected<?php }?>>Carousel Slider</option>
								<option value="_zigzac"<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['template_type'] == '_zigzac') {?> selected<?php }?>>Ziczac</option>
								<option value="_gallery_cycle"<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['template_type'] == '_gallery_cycle') {?> selected<?php }?>>Gallery Cycle</option>
								<option value="_gallery_masony"<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['template_type'] == '_gallery_masony') {?> selected<?php }?>>Gallery Masony</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-success pull-right" onClick="$Core.project.pop_save_sop(this, event)" 
					project_id="<?php echo $_smarty_tpl->tpl_vars['project_id']->value;?>
" sop_id="<?php echo $_smarty_tpl->tpl_vars['sop_id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Save');?>
</button>
				<button type="button" class="btn btn-default mr-half pull-right" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Close');?>
</button>
			</div>
		</form>
		<?php }?>
	</div>
</div>

<style>.ui-datepicker{z-index: 99999!important}</style>
<?php }
}
