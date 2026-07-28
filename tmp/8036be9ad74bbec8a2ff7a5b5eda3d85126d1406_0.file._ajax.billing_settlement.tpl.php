<?php
/* Smarty version 3.1.33, created on 2026-07-27 20:37:39
  from '/www/wwwroot/skyrealty.c-a.vn/application/views/home/_ajax.billing_settlement.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a675f23ce6453_51443500',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8036be9ad74bbec8a2ff7a5b5eda3d85126d1406' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/views/home/_ajax.billing_settlement.tpl',
      1 => 1785068940,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a675f23ce6453_51443500 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-ipad">
		<form class="modal-content">
		<input type="hidden" name="billing_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oneBilling']->value['billing_id'], ENT_QUOTES, 'UTF-8', true);?>
">
				<input type="hidden" name="_r_base" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['st_r_base']->value, ENT_QUOTES, 'UTF-8', true);?>
">
		<input type="hidden" name="_t_rate" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['st_more']->value['commission'], ENT_QUOTES, 'UTF-8', true);?>
">
		<div class="modal-header">
			<h5 class="modal-title mb-0">
				<i class="bx bx-calculator me-1"></i> Quyết toán giao dịch
				<?php if ($_smarty_tpl->tpl_vars['st_is_ptdt']->value == 1) {?><span class="badge bg-label-warning ms-2">PTĐT</span><?php } else { ?><span class="badge bg-label-primary ms-2">Sale nội bộ</span><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['st_is_settled']->value == 1) {?><span class="badge bg-label-success ms-2">Đã quyết toán</span><?php }?>
			</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">

			<div class="card shadow-none border mb-3">
				<div class="card-body p-3">
					<div class="row g-2 small">
						<div class="col-6 col-md-3">
							<div class="text-muted">Mã căn</div>
							<div class="fw-semibold"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oneBilling']->value['stock_code'], ENT_QUOTES, 'UTF-8', true);?>
</div>
						</div>
						<div class="col-6 col-md-5">
							<div class="text-muted">Dự án</div>
							<div class="fw-semibold"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['project_title']->value, ENT_QUOTES, 'UTF-8', true);?>
</div>
						</div>
						<div class="col-6 col-md-2">
							<div class="text-muted">Mức phí trả sales</div>
							<div class="fw-semibold"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['st_more']->value['commission'], ENT_QUOTES, 'UTF-8', true);?>
%</div>
						</div>
						<div class="col-6 col-md-2">
							<div class="text-muted">Giá trị bán</div>
							<div class="fw-semibold"><?php echo number_format($_smarty_tpl->tpl_vars['oneBilling']->value['totalgrand'],0,",",".");?>
</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row g-3">
				<div class="col-12 col-lg-7">
					<div class="card shadow-none border h-100">
						<div class="card-header py-2"><h6 class="mb-0">Giảm trừ</h6></div>
						<div class="card-body p-3">
							<div class="mb-2">
								<label class="form-label mb-1 small">Tổng tiền giảm trừ</label>
								<div class="input-group">
									<input type="text" class="form-control text-end price-In numberonly js__st-money" name="total_deduction" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['st_more']->value['total_deduction'], ENT_QUOTES, 'UTF-8', true);?>
">
									<span class="input-group-text">đ</span>
								</div>
							</div>
							<div class="mb-2">
								<label class="form-label mb-1 small">Tỷ lệ sales chịu</label>
								<div class="input-group">
									<input type="text" class="form-control text-end js__st-pct" name="total_deduction_percent_sales" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['st_more']->value['total_deduction_percent_sales'], ENT_QUOTES, 'UTF-8', true);?>
">
									<span class="input-group-text">%</span>
								</div>
							</div>
							<div class="mb-2">
								<label class="form-label mb-1 small">
									Sales chịu
									<span class="text-muted">— tự tính, sửa được</span>
								</label>
								<div class="input-group">
																		<input type="text" class="form-control text-end numberonly js__st-money" name="total_deduction_sales" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['st_more']->value['total_deduction_sales'], ENT_QUOTES, 'UTF-8', true);?>
" placeholder="tự tính">
									<span class="input-group-text">đ</span>
								</div>
							</div>
							<div class="mb-2">
								<label class="form-label mb-1 small">Công ty chịu</label>
								<div class="input-group">
									<input type="text" class="form-control text-end price-In numberonly js__st-money" name="total_deduction_company" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['st_more']->value['total_deduction_company'], ENT_QUOTES, 'UTF-8', true);?>
">
									<span class="input-group-text">đ</span>
								</div>
							</div>
							<div class="mb-0">
								<label class="form-label mb-1 small">Công ty chịu trừ hoa hồng</label>
								<div class="input-group">
									<input type="text" class="form-control text-end bg-lighter js__st-out-af" name="_af_view" value="<?php echo number_format($_smarty_tpl->tpl_vars['st_whole']->value['deduction_company_commission'],0,",",".");?>
" readonly>
									<span class="input-group-text">đ</span>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-12 col-lg-5">
					<div class="card shadow-none border h-100">
						<div class="card-header py-2"><h6 class="mb-0">Hoa hồng sales <span class="text-muted small fw-normal">— tổng cả căn</span></h6></div>
						<div class="card-body p-3">
							<div class="mb-3">
								<label class="form-label mb-1 small">Tỷ lệ truy thu khách hàng</label>
								<div class="input-group">
									<input type="text" class="form-control text-end js__st-pct" name="recovery_rate_customer" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['st_more']->value['recovery_rate_customer'], ENT_QUOTES, 'UTF-8', true);?>
">
									<span class="input-group-text">%</span>
								</div>
							</div>
							<div class="alert alert-secondary py-2 mb-3">
								<small>% hoa hồng của <strong>từng sale</strong> nhập ở bảng bên dưới — mỗi người có thể một mức khác nhau.</small>
							</div>
							<div class="d-flex justify-content-between align-items-center mb-1">
								<span class="small text-muted">Số tiền hoa hồng sales</span>
								<span class="fw-semibold js__st-out-aj"><?php echo number_format($_smarty_tpl->tpl_vars['st_total_sales_amount']->value,0,",",".");?>
</span>
							</div>
							<div class="d-flex justify-content-between align-items-center mb-1">
								<span class="small text-muted">Trừ hoa hồng sales</span>
								<span class="fw-semibold js__st-out-al"><?php echo number_format($_smarty_tpl->tpl_vars['st_total_sales_deduct']->value,0,",",".");?>
</span>
							</div>
							<div class="d-flex justify-content-between align-items-center">
								<span class="small">Sales nhận sau truy thu</span>
								<span class="fw-bold text-primary js__st-out-am"><?php echo number_format($_smarty_tpl->tpl_vars['st_total_sales_net']->value,0,",",".");?>
</span>
							</div>
						</div>
					</div>
				</div>

				<div class="col-12">
					<div class="card shadow-none border">
						<div class="card-header py-2 d-flex align-items-center justify-content-between">
							<h6 class="mb-0">Từng sale</h6>
							<span class="badge bg-label-primary">Tổng doanh số sau giảm trừ: <span class="js__st-out-ag-total"><?php echo number_format($_smarty_tpl->tpl_vars['st_total_realized']->value,0,",",".");?>
</span> đ</span>
						</div>
						<div class="card-body p-3">
							<div class="table-responsive">
								<table class="table table-sm mb-0 align-middle st-table">
									<thead>
										<tr class="text-nowrap">
											<th>Sale</th>
											<th class="text-end">Tỷ lệ chia</th>
											<th class="text-end">Doanh số sau giảm trừ</th>
											<th class="text-end w-px-125">% hoa hồng</th>
											<th class="text-end">Số tiền hoa hồng</th>
											<th class="text-end">Trừ hoa hồng</th>
											<th class="text-end">Nhận sau truy thu</th>
										</tr>
									</thead>
									<tbody>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['st_rows']->value, '_r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_r']->value) {
?>
										<tr class="text-nowrap" data-ratio="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_r']->value['share_ratio'], ENT_QUOTES, 'UTF-8', true);?>
" data-sid="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_r']->value['billing_sale_id'], ENT_QUOTES, 'UTF-8', true);?>
">
											<td>
												<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_r']->value['seller_name'], ENT_QUOTES, 'UTF-8', true);?>

												<?php if ($_smarty_tpl->tpl_vars['_r']->value['is_primary'] == 1) {?><span class="badge bg-label-info ms-1">Sale chính</span><?php }?>
											</td>
											<td class="text-end"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_r']->value['share_ratio'], ENT_QUOTES, 'UTF-8', true);?>
%</td>
											<td class="text-end fw-semibold js__st-row-ag"><?php echo number_format($_smarty_tpl->tpl_vars['_r']->value['calc']['realized'],0,",",".");?>
</td>
											<td>
												<div class="input-group input-group-sm">
													<input type="text" class="form-control text-end js__st-row-ai" name="share[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_r']->value['billing_sale_id'], ENT_QUOTES, 'UTF-8', true);?>
][ai]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_r']->value['sales_commission_rate'], ENT_QUOTES, 'UTF-8', true);?>
" placeholder="50">
													<span class="input-group-text">%</span>
												</div>
											</td>
											<td class="text-end js__st-row-aj"><?php echo number_format($_smarty_tpl->tpl_vars['_r']->value['calc']['sales_amount'],0,",",".");?>
</td>
											<td class="text-end js__st-row-al"><?php echo number_format($_smarty_tpl->tpl_vars['_r']->value['calc']['sales_deduct'],0,",",".");?>
</td>
											<td class="text-end fw-semibold text-primary js__st-row-am"><?php echo number_format($_smarty_tpl->tpl_vars['_r']->value['calc']['sales_net'],0,",",".");?>
</td>
										</tr>
										<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</tbody>
								</table>
							</div>
							<div class="alert alert-warning py-2 mt-3 mb-0 d-none js__st-warn-ai">
								<i class="bx bx-error me-1"></i>
								<small>Có dòng đang để <strong>% hoa hồng lớn hơn 100%</strong>. Kiểm tra lại kẻo gõ nhầm — sheet gốc từng có ô ghi 1388,89% do nhập sai.</small>
							</div>
						</div>
					</div>
				</div>

				<div class="col-12">
					<div class="card shadow-none border">
						<div class="card-header py-2">
							<h6 class="mb-0">
								<?php if ($_smarty_tpl->tpl_vars['st_is_ptdt']->value == 1) {?>Cộng tác viên theo từng dòng<?php } else { ?>Quản lý &amp; cộng tác viên theo từng sale<?php }?>
								<span class="text-muted small fw-normal">
									<?php if ($_smarty_tpl->tpl_vars['st_is_ptdt']->value == 1) {?>— giao dịch của Ban Phát triển đối tác, hoa hồng đi theo vai trò PTĐT bên dưới<?php } else { ?>— co-sale khác phòng thì mỗi người một quản lý riêng<?php }?>
								</span>
							</h6>
						</div>
						<div class="card-body p-3">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['st_rows']->value, '_r', false, NULL, 'rrow', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_r']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_rrow']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_rrow']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_rrow']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_rrow']->value['total'];
?>
							<div class="border rounded p-3<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_rrow']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_rrow']->value['last'] : null)) {?> mb-3<?php }?>">
								<div class="d-flex align-items-center mb-2">
									<span class="fw-semibold"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_r']->value['seller_name'], ENT_QUOTES, 'UTF-8', true);?>
</span>
									<span class="badge bg-label-secondary ms-2"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_r']->value['share_ratio'], ENT_QUOTES, 'UTF-8', true);?>
%</span>
									<?php if ($_smarty_tpl->tpl_vars['_r']->value['is_primary'] == 1) {?><span class="badge bg-label-info ms-1">Sale chính</span><?php }?>
								</div>
								<div class="row g-2">
									<?php if ($_smarty_tpl->tpl_vars['st_is_ptdt']->value != 1) {?>
									<div class="col-12 col-md-3">
										<label class="form-label mb-1 small">Trưởng phòng Kinh doanh</label>
										<select data-placeholder="Chọn TPKD" class="form-control iso-selectizeSync" name="share[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_r']->value['billing_sale_id'], ENT_QUOTES, 'UTF-8', true);?>
][tpkd]"
											data-width="100%" data-allow-clear="true">
											<option value="0">Chọn TPKD</option>
											<?php if (!empty($_smarty_tpl->tpl_vars['st_staffs']->value)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['st_staffs']->value, '_oSt');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oSt']->value) {
?>
											<option<?php if ($_smarty_tpl->tpl_vars['_r']->value['head_of_dep_id'] == $_smarty_tpl->tpl_vars['_oSt']->value['profile_id']) {?> selected="selected"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_oSt']->value['profile_id'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_oSt']->value['full_name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
											<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
										</select>
									</div>
									<div class="col-12 col-md-3">
										<label class="form-label mb-1 small">Giám đốc Kinh doanh</label>
										<select data-placeholder="Chọn GĐKD" class="form-control iso-selectizeSync" name="share[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_r']->value['billing_sale_id'], ENT_QUOTES, 'UTF-8', true);?>
][gdkd]"
											data-width="100%" data-allow-clear="true">
											<option value="0">Chọn GĐKD</option>
											<?php if (!empty($_smarty_tpl->tpl_vars['st_staffs']->value)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['st_staffs']->value, '_oSt');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oSt']->value) {
?>
											<option<?php if ($_smarty_tpl->tpl_vars['_r']->value['sale_dir_id'] == $_smarty_tpl->tpl_vars['_oSt']->value['profile_id']) {?> selected="selected"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_oSt']->value['profile_id'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_oSt']->value['full_name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
											<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
										</select>
									</div>
									<?php }?>
									<div class="col-12 col-md-2">
										<label class="form-label mb-1 small">Cộng tác viên</label>
										<input type="text" class="form-control" name="share[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_r']->value['billing_sale_id'], ENT_QUOTES, 'UTF-8', true);?>
][ctv_name]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_r']->value['ctv_name'], ENT_QUOTES, 'UTF-8', true);?>
" placeholder="Tên CTV">
									</div>
									<div class="col-6 col-md-2">
										<label class="form-label mb-1 small">% CTV</label>
										<div class="input-group">
											<input type="text" class="form-control text-end js__st-ctv-rate" name="share[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_r']->value['billing_sale_id'], ENT_QUOTES, 'UTF-8', true);?>
][ctv_rate]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_r']->value['ctv_rate'], ENT_QUOTES, 'UTF-8', true);?>
">
											<span class="input-group-text">%</span>
										</div>
									</div>
									<div class="col-6 col-md-2">
										<label class="form-label mb-1 small">Tiền CTV <span class="text-muted">— gõ để đè</span></label>
										<div class="input-group">
																						<input type="text" class="form-control text-end numberonly js__st-ctv-amount" name="share[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_r']->value['billing_sale_id'], ENT_QUOTES, 'UTF-8', true);?>
][ctv_amount]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_r']->value['ctv_amount'], ENT_QUOTES, 'UTF-8', true);?>
" placeholder="tự tính" data-sid="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_r']->value['billing_sale_id'], ENT_QUOTES, 'UTF-8', true);?>
">
											<span class="input-group-text">đ</span>
										</div>
										<small class="text-muted js__st-ctv-hint" data-sid="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_r']->value['billing_sale_id'], ENT_QUOTES, 'UTF-8', true);?>
"></small>
									</div>
								</div>
							</div>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</div>
					</div>
				</div>

				<div class="col-12">
					<div class="card shadow-none border">
						<div class="card-header py-2">
							<h6 class="mb-0">Đại lý<?php if ($_smarty_tpl->tpl_vars['st_is_ptdt']->value == 1) {?> &amp; Ban Phát triển đối tác<?php }?>
								<span class="text-muted small fw-normal">— tính theo CĂN, không theo người bán</span>
							</h6>
						</div>
						<div class="card-body p-3">
							<div class="row g-2">
								<div class="col-6 col-md-2">
									<label class="form-label mb-1 small">% đại lý</label>
									<div class="input-group">
										<input type="text" class="form-control text-end js__st-agency-rate" name="agency_rate" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['st_agency_rate']->value, ENT_QUOTES, 'UTF-8', true);?>
">
										<span class="input-group-text">%</span>
									</div>
								</div>
								<div class="col-6 col-md-3">
									<label class="form-label mb-1 small">Tiền đại lý <span class="text-muted">— gõ để đè</span></label>
									<div class="input-group">
																				<input type="text" class="form-control text-end numberonly js__st-agency-amount" name="agency_amount" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['st_agency_amount']->value, ENT_QUOTES, 'UTF-8', true);?>
" placeholder="tự tính">
										<span class="input-group-text">đ</span>
									</div>
									<small class="text-muted js__st-agency-hint"></small>
								</div>
								<?php if ($_smarty_tpl->tpl_vars['st_is_ptdt']->value == 1) {?>
								<div class="col-12 col-md-7">
									<div class="row g-2">
										<div class="col-12 col-md-4">
											<label class="form-label mb-1 small">Chuyên viên PTĐT</label>
											<select data-placeholder="Chọn CV PTĐT" class="form-control iso-selectizeSync" name="ptdt_cv_id"
											data-width="100%" data-allow-clear="true">
											<option value="0">Chọn CV PTĐT</option>
											<?php if (!empty($_smarty_tpl->tpl_vars['st_staffs']->value)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['st_staffs']->value, '_oSt');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oSt']->value) {
?>
											<option<?php if ($_smarty_tpl->tpl_vars['st_ptdt_cv_id']->value == $_smarty_tpl->tpl_vars['_oSt']->value['profile_id']) {?> selected="selected"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_oSt']->value['profile_id'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_oSt']->value['full_name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
											<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
										</select>
										</div>
										<div class="col-12 col-md-4">
											<label class="form-label mb-1 small">Trưởng phòng PTĐT</label>
											<select data-placeholder="Chọn TP PTĐT" class="form-control iso-selectizeSync" name="ptdt_tp_id"
											data-width="100%" data-allow-clear="true">
											<option value="0">Chọn TP PTĐT</option>
											<?php if (!empty($_smarty_tpl->tpl_vars['st_staffs']->value)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['st_staffs']->value, '_oSt');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oSt']->value) {
?>
											<option<?php if ($_smarty_tpl->tpl_vars['st_ptdt_tp_id']->value == $_smarty_tpl->tpl_vars['_oSt']->value['profile_id']) {?> selected="selected"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_oSt']->value['profile_id'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_oSt']->value['full_name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
											<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
										</select>
										</div>
										<div class="col-12 col-md-4">
											<label class="form-label mb-1 small">Giám đốc PTĐT</label>
											<select data-placeholder="Chọn GĐ PTĐT" class="form-control iso-selectizeSync" name="ptdt_gd_id"
											data-width="100%" data-allow-clear="true">
											<option value="0">Chọn GĐ PTĐT</option>
											<?php if (!empty($_smarty_tpl->tpl_vars['st_staffs']->value)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['st_staffs']->value, '_oSt');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oSt']->value) {
?>
											<option<?php if ($_smarty_tpl->tpl_vars['st_ptdt_gd_id']->value == $_smarty_tpl->tpl_vars['_oSt']->value['profile_id']) {?> selected="selected"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_oSt']->value['profile_id'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_oSt']->value['full_name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
											<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
										</select>
										</div>
									</div>
								</div>
								<?php }?>
							</div>
							<div class="alert alert-secondary py-2 mt-3 mb-0">
								<small>Tiền CTV và đại lý <strong>ghi nhận riêng</strong>, không trừ vào tiền sale nhận.</small>
							</div>
						</div>
					</div>
				</div>

				<div class="col-12">
					<div class="card shadow-none border">
						<div class="card-header py-2"><h6 class="mb-0">Thưởng nóng <span class="text-muted small fw-normal">— chỉ theo dõi, không vào công thức</span></h6></div>
						<div class="card-body p-3">
							<div class="row g-2">
								<div class="col-12 col-md-6">
									<label class="form-label mb-1 small">Thưởng nóng khách hàng</label>
									<div class="input-group">
										<input type="text" class="form-control text-end price-In numberonly" name="hot_bonus_customer" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['st_more']->value['hot_bonus_customer'], ENT_QUOTES, 'UTF-8', true);?>
">
										<span class="input-group-text">đ</span>
									</div>
								</div>
								<div class="col-12 col-md-6">
									<label class="form-label mb-1 small">Thưởng nóng CTV / Đại lý</label>
									<div class="input-group">
										<input type="text" class="form-control text-end price-In numberonly" name="hot_bonus_agency" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['st_more']->value['hot_bonus_agency'], ENT_QUOTES, 'UTF-8', true);?>
">
										<span class="input-group-text">đ</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Đóng</button>
			<button type="button" class="btn btn-primary" onclick="$Core.billingSettlement.save(this,event)">
				<i class="bx bx-save me-1"></i> Lưu quyết toán
			</button>
		</div>
	</form>
</div>
<?php }
}
