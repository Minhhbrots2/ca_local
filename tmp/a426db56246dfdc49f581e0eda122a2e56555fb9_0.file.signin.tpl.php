<?php
/* Smarty version 3.1.33, created on 2026-07-06 16:16:22
  from '/www/wwwroot/skyrealty.futureglobal.vn/application/views/auth/signin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a4b72661e01a4_36692132',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a426db56246dfdc49f581e0eda122a2e56555fb9' => 
    array (
      0 => '/www/wwwroot/skyrealty.futureglobal.vn/application/views/auth/signin.tpl',
      1 => 1783329376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a4b72661e01a4_36692132 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="https://accounts.google.com/gsi/client" async defer><?php echo '</script'; ?>
>
<link rel="stylesheet" href="<?php echo URL_CSS;?>
/animate.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" type="text/css" />
<div id="g_id_onload" data-client_id="<?php echo @constant('appIdGoogle');?>
" data-login_uri="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('signin');?>
" 
data-auto_prompt="true" data-context=="use"></div>	
<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
            <!-- Register -->
            <div class="card">
                <div class="card-body">
                    <!-- Logo -->
                    <div class="app-brand justify-content-center mb-4">
                        <a href="index.html" class="app-brand-link gap-2">
                            <span class="app-brand-logo demo text-center">
								<img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/logo-header.png" height="60px" />
							</span>
                        </a>
                    </div>
					<?php if ($_smarty_tpl->tpl_vars['_ss_forgot_password']->value == '_success') {?>
					<div class="alert alert-info">Yêu cầu đặt lại mật khẩu đã được gửi qua email cho bạn. Vui lòng làm theo hướng dẫn trong email đó.</div>
					<?php }?>
                    <!-- /Logo -->
                    <div class="auth-slogan  mb-2">
						<i class='bx bxs-quote-alt-right'></i>
						<p class="mb-0 tlt" data-in-delay="0" data-in-effect="fadeInUp">Cùng nhau,</p>
						<p class="mb-0 tlt" data-in-delay="50" data-in-effect="fadeInUp">chúng ta vươn tới đỉnh cao của</p>
						<p class="mb-0 tlt" data-in-delay="100" data-in-effect="fadeInUp">THỊNH VƯỢNG VÀ HẠNH PHÚC</p>
				    </div>
					
					<?php echo '<script'; ?>
 type="text/javascript">
						$(function(){
							$('.tlt').textillate();
						});
					<?php echo '</script'; ?>
>
					
					<div class="divider">
						<div class="divider-text">Đăng nhập</div>
					</div> 
					<h5 class="mb-2 fs-16 text-center line-height-2">
						Hệ thống nội bộ dành cho CBNV <br /> <font class="text-fh"><?php echo $_smarty_tpl->tpl_vars['BRAND_NAME']->value;?>
</font> toàn quốc
					</h5>
					<?php if ($_smarty_tpl->tpl_vars['_login_google']->value == '1' || $_smarty_tpl->tpl_vars['_login_facebook']->value == '1') {?>		
					<div class="auth-social-wrapper">
						<ul class="auth-social">
							<?php if ($_smarty_tpl->tpl_vars['_login_facebook']->value == '1' && 1 == 2) {?>			
							<li><a data-toggle="ripple" title="Đăng nhập qua Facebook"<?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?> href="<?php echo $_smarty_tpl->tpl_vars['facebookLoginUrl']->value;?>
"<?php }?> 
								class="signin-via-facebook<?php if ($_smarty_tpl->tpl_vars['deviceType']->value != 'phone') {?> clickable<?php }?> login-network" mod_page="<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
" act_page="<?php echo $_smarty_tpl->tpl_vars['act']->value;?>
" rel="_FACEBOOK"></a></li>
							<?php }?>			
							<?php if ($_smarty_tpl->tpl_vars['_login_google']->value == '1') {?>				
							<li><a data-toggle="ripple" title="Đăng nhập qua Google"<?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?> href="<?php echo $_smarty_tpl->tpl_vars['googleLoginUrl']->value;?>
"<?php }?> 
								class="signin-via-google<?php if ($_smarty_tpl->tpl_vars['deviceType']->value != 'phone') {?> clickable<?php }?> login-network" mod_page="<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
" act_page="<?php echo $_smarty_tpl->tpl_vars['act']->value;?>
" rel="_GOOGLE"></a></li>
							<?php }?>
						</ul>
					</div>
					<div class="divider">
						<div class="divider-text">Hoặc</div>
					</div> 
					<?php }?> 
                    <form id="frm-signin" class="frm-signin<?php if ($_smarty_tpl->tpl_vars['show']->value != 'login') {?> d-none<?php }?> mb-3" action="#" method="POST">
                        <div class="mb-3">
                            <label for="email" class="form-label">Tên đăng nhập</label>
                            <input type="text" class="form-control" id="email" name="user_email" placeholder="Email đăng nhập" autofocus />
                        </div>
                        <div class="mb-3 form-password-toggle">
                            <div class="d-flex justify-content-between">
                                <label class="form-label" for="password">Mật khẩu</label>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/quen-mat-khau.html?return_url=<?php echo $_smarty_tpl->tpl_vars['return_url']->value;?>
">
                                    <small>Quên mật khẩu</small>
                                </a>
                            </div>
                            <div class="input-group input-group-merge">
                                <input type="password" id="password" class="form-control" name="user_pass" 
									placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary d-grid w-100" type="submit">Đăng nhập</button>
							<input type="hidden" name="submit" value="signin"> 
							<input type="hidden" name="return" value="<?php echo $_smarty_tpl->tpl_vars['return']->value;?>
"> 
							<input type="hidden" name="mod_page" value="<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
"> 
							<input type="hidden" name="act_page" value="<?php echo $_smarty_tpl->tpl_vars['act']->value;?>
">
                        </div>
                    </form>
                    <p class="text-center">
                       Bạn gặp vấn đề về tài khoản? 
					   Vui lòng liên hệ Ban công nghệ <a href="mail:itr@skyrealty.vn">itr@skyrealty.vn</a>
                    </p>
                </div>
            </div>
            <!-- /Register -->
        </div>
    </div>
</div><?php }
}
