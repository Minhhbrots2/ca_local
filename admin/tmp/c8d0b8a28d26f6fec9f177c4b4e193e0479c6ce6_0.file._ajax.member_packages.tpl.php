<?php
/* Smarty version 3.1.33, created on 2026-06-11 20:21:18
  from '/www/wwwroot/ca.futurehomes.vn/admin/application/views/member_mf/_ajax.member_packages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a2ab64e035666_12289069',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8d0b8a28d26f6fec9f177c4b4e193e0479c6ce6' => 
    array (
      0 => '/www/wwwroot/ca.futurehomes.vn/admin/application/views/member_mf/_ajax.member_packages.tpl',
      1 => 1781183855,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a2ab64e035666_12289069 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/www/wwwroot/ca.futurehomes.vn/core/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
if (!empty($_smarty_tpl->tpl_vars['active']->value)) {?>
<div class="alert alert-success" style="padding:8px 12px;margin-bottom:10px">
	Đang dùng: <strong><?php echo $_smarty_tpl->tpl_vars['active']->value['package_name'];?>
</strong><?php if ($_smarty_tpl->tpl_vars['active']->value['end_date']) {?> — hết hạn <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['active']->value['end_date'],"%d/%m/%Y");
} else { ?> — không giới hạn<?php }
if ($_smarty_tpl->tpl_vars['active']->value['price_paid']) {?> · đã thu <?php echo $_smarty_tpl->tpl_vars['active']->value['price_paid'];?>
 đ<?php }?>
</div>
<?php } else { ?>
<div class="text-muted" style="margin-bottom:10px">Chưa gán gói nào.</div>
<?php }?>
<table class="table table-bordered" width="100%">
	<thead><tr>
		<th class="bg-lighter">Gói</th>
		<th class="bg-lighter">Loại</th>
		<th class="bg-lighter">Bắt đầu</th>
		<th class="bg-lighter">Hết hạn</th>
		<th class="bg-lighter">Giá đã thu</th>
		<th class="bg-lighter">Trạng thái</th>
		<th class="bg-lighter" width="40px"></th>
	</tr></thead>
	<tbody>
	<?php if (!empty($_smarty_tpl->tpl_vars['list']->value)) {?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'mp');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['mp']->value) {
?>
		<tr>
			<td><strong><?php echo $_smarty_tpl->tpl_vars['mp']->value['package_name'];?>
</strong></td>
			<td>
				<?php if ($_smarty_tpl->tpl_vars['mp']->value['change_type'] == 'upgrade') {?>Nâng cấp
				<?php } elseif ($_smarty_tpl->tpl_vars['mp']->value['change_type'] == 'downgrade') {?>Hạ cấp
				<?php } elseif ($_smarty_tpl->tpl_vars['mp']->value['change_type'] == 'renew') {?>Gia hạn
				<?php } elseif ($_smarty_tpl->tpl_vars['mp']->value['change_type'] == 'trial') {?>Dùng thử
				<?php } elseif ($_smarty_tpl->tpl_vars['mp']->value['change_type'] == 'admin') {?>Admin cấp
				<?php } else { ?>Cấp mới<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['mp']->value['source']) {?> <small class="text-muted">(<?php echo $_smarty_tpl->tpl_vars['mp']->value['source'];?>
)</small><?php }?>
			</td>
			<td><?php if ($_smarty_tpl->tpl_vars['mp']->value['start_date']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['mp']->value['start_date'],"%d/%m/%Y");
} else { ?>—<?php }?></td>
			<td><?php if ($_smarty_tpl->tpl_vars['mp']->value['end_date']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['mp']->value['end_date'],"%d/%m/%Y");
} else { ?>—<?php }?></td>
			<td><?php if ($_smarty_tpl->tpl_vars['mp']->value['price_paid']) {
echo $_smarty_tpl->tpl_vars['mp']->value['price_paid'];?>
 đ<?php }?></td>
			<td>
				<?php if ($_smarty_tpl->tpl_vars['mp']->value['status'] == 'cancel') {?><span class="label label-danger">Đã hủy</span>
				<?php } elseif ($_smarty_tpl->tpl_vars['mp']->value['status'] == 'expired') {?><span class="label label-default">Hết hạn</span>
				<?php } elseif ($_smarty_tpl->tpl_vars['mp']->value['end_date'] && $_smarty_tpl->tpl_vars['mp']->value['end_date'] < time()) {?><span class="label label-default">Hết hạn</span>
				<?php } else { ?><span class="label label-success">Đang dùng</span><?php }?>
			</td>
			<td>
				<a href="javascript:void(0)" class="text-red" title="Xóa khỏi lịch sử" onClick="$Core.member.delete_member_package(this)" data-profile_id="<?php echo $_smarty_tpl->tpl_vars['profile_id']->value;?>
" data-mp_id="<?php echo $_smarty_tpl->tpl_vars['mp']->value['id'];?>
"><i class="icon-trash"></i></a>
			</td>
		</tr>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php } else { ?>
		<tr><td class="text-center" colspan="7">Chưa có lịch sử gói</td></tr>
	<?php }?>
	</tbody>
</table>
<?php }
}
