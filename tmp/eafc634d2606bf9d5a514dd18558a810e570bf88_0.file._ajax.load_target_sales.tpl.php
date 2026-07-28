<?php
/* Smarty version 3.1.33, created on 2026-07-27 17:02:13
  from '/www/wwwroot/skyrealty.c-a.vn/application/views/home/dashboard/_ajax.load_target_sales.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a672ca5f1b146_06483390',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eafc634d2606bf9d5a514dd18558a810e570bf88' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/views/home/dashboard/_ajax.load_target_sales.tpl',
      1 => 1783283460,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a672ca5f1b146_06483390 (Smarty_Internal_Template $_smarty_tpl) {
if (!empty($_smarty_tpl->tpl_vars['txt_not_target']->value)) {?>

	<div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['txt_not_target']->value;?>
</div>

<?php }?>

<div class="form-row mb-3">

	<div class="col-4">

		<div class="card">

			<div class="item_target item_quantity_achieved">

				<div class="d-flex align-items-center gap-1">

					<span class="icon_header"></span>

					<h5 class="card-title mb-0 fs-12 text-upper text-dark">Giao dịch</h5>

				</div>

				<div class="item_body">

					<div class="text-success">

						<span class="fs-20 fw-bold"><?php echo $_smarty_tpl->tpl_vars['total_billings']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['target_quantity']->value;?>
</span> <span class="">GD</span>

					</div>

					<div class="progress h-px-10 mb-1">

						<div class="progress-bar" role="progressbar" style="width:<?php echo $_smarty_tpl->tpl_vars['percent_qty']->value;?>
%;" aria-valuenow="<?php echo $_smarty_tpl->tpl_vars['percent_qty']->value;?>
" 

						aria-valuemin="0" aria-valuemax="100"></div>

					</div>

					<?php if (!empty($_smarty_tpl->tpl_vars['target_quantity']->value)) {?>

						<?php if (!empty($_smarty_tpl->tpl_vars['total_billings']->value)) {?>

							<?php if ($_smarty_tpl->tpl_vars['total_billings']->value >= $_smarty_tpl->tpl_vars['target_quantity']->value) {?>

								<div class=" fs-10">

									<span class="">Bạn đã đạt chỉ tiêu</span>

									<span class=""><?php echo $_smarty_tpl->tpl_vars['percent_qty']->value;?>
</span>

								</div>

							<?php } else { ?>

								<div class=" fs-10">

									<span class="">Đã chốt <strong class="text-main"><?php echo $_smarty_tpl->tpl_vars['total_billings']->value;?>
</strong> GD - Còn <strong class="text-warning"><?php echo $_smarty_tpl->tpl_vars['unmet_target_quantity']->value;?>
</strong> GD</span>

									<span class=""><?php echo $_smarty_tpl->tpl_vars['percent_qty']->value;?>
</span>								

								</div>

							<?php }?>

						<?php } else { ?>

							<div class=" fs-10">

								<span class="">Chưa có giao dịch nào!</span>							

							</div>

						<?php }?>

					<?php } else { ?>

						<div class="text-muted fs-10">Mục tiêu chưa thiết lập</div>

					<?php }?>

				</div>

			</div>			

		</div>

	</div>

	<div class="col-4">

		<div class="card">

			<div class="item_target item_price_achieved">

				<div class="d-flex align-items-center gap-1">

					<span class="icon_header"></span>

					<h5 class="card-title mb-0 fs-12 text-upper text-dark">Doanh số</h5>

				</div>

				<div class="item-body">

					<div class="text-success">

						<span class="fs-20 fw-bold"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->shortNumber($_smarty_tpl->tpl_vars['total_amount']->value,1,1);?>
</span> <span class=""> / <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->shortNumber($_smarty_tpl->tpl_vars['target_amount']->value,1,1);?>
</span>

					</div>

					<div class="progress h-px-10 mb-1">

						<div class="progress-bar" role="progressbar" style="width:<?php echo $_smarty_tpl->tpl_vars['percent_amount']->value;?>
%;" aria-valuenow="<?php echo $_smarty_tpl->tpl_vars['percent_amount']->value;?>
" 

						aria-valuemin="0" aria-valuemax="100"></div>

					</div>

					<?php if (!empty($_smarty_tpl->tpl_vars['target_amount']->value)) {?>

						<?php if (!empty($_smarty_tpl->tpl_vars['total_amount']->value)) {?>

							<?php if ($_smarty_tpl->tpl_vars['total_amount']->value >= $_smarty_tpl->tpl_vars['target_amount']->value) {?>

								<div class=" fs-10">

									<span class="">Bạn đã đạt chỉ tiêu</span>

									<span class=""><?php echo $_smarty_tpl->tpl_vars['percent_amount']->value;?>
</span>

								</div>

							<?php } else { ?>

								<div class=" fs-10">

									<span class="">Đã đạt <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->shortNumber($_smarty_tpl->tpl_vars['total_amount']->value);?>
</span>

									<span class=""><?php echo $_smarty_tpl->tpl_vars['percent_amount']->value;?>
</span>								

								</div>

							<?php }?>

						<?php } else { ?>

							<div class=" fs-10">

								<span class="">Chưa có giao dịch nào!</span>							

							</div>

						<?php }?>

					<?php } else { ?>

						<div class="text-muted fs-10">Mục tiêu chưa thiết lập</div>

					<?php }?>

				</div>

			</div>			

		</div>

	</div>

	<div class="col-4">

		<div class="card">

			<div class="item_target item_unmet_achieved">

				<div class="d-flex align-items-center gap-1">

					<span class="icon_header"></span>

					<h5 class="card-title mb-0 fs-12 text-upper text-dark">Còn thiếu</h5>

				</div>

				<div class="item-body">

					<div class="text-warning">

						<span class="fs-20 fw-bold"><?php echo $_smarty_tpl->tpl_vars['unmet_target_quantity']->value;?>
</span> GD <span class=""> / <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->shortNumber($_smarty_tpl->tpl_vars['unmet_target_price']->value,1,1);?>
</span>

					</div>

					<hr style="margin: 6px 0px;height: 0;border-top: 1px dashed #5a5a5a">

					<?php if (!empty($_smarty_tpl->tpl_vars['target_amount']->value)) {?>

						<?php if ($_smarty_tpl->tpl_vars['unmet_target_quantity']->value > 0 || $_smarty_tpl->tpl_vars['unmet_target_price']->value > 0) {?>

							<div class=" fs-10">

								<span class="">Hãy tăng tốc lên nào!</span>

							</div>

						<?php } else { ?>

							<div class=" fs-10">

								<span class="">Bạn đã đạt chỉ tiêu</span>

							</div>

						<?php }?>

					<?php } else { ?>

						<div class="text-muted fs-10">Mục tiêu chưa thiết lập</div>

					<?php }?>

				</div>

			</div>			

		</div>

	</div>

</div><?php }
}
