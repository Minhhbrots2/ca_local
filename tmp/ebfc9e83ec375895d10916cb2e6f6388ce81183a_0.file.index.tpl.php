<?php
/* Smarty version 3.1.33, created on 2026-07-06 19:00:56
  from '/www/wwwroot/skyrealty.futureglobal.vn/application/blocks/crm_search/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a4b98f87bd6e6_53844661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebfc9e83ec375895d10916cb2e6f6388ce81183a' => 
    array (
      0 => '/www/wwwroot/skyrealty.futureglobal.vn/application/blocks/crm_search/index.tpl',
      1 => 1783314222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a4b98f87bd6e6_53844661 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="p-3">
	<form name="frmIssue" method="POST" onSubmit="return false;">
		<input type="hidden" class="<?php echo $_smarty_tpl->tpl_vars['crm_field']->value;?>
" name="staff_id" data-field="staff_id" value="<?php echo $_smarty_tpl->tpl_vars['staff_id']->value;?>
">
		<div class="form-group mb-2">
			<div class="form-label mb-1">Tìm theo từ khóa</div>
			<div class="input-group input-group-merge mr-2">
				<span class="input-group-text"><i class="bx bx-search"></i></span>
				<input type="text" class="form-control search_crm_field search_crm_keyword_field <?php echo $_smarty_tpl->tpl_vars['crm_field']->value;?>
" name="keysearch" 
				data-field="keysearch" holderG="<?php echo $_smarty_tpl->tpl_vars['holderG']->value;?>
" onClick="this.select();" value="<?php echo $_smarty_tpl->tpl_vars['keysearch']->value;?>
" placeholder="Nhập từ khóa & enter để tìm kiếm...">
			</div>
		</div>
		<div class="form-group form-row mb-2">
			<div class="col-6">
				<div class="form-label mb-1">Được tạo</div>
				<select name="reg_date_range" holderG="<?php echo $_smarty_tpl->tpl_vars['holderG']->value;?>
" class="form-control <?php echo $_smarty_tpl->tpl_vars['crm_field']->value;?>
 form-select" data-field="reg_date_range" onchange="$Core.crm.do_search(this, event)">
					<option value="0">Tất cả</option>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_date_ranges']->value, '_OT', false, '_OR');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_OR']->value => $_smarty_tpl->tpl_vars['_OT']->value) {
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['_OR']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['_OT']->value;?>
</option>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</select>
			</div>
			<div class="col-6">
				<div class="form-label mb-1">Đã chăm sóc</div>
				<select name="reg_date_range" holderG="<?php echo $_smarty_tpl->tpl_vars['holderG']->value;?>
" class="form-control <?php echo $_smarty_tpl->tpl_vars['crm_field']->value;?>
 form-select" 
					data-field="cared_at" onchange="$Core.crm.do_search(this, event)">
					<option value="0">Tất cả</option>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_date_ranges']->value, '_OT', false, '_OR');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_OR']->value => $_smarty_tpl->tpl_vars['_OT']->value) {
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['_OR']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['_OT']->value;?>
</option>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</select>
			</div>
		</div>
		<div class="form-group form-row mb-2">
			<div class="col-6">
				<div class="form-label mb-1">Từ ngày</div>
				<input type="date" class="form-control <?php echo $_smarty_tpl->tpl_vars['crm_field']->value;?>
" holderG="<?php echo $_smarty_tpl->tpl_vars['holderG']->value;?>
" data-field="reg_from" onchange="$Core.crm.do_search(this, event)">
			</div>
			<div class="col-6">
				<div class="form-label mb-1">Tới ngày</div>
				<input type="date" class="form-control <?php echo $_smarty_tpl->tpl_vars['crm_field']->value;?>
" holderG="<?php echo $_smarty_tpl->tpl_vars['holderG']->value;?>
" data-field="reg_to" onchange="$Core.crm.do_search(this, event)">
			</div>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkPermissionGroup('DIRECTOR') || $_smarty_tpl->tpl_vars['clsISO']->value->checkPermission('full_permiss_crm')) {?>
			<div class="form-group mb-2">
				<div class="form-label mb-1">Nhóm nhân viên</div>
				<select class="iso-selectizeNotSearch <?php echo $_smarty_tpl->tpl_vars['crm_field']->value;?>
 required" holderG="<?php echo $_smarty_tpl->tpl_vars['holderG']->value;?>
" data-field="group_id" onchange="$Core.crm.do_search(this, event)" data-width="100%" data-placeholder="Nhóm nhân viên" data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=home&act=list_staffs_group" data-width="100%">
					<?php if ($_smarty_tpl->tpl_vars['get_group_id']->value > '0') {?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['get_group_id']->value;?>
" selected><?php echo $_smarty_tpl->tpl_vars['clsGroupProfile']->value->getTitle($_smarty_tpl->tpl_vars['get_group_id']->value);?>
</option>	
					<?php } else { ?>
					<option value="">Nhóm nhân viên</option>
					<?php }?>
				</select>
			</div>
			<div class="form-group mb-2 js-manager-wrap<?php if ($_smarty_tpl->tpl_vars['team_reps']->value && $_smarty_tpl->tpl_vars['tab']->value == 'team') {?> d-none<?php }?>">
				<div class="form-label mb-1">Người quản lý</div>
				<select class="iso-selectizeNotSearch <?php echo $_smarty_tpl->tpl_vars['crm_field']->value;?>
 required" holderG="<?php echo $_smarty_tpl->tpl_vars['holderG']->value;?>
" data-field="admin_id" onchange="$Core.crm.do_search(this, event)" data-width="100%" data-placeholder="Người quản lý" data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=home&act=list_staff" data-width="100%">
					<?php if ($_smarty_tpl->tpl_vars['get_admin_id']->value > '0') {?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['get_admin_id']->value;?>
" selected><?php echo $_smarty_tpl->tpl_vars['clsProfile']->value->getFullName($_smarty_tpl->tpl_vars['get_admin_id']->value);?>
</option>
					<?php } else { ?>
					<option value="">Người quản lý</option>
					<?php }?>
				</select>
			</div>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['team_reps']->value) {?>
		<div class="form-group mb-2 js-team-rep-wrap<?php if ($_smarty_tpl->tpl_vars['tab']->value != 'team') {?> d-none<?php }?>">
			<div class="form-label mb-1">Nhân viên trong nhóm</div>
			<select class="form-control <?php echo $_smarty_tpl->tpl_vars['crm_field']->value;?>
 iso-select2" data-placeholder="Tìm nhân viên..." data-allow-clear="true" data-width="100%" holderG="<?php echo $_smarty_tpl->tpl_vars['holderG']->value;?>
" data-field="admin_id" onchange="$Core.crm.do_search(this, event)">
				<option value="0">— Tất cả nhân viên —</option>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['team_reps']->value, '_rp');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_rp']->value) {
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['_rp']->value['profile_id'];?>
"<?php if ($_smarty_tpl->tpl_vars['get_admin_id']->value == $_smarty_tpl->tpl_vars['_rp']->value['profile_id']) {?> selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_rp']->value['full_name'], ENT_QUOTES, 'UTF-8', true);
if ($_smarty_tpl->tpl_vars['_rp']->value['dept_name']) {?> — <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_rp']->value['dept_name'], ENT_QUOTES, 'UTF-8', true);
}?></option>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</select>
		</div>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['is_tp_mkt']->value) {?>
		<div class="form-group mb-2">
			<div class="form-label mb-1">Nhân viên Marketing (người tạo)</div>
			<select class="form-control <?php echo $_smarty_tpl->tpl_vars['crm_field']->value;?>
 form-select" holderG="<?php echo $_smarty_tpl->tpl_vars['holderG']->value;?>
" data-field="admin_id" onchange="$Core.crm.do_search(this, event)" data-width="100%" data-placeholder="Nhân viên Marketing" data-allow-clear="true">
				<option value="0">— Tất cả NV Marketing —</option>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mkt_staffs']->value, '_ms');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_ms']->value) {
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['_ms']->value['profile_id'];?>
"<?php if ($_smarty_tpl->tpl_vars['get_admin_id']->value == $_smarty_tpl->tpl_vars['_ms']->value['profile_id']) {?> selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_ms']->value['text'], ENT_QUOTES, 'UTF-8', true);?>
</option>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</select>
		</div>
		<?php }?>
		<div class="form-group form-row mb-2">
			<div class="col-6">
				<div class="form-label mb-1">Tình trạng</div>
				<select class="form-control search_crm_status_field <?php echo $_smarty_tpl->tpl_vars['crm_field']->value;?>
 form-select" data-width="100%" holderG="<?php echo $_smarty_tpl->tpl_vars['holderG']->value;?>
" onchange="$Core.crm.do_search(this, event)" data-placeholder="Tình trạng" data-width="100%" data-allow-clear="true" data-field="status_id">
					<option value="0">Tình trạng</option>
					<?php echo $_smarty_tpl->tpl_vars['clsProperty']->value->getSelectByProperty('CUSTOMER_STATUS',$_smarty_tpl->tpl_vars['get_status_id']->value,'',true);?>

				</select>	
			</div>
			<div class="col-6">
				<div class="form-label mb-1">Nguồn gốc</div>
				<select class="form-control <?php echo $_smarty_tpl->tpl_vars['crm_field']->value;?>
 form-select" data-width="100%" holderG="<?php echo $_smarty_tpl->tpl_vars['holderG']->value;?>
" onchange="$Core.crm.do_search(this, event)" data-placeholder="Nguồn gốc" data-width="100%" data-allow-clear="true" data-field="resource_id">
					<option value="0">Nguồn gốc</option>
					<?php echo $_smarty_tpl->tpl_vars['clsProperty']->value->getSelectByProperty('_CUSTOMER_RESOURCES',$_smarty_tpl->tpl_vars['get_resource_id']->value,'',true);?>

				</select>	
			</div>
		</div>
		<div class="form-group form-row mb-2">
			<div class="col-6">
				<div class="form-label mb-1">Chiến dịch</div>
				<select name="campaign_id" data-placeholder="Chiến dịch" class="form-control <?php echo $_smarty_tpl->tpl_vars['crm_field']->value;?>
 iso-select2" data-width="100%" 
				data-allow-clear="true" holderG="<?php echo $_smarty_tpl->tpl_vars['holderG']->value;?>
" onchange="$Core.crm.do_search(this,event)" data-field="campaign_id">
					<option value="0">Chiến dịch</option>
					<?php if (!empty($_smarty_tpl->tpl_vars['list_campaigns']->value)) {?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_campaigns']->value, '_oCampaign');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oCampaign']->value) {
?>
						<option<?php if ($_smarty_tpl->tpl_vars['get_campaign_id']->value == $_smarty_tpl->tpl_vars['_oCampaign']->value['campaign_id']) {?> selected<?php }?> 
							value="<?php echo $_smarty_tpl->tpl_vars['_oCampaign']->value['campaign_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_oCampaign']->value['title'];?>
</option>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php }?>
				</select>
			</div>
			<div class="col-6">
				<div class="form-label mb-1">Loại hình</div>
				<select class="form-control <?php echo $_smarty_tpl->tpl_vars['crm_field']->value;?>
 form-select" data-width="100%" holderG="<?php echo $_smarty_tpl->tpl_vars['holderG']->value;?>
" onchange="$Core.crm.do_search(this, event)" data-placeholder="Loại hình" data-width="100%" data-allow-clear="true" data-field="blocktype_id">
					<option value="0">Loại hình</option>
					<?php echo $_smarty_tpl->tpl_vars['clsProperty']->value->getSelectByProperty('_BLOCK_TYPE',$_smarty_tpl->tpl_vars['get_blocktype_id']->value,'',true);?>

				</select>	
			</div>
		</div>
		<div class="form-group form-row mb-2">
			<div class="col-6">
				<label class="form-label mb-1">Dự án/Phân khu</label>
				<div class="clearfix"></div>
				<select name="block_id" data-field="block_id" data-placeholder="Dự án/Phân khu" data-allow-clear="true" data-width="100%" 
					class="form-control <?php echo $_smarty_tpl->tpl_vars['crm_field']->value;?>
 iso-select2" onchange="$Core.crm.do_search(this, event)">
					<option value="0">Dự án/Phân khu</option>
					<?php if (!empty($_smarty_tpl->tpl_vars['arr_projects']->value)) {?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr_projects']->value, '_oI');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oI']->value) {
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['_oI']->value['setting_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_oI']->value['title'];?>
</option>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php }?>
				</select>
			</div>
			<div class="col-6">
				<label class="form-label mb-1">Loại căn</label>
				<div class="clearfix"></div>
				<select name="bedroom_id" data-field="bedroom_id" data-placeholder="Phân khu" data-allow-clear="true" data-width="100%" 
					class="form-control <?php echo $_smarty_tpl->tpl_vars['crm_field']->value;?>
 iso-select2" onchange="$Core.crm.do_search(this, event)">
					<option value="0">Loại căn</option>
					<?php if (!empty($_smarty_tpl->tpl_vars['arr_bedrooms']->value)) {?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr_bedrooms']->value, '_oI');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oI']->value) {
?>
						<option<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkItemInArray($_smarty_tpl->tpl_vars['_oI']->value['property_id'],$_smarty_tpl->tpl_vars['_ss_storage']->value['list_bedroom_id'])) {?> selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['_oI']->value['property_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_oI']->value['title'];?>
</option>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php }?>
				</select>
			</div>
		</div>
		<?php if (!empty($_smarty_tpl->tpl_vars['group_customer_sale']->value) && $_smarty_tpl->tpl_vars['clsCustomer']->value->isRootProfile()) {?>
		<div class="form-group form-row mb-2">
			<div class="col-12">
				<div class="form-label mb-1">Nhóm đã chia</div>
				<select name="group_customer_sale" data-placeholder="Nhóm đã chia" class="form-control <?php echo $_smarty_tpl->tpl_vars['crm_field']->value;?>
 iso-select2" data-width="100%" 
				data-allow-clear="true" holderG="<?php echo $_smarty_tpl->tpl_vars['holderG']->value;?>
" onchange="$Core.crm.do_search(this,event)" data-field="group_customer_sale">
					<option value="0">Chọn</option>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group_customer_sale']->value, '_oItem', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['_oItem']->value) {
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['_oItem']->value['title'];?>
</option>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</select>
			</div>
		</div>
		<?php }?>
		<hr class="my-2" />
		<?php $_smarty_tpl->_assignInScope('pId', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>
		<div class="form-check form-switch cursor-pointer mb-2">
			<input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['pId']->value;?>
" class="form-check-input <?php echo $_smarty_tpl->tpl_vars['pId']->value;?>
" p_field="crm_view_all" 
				onchange="$Core.crm.set_field(this, event)" name="is_all"<?php if ($_smarty_tpl->tpl_vars['crm_view_all']->value == '1') {?> checked<?php }?> value="1" />
			<label class="form-check-label" for="<?php echo $_smarty_tpl->tpl_vars['pId']->value;?>
">Hiển thị khách hàng lưu trữ</label>
		</div>
		<hr class="my-2" />
		<div class="form-group">
			<button type="button" holderG="<?php echo $_smarty_tpl->tpl_vars['holderG']->value;?>
" gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" onClick="$Core.crm.scrollToElem(this, event); $Core.crm.do_search(this, event)" 
			class="btn btn-outline-success do_crm_search">Tìm kiếm</button>
			<button type="button" onClick="$Core.crm.reset_search(this, event)" holderG="<?php echo $_smarty_tpl->tpl_vars['holderG']->value;?>
" class="btn btn-outline-default">Xóa</button>
		</div>
	</form>
</div><?php }
}
