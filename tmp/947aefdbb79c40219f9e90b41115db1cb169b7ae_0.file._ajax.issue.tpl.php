<?php
/* Smarty version 3.1.33, created on 2026-07-08 14:36:36
  from '/www/wwwroot/skyrealty.c-a.vn/application/views/issue/_ajax.issue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a4dfe043d1239_29610877',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '947aefdbb79c40219f9e90b41115db1cb169b7ae' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/views/issue/_ajax.issue.tpl',
      1 => 1783314313,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a4dfe043d1239_29610877 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/www/wwwroot/skyrealty.c-a.vn/core/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="modal-dialog modal-dialog-centered modal-ipad-xl">
	<form method="POST" class="modal-content" enctype="multipart/form-data">
		<div class="modal-header border-bottom d-flex align-items-center justify-content-between">
			<h5 class="modal-title" id="modalTopTitle">Thêm mới công việc</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body scroller">
			<?php if ($_smarty_tpl->tpl_vars['parent_id']->value > '0') {?>
			<div class="rounded-2 p-3 mb-2 bg-lightest">
				<h3 class="mb-2 fs-6">Công việc cha:</h3>
				<?php echo $_smarty_tpl->tpl_vars['clsIssue']->value->getTree($_smarty_tpl->tpl_vars['parent_id']->value);?>

			</div>
			<?php }?>
			<div class="form-group mb-2">
				<label class="form-label mb-1">Tên công việc</label>
				<input type="text" class="form-control fw-bold autofocus required" data-val-required="Bạn chưa nhập vào tên công việc" name="title" maxlength="255" placeholder="Tên công việc" />
			</div>
			<div class="form-group form-row mb-2">
				<div class="col-6 col-md-3 mb-2 mb-lg-0">
					<label class="form-label mb-1">Thời gian thực hiện</label>
					<input type="datetime-local" class="form-control" name="start_date" placeholder="Từ ngày" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['start_date']->value,'%Y-%m-%dT%H:%M');?>
" />
				</div>
				<div class="col-6 col-md-3 mb-2 mb-lg-0">
					<label class="form-label mb-1">tới</label>
					<input type="datetime-local" class="form-control" name="end_date" placeholder="Tới ngày" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['end_date']->value,'%Y-%m-%dT%H:%M');?>
" />
				</div>
				<div class="col-12 col-md-6">
					<label class="form-label mb-1">Người thực hiện</label>
					<select class="iso-selectizeNotSearch required w-100" placeholder="Nhân viên" data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=home&act=list_staff&holderG=permiss" name="assign_to_id" data-optgroup="false">
						<?php if ($_smarty_tpl->tpl_vars['action']->value == '_edit') {?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['oneBilling']->value['staff_id'];?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['clsProfile']->value->getIndentity($_smarty_tpl->tpl_vars['oneBilling']->value['staff_id']);?>
</option>
						<?php } else { ?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['profile_id']->value;?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['oneProfile']->value['code'];?>
-<?php echo $_smarty_tpl->tpl_vars['oneProfile']->value['full_name'];?>
</option>
						<?php }?>
					</select>
				</div>
			</div>
			<div class="form-group d-none mb-2">
				<label class="form-label mb-1">Màu công việc</label>
				<div class="d-flex mt-3 pl-3 gap-4">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_colors']->value, '_oColor');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oColor']->value) {
?>
					<label class="el-radio-color mr-3">
						<input name="color" style="color:<?php echo $_smarty_tpl->tpl_vars['_oColor']->value;?>
" type="radio" />
					</label>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
			</div>
			<div class="form-row mb-2">
				<div class="col-6 col-md-4 mb-2 mb-lg-0">
					<label class="form-label mb-1">Loại công việc</label>
					<?php $_smarty_tpl->_assignInScope('toId', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>
					<select id="<?php echo $_smarty_tpl->tpl_vars['toId']->value;?>
" class="form-control form-select required" name="type_id">
						<?php echo $_smarty_tpl->tpl_vars['clsProperty']->value->getSelectByProperty('_ISSUE_TYPE',0);?>

					</select>
				</div>
				<div class="col-6 col-md-4 mb-2 mb-lg-0">
					<label class="form-label mb-1">Tình trạng</label>
					<?php $_smarty_tpl->_assignInScope('toId', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>
					<select id="<?php echo $_smarty_tpl->tpl_vars['toId']->value;?>
" class="form-control form-select required" name="status_id">
						<?php echo $_smarty_tpl->tpl_vars['clsProperty']->value->getSelectByProperty('_ISSUE_STATUS',0);?>

					</select>
				</div>
				<div class="col-12 col-md-4">
					<label class="form-label mb-1">Độ ưu tiên</label>
					<?php $_smarty_tpl->_assignInScope('toId', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>
					<select id="<?php echo $_smarty_tpl->tpl_vars['toId']->value;?>
" class="form-control form-select required" name="priority_id">
						<?php echo $_smarty_tpl->tpl_vars['clsProperty']->value->getSelectByProperty('_ISSUE_PRIORITY',0);?>

					</select>
				</div>
			</div>
			<div class="form-group bg-lighter rounded-2 p-2 mb-2">
				<div class="dropdown">
					<!-- onClick="$Core.issue.add_target(this, event)" -->
					Mục tiêu công việc: <a href="javascript:void(0)" class="badge issue_target_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
 text-uppercase bg-label-secondary dropdown-toggle" 
						data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">Thêm mục tiêu</a>
					<div class="dropdown-menu w-px-350" data-popper-placement="bottom-start">
						<h6 class="dropdown-header mt-2 text-uppercase">Thêm mục tiêu công việc</h6>
						<div class="dropdown-body py-2 px-3">
							<?php $_smarty_tpl->_assignInScope('_toId', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>
							<div class="form-group mb-2">
								<label class="form-label mb-1">Chọn mục tiêu</label>
								<div class="clearfix"></div>
								<select toId="<?php echo $_smarty_tpl->tpl_vars['_toId']->value;?>
" onChange="$Core.issue.load_select_target(this, event)" 
									class="form-control form-select" placeholder="Phòng ban" name="department_id">
									<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkPermissionGroup('DIRECTOR')) {?>
										<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getSelectByPropertyTypeNotTitle('_DEPARTMENT',$_smarty_tpl->tpl_vars['department_id']->value);?>

									<?php } else { ?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['department_id']->value;?>
" selected><?php echo $_smarty_tpl->tpl_vars['clsProperty']->value->getTitle($_smarty_tpl->tpl_vars['department_id']->value);?>
</option>
									<?php }?>
								</select>
							</div>
							<div class="form-group mb-3">
								<label class="form-label mb-1">Chọn mục tiêu</label>
								<div id="issue_target_<?php echo $_smarty_tpl->tpl_vars['_toId']->value;?>
" class="issue_target_<?php echo $_smarty_tpl->tpl_vars['_toId']->value;?>
">
									<select name="issue_target_id" class="iso-selectizeNotSearch" data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=get_issue_target&department_id=<?php echo $_smarty_tpl->tpl_vars['oneProfile']->value['department_id'];?>
" 
										data-optgroup="false" placeholder="Chọn mục tiêu công việc"></select>
								</div>
							</div>
							<button type="button" uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" onClick="$Core.issue.add_target(this, event)" issue_id="<?php echo $_smarty_tpl->tpl_vars['issue_id']->value;?>
" 
								class="btn btn-primary">Thêm mục tiêu</button>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group mb-2">
				<label class="form-label mb-1">Người tham gia</label>
				<div class="clearfix"></div>
				<select class="slb_participants" multiple="multiple" name="participants[]" 
				placeholder="Tên công việc" >
					<?php if (!empty($_smarty_tpl->tpl_vars['list_staffs']->value)) {?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_staffs']->value, '_oStaff');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oStaff']->value) {
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['_oStaff']->value['profile_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_oStaff']->value['full_name'];?>
</option>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php }?>
				</select>
				<div class="clearfix"></div>
				<div class="d-inline-block pt-2 issue_participants_<?php echo $_smarty_tpl->tpl_vars['issue_id']->value;?>
"></div>
			</div>
			<div class="widget-block mb-2 collapsed">
				<div onClick="$Core.helper.toggle_block(this,event)" class="widget-header">Thông tin thêm</div>
				<div class="widget-content">
					<div class="form-row">
						<div class="col-12 col-md-6 mb-2 mb-lg-0">
							<label class="form-label mb-1">Khách hàng</label>
							<div class="input-group input-group-merge">
								<div class="form-control p-0 border-0">
									<?php $_smarty_tpl->_assignInScope('uid', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>
									<select placeholder="Chọn khách hàng" name="customer_id" id="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" class="iso-selectizeNotSearch required w-100" data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=home&act=list_customer" data-optgroup="false">
									<?php if ($_smarty_tpl->tpl_vars['action']->value == '_edit') {?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['oneBilling']->value['customer_id'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['clsCustomer']->value->getName($_smarty_tpl->tpl_vars['oneBilling']->value['customer_id']);?>
</option>
									<?php }?>
									</select>
								</div>
								<button type="button" uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" onClick="open_customer(this, event)" class="btn btn-outline-primary">+</button>
							</div>
						</div>
						<div class="col-12 col-md-6">
							<label class="form-label mb-1">Dự án</label>
							<select<?php if ($_smarty_tpl->tpl_vars['action']->value == '_edit') {?> disabled<?php }?> placeholder="Chọn dự án" class="iso-selectizeNotSearch required w-100" data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=home&act=list_project" name="project_id" onChange="load_holder_stock(this)" data-optgroup="false">
								<?php if ($_smarty_tpl->tpl_vars['action']->value == '_edit') {?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['oneBilling']->value['project_id'];?>
" selected="selected">
									<?php echo $_smarty_tpl->tpl_vars['clsProject']->value->getTitle($_smarty_tpl->tpl_vars['oneBilling']->value['project_id']);?>

								</option>
								<?php }?>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group mb-2">
				<?php $_smarty_tpl->_assignInScope('editorId', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>
				<label class="form-label mb-1">Nội dung</label>
				<textarea id="<?php echo $_smarty_tpl->tpl_vars['editorId']->value;?>
" class="form-control isoTextArea" rows="2" height="150px" cols="255" data-name="content" placeholder="Tên công việc" /></textarea>
			</div>
			<div class="form-group mb-2">
				<label class="form-label mb-1">Đính kèm (ảnh, tài liệu)</label>
				<input type="file" class="form-control" name="attachments[]" multiple accept=".png,.jpg,.jpeg,.gif,.pdf,.doc,.docx,.xls,.xlsx,.zip,.rar">
				<small class="text-muted">Có thể chọn nhiều ảnh/tài liệu cùng lúc.</small>
			</div>
		</div>
		<div class="modal-footer">
			<input type="hidden" name="parent_id" value="<?php echo $_smarty_tpl->tpl_vars['parent_id']->value;?>
" />
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Đóng</button>
			<button type="button" issue_id="<?php echo $_smarty_tpl->tpl_vars['issue_id']->value;?>
" issue_type="<?php echo $_smarty_tpl->tpl_vars['issue_type']->value;?>
" class="btn btn-primary" 
			title="Lưu lại" onClick="$Core.issue.pop_save_issue(this, event)"><i class="bx bx-check"></i> Lưu lại</button>
		</div>
	</form>
</div>

<style type="text/css">
	.issue_participant{
		float:left;
		padding:3px;
		font-size:12px;
		margin:0 3px 3px 0;
		border:1px solid #DDD;
		border-radius:30px;
		-moz-border-radius:30px;
		-webkit-border-radius:30px;
	}
</style>
<?php }
}
