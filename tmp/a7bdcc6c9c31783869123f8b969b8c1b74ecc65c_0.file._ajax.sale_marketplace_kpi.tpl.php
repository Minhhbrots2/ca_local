<?php
/* Smarty version 3.1.33, created on 2026-07-07 11:43:19
  from '/www/wwwroot/skyrealty.futureglobal.vn/application/views/crm/_ajax.sale_marketplace_kpi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a4c83e7a598a4_35824498',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7bdcc6c9c31783869123f8b969b8c1b74ecc65c' => 
    array (
      0 => '/www/wwwroot/skyrealty.futureglobal.vn/application/views/crm/_ajax.sale_marketplace_kpi.tpl',
      1 => 1783314301,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a4c83e7a598a4_35824498 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row g-3 mb-3">
	<div class="col-6 col-md-3 col-xl-3">
		<div class="card h-100 crm-kpi-card">
			<div class="card-body d-flex justify-content-between align-items-start">
				<div class="min-w-0">
					<span class="crm-kpi-label">Tổng kho MOC / MF</span>
					<h3 class="mb-0 mt-1 fw-bold"><?php echo $_smarty_tpl->tpl_vars['total_all']->value;?>
</h3>
					<small class="text-muted">tài khoản marketplace</small>
				</div>
				<div class="avatar flex-shrink-0"><span class="avatar-initial rounded bg-label-primary"><i class="bx bx-group fs-4"></i></span></div>
			</div>
		</div>
	</div>
	<div class="col-6 col-md-3 col-xl-3">
		<div class="card h-100 crm-kpi-card">
			<div class="card-body d-flex justify-content-between align-items-start">
				<div class="min-w-0">
					<span class="crm-kpi-label">Khớp bộ lọc</span>
					<h3 class="mb-0 mt-1 fw-bold"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</h3>
					<small class="text-muted">kết quả sau khi lọc</small>
				</div>
				<div class="avatar flex-shrink-0"><span class="avatar-initial rounded bg-label-info"><i class="bx bx-filter-alt fs-4"></i></span></div>
			</div>
		</div>
	</div>
	<div class="col-6 col-md-3 col-xl-3">
		<div class="card h-100 crm-kpi-card">
			<div class="card-body d-flex justify-content-between align-items-start">
				<div class="min-w-0">
					<span class="crm-kpi-label">Có thể chuyển</span>
					<h3 class="mb-0 mt-1 fw-bold <?php if ($_smarty_tpl->tpl_vars['cnt_pick']->value > 0) {?>text-primary<?php }?>"><?php echo $_smarty_tpl->tpl_vars['cnt_pick']->value;?>
</h3>
					<small class="text-muted">trên trang này</small>
				</div>
				<div class="avatar flex-shrink-0"><span class="avatar-initial rounded bg-label-success"><i class="bx bx-user-check fs-4"></i></span></div>
			</div>
		</div>
	</div>
	<div class="col-6 col-md-3 col-xl-3">
		<div class="card h-100 crm-kpi-card">
			<div class="card-body d-flex justify-content-between align-items-start">
				<div class="min-w-0">
					<span class="crm-kpi-label">Đã xử lý</span>
					<h3 class="mb-0 mt-1 fw-bold"><?php echo $_smarty_tpl->tpl_vars['cnt_done']->value;?>
</h3>
					<small class="text-muted"><?php echo $_smarty_tpl->tpl_vars['cnt_conv']->value;?>
 đã chuyển · <?php echo $_smarty_tpl->tpl_vars['cnt_pdup']->value;?>
 trùng SĐT</small>
				</div>
				<div class="avatar flex-shrink-0"><span class="avatar-initial rounded bg-label-secondary"><i class="bx bx-check-shield fs-4"></i></span></div>
			</div>
		</div>
	</div>
</div>
<?php }
}
