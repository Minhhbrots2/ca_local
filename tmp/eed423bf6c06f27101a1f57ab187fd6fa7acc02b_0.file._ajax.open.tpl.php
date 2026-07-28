<?php
/* Smarty version 3.1.33, created on 2026-07-27 16:07:42
  from '/www/wwwroot/skyrealty.c-a.vn/application/views/training/_ajax.open.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a671fdebaec04_29818659',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eed423bf6c06f27101a1f57ab187fd6fa7acc02b' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/views/training/_ajax.open.tpl',
      1 => 1783308687,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a671fdebaec04_29818659 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal right fade show" id="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" role="dialog">

	<div class="modal-dialog"><div class="modal-content">

		<div class="modal-header">

			<h5 class="modal-title text-main"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
</h5>

			<button type="button" class="btn-close close_pop" data-bs-dismiss="modal" aria-label="Close"></button>

		</div>

		<div class="highlights">

			<div class="highlight-panel">

				<div class="highlight-list justify-content-between" style="min-width: unset">

					<div class="highlight_item">

						<div class="highlight-label">Giảng viên</div>

						<div class="metadata-row-viewer d-flex gap-1">

							<div class="issue-link text-muted"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['author'];?>
</div>

						</div>

					</div>

					<?php if (!empty($_smarty_tpl->tpl_vars['oneItem']->value['time_training'])) {?>

					<div class="highlight_item">

						<div class="highlight-label">Thời lượng</div>

						<div id="start_date_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" class="metadata-row-viewer fs-13">

							<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->convertTimeMinute($_smarty_tpl->tpl_vars['oneItem']->value['time_training']);?>


						</div>

					</div>

					<?php }?>

					<div class="highlight_item">

						<div class="highlight-label">Hoàn thành</div>

						<div class="metadata-row-viewer mt-2 done_ratio_<?php echo $_smarty_tpl->tpl_vars['training_id']->value;?>
">

							<?php echo $_smarty_tpl->tpl_vars['clsTraining']->value->getProgress($_smarty_tpl->tpl_vars['training_id']->value,$_smarty_tpl->tpl_vars['oneItem']->value);?>


						</div>

					</div>

					<?php if (!empty($_smarty_tpl->tpl_vars['oneQuiz']->value)) {?>

						<div class="highlight_item">

							<a class="btn btn-outline-primary" href="<?php echo $_smarty_tpl->tpl_vars['clsQuiz']->value->getLink($_smarty_tpl->tpl_vars['oneQuiz']->value['quiz_id'],$_smarty_tpl->tpl_vars['oneQuiz']->value);?>
" target="_blank" >Làm bài test</a>

						</div>

					<?php }?>

				</div>

			</div>

		</div>

			<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkPermissionGroup('DIRECTOR') || $_smarty_tpl->tpl_vars['clsISO']->value->checkDEV()) {?>

				<div class="modal-body">

					<div class="nav-align-top nav_training">

						<ul class="nav nav-tabs gap-2" role="tablist">

							<li class="nav-item" role="presentation">

								<button type="button" class="nav-link active px-0" role="tab" data-bs-toggle="tab" data-bs-target="#tab_lesson_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" aria-controls="tab_lesson_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" aria-selected="true">

								Danh sách bài học

								</button>

							</li>

							<li class="nav-item" role="presentation">

								<button type="button" class="nav-link px-0" role="tab" data-bs-toggle="tab" data-bs-target="#tab_profile_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" aria-controls="tab_profile_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" aria-selected="true" onclick="$Core.global.training.loadHistory(this,event)" training_id="<?php echo $_smarty_tpl->tpl_vars['training_id']->value;?>
" >

								Thành viên đã học

								</button>

							</li>

						</ul>

						<div class="tab-content px-0 scroller" style="box-shadow: 0 0">

							<div class="tab-pane fade active show" id="tab_lesson_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" role="tabpanel">

								<div class="lst_lesson border rounded-1">

									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lstLesson']->value, '_oLesson', false, 'key', 'i', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['_oLesson']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['total'];
?>

										<div class="item_lesson position-relative p-3<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['last'] : null)) {?> border-bottom<?php }?>" onClick="$Core.global.training.learning(this,event)" data-training_id="<?php echo $_smarty_tpl->tpl_vars['training_id']->value;?>
" data-lesson_id="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">						

											<div class="d-flex justify-content-between align-items-center">

												<div class="d-flex align-items-center gap-2 flex-fill">

													<button class="btn rounded-pill btn_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 <?php if (!$_smarty_tpl->tpl_vars['clsISO']->value->checkItemInArray($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['lesson_complete']->value)) {?>btn-outline-primary<?php } else { ?>btn-outline-success<?php }?> btn-sm btn-icon" type="button"  data-bs-toggle="tooltip" title="Xem bài học"><i class='bx bxs-right-arrow fs-12'></i></button><a class="d-flex align-items-start collapsed text-dark fs-16 lh-xs" data-bs-toggle="collapse" href="#lesson_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" role="button" aria-expanded="false"><?php echo $_smarty_tpl->tpl_vars['_oLesson']->value['title'];?>
 </a>

												</div>

												<?php if ($_smarty_tpl->tpl_vars['deviceType']->value == "phone") {?>

													<span class="btn btn-xs btn-success btn_completed btn_completed_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 btn-icon <?php if (!$_smarty_tpl->tpl_vars['clsISO']->value->checkItemInArray($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['lesson_complete']->value)) {?>d-none<?php }?>"><i class='bx bx-check'></i></span>

												<?php } else { ?>

													<span class="btn btn-xs btn-success text-nowrap btn_completed_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 <?php if (!$_smarty_tpl->tpl_vars['clsISO']->value->checkItemInArray($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['lesson_complete']->value)) {?>d-none<?php }?>">Đã hoàn thành</span>

												<?php }?>

											</div>

										</div>

									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

								</div>

							</div>

							<div class="tab-pane fade" id="tab_profile_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" role="tabpanel">

								<ul class="list-unstyled" id="list_favourite" data-bs-popper="static"><div class="d-flex flex-column align-items-center justify-content-center p-3">

									<img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/listing-empty.svg" width="90px">

									<p>Danh sách trống</p>

								</div></ul>

							</div>

						</div>

					</div>

				</div>

			<?php } else { ?>

				<div class="modal-body scroller">

					<h6 class="mb-2 text-dark fs-18">Danh sách bài học</h6>

					<div class="lst_lesson border rounded-1">

						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lstLesson']->value, '_oLesson', false, 'key', 'i', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['_oLesson']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['total'];
?>

							<div class="item_lesson position-relative p-3<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['last'] : null)) {?> border-bottom<?php }?>" onClick="$Core.global.training.learning(this,event)" data-training_id="<?php echo $_smarty_tpl->tpl_vars['training_id']->value;?>
" data-lesson_id="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">						

								<div class="d-flex justify-content-between align-items-center">

									<div class="d-flex align-items-center gap-2 flex-fill">

										<button class="btn rounded-pill btn_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 <?php if (!$_smarty_tpl->tpl_vars['clsISO']->value->checkItemInArray($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['lesson_complete']->value)) {?>btn-outline-primary<?php } else { ?>btn-outline-success<?php }?> btn-sm btn-icon" type="button"  data-bs-toggle="tooltip" title="Xem bài học"><i class='bx bxs-right-arrow fs-12'></i></button><a class="d-flex align-items-start collapsed text-dark fs-16 lh-xs" data-bs-toggle="collapse" href="#lesson_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" role="button" aria-expanded="false"><?php echo $_smarty_tpl->tpl_vars['_oLesson']->value['title'];?>
 </a>

									</div>

									<?php if ($_smarty_tpl->tpl_vars['deviceType']->value == "phone") {?>

										<span class="btn btn-xs btn-success btn_completed btn_completed_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 btn-icon <?php if (!$_smarty_tpl->tpl_vars['clsISO']->value->checkItemInArray($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['lesson_complete']->value)) {?>d-none<?php }?>"><i class='bx bx-check'></i></span>

									<?php } else { ?>

										<span class="btn btn-xs btn-success text-nowrap btn_completed_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 <?php if (!$_smarty_tpl->tpl_vars['clsISO']->value->checkItemInArray($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['lesson_complete']->value)) {?>d-none<?php }?>">Đã hoàn thành</span>

									<?php }?>

								</div>

								
							</div>

						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

					</div>

				</div>

			<?php }?>

	</div></div>

</div><?php }
}
