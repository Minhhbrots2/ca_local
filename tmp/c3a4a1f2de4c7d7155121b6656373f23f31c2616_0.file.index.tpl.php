<?php
/* Smarty version 3.1.33, created on 2026-07-14 00:47:22
  from '/www/wwwroot/skyrealty.c-a.vn/application/blocks/home_share_confirm/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a5524aaa828f6_35032557',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3a4a1f2de4c7d7155121b6656373f23f31c2616' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/blocks/home_share_confirm/index.tpl',
      1 => 1783964832,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a5524aaa828f6_35032557 (Smarty_Internal_Template $_smarty_tpl) {
?>dada
<div class="list_share_waiting mb-2 ajax" data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=load_share_waiting" data-options='{}'>
	<div class="card">
		<div class="card-header">
			<h5 class="card-title m-1 me-2">Báo cáo tiếp khách chờ xác thực</h5>
		</div>
		<div class="card-body">
			<ul class="p-0 m-0">
				<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['list_preloaders']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = min(($__section_i_0_loop - 0), 10);
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $__section_i_0_total; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
				<li class="d-flex align-items-center gap-2<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['last'] : null)) {?> mb-2<?php }?>">
					<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null)%2 == 0) {?>
					<div class="animate-bg w-100 rounded-2 h-px-15"></div>
					<?php } else { ?>
					<div class="animate-bg w-100 rounded-2 h-px-15"></div>
					<div class="animate-bg w-100 rounded-2 h-px-15"></div>
					<?php }?>
				</li>
				<?php
}
}
?>
			</ul>
		</div>
	</div>
</div><?php }
}
