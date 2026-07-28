<?php
/* Smarty version 3.1.33, created on 2026-07-13 18:29:30
  from '/www/wwwroot/skyrealty.c-a.vn/application/views/booking/stock_hug.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a54cc1a735990_51187556',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6c7ac2cc3a02af7aeb8cb83e67c9a2d82983973' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/views/booking/stock_hug.tpl',
      1 => 1783308725,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a54cc1a735990_51187556 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-xxl flex-grow-1 container-p-y pt-2">

	<div class="d-flex flex-wrap justify-content-between align-items-center mb-2">

		<div class="sLXazhNQJU mb-2 mb-lg-0">

			<h4 class="fw-bold mb-1">Quản lý Quỹ ôm</h4>

			<span class="text-muted">Hiện có tổng cộng <strong class="text-main total-record">0</strong> quỹ ôm</span>

		</div>

		<?php $_smarty_tpl->_assignInScope('uid', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>

		<div class="sBwcBlvAwX d-flex gap-1 align-items-center<?php if ($_smarty_tpl->tpl_vars['deviceType']->value != 'phone') {?> bg-grayter rounded-2 p-2<?php }?>">

			<div class="d-none d-lg-flex gap-1 align-items-center">

				<div class="form-group">

					<select placeholder="Chọn dự án" class="iso-selectizeSync search_field w-px-250" uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" 

						name="project_id" data-field="project_id" onChange="$Core.stock_hug.do_search(this, event)" >

						<option value="0">Dự án</option>

						<?php if (!empty($_smarty_tpl->tpl_vars['arr_projects']->value)) {?>

							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr_projects']->value, '_oProject');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oProject']->value) {
?>

							<option<?php if ($_smarty_tpl->tpl_vars['get_project_id']->value == $_smarty_tpl->tpl_vars['_oProject']->value['setting_id']) {?> selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['_oProject']->value['setting_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_oProject']->value['title'];?>
</option>

							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

						<?php }?>

					</select>

				</div>

			</div>

			<?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?>

			<button data-toggle="ripple" type="button" title="Thêm nhanh" onClick="$Core.stock_hug.open(this, event)" 

				stock_hug_id="0" class="btn btn-icon btn-outline-primary create_quick_stock_hug"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIcon('bx-plus');?>
</button>

			<?php } else { ?>

			<button data-toggle="ripple" type="button" title="Thêm nhanh" onClick="$Core.stock_hug.open(this, event)" 

				stock_hug_id="0" class="btn flex-fill btn-outline-primary create_quick_stock_hug"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIcon('bx-plus','Thêm mới');?>
</button>

			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkPermission('stock_hug_import')) {?>

			<button data-toggle="ripple" type="button" title="Thêm nhanh" onClick="$Core.stock_hug.open_import(this, event)" 

				stock_hug_id="0" class="btn btn-icon btn-outline-default"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIcon('bx-import');?>
</button>

			<?php }?>

			<div class="btn-group dropdown">

				<button id="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" type="button" class="btn btn-icon btn-outline-default hide-arrow dropdown-toggle" 

				data-bs-toggle="dropdown" data-toggle="ripple" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="true"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIcon('bx-search');?>
</button>

				<div class="dropdown-menu mega-dropdown-menu dropdown-stock-search dropdown-menu-end w-px-350" data-popper-placement="top-end">

					<div class="p-3"><?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('stock_hug_search',array('uid'=>$_smarty_tpl->tpl_vars['uid']->value));?>
</div>

				</div> 

			</div>

		</div>

	</div>

    <!-- Basic Bootstrap Table -->

    <div class="card no-shadow">

		<div class="card-body">

			

			<div class="d-flex briefStockHug flex-wrap gap-3 mb-2 align-items-center">

				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_briefs']->value, '_oItem');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oItem']->value) {
?>

				<div class="border flex-fill p-3 rounded-2">

					<div class="d-flex mb-2 align-items-center justify-content-between">

						<h5 class="mb-0"><?php echo $_smarty_tpl->tpl_vars['_oItem']->value['title'];?>
</h5>

						<a class="panel-help help_pop openHelp" title="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['subtitle'];?>
">

							<i class="fa fa-question-circle"></i>

						</a>

					</div>

					<ul class="list-unstyled mb-0">

						<li class="d-flex align-items-center justify-content-between">

							<span class="text-muted">Số lượng:</span>

							<strong class="fs-5 text-main">0.000</strong>

						</li>

						<li class="d-flex align-items-center justify-content-between">

							<span class="text-muted">Tổng tiền:</span>

							<strong class="fs-5 text-main">0.000</strong>

						</li>

					</ul>

				</div>

				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

			</div>

			<div class="alert mb-2 alert-warning text-center alert-dismissible">

				Click đúp chuột vào dòng để xem sửa nhanh thông tin đã nhập.

				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

			</div>

			<div id="tableStockHug" class="table-container no-shadow dragscroll ">

				<table cellpadding="0" cellspacing="0" class="table table-hug table-bordered">

					<thead><tr>

						<th width="3%" class="align-center h-px-40 bg-lighter">STT</th>

						<th class="align-center h-px-40 bg-lighter">Mã căn</th>

						<th class="align-center h-px-40 bg-lighter">Tên XNĐK</th>

						<th class="align-center h-px-40 bg-lighter text-center">Ngày ký<br />XNĐK</th>

						<th class="align-center h-px-40 bg-lighter text-left">Link ký XNĐK</th>

						<th class="align-center h-px-40 bg-lighter text-left">Tiền cọc<br /> vào CĐT</th>

						<th class="align-center h-px-40 bg-lighter">Tình trạng</th>

						<th class="align-center h-px-40 bg-lighter">Sales bán</th>

						<th class="align-center h-px-40 bg-lighter">Trạng thái</th>

						<th class="align-center h-px-40 bg-lighter text-right">Giá bán</th>

						<th class="align-center h-px-40 bg-lighter">Ngày cọc</th>

						<th class="align-center h-px-40 bg-lighter text-right">Tiền cọc</th>

						<th class="align-center h-px-40 bg-lighter">Quỹ</th>

						<th class="align-center h-px-40 bg-lighter">N.Căn</th>

						<th class="align-center h-px-40 w-px-150 bg-lighter text-center">Ngày<br />thu hồi</th>

						<th class="align-center h-px-40 w-px-150 bg-lighter text-center">Ngày ký<br />VBTT</th>

						<th class="align-center h-px-40 w-px-150 bg-lighter text-center">Ngày ký<br />HĐMB</th>

						<th class="align-center h-px-40 bg-lighter">%HH</th>

						<th class="align-center h-px-40 bg-lighter text-center">Thưởng<br />Sales</th>

						<th class="align-center h-px-40 bg-lighter">Notes</th>

						<th class="align-center h-px-40 bg-lighter text-center w-px-50"></th>

					</tr></thead>

					<tbody class="holderStockHug text-nowrap">

						<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['list_preloaders']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>

						<tr>

							<td><div class="animate-bg rounded-2 w-100 h-px-15"></div></id>

							<td><div class="animate-bg rounded-2 w-100 h-px-15"></div></id>

							<td><div class="animate-bg rounded-2 w-100 h-px-15"></div></id>

							<td><div class="animate-bg rounded-2 w-100 h-px-15"></div></id>

							<td><div class="animate-bg rounded-2 w-100 h-px-15"></div></id>

							<td><div class="animate-bg rounded-2 w-100 h-px-15"></div></id>

							<td><div class="animate-bg rounded-2 w-100 h-px-15"></div></id>

							<td><div class="animate-bg rounded-2 w-100 h-px-15"></div></id>

							<td><div class="animate-bg rounded-2 w-100 h-px-15"></div></id>

							<td><div class="animate-bg rounded-2 w-100 h-px-15"></div></id>

							<td><div class="animate-bg rounded-2 w-100 h-px-15"></div></id>

							<td><div class="animate-bg rounded-2 w-100 h-px-15"></div></id>

							<td><div class="animate-bg rounded-2 w-100 h-px-15"></div></id>

							<td><div class="animate-bg rounded-2 w-100 h-px-15"></div></id>

							<td><div class="animate-bg rounded-2 w-100 h-px-15"></div></id>

							<td><div class="animate-bg rounded-2 w-100 h-px-15"></div></id>

							<td><div class="animate-bg rounded-2 w-100 h-px-15"></div></id>

							<td><div class="animate-bg rounded-2 w-100 h-px-15"></div></id>

							<td><div class="animate-bg rounded-2 w-100 h-px-15"></div></id>

							<td><div class="animate-bg rounded-2 w-100 h-px-15"></div></id>

							<td><div class="animate-bg rounded-2 w-100 h-px-15"></div></id>

						</tr>

						<?php
}
}
?>

					</div>

				</table>

			</div>

			<input type="hidden" name="per_page" value="1" />

			<input type="hidden" name="current_page" value="1" />

			<div id="pager_stock_hug" class="easyui-pagination"></div>

		</div>

	</div>

</div>



<style type="text/css">

	.table-hug tr th:nth-child(2){

		position:sticky;

		left:47px; top:0;

	}

	.table-hug tr td:nth-child(2){

		position:sticky;

		left:47px; top:0;

		background:var(--bs-white);

	}

	.selectize-control.single .selectize-input>.item{

		white-space: nowrap;

	}

</style>

<?php }
}
