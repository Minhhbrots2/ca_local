<?php
/* Smarty version 3.1.33, created on 2026-07-24 17:18:22
  from '/www/wwwroot/skyrealty.c-a.vn/application/views/ajax/_ajax.stock_chart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a633bee834743_73184174',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '786f1390c3d7f8cde1eaf3d098d41435d6803685' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/views/ajax/_ajax.stock_chart.tpl',
      1 => 1783308687,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a633bee834743_73184174 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-dialog modal-dialog-centered modal-ipad">

	<form class="modal-content">

		<div class="modal-header">

			<h5 class="modal-title">Biểu đồ tăng giá <?php echo $_smarty_tpl->tpl_vars['oneStock']->value['ms_code'];?>
</h5>

			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

		</div>

		<div class="modal-body">

			<div id="chartStockPrice_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" class="chartContainer w-100 h-px-350">

				Loading...

			</div>

		</div>

		<div class="modal-footer">

			<button type="button" class="btn btn-outline-default" data-bs-dismiss="modal">Đóng</button>

		</div>

	</form>

</div><?php }
}
