<?php
/* Smarty version 3.1.33, created on 2026-07-13 18:26:36
  from '/www/wwwroot/skyrealty.c-a.vn/application/views/kpi/_ajax.view_kpi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a54cb6c42d7d1_13649270',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31547fefefd76a9c65f726a1209f59f75696b502' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/views/kpi/_ajax.view_kpi.tpl',
      1 => 1783308747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a54cb6c42d7d1_13649270 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="rounded-3" style="overflow:auto;">

	<table class="table table-sort" width="100%">

		<thead><tr>

			<th colspan="7" class="align-center nosort ulpVdojZSe text-center bg-main fs-4">

				<div class="d-flex align-items-center justify-content-center gap-2">

					<img class="w-px-30" src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/logo-f.png" />

					<span class="text-white">Tổng hợp doanh số bán hàng <?php echo $_smarty_tpl->tpl_vars['m']->value;?>
</span>

				</div>

			</th>

		</tr>

		<tr>

			<th width="5%" rowspan="2" class="align-center nosort ulpVdojZSe text-center">No.</th>

			<th rowspan="2" class="align-center nosort ulpVdojZSe text-left">Mã nhóm.</th>

			<th rowspan="2" class="align-center nosort ulpVdojZSe text-left">Leaders.</th>

			<th class="align-center nosort text-center">Chỉ tiêu/<?php if ($_smarty_tpl->tpl_vars['_ss_view_kpi']->value == 'quarter') {?>Quý<?php } elseif ($_smarty_tpl->tpl_vars['_ss_view_kpi']->value == 'year') {?>Năm<?php } else { ?>Tháng<?php }?></th>

			<th width="" class="align-center nosort text-center" colspan="2">Tổng các dự án</th>

			<th width="120px" rowspan="2" class="nosort align-center ulpVdojZSe text-center">% Hoàn<br />Thành</th>

		</tr>

		<tr>

			<th class="align-center ulpVdojZSe text-center">Doanh số</th>

			<th class="align-center ulpVdojZSe text-center sortable">

				<?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?>Tổng GD<?php } else { ?>T. Giao Dịch<?php }?>

			</th>

			<th class="align-center ulpVdojZSe text-center sortable">Doanh số</th>

		</tr></thead>

		<tbody>

			<?php if (!empty($_smarty_tpl->tpl_vars['list_configs']->value)) {?>

				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_configs']->value, '_oconfig', false, NULL, 'i', array (
  'index' => true,
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oconfig']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['index']++;
?>

					<?php $_smarty_tpl->_assignInScope('department_id', $_smarty_tpl->tpl_vars['_oconfig']->value['department_id']);?>

					<?php $_smarty_tpl->_assignInScope('list_teams', $_smarty_tpl->tpl_vars['_oconfig']->value['list_teams']);?>

					<?php if (isset($_smarty_tpl->tpl_vars['_oconfig']->value['status']) && $_smarty_tpl->tpl_vars['_oconfig']->value['status'] == '1') {?>

					<tr class="<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['index'] : null) == '0' && $_smarty_tpl->tpl_vars['_oconfig']->value['total_depth_sales'] > '0') {?>top-1<?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['index'] : null) == '1' && $_smarty_tpl->tpl_vars['_oconfig']->value['total_depth_sales'] > '0') {?>top-2<?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['index'] : null) == '2' && $_smarty_tpl->tpl_vars['_oconfig']->value['total_depth_sales'] > '0') {?>top-3<?php }?>">

						<td class="text-center">

							<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['index'] : null) == '0' && $_smarty_tpl->tpl_vars['_oconfig']->value['total_depth_sales'] > '0') {?>

							<img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/top-1.png?v=<?php echo time();?>
" class="w-px-20" />

							<?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['index'] : null) == '1' && $_smarty_tpl->tpl_vars['_oconfig']->value['total_depth_sales'] > '0') {?>

							<img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/top-2.png?v=<?php echo time();?>
" class="w-px-20" />

							<?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['index'] : null) == '2' && $_smarty_tpl->tpl_vars['_oconfig']->value['total_depth_sales'] > '0') {?>

							<img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/top-3.png?v=<?php echo time();?>
" class="w-px-20" />

							<?php } else { ?> <?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration'] : null);?>
 <?php }?>

						</td>

						<?php if ($_smarty_tpl->tpl_vars['department_id']->value == 'PARTNER') {?>

						<td class="text-left">PARTNER</td>

						<td class="text-left font-bold fs-6">

							<div class="d-flex align-items-center">

								<?php echo $_smarty_tpl->tpl_vars['clsProfile']->value->getIndentityV3(@constant('_PROFILE_PARTNER_ID'),true);?>


							</div>

						</td>

						<?php } elseif ($_smarty_tpl->tpl_vars['department_id']->value == 'OTHER') {?>

						<td class="text-left">OTHER</td>

						<td class="text-left font-bold fs-6">

							<div class="d-flex align-items-center gap-1">

								<div class="avatar avatar-xxs" bis_skin_checked="1">

									<img class="avatar avatar-xs mr-2 rounded-pill" src="/files/thumb/60/60//images/avatar/2023-10-04-09-00-48-logo-h.png">

								</div>

								Nhóm tổng hợp

							</div>

						</td>

						<?php } else { ?>

						<td class="text-left"><?php echo $_smarty_tpl->tpl_vars['clsProperty']->value->getTitle($_smarty_tpl->tpl_vars['department_id']->value);?>
</td>

						<td class="text-left font-bold fs-6">

							<div class="d-flex align-items-center">

								<?php echo $_smarty_tpl->tpl_vars['clsProfile']->value->getQLeader($_smarty_tpl->tpl_vars['department_id']->value);?>


							</div>

						</td>

						<?php }?>

						<td class="text-center fw-bold"><?php echo $_smarty_tpl->tpl_vars['_oconfig']->value['total_sale'];?>
</td>

						<td class="text-center fw-bold"><?php echo $_smarty_tpl->tpl_vars['_oconfig']->value['total_billings'];?>
</td>

						<td class="text-center fw-bold"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->shortNumberV2($_smarty_tpl->tpl_vars['_oconfig']->value['total_sales'],2);?>
 </td>

						<td class="text-center"><?php echo $_smarty_tpl->tpl_vars['_oconfig']->value['kpi_percent'];?>
%</td>

					</tr>

					<?php if (!empty($_smarty_tpl->tpl_vars['list_teams']->value)) {?>

						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_teams']->value, '_oTeam');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oTeam']->value) {
?>

						<tr>

							<td class="text-center">↳</td>

							<td class="text-left"><?php echo $_smarty_tpl->tpl_vars['_oTeam']->value['team_name'];?>
</td>

							<td class="text-left font-bold fs-6"><?php echo $_smarty_tpl->tpl_vars['clsProfile']->value->getQLeader($_smarty_tpl->tpl_vars['_oTeam']->value['team_id']);?>
</td>

							<td class="text-center fw-bold"><?php echo $_smarty_tpl->tpl_vars['_oTeam']->value['total_sale'];?>
</td>

							<td class="text-center fw-bold"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatNumberToEasyRead($_smarty_tpl->tpl_vars['_oTeam']->value['total_billings']);?>
</td>

							<td class="text-center fw-bold"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->shortNumberV2($_smarty_tpl->tpl_vars['_oTeam']->value['total_sales'],2);?>
</td>

							<td class="text-center"><?php echo $_smarty_tpl->tpl_vars['_oTeam']->value['kpi_percent'];?>
%</td>

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

			<?php }?>

		</tbody>

		<tfoot><tr class="nohover">

			<td class="text-center font-bold" colspan="3">TỔNG CỘNG</td>

			<td class="text-center font-bold"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->shortNumberV2($_smarty_tpl->tpl_vars['total_goals']->value,0);?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRate();?>
</td>

			<td class="text-center font-bold"><?php echo $_smarty_tpl->tpl_vars['total_billings']->value;?>
 GD</td>

			<td class="text-center font-bold"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->shortNumberV2($_smarty_tpl->tpl_vars['total_sales']->value,2);?>
 <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRate();?>
</td>

			<td class="text-center font-bold"><?php echo $_smarty_tpl->tpl_vars['clsKPI']->value->getPercent($_smarty_tpl->tpl_vars['total_sales']->value,$_smarty_tpl->tpl_vars['total_goals']->value);?>
%</td>

		</tr></tfoot>

	</table>

</div>

<?php }
}
