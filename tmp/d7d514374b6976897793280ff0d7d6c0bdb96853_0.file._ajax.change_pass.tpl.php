<?php
/* Smarty version 3.1.33, created on 2026-07-27 16:34:15
  from '/www/wwwroot/skyrealty.c-a.vn/application/views/member/_ajax.change_pass.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a672617c73931_48330539',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7d514374b6976897793280ff0d7d6c0bdb96853' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/views/member/_ajax.change_pass.tpl',
      1 => 1784623407,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a672617c73931_48330539 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-dialog modal-dialog-centered" role="document">
	<form class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title"><i class="bx bx-lock-alt me-1"></i> Thay đổi mật khẩu</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
		</div>
		<div class="modal-body">
			<div class="mb-3">
				<label class="form-label">Mật khẩu mới <span class="text-danger">*</span></label>
				<div class="input-group input-group-merge">
					<input type="password" name="user_pass" id="cp_pass_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" class="form-control" placeholder="Nhập mật khẩu mới" autocomplete="new-password" />
					<span class="input-group-text cursor-pointer" target="#cp_pass_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" onclick="$Core.member.toggle_pass(this,event)"><i class="bx bx-show"></i></span>
				</div>
				<div class="text-danger small mt-1 err_pass"></div>
				<div class="text-muted small mt-1">Tối thiểu 6 ký tự.</div>
			</div>
			<div class="mb-1">
				<label class="form-label">Nhắc lại mật khẩu <span class="text-danger">*</span></label>
				<div class="input-group input-group-merge">
					<input type="password" name="user_cpass" id="cp_cpass_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" class="form-control" placeholder="Nhập lại mật khẩu mới" autocomplete="new-password" />
					<span class="input-group-text cursor-pointer" target="#cp_cpass_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" onclick="$Core.member.toggle_pass(this,event)"><i class="bx bx-show"></i></span>
				</div>
				<div class="text-danger small mt-1 err_cpass"></div>
			</div>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Hủy</button>
			<button type="button" class="btn btn-primary" onclick="$Core.member.save_change_pass(this,event)"><i class="bx bx-save me-1"></i> Đổi mật khẩu</button>
		</div>
	</form>
</div>
<?php }
}
