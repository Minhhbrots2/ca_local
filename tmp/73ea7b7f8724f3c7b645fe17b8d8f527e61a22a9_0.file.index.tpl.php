<?php
/* Smarty version 3.1.33, created on 2026-07-08 12:07:40
  from '/www/wwwroot/skyrealty.c-a.vn/application/blocks/booking_search/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a4ddb1c2d11f7_93928247',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73ea7b7f8724f3c7b645fe17b8d8f527e61a22a9' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/blocks/booking_search/index.tpl',
      1 => 1783314218,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a4ddb1c2d11f7_93928247 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('uid', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>

<div class="dropdown-header">Tìm kiếm</div>

<div class="px-3 pt-1 pb-3">

	<?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?>

	<div class="form-group mb-2">

		<label class="form-label mb-1">Từ khóa</label>

		<input type="text" class="form-control search_field" placeholder="Nhập từ khóa tìm kiếm..." 

			onChange="$Core.booking.do_search(this, event)" data-field="keysearch" />

	</div>

	<div class="form-group mb-2">

		<label class="form-label mb-1">Tình trạng</label>

		<select class="iso-selectize search_field w-100" uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" call_from="search" 

		placeholder="Tình trạng" name="status_id" data-field="status_id">

			<option value="">Tình trạng</option>

			<?php echo $_smarty_tpl->tpl_vars['clsProperty']->value->getSelectByProperty('_BOOKING_STATUS',0,"Tình trạng");?>


		</select>

	</div>

	<?php if ($_smarty_tpl->tpl_vars['mod']->value == 'booking' && $_smarty_tpl->tpl_vars['act']->value == 'default') {?>

	<div class="form-group mb-2">

		<label class="form-label mb-1">Phòng ban</label>

		<select data-bind="change" class="iso-selectize search_field w-100" uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" call_from="search" 

		placeholder="Phòng ban" onChange="$Core.booking.handle_dep_change(this, event)" name="department_id" data-field="department_id">

			<option value="0">Phòng ban</option>

			<?php echo $_smarty_tpl->tpl_vars['clsProperty']->value->getSelectByProperty('_DEPARTMENT',$_smarty_tpl->tpl_vars['oneBooking']->value['department_id'],"Phòng ban");?>


		</select>

	</div>

	<div class="form-group mb-2">

		<label class="form-label mb-1">Nhân viên</label>

		<select class="iso-selectizeImageSync search_field w-100" placeholder="Nhân viên" name="staff_id" data-field="staff_id">

			<option value="0">Nhân viên</option>

		</select>

	</div>

	<?php }?>

	<?php } else { ?>

	<div class="form-group form-row mb-2">

		<div class="col-5">

			<label class="form-label mb-1">Từ khóa</label>

			<input type="text" class="form-control search_field" placeholder="Nhập từ khóa tìm kiếm..." 

				onChange="$Core.booking.do_search(this, event)" data-field="keysearch" />

		</div>

		<div class="col-7">

			<label class="form-label mb-1">Tình trạng</label>

			<select class="iso-selectize search_field w-100" uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" 

			call_from="search" placeholder="Tình trạng" name="status_id" data-field="status_id">

				<option value="">Tình trạng</option>

				<?php echo $_smarty_tpl->tpl_vars['clsProperty']->value->getSelectByProperty('_BOOKING_STATUS',0,"Tình trạng");?>


			</select>

		</div>

	</div>

	<?php if ($_smarty_tpl->tpl_vars['mod']->value == 'booking' && $_smarty_tpl->tpl_vars['act']->value == 'default') {?>

	<div class="form-group form-row mb-2">

		<div class="col-5">

			<label class="form-label mb-1">Phòng ban</label>

			<select data-bind="change" class="iso-selectize search_field w-100" uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" call_from="search" 

			placeholder="Phòng ban" onChange="$Core.booking.handle_dep_change(this, event)" name="department_id" data-field="department_id">

				<option value="">Phòng ban</option>

				<?php echo $_smarty_tpl->tpl_vars['clsProperty']->value->getSelectByProperty('_DEPARTMENT',0,"Phòng ban");?>


			</select>

		</div>

		<div class="col-7">

			<label class="form-label mb-1">Nhân viên</label>

			<select class="iso-selectizeImageSync search_field w-100" placeholder="Nhân viên" name="staff_id" data-field="staff_id">

				<option value="">Nhân viên</option>

			</select>

		</div>

	</div>

	<?php }?>

	<?php }?>

	<div class="form-group mb-2">

		<label class="form-label mb-1">Dự án</label>

		<select placeholder="Chọn dự án" class="iso-selectize search_field w-100" uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" name="project_id" 

		data-field="project_id" onChange="$Core.booking.load_block(this, event)" call_from="search" block_id="<?php echo $_smarty_tpl->tpl_vars['get_block_id']->value;?>
" >

			<option value="">Dự án</option>

			<?php if (!empty($_smarty_tpl->tpl_vars['arr_projects']->value)) {?>

				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr_projects']->value, '_oProject');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oProject']->value) {
?>

				<option<?php if ($_smarty_tpl->tpl_vars['get_project_id']->value == $_smarty_tpl->tpl_vars['_oProject']->value['project_id']) {?> selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['_oProject']->value['project_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_oProject']->value['project_name'];?>
</option>

				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

			<?php }?>

		</select>

	</div>

	<?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?>

	<div class="form-group mb-2">

		<label class="form-label mb-1">Phân khu/Block</label>

		<div class="slb_block_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">

			<select placeholder="Phân khu" class="form-control search_field iso-selectize w-100" uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" data-field="block_id" 

			onChange="$Core.booking.load_building(this, event)" name="block_id" call_from="search" data-optgroup="false">

				<?php if (!empty($_smarty_tpl->tpl_vars['arr_projects']->value)) {?>

					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr_projects']->value, '_oBlock');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oBlock']->value) {
?>

					<option<?php if ($_smarty_tpl->tpl_vars['get_block_id']->value == $_smarty_tpl->tpl_vars['_oBlock']->value['block_id']) {?> selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['_oBlock']->value['block_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_oBlock']->value['block_name'];?>
</option>

					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

				<?php }?>

			</select>

		</div>

	</div>

	<div class="form-group mb-2">

		<label class="form-label mb-1">Tòa nhà</label>

		<div class="slb_building_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">

			<select placeholder="Tòa nhà" class="form-control search_field iso-selectize w-100" uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" 

			data-optgroup="false" data-field="building_id" call_from="search">

				<option value="0">Tòa nhà</option>

			</select>

		</div>

	</div>

	<?php } else { ?>

	<div class="form-group form-row mb-2">

		<div class="col-6">

			<label class="form-label mb-1">Phân khu/Block</label>

			<div class="slb_block_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">

				<select placeholder="Phân khu" class="form-control search_field iso-selectize w-100" uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" data-field="block_id" 

				onChange="$Core.booking.load_building(this, event)" name="block_id" call_from="search" data-optgroup="false">

					<?php if (!empty($_smarty_tpl->tpl_vars['arr_projects']->value)) {?>

						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr_projects']->value, '_oBlock');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oBlock']->value) {
?>

						<option<?php if ($_smarty_tpl->tpl_vars['get_block_id']->value == $_smarty_tpl->tpl_vars['_oBlock']->value['block_id']) {?> selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['_oBlock']->value['block_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_oBlock']->value['block_name'];?>
</option>

						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

					<?php }?>

				</select>

			</div>

		</div>

		<div class="col-6">

			<label class="form-label mb-1">Tòa nhà</label>

			<div class="slb_building_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">

				<select placeholder="Tòa nhà" class="form-control search_field iso-selectize w-100" uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" 

				data-optgroup="false" data-field="building_id" call_from="search">

					<option value="0">Tòa nhà</option>

				</select>

			</div>

		</div>

	</div>

	<?php }?>

	<div class="form-group form-row">

		
		<div class="col-12">

			<label class="form-label mb-1">Trạng thái</label>

			<select class="iso-selectize search_field w-100" uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" placeholder="Trạng thái" 

				name="state_id" data-field="state_id">

				<option value="">Trạng thái</option>

				<?php echo $_smarty_tpl->tpl_vars['clsProperty']->value->getSelectByProperty('_BOOKING_STATE',$_smarty_tpl->tpl_vars['get_state_id']->value,"Trạng thái");?>


			</select>

		</div>

	</div>

	<hr class="my-2" />

	<div class="d-flex align-items-center gap-2">

		<button type="button" class="btn btn-primary" onClick="$Core.booking.do_search(this, event)">

			<i class="bx bx-search"></i> Tìm kiếm</button>

	</div>

</div><?php }
}
