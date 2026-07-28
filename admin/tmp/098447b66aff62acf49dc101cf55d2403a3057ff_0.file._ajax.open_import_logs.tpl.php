<?php
/* Smarty version 3.1.33, created on 2026-07-02 13:28:21
  from '/www/wwwroot/ca.futurehomes.vn/admin/application/views/stock/_ajax.open_import_logs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a460505b32107_18539368',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '098447b66aff62acf49dc101cf55d2403a3057ff' => 
    array (
      0 => '/www/wwwroot/ca.futurehomes.vn/admin/application/views/stock/_ajax.open_import_logs.tpl',
      1 => 1781150645,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a460505b32107_18539368 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-dialog">

	<div class="modal-content">

		<div class="modal-header"> 

			<a href="javascript:void();" class="closeEv close_pop close"><span>×</span></a> 

			<h3 class="modal-title"><strong>Lịch sử cập nhật <?php echo $_smarty_tpl->tpl_vars['clsProperty']->value->getTitle($_smarty_tpl->tpl_vars['agency_id']->value);?>
</strong></h3>

		</div>

		<form method="POST" action="" enctype="multipart/form-data">

			<div class="modal-body">

				<table class="table" width="100%">

					<thead><tr>

						<th width="5%">No.</th>

						<th width="25%">Ngày</th>

						<th>Người cập nhật</th>

						<th class="text-center">Nguồn cập nhật</th>

					</tr></thead>

					<?php if (!empty($_smarty_tpl->tpl_vars['list_logs']->value)) {?>

						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_logs']->value, '_oLog', false, NULL, 'i', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oLog']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']++;
?>

						<tr>

							<td class="text-center"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration'] : null);?>
</td>

							<td class="text-left"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->convertTimeToText($_smarty_tpl->tpl_vars['_oLog']->value['date'],true);?>
</td>

							<td class="text-left"><?php echo $_smarty_tpl->tpl_vars['_oLog']->value['full_name'];?>
</td>

							<?php if ($_smarty_tpl->tpl_vars['_oLog']->value['from_site'] == "_admin") {?>

								<td class="text-center">Admin</td>

							<?php } else { ?>

								<td class="text-center">CA.FH</td>

							<?php }?>

						</tr>

						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

					<?php } else { ?>

						<tr>

							<td colspan="4" class="text-center">

								<p>Chưa có lịch sử cập nhật nào!</p>

							</td>

						</tr>

					<?php }?>

				</table>

				

			</div>

			<div class="modal-footer">

				<button type="button" class="btn btn-success pull-right" onClick="start_import_file(this, event)" 

				tp="<?php echo $_smarty_tpl->tpl_vars['tp']->value;?>
" stock_type="<?php echo $_smarty_tpl->tpl_vars['stock_type']->value;?>
" project_id="<?php echo $_smarty_tpl->tpl_vars['project_id']->value;?>
" block_id="<?php echo $_smarty_tpl->tpl_vars['block_id']->value;?>
" building_id="<?php echo $_smarty_tpl->tpl_vars['building_id']->value;?>
"><?php if ($_smarty_tpl->tpl_vars['tp']->value == 'blank') {?>Upload<?php } else { ?>Import<?php }?></button>

				<button type="button" class="btn btn-default mr-half pull-right" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Close');?>
</button>

			</div>

		</form>

	</div>

</div><?php }
}
