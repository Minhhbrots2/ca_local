<?php
/* Smarty version 3.1.33, created on 2026-07-11 10:03:39
  from '/www/wwwroot/skyrealty.c-a.vn/application/views/member/report.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a51b28bb55395_02336994',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5db78fe9c7faff6074aa8e231479f781a1f858a0' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/views/member/report.tpl',
      1 => 1783308723,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a51b28bb55395_02336994 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-xxl flex-grow-1 pt-3 container-p-y">

	<form method="POST" class="w-100">

		<div class="d-flex flex-wrap mb-3 align-items-center justify-content-between">

			<div class="d-flex align-items-center gap-2">

				<a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('member');?>
" class="back" title="Quay lại">

					<img src="<?php echo @constant('ICON_BACK');?>
" />

				</a>

				<div class="d-flex flex-column">

					<h5 class="text-upper mb-0 fw-bold">Báo cáo nhân sự</h5>

					<div class="text-muted">Báo cáo tổng hợp nhân sự</div>

				</div>

			</div>

			<div class="d-flex justify-content-end  gap-1 align-items-center">

				<select onChange="javasctipt:_reload(this, event)" data-field="year" class="form-control search_field form-select">

					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_years']->value, '_oYear', false, NULL, 'i', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oYear']->value) {
?>

					<option<?php if ($_smarty_tpl->tpl_vars['current_year']->value == $_smarty_tpl->tpl_vars['_oYear']->value) {?> selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['_oYear']->value;?>
">Năm <?php echo $_smarty_tpl->tpl_vars['_oYear']->value;?>
</option>

					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

				</select>

			</div>

		</div>

	</form>

	<div class="mb-2">

		<div class="card">

			<div class="card-header">

				<h5 class="card-title mb-0">Thống kê nhân sự</h5>

			</div>

			<div class="card-body">

				<div class="briefs mb-3 gap-2 gap-xxl-3 d-flex flex-wrap">

					<div class="brief-item a1a bg-orange">

						<p class="fs-16 mb-2">Tổng nhân viên</p>

						<h3 class="fs-32 mb-1 text-white"><?php echo $_smarty_tpl->tpl_vars['arr_summary']->value['total_staff'];?>
</h3>

					</div>

					<div class="brief-item a2a bg-azure">

						<p class="fs-16 mb-2">Đang làm việc</p>

						<h3 class="fs-32 mb-0 text-white"><?php echo $_smarty_tpl->tpl_vars['arr_summary']->value['total_on'];?>
</h3>

					</div>

					<div class="brief-item a3a bg-cyan">

						<p class="fs-16 mb-2">Đã nghỉ</p>

						<h3 class="fs-32 mb-0 text-white"><?php echo $_smarty_tpl->tpl_vars['arr_summary']->value['total_off'];?>
</h3>

					</div>

					<div class="brief-item a4a bg-danger">

						<p class="fs-16 mb-2">Khối kinh doanh</p>

						<h3 class="fs-32 mb-0 text-white"><?php echo $_smarty_tpl->tpl_vars['arr_summary']->value['total_sale'];?>
</h3>

					</div>

					<div class="brief-item a5a bg-purple">

						<p class="fs-16 mb-2">Khối văn phòng</p>

						<h3 class="fs-32 mb-0 text-white"><?php echo $_smarty_tpl->tpl_vars['arr_summary']->value['total_bo'];?>
</h3>

					</div>

				</div>

			</div>

		</div>

	</div>

	<div class="form-row mb-2">

		<div class="col-12 col-md-4">

			<div class="card">

				<div class="card-header">

					<h5 class="card-title">Biến động nhân sự</h5>

				</div>

				<div class="card-body ajax" data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=staff_changes" data-options="{}">

					<div class="chartContainer d-flex align-items-center justify-content-center w-100 h-px-300">

						<span class="text-muted">Đang tải dữ liệu...</span>

					</div>

				</div>

			</div>

		</div>

		<div class="col-12 col-md-4">

			<div class="card">

				<div class="card-header">

					<h5 class="card-title">Số lượng nhân sự cuối tháng <?php echo $_smarty_tpl->tpl_vars['current_year']->value;?>
</h5>

				</div>

				<div class="card-body ajax" data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=month_end_staff_count" data-options="{}">

					<div class="chartContainer d-flex align-items-center justify-content-center w-100 h-px-300">

						<span class="text-muted">Đang tải dữ liệu...</span>

					</div>

				</div>

			</div>

		</div>

		<div class="col-12 col-md-4">

			<div class="card">

				<div class="card-header">

					<h5 class="card-title">Số lượng nhân sự hàng năm</h5>

				</div>

				<div class="card-body ajax" data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=staff_count_chart" data-options="{}">

					<div class="chartContainer d-flex align-items-center justify-content-center w-100 h-px-300">

						<span class="text-muted">Đang tải dữ liệu...</span>

					</div>

				</div>

			</div>

		</div>

		

	</div>

	<div class="form-row">

		<div class="col-12 col-md-4">

			<div class="card">

				<div class="card-header">

					<h5 class="card-title">Nhân sự theo phòng ban <?php echo $_smarty_tpl->tpl_vars['current_year']->value;?>
</h5>

				</div>

				<div class="card-body ajax" data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=staff_dep_pie_chart" data-options="{}">

					<div class="chartContainer d-flex align-items-center justify-content-center w-100 h-px-300">

						<span class="text-muted">Đang tải dữ liệu...</span>

					</div>

				</div>

			</div>

		</div>

		<div class="col-12 col-md-8">

			<div class="card h-100">

				<div class="card-header">

					<h5 class="card-title">Nhân sự theo phòng ban <?php echo $_smarty_tpl->tpl_vars['current_year']->value;?>
</h5>

				</div>

				<div class="card-body ajax" data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=staff_dep_line_chart" data-options="{}">

					<div class="chartContainer d-flex align-items-center justify-content-center w-100 h-px-300">

						<span class="text-muted">Đang tải dữ liệu...</span>

					</div>

				</div>

			</div>

		</div>

	</div>

</div><?php }
}
