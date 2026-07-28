<?php
/* Smarty version 3.1.33, created on 2026-07-16 13:50:45
  from '/www/wwwroot/skyrealty.c-a.vn/application/views/log/login_history.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a587f45962c01_77807239',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7bc48251f1c9a81c665d90c4895999e3c81e3fe8' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/views/log/login_history.tpl',
      1 => 1783308738,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a587f45962c01_77807239 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-xxl flex-grow-1 pt-2 container-p-y">

	<div class="d-flex flex-wrap justify-content-between align-items-center py-3">

		<h4 class="fw-bold mb-0">Lịch sử đăng nhập</span></h4>

	</div>

    <!-- Basic Bootstrap Table -->

    <div class="card">

        <div class="card-header d-flex flex-wrap justify-content-between align-items-center">

			<h5 class="mb-0">Có <strong class="total_record text-danger"><?php echo $_smarty_tpl->tpl_vars['total_record']->value;?>
</strong> lịch sử</h5>

			<form method="POST">

				<div class="search d-flex">

					<div class="input-group mr-1 input-group-merge">

						<span class="input-group-text"><i class="bx bx-search"></i></span>

						<input type="text" class="form-control search_field" data-field="keySearch" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Search');?>
" />

					</div>

					<?php if ($_smarty_tpl->tpl_vars['deviceType']->value != 'phone') {?>

					<div class="input-group input-date-picker mr-1 w-px-250">

						<i class="ico ico-calendar"></i>

						<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['start_date']->value;?>
" class="form-control from_date w-px-100 search_field" 

						placeholder="Từ ngày" data-field="start_date">

						<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['end_date']->value;?>
" class="form-control to_date w-px-100 search_field" 

						placeholder="Đến ngày" data-field="end_date">

					</div>

					<?php }?>

					<div class="btn-group mr-1">

						<button type="button" class="btn btn-default dropdown-toggle" 

						data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="true"></button>

						<div class="dropdown-menu dropdown-menu-end w-px-300" data-popper-placement="bottom-end">

							<div class="p-4">

								<?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?>

								<div class="input-group input-date-picker mb-2">

									<i class="ico ico-calendar"></i>

									<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['start_date']->value;?>
" class="form-control from_date search_field w-px-100" placeholder="Từ ngày" data-field="start_date">

									<input type="text" value="" class="form-control to_date search_field w-px-100" 

									placeholder="Đến ngày" data-field="end_date">

								</div>

								<?php }?>

							   <div class="form-group w-100 mb-2">

									<select onChange="select_profile_in_department(this, event)" toId="slb_Profile_Id" class="form-control w-100 form-select search_field" data-field="department_id"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getSelectByPropertyTypeTitle('_DEPARTMENT',$_smarty_tpl->tpl_vars['oneItem']->value['department_id'],'Phòng ban');?>


									</select>

								</div>

								<div class="form-group mb-2">

									<select id="slb_Profile_Id" class="iso-select2 search_field" data-field="user_id" data-width="100%" data-placeholder="Nhân viên" data-allow-clear="true">

										<option value="0">Nhân viên</option>

										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lstUser']->value, 'item', false, NULL, 'item', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>

										<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['profile_id'];?>
">

											<?php echo $_smarty_tpl->tpl_vars['clsProfile']->value->getFullName($_smarty_tpl->tpl_vars['item']->value['profile_id'],$_smarty_tpl->tpl_vars['item']->value);?>


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

					<button type="button" class="btn btn-success" onClick="$Core.log.do_login_search(this, event)">

						<i class="bx bx-search"></i>

					</button>

				</div>

			</form>

		</div>

		<div class="card-body">

			<div class="table-responsive freeze-table dragscroll text-nowrap">

				<table border="0" class="table table-striped mb-4" width="100%">

					<thead><tr>

						<th width="20%" class="align-center">Nhân viên</th>

						<th width="80px" class="align-center">H.Động</th>

						<th width="150px" class="align-center">Thời gian</th>

						<th width="120px" class="align-center">Địa chỉ IP</th>

						<th class="align-center">Trình duyệt</th>

					</tr> </thead>

					<tbody class="holder_logs">

						<tr>

							<td colspan="5">

								<div class="p-5 text-center">

									<img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/ripple-loading.svg" />

									<p class="text-center">Loading...</p>

								</div>

							</td>

						</tr>

					</tbody>

				</table>

			</div>

		</div>

    </div>

    <!--/ Basic Bootstrap Table -->

</div>



<?php echo '<script'; ?>
 type="text/javascript">

	$(function(){

		$Core.log.load_login_logs({});

	});

<?php echo '</script'; ?>
>

<?php }
}
