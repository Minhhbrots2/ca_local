<?php
/* Smarty version 3.1.33, created on 2026-07-06 15:32:43
  from '/www/wwwroot/skyrealty.futureglobal.vn/application/blocks/top_staff/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a4b682b62f580_23529920',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d936f55205dfbc23841ceb206f1c6c48635e7a9' => 
    array (
      0 => '/www/wwwroot/skyrealty.futureglobal.vn/application/blocks/top_staff/index.tpl',
      1 => 1783314244,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a4b682b62f580_23529920 (Smarty_Internal_Template $_smarty_tpl) {
?> <div class="card h-100 <?php if ($_smarty_tpl->tpl_vars['mod']->value == 'home' && $_smarty_tpl->tpl_vars['act']->value == 'news') {?> no-shadow<?php }
echo $_smarty_tpl->tpl_vars['class']->value;?>
">

	<?php $_smarty_tpl->_assignInScope('uid', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>

	<div class="card-header d-flex align-items-center justify-content-between">

		<h5 class="card-title m-0 me-2">Nhân viên xuất sắc</h5>

		<a><i class="bx bx-help-circle"></i></a>

	</div>

	<div class="card-body ajax" data-bind="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=top_staff" 

	data-options="{}">

		<ul class="p-0 m-0">

			<?php
$__section_i_5_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['list_placeholders']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_5_total = $__section_i_5_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_5_total !== 0) {
for ($__section_i_5_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_5_iteration <= $__section_i_5_total; $__section_i_5_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>

			<li class="d-flex mb-3 pb-1">

				<div class="avatar flex-shrink-0 me-2">

					<div class="animate-bg w-100 h-100 rounded"></div>

				</div>

				<div class="d-flex flex-wrap align-items-center justify-content-between gap-2 w-100">

					<div class="me-2">

						<div class="animate-bg radius-2 w-50 mb-1" style="height:10px">FH000</div>

						<div class="animate-bg radius-2 w-100" style="height:15px"><?php echo $_smarty_tpl->tpl_vars['oneProfile']->value['full_name'];?>
</div>

					</div>

					<div class="user-progress d-flex align-items-center gap-1">

						<h6 class="d-flex align-items-center mb-0">

							<span class="animate-bg mr-2" style="height:15px">00</span> tỷ

						</h6>

					</div>

				</div>

			</li>

			<?php
}
}
?>

		</ul>

	</div>

</div><?php }
}
