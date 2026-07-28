<?php
/* Smarty version 3.1.33, created on 2026-07-27 15:15:16
  from '/www/wwwroot/skyrealty.c-a.vn/application/views/training/_ajax.learning.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a671394d969c4_74325907',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd6bb548ea53a47bc4f153037f2f7908ad3835be' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/views/training/_ajax.learning.tpl',
      1 => 1783308687,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a671394d969c4_74325907 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade show" id="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" role="dialog">

	<div class="modal-dialog modal-dialog-centered">

		<div class="modal-content">

			<div class="modal-header d-flex align-items-center justify-content-between">

				<h5 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['oneLesson']->value['title'];?>
<span class="text-success ml-1 view_lesson_<?php echo $_smarty_tpl->tpl_vars['lesson_id']->value;?>
 <?php if (!$_smarty_tpl->tpl_vars['clsISO']->value->checkItemInArray($_smarty_tpl->tpl_vars['lesson_id']->value,$_smarty_tpl->tpl_vars['lesson_complete']->value)) {?>d-none<?php }?>" data-bs-toggle="tooltip" title="Đã hoàn thành"><i class='bx bx-check-double'></i></span></h5>

				<button type="button" class="btn-close close_pop" data-bs-dismiss="modal" aria-label="Close"></button>

			</div>

			<div class="modal-body scroller">

				<div class="">

					<?php if ($_smarty_tpl->tpl_vars['deviceType']->value == "phone") {?>

						<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getEmbedVideo($_smarty_tpl->tpl_vars['oneLesson']->value['video'],'100%','250px',1);?>


					<?php } else { ?>

						<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getEmbedVideo($_smarty_tpl->tpl_vars['oneLesson']->value['video'],"100%","500px",1);?>


					<?php }?>

				</div>

			</div>

			<div class="modal-footer justify-content-between align-items-center">

				<div class="fs-14">

					<span class="text-muted">Số lượt xem:</span> <?php echo $_smarty_tpl->tpl_vars['number_view']->value;?>


				</div>

				<div class="d-flex flex-wrap align-items-center justify-content-end gap-2">

					<?php if (!empty($_smarty_tpl->tpl_vars['oneLesson']->value['file'])) {?>

					<a href="<?php echo $_smarty_tpl->tpl_vars['oneLesson']->value['file'];?>
" class="btn btn-outline-default" download target="_blank">

						<i class='bx bx-download me-1'></i> Download tài liệu</a>

					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['clsTraining']->value->checkComplete($_smarty_tpl->tpl_vars['training_id']->value,$_smarty_tpl->tpl_vars['lesson_id']->value,$_smarty_tpl->tpl_vars['oneItem']->value)) {?>

					<button class="btn btn-success" type="button">Đã hoàn thành</button>						

					<?php } else { ?>

					<button class="btn btn-primary" type="button" onclick="$Core.training.completed(this,event)" data-training_id="<?php echo $_smarty_tpl->tpl_vars['training_id']->value;?>
" data-lesson_id="<?php echo $_smarty_tpl->tpl_vars['lesson_id']->value;?>
">Hoàn thành</button>

					<?php }?>

				</div>

			</div>

		</div>

	</div>

</div><?php }
}
