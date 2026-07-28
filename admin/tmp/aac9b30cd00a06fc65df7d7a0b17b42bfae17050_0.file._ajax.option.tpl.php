<?php
/* Smarty version 3.1.33, created on 2026-07-01 15:06:58
  from '/www/wwwroot/ca.futurehomes.vn/admin/application/views/price_sheets/_ajax.option.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a44caa244e9a9_78704841',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aac9b30cd00a06fc65df7d7a0b17b42bfae17050' => 
    array (
      0 => '/www/wwwroot/ca.futurehomes.vn/admin/application/views/price_sheets/_ajax.option.tpl',
      1 => 1781150636,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a44caa244e9a9_78704841 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-dialog modal-ipad">
	<div class="modal-content">
		<div class="modal-header">
			<a href="javascript:void();" class="closeEv close_pop close"><span>×</span></a>
			<h3 class="modal-title"><strong><?php echo $_smarty_tpl->tpl_vars['titlePage']->value;?>
</strong></h3>
		</div>
		<form method="post" action="" enctype="multipart/form-data">
			<div class="modal-body">
				<div class="form-group">
					<label class="col-md-3 col-form-label">Tên mốc / đợt<span class="text-red">*</span></label>
					<div class="col-md-9">
						<input type="text" id="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid();?>
" autocomplete="off" class="form-control required"
							placeholder="VD: Ký VBTT, Đợt 2, Bàn giao..." name="name" list="ptg-milestone-names" value="<?php echo $_smarty_tpl->tpl_vars['oneOption']->value['name'];?>
" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 col-form-label">Mốc thời gian</label>
					<div class="col-md-9">
						<label class="radio-inline"><input type="radio" name="date_mode" value="days" <?php if ($_smarty_tpl->tpl_vars['oneOption']->value['date_mode'] == 'days' || $_smarty_tpl->tpl_vars['oneOption']->value['date_mode'] == '') {?>checked<?php }?> onchange="$Core.price_sheets.toggle_date_mode(this)" /> Sau đợt trước (số ngày)</label>
						<label class="radio-inline"><input type="radio" name="date_mode" value="fixed" <?php if ($_smarty_tpl->tpl_vars['oneOption']->value['date_mode'] == 'fixed') {?>checked<?php }?> onchange="$Core.price_sheets.toggle_date_mode(this)" /> Ngày cố định</label>
						<label class="radio-inline"><input type="radio" name="date_mode" value="estimated" <?php if ($_smarty_tpl->tpl_vars['oneOption']->value['date_mode'] == 'estimated') {?>checked<?php }?> onchange="$Core.price_sheets.toggle_date_mode(this)" /> Dự kiến (text)</label>
					</div>
				</div>
				<div class="form-group date-mode-group date-mode-days" <?php if ($_smarty_tpl->tpl_vars['oneOption']->value['date_mode'] != '' && $_smarty_tpl->tpl_vars['oneOption']->value['date_mode'] != 'days') {?>style="display:none"<?php }?>>
					<label class="col-md-3 col-form-label">Số ngày sau đợt trước</label>
					<div class="col-md-9">
						<div class="input-group-suffix">
							<input type="number" min="0" step="1" onClick="this.select()" class="form-control numberonly"
								placeholder="VD: 7" name="payment_days" value="<?php echo $_smarty_tpl->tpl_vars['oneOption']->value['payment_days'];?>
" />
							<span class="suffix">ngày</span>
						</div>
						<small class="text-muted">Ngày của đợt liền trước + số ngày này. Đợt đầu tiên thì "trước" chính là ngày đặt cọc.</small>
					</div>
				</div>
				<div class="form-group date-mode-group date-mode-fixed" <?php if ($_smarty_tpl->tpl_vars['oneOption']->value['date_mode'] != 'fixed') {?>style="display:none"<?php }?>>
					<label class="col-md-3 col-form-label">Ngày cố định</label>
					<div class="col-md-9">
						<input type="text" class="form-control datepicker" placeholder="dd/mm/yy" name="fixed_date" value="<?php if ($_smarty_tpl->tpl_vars['oneOption']->value['fixed_date']) {
echo $_smarty_tpl->tpl_vars['clsISO']->value->convertTimeToText($_smarty_tpl->tpl_vars['oneOption']->value['fixed_date']);
}?>" />
						<small class="text-muted">VD: Đợt 2 ngày 31/03/2026 — sẽ hiển thị nguyên ngày này không phụ thuộc đợt trước.</small>
					</div>
				</div>
				<div class="form-group date-mode-group date-mode-estimated" <?php if ($_smarty_tpl->tpl_vars['oneOption']->value['date_mode'] != 'estimated') {?>style="display:none"<?php }?>>
					<label class="col-md-3 col-form-label">Dự kiến (text)</label>
					<div class="col-md-9">
						<input type="text" class="form-control" placeholder="VD: T6/2026, QII/2028, Sau khi ký HĐMB..." name="estimated_text" value="<?php echo $_smarty_tpl->tpl_vars['oneOption']->value['estimated_text'];?>
" />
						<small class="text-muted">VD: "Ký HĐMB (dự kiến T6/2026)", "Bàn giao (dự kiến QII/2028)".</small>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 col-form-label">Số tiền</label>
					<div class="col-md-9">
						<label class="radio-inline"><input type="radio" name="amount_mode" value="percent" <?php if ($_smarty_tpl->tpl_vars['oneOption']->value['amount_mode'] == 'percent' || $_smarty_tpl->tpl_vars['oneOption']->value['amount_mode'] == '') {?>checked<?php }?> onchange="$Core.price_sheets.toggle_amount_mode(this)" /> Tỷ lệ %</label>
						<label class="radio-inline"><input type="radio" name="amount_mode" value="fixed" <?php if ($_smarty_tpl->tpl_vars['oneOption']->value['amount_mode'] == 'fixed') {?>checked<?php }?> onchange="$Core.price_sheets.toggle_amount_mode(this)" /> Số tiền cố định</label>
					</div>
				</div>
				<div class="form-group amount-mode-group amount-mode-percent" <?php if ($_smarty_tpl->tpl_vars['oneOption']->value['amount_mode'] != '' && $_smarty_tpl->tpl_vars['oneOption']->value['amount_mode'] != 'percent') {?>style="display:none"<?php }?>>
					<label class="col-md-3 col-form-label">Tỷ lệ thanh toán</label>
					<div class="col-md-9">
						<div class="input-group-suffix">
							<input type="number" onClick="this.select()" class="form-control numberonly" name="payment_rate" value="<?php echo $_smarty_tpl->tpl_vars['oneOption']->value['payment_rate'];?>
" />
							<span class="suffix">%</span>
						</div>
					</div>
				</div>
				<div class="form-group amount-mode-group amount-mode-fixed" <?php if ($_smarty_tpl->tpl_vars['oneOption']->value['amount_mode'] != 'fixed') {?>style="display:none"<?php }?>>
					<label class="col-md-3 col-form-label">Số tiền cố định</label>
					<div class="col-md-9">
						<div class="input-group-suffix">
							<input type="text" class="form-control price-In" placeholder="VD: 50,000,000" name="payment_amount" value="<?php if ($_smarty_tpl->tpl_vars['oneOption']->value['payment_amount']) {
echo $_smarty_tpl->tpl_vars['oneOption']->value['payment_amount'];
}?>" />
							<span class="suffix">đ</span>
						</div>
						<small class="text-muted">VD: Đặt cọc 50.000.000 đ (không tính theo %).</small>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 col-form-label">KPBT</label>
					<div class="col-md-9">
						<label class="checkbox-inline">
							<input type="hidden" name="include_kpbt" value="0" />
							<input type="checkbox" name="include_kpbt" value="1" <?php if ($_smarty_tpl->tpl_vars['oneOption']->value['include_kpbt']) {?>checked<?php }?> /> Bao gồm phí KPBT
						</label>
						<small class="text-muted">VD: "Bàn giao" thường nộp 25% + KPBT, hoặc chỉ KPBT. KPBT khai báo ở header PTG: <?php if ($_smarty_tpl->tpl_vars['maintenance_rate']->value) {?><strong><?php echo $_smarty_tpl->tpl_vars['maintenance_rate']->value;?>
%</strong><?php } else { ?><em class="text-danger">chưa nhập</em><?php }?></small>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 col-form-label">Thuế VAT</label>
					<div class="col-md-9">
						<div class="input-group-suffix">
							<input type="text" onClick="this.select()" class="form-control numberonly" name="tax_rate" value="<?php echo $_smarty_tpl->tpl_vars['oneOption']->value['tax_rate'];?>
" />
							<span class="suffix">%</span>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-success pull-right" onClick="$Core.price_sheets.pop_save_option(this, event)"
					price_sheet_id="<?php echo $_smarty_tpl->tpl_vars['price_sheet_id']->value;?>
" stock_type="<?php echo $_smarty_tpl->tpl_vars['stock_type']->value;?>
" price_plan_id="<?php echo $_smarty_tpl->tpl_vars['price_plan_id']->value;?>
" option_id="<?php echo $_smarty_tpl->tpl_vars['option_id']->value;?>
">Lưu lại</button>
				<?php if (empty($_smarty_tpl->tpl_vars['option_id']->value)) {?>
				<button type="button" class="btn btn-info pull-right mr-half" onClick="$Core.price_sheets.pop_save_option(this, event)" data-stay="1"
					price_sheet_id="<?php echo $_smarty_tpl->tpl_vars['price_sheet_id']->value;?>
" stock_type="<?php echo $_smarty_tpl->tpl_vars['stock_type']->value;?>
" price_plan_id="<?php echo $_smarty_tpl->tpl_vars['price_plan_id']->value;?>
" option_id="<?php echo $_smarty_tpl->tpl_vars['option_id']->value;?>
"><i class="fa fa-plus"></i> Lưu & Thêm tiếp</button>
				<?php }?>
				<button type="button" class="btn btn-default mr-half pull-right" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Close');?>
</button>
			</div>
		</form>
	</div>
</div>
<datalist id="ptg-milestone-names">
	<option value="Đặt cọc"></option>
	<option value="Đặt cọc giữ chỗ"></option>
	<option value="Ký VBTT"></option>
	<option value="Đợt 1"></option>
	<option value="Đợt 2"></option>
	<option value="Đợt 3"></option>
	<option value="Đợt 4"></option>
	<option value="Đợt 5"></option>
	<option value="Ký HĐMB"></option>
	<option value="Sau khi ký HĐMB"></option>
	<option value="Bàn giao"></option>
	<option value="HTLS (Hỗ trợ lãi suất)"></option>
	<option value="Chiết khấu"></option>
	<option value="Cấp sổ"></option>
</datalist>
<?php }
}
