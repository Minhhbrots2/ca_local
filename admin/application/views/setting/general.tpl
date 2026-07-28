<header class="ui-title-bar-container ">

	<div class="ui-title-bar">

		<div class="ui-title-bar__navigation">

			<div class="ui-breadcrumbs">

				<a href="{$PCMS_URL}/index.php?mod={$mod}" class="btn btn-default ui-breadcrumb">

					{$core->makeIcon('angle-left mr-5')}

					<span class="ui-breadcrumb__item">{$core->get_Lang('Setting')}</span>

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

															<input type="text" class="form-control require" required="true" placeholder="Nhập tên website" name="iso-site_name" value="{$clsConfiguration->getValue('site_name')}" />

														</div>

													</div>

													<div class="form-group">

														<div class="col-md-12">

															<label class="col-form-label">Tiêu đề trang chủ <span class="text-red">*</span></label>

															<input type="text" class="form-control required" name="iso-meta_title" required placeholder="Nhập tiêu đề trang chủ" value="{$clsConfiguration->getValue('meta_title')}" />

														</div>

													</div>

													<div class="form-group">

														<div class="col-md-12">

															<label class="col-form-label">Mô tả trang chủ <span class="text-red">*</span></label>

															<textarea rows="2" class="form-control required" required placeholder="Nhập một mô tả để nâng cao xếp hạng trên công cụ tìm kiếm như Google." name="iso-meta_description">{$clsConfiguration->getValue('meta_description')}</textarea>

														</div>

													</div>

													<div class="form-group">

														<div class="col-md-12">

															<label class="col-form-label">Thẻ từ khóa</label>

															<textarea rows="2" class="form-control" placeholder="Nhập một danh sách từ khóa nâng cao xếp hạng trên công cụ tìm kiếm như Google" name="iso-meta_keyword">{$clsConfiguration->getValue('meta_keyword')}</textarea>

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

															<label class="col-form-label">{$core->makeIcon('code')} Tổng giao dịch toàn công ty</label>

															<input type="text" class="form-control" name="iso-total_transactions" value="{$clsConfiguration->getValue('total_transactions')}" />

														</div>

													</div>

													<div class="form-group">

														<div class="col-md-12">

															<label class="col-form-label">{$core->makeIcon('code')} Mục tiêu điểm số cá nhân</label>

															<input type="text" class="form-control" name="iso-total_score" value="{$clsConfiguration->getValue('total_score')}" />

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

															<label class="col-form-label">{$core->makeIcon('code')} Meta Robot</label>

															<input type="text" class="form-control" name="iso-robots" value="{$clsConfiguration->getValue('robots')}" />

														</div>

													</div>

													<div class="form-group">

														<div class="col-md-12">

															<label class="col-form-label">{$core->makeIcon('code')} Googlebot</label>

															<input type="text" class="form-control" name="iso-googlebot" value="{$clsConfiguration->getValue('googlebot')}" />

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

															<label class="col-form-label">{$core->makeIcon('code')} Mã Google Verify Key</label>

															<input type="text" class="form-control" name="iso-google_verity_key" value="{$clsConfiguration->getValue('google_verity_key')}" />

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

															<label class="col-form-label">{$core->makeIcon('code')} Script Google Analytics</label>

															<textarea rows="3" class="form-control" name="iso-google_analytic" placeholder="Nhập mã Google Analytics tại đây">{$clsConfiguration->getValue('google_analytic')}</textarea>

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

															<label class="col-form-label">{$core->makeIcon('code')} Facebook Pixel</label>

															<textarea class="form-control" rows="3" name="iso-facebook_pixel" placeholder="Nhập Facebook Pixcel tại đây" />{$clsConfiguration->getValue('facebook_pixel')}</textarea>

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

															<label class="col-form-label">{$core->makeIcon('code')} Script LiveChat</label>

															<textarea class="form-control" rows="3" name="iso-livechat" placeholder="Nhập Script Live Chat" />{$clsConfiguration->getValue('livechat')}</textarea>

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

				{if $clsISO->_DEV()}

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

																{section name=i loop=$listAppTemplate}

																<option value="{$listAppTemplate[i]}" {if $clsConfiguration->getValue('SiteTemplate') eq $listAppTemplate[i]}selected="selected"{/if}>{$listAppTemplate[i]}</option>

																{/section}

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

				{/if}

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

															<input type="text" class="form-control" name="iso-zalo_credit" value="{$clsConfiguration->getValue('zalo_credit')}" />

														</div>

													</div>

													<div class="form-group">

														<div class="col-md-12">

															<label class="col-form-label">Điện thoại</label>

															<input type="text" class="form-control" name="iso-phone_credit" value="{$clsConfiguration->getValue('phone_credit')}" />

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

				{if !empty($list_block_types)}

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

													{foreach from=$list_block_types item = _oBlock}

													{assign var = property_id value = $_oBlock.property_id}

													<div class="form-group">

														<div class="col-md-12">

															<label class="col-form-label">Tài khoản hỗ trợ {$_oBlock.title}</label>

															<div class="mb-2">

																<select placeholder="Gõ tên [OR] email để tìm kiếm" name="stock_support_configs[{$_oBlock.property_id}]" 

																class="form-control iso-selectizeLiveSearch" data-url="{$PCMS_URL}/index.php?mod=member&act=get_member_search">

																	{if !empty($stock_support_configs.$property_id)}

																	<option value="{$stock_support_configs.$property_id}" selected="selected">{$clsMember->getFullName($stock_support_configs.$property_id)}</option>

																	{/if}

																</select>

															</div>

															<div class="mb-2">

																<select placeholder="Gõ tên [OR] email để tìm kiếm" name="stock_support_extra_configs[{$_oBlock.property_id}]" 

																	class="form-control iso-selectizeLiveSearch" data-url="{$PCMS_URL}/index.php?mod=member&act=get_member_search">

																	{if !empty($stock_support_extra_configs.$property_id)}

																	<option value="{$stock_support_extra_configs.$property_id}" selected="selected">{$clsMember->getFullName($stock_support_extra_configs.$property_id)}</option>

																	{/if}

																</select>

															</div>

														</div>

													</div>

													{/foreach}

												</div>

											</div>

										</div>

									</div>

								</div>

							</div>

						</div>

					</div>

				</section>

				{/if}

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

															<input type="text" class="form-control" name="iso-bank_name_MOC" value="{$clsConfiguration->getValue('bank_name_MOC')}" />

														</div>

													</div>

													<div class="form-group">

														<div class="col-md-12">

															<label class="col-form-label">Tài khoản ngân hàng</label>

															<input type="number" class="form-control" name="iso-bank_number_MOC" value="{$clsConfiguration->getValue('bank_number_MOC')}" />

														</div>

													</div>

													<div class="form-group">

														<div class="col-md-12">

															<label class="col-form-label">Tên chủ tài khoản</label>

															<input type="text" class="form-control" name="iso-bank_user_name_MOC" value="{$clsConfiguration->getValue('bank_user_name_MOC')}" />

														</div>

													</div>

													<div class="form-group">

														<div class="col-md-12">

															<label class="col-form-label">Email</label>

															<input type="text" class="form-control" name="iso-email_support_MOC" value="{$clsConfiguration->getValue('email_support_MOC')}" />

														</div>

													</div>

													<div class="form-group">

														<div class="col-md-12">

															<label class="col-form-label">Phone</label>

															<input type="text" class="form-control" name="iso-phone_support_MOC" value="{$clsConfiguration->getValue('phone_support_MOC')}" />

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

                <section class="ui-annotated-section-container d-none">

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

																	<input type="time" class="form-control" name="iso-morning_start" value="{$clsConfiguration->getValue('morning_start')}" />

																</div>

															</div>

															<div class="form-group">

																<div class="col-md-12">

																	<label class="col-form-label">Kết thúc</label>

																	<input type="time" class="form-control" name="iso-morning_end" value="{$clsConfiguration->getValue('morning_end')}" />

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

																	<input type="time" class="form-control" name="iso-afternoon_start" value="{$clsConfiguration->getValue('afternoon_start')}" />

																</div>

															</div>

															<div class="form-group">

																<div class="col-md-12">

																	<label class="col-form-label">Kết thúc</label>

																	<input type="time" class="form-control" name="iso-afternoon_end" value="{$clsConfiguration->getValue('afternoon_end')}" />

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

											{foreach from=$list_profile item=_oProfile key=key name=i}

												<option value="{$_oProfile.profile_id}" {if $clsISO->checkItemInArray($_oProfile.profile_id, $notify_zalo_recipient)}selected{/if}>{$_oProfile.full_name}</option>

											{/foreach}

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

				<div class="ui-page-actions__button-group">{$saveBtn}</div>

			</div>

		</div>

	</div>

</form>