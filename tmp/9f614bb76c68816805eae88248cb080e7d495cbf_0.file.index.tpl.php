<?php
/* Smarty version 3.1.33, created on 2026-07-07 15:16:15
  from '/www/wwwroot/skyrealty.c-a.vn/application/blocks/home_billing_confirm/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a4cb5cfc71d03_92709869',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f614bb76c68816805eae88248cb080e7d495cbf' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/blocks/home_billing_confirm/index.tpl',
      1 => 1783314225,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a4cb5cfc71d03_92709869 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['total_billing_changing_confirms']->value > '0') {?>

	<div class="card mb-2">

		<div class="card-header d-flex align-items-center justify-content-between">

			<h5 class="card-title mb-0">Giao dịch thay đổi</h5>

			<span class="badge badge-center rounded-pill bg-label-danger"><?php echo $_smarty_tpl->tpl_vars['total_billing_changing_confirms']->value;?>
</span>

		</div>

		<div class="card-body billing_changing_confirms ajax" data-options="{}" 

			data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=load_billing_changing_confirms">

			<div class="animate-bg w-100 h-px-15 rounded-2 mb-2"></div>

			<div class="w-100 d-flex align-items-center justify-content-between mb-2 gap-3">

				<div class="animate-bg w-100 h-px-15 rounded-2"></div>

				<div class="animate-bg w-100 h-px-15 rounded-2"></div>

			</div>

			<div class="animate-bg w-100 h-px-15 rounded-2 mb-2"></div>

			<div class="w-100 d-flex align-items-center justify-content-between gap-3">

				<div class="animate-bg w-100 h-px-15 rounded-2"></div>

				<div class="animate-bg w-100 h-px-15 rounded-2"></div>

			</div>

		</div>

	</div>

<?php }
}
}
