<?php
/* Smarty version 3.1.33, created on 2026-07-10 11:47:21
  from '/www/wwwroot/skyrealty.c-a.vn/admin/application/views/page/loan_interest.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a507959608669_77811569',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9fac1aa8a618796d00d3b7b9df25d453b0f03143' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/admin/application/views/page/loan_interest.tpl',
      1 => 1783314585,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a507959608669_77811569 (Smarty_Internal_Template $_smarty_tpl) {
?><header class="ui-title-bar-container ">

	<div class="ui-title-bar ui-title-bar--separator">

		<div class="ui-title-bar__main-group">

			<div class="ui-title-bar__heading-group">

				<h1 class="ui-title-bar__title">Quản lý lãi suất ngân hàng</h1>

			</div>

		</div> 

		<div class="action-bar" style="margin-top: -5px">

			<div class="ui-title-bar__mobile-primary-actions">

				<div class="ui-title-bar__actions">

					<a href="javascript:void(0);" onClick="$Core.loan_interest.add_item_loan_interest(this,event)" class="ui-button ui-button--primary ui-title-bar__action"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Addnew');?>
</a>

				</div>

			</div>

		</div>

	</div>

</header>

<div class="clearfix"></div>

<form action="" method="post" enctype="multipart/form-data">

	<div class="ui-layout">

		<div class="ui-layout__sections">

			<div class="ui-layout__section">

				<section class="ui-annotated-section-container">

					<div class="ui-annotated-section form-row" id="list_loan_interest">

						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lst_loan_interest']->value, '_oItem', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['_oItem']->value) {
?>

							<div class="item_bank col-md-6 mb-3">  

								<div class="p-3 next-card">  

									<div class="item_top d-flex justify-content-between align-items-start mb-2">

										<h2 class="title_item m-0 flex-fill" style="font-size:18px"><?php echo $_smarty_tpl->tpl_vars['_oItem']->value['bank_name'];?>
</h2>

										<button class="btn ml-2" type="button" type="button" data-toggle="collapse" data-target="#<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" aria-expanded="false" aria-controls="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><i class="fa fa-chevron-down" aria-hidden="true"></i></button>

									</div>

									<div class="item_body collapse in"  id="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">

										<div class="form-row form-group">

											<div class="col-md-12">

												<label class="col-form-label">Tên ngân hàng <span class="text-red">*</span></label>

												<input type="text" class="form-control require" required="true" placeholder="Tên ngân hàng" onKeyUp="$Core.loan_interest.setTitleItem(this,event)" name="data[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
][bank_name]" value="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['bank_name'];?>
">

											</div>

										</div>

										<div class="form-row form-group">

											<div class="col-md-6">

												<label class="col-form-label">Lãi suất ưu đãi <span class="text-red">*</span></label>

												<div class="input-group input-group-merge d-flex align-items-center">

													<input type="number" class="form-control mr-2" value="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['introRate'];?>
" placeholder="Lãi suất ưu đãi (%)" id="introRate" name="data[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
][introRate]" min="0" step="0.1">

													<span class="input-group-text cursor-pointer">%</span>

												</div>

											</div>

											<div class="col-md-6">

												<label class="col-form-label">Thời gian ưu đãi <span class="text-red">*</span></label>										

												<div class="input-group d-flex">

													<input type="number" class="form-control calc_field" value="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['introMonths'];?>
" placeholder="Nhập thời gian" id="introMonths" name="data[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
][introMonths]" min="0">

													<select class="form-control form-select" name="data[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
][introMonthsUnit]">

														<option value="_MONTH" <?php if ($_smarty_tpl->tpl_vars['_oItem']->value['introMonthsUnit'] == '_MONTH') {?>selected<?php }?>>Tháng</option>

														<option value="_YEAR" <?php if ($_smarty_tpl->tpl_vars['_oItem']->value['introMonthsUnit'] == '_YEAR') {?>selected<?php }?>>Năm</option>

													</select>

												</div>

											</div>

										</div>

										<div class="form-row form-group">

											<div class="col-md-12">

												<label class="col-form-label">Lãi suất sau ưu đãi <span class="text-red">*</span></label>

												<div class="input-group input-group-merge d-flex align-items-center">

													<input type="number" class="form-control mr-2" value="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['rate'];?>
" placeholder="Lãi suất sau ưu đãi (%)" id="rate" name="data[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
][rate]" min="0" step="0.1">

													<span class="input-group-text cursor-pointer">%</span>

												</div>

											</div>

										</div>

										<div class="d-flex justify-content-end">

											<button class="btn btn-danger ml-2" title="Xoá" type="button" onclick="$Core.loan_interest.delete_item_bank(this,event)">Xoá</button>

										</div>

									</div>

								</div>

							</div>

						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

					</div>

				</section>

			</div>

		</div>

	</div>

	<div class="clearfix"></div>

	<div class="ui-page-actions ui-page-actions--has-secondary">

		<div class="ui-page-actions__container">

			<div class="ui-page-actions__actions ui-page-actions__actions--secondary"></div>

			<div class="ui-page-actions__actions ui-page-actions__actions--primary">

				<input value="Update" name="submit" type="hidden">

				<div class="ui-page-actions__button-group"><?php echo $_smarty_tpl->tpl_vars['saveBtn']->value;?>
</div>

			</div>

		</div>

	</div>

</form><?php }
}
