<?php
/* Smarty version 3.1.33, created on 2026-07-13 18:04:59
  from '/www/wwwroot/skyrealty.c-a.vn/application/views/kpi/_ajax.open_kpi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a54c65b6c5ce3_48080737',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ec0a1d77829d9bdd4ff2f8328889be0de509c4c' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/views/kpi/_ajax.open_kpi.tpl',
      1 => 1783308747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a54c65b6c5ce3_48080737 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/www/wwwroot/skyrealty.c-a.vn/core/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="modal-dialog modal-lg">
	<form class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['titlePage']->value;?>
<br />
				<span class="text-danger fs-12">
					<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIcon('bx-user-plus','Người tạo: ');?>

					<?php echo $_smarty_tpl->tpl_vars['clsProfile']->value->getFullName($_smarty_tpl->tpl_vars['profile_id']->value,$_smarty_tpl->tpl_vars['oneProfile']->value);?>

				</span>
			</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
			<div class="form-group mb-2">
				<label class="form-label mb-1">Tên chỉ tiêu</label>
				<input type="text" placeholder="Tên chỉ tiêu" name="title" class="form-control required" value="<?php echo $_smarty_tpl->tpl_vars['oneKPI']->value['title'];?>
">
			</div>
			<div class="form-group form-row mb-2">
				<div class="col-12 col-md-3">
					<label class="form-label mb-1">Chỉ tiêu lặp theo</label>
					<select name="period" onChange="$Core.kpi.set_loop(this, event)" class="form-control form-select">
						<option<?php if ($_smarty_tpl->tpl_vars['oneKPI']->value['period'] == 'ALLMONTH') {?> selected<?php }?> value="ALLMONTH">Lặp lại hàng tháng</option>
						<option<?php if ($_smarty_tpl->tpl_vars['oneKPI']->value['period'] == 'MONTH') {?> selected<?php }?> value="MONTH">Lặp lại theo tháng</option>
					</select>
				</div>
				<div class="col-12 col-md-2">
					<label class="form-label mb-1">Chọn năm</label>
					<input data-y="<?php echo smarty_modifier_date_format(time(),'%Y');?>
" data-m="<?php echo $_smarty_tpl->tpl_vars['current_month']->value;?>
" type="number" 
					name="year_period" onChange="$Core.kpi.set_year(this, event)" class="form-control required numberonly" value="<?php echo $_smarty_tpl->tpl_vars['oneKPI']->value['year_period'];?>
" />
				</div>
			</div>
			<div class="form-group cMXqMfvNJX<?php if ($_smarty_tpl->tpl_vars['oneKPI']->value['period'] == 'ALLMONTH') {?> d-none<?php }?> mb-2">
				<label class="form-label mb-1">Chọn tháng</label>
				<div class="d-flex align-items-center cMXaBZwAuJ">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_months']->value, '_month', false, NULL, 'i', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_month']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']++;
?>
					<label class="el-checkbox rbLnbPAdeY">
						<input<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkInArray($_smarty_tpl->tpl_vars['oneKPI']->value['month_period'],$_smarty_tpl->tpl_vars['_month']->value)) {?> checked<?php }?> class="eNXMGIDuZu" type="checkbox" name="month_period[]"<?php if ($_smarty_tpl->tpl_vars['current_month']->value > $_smarty_tpl->tpl_vars['_month']->value && $_smarty_tpl->tpl_vars['current_year']->value == $_smarty_tpl->tpl_vars['oneKPI']->value['year_period']) {?> disabled<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['_month']->value;?>
" />
						<span><?php echo $_smarty_tpl->tpl_vars['_month']->value;?>
</span>
					</label>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
			</div>
			<div class="form-group">
				<label for="deposit_date" class="form-label">Chỉ tiêu</label>
				<div class="table-wrapper" style="max-height:360px; overflow-y:auto;">
					<table class="table table-bordered" width="100%" style="table-layout:fixed">
						<thead><tr>
							<th class="align-center bg-lighter text-center" width="8%">No.</th>
							<th class="align-center bg-lighter text-left" width="25%">Tên phòng ban</th>
							<th class="align-center bg-lighter text-left" width="30%">Nhân viên</th>
							<th class="align-center bg-lighter text-left">Chỉ tiêu</th>
							<th class="align-center bg-lighter text-center" width="10%">Tình trạng</th>
						</tr></thead>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_departments']->value, '_oDep', false, NULL, 'i', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oDep']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']++;
?>
						<?php $_smarty_tpl->_assignInScope('department_id', $_smarty_tpl->tpl_vars['_oDep']->value['property_id']);?>
						<?php $_smarty_tpl->_assignInScope('list_teams', $_smarty_tpl->tpl_vars['_oDep']->value['teams']);?>
						<?php if ($_smarty_tpl->tpl_vars['department_id']->value != @constant('_DEPARTMENT_SALE_ID')) {?>
							<tr>
								<td class="align-center text-center"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration'] : null);?>
</td>
								<td class="align-center text-left"><strong><?php echo $_smarty_tpl->tpl_vars['_oDep']->value['title'];?>
</strong></td>
								<td class="align-center text-left"><?php echo $_smarty_tpl->tpl_vars['clsProfile']->value->getHTMLStaff($_smarty_tpl->tpl_vars['department_id']->value);?>
</td>
								<td class="align-center bZkTAmfvrm">
									<input type="text" name="configs[<?php echo $_smarty_tpl->tpl_vars['department_id']->value;?>
][total_sale]" onclick="this.select()" 
									class="form-control price-In required numberonly" value="<?php echo $_smarty_tpl->tpl_vars['configs_arrs']->value[$_smarty_tpl->tpl_vars['department_id']->value]['total_sale'];?>
" />
								</td>
								<td class="align-center text-center">
									<label class="switch">
										<input type="checkbox"<?php if ($_smarty_tpl->tpl_vars['configs_arrs']->value[$_smarty_tpl->tpl_vars['department_id']->value]['status'] == '1') {?> checked="checked"<?php }?> name="configs[<?php echo $_smarty_tpl->tpl_vars['department_id']->value;?>
][status]" value="1">
										<span class="slider round"></span>
									</label>
								</td>
							</tr>
							<?php if (!empty($_smarty_tpl->tpl_vars['list_teams']->value)) {?>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_teams']->value, '_oTeam', false, NULL, 'k', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oTeam']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_k']->value['iteration']++;
?>
								<?php $_smarty_tpl->_assignInScope('team_id', $_smarty_tpl->tpl_vars['_oTeam']->value['property_id']);?>
								<tr>
									<td class="align-center text-center"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration'] : null);?>
. <?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_k']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_k']->value['iteration'] : null);?>
</td>
									<td class="align-center text-left"><?php echo $_smarty_tpl->tpl_vars['_oTeam']->value['title'];?>
</td>
									<td class="align-center text-left"></td>
									<td class="align-center bZkTAmfvrm">
										<input type="text" name="configs[<?php echo $_smarty_tpl->tpl_vars['department_id']->value;?>
][teams][<?php echo $_smarty_tpl->tpl_vars['team_id']->value;?>
][total_sale]" onclick="this.select()" 
										class="form-control price-In required numberonly" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['department_id']->value;
$_prefixVariable1 = ob_get_clean();
echo $_smarty_tpl->tpl_vars['configs_arrs']->value[$_prefixVariable1]['teams'][$_smarty_tpl->tpl_vars['team_id']->value]['total_sale'];?>
" />
									</td>
									<td class="align-center text-center">
										<label class="switch">
											<input type="checkbox"<?php ob_start();
echo $_smarty_tpl->tpl_vars['department_id']->value;
$_prefixVariable2 = ob_get_clean();
if ($_smarty_tpl->tpl_vars['configs_arrs']->value[$_prefixVariable2]['teams'][$_smarty_tpl->tpl_vars['team_id']->value]['status'] == '1') {?> checked="checked"<?php }?> name="configs[<?php echo $_smarty_tpl->tpl_vars['department_id']->value;?>
][teams][<?php echo $_smarty_tpl->tpl_vars['team_id']->value;?>
][status]" value="1">
											<span class="slider round"></span>
										</label>
									</td>
								</tr>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							<?php }?>
						<?php }?>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</table>
				</div>
			</div>
		</div>
		<div class="modal-footer justify-content-between align-items-center">
			<div class="d-flex align-items-center gap-2">
				<label class="switch">
					<input type="checkbox"<?php if ($_smarty_tpl->tpl_vars['oneKPI']->value['is_team'] == '1') {?> checked="checked"<?php }?> name="is_team" value="1">
					<span class="slider round"></span>
				</label>
				<span>Hiển thị team</span>
			</div>
			<div class="buttons">
				<button type="button" class="btn btn-outline-secondary d-none d-lg-inline-block" data-bs-dismiss="modal">Đóng</button>
				<button type="button" kpi_id="<?php echo $_smarty_tpl->tpl_vars['kpi_id']->value;?>
" onClick="$Core.kpi.pop_save_kpi(this, event)" class="btn btn-primary">Lưu lại</button>
			</div>
		</div>
	</form>
</div><?php }
}
