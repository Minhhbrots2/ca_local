<?php
/* Smarty version 3.1.33, created on 2026-07-07 11:43:56
  from '/www/wwwroot/skyrealty.futureglobal.vn/application/views/report/order_package.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a4c840cd7b979_83239699',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5172525caf697b440eaa6153ecdb8ca3a6a32c2e' => 
    array (
      0 => '/www/wwwroot/skyrealty.futureglobal.vn/application/views/report/order_package.tpl',
      1 => 1783314323,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a4c840cd7b979_83239699 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/www/wwwroot/skyrealty.futureglobal.vn/core/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/daterangepicker/daterangepicker.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" />

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/daterangepicker/moment.min.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/daterangepicker/daterangepicker.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>

<div class="container-xxl flex-grow-1 pt-2 container-p-y">

	<div class="d-flex justify-content-between align-items-center py-2 mb-2">

		<div class="p__left">

			<h4 class="fw-bold mb-1"><span>Báo cáo nâng cấp gói dịch vụ MOC</span></h4>

			<p class="text-muted mb-0">Hệ thống hỗ trợ bán hàng Ocean City</p>

		</div>

	</div>

	<div class="box_statistic">

		

		<div class="form-row">

			<div class="col-12 col-lg-6">

				<div class="card h-100 no-shadow">

					<div class="card-body">

						<div class="d-flex align-items-center mb-3 justify-content-between">

							<div class="p-left">

								<h5 class="card-title mb-0 text-nowrap">Thành viên</h5>

							</div>

						</div>

						<div >

							<div class="form-row">

								<div class="col-6 col-md-4 flex-fill mb-2">

									<div class="gbox gotoLink px-2 py-3 h-100">

										<h5 class="mb-2 fs-14">Gói dùng thử</h5> 

										<h3 class="fs-5 mb-0 fw-bold text-main">

											<span data-from="0" data-to="39010893816"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatNumber2($_smarty_tpl->tpl_vars['totalUserPackageTrial']->value);?>
</span>

										</h3>

									</div>

								</div>

								<div class="col-6 col-md-4 flex-fill mb-2">

									<div class="gbox gotoLink px-2 py-3 h-100">

										<h5 class="mb-2 fs-14">Gói PRO</h5> 

										<h3 class="fs-5 mb-0 fw-bold text-main">

											<span data-from="0" data-to="39010893816"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatNumber2($_smarty_tpl->tpl_vars['totalUserPackagePro']->value);?>
</span>

										</h3>

									</div>

								</div>

								<div class="col-6 col-md-4 flex-fill mb-2">									

									<div class="gbox gotoLink px-2 py-3 h-100">

										<h5 class="mb-2 fs-14">Gói VIP</h5> 

										<h3 class="fs-5 mb-0 fw-bold text-main">

											<span data-from="0" data-to="39010893816"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatNumber2($_smarty_tpl->tpl_vars['totalUserPackageVip']->value);?>
</span>

										</h3>

									</div>

								</div>

							</div>

						</div>

					</div>

				</div>

			</div>

			<div class="col-12 col-lg-6">

				<div class="card h-100 no-shadow">

					<div class="card-body">

						<div class="d-flex align-items-center mb-3 justify-content-between">

							<div class="p-left">

								<h5 class="card-title mb-0 text-nowrap">Order</h5>

							</div>

						</div>

						<div >

							<div class="form-row">

								<div class="col-6 col-md-3 flex-fill mb-2">

									<div class="gbox gotoLink px-2 py-3 h-100">

										<h5 class="mb-2 fs-14">Tổng nâng cấp</h5> 

										<h3 class="fs-5 mb-0 fw-bold text-main">

											<span data-from="0" data-to="39010893816"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatNumber2($_smarty_tpl->tpl_vars['total_order']->value);?>
</span>

										</h3>

									</div>

								</div>

								<div class="col-6 col-md-3 flex-fill mb-2">

									<div class="gbox gotoLink px-2 py-3 h-100">

										<h5 class="mb-2 fs-14">Tỷ lệ gia hạn</h5> 

										<h3 class="fs-5 mb-0 fw-bold text-main">

											<span data-from="0" data-to="39010893816"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatNumber2($_smarty_tpl->tpl_vars['total_extend']->value);?>
%</span>

										</h3>

									</div>

								</div>

								<div class="col-6 col-md-3 flex-fill mb-2">

									<div class="gbox gotoLink px-2 py-3 h-100">

										<h5 class="mb-2 fs-14">Nâng cấp thành công</h5> 

										<h3 class="fs-5 mb-0 fw-bold text-main">

											<span data-from="0" data-to="39010893816"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatNumber2($_smarty_tpl->tpl_vars['total_success']->value);?>
</span>

										</h3>

									</div>

								</div>

								<div class="col-6 col-md-3 flex-fill mb-2">							

									<div class="gbox gotoLink px-2 py-3 h-100">

										<h5 class="mb-2 fs-14">Doanh thu</h5> 

										<h3 class="fs-5 mb-0 fw-bold text-main">

											<span data-from="0" data-to="39010893816"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatNumber2($_smarty_tpl->tpl_vars['total_revenue']->value);?>
đ</span>

										</h3>

									</div>

								</div>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

		

		<div class="row mt-2">

			<div class="col-md-12">

				<div class="dashboard-panel-item dashboard-panel-item--full">

					<div class="panel border-0 no-shadow panel-default" id="loadChartNumber">

						<div class="panel-heading d-flex flex-wrap justify-content-between align-items-center">

							<h3 class="panel-title">Biểu đồ thống kê order</h3>

							<div class="p_top <?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?>w-100 mt-2<?php }?>">

								<div class="input-group w-px-200 ox:w-100 d-flex" role="group" aria-label="Sắp xếp">

									<select class="form-control form-select" name="month" onChange="$Core.report.load_report_order('NUMBER_CHART', event)"> 

										<option value="">Tháng</option>			

										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_months']->value, '_month');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_month']->value) {
?>

										<option value="<?php echo $_smarty_tpl->tpl_vars['_month']->value;?>
">Tháng <?php echo $_smarty_tpl->tpl_vars['_month']->value;?>
</option>

										<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

									</select>

									<select class="form-control form-select" name="year" onChange="$Core.report.load_report_order('NUMBER_CHART', event)">

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

						</div>

						<div class="panel-body px-0">

							<div id="chartNumber" class="w-100 a" style="min-height:300px;">

								<div class="p-5 text-center">

									<div class="p-5 text-muted">Loading...</div>

								</div>

							</div>

						</div>

					</div>

				</div>				

			</div>	

			

			<div class="col-md-12">

				<div class="dashboard-panel-item dashboard-panel-item--full">

					<div class="panel border-0 no-shadow panel-default" id="loadListMember">

						<div class="panel-heading d-flex flex-wrap justify-content-between align-items-center gap-3">

							<h3 class="panel-title">Danh sách tài khoản</h3>

							<div class="d-flex flex-wrap align-items-center justify-content-between flex-fill gap-3">

								<ul class="tab_package nav d-flex flex-wrap gap-2 list pull-right">													

									<li class="nav-item">										

										<input type="radio" name="package_id" onchange="$Core.report.load_report_order('MEMBER',event)" value="1" id="tried" checked>

										<label href="javascript:void(0);" for="tried" class="js_choose-time cursor-pointer">Gói dùng thử (<?php echo $_smarty_tpl->tpl_vars['totalUserPackageTrial']->value;?>
)</label>

									</li>													

									<li class="nav-item">										

										<input type="radio" name="package_id" onchange="$Core.report.load_report_order('MEMBER',event)" value="<?php echo @constant('_MEMBER_PARKAGE_PRO_ID');?>
" id="PRO">

										<label href="javascript:void(0);" for="PRO" class="js_choose-time cursor-pointer">Gói chuyên nghiệp (Pro) (<?php echo $_smarty_tpl->tpl_vars['totalUserPackagePro']->value;?>
)</label>

									</li>													

									<li class="nav-item">										

										<input type="radio" name="package_id" onchange="$Core.report.load_report_order('MEMBER',event)" value="<?php echo @constant('_MEMBER_PARKAGE_VVIP_ID');?>
" id="VIP">

										<label href="javascript:void(0);" for="VIP" class="js_choose-time cursor-pointer">Gói tinh hoa (VIP) (<?php echo $_smarty_tpl->tpl_vars['totalUserPackageVip']->value;?>
)</label>

									</li>

								</ul>

								<div class="p_right <?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?>flex-fill<?php }?>">

									<div class="input-group mr-1 input-group-merge">

										<span class="input-group-text"><i class="bx bx-search"></i></span>

										<input type="text" class="form-control search_field" name="keyword" data-field="keySearch" placeholder="Search" onKeyUp="$Core.report.load_report_order('MEMBER',event)">

									</div>

								</div>

							</div>

						</div>

						<div class="panel-body px-0">

							<div id="listMember" class="w-100" style="min-height:300px;">

								<div class="p-5 text-center">

									<div class="p-5 text-muted">Loading...</div>

								</div>

							</div>

						</div>

					</div>

				</div>			

			</div>

			

		</div>

	</div>

</div>



<?php echo '<script'; ?>
 type="text/javascript">

$(document).ready(function(){

	$Core.report.load_report_order('NUMBER_CHART', event);

	$Core.report.load_report_order('MEMBER', event); 

	$Core.report.load_report_order('MEMBER_TRIAL', event); 

	$Core.report.load_report_order('MEMBER_PRO', event);   

});

<?php echo '</script'; ?>
>

<?php }
}
