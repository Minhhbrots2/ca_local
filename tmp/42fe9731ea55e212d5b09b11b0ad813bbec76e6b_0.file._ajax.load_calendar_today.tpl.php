<?php
/* Smarty version 3.1.33, created on 2026-07-07 14:09:17
  from '/www/wwwroot/skyrealty.futureglobal.vn/application/views/home/calendar/_ajax.load_calendar_today.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a4ca61d7ff7b3_77255571',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42fe9731ea55e212d5b09b11b0ad813bbec76e6b' => 
    array (
      0 => '/www/wwwroot/skyrealty.futureglobal.vn/application/views/home/calendar/_ajax.load_calendar_today.tpl',
      1 => 1783314648,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a4ca61d7ff7b3_77255571 (Smarty_Internal_Template $_smarty_tpl) {
if (!empty($_smarty_tpl->tpl_vars['list_billings']->value)) {?>

	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_billings']->value, '_oBilling');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oBilling']->value) {
?>

	<?php $_smarty_tpl->_assignInScope('_oAdmin', $_smarty_tpl->tpl_vars['_oBilling']->value['admin']);?>

	<?php $_smarty_tpl->_assignInScope('_oStaff', $_smarty_tpl->tpl_vars['_oBilling']->value['staff']);?>

	<tr class="trBilling">

		<td class="text-left text-nowrap">

			<div class="d-flex flex-column gap-1">

				<div class="d-flex align-items-center justify-content-between">

					<a href="javascript:void(0)" onclick="view_billing(this,event)" billing_id="<?php echo $_smarty_tpl->tpl_vars['_oBilling']->value['billing_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_oBilling']->value['stock_code'];?>
</a>

					<?php if (!empty($_smarty_tpl->tpl_vars['is_edit']->value)) {?>

					<a class="text-link" title="chỉnh sửa thông tin" onclick="$Core.billing.add_info(this,event)" 

						billing_id="<?php echo $_smarty_tpl->tpl_vars['_oBilling']->value['billing_id'];?>
"><i class="bx bx-edit fs-14"></i></a>

					<?php }?>

				</div>

				<h4 class="text-fs-12 mb-0 fw-bold"><?php echo $_smarty_tpl->tpl_vars['_oStaff']->value['depart_name'];?>
-<?php echo $_smarty_tpl->tpl_vars['_oStaff']->value['full_name'];?>
</h4>

			</div>

		</td>

		<td class="text-left">

			<div class="d-flex align-items-center gap-1 justify-content-start">

				<img class="rounded-pill avatar avatar-xs" src="<?php if (!empty($_smarty_tpl->tpl_vars['_oAdmin']->value)) {
echo $_smarty_tpl->tpl_vars['clsProfile']->value->getAvatar($_smarty_tpl->tpl_vars['_oAdmin']->value['profile_id'],$_smarty_tpl->tpl_vars['_oAdmin']->value);
}?>" onerror="this.src='<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/no-avatar.jpg'">

				<div class="d-flex flex-column">

					<h4 class="text-fs-12 mb-0 fw-bold"><?php echo $_smarty_tpl->tpl_vars['_oAdmin']->value['full_name'];?>
</h4>

					<div class="d-flex align-items-center gap-1 text-fs-11 text-muted text-nowrap">

						<i class="material-icons-outlined fs-13 no-translate">more_time</i>

						<?php echo $_smarty_tpl->tpl_vars['_oBilling']->value['time'];?>


					</div>

				</div>

			</div>

		</td>

		<td class="text-center"><?php echo $_smarty_tpl->tpl_vars['_oBilling']->value['status'];?>
</td>

		<td class="text-right"><?php echo $_smarty_tpl->tpl_vars['_oBilling']->value['text_type'];?>
</td>

		<?php if ($_smarty_tpl->tpl_vars['call_from']->value == '_sign_page') {?>

		<td class="text-center">

			<?php if (!empty($_smarty_tpl->tpl_vars['_oBilling']->value['is_note'])) {?>

			<a href="javascript:void(0)" class="btn btn-icon btn-outline-default btn-sm" data-toggle="webui-popover" data-trigger="click" data-type="async" billing_id="<?php echo $_smarty_tpl->tpl_vars['_oBilling']->value['billing_id'];?>
" data-placement="left-bottom" data-closeable="false" data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS']->value;?>
/index.php?mod=home&sub=calendar&act=load_rescheduling_reason&billing_id=<?php echo $_smarty_tpl->tpl_vars['_oBilling']->value['billing_id'];?>
">

				<i class='bx bx-notepad'></i>

			</a>

			<?php } else { ?>

			--

			<?php }?>

		</td>

		<?php }?>

	</tr>

	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php } else { ?>

	<tr class="trBilling">

		<td class="text-center border-0" colspan="5">Không có lịch ký</td>

	</tr>

<?php }
}
}
