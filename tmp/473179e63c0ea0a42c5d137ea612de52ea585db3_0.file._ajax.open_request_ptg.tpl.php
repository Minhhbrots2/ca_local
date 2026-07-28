<?php
/* Smarty version 3.1.33, created on 2026-07-27 18:26:09
  from '/www/wwwroot/skyrealty.c-a.vn/application/views/request_ptg/_ajax.open_request_ptg.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a674051ca4db9_41549711',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '473179e63c0ea0a42c5d137ea612de52ea585db3' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/views/request_ptg/_ajax.open_request_ptg.tpl',
      1 => 1783308743,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a674051ca4db9_41549711 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('gid', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>

<div class="modal-dialog modal-dialog-centered">

	<form class="modal-content">

		<div class="modal-header">

			<div class="d-flex w-100 align-items-center justify-content-between">

				<h5 class="modal-title"> yêu cầu phiếu tính giá</h5>

				<div class="d-flex gap-2 align-items-center<?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?> mr-3<?php }?>">

					<label class="switch">

						<input type="checkbox" name="is_urgent" value="1" />

						<span class="slider round"></span>

					</label>

					<span class="text-main">Cần gấp</span>

				</div>

			</div>

			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

		</div>

		<div class="modal-body">

			<div class="textarea">

				<textarea id="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid();?>
" name="content" data-height="50" rows="10" cols="255" class="hasIsoRedactor" data-placeholder="Nhập nội dung yêu cầu..."></textarea>

			</div>

			<div class="alert alert-warning">Không cần ghi nội dung nếu không có yêu cầu đặc biệt!</div>

		</div>

		<div class="modal-footer">

			<button type="button" class="btn flex-fill btn-outline-secondary" data-bs-dismiss="modal">Đóng</button>

			<button type="button" stock_id="<?php echo $_smarty_tpl->tpl_vars['stock_id']->value;?>
" onclick="$Core.helper.requestPTG(this,event)" action="_SAVE" class="btn btn-primary flex-fill">Gửi yêu cầu</button>

		</div>

	</form>

</div><?php }
}
