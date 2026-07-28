<?php
/* Smarty version 3.1.33, created on 2026-07-06 19:00:58
  from '/www/wwwroot/skyrealty.futureglobal.vn/application/views/crm/_ajax.list_customer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a4b98fa625c87_89945388',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6635afde7ebbd440cc6a1dc7f7800e837aa84663' => 
    array (
      0 => '/www/wwwroot/skyrealty.futureglobal.vn/application/views/crm/_ajax.list_customer.tpl',
      1 => 1783314299,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a4b98fa625c87_89945388 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/www/wwwroot/skyrealty.futureglobal.vn/core/smarty/plugins/function.math.php','function'=>'smarty_function_math',),));
if ($_smarty_tpl->tpl_vars['deviceType']->value == "phone") {
if (!empty($_smarty_tpl->tpl_vars['list_customers']->value)) {?>
<div class="crm-mb-list cmc-list">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_customers']->value, '_oItem', false, NULL, 'i', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oItem']->value) {
?>
	<?php $_smarty_tpl->_assignInScope('_ls', $_smarty_tpl->tpl_vars['_oItem']->value['lead_score']);?>
	<div class="cmc" style="--st-bg:<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_oItem']->value['bgcolor'])===null||$tmp==='' ? '#8a93a2' : $tmp);?>
;--st-c:<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_oItem']->value['textcolor'])===null||$tmp==='' ? '#566a7f' : $tmp);?>
"
		customer_id="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['customer_id'];?>
">
		<div class="cmc-top">
			<span class="cmc-status"><?php echo $_smarty_tpl->tpl_vars['_oItem']->value['status_title'];?>
</span>
			<?php if ($_smarty_tpl->tpl_vars['_oItem']->value['can_change_status']) {?>
			<div class="dropdown cmc-chuyen-wrap" onClick="event.stopPropagation()">
				<button type="button" class="cmc-chuyen" data-bs-toggle="dropdown" data-bs-auto-close="true"
					aria-expanded="false">Chuyển <i class="bx bx-chevron-down"></i></button>
				<div class="dropdown-menu cmc-chuyen-menu"><?php echo $_smarty_tpl->tpl_vars['_oItem']->value['status_menu_html'];?>
</div>
			</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['_oItem']->value['project_text']) {?><span class="cmc-project"
				title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_oItem']->value['project_text'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_oItem']->value['project_text'], ENT_QUOTES, 'UTF-8', true);?>
</span><?php }?>
			<div class="dropdown cmc-more-wrap" onClick="event.stopPropagation()">
				<button type="button" class="cmc-more" data-bs-toggle="dropdown" aria-expanded="false"
					aria-label="Thêm"><i class="bx bx-dots-horizontal-rounded"></i></button>
				<div class="dropdown-menu dropdown-menu-end">
					<a class="dropdown-item" href="javascript:void(0)" customer_id="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['customer_id'];?>
"
						route="/customer/<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['customer_id'];?>
/overview"
						onClick="$Core.crm.open_customer(this, event)"><i class="bx bx-user me-1"></i> Xem chi tiết</a>
					<?php if (!$_smarty_tpl->tpl_vars['team_readonly']->value) {?>
					<a class="dropdown-item" href="javascript:void(0)" customer_id="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['customer_id'];?>
"
						onClick="$Core.crm.set_archived(this, event)"><i class="bx bx-archive me-1"></i> Lưu trữ</a>
					<a class="dropdown-item" href="javascript:void(0)" customer_id="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['customer_id'];?>
"
						onClick="$Core.crm.change_assigned(this, event)"><i class="bx bx-transfer-alt me-1"></i> Bàn
						giao / Chia sẻ</a>
					<?php }?>
				</div>
			</div>
		</div>
		<div class="cmc-name" route="/customer/<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['customer_id'];?>
/overview"
			onClick="$Core.crm.open_customer(this, event)">
			<span class="cmc-nm"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_oItem']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span>
			<?php if ($_smarty_tpl->tpl_vars['_ls']->value >= @constant('_CRM_LEAD_SCORE_HOT')) {?><span class="cmc-dot" style="background:#ff3e1d"
				title="Hot"></span><?php } elseif ($_smarty_tpl->tpl_vars['_ls']->value >= 30) {?><span class="cmc-dot" style="background:#ffab00"
				title="Warm"></span><?php } elseif ($_smarty_tpl->tpl_vars['_ls']->value > 0) {?><span class="cmc-dot" style="background:#03c3ec"
				title="Cold"></span><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['_oItem']->value['gender_sign'] == 'f') {?><span class="cmc-g" style="color:#ea7fae">&#9792;</span><?php } elseif ($_smarty_tpl->tpl_vars['_oItem']->value['gender_sign'] == 'm') {?><span class="cmc-g" style="color:#5b9bd5">&#9794;</span><?php }?>
			<?php if (!$_smarty_tpl->tpl_vars['team_readonly']->value) {?><a class="cmc-bell ms-auto" href="javascript:void(0)" title="Thêm tương tác"
				customer_id="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['customer_id'];?>
" tp="follow-ups"
				onClick="event.stopPropagation(); $Core.crm.view_activity(this, event)"><i
					class="bx bx-bell"></i></a><?php }?>
		</div>
		<div class="cmc-body">
			<div class="cmc-info">
				<div><i class="bx bx-purchase-tag-alt cmc-ic"></i> <span
						class="cmc-v"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['_oItem']->value['resource_name'])===null||$tmp==='' ? '--' : $tmp);?>
</span></div>
				<?php if ($_smarty_tpl->tpl_vars['_oItem']->value['reg_date_text']) {?><div><i class="bx bx-calendar cmc-ic"></i> <span
						class="cmc-date"><?php echo $_smarty_tpl->tpl_vars['_oItem']->value['reg_date_text'];?>
</span></div><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['_oItem']->value['need_text'] || $_smarty_tpl->tpl_vars['_oItem']->value['campaign_text']) {?><div><?php if ($_smarty_tpl->tpl_vars['_oItem']->value['need_text']) {?><i
						class="bx bx-home-alt cmc-ic"></i> <span
						class="cmc-need"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_oItem']->value['need_text'], ENT_QUOTES, 'UTF-8', true);?>
</span><?php }
if ($_smarty_tpl->tpl_vars['_oItem']->value['campaign_text']) {
if ($_smarty_tpl->tpl_vars['_oItem']->value['need_text']) {?> <?php }?><i class="bx bx-target-lock cmc-ic"></i> <span
						class="cmc-camp"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_oItem']->value['campaign_text'], ENT_QUOTES, 'UTF-8', true);?>
</span><?php }?></div><?php }?>
				<?php if (!empty($_smarty_tpl->tpl_vars['_oItem']->value['phone'])) {?><div><i class="bx bx-phone cmc-ic"></i> <?php if ($_smarty_tpl->tpl_vars['_oItem']->value['is_owner_phone']) {?><span
						class="crm-phone-wrap js__reveal-phone cmc-ph" data-full="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['phone'];?>
"
						onClick="event.stopPropagation(); $Core.crm.reveal_phone(this, event)"
						title="Xem số đầy đủ"><span class="js__ph-text"><?php echo $_smarty_tpl->tpl_vars['clsCustomer']->value->mask($_smarty_tpl->tpl_vars['_oItem']->value['phone'],true);?>
</span>
						<i class="bx bx-show js__ph-eye"></i></span><?php } else { ?><span
						class="cmc-v"><?php echo $_smarty_tpl->tpl_vars['clsCustomer']->value->mask($_smarty_tpl->tpl_vars['_oItem']->value['phone'],true);?>
</span><?php }?></div><?php }?>
			</div>
			<div class="cmc-side">
				<?php if ($_smarty_tpl->tpl_vars['_oItem']->value['owner_name']) {?><div class="cmc-owner">
					<img class="avatar avatar-sm rounded-pill" src="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['owner_avatar'];?>
"
						onerror="this.onerror=null;this.src='<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/no-avatar.jpg'" alt="">
					<div class="cmc-owner-tx">
						<div class="cmc-owner-nm"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_oItem']->value['owner_name'], ENT_QUOTES, 'UTF-8', true);?>
</div><?php if ($_smarty_tpl->tpl_vars['_oItem']->value['owner_dept']) {?><div
							class="cmc-owner-dept"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_oItem']->value['owner_dept'], ENT_QUOTES, 'UTF-8', true);?>
</div><?php }?>
					</div>
				</div><?php } else { ?><div class="cmc-owner cmc-owner--none"><i class="bx bx-user-x"></i> Chưa giao</div><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['_oItem']->value['last_act_text']) {?><div class="cmc-last"><i class="bx bx-time-five"></i> Tương tác lần cuối
					<b><?php echo $_smarty_tpl->tpl_vars['_oItem']->value['last_act_text'];?>
</b></div><?php }?>
			</div>
		</div>
		<?php if (!empty($_smarty_tpl->tpl_vars['_oItem']->value['task_next_text'])) {?>
		<div class="cmc-next d-flex flex-wrap justify-content-between align-items-center<?php if ($_smarty_tpl->tpl_vars['_oItem']->value['task_next_overdue']) {?> cmc-next--over<?php }?>">
			<div class="d-flex align-items-center gap-1">
				<i class="bx bx-chevrons-right cmc-next-ic"></i>
				<span class="cmc-next-lb">Tác nghiệp tiếp:</span>
				<span class="cmc-next-task"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_oItem']->value['task_next_text'], ENT_QUOTES, 'UTF-8', true);?>
</span><?php echo $_smarty_tpl->tpl_vars['_oItem']->value['task_attempt_badge'];?>

			</div>
			<div class="d-flex align-items-center gap-1">
				<?php if ($_smarty_tpl->tpl_vars['_oItem']->value['task_next_time']) {?>
				<div class="d-flex flex-column">
					<span class="cmc-next-time">
						<i class="bx bx-time-five"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_oItem']->value['task_next_time'], ENT_QUOTES, 'UTF-8', true);?>

					</span>
					<div class="tn-go-hint"><i class="bx bx-up-arrow-alt"></i> bấm để thực hiện</div>
				</div>
				<?php }?>
				<?php if (!$_smarty_tpl->tpl_vars['team_readonly']->value && !$_smarty_tpl->tpl_vars['_oItem']->value['is_pending']) {?>
				<button type="button" class="cmc-next-go" customer_id="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['customer_id'];?>
" 
					onClick="event.stopPropagation(); $Core.crm.crm_task_move_next(this, event)" title="Chuyển sang thực hiện tác nghiệp này"><i class="bx bx-up-arrow-circle"></i></button>
				<?php }?>
			</div>
		</div>
		<?php }?>
		<div class="cmc-acts">
			<?php if ($_smarty_tpl->tpl_vars['_oItem']->value['is_pending']) {?>
			<a class="cmc-act cmc-recv" customer_id="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['customer_id'];?>
"
				onClick="event.stopPropagation(); $Core.crm.confirm_receipt(this, event)"><i
					class="bx bx-check-shield"></i> Xác nhận đã nhận khách</a>
			<?php } else { ?>
			<a class="cmc-act is-call" href="tel:<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['phone'];?>
" onClick="event.stopPropagation()"><i
				class="bx bx-phone-call"></i></a>
			<a class="cmc-act is-zalo" href="https://zalo.me/<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['phone'];?>
" target="_blank"
				onClick="event.stopPropagation()">
				<img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/zalo_logo.png" width="20px" />
			</a>
			<?php if (!empty($_smarty_tpl->tpl_vars['_oItem']->value['facebook_url'])) {?><a class="cmc-act is-fb cmc-act-ico" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_oItem']->value['facebook_url'], ENT_QUOTES, 'UTF-8', true);?>
"
				target="_blank" onClick="event.stopPropagation()" title="Facebook" aria-label="Facebook"><i
					class="bx bxl-facebook-circle"></i></a><?php }?>
			<?php if (!$_smarty_tpl->tpl_vars['team_readonly']->value) {?><a class="cmc-act is-add" customer_id="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['customer_id'];?>
" tp="follow-ups"
				onClick="event.stopPropagation(); $Core.crm.open_activity(this, event)"><i class="bx bx-plus"></i> Thêm
				tương tác</a><?php }?>
			<?php if (!$_smarty_tpl->tpl_vars['team_readonly']->value && !empty($_smarty_tpl->tpl_vars['_oItem']->value['task_current_id'])) {?><a class="cmc-act is-result"
				customer_id="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['customer_id'];?>
"
				onClick="event.stopPropagation(); $Core.crm.crm_task_result_sheet(this, event)"><i
					class="bx bx-list-check"></i> Tác nghiệp</a><?php }?>
			<?php }?>
		</div>
		<?php if (!empty($_smarty_tpl->tpl_vars['_oItem']->value['recent_acts']) || $_smarty_tpl->tpl_vars['_oItem']->value['total_followups'] > 0) {?>
		<div class="cmc-log">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_oItem']->value['recent_acts'], '_act');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_act']->value) {
?>
			<div class="cmc-log-row"><i class="bx <?php echo $_smarty_tpl->tpl_vars['_act']->value['icon'];?>
" style="color:<?php echo $_smarty_tpl->tpl_vars['_act']->value['color'];?>
"></i> <span
					class="cmc-log-d"><?php echo $_smarty_tpl->tpl_vars['_act']->value['date_text'];?>
:</span> <span class="cmc-log-t"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_act']->value['intro'], ENT_QUOTES, 'UTF-8', true);?>
</span>
			</div>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<a class="cmc-log-all" customer_id="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['customer_id'];?>
"
				onClick="event.stopPropagation(); $Core.crm.view_activity(this, event)"><i class="bx bx-transfer"></i>
				Xem tất cả tương tác (<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['total_followups'];?>
) <i class="bx bx-chevron-right"></i></a>
		</div>
		<?php }?>
	</div>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }
} else {
if ($_smarty_tpl->tpl_vars['action']->value == 'load_more') {
if (!empty($_smarty_tpl->tpl_vars['lst_data']->value)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lst_data']->value, '_oItem', false, NULL, 'i', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oItem']->value) {
$_smarty_tpl->_assignInScope('data_html', $_smarty_tpl->tpl_vars['_oItem']->value['data_html']);
echo smarty_function_math(array('equation'=>"x + 1",'x'=>$_smarty_tpl->tpl_vars['index']->value,'assign'=>'index'),$_smarty_tpl);?>

<tr class="pointer-event trCustomer" onDblClick="$Core.crm.view_activity(this, event);"
	customer_id="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['customer_id'];?>
" route="/activity/<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['customer_id'];?>
">
	<td class="text-center">
		<input <?php if (empty($_smarty_tpl->tpl_vars['is_checkbox']->value)) {?>disabled<?php }?> type="checkbox" tp="item"
			onChange="$Core.crm.check_item(this, event)" value="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['customer_id'];?>
"
			class="form-check-input chk_customer" />
	</td>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data_html']->value, 'td_html', false, 'field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value => $_smarty_tpl->tpl_vars['td_html']->value) {
?>
	<?php echo $_smarty_tpl->tpl_vars['td_html']->value;?>

	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<td width="60px" class="text-center bg-white position-sticky right-0">
		<div class="btn-group">
			<?php if ($_smarty_tpl->tpl_vars['_oItem']->value['is_pending']) {?>
			<a href="javascript:void(0);" title="Xác nhận đã nhận khách này để bắt đầu thao tác"
				class="btn btn-sm btn-warning crm-confirm-recv" onClick="$Core.crm.confirm_receipt(this, event);"
				customer_id="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['customer_id'];?>
"><i class="bx bx-check-shield"></i> Nhận</a>
			<?php } else { ?>
			<?php if (!$_smarty_tpl->tpl_vars['team_readonly']->value) {?>
			<a title="Ghi nhận cuộc gọi" class="btn btn-icon btn-sm cursor-pointer btn-outline-success" tp="follow-ups"
				customer_id="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['customer_id'];?>
" onclick="$Core.crm.open_activity(this, event)"
				type_id="<?php echo @constant('_FOLLOWUP_CALL_ID');?>
"><i class='bx bxs-phone-call'></i></a>
			<a href="javascript:void(0);" title="Lưu trữ" class="btn btn-icon btn-sm btn-outline-default"
				onClick="$Core.crm.set_archived(this, event);"
				customer_id="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['customer_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_oItem']->value['icon_archived'];?>
</a>
			<?php }?>
			<a href="javascript:void(0);" title="Follow-ups" class="btn btn-icon btn-sm btn-outline-default"
				onClick="$Core.crm.view_activity(this, event);" customer_id="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['customer_id'];?>
"><i
					class="bx bx-bell"></i></a>
			<!-- <a href="javascript:void(0);" title="Follow-ups" onClick="$Core.crm.view_activity(this, event);" 
							customer_id="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['customer_id'];?>
" class="btn btn-icon btn-sm btn-outline-default text-main"><?php echo $_smarty_tpl->tpl_vars['_oItem']->value['total_followups_next'];?>
</a> -->
			<?php }?>
		</div>
	</td>
</tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else { ?>
<tr>
	<td class="empty text-center" align="center" colspan="99"><?php echo $_smarty_tpl->tpl_vars['empty']->value;?>
</td>
</tr>
<?php }
} else { ?>
<div class="table-crm no-shadow overflow-x-auto">
	<table border="0" cellpadding="0" cellspacing="0" class="table dragable mb-0" width="100%">
		<thead><tr>
			<th class="align-center bg-grayter text-center h-px-40 border-0" width="40px">
				<input type="checkbox" <?php if (!$_smarty_tpl->tpl_vars['is_checkbox']->value) {?>disabled<?php }?> class="form-check-input" tp="all"
					onChange="$Core.crm.check_item(this, event)" style="font-size:0.85rem !important" />
			</th>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr_columns']->value, '_oItem');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oItem']->value) {
?>
			<th class="align-center border-0 overflow-visible text-<?php if ($_smarty_tpl->tpl_vars['_oItem']->value['property_code'] == 'admin' || $_smarty_tpl->tpl_vars['_oItem']->value['property_code'] == 'user_id') {?>center<?php } else { ?>left<?php }?> bg-grayter h-px-40"
				<?php if ($_smarty_tpl->tpl_vars['_oItem']->value['property_code'] == "follow-ups") {?> colspan="2" <?php }?>>
				<div class="d-flex align-items-center justify-content-between">
					<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['title'];?>

					<?php if ($_smarty_tpl->tpl_vars['_oItem']->value['property_code'] == 'name') {?>
					<div class="btn-group">
						<button
							class="btn btn-icon rounded-pill btn-xs btn-link dropdown-button hide-arrow text-muted">
							<i class='bx bx-sort-alt-2'></i>
						</button>
						<ul class="dropdown-menu">
							<h6 class="dropdown-header text-uppercase">Liên hệ lần cuối</h6>
							<li><a href="javascript:void(0);" onClick="$Core.crm.do_sorted(this, event)"
									sort_by="last_contact" holderG="<?php echo $_smarty_tpl->tpl_vars['holderG']->value;?>
"
									class="dropdown-item js__sort-by<?php if ($_smarty_tpl->tpl_vars['sort_by']->value == 'last_contact') {?> active<?php }?>">
									<i class='bx bx-sort-up'></i> Gần nhất</a>
							</li>
							<li><a href="javascript:void(0);" onClick="$Core.crm.do_sorted(this, event)"
									sort_by="first_contact" holderG="<?php echo $_smarty_tpl->tpl_vars['holderG']->value;?>
"
									class="dropdown-item js__sort-by<?php if ($_smarty_tpl->tpl_vars['sort_by']->value == 'first_contact') {?> active<?php }?>">
									<i class='bx bx-sort-down'></i> Xa nhất</a>
							</li>
						</ul>
					</div>
					<?php }?>
				</div>
			</th>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<th class="align-center text-right bg-grayter h-px-40 position-sticky top-0 right-0 border-0"
				width="60px">
				<button type="button" class="btn btn-icon btn-sm btn-link rounded-pill"
					onclick="$Core.crm.setting_field(this,event)" view_by="<?php echo $_smarty_tpl->tpl_vars['view_by']->value;?>
" action="_OPEN"
					title="Tùy chỉnh cột"><i class="bx bx-cog text-muted"></i></button>
			</th>
		</tr></thead>
		<tbody class="_lst_customer">
			<?php if (!empty($_smarty_tpl->tpl_vars['lst_data']->value)) {?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lst_data']->value, '_oItem', false, NULL, 'i', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oItem']->value) {
?>
			<?php $_smarty_tpl->_assignInScope('data_html', $_smarty_tpl->tpl_vars['_oItem']->value['data_html']);?>
			<tr class="pointer-event trCustomer" route="/activity/<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['customer_id'];?>
"
				onDblClick="$Core.crm.view_activity(this, event);" customer_id="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['customer_id'];?>
">
				<td class="text-center">
					<input type="checkbox" <?php if (empty($_smarty_tpl->tpl_vars['is_checkbox']->value)) {?> disabled<?php }?>
						onChange="$Core.crm.check_item(this, event)" tp="item" value="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['customer_id'];?>
"
						class="form-check-input chk_customer" />
				</td>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data_html']->value, 'td_html', false, 'field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value => $_smarty_tpl->tpl_vars['td_html']->value) {
?>
				<?php echo $_smarty_tpl->tpl_vars['td_html']->value;?>

				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<td class="text-center bg-white position-sticky right-0">
					<div class="btn-group">
						<?php if ($_smarty_tpl->tpl_vars['_oItem']->value['is_pending']) {?>
						<a href="javascript:void(0);" title="Xác nhận đã nhận khách này để bắt đầu thao tác"
							class="btn btn-sm btn-warning crm-confirm-recv"
							onClick="$Core.crm.confirm_receipt(this, event);" customer_id="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['customer_id'];?>
"><i
								class="bx bx-check-shield"></i> Nhận</a>
						<?php } else { ?>
						<?php if (!$_smarty_tpl->tpl_vars['team_readonly']->value) {?>
						<a title="Ghi nhận cuộc gọi" class="btn btn-icon btn-sm cursor-pointer btn-outline-success"
							customer_id="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['customer_id'];?>
" onclick="$Core.crm.open_activity(this, event)"
							tp="follow-ups" type_id="<?php echo @constant('_FOLLOWUP_CALL_ID');?>
"><i
								class='bx bxs-phone-call'></i></a>
						<a href="javascript:void(0);" title="Lưu trữ" class="btn btn-icon btn-sm btn-outline-default"
							onClick="$Core.crm.set_archived(this, event);"
							customer_id="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['customer_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_oItem']->value['icon_archived'];?>
</a>
						<?php }?>
						<a href="javascript:void(0);" title="Follow-ups" class="btn btn-icon btn-sm btn-outline-default"
							onClick="$Core.crm.view_activity(this, event);" customer_id="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['customer_id'];?>
"><i
								class="bx bx-bell"></i></a>
						<?php }?>
					</div>
				</td>
			</tr>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php } else { ?>
			<tr>
				<td class="empty text-center" align="center" colspan="99"><?php echo $_smarty_tpl->tpl_vars['html_empty']->value;?>
</td>
			</tr>
			<?php }?>
		</tbody>
	</table>
</div>
<?php }
}
}
}
