<?php
/* Smarty version 3.1.33, created on 2026-07-06 19:00:56
  from '/www/wwwroot/skyrealty.futureglobal.vn/application/views/crm/default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a4b98f872ed67_84794650',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd500326a350dbe7b208f0b9b5ab4a9fdea0bf447' => 
    array (
      0 => '/www/wwwroot/skyrealty.futureglobal.vn/application/views/crm/default.tpl',
      1 => 1783314297,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a4b98f872ed67_84794650 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">var crm_date_format = "dd/mm/yy", crm_datepicker_format = { changeMonth: true, changeYear: true, showButtonPanel: true, dateFormat: crm_date_format, yearRange: "1900:2050" };<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_assignInScope('uid', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());
$_smarty_tpl->_assignInScope('gId', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());
$_smarty_tpl->_assignInScope('pId', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>
<div class="container-xxl flex-grow-1 container-p-y pt-2 crm_page">
	<!-- ===== Header (Lăng kính Sale) ===== -->
	<div class="d-flex flex-wrap align-items-center justify-content-between mb-3 gap-2">
		<h4 class="fw-bold mb-0 crm-page-title">Quản lý khách hàng</h4>
		<!-- <div class="text-muted crm-page-desc">Quản lý khách hàng trung tâm.</div> -->
		<div class="d-flex gap-1 gap-lg-2 align-items-center flex-wrap">
			<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkPermission('import_crm') && $_smarty_tpl->tpl_vars['deviceType']->value == 'computer') {?>
			<button class="btn btn-outline-default" onclick="$Core.crm.open_import(this, event)" data-toggle="ripple" uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" route="/import" 
				class="btn btn-outline-secondary text-nowrap"><i class="bx bx-upload me-1"></i> Nhập Excel
			</button>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkPermission('customer_new')) {?>
			<button onclick="$Core.global.crm.add_customer(this, event)" uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" customer_id="0" openfrom="_crm" 
				class="btn btn-primary goLink js__add-customer text-nowrap" data-toggle="ripple" route="/customer/create/0"><i class="bx bx-plus me-1"></i> Thêm khách</button>
			<?php }?>
			<div class="btn-group">
				<button id="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" type="button" class="btn btn-icon btn-outline-default hide-arrow <?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
 dropdown-crm-search dropdown-toggle" 
					data-bs-toggle="dropdown" data-toggle="ripple" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="true"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIcon('bx-cog');?>
</button>
				<div class="dropdown-menu dropdown-menu-end" data-popper-placement="top-end">
					<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkPermission('import_crm') && $_smarty_tpl->tpl_vars['deviceType']->value == 'computer') {?>
					<a class="dropdown-item text-danger cursor-pointer" data-toggle="ripple" onclick="$Core.crm.open_import(this, event)"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIcon('bx bx-upload','Nhập Excel');?>
</a>
					<?php }?>
					<a class="dropdown-item text-danger cursor-pointer" data-toggle="ripple" onclick="$Core.crm.open_req_customer(this, event)"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIcon('bx bx-user','Yêu cầu cấp data');?>
</a>
					<a class="dropdown-item cursor-pointer" data-toggle="ripple" onclick="$Core.crm.manager_campaign(this, event)"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIcon('bx bx-target-lock','Quản lý chiến dịch');?>
</a>
					<?php if ($_smarty_tpl->tpl_vars['clsCustomer']->value->isFullPermiss()) {?><a class="dropdown-item cursor-pointer" data-toggle="ripple" onclick="$Core.crm.open_task_setting(this, event)"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIcon('bx bx-slider-alt','Thiết lập tác nghiệp');?>
</a><?php }?>
					<a class="dropdown-item cursor-pointer" href="/crm/assigned/" data-toggle="ripple"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIcon('bx bx-paper-plane','Khách tôi giao');?>
</a>
					<?php if (($_smarty_tpl->tpl_vars['clsCustomer']->value->isTeamManager() || $_smarty_tpl->tpl_vars['clsCustomer']->value->isFullPermiss() || $_smarty_tpl->tpl_vars['clsISO']->value->checkPermissionGroup('SALE_DIRECTOR_ONLY') || $_smarty_tpl->tpl_vars['clsISO']->value->checkPermissionGroup('REGIONAL_DIRECTOR')) && !$_smarty_tpl->tpl_vars['clsCustomer']->value->isMarketing()) {?>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item cursor-pointer" href="/crm/team/" data-toggle="ripple"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIcon('bx bx-group','Thống kê phòng ban');?>
</a>
					<?php }?>
				</div>
			</div>
			<button title="Hướng dẫn sử dụng" onclick="$Core.crm.open_help(this, event)" data-toggle="ripple" 
				class="btn btn-icon btn-outline-default d-none d-lg-inline-flex"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIcon('bx-help-circle');?>
</button>
		</div>
	</div>
	<!-- ===== Dashboard: KPI + Next-best-action + bảng SLA ===== -->
	<!-- <div id="box_sale_dashboard" class="mb-3"></div> -->
	<!-- ===== Móc JS ẩn (đếm phụ) ===== -->
	<div class="d-none"><span class="total_converted">0</span></div>
	<!-- ===== Boxes cho menu Quản lý (Marketing/Tăng trưởng/Sức khỏe nhóm) + warning + worklist ===== -->
	<div id="box_marketing" class="mb-3 d-none"></div>
	<div id="box_growth" class="mb-3 d-none"></div>
	<div id="box_team" class="mb-3 d-none"></div>
	<div id="box_worklist" class="d-none"></div>
	<div id="box_warning" class="d-none"></div>
	<!-- ===== Card: Khách của tôi (chip lọc + bảng) ===== -->
	<div class="card">
		<div class="card-header crm-list-head d-flex align-items-center justify-content-between flex-wrap gap-2 pt-3 pb-0 border-0">
			<h5 class="mb-0 d-flex align-items-center gap-2">
				<i class="bx bx-group text-primary"></i> Khách của tôi 
				<span class="text-muted fw-normal" style="font-size:13px">· <span class="total_manage">0</span> khách</span>
			</h5>
			<div class="d-flex align-items-center gap-2 flex-wrap crm-toolbar">
				<div class="btn-group btn-group-sm crm-role-tabs" role="group" aria-label="Phạm vi khách">
					<input type="radio" onChange="$Core.crm.do_search(this, event)" holderG="<?php echo $_smarty_tpl->tpl_vars['holderG']->value;?>
" class="btn-check js_crm-filter-list" 
						name="tab" id="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
_owner" value="owner"<?php if ($_smarty_tpl->tpl_vars['tab']->value == 'owner' || $_smarty_tpl->tpl_vars['tab']->value == '') {?> checked<?php }?>>
					<label class="btn btn-outline-secondary" for="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
_owner">Phụ trách <span class="total_manage badge bg-label-secondary ms-1">0</span></label>
					<input type="radio" onChange="$Core.crm.do_search(this, event)" holderG="<?php echo $_smarty_tpl->tpl_vars['holderG']->value;?>
" class="btn-check js_crm-filter-list" name="tab" 
						id="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
_following" value="following"<?php if ($_smarty_tpl->tpl_vars['tab']->value == 'following') {?> checked<?php }?>>
					<label class="btn btn-outline-secondary" for="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
_following">Theo dõi <span class="total_assign badge bg-label-secondary ms-1">0</span></label>
					<?php if (($_smarty_tpl->tpl_vars['clsCustomer']->value->isTeamManager() || $_smarty_tpl->tpl_vars['clsCustomer']->value->isFullPermiss()) && !$_smarty_tpl->tpl_vars['clsCustomer']->value->isMarketing()) {?>
					<input type="radio" onChange="$Core.crm.do_search(this, event)" holderG="<?php echo $_smarty_tpl->tpl_vars['holderG']->value;?>
" class="btn-check js_crm-filter-list"
						name="tab" id="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
_team" value="team"<?php if ($_smarty_tpl->tpl_vars['tab']->value == 'team') {?> checked<?php }?>>
					<label class="btn btn-outline-secondary" for="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
_team"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['clsCustomer']->value->getTeamLabel(), ENT_QUOTES, 'UTF-8', true);?>
 <span class="total_team badge bg-label-secondary ms-1">0</span></label>
					<?php }?>
				</div>
				<input type="text" class="form-control form-control-sm search_crm_field search_field crm-mb-search d-md-none"
					name="keysearch" data-field="keysearch" holderG="_desktop" onClick="this.select();" placeholder="Tìm tên hoặc SĐT khách hàng">
				<div class="dropdown crm-mb-filterwrap">
					<button id="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" type="button" title="Tìm kiếm / Bộ lọc" aria-label="Tìm kiếm" class="btn btn-sm btn-outline-default hide-arrow <?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
 dropdown-crm-search dropdown-toggle crm-btn-icon crm-mb-filterbtn"
						data-bs-toggle="dropdown" data-toggle="ripple" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="true">
						<i class="bx bx-search d-none d-md-inline"></i>
						<i class="bx bx-slider-alt d-md-none"></i>
						<span class="d-md-none ms-1">Bộ lọc</span>
					</button>
					<div class="dropdown-menu mega-dropdown-menu dropdown-menu-end w-px-350" data-popper-placement="bottom-end">
						<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('crm_search',array('gId'=>$_smarty_tpl->tpl_vars['gId']->value,'holderG'=>'_desktop'));?>

					</div>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['clsCustomer']->value->isRootProfile()) {?>
				<button type="button" disabled="disabled" onClick="$Core.crm.un_share(this,event)" class="btn btn-sm btn-outline-secondary btn_unshare<?php if ($_smarty_tpl->tpl_vars['tab']->value != 'following') {?> d-none<?php }?>">
					<i class="bx bx-share"></i> Thu hồi
				</button>
				<?php }?>
				<button type="button" disabled data-toggle="webui-popover" data-trigger="click" data-type="async" data-closeable="false" data-width="300px" 
					data-url="/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=load_pop_action" class="btn btn-sm btn-primary btn-crm-action">
					<i class="bx bx-bolt-circle me-1"></i> Hành động <i class="bx bx-chevron-down ms-1"></i>
				</button>
			</div>
		</div>
		<div class="card-body pt-3 pb-1">
			<input type="hidden" class="search_field js__crm-task-filter" data-field="task_id" value="0">
			<input type="hidden" class="search_field js__crm-hot-filter" data-field="hot" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['get_hot']->value)===null||$tmp==='' ? 0 : $tmp);?>
">
			<div class="crm-chip-row">
				<div class="crm-chip-mode xs:w-100 btn-group btn-group-sm flex-shrink-0" role="group" aria-label="Chế độ lọc nhanh">
					<button type="button" class="btn btn-outline-secondary active js__crm-chip-mode" data-mode="status"><i class="bx bx-purchase-tag-alt"></i> Tình trạng</button>
					<button type="button" class="btn btn-outline-secondary js__crm-chip-mode" data-mode="task"><i class="bx bx-list-check"></i> Tác nghiệp</button>
				</div>
				<div class="crm-top-quick-filter__chips-wrap js__crm-chips js__crm-chips-status">
					<button type="button" class="crm-quick-chip-nav js__crm-quick-chip-prev"><i class="bx bx-chevron-left"></i></button>
					<div class="crm-top-quick-filter__chips crm-quick-chip-group js__crm-quick-chip-carousel">
						<div class="crm-quick-chip-item py-2">
							<button type="button" class="crm-quick-chip py-2<?php if (!$_smarty_tpl->tpl_vars['get_status_id']->value) {?> active<?php }?> js__crm-quick-chip" data-status-id="0" style="--c:#696cff; --c-soft:rgba(105,108,255,.1); --c-border:rgba(105,108,255,.6)">
								<span class="cqc-top">
									<span class="crm-chip-dot"></span>
									<span class="cqc-label">Tất cả</span>
								</span>
								<span class="cqc-num"><?php echo $_smarty_tpl->tpl_vars['total_crm_status_chips']->value;?>
</span>
							</button>
						</div>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_crm_status_chips']->value, '_chip');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_chip']->value) {
?>
						<div class="crm-quick-chip-item py-2">
							<button type="button" class="crm-quick-chip py-2<?php if ($_smarty_tpl->tpl_vars['get_status_id']->value == $_smarty_tpl->tpl_vars['_chip']->value['status_id']) {?> active<?php }?> js__crm-quick-chip" data-status-id="<?php echo $_smarty_tpl->tpl_vars['_chip']->value['status_id'];?>
"
								style="--c:<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_chip']->value['bgcolor'])===null||$tmp==='' ? '#696cff' : $tmp);?>
; --c-soft:<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->hexToRgba($_smarty_tpl->tpl_vars['_chip']->value['bgcolor'],0.1);?>
; --c-border:<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->hexToRgba($_smarty_tpl->tpl_vars['_chip']->value['bgcolor'],0.6);?>
">
								<span class="cqc-top">
									<span class="crm-chip-dot"></span>
									<span class="cqc-label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_chip']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</span>
								</span>
								<span class="cqc-num"><?php echo $_smarty_tpl->tpl_vars['_chip']->value['count'];?>
</span>
							</button>
						</div>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</div>
					<button type="button" class="crm-quick-chip-nav js__crm-quick-chip-next"><i class="bx bx-chevron-right"></i></button>
				</div>
				<div class="crm-top-quick-filter__chips-wrap js__crm-chips js__crm-chips-task d-none">
					<button type="button" class="crm-quick-chip-nav js__crm-quick-chip-prev"><i class="bx bx-chevron-left"></i></button>
					<div class="crm-top-quick-filter__chips crm-quick-chip-group js__crm-quick-chip-carousel">
						<div class="crm-quick-chip-item py-2">
							<button type="button" class="crm-quick-chip py-2 active js__crm-quick-chip" data-task-id="0" style="--c:#696cff; --c-soft:rgba(105,108,255,.1); --c-border:rgba(105,108,255,.6)">
								<span class="cqc-top">
									<span class="crm-chip-dot"></span>
									<span class="cqc-label">Tất cả</span>
								</span>
								<span class="cqc-num"><?php echo $_smarty_tpl->tpl_vars['total_crm_task_chips']->value;?>
</span>
							</button>
						</div>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_crm_task_chips']->value, '_chip');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_chip']->value) {
?>
						<div class="crm-quick-chip-item py-2">
							<button type="button" class="crm-quick-chip py-2 js__crm-quick-chip" data-task-id="<?php echo $_smarty_tpl->tpl_vars['_chip']->value['task_id'];?>
" style="--c:#696cff; --c-soft:rgba(105,108,255,.1); --c-border:rgba(105,108,255,.6)">
								<span class="cqc-top">
									<span class="crm-chip-dot"></span>
									<span class="cqc-label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_chip']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</span>
								</span>
								<span class="cqc-num"><?php echo $_smarty_tpl->tpl_vars['_chip']->value['count'];?>
</span>
							</button>
						</div>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</div>
					<button type="button" class="crm-quick-chip-nav js__crm-quick-chip-next"><i class="bx bx-chevron-right"></i></button>
				</div>
			</div>
		</div>
		<div class="holder_customer">
			<table class="table">
				<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['list_preloaders']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = min(($__section_i_0_loop - 0), 30);
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
				<tr>
					<td><div class="animate-bg w-100 h-px-15 rounded-2"></div></td>
					<td><div class="animate-bg w-100 h-px-15 rounded-2"></div></td>
					<td><div class="animate-bg w-100 h-px-15 rounded-2"></div></td>
					<?php if ($_smarty_tpl->tpl_vars['deviceType']->value != 'phone') {?>
					<td><div class="animate-bg w-100 h-px-15 rounded-2"></div></td>
					<td><div class="animate-bg w-100 h-px-15 rounded-2"></div></td>
					<td><div class="animate-bg w-100 h-px-15 rounded-2"></div></td>
					<td><div class="animate-bg w-100 h-px-15 rounded-2"></div></td>
					<td><div class="animate-bg w-100 h-px-15 rounded-2"></div></td>
					<?php }?>
				</tr>
				<?php
}
}
?>
			</table>
		</div>
		<input type="hidden" class="PageCustomer_Page" value="<?php echo $_smarty_tpl->tpl_vars['current_page']->value;?>
" />
		<input type="hidden" class="PageCustomer_Length" value="<?php echo $_smarty_tpl->tpl_vars['per_page']->value;?>
" />
		<div class="d-flex flex-wrap justify-content-between align-items-center p-3 gap-2 border-top crm-list-foot<?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?> crm-list-foot--mb<?php }?>">
			<div class="d-flex align-items-center gap-2">
				<span class="text-muted">Hiển thị</span>
				<select class="form-select form-select-sm w-auto PageCustomer_Length_Select" holderG="desktop" 
					onChange="$Core.crm.customer_per_page_change(this, event)">
					<option value="10"<?php if ($_smarty_tpl->tpl_vars['per_page']->value == 10) {?> selected<?php }?>>10</option>
					<option value="20"<?php if ($_smarty_tpl->tpl_vars['per_page']->value == 20) {?> selected<?php }?>>20</option>
					<option value="30"<?php if ($_smarty_tpl->tpl_vars['per_page']->value == 30) {?> selected<?php }?>>30</option>
					<option value="50"<?php if ($_smarty_tpl->tpl_vars['per_page']->value == 50) {?> selected<?php }?>>50</option>
				</select>
				<span class="text-muted">bản ghi/trang</span>
			</div>
			<div class="d-flex align-items-center gap-3">
				<div class="text-muted small js__crm-paging-summary"></div>
				<div id="pager_desktop" class="d-none"></div>
			</div>
		</div>
	</div>
	<!-- End Root Render -->
</div><?php echo $_smarty_tpl->tpl_vars['scriptJs']->value;?>

<?php echo '<script'; ?>
>
	$(function() {
		setTimeout(() => {
			// $Core.crm.load_converted_rates({});
			// $Core.crm.load_desktop_followups();
			// $Core.crm.load_sale_dashboard();
			$Core.crm.load_customers("_desktop"<?php if ($_smarty_tpl->tpl_vars['get_status_id']->value || $_smarty_tpl->tpl_vars['get_admin_id']->value || $_smarty_tpl->tpl_vars['get_overdue']->value || $_smarty_tpl->tpl_vars['get_untouched']->value) {?>, {status_id: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['get_status_id']->value)===null||$tmp==='' ? 0 : $tmp);?>
, admin_id: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['get_admin_id']->value)===null||$tmp==='' ? 0 : $tmp);?>
, overdue: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['get_overdue']->value)===null||$tmp==='' ? 0 : $tmp);?>
, untouched: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['get_untouched']->value)===null||$tmp==='' ? 0 : $tmp);?>
}<?php }?>);
			if ($('.autoload:not(.loaded)').length) {
				$('.autoload:not(.loaded)').each((_i, _elem) => {
					$(_elem).addClass('loaded');
					var _url = $(_elem).data('url'),
						_options = $(_elem).data('options') || {};
					$.post(_url, _options, function(html) {
						$(_elem).html(html);
					});
				});
			}
		}, 500);
	});
<?php echo '</script'; ?>
>
<?php }
}
