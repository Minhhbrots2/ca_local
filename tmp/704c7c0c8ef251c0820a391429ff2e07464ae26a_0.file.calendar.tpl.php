<?php
/* Smarty version 3.1.33, created on 2026-07-11 09:03:45
  from '/www/wwwroot/skyrealty.c-a.vn/application/views/tool/calendar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a51a48126b1b5_84059611',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '704c7c0c8ef251c0820a391429ff2e07464ae26a' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/views/tool/calendar.tpl',
      1 => 1783308749,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a51a48126b1b5_84059611 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/fullcalendar-1.6.0/fullcalendar/fullcalendar.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" media="all" />

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/fullcalendar-1.6.0/fullcalendar/moment.min.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/fullcalendar-1.6.0/fullcalendar/fullcalendar.min.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/fullcalendar-1.6.0/fullcalendar/gcal.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>

<div class="container-xxl flex-grow-1 pt-2 container-p-y">

	<div class="row">

		<div class="col-12 col-xxxl-10 offset-xxxl-1">

			<div class="d-flex flex-wrap justify-content-between align-items-center py-1 mb-2">

				<div class="mb-2 mb-lg-0">

					<h4 class="fw-bold mb-0">Đăng ký phòng họp</span></h4>

					<span class="text-muted">Đăng ký sử dụng phòng họp</span>

				</div>

				<div class="btn-groups d-flex justify-content-end flex-fill gap-2">

					<button type="button" data-toggle="ripple" title="Thống kê" openFrom="_dashboard" onClick="$Core.calendar.loadTotal_calendar(this, event)" data-type="_OPEN" class="btn btn-primary">Thống kê</button>

					<button type="button" data-toggle="ripple" title="Thêm mới" openFrom="_dashboard" onClick="$Core.calendar.open(this, event)" class="btn btn-outline-primary">+ Thêm mới</button>

				</div>

			</div>

			<div class="overflow-x-auto">	

				<div class="fh-calendar" id="fh-calendar">

					<div class="p-5 text-center text-muted">Loading...</div>

				</div>

			</div>

		</div>

	</div>

</div>

<style>

	.selectize-dropdown,

	.selectize-dropdown.form-control {

		height: auto;

		padding: 0;

		margin: 2px 0 0;

		z-index: 1000;

		background: #fff;

		border: 1px solid #ccc;

		border: 1px solid rgba(0,0,0,.15);

		-webkit-border-radius: 4px;

		-moz-border-radius: 4px;

		border-radius: 4px;

		-webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);

		box-shadow: 0 6px 12px rgba(0,0,0,.175)

	}

</style><?php }
}
