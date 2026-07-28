<div class="container-xxl flex-grow-1 container-p-y pt-2{if $deviceType eq 'phone'} px-0{/if}">
	<div class="form-row holder_mileston">
		<div class="col-12 col-xxl-10 mx-auto py-5 bg_mileston">
			<div class="row mx-auto" style="max-width: 1000px">
				{foreach from=$lstBilling item=_oItem key=key name=i}
					{assign var=oneStaff value=$_oItem.oneStaff }
					{assign var=oneStock value=$_oItem.oneStock }
					{if $smarty.foreach.i.first}
					<div class="col-12 mb-4">
						<h1 class="text-center text-upper title_page text-main fw-bold mb-4">Hành trình vinh danh chiến binh Future Homes {$year}</h1>
						<div class="item_mileston item_big border-double  text-dark">
							<div class="item_header d-flex align-items-center border-bottom">
								<div class="billing_code px-3 py-2 fw-bold">{$_oItem.billing_code}</div>
								<div class="time_deposit fw-bold text-black fst-italic">{$_oItem.deposit_date|date_format:"%d/%m/%Y"}</div>
							</div>
							<div class="item_body px-4 py-3">
								<div class="form-row">
									<div class="col-8 flex-fill">
										<div class="staff_info d-flex align-items-center">
											<div class="border-double img_avatar rounded-pill overflow-hidden"><img src="{$clsProfile->getAvatar($_oItem.staff_id,$oneStaff,100,100)}" alt="" class="w-100 h-100 object-fit-cover"></div>
											<div class="flex-fill">
												<h3 class="name">{$oneStaff.fullname}</h3>
												<p class="role">{$oneStaff.role_name}{if !empty($oneStaff.department_name)}-{$oneStaff.department_name}{/if}</p>
											</div>
										</div>
										<div class="bill_info {if $deviceType ne 'phone'}border-bottom{/if}">
											<div class="bill_item">
												<span class="label_item">Dự án:</span>
												<strong class="">{$_oItem.project_name}</strong>
											</div>
											{if !empty($_oItem.bedroom)}
											<div class="bill_item">
												<span class="label_item">Loại căn:</span>
												<strong class="">{$_oItem.bedroom}</strong>
											</div>
											{/if}
											{if !empty($_oItem.type_villa)}
											<div class="bill_item">
												<span class="label_item">Loại căn:</span>
												<strong class="">{$_oItem.type_villa}</strong>
											</div>
											{/if}
											{if !empty($_oItem.total_price)}
											<div class="bill_item">
												<span class="label_item">Trị :</span>
												<strong class="">{$_oItem.total_price}</strong>
											</div>
											{/if}
										</div>
										{if $deviceType ne 'phone'}
										<div class="content_item">{$_oItem.content}</div>
										{/if}
									</div>
									{if !empty($_oItem.image_poster)}
									<div class="col-4">
										<img src="{$_oItem.image_poster}" alt="" class="w-100 object-fit-cover rounded-3 border-double" data-fancybox="poster" data-src="{$_oItem.image_poster}" data-caption='<div class="staff_info d-flex justify-content-center align-items-center gap-2" loading="lazy">
										<div class="avatar avatar-md rounded-pill overflow-hidden"><img src="{$clsProfile->getAvatar($_oItem.staff_id,$oneStaff)}" alt="" class="w-100 h-100 object-fit-cover"></div>
										<div class="text-left">
											<h3 class="name">{$clsProfile->getfullname($_oItem.staff_id,$oneStaff)}</h3>
											<p class="role mb-1">{$oneStaff.role_name}{if !empty($oneStaff.department_name)}-{$oneStaff.department_name}{/if}</p>
										</div>
									</div>'>
									</div>
									{/if}
								</div>
							</div>
						</div>
					</div>
					{else}
					<div class="col-12 col-md-6 col-lg-6 mb-4">
						<div class="item_mileston item_small border-double text-dark h-100">
							<div class="item_header d-flex align-items-center border-bottom">
								<div class="billing_code px-3 py-2 fw-bold">{$_oItem.billing_code}</div>
								<div class="time_deposit fw-bold text-black fst-italic">{$_oItem.deposit_date|date_format:"%d/%m/%Y"}</div>
							</div>
							<div class="item_body form-row">
								<div class="col-8 flex-fill">
									<div class="staff_info d-flex align-items-center">
										<div class="border-double img_avatar rounded-pill overflow-hidden"><img src="{$clsProfile->getAvatar($_oItem.staff_id,$oneStaff,70,70)}" alt="" class="w-100 h-100 object-fit-cover" ></div>
										<div class="flex-fill">
											<h3 class="name">{$clsProfile->getfullname($_oItem.staff_id,$oneStaff)}</h3>
											<p class="role mb-1">{$oneStaff.role_name}{if !empty($oneStaff.department_name)}-{$oneStaff.department_name}{/if}</p>
										</div>
									</div>
									<div class="bill_info">
										<div class="bill_item">
											<span class="label_item">Dự án:</span>
											<strong class="">{$_oItem.project_name}</strong>
										</div>
										{if !empty($_oItem.bedroom)}
										<div class="bill_item">
											<span class="label_item">Loại căn:</span>
											<strong class="">{$_oItem.bedroom}</strong>
										</div>
										{/if}
										{if !empty($_oItem.type_villa)}
										<div class="bill_item">
											<span class="label_item">Loại căn:</span>
											<strong class="">{$_oItem.type_villa}</strong>
										</div>
										{/if}
										{if !empty($_oItem.total_price)}
										<div class="bill_item">
											<span class="label_item">Trị giá:</span>
											<strong class="">{$_oItem.total_price}</strong>
										</div>
										{/if}
									</div>
								</div>
								{if !empty($_oItem.image_poster)}
								<div class="col-4">
									<img src="{$_oItem.image_poster}" alt="" class="w-100 object-fit-cover rounded-3 border-double" data-fancybox="poster" data-src="{$_oItem.image_poster}" data-caption='<div class="staff_info d-flex justify-content-center align-items-center gap-2" loading="lazy">
										<div class="avatar avatar-md rounded-pill overflow-hidden"><img src="{$clsProfile->getAvatar($_oItem.staff_id,$oneStaff)}" alt="" class="w-100 h-100 object-fit-cover"></div>
										<div class="text-left">
											<h3 class="name">{$clsProfile->getfullname($_oItem.staff_id,$oneStaff)}</h3>
											<p class="role mb-1">{$oneStaff.role_name}{if !empty($oneStaff.department_name)}-{$oneStaff.department_name}{/if}</p>
										</div>
									</div>'>
								</div>
								{/if}
							</div>
						</div>
					</div>
					{/if}
				{/foreach}
			</div>
			<div class="d-flex justify-content-between pt-2 text-center" id="showmorethisresult">
				<button type="button" class="showmorethisresult" onClick="$Core.tool.load_more(this, event)" page="1"> 
					<span>Xem thêm</span> 
					<img src="{$URL_IMAGES}/loading_48.gif" width="24px"> 
				</button> 
			</div>
		</div>
	</div>
</div>