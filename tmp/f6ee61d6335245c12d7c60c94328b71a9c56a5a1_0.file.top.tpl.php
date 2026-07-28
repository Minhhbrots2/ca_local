<?php
/* Smarty version 3.1.33, created on 2026-07-08 14:46:12
  from '/www/wwwroot/skyrealty.c-a.vn/application/views/home/report/top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a4e0044af9452_93812386',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6ee61d6335245c12d7c60c94328b71a9c56a5a1' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/views/home/report/top.tpl',
      1 => 1783314653,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a4e0044af9452_93812386 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-xxl flex-grow-1 pt-2 container-p-y">

    <div class="col-12 col-md-8 mx-auto offset-lg-2 col-xxl-6">

		<div class="alert alert-warning text-center mb-2">

			<a href="javascript:;" class="text-main d-flex font-bold text-upper align-items-center justify-content-center fs-20" campaign_id="<?php echo $_smarty_tpl->tpl_vars['oneCampaign']->value['campaign_id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/gift-icon-hot.gif" class="w-px-30" /> <?php echo $_smarty_tpl->tpl_vars['title_block_page']->value;?>
</a>

		</div>

		<?php $_smarty_tpl->_assignInScope('gId', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>

		<?php if ($_smarty_tpl->tpl_vars['block_name']->value == 'top_ranking') {?>

			<div class="card ranking h-100">

				<div class="card-body">

					<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('top_ranking',array('gId'=>$_smarty_tpl->tpl_vars['gId']->value));?>


				</div>

			</div>

		<?php } else { ?>

			<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock($_smarty_tpl->tpl_vars['block_name']->value,array('gId'=>$_smarty_tpl->tpl_vars['gId']->value,'type'=>$_smarty_tpl->tpl_vars['type']->value));?>


		<?php }?>

    </div>

</div><?php }
}
