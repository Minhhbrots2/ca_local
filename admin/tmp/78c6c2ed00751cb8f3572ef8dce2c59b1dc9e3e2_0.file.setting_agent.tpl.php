<?php
/* Smarty version 3.1.33, created on 2026-07-10 13:36:37
  from '/www/wwwroot/skyrealty.c-a.vn/admin/application/views/stock/setting_agent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a5092f52c02d7_38708897',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78c6c2ed00751cb8f3572ef8dce2c59b1dc9e3e2' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/admin/application/views/stock/setting_agent.tpl',
      1 => 1783314598,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a5092f52c02d7_38708897 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="ui-title-bar-container ui-title-bar-container--full-width">

	<div class="ui-title-bar">

		<div class="ui-title-bar__main-group">

			<div class="ui-title-bar__heading-group">

				<h1 class="ui-title-bar__title w-100"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Quản lý Đại Lý');?>
</h1>

				<p class="type--subdued"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Quản lý toàn bộ danh sách đại lý có trong Hệ Thống');?>
</p>

			</div>

		</div>

		<div class="action-bar">

			<div class="ui-title-bar__mobile-primary-actions">

				<div class="ui-title-bar__actions">

					<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=project&act=edit&project_id=<?php echo $_smarty_tpl->tpl_vars['project_id']->value;?>
" class="ui-button ui-button--primary ui-title-bar__action" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Addnew');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('plus',$_smarty_tpl->tpl_vars['core']->value->get_Lang('Add'));?>
</a>

				</div>

			</div>

		</div>

	</div>

</div>

<div class="ui-layout ui-layout--full-width">

	<div class="ui-layout__sections"><div class="ui-layout__section">

		<div class="ui-layout__item"><div class="ui-card">

			<div class="next-tab__container">

				<ul class="next-tab__list filter-tab-list">

					<li class="filter-tab-item" data-tab-index="1">

						<a class="filter-tab filter-tab-active show-all-items next-tab next-tab--is-active">

							<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Danh sách đại lý');?>


						</a>

					</li>

				</ul>

			</div>

			<div class="ui-card__section has-bulk-actions pages">

				<div class="hastable">

					<table id="tableCall" cellspacing="0" class="table table-vertical table-striped" width="100%">

						<thead><tr>

							<th width="3%" class="text-center border-end">STT</th>

							<th width="10%" class="text-left">Đại lý</th>

							<th width="5%" class="text-center">Tổng (<?php echo $_smarty_tpl->tpl_vars['total_stocks']->value;?>
)</th>

							<th class="text-left">Link Google Sheet</th>

							<th width="80px" class="text-center">Tự động</th>

							<th width="150px" class="text-right">Thu thập L.Cuối</th>

							<th width="6%" class="text-center">Craw</th>

						</tr></thead>

						<?php if (!empty($_smarty_tpl->tpl_vars['list_agents']->value)) {?>

							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_agents']->value, '_oG', false, NULL, 'i', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oG']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']++;
?>

							<?php $_smarty_tpl->_assignInScope('more_information', $_smarty_tpl->tpl_vars['_oG']->value['more_information']);?>

							<?php if (!empty($_smarty_tpl->tpl_vars['more_information']->value['spreadsheetId'])) {?>

							<tr>

								<td class="text-center"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration'] : null);?>
</td>

								<td class="text-left bold border-end"><?php echo $_smarty_tpl->tpl_vars['_oG']->value['title'];?>
</td>

								<td class="text-center bold border-end"><?php echo $_smarty_tpl->tpl_vars['_oG']->value['total_stock_in'];?>
</td>

								<td class="text-left">

									<a href="https://docs.google.com/spreadsheets/d/<?php echo $_smarty_tpl->tpl_vars['more_information']->value['spreadsheetId'];?>
/edit#gid=0" target="_blank">https://docs.google.com/spreadsheets/d/<?php echo $_smarty_tpl->tpl_vars['more_information']->value['spreadsheetId'];?>
/edit#gid=0</a>

									<?php if (!empty($_smarty_tpl->tpl_vars['_oG']->value['intro'])) {?>

									<div class="alert alert-info m-0"><?php echo $_smarty_tpl->tpl_vars['_oG']->value['intro'];?>
</div>

									<?php }?>

								</td>

								<td class="text-right">

									<?php if (!empty($_smarty_tpl->tpl_vars['more_information']->value['spreadsheetId']) && !empty($_smarty_tpl->tpl_vars['more_information']->value['last_cronjob_time'])) {?>

										<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->convertTimeToText($_smarty_tpl->tpl_vars['more_information']->value['last_cronjob_time'],true);?>


									<?php } else { ?>

										---

									<?php }?>

								</td>

								<td class="text-center">

								

								</td>

								<td class="text-center">

									<button<?php if (empty($_smarty_tpl->tpl_vars['more_information']->value['spreadsheetId'])) {?> disabled<?php }?> onClick="$Core.stock.do_import_agent_advanced(this,event)" agency_id="<?php echo $_smarty_tpl->tpl_vars['_oG']->value['property_id'];?>
" class="btn btn-sm btn-danger mr-2"><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('play','Crawl');?>
</button>

								</td>

							</tr>

							<?php }?>

							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

						<?php }?>

					</table>

				</div>

			</div>

		</div></div>

	</div></div>

</div><?php }
}
