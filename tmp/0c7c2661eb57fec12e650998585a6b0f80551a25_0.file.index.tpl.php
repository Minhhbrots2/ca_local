<?php
/* Smarty version 3.1.33, created on 2026-07-07 15:19:47
  from '/www/wwwroot/skyrealty.c-a.vn/application/blocks/home_booking/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a4cb6a38d7014_21384659',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c7c2661eb57fec12e650998585a6b0f80551a25' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/blocks/home_booking/index.tpl',
      1 => 1783314225,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a4cb6a38d7014_21384659 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card">

	<div class="card-header">

		<div class="d-flex align-items-center justify-content-between">

			<h5 class="card-title mb-0">

				<?php if ($_smarty_tpl->tpl_vars['is_dir_sale']->value == '1') {?>

					Thống kê booking <?php echo $_smarty_tpl->tpl_vars['department_name']->value;?>


				<?php } else { ?>

					Thống kê booking

				<?php }?>

			</h5>

			<div class="btn-group">

				<button class="btn btn-outline-default dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside">

					<span>Lọc ngày/tháng/năm</span>

				</button>

				<div class="dropdown-menu dropdown-menu-end w-px-300" data-popper-placement="top-end">

					<form onsubmit="return false" class="p-3">

						<?php if ($_smarty_tpl->tpl_vars['is_dir_project']->value == 1 || $_smarty_tpl->tpl_vars['is_dir_sale']->value == 1) {?>

						<div class="form-group mb-2">

							<label class="form-label mb-1">Xem dưới vài trò</label>

							<div class="clearfix"></div>

							<div class="btn-group w-100 text-nowrap" role="group" aria-label="Hiển thị">

								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['role_arrs']->value, '_oI', false, '_oK');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oK']->value => $_smarty_tpl->tpl_vars['_oI']->value) {
?>

								<input  type="radio" gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" class="btn-check search_field" name="role_type" data-field="role_type" 

									<?php if ($_smarty_tpl->tpl_vars['_oK']->value == @constant('_ROLE_GD_SALE')) {?> checked<?php }?> id="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['_oK']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['_oK']->value;?>
" 

									onChange="$Core.dashboard.handle_booking_changed(this, event)" is_dir_project="<?php echo $_smarty_tpl->tpl_vars['is_dir_project']->value;?>
">

								<label data-toggle="ripple" for="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['_oK']->value;?>
" class="btn btn-outline-default text-fs-13"><?php echo $_smarty_tpl->tpl_vars['_oI']->value;?>
</label>

								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

							</div>

						</div>

						<?php }?>

						<div class="form-group mb-2">

							<label class="form-label mb-1">Lọc thời gian</label>

							<div class="clearfix"></div>

							<div class="btn-group w-100 text-nowrap" role="group" aria-label="Hiển thị">

								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['type_of_date_arrs']->value, '_oI', false, '_oK');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oK']->value => $_smarty_tpl->tpl_vars['_oI']->value) {
?>

								<input type="radio" gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" class="btn-check search_field" name="date_type" data-field="date_type" onChange="$Core.dashboard.handle_booking_changed(this, event)" id="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['_oK']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['_oK']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['_oK']->value == 'month') {?> checked<?php }?>>

								<label data-toggle="ripple" for="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['_oK']->value;?>
" class="btn btn-outline-default text-fs-13"><?php echo $_smarty_tpl->tpl_vars['_oI']->value;?>
</label>

								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

							</div>

						</div>

						<div class="form-group mb-2">

							<label class="form-label mb-1">Thời gian</label>

							<!-- <input type="week" class="form-control js__booking_date search_field" data-field="week" onChange="$Core.dashboard.handle_booking_changed(this, event)" value="<?php echo $_smarty_tpl->tpl_vars['current_year']->value;?>
-W<?php echo $_smarty_tpl->tpl_vars['current_week']->value;?>
" gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" /> -->

							<input type="month" class="form-control search_field js__booking_date" data-field="month" onChange="$Core.dashboard.handle_booking_changed(this, event)" value="<?php echo $_smarty_tpl->tpl_vars['current_month']->value;?>
" gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" />

						</div>

						<div class="form-group mb-2">

							<label class="form-label mb-1">Dự án</label>

							<select class="form-control iso-selectizeSync search_field" data-field="project_id" placeholder="Lựa chọn dự án" 

								onChange="$Core.dashboard.handle_booking_changed(this, event)" gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" name="project_id">

								<option value=""></option>

								<?php if (!empty($_smarty_tpl->tpl_vars['list_projects']->value)) {?>

									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_projects']->value, '_oProject');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oProject']->value) {
?>

									<option value="<?php echo $_smarty_tpl->tpl_vars['_oProject']->value['project_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_oProject']->value['title'];?>
</option>

									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

								<?php }?>

							</select>

						</div>

						<div class="form-group">

							<label class="form-label mb-1">Phân khu</label>

							<select class="form-control iso-selectizeSync search_field" data-field="block_id" 

							placeholder="Lựa chọn phân khu" onChange="$Core.dashboard.handle_booking_changed(this, event)" gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" name="block_id"></select>

						</div>

					</form>

				</div>

			</div>

		</div>

	</div>

	<div class="card-body">

		<div gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" class="ajax" data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=developer&act=load_booking" 

			data-options='{}'>

			<div class="animate-bg w-100 h-px-15 mb-2 rounded-2"></div>

			<div class="form-row mb-2">

				<div class="col-6">

					<div class="animate-bg w-100 h-px-15 mb-2 rounded-2"></div>

					<div class="animate-bg w-100 h-px-15 rounded-2"></div>

				</div>

				<div class="col-6">

					<div class="animate-bg w-100 h-px-15 mb-2 rounded-2"></div>

					<div class="animate-bg w-100 h-px-15 rounded-2"></div>

				</div>

			</div>

			<div class="animate-bg w-100 h-px-15 mb-2 rounded-2"></div>

		</div>

	</div>

</div><?php }
}
