<?php
/* Smarty version 3.1.33, created on 2026-07-24 15:08:04
  from '/www/wwwroot/skyrealty.c-a.vn/application/blocks/home_screen_admin/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a631d648d6152_93794224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86f0b991499c05701e2fa9d327ce1e43adf26523' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/blocks/home_screen_admin/index.tpl',
      1 => 1784880480,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a631d648d6152_93794224 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/www/wwwroot/skyrealty.c-a.vn/core/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="form-row mb-2">
	<div class="col-12 col-lg-4 mb-2 mb-lg-0">
		<div class="dbx-card h-100">
			<?php $_smarty_tpl->_assignInScope('gId', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>
			<div class="dbx-card__head">
				<span class="dbx-card__ic"><i class="bx bx-dollar-circle"></i></span>
				<div class="dbx-card__ttl">
					<h5 class="dbx-card__title">Doanh số</h5>
					<small class="dbx-card__sub">Doanh số bán hàng <span class="txt_block_code"><?php echo $_smarty_tpl->tpl_vars['oneBLock']->value['property_code'];?>
</span></small>
				</div>
				<div class="dbx-card__filter">
					<select class="form-control form-control-sm form-select" name="month" gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" onChange="$Core.admin.reload(this,event)">
						<option value="">Tháng</option>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_months']->value, '_month');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_month']->value) {
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['_month']->value;?>
">T<?php echo $_smarty_tpl->tpl_vars['_month']->value;?>
</option>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
					<select class="form-control form-control-sm form-select" name="year" gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" onChange="$Core.admin.reload(this,event)">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_years']->value, '_year');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_year']->value) {
?>
						<option<?php if ($_smarty_tpl->tpl_vars['_year']->value == smarty_modifier_date_format(time(),"%Y")) {?> selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['_year']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['_year']->value;?>
</option>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
				</div>
			</div>
			<div class="dbx-card__body">
				<div class="ajax" gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&sub=dashboard&act=load_sales_overview_admin">
					<div class="p-4 text-center">
						<div class="py-1">Loading...</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-12 col-lg-4 mb-2 mb-lg-0">
		<div class="dbx-card h-100">
			<?php $_smarty_tpl->_assignInScope('gId', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>
			<div class="dbx-card__head">
				<span class="dbx-card__ic"><i class="bx bx-receipt"></i></span>
				<div class="dbx-card__ttl">
					<h5 class="dbx-card__title">Giao dịch ký HĐMB</h5>
					<small class="dbx-card__sub">Thống kê giao dịch ký HĐMB</small>
				</div>
				<div class="dbx-card__filter">
					<select class="form-control form-control-sm form-select" name="month" gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" onChange="$Core.admin.reload(this,event)">
						<option value="">Tháng</option>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_months']->value, '_month');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_month']->value) {
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['_month']->value;?>
">T<?php echo $_smarty_tpl->tpl_vars['_month']->value;?>
</option>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
					<select class="form-control form-control-sm form-select" name="year" gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" onChange="$Core.admin.reload(this,event)">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_years']->value, '_year');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_year']->value) {
?>
						<option<?php if ($_smarty_tpl->tpl_vars['_year']->value == smarty_modifier_date_format(time(),"%Y")) {?> selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['_year']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['_year']->value;?>
</option>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
				</div>
			</div>
			<div class="dbx-card__body">
				<div class="ajax" gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&sub=dashboard&act=load_billing_overview_admin">
					<div class="p-4 text-center">
						<div class="py-1">Loading...</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-12 col-lg-4">
		<div class="dbx-card h-100">
			<div class="dbx-card__head">
				<span class="dbx-card__ic"><i class="bx bx-box"></i></span>
				<h5 class="dbx-card__title">Thống kê quỹ ôm MWF</h5>
				<a href="/billing/report/mwf.html" class="dbx-card__link" title="Báo cáo"><i class="bx bx-line-chart-down"></i></a>
			</div>
			<div class="dbx-card__body ajax" data-options='{}' data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&sub=admin&act=load_stock_hug">
				<div class="animate-bg rounded-2 mb-2 h-px-20 w-100"></div>
				<div class="animate-bg rounded-2 mb-2 h-px-20 w-100"></div>
				<div class="animate-bg rounded-2 mb-2 h-px-20 w-100"></div>
				<div class="animate-bg rounded-2 mb-2 h-px-20 w-100"></div>
			</div>
		</div>
	</div>
</div>
<div class="form-row mb-2">
	<div class="col-12 col-lg-8">		
		<div class="sticky">
			<div class="dbx-card mb-2">
				<?php $_smarty_tpl->_assignInScope('gId', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>
				<div class="dbx-card__head">
					<span class="dbx-card__ic"><i class="bx bx-line-chart"></i></span>
					<div class="dbx-card__ttl">
						<h5 class="dbx-card__title">Biểu đồ doanh số</h5>
						<small class="dbx-card__sub">Biểu đồ tăng trưởng doanh số</small>
					</div>
					<div class="dbx-card__filter">
						<select class="form-control form-control-sm form-select" name="month" gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" onChange="$Core.dashboard.reload(this,event)">
							<option value="">Tháng</option>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_months']->value, '_month');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_month']->value) {
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['_month']->value;?>
">T<?php echo $_smarty_tpl->tpl_vars['_month']->value;?>
</option>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</select>
						<select class="form-control form-control-sm form-select" name="year" gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" onChange="$Core.dashboard.reload(this,event)">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_years']->value, '_year');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_year']->value) {
?>
							<option<?php if ($_smarty_tpl->tpl_vars['_year']->value == smarty_modifier_date_format(time(),"%Y")) {?> selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['_year']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['_year']->value;?>
</option>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</select>
						<?php if ($_smarty_tpl->tpl_vars['deviceType']->value != 'phone' && 1 == 2) {?>
						<button type="button" onClick="$Core.dashboard.open_full(this, event)" tp="load_billing_chart" class="btn d-none d-lg-block btn-icon btn-outline-default"><i class='bx bx-windows'></i></button>
						<?php }?>
					</div>
				</div>
				<div class="dbx-card__body">
					<div class="ajax" gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&sub=dashboard&act=load_billing_chart" data-options='{}'>
						<div class="animate-bg rounded-2 mb-2 h-px-20 w-100"></div>
						<div class="animate-bg rounded-2 mb-2 h-px-20 w-100"></div>
						<div class="animate-bg rounded-2 mb-2 h-px-20 w-100"></div>
						<div class="animate-bg rounded-2 mb-2 h-px-20 w-100"></div>
						<div class="animate-bg rounded-2 mb-2 h-px-20 w-100"></div>
						<div class="animate-bg rounded-2 mb-2 h-px-20 w-100"></div>
						<div class="animate-bg rounded-2 mb-2 h-px-20 w-100"></div>
						<div class="animate-bg rounded-2 mb-2 h-px-20 w-100"></div>
					</div>
				</div>
			</div>
			<!-- <div class="card mb-2">
				<div class="card-header mb-0">
					<h5 class="card-title mb-0">Danh sách cập nhật đại lý</h5>
					<small class="text-muted">Thống kê cập nhật bảng hàng đại lý</small> 
				</div>
				<div id="list_agent_log" class="w-100 box_loadMore card-body" style="min-height:300px;">
					<div class="p-5 text-center">
						<div class="p-5 text-muted">Loading...</div>
					</div>
				</div>
			</div> -->
			<div class="dbx-card mb-2">
				<div class="dbx-card__head">
					<span class="dbx-card__ic"><i class="bx bx-history"></i></span>
					<div class="dbx-card__ttl">
						<h5 class="dbx-card__title">Lịch sử check</h5>
						<small class="dbx-card__sub">10 căn kiểm tra gần nhất</small>
					</div>
				</div>
				<div class="dbx-card__body dbx-card__body--flush">
					<div class="overflow-x-auto text-nowrap">
						<table class="table mb-0" border="0" cellpadding="0" cellspacing="0" width="100%">
							<thead><tr>
								<th>Mã căn</th>
								<th>Phân khu</th>
								<th>PN · Hướng</th>
								<th class="text-end">Giá (VAT)</th>
								<th class="text-center">Trạng thái</th>
								<th class="text-end">Xem lúc</th>
							</tr></thead>
							<tbody class="ajax" data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&sub=dashboard&act=load_search_history" data-options='{}'>
								<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['list_preloaders']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = min(($__section_i_0_loop - 0), 5);
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
								<tr>
									<td colspan="6"><div class="animate-bg h-px-15 w-100 rounded-2"></div></td>
								</tr>
								<?php
}
}
?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- End Lịch sử check -->
			<div class="form-row mb-2">
				<div class="col-12 col-lg-6 mb-2 mb-lg-0">
					<div class="dbx-card h-100">
						<div class="dbx-card__head">
							<span class="dbx-card__ic"><i class="bx bx-list-check"></i></span>
							<div class="dbx-card__ttl">
								<h5 class="dbx-card__title">Yêu cầu cập nhật PTG</h5>
								<small class="dbx-card__sub">Các yêu cầu PTG mới nhất</small>
							</div>
							<a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('request_ptg');?>
" class="dbx-card__link" title="Xem tất cả"><i class="bx bx-link-external"></i></a>
						</div>
						<div class="dbx-card__body dbx-card__body--flush">
							<div class="table-container overflow-x-auto text-nowrap">
								<table class="table mb-0" cellpadding="0" cellspacing="0">
									<thead><tr>
										<?php if ($_smarty_tpl->tpl_vars['deviceType']->value != 'phone') {?>
										<th width="5%" class="text-center">STT</th>
										<?php }?>
										<th width="120px">Mã căn</th>
										<th class="text-center">Người yêu cầu</th>
										<th class="text-center" width="100px"></th>
									</tr></thead>
									<tbody class="ajax home_request_ptg" data-url="/index.php?mod=request_ptg&act=load_request_PTG">
										<?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['list_preloaders']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = min(($__section_i_1_loop - 0), 12);
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
										<tr>
											<?php if ($_smarty_tpl->tpl_vars['deviceType']->value != 'phone') {?>
											<td><div class="animate-bg h-px-20 w-100 rounded-2"></div></td>
											<?php }?>
											<td><div class="animate-bg h-px-20 w-100 rounded-2"></div></td>
											<td><div class="animate-bg h-px-20 w-100 rounded-2"></div></td>
											<td><div class="animate-bg h-px-20 w-100 rounded-2"></div></td>
										</tr>
										<?php
}
}
?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-6 mb-2 mb-lg-0">
					<div class="dbx-card h-100">
						<div class="dbx-card__head">
							<span class="dbx-card__ic"><i class="bx bx-calendar-check"></i></span>
							<div class="dbx-card__ttl">
								<h5 class="dbx-card__title">Lịch ký HĐMB</h5>
								<small class="dbx-card__sub">Giao dịch đã nên lịch ký HĐMB</small>
							</div>
							<div class="dbx-card__filter">
								<select class="form-control form-control-sm form-select">
									<option>Lựa chọn</option>
								</select>
							</div>
						</div>
						<div class="dbx-card__body ajax" data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&sub=dashboard&act=load_calendar_admin" data-options='{}'>
							<div class="text-center mb-3 fw-bold">Tháng <?php echo smarty_modifier_date_format(time(),"%m,%Y");?>
</div>
							<div class="table-wrapper">
								<table width="100%" class="table table-bordered">
									<thead><tr>
										<th class="align-center text-center">CN</th>
										<th class="align-center text-center">T2</th>
										<th class="align-center text-center">T3</th>
										<th class="align-center text-center">T4</th>
										<th class="align-center text-center">T5</th>
										<th class="align-center text-center">T6</th>
										<th class="align-center text-center">T7</th>
									</tr></thead>
									<?php
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['list_preloaders']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = min(($__section_i_2_loop - 0), 10);
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total !== 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
									<tr>
										<td><div class="animate-bg h-px-20 w-100 rounded-2"></div></td>
										<td><div class="animate-bg h-px-20 w-100 rounded-2"></div></td>
										<td><div class="animate-bg h-px-20 w-100 rounded-2"></div></td>
										<td><div class="animate-bg h-px-20 w-100 rounded-2"></div></td>
										<td><div class="animate-bg h-px-20 w-100 rounded-2"></div></td>
										<td><div class="animate-bg h-px-20 w-100 rounded-2"></div></td>
										<td><div class="animate-bg h-px-20 w-100 rounded-2"></div></td>
									</tr>
									<?php
}
}
?>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="form-row">
				<div class="col-12 col-md-6 mb-2 mb-lg-0">
					<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('top_billing',array('class'=>' h-100'));?>

				</div>
				<div class="col-12 col-md-6">
					<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('top_staff',array('class'=>' h-100'));?>

				</div>
			</div>
			<!-- <div class="form-group mb-2">
				<div class="card">
					<div class="card-header">
						<h5 class="card-title mb-0">Danh sách đại lý bán MWF</h5>
						<small class="text-muted">Thống kê số lượng căn các đại lý bán MWF</small>
					</div>
					<div class="card-body">
						<div class="table-wrapper">
							<table class="table table-bordered table-borderd">
								<thead><tr>
									<th width="5%" class="align-center bg-lightest text-center">STT</th>
									<th class="align-center bg-lightest">Đại lý</th>
									<th class="align-center bg-lightest text-center">Miani</th>
									<th class="align-center bg-lightest text-center">Hawai</th>
								</tr></thead>
								<tbody class="ajax" data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&sub=dashboard&act=load_agent_sell_mwf" 
									data-options='{}'>
									<?php
$__section_i_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['list_preloaders']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_3_total = min(($__section_i_3_loop - 0), 10);
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_3_total !== 0) {
for ($__section_i_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_3_iteration <= $__section_i_3_total; $__section_i_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
									<tr>
										<td><div class="animate-bg h-px-20 w-100 rounded-2"></div></td>
										<td><div class="animate-bg h-px-20 w-100 rounded-2"></div></td>
										<td><div class="animate-bg h-px-20 w-100 rounded-2"></div></td>
										<td><div class="animate-bg h-px-20 w-100 rounded-2"></div></td>
									</tr>
									<?php
}
}
?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>-->
		</div>
	</div>
	<!--/ Overview & Sales Activity -->
	<div class="col-12 col-md-12 col-lg-4">
		<!-- Xác nhận thay đổi GD -->
		<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock("home_billing_confirm");?>

		<?php if ($_smarty_tpl->tpl_vars['deviceType']->value != 'phone') {?>
		<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('note_calendar');?>

				<div class="card ranking mb-2 pb-2">
			<div class="card-body">
				<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('top_ranking');?>

			</div>
		</div>
		<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('ranking_dept');?>

		<?php }?>
	</div>
</div>	

<style type="text/css">
	.card-header{
		position:relative; 
	}
	.card-header::before{
		content: "";
		width: 0px;
		height: 30px;
		position: absolute;
		left: 0px; top: 20px;
		border-left: 5px solid #950b25;
	}
	.sticky{
		top:90px;
	}
</style>
<?php echo '<script'; ?>
>
	$(document).ready(function(){
		// $Core.report.agent_log();
	});
<?php echo '</script'; ?>
>
<?php }
}
