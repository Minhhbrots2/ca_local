<?php
/* Smarty version 3.1.33, created on 2026-07-13 17:49:53
  from '/www/wwwroot/skyrealty.c-a.vn/application/views/kpi/config.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a54c2d1868781_07739544',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd97fdc6f3a7e28fd3ce06b826f1c19ffeefcbad' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/views/kpi/config.tpl',
      1 => 1783308747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a54c2d1868781_07739544 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-xxl flex-grow-1 container-p-y pt-2">
	<div class="d-flex flex-wrap justify-content-between align-items-center py-2 mb-2">
		<div class="p__left">
			<h4 class="fw-bold mb-1">
				<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/kpi.html" class="fs-18 mr-2"><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('angle-left');?>
</a> 
				Cài đặt chỉ tiêu
			</h4>
			<span class="text-muted mb-0">Thiết lập chỉ tiêu chi tiết</span>
		</div>
		<div class="p__right">
			<button type="button" title="Thêm nhanh" onClick="$Core.kpi.open(this, event)" 
				kpi_id="0" class="btn btn-outline-danger">+ Thêm chỉ tiêu</button>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="card">
		<div class="card-body">
			<div class="table-container text-nowrap overflow-x-auto">
				<table class="table table-striped mb-0" cellpadding="0" cellspacing="0" width="100%">
					<thead><tr>
						<th class="align-center bg-lighter h-px-35 text-center" width="3%">No.</th>
						<th class="align-center bg-lighter h-px-35 text-left">Tiêu đề</th>
						<th class="align-center bg-lighter h-px-35 text-left">Năm</th>
						<th class="align-center bg-lighter h-px-35 text-left">Lặp lại theo</th>
						<th class="align-center bg-lighter h-px-35 text-left">Áp dụng các tháng</th>
						<th class="align-center bg-lighter h-px-35" width="40px"></th>
					</tr></thead>
					<?php if (!empty($_smarty_tpl->tpl_vars['list_kpis']->value)) {?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_kpis']->value, '_oKPI', false, NULL, 'i', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oKPI']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']++;
?>
						<tr>
							<td class="align-center text-center"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration'] : null);?>
</td>
							<td class="align-center text-left"><?php echo $_smarty_tpl->tpl_vars['_oKPI']->value['title'];?>
</td>
							<td class="align-center text-left"><?php echo $_smarty_tpl->tpl_vars['_oKPI']->value['year_period'];?>
</td>
							<td class="align-center text-left">
								<?php if ($_smarty_tpl->tpl_vars['_oKPI']->value['period'] == 'ALLMONTH') {?>Lặp lại hàng tháng<?php } else { ?>Lặp lại theo tháng<?php }?>
							</td>
							<td class="align-center text-left">
								<?php if ($_smarty_tpl->tpl_vars['_oKPI']->value['period'] == 'ALLMONTH') {?>
									<span class="text-muted">Áp dụng cả năm</span>
								<?php } else { ?>
								
								<?php }?>
							</td>
							<td class="align-center text-center">
								<div class="btn-group">
									<button type="button" onClick="$Core.kpi.open(this, event)" kpi_id="<?php echo $_smarty_tpl->tpl_vars['_oKPI']->value['kpi_id'];?>
" 
										class="btn btn-icon btn-sm btn-outline-default"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIcon('bx-pencil');?>
</button>
									<button type="button" onClick="$Core.kpi.delete(this, event)" kpi_id="<?php echo $_smarty_tpl->tpl_vars['_oKPI']->value['kpi_id'];?>
" 
										class="btn btn-icon btn-sm btn-outline-default"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIcon('bx-trash');?>
</button>
								</div>
							</td>
						</tr>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php }?>
				</table>
			</div>
		</div>
	</div>
</div>

<style type="text/css">
	.avatar-group .user-plus{
		width:32px;
		height:32px;
		line-height:28px;
		padding:2px;
		font-size:12px;
	}
	@media screen and (max-width:767px) {
		.table-container .table tr th:nth-child(2){
			background:#F5F7F8 !important
		}
		.table-container .table tr th:nth-child(2),
		.table-container .table tr td:nth-child(2){
			z-index:2;
			position:sticky;
			left:0px; top:0;
			background:var(--bs-white);
			border-right: 1px solid #d9dee3;
		}
	}
</style>

<?php }
}
