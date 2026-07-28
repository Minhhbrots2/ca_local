<div class="sky-auth">
	<div class="sky-auth__card">
	{include file="./_brand.tpl"}
	<div class="sky-auth__form">
		<div class="sky-auth__form-inner">
			{if $_ss_forgot_password eq '_success'}
			<div class="alert alert-info">Yêu cầu đặt lại mật khẩu đã được gửi qua email cho bạn. Vui lòng làm theo hướng dẫn trong email đó.</div>
			{/if}
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
						<a href="{$PCMS_URL}/quen-mat-khau.html?return_url={$return_url}">Quên mật khẩu?</a>
					</div>
					<div class="sky-inwrap input-group">
						<i class='bx bx-lock-alt sky-lead'></i>
						<input type="password" id="password" class="form-control sky-input" name="user_pass" placeholder="Nhập mật khẩu" aria-describedby="password" />
						<span class="input-group-text cursor-pointer sky-eye"><i class="bx bx-hide"></i></span>
					</div>
				</div>
				<button class="btn btn-primary sky-submit" type="submit">Đăng nhập <i class='bx bx-right-arrow-alt'></i></button>
				<input type="hidden" name="submit" value="signin">
				<input type="hidden" name="return" value="{$return_url}">
				<input type="hidden" name="mod_page" value="{$mod}">
				<input type="hidden" name="act_page" value="{$act}">
			</form>
			<p class="sky-auth__support">Gặp vấn đề về tài khoản?<br />Vui lòng liên hệ Ban công nghệ <a href="mailto:itr@skyrealty.vn">itr@skyrealty.vn</a></p>
		</div>
	</div>
	</div>
</div>
{literal}
<script type="text/javascript">
	$(function(){
		if($.fn.textillate){ $('.tlt').textillate(); }
	});
</script>
{/literal}
