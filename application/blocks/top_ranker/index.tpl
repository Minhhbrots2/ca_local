<div class="top-ranker mt-2 rounded-2">
	<div class="top-ranker-header d-flex justify-content-between align-items-start gap-1 mb-3">
		<div class="d-flex align-items-center gap-2 gap-lg-3">
			<img class="w-px-40" src="{$header_configs.LogoWhite}" />
			<div class="ranking-title ext text-white {if $deviceType ne 'phone'}fs-18{else}fs-16{/if}">
				TOP 10 THI ĐUA CÁ NHÂN {$current_year} <br /> 
				<small>( {$start_date} - {$end_date} )</small> 
			</div>
		</div>
		{if $clsISO->checkPermissionGroup('DIRECTOR')}
		<div class="dropdown">
			<button type="button" class="btn p-0 btn-icon btn-sm text-white rounded-pill" data-bs-toggle="dropdown" aria-haspopup="true" 
				aria-expanded="false" style="background:#fafafa3d"><i class="bx bx-dots-vertical-rounded"></i></button>
			<div class="lst_option dropdown-menu dropdown-menu-end overflow-y-auto" style="max-height:300px">
				<a class="dropdown-item cursor-pointer active" uid="{$gId}" department_id="0" holderG="_department" 
					onclick="set_options(this, event)">Tất cả</a>
				{foreach from=$lstDepartment item=_oDepartment}
				<a class="dropdown-item cursor-pointer item_option" uid="{$gId}" department_id="{$_oDepartment.property_id}" 
					holderG="_department" onclick="set_options(this, event)">Phòng {$_oDepartment.title}</a>
				{/foreach}
			</div>
		</div>
		{elseif $clsISO->checkSale() || $clsISO->checkPermissionGroup('SALE_DIRECTOR')}
		<div class="dropdown">
			<button class="btn p-0 text-white btn-icon btn-sm rounded-pill" type="button" data-bs-toggle="dropdown" aria-haspopup="true" 
				aria-expanded="false" style="background: #fafafa3d"><i class="bx bx-dots-vertical-rounded"></i></button>
			<div class="lst_option dropdown-menu dropdown-menu-end overflow-y-auto" style="max-height: 300px">
				<a class="dropdown-item cursor-pointer active" uid="{$gId}" department_id="0" holderG="_department" 
					onclick="set_options(this, event)">Tất cả</a>
				<a class="dropdown-item cursor-pointer" uid="{$gId}" department_id="{$oneProfile.department_id}" holderG="_department" 
					onclick="set_options(this, event)" >Phòng</a>
			</div>
		</div>
		{/if}
	</div>
	<div class="top-ranker-body position-relative zindex-2">
		<table class="table table-ranker" cellpadding="0" cellspacing="0">
			<thead><tr>
				<th class="align-center w-px-50 h-px-40 text-center">STT</th>
				<th class="align-center h-px-40">Họ và tên</th>
				<th class="align-center h-px-40 text-center">Điểm</th>
				{if $deviceType ne 'phone'}
				<th class="align-center h-px-40 text-center lg:d-none">Xếp hạng</th>{/if}
			</tr></thead>
			<tbody class="ajax" data-url="{$PCMS_URL}/index.php?mod=campaign&act=top_10_ranker" 
				data-options="{ldelim}{rdelim}" id="{$gId}" data-bind="{$gId}">
				{section name=i loop=$list_preloaders max=10}
				<tr class="nohover">
					<td class="lg:d-none"><div class="animate-bg w-100 h-px-15 rounded-2"></div></td>
					<td><div class="animate-bg w-100 h-px-15 rounded-2"></div></td>
					<td><div class="animate-bg w-100 h-px-15 rounded-2"></div></td>
					{if $deviceType ne 'phone'}
					<td><div class="animate-bg w-100 h-px-15 rounded-2"></div></td>
					{/if}
				<tr>
				{/section}
			</tbody>
		</table>
	</div>
</div>