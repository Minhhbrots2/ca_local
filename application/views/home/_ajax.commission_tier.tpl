<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-ipad">
	<form class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title mb-0"><i class="bx bx-line-chart me-1"></i> Tỷ lệ hoa hồng theo vị trí</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
			<div class="alert alert-info py-2 d-flex align-items-start mb-3">
				<i class="bx bx-info-circle me-2 mt-1"></i>
				<small>Doanh số đạt mốc nào thì vị trí đó hưởng tỷ lệ của bậc tương ứng (áp bậc cao nhất mà doanh số đạt).</small>
			</div>
			<div class="row g-3">
				{foreach from=$commission_roles key=_rkey item=_rlabel}
				<div class="col-12">
					<div class="card shadow-none border">
						<div class="card-header d-flex align-items-center justify-content-between">
							<h6 class="mb-0">{$_rlabel|escape}</h6>
							<span class="badge bg-label-primary">{if !empty($commission_tiers[$_rkey])}{$commission_tiers[$_rkey]|@count}{else}0{/if} bậc</span>
						</div>
						<div class="card-body p-3">
							<div class="d-flex align-items-center gap-2 mb-1 text-muted">
								<span class="flex-grow-1">Mốc doanh số</span>
								<span class="w-px-125 flex-grow-0">Tỷ lệ</span>
								<span class="w-px-40 flex-grow-0"></span>
							</div>
							<div data-role="{$_rkey}">
								{if !empty($commission_tiers[$_rkey])}
									{foreach from=$commission_tiers[$_rkey] item=_t name=trow}
									<div class="d-flex align-items-center gap-2 mb-2 js__tier-row">
										<div class="input-group">
											<input type="text" class="form-control text-end price-In numberonly" name="tiers[{$_rkey}][{$smarty.foreach.trow.index}][min]" value="{$_t.min}">
											<span class="input-group-text">đ</span>
										</div>
										<div class="input-group w-px-125 flex-grow-0">
											<input type="text" class="form-control text-end" name="tiers[{$_rkey}][{$smarty.foreach.trow.index}][rate]" value="{$_t.rate}">
											<span class="input-group-text">%</span>
										</div>
										<button type="button" class="btn btn-icon btn-outline-danger flex-shrink-0" title="Xoá bậc" onclick="$Core.commissionTier.removeRow(this,event)"><i class="bx bx-trash"></i></button>
									</div>
									{/foreach}
								{/if}
							</div>
							<button type="button" class="btn btn-outline-primary w-100" onclick="$Core.commissionTier.addRow(this,event,'{$_rkey}')"><i class="bx bx-plus"></i> Thêm bậc</button>
						</div>
					</div>
				</div>
				{/foreach}
			</div>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Đóng</button>
			<button type="button" class="btn btn-primary" onclick="$Core.commissionTier.save(this,event)">{$core->makeIcon('floppy-o','Lưu cấu hình')}</button>
		</div>
	</form>
</div>
