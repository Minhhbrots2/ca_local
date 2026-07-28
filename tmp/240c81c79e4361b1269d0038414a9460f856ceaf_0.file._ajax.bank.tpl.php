<?php
/* Smarty version 3.1.33, created on 2026-07-23 09:08:58
  from '/www/wwwroot/skyrealty.c-a.vn/application/views/member/_ajax.bank.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a6177ba647d32_63377031',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '240c81c79e4361b1269d0038414a9460f856ceaf' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/views/member/_ajax.bank.tpl',
      1 => 1783308723,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a6177ba647d32_63377031 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-dialog modal-dialog-centered">
	<form method="post" class="frmIssueBank modal-content" enctype="multipart/form-data">
		<div class="modal-header">
			<h5 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['titlePage']->value;?>
</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
			<div class="form-row mb-2">
				<div class="col-6 col-md-6">
					<label class="col-form-label">Số tài khoản</label>
					<input type="text" class="form-control required numberonly" name="account_number" 
					placeholder="Số tài khoản"<?php if ($_smarty_tpl->tpl_vars['action']->value == '_edit') {?> value="<?php echo $_smarty_tpl->tpl_vars['oneBank']->value['account_number'];?>
"<?php }?>>
				</div>
				<div class="col-6 col-md-6">
					<label class="col-form-label">Chủ tài khoản</label>
					<input type="text" class="form-control required"<?php if ($_smarty_tpl->tpl_vars['action']->value == '_edit') {?> value="<?php echo $_smarty_tpl->tpl_vars['oneBank']->value['account_person'];?>
"<?php }?> name="account_person" placeholder="Chủ tài khoản">
				</div>
			</div>
			<div class="form-row">
				<div class="col-xs-12 col-md-6 pr-0">
					<label class="col-form-label">Ngân hàng</label>
					<select name="bank_name" data-width="100%" class="iso-select2 required">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_banks']->value, '_oBank', false, NULL, 'i', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oBank']->value) {
?>
						<option<?php if ($_smarty_tpl->tpl_vars['action']->value == '_edit' && $_smarty_tpl->tpl_vars['oneBank']->value['bank_name'] == $_smarty_tpl->tpl_vars['_oBank']->value['shortName']) {?> selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['_oBank']->value['shortName'];?>
"><?php echo $_smarty_tpl->tpl_vars['_oBank']->value['shortName'];?>
</option>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
				</div>
				<div class="col-xs-12 col-md-6">
					<label class="col-form-label">Chi nhánh</label>
					<input type="text" class="form-control" name="location"<?php if ($_smarty_tpl->tpl_vars['action']->value == '_edit') {?> value="<?php echo $_smarty_tpl->tpl_vars['oneBank']->value['location'];?>
"<?php }?> placeholder="Tên chi nhánh (nếu có)">
				</div>
			</div>
		</div>
		<div class="modal-footer pt-3 border-top">
			<button type="button" data-toggle="ripple" class="btn btn-md flex-fill btn-warning" data-bs-dismiss="modal">Đóng</button>
			<button type="button" data-toggle="ripple" class="btn btn-md flex-fill btn-primary" onClick="$Core.member.pop_save_bank(this,event)" 
				profile_id="<?php echo $_smarty_tpl->tpl_vars['_profile_id']->value;?>
" bank_id="<?php echo $_smarty_tpl->tpl_vars['bank_id']->value;?>
">Lưu lại</button>
		</div>
	</form>
</div>

<style type="text/css">
	.select2-container{
		z-index:1091 !important
	}
</style>
<?php }
}
