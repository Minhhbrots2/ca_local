<?php
/* Smarty version 3.1.33, created on 2026-07-02 16:49:55
  from '/www/wwwroot/ca.futurehomes.vn/admin/application/views/member/edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a463443b44636_77181800',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74572e23e22d5cbee9e7e9a82896cee74956fdef' => 
    array (
      0 => '/www/wwwroot/ca.futurehomes.vn/admin/application/views/member/edit.tpl',
      1 => 1782984859,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a463443b44636_77181800 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/www/wwwroot/ca.futurehomes.vn/core/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
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
								<div class="col-md-8">
									<label>Họ tên</label>
									<input type="text" name="iso-full_name" class="form-control" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oneItem']->value['full_name'], ENT_QUOTES, 'UTF-8', true);?>
" placeholder="Nhập họ tên" />
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
									<input type="text" class="form-control datepicker" name="iso-start_date" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['more_information']->value['start_date'], ENT_QUOTES, 'UTF-8', true);?>
" placeholder="dd/mm/yyyy" />
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
				<?php if ($_smarty_tpl->tpl_vars['pvalTable']->value > 0) {?>
					<div class="box light">
						<div class="box-title d-flex justify-content-between align-items-center">
							<h5 class="card-title mb-0">Gói tài khoản</h5>
							<button class="btn btn-outline-default" type="button" onClick="$Core.member.open_assign_package(this)" data-profile_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
">+ Gán gói</button>
						</div>
						<div class="box-body">
							<div class="holder_member_packages">
								<?php echo $_smarty_tpl->tpl_vars['core']->value->build("_ajax.member_packages.tpl",array("list"=>$_smarty_tpl->tpl_vars['member_package_history']->value,"active"=>$_smarty_tpl->tpl_vars['member_active_package']->value,"pkg_names"=>$_smarty_tpl->tpl_vars['member_package_names']->value,"profile_id"=>$_smarty_tpl->tpl_vars['pvalTable']->value));?>

							</div>
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
							<span class="badge">MOC</span>
						</div>
					</div>
                    <div class="box-body pt-4">
						<?php $_smarty_tpl->_assignInScope('gId', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>
						<div class="form-group">
							<select gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" class="iso-selectize required" onChange="$Core.member.handle_role(this, event)" required name="iso-role_id" id="role_id">
								<option value="0">Lựa chọn vai trò</option>
								<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getSelectByPropertyTypeTitle('_PACKAGE',$_smarty_tpl->tpl_vars['oneItem']->value['role_id'],'Vai trò');?>

							</select>
						</div>
                    </div>
					<div class="box-title border-top no-margin">
						<div class="caption">
							<span class="bold"><i class="fa fa-users"></i> Nhóm/Group(s)</span>
							<span class="badge badge-dannger">MF</span>
						</div>
					</div>
                    <div class="box-body pt-4">
						<?php $_smarty_tpl->_assignInScope('gId', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>
						<div class="form-group">
							<select gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" class="iso-selectize required" required name="iso-package_id" id="package_id">
								<option value="0">Lựa chọn vai trò</option>
								<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getSelectByPropertyTypeTitle('_MF_PACKAGE',$_smarty_tpl->tpl_vars['oneItem']->value['package_id'],'Vai trò');?>

							</select>
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
