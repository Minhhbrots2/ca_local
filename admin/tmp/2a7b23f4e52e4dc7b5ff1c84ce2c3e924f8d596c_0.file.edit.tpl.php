<?php
/* Smarty version 3.1.33, created on 2026-07-07 10:07:08
  from '/www/wwwroot/skyrealty.futureglobal.vn/admin/application/views/learning_path/edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a4c6d5cdfb786_63711519',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a7b23f4e52e4dc7b5ff1c84ce2c3e924f8d596c' => 
    array (
      0 => '/www/wwwroot/skyrealty.futureglobal.vn/admin/application/views/learning_path/edit.tpl',
      1 => 1783314578,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a4c6d5cdfb786_63711519 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="ui-title-bar-container">
	<div class="ui-title-bar">
		<div class="ui-title-bar__navigation">
			<div class="ui-breadcrumbs">
				<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
" class="btn btn-default ui-breadcrumb">
					<?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('angle-left mr-5');?>

					<span class="ui-breadcrumb__item">Lộ trình học</span>
				</a>
			</div>
		</div>
	</div>
</div>
<div class="clearfix"></div>
<form id="edititem" method="post" action="" enctype="multipart/form-data" class="validate-form">
	<div class="ui-layout">
		<div class="row">
			<div class="col-md-8 col-xs-12">
				<div class="ui-layout__item">
					<div class="ui-card">
						<div class="ui-card__section">
							<div class="ui-type-container">
								<div class="form-group">
									<label class="col-form-label"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Title');?>
*</label>
									<input type="text" class="form-control required" name="iso-title" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
" placeholder="Tên lộ trình" required maxlength="255" />
								</div>
								<div class="form-group">
									<label class="col-form-label">Mô tả / Mục tiêu</label>
									<textarea class="form-control" name="iso-description" rows="4" placeholder="Mô tả ngắn về lộ trình, mục tiêu đạt được..."><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['description'];?>
</textarea>
								</div>
								<div class="form-group">
									<label class="col-form-label">Cấp độ</label>
									<select class="form-control custom-select" name="level">
										<option value="">-- Chọn cấp độ --</option>
										<option value="basic"<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['level'] == 'basic') {?> selected<?php }?>>Cơ bản</option>
										<option value="intermediate"<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['level'] == 'intermediate') {?> selected<?php }?>>Trung cấp</option>
										<option value="advanced"<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['level'] == 'advanced') {?> selected<?php }?>>Nâng cao</option>
									</select>
								</div>
								<div class="form-group">
									<fieldset>
										<legend>Khoá học trong lộ trình</legend>
										<div class="box-title mb-2">
											<div class="input-group" style="position:relative;">
												<input type="text" id="course_search" class="form-control" placeholder="Gõ tên khoá học để tìm và thêm..." autocomplete="off"
													onkeyup="$Core.learning_path.searchCourse(this,event)" onkeypress="return event.keyCode!=13" />
												<div id="course_search_results" class="list-group" style="display:none; position:absolute; top:100%; left:0; right:0; z-index:1050; max-height:320px; overflow:auto; box-shadow:0 4px 12px rgba(0,0,0,.15); border-radius:4px;"></div>
											</div>
											<small class="text-muted">Học viên học tự do — bật <b>Bắt buộc</b> cho các khoá cần hoàn thành để tính đậu lộ trình.</small>
										</div>
										<div class="box-body">
											<table class="table table-hover table-vertical table-striped TableListCourse">
												<thead><tr>
													<th class="align-center bg-lighter" style="width:50px"></th>
													<th class="align-center bg-lighter" style="width:50px">STT</th>
													<th class="align-left bg-lighter">Tên khoá học</th>
													<th class="align-center bg-lighter" style="width:120px">Bắt buộc</th>
													<th class="align-center bg-lighter" style="width:50px"></th>
												</tr></thead>
												<tbody class="list_course" id="list_course">
													<tr><td class="text-center text-muted" colspan="5">Đang tải...</td></tr>
												</tbody>
											</table>
										</div>
									</fieldset>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-xs-12">
				<div class="ui-layout__item">
					<div class="ui-card">
						<header class="ui-card__header"><h2 class="ui-heading"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Status');?>
</h2></header>
						<div class="ui-card__section">
							<div class="ui-type-container">
								<div class="form-group">
									<div class="custom-radio-wrapper core-radio-custom">
										<label><input <?php if ($_smarty_tpl->tpl_vars['oneItem']->value['is_online'] == '1') {?>checked="checked"<?php }?> name="is_online" value="1" type="radio"> <span class="custom-radio custom-icon"></span></label> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Show');?>

									</div>
								</div>
								<div class="form-group">
									<div class="custom-radio-wrapper core-radio-custom">
										<label><input<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['is_online'] != '1') {?> checked="checked"<?php }?> name="is_online" value="0" type="radio"> <span class="custom-radio custom-icon"></span></label> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Hide');?>

									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="ui-card mt-half">
						<header class="ui-card__header"><h2 class="ui-heading"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Image');?>
</h2></header>
						<div class="ui-card__section">
							<div class="ui-type-container">
								<div id="article-image-drop" class="article-image-drop">
									<div class="aspect-ratio aspect-ratio--square aspect-ratio--interactive">
										<input type="hidden" id="isoman_hidden_image" name="isoman_url_image" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
" />
										<img class="aspect-ratio__content" id="isoman_show_image" src="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
">
									</div>
									<div class="clearfix"></div>
									<div class="ui-stack ui-stack--wrap">
										<div class="ui-stack-item ui-stack-item--fill">
											<button type="button" class="ui-button btn--link ajOpenDialog" isoman_for_id="image" isoman_val="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
" isoman_name="image"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Change');?>
</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="ui-page-actions ui-page-actions--has-secondary">
		<input value="Update" name="submit" type="hidden">
		<div class="ui-page-actions__container">
			<div class="ui-page-actions__actions ui-page-actions__actions--secondary">
				<div class="ui-page-actions__button-group"></div>
			</div>
			<div class="ui-page-actions__actions ui-page-actions__actions--primary">
				<div class="ui-page-actions__button-group">
					<a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Calcel');?>
</a>
					<?php echo $_smarty_tpl->tpl_vars['saveBtn']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['saveList']->value;?>

				</div>
			</div>
		</div>
	</div>
</form>
<?php echo '<script'; ?>
>
	var path_id = `<?php echo $_smarty_tpl->tpl_vars['path_id']->value;?>
`;
<?php echo '</script'; ?>
>
<?php }
}
