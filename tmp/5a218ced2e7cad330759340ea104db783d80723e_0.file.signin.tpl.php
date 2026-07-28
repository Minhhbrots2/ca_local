<?php
/* Smarty version 3.1.33, created on 2026-07-27 10:08:49
  from '/www/wwwroot/skyrealty.c-a.vn/application/views/auth/signin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a66cbc1222db9_42337210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a218ced2e7cad330759340ea104db783d80723e' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/views/auth/signin.tpl',
      1 => 1785121727,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./_brand.tpl' => 1,
  ),
),false)) {
function content_6a66cbc1222db9_42337210 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="sky-auth">
	<div class="sky-auth__card">
	<?php $_smarty_tpl->_subTemplateRender("file:./_brand.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<div class="sky-auth__form">
		<div class="sky-auth__form-inner">
			<?php if ($_smarty_tpl->tpl_vars['_ss_forgot_password']->value == '_success') {?>
			<div class="alert alert-info">Yêu cầu đặt lại mật khẩu đã được gửi qua email cho bạn. Vui lòng làm theo hướng dẫn trong email đó.</div>
			<?php }?>
			<h1 class="sky-auth__title">Đăng nhập</h1>
			<p class="sky-auth__sub">Chào mừng trở lại, vui lòng đăng nhập tài khoản.</p>
			<form id="frm-signin" class="frm-signin sky-form" action="#" method="POST">
				<div for="" class="error_user error fs-14 text-center d-none"></div>
				<div class="sky-field position-relative pb-2">
					<label for="email">Tên đăng nhập</label>
					<div class="sky-inwrap">
						<i class='bx bx-user sky-lead'></i>
						<input type="text" class="form-control sky-input" id="email" name="user_email" placeholder="Email đăng nhập" autofocus />
					</div>
				</div>
				<div class="sky-field form-password-toggle position-relative pb-2">
					<div class="sky-label-row">
						<label for="password">Mật khẩu</label>
						<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/quen-mat-khau.html?return_url=<?php echo $_smarty_tpl->tpl_vars['return_url']->value;?>
">Quên mật khẩu?</a>
					</div>
					<div class="sky-inwrap input-group">
						<i class='bx bx-lock-alt sky-lead'></i>
						<input type="password" id="password" class="form-control sky-input" name="user_pass" placeholder="Nhập mật khẩu" aria-describedby="password" />
						<span class="input-group-text cursor-pointer sky-eye"><i class="bx bx-hide"></i></span>
					</div>
				</div>
				<button class="btn btn-primary sky-submit" type="submit">Đăng nhập <i class='bx bx-right-arrow-alt'></i></button>
				<input type="hidden" name="submit" value="signin">
				<input type="hidden" name="return" value="<?php echo $_smarty_tpl->tpl_vars['return_url']->value;?>
">
				<input type="hidden" name="mod_page" value="<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
">
				<input type="hidden" name="act_page" value="<?php echo $_smarty_tpl->tpl_vars['act']->value;?>
">
			</form>
			<p class="sky-auth__support">Gặp vấn đề về tài khoản?<br />Vui lòng liên hệ Ban công nghệ <a href="mailto:itr@skyrealty.vn">itr@skyrealty.vn</a></p>
		</div>
	</div>
	</div>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
	$(function(){
		if($.fn.textillate){ $('.tlt').textillate(); }
	});
<?php echo '</script'; ?>
>

<?php }
}
