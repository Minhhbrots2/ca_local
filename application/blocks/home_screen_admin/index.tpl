<div class="form-row mb-2">
	<div class="col-12 col-lg-4 mb-2 mb-lg-0">
		<div class="dbx-card h-100">
			{assign var = gId value = $clsISO->getUniqid()}
			<div class="dbx-card__head">
				<span class="dbx-card__ic"><i class="bx bx-dollar-circle"></i></span>
				<div class="dbx-card__ttl">
					<h5 class="dbx-card__title">Doanh số</h5>
					<small class="dbx-card__sub">Doanh số bán hàng <span class="txt_block_code">{$oneBLock.property_code}</span></small>
				</div>
				<div class="dbx-card__filter">
					<select class="form-control form-control-sm form-select" name="month" gId="{$gId}" onChange="$Core.admin.reload(this,event)">
						<option value="">Tháng</option>
						{foreach from=$list_months item = _month}
						<option value="{$_month}">T{$_month}</option>
						{/foreach}
					</select>
					<select class="form-control form-control-sm form-select" name="year" gId="{$gId}" onChange="$Core.admin.reload(this,event)">
						{foreach from=$list_years item = _year}
						<option{if $_year eq $smarty.now|date_format:"%Y"} selected{/if} value="{$_year}">{$_year}</option>
						{/foreach}
					</select>
				</div>
			</div>
			<div class="dbx-card__body">
				<div class="ajax" gId="{$gId}" data-url="{$PCMS_URL}/index.php?mod={$mod}&sub=dashboard&act=load_sales_overview_admin">
					<div class="p-4 text-center">
						<div class="py-1">Loading...</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-12 col-lg-4 mb-2 mb-lg-0">
		<div class="dbx-card h-100">
			{assign var = gId value = $clsISO->getUniqid()}
			<div class="dbx-card__head">
				<span class="dbx-card__ic"><i class="bx bx-receipt"></i></span>
				<div class="dbx-card__ttl">
					<h5 class="dbx-card__title">Giao dịch ký HĐMB</h5>
					<small class="dbx-card__sub">Thống kê giao dịch ký HĐMB</small>
				</div>
				<div class="dbx-card__filter">
					<select class="form-control form-control-sm form-select" name="month" gId="{$gId}" onChange="$Core.admin.reload(this,event)">
						<option value="">Tháng</option>
						{foreach from=$list_months item = _month}
						<option value="{$_month}">T{$_month}</option>
						{/foreach}
					</select>
					<select class="form-control form-control-sm form-select" name="year" gId="{$gId}" onChange="$Core.admin.reload(this,event)">
						{foreach from=$list_years item = _year}
						<option{if $_year eq $smarty.now|date_format:"%Y"} selected{/if} value="{$_year}">{$_year}</option>
						{/foreach}
					</select>
				</div>
			</div>
			<div class="dbx-card__body">
				<div class="ajax" gId="{$gId}" data-url="{$PCMS_URL}/index.php?mod={$mod}&sub=dashboard&act=load_billing_overview_admin">
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
			<div class="dbx-card__body ajax" data-options='{ldelim}{rdelim}' data-url="{$PCMS_URL}/index.php?mod={$mod}&sub=admin&act=load_stock_hug">
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
				{assign var = gId value = $clsISO->getUniqid()}
				<div class="dbx-card__head">
					<span class="dbx-card__ic"><i class="bx bx-line-chart"></i></span>
					<div class="dbx-card__ttl">
						<h5 class="dbx-card__title">Biểu đồ doanh số</h5>
						<small class="dbx-card__sub">Biểu đồ tăng trưởng doanh số</small>
					</div>
					<div class="dbx-card__filter">
						<select class="form-control form-control-sm form-select" name="month" gId="{$gId}" onChange="$Core.dashboard.reload(this,event)">
							<option value="">Tháng</option>
							{foreach from=$list_months item = _month}
							<option value="{$_month}">T{$_month}</option>
							{/foreach}
						</select>
						<select class="form-control form-control-sm form-select" name="year" gId="{$gId}" onChange="$Core.dashboard.reload(this,event)">
							{foreach from=$list_years item = _year}
							<option{if $_year eq $smarty.now|date_format:"%Y"} selected{/if} value="{$_year}">{$_year}</option>
							{/foreach}
						</select>
						{if $deviceType ne 'phone' && 1==2}
						<button type="button" onClick="$Core.dashboard.open_full(this, event)" tp="load_billing_chart" class="btn d-none d-lg-block btn-icon btn-outline-default"><i class='bx bx-windows'></i></button>
						{/if}
					</div>
				</div>
				<div class="dbx-card__body">
					<div class="ajax" gId="{$gId}" data-url="{$PCMS_URL}/index.php?mod={$mod}&sub=dashboard&act=load_billing_chart" data-options='{ldelim}{rdelim}'>
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
							<tbody class="ajax" data-url="{$PCMS_URL}/index.php?mod={$mod}&sub=dashboard&act=load_search_history" data-options='{ldelim}{rdelim}'>
								{section name=i loop=$list_preloaders max=5}
								<tr>
									<td colspan="6"><div class="animate-bg h-px-15 w-100 rounded-2"></div></td>
								</tr>
								{/section}
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
							<a href="{$clsISO->getLink('request_ptg')}" class="dbx-card__link" title="Xem tất cả"><i class="bx bx-link-external"></i></a>
						</div>
						<div class="dbx-card__body dbx-card__body--flush">
							<div class="table-container overflow-x-auto text-nowrap">
								<table class="table mb-0" cellpadding="0" cellspacing="0">
									<thead><tr>
										{if $deviceType ne 'phone'}
										<th width="5%" class="text-center">STT</th>
										{/if}
										<th width="120px">Mã căn</th>
										<th class="text-center">Người yêu cầu</th>
										<th class="text-center" width="100px"></th>
									</tr></thead>
									<tbody class="ajax home_request_ptg" data-url="/index.php?mod=request_ptg&act=load_request_PTG">
										{section name=i loop=$list_preloaders max=12}
										<tr>
											{if $deviceType ne 'phone'}
											<td><div class="animate-bg h-px-20 w-100 rounded-2"></div></td>
											{/if}
											<td><div class="animate-bg h-px-20 w-100 rounded-2"></div></td>
											<td><div class="animate-bg h-px-20 w-100 rounded-2"></div></td>
											<td><div class="animate-bg h-px-20 w-100 rounded-2"></div></td>
										</tr>
										{/section}
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
						<div class="dbx-card__body ajax" data-url="{$PCMS_URL}/index.php?mod={$mod}&sub=dashboard&act=load_calendar_admin" data-options='{ldelim}{rdelim}'>
							<div class="text-center mb-3 fw-bold">Tháng {$smarty.now|date_format:"%m,%Y"}</div>
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
									{section name=i loop=$list_preloaders max=10}
									<tr>
										<td><div class="animate-bg h-px-20 w-100 rounded-2"></div></td>
										<td><div class="animate-bg h-px-20 w-100 rounded-2"></div></td>
										<td><div class="animate-bg h-px-20 w-100 rounded-2"></div></td>
										<td><div class="animate-bg h-px-20 w-100 rounded-2"></div></td>
										<td><div class="animate-bg h-px-20 w-100 rounded-2"></div></td>
										<td><div class="animate-bg h-px-20 w-100 rounded-2"></div></td>
										<td><div class="animate-bg h-px-20 w-100 rounded-2"></div></td>
									</tr>
									{/section}
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="form-row">
				<div class="col-12 col-md-6 mb-2 mb-lg-0">
					{$core->getBlock('top_billing', ['class' => ' h-100'])}
				</div>
				<div class="col-12 col-md-6">
					{$core->getBlock('top_staff', ['class' => ' h-100'])}
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
								<tbody class="ajax" data-url="{$PCMS_URL}/index.php?mod={$mod}&sub=dashboard&act=load_agent_sell_mwf" 
									data-options='{ldelim}{rdelim}'>
									{section name=i loop=$list_preloaders max=10}
									<tr>
										<td><div class="animate-bg h-px-20 w-100 rounded-2"></div></td>
										<td><div class="animate-bg h-px-20 w-100 rounded-2"></div></td>
										<td><div class="animate-bg h-px-20 w-100 rounded-2"></div></td>
										<td><div class="animate-bg h-px-20 w-100 rounded-2"></div></td>
									</tr>
									{/section}
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
		{$core->getBlock("home_billing_confirm")}
		{if $deviceType ne 'phone'}
		{$core->getBlock('note_calendar')}
		{*{$core->getBlock('ranking_group')}*}
		<div class="card ranking mb-2 pb-2">
			<div class="card-body">
				{$core->getBlock('top_ranking')}
			</div>
		</div>
		{$core->getBlock('ranking_dept')}
		{/if}
	</div>
</div>	
{literal}
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
<script>
	$(document).ready(function(){
		// $Core.report.agent_log();
	});
</script>
{/literal}