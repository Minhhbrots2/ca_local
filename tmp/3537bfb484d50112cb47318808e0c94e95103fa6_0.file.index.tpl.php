<?php
/* Smarty version 3.1.33, created on 2026-07-06 15:32:43
  from '/www/wwwroot/skyrealty.futureglobal.vn/application/blocks/home_screen_director/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a4b682b61c5a9_93754767',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3537bfb484d50112cb47318808e0c94e95103fa6' => 
    array (
      0 => '/www/wwwroot/skyrealty.futureglobal.vn/application/blocks/home_screen_director/index.tpl',
      1 => 1783314228,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a4b682b61c5a9_93754767 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/www/wwwroot/skyrealty.futureglobal.vn/core/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="form-row mb-2">
	<div class="col-12 col-lg-4 mb-2 mb-lg-0">
		<div class="card h-100">
			<?php $_smarty_tpl->_assignInScope('gId', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>
			<div class="card-body">
				<div class="d-flex align-items-center mb-3 justify-content-between">
					<div class="p-left">
						<h5 class="card-title mb-0 text-nowrap">Doanh số</h5>
						<small class="d-block text-nowrap" id="time_search_<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
">Bán hàng tới <?php echo smarty_modifier_date_format(time(),"%d/%m/%Y");?>
</small>
					</div>
					<div class="p-right">
						<div class="dropdown">
							<button type="button" class="btn btn-icon btn-sm btn-link rounded-pill" 
								data-bs-toggle="dropdown" data-toggle="ripple">
								<i class="bx bx-dots-vertical-rounded text-muted"></i>
							</button>
							<div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end">
								<div class="p-3">
									<div class="form-group mb-2" role="group" aria-label="Sắp xếp">
										<select class="form-control form-control-sm form-select" name="date_type" gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" 
											onChange="$Core.dashboard.reload(this,event)"> 
											<option<?php if ($_smarty_tpl->tpl_vars['curr_date_type']->value == '_month') {?> selected<?php }?> value="_month">Tháng</option>
											<option<?php if ($_smarty_tpl->tpl_vars['curr_date_type']->value == '_quarter') {?> selected<?php }?> value="_quarter">Quý</option>
											<option<?php if ($_smarty_tpl->tpl_vars['curr_date_type']->value == '_half_year') {?> selected<?php }?> value="_half_year">Nửa năm</option>
										</select>
									</div>
									<div class="form-group mb-2" role="group" aria-label="Sắp xếp">
										<select class="form-control form-control-sm form-select" name="month" gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" onChange="$Core.dashboard.reload(this,event)">
											<option value="0">Tháng</option>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_months']->value, '_month');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_month']->value) {
?>
											<option<?php if ($_smarty_tpl->tpl_vars['_month']->value == smarty_modifier_date_format(time(),"%m")) {?> selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['_month']->value;?>
">Tháng <?php echo $_smarty_tpl->tpl_vars['_month']->value;?>
</option>
											<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>	
										</select>
									</div>
									<div class="form-group " role="group" aria-label="Sắp xếp">	
										<select class="form-control form-control-sm form-select" name="year" gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" onchange="$Core.dashboard.reload(this,event)">
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_years']->value, '_year');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_year']->value) {
?>
											<option<?php if ($_smarty_tpl->tpl_vars['_year']->value == $_smarty_tpl->tpl_vars['current_year']->value) {?> selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['_year']->value;?>
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
						</div>
					</div>
				</div>
				<div class="ajax change_time" gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&sub=dashboard&act=load_sales_overview" 
					<?php if ($_smarty_tpl->tpl_vars['curr_date_type']->value == '_quarter') {?>data-options='{"date_type":"<?php echo $_smarty_tpl->tpl_vars['curr_date_type']->value;?>
","month":"<?php echo $_smarty_tpl->tpl_vars['current_quater']->value;?>
"}'<?php } else { ?>data-options='{}'<?php }?> toId="time_search_<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" >
					<div class="w-100 h-px-15 rounded-2 animate-bg mb-2"></div>
					<div class="w-100 h-px-15 rounded-2 animate-bg mb-2"></div>
					<div class="w-100 h-px-15 rounded-2 animate-bg mb-0"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-12 col-lg-4 mb-2 mb-lg-0">
		<div class="card h-100">
			<?php $_smarty_tpl->_assignInScope('gId', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>
			<div class="card-body">
				<div class="w-100 d-flex align-items-center justify-content-between mb-3">
					<div class="card-header-left">
						<h5 class="card-title mb-0 text-nowrap">Loại hình giao dịch</h5>
						<small class="d-block text-nowrap">Thống kê loại hình giao dịch tới <?php echo smarty_modifier_date_format(time(),"%d/%m/%Y");?>
</small>
					</div>
					<div class="card-header-right">
						<div class="dropdown">
							<button class="btn btn-icon btn-sm rounded-pill btn-link" type="button" 
								data-bs-toggle="dropdown" data-toggle="ripple">
								<i class="bx bx-dots-vertical-rounded text-muted"></i>
							</button>
							<div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end">
								<div class="p-3">
									<div class="form-group mb-2">
										<select class="form-control form-control-sm form-select" name="date_type" 
											gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" onChange="$Core.dashboard.reload(this,event)"> 
											<option value="_month">Tháng</option>
											<option value="_quarter">Quý</option>
											<option value="_half_year">Nửa năm</option>
										</select>
									</div>
									<div class="form-group mb-2" role="group" aria-label="Sắp xếp">
										<select class="form-control form-control-sm form-select" name="month" 
											gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" onChange="$Core.dashboard.reload(this,event)">
											<option value="0">Tháng</option>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_months']->value, '_month');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_month']->value) {
?>
											<option<?php if ($_smarty_tpl->tpl_vars['_month']->value == smarty_modifier_date_format(time(),"%m")) {?> selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['_month']->value;?>
">Tháng <?php echo $_smarty_tpl->tpl_vars['_month']->value;?>
</option>
											<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>	
										</select>
									</div>
									<div class="form-group  mb-2" role="group" aria-label="Sắp xếp">	
										<select class="form-control form-control-sm form-select" name="year" 
											gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" onchange="$Core.dashboard.reload(this,event)">
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_years']->value, '_year');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_year']->value) {
?>
											<option<?php if ($_smarty_tpl->tpl_vars['_year']->value == $_smarty_tpl->tpl_vars['current_year']->value) {?> selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['_year']->value;?>
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
						</div>
					</div>
				</div>
				<div class="ajax" gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&sub=dashboard&act=load_group_sale_overview">
					<div class="p-4 text-center">
						<div class="py-1">Loading...</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-12 col-lg-4">
		<div class="card h-100">
			<div class="card-body ajax" data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&sub=dashboard&act=load_info_staff" 
			data-options='{}'>
				<div class="p-5 text-center">
					<div class="p-2">Loading...</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Tiền về -->
<div class="form-row mb-2">
	<div class="col-12 col-lg-4 mb-2 mb-lg-0">
		<div class="card h-100">
			<?php $_smarty_tpl->_assignInScope('gId', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>
			<div class="w-100 d-flex card-header align-items-center justify-content-between">
				<h5 class="card-title mb-0">Thống kê quỹ độc quyền</h5>
				<a href="/fh-doc-quyen/" title="Xem tất cả" class="btn btn-icon btn-sm btn-link rounded-pill">
					<i class="bx bx-link-external text-fs-14 text-muted"></i>
				</a>
			</div>
			<div id="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" class="card-body ajax" data-options='{}' 
				data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&sub=dashboard&act=load_stock_hug">
				<div class="animate-bg rounded-2 mb-2 h-px-15 w-100"></div>
				<div class="animate-bg rounded-2 mb-2 h-px-15 w-100"></div>
				<div class="animate-bg rounded-2 mb-2 h-px-15 w-100"></div>
				<div class="animate-bg rounded-2 mb-2 h-px-15 w-100"></div>
			</div>
		</div>
	</div>
	<div class="col-12 col-lg-4 mb-2 mb-lg-0">
		<div class="card h-100">
			<?php $_smarty_tpl->_assignInScope('gId', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>
			<div class="card-header d-flex flex-wrap align-items-center justify-content-between">
				<h5 class="card-title mb-2 mb-lg-0 me-2">Thống kê M.O.C</h5>
				<div class="dropdown">
					<button class="btn btn-icon p-0 h-auto" type="button" data-bs-toggle="dropdown">
						<i class="bx bx-dots-vertical-rounded"></i>
					</button>
					<div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end">
						<div class="p-3">
							<div class="form-group mb-2" role="group" aria-label="Sắp xếp">
								<select class="form-control form-control-sm form-select" name="month" gid="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" onchange="$Core.dashboard.reload(this,event)"> 
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_months']->value, '_month');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_month']->value) {
?>
									<option<?php if ($_smarty_tpl->tpl_vars['_month']->value == smarty_modifier_date_format(time(),"%m")) {?> selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['_month']->value;?>
">Tháng <?php echo $_smarty_tpl->tpl_vars['_month']->value;?>
</option>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>	
								</select>
							</div>
							<div class="form-group  mb-2" role="group" aria-label="Sắp xếp">	
								<select class="form-control form-control-sm form-select" name="year" gid="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" onchange="$Core.dashboard.reload(this,event)">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_years']->value, '_year');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_year']->value) {
?>
									<option<?php if ($_smarty_tpl->tpl_vars['_year']->value == $_smarty_tpl->tpl_vars['current_year']->value) {?> selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['_year']->value;?>
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
				</div>
			</div>
			<div class="card-body">
				<div class="ajax" gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=load_log_check_stock" data-options='{}'>
					<div class="animate-bg rounded-2 mb-2 h-px-15 w-100"></div>
					<div class="animate-bg rounded-2 mb-2 h-px-15 w-100"></div>
					<div class="animate-bg rounded-2 mb-2 h-px-15 w-100"></div>
					<div class="animate-bg rounded-2 mb-2 h-px-15 w-100"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-12 col-lg-4 log_stock ajax mb-2 mb-lg-0" data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=load_top_search_stock" 
		data-options="{}">
		<div class="card h-100">
			<div class="card-header">
				<h5 class="card-title mb-0">Thống kê lượt tra cứu 24h qua</h5>
			</div>
			<div class="card-body" >
				<div class="animate-bg rounded-2 mb-2 h-px-15 w-100"></div>
				<div class="animate-bg rounded-2 mb-2 h-px-15 w-100"></div>
				<div class="animate-bg rounded-2 mb-2 h-px-15 w-100"></div>
				<div class="animate-bg rounded-2 mb-2 h-px-15 w-100"></div>
			</div>
		</div>
	</div>
</div>
<div class="form-row mb-2">
	<div class="col-12 col-md-8 col-lg-8 mb-2 mb-lg-0">
		<div class="card h-100">
			<?php $_smarty_tpl->_assignInScope('gId', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>
			<div class="card-header d-flex flex-wrap align-items-center justify-content-between gap-2">
				<h5 class="card-title mb-2 mb-lg-0 me-2">Tăng trưởng doanh số</h5>
				<div class="d-flex flex-wrap gap-2">
					<?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?>
					<div class="dropdown">
						<button class="btn btn-icon p-0 h-auto" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="bx bx-dots-vertical-rounded"></i>
						</button>
						<div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end">
							<div class="p-3">
								<div class="form-group mb-2" role="group" aria-label="Sắp xếp">
									<select class="form-control form-control-sm form-select" name="department" gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" onChange="$Core.dashboard.load_profile(this,event)"> 
										<option value="">Phòng</option>			
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lstDepartMent']->value, '_department');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_department']->value) {
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['_department']->value['property_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_department']->value['title'];?>
</option>
										<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										<option value="OTHER">Phòng tổng hợp</option>
									</select>
								</div>
								<div class="form-group mb-2" role="group" aria-label="Sắp xếp">
									<select class="form-control form-control-sm form-select" name="profile_id" id="profile_<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" onChange="$Core.dashboard.reload(this,event)"> 
										<option value="">Nhân viên</option>			
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lstProfile']->value, '_oProfile');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oProfile']->value) {
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['_oProfile']->value['profile_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_oProfile']->value['full_name'];?>
</option>
										<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</select>
								</div>
								<div class="form-group mb-2" role="group" aria-label="Sắp xếp">
									<select class="form-control form-control-sm form-select" name="month" gid="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" onchange="$Core.dashboard.reload(this,event)"> 
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_months']->value, '_month');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_month']->value) {
?>
										<option<?php if ($_smarty_tpl->tpl_vars['_month']->value == smarty_modifier_date_format(time(),"%m")) {?> selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['_month']->value;?>
">Tháng <?php echo $_smarty_tpl->tpl_vars['_month']->value;?>
</option>
										<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>	
									</select>
								</div>
								<div class="form-group  mb-2" role="group" aria-label="Sắp xếp">	
									<select class="form-control form-control-sm form-select" name="year" gid="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" onchange="$Core.dashboard.reload(this,event)">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_years']->value, '_year');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_year']->value) {
?>
										<option<?php if ($_smarty_tpl->tpl_vars['_year']->value == $_smarty_tpl->tpl_vars['current_year']->value) {?> selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['_year']->value;?>
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
					</div>
					<?php } else { ?>
					<div class="p-right ox:w-100">
						<div class="input-group w-px-400 ox:w-100 d-flex" role="group" aria-label="Sắp xếp">
							<select class="form-control form-control-sm form-select" name="department" gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" 
							onChange="$Core.dashboard.load_profile(this,event)"> 
								<option value="">Phòng</option>			
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lstDepartMent']->value, '_department');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_department']->value) {
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['_department']->value['property_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_department']->value['title'];?>
</option>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								<option value="OTHER">Phòng tổng hợp</option>
							</select>
							<select class="form-control form-control-sm form-select" name="profile_id" id="profile_<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" 
							gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" onChange="$Core.dashboard.reload(this,event)"> 
								<option value="">Nhân viên</option>			
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lstProfile']->value, '_oProfile');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oProfile']->value) {
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['_oProfile']->value['profile_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_oProfile']->value['full_name'];?>
</option>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</select>
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
								<option<?php if ($_smarty_tpl->tpl_vars['_year']->value == $_smarty_tpl->tpl_vars['current_year']->value) {?> selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['_year']->value;?>
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
					<?php }?>
				</div>
			</div>
			<div class="card-body pb-0">
				<div class="ajax" gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&sub=dashboard&act=load_billing_chart" data-options='{}'>
					<div class="animate-bg rounded-2 mb-2 h-px-15 w-100"></div>
					<div class="animate-bg rounded-2 mb-2 h-px-15 w-100"></div>
					<div class="animate-bg rounded-2 mb-2 h-px-15 w-100"></div>
					<div class="animate-bg rounded-2 mb-2 h-px-15 w-100"></div>
					<div class="animate-bg rounded-2 mb-2 h-px-15 w-100"></div>
					<div class="animate-bg rounded-2 mb-2 h-px-15 w-100"></div>
					<div class="animate-bg rounded-2 mb-2 h-px-15 w-100"></div>
					<div class="animate-bg rounded-2 mb-2 h-px-15 w-100"></div>
					<div class="animate-bg rounded-2 mb-2 h-px-15 w-100"></div>
					<div class="animate-bg rounded-2 mb-2 h-px-15 w-100"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-12 col-md-4 col-lg-4">
		<div class="card h-100">
			<?php $_smarty_tpl->_assignInScope('gId', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>
			<div class="card-header d-flex flex-wrap align-items-center justify-content-between gap-2">
				<h5 class="card-title mb-2 mb-lg-0 me-2">Lịch ký VBTT/HĐMB</h5>
				<div class="d-flex flex-wrap">
					<input type="text" readonly="readonly" gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" onChange="$Core.dashboard.reload(this,event)" name="sign_date" 
					class="datepicker is_icon form-control form-control-sm w-px-125" value="<?php echo smarty_modifier_date_format(time(),'%d/%m/%Y');?>
"  />
				</div>
			</div>
			<div class="card-body">
				<div class="table-container no-shadow overflow-auto text-nowrap<?php if ($_smarty_tpl->tpl_vars['deviceType']->value != 'phone') {?> max-height-265<?php }?>">
					<table class="table mb-0" border="0" cellpadding="0" cellspacing="0" width="100%" >
						<thead><tr>
							<th class="align-center" style="background:#FFF !important;">Mã căn</th>
							<th class="align-center">Admin</th>
							<th class="align-center text-right">T.Trạng</th>
							<th class="align-center text-right">Loại</th>
						</tr></thead>
						<tbody gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" class="table-border-bottom-0 ajax  billing_calendar" data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&sub=calendar&act=load_calendar_today&call_from=_dashboard" data-options='{"sign_date":"<?php echo smarty_modifier_date_format(time(),'%d/%m/%Y');?>
"}'>
							<?php
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['list_preloaders']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = min(($__section_i_2_loop - 0), 8);
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total !== 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
							<tr>
								<td><div class="animate-bg h-px-15 mb-1 w-100 rounded-2"></div></td>
								<td><div class="animate-bg h-px-15 mb-1 w-100 rounded-2"></div></td>
								<td><div class="animate-bg h-px-15 mb-1 w-100 rounded-2"></div></td>
								<td><div class="animate-bg h-px-15 mb-1 w-100 rounded-2"></div></td>
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
</div>	
<div class="form-row">
	<div class="col-12 col-md-12 col-lg-8 order-0">	
		<div class="sticky">
			<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->_DEV()) {?>
				<div class="card h-100 mb-2">
					<?php $_smarty_tpl->_assignInScope('gId', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>
					<div class="card-header d-flex flex-wrap align-items-center justify-content-between gap-2">
						<h5 class="card-title mb-2 mb-lg-0 me-2">Thống kê doanh số</h5>
						<div class="d-flex flex-wrap gap-2">
							<?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?>
							<div class="dropdown">
								<button class="btn btn-icon p-0 h-auto" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="bx bx-dots-vertical-rounded"></i>
								</button>
								<div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end">
									<div class="p-3">
										<div class="form-group mb-2" role="group" aria-label="Sắp xếp">
											<select class="form-control form-control-sm form-select" name="department" gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" onChange="$Core.dashboard.load_profile(this,event)"> 
												<option value="">Phòng</option>			
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lstDepartMent']->value, '_department');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_department']->value) {
?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['_department']->value['property_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_department']->value['title'];?>
</option>
												<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
												<option value="OTHER">Phòng tổng hợp</option>
											</select>
										</div>
										<div class="form-group mb-2" role="group" aria-label="Sắp xếp">
											<select class="form-control form-control-sm form-select" name="profile_id" id="profile_<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" onChange="$Core.dashboard.reload(this,event)"> 
												<option value="">Nhân viên</option>			
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lstProfile']->value, '_oProfile');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oProfile']->value) {
?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['_oProfile']->value['profile_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_oProfile']->value['full_name'];?>
</option>
												<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
											</select>
										</div>
										<div class="form-group mb-2" role="group" aria-label="Sắp xếp">
											<select class="form-control form-control-sm form-select" name="month" gid="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" onchange="$Core.dashboard.reload(this,event)"> 
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_months']->value, '_month');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_month']->value) {
?>
												<option<?php if ($_smarty_tpl->tpl_vars['_month']->value == smarty_modifier_date_format(time(),"%m")) {?> selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['_month']->value;?>
">Tháng <?php echo $_smarty_tpl->tpl_vars['_month']->value;?>
</option>
												<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>	
											</select>
										</div>
										<div class="form-group  mb-2" role="group" aria-label="Sắp xếp">	
											<select class="form-control form-control-sm form-select" name="year" gid="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" onchange="$Core.dashboard.reload(this,event)">
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_years']->value, '_year');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_year']->value) {
?>
												<option<?php if ($_smarty_tpl->tpl_vars['_year']->value == $_smarty_tpl->tpl_vars['current_year']->value) {?> selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['_year']->value;?>
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
							</div>
							<?php } else { ?>
							<div class="p-right ox:w-100">
								<div class="input-group w-px-400 ox:w-100 d-flex" role="group" aria-label="Sắp xếp">
									<select class="form-control form-control-sm form-select" name="department" gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" 
									onChange="$Core.dashboard.load_profile(this,event)"> 
										<option value="">Phòng</option>			
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lstDepartMent']->value, '_department');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_department']->value) {
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['_department']->value['property_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_department']->value['title'];?>
</option>
										<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										<option value="OTHER">Phòng tổng hợp</option>
									</select>
									<select class="form-control form-control-sm form-select" name="profile_id" id="profile_<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" 
									gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" onChange="$Core.dashboard.reload(this,event)"> 
										<option value="">Nhân viên</option>			
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lstProfile']->value, '_oProfile');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oProfile']->value) {
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['_oProfile']->value['profile_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_oProfile']->value['full_name'];?>
</option>
										<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</select>
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
										<option<?php if ($_smarty_tpl->tpl_vars['_year']->value == $_smarty_tpl->tpl_vars['current_year']->value) {?> selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['_year']->value;?>
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
							<?php }?>
						</div>
					</div>
					<div class="card-body pb-0">
						<div class="ajax" gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&sub=dashboard&act=load_revenue_chart" data-options='{}'>
							<div class="animate-bg rounded-2 mb-2 h-px-15 w-100"></div>
							<div class="animate-bg rounded-2 mb-2 h-px-15 w-100"></div>
							<div class="animate-bg rounded-2 mb-2 h-px-15 w-100"></div>
							<div class="animate-bg rounded-2 mb-2 h-px-15 w-100"></div>
							<div class="animate-bg rounded-2 mb-2 h-px-15 w-100"></div>
							<div class="animate-bg rounded-2 mb-2 h-px-15 w-100"></div>
							<div class="animate-bg rounded-2 mb-2 h-px-15 w-100"></div>
							<div class="animate-bg rounded-2 mb-2 h-px-15 w-100"></div>
							<div class="animate-bg rounded-2 mb-2 h-px-15 w-100"></div>
							<div class="animate-bg rounded-2 mb-2 h-px-15 w-100"></div>
						</div>
					</div>
				</div>
			<?php }?>
			<div class="card mb-2">
				<div class="card-header d-flex justify-content-between align-items-center">
					<h5 class="card-title mb-0"><svg class="animated-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#C00000" viewBox="0 0 16 16"><path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.73 1.73 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.73 1.73 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.73 1.73 0 0 0 3.407 2.31zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.16 1.16 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.16 1.16 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732z"></path></svg> Hoạt động tiếp khách</h5>
					<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/net-dep-lao-dong.html" title="Xem tất cả" class="btn btn-icon btn-sm btn-link rounded-pill">
						<i class="bx bx-link-external text-fs-14 text-muted"></i>
					</a>
				</div>
				<div class="card-body ajax" data-bind="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" data-url="/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=load_top_shares">
					<div class="form-row">
					<?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?>
						<?php
$__section_i_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['list_preloader']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_3_total = min(($__section_i_3_loop - 0), 3);
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_3_total !== 0) {
for ($__section_i_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_3_iteration <= $__section_i_3_total; $__section_i_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
						<div class="col-4">
							<div class="animate-bg rounded-2 w-100 h-px-100"></div>
						</div>
						<?php
}
}
?>
					<?php } else { ?>
						<?php
$__section_i_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['list_preloader']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_4_total = min(($__section_i_4_loop - 0), 6);
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_4_total !== 0) {
for ($__section_i_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_4_iteration <= $__section_i_4_total; $__section_i_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
						<div class="col-2">
							<div class="animate-bg rounded-2 w-100 h-px-175"></div>
						</div>
						<?php
}
}
?>
					<?php }?>
					</div>
				</div>
			</div>
			<div class="form-row mb-2">
				<div class="col-12 col-lg-6 mb-2 mb-lg-0">
					<div class="card h-100">
						<?php $_smarty_tpl->_assignInScope('gId', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>
						<div class="card-header d-flex align-items-center justify-content-between">
							<div class="mb-lg-0">
								<h5 class="m-0 me-2">TOP 10 Sales</h5>
								<small class="text-muted">Người bán hàng tốt nhất</small>
							</div>
							<div class="input-group w-px-150 ox:w-100 d-flex" role="group" aria-label="Sắp xếp">
								<select class="form-control form-control-sm form-select" name="month" gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" 
								onChange="$Core.dashboard.reload(this, event)"> 
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
								<select class="form-control form-control-sm form-select" name="year" gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" 
								onChange="$Core.dashboard.reload(this, event)">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_years']->value, '_year');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_year']->value) {
?>
									<option<?php if ($_smarty_tpl->tpl_vars['_year']->value == $_smarty_tpl->tpl_vars['current_year']->value) {?> selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['_year']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['_year']->value;?>
</option>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</select>
							</div>
						</div>
						<div class="card-body ajax" data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&sub=dashboard&act=top_billing" 
						gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" data-options='{}'>
							<div class="p-5 text-center w-100 h-100">
								<div class="p-5">
									<div class="p-5 text-muted">Loading...</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-6 flex-fill">
					<div class="card h-100">
						<?php $_smarty_tpl->_assignInScope('gId', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>
						<div class="card-header d-flex align-items-center justify-content-between">
							<div class="mb-lg-0">
								<h5 class="m-0 me-2">Thống kê</h5>
								<small class="text-muted">Theo loại giao dịch</small>
							</div>
							<div class="input-group w-px-175 ox:w-100 d-flex" role="group" aria-label="Sắp xếp">
								<select class="form-control form-control-sm form-select" name="month" gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" onChange="$Core.dashboard.reload(this,event)"> 
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
								<select class="form-control form-control-sm form-select" name="year" gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" 
								onChange="$Core.dashboard.reload(this,event)">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_years']->value, '_year');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_year']->value) {
?>
									<option<?php if ($_smarty_tpl->tpl_vars['_year']->value == $_smarty_tpl->tpl_vars['current_year']->value) {?> selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['_year']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['_year']->value;?>
</option>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</select>
							</div>
						</div>
						<div class="card-body ajax" data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&sub=dashboard&act=chart_billing_type" 
							gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" data-options='{}'>
							<div class="p-5 text-center w-100 h-100">
								<div class="p-5">
									<div class="p-5 text-muted">Loading...</div>
								</div>
							</div>
						</div>	
					</div>
				</div>
			</div>
			<div class="form-row mb-2">
				<div class="col-12 col-md-6 mb-2 mb-lg-0 flex-fill">
					<div class="card h-100">
						<div class="card-header d-flex align-items-center justify-content-between">
							<h5 class="card-title mb-0">Giao dịch mới nhất</h5>
							<a><i class="bx bx-help-circle"></i></a>
						</div>
						<div class="card-body ajax" data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=dashboard&tp=top_billing" 
						data-options='{}'>
							<div class="loader text-center py-8">
								<img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/loading.gif" />
								<p>Loading...</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6">
					<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('top_staff',array('class'=>' h-100'));?>

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
	<!--/ Total Revenue -->
	<div class="col-12 col-md-12 col-lg-4 order-3 order-md-2">
		<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock("home_billing_confirm");?>

		<!-- Start commission -->
		<div class="w-100 mb-2">
			<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('commission');?>

		</div>
		<!-- End commission -->
		<?php if ($_smarty_tpl->tpl_vars['deviceType']->value != 'phone') {?>
			<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('note_calendar');?>

			<?php $_smarty_tpl->_assignInScope('_gId', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>
			<div class="card ranking mb-2">
				<div class="card-body">
					<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('top_ranking',array('_gId'=>$_smarty_tpl->tpl_vars['_gId']->value));?>

				</div>
			</div>
			<?php $_smarty_tpl->_assignInScope('gId', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>
			<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('ranking_dept',array('gId'=>$_smarty_tpl->tpl_vars['gId']->value));?>

			<?php $_smarty_tpl->_assignInScope('gId', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>
			<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('top_ranker',array('gId'=>$_smarty_tpl->tpl_vars['gId']->value));?>

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
		left: 0px; top: 50%;
		transform:translateY(-50%);
		border-left: 5px solid #950b25;
	}
</style>
<?php }
}
