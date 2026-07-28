<?php
/* Smarty version 3.1.33, created on 2026-07-06 15:32:43
  from '/www/wwwroot/skyrealty.futureglobal.vn/application/blocks/commission/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a4b682b63fbe8_34594060',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd432abdbedaea659db21a82bfe07684c44124095' => 
    array (
      0 => '/www/wwwroot/skyrealty.futureglobal.vn/application/blocks/commission/index.tpl',
      1 => 1783314221,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a4b682b63fbe8_34594060 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="hhx">
	<div class="hhx-top">
		<div class="hhx-eyebrow"><i class="bx bx-wallet"></i>Hoa hồng môi giới tạm tính</div>
		<span class="hhx-chip"><i class="bx bx-badge-check"></i>Đã đối soát</span>
	</div>
	<div>
		<div class="hhx-lbl">Tổng tiền</div>
		<div class="hhx-total"><?php echo $_smarty_tpl->tpl_vars['cs_total_fmt']->value;?>
 <span class="hhx-unit">₫</span></div>
	</div>
	<div class="hhx-cols">
		<div class="hhx-cell"><div class="l"><i class="bx bx-check-circle"></i>Đã nhận</div><div class="v"><?php echo $_smarty_tpl->tpl_vars['cs_paid_fmt']->value;?>
 ₫</div></div>
		<div class="hhx-cell"><div class="l"><i class="bx bx-hourglass"></i>Tạm tính</div><div class="v"><?php echo $_smarty_tpl->tpl_vars['cs_remain_fmt']->value;?>
 ₫</div></div>
	</div>
	<div class="hhx-foot">
		<div class="hhx-note">Số liệu được kế toán đối soát định kỳ. Cần giải đáp, vui lòng liên hệ phòng Kế toán hoặc Quản trị viên.</div>
		<div class="hhx-date"><i class="bx bx-time-five"></i> <?php echo $_smarty_tpl->tpl_vars['cs_updated_fmt']->value;?>
</div>
	</div>
</div><?php }
}
