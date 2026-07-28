<?php
/* Smarty version 3.1.33, created on 2026-07-08 12:07:40
  from '/www/wwwroot/skyrealty.c-a.vn/application/views/booking/my_booking.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a4ddb1c2b6a97_51038348',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '279f63c819b3683baf61f2f96f5f5b0ddf69e1b7' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/views/booking/my_booking.tpl',
      1 => 1783314292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a4ddb1c2b6a97_51038348 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('uid', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>

<?php echo '<script'; ?>
 type="text/javascript"> var booking_type = '<?php echo @constant('_BOOKING_TYPE_INTERNAL_ID');?>
'; <?php echo '</script'; ?>
>

<div class="container-xxl flex-grow-1 pt-2 container-p-y my_booking">

	<form action="#" method="POST" onsubmit="return false;">

		<div class="d-flex flex-wrap justify-content-between align-items-center mb-2">

			<div class="d-flex flex-column mb-2 mb-lg-0">

				<h4 class="fw-bold mb-1">Quản lý Booking</h4>

				<span class="text-muted">Tổng cộng <strong class="text-main">0</strong> Booking FH</span>

			</div>

			<div class="d-flex align-items-center gap-2">

				<button type="button" data-toggle="ripple" onClick="$Core.booking.open(this, event)" booking_id="0" 

					booking_type="<?php echo @constant('_BOOKING_TYPE_INTERNAL_ID');?>
" project_id="<?php echo $_smarty_tpl->tpl_vars['get_project_id']->value;?>
" block_id="<?php echo $_smarty_tpl->tpl_vars['get_block_id']->value;?>
" building_id="<?php echo $_smarty_tpl->tpl_vars['get_building_id']->value;?>
" class="btn btn-outline-danger<?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?> btn-icon<?php }?> js__create-booking"><i class="bx bx-plus"></i><?php if ($_smarty_tpl->tpl_vars['deviceType']->value != 'phone') {?> Thêm mới<?php }?></button>

				<div class="dropdown">

					<button type="button" class="btn<?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?> btn-icon<?php }?> btn-default dropdown-toggle<?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?> hide-arrow<?php }?>" data-bs-toggle="dropdown" data-bs-auto-close="false" aria-haspopup="true" aria-expanded="true">

						<i class="bx bx-filter-alt"></i><?php if ($_smarty_tpl->tpl_vars['deviceType']->value != 'phone') {?> Bộ lọc<?php }?>

					</button>

					<div class="dropdown-menu dropdown-menu-end w-px-<?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?>300<?php } else { ?>400<?php }?>" data-popper-placement="top-end"><?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('booking_search',array('uid'=>$_smarty_tpl->tpl_vars['uid']->value,'arr_projects'=>$_smarty_tpl->tpl_vars['arr_projects']->value));?>
</div>

				</div>

				<div class="btn-group d-flex align-items-center" aria-label="Sắp xếp">

					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['view_arrs']->value, '_oVal', false, '_oKey');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oKey']->value => $_smarty_tpl->tpl_vars['_oVal']->value) {
?>

					<input type="radio" class="btn-check" name="view_by" uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" onchange="$Core.booking.do_search(this, event)" 

						id="<?php echo $_smarty_tpl->tpl_vars['_oKey']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['_oKey']->value == $_smarty_tpl->tpl_vars['get_view_by']->value) {?> checked<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['_oKey']->value;?>
">

					<label data-toggle="ripple" class="btn btn-icon btn-outline-default" for="<?php echo $_smarty_tpl->tpl_vars['_oKey']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">

						<i class="bx <?php echo $_smarty_tpl->tpl_vars['_oVal']->value;?>
"></i>

					</label>

					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

				</div>

			</div>

		</div>

	</form>

	<div class="card">

		<div class="card-body">

			<div class="briefs mb-3 gap-2 gap-lg-2 d-flex flex-wrap">

				<div class="brief-item a1a bg-orange clickable">

					<p class="text-fs-13 mb-0">Tổng booking</p>

					<hr class="w-px-50 my-2" />

					<h3 class="text-fs-16 mb-0 text-white">0 BK</h3>

					<h3 class="text-fs-16 mb-0 text-white">0 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRate();?>
</h3>

				</div>

				<div class="brief-item a2a brief-item-clickable bg-azure">

					<p class="text-fs-13 mb-0">Khớp cọc</p>

					<hr class="w-px-50 my-2" />

					<h3 class="text-fs-16 mb-0 text-white">0 BK</h3>

					<h3 class="text-fs-16 mb-0 text-white">0 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRate();?>
</h3>

				</div>

				<div class="brief-item a6a brief-item-clickable bg-solid">

					<p class="text-fs-13 mb-0">Hoàn cọc</p>

					<hr class="w-px-50 my-2" />

					<h3 class="text-fs-16 mb-0 text-white">0 BK</h3>

					<h3 class="text-fs-16 mb-0 text-white">0 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRate();?>
</h3>

				</div>

				<div class="brief-item a3a brief-item-clickable bg-cyan">

					<p class="text-fs-13 mb-0">10% vào FH</p>

					<hr class="w-px-50 my-2" />

					<h3 class="text-fs-16 mb-0 text-white">0 BK</h3>

					<h3 class="text-fs-16 mb-0 text-white">0 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRate();?>
</h3>

				</div>

				<div class="brief-item a5a brief-item-clickable bg-green">

					<p class="text-fs-13 mb-0">Tổng tồn 10%</p>

					<hr class="w-px-50 my-2" />

					<h3 class="text-fs-16 mb-0 text-white">0 BK</h3>

					<h3 class="text-fs-16 mb-0 text-white">0 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRate();?>
</h3>

				</div>

				<div class="brief-item a5a brief-item-clickable bg-purple">

					<p class="text-fs-13 mb-0">Tổng cọc tồn</p>

					<hr class="w-px-50 my-2" />

					<h3 class="text-fs-16 mb-0 text-white">0 BK</h3>

					<h3 class="text-fs-16 mb-0 text-white">0 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRate();?>
</h3>

				</div>

			</div>

			<!-- table-striped -->

			<div class="table-container holder_mybookings overflow-x-auto text-nowrap no-shadow">

				<table cellpadding="0" cellspacing="0" class="table table-booking table-bordered dragable mb-0" width="100%">

					<thead><tr>

						<th class="text-center bg-lighter h-px-40">Mã BK</th>

						<th class="align-center bg-lighter h-px-40">Ngày Booking</th>

						<th class="align-center bg-lighter h-px-40">Họ tên KH / UNC</th>

						<th class="align-center bg-lighter h-px-40">Nội dung UNC</th>

						<th class="align-center bg-lighter h-px-40">K.Tầng</th>

						<th class="align-center bg-lighter h-px-40">Trục</th>

						<th class="align-center bg-lighter h-px-40 text-right">Số tiền</th>

						<th class="align-center bg-lighter h-px-40 text-center">T.Trạng</th>

						<th class="align-center bg-lighter h-px-40 text-center">T.thái</th>

						<th class="align-center bg-lighter h-px-40 text-center" width="35px"></th>

					</tr> </thead>

					<tbody>

						<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['list_preloaders']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = min(($__section_i_0_loop - 0), 30);
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>

						<tr>

							<td><div class="animate-bg w-100 h-px-15 rounded-pill"></div></td>

							<td><div class="animate-bg w-100 h-px-15 rounded-pill"></div></td>

							<td><div class="animate-bg w-100 h-px-15 rounded-pill"></div></td>

							<td><div class="animate-bg w-100 h-px-15 rounded-pill"></div></td>

							<td><div class="animate-bg w-100 h-px-15 rounded-pill"></div></td>

							<td><div class="animate-bg w-100 h-px-15 rounded-pill"></div></td>

							<td><div class="animate-bg w-100 h-px-15 rounded-pill"></div></td>

							<td><div class="animate-bg w-100 h-px-15 rounded-pill"></div></td>

							<td><div class="animate-bg w-100 h-px-15 rounded-pill"></div></td>

							<td><div class="animate-bg w-100 h-px-15 rounded-pill"></div></td>

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

</div><?php }
}
