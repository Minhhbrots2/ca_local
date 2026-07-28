<?php
/* Smarty version 3.1.33, created on 2026-07-09 12:30:57
  from '/www/wwwroot/skyrealty.c-a.vn/application/blocks/charity/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a4f32119c2680_01042909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7372b690ef70d1992133cf11530c361f73fdae77' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/blocks/charity/index.tpl',
      1 => 1783314219,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a4f32119c2680_01042909 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/www/wwwroot/skyrealty.c-a.vn/core/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?>

<div class="w-100 d-flex align-items-start mb-2">

	<a class="text-white">Tổng Quỹ MXCE <?php echo smarty_modifier_date_format(time(),"%Y");?>
</a>

</div>

<div class="d-flex align-items-center gap-2">

	<span><?php echo $_smarty_tpl->tpl_vars['total_charity']->value;?>
</span>

	<a class="text-white text-fs-12 text-decoration-underline" href="https://docs.google.com/spreadsheets/d/1LcAcrbJRY9uWfBSwzZ_lsCVbxBgT7gwiE_5t7kK2J_4/edit?gid=0#gid=0" target="_blank">Chi tiết <i class="bx bx-chevron-right"></i></a>

</div>	

<?php } else { ?>

<div class="card bg-success h-100 box">

	<div class="card-body d-flex justify-content-center align-items-center">

		<div class="marquee flex-fill overflow-hidden <?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?>w-100<?php }?>">

			<div class="marquee__inner flex-fill d-flex align-items-center gap-4 justify-content-center">

				<div class="item d-flex flex-column align-items-center gap-1">

					<p class="text-nowrap mb-0 text-fs-13 text-white">Cập nhật quỹ Xây cầu Sơn La - MXCE 2025</p>

					<div class="d-flex align-items-center gap-2 mt-n1">

						<a class="text-nowrap fs-26 text-main  position-relative fw-bold" target="_blank" href="https://docs.google.com/spreadsheets/d/1LcAcrbJRY9uWfBSwzZ_lsCVbxBgT7gwiE_5t7kK2J_4/edit?gid=0#gid=0" rel="nofollow noindex" style="background: linear-gradient(90deg, #f78200, #ffffff, #f78200);-webkit-background-clip: text;-webkit-text-fill-color: transparent"><?php echo $_smarty_tpl->tpl_vars['total_charity']->value;?>
</a>	

					</div>

				</div>

			</div>

		</div>

	</div>

</div>

<?php }
}
}
