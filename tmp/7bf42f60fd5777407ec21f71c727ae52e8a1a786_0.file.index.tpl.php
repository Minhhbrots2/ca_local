<?php
/* Smarty version 3.1.33, created on 2026-07-14 10:47:51
  from '/www/wwwroot/skyrealty.c-a.vn/application/blocks/top_billing/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a55b167b7c828_54739823',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7bf42f60fd5777407ec21f71c727ae52e8a1a786' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/blocks/top_billing/index.tpl',
      1 => 1784000869,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a55b167b7c828_54739823 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="dbx-card h-100">
    <div class="dbx-card__head">
        <span class="dbx-card__ic"><i class="bx bx-transfer-alt"></i></span>
        <h5 class="dbx-card__title">Giao dịch mới nhất</h5>
    </div>
    <div class="dbx-card__body dbx-card__body--flush ajax" data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=dashboard&tp=top_billing"
    data-options='{"skin":"dbx"}'>
        <div class="loader text-center py-8">
            <img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/loading.gif" />
            <p>Loading...</p>
        </div>
    </div>
</div><?php }
}
