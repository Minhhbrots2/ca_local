<?php
/* Smarty version 3.1.33, created on 2026-07-13 17:27:36
  from '/www/wwwroot/skyrealty.c-a.vn/application/views/campaign/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a54bd98783417_10168924',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c559c2731eb94e5de6fbdb2e92380283aae777e' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/views/campaign/view.tpl',
      1 => 1783308676,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a54bd98783417_10168924 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-xxl flex-grow-1 pt-2 container-p-y">

    <div class="col-12 col-md-8 offset-lg-2">

		<div class="alert alert-warning text-center mb-2">

			<a href="javascript:;" class="text-main d-flex font-bold text-upper align-items-center justify-content-center fs-20" campaign_id="<?php echo $_smarty_tpl->tpl_vars['oneCampaign']->value['campaign_id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/gift-icon-hot.gif" class="w-px-30" /> <?php echo $_smarty_tpl->tpl_vars['oneCampaign']->value['title'];?>
</a>

			<ul class="countdown mb-0" data-end="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->convertTimeToTextFormat($_smarty_tpl->tpl_vars['oneCampaign']->value['end_date']);?>
 23:59:59">

				<li><span class="days">00</span>

					<p class="mb-0 days_text">ngày</p>

				</li>

				<li class="seperator">:</li>

				<li><span class="hours">00</span>

					<p class="mb-0 hours_text">giờ</p>

				</li>

				<li class="seperator">:</li>

				<li><span class="minutes">00</span>

					<p class="mb-0 minutes_text">phút</p>

				</li>

				<li class="seperator">:</li>

				<li><span class="seconds">00</span>

					<p class="mb-0 seconds_text">giây</p>

				</li>

			</ul>

		</div>

		<div class="iKuJnjIFyr <?php echo $_smarty_tpl->tpl_vars['oneCampaign']->value['template'];?>
">

			<div class="hJsiGEcCOJ <?php echo $_smarty_tpl->tpl_vars['oneCampaign']->value['template'];?>
">

				<table width="100%" class="table table-campaign <?php echo $_smarty_tpl->tpl_vars['oneCampaign']->value['template'];?>
">

					<thead><tr class="nohover">

						<th class="p_header text-center text-upper" colspan="10">

							<?php if ($_smarty_tpl->tpl_vars['oneCampaign']->value['template'] != 'template_1') {?>

							<div class="mb-2">

								<img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/logo-f.png" style="max-width: 72px" />

							</div>

							<?php }?>

							<strong>Bảng xếp hạng <?php echo $_smarty_tpl->tpl_vars['oneCampaign']->value['title'];?>
</strong><br />

							(<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->convertTimeToText($_smarty_tpl->tpl_vars['oneCampaign']->value['start_date']);?>
-

							<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->convertTimeToText($_smarty_tpl->tpl_vars['oneCampaign']->value['end_date']);?>
)

						</th>

					</tr>

					<?php if ($_smarty_tpl->tpl_vars['oneCampaign']->value['selector'] == 'staff') {?>

						<tr>

							<th class="p_head text-center">STT</th>

							<th class="p_head text-left">Họ và tên</th>

							<th class="p_head text-center">Tổng điểm</th>

							<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkPermissionGroup('DIRECTOR') == '1') {?>

							<th class="p_head text-center">Tổng tiền</th>

							<?php }?>

						</tr></thead>

						<?php if (!empty($_smarty_tpl->tpl_vars['list_staffs']->value)) {?>

							<?php $_smarty_tpl->_assignInScope('total_score', $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('total_score'));?>

							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_staffs']->value, '_oStaff', false, NULL, 'i', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oStaff']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']++;
?>

							<tr class="p_row text-white">

								<td class="p_cell text-center font-bold"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration'] : null);?>
</td>

								<td class="p_cell font-bold"><?php echo $_smarty_tpl->tpl_vars['_oStaff']->value['full_name'];?>
</td>

								<td class="p_cell text-center font-bold"><?php echo $_smarty_tpl->tpl_vars['_oStaff']->value['total_scores'];?>


									<!-- <span class="text-orange">/<?php echo $_smarty_tpl->tpl_vars['total_score']->value;?>
</span> -->

								</td>

								<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkPermissionGroup('DIRECTOR') == '1') {?>

								<td class="p_cell text-center font-bold">

									<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['_oStaff']->value['total_expenses']);?>
 

									<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRate();?>


								</td>

								<?php }?>

							</tr>

							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkPermissionGroup('DIRECTOR') == '1') {?>

						<tr class="p_row text-white">

							<td colspan="3" class="p_cell"></td>

							<td class="p_cell font-bold text-center">

								<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['total_all_expenses']->value);?>


								<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getRate();?>


							</td>

						</tr>

						<?php }?>

					<?php } else { ?>

						<?php if ($_smarty_tpl->tpl_vars['oneCampaign']->value['template'] == 'template_1') {?>

						<thead><tr>

							<th width="40px" class="p_head text-center">STT</th>

							<th width="15%" class="p_head text-center">Team</th>

							<th class="p_head text-center">Họ & tên đội</th>

							<th width="15%" class="p_head text-center"><?php if ($_smarty_tpl->tpl_vars['oneCampaign']->value['is_term'] == '1') {?>Tổng điểm<?php } else { ?>Giao dịch<?php }?></th>

							<?php if (isset($_smarty_tpl->tpl_vars['campaign_config']->value['is_complete']) && $_smarty_tpl->tpl_vars['campaign_config']->value['is_complete'] == '1') {?>

							<th width="15%" class="p_head text-center">%Hoàn thành</th>

							<?php }?>

						</tr></thead>

						<?php } else { ?>

						<thead><tr>

							<th width="40px" class="p_head text-center">STT</th>

							<th class="p_head text-left">Team</th>

							<th width="10%" class="p_head text-center">Tháng <?php echo $_smarty_tpl->tpl_vars['prev_month']->value;?>
</th>

							<th width="10%" class="p_head text-center">Tháng <?php echo $_smarty_tpl->tpl_vars['current_month']->value;?>
</th>

							<th width="10%" class="p_head text-center">Tổng giao dịch</th>

							<?php if (isset($_smarty_tpl->tpl_vars['campaign_config']->value['is_complete']) && $_smarty_tpl->tpl_vars['campaign_config']->value['is_complete'] == '1') {?>

							<th width="10%" class="p_head text-center">%Hoàn thành</th>

							<?php }?>

						</tr></thead>

						<?php }?>

						<?php if (!empty($_smarty_tpl->tpl_vars['list_groups']->value)) {?>

							<?php if ($_smarty_tpl->tpl_vars['oneCampaign']->value['template'] == 'template_1') {?>

								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_groups']->value, '_oGroup', false, NULL, 'i', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oGroup']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']++;
?>

								<tr class="p_row <?php if (!empty($_smarty_tpl->tpl_vars['_oGroup']->value['total_scores'])) {?>lighter<?php }?>">

									<td class="p_cell text-center font-bold"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration'] : null);?>
</td>

									<td class="p_cell font-bold"><?php echo $_smarty_tpl->tpl_vars['_oGroup']->value['name'];?>
</td>

									<td class="p_cell text-main">

										<?php if (!empty($_smarty_tpl->tpl_vars['_oGroup']->value['total_scores'])) {?>

											<strong><?php echo $_smarty_tpl->tpl_vars['_oGroup']->value['group_members'];?>
</strong>

										<?php } else { ?>

											<?php echo $_smarty_tpl->tpl_vars['_oGroup']->value['group_members'];?>


										<?php }?>

									</td>

									<td class="p_cell text-main">

										<?php if (!empty($_smarty_tpl->tpl_vars['_oGroup']->value['total_scores'])) {?>

											<strong><?php echo $_smarty_tpl->tpl_vars['_oGroup']->value['group_members'];?>
</strong>

										<?php } else { ?>

											<?php echo $_smarty_tpl->tpl_vars['_oGroup']->value['group_members'];?>


										<?php }?>

									</td>

									<td class="p_cell text-center font-bold">

										<?php echo $_smarty_tpl->tpl_vars['_oGroup']->value['total_scores'];?>


										<?php if (isset($_smarty_tpl->tpl_vars['campaign_config']->value['is_target']) && $_smarty_tpl->tpl_vars['campaign_config']->value['is_target'] == '1') {?>

											<span class="text-orange">/<?php echo $_smarty_tpl->tpl_vars['_oGroup']->value['group_target'];?>
</span>

										<?php }?>

									</td>

								</tr>

								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

							<?php } elseif ($_smarty_tpl->tpl_vars['oneCampaign']->value['template'] == 'template_3') {?>

								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_groups']->value, '_oGroup', false, NULL, 'i', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oGroup']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']++;
?>

								<?php $_smarty_tpl->_assignInScope('list_members', $_smarty_tpl->tpl_vars['_oGroup']->value['list_members']);?>

								<tr class="p_row selected_tr <?php if (!empty($_smarty_tpl->tpl_vars['_oGroup']->value['total_scores'])) {?>lighter<?php }?>">

									<td class="p_cell text-center font-bold"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration'] : null);?>
</td>

									<td class="p_cell font-bold"><?php echo $_smarty_tpl->tpl_vars['_oGroup']->value['name'];?>
</td>

									<td class="p_cell text-center font-bold">

										<?php echo $_smarty_tpl->tpl_vars['_oGroup']->value['total_prev_group_trans'];?>


										<?php if (isset($_smarty_tpl->tpl_vars['campaign_config']->value['is_target']) && $_smarty_tpl->tpl_vars['campaign_config']->value['is_target'] == '1') {?>

											<span class="text-orange">/<?php echo $_smarty_tpl->tpl_vars['_oGroup']->value['num_group_trans_before_month'];?>
</span>

										<?php }?>

									</td>

									<td class="p_cell text-center font-bold">

										<?php echo $_smarty_tpl->tpl_vars['_oGroup']->value['total_group_trans'];?>


										<?php if (isset($_smarty_tpl->tpl_vars['campaign_config']->value['is_target']) && $_smarty_tpl->tpl_vars['campaign_config']->value['is_target'] == '1') {?>

											<span class="text-orange">/<?php echo $_smarty_tpl->tpl_vars['_oGroup']->value['num_group_trans_curr_month'];?>
</span>

										<?php }?>

									</td>

									<td class="p_cell text-center font-bold">

										<?php echo $_smarty_tpl->tpl_vars['_oGroup']->value['total_scores'];?>


										<?php if (isset($_smarty_tpl->tpl_vars['campaign_config']->value['is_target']) && $_smarty_tpl->tpl_vars['campaign_config']->value['is_target'] == '1') {?>

											<span class="text-orange">/<?php echo $_smarty_tpl->tpl_vars['_oGroup']->value['group_target'];?>
</span>

										<?php }?>

									</td>

									<?php if (isset($_smarty_tpl->tpl_vars['campaign_config']->value['is_complete']) && $_smarty_tpl->tpl_vars['campaign_config']->value['is_complete'] == '1') {?>

									<td class="p_cell text-center">

										<?php echo $_smarty_tpl->tpl_vars['_oGroup']->value['percent_complete'];?>
%

									</td>

									<?php }?>

								</tr>

									<?php if (!empty($_smarty_tpl->tpl_vars['list_members']->value)) {?>

										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_members']->value, '_oMember', false, NULL, 'k', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oMember']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_k']->value['iteration']++;
?>

										<tr>

											<td class="p_cell text-center"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration'] : null);?>
.<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_k']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_k']->value['iteration'] : null);?>
</td>

											<td class="p_cell text-left"><?php echo $_smarty_tpl->tpl_vars['clsProfile']->value->getIndentityV2($_smarty_tpl->tpl_vars['_oMember']->value['profile_id'],$_smarty_tpl->tpl_vars['_oMember']->value,false);?>
</td>

											<td class="p_cell text-center">

												<?php echo $_smarty_tpl->tpl_vars['_oMember']->value['num_prev_trans'];?>


												<?php if (isset($_smarty_tpl->tpl_vars['campaign_config']->value['is_target']) && $_smarty_tpl->tpl_vars['campaign_config']->value['is_target'] == '1') {?>

													<span class="text-orange">/<?php echo $_smarty_tpl->tpl_vars['_oMember']->value['num_trans_before_month'];?>
</span>

												<?php }?>

											</td>

											<td class="p_cell text-center">

												<?php echo $_smarty_tpl->tpl_vars['_oMember']->value['num_trans'];?>


												<?php if (isset($_smarty_tpl->tpl_vars['campaign_config']->value['is_target']) && $_smarty_tpl->tpl_vars['campaign_config']->value['is_target'] == '1') {?>

													<span class="text-orange">/<?php echo $_smarty_tpl->tpl_vars['_oMember']->value['num_trans_curr_month'];?>
</span>

												<?php }?>

											</td>

											<td class="p_cell text-center">

												<?php echo $_smarty_tpl->tpl_vars['_oMember']->value['total_scores'];?>


												<?php if (isset($_smarty_tpl->tpl_vars['campaign_config']->value['is_target']) && $_smarty_tpl->tpl_vars['campaign_config']->value['is_target'] == '1') {?>

													<span class="text-orange">/<?php echo $_smarty_tpl->tpl_vars['_oMember']->value['num_target'];?>
</span>

												<?php }?>

											</td>

											<td class="p_cell fs-12 text-center"><?php echo $_smarty_tpl->tpl_vars['_oMember']->value['usr_percent_complete'];?>
%</td>

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

							<?php }?>

						<?php }?>

					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['oneCampaign']->value['is_terms'] == '1' && !empty($_smarty_tpl->tpl_vars['campaign_terms']->value) && $_smarty_tpl->tpl_vars['oneCampaign']->value['template'] != 'template_2') {?>

					<tfoot>

						<tr class="nohover">

							<td class="p_cell bg-yellow text-center" colspan="5">

								<div class="w-px-250 mx-auto">

									<table class="w-100 text-main">

										<thead><tr class="nohover">

											<td style="background:#ffff0e" class="border-0 text-pink text-left" colspan="2">

												<strong>Cách tính điểm thi đua như sau:</strong>

											</td>

										</tr></thead>

										<tbody>

											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['campaign_terms']->value, 'score', false, 'prop_id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['prop_id']->value => $_smarty_tpl->tpl_vars['score']->value) {
?>

												<?php if (!empty($_smarty_tpl->tpl_vars['score']->value)) {?>

												<tr class="nohover">

													<td class="text-left text-pink border-0"><?php echo $_smarty_tpl->tpl_vars['clsProperty']->value->getTitle($_smarty_tpl->tpl_vars['prop_id']->value);?>
</td>

													<td class="text-left text-pink border-0">

														<strong><?php echo $_smarty_tpl->tpl_vars['score']->value;?>
</strong>

													</td>

												</tr>

												<?php }?>

											<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

										</tbody>

									</table>

								</div>

							</td>

						</tr>

					</tfoot>

					<?php }?>

				</table>

			</div>

		</div>

    </div>

</div><?php }
}
