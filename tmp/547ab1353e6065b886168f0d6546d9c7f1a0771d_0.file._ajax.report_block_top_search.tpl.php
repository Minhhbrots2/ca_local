<?php
/* Smarty version 3.1.33, created on 2026-07-14 10:38:39
  from '/www/wwwroot/skyrealty.c-a.vn/application/views/report/_ajax.report_block_top_search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a55af3fe28061_71879123',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '547ab1353e6065b886168f0d6546d9c7f1a0771d' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/views/report/_ajax.report_block_top_search.tpl',
      1 => 1783955364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a55af3fe28061_71879123 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/www/wwwroot/skyrealty.c-a.vn/core/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="dbx-card h-100 mb-2">
	<?php $_smarty_tpl->_assignInScope('uid', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>
	<div class="dbx-card__head">
		<span class="dbx-card__ic"><i class="bx bx-buildings"></i></span>
		<h5 class="dbx-card__title m-0">Lượt tra cứu dự án T<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['start_time']->value,"%m/%Y");?>
</h5>
	</div>
	<div class="dbx-card__body">
		<?php if (!empty($_smarty_tpl->tpl_vars['arr_log']->value)) {?>
		<ul class="p-0 m-0 overflow-y-auto" style="max-height: 400px">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr_log']->value, '_oItem', false, 'key', 'i', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['_oItem']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['total'];
?>
			<li class="d-flex align-items-center justify-content-between gap-2<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['last'] : null)) {?> pb-2 mb-2 border-bottom<?php }?>">
				<h6 class="mb-0 fw-semibold text-truncate"><?php echo $_smarty_tpl->tpl_vars['_oItem']->value['block_name'];?>
</h6>
				<h6 class="mb-0 text-main fw-bold text-nowrap"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatNumber2($_smarty_tpl->tpl_vars['_oItem']->value['total']);?>
 lượt</h6>
			</li>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
		<?php } else { ?>
		<div class="dbx-empty"><img src="<?php echo @constant('URL_IMAGES');?>
/no-data.png" alt="" /><div class="dbx-empty__t">Chưa có lượt tra cứu</div></div>
		<?php }?>
	</div>
</div>
<?php }
}
