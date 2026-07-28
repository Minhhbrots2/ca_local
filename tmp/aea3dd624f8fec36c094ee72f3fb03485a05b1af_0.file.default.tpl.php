<?php
/* Smarty version 3.1.33, created on 2026-07-07 11:41:30
  from '/www/wwwroot/skyrealty.futureglobal.vn/application/views/home/default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a4c837a05c4a9_21621361',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aea3dd624f8fec36c094ee72f3fb03485a05b1af' => 
    array (
      0 => '/www/wwwroot/skyrealty.futureglobal.vn/application/views/home/default.tpl',
      1 => 1783399285,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a4c837a05c4a9_21621361 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/www/wwwroot/skyrealty.futureglobal.vn/core/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?>
	<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock("home_mobile");?>

<?php }?>
<div class="content-wrapper <?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?>content_mobile_wrapper<?php }?>">
    <div class="container-xxl flex-grow-1 py-2 container-p-y">
		<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('banner');?>

		<?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?>
			<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('block_honor');?>

		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['deviceType']->value != 'phone' && 1 == 2) {?>
		<div class="form-row mb-2">
						<div class="col-12 col-lg-4 mb-2 mb-lg-0">
				<div class="item item_milestone cursor-pointer d-flex flex-column align-items-center justify-content-center gap-2 h-100 rounded-2 overflow-hidden" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getImageWH('https://ca.futurehomes.vn/application/themes/images/bg_mileston.png',535,500);?>
')">
					<a href="/m-<?php echo smarty_modifier_date_format(time(),'%Y');?>
/" class="d-flex card-body align-items-center justify-content-center h-100 w-100" title="Dấu ấn vinh quang">
						<div class="header_page text-center mb-0 text-dark">
							<h1 class="text-center title_page text-main fw-bold mb-2">Milestone <?php echo smarty_modifier_date_format(time(),"%Y");?>
</h1>
							<p class="text-upper txt_title fw-semibold mb-0">Dấu ấn vinh quang</p>
						</div>
					</a>					
				</div>
			</div>
			<div class="col-12 col-md-6 mb-2 mb-md-0 col-lg-4 flex-flow">
				<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('charity');?>

			</div>
			<div class="col-12 col-md-6 col-lg-4 flex-flow">
				<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('home_incentive');?>

			</div>			
		</div>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?>
			<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('note_calendar');?>

		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?>
			<?php if (!empty($_smarty_tpl->tpl_vars['oneTraining']->value)) {?>
			<div class="card mb-2">
				<div class="card-header d-flex align-items-center justify-content-between">
					<h5 class="card-title m-0"><span>Có thể có ích cho bạn</span></h5>
					<a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('training');?>
" class="btn btn-icon btn-sm btn-link rounded-pill">
						<i class="bx bx-link-external text-fs-14 text-muted"></i>
					</a>
				</div>
				<div class="card-body mt-0">
					<div class="item_training h-100 card no-shadow overflow-hidden cursor-pointer position-relative overflow-hidden" onclick="$Core.global.training.open(this,event)" training_id="<?php echo $_smarty_tpl->tpl_vars['oneTraining']->value['training_id'];?>
">
						<div class="image-scale">
							<img class="w-100 h-auto" src="<?php echo $_smarty_tpl->tpl_vars['oneTraining']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['oneTraining']->value['title'];?>
" width="340" height="250">
						</div>
						<span class="position-absolute zindex-2 top-50 left-50 fs-50"  style="transform: translate(-50%,-50%);left: 50%;width: 60px" ><svg height="100%" version="1.1" viewBox="0 0 68 48" width="100%"><path class="ytp-large-play-button-bg" d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z" fill="#f03"></path><path d="M 45,24 27,14 27,34" fill="#fff"></path></svg></span>
						<div class="box_info position-absolute w-100 left-0 bottom-0 text-white zindex-1 <?php echo $_smarty_tpl->tpl_vars['deviceType']->value;?>
">
							<div class="p-3">
								<h3 class="title_training mb-2 fs-18 limit_1line"><?php echo $_smarty_tpl->tpl_vars['oneTraining']->value['title'];?>
</h3>
								<div class="author fs-12">bởi <strong><?php echo $_smarty_tpl->tpl_vars['oneTraining']->value['author'];?>
</strong></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php }?>
			<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('top_ranker_25');?>

			<div class="ranking-box mb-2">
				<?php $_smarty_tpl->_assignInScope('_gId', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>
				<div class="card ranking mb-2">
					<div class="card-body">
						<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('top_ranking');?>

					</div>
				</div>
			</div>
			<div class="ranking-box mb-2">
				<?php $_smarty_tpl->_assignInScope('gId', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>
				<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('ranking_dept',array('gId'=>$_smarty_tpl->tpl_vars['gId']->value));?>

			</div>
						<div class="ranking-box mb-2">
				<?php $_smarty_tpl->_assignInScope('gId', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>
				<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('top_ranker',array('gId'=>$_smarty_tpl->tpl_vars['gId']->value));?>

			</div>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['deviceType']->value != 'phone') {?>
		<div class="card mb-2">
			<div class="card-header d-flex justify-content-between align-items-center">
				<h5 class="card-title mb-0">Truy cập nhanh</h5>
				<button type="button" data-toggle="ripple" class="btn btn-sm btn-link btn-icon btn_config_menu rounded-pill text-muted" title="Cấu hình" data-bs-toggle="tooltip" onClick="$Core.mobile.open_config_menu(this,event)" data-for="pc"><i class='bx bx-cog'></i></button>
			</div>
			<div class="card-body">
				<div id="list_menu_active" class="computer">
					<div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
						<?php
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if (true) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= 12; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
						<div class="item_menu_grid w-px-65">
							<a class="text-dark text-center text-center d-block">
								<span class="item_icon card mb-2 d-flex justify-content-center align-items-center mx-auto">
									<div class="w-px-30 animate-bg h-px-30 rounded-2"></div>
								</span>
								<span class="text-dark fw-semibold fs-12">Đang tải..</span>
							</a>
						</div>
						<?php
}
}
?>
					</div>
				</div>
			</div>
		</div>
		<?php }?>
		<?php if (!($_smarty_tpl->tpl_vars['deviceType']->value == 'phone')) {?>
					<?php }?>
		<div class="clearfix"></div>
	<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkPermissionGroup('SALE_DIRECTOR') == '1' || $_smarty_tpl->tpl_vars['clsISO']->value->checkPermissionGroup('BUSINESS_AREA') == '1') {?>		
		<?php if ($_smarty_tpl->tpl_vars['deviceType']->value != 'phone') {?>
			<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('block_honor');?>

		<?php }?>
		<div class="clearfix"></div>
		<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('home_screen_sale');?>

	<?php } elseif ($_smarty_tpl->tpl_vars['clsISO']->value->checkPermissionGroup('DIRECTOR')) {?>
		<?php if ($_smarty_tpl->tpl_vars['deviceType']->value != 'phone') {?>
			<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('block_honor');?>

		<?php }?>
		<div class="clearfix"></div>
		<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('home_screen_director');?>

	<?php } elseif ($_smarty_tpl->tpl_vars['clsISO']->value->checkPermissionGroup('ADMIN_PROJECT')) {?>
		<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkPermissionGroup('SOP')) {?>
			<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('home_screen_sop');?>

		<?php } else { ?>
		<?php if ($_smarty_tpl->tpl_vars['deviceType']->value != 'phone') {?>
			<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('block_honor');?>

		<?php }?>
		<div class="clearfix"></div>
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/fullcalendar-1.6.0/fullcalendar/fullcalendar.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" />
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/fullcalendar-1.6.0/fullcalendar/moment.min.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/fullcalendar-1.6.0/fullcalendar/fullcalendar.min.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/fullcalendar-1.6.0/fullcalendar/gcal.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
		<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('home_screen_admin');?>

		<?php }?>
	<?php } elseif ($_smarty_tpl->tpl_vars['clsISO']->value->checkPermissionGroup('ACCOUNTANT')) {?>
		<?php if ($_smarty_tpl->tpl_vars['deviceType']->value != 'phone') {?>
			<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('block_honor');?>

		<?php }?>
		<div class="clearfix"></div>
		<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('home_screen_accountant');?>

	<?php } elseif ($_smarty_tpl->tpl_vars['clsISO']->value->checkPermissionGroup('SOP')) {?>
		<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('home_screen_sop');?>

	<?php } else { ?>
		<?php if ($_smarty_tpl->tpl_vars['deviceType']->value != 'phone') {?>
			<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('block_honor');?>

		<?php }?>
		<div class="clearfix"></div>
		<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkSale() && 1 == 2) {?>
			<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('ranking-staff');?>

		<?php }?>
		<div class="form-row mb-2">
			<div class="col-12 col-lg-8 mb-2 mb-lg-0 order-0">
				<div class="card h-100">
					<div class="card-header d-flex mb-0 justify-content-between align-items-center">
						<h5 class="card-title mb-0">Hoạt động tiếp khách</h5>
						<a href="/net-dep-lao-dong.html" class="btn btn-icon btn-sm btn-link rounded-pill">
							<i class="bx bx-link-external text-fs-14 text-muted"></i>
						</a>
					</div>
					<div class="card-body ajax" data-bind="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" data-url="/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=load_top_shares&holderG=_sale"></div>
				</div>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['deviceType']->value != 'phone') {?>
			<div class="col-12 col-lg-4 order-0 sss">
				<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('home_course');?>

			</div>
			<?php }?>
		</div>	
		<div class="form-row">
			<!-- Start Left Col -->
			<div class="col-12 col-lg-8 order-0">
				<div class="sticky">
					<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkSale()) {?>
						<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock("crm_home");?>

					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['oneProfile']->value['role_id'] == @constant('_ROLE_HEAD_HR_BO')) {?>
					<div class="card mb-2">
						<div class="d-flex align-items-end">
							<div class="card-body row ajax" data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&sub=dashboard&act=load_info_staff" 
							data-options='{}'>
								<div class="p-5 text-center">
									<div class="p-2">Đang tải...</div>
								</div>
							</div>
						</div>
					</div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone' && $_smarty_tpl->tpl_vars['clsISO']->value->checkSale()) {?>
						<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock("target_sales");?>
	
					<?php }?>
					<div class="form-row mb-2">
						<div class="col-12 col-lg-6 mb-2 mb-lg-0">
							<?php $_smarty_tpl->_assignInScope('gId', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>
							<div class="card h-100">
								<div class="card-header d-flex align-items-center justify-content-between">
									<h5 class="card-title mb-0">Thống kê giao dịch <?php echo smarty_modifier_date_format(time(),'%Y');?>
</h5>
									<div class="d-flex gap-0 lh-xs text-fs-12 flex-column">
										<div class="fst-italic">Giao dịch cuối: <span class="text-main"><?php echo $_smarty_tpl->tpl_vars['transactions_configs']->value['last_deposit_date'];?>
</span></div>
										<div class="fst-italic">Bao lâu bạn chưa có giao dịch? 
											<span class="badge bg-label-danger"><?php echo $_smarty_tpl->tpl_vars['transactions_configs']->value['days_since_sold'];?>
 ngày</span>
										</div>
									</div>
								</div>
								<div class="card-body ajax" gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=load_person_billing" data-options="{}">
									<div class="row">
										<div class="col-12 col-md-6">
											<div class="animate-bg rounded-2 w-100 h-px-20 mb-2"></div>
											<div class="d-flex gap-5 align-items-center justify-content-between mb-2">
												<div class="animate-bg rounded-2 flex-fill h-px-20"></div>
												<div class="animate-bg rounded-2 flex-fill h-px-20"></div>
											</div>
											<div class="animate-bg rounded-2 w-100 h-px-20 mb-2"></div>
										</div>
										<div class="col-12 col-md-6">
											<div class="animate-bg rounded-2 w-100 h-px-20 mb-2"></div>
											<div class="d-flex gap-5 align-items-center justify-content-between mb-2">
												<div class="animate-bg rounded-2 flex-fill h-px-20"></div>
												<div class="animate-bg rounded-2 flex-fill h-px-20"></div>
											</div>
											<div class="animate-bg rounded-2 w-100 h-px-20 mb-2"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-6">
							<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('commission');?>

						</div>
					</div>					
					<div class="form-row mb-2">
						<!-- Start col sub left -->
						<div class="col-12 col-lg-8">
							<?php $_smarty_tpl->_assignInScope('gId', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>
							<div class="card h-100 mb-2">
								<div class="card-header d-flex align-items-center justify-content-between">
									<h5 class="card-title mb-0">Thống kê bán hàng</h5>
									<select class="form-control w-px-125 form-control-sm form-select" name="year" gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" 
										onChange="$Core.dashboard.reload(this,event)">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_years']->value, '_year');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_year']->value) {
?>
										<option<?php if ($_smarty_tpl->tpl_vars['_year']->value == smarty_modifier_date_format(time(),"%Y")) {?> selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['_year']->value;?>
">Năm <?php echo $_smarty_tpl->tpl_vars['_year']->value;?>
</option>
										<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</select>
								</div>
								<div class="card-body ajax" data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=load_person_chart" 
								data-options="{}" gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
">
									<div class="d-flex align-items-end justify-content-center gap-5 w-100 px-3 h-px-250">
										<div class="animate-bg w-px-50 rounded-2 h-px-200"></div>
										<div class="animate-bg w-px-50 rounded-2 h-px-200"></div>
										<div class="animate-bg w-px-50 rounded-2 h-px-150"></div>
										<div class="animate-bg w-px-50 rounded-2 h-px-100"></div>
										<?php if ($_smarty_tpl->tpl_vars['deviceType']->value != 'phone') {?>
										<div class="animate-bg w-px-50 rounded-2 h-px-50"></div>
										<div class="animate-bg w-px-50 rounded-2 h-px-150"></div>
										<div class="animate-bg w-px-50 rounded-2 h-px-200"></div>
										<div class="animate-bg w-px-50 rounded-2 h-px-50"></div>
										<div class="animate-bg w-px-50 rounded-2 h-px-100"></div>
										<div class="animate-bg w-px-50 rounded-2 h-px-150"></div>
										<div class="animate-bg w-px-50 rounded-2 h-px-100"></div>
										<div class="animate-bg w-px-50 rounded-2 h-px-250"></div>
										<?php }?>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-4">
							<div class="card h-100 mb-2 mb-lg-0">
								<div class="card-header d-flex align-items-center justify-content-between">
									<h5 class="card-title mb-0">Giao dịch gần đây</h5>
									<a href="/giao-dich.html" class="btn btn-icon btn-sm btn-link rounded-pill">
										<i class="bx bx-link-external text-fs-14 text-muted"></i>
									</a>
								</div>
								<div class="card-body ajax" data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&sub=dashboard&act=billing_me" 
								data-options='{}'>
									<?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['list_preloaders']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = min(($__section_i_1_loop - 0), 5);
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
									<div class="w-100 mb-2">
										<div class="animate-bg w-75 rounded-2 h-px-20 mb-2"></div>
										<div class="w-100 gap-2 d-flex align-items-center justify-content-between">
											<div class="animate-bg w-40 rounded-2 h-px-20"></div>
											<div class="animate-bg w-50 rounded-2 h-px-20"></div>
										</div>
									</div>
									<?php
}
}
?>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="form-row mb-2">
						<div class="col-12 col-lg-8 mb-2 mb-lg-0">
							<?php $_smarty_tpl->_assignInScope('gId', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>
							<div class="card h-100">
								<div class="card-header zindex-1 d-flex align-items-center justify-content-between">
									<h5 class="card-title">Thống kê quỹ căn</h5>
									<div class="w-px-150">
										<select gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" class="form-control form-control-sm form-select" 
										name="project_id" onChange="$Core.dashboard.reload(this, event)">
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_projects']->value, '_oProject');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oProject']->value) {
?>
											<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkItemInArray(@constant('_BLOCK_TYPE_HIGHLEVEL_SALE'),$_smarty_tpl->tpl_vars['_oProject']->value['list_block_type'])) {?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['_oProject']->value['project_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_oProject']->value['title'];?>
</option>
											<?php }?>
											<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										</select>
									</div>
								</div>
								<div gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" class="card-body ajax" data-url="/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&sub=dashboard&act=load_stock_project"  data-options='{}'>
									<div class="d-flex justify-content-center"></div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-4 log_stock">
							<?php $_smarty_tpl->_assignInScope('gId', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>
							<div class="card h-100">
								<div class="card-header">
									<div class="d-flex justify-content-between align-items-center">
										<h5 class="card-title mb-0">Quỹ căn HOT nhất</h5>
										<div class="btn-group d-flex" role="group" aria-label="Sắp xếp">
											<input type="radio" gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" class="btn-check" name="filter_by" id="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
_view" 
												onChange="$Core.dashboard.reload(this, event)" value="view" />
											<label data-toggle="ripple" class="btn btn-sm btn-outline-default" for="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
_view">Lượt xem</label>
											<input type="radio" gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" class="btn-check btn-sm" name="filter_by" id="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
_price" 
												onChange="$Core.dashboard.reload(this, event)" value="price" checked="checked" />
											<label data-toggle="ripple" class="btn btn-sm btn-outline-default" for="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
_price">Rẻ nhất</label>
										</div>
									</div>
								</div>
								<div class="card-body ajax" gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&sub=dashboard&act=load_top_search_stock" data-options="{}">
									<div class="animate-bg rounded-2 mb-2 h-px-20 w-100"></div>
									<div class="animate-bg rounded-2 mb-2 h-px-20 w-100"></div>
									<div class="animate-bg rounded-2 mb-2 h-px-20 w-100"></div>
									<div class="animate-bg rounded-2 mb-2 h-px-20 w-100"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="form-row mb-2">
						<div class="col-12 col-md-6 mb-2 mb-lg-0 flex-fill">
							<div class="card h-100">
								<div class="card-header d-flex align-items-center justify-content-between">
									<h5 class="card-title mb-0">Giao dịch mới nhất.</h5>
									<a><i class="bx bx-help-circle"></i></a>
								</div>
								<div class="card-body ajax" data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=dashboard&tp=top_billing" 
								data-options='{}'>
									<div class="loader text-center py-8">
										<img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/loading.gif" />
										<p>Đang tải...</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 mb-2 mb-lg-0 flex-fill">
							<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('top_staff');?>

						</div>
					</div>
					<div class="form-row">						
						<div class="col-12 col-md-6 mb-2 mb-lg-0 ajax" data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=report&act=load_report_top_search" 
							data-options='{}'>
						</div>
						<div class="col-12 col-md-6 mb-2 mb-lg-0 ajax" data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=report&act=load_report_block_top_search" 
							data-options='{}'>
						</div>
					</div>
				</div>
			</div>
			<!-- End Left Col -->
			<!-- Start Right Col -->
			<div class="col-12 col-md-12 col-lg-4 order-1">
				<div class="mb-2">
					<?php $_smarty_tpl->_assignInScope('gId', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>
					<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('home_booking',array('gId'=>$_smarty_tpl->tpl_vars['gId']->value));?>

				</div>
			<?php if ($_smarty_tpl->tpl_vars['deviceType']->value != 'phone') {?>		
				<?php if (!empty($_smarty_tpl->tpl_vars['oneTraining']->value)) {?>
				<div class="card mb-2">
					<div class="card-header d-flex align-items-center justify-content-between">
						<h5 class="card-title m-0"><span>Có thể có ích cho bạn</span></h5>
						<a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('training');?>
" class="text-decoration-underline" title="Xem tất cả">Xem tất cả</a>
					</div>
					<div class="card-body mt-0">
						<div class="item_training h-100 card no-shadow overflow-hidden cursor-pointer position-relative overflow-hidden" onclick="$Core.global.training.open(this,event)" training_id="<?php echo $_smarty_tpl->tpl_vars['oneTraining']->value['training_id'];?>
">
							<div class="image-scale">
								<img class="w-100 h-auto" src="<?php echo $_smarty_tpl->tpl_vars['oneTraining']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['oneTraining']->value['title'];?>
" width="340" height="250">
							</div>
							<span class="position-absolute zindex-2 top-50 left-50 fs-50"  style="transform: translate(-50%,-50%);left: 50%;width: 60px" >
								<svg height="100%" version="1.1" viewBox="0 0 68 48" width="100%">
									<path class="ytp-large-play-button-bg" d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z" fill="#f03"></path>
									<path d="M 45,24 27,14 27,34" fill="#fff"></path>
								</svg>
							</span>
							<div class="box_info position-absolute w-100 left-0 bottom-0 text-white zindex-1">
								<div class="p-3">
									<h3 class="title_training mb-2 limit_1line"><?php echo $_smarty_tpl->tpl_vars['oneTraining']->value['title'];?>
</h3>
									<div class="author mb-2">bởi <strong><?php echo $_smarty_tpl->tpl_vars['oneTraining']->value['author'];?>
</strong></div>
									<div class="d-flex flex-wrap justify-content-between">
										<div class="mb-1 w-50 flex-fill">
											<i class='bx bx-video me-1' ></i><?php echo $_smarty_tpl->tpl_vars['oneTraining']->value['total_lesson'];?>
 bài học
										</div>	
										<div class="mb-1 time w-50 flex-fill">
											<i class='bx bx-time me-1' ></i><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->convertTimeMinute($_smarty_tpl->tpl_vars['oneTraining']->value['time_training']);?>

										</div>		
										<?php if (!empty($_smarty_tpl->tpl_vars['oneTraining']->value['cat_name'])) {?>
											<div class="mb-1 time flex-fill">
												<i class='bx bx-book-content me-1'></i><?php echo $_smarty_tpl->tpl_vars['oneTraining']->value['cat_name'];?>

											</div>
										<?php }?>
										<?php if (!empty($_smarty_tpl->tpl_vars['oneTraining']->value['total_profile_learning'])) {?>
											<div class="mb-1 time w-auto flex-fill">
												<i class='bx bx-user me-1' ></i><?php echo $_smarty_tpl->tpl_vars['oneTraining']->value['total_profile_learning'];?>
 người đã học
											</div>
										<?php }?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php }?>				
				<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('note_calendar');?>

				<?php if ($_smarty_tpl->tpl_vars['oneProfile']->value['role_id'] == @constant('_ROLE_HEAD_HR_BO')) {?>
					<div class="card mb-2">
						<div class="card-header">
							<h5 class="d-flex align-items-center">
								<img class="mr-2" src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/birthday.png" width="20" /> 
								<span>Chúc mừng sinh nhật</span>
							</h5>
							<?php $_smarty_tpl->_assignInScope('toId', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>
							<ul class="nav nav-pills" role="tablist">
								<li class="nav-item js__birthday-tab-item">
									<button onClick="$Core.birthday.set_time(this, event)" toId="<?php echo $_smarty_tpl->tpl_vars['toId']->value;?>
" holderG="7days" type="button" class="nav-link js__birthday-tab-link" role="tab" 
									data-bs-toggle="tab" aria-selected="true">7 ngày</button>
								</li>
								<li class="nav-item js__birthday-tab-item">
									<button type="button" onClick="$Core.birthday.set_time(this, event)" toId="<?php echo $_smarty_tpl->tpl_vars['toId']->value;?>
" holderG="30days" class="nav-link js__birthday-tab-link active" role="tab">30 ngày</button>
								</li>
							</ul>
						</div>
						<div class="card-body">
							<div class="tab-content p-0">
								<div class="tab-pane fade show active" role="tabpanel">
									<div class="ajax" data-bind="<?php echo $_smarty_tpl->tpl_vars['toId']->value;?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=staff_birthday" data-options="{}">
										<div class="loader text-center py-3">
											<img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/loading.gif" width="66px" />
											<p>Loading...</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkPermissionGroup("HEAD_SALE")) {?>
				<div class="log_stock ajax mb-2" data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=load_top_search_stock" 
					data-options="{}">
					<div class="card h-100">
						<div class="card-header">
							<h5 class="card-title mb-0">Thống kê lượt tra cứu 24h qua</h5>
						</div>
						<div class="card-body" >
							<div class="animate-bg rounded-2 mb-2 h-px-20 w-100"></div>
							<div class="animate-bg rounded-2 mb-2 h-px-20 w-100"></div>
							<div class="animate-bg rounded-2 mb-2 h-px-20 w-100"></div>
							<div class="animate-bg rounded-2 mb-2 h-px-20 w-100"></div>
						</div>
					</div>
				</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkSale() || $_smarty_tpl->tpl_vars['clsISO']->value->_DEV()) {?>
					<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock("target_sales");?>
				
				<?php }?>
				<div class="mb-2">
					<?php $_smarty_tpl->_assignInScope('gId', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>
										<div class="card ranking h-100">
						<div class="card-body">
							<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('top_ranking');?>

						</div>
					</div>
				</div>
				<?php $_smarty_tpl->_assignInScope('gId', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>
				<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('ranking_dept',array('gId'=>$_smarty_tpl->tpl_vars['gId']->value));?>

				<?php $_smarty_tpl->_assignInScope('gId', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>
				<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('top_ranker',array('gId'=>$_smarty_tpl->tpl_vars['gId']->value));?>

				<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkSale() && 1 == 2) {?>
					<?php $_smarty_tpl->_assignInScope('gId', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>
					<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('top_ranker_dep',array('gId'=>$_smarty_tpl->tpl_vars['gId']->value));?>

				<?php }?>
			<?php }?>
			</div>
		</div>
		<?php }?>
    </div>
</div>
<?php echo $_smarty_tpl->tpl_vars['scriptJs']->value;
}
}
