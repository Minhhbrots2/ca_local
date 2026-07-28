<?php
/* Smarty version 3.1.33, created on 2026-07-07 11:42:15
  from '/www/wwwroot/skyrealty.futureglobal.vn/application/views/crm/sale_marketplace_crm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a4c83a71e5fa0_65765115',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b413c2fac41a02cb8e95a2adf23a73b4bb0b9a9' => 
    array (
      0 => '/www/wwwroot/skyrealty.futureglobal.vn/application/views/crm/sale_marketplace_crm.tpl',
      1 => 1783314298,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a4c83a71e5fa0_65765115 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-xxl flex-grow-1 pt-2 container-p-y crm-mktpool">

		<div class="d-flex align-items-start justify-content-between flex-wrap gap-3 mb-3">
		<div class="d-flex flex-column">
			<span class="crm-eyebrow"><i class="bx bx-store-alt me-1"></i>Sale thị trường · Pool tài khoản</span>
			<h4 class="crm-page-title fw-bold mb-1">Sale thị trường → CRM</h4>
			<p class="crm-page-desc text-muted mb-0">Lọc tài khoản <strong>MOC / MyFuture</strong>, chọn nhiều dòng rồi chuyển thẳng vào CRM &amp; gán cho bạn.</p>
		</div>
		<button type="button" class="btn btn-sm btn-outline-secondary text-nowrap" onclick="$Core.crm.mktpool_load()">
			<i class="bx bx-revision me-1"></i> Làm mới
		</button>
	</div>

	<?php if (!empty($_smarty_tpl->tpl_vars['denied']->value)) {?>
		<div class="alert alert-danger d-flex align-items-center gap-2 mb-0" role="alert">
			<i class="bx bx-lock-alt fs-4"></i>
			<span>Bạn không có quyền truy cập màn này.</span>
		</div>
	<?php } else { ?>

		<div id="box_mkt_kpi"></div>

		<div class="card">
		<div class="card-header border-bottom pb-3">
			<?php if (empty($_smarty_tpl->tpl_vars['has_link_col']->value)) {?>
				<div class="alert alert-warning d-flex align-items-start gap-2 py-2 mb-3 fs-13 mktpool-alert" role="alert">
					<i class="bx bx-info-circle fs-5 lh-1 mt-1"></i>
					<span>Chưa chạy <code>ALTER … ADD member_profile_id</code> (GĐ1) — cờ "Đã chuyển" tạm dựa theo SĐT; bộ lọc "chỉ chưa chuyển" tạm ẩn.</span>
				</div>
			<?php }?>
			<form class="mktpool-filter" onsubmit="return false;">
				<div class="row g-2 align-items-center">
					<div class="col-12 col-md-3 col-xl-2">
						<div class="mktpool-search">
							<i class="bx bx-search"></i>
							<input type="text" name="kw" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['f']->value['kw'], ENT_QUOTES, 'UTF-8', true);?>
" class="form-control form-control-sm border-0 shadow-none" placeholder="Tìm tên hoặc số điện thoại…" autocomplete="off" oninput="$Core.crm.mktpool_search()">
						</div>
					</div>
					<div class="col-6 col-md-3 col-xl-2">
						<select name="f_ptype" class="form-select form-select-sm" onchange="$Core.crm.mktpool_load(1)">
							<option value="">Nguồn: tất cả</option>
							<option value="MOC" <?php if ($_smarty_tpl->tpl_vars['f']->value['f_ptype'] == 'MOC') {?>selected<?php }?>>MOC</option>
							<option value="MF" <?php if ($_smarty_tpl->tpl_vars['f']->value['f_ptype'] == 'MF') {?>selected<?php }?>>MyFuture</option>
						</select>
					</div>
					<div class="col-6 col-md-3 col-xl-2">
						<select name="f_tacc" class="form-select form-select-sm" onchange="$Core.crm.mktpool_load(1)">
							<option value="">Loại TK: tất cả</option>
							<option value="2" <?php if ($_smarty_tpl->tpl_vars['f']->value['f_tacc'] == '2') {?>selected<?php }?>>Môi giới (seller)</option>
							<option value="1" <?php if ($_smarty_tpl->tpl_vars['f']->value['f_tacc'] == '1') {?>selected<?php }?>>Khách (resident)</option>
							<option value="0" <?php if ($_smarty_tpl->tpl_vars['f']->value['f_tacc'] == '0') {?>selected<?php }?>>Khác</option>
						</select>
					</div>
					<div class="col-6 col-md-3 col-xl-2">
						<input type="date" name="f_from" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['f']->value['f_from'], ENT_QUOTES, 'UTF-8', true);?>
" class="form-control form-control-sm" title="Đăng ký từ" onchange="$Core.crm.mktpool_load(1)">
					</div>
					<div class="col-6 col-md-3 col-xl-2">
						<input type="date" name="f_to" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['f']->value['f_to'], ENT_QUOTES, 'UTF-8', true);?>
" class="form-control form-control-sm" title="Đăng ký đến" onchange="$Core.crm.mktpool_load(1)">
					</div>
					<div class="col-6 col-md-3 col-xl-2">
						<?php if (!empty($_smarty_tpl->tpl_vars['has_link_col']->value)) {?>
						<div class="form-check form-switch m-0">
							<input class="form-check-input" type="checkbox" name="f_unconv" value="1" id="f_unconv" <?php if ($_smarty_tpl->tpl_vars['f']->value['f_unconv']) {?>checked<?php }?> onchange="$Core.crm.mktpool_load(1)">
							<label class="form-check-label fs-13" for="f_unconv">Chỉ hiện tài khoản <strong>chưa chuyển</strong></label>
						</div>
					<?php }?>
					<a href="javascript:void(0);" class="btn btn-sm btn-label-secondary" onclick="$Core.crm.mktpool_reset()"><i class="bx bx-x me-1"></i> Xoá lọc</a>
					</div>
				</div>
				
			</form>
		</div>

		<div id="box_mktpool">
			<div class="text-center p-5">
				<span class="spinner-border spinner-border-sm text-primary"></span>
				<span class="text-muted ms-2">Đang tải…</span>
			</div>
		</div>
	</div>

		<div id="mktpool-bulk" class="mktpool-bulk d-none">
		<span class="mktpool-bulk-count">
			<i class="bx bx-check-square"></i>
			Đã chọn <strong id="mktpool-count">0</strong> tài khoản
		</span>
		<span class="mktpool-bulk-sep"></span>
		<?php if ($_smarty_tpl->tpl_vars['mkt_can_assign']->value) {?>
			<select id="mktpool-assignee" class="form-select form-select-sm mktpool-assignee-sel" title="Gán khách cho">
				<option value="<?php echo $_smarty_tpl->tpl_vars['mkt_me']->value;?>
">— Gán cho tôi —</option>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mkt_assignees']->value, 'a');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
?>
					<?php if ($_smarty_tpl->tpl_vars['a']->value['id'] != $_smarty_tpl->tpl_vars['mkt_me']->value) {?><option value="<?php echo $_smarty_tpl->tpl_vars['a']->value['id'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option><?php }?>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</select>
		<?php }?>
		<button type="button" class="btn btn-sm btn-success mktpool-bulk-btn" onclick="$Core.crm.mktpool_convert(this)">
			<i class="bx bx-transfer-alt me-1"></i> Chuyển vào CRM<?php if (!$_smarty_tpl->tpl_vars['mkt_can_assign']->value) {?> &amp; gán cho tôi<?php }?>
		</button>
	</div>

	<?php }?>
</div>

<?php echo '<script'; ?>
>
	$(function () {
		setTimeout(function () { $Core.crm.mktpool_load(1); }, 300);
	});
<?php echo '</script'; ?>
>

<?php }
}
