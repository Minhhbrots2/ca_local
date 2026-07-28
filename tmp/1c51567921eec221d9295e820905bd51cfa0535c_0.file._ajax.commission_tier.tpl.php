<?php
/* Smarty version 3.1.33, created on 2026-07-27 19:21:17
  from '/www/wwwroot/skyrealty.c-a.vn/application/views/home/_ajax.commission_tier.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a674d3d81be01_22971906',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c51567921eec221d9295e820905bd51cfa0535c' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/views/home/_ajax.commission_tier.tpl',
      1 => 1784982786,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a674d3d81be01_22971906 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-ipad">
	<form class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title mb-0"><i class="bx bx-line-chart me-1"></i> Tỷ lệ hoa hồng theo vị trí</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
			<div class="alert alert-info py-2 d-flex align-items-start mb-3">
				<i class="bx bx-info-circle me-2 mt-1"></i>
				<small>Doanh số đạt mốc nào thì vị trí đó hưởng tỷ lệ của bậc tương ứng (áp bậc cao nhất mà doanh số đạt).</small>
			</div>
			<div class="row g-3">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['commission_roles']->value, '_rlabel', false, '_rkey');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_rkey']->value => $_smarty_tpl->tpl_vars['_rlabel']->value) {
?>
				<div class="col-12">
					<div class="card shadow-none border">
						<div class="card-header d-flex align-items-center justify-content-between">
							<h6 class="mb-0"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_rlabel']->value, ENT_QUOTES, 'UTF-8', true);?>
</h6>
							<span class="badge bg-label-primary"><?php if (!empty($_smarty_tpl->tpl_vars['commission_tiers']->value[$_smarty_tpl->tpl_vars['_rkey']->value])) {
echo count($_smarty_tpl->tpl_vars['commission_tiers']->value[$_smarty_tpl->tpl_vars['_rkey']->value]);
} else { ?>0<?php }?> bậc</span>
						</div>
						<div class="card-body p-3">
							<div class="d-flex align-items-center gap-2 mb-1 text-muted">
								<span class="flex-grow-1">Mốc doanh số</span>
								<span class="w-px-125 flex-grow-0">Tỷ lệ</span>
								<span class="w-px-40 flex-grow-0"></span>
							</div>
							<div data-role="<?php echo $_smarty_tpl->tpl_vars['_rkey']->value;?>
">
								<?php if (!empty($_smarty_tpl->tpl_vars['commission_tiers']->value[$_smarty_tpl->tpl_vars['_rkey']->value])) {?>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['commission_tiers']->value[$_smarty_tpl->tpl_vars['_rkey']->value], '_t', false, NULL, 'trow', array (
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_t']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_trow']->value['index']++;
?>
									<div class="d-flex align-items-center gap-2 mb-2 js__tier-row">
										<div class="input-group">
											<input type="text" class="form-control text-end price-In numberonly" name="tiers[<?php echo $_smarty_tpl->tpl_vars['_rkey']->value;?>
][<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_trow']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_trow']->value['index'] : null);?>
][min]" value="<?php echo $_smarty_tpl->tpl_vars['_t']->value['min'];?>
">
											<span class="input-group-text">đ</span>
										</div>
										<div class="input-group w-px-125 flex-grow-0">
											<input type="text" class="form-control text-end" name="tiers[<?php echo $_smarty_tpl->tpl_vars['_rkey']->value;?>
][<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_trow']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_trow']->value['index'] : null);?>
][rate]" value="<?php echo $_smarty_tpl->tpl_vars['_t']->value['rate'];?>
">
											<span class="input-group-text">%</span>
										</div>
										<button type="button" class="btn btn-icon btn-outline-danger flex-shrink-0" title="Xoá bậc" onclick="$Core.commissionTier.removeRow(this,event)"><i class="bx bx-trash"></i></button>
									</div>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								<?php }?>
							</div>
							<button type="button" class="btn btn-outline-primary w-100" onclick="$Core.commissionTier.addRow(this,event,'<?php echo $_smarty_tpl->tpl_vars['_rkey']->value;?>
')"><i class="bx bx-plus"></i> Thêm bậc</button>
						</div>
					</div>
				</div>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Đóng</button>
			<button type="button" class="btn btn-primary" onclick="$Core.commissionTier.save(this,event)"><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('floppy-o','Lưu cấu hình');?>
</button>
		</div>
	</form>
</div>
<?php }
}
