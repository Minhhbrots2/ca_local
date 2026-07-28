<?php
/* Smarty version 3.1.33, created on 2026-07-10 11:47:03
  from '/www/wwwroot/skyrealty.c-a.vn/admin/application/views/page/performance.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a50794779d8b9_02780110',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8926ec211c8e91dee67b8f45fb317371da17cf69' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/admin/application/views/page/performance.tpl',
      1 => 1783314585,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a50794779d8b9_02780110 (Smarty_Internal_Template $_smarty_tpl) {
?><header class="ui-title-bar-container ">

	<div class="ui-title-bar ui-title-bar--separator">

		<div class="ui-title-bar__main-group">

			<div class="ui-title-bar__heading-group">

				<h1 class="ui-title-bar__title">Hiệu suất đầu tư</h1>

			</div>

		</div> 

	</div>

</header>

<div class="clearfix"></div>

<form action="" method="post" enctype="multipart/form-data">

	<div class="ui-layout">

		<div class="ui-layout__sections">

			<div class="ui-layout__section">

				<section class="ui-annotated-section-container pb-3">

					<div class="ui-annotated-section" id="list_performance">

						<div class="group-parent group_item">

							<div class="d-flex justify-content-between align-items-center">

								<h2 class="ui-title-bar__title mb-0">Nguồn thu dự kiến</h2>

								<a href="javascript:void(0);" onClick="$Core.performance.add_item_performance(this,event)" data-type="child-1" data-property="revenue" class="btn btn-success">+</a>

							</div>

							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lst_investment_performance_revenue']->value, 'lst_child_1', false, 'k_child_1');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k_child_1']->value => $_smarty_tpl->tpl_vars['lst_child_1']->value) {
?>

								<div class="group-child-1 group_item pl-8">

									<div class="form-row form-group align-items-end">

										<div class="col-md-1 text-right">

											<a href="javascript:void(0);" onClick="$Core.performance.add_item_performance(this,event)" data-type="child-2" data-property="revenue" data-uid1="<?php echo $_smarty_tpl->tpl_vars['k_child_1']->value;?>
" class="btn btn-success">+</a>

											<a href="javascript:void(0);" onClick="$Core.performance.delete_item_performance(this,event)" data-type="group-child-1" class="btn btn-danger me-1">-</a>

										</div>

										<div class="col-md-11">

											<label class="col-form-label">Tên thuộc tính 1</label>									

											<input type="text" class="form-control require ml-2" required="true" placeholder="Tên thuộc tính" name="revenue[<?php echo $_smarty_tpl->tpl_vars['k_child_1']->value;?>
][title]" value="<?php echo $_smarty_tpl->tpl_vars['lst_child_1']->value['title'];?>
">

										</div>

									</div>

									<?php $_smarty_tpl->_assignInScope('lst_child_2', $_smarty_tpl->tpl_vars['lst_child_1']->value['lstChild']);?>

									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lst_child_2']->value, 'child_2', false, 'k_child_2');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k_child_2']->value => $_smarty_tpl->tpl_vars['child_2']->value) {
?>

										<div class="group-child-2 pl-8">

											<div class="form-row form-group align-items-end">

												<div class="col-md-1 text-right">

													<a href="javascript:void(0);" onClick="$Core.performance.delete_item_performance(this,event)" data-type="group-child-2" class="btn btn-danger me-1">-</a>

												</div>

												<div class="col-md-11">

													<div class="form-row">											

														<div class="col-md-6">

															<label class="col-form-label">Tên thuộc tính 2</label>									

															<input type="text" class="form-control require ml-2" required="true" placeholder="Tên thuộc tính" name="revenue[<?php echo $_smarty_tpl->tpl_vars['k_child_1']->value;?>
][lstChild][<?php echo $_smarty_tpl->tpl_vars['k_child_2']->value;?>
][title]" value="<?php echo $_smarty_tpl->tpl_vars['child_2']->value['title'];?>
">

														</div>

														<div class="col-md-3">

															<label class="col-form-label">Giá trị</label>										

															<div class="input-group d-flex">

																<input type="number" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['child_2']->value['value'];?>
" placeholder="Giá trị" id="introRate" name="revenue[<?php echo $_smarty_tpl->tpl_vars['k_child_1']->value;?>
][lstChild][<?php echo $_smarty_tpl->tpl_vars['k_child_2']->value;?>
][value]" min="0" step="0.1">

																<select class="form-control form-select" name="revenue[<?php echo $_smarty_tpl->tpl_vars['k_child_1']->value;?>
][lstChild][<?php echo $_smarty_tpl->tpl_vars['k_child_2']->value;?>
][unit_type]">

																	<option value="_PERCENT" <?php if ($_smarty_tpl->tpl_vars['child_2']->value['unit_type'] == "_PERCENT") {?>selected<?php }?>>%</option>

																	<option value="_MONEY" <?php if ($_smarty_tpl->tpl_vars['child_2']->value['unit_type'] == "_MONEY") {?>selected<?php }?>>VNĐ</option>

																</select>

															</div>

														</div>

														<div class="col-md-3">

															<label class="col-form-label">Thời gian</label>										

															<div class="input-group d-flex align-items-center">

																<input type="number" class="form-control calc_field mr-2" value="<?php echo $_smarty_tpl->tpl_vars['child_2']->value['time'];?>
" placeholder="Thời gian" id="introMonths" name="revenue[<?php echo $_smarty_tpl->tpl_vars['k_child_1']->value;?>
][lstChild][<?php echo $_smarty_tpl->tpl_vars['k_child_2']->value;?>
][time]" min="0">

																<span class="input-group-text cursor-pointer">tháng</span>

															</div>

														</div>

													</div>

												</div>

											</div>

										</div>

									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

								</div>	

							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

						</div>

					</div>

				</section>

				<section class="ui-annotated-section-container">

					<div class="ui-annotated-section" id="list_performance">

						<div class="group-parent group_item">

							<div class="d-flex justify-content-between align-items-center">

								<h2 class="ui-title-bar__title mb-0">Chi phí bỏ ra</h2>

								<a href="javascript:void(0);" onClick="$Core.performance.add_item_performance(this,event)" data-type="child-1" data-property="expense" class="btn btn-success">+</a>

							</div>

							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lst_investment_performance_expense']->value, 'lst_child_1', false, 'k_child_1');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k_child_1']->value => $_smarty_tpl->tpl_vars['lst_child_1']->value) {
?>

								<div class="group-child-1 group_item pl-8">

									<div class="form-row form-group align-items-end">

										<div class="col-md-1 text-right">

											<a href="javascript:void(0);" onClick="$Core.performance.add_item_performance(this,event)" data-type="child-2" data-property="expense" data-uid1="<?php echo $_smarty_tpl->tpl_vars['k_child_1']->value;?>
" class="btn btn-success">+</a>

											<a href="javascript:void(0);" onClick="$Core.performance.delete_item_performance(this,event)" data-type="group-child-1" class="btn btn-danger me-1">-</a>

										</div>

										<div class="col-md-11">

											<label class="col-form-label">Tên thuộc tính 1</label>									

											<input type="text" class="form-control require ml-2" required="true" placeholder="Tên thuộc tính" name="expense[<?php echo $_smarty_tpl->tpl_vars['k_child_1']->value;?>
][title]" value="<?php echo $_smarty_tpl->tpl_vars['lst_child_1']->value['title'];?>
">

										</div>

									</div>

									<?php $_smarty_tpl->_assignInScope('lst_child_2', $_smarty_tpl->tpl_vars['lst_child_1']->value['lstChild']);?>

									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lst_child_2']->value, 'child_2', false, 'k_child_2');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k_child_2']->value => $_smarty_tpl->tpl_vars['child_2']->value) {
?>

										<div class="group-child-2 pl-8">

											<div class="form-row form-group align-items-end">

												<div class="col-md-1 text-right">

													<a href="javascript:void(0);" onClick="$Core.performance.delete_item_performance(this,event)" data-type="group-child-2" class="btn btn-danger me-1">-</a>

												</div>

												<div class="col-md-11">

													<div class="form-row">											

														<div class="col-md-6">

															<label class="col-form-label">Tên thuộc tính 2</label>									

															<input type="text" class="form-control require ml-2" required="true" placeholder="Tên thuộc tính" name="expense[<?php echo $_smarty_tpl->tpl_vars['k_child_1']->value;?>
][lstChild][<?php echo $_smarty_tpl->tpl_vars['k_child_2']->value;?>
][title]" value="<?php echo $_smarty_tpl->tpl_vars['child_2']->value['title'];?>
">

														</div>

														<div class="col-md-3">

															<label class="col-form-label">Giá trị</label>										

															<div class="input-group d-flex">

																<input type="number" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['child_2']->value['value'];?>
" placeholder="Giá trị" id="introRate" name="expense[<?php echo $_smarty_tpl->tpl_vars['k_child_1']->value;?>
][lstChild][<?php echo $_smarty_tpl->tpl_vars['k_child_2']->value;?>
][value]" min="0" step="0.1">

																<select class="form-control form-select" name="expense[<?php echo $_smarty_tpl->tpl_vars['k_child_1']->value;?>
][lstChild][<?php echo $_smarty_tpl->tpl_vars['k_child_2']->value;?>
][unit_type]">

																	<option value="_PERCENT" <?php if ($_smarty_tpl->tpl_vars['child_2']->value['unit_type'] == "_PERCENT") {?>selected<?php }?>>%</option>

																	<option value="_MONEY" <?php if ($_smarty_tpl->tpl_vars['child_2']->value['unit_type'] == "_MONEY") {?>selected<?php }?>>VNĐ</option>

																</select>

															</div>

														</div>

														<div class="col-md-3">

															<label class="col-form-label">Thời gian</label>										

															<div class="input-group d-flex align-items-center">

																<input type="number" class="form-control calc_field mr-2" value="<?php echo $_smarty_tpl->tpl_vars['child_2']->value['time'];?>
" placeholder="Thời gian" id="introMonths" name="expense[<?php echo $_smarty_tpl->tpl_vars['k_child_1']->value;?>
][lstChild][<?php echo $_smarty_tpl->tpl_vars['k_child_2']->value;?>
][time]" min="0">

																<span class="input-group-text cursor-pointer">tháng</span>

															</div>

														</div>

													</div>

												</div>

											</div>

										</div>

									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

								</div>

							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

							

						</div>

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
