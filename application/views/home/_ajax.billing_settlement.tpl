<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-ipad">
	{* Không đặt id: popup cũ chỉ bị ẩn chứ không gỡ khỏi DOM, mở nhiều giao dịch là trùng id.
	   JS bám theo uid của popup và theo form chứa nút bấm. *}
	<form class="modal-content">
		<input type="hidden" name="billing_id" value="{$oneBilling.billing_id|escape}">
		{* Hai số gốc để JS tính live. Server không đọc lại 2 ô này khi lưu — nó tự tính bằng BillingCalc. *}
		<input type="hidden" name="_r_base" value="{$st_r_base|escape}">
		<input type="hidden" name="_t_rate" value="{$st_more.commission|escape}">
		<div class="modal-header">
			<h5 class="modal-title mb-0">
				<i class="bx bx-calculator me-1"></i> Quyết toán giao dịch
				{if $st_is_ptdt eq 1}<span class="badge bg-label-warning ms-2">PTĐT</span>{else}<span class="badge bg-label-primary ms-2">Sale nội bộ</span>{/if}
				{if $st_is_settled eq 1}<span class="badge bg-label-success ms-2">Đã quyết toán</span>{/if}
			</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">

			<div class="card shadow-none border mb-3">
				<div class="card-body p-3">
					<div class="row g-2 small">
						<div class="col-6 col-md-3">
							<div class="text-muted">Mã căn</div>
							<div class="fw-semibold">{$oneBilling.stock_code|escape}</div>
						</div>
						<div class="col-6 col-md-5">
							<div class="text-muted">Dự án</div>
							<div class="fw-semibold">{$project_title|escape}</div>
						</div>
						<div class="col-6 col-md-2">
							<div class="text-muted">Mức phí trả sales</div>
							<div class="fw-semibold">{$st_more.commission|escape}%</div>
						</div>
						<div class="col-6 col-md-2">
							<div class="text-muted">Giá trị bán</div>
							<div class="fw-semibold">{$oneBilling.totalgrand|number_format:0:",":"."}</div>
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
									<input type="text" class="form-control text-end price-In numberonly js__st-money" name="total_deduction" value="{$st_more.total_deduction|escape}">
									<span class="input-group-text">đ</span>
								</div>
							</div>
							<div class="mb-2">
								<label class="form-label mb-1 small">Tỷ lệ sales chịu</label>
								<div class="input-group">
									<input type="text" class="form-control text-end js__st-pct" name="total_deduction_percent_sales" value="{$st_more.total_deduction_percent_sales|escape}">
									<span class="input-group-text">%</span>
								</div>
							</div>
							<div class="mb-2">
								<label class="form-label mb-1 small">
									Sales chịu
									<span class="text-muted">— tự tính, sửa được</span>
								</label>
								<div class="input-group">
									{* KHÔNG dùng price-In: plugin priceFormat bind focusout và ghi "0" vào ô rỗng
									   (option clearOnEmpty không tồn tại trong plugin nên bị bỏ qua) — tab qua ô là
									   biến "để trống = tự tính" thành "đè bằng 0". Đánh đổi: mất phân tách nghìn. *}
									<input type="text" class="form-control text-end numberonly js__st-money" name="total_deduction_sales" value="{$st_more.total_deduction_sales|escape}" placeholder="tự tính">
									<span class="input-group-text">đ</span>
								</div>
							</div>
							<div class="mb-2">
								<label class="form-label mb-1 small">Công ty chịu</label>
								<div class="input-group">
									<input type="text" class="form-control text-end price-In numberonly js__st-money" name="total_deduction_company" value="{$st_more.total_deduction_company|escape}">
									<span class="input-group-text">đ</span>
								</div>
							</div>
							<div class="mb-0">
								<label class="form-label mb-1 small">Công ty chịu trừ hoa hồng</label>
								<div class="input-group">
									<input type="text" class="form-control text-end bg-lighter js__st-out-af" name="_af_view" value="{$st_whole.deduction_company_commission|number_format:0:",":"."}" readonly>
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
									<input type="text" class="form-control text-end js__st-pct" name="recovery_rate_customer" value="{$st_more.recovery_rate_customer|escape}">
									<span class="input-group-text">%</span>
								</div>
							</div>
							<div class="alert alert-secondary py-2 mb-3">
								<small>% hoa hồng của <strong>từng sale</strong> nhập ở bảng bên dưới — mỗi người có thể một mức khác nhau.</small>
							</div>
							<div class="d-flex justify-content-between align-items-center mb-1">
								<span class="small text-muted">Số tiền hoa hồng sales</span>
								<span class="fw-semibold js__st-out-aj">{$st_total_sales_amount|number_format:0:",":"."}</span>
							</div>
							<div class="d-flex justify-content-between align-items-center mb-1">
								<span class="small text-muted">Trừ hoa hồng sales</span>
								<span class="fw-semibold js__st-out-al">{$st_total_sales_deduct|number_format:0:",":"."}</span>
							</div>
							<div class="d-flex justify-content-between align-items-center">
								<span class="small">Sales nhận sau truy thu</span>
								<span class="fw-bold text-primary js__st-out-am">{$st_total_sales_net|number_format:0:",":"."}</span>
							</div>
						</div>
					</div>
				</div>

				<div class="col-12">
					<div class="card shadow-none border">
						<div class="card-header py-2 d-flex align-items-center justify-content-between">
							<h6 class="mb-0">Từng sale</h6>
							<span class="badge bg-label-primary">Tổng doanh số sau giảm trừ: <span class="js__st-out-ag-total">{$st_total_realized|number_format:0:",":"."}</span> đ</span>
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
										{foreach from=$st_rows item=_r}
										<tr class="text-nowrap" data-ratio="{$_r.share_ratio|escape}" data-sid="{$_r.billing_sale_id|escape}">
											<td>
												{$_r.seller_name|escape}
												{if $_r.is_primary eq 1}<span class="badge bg-label-info ms-1">Sale chính</span>{/if}
											</td>
											<td class="text-end">{$_r.share_ratio|escape}%</td>
											<td class="text-end fw-semibold js__st-row-ag">{$_r.calc.realized|number_format:0:",":"."}</td>
											<td>
												<div class="input-group input-group-sm">
													<input type="text" class="form-control text-end js__st-row-ai" name="share[{$_r.billing_sale_id|escape}][ai]" value="{$_r.sales_commission_rate|escape}" placeholder="50">
													<span class="input-group-text">%</span>
												</div>
											</td>
											<td class="text-end js__st-row-aj">{$_r.calc.sales_amount|number_format:0:",":"."}</td>
											<td class="text-end js__st-row-al">{$_r.calc.sales_deduct|number_format:0:",":"."}</td>
											<td class="text-end fw-semibold text-primary js__st-row-am">{$_r.calc.sales_net|number_format:0:",":"."}</td>
										</tr>
										{/foreach}
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
								{if $st_is_ptdt eq 1}Cộng tác viên theo từng dòng{else}Quản lý &amp; cộng tác viên theo từng sale{/if}
								<span class="text-muted small fw-normal">
									{if $st_is_ptdt eq 1}— giao dịch của Ban Phát triển đối tác, hoa hồng đi theo vai trò PTĐT bên dưới{else}— co-sale khác phòng thì mỗi người một quản lý riêng{/if}
								</span>
							</h6>
						</div>
						<div class="card-body p-3">
							{foreach from=$st_rows item=_r name=rrow}
							<div class="border rounded p-3{if !$smarty.foreach.rrow.last} mb-3{/if}">
								<div class="d-flex align-items-center mb-2">
									<span class="fw-semibold">{$_r.seller_name|escape}</span>
									<span class="badge bg-label-secondary ms-2">{$_r.share_ratio|escape}%</span>
									{if $_r.is_primary eq 1}<span class="badge bg-label-info ms-1">Sale chính</span>{/if}
								</div>
								<div class="row g-2">
									{if $st_is_ptdt neq 1}
									<div class="col-12 col-md-3">
										<label class="form-label mb-1 small">Trưởng phòng Kinh doanh</label>
										<select data-placeholder="Chọn TPKD" class="form-control iso-selectizeSync" name="share[{$_r.billing_sale_id|escape}][tpkd]"
											data-width="100%" data-allow-clear="true">
											<option value="0">Chọn TPKD</option>
											{if !empty($st_staffs)}{foreach from=$st_staffs item=_oSt}
											<option{if $_r.head_of_dep_id eq $_oSt.profile_id} selected="selected"{/if} value="{$_oSt.profile_id|escape}">{$_oSt.full_name|escape}</option>
											{/foreach}{/if}
										</select>
									</div>
									<div class="col-12 col-md-3">
										<label class="form-label mb-1 small">Giám đốc Kinh doanh</label>
										<select data-placeholder="Chọn GĐKD" class="form-control iso-selectizeSync" name="share[{$_r.billing_sale_id|escape}][gdkd]"
											data-width="100%" data-allow-clear="true">
											<option value="0">Chọn GĐKD</option>
											{if !empty($st_staffs)}{foreach from=$st_staffs item=_oSt}
											<option{if $_r.sale_dir_id eq $_oSt.profile_id} selected="selected"{/if} value="{$_oSt.profile_id|escape}">{$_oSt.full_name|escape}</option>
											{/foreach}{/if}
										</select>
									</div>
									{/if}
									<div class="col-12 col-md-2">
										<label class="form-label mb-1 small">Cộng tác viên</label>
										<input type="text" class="form-control" name="share[{$_r.billing_sale_id|escape}][ctv_name]" value="{$_r.ctv_name|escape}" placeholder="Tên CTV">
									</div>
									<div class="col-6 col-md-2">
										<label class="form-label mb-1 small">% CTV</label>
										<div class="input-group">
											<input type="text" class="form-control text-end js__st-ctv-rate" name="share[{$_r.billing_sale_id|escape}][ctv_rate]" value="{$_r.ctv_rate|escape}">
											<span class="input-group-text">%</span>
										</div>
									</div>
									<div class="col-6 col-md-2">
										<label class="form-label mb-1 small">Tiền CTV <span class="text-muted">— gõ để đè</span></label>
										<div class="input-group">
											{* KHÔNG price-In — xem ghi chú ở ô "Sales chịu" *}
											<input type="text" class="form-control text-end numberonly js__st-ctv-amount" name="share[{$_r.billing_sale_id|escape}][ctv_amount]" value="{$_r.ctv_amount|escape}" placeholder="tự tính" data-sid="{$_r.billing_sale_id|escape}">
											<span class="input-group-text">đ</span>
										</div>
										<small class="text-muted js__st-ctv-hint" data-sid="{$_r.billing_sale_id|escape}"></small>
									</div>
								</div>
							</div>
							{/foreach}
						</div>
					</div>
				</div>

				<div class="col-12">
					<div class="card shadow-none border">
						<div class="card-header py-2">
							<h6 class="mb-0">Đại lý{if $st_is_ptdt eq 1} &amp; Ban Phát triển đối tác{/if}
								<span class="text-muted small fw-normal">— tính theo CĂN, không theo người bán</span>
							</h6>
						</div>
						<div class="card-body p-3">
							<div class="row g-2">
								<div class="col-6 col-md-2">
									<label class="form-label mb-1 small">% đại lý</label>
									<div class="input-group">
										<input type="text" class="form-control text-end js__st-agency-rate" name="agency_rate" value="{$st_agency_rate|escape}">
										<span class="input-group-text">%</span>
									</div>
								</div>
								<div class="col-6 col-md-3">
									<label class="form-label mb-1 small">Tiền đại lý <span class="text-muted">— gõ để đè</span></label>
									<div class="input-group">
										{* KHÔNG price-In — xem ghi chú ở ô "Sales chịu" *}
										<input type="text" class="form-control text-end numberonly js__st-agency-amount" name="agency_amount" value="{$st_agency_amount|escape}" placeholder="tự tính">
										<span class="input-group-text">đ</span>
									</div>
									<small class="text-muted js__st-agency-hint"></small>
								</div>
								{if $st_is_ptdt eq 1}
								<div class="col-12 col-md-7">
									<div class="row g-2">
										<div class="col-12 col-md-4">
											<label class="form-label mb-1 small">Chuyên viên PTĐT</label>
											<select data-placeholder="Chọn CV PTĐT" class="form-control iso-selectizeSync" name="ptdt_cv_id"
											data-width="100%" data-allow-clear="true">
											<option value="0">Chọn CV PTĐT</option>
											{if !empty($st_staffs)}{foreach from=$st_staffs item=_oSt}
											<option{if $st_ptdt_cv_id eq $_oSt.profile_id} selected="selected"{/if} value="{$_oSt.profile_id|escape}">{$_oSt.full_name|escape}</option>
											{/foreach}{/if}
										</select>
										</div>
										<div class="col-12 col-md-4">
											<label class="form-label mb-1 small">Trưởng phòng PTĐT</label>
											<select data-placeholder="Chọn TP PTĐT" class="form-control iso-selectizeSync" name="ptdt_tp_id"
											data-width="100%" data-allow-clear="true">
											<option value="0">Chọn TP PTĐT</option>
											{if !empty($st_staffs)}{foreach from=$st_staffs item=_oSt}
											<option{if $st_ptdt_tp_id eq $_oSt.profile_id} selected="selected"{/if} value="{$_oSt.profile_id|escape}">{$_oSt.full_name|escape}</option>
											{/foreach}{/if}
										</select>
										</div>
										<div class="col-12 col-md-4">
											<label class="form-label mb-1 small">Giám đốc PTĐT</label>
											<select data-placeholder="Chọn GĐ PTĐT" class="form-control iso-selectizeSync" name="ptdt_gd_id"
											data-width="100%" data-allow-clear="true">
											<option value="0">Chọn GĐ PTĐT</option>
											{if !empty($st_staffs)}{foreach from=$st_staffs item=_oSt}
											<option{if $st_ptdt_gd_id eq $_oSt.profile_id} selected="selected"{/if} value="{$_oSt.profile_id|escape}">{$_oSt.full_name|escape}</option>
											{/foreach}{/if}
										</select>
										</div>
									</div>
								</div>
								{/if}
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
										<input type="text" class="form-control text-end price-In numberonly" name="hot_bonus_customer" value="{$st_more.hot_bonus_customer|escape}">
										<span class="input-group-text">đ</span>
									</div>
								</div>
								<div class="col-12 col-md-6">
									<label class="form-label mb-1 small">Thưởng nóng CTV / Đại lý</label>
									<div class="input-group">
										<input type="text" class="form-control text-end price-In numberonly" name="hot_bonus_agency" value="{$st_more.hot_bonus_agency|escape}">
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
