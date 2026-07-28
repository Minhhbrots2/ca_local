<?php
/* Smarty version 3.1.33, created on 2026-07-21 14:13:05
  from '/www/wwwroot/skyrealty.c-a.vn/application/views/report/project/_ajax.view_stock_dq.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a5f1c01c00917_10211521',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e38dde6b331e4027669231352080bece1a41f66' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/views/report/project/_ajax.view_stock_dq.tpl',
      1 => 1783283460,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a5f1c01c00917_10211521 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-dialog">

	<div class="modal-content">

		<div class="modal-header"> 

			<h3 class="modal-title"><strong><?php echo $_smarty_tpl->tpl_vars['title_page']->value;?>
</strong></h3>

			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

		</div>

		<div class="modal-body">

			<div class="table-container no-shadow overflow-y-auto" style="max-height: calc(100vh - 200px)">

				<table class="table table-striped dragable table-bordered installed mb-0" width="100%"  cellspacing="0" cellpadding="0">

					<thead class="position-sticky top-0 bg-lighter zindex-3"><tr>

						<th width="5%">No.</th>

						<th width="">Mã căn</th>

						<th>Tổng giá VAT</th>

					</tr></thead>

					<tbody>

						<?php if (!empty($_smarty_tpl->tpl_vars['lstStock']->value)) {?>

							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lstStock']->value, '_oItem', false, NULL, 'i', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oItem']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']++;
?>

							<tr>

								<td class="text-center"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration'] : null);?>
</td>

								<td class="text-left"><a href="javascript:void(0);" data-url="/index.php?mod=home&sub=project&act=load_stock_popover&stock_id=<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['stock_id'];?>
" data-toggle="webui-popover" data-trigger="click" data-placement="auto" data-width="350"><?php echo $_smarty_tpl->tpl_vars['_oItem']->value['ms_code'];?>
</a></td>

								<td class="text-left"><?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {
echo $_smarty_tpl->tpl_vars['clsISO']->value->shortNumberV2($_smarty_tpl->tpl_vars['_oItem']->value['total_price_vat'],2);
} else {
echo $_smarty_tpl->tpl_vars['clsISO']->value->priceFormat($_smarty_tpl->tpl_vars['_oItem']->value['total_price_vat']);?>
 VNĐ<?php }?></td>

							</tr>

							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

						<?php } else { ?>

							<tr>

								<td colspan="3" class="text-center">

									<p>Danh sách trống!</p>

								</td>

							</tr>

						<?php }?>

					</tbody>

					<tfoot class="position-sticky bottom-0 bg-lighter zindex-2">

						<tr class="nohover">

							<td class="text-center text-upper fw-bold text-main" colspan="2" >Tổng</td>

							<td class="text-left text-upper fw-bold text-main"><?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {
echo $_smarty_tpl->tpl_vars['clsISO']->value->shortNumberV2($_smarty_tpl->tpl_vars['total_price']->value,2);
} else {
echo $_smarty_tpl->tpl_vars['clsISO']->value->priceFormat($_smarty_tpl->tpl_vars['total_price']->value);?>
 VNĐ<?php }?></td>

						</tr>

					</tfoot>

				</table>

			</div>



		</div>

		<div class="modal-footer">

			<button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>

		</div>

	</div>

</div><?php }
}
