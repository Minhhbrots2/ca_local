<?php
/* Smarty version 3.1.33, created on 2026-01-20 22:23:27
  from '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/member/edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_696f9defeb89d7_51598257',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1310d22be1e4f41845327246228d8bda4be0cf23' => 
    array (
      0 => '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/member/edit.tpl',
      1 => 1730083834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_696f9defeb89d7_51598257 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/fhgroupt/ca.futurehomes.vn/core/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<link rel="stylesheet" type="text/css" href="<?php echo @constant('DOMAIN_URL');?>
/cropper/cropper.min.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" media="all" />
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('DOMAIN_URL');?>
/cropper/html2canvas.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('DOMAIN_URL');?>
/cropper/cropper.min.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
<div class="ui-title-bar-container">
	<div class="ui-title-bar">
		<div class="ui-title-bar__navigation">
			<div class="ui-breadcrumbs">
				<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
" class="btn btn-default ui-breadcrumb">
					<?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('angle-left mr-5');?>

					<span class="ui-breadcrumb__item">Danh sách thành viên</span>
				</a>
			</div>
		</div>
	</div>
	<div class="ui-title-bar">
		<div class="ui-title-bar__main-group">
			<div class="ui-title-bar__heading-group">
				<?php if ($_smarty_tpl->tpl_vars['pvalTable']->value > '0') {?>
				<h1 class="ui-title-bar__title">Chỉnh sửa</h1>
				<?php } else { ?>
				<h1 class="ui-title-bar__title">Thêm mới</h1>
				<?php }?>
			</div>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['action']->value == '_edit') {?>
		<div class="action-bar">
			<div class="ui-title-bar__mobile-primary-actions">
				<div class="ui-title-bar__actions">
					<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=view&profile_id=<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" class="btn btn-default ui-title-bar__action" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('View');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('eye','Xem chi tiết');?>
</a>
				</div>
			</div>
		</div>
		<?php }?>
	</div>
</div>
<div class="ui-layout">
	<form id="edititem" method="post" action="" enctype="multipart/form-data" class="validate-form">
		<div class="row">
			<div class="col-md-8">
				<?php if ($_smarty_tpl->tpl_vars['errMsg']->value) {?>
				<div class="message text-danger text-red" style="margin-bottom:25px"><?php echo $_smarty_tpl->tpl_vars['errMsg']->value;?>
</div>
				<?php }?>
				<div class="box light">
					<div class="box-title">
						<div class="caption">
							<span class="bold">Thông tin đăng nhập</span>
						</div>
					</div>
					<div class="box-body">
						<div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<label>Tên đăng nhập <span class="requiredMark">*</span></label>
									<input type="text" class="form-control" name="iso-user_name" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == '_edit') {
echo $_smarty_tpl->tpl_vars['oneItem']->value['user_name'];
}?>" 
									placeholder="Tên đăng nhập" required="true" autocomplete="off" autocomplete="chrome-off" />
								</div>
								<div class="col-md-6">
									<label><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Email');?>
 <span class="requiredMark">*</span></label>
									<input type="text" class="form-control email" name="iso-email" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == '_edit') {
echo $_smarty_tpl->tpl_vars['oneItem']->value['email'];
}?>" 
									placeholder="Nhập tên" required="true" autocomplete="off" autocomplete="chrome-off" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<label class="col-form-label">Mật khẩu</label>
									<?php if ($_smarty_tpl->tpl_vars['action']->value == '_add') {?> <span class="requiredMark">*</span><?php }?></label>
									<input type="password" class="form-control" name="user_pass" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Password');?>
"<?php if ($_smarty_tpl->tpl_vars['action']->value == '_add') {?> required="true"<?php }?> autocomplete="new-password" />
								</div>
								<div class="col-md-6">
									<label class="col-form-label">Xác nhận mật khẩu</label> 
									<?php if ($_smarty_tpl->tpl_vars['action']->value == '_add') {?> <span class="requiredMark">*</span><?php }?></label>
									<input type="password" class="form-control" name="user_cpass" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Confirm Password');?>
"<?php if ($_smarty_tpl->tpl_vars['action']->value == '_add') {?> required="true"<?php }?> autocomplete="new-password" />
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="box light">
					<div class="box-title">
						<div class="caption">
							<span class="bold">Thông tin chi tiết</span>
						</div>
					</div>
					<div class="box-body">
						<div class="form-group">
							<div class="row">
								<div class="col-md-4">
									<label>Mã nhân viên</label>
									<input type="text" name="iso-code" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['code'];?>
" placeholder="Nhập mã" />
								</div>
								<div class="col-md-4">
									<label>Họ</label>
									<input type="text" name="iso-first_name" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['first_name'];?>
" placeholder="Nhập họ" />
								</div>
								<div class="col-md-4">
									<label>Tên</label>
									<input type="text" name="iso-last_name" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['last_name'];?>
" placeholder="Nhập tên" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-4">
									<label>Điện thoại</label>
									<input type="text" class="form-control" name="iso-phone" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['phone'];?>
" placeholder="Nhập điện thoại" />
								</div>
								<div class="col-md-8">
									<label>Địa chỉ</label>
									<input type="text" class="form-control" name="iso-address" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['address'];?>
" placeholder="Nhập địa chỉ" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-4">
									<label>Ngày sinh</label>
									<input type="text" class="form-control datepicker" name="birthday" value="<?php if (!empty($_smarty_tpl->tpl_vars['oneItem']->value['birthday'])) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oneItem']->value['birthday'],'%d/%m/%Y');
}?>" placeholder="dd/mm/yyy" />
								</div>
								<div class="col-md-4">
									<label>CCCD</label>
									<input type="text" class="form-control" name="iso-CCID" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['CCID'];?>
" placeholder="CCID/CMTND" />
								</div>
								<div class="col-md-4">
									<label>Ngày bắt đầu</label>
									<input type="text" class="form-control datepicker" name="iso-start_date" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['start_date'];?>
" placeholder="dd/mm/yyyy" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-4">
									<label>Đại lý</label>
									<input type="text" class="form-control" name="agency" value="<?php echo $_smarty_tpl->tpl_vars['more_information']->value['agency'];?>
" placeholder="Future homes" />
								</div>
								<div class="col-md-8">
									<label>Kinh nghiệm</label>
									<input type="text" class="form-control" name="experience" value="<?php echo $_smarty_tpl->tpl_vars['more_information']->value['experience'];?>
" placeholder="1 năm" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-4">
									<label>Số giao dịch thành công</label>
									<input type="number" class="form-control" name="number_sale" value="<?php echo $_smarty_tpl->tpl_vars['more_information']->value['number_sale'];?>
" placeholder="100" />
								</div>
								<div class="col-md-8">
									<label>Doanh số bán hàng</label>
									<input type="text" class="form-control" name="total_sales" value="<?php echo $_smarty_tpl->tpl_vars['more_information']->value['total_sales'];?>
" placeholder="10 tỷ" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-4">
									<label>Quốc gia</label>
									<select class="form-control" name="iso-country_id" id="country_id">
										<?php echo $_smarty_tpl->tpl_vars['clsCountry']->value->makeSelectOption($_smarty_tpl->tpl_vars['oneItem']->value['country_id']);?>

									</select>
								</div>
								<div class="col-md-4">
									<label>Tỉnh/Thành phố</label>
									<select class="form-control" name="iso-city_id" id="city_id">
										<option value="0">-- Tỉnh/ Thành phố --</option>
									</select>
								</div>
								<div class="col-md-4">
									<label>Quận/Huyện</label>
									<select class="form-control" name="iso-district_id"  id="district_id">
										<option value="0">-- Quận/ Huyện --</option>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-6 mb-3">
									<label>LinkedIn</label>
									<input type="text" class="form-control" name="linkedin" value="<?php echo $_smarty_tpl->tpl_vars['more_information']->value['linkedin'];?>
" placeholder="https://www.linkedin.com/" />
								</div>
								<div class="col-md-6 mb-3">
									<label>Instagram</label>
									<input type="text" class="form-control" name="instagram" value="<?php echo $_smarty_tpl->tpl_vars['more_information']->value['instagram'];?>
" placeholder="https://www.instagram.com/" />
								</div>
								<div class="col-md-6 mb-3">
									<label>Facebook</label>
									<input type="text" class="form-control" name="facebook" value="<?php echo $_smarty_tpl->tpl_vars['more_information']->value['facebook'];?>
" placeholder="https://www.facebook.com/" />
								</div>
								<div class="col-md-6 mb-3">
									<label>Twitter</label>
									<input type="text" class="form-control" name="twitter" value="<?php echo $_smarty_tpl->tpl_vars['more_information']->value['twitter'];?>
" placeholder="https://twitter.com/" />
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="box light">
					<div class="box-title">
						<div class="caption">
							<span class="bold">Giới thiệu</span>
						</div>
					</div>
					<div class="box-body">
						<div class="form-group">
							<textarea id="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid();?>
" class="form-control isoTextArea edit_profile_field_about" name="about" cols="255" rows="15"><?php echo $_smarty_tpl->tpl_vars['more_information']->value['about'];?>
</textarea>
						</div>
					</div>
				</div>
				<div class="box light">
					<div class="box-title">
						<div class="caption">
							<span class="bold">Châm ngôn sống</span>
						</div>
					</div>
					<div class="box-body">
						<div class="form-group">
							<textarea id="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid();?>
" class="form-control isoTextArea edit_profile_field_dictum_live" name="dictum_live" cols="255" rows="15"><?php echo $_smarty_tpl->tpl_vars['more_information']->value['dictum_live'];?>
</textarea>
						</div>
					</div>
				</div>
				<div class="box light">
					<div class="box-title">
						<div class="caption">
							<span class="bold">Thành tích</span>
						</div>
					</div>
					<div class="box-body">
						<div class="form-group">
							<textarea id="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid();?>
" class="form-control isoTextArea edit_profile_field_achievements" name="achievements" cols="255" rows="15"><?php echo $_smarty_tpl->tpl_vars['more_information']->value['achievements'];?>
</textarea>
						</div>
					</div>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['pvalTable']->value > 0) {?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lstFieldMoreInfomation']->value, 'Field', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['Field']->value) {
?>
					<div class="box light">
						<div class="box-title d-flex justify-content-between align-items-center">
							<h5 class="card-title mb-0"><?php echo $_smarty_tpl->tpl_vars['Field']->value['title'];?>
</h5>
							<button class="btn btn-outline-default" type="button" onClick="$Core.member.formAddField(this,'open')" data-profile_id='<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
' data-field="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?>Thêm<?php } else { ?>Thêm mới<?php }?></button>
						</div>
						<div class="box-body">
							<table class="table table-iloocal table-<?php echo $_smarty_tpl->tpl_vars['deviceType']->value;?>
 table-bordered">
								<thead>
									<tr>
										<th class="align-center bg-lighter" style="width:40px">Ảnh</th>
										<th class="align-center text-left bg-lighter">Tiêu đề</th>
										<?php if ($_smarty_tpl->tpl_vars['k']->value == 'project') {?>
											<th class="align-center text-left bg-lighter w-px-75" style="width:75px">Số căn bán</th>
										<?php }?>
										<th class="align-center text-left bg-lighter w-px-40" style="width:40px"></th>
									</tr>
								</thead>
								<tbody class="lst_certificate" id="lst_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
									<?php if (!empty($_smarty_tpl->tpl_vars['more_information']->value[$_smarty_tpl->tpl_vars['k']->value])) {?>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['more_information']->value[$_smarty_tpl->tpl_vars['k']->value], 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
											<tr>
												<td><img class="rounded" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" width="50" height="50"></td>
												<td><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</td>
												<?php if ($_smarty_tpl->tpl_vars['k']->value == 'project') {?>
													<td class="text-center"><?php echo $_smarty_tpl->tpl_vars['item']->value['total_sale_project'];?>
</td>
												<?php }?>
												<td>
													<div class="btn-group">
														<button class="btn iso-button-standard dropdown-toggle" type="button" data-toggle="dropdown"> <i class="icon-cog"></i> <span class="caret"></span></button>
														<ul class="dropdown-menu" style="right:0px !important; left: auto">
															<li><a title="Sửa" href="javascript:void(0)"  onClick="$Core.member.formAddField(this,'open')"  data-profile_id='<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
' data-field_id="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" data-field="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" data-type="edit"><i class="icon-edit"></i> <span>Sửa</span></a></li>
															<li><a href="javascript:void(0)" onClick="$Core.member.deleteField(this,'delete')" data-profile_id='<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
' data-field_id="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" data-field="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><i class="icon-trash"></i> <span>Xoá</span></a></li>
														</ul>
													</div>
												</td>
											</tr>
										<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									<?php } else { ?>
										<tr>
											<td class="text-center" colspan="<?php if ($_smarty_tpl->tpl_vars['k']->value == 'project') {?>4<?php } else { ?>3<?php }?>">Chưa có dữ liệu</td>	
										</tr>
									<?php }?>
								</tbody>
							</table>
						</div>
					</div>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<div class="box light">
						<div class="box-title d-flex justify-content-between align-items-center">
							<h5 class="card-title mb-0">Lịch sử bán hàng</h5>
							<button class="btn btn-outline-default" type="button" onClick="$Core.member.formAddField(this,'open')" data-profile_id='<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
' data-field="history_sale"><?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?>Thêm<?php } else { ?>Thêm mới<?php }?></button>
						</div>
						<div class="box-body">
							<table class="table table-iloocal table-<?php echo $_smarty_tpl->tpl_vars['deviceType']->value;?>
 table-bordered">
								<thead><tr>
									<th class="align-center bg-lighter" style="width:40px">Mã căn</th>
									<th class="align-center text-left bg-lighter">Dự án</th>
									<th class="align-center text-left bg-lighter">Số tiền</th>
									<th class="align-center text-left bg-lighter">Tên khách hàng</th>
									<th class="align-center text-left bg-lighter">Ngày giao dịch</th>
									<th class="align-center text-left bg-lighter w-px-40" style="width:40px"></th>
								</tr></thead>
								<tbody class="lst_certificate" id="lst_history_sale">
								<?php if (!empty($_smarty_tpl->tpl_vars['more_information']->value['history_sale'])) {?>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['more_information']->value['history_sale'], 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
										<tr>
											<td><?php echo $_smarty_tpl->tpl_vars['item']->value['stock_code'];?>
</td>
											<td><?php echo $_smarty_tpl->tpl_vars['item']->value['project'];?>
</td>
											<td><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->shortNumber($_smarty_tpl->tpl_vars['item']->value['price']);?>
</td>
											<td><?php echo $_smarty_tpl->tpl_vars['item']->value['customer_name'];?>
</td>
											<td><?php echo $_smarty_tpl->tpl_vars['item']->value['date_trading'];?>
</td>
											<td>
												<div class="btn-group">
													<button class="btn iso-button-standard dropdown-toggle" type="button" data-toggle="dropdown"> <i class="icon-cog"></i> <span class="caret"></span></button>
													<ul class="dropdown-menu" style="right:0px !important; left: auto">
														<li><a class="dropdown-item" href="javascript:void(0)"  onClick="$Core.member.formAddField(this,'open')" data-profile_id='<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
' data-field_id="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"  data-field="history_sale" data-type="edit">Sửa</a></li>
														<li><a class="dropdown-item" href="javascript:void(0)"  onClick="$Core.member.deleteField(this,'delete')" data-profile_id='<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
' data-field_id="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" data-field="history_sale">Xoá</a></li>
													</ul>
												</div>
											</td>
										</tr>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								<?php } else { ?>
									<tr>
										<td class="text-center" colspan="6">Chưa có dữ liệu</td>	
									</tr>
								<?php }?>
								</tbody>
							</table>
						</div>
					</div>
					<div class="box light">
						<div class="box-title d-flex justify-content-between align-items-center">
							<h5 class="card-title mb-0">Nhận xét của khách hàng</h5>
							<button class="btn btn-outline-default" type="button" onClick="$Core.member.formAddField(this,'open')" data-profile_id='<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
' data-field="customer_review"><?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?>Thêm<?php } else { ?>Thêm mới<?php }?></button>
						</div>
						<div class="box-body">
							<table class="table table-iloocal table-<?php echo $_smarty_tpl->tpl_vars['deviceType']->value;?>
 table-bordered">
								<thead><tr>
									<th class="align-center text-left bg-lighter">Hình ảnh</th>
									<th class="align-center bg-lighter" style="width:150px">Tiêu đề</th>
									<th class="align-center text-left bg-lighter">Số sao</th>
									<th class="align-center text-left bg-lighter">Nội dung</th>
									<th class="align-center text-left bg-lighter d-none">Ngày đánh giá</th>
									<th class="align-center text-left bg-lighter w-px-40" style="width:40px"></th>
								</tr></thead>
								<tbody class="lst_certificate" id="lst_customer_review">
								<?php if (!empty($_smarty_tpl->tpl_vars['more_information']->value['customer_review'])) {?>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['more_information']->value['customer_review'], 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
									<tr>
										<td data-label="Hình ảnh"><img class="rounded" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" width="50" height="50"></td>
										<td data-label="Tiêu đề"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</td>
										<td class="text-center" data-label="Số sao"><?php echo $_smarty_tpl->tpl_vars['item']->value['star'];?>
</td>
										<td data-label="Nội dung"><div class="text_4line"><?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>
</div></td>
										<td class="text-center d-none" data-label="Ngày đánh giá"><?php echo $_smarty_tpl->tpl_vars['item']->value['date'];?>
</td>
										<td>
											<div class="btn-group">
												<button class="btn iso-button-standard dropdown-toggle" type="button" data-toggle="dropdown"> <i class="icon-cog"></i> <span class="caret"></span></button>
												<ul class="dropdown-menu" style="right:0px !important; left: auto">
													<li><a class="dropdown-item" href="javascript:void(0)"  onClick="$Core.member.formAddField(this,'open')" data-profile_id='<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
' data-field_id="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"  data-field="customer_review" data-type="edit">Sửa</a></li>
													<li><a class="dropdown-item" href="javascript:void(0)"  onClick="$Core.member.deleteField(this,'delete')" data-profile_id='<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
' data-field_id="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" data-field="customer_review">Xoá</a></li>
												</ul>
											</div>
										</td>
									</tr>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								<?php } else { ?>
									<tr>
										<td class="text-center" colspan="6">Chưa có dữ liệu</td>	
									</tr>
								<?php }?>
								</tbody>
							</table>
						</div>
					</div>
					<div class="box light d-none">
						<div class="box-title">
							<div class="caption">
								<span class="bold">Quá trình làm việc</span>
							</div>
						</div>
						<div class="box-body">
							<div class="form-group">
								<textarea id="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid();?>
" class="form-control isoTextArea edit_profile_field_work_process" name="work_process" cols="255" rows="15"><?php echo $_smarty_tpl->tpl_vars['more_information']->value['work_process'];?>
</textarea>
							</div>
						</div>
					</div>
					<div class="box light">
						<div class="box-title d-flex justify-content-between align-items-center">
							<div class="caption">
								<span class="bold">Banner</span>
							</div>
						</div>
						<div class="box-body">
							<div class="user-profile-header-banner relative">
								<div class="box_banner w-100 border" style="min-height: 200px">
									<img src="<?php echo $_smarty_tpl->tpl_vars['more_information']->value['banner'];?>
" alt="Banner image" class="rounded-top w-100" id="image_banner">
								</div>
								<input type="file" name="banner" value="" id="banner" style="display: none">
								<button class="camera " type="button" onclick="$Core.member.uploadImage(this,event);" data-type="banner" toId="banner" toImg="image_banner" profile_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
"><i class='fa fa-camera'></i></button> 
							</div>
						</div>
					</div>
				<?php }?>
			</div>
			<div class="col-md-4">
				<div class="box light">
					<div class="box-title no-bottom-border">
						<div class="caption"><span class="bold"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Avatar');?>
</span></div>
					</div>
					<div class="box-body">
						<div class="avatar">
							<div class="in">
								<img id="avatar" src="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['avatar'];?>
" onerror="this.src='<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/no-avatar.svg'" alt="Chưa có hình ảnh" />
							</div>
							<a onclick="file_explorer(this, event)" toId="selectFile" toImg="avatar" profile_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" class="camera"><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('camera');?>
</a>
							<input type="file" id="selectFile" class="hidden d-none" maxlength="255" name="avtar" >
						</div>
												
					</div>
					<div class="box-title border-top no-margin">
						<div class="caption">
							<span class="bold"><i class="fa fa-users"></i> Nhóm/Group(s)</span>
						</div>
					</div>
                    <div class="box-body pt-4">
						<?php $_smarty_tpl->_assignInScope('gId', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>
						<div class="form-group">
							<label>Vai trò</label>
							<input type="hidden" name="iso-department_id" value="<?php echo @constant('_DEPARTMENT_CTV_ID');?>
" />
							<select gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" class="iso-selectize required" onChange="$Core.member.handle_role(this, event)" required name="iso-role_id" id="role_id">
								<option value="0">Lựa chọn vai trò</option>
								<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getSelectByPropertyTypeTitle('_PACKAGE',$_smarty_tpl->tpl_vars['oneItem']->value['role_id'],'Vai trò');?>

							</select>
						</div>
						<div id="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" class="form-group form-row<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['role_id'] == @constant('_MEMBER_PARKAGE_FREE_ID')) {?> d-none<?php }?> mt-3">
							<div class="col-md-6">
								<input type="date" name="start_date" value="<?php if (!empty($_smarty_tpl->tpl_vars['more_information']->value['VIP']['start_date'])) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['more_information']->value['VIP']['start_date'],'%Y-%m-%d');
}?>" class="form-control" maxlength="255" />
							</div>
							<div class="col-md-6">
								<input type="date" name="due_date" value="<?php if (!empty($_smarty_tpl->tpl_vars['more_information']->value['VIP']['due_date'])) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['more_information']->value['VIP']['due_date'],'%Y-%m-%d');
}?>" class="form-control" maxlength="255" />
							</div>
						</div>
                    </div>
					<div class="box-title border-top no-margin">
						<div class="caption">
							<span class="bold"><i class="fa fa-users"></i> Tình trạng</span>
						</div>
					</div>
                    <div class="box-body pt-4">
						<select class="iso-selectize custom-select required" required name="iso-status_id" id="status_id">
							<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getSelectByPropertyTypeTitle('_STATUS_STAFF',$_smarty_tpl->tpl_vars['oneItem']->value['status_id'],'Tình trạng');?>

						</select>
                    </div>
					<div class="box-title border-top no-margin">
						<div class="caption">
							<span class="bold"><i class="fa fa-users"></i> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Notes');?>
</span>
						</div>
					</div>
					<div class="box-end no-border-top">
						<textarea class="form-control" name="note" placeholder="Nhập ghi chú" rows="3"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['note'];?>
</textarea>
					</div>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['pvalTable']->value) {?>
				<div class="box light">
					<div class="box-title d-flex justify-content-between align-items-center">
						<div class="caption">
							<span class="bold">Video</span> 
						</div>
					</div>
					<div class="box-body">						
						<div class="input-group box_form mb-3 w-100">
							<input type="text" class="form-control" name="link_video" placeholder="Link video" value="<?php echo $_smarty_tpl->tpl_vars['more_information']->value['link_video'];?>
" aria-label="Search" aria-describedby="button-addon2" style=" width: calc(100% - 97px);margin: 0"> 
							<button class="btn btn-primary" type="button" onClick="$Core.member.addVideo(this,<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
)">Thay đổi</button> 
						</div>
						<div class="box_body_video rounded" id="box_video">					
							<?php if ($_smarty_tpl->tpl_vars['more_information']->value['link_video'] != '') {?>
								<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getEmbedVideo($_smarty_tpl->tpl_vars['more_information']->value['link_video'],'100%',150);?>
 
							<?php } else { ?>
								Chưa có video
							<?php }?>

						</div>
					</div>
				</div>				
				<div class="box light">
					<div class="box-title d-flex justify-content-between align-items-center">
						<div class="caption">
							<span class="bold">Hình ảnh</span>
						</div>
						<input type="file" name="images[]" multiple hidden id="images" style="display:none">
						<button type="button" class="btn btn-primary text-nowrap" onclick="$Core.member.uploadImage(this,event);" toId="images" toImg="list_image" data-type="images" profile_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
">
							<?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('plus','Thêm mới');?>

						</button>
					</div>
					<div class="box-body">
						<div class="form-row row" id="list_image">
							<?php if (!empty($_smarty_tpl->tpl_vars['more_information']->value['image'])) {?>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['more_information']->value['image'], 'image');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
?>
									<div class="item col-xs-3 mb-3" data-fancybox="gallery" href="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
">
										<img class="rounded drag-item cursor-pointer" src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" alt="avatar" style="width: 100%;height: auto">
									</div>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							<?php } else { ?>
								Thư viện trống
							<?php }?>									
						</div>
					</div>
				</div>
				<?php }?>	
			</div>
		</div>
		<div class="ui-page-actions ui-page-actions--has-secondary">
			<input value="Update" name="submit" type="hidden">
			<div class="ui-page-actions__container">
				<div class="ui-page-actions__actions ui-page-actions__actions--secondary"></div>
				<div class="ui-page-actions__actions ui-page-actions__actions--primary">
					<div class="ui-page-actions__button-group">
						<input type="hidden" name="iso-profile_type" value="<?php echo $_smarty_tpl->tpl_vars['profile_type']->value;?>
" />
						<a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Calcel');?>
</a>
						<?php echo $_smarty_tpl->tpl_vars['saveBtn']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['saveList']->value;?>

					</div>
				</div>
			</div>
		</div>
	</form>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	var country_id = '<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['country_id'];?>
',
		city_id = '<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['city_id'];?>
',
		district_id = '<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['district_id'];?>
';
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
	$(function(){
		loadCity(country_id, city_id);
		loadDistrict(city_id,district_id);
		$('input[name=iso-first_name],input[name=iso-last_name]').keyup(function(){
			var $_this = $(this);
			if($_this.hasClass('f_name')){
				$('input[name=iso-address_first_name]').val($_this.val());
			}else{
				$('input[name=iso-address_last_name]').val($_this.val());
			}
		});
		$('select[name=iso-country_id]').change(function(){
			var $_this=$(this);
			loadCity($_this.val(),'');
		});
		$('select[name=iso-city_id]').change(function(){
			var $_this=$(this);
			loadDistrict($_this.val(),'');
		});
		$('select[name=iso-department_id]').change(function(){
			var $_this = $(this);
			$.post(path_ajax_script+"/index.php?mod="+mod+"&act=load_option_role", {
				'department_id' : $_this.val()
			}, function(html){
				$('.slb_RoleId').html(html);
			});
		});
		$('.ajCreateQuickNewCity').live('click',function(){
			var $this = $(this);
			var $country_id = $('#country_id').val();
			if($country_id==''){
				$('#country_id').focus();
				alert(field_is_required);
				return false;
			}
			global_loading(1);
			$.ajax({
				type: "POST",
				url: path_ajax_script+"/index.php?mod=country&act=ajLoadCreateNewCity",
				data: {'country_id': $country_id},
				dataType: "html",
				success: function(html){
					makepopup(400,'auto',html,'pop_CityBox');
					global_loading(0);
				}
			});
			return false;
		});
		$('.ajSubmitQuickCity').live('click',function(){
			var $_this = $(this);
			var $title = $('#pop_CityBox #title');
			var $city_id = $_this.attr('city_id');
			var $country_id = $_this.attr('country_id');
			/**/
			if($title.val()==''){
				$title.focus();
				alertify.error(field_is_required);
				return false;
			}
			var adata = {
				'city_id' : $city_id,
				'title' : $title.val(),
				'country_id' : $country_id
			};
			global_loading(1);
			$.ajax({
				type: "POST",
				url: path_ajax_script+"/index.php?mod=country&act=ajSubmitQuickCity",
				data: adata,
				dataType: "html",
				success: function(html){
					global_loading(0);
					if(html.indexOf('_EXIST')>=0){
						alertify.error(message_error_exit);
					}else if(html.indexOf('_SUCCESS')>=0){
						var $htm = html.split('$$');
						loadCity($country_id,$htm[1]);
						$_this.closest('#pop_CityBox').find('.close_pop').trigger('click');
					}else{
						alertify.error(message_error_sys);
					}
				}
			});
			return false;
		});
		/**/
		$('.ajCreateQuickNewDistrict').live('click',function(){
			var $this = $(this);
			var $city_id = $('#city_id').val();
			if($city_id==''){
				$('#city_id').focus();
				alert(message_city_required);
				return false;
			}
			global_loading(1);
			$.ajax({
				type: "POST",
				url: path_ajax_script+"/index.php?mod=country&act=ajLoadCreateNewDistrict",
				data: {'city_id': $city_id},
				dataType: "html",
				success: function(html){
					makepopup(400,'auto',html,'pop_DistrictBox');
					global_loading(0);
				}
			});
			return false;
		});
		$('.ajSubmitQuickDistrict').live('click',function(){
			var $_this = $(this);
			var $title = $('#pop_DistrictBox #title');
			var $district_id = $_this.attr('district_id');
			var $city_id = $_this.attr('city_id');
			/**/
			if($title.val()==''){
				$title.focus();
				alertify.error(field_is_required);
				return false;
			}
			var adata = {
				'district_id' : $district_id,
				'title' : $title.val(),
				'city_id' : $city_id
			};
			global_loading(1);
			$.ajax({
				type: "POST",
				url: path_ajax_script+"/index.php?mod=country&act=ajSubmitQuickDistrict",
				data: adata,
				dataType: "html",
				success: function(html){
					global_loading(0);
					if(html.indexOf('_EXIST')>=0){
						alertify.error(message_error_exit);
					}else if(html.indexOf('_SUCCESS')>=0){
						var $htm = html.split('$$');
						loadDistrict($city_id,$htm[1]);
						$_this.closest('#pop_DistrictBox').find('.close_pop').trigger('click');
					}else{
						alertify.error(message_error_sys);
					}
				}
			});
			return false;
		});
	});
	function loadCity($country_id,$city_id){
		$('select[name=iso-city_id]').html('<option value="">Loading...</option>');
		$.ajax({
			type: "POST",
			url: path_ajax_script+"/index.php?mod=country&act=ajMakeSelectboxCity",
			data: {"country_id"	: $country_id, 'city_id':$city_id},
			dataType: "html",
			success: function(html){
			  $('select[name=iso-city_id]').html(html);
			}
		});
	}
	function loadDistrict($city_id,$district_id){
		$('select[name=iso-district_id]').html('<option value="">Loading...</option>');
		$.ajax({
			type: "POST",
			url: path_ajax_script+"/index.php?mod=country&act=ajMakeSelectboxDistrict",
			data: {"city_id":$city_id, 'district_id':$district_id},
			dataType: "html",
			success: function(html){
			  $('select[name=iso-district_id]').html(html);
			}
		});
	}
<?php echo '</script'; ?>
>
<?php }
}
