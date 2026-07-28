<?php
/* Smarty version 3.1.33, created on 2026-07-02 17:34:46
  from '/www/wwwroot/ca.futurehomes.vn/admin/application/views/member/_ajax.member_packages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a463ec6329c91_40211238',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80d3c975989bc5c8a5e46935cc85d0f2106529a8' => 
    array (
      0 => '/www/wwwroot/ca.futurehomes.vn/admin/application/views/member/_ajax.member_packages.tpl',
      1 => 1782977030,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a463ec6329c91_40211238 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/www/wwwroot/ca.futurehomes.vn/core/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
if (!empty($_smarty_tpl->tpl_vars['active']->value)) {?>
<div class="alert alert-success" style="padding:8px 12px;margin-bottom:10px">
	Đang dùng: <strong><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['pkg_names']->value[$_smarty_tpl->tpl_vars['active']->value['package_id']])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
</strong><?php if ($_smarty_tpl->tpl_vars['active']->value['end_date']) {?> — hết hạn <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['active']->value['end_date'],"%d/%m/%Y");
} else { ?> — không giới hạn<?php }
if ($_smarty_tpl->tpl_vars['active']->value['price_paid']) {?> · đã thu <?php echo $_smarty_tpl->tpl_vars['active']->value['price_paid'];
}?>
</div>
<?php } else { ?>
<div class="text-muted" style="margin-bottom:10px">Chưa gán gói nào.</div>
<?php }?>
<table class="table table-bordered" width="100%">
	<thead><tr>
		<th class="bg-lighter">Gói</th>
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
			<td><strong><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['pkg_names']->value[$_smarty_tpl->tpl_vars['mp']->value['package_id']])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
</strong></td>
			<td><?php if ($_smarty_tpl->tpl_vars['mp']->value['start_date']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['mp']->value['start_date'],"%d/%m/%Y");
}?></td>
			<td><?php if ($_smarty_tpl->tpl_vars['mp']->value['end_date']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['mp']->value['end_date'],"%d/%m/%Y");
} else { ?>—<?php }?></td>
			<td><?php echo $_smarty_tpl->tpl_vars['mp']->value['price_paid'];?>
</td>
			<td>
				<?php if ($_smarty_tpl->tpl_vars['mp']->value['status'] == 'cancelled') {?><span class="label label-danger">Đã hủy</span>
				<?php } elseif ($_smarty_tpl->tpl_vars['mp']->value['end_date'] && $_smarty_tpl->tpl_vars['mp']->value['end_date'] < time()) {?><span class="label label-default">Hết hạn</span>
				<?php } else { ?><span class="label label-success">Đang dùng</span><?php }?>
			</td>
			<td>
				<div class="btn-group">
					<button class="btn iso-button-standard dropdown-toggle" type="button" data-toggle="dropdown"><i class="icon-cog"></i> <span class="caret"></span></button>
					<ul class="dropdown-menu" style="right:0px !important; left:auto">
						<li><a href="javascript:void(0)" onClick="$Core.member.open_assign_package(this)" data-profile_id="<?php echo $_smarty_tpl->tpl_vars['profile_id']->value;?>
" data-mp_id="<?php echo $_smarty_tpl->tpl_vars['mp']->value['id'];?>
">Sửa</a></li>
						<li><a href="javascript:void(0)" onClick="$Core.member.delete_member_package(this)" data-profile_id="<?php echo $_smarty_tpl->tpl_vars['profile_id']->value;?>
" data-mp_id="<?php echo $_smarty_tpl->tpl_vars['mp']->value['id'];?>
">Xóa</a></li>
					</ul>
				</div>
			</td>
		</tr>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php } else { ?>
		<tr><td class="text-center" colspan="6">Chưa có lịch sử gói</td></tr>
	<?php }?>
	</tbody>
</table>
<?php }
}
