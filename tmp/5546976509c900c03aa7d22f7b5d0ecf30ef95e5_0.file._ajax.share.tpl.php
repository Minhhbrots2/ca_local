<?php
/* Smarty version 3.1.33, created on 2026-07-22 17:00:50
  from '/www/wwwroot/skyrealty.c-a.vn/application/views/home/_ajax.share.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a6094d2933fc8_12841488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5546976509c900c03aa7d22f7b5d0ecf30ef95e5' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/views/home/_ajax.share.tpl',
      1 => 1783283460,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a6094d2933fc8_12841488 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/www/wwwroot/skyrealty.c-a.vn/core/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
if ($_smarty_tpl->tpl_vars['template_type']->value == '_form') {?>

	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable<?php if ($_smarty_tpl->tpl_vars['share_type']->value == 'secret' || $_smarty_tpl->tpl_vars['share_type']->value == 'honor') {?> modal-ipad<?php }?>">

		<form method="POST" class="modal-content" enctype="multipart/form-data">

			<div class="modal-header">

				<h5 class="modal-title"><?php if ($_smarty_tpl->tpl_vars['action']->value == '_edit') {?>Sửa<?php } else { ?>Thêm<?php }?> <?php echo $_smarty_tpl->tpl_vars['titlePage']->value;?>
</h5>

				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

			</div>

			<div class="modal-body">

				<div class="form-group mb-2">

					<?php $_smarty_tpl->_assignInScope('uid', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>

					<div class="form-floating">

						<textarea rows="3" class="form-control required" id="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" name="title" maxlength="255" 

						placeholder="Nhập tiêu đề bản tin"><?php echo $_smarty_tpl->tpl_vars['oneShare']->value['title'];?>
</textarea>

						<label for="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">Tiêu đề</label>

					</div>

				</div>

				<?php if ($_smarty_tpl->tpl_vars['share_type']->value == 'secret') {?>

				<div class="form-group form-row mb-2">

					<div class="col-12 col-lg-7">

						<div class="form-row">

							<div class="col-6">

								<div class="form-floating">

									<input type="date" class="form-control required" id="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" name="start_date" maxlength="255" placeholder="dd-mm-yyyy" 

									onChange="$Core.share.handle_date(this, event)" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['more_information']->value['end_date'],'%Y-%m-%d');?>
" />

									<label for="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">Từ ngày</label>

								</div>

							</div>

							<div class="col-6">

								<div class="form-floating">

									<input type="date" class="form-control js__share-end_date-field required" id="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" 

									name="end_date" maxlength="255" placeholder="dd-mm-yyyy" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['more_information']->value['end_date'],'%Y-%m-%d');?>
" />

									<label for="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">Tới ngày</label>

								</div>

							</div>

						</div>

					</div>

					<div class="col-12 col-lg-5">

						<div class="form-floating">

							<?php $_smarty_tpl->_assignInScope('uid', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>

							<select id="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" name="project_id" class="form-control form-select">

								<option value="0">Lựa chọn dự án</option>

								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_all_projects']->value, '_oProject', false, NULL, 'i', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oProject']->value) {
?>

								<option<?php if ($_smarty_tpl->tpl_vars['more_information']->value['project_id'] == $_smarty_tpl->tpl_vars['_oProject']->value['project_id']) {?> selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['_oProject']->value['project_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_oProject']->value['title'];?>
</option>

								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

							</select>

							<label for="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">Dự án</label>

						</div>

					</div>

				</div>

				<div class="form-group mb-2">

					<label class="form-label mb-1">Nội dung</label>

					<textarea class="form-control isoTextArea" data-name="content" rows="2" cols="255" 

						id="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid();?>
"><?php echo $_smarty_tpl->tpl_vars['more_information']->value['content'];?>
</textarea>

				</div>

				<?php } elseif ($_smarty_tpl->tpl_vars['share_type']->value == 'share') {?>

				<div class="form-group form-row mb-2">

					<div class="col-6">

						<div class="form-floating">

							<input uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" type="hidden" name="customer_id" value="<?php echo $_smarty_tpl->tpl_vars['more_information']->value['customer_id'];?>
" />

							<input uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" type="text" class="form-control required" name="customer_name" maxlength="255" 

							placeholder="Nguyễn Văn A"<?php if ($_smarty_tpl->tpl_vars['action']->value == '_edit') {?> value="<?php echo $_smarty_tpl->tpl_vars['more_information']->value['customer_name'];?>
"<?php }?> />

							<?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?>

							<a data-toggle="ripple" onClick="$Core.global.crm.open_select(this, event)" class="btn btn-sm btn-icon btn-link rounded-pill position-absolute top-px-20 right-px-10" call_from="share" uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
"><i class="bx bx-search"></i></a>

							<?php } else { ?>

							<a data-toggle="ripple" onClick="$Core.global.crm.open_select(this, event)" class="btn btn-sm btn-link rounded-pill position-absolute top-px-20 right-px-10" call_from="share" uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
"><i class="bx bx-search"></i> Lựa chọn</a>

							<?php }?>

							<label class="d-flex">Họ tên khách</label>

						</div>

					</div>

					<div class="col-6">

						<div class="form-floating">

							<input uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" type="text" class="form-control required" name="customer_phone" maxlength="255" 

							placeholder="4 số cuối SĐT"<?php if ($_smarty_tpl->tpl_vars['action']->value == '_edit') {?> value="<?php echo $_smarty_tpl->tpl_vars['more_information']->value['customer_phone'];?>
"<?php }?> />

							<label>Điện thoại</label>

						</div>

					</div>

				</div>

				<div class="form-group form-row mb-2">

					<div class="col-6">

						<div class="form-floating">

							<input type="text" class="form-control required" name="location" maxlength="255" 

							placeholder="Địa điểm gặp khách"<?php if ($_smarty_tpl->tpl_vars['action']->value == '_edit') {?> value="<?php echo $_smarty_tpl->tpl_vars['more_information']->value['location'];?>
"<?php }?> />

							<label>Địa điểm</label>

						</div>

					</div>

					<div class="col-6">

						<div class="form-floating">

							<input type="number" class="form-control required" name="guest_count" maxlength="255" 

							placeholder="Số lượng khách tham gia"<?php if ($_smarty_tpl->tpl_vars['action']->value == '_edit') {?> value="<?php echo $_smarty_tpl->tpl_vars['more_information']->value['guest_count'];?>
"<?php }?> />

							<label>Số khách</label>

						</div>

					</div>

				</div>

				<div class="form-group form-row mb-2">

					<div class="col-6">

						<div class="form-multiselect">

							<label>Mục tiêu</label>

							<select class="form-control required multiselect" name="target_ids[]" multiple="multiple">

								<?php echo $_smarty_tpl->tpl_vars['clsProperty']->value->getSelectByPropertyV2('PURPOSE',$_smarty_tpl->tpl_vars['more_information']->value['target_ids'],'',true);?>


							</select>

						</div>

					</div>

					<div class="col-6">

						<div class="form-multiselect">

							<label>Quan tâm</label>

							<select class="form-control required multiselect" name="interest_ids[]" multiple="multiple">

								<?php echo $_smarty_tpl->tpl_vars['clsProperty']->value->getSelectByPropertyV2('_BEDROOM',$_smarty_tpl->tpl_vars['more_information']->value['interest_ids'],'',true);?>


								<?php echo $_smarty_tpl->tpl_vars['clsProperty']->value->getSelectByPropertyV2('_TYPE_VILLA',$_smarty_tpl->tpl_vars['more_information']->value['interest_ids'],'',true);?>


							</select>

						</div>

					</div>

				</div>

				<div class="form-group form-row mb-2">

					<div class="col-6">

						<div class="form-floating">

							<input type="text" class="form-control numberonly price-In" name="budget_amount" maxlength="255" 

							placeholder="Ngân sách"<?php if ($_smarty_tpl->tpl_vars['action']->value == '_edit') {?> value="<?php echo $_smarty_tpl->tpl_vars['more_information']->value['budget_amount'];?>
"<?php }?> />

							<label>Ngân sách</label>

						</div>

					</div>

					<div class="col-6">

						<div class="form-multiselect">

							<label>Dự án quan tâm</label>

							<select class="form-control multiselect" name="project_id">

								<?php echo $_smarty_tpl->tpl_vars['clsSetting']->value->getSelectBySettingOrigin('_PROJECT',0,$_smarty_tpl->tpl_vars['more_information']->value['project_id'],"Chọn dự án");?>


							</select>

						</div>

					</div>

				</div>

				<div class="form-group mb-2">

					<div class="form-multiselect">

						<label>Tình trạng</label>

						<div class="d-flex align-items-center gap-1 flex-wrap">

							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr_status']->value, '_oStatus');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oStatus']->value) {
?>

							<label class="we-radio small no-crm">

								<input type="radio" <?php if ($_smarty_tpl->tpl_vars['more_information']->value['status_id'] == $_smarty_tpl->tpl_vars['_oStatus']->value['property_id']) {?> checked="checked"<?php }?> 

									name="status_id" value="<?php echo $_smarty_tpl->tpl_vars['_oStatus']->value['property_id'];?>
" />

								<span><?php echo $_smarty_tpl->tpl_vars['_oStatus']->value['title'];?>
</span>

							</label>

							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

						</div>

					</div>

				</div>

				<div class="form-floating mb-2">

					<textarea class="form-control required" name="content" rows="2" cols="255" 

						placeholder="Mô tả ngắn về cuộc gặp với khách hàng"><?php if ($_smarty_tpl->tpl_vars['action']->value == '_edit') {
echo $_smarty_tpl->tpl_vars['more_information']->value['content'];
}?></textarea>

					<label>Mô tả ngắn về cuộc gặp</label>

				</div>

				<?php } elseif ($_smarty_tpl->tpl_vars['share_type']->value != 'share') {?>

				<div class="form-group form-row mb-2">

					<div class="col-7 col-lg-8">

						<small>Người được vinh danh</small>

						<div class="selecttize-lg mt-1">

							<select class="form-control multiselect" data-placeholder="Nhân viên" data-width="100%" data-header="true" 

								data-filter="true" data-selected_text="người" multiple id="slb_Building_Id" name="staff_id[]" data-field="staff_id[]">

								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_staffs']->value, '_oStaff');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oStaff']->value) {
?>

								<option value="<?php echo $_smarty_tpl->tpl_vars['_oStaff']->value['profile_id'];?>
"<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkItemInArray($_smarty_tpl->tpl_vars['_oStaff']->value['profile_id'],$_smarty_tpl->tpl_vars['lst_staff_id']->value)) {?>selected<?php }?> ><?php echo $_smarty_tpl->tpl_vars['_oStaff']->value['full_name'];?>
</option>

								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

							</select>

						</div>

					</div>

					<div class="col-5 col-lg-4">

						<div class="form-floating">

							<input class="form-control" name="stock_code" value="<?php echo $_smarty_tpl->tpl_vars['more_information']->value['stock_code'];?>
" placeholder="Ghi căn hộ đã bán nếu có" />

							<label for="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">Căn hộ(nếu có)</label>

						</div>

					</div>

				</div>

				<?php }?>

				<div class="form-group">

					<?php if ($_smarty_tpl->tpl_vars['share_type']->value == 'share') {?>

						<div class="d-flex justify-content-between align-items-center gap-2">

							<label class="form-label mb-1">Hình ảnh</label>

							<a href="javascript:void(0)" class="text-link text-decoration-underline" data-fancybox="standard_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" data-src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/quy-chuan-tiep-khach.png">Quy chuẩn tiếp khách</a>

						</div>

					<?php } else { ?>

						<label class="form-label mb-1">Hình ảnh</label>

					<?php }?>

					<div class="we-filedrop-wrapper mt-1">

						<?php $_smarty_tpl->_assignInScope('uid', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>

						<?php if ($_smarty_tpl->tpl_vars['share_id']->value > '0' && !empty($_smarty_tpl->tpl_vars['list_images']->value)) {?>

							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_images']->value, '_oImage', false, NULL, 'i', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oImage']->value) {
?>

							<input type="hidden" name="images[]" value="<?php echo $_smarty_tpl->tpl_vars['_oImage']->value;?>
" />

							<div uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" class="we-filedrop__image d-flex align-items-center justify-content-center">

								<a class="delete" src="<?php echo $_smarty_tpl->tpl_vars['_oImage']->value;?>
" uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" onclick="$Core.global.share.re_upload_share(this, event)"></a>

								<img class="img-responsive" style="max-width:100%" src="<?php echo $_smarty_tpl->tpl_vars['_oImage']->value;?>
">

							</div>

							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

						<?php }?>

						<input class="d-none upload_image_share" onChange="$Core.global.share.upload_image_share(this, event)" 

							name="image" id="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" accept="image/*" type="file">

						<div uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" class="we-filedrop cursor-pointer<?php if ($_smarty_tpl->tpl_vars['share_id']->value > '0' && !empty($_smarty_tpl->tpl_vars['list_images']->value)) {?> d-none<?php }?>"<?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?> style="padding:50px 15px"<?php } else { ?> style="padding:80px 15px"<?php }?> onclick="$Core.global.share.upload_share(this,event);"> 

							<svg class="mb-2" width="70" height="70" viewBox="0 0 130 130" fill="none" xmlns="http://www.w3.org/2000/svg">

								<path d="M118.42 75.84C118.43 83.2392 116.894 90.5589 113.91 97.33H16.09C12.8944 90.0546 11.3622 82.1579 11.6049 74.2154C11.8477 66.2728 13.8593 58.4844 17.4932 51.4177C21.1271 44.3511 26.2918 38.1841 32.6109 33.3662C38.93 28.5483 46.2443 25.2008 54.0209 23.5676C61.7976 21.9345 69.8406 22.0568 77.564 23.9257C85.2873 25.7946 92.4965 29.363 98.6661 34.3709C104.836 39.3787 109.81 45.6999 113.228 52.8739C116.645 60.0478 118.419 67.8937 118.42 75.84Z" fill="#F2F2F2"></path><path d="M5.54 97.33H126.37" stroke="#63666A" stroke-width="1" stroke-miterlimit="10" stroke-linecap="round"></path><path d="M97 97.33H49.91V34.65C49.91 34.3848 50.0154 34.1305 50.2029 33.9429C50.3904 33.7554 50.6448 33.65 50.91 33.65H84.18C84.6167 33.6541 85.0483 33.7445 85.4499 33.9162C85.8515 34.0878 86.2152 34.3372 86.52 34.65L96.02 44.15C96.3321 44.4533 96.5811 44.8153 96.7527 45.2151C96.9243 45.615 97.0152 46.0449 97.02 46.48L97 97.33Z" fill="#D7D7D7" stroke="#63666A" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"></path><path d="M59.09 105.64H42.09C41.8248 105.64 41.5704 105.535 41.3829 105.347C41.1954 105.16 41.09 104.905 41.09 104.64V41.79C41.09 41.5248 41.1954 41.2705 41.3829 41.0829C41.5704 40.8954 41.8248 40.79 42.09 40.79H77.33L89 52.42V104.62C89 104.885 88.8946 105.14 88.7071 105.327C88.5196 105.515 88.2652 105.62 88 105.62H74.86" fill="white"></path><path d="M59.09 105.64H42.09C41.8248 105.64 41.5704 105.535 41.3829 105.347C41.1954 105.16 41.09 104.905 41.09 104.64V41.79C41.09 41.5248 41.1954 41.2705 41.3829 41.0829C41.5704 40.8954 41.8248 40.79 42.09 40.79H77.33L89 52.42V104.62C89 104.885 88.8946 105.14 88.7071 105.327C88.5196 105.515 88.2652 105.62 88 105.62H74.86" stroke="#63666A" stroke-width="1" stroke-miterlimit="10" stroke-linecap="round"></path><path d="M88.97 52.42H77.33V40.77L88.97 52.42Z" fill="#D7D7D7" stroke="#63666A" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"></path><path d="M27.32 65.49V70.6" stroke="#D7D7D7" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"></path><path d="M29.88 68.04H24.76" stroke="#D7D7D7" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"></path><path d="M110.49 32.5601V39.9901" stroke="#D7D7D7" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"></path><path d="M114.2 36.27H106.77" stroke="#D7D7D7" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"></path><path d="M34.07 14.58V25.59" stroke="#D7D7D7" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"></path><path d="M39.57 20.08H28.57" stroke="#D7D7D7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M67 115.86V67.12" stroke="#63666A" stroke-width="1" stroke-miterlimit="10" stroke-linecap="round"></path><path d="M55.5 78.61L67 67.12L78.5 78.61" fill="white"></path><path d="M55.5 78.61L67 67.12L78.5 78.61" stroke="#63666A" stroke-width="1" stroke-miterlimit="10"></path>

							</svg> 

							<p class="mb-0">Bấm để chọn một hoặc nhiều hình ảnh cần tải lên !!!</p>

						</div>

					</div>

				</div>

			</div>

			<div class="modal-footer">

				<button type="button" data-toggle="ripple" class="btn btn-outline-secondary flex-fill" data-bs-dismiss="modal">Hủy bỏ</button>

				<button type="button" data-toggle="ripple" class="btn btn-primary flex-fill" share_type="<?php echo $_smarty_tpl->tpl_vars['share_type']->value;?>
" share_id="<?php echo $_smarty_tpl->tpl_vars['share_id']->value;?>
" 

					onClick="$Core.global.share.pop_save_share(this, event)">Lưu lại</button>

			</div>

		</form>

	</div>               

<?php } else { ?>

	<?php if (!empty($_smarty_tpl->tpl_vars['list_shares']->value)) {?>

	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_shares']->value, '_oShare', false, NULL, 'i', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oShare']->value) {
?>

		<?php if ($_smarty_tpl->tpl_vars['share_type']->value == 'share') {?>

			<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('share_item',array('_oShare'=>$_smarty_tpl->tpl_vars['_oShare']->value));?>


		<?php } else { ?>

			<div class="awe__post-item awe__share-item" reg_date="<?php echo $_smarty_tpl->tpl_vars['_oShare']->value['reg_date'];?>
">

				<?php $_smarty_tpl->_assignInScope('share_id', $_smarty_tpl->tpl_vars['_oShare']->value['share_id']);?>

				<?php $_smarty_tpl->_assignInScope('_title', $_smarty_tpl->tpl_vars['clsShare']->value->getTitle($_smarty_tpl->tpl_vars['share_id']->value,$_smarty_tpl->tpl_vars['_oShare']->value));?>

				<div class="w-100 d-flex align-items-center justify-content-between mb-3">

					<div class="awe__post-profile d-flex" data-url="/index.php?mod=home&act=load_profile_popover&user_id=<?php echo $_smarty_tpl->tpl_vars['_oShare']->value['user_id'];?>
" data-toggle="webui-popover" data-trigger="hover" data-width="350">

						<div class="awe__post-avatar position-relative">

							<?php echo $_smarty_tpl->tpl_vars['clsProfile']->value->get_icon_verified($_smarty_tpl->tpl_vars['_oShare']->value['user_id'],$_smarty_tpl->tpl_vars['_oShare']->value['db_profile']['more_information']);?>


							<img class="rounded" src="<?php echo $_smarty_tpl->tpl_vars['_oShare']->value['db_profile']['avatar'];?>
" 

								onerror="this.src='<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/no-avatar.jpg'" width="44" height="44" /> 

						</div>

						<div class="awe__post-profile-body">

							<p class="awe__post-name"><?php echo $_smarty_tpl->tpl_vars['_oShare']->value['db_profile']['name'];?>
</p>

							<div class="d-flex gap-2 align-items-center">

								<?php if (!empty($_smarty_tpl->tpl_vars['_oShare']->value['db_profile']['level'])) {?>

								<span class="awe__post-level text-muted">

									<?php echo $_smarty_tpl->tpl_vars['_oShare']->value['db_profile']['level'];?>


								</span>

								<?php }?>

								<span class="awe__post-star text-muted">

									<?php echo $_smarty_tpl->tpl_vars['_oShare']->value['db_profile']['html_star'];?>


								</span>

								<span class="awe__post-time text-muted">

									<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getTimeAgo($_smarty_tpl->tpl_vars['_oShare']->value['reg_date']);?>


								</span>

							</div>

						</div>

					</div>

					<div class="dropdown">

						<button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="true"><i class="bx bx-dots-vertical-rounded"></i></button>

						<div class="dropdown-menu" data-popper-placement="bottom-end">

							<div class="dropdown-menu" data-popper-placement="bottom-end">

								<?php if ($_smarty_tpl->tpl_vars['_oShare']->value['user_id'] == $_smarty_tpl->tpl_vars['profile_id']->value && $_smarty_tpl->tpl_vars['clsShare']->value->checkCanEdit($_smarty_tpl->tpl_vars['share_id']->value,$_smarty_tpl->tpl_vars['_oShare']->value) == '1') {?>

								<a class="dropdown-item" href="javascript:void(0);" onClick="$Core.share.open(this, event)" share_id="<?php echo $_smarty_tpl->tpl_vars['share_id']->value;?>
" share_type="<?php echo $_smarty_tpl->tpl_vars['_oShare']->value['share_type'];?>
" action="_edit"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIcon('bx-edit-alt me-1','Chỉnh sửa');?>
</a>

								<a class="dropdown-item" href="javascript:void(0);" onClick="$Core.share.delete_share(this, event)" share_id="<?php echo $_smarty_tpl->tpl_vars['share_id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIcon('bx-trash me-1','Xóa');?>
</a>

								<?php }?>

							</div>

						</div>

					</div>

				</div>

				<div class="awe__post-item-body">

					<div class="awe__post-title mb-2" share_id="<?php echo $_smarty_tpl->tpl_vars['share_id']->value;?>
" action="_detail">

						<a class="fs-16 font-normal awe__post-link" title="<?php echo $_smarty_tpl->tpl_vars['_title']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['_title']->value;?>
</a>

					</div>

					<?php if ($_smarty_tpl->tpl_vars['share_type']->value == 'secret') {?>

					<div class="awe__post-meta mb-2 text-muted">

						<p class="mb-1">Từ ngày: <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['_more_information']->value['start_date'],'%d/%m/%Y');?>
 - Tới ngày:  <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['_more_information']->value['end_date'],'%d/%m/%Y');?>
</p>

						<p>Dự án: <?php if (!empty($_smarty_tpl->tpl_vars['_more_information']->value['project_id'])) {?> 

							<?php echo $_smarty_tpl->tpl_vars['_more_information']->value['project_name'];?>


						<?php } else { ?>--<?php }?></p>

					</div>

					<?php }?>

					<?php if (!empty($_smarty_tpl->tpl_vars['_oShare']->value['images'])) {?>

					<div class="awe__post-gallery gallery mb-3">

						<?php echo $_smarty_tpl->tpl_vars['clsShare']->value->getImageGrid($_smarty_tpl->tpl_vars['share_id']->value,$_smarty_tpl->tpl_vars['_oShare']->value['images']);?>


					</div>

					<?php }?> 

				</div>

				<div class="awe__post-cmd border-bottom mb-2">

					<div class="d-flex justify-content-center">

						<a href="javascript:void(0);" share_id="<?php echo $_smarty_tpl->tpl_vars['share_id']->value;?>
" 

						class="awe__post-action awe__share-like-action">

							<?php $_smarty_tpl->_assignInScope('total_liked', $_smarty_tpl->tpl_vars['_oShare']->value['total_liked']);?>

							<?php if ($_smarty_tpl->tpl_vars['clsShare']->value->checkLiked($_smarty_tpl->tpl_vars['share_id']->value,$_smarty_tpl->tpl_vars['_oShare']->value)) {?>

								<?php if ($_smarty_tpl->tpl_vars['total_liked']->value > '0') {?>

									<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIcon('bxs-heart',($_smarty_tpl->tpl_vars['total_liked']->value).(' Thích'));?>


								<?php } else { ?>

									<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIcon('bx-heart','Thích');?>


								<?php }?>

							<?php } else { ?>

								<?php if ($_smarty_tpl->tpl_vars['total_liked']->value > '0') {?>

									<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIcon('bx-heart',($_smarty_tpl->tpl_vars['total_liked']->value).(' Thích'));?>


								<?php } else { ?>

									<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIcon('bx-heart','Thích');?>


								<?php }?>

							<?php }?>

						</a>

						<a href="javascript:void(0);" class="awe__post-action awe__post-share-action" 

						data-toggle="modal" data-target="#sharer"><i class="bx bx-share"></i> Bình luận</a>

						<a href="javascript:void(0);" class="awe__post-action awe__post-share-action" 

						data-toggle="modal" data-target="#sharer"><i class="bx bx-share"></i> Chia sẻ</a>

					</div>

				</div>

				<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('comment',array('table_id'=>$_smarty_tpl->tpl_vars['share_id']->value,'clsTable'=>'Share','autoload'=>1));?>


			</div>

		<?php }?>

	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 

	<?php }?>

<?php }?>



<style>

	.form-multiselect {

		position: relative;

		border: 1px solid #ced4da;

		border-radius: .375rem;

		padding: 25px 10px 8px;

		background: var(--bs-white);

		min-height:58px;

	}

	/* label nổi bên trong */

	.form-multiselect > label {

		position: absolute;

		top: 4px;

		left: 10px;

		font-size: 12px;

		color: #6c757d;

		background: var(--bs-white);

		padding: 0 4px;

	}

	/* bỏ viền button của multiselect */

	.form-multiselect .btn-group,

	.form-multiselect .multiselect {

		width: 100%;

		background:var(--bs-white) !important;

	}

	.form-multiselect .multiselect {

		border: none !important;

		box-shadow: none !important;

		padding: 0;

	}

	/* focus */

	.form-multiselect:focus-within {

		border-color: #86b7fe;

		box-shadow: 0 0 0 .25rem rgba(13,110,253,.25);

	}

</style>

<?php }
}
