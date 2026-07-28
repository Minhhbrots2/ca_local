<?php
/* Smarty version 3.1.33, created on 2026-07-10 13:53:48
  from '/www/wwwroot/skyrealty.c-a.vn/admin/application/views/setting/takeleave.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a5096fca00808_59926566',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ec8ab264d00a1c6a4e9f67af062a39e68bf8c95' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/admin/application/views/setting/takeleave.tpl',
      1 => 1783308537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a5096fca00808_59926566 (Smarty_Internal_Template $_smarty_tpl) {
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

				<h1 class="ui-title-bar__title">Cấu hình Nghỉ phép</h1>

			</div>

		</div>

	</div>

</header>

<form method="post" action="" enctype="multipart/form-data" class="validate-form">

	<div class="ui-layout">

		<div class="ui-layout__sections"><div class="ui-layout__section">

			<section class="ui-annotated-section-container">

				<div class="ui-annotated-section">

					<div class="ui-annotated-section__content">

						<div class="form-row">

							<div class="col-md-4">

								<div class="ui-annotated-section__title">

									<h2 class="ui-heading">Cài đặt chung</h2>

								</div>

								<div class="ui-annotated-section__description">

									Thiết lập chung các quy định nghỉ phép

								</div>

							</div>

							<div class="col-md-8">

								<div class="next-card">

									<div class="next-card__section">

										<div class="form-group font-weight-bold">

											Cộng ngày phép cho nhân viên vào ngày 

											<select name="takeleave_configs[leave_addition_date]" 

												class="form-control w-auto d-inline-block">

												<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getSelect(1,31,$_smarty_tpl->tpl_vars['takeleave_configs']->value['leave_addition_date']);?>


											</select> 

											hàng tháng

										</div>

										<h5 class="font-weight-bold">Cho phép cộng dồn nghỉ phép qua hàng năm</h5>

										<div class="pl-8">

											<div class="d-flex align-items-center gap-4 mb-3">

												<?php $_smarty_tpl->_assignInScope('toId', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>

												<div class="radio">

													<input id="<?php echo $_smarty_tpl->tpl_vars['toId']->value;?>
" type="radio" class="styled" name="is_leave_carryover"<?php if ($_smarty_tpl->tpl_vars['takeleave_configs']->value['is_leave_carryover'] == '1') {?> checked<?php }?> value="1" />

													<label for="<?php echo $_smarty_tpl->tpl_vars['toId']->value;?>
">Có</label>

												</div>

												<?php $_smarty_tpl->_assignInScope('toId', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>

												<div class="radio">

													<input id="<?php echo $_smarty_tpl->tpl_vars['toId']->value;?>
" type="radio" class="styled" name="is_leave_carryover"<?php if ($_smarty_tpl->tpl_vars['takeleave_configs']->value['is_leave_carryover'] == '0') {?> checked<?php }?> value="0" />

													<label for="<?php echo $_smarty_tpl->tpl_vars['toId']->value;?>
">Không</label>

												</div>

											</div>

										</div>

										<h5 class="font-weight-bold">Số ngày phép được cộng thêm hàng tháng</h5>

										<div class="pl-8">

											<div class="form-group font-weight-bold">

												<select name="takeleave_configs[leave_days_per_month]" 

													class="form-control w-auto d-inline-block">

													<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getSelect(1,10,$_smarty_tpl->tpl_vars['takeleave_configs']->value['leave_days_per_month']);?>


												</select> 

												<label class="col-form-label">ngày phép</label>	

											</div>

										</div>

										<h5 class="font-weight-bold">Thời điểm bắt đầu tính phép</h5>

										<div class="pl-8">

											<div class="d-flex align-items-center gap-4 mb-3">

												<?php $_smarty_tpl->_assignInScope('toId', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>

												<div class="radio">

													<input id="<?php echo $_smarty_tpl->tpl_vars['toId']->value;?>
" type="radio" class="styled" 

														name="takeleave_configs[leave_accrual_start]"<?php if ($_smarty_tpl->tpl_vars['takeleave_configs']->value['leave_accrual_start'] == 'official') {?> checked<?php }?> value="official" />

													<label for="<?php echo $_smarty_tpl->tpl_vars['toId']->value;?>
">Chính thức</label>

												</div>

												<?php $_smarty_tpl->_assignInScope('toId', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>

												<div class="radio">

													<input id="<?php echo $_smarty_tpl->tpl_vars['toId']->value;?>
" type="radio" class="styled" 

														name="takeleave_configs[leave_accrual_start]"<?php if ($_smarty_tpl->tpl_vars['takeleave_configs']->value['leave_accrual_start'] == 'probation') {?> checked<?php }?> value="probation" />

													<label for="<?php echo $_smarty_tpl->tpl_vars['toId']->value;?>
">Thử việc</label>

												</div>

											</div>

											<p>Tháng đầu tiên được tính phép nếu</p>

											<div class="form-group">

												<?php $_smarty_tpl->_assignInScope('toId', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>

												<div class="radio">

													<input type="radio" onchange="x(this, event)" name="takeleave_configs[leave_start_month]" 

														value="any"<?php if ($_smarty_tpl->tpl_vars['takeleave_configs']->value['leave_start_month'] == 'any') {?> checked<?php }?> id="<?php echo $_smarty_tpl->tpl_vars['toId']->value;?>
" />

													<label for="<?php echo $_smarty_tpl->tpl_vars['toId']->value;?>
">Tiếp nhận ngày bất kỳ trong tháng</label>

												</div>

											</div>

											<div class="form-group">

												<?php $_smarty_tpl->_assignInScope('toId', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>

												<div class="radio">

													<input type="radio" onchange="x(this, event)" id="<?php echo $_smarty_tpl->tpl_vars['toId']->value;?>
" value="option" name="takeleave_configs[leave_start_month]"<?php if ($_smarty_tpl->tpl_vars['takeleave_configs']->value['leave_start_month'] == 'option') {?> checked<?php }?> />

													<label for="<?php echo $_smarty_tpl->tpl_vars['toId']->value;?>
">Tuỳ chọn</label>

												</div>

											</div>

											<div class="pl-8">

												<div class="form-group">

													Tiếp nhận trước ngày <select<?php if ($_smarty_tpl->tpl_vars['takeleave_configs']->value['leave_start_month'] == 'any') {?> disabled<?php }?> name="takeleave_configs[before_date][request_date]" class="form-control d-inline-block w-auto">

														<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getSelect(1,31,$_smarty_tpl->tpl_vars['takeleave_configs']->value['before_date']['request_date']);?>


													</select> thì được tính <select<?php if ($_smarty_tpl->tpl_vars['takeleave_configs']->value['leave_start_month'] == 'any') {?> disabled<?php }?> name="takeleave_configs[before_date][leave_days_allowed]" class="form-control d-inline-block w-auto">

														<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getSelect(0,10,$_smarty_tpl->tpl_vars['takeleave_configs']->value['before_date']['leave_days_allowed']);?>


													</select> ngày phép

												</div>

												<div class="form-group">

													Tiếp nhận từ ngày <select<?php if ($_smarty_tpl->tpl_vars['takeleave_configs']->value['leave_start_month'] == 'any') {?> disabled<?php }?> name="takeleave_configs[after_date][request_date]" class="form-control d-inline-block w-auto">

														<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getSelect(1,31,$_smarty_tpl->tpl_vars['takeleave_configs']->value['after_date']['request_date']);?>


													</select> trở về sau thì được tính <select<?php if ($_smarty_tpl->tpl_vars['takeleave_configs']->value['leave_start_month'] == 'any') {?> disabled<?php }?> name="takeleave_configs[after_date][leave_days_allowed]" class="form-control d-inline-block w-auto"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getSelect(0,10,$_smarty_tpl->tpl_vars['takeleave_configs']->value['after_date']['leave_days_allowed']);?>
</select> ngày phép

												</div>

											</div>

											<div class="form-group">

												<?php $_smarty_tpl->_assignInScope('toId', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>

												 <div class="checkbox">

													<input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['toId']->value;?>
" class="styled" name="is_fulltime_only" value="1" <?php if ($_smarty_tpl->tpl_vars['takeleave_configs']->value['is_fulltime_only'] == '1') {?> checked<?php }?>>

													<label for="<?php echo $_smarty_tpl->tpl_vars['toId']->value;?>
" name="takeleave_configs[is_fulltime_only]" value="1">Chỉ được sử dụng khi đã là nhân viên chính thức.(Thời gian thử việc vẫn có ngày phép nhưng chưa được sử dụng)</label>

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

					<div class="ui-annotated-section__content">

						<div class="form-row">

							<div class="col-md-4">

								<div class="ui-annotated-section__title">

									<h2 class="ui-heading">Cài đặt người duyệt</h2>

								</div>

								<div class="ui-annotated-section__description">

									Thiết lập chung các quy định nghỉ phép

								</div>

							</div>

							<div class="col-md-8">

								<div class="next-card">

									<div class="next-card__section">

										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_approved_by']->value, '_oItem', false, '_oKey', 'i', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oKey']->value => $_smarty_tpl->tpl_vars['_oItem']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['total'];
?>

										<div class="form-group<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['last'] : null)) {?> lines<?php }?>">

											<label class="col-form-label"><?php echo $_smarty_tpl->tpl_vars['_oItem']->value['title'];?>
 duyệt <span class="text-gray">(tùy chọn)</span></label>

											<div class="d-flex  pull-right align-items-center gap-2">

												<div class="w-px-200">

													<label class="switch  pull-right">

														<input type="checkbox" value="1"<?php if ($_smarty_tpl->tpl_vars['takeleave_configs']->value['approver'][$_smarty_tpl->tpl_vars['_oKey']->value]['status'] == '1') {?> checked<?php }?> name="takeleave_configs[approver][<?php echo $_smarty_tpl->tpl_vars['_oKey']->value;?>
][status]">

														<span class="slider round"></span>

													</label>

												</div>

												<?php if ($_smarty_tpl->tpl_vars['_oItem']->value['has_select_staff'] == '1') {?>

												<select name="takeleave_configs[approver][<?php echo $_smarty_tpl->tpl_vars['_oKey']->value;?>
][approver_id]" class="form-control iso-select2">

													<option>Lựa chọn người duyệt</option>

													<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_staffs']->value, '_oStaff');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oStaff']->value) {
?>

													<option<?php if ($_smarty_tpl->tpl_vars['takeleave_configs']->value['approver'][$_smarty_tpl->tpl_vars['_oKey']->value]['approver_id'] == $_smarty_tpl->tpl_vars['_oStaff']->value['profile_id']) {?> selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['_oStaff']->value['profile_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['clsProfile']->value->getFullName($_smarty_tpl->tpl_vars['_oStaff']->value['profile_id'],$_smarty_tpl->tpl_vars['_oStaff']->value);?>
</option>

													<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

												</select>

												<?php }?>

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

			</section>

		</div></div>

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
