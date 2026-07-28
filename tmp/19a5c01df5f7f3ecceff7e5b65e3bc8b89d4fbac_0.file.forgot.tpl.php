<?php
/* Smarty version 3.1.33, created on 2026-07-06 13:32:33
  from '/www/wwwroot/skyrealty.futureglobal.vn/application/views/auth/forgot.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a4b4c0143cf28_89923986',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19a5c01df5f7f3ecceff7e5b65e3bc8b89d4fbac' => 
    array (
      0 => '/www/wwwroot/skyrealty.futureglobal.vn/application/views/auth/forgot.tpl',
      1 => 1783314291,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a4b4c0143cf28_89923986 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner py-4">
            <!-- Forgot Password -->
            <div class="card">
                <div class="card-body">
                    <!-- Logo -->
                    <div class="app-brand justify-content-center">
                        <a href="index.html" class="app-brand-link gap-2">
                            <span class="app-brand-logo demo">
								<img class="img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/logo-header.png" width="200px" />
							</span>
                        </a>
                    </div>
                    <!-- /Logo -->
                    <h4 class="mb-2 text-center">Quên mật khẩu</h4>
					<!-- <div class="divider">
						<img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/after_title.png" />
					</div> -->
                    <p class="mb-4 text-muted text-center">Vui lòng nhập địa chỉ email của bạn đã đăng ký tài khoản vào ô dưới đây.</p>
					<?php if ($_smarty_tpl->tpl_vars['err_email_exist']->value == '0') {?>
					<div class="err_msg_box mb10">
						<b>Khôi phục mật khẩu không thành công</b><br />
						Email / tên tài khoản không tồn tại trong Hệ Thống.
					</div>
					<?php }?>
					<?php if (!empty($_smarty_tpl->tpl_vars['error_msg']->value)) {?>
					<div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error_msg']->value;?>
</div>
					<?php }?>
                    <form name="frm-forgot" class="mb-3 frm-forgot" action="<?php echo $_SERVER['SCRIPT_URI'];?>
" method="POST">
                        <div class="form-group mb-3">
                            <label for="user_email" class="form-label">Email</label>
							<div class="error "><?php echo $_smarty_tpl->tpl_vars['err_user_email']->value;?>
</div>
                            <input type="text" class="form-control email required" id="user_email" name="user_email" placeholder="Email bạn đã đăng ký" autofocus value="<?php echo $_smarty_tpl->tpl_vars['user_email']->value;?>
" />		   
                        </div>
						<div class="form-group mb-3">
							<div class="g-recaptcha" data-sitekey="<?php echo $_smarty_tpl->tpl_vars['reCAPTCHA_KEY']->value;?>
"></div>
							<?php if ($_smarty_tpl->tpl_vars['errMsg']->value != '') {?>
							<div class="error text_left" style="color: red"><?php echo $_smarty_tpl->tpl_vars['errMsg']->value;?>
</div>
							<?php }?> 
						</div>
						<input type="hidden" name="submit" value="forgot" />
						<input type="hidden" name="return_url" value="<?php echo $_smarty_tpl->tpl_vars['return_url']->value;?>
"/>
                        <button class="btn btn-primary d-grid w-100">Tiếp tục</button>
                    </form>
                    <div class="text-center">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/<?php if (!empty($_smarty_tpl->tpl_vars['return_url']->value)) {?>dang-nhap/ret=<?php echo $_smarty_tpl->tpl_vars['return_url']->value;
} else { ?>dang-nhap.html<?php }?>" 
						class="d-flex align-items-center justify-content-center">
                            <i class="bx bx-chevron-left scaleX-n1-rtl bx-sm"></i> Đăng nhập
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Forgot Password -->
        </div>
    </div>
</div>
<?php }
}
