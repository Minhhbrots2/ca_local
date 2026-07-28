<?php
/* Smarty version 3.1.33, created on 2026-07-07 14:09:17
  from '/www/wwwroot/skyrealty.futureglobal.vn/application/views/report/_ajax.report_block_top_search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a4ca61dcd2ab8_73458441',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '952786af7016c35d481bb46c298fc774eca2a6f4' => 
    array (
      0 => '/www/wwwroot/skyrealty.futureglobal.vn/application/views/report/_ajax.report_block_top_search.tpl',
      1 => 1783314326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a4ca61dcd2ab8_73458441 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/www/wwwroot/skyrealty.futureglobal.vn/core/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
if (!empty($_smarty_tpl->tpl_vars['arr_log']->value)) {?>

<div class="card h-100 mb-2">

	<?php $_smarty_tpl->_assignInScope('uid', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>

	<div class="card-header d-flex align-items-center justify-content-between">

		<h5 class="card-title m-0 me-2">Lượt tra cứu dự án T<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['start_time']->value,"%m/%Y");?>
</h5>

		<a><i class="bx bx-help-circle"></i></a>

	</div>

	<div class="card-body">

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

				<li class="d-flex <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['last'] : null)) {?>pb-2<?php }?>">

					<div class="w-100">

						<div class="d-flex w-100 flex-wrap align-items-center justify-content-between mb-1">

							<h6 class="mb-0"><?php echo $_smarty_tpl->tpl_vars['_oItem']->value['block_name'];?>
</h6>

							<div class="user-progress d-flex align-items-center gap-1">

								<h6 class="mb-0 text-main"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatNumber2($_smarty_tpl->tpl_vars['_oItem']->value['total']);?>
 lượt</h6>

							</div>

						</div>

						

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
