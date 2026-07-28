<?php
/* Smarty version 3.1.33, created on 2026-07-07 14:09:17
  from '/www/wwwroot/skyrealty.futureglobal.vn/application/views/report/_ajax.report_top_search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a4ca61da0af62_66090008',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4aa6f3274171f9f87e94539f7a45924677cca80b' => 
    array (
      0 => '/www/wwwroot/skyrealty.futureglobal.vn/application/views/report/_ajax.report_top_search.tpl',
      1 => 1783314326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a4ca61da0af62_66090008 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/www/wwwroot/skyrealty.futureglobal.vn/core/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
if (!empty($_smarty_tpl->tpl_vars['list_logs']->value)) {?>

<div class="card h-100 mb-2">

	<?php $_smarty_tpl->_assignInScope('uid', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>

	<div class="card-header d-flex align-items-center justify-content-between">

		<h5 class="card-title m-0 me-2">Top 10 tra cứu T<?php echo smarty_modifier_date_format(time(),"%m/%Y");?>
</h5>

		<a><i class="bx bx-help-circle"></i></a>

	</div>

	<div class="card-body">

		<ul class="p-0 m-0">

			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_logs']->value, '_oItem', false, 'key', 'i', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['_oItem']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['total'];
?>

				<?php $_smarty_tpl->_assignInScope('oProfile', $_smarty_tpl->tpl_vars['_oItem']->value['oProfile']);?>

				<li class="d-flex <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['last'] : null)) {?>pb-1<?php }?>">

					<div class="avatar mt-1 avatar-sm position-relative flex-shrink-0 me-2" data-trigger="hover" data-width="300" data-url="/index.php?mod=home&act=load_profile_popover&user_id=<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['user_id'];?>
" data-toggle="webui-popover" >

						<img src="<?php echo $_smarty_tpl->tpl_vars['clsProfile']->value->getAvatar($_smarty_tpl->tpl_vars['_oItem']->value['user_id'],$_smarty_tpl->tpl_vars['oProfile']->value,40,40);?>
" onerror="this.src='<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/no-avatar.jpg'" alt="<?php echo $_smarty_tpl->tpl_vars['oProfile']->value['full_name'];?>
" class="rounded-pill" />

						<?php echo $_smarty_tpl->tpl_vars['clsProfile']->value->get_icon_verified($_smarty_tpl->tpl_vars['_oItem']->value['user_id'],$_smarty_tpl->tpl_vars['oProfile']->value);?>


					</div>

					<div class="w-100">

						<div class="d-flex w-100 flex-wrap align-items-center justify-content-between">

							<small class="text-muted d-block"><?php echo $_smarty_tpl->tpl_vars['oProfile']->value['department_name'];?>
</small>

							<div class="user-progress d-flex align-items-center gap-1">

								<h6 class="mb-0 text-main"><?php echo $_smarty_tpl->tpl_vars['_oItem']->value['total_search'];?>
 lượt</h6>

							</div>

						</div>

						<h6 class="mb-0"><?php echo $_smarty_tpl->tpl_vars['oProfile']->value['full_name'];?>
</h6>

					</div>

				</li>

			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

		</ul>

	</div>

</div>

<?php }
}
}
