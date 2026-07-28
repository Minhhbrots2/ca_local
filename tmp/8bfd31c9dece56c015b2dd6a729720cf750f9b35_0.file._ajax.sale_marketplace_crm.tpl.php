<?php
/* Smarty version 3.1.33, created on 2026-07-07 11:43:19
  from '/www/wwwroot/skyrealty.futureglobal.vn/application/views/crm/_ajax.sale_marketplace_crm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a4c83e7a70675_13434070',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8bfd31c9dece56c015b2dd6a729720cf750f9b35' => 
    array (
      0 => '/www/wwwroot/skyrealty.futureglobal.vn/application/views/crm/_ajax.sale_marketplace_crm.tpl',
      1 => 1783314301,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a4c83e7a70675_13434070 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="table-responsive text-nowrap mktpool-tablewrap">
	<table class="table table-hover align-middle mktpool-table mb-0">
		<thead>
			<tr>
				<th class="text-center mktpool-col-check">
					<input type="checkbox" id="mktpool-all" class="form-check-input" title="Chọn tất cả">
				</th>
				<th>Mã</th>
				<th>Khách hàng</th>
				<th>Liên hệ</th>
				<th class="text-center">Nguồn</th>
				<th class="text-center">Loại TK</th>
				<th class="text-center">Ngày ĐK</th>
				<th class="text-center">Trạng thái</th>
			</tr>
		</thead>
		<tbody>
			<?php if (!empty($_smarty_tpl->tpl_vars['rows']->value)) {?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
?>
					<tr class="<?php if ($_smarty_tpl->tpl_vars['r']->value['_is_conv'] || $_smarty_tpl->tpl_vars['r']->value['_is_pdup']) {?>mktpool-row-muted<?php }?>">
						<td class="text-center mktpool-col-check">
							<?php if ($_smarty_tpl->tpl_vars['r']->value['_is_conv'] || $_smarty_tpl->tpl_vars['r']->value['_is_pdup'] || $_smarty_tpl->tpl_vars['r']->value['_no_phone']) {?>
								<input type="checkbox" class="mktpool-check form-check-input" disabled>
							<?php } else { ?>
								<input type="checkbox" class="mktpool-check form-check-input" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['profile_id'];?>
">
							<?php }?>
						</td>
						<td class="mkt-c-code"><span class="mktpool-code"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['r']->value['code'], ENT_QUOTES, 'UTF-8', true);?>
</span></td>
						<td class="mkt-c-name">
							<div class="d-flex align-items-center gap-2">
								<div class="avatar avatar-sm flex-shrink-0">
									<?php if (!empty($_smarty_tpl->tpl_vars['r']->value['avatar'])) {?>
										<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['r']->value['avatar'], ENT_QUOTES, 'UTF-8', true);?>
" alt="avatar" class="rounded-circle">
									<?php } else { ?>
										<span class="avatar-initial rounded-circle bg-label-<?php if ($_smarty_tpl->tpl_vars['r']->value['profile_type'] == 'MF') {?>info<?php } else { ?>warning<?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['r']->value['_ini'], ENT_QUOTES, 'UTF-8', true);?>
</span>
									<?php }?>
								</div>
								<span class="fw-medium text-heading text-truncate mktpool-name"><?php if ($_smarty_tpl->tpl_vars['r']->value['full_name']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['r']->value['full_name'], ENT_QUOTES, 'UTF-8', true);
} else { ?><span class="text-muted fst-italic">(chưa có tên)</span><?php }?></span>
							</div>
						</td>
						<td class="mkt-c-contact">
							<div class="d-flex flex-column lh-sm">
								<span class="text-heading mktpool-phone"><i class="bx bx-phone text-muted me-1"></i><?php if ($_smarty_tpl->tpl_vars['r']->value['_no_phone']) {?><span class="text-danger fs-13"><i class="bx bx-error-circle"></i> Không có SĐT</span><?php } else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['r']->value['phone'], ENT_QUOTES, 'UTF-8', true);
}?></span>
								<?php if ($_smarty_tpl->tpl_vars['r']->value['email']) {?><small class="text-muted text-truncate mktpool-email"><i class="bx bx-envelope me-1"></i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['r']->value['email'], ENT_QUOTES, 'UTF-8', true);?>
</small><?php }?>
							</div>
						</td>
						<td class="text-center mkt-c-src">
							<?php if ($_smarty_tpl->tpl_vars['r']->value['profile_type'] == 'MF') {?><span class="badge bg-label-info">MyFuture</span>
							<?php } else { ?><span class="badge bg-label-warning">MOC</span><?php }?>
						</td>
						<td class="text-center mkt-c-type">
							<?php if ($_smarty_tpl->tpl_vars['r']->value['type_account_id'] == 2) {?><span class="badge bg-label-primary">Môi giới</span>
							<?php } elseif ($_smarty_tpl->tpl_vars['r']->value['type_account_id'] == 1) {?><span class="badge bg-label-secondary">Khách</span>
							<?php } else { ?><span class="text-muted">--</span><?php }?>
						</td>
						<td class="text-center mkt-c-date"><span class="text-muted fs-13"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['r']->value['reg_text'], ENT_QUOTES, 'UTF-8', true);?>
</span></td>
						<td class="text-center mkt-c-status">
							<?php if ($_smarty_tpl->tpl_vars['r']->value['_is_conv']) {?><span class="badge bg-label-success"><i class="bx bx-check-circle"></i> Đã chuyển</span>
							<?php } elseif ($_smarty_tpl->tpl_vars['r']->value['_is_pdup']) {?><span class="badge bg-label-secondary"><i class="bx bx-link-alt"></i> Trùng SĐT</span>
							<?php } elseif ($_smarty_tpl->tpl_vars['r']->value['_no_phone']) {?><span class="badge bg-label-warning"><i class="bx bx-error-circle"></i> Thiếu SĐT</span>
							<?php } else { ?><span class="badge bg-label-primary mktpool-badge-ready">Chưa chuyển</span><?php }?>
						</td>
					</tr>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php } else { ?>
				<tr>
					<td colspan="8" class="text-center py-5">
						<img src="<?php echo $_smarty_tpl->tpl_vars['mkt_img']->value;?>
/DataEmpty.svg" class="w-px-120 mb-2" alt="">
						<p class="text-heading fw-medium mb-1">Không có tài khoản nào khớp bộ lọc</p>
						<p class="text-muted fs-13 mb-3">Thử nới lỏng từ khoá hoặc xoá bớt điều kiện lọc.</p>
						<a href="javascript:void(0);" class="btn btn-sm btn-label-primary" onclick="$Core.crm.mktpool_reset()"><i class="bx bx-revision me-1"></i> Xoá bộ lọc</a>
					</td>
				</tr>
			<?php }?>
		</tbody>
	</table>
</div>

<?php if ($_smarty_tpl->tpl_vars['total_page']->value > 1) {?>
	<div class="card-footer d-flex flex-column flex-sm-row align-items-center justify-content-between gap-2 py-3">
		<span class="text-muted fs-13">Trang <strong class="text-heading"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</strong> / <?php echo $_smarty_tpl->tpl_vars['total_page']->value;?>
</span>
		<nav>
			<ul class="pagination pagination-sm mb-0 justify-content-center flex-wrap">
				<?php if ($_smarty_tpl->tpl_vars['page']->value > 1) {?>
					<li class="page-item"><a class="page-link" href="javascript:void(0);" onclick="$Core.crm.mktpool_load(1)"><i class="bx bx-chevrons-left"></i></a></li>
				<?php }?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['page_list']->value, 'n');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['n']->value) {
?>
					<li class="page-item <?php if ($_smarty_tpl->tpl_vars['n']->value == $_smarty_tpl->tpl_vars['page']->value) {?>active<?php }?>">
						<a class="page-link" href="javascript:void(0);" onclick="$Core.crm.mktpool_load(<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
)"><?php echo $_smarty_tpl->tpl_vars['n']->value;?>
</a>
					</li>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php if ($_smarty_tpl->tpl_vars['page']->value < $_smarty_tpl->tpl_vars['total_page']->value) {?>
					<li class="page-item"><a class="page-link" href="javascript:void(0);" onclick="$Core.crm.mktpool_load(<?php echo $_smarty_tpl->tpl_vars['total_page']->value;?>
)"><i class="bx bx-chevrons-right"></i></a></li>
				<?php }?>
			</ul>
		</nav>
	</div>
<?php }
}
}
