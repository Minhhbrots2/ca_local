<?php
/* Smarty version 3.1.33, created on 2026-07-24 17:18:26
  from '/www/wwwroot/skyrealty.c-a.vn/application/views/home/calculator/_ajax.open.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a633bf2125c13_27994438',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8093da20199e93d2bb8dbb8136979954c552a9f' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/views/home/calculator/_ajax.open.tpl',
      1 => 1784777554,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a633bf2125c13_27994438 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-dialog<?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?>  modal-dialog-scrollable<?php }?> modal-dialog-centered modal-xxl" style="max-width: 60rem;padding: 0 10px">

	<form method="post" class="modal-content" id="frmIssue" enctype="multipart/form-data">

		<div class="modal-header">

			<h5 class="modal-title text-fs-20">Công cụ tính khoản vay <?php echo $_smarty_tpl->tpl_vars['oneStock']->value['ms_code'];?>
</h5>

			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

		</div>

		<div class="modal-body">

			<div class="row">

				<div class="col-12 col-lg-6 mb-3 mb-lg-0 left__pop">

					<div class="form-group mb-2">

						<label class="form-label mb-0">Giá trị nhà đất</label>

						<div class="d-flex gap-2 align-items-center">

							<div class="form-group w-<?php echo $_smarty_tpl->tpl_vars['col_w1']->value;?>
">

								<input type="range" uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" class="form-range js__slider_price_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" toId="js__input_price_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" onChange="$Core.calculator.set_change(this, event)" min="1" max="20" value="<?php echo $_smarty_tpl->tpl_vars['total_price_vat']->value;?>
" step="0.1">

							</div>

							<div class="input-group input-group-merge w-<?php echo $_smarty_tpl->tpl_vars['col_w2']->value;?>
">

								<input type="number" class="form-control calc_field js__input_price_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" toId="js__slider_price_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" onChange="$Core.calculator.do_calculator(this, event)" value="<?php echo $_smarty_tpl->tpl_vars['total_price_vat']->value;?>
" uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" id="price" onClick="this.select()" name="price" placeholder="Giá trị nhà đất">

								<span class="input-group-text cursor-pointer">tỷ</span>

							</div>

						</div>

					</div>

					<div class="form-group mb-2">

						<div class="d-flex align-items-center justify-content-between form-label mb-0">

							<div  class="d-flex align-items-ccenter gap-1">Tỷ lệ vay <i data-bs-toggle="tooltip" class="bx bx-help-circle text-fs-15" title="Điều chỉnh tỷ lệ khoản vay dựa trên giá trị dự án"></i></div>

							<div class="total-price">

								<span id="viewTongTienVay_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" class="fs-12 text-muted"><?php echo $_smarty_tpl->tpl_vars['total_price_ratio']->value;?>
</span> tỷ

							</div>

						</div>

						<div class="d-flex gap-2 align-items-center">

							<div class="form-group w-<?php echo $_smarty_tpl->tpl_vars['col_w1']->value;?>
">

								<?php if (!empty($_smarty_tpl->tpl_vars['arr_field_configs']->value)) {?>

								<input type="range" class="form-range js__slider_ratio_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" toId="js__input_ratio_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" onChange="$Core.calculator.set_change(this, event)" min="1" max="100" value="<?php echo $_smarty_tpl->tpl_vars['def_configs']->value['ratio'];?>
" step="0.5">

								<?php } else { ?>

								<input type="range" class="form-range js__slider_ratio_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" toId="js__input_ratio_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" onChange="$Core.calculator.set_change(this, event)" min="1" max="100" value="<?php echo $_smarty_tpl->tpl_vars['def_configs']->value['ratio'];?>
" step="0.5">

								<?php }?>

							</div>

							<div class="input-group input-group-merge w-<?php echo $_smarty_tpl->tpl_vars['col_w2']->value;?>
">

								<input type="number" uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" class="form-control calc_field js__input_ratio_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" toId="js__slider_ratio_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" onClick="this.select()" onChange="$Core.calculator.do_calculator(this, event)" value="<?php echo $_smarty_tpl->tpl_vars['def_configs']->value['ratio'];?>
" id="ratio" name="ratio" placeholder="Tỷ lệ vay">

								<span class="input-group-text cursor-pointer">%</span>

							</div>

						</div>

					</div>

					<div class="form-group mb-2">

						<label class="form-label mb-0">Thời hạn vay (năm)</label>

						<div class="d-flex gap-2 align-items-center">

							<div class="form-group w-<?php echo $_smarty_tpl->tpl_vars['col_w1']->value;?>
">

								<input type="range" class="form-range js__slider_year_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" toId="js__input_year_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" 

								onChange="$Core.calculator.set_change(this, event)" min="1" max="40" value="35">

							</div>

							<div class="input-group input-group-merge w-<?php echo $_smarty_tpl->tpl_vars['col_w2']->value;?>
">

								<input type="number" uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" class="form-control calc_field js__input_year_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" toId="js__slider_year_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" onClick="this.select()" onChange="$Core.calculator.do_calculator(this, event)" id="year" name="year" value="<?php echo $_smarty_tpl->tpl_vars['def_configs']->value['year'];?>
" placeholder="Thời hạn vay (năm)">

								<span class="input-group-text cursor-pointer">N</span>

							</div>

						</div>

					</div>

					<div class="divider text-start">

						<div class="divider-text text-main fw-bold">LÃI SUẤT ƯU ĐÃI</div>

					</div>

					<div class="form-group mb-2">

						<label class="form-label mb-0">Ngân hàng</label>

						<select onChange="$Core.calculator.set_bank_v2(this, event)" class="form-control form-select iso-selectize" 

						data-width="100%" disabled>

							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_banks']->value, '_oB');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oB']->value) {
?>

							<option<?php if ($_smarty_tpl->tpl_vars['_oB']->value['id'] == $_smarty_tpl->tpl_vars['def_configs']->value['id']) {?> selected<?php }?> 

									   preferentialRate="<?php echo $_smarty_tpl->tpl_vars['_oB']->value['preferentialRate'];?>
" 

									   preferentialTime="<?php echo $_smarty_tpl->tpl_vars['_oB']->value['preferentialTime'];?>
" 

									   introMonthsUnit="<?php echo $_smarty_tpl->tpl_vars['_oB']->value['introMonthsUnit'];?>
" 

									   rate="<?php echo $_smarty_tpl->tpl_vars['_oB']->value['rate'];?>
" 

									   value="<?php echo $_smarty_tpl->tpl_vars['_oB']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_oB']->value['name'];?>
</option>

							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

						</select>

					</div>

					<div class="form-group mb-2">

						<label class="form-label mb-0" for="giatri">Lãi suất ưu đãi</label>

						<div class="d-flex gap-2 align-items-center">

							<div class="form-group w-<?php echo $_smarty_tpl->tpl_vars['col_w1']->value;?>
">

								<input type="range" class="form-range js__slider_introRate_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" step="0.1" toId="js__input_introRate_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" 

								onChange="$Core.calculator.set_change(this, event)" min="0" max="40" value="<?php echo $_smarty_tpl->tpl_vars['def_configs']->value['introRate'];?>
">

							</div>

							<div class="input-group input-group-merge w-<?php echo $_smarty_tpl->tpl_vars['col_w2']->value;?>
">

								<input type="number" uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" class="form-control calc_field js__input_introRate_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" 

								id="introRate" name="introRate" step="0.1" toId="js__slider_introRate_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" onClick="this.select()" 

								onChange="$Core.calculator.do_calculator(this, event)" value="<?php echo $_smarty_tpl->tpl_vars['def_configs']->value['introRate'];?>
" 

								placeholder="Thời hạn vay (năm)" >

								<span class="input-group-text cursor-pointer">%</span>

							</div>

						</div>

					</div>

					<div class="form-group mb-2">

						<label class="form-label mb-0">Thời gian ưu đãi</label>

						<div class="d-flex gap-2 align-items-center">

							<div class="form-group w-<?php echo $_smarty_tpl->tpl_vars['col_w1']->value;?>
">

								<input type="range" class="form-range js__slider_introMonths_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" toId="js__input_introMonths_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" onChange="$Core.calculator.set_change(this, event)" min="0" max="60" value="<?php echo $_smarty_tpl->tpl_vars['def_configs']->value['introMonths'];?>
">

							</div>

							<div class="input-group w-<?php echo $_smarty_tpl->tpl_vars['col_w2']->value;?>
">

								<input type="number" uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" class="form-control calc_field js__input_introMonths_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" 

								toId="js__slider_introMonths_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" onChange="$Core.calculator.do_calculator(this, event)" name="introMonths" 

								value="<?php echo $_smarty_tpl->tpl_vars['def_configs']->value['introMonths'];?>
" placeholder="Nhập thời gian" id="introMonths" onClick="this.select()">

								<select class="form-control form-select" uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" name="introMonthsUnit" onChange="$Core.calculator.do_calculator(this, event)">

									<option value="_MONTH" <?php if ($_smarty_tpl->tpl_vars['def_configs']->value['introMonthsUnit'] == '_MONTH') {?>selected<?php }?>>Tháng</option>

									<option value="_YEAR" <?php if ($_smarty_tpl->tpl_vars['def_configs']->value['introMonthsUnit'] == '_YEAR') {?>selected<?php }?>>Năm</option>

								</select>

							</div>

						</div>

					</div>

					<div class="form-group mb-2">

						<label class="form-label mb-0" for="giatri">Lãi suất sau ưu đãi</label>

						<div class="d-flex ga-2 align-items-center">

							<div class="form-group w-<?php echo $_smarty_tpl->tpl_vars['col_w1']->value;?>
">

								<input type="range" class="form-range js__slider_rate_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" step="0.1" toId="js__input_rate_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" 

								onChange="$Core.calculator.set_change(this, event)" min="0" max="40" value="<?php echo $_smarty_tpl->tpl_vars['def_configs']->value['rate'];?>
">

							</div>

							<div class="input-group input-group-merge w-<?php echo $_smarty_tpl->tpl_vars['col_w2']->value;?>
">

								<input type="number" uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" class="form-control js__input_rate_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
 calc_field" toId="js__slider_rate_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" onClick="this.select()" onChange="$Core.calculator.do_calculator(this, event)" id="rate" value="<?php echo $_smarty_tpl->tpl_vars['def_configs']->value['rate'];?>
" name="rate" placeholder="Nhập lãi suất" step="0.1">

								<span class="input-group-text cursor-pointer">%</span>

							</div>

						</div>

					</div>

					<div class="divider text-start">

						<div class="divider-text text-main fw-bold">PHƯƠNG THỨC TÍNH LÃI</div>

					</div>

					<div class="row mb-2">

						<div class="col-6">

							<div class="form-check">

								<input type="radio" uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" name="paymentMethod" class="form-check-input calc_field" 

								onChange="$Core.calculator.do_calculator(this, event)" id="equal_principal_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" checked value="1">

								<label class="form-check-label" for="equal_principal_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">Dư nợ giảm dần </label>

							</div>

						</div>

						<div class="col-6">

							<div class="form-check">

								<input type="radio" uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" name="paymentMethod" class="form-check-input calc_field" 

								onChange="$Core.calculator.do_calculator(this, event)" id="annuity_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" value="2">

								<label class="form-check-label" for="annuity_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">Đều hàng tháng</label>

							</div>

						</div>

					</div>

					<div class="form-group mb-2">

						<?php $_smarty_tpl->_assignInScope('gId', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>

						<div class="form-check my-2">

							<input onChange="$Core.calculator.set_active(this, event)" class="form-check-input" name="early_payment_fee_status" toId="settle_period" type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" value="1">

							<label class="form-check-label text-upper" for="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
">Thanh toán trước hạn</label>

						</div>

						<div id="block_<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" class="d-none flex-column">

							<div class="form-group mb-2">

								<label class="form-label mb-0">Phí trả nợ trước hạn</label>

								<div class="clearfix"></div>

								<strong id="viewPhiTraNoTruocHan_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" class="text-main">0.00</strong> <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRate();?>


							</div>

							<div class="form-group mb-2">

								<label class="form-label mb-0">Thời gian dự tính thanh toán</label>

								<div class="d-flex gap-2 align-items-center">

									<div class="form-group w-<?php echo $_smarty_tpl->tpl_vars['col_w1']->value;?>
">

										<input type="range" uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" id="range_<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" class="form-range js__slider_js__input_settle_period_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" toId="js__input_settle_period_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" onChange="$Core.calculator.set_change(this, event)" min="0" max="480" value="0">

									</div>

									<div class="input-group w-<?php echo $_smarty_tpl->tpl_vars['col_w2']->value;?>
">

										<input type="number" class="form-control js__input_settle_period_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
 calc_field" onClick="this.select()" onChange="$Core.calculator.do_calculator(this, event)" value="0" uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" toId="js__slider_settle_period_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" id="settle_period" name="settle_period" placeholder="Nhập số">

										<select uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" class="form-control form-select" name="settle_period_unit" onChange="$Core.calculator.do_calculator(this, event)">

											<option selected value="_MONTH">Tháng</option>

											<option value="_YEAR">Năm</option>

										</select>

									</div>

								</div>

							</div>

							<div class="form-group">

								<label class="form-label mb-1" for="giatri">Phí thanh toán trước hạn</label>

								<div class="d-flex gap-2 align-items-center">

									<div class="form-group w-<?php echo $_smarty_tpl->tpl_vars['col_w1']->value;?>
">

										<input type="range" uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" id="range_<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" class="form-range js__slider_early_payment_fee_rate_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" toId="js__input_early_payment_fee_rate_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" onChange="$Core.calculator.set_change(this, event)" min="0" max="100" value="0">

									</div>

									<div class="input-group input-group-merge w-<?php echo $_smarty_tpl->tpl_vars['col_w2']->value;?>
">

										<input type="number" class="form-control js__input_early_payment_fee_rate_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
 calc_field" onClick="this.select()" onChange="$Core.calculator.do_calculator(this, event)" 

										value="0" uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" toId="js__slider_early_payment_fee_rate_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" min="0" max="100" id="early_payment_fee_rate" name="early_payment_fee_rate" placeholder="Nhập số">

										<span class="input-group-text cursor-pointer">%</span>

									</div>

								</div>

							</div>

						</div>

					</div>

					<div class="form-group mb-2">

						<?php $_smarty_tpl->_assignInScope('gId', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>

						<div class="form-check my-2">

							<input class="form-check-input" onChange="$Core.calculator.set_active(this, event)" 

							toId="gracePeriod" type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
">

							<label class="form-check-label text-upper" for="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
">Ân hạn nợ gốc</label>

						</div>

						<div id="block_<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" class="d-none ga-2 align-items-center">

							<div class="form-group boxrange w-<?php echo $_smarty_tpl->tpl_vars['col_w1']->value;?>
">

								<input type="range" class="form-range js__slider_gracePeriod_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" id="range_<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" toId="js__input_gracePeriod_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" onChange="$Core.calculator.set_change(this, event)" min="0" max="480" value="0">

							</div>

							<div class="input-group w-<?php echo $_smarty_tpl->tpl_vars['col_w2']->value;?>
">

								<input type="number" uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" class="form-control js__input_gracePeriod_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
 calc_field" 

								toId="js__slider_gracePeriod_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" onChange="$Core.calculator.do_calculator(this, event)" 

								id="gracePeriod" value="0" name="gracePeriod" onClick="this.select()" placeholder="Nhập số...">

								<select uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" class="form-control form-select" name="gracePeriodUnit" onChange="$Core.calculator.do_calculator(this, event)">

									<option selected="selected" value="_MONTH">Tháng</option>

									<option value="_YEAR">Năm</option>

								</select>

							</div>

						</div>

					</div>

					<div class="form-group mb-2">

						<?php $_smarty_tpl->_assignInScope('gId', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>

						<div class="form-check my-2">

							<input onChange="$Core.calculator.set_active(this, event)" toId="interestRateSupportPeriod" 

							class="form-check-input" type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
">

							<label class="form-check-label text-upper" for="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
">Hỗ trợ lãi suất</label>

						</div>

						<div id="block_<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" class="d-none ga-2 align-items-center">

							<div class="form-group w-<?php echo $_smarty_tpl->tpl_vars['col_w1']->value;?>
">

								<input type="range" class="form-range js__slider_interestRateSupportPeriod_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" 

								toId="js__input_interestRateSupportPeriod_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" onChange="$Core.calculator.set_change(this, event)" 

								id="range_<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" min="0" max="480" value="0">

							</div>

							<div class="input-group w-<?php echo $_smarty_tpl->tpl_vars['col_w2']->value;?>
">

								<input type="number" class="form-control js__input_interestRateSupportPeriod_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
 calc_field" 

								onChange="$Core.calculator.do_calculator(this, event)" onClick="this.select()" value="0"  uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" 

								toId="js__slider_interestRateSupportPeriod_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" id="interestRateSupportPeriod" placeholder="Nhập số" 

								name="interestRateSupportPeriod" >

								<select uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" class="form-control form-select" name="interestRateSupportPeriodUnit" onChange="$Core.calculator.do_calculator(this, event)">

									<option selected value="_MONTH">Tháng</option>

								</select>

							</div>

						</div>

					</div>

				</div>

				<div class="col-12 col-lg-6 right__pop position-relative">

					<div class="d-flex flex-column justify-content-between position-relative zindex-2 h-100">

						<div class="top">

							<div class="border border-primary bg-lighter p-3 mb-3 rounded-2">

								<div class="viewLabelLai mb-2">Thanh toán tháng đầu</div>

								<h5 id="viewLaiThangDau_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" class="text-primary mn-2">0.000.000</h5>

								<div id="viewSubQuote_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" class="text-muted">Tỉ lệ vay 0% - 0 năm - 0.0%/năm</div>

							</div>

							<div class="form-row">

								<div class="col-12 col-md-7 mb-2 mb-lg-0" id="boxchart_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
"></div>

								<div class="col-12 col-md-5">

									<div class="d-flex align-items-ccenter gap-0 mb-2 flex-column xs:flex-row xs:justify-content-between">

										<span class="fw-bold">Cần trả trước</span>

										<span class="text-fs-18 xs:text-fs-16 viewCanTraTruoc" id="viewCanTraTruoc_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">0.000</span>

									</div>

									<div class="d-flex align-items-ccenter gap-0 mb-2 flex-column xs:flex-row xs:justify-content-between">

										<span class="fw-bold">Gốc cần trả</span>

										<span class="text-fs-18 xs:text-fs-16 viewGocCanTra" id="viewGocCanTra_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">0.000</span>

									</div>

									<div class="d-flex align-items-ccenter gap-0 mb-2 flex-column xs:flex-row xs:justify-content-between">

										<span class="fw-bold">Lãi cần trả</span>

										<span class="text-fs-18 xs:text-fs-16 viewLaiCanTra" id="viewLaiCanTra_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">0.000</span>

									</div>

									<div class="d-flex align-items-ccenter gap-0 mb-2 flex-column xs:flex-row xs:justify-content-between">

										<span class="fw-bold">Tổng tiền & lãi ưu đãi</span>

										<span class="text-fs-18 xs:text-fs-16 viewTongTienLaiPromo" id="viewTongTienLaiPromo_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">0.000</span>

									</div>

									<div class="d-flex align-items-ccenter gap-0 mb-2 flex-column xs:flex-row xs:justify-content-between">

										<span class="fw-bold">Tổng tiền & lãi sau ưu đãi</span>

										<span class="text-fs-18 xs:text-fs-16 viewTongTienLaiSauPromo" id="viewTongTienLaiSauPromo_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">0.000</span>

									</div>

									<div class="d-flex align-items-ccenter gap-0 mb-2 flex-column xs:flex-row xs:justify-content-between">

										<span class="fw-bold">Tổng tiền</span>

										<span class="text-fs-18 xs:text-fs-16 viewTongTien" id="viewTongTien_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">0.000</span>

									</div>

								</div>

							</div>

						</div>

						<div class="d-flex flex-column w-100 py-2">

							<div id="html_MonthlyPayment_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" class="d-none">

								<?php echo $_smarty_tpl->tpl_vars['html_MonthlyPayment']->value;?>


							</div>

							<div class="alert alert-danger mb-2 text-fs-12">Lưu ý: Công cụ tính toán này chỉ hỗ trợ cho việc ước tính khoản vay, 

							không phải là sự đảm bảo về khoản vay của <?php echo @constant('BRAND_NAME');?>
.</div>

							<div class="d-flex align-items-center justify-content-center">

								<button type="button" data-toggle="ripple" onClick="$Core.calculator.view(this, event)" uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" 

								class="btn btn-block btn-outline-primary"><strong>Xem bảng chi tiết</strong></button>

								<?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?>

								<button type="button" data-toggle="ripple" class="btn btn-icon btn-outline-default ml-2" data-bs-dismiss="modal" 

								title="Đóng"><i class="bx bx-x"></i></button>

								<?php }?>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

</div>



<style type="text/css">

	input[type="range"]{

		width:calc(100% - 20px);

	}

	.right__pop:after{

		content: "";

		position: absolute;

		right: -3px; top: -16px;

		width: calc(100% + 6px);

		height: calc(100% + 32px);

		background: rgba(245, 131, 33, 0.1);

		z-index:1;

	}

	.viewCanTraTruoc {

		color: rgba(54, 162, 235, 1);

		font-weight: bold;

	}

	.viewGocCanTra {

		color: rgba(255, 206, 86, 1);

		font-weight: bold;

	}

	.viewLaiCanTra {

		color: rgba(255, 99, 132, 1);

		font-weight: bold;

	}

	.viewTongTien {

		color: #ec8922;

		font-weight: bold;

	}

	.viewTongTienLaiPromo{

		color: #027f84;

		font-weight: bold;

	}

	.viewTongTienLaiSauPromo{

		color: #18027a;

		font-weight: bold;

	}

</style>

<?php }
}
