<?php
/* Smarty version 3.1.33, created on 2026-07-23 17:50:47
  from '/www/wwwroot/skyrealty.c-a.vn/admin/application/views/project/_ajax.sop.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a61f207bf6903_61180931',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ef565a4af5bd4248b9472f0cec8833725302f63' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/admin/application/views/project/_ajax.sop.tpl',
      1 => 1783289340,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a61f207bf6903_61180931 (Smarty_Internal_Template $_smarty_tpl) {
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
			<?php if ($_smarty_tpl->tpl_vars['sop_info']->value['template_type'] == '_connect') {?>
				<div class="form-group">
					<label for="" class="col-form-label">Địa điểm<span class="text-red">*</span></label>
					<input type="text" class="form-control" placeholder="Sân bay nội bài" name="title" value="<?php echo $_smarty_tpl->tpl_vars['more_information']->value['title'];?>
" />
				</div>
				<div class="form-group">
					<label for="" class="col-form-label">Thời gian<span class="text-red">*</span></label>
					<input type="text" class="form-control" placeholder="5 phút" name="time_duration" value="<?php echo $_smarty_tpl->tpl_vars['more_information']->value['time_duration'];?>
" />
				</div>
			<?php } else { ?>
				<div class="form-group">
					<label for="" class="col-form-label"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Title');?>
<span class="text-red">*</span></label>
					<input type="text" class="form-control" name="title" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
" />
				</div>
				<div class="form-group row">
					<div class="col-md-6">
						<label for="" class="col-form-label text-right"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Image');?>
</label>
						<div class="input-group">
							<input type="text" class="form-control" name="image" placeholder="Chọn hình ảnh làm icon"
								id="isoman_url_sop_item_image_<?php echo $_smarty_tpl->tpl_vars['sop_item_id']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['more_information']->value['image'];?>
">
							<div class="input-group-btn">
								<button class="btn btn-default ajOpenDialog" isoman_for_id="sop_item_image_<?php echo $_smarty_tpl->tpl_vars['sop_item_id']->value;?>
"
									isoman_val="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
" isoman_name="sop_item_image_<?php echo $_smarty_tpl->tpl_vars['sop_item_id']->value;?>
" style="padding:9px 10px 9px"><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('image');?>
</button>
							</div>
							<div class="input-group-btn">
								<button class="btn btn-default pick-btn" type="button"">Icon</button>
							</div>
							<input type="hidden" is_icon="<?php echo $_smarty_tpl->tpl_vars['is_icon']->value;?>
" class="is_icon" name="is_icon" value="0">
						</div>
					</div>
					<div class="col-md-6">
						<label class="col-form-label">Vị trí ảnh</label>
						<select class="form-control" name="position">
							<option <?php if ($_smarty_tpl->tpl_vars['more_information']->value['position'] == 'left') {?>selected<?php }?> value="left">Trái</option>
							<option <?php if ($_smarty_tpl->tpl_vars['more_information']->value['position'] == 'right') {?>selected<?php }?> value="right">Phải</option>
							<option <?php if ($_smarty_tpl->tpl_vars['more_information']->value['position'] == 'center') {?>selected<?php }?> value="center">Giữa</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-form-label text-right"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Content');?>
</label>
					<textarea class="isoTextArea" id="sopItem_content_<?php echo $_smarty_tpl->tpl_vars['sop_id']->value;?>
"
						rows="4" cols="255" style="width:100%"><?php echo $_smarty_tpl->tpl_vars['more_information']->value['content'];?>
</textarea>
				</div>
			<?php }?>
			</div>
			<div class="modal-footer">
				<input Type="hidden" name="template_type" value="<?php echo $_smarty_tpl->tpl_vars['sop_info']->value['template_type'];?>
" />
				<button type="button" class="btn btn-success pull-right" onClick="$Core.project.pop_save_sop_item(this)"
					project_id="<?php echo $_smarty_tpl->tpl_vars['project_id']->value;?>
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
								<!-- <option value="_tab"<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['template_type'] == '_tab') {?> selected<?php }?>>Tab</option> -->
								<option value="_column"<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['template_type'] == '_column') {?> selected<?php }?>>Column</option>
								<option value="_connect"<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['template_type'] == '_connect') {?> selected<?php }?>>Kết nối vùng</option>
								<option value="_column_text"<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['template_type'] == '_column_text') {?> selected<?php }?>>Column Text</option>
								<option value="_carousel"<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['template_type'] == '_carousel') {?> selected<?php }?>>Carousel</option>
								<option value="_carousel_text"<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['template_type'] == '_carousel_text') {?> selected<?php }?>>Carousel Text</option>
								<option value="_carousel_slider"<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['template_type'] == '_carousel_slider') {?> selected<?php }?>>Carousel Slider</option>
								<option value="_gallery_cycle"<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['template_type'] == '_gallery_cycle') {?> selected<?php }?>>Gallery Cycle</option>
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
	<?php echo '<script'; ?>
>
		$(document).ready(function () {
			var _current_icon_input = null;
			$(".pick-btn").click(function () {
				_current_icon_input = $(this).closest('.col-md-6').find('input.form-control').first();
				$Core.popup.open('auto', 'auto', modal_icon, 'choose_icon_modal', 'choose_icon_modal');
			});
			$(document).on('click', '.btn-confirm-icon', function () {
				var modal = $(this).closest(".modal");
				var sel = $('.icon-item.selected', modal);
				if (!sel.length) {
					alert('Vui long chon mot icon!');
					return;
				}
				if (_current_icon_input) {
					_current_icon_input.val('bx ' + sel.data('icon'));
					$(".is_icon").val(1)
				}
				$Core.popup.close($('.choose_icon_modal'));
			});
		});
	<?php echo '</script'; ?>
>
<?php }
}
