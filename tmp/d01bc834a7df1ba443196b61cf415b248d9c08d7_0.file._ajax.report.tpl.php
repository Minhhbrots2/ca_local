<?php
/* Smarty version 3.1.33, created on 2026-07-24 10:05:14
  from '/www/wwwroot/skyrealty.c-a.vn/application/views/log/_ajax.report.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a62d66a282d32_53844005',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd01bc834a7df1ba443196b61cf415b248d9c08d7' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/views/log/_ajax.report.tpl',
      1 => 1783308738,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a62d66a282d32_53844005 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal right fade show" id="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" role="dialog">

	<div class="modal-dialog">

		<div class="modal-content">

			<div class="modal-header">

				<h5 class="modal-title">Báo cáo TOP 20 căn hộ<br />

					<span class="text-muted fs-12">được tra cứu nhiều nhất</span>

				</h5>

				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

			</div>

			<div class="modal-body">

				<div class="btn-group d-flex mb-2" role="group" aria-label="Sắp xếp">

					<input onChange="$Core.log.do_reload(this, event)" type="radio" class="btn-check" name="search_type" 

						id="search_type_0_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" value="all" uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" autocomplete="off" checked>

					<label class="btn btn-outline-default" for="search_type_0_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">Tất cả</label>

					<input onChange="$Core.log.do_reload(this, event)" type="radio" class="btn-check" name="search_type" 

						id="search_type_1_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" value="sold" uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" autocomplete="off">

					<label class="btn btn-outline-default" for="search_type_1_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">Đã bán</label>

					<input onChange="$Core.log.do_reload(this, event)" type="radio" class="btn-check" name="search_type" 

						id="search_type_2_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" value="not_sold" uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" autocomplete="off">

					<label class="btn btn-outline-default" for="search_type_2_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">Chưa bán</label>

				</div>

				<table width="100%" class="table" cellpadding="0" cellspacing="0">

					<thead><tr>

						<th width="10%" class="align-center text-center">No.</th>

						<th width="30%" class="align-center">Mã căn</th>

						<th class="align-center">Lượt check</th>

					</tr></thead>

					<tbody id="tbody_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">

						<tr>

							<td colspan="3">Loading...</td>

						</tr>

					</tbody>

				</table>

			</div>

		</div>

	</div>

</div><?php }
}
