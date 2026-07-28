<?php
/* Smarty version 3.1.33, created on 2026-07-06 19:00:57
  from '/www/wwwroot/skyrealty.futureglobal.vn/application/views/crm/_ajax.activity.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a4b98f9e9a4e0_98174770',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '678628f2b6826441aabe1cefac6de8ff83ce4d9a' => 
    array (
      0 => '/www/wwwroot/skyrealty.futureglobal.vn/application/views/crm/_ajax.activity.tpl',
      1 => 1783314298,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a4b98f9e9a4e0_98174770 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['template_type']->value == '_modal') {
$_smarty_tpl->_assignInScope('_cName', $_smarty_tpl->tpl_vars['clsCustomer']->value->getName($_smarty_tpl->tpl_vars['customer_id']->value,$_smarty_tpl->tpl_vars['oneCustomer']->value));
$_smarty_tpl->_assignInScope('gid', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());
$_smarty_tpl->_assignInScope('tabid', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());
$_smarty_tpl->_assignInScope('tabid2', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());
$_smarty_tpl->_assignInScope('_tags', $_smarty_tpl->tpl_vars['clsCustomer']->value->getHTMLTags($_smarty_tpl->tpl_vars['customer_id']->value,$_smarty_tpl->tpl_vars['oneCustomer']->value));?>
<div class="modal right fade" id="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content overflow-hidden crm-tl">
			<div class="crm-tl-head">
				<div class="crm-tl-htop">
					<!-- <img class="crm-tl-avatar-img" src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/no-avatar.jpg" onerror="this.onerror=null;this.src='<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/no-avatar.jpg'" alt=""> -->
					<div class="crm-tl-hmain min-w-0">
						<a class="crm-tl-name cursor-pointer" onClick="$Core.crm.open_customer(this,event)" route="/customer/<?php echo $_smarty_tpl->tpl_vars['customer_id']->value;?>
/overview" customer_id="<?php echo $_smarty_tpl->tpl_vars['customer_id']->value;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_cName']->value, ENT_QUOTES, 'UTF-8', true);?>
</a>
						<div class="crm-tl-srow">
							<span class="status_<?php echo $_smarty_tpl->tpl_vars['gid']->value;?>
 crm-tl-badge"><?php echo $_smarty_tpl->tpl_vars['clsProperty']->value->getLabel($_smarty_tpl->tpl_vars['oneCustomer']->value['status_id']);?>
</span>
							<?php if ($_smarty_tpl->tpl_vars['permiss_action']->value == '1') {?><a class="btn btn-sm crm-tl-chuyen" onClick="$Core.crm.open_upd_status(this, event)" uid="<?php echo $_smarty_tpl->tpl_vars['gid']->value;?>
" customer_id="<?php echo $_smarty_tpl->tpl_vars['customer_id']->value;?>
">Chuyển <i class="bx bx-chevron-down"></i></a><?php }?>
						</div>
						<div class="crm-tl-id crm-tl-metaline">
							<?php if ($_smarty_tpl->tpl_vars['card_source']->value) {?><span class="crm-tl-mi"><span class="crm-tl-k" title="Nguồn"><i class="bx bx-purchase-tag-alt"></i></span> <span class="crm-tl-v"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['card_source']->value, ENT_QUOTES, 'UTF-8', true);?>
</span></span><?php }?>
							<?php if ($_smarty_tpl->tpl_vars['card_regdate']->value) {?><span class="crm-tl-mi"><span class="crm-tl-k" title="Ngày tạo"><i class="bx bx-calendar"></i></span> <span class="crm-tl-v"><?php echo $_smarty_tpl->tpl_vars['card_regdate']->value;?>
</span></span><?php }?>
							<span class="crm-tl-mi"><span class="crm-tl-k" title="SĐT"><i class="bx bx-phone"></i></span> <span class="crm-tl-v crm-tl-v--phone"><?php echo $_smarty_tpl->tpl_vars['clsCustomer']->value->getPhoneRevealByCustomer($_smarty_tpl->tpl_vars['customer_id']->value,$_smarty_tpl->tpl_vars['oneCustomer']->value);?>
</span></span>
						</div>
						<?php if ($_smarty_tpl->tpl_vars['owner_aid']->value > 0) {?>
						<div class="crm-tl-ownerrow">
							<div class="cmc-owner">
								<img class="avatar avatar-sm rounded-pill" src="<?php echo $_smarty_tpl->tpl_vars['owner_avatar']->value;?>
" onerror="this.onerror=null;this.src='<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/no-avatar.jpg'" alt="">
								<div class="cmc-owner-tx">
									<div class="cmc-owner-nm"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['owner_name']->value, ENT_QUOTES, 'UTF-8', true);?>
</div><?php if ($_smarty_tpl->tpl_vars['owner_dept']->value) {?><div class="cmc-owner-dept"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['owner_dept']->value, ENT_QUOTES, 'UTF-8', true);?>
</div><?php }?>
								</div>
							</div>
						</div>
						<?php }?>
						<div class="crm-tl-actions">
							<?php if ($_smarty_tpl->tpl_vars['permiss_action']->value == '1') {?>
							<a class="btn crm-tl-abtn <?php echo $_smarty_tpl->tpl_vars['tabid']->value;?>
" onClick="$Core.crm.open_activity(this, event)" tabid="<?php echo $_smarty_tpl->tpl_vars['tabid']->value;?>
" tp="follow-ups" followup_id="0" type_id="<?php echo @constant('_FOLLOWUP_CALL_ID');?>
" 
								customer_id="<?php echo $_smarty_tpl->tpl_vars['customer_id']->value;?>
"><i class="bx bx-phone crm-ic-call"></i></a>
							<a class="btn crm-tl-abtn <?php echo $_smarty_tpl->tpl_vars['tabid']->value;?>
" onClick="$Core.crm.open_activity(this, event)" tabid="<?php echo $_smarty_tpl->tpl_vars['tabid']->value;?>
" tp="follow-ups" followup_id="0" type_id="<?php echo @constant('_FOLLOWUP_ZALO_ID');?>
" 
								customer_id="<?php echo $_smarty_tpl->tpl_vars['customer_id']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/zalo_logo.png" width="20px" /></a>
							<?php if (!empty($_smarty_tpl->tpl_vars['card_task_current_id']->value)) {?>
								<a class="btn crm-tl-abtn crm-tl-abtn--result" onClick="$Core.crm.crm_task_result_sheet(this, event)" customer_id="<?php echo $_smarty_tpl->tpl_vars['customer_id']->value;?>
"><i class="bx bx-list-check"></i> Ghi kết quả</a>
							<?php }?>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['fb_url']->value) {?>
							<a class="btn crm-tl-abtn" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fb_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank" rel="noopener"><i class="bx bxl-facebook-circle crm-ic-fb"></i> Facebook</a>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['permiss_action']->value == '1' || $_smarty_tpl->tpl_vars['permiss_notes']->value == '1') {?>
							<div class="dropdown crm-tl-amore-wrap">
								<button type="button" class="btn crm-tl-abtn crm-tl-amore" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Thêm"><i class="bx bx-dots-horizontal-rounded"></i></button>
								<div class="dropdown-menu dropdown-menu-end">
									<?php if ($_smarty_tpl->tpl_vars['permiss_action']->value == '1') {?>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_activity']->value, '_OA');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_OA']->value) {
?>
										<a class="dropdown-item cursor-pointer <?php echo $_smarty_tpl->tpl_vars['tabid']->value;?>
" onClick="$Core.crm.open_activity(this, event)" tabid="<?php echo $_smarty_tpl->tpl_vars['tabid']->value;?>
" tp="follow-ups" 
											followup_id="0" type_id="<?php echo $_smarty_tpl->tpl_vars['_OA']->value['property_id'];?>
" customer_id="<?php echo $_smarty_tpl->tpl_vars['customer_id']->value;?>
"><i class="bx <?php echo $_smarty_tpl->tpl_vars['_OA']->value['image'];?>
"></i> <?php echo $_smarty_tpl->tpl_vars['_OA']->value['title'];?>
</a>
										<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['permiss_notes']->value == '1') {?>
									<a class="dropdown-item cursor-pointer <?php echo $_smarty_tpl->tpl_vars['tabid']->value;?>
" onClick="$Core.crm.open_activity(this, event)" tabid="<?php echo $_smarty_tpl->tpl_vars['tabid']->value;?>
" tp="notes" 
										note_id="0" type_id="0" customer_id="<?php echo $_smarty_tpl->tpl_vars['customer_id']->value;?>
"><i class="bx bx-note"></i> Ghi chú</a>
									<?php }?>
								</div>
							</div>
							<?php }?>
						</div>
					</div>
					<button type="button" class="crm-tl-x close_pop" data-bs-dismiss="modal" aria-label="Đóng"><i class="bx bx-x"></i></button>
				</div>
				<?php if (trim($_smarty_tpl->tpl_vars['_tags']->value) && 1 == 2) {?>
					<div class="crm-tl-tags tags-box_<?php echo $_smarty_tpl->tpl_vars['customer_id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['_tags']->value;?>
</div>
				<?php }?>
				<div class="crm-tl-cards">
					<div class="crm-tl-card">
						<span class="crm-tl-ck crm-tl-ck--need">Nhu cầu</span>
						<span class="crm-tl-cv"><?php if ($_smarty_tpl->tpl_vars['card_need']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['card_need']->value, ENT_QUOTES, 'UTF-8', true);
} else { ?>--<?php }?></span>
					</div>
					<div class="crm-tl-card">
						<span class="crm-tl-ck crm-tl-ck--camp">Chiến dịch</span>
						<span class="crm-tl-cv"><?php if ($_smarty_tpl->tpl_vars['card_campaign']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['card_campaign']->value, ENT_QUOTES, 'UTF-8', true);
} else { ?>--<?php }?></span>
					</div>
					<div class="crm-tl-card crm-tl-card--last">
						<span class="crm-tl-ck"><i class="bx bx-time-five"></i> Tương tác cuối</span>
						<span class="crm-tl-cv crm-tl-cvlast"><?php if ($_smarty_tpl->tpl_vars['card_last']->value) {
echo $_smarty_tpl->tpl_vars['card_last']->value;
} else { ?>--<?php }?></span>
					</div>
				</div>
				<?php if (!empty($_smarty_tpl->tpl_vars['oneCustomer']->value['begin_need'])) {?>
				<div class="border p-2 mt-2 rounded-2 bg-white">
					<?php echo $_smarty_tpl->tpl_vars['oneCustomer']->value['begin_need'];?>

				</div>
				<?php }?>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['card_next_task']->value) {?>
			<div class="crm-tl-next<?php if ($_smarty_tpl->tpl_vars['card_next_overdue']->value) {?> crm-tl-next--over<?php }?>">
				<i class="bx bx-chevrons-right crm-tl-next-ic"></i>
				<span class="crm-tl-next-lb">Bước tiếp theo:</span>
				<span class="crm-tl-next-task"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['card_next_task']->value, ENT_QUOTES, 'UTF-8', true);?>
</span><?php echo $_smarty_tpl->tpl_vars['card_attempt_badge']->value;?>

				<?php if ($_smarty_tpl->tpl_vars['card_next_time']->value) {?><span class="crm-tl-next-time"><i class="bx bx-time-five"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['card_next_time']->value, ENT_QUOTES, 'UTF-8', true);?>
</span><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['permiss_action']->value == '1') {?><button type="button" class="crm-tl-next-go" customer_id="<?php echo $_smarty_tpl->tpl_vars['customer_id']->value;?>
" onClick="$Core.crm.crm_task_move_next(this, event)" title="Chuyển sang thực hiện tác nghiệp này"><i class="bx bx-up-arrow-circle"></i></button><div class="tn-go-hint"><i class="bx bx-up-arrow-alt"></i> bấm để bắt đầu thực hiện</div><?php }?>
			</div>
			<?php }?>
			<div class="crm-tl-tabs">
				<a class="crm-tl-tab js__tab-activity <?php echo $_smarty_tpl->tpl_vars['tabid2']->value;?>
 cursor-pointer active" onClick="$Core.crm.sw_activity(this, event)" tp="activity" tabid="<?php echo $_smarty_tpl->tpl_vars['tabid2']->value;?>
" customer_id="<?php echo $_smarty_tpl->tpl_vars['customer_id']->value;?>
">Hoạt động <span class="cnt total_actity"><?php echo $_smarty_tpl->tpl_vars['total_activity']->value;?>
</span></a>
																<a class="crm-tl-tab js__tab-activity <?php echo $_smarty_tpl->tpl_vars['tabid2']->value;?>
 cursor-pointer" tp="logs" onClick="$Core.crm.sw_activity(this, event)" tabid="<?php echo $_smarty_tpl->tpl_vars['tabid2']->value;?>
" customer_id="<?php echo $_smarty_tpl->tpl_vars['customer_id']->value;?>
">Logs</a>
			</div>
			<div class="modal-body crm-tl-body">
				<div class="holder_activity_<?php echo $_smarty_tpl->tpl_vars['customer_id']->value;?>
">
					<div class="py-5 text-center text-muted">Đang tải dữ liệu...</div>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['permiss_action']->value == '1') {?>
				<div class="crm-tl-compose <?php echo $_smarty_tpl->tpl_vars['tabid']->value;?>
" onClick="$Core.crm.open_activity(this, event)" tabid="<?php echo $_smarty_tpl->tpl_vars['tabid']->value;?>
" tp="follow-ups" followup_id="0" 
					type_id="<?php echo @constant('_FOLLOWUP_CALL_ID');?>
" customer_id="<?php echo $_smarty_tpl->tpl_vars['customer_id']->value;?>
"><i class="bx bx-message-rounded-add"></i> Thêm tương tác mới…</div>
				<?php }?>
			</div>
			<div class="modal-footer crm-tl-foot">
				<button type="button"<?php if (!$_smarty_tpl->tpl_vars['permiss_assign']->value == '1') {?> disabled="disabled"<?php }?> class="btn flex-fill btn-outline-secondary" 
					onClick="$Core.crm.open_in_charge(this, event)" customer_id="<?php echo $_smarty_tpl->tpl_vars['customer_id']->value;?>
" title="Thay đổi người phụ trách"><i class="bx bx-user-check me-1"></i> Phụ trách</button>
				<button type="button"<?php if (!$_smarty_tpl->tpl_vars['permiss_assign']->value == '1') {?> disabled="disabled"<?php }?> onClick="$Core.crm.add_participant(this, event)" 
					class="btn flex-fill btn-outline-secondary" customer_id="<?php echo $_smarty_tpl->tpl_vars['customer_id']->value;?>
" title="Thêm người liên quan"><i class="bx bx-user-plus me-1"></i> Người liên quan</button>
				<button type="button"<?php if ($_smarty_tpl->tpl_vars['permiss_action']->value != '1') {?> disabled="disabled"<?php }?> class="btn flex-fill btn-primary" 
					onClick="$Core.crm.open_customer(this, event)" route="/customer/<?php echo $_smarty_tpl->tpl_vars['customer_id']->value;?>
/overview" customer_id="<?php echo $_smarty_tpl->tpl_vars['customer_id']->value;?>
" title="Sửa thông tin khách"><i class="bx bx-edit-alt me-1"></i> Sửa</button>
			</div>
		</div>
	</div>
</div>
<?php } else { ?>
<div class="crm-tl-stream">
	<?php if (!empty($_smarty_tpl->tpl_vars['list_followups']->value)) {?>
	<div class="activity mb-0">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_followups']->value, '_oI');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oI']->value) {
?>
		<?php $_smarty_tpl->_assignInScope('list_reply', $_smarty_tpl->tpl_vars['_oI']->value['list_reply']);?>
		<?php $_smarty_tpl->_assignInScope('oneProperty', $_smarty_tpl->tpl_vars['_oI']->value['oneProperty']);?>
		<div class="d-flex activity-item<?php if ($_smarty_tpl->tpl_vars['_oI']->value['status_id'] == @constant('_FOLLOWUP_STATUS_DONE_ID')) {?> bg2-success<?php }?>">
			<span style="--ic-bg:<?php echo $_smarty_tpl->tpl_vars['oneProperty']->value['bgcolor'];?>
; --ic-fg:<?php echo $_smarty_tpl->tpl_vars['oneProperty']->value['textcolor'];?>
" class="activity-icon d-block rounded-circle text-center border-0 shadow-none">
				<i class="bx <?php echo $_smarty_tpl->tpl_vars['oneProperty']->value['image'];?>
"></i>
			</span>
			<div class="activity-content position-relative">
				<?php if (!empty($_smarty_tpl->tpl_vars['_oI']->value['title'])) {?>
				<div class="activity-header">
					<h6 class="mb-2"><?php echo $_smarty_tpl->tpl_vars['_oI']->value['title'];?>
</h6>
				</div>
				<?php }?>
				<div class="activity-body">
					<p class="mb-0"><?php echo $_smarty_tpl->tpl_vars['_oI']->value['intro'];?>
</p>
				</div>
				<?php if (!empty($_smarty_tpl->tpl_vars['_oI']->value['_result'])) {?>
				<div class="activity-result"><span class="activity-result__k">Kết quả</span> <?php echo $_smarty_tpl->tpl_vars['_oI']->value['_result'];?>
</div>
				<?php }?>
				<div class="activity-footer d-flex align-items-center justify-content-between">
					<div class="d-flex align-items-center gap-2">
						<a href="javascript:void(0);" followup_id="0" parent_id="<?php echo $_smarty_tpl->tpl_vars['_oI']->value['followup_id'];?>
" customer_id="<?php echo $_smarty_tpl->tpl_vars['customer_id']->value;?>
" tp="follow-ups" type_id="<?php echo $_smarty_tpl->tpl_vars['_oI']->value['type_id'];?>
" onClick="$Core.crm.open_reply(this, event)" class="fw-medium">
							<i class='bx bx-reply'></i>
							<small>Trả lời</small>
						</a>
						<small class="text-<?php if ($_smarty_tpl->tpl_vars['_oI']->value['date_id'] > time()) {?>main<?php } else { ?>muted<?php }?> fw-medium">
							<i class="material-icons-outlined">update</i>
							<?php if ($_smarty_tpl->tpl_vars['_oI']->value['date_id'] > time()) {?>
								<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getTimeMore($_smarty_tpl->tpl_vars['_oI']->value['date_id']);?>

							<?php } else { ?>
								<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getTimeAgo($_smarty_tpl->tpl_vars['_oI']->value['date_id']);?>

							<?php }?>
						</small>
						<small>
							<i class="material-icons-outlined">more_time</i>
							<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getTimeAgo($_smarty_tpl->tpl_vars['_oI']->value['reg_date']);?>

						</small>
						<?php if ($_smarty_tpl->tpl_vars['permiss_action']->value == '1' && $_smarty_tpl->tpl_vars['_oI']->value['status_id'] != @constant('_FOLLOWUP_STATUS_DONE_ID')) {?>
						<a href="javascript:void(0);" class="cursor-pointer" title="Hoàn thành" onClick="$Core.crm.done_followup(this,event);" followup_id="<?php echo $_smarty_tpl->tpl_vars['_oI']->value['followup_id'];?>
" tp="follow-ups" type_id="<?php echo $_smarty_tpl->tpl_vars['_oI']->value['type_id'];?>
" customer_id="<?php echo $_smarty_tpl->tpl_vars['customer_id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIcon('bx-check');?>
</a><?php }?>
					</div>
					<span class="d-flex align-items-center gap-1" title="Người phụ trách">
						<img class="avatar rounded-pill avatar-xxs" src="<?php echo $_smarty_tpl->tpl_vars['_oI']->value['avatar'];?>
" onerror="this.src='<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/no-avatar.jpg'" data-url="/index.php?mod=home&act=load_profile_popover&user_id=<?php echo $_smarty_tpl->tpl_vars['_oI']->value['admin_id'];?>
" 
							data-toggle="webui-popover" data-width="350px" data-trigger="hover" data-placement="auto" />
					</span>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['permiss_action']->value == '1') {?>
				<div class="dropdown bvRzMvBFYd position-absolute">
					<button class="btn p-0 hide-arrow dropdown-toggle" data-bs-toggle="dropdown">
						<i class="bx bx-dots-vertical-rounded"></i>
					</button>
					<div class="dropdown-menu">
						<a class="dropdown-item cursor-pointer" onClick="$Core.crm.open_activity(this,event);" followup_id="<?php echo $_smarty_tpl->tpl_vars['_oI']->value['followup_id'];?>
" tp="follow-ups" type_id="<?php echo $_smarty_tpl->tpl_vars['_oI']->value['type_id'];?>
" customer_id="<?php echo $_smarty_tpl->tpl_vars['customer_id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIcon('bx-edit-alt','Sửa');?>
</a>
						<a href="javascript:void(0);" class="dropdown-item cursor-pointer" onClick="$Core.crm.delete_activity(this,event);" type_id="<?php echo $_smarty_tpl->tpl_vars['_oI']->value['type_id'];?>
" followup_id="<?php echo $_smarty_tpl->tpl_vars['_oI']->value['followup_id'];?>
" tp="follow-ups" customer_id="<?php echo $_smarty_tpl->tpl_vars['customer_id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIcon('bx-trash','Xóa');?>
</a>
						<?php if ($_smarty_tpl->tpl_vars['_oI']->value['status_id'] != @constant('_FOLLOWUP_STATUS_DONE_ID')) {?>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item text-success cursor-pointer" onClick="$Core.crm.done_followup(this,event);" followup_id="<?php echo $_smarty_tpl->tpl_vars['_oI']->value['followup_id'];?>
" tp="follow-ups" type_id="<?php echo $_smarty_tpl->tpl_vars['_oI']->value['type_id'];?>
" customer_id="<?php echo $_smarty_tpl->tpl_vars['customer_id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIcon('bx-check-circle','Hoàn thành');?>
</a>
						<?php }?>
					</div>
				</div>
				<?php }?>
			</div>
		</div>
		<?php if (!empty($_smarty_tpl->tpl_vars['list_reply']->value)) {?>
		<div class="reply-container">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_reply']->value, '_oReply');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oReply']->value) {
?>
			<div class="reply-item relative border p-2 rounded-2 my-2">
				<div class="reply-icon border bg-white rounded-pill zindex-2 position-absolute w-px-30 h-px-30 d-flex align-items-center justify-content-center">
					<i class='bx bx-comment'></i>
				</div>
				<div class="d-flex gap-2 justify-content-between">
					<div class="reply-item-body">
						<div class=""><?php echo $_smarty_tpl->tpl_vars['_oReply']->value['intro'];?>
</div>
						<small class="text-muted fw-medium">
							<i class="material-icons-outlined">update</i>
							<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getTimeAgo($_smarty_tpl->tpl_vars['_oReply']->value['reg_date']);?>

						</small>
					</div>
					<div class="d-flex flex-column justify-content-between">
						<div class="dropdown">
							<button class="btn p-0 hide-arrow dropdown-toggle" data-bs-toggle="dropdown">
								<i class="bx bx-dots-vertical-rounded"></i>
							</button>
							<div class="dropdown-menu">
								<a class="dropdown-item cursor-pointer" onClick="$Core.crm.open_reply(this,event);" followup_id="<?php echo $_smarty_tpl->tpl_vars['_oReply']->value['followup_id'];?>
" tp="follow-ups" parent_id="<?php echo $_smarty_tpl->tpl_vars['_oI']->value['followup_id'];?>
" type_id="<?php echo $_smarty_tpl->tpl_vars['_oI']->value['type_id'];?>
" customer_id="<?php echo $_smarty_tpl->tpl_vars['customer_id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIcon('bx-edit-alt','Sửa');?>
</a>
							</div>
						</div>
						<img class="avatar rounded-pill avatar-xxs" src="<?php echo $_smarty_tpl->tpl_vars['_oReply']->value['avatar'];?>
" onerror="this.src='<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/no-avatar.jpg'" data-url="/index.php?mod=home&act=load_profile_popover&user_id=<?php echo $_smarty_tpl->tpl_vars['_oReply']->value['user_id'];?>
" data-toggle="webui-popover" data-width="350px" data-trigger="hover" data-placement="auto" />
					</div>
				</div>
			</div>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
		<?php }?>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
	<?php } else { ?>
	<div class="p-5">
		<?php echo $_smarty_tpl->tpl_vars['htmlNotFound']->value;?>

	</div>
	<?php }?>
</div>
<?php }
}
}
