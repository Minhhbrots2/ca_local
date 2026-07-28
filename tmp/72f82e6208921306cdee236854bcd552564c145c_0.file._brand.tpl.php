<?php
/* Smarty version 3.1.33, created on 2026-07-07 20:29:28
  from '/www/wwwroot/skyrealty.c-a.vn/application/views/auth/_brand.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a4cff38c57a26_60367022',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72f82e6208921306cdee236854bcd552564c145c' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/views/auth/_brand.tpl',
      1 => 1783430964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a4cff38c57a26_60367022 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="sky-auth__brand">
	<div class="sky-auth__logo">
		<img class="sky-brand-logo" src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/logo-header.png" alt="<?php echo $_smarty_tpl->tpl_vars['BRAND_NAME']->value;?>
" />
	</div>
	<div class="sky-auth__brand-body">
		<div class="sky-auth__badge"><i class='bx bxs-quote-alt-right'></i> Giá trị cốt lõi</div>
		<div class="sky-auth__slogan">
			<p class="tlt" data-in-delay="0" data-in-effect="fadeInUp">KHẲNG ĐỊNH VỊ THẾ</p>
			<p class="tlt" data-in-delay="50" data-in-effect="fadeInUp">TẠO DỰNG NIỀM TIN</p>
		</div>
		<p class="sky-auth__tagline">Hệ thống nội bộ dành cho cán bộ nhân viên <b><?php echo $_smarty_tpl->tpl_vars['BRAND_NAME']->value;?>
</b> toàn quốc.</p>
	</div>
	<div class="sky-auth__foot">&copy; <?php echo $_smarty_tpl->tpl_vars['BRAND_NAME']->value;?>
 &middot; Hệ thống nội bộ C-A</div>
</div>
<?php }
}
