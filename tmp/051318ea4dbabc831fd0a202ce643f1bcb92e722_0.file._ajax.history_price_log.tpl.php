<?php
/* Smarty version 3.1.33, created on 2026-07-22 08:51:54
  from '/www/wwwroot/skyrealty.c-a.vn/application/views/ajax/helper/_ajax.history_price_log.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a60223ab46460_70123346',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '051318ea4dbabc831fd0a202ce643f1bcb92e722' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/views/ajax/helper/_ajax.history_price_log.tpl',
      1 => 1783308688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a60223ab46460_70123346 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-dialog modal-dialog-centered modal-md">

	<form class="modal-content">

		<div class="modal-header position-relative">

			<div class="d-flex w-100 justify-content-between align-items-center">

				<h5 class="modal-title text-upper">

					Lịch sử giá căn <?php echo $_smarty_tpl->tpl_vars['oneStock']->value['ms_code'];?>


				</h5>

			</div>

			<button type="button" class="btn-close closeEv" data-bs-dismiss="modal" aria-label="Close"></button>

		</div>

		<div class="modal-body">

			<div class="holder_Lpoint_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">

				<table class="table">

					<thead><tr>

						<th class="align-center text-center">STT</th>

						<th class="align-center" width="150">Thời gian</th>

						<th class="align-center">Nội dung</th>

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

								<td><?php echo $_smarty_tpl->tpl_vars['_oLog']->value['reg_date'];?>
</td>

								<td>Từ <strong><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['_oLog']->value['from_value']);?>
đ</strong> thành <strong><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['_oLog']->value['to_value']);?>
đ</strong></td>

							</tr>

						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>	

					<?php } else { ?>

						<tr><td class="text-center" colspan="<?php if ($_smarty_tpl->tpl_vars['deviceType']->value != 'phone') {?>5<?php } else { ?>3<?php }?>">Dữ liệu trống</td></tr>

					<?php }?>

				</table>

			</div>

		</div>

	</form>

</div><?php }
}
