<?php
/* Smarty version 3.1.33, created on 2026-07-10 11:50:06
  from '/www/wwwroot/skyrealty.c-a.vn/application/views/booking/_ajax.mybooking.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a5079fe238184_15659274',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e37b37de35491ccad19865d7293c78caf112516e' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/views/booking/_ajax.mybooking.tpl',
      1 => 1783308726,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a5079fe238184_15659274 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['view_by']->value == '_table') {?>

<table cellpadding="0" cellspacing="0" class="table table-booking table-striped table-bordered dragable mb-0" width="100%">

	<thead class="position-sticky top-0 zindex-3"><tr>

		<th class="text-center bg-lighter h-px-40">Mã BK</th>

		<th class="align-center bg-lighter h-px-40">Ngày Booking</th>

		<th class="align-center bg-lighter h-px-40">Họ tên KH / UNC</th>

		<th class="align-center bg-lighter h-px-40">Nội dung UNC</th>

		<th class="align-center bg-lighter h-px-40">Dự án/Phân khu</th>

		<th class="align-center bg-lighter h-px-40">K.Tầng</th>

		<th class="align-center bg-lighter h-px-40">Trục</th>

		<th class="align-center bg-lighter h-px-40 text-right">Số tiền</th>

		<th class="align-center bg-lighter h-px-40 text-center">T.Trạng</th>

		<th class="align-center bg-lighter h-px-40 text-center">T.thái</th>

		<th class="align-center bg-lighter h-px-40 text-center" width="35px"></th>

	</tr> </thead>

	<tbody>

	<?php if (!empty($_smarty_tpl->tpl_vars['list_bookings']->value)) {?>

		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_bookings']->value, '_oBooking', false, NULL, 'i', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oBooking']->value) {
?>

			<?php $_smarty_tpl->_assignInScope('_booking_id', $_smarty_tpl->tpl_vars['_oBooking']->value['booking_id']);?>

			<?php $_smarty_tpl->_assignInScope('_oStaff', $_smarty_tpl->tpl_vars['_oBooking']->value['oStaff']);?>

			<?php $_smarty_tpl->_assignInScope('_more_information', $_smarty_tpl->tpl_vars['_oBooking']->value['more_information']);?>

			<?php $_smarty_tpl->_assignInScope('_meta_information', $_smarty_tpl->tpl_vars['_oBooking']->value['meta_information']);?>

			<?php $_smarty_tpl->_assignInScope('_booking_type', $_smarty_tpl->tpl_vars['_oBooking']->value['booking_type']);?>

			<tr>

				<td class="align-center text-left">

					<?php if ($_smarty_tpl->tpl_vars['_oBooking']->value['is_deposit_paid'] == '1') {?>

					<span class="badge bg-label-danger">Đóng 10%</span>

					<?php }?>

					<a class="text-link" onClick="$Core.global.booking.view_booking(this, event)" booking_id="<?php echo $_smarty_tpl->tpl_vars['_booking_id']->value;?>
" 

						booking_type="<?php echo $_smarty_tpl->tpl_vars['_booking_type']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['_oBooking']->value['booking_code'];?>
</a>

				</td>

				<td class="align-center"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatDate($_smarty_tpl->tpl_vars['_oBooking']->value['booking_date'],4);?>
</td>

				<td class="align-center">

					<?php if (!empty($_smarty_tpl->tpl_vars['_more_information']->value['customer_name'])) {?>

						<?php echo $_smarty_tpl->tpl_vars['_more_information']->value['customer_name'];?>


					<?php } else { ?>

						<span class="text-muted">--</span>

					<?php }?>

				</td>

				<td class="align-center">

					<?php if (!empty($_smarty_tpl->tpl_vars['_more_information']->value['content'])) {?>

						<?php echo $_smarty_tpl->tpl_vars['clsBooking']->value->short_content($_smarty_tpl->tpl_vars['_more_information']->value['content']);?>


					<?php } else { ?>

						<span class="text-muted">--</span>

					<?php }?>

				</td>

				<td class="align-center"><?php echo $_smarty_tpl->tpl_vars['_oBooking']->value['project_name'];?>
</td>

				<td class="align-center text-center"><?php echo $_smarty_tpl->tpl_vars['_meta_information']->value['floor_range'];?>
</td>

				<td class="align-center text-center"><?php echo $_smarty_tpl->tpl_vars['_meta_information']->value['unit_axis'];?>
</td>

				<td class="align-center text-right">

					<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatNumberToEasyRead($_smarty_tpl->tpl_vars['_oBooking']->value['amount']);?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRate();?>


				</td>

				<td class="align-center text-center"><?php echo $_smarty_tpl->tpl_vars['_oBooking']->value['status_name'];?>
</td>

				<td class="align-center text-center"><?php echo $_smarty_tpl->tpl_vars['_oBooking']->value['state_name'];?>
</td>

				<td class="align-center text-center">

					<div class="dropdown">

						<button type="button" class="btn p-0 dropdown-toggle dropdown-button hide-arrow">

							<i class="bx bx-dots-vertical-rounded"></i>

						</button>

						<div class="dropdown-menu w-px-125">

							<a href="javascript:void(0);" class="dropdown-item" onClick="$Core.global.booking.view_booking(this,event)" 

							booking_id="<?php echo $_smarty_tpl->tpl_vars['_booking_id']->value;?>
" booking_type="<?php echo $_smarty_tpl->tpl_vars['_booking_type']->value;?>
"><i class="bx bx-bullseye me-1"></i> Xem</a>

							<?php if ($_smarty_tpl->tpl_vars['_oBooking']->value['status_id'] == @constant('_BOOKING_STATUS_PENDING_ID')) {?>

							<hr size="0" class="dropdown-divider" />

							<a href="javascript:void(0);" class="dropdown-item" onClick="$Core.booking.open(this,event)" 

								booking_id="<?php echo $_smarty_tpl->tpl_vars['_booking_id']->value;?>
" booking_type="<?php echo $_smarty_tpl->tpl_vars['_booking_type']->value;?>
"><i class="bx bx-edit-alt me-1"></i> Sửa</a>

							<a class="dropdown-item" href="javascript:void(0);" onClick="$Core.booking.cancel(this,event)" booking_id="<?php echo $_smarty_tpl->tpl_vars['_booking_id']->value;?>
" booking_type="<?php echo $_smarty_tpl->tpl_vars['_booking_type']->value;?>
"><i class="bx bx-no-entry me-1"></i> Hủy</a>

							<?php }?>

						</div>

					</div>

				</td>

			</tr>

		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

	<?php } else { ?>

		<tr>

			<td class="text-center" colspan="11">

				Không có giao dịch nào !

			</td>

		</tr>

	<?php }?>

	</tbody>

<//table>

<?php } else { ?>

<table cellpadding="0" cellspacing="0" class="table table-booking table-bordered dragable mb-0" width="100%">

	<thead><tr>

		<th class="text-center bg-lighter h-px-40">Mã BK</th>

		<th class="align-center bg-lighter h-px-40">Ngày Booking</th>

		<th class="align-center bg-lighter h-px-40">Họ tên KH / UNC</th>

		<th class="align-center bg-lighter h-px-40">Nội dung UNC</th>

		<th class="align-center bg-lighter h-px-40">K. Tầng</th>

		<th class="align-center bg-lighter h-px-40">Trục</th>

		<th class="align-center bg-lighter h-px-40 text-right">Số tiền</th>

		<th class="align-center bg-lighter h-px-40 text-center">T.Trạng</th>

		<th class="align-center bg-lighter h-px-40 text-center">T.thái</th>

		<th class="align-center bg-lighter h-px-40 text-center" width="35px"></th>

	</tr></thead>

	<tbody>

		<tr><td colspan="10" class="h-px-10"></td></tr>

		<?php if (!empty($_smarty_tpl->tpl_vars['arr_projects']->value)) {?>

		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr_projects']->value, '_oProject');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oProject']->value) {
?>

			<?php $_smarty_tpl->_assignInScope('list_bookings', $_smarty_tpl->tpl_vars['_oProject']->value['list_bookings']);?>

			<?php if (!empty($_smarty_tpl->tpl_vars['list_bookings']->value)) {?>

			<tr>

				<th class="bg-label-warning h-px-40 fw-bold" colspan="10">

					<div class="sticky group-row-fixed top-0" style="width:fit-content;">

						<span class="text-main"><?php echo $_smarty_tpl->tpl_vars['_oProject']->value['block_name'];?>
 - <?php echo $_smarty_tpl->tpl_vars['_oProject']->value['project_name'];?>
</span>

						<span class="badge bg-label-primary text-white rounded-pill text-fs-12"><?php echo count($_smarty_tpl->tpl_vars['list_bookings']->value);?>
</span>

					</div>

				</th>

			</tr>

			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_bookings']->value, '_oBooking', false, NULL, '_i_booking', array (
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oBooking']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach__i_booking']->value['index']++;
?>

				<?php $_smarty_tpl->_assignInScope('_booking_id', $_smarty_tpl->tpl_vars['_oBooking']->value['booking_id']);?>

				<?php $_smarty_tpl->_assignInScope('_more_information', $_smarty_tpl->tpl_vars['_oBooking']->value['more_information']);?>

				<?php $_smarty_tpl->_assignInScope('_meta_information', $_smarty_tpl->tpl_vars['_oBooking']->value['meta_information']);?>

				<?php $_smarty_tpl->_assignInScope('_booking_type', $_smarty_tpl->tpl_vars['_oBooking']->value['booking_type']);?>

				<tr class="<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach__i_booking']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach__i_booking']->value['index'] : null)%2 == 0) {?>even<?php } else { ?>odd<?php }?>">

					<td class="align-center text-left">

						<?php if ($_smarty_tpl->tpl_vars['_oBooking']->value['is_deposit_paid'] == '1') {?>

						<span class="badge bg-label-danger">Đóng 10%</span>

						<?php }?>

						<a class="text-link" onClick="$Core.booking.view_booking(this, event)" booking_id="<?php echo $_smarty_tpl->tpl_vars['_booking_id']->value;?>
" booking_type="<?php echo $_smarty_tpl->tpl_vars['_booking_type']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['_oBooking']->value['booking_code'];?>
</a>

					</td>

					<td class="align-center"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatDate($_smarty_tpl->tpl_vars['_oBooking']->value['booking_date'],4);?>
</td>

					<td class="align-center">

						<?php if (!empty($_smarty_tpl->tpl_vars['_more_information']->value['customer_name'])) {?>

							<?php echo $_smarty_tpl->tpl_vars['_more_information']->value['customer_name'];?>


						<?php } else { ?>

							<span class="text-muted">--</span>

						<?php }?>

					</td>

					<td class="align-center">

						<?php if (!empty($_smarty_tpl->tpl_vars['_more_information']->value['content'])) {?>

							<?php echo $_smarty_tpl->tpl_vars['clsBooking']->value->short_content($_smarty_tpl->tpl_vars['_more_information']->value['content']);?>


						<?php } else { ?>

							<span class="text-muted">--</span>

						<?php }?>

					</td>

					<td class="align-center text-center"><?php echo $_smarty_tpl->tpl_vars['_meta_information']->value['floor_range'];?>
</td>

					<td class="align-center text-center"><?php echo $_smarty_tpl->tpl_vars['_meta_information']->value['unit_axis'];?>
</td>

					

					<td class="align-center text-right">

						<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatNumberToEasyRead($_smarty_tpl->tpl_vars['_oBooking']->value['amount']);?>
 

						<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRate();?>


					</td>

					<td class="align-center text-center"><?php echo $_smarty_tpl->tpl_vars['_oBooking']->value['status_name'];?>
</td>

					<td class="align-center text-center"><?php echo $_smarty_tpl->tpl_vars['_oBooking']->value['state_name'];?>
</td>

					<td class="align-center text-center">

						<div class="dropdown">

							<button type="button" class="btn p-0 dropdown-toggle dropdown-button hide-arrow">

								<i class="bx bx-dots-vertical-rounded"></i>

							</button>

							<div class="dropdown-menu w-px-125">

								<a href="javascript:void(0);" class="dropdown-item" onClick="$Core.booking.view_booking(this,event)" 

								booking_id="<?php echo $_smarty_tpl->tpl_vars['_booking_id']->value;?>
" booking_type="<?php echo $_smarty_tpl->tpl_vars['_booking_type']->value;?>
"><i class="bx bx-bullseye me-1"></i> Xem</a>

								<?php if ($_smarty_tpl->tpl_vars['_oBooking']->value['status_id'] == @constant('_BOOKING_STATUS_PENDING_ID')) {?>

								<hr size="0" class="dropdown-divider" />

								<a href="javascript:void(0);" class="dropdown-item" onClick="$Core.booking.open(this,event)" 

									booking_id="<?php echo $_smarty_tpl->tpl_vars['_booking_id']->value;?>
" booking_type="<?php echo $_smarty_tpl->tpl_vars['_booking_type']->value;?>
"><i class="bx bx-edit-alt me-1"></i> Sửa</a>

								<a class="dropdown-item<?php if ($_smarty_tpl->tpl_vars['_oBilling']->value['is_cancel'] == '1') {?> disabled<?php }?>" href="javascript:void(0);" onClick="$Core.booking.cancel(this,event)" booking_id="<?php echo $_smarty_tpl->tpl_vars['_booking_id']->value;?>
" booking_type="<?php echo $_smarty_tpl->tpl_vars['_booking_type']->value;?>
"><i class="bx bx-no-entry me-1"></i> Hủy</a>

								<?php }?>

							</div>

						</div>

					</td>

				</tr>

			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

			<?php }?>	

		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

		<?php } else { ?>

			<tr>

				<td class="text-center" colspan="9">

					Không có booking nào !

				</td>

			</tr>

		<?php }?>

		</tbody>

	</table>

	<style>

		.group-row-fixed {

			will-change: transform;

			transform: translateZ(0);

		}

	</style>

<?php }
}
}
