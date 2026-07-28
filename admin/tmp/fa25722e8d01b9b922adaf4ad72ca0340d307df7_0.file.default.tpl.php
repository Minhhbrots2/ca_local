<?php
/* Smarty version 3.1.33, created on 2026-07-06 18:07:42
  from '/www/wwwroot/skyrealty.futureglobal.vn/admin/application/views/api_log/default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a4b8c7e47a675_38359099',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa25722e8d01b9b922adaf4ad72ca0340d307df7' => 
    array (
      0 => '/www/wwwroot/skyrealty.futureglobal.vn/admin/application/views/api_log/default.tpl',
      1 => 1783314566,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a4b8c7e47a675_38359099 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('toId', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>

<div class="row d-flex">

	<div class="col-12 col-md-10 col-lg-8 mx-auto">

		<div class="ui-title-bar-container ui-title-bar-container--full-width">

			<div class="ui-title-bar">

				<div class="ui-title-bar__main-group">

					<div class="ui-title-bar__heading-group">

						<?php if ($_smarty_tpl->tpl_vars['action']->value == "stock") {?>

						<h1 class="ui-title-bar__title w-100">Log đồng bộ api căn hộ sơ cấp HouseNow</h1>

						<?php } else { ?>

						<h1 class="ui-title-bar__title w-100">Log đồng bộ api chuyển nhượng HouseNow</h1>

						<?php }?>

						<p class="type--subdued"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Quản lý dữ liệu đồng bộ');?>
</p>

					</div>

				</div>

				<div class="action-bar">

					<div class="ui-title-bar__mobile-primary-actions">

						<div class="ui-title-bar__actions">

							<?php if ($_smarty_tpl->tpl_vars['action']->value == "stock") {?>

							<a href="javascript:void(0);" onClick="$Core.api_log.sync_data_stock(this,event)" title="Đồng bộ" 

							   class="ui-button ui-button--transparent js_create_add ui-title-bar__action mr-2">Đồng bộ</a>

							<?php } else { ?>

							<a href="javascript:void(0);" onClick="$Core.api_log.sync_data_sop(this,event)" title="Đồng bộ" 

								class="ui-button ui-button--transparent js_create_add ui-title-bar__action mr-2">Đồng bộ</a>

							<?php }?>

						</div>

					</div>

				</div>

			</div>

		</div>

		<form class="d-none" method="post" enctype="multipart/form-data">

			<input type="file" class="select_file select_file_<?php echo $_smarty_tpl->tpl_vars['toId']->value;?>
" name="import_file" />

		</form>

		<div class="ui-layout ui-layout--full-width">

			<div class="ui-layout__sections"><div class="ui-layout__section">

				<div class="ui-layout__item"><div class="ui-card">

					<div class="next-tab__container">

						<ul class="next-tab__list filter-tab-list">

							<li class="filter-tab-item" data-tab-index="1">

								<a class="filter-tab filter-tab-active show-all-items next-tab next-tab--is-active">Danh sách đồng bộ</a>

							</li>

						</ul>

					</div>

					<div class="ui-card__section has-bulk-actions pages">

						<table class="table" width="100%" cellpadding="0" cellspacing="0">

							<thead><tr>

								<th class="text-left" width="70%">Tài khoản log</th>								

								<th width="120px">Thời gian</th>	

							</tr></thead>

							<tbody class="holder_logs">

								<tr>

									<td class="text-center" colspan="10">

										Loading...

									</td>

								</tr>

							</tbody>

						</table>

					</div>

				</div></div>

			</div></div>

		</div>

	</div>

</div>

<?php echo '<script'; ?>
 type="text/javascript">

	var action = `<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
`;

<?php echo '</script'; ?>
><?php }
}
