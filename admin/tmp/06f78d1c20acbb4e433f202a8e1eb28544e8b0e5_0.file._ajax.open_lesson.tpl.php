<?php
/* Smarty version 3.1.33, created on 2026-07-03 15:16:10
  from '/www/wwwroot/ca.futurehomes.vn/admin/application/views/training/_ajax.open_lesson.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a476fca4e47e9_30845978',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06f78d1c20acbb4e433f202a8e1eb28544e8b0e5' => 
    array (
      0 => '/www/wwwroot/ca.futurehomes.vn/admin/application/views/training/_ajax.open_lesson.tpl',
      1 => 1781150646,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a476fca4e47e9_30845978 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-dialog modal-standard">

	<div class="modal-content">

		<div class="modal-header"> 

			<a href="javascript:void();" class="closeEv close close_pop"><span>×</span></a> 

			<h3 class="modal-title"><strong>Bài học</strong></h3>

		</div>

		<?php $_smarty_tpl->_assignInScope('toId', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>

		<form class="d-none" enctype="multipart/form-data">

			<input id="<?php echo $_smarty_tpl->tpl_vars['toId']->value;?>
" class="select_file_<?php echo $_smarty_tpl->tpl_vars['toId']->value;?>
" accept="image/jpeg,image/jpg,image/png,application/pdf" type="file" charset="UTF-8" onChange="$Core.training.upload_file(this, event)" name="upload_file" />

		</form>

		<form action="" method="post" id="frmIssue" encrupt="miltipart/form-data">

			<div class="modal-body">

				<div class="form-row">

					<div class="col-xl-12 col-md-6">

						<label class="col-form-label">Tên bài học*</label>

						<div class="form-group">

							<input type="text" class="form-control form_field required" placeholder="Nhập tên bài học" name="title" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
" data-text="Tên bài học">

						</div>

					</div>

					<div class="col-xl-12 col-md-6">

						<label class="col-form-label">Điểm bài học*</label>

						<div class="form-group">

							<input type="text" class="form-control form_field numberonly required" placeholder="Nhập điểm bài học" name="point" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['point'];?>
"  data-text="Điểm bài học">

						</div>

					</div>

				</div>

				<div class="form-group">

					<label class="col-form-label">Nội dung</label>

					<textarea id="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid();?>
" class="form-control edit_profile_field_about" name="content" cols="255" rows="5"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['content'];?>
</textarea>

				</div>

				<div class="form-group">

					<label class="col-form-label">Video bài học</label>

					<div class="input-group w-100">

						<input type="text" id="content_video_<?php echo $_smarty_tpl->tpl_vars['toId']->value;?>
" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['video'];?>
" name="video" placeholder="Dán link youtube" />

					</div>

				</div>

				<div class="form-group">

					<label class="col-form-label">Tài liệu đính kèm</label>

					<div class="input-group">

						<input type="text" id="content_file_<?php echo $_smarty_tpl->tpl_vars['toId']->value;?>
" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['file'];?>
"

							   name="file" placeholder="Tài liệu đính kèm" />

						<div class="input-group-btn">

							<button type="button" toId="<?php echo $_smarty_tpl->tpl_vars['toId']->value;?>
" onClick="$Core.training.select_file(this, event)" data-type="file"  

							class="btn btn-default"><i class="fa fa-upload"></i><span>Chọn</span></button>

						</div>

					</div>

				</div>

			</div>

			<div class="modal-footer">

				<input type="hidden" name="lesson_id" value="<?php echo $_smarty_tpl->tpl_vars['lesson_id']->value;?>
">

				<input type="hidden" name="training_id" value="<?php echo $_smarty_tpl->tpl_vars['training_id']->value;?>
">

				<button type="button" class="btn btn btn-primary" onClick="$Core.training.save_lesson(this,event)" data-training_id='<?php echo $_smarty_tpl->tpl_vars['training_id']->value;?>
' data-lesson_id='<?php echo $_smarty_tpl->tpl_vars['lesson_id']->value;?>
'>

					Tạo

				</button>

			</div>

		</form>

	</div>

</div>

<?php }
}
