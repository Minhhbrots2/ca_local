<?php
/* Smarty version 3.1.33, created on 2026-07-07 11:44:52
  from '/www/wwwroot/skyrealty.futureglobal.vn/application/views/report/_ajax.table_chart_order.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a4c84446b4483_43117736',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd268c97c8f5ae7f9e3f9bf93769cc2e2592017c4' => 
    array (
      0 => '/www/wwwroot/skyrealty.futureglobal.vn/application/views/report/_ajax.table_chart_order.tpl',
      1 => 1783314326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a4c84446b4483_43117736 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['type']->value == 'MEMBER') {?>

<div class="table-wrapper overflow-auto d-flex flex-wrap">

	<table class="table table-bordered" width="100%">

		<thead><tr>

			<th width="30px" class="align-center nosort bg-lighter">STT</th>

			<th class="align-center text-left bg-lighter">Họ và tên</th>

			<th class="align-center nosort text-center bg-lighter" style="width:150px">Gói</th>

			<th class="align-center nosort text-center bg-lighter" style="width:150px">Bắt đầu</th>

			<th class="align-center nosort text-center bg-lighter" style="width:150px">Kết thúc</th>

			<th class="align-center text-left bg-lighter" style="width:30px"></th>

		</tr></thead>

		<?php if (!empty($_smarty_tpl->tpl_vars['lst_user']->value)) {?>

			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lst_user']->value, 'item', false, 'key', 'i', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']++;
?>

				<tr>

					<td class="text-center"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration'] : null);?>
</td>

					<td class="text-left">

						<div style="width:max-content">

							<a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('log-sale');?>
?user_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['profile_id'];?>
" target="_blank">

								<i class="bx bx-link"></i><?php echo $_smarty_tpl->tpl_vars['item']->value['full_name'];?>
</a>

						</div>

					</td>	

					<td class="text-center"><?php echo $_smarty_tpl->tpl_vars['item']->value['package_name'];?>
</td>

					<td class="text-center"><?php if ($_smarty_tpl->tpl_vars['item']->value['start_date']) {
echo $_smarty_tpl->tpl_vars['clsISO']->value->convertTimeToText($_smarty_tpl->tpl_vars['item']->value['start_date'],true);
} else { ?>--<?php }?></td>

					<td class="text-center"><?php if ($_smarty_tpl->tpl_vars['item']->value['start_date']) {
echo $_smarty_tpl->tpl_vars['clsISO']->value->convertTimeToText($_smarty_tpl->tpl_vars['item']->value['due_date'],true);
} else { ?>--<?php }?></td>

					<td class="text-center"><a href="https://zalo.me/<?php echo $_smarty_tpl->tpl_vars['item']->value['phone'];?>
" target="_blank">

						<img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/zalo_chat.png" width="20" height="20"></a>

					</td>

				</tr>

			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

		<?php } else { ?>

			<tr><td class="text-center" colspan="<?php if ($_smarty_tpl->tpl_vars['deviceType']->value != 'phone') {?>5<?php } else { ?>3<?php }?>">Dữ liệu trống</td></tr>

		<?php }?>

	</table>

</div>

<?php }?>

<?php }
}
