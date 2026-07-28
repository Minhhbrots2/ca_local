<?php
/* Smarty version 3.1.33, created on 2026-07-08 14:36:33
  from '/www/wwwroot/skyrealty.c-a.vn/application/views/issue/_ajax.list_issue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a4dfe01540b03_94764836',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ed4870a0f84a8eaf264f45656ec682e06c6aaf9' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/views/issue/_ajax.list_issue.tpl',
      1 => 1783314313,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a4dfe01540b03_94764836 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/www/wwwroot/skyrealty.c-a.vn/core/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
if (!empty($_smarty_tpl->tpl_vars['list_issues']->value)) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_issues']->value, '_oIssue');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oIssue']->value) {
?>
	<?php $_smarty_tpl->_assignInScope('issue_id', $_smarty_tpl->tpl_vars['_oIssue']->value['issue_id']);?>
	<?php $_smarty_tpl->_assignInScope('dr', $_smarty_tpl->tpl_vars['_oIssue']->value['done_ratio']);?>
	<?php if ($_smarty_tpl->tpl_vars['_oIssue']->value['status_id'] == @constant('_ISSUE_STATUS_COMPLETED')) {
$_smarty_tpl->_assignInScope('dr', 100);
}?>
	<?php $_smarty_tpl->_assignInScope('od', false);?>
	<?php if ($_smarty_tpl->tpl_vars['_oIssue']->value['end_date'] > 0 && $_smarty_tpl->tpl_vars['_oIssue']->value['end_date'] < time() && $_smarty_tpl->tpl_vars['_oIssue']->value['status_id'] != 206 && $_smarty_tpl->tpl_vars['_oIssue']->value['status_id'] != @constant('_ISSUE_STATUS_COMPLETED')) {
$_smarty_tpl->_assignInScope('od', true);
}?>
	<?php $_smarty_tpl->_assignInScope('st', $_smarty_tpl->tpl_vars['stMap']->value[$_smarty_tpl->tpl_vars['_oIssue']->value['status_id']]);?>
	<?php $_smarty_tpl->_assignInScope('pr', $_smarty_tpl->tpl_vars['prMap']->value[$_smarty_tpl->tpl_vars['_oIssue']->value['priority_id']]);?>
	<?php $_smarty_tpl->_assignInScope('running', false);?>
	<?php if ($_smarty_tpl->tpl_vars['_oIssue']->value['status_id'] == @constant('_ISSUE_STATUS_DOING')) {
$_smarty_tpl->_assignInScope('running', true);
}?>
	<?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?>
	<div class="issue-card" route="<?php echo $_smarty_tpl->tpl_vars['clsIssue']->value->getLink($_smarty_tpl->tpl_vars['issue_id']->value,false);?>
" issue_id="<?php echo $_smarty_tpl->tpl_vars['issue_id']->value;?>
" onClick="$Core.issue.view_issue(this, event)">
		<div class="icm-head">
			<?php if ($_smarty_tpl->tpl_vars['st']->value) {?><span class="ic-badge st-<?php echo $_smarty_tpl->tpl_vars['_oIssue']->value['status_id'];?>
"><span class="dot"></span><?php echo $_smarty_tpl->tpl_vars['st']->value['label'];?>
</span><?php }?>
			<span class="ic-id">#<?php echo $_smarty_tpl->tpl_vars['issue_id']->value;?>
</span>
			<?php if ($_smarty_tpl->tpl_vars['od']->value) {?><span class="ic-od">Trễ hạn</span><?php }?>
			<span class="ic-av ms-auto" title="Người nhận"><img src="<?php echo $_smarty_tpl->tpl_vars['clsProfile']->value->getAvatar($_smarty_tpl->tpl_vars['_oIssue']->value['assign_to_id']);?>
"><span class="bdg recv">✓</span></span>
		</div>
		<div class="icm-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_oIssue']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</div>
		<div class="icm-meta">
			<span class="ic-time<?php if ($_smarty_tpl->tpl_vars['od']->value) {?> od<?php }?>"><i class="bx bx-time-five"></i> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['_oIssue']->value['start_date'],"%d/%m/%Y");?>
 → <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['_oIssue']->value['end_date'],"%d/%m/%Y");?>
</span>
			<?php if ($_smarty_tpl->tpl_vars['pr']->value) {?><span class="ic-prio pr-<?php echo $_smarty_tpl->tpl_vars['_oIssue']->value['priority_id'];?>
"><i class="bx bx-flag"></i><b><?php echo $_smarty_tpl->tpl_vars['pr']->value['label'];?>
</b></span><?php }?>
		</div>
		<div class="ic-prog"><div class="track"><i class="<?php if ($_smarty_tpl->tpl_vars['dr']->value >= 100) {?>done<?php }?>" style="width:<?php echo $_smarty_tpl->tpl_vars['dr']->value;?>
%"></i></div><b><?php echo $_smarty_tpl->tpl_vars['dr']->value;?>
%</b></div>
	</div>
	<?php } else { ?>
	<div class="issue-row" route="<?php echo $_smarty_tpl->tpl_vars['clsIssue']->value->getLink($_smarty_tpl->tpl_vars['issue_id']->value,false);?>
" issue_id="<?php echo $_smarty_tpl->tpl_vars['issue_id']->value;?>
" onClick="$Core.issue.view_issue(this, event)">
		<div class="ic-name">
			<button type="button" class="ic-star<?php if ($_smarty_tpl->tpl_vars['_oIssue']->value['is_archived'] == '1') {?> on<?php }?>" onClick="event.stopPropagation(); $Core.issue.archive(this, event)" holderG="<?php echo $_smarty_tpl->tpl_vars['holderG']->value;?>
" issue_id="<?php echo $_smarty_tpl->tpl_vars['issue_id']->value;?>
" title="<?php if ($_smarty_tpl->tpl_vars['_oIssue']->value['is_archived'] == '1') {?>Bỏ lưu trữ<?php } else { ?>Lưu trữ<?php }?>"><i class="bx <?php if ($_smarty_tpl->tpl_vars['_oIssue']->value['is_archived'] == '1') {?>bxs-star<?php } else { ?>bx-star<?php }?>"></i></button>
			<span class="ic-id">#<?php echo $_smarty_tpl->tpl_vars['issue_id']->value;?>
</span>
			<span class="ic-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_oIssue']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</span>
			<?php if ($_smarty_tpl->tpl_vars['od']->value) {?><span class="ic-od">Trễ hạn</span><?php }?>
		</div>
		<div><?php if ($_smarty_tpl->tpl_vars['st']->value) {?><span class="ic-badge st-<?php echo $_smarty_tpl->tpl_vars['_oIssue']->value['status_id'];?>
"><span class="dot"></span><?php echo $_smarty_tpl->tpl_vars['st']->value['label'];?>
</span><?php }?></div>
		<div class="ic-time<?php if ($_smarty_tpl->tpl_vars['od']->value) {?> od<?php }?>"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['_oIssue']->value['start_date'],"%d/%m/%Y");?>
 → <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['_oIssue']->value['end_date'],"%d/%m/%Y");?>
</div>
		<div class="ic-people">
			<span class="ic-av" title="Người giao"><img src="<?php echo $_smarty_tpl->tpl_vars['clsProfile']->value->getAvatar($_smarty_tpl->tpl_vars['_oIssue']->value['user_id']);?>
"><span class="bdg give">+</span></span>
			<span class="ic-av" title="Người nhận"><img src="<?php echo $_smarty_tpl->tpl_vars['clsProfile']->value->getAvatar($_smarty_tpl->tpl_vars['_oIssue']->value['assign_to_id']);?>
"><span class="bdg recv">✓</span></span>
		</div>
		<div class="ic-prio<?php if ($_smarty_tpl->tpl_vars['pr']->value) {?> pr-<?php echo $_smarty_tpl->tpl_vars['_oIssue']->value['priority_id'];
}?>"><?php if ($_smarty_tpl->tpl_vars['pr']->value) {?><i class="bx bx-flag"></i><b><?php echo $_smarty_tpl->tpl_vars['pr']->value['label'];?>
</b><?php }?></div>
		<div class="ic-prog"><div class="track"><i class="<?php if ($_smarty_tpl->tpl_vars['dr']->value >= 100) {?>done<?php }?>" style="width:<?php echo $_smarty_tpl->tpl_vars['dr']->value;?>
%"></i></div><b><?php echo $_smarty_tpl->tpl_vars['dr']->value;?>
%</b></div>
		<div class="ic-timer">
			<?php if ($_smarty_tpl->tpl_vars['_oIssue']->value['assign_to_id'] == $_smarty_tpl->tpl_vars['profile_id']->value) {?>
			<?php if ($_smarty_tpl->tpl_vars['running']->value) {?>
			<button type="button" class="tbtn run" onClick="event.stopPropagation(); $Core.issue.stop_issue(this, event)" issue_id="<?php echo $_smarty_tpl->tpl_vars['issue_id']->value;?>
" title="Tạm dừng"><i class="bx bx-pause"></i></button>
			<span class="ic-clock run time-issue-<?php echo $_smarty_tpl->tpl_vars['issue_id']->value;?>
 timeCountUp"><?php echo $_smarty_tpl->tpl_vars['clsIssue']->value->getTimeDo($_smarty_tpl->tpl_vars['issue_id']->value);?>
</span>
			<?php } else { ?>
			<button type="button" class="tbtn" onClick="event.stopPropagation(); $Core.issue.start_issue(this, event)" issue_id="<?php echo $_smarty_tpl->tpl_vars['issue_id']->value;?>
" title="Bắt đầu bấm giờ"><i class="bx bx-play"></i></button>
			<span class="ic-clock">00:00:00</span>
			<?php }?>
			<?php } else { ?>
			<span class="ic-clock<?php if ($_smarty_tpl->tpl_vars['running']->value) {?> run time-issue-<?php echo $_smarty_tpl->tpl_vars['issue_id']->value;?>
 timeCountUp<?php }?>"><?php if ($_smarty_tpl->tpl_vars['running']->value) {
echo $_smarty_tpl->tpl_vars['clsIssue']->value->getTimeDo($_smarty_tpl->tpl_vars['issue_id']->value);
} else { ?>00:00:00<?php }?></span>
			<?php }?>
		</div>
		<div class="dropdown" onClick="event.stopPropagation();">
			<button type="button" class="ic-more hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
			<div class="dropdown-menu dropdown-menu-end">
				<a class="dropdown-item" onClick="$Core.issue.view_issue(this,event)" issue_id="<?php echo $_smarty_tpl->tpl_vars['issue_id']->value;?>
" href="javascript:void(0);"><i class="bx bx-bullseye me-1"></i> Xem</a>
				<?php if ($_smarty_tpl->tpl_vars['_oIssue']->value['assign_to_id'] == $_smarty_tpl->tpl_vars['profile_id']->value && $_smarty_tpl->tpl_vars['_oIssue']->value['status_id'] != @constant('_ISSUE_STATUS_COMPLETED')) {?>
				<?php if ($_smarty_tpl->tpl_vars['running']->value) {?>
				<a class="dropdown-item text-warning" href="javascript:void(0);" onClick="$Core.issue.stop_issue(this,event)" issue_id="<?php echo $_smarty_tpl->tpl_vars['issue_id']->value;?>
"><i class="bx bx-pause-circle me-1"></i> Tạm dừng</a>
				<?php } else { ?>
				<a class="dropdown-item text-primary" href="javascript:void(0);" onClick="$Core.issue.start_issue(this,event)" issue_id="<?php echo $_smarty_tpl->tpl_vars['issue_id']->value;?>
"><i class="bx bx-play-circle me-1"></i> Bắt đầu</a>
				<?php }?>
				<a class="dropdown-item text-success" href="javascript:void(0);" onClick="$Core.issue.done_issue(this,event)" issue_id="<?php echo $_smarty_tpl->tpl_vars['issue_id']->value;?>
"><i class="bx bx-check-circle me-1"></i> Hoàn thành</a>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['profile_id']->value == $_smarty_tpl->tpl_vars['_oIssue']->value['user_id'] || $_smarty_tpl->tpl_vars['clsISO']->value->checkDEV()) {?>
				<a class="dropdown-item" href="javascript:void(0);" onClick="$Core.issue.delete_issue(this,event)" issue_id="<?php echo $_smarty_tpl->tpl_vars['issue_id']->value;?>
"><i class="bx bx-trash me-1"></i> Xóa</a>
				<?php }?>
			</div>
		</div>
	</div>
	<?php }?>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else { ?>
	<div class="ic-empty"><img class="my-2 w-px-75" src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/table-no-data.png" /><p>Chưa có công việc nào</p></div>
<?php }
}
}
