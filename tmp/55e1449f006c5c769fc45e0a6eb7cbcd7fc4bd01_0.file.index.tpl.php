<?php
/* Smarty version 3.1.33, created on 2026-07-10 17:49:00
  from '/www/wwwroot/skyrealty.c-a.vn/application/blocks/crm_home/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a50ce1c2730e8_74353568',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55e1449f006c5c769fc45e0a6eb7cbcd7fc4bd01' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/blocks/crm_home/index.tpl',
      1 => 1783308774,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a50ce1c2730e8_74353568 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form-row">

	<div class="col-12 col-lg-6 mb-2">

		<div class="card h-100">

			<div class="card-header d-flex align-items-center justify-content-between">

				<h5 class="card-title mb-0">Khách hôm nay</h5>

			</div>

			<div class="card-body ajax" gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=load_followup_crm" data-options="{}">

				<div class="p-5 text-center">

					<div class="p-2">Đang tải...</div>

				</div>

				<a class="btn bg-main btn-outline-default text-white w-100" href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('crm');?>
" >Đi đến CRM</a>

			</div>

		</div>

	</div>

	<div class="col-12 col-lg-6 mb-2">

		<div class="card h-100">

			<div class="card-header d-flex align-items-center justify-content-between">

				<h5 class="card-title mb-0">Tiến trình chăm sóc <?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?>KH<?php } else { ?>khách hàng<?php }?></h5>

			</div>

			<div class="card-body ajax" gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=load_sales_pipeline" data-options="{}">

				<div class="p-5 text-center">

					<div class="p-2">Đang tải...</div>

				</div>

			</div>

		</div>

	</div>

</div><?php }
}
