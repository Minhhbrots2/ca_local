<?php
/* Smarty version 3.1.33, created on 2026-07-06 15:32:41
  from '/www/wwwroot/skyrealty.futureglobal.vn/application/blocks/menu_profile/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a4b68291452c8_46221476',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd89216b3c94ca42839a81e69d3c930fa76f85b7' => 
    array (
      0 => '/www/wwwroot/skyrealty.futureglobal.vn/application/blocks/menu_profile/index.tpl',
      1 => 1783314233,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a4b68291452c8_46221476 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="py-2 bg-white position-sticky top-0 zindex-1">

	<a class="dropdown-item cursor-pointer" profile_id="<?php echo $_smarty_tpl->tpl_vars['profile_id']->value;?>
" 

		onClick="$Core.member.view_profile(this, event); return false;">

		<div class="d-flex">

			<div class="flex-shrink-0 me-3"><div class="avatar avatar-online">

				<img src="<?php echo $_smarty_tpl->tpl_vars['clsProfile']->value->getAvatar($_smarty_tpl->tpl_vars['profile_id']->value,$_smarty_tpl->tpl_vars['oneProfile']->value,40,40);?>
" 

					onerror="this.src='<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/avatars/1.png'" class="w-px-40 h-px-40 rounded-circle" />

			</div></div>

			<div class="flex-grow-1">

				<span class="fw-semibold d-block"><?php echo $_smarty_tpl->tpl_vars['oneProfile']->value['full_name'];?>
</span>

				<div class="d-flex gap-1 fs-13 align-items-center">

					<span class="text-warning"><?php echo $_smarty_tpl->tpl_vars['oneProfile']->value['role_name'];?>
</span>

					<span>-</span>

					<span data-bs-toggle="tooltip" title="Điểm Loyalty"<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkPermissionGroup('DIRECTOR')) {?> onClick="$Core.global.open_Lpoint(this, event)" staff_id="<?php echo $_smarty_tpl->tpl_vars['profile_id']->value;?>
"<?php }?> class="d-flex gap-1 cursor-pointer align-items-center">

						<img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/point.png" width="12px" /> 

						<strong class="text-warning fs-6">

							<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkPermissionGroup('DIRECTOR')) {?>

								Ultimate

							<?php } else { ?>

								<?php echo $_smarty_tpl->tpl_vars['oneProfile']->value['total_Lpoint'];?>


							<?php }?>

						</strong>

					</span>

				</div>

			</div>

		</div>

	</a>

	<div class="dropdown-divider"></div>

</div>

<ul class="overflow-y-auto list-unstyled" style="max-height:calc(100vh - 300px);">

	<li>

		<div class="dropdown-item d-flex justify-content-between align-items-center">

			<a href="javascript:void();" data-toggle="ripple" profile_id="<?php echo $_smarty_tpl->tpl_vars['profile_id']->value;?>
" 

				onClick="$Core.member.view_profile(this, event); return false;">

				<i class="bx bx-user me-1"></i>

				<span class="align-middle">Hồ sơ</span>

			</a>		

			<div class="d-flex gap-1 align-items center">							

				<?php if (!empty($_smarty_tpl->tpl_vars['link_profile_sale']->value)) {?>

				<a class="btn btn-sm btn-success fs-11" href="<?php echo $_smarty_tpl->tpl_vars['link_profile_sale']->value;?>
" target="_blank" >

					<span class="align-middle">Xem</span>

				</a>

				<?php }?>

				<a class="btn btn-sm btn-primary fs-11" href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('edit_MOC');?>
" target="_blank" >

					<i class="bx bx-pencil fs-12"></i>

					<span class="align-middle">Edit MOC</span>

				</a>

			</div>

		</div>

	</li>	

	<li><a href="https://docs.google.com/document/d/1aSEgRZoSULwOaKuBtLIBVLgZtamT9AOYVDkfHmcvs24/edit?tab=t.0" target="_blank" class="dropdown-item text-main fw-bold" title="Chứng nhận đại lý">

		<i class="bx bx-check-shield"></i>

		<span class="align-middle">Chứng nhận đại lý</span>

	</a></li>

	<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkSale() || $_smarty_tpl->tpl_vars['clsISO']->value->_DEV()) {?>

		<li >

			<a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('dashboard_sale');?>
" class="dropdown-item cursor-pointer d-flex align-items-center  text-warning" data-toggle="ripple">

				<svg class="menu-icon tf-icons" xmlns="http://www.w3.org/2000/svg" width="20" height="20"  

				fill="currentColor" viewBox="0 0 24 24" >

				<path d="M20 11h-6c-.55 0-1 .45-1 1v8c0 .55.45 1 1 1h6c.55 0 1-.45 1-1v-8c0-.55-.45-1-1-1m-1 8h-4v-6h4zm-9-4H4c-.55 0-1 .45-1 1v4c0 .55.45 1 1 1h6c.55 0 1-.45 1-1v-4c0-.55-.45-1-1-1m-1 4H5v-2h4zM20 3h-6c-.55 0-1 .45-1 1v4c0 .55.45 1 1 1h6c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1m-1 4h-4V5h4zm-9-4H4c-.55 0-1 .45-1 1v8c0 .55.45 1 1 1h6c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1m-1 8H5V5h4z"></path>

				</svg>

				<div class="text-truncate" data-i18n="Support">Tổng quan hiệu suất cá nhân</div>

			</a>

		</li>

	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkSale() || $_smarty_tpl->tpl_vars['clsISO']->value->checkDEV()) {?>

	<li><a data-toggle="ripple" class="dropdown-item cursor-pointer text-danger" 

		title="Đăng ký ngân sách MKT" onClick="$Core.marketing.open_regis(this, event)">

		<i class="bx bxl-meta"></i>

		<span class="align-middle">Đăng ký ngân sách MKT</span>

	</a></li>

	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkPermissionGroup('DIRECTOR')) {?>

	<!-- <li><a data-toggle="ripple" class="dropdown-item js__add-report-today <?php if ($_smarty_tpl->tpl_vars['is_send_report_today']->value == '1' || !$_smarty_tpl->tpl_vars['clsReport']->value->check_time_send_report()) {?>disabled<?php } else { ?>text-danger<?php }?>" onClick="$Core.global.report.open(this, event)" 

		href="javascript:void(0);">

		<i class="bx bx-bell-plus"></i>

		<span class="align-middle">Thêm báo cáo hàng ngày</span>

	</a></li>

	<li><a data-toggle="ripple" class="dropdown-item text-primary" href="/bao-cao.html" 

		title="Báo cáo hiệu suất bán hàng">

		<i class="bx bxs-report"></i>

		<span class="align-middle">Báo cáo hiệu quả hàng ngày</span>

	</a></li> -->

	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkPermissionGroup('DIRECTOR')) {?>

	<li><a data-toggle="ripple" class="dropdown-item text-main" href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('report_ns_club');?>
" 

		title="Báo cáo lan tỏa CLB ngôi sao">

		<i class='bx bx-objects-horizontal-left'></i>

		<span class="align-middle">Báo cáo lan tỏa CLB ngôi sao</span>

	</a></li>

	<li><a data-toggle="ripple" onClick="$Core.global.crm.req_customer(this, event)" 

	href="javascript:void(0);" class="dropdown-item text-info" title="Yêu cầu cấp DATA">

		<i class='bx bx-user-voice'></i>

		<span class="align-middle">QL. Yêu cầu cấp khách hàng</span>

	</a></li>

	<?php }?>

	<li><a class="dropdown-item text-warning" href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('quote');?>
" >

		<i class='bx bxs-quote-alt-left me-1'></i>

		<span class="align-middle">Lời trích dẫn</span>

	</a></li>

	<li><a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('training');?>
" class="dropdown-item" title="Trung tâm đào tạo">

		<i class='bx bx-play-circle'></i>

		<span class="align-middle">Trung tâm đào tạo</span>

	</a></li>

	<li><a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('course');?>
" class="dropdown-item" title="Sự kiện+Đào tạo">

		<i class='bx bx-slideshow'></i>

		<span class="align-middle">Sự kiện+Đào tạo</span>

	</a></li>

	<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkPermission("message_sale")) {?>

	<li><a data-toggle="ripple" class="dropdown-item" href="javascript:void()" profile_id="<?php echo $_smarty_tpl->tpl_vars['profile_id']->value;?>
" 

	onClick="$Core.today.open_stock_today(this, event);" data-action="_open">

		<i class='bx bx-message-rounded-dots me-1'></i>

		<span class="align-middle">Căn hộ nổi bật mỗi ngày</span>

	</a></li>

	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkPermission('access_staff')) {?>

	<li><a data-toggle="ripple" class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('staff');?>
">

		<i class="bx bx-group"></i>

		<span class="align-middle">Quản lý nhân viên</span>

	</a></li>

	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkPermission('issue_access')) {?>

	<li><a data-toggle="ripple" class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('issue');?>
">

		<i class="bx bx-task"></i>

		<span class="align-middle">Quản lý công việc</span>

	</a></li>

	<?php }?>

	
	<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkPermissionGroup('ACCOUNTANT')) {?>

	<li><a data-toggle="ripple" class="dropdown-item text-main" href="javascript:void(0)" class="nav-link" title="Căn hộ yêu thích" onclick="$Core.global.fund.open_cash(this,event)">

		<i class='bx bx-wallet-alt'></i>

		<span class="align-middle">Cập nhật tiền tài khoản</span>

	</a></li>

	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkPermission('okrs_access')) {?>

	<li><a data-toggle="ripple" class="dropdown-item" href="/okrs.html">

		<i class="bx bx-shape-circle"></i>

		<span class="align-middle text-truncate" data-i18n="OKRs">OKRs</span>

	</a></li>

	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkPermission('manage_stock_agency')) {?>

	<li><a data-toggle="ripple" class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('agency');?>
">

		<i class='bx bx-command'></i>

		<span class="align-middle text-truncate" data-i18n="OKRs">Quản lý đại lý</span>

	</a></li>

	<?php }?>	

	<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkPermission('zalo_group_access')) {?>

	<li><a data-toggle="ripple" class="dropdown-item " href="/zalo-group/manager.html">

		<i class='bx bx-code'></i>

		<span class="align-middle text-truncate" data-i18n="OKRs">Nhóm Zalo check nguồn</span>

	</a></li>

	<?php }?>

	<!-- <?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkPermission('access_quiz') && $_smarty_tpl->tpl_vars['clsISO']->value->checkDEV()) {?>

	<li><a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('quiz',1);?>
">

		<i class='bx bx-question-mark'></i>

		<span class="align-middle">Quản lý trắc nghiệm</span>

	</a></li>

	<?php }?>					

	<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkDEV()) {?>

	<li><a class="dropdown-item text-warning" href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('quiz',0);?>
me">

		<i class='bx bxs-pen' ></i>

		<span class="align-middle">Trắc nghiệm</span>

	</a></li>

	<?php }?> -->

	<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkPermission('update_stock_sold')) {?>

	<hr class="dropdown-divider" />

	<li><a data-toggle="ripple" href="javascript:void(0)" class="dropdown-item text-danger" 

	onClick="$Core.helper.open_stock_sold(this, event)">

		<i class='bx bx-shopping-bag'></i>

		<span class="align-middle">Cập nhật căn bán</span>

	</a></li>

	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkDEV()) {?>

	<li><a data-toggle="ripple" href="javascript:void(0)" class="dropdown-item text-danger" 

		onClick="$Core.helper.stock_lock.open_stock_lock(this, event)">

		<i class='bx bx-shopping-bag'></i>

		<span class="align-middle">Khóa căn độc quyền</span>

	</a></li>

	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkPermission('attendance_access')) {?>

	<li><a data-toggle="ripple" href="/attendance.html" class="dropdown-item">

		<i class='bx bx-cycling'></i>

		<span class="align-middle">Import Chấm công</span>

	</a></li>

	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkPermission('policy_stock')) {?>

	<li><a data-toggle="ripple" href="javascript:void(0)" class="dropdown-item text-primary" 

	onClick="$Core.helper.open_policy(this, event)" tp="_update">

		<i class='bx bx-check-shield'></i>

		<span class="align-middle">Chính sách bán hàng</span>

	</a></li>

	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkPermission('policy_stock') || $_smarty_tpl->tpl_vars['profile_id']->value == @constant('_PROFILE_BTTH_ID')) {?>

	<li><a data-toggle="ripple" href="javascript:void(0)" class="dropdown-item" 

	onClick="$Core.global.stock.open_import(this, event)">

		<i class='bx bx-check-square'></i>

		<span class="align-middle">Cập nhật bảng hàng</span>

	</a></li>

	<li><a data-toggle="ripple" href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('crawl_highfloor');?>
" class="dropdown-item text-success" >

		<i class='bx bxs-file-doc'></i>

		<span class="align-middle">Cập nhật cao tầng excel</span>

	</a></li>

	<li><a data-toggle="ripple" href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('crawl_lowfloor');?>
" class="dropdown-item text-warning" >

		<i class='bx bxs-file-doc'></i>

		<span class="align-middle">Cập nhật thấp tầng excel</span>

	</a></li>

	<?php }?>	

	<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkPermissionGroup('DIRECTOR') || $_smarty_tpl->tpl_vars['clsISO']->value->checkDEV()) {?>

	<li><a class="dropdown-item cursor-pointer" data-toggle="ripple" 

		onClick="$Core.helper.open_config_time(this, event)" title="Cài đặt thời gian">

		<i class='bx bx-time-five'></i>

		<span class="align-middle">Cài đặt thời gian</span>

	</a></li>

	<?php }?>

</ul>

<div class="py-2 bg-white position-sticky bottom-0 zindex-1">

	<div class="dropdown-divider"></div>

	<a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('logout');?>
">

		<i class="bx bx-power-off me-2"></i>

		<span class="align-middle">Đăng xuất</span>

	</a>

</div><?php }
}
