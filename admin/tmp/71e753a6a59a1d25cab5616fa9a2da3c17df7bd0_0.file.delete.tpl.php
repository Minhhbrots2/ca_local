<?php
/* Smarty version 3.1.33, created on 2026-05-15 16:24:29
  from '/www/wwwroot/ca.futurehomes.vn/admin/application/views/training/delete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a06e64dd6db06_99159699',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71e753a6a59a1d25cab5616fa9a2da3c17df7bd0' => 
    array (
      0 => '/www/wwwroot/ca.futurehomes.vn/admin/application/views/training/delete.tpl',
      1 => 1778315884,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a06e64dd6db06_99159699 (Smarty_Internal_Template $_smarty_tpl) {
?><h1 class="titHead" style="width:100%">
	<img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/icon_admin/Terminal.png" width="50" class="imgHead" /> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('confirm_delete');?>

</h1>
<form id="edititem" method="post" action="" enctype="multipart/form-data" class="validate-form">
	<fieldset>
        <legend><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('confirm');?>
:</legend>
        <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Are you sure delete this');?>
 <?php echo ucfirst($_smarty_tpl->tpl_vars['mod']->value);?>
 ?
    </fieldset>
    <fieldset class="submit-buttons">
        <button type="submit" name="update" class="btn btn-primary start">
            <i class="icon-ok icon-white"></i>
            <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('agree');?>
</span>
        </button>
        <button type="button" class="btn btn-warning delete" onclick="javascript:history.back();">
            <i class="icon-retweet icon-white"></i>
            <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('no/back');?>
</span>
        </button>
        <input value="agree" name="agree" type="hidden">
    </fieldset>
</form>
<?php }
}
