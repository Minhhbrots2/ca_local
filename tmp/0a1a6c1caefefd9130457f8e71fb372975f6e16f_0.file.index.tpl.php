<?php
/* Smarty version 3.1.33, created on 2026-07-07 15:19:47
  from '/www/wwwroot/skyrealty.c-a.vn/application/blocks/home_course/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a4cb6a38b8634_11156546',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a1a6c1caefefd9130457f8e71fb372975f6e16f' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/blocks/home_course/index.tpl',
      1 => 1783314225,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a4cb6a38b8634_11156546 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card bg-main h-100">

	<div class="card-header d-flex align-items-center justify-content-between pb-2">

		<h5 class="card-title text-white m-0">

			<i class='bx bx-bell'></i>

			<span>Sự kiện & Đào tạo</span>

		</h5>

		<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkPermission("view_all_course")) {?>

		<a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('course');?>
" class="text-white text-decoration-underline" title="Xem tất cả">Xem tất cả</a>

		<?php }?>

	</div>

	<div class="card-body mt-0">

		<div class="ajax home_events" data-options="{}" data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&sub=course&act=home_events">

			<div class="row">

				<div class="col-12">

					<div class="animate-bg w-100 h-px-20 rounded-pill mb-3"></div>

					<div class="animate-bg w-60 rounded-pill h-px-15 mb-2"></div>

					<div class="animate-bg w-80 rounded-pill mb-2 h-px-15"></div>

					<div class="animate-bg w-100 h-px-15 rounded-pill mb-2"></div>

					<div class="animate-bg w-60 rounded-pill h-px-15 mb-2"></div>

				</div>

			</div>

		</div>

	</div>

</div>



<?php }
}
