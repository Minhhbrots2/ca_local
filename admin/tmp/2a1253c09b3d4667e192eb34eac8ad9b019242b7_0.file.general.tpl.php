<?php
/* Smarty version 3.1.33, created on 2025-11-24 13:41:07
  from '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/setting/general.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6923fe038665a7_35770034',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a1253c09b3d4667e192eb34eac8ad9b019242b7' => 
    array (
      0 => '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/setting/general.tpl',
      1 => 1763966465,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6923fe038665a7_35770034 (Smarty_Internal_Template $_smarty_tpl) {
?><header class="ui-title-bar-container ">
	<div class="ui-title-bar">
		<div class="ui-title-bar__navigation">
			<div class="ui-breadcrumbs">
				<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
" class="btn btn-default ui-breadcrumb">
					<?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('angle-left mr-5');?>

					<span class="ui-breadcrumb__item"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Setting');?>
</span>
				</a>
			</div>
		</div>
	</div>
	<div class="ui-title-bar ui-title-bar--separator">
		<div class="ui-title-bar__main-group">
			<div class="ui-title-bar__heading-group">
				<h1 class="ui-title-bar__title">Cấu hình</h1>
			</div>
		</div>
	</div><div class="collapsible-header"><div class="collapsible-header__heading"></div></div>
</header>
<div class="clearfix"></div>
<form method="post" action="" enctype="multipart/form-data" class="validate-form">
	<div class="ui-layout">
		<div class="ui-layout__sections">
			<div class="ui-layout__section">
				<section class="ui-annotated-section-container">
					<div class="ui-annotated-section">
						<div class="row">
							<div class="col-md-4">
								<div class="ui-annotated-section__title">
									<h2 class="ui-heading">Thông tin website</h2>
								</div>
								<div class="ui-annotated-section__description">
									Thông tin được sử dụng để TaCo Web và khách hàng liên hệ đến bạn.
								</div>
							</div>
							<div class="col-md-8">
								<div class="ui-annotated-section__content">
									<div class="next-card">
										<div class="next-card__section">
											<div class="ui-form__section form-horizontal">
												<div class="p-md-3">
													<div class="form-group">
														<div class="col-md-12">
															<label class="col-form-label">Tên website <span class="text-red">*</span></label>
															<input type="text" class="form-control require" required="true" placeholder="Nhập tên website" name="iso-site_name" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('site_name');?>
" />
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-12">
															<label class="col-form-label">Tiêu đề trang chủ <span class="text-red">*</span></label>
															<input type="text" class="form-control required" name="iso-meta_title" required placeholder="Nhập tiêu đề trang chủ" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('meta_title');?>
" />
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-12">
															<label class="col-form-label">Mô tả trang chủ <span class="text-red">*</span></label>
															<textarea rows="2" class="form-control required" required placeholder="Nhập một mô tả để nâng cao xếp hạng trên công cụ tìm kiếm như Google." name="iso-meta_description"><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('meta_description');?>
</textarea>
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-12">
															<label class="col-form-label">Thẻ từ khóa</label>
															<textarea rows="2" class="form-control" placeholder="Nhập một danh sách từ khóa nâng cao xếp hạng trên công cụ tìm kiếm như Google" name="iso-meta_keyword"><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('meta_keyword');?>
</textarea>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
                <section class="ui-annotated-section-container">
					<div class="ui-annotated-section">
						<div class="row">
							<div class="col-md-4">
								<div class="ui-annotated-section__title">
									<h2 class="ui-heading">Cấu hình mục tiêu</h2>
								</div>
								<div class="ui-annotated-section__description">
									Cấu hình điểm số cá nhân và toàn công ty.
								</div>
							</div>
							<div class="col-md-8">
								<div class="ui-annotated-section__content">
									<div class="next-card">
										<div class="next-card__section">
											<div class="ui-form__section form-horizontal">
												<div class="p-md-3">
													<div class="form-group">
														<div class="col-md-12">
															<label class="col-form-label"><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('code');?>
 Tổng giao dịch toàn công ty</label>
															<input type="text" class="form-control" name="iso-total_transactions" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('total_transactions');?>
" />
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-12">
															<label class="col-form-label"><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('code');?>
 Mục tiêu điểm số cá nhân</label>
															<input type="text" class="form-control" name="iso-total_score" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('total_score');?>
" />
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="ui-annotated-section-container">
					<div class="ui-annotated-section">
						<div class="row">
							<div class="col-md-4">
								<div class="ui-annotated-section__title">
									<h2 class="ui-heading">Meta Robot</h2>
								</div>
								<div class="ui-annotated-section__description">
									Meta Robot cho phép Google boot thu thập nội dung website của bạn.
								</div>
							</div>
							<div class="col-md-8">
								<div class="ui-annotated-section__content">
									<div class="next-card">
										<div class="next-card__section">
											<div class="ui-form__section form-horizontal">
												<div class="p-md-3">
													<div class="form-group">
														<div class="col-md-12">
															<label class="col-form-label"><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('code');?>
 Meta Robot</label>
															<input type="text" class="form-control" name="iso-robots" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('robots');?>
" />
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-12">
															<label class="col-form-label"><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('code');?>
 Googlebot</label>
															<input type="text" class="form-control" name="iso-googlebot" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('googlebot');?>
" />
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="ui-annotated-section-container">
					<div class="ui-annotated-section">
						<div class="row">
							<div class="col-md-4">
								<div class="ui-annotated-section__title">
									<h2 class="ui-heading">Google Verify Key</h2>
								</div>
								<div class="ui-annotated-section__description">
									Nhập mã Google Verify Key cho phép bạn có thể theo dõi các thống kê về website bằng Google Console.
								</div>
							</div>
							<div class="col-md-8">
								<div class="ui-annotated-section__content">
									<div class="next-card">
										<div class="next-card__section">
											<div class="ui-form__section form-horizontal">
												<div class="p-md-3">
													<div class="form-group">
														<div class="col-md-12">
															<label class="col-form-label"><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('code');?>
 Mã Google Verify Key</label>
															<input type="text" class="form-control" name="iso-google_verity_key" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('google_verity_key');?>
" />
															<span class="help-block">&lt;meta name="google-site-verification" value="google_verity_key" /&gt;</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="ui-annotated-section-container">
					<div class="ui-annotated-section">
						<div class="row">
							<div class="col-md-4">
								<div class="ui-annotated-section__title">
									<h2 class="ui-heading">Google Analytics</h2>
								</div>
								<div class="ui-annotated-section__description">
									Nhập mã Google Analytics để bạn có thể theo dõi các thống kê về truy cập của website.
								</div>
							</div>
							<div class="col-md-8">
								<div class="ui-annotated-section__content">
									<div class="next-card">
										<div class="next-card__section">
											<div class="ui-form__section form-horizontal">
												<div class="p-md-3">
													<div class="form-group">
														<div class="col-md-12">
															<label class="col-form-label"><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('code');?>
 Script Google Analytics</label>
															<textarea rows="3" class="form-control" name="iso-google_analytic" placeholder="Nhập mã Google Analytics tại đây"><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('google_analytic');?>
</textarea>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="ui-annotated-section-container">
					<div class="ui-annotated-section">
						<div class="row">
							<div class="col-md-4">
								<div class="ui-annotated-section__title">
									<h2 class="ui-heading">Facebook Pixel</h2>
								</div>
								<div class="ui-annotated-section__description">
									Facebook Pixel giúp bạn tạo chiến dịch quảng cáo để tìm khách hàng mới.
								</div>
							</div>
							<div class="col-md-8">
								<div class="ui-annotated-section__content">
									<div class="next-card">
										<div class="next-card__section">
											<div class="ui-form__section form-horizontal">
												<div class="p-md-3">
													<div class="form-group">
														<div class="col-md-12">
															<label class="col-form-label"><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('code');?>
 Facebook Pixel</label>
															<textarea class="form-control" rows="3" name="iso-facebook_pixel" placeholder="Nhập Facebook Pixcel tại đây" /><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('facebook_pixel');?>
</textarea>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="ui-annotated-section-container">
					<div class="ui-annotated-section">
						<div class="row">
							<div class="col-md-4">
								<div class="ui-annotated-section__title">
									<h2 class="ui-heading">LiveChat</h2>
								</div>
								<div class="ui-annotated-section__description">
									LiveChat cho phép bạn nhúng một công cụ chat trực tuyến vào hệ thống.
									Ex: Subiz, Talk.to, Zalo, Facebook Messenger
								</div>
							</div>
							<div class="col-md-8">
								<div class="ui-annotated-section__content">
									<div class="next-card">
										<div class="next-card__section">
											<div class="ui-form__section form-horizontal">
												<div class="p-md-3">
													<div class="form-group">
														<div class="col-md-12">
															<label class="col-form-label"><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('code');?>
 Script LiveChat</label>
															<textarea class="form-control" rows="3" name="iso-livechat" placeholder="Nhập Script Live Chat" /><?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('livechat');?>
</textarea>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- End section -->
				<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->_DEV()) {?>
				<section class="ui-annotated-section-container">
					<div class="ui-annotated-section">
						<div class="row">
							<div class="col-md-4">
								<div class="ui-annotated-section__title">
									<h2 class="ui-heading">Giao diên đang sử dụng</h2>
								</div>
								<div class="ui-annotated-section__description">
									Lựa chọn giao diện phù hợp cho website.
								</div>
							</div>
							<div class="col-md-8">
								<div class="ui-annotated-section__content">
									<div class="next-card">
										<div class="next-card__section">
											<div class="ui-form__section form-horizontal">
												<div class="p-md-3">
													<div class="form-group">
														<div class="col-md-12">
															<label class="col-form-label">Giao diện đang sử dụng</label>
															<select name="iso-SiteTemplate" class="form-control"> 
																<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listAppTemplate']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
																<option value="<?php echo $_smarty_tpl->tpl_vars['listAppTemplate']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)];?>
" <?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteTemplate') == $_smarty_tpl->tpl_vars['listAppTemplate']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['listAppTemplate']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)];?>
</option>
																<?php
}
}
?>
															</select> 
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<?php }?>
				<!-- End section -->
		
                <section class="ui-annotated-section-container">
					<div class="ui-annotated-section">
						<div class="row">
							<div class="col-md-4">
								<div class="ui-annotated-section__title">
									<h2 class="ui-heading">Liên hệ tín dụng</h2>
								</div>
								<div class="ui-annotated-section__description">
									Cấu hình liên hệ tín dụng.
								</div>
							</div>
							<div class="col-md-8">
								<div class="ui-annotated-section__content">
									<div class="next-card">
										<div class="next-card__section">
											<div class="ui-form__section form-horizontal">
												<div class="p-md-3">
													<div class="form-group">
														<div class="col-md-12">
															<label class="col-form-label">Zalo</label>
															<input type="text" class="form-control" name="iso-zalo_credit" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('zalo_credit');?>
" />
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-12">
															<label class="col-form-label">Điện thoại</label>
															<input type="text" class="form-control" name="iso-phone_credit" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('phone_credit');?>
" />
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- End section -->
				<!-- Start section -->
				<?php if (!empty($_smarty_tpl->tpl_vars['list_block_types']->value)) {?>
				<section class="ui-annotated-section-container">
					<div class="ui-annotated-section">
						<div class="row">
							<div class="col-md-4">
								<div class="ui-annotated-section__title">
									<h2 class="ui-heading">Tài khoản hỗ trợ MOC</h2>
								</div>
								<div class="ui-annotated-section__description">
									Tài khoản hỗ trợ MOC.
								</div>
							</div>
							<div class="col-md-8">
								<div class="ui-annotated-section__content">
									<div class="next-card">
										<div class="next-card__section">
											<div class="ui-form__section form-horizontal">
												<div class="p-md-3">
													<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_block_types']->value, '_oBlock');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oBlock']->value) {
?>
													<?php $_smarty_tpl->_assignInScope('property_id', $_smarty_tpl->tpl_vars['_oBlock']->value['property_id']);?>
													<div class="form-group">
														<div class="col-md-12">
															<label class="col-form-label">Tài khoản hỗ trợ <?php echo $_smarty_tpl->tpl_vars['_oBlock']->value['title'];?>
</label>
															<div class="mb-2">
																<select placeholder="Gõ tên [OR] email để tìm kiếm" name="stock_support_configs[<?php echo $_smarty_tpl->tpl_vars['_oBlock']->value['property_id'];?>
]" 
																class="form-control iso-selectizeLiveSearch" data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=member&act=get_member_search">
																	<?php if (!empty($_smarty_tpl->tpl_vars['stock_support_configs']->value[$_smarty_tpl->tpl_vars['property_id']->value])) {?>
																	<option value="<?php echo $_smarty_tpl->tpl_vars['stock_support_configs']->value[$_smarty_tpl->tpl_vars['property_id']->value];?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['clsMember']->value->getFullName($_smarty_tpl->tpl_vars['stock_support_configs']->value[$_smarty_tpl->tpl_vars['property_id']->value]);?>
</option>
																	<?php }?>
																</select>
															</div>
															<div class="mb-2">
																<select placeholder="Gõ tên [OR] email để tìm kiếm" name="stock_support_extra_configs[<?php echo $_smarty_tpl->tpl_vars['_oBlock']->value['property_id'];?>
]" 
																	class="form-control iso-selectizeLiveSearch" data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=member&act=get_member_search">
																	<?php if (!empty($_smarty_tpl->tpl_vars['stock_support_extra_configs']->value[$_smarty_tpl->tpl_vars['property_id']->value])) {?>
																	<option value="<?php echo $_smarty_tpl->tpl_vars['stock_support_extra_configs']->value[$_smarty_tpl->tpl_vars['property_id']->value];?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['clsMember']->value->getFullName($_smarty_tpl->tpl_vars['stock_support_extra_configs']->value[$_smarty_tpl->tpl_vars['property_id']->value]);?>
</option>
																	<?php }?>
																</select>
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
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<?php }?>
				<!-- End section -->
				<!-- Start section -->
                <section class="ui-annotated-section-container">
					<div class="ui-annotated-section">
						<div class="row">
							<div class="col-md-4">
								<div class="ui-annotated-section__title">
									<h2 class="ui-heading">Tài khoản thanh toán</h2>
								</div>
								<div class="ui-annotated-section__description">
									Cấu hình thanh toán nâng cấp gói MOC.
								</div>
							</div>
							<div class="col-md-8">
								<div class="ui-annotated-section__content">
									<div class="next-card">
										<div class="next-card__section">
											<div class="ui-form__section form-horizontal">
												<div class="p-md-3">
													<div class="form-group">
														<div class="col-md-12">
															<label class="col-form-label">Tên ngân hàng</label>
															<input type="text" class="form-control" name="iso-bank_name_MOC" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('bank_name_MOC');?>
" />
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-12">
															<label class="col-form-label">Tài khoản ngân hàng</label>
															<input type="number" class="form-control" name="iso-bank_number_MOC" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('bank_number_MOC');?>
" />
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-12">
															<label class="col-form-label">Tên chủ tài khoản</label>
															<input type="text" class="form-control" name="iso-bank_user_name_MOC" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('bank_user_name_MOC');?>
" />
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-12">
															<label class="col-form-label">Email</label>
															<input type="text" class="form-control" name="iso-email_support_MOC" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('email_support_MOC');?>
" />
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-12">
															<label class="col-form-label">Phone</label>
															<input type="text" class="form-control" name="iso-phone_support_MOC" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('phone_support_MOC');?>
" />
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- End section -->
				<!-- Start section -->
                <section class="ui-annotated-section-container">
					<div class="ui-annotated-section">
						<div class="row">
							<div class="col-md-4">
								<div class="ui-annotated-section__title">
									<h2 class="ui-heading">Thời gian cập nhật bảng hàng</h2>
								</div>
								<div class="ui-annotated-section__description">
									Cấu hình thời gian cập nhật bảng hàng
								</div>
							</div>
							<div class="col-md-8">
								<div class="form-row">
									<div class="col-md-6">
										<div class="ui-annotated-section__title">
											<h2 class="ui-heading">Sáng</h2>
										</div>
										<div class="ui-annotated-section__content">
											<div class="next-card">
												<div class="next-card__section">
													<div class="ui-form__section form-horizontal">
														<div class="p-md-3">
															<div class="form-group">
																<div class="col-md-12">
																	<label class="col-form-label">Bắt đầu</label>
																	<input type="time" class="form-control" name="iso-morning_start" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('morning_start');?>
" />
																</div>
															</div>
															<div class="form-group">
																<div class="col-md-12">
																	<label class="col-form-label">Kết thúc</label>
																	<input type="time" class="form-control" name="iso-morning_end" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('morning_end');?>
" />
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="ui-annotated-section__title">
											<h2 class="ui-heading">Chiều</h2>
										</div>
										<div class="ui-annotated-section__content">
											<div class="next-card">
												<div class="next-card__section">
													<div class="ui-form__section form-horizontal">
														<div class="p-md-3">
															<div class="form-group">
																<div class="col-md-12">
																	<label class="col-form-label">Bắt đầu</label>
																	<input type="time" class="form-control" name="iso-afternoon_start" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('afternoon_start');?>
" />
																</div>
															</div>
															<div class="form-group">
																<div class="col-md-12">
																	<label class="col-form-label">Kết thúc</label>
																	<input type="time" class="form-control" name="iso-afternoon_end" value="<?php echo $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('afternoon_end');?>
" />
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- End section -->
				<!-- Start section -->
                <section class="ui-annotated-section-container">
					<div class="ui-annotated-section">
						<div class="row">
							<div class="col-md-4">
								<div class="ui-annotated-section__title">
									<h2 class="ui-heading">Nhận thông báo zalo</h2>
								</div>
								<div class="ui-annotated-section__description">
									Nhận thông báo zalo yêu cầu mua gói data khách hàng
								</div>
							</div>
							<div class="col-md-8">
								<div class="form-group">
									<div class="col-md-12">
										<label class="col-form-label">Thành viên nhận thông báo</label>
										<select placeholder="Chọn nhân viên" name="notify_zalo_recipient[]" class="form-control iso-select2" multiple>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_profile']->value, '_oProfile', false, 'key', 'i', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['_oProfile']->value) {
?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['_oProfile']->value['profile_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkItemInArray($_smarty_tpl->tpl_vars['_oProfile']->value['profile_id'],$_smarty_tpl->tpl_vars['notify_zalo_recipient']->value)) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_oProfile']->value['full_name'];?>
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
				</section>
				<!-- End section -->
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="ui-page-actions ui-page-actions--has-secondary">
		<div class="ui-page-actions__container">
			<div class="ui-page-actions__actions ui-page-actions__actions--secondary"></div>
			<div class="ui-page-actions__actions ui-page-actions__actions--primary">
				<input value="Update" name="submit" type="hidden">
				<div class="ui-page-actions__button-group"><?php echo $_smarty_tpl->tpl_vars['saveBtn']->value;?>
</div>
			</div>
		</div>
	</div>
</form><?php }
}
