<?php
/* Smarty version 3.1.33, created on 2026-07-24 15:01:37
  from '/www/wwwroot/skyrealty.c-a.vn/application/views/training/_ajax.loadHistory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a631be14e9537_18561948',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65c7cb784a01a7af349842db53a5cab89f7ed559' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/views/training/_ajax.loadHistory.tpl',
      1 => 1783308686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a631be14e9537_18561948 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="lst_lesson">

	<?php if (!empty($_smarty_tpl->tpl_vars['lstProfile']->value)) {?>

	<ul class="p-0 m-0">

		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lstProfile']->value, '_oProfile', false, 'key', 'i', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['_oProfile']->value) {
?>

			<li class="d-flex mb-2 pb-1 align-items-center">

				<div class="avatar position-relative flex-shrink-0 me-2" data-url="/index.php?mod=home&act=load_profile_popover&user_id=<?php echo $_smarty_tpl->tpl_vars['_oProfile']->value['profile_id'];?>
" data-toggle="webui-popover" data-trigger="hover" data-width="400" data-target="webuiPopover55">

					<img src="<?php echo $_smarty_tpl->tpl_vars['clsProfile']->value->getAvatar($_smarty_tpl->tpl_vars['_oProfile']->value['profile_id'],$_smarty_tpl->tpl_vars['_oProfile']->value);?>
" onerror="this.src='<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/no-avatar.jpg'" alt="<?php echo $_smarty_tpl->tpl_vars['clsProfile']->value->getFullName($_smarty_tpl->tpl_vars['_oProfile']->value['profile_id'],$_smarty_tpl->tpl_vars['_oProfile']->value);?>
" class="rounded-pill">

				</div>

				<div class="w-100">

					<small class="text-muted d-block">[<?php echo $_smarty_tpl->tpl_vars['_oProfile']->value['department_name'];?>
] <?php echo $_smarty_tpl->tpl_vars['_oProfile']->value['role_name'];?>
</small>

					<h6 class="mb-0"><?php echo $_smarty_tpl->tpl_vars['clsProfile']->value->getFullName($_smarty_tpl->tpl_vars['_oProfile']->value['profile_id'],$_smarty_tpl->tpl_vars['_oProfile']->value);?>
</h6>

					<?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?>

						<div class="d-flex gap-2 flex-wrap">

							<div class="mb-1 d-flex align-items-center">

								<i class='bx bx-door-open me-1'></i><?php echo $_smarty_tpl->tpl_vars['_oProfile']->value['total_view'];?>
 lần

							</div>

							<div class="mb-1 d-flex align-items-center">

								<i class='bx bx-timer me-1' ></i><?php echo $_smarty_tpl->tpl_vars['_oProfile']->value['time_last'];?>


							</div>

						</div>

					<?php } else { ?>

						<div class="d-flex gap-2 flex-wrap">

							<div class="mb-1 d-flex align-items-center">

								<i class='bx bx-door-open me-1'></i>Số lần vào học: <?php echo $_smarty_tpl->tpl_vars['_oProfile']->value['total_view'];?>


							</div>

							<div class="mb-1 d-flex align-items-center">

								<i class='bx bx-timer me-1' ></i>Lần học cuối: <?php echo $_smarty_tpl->tpl_vars['_oProfile']->value['time_last'];?>


							</div>

						</div>

					<?php }?>

				</div>

			</li>

		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

	</ul>

	<?php } else { ?>

		<ul class="list-unstyled" id="list_favourite" data-bs-popper="static"><div class="d-flex flex-column align-items-center justify-content-center p-3">

			<img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/listing-empty.svg" width="90px">

			<p>Danh sách trống</p>

		</div></ul>

	<?php }?>

</div><?php }
}
