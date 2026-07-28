<?php
/* Smarty version 3.1.33, created on 2026-07-13 09:29:28
  from '/www/wwwroot/skyrealty.c-a.vn/application/views/log/log_search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a544d8821c4a6_14699103',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2f1e03d84ad4497924eee9b62fda0480085591d' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/views/log/log_search.tpl',
      1 => 1783745329,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a544d8821c4a6_14699103 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-xxl flex-grow-1 container-p-y pt-2">
	<div class="d-flex flex-wrap justify-content-between align-items-center mb-2">
		<div class="nlApYyxOPs mb-2 mb-lg-0">
			<h4 class="fw-bold mb-1">Lịch sử tìm kiếm</h4>
			<p class="text-muted mb-0">Có <strong class="total_record text-danger"><?php echo $_smarty_tpl->tpl_vars['total_record']->value;?>
</strong> lịch sử tìm kiếm</p>
		</div>
		<div class="dropdown">
			<button type="button" class="btn btn-icon btn-default hide-arrow dropdown-toggle" data-bs-toggle="dropdown" 
				data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="true">
				<i class="bx bx-filter"></i>
			</button>
			<div class="dropdown-menu dropdown-menu-end w-px-300" data-popper-placement="bottom-end">
				<form class="p-4" method="POST">
					<div class="form-group mb-2">
						<div class="input-group input-group-merge">
							<span class="input-group-text"><i class="bx bx-search"></i></span>
							<input type="text" class="form-control search_field" data-field="keySearch" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Search');?>
" />
						</div>
					</div>
					<div class="form-group form-row mb-2">
						<div class="col-6">
							<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['start_date']->value;?>
" class="form-control search_field" 
								placeholder="Từ ngày" data-field="start_date">
						</div>
						<div class="col-6">
							<input type="text" class="form-control search_field" 
								placeholder="Đến ngày" data-field="end_date">
						</div>
					</div>
					<div class="form-group mb-2">
						<select id="slb_Profile_Id" class="iso-select2 search_field" data-field="user_id" data-width="100%" data-placeholder="Nhân viên" data-allow-clear="true">
							<option value="0">Nhân viên</option>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lstUser']->value, 'item', false, NULL, 'item', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['profile_id'];?>
">
								<?php echo $_smarty_tpl->tpl_vars['clsProfile']->value->getFullName($_smarty_tpl->tpl_vars['item']->value['profile_id'],$_smarty_tpl->tpl_vars['item']->value);?>

							</option>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</select>
					</div>
					<div class="form-group">
						<input type="hidden" name="stock_id" class="search_field" data-field="stock_id" value="<?php echo $_smarty_tpl->tpl_vars['stock_id']->value;?>
" />
						<button type="button" class="btn btn-primary" onClick="$Core.log.do_search_key(this, event)"> 
							<i class="bx bx-search"></i> Tìm kiếm
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
    <!-- Basic Bootstrap Table -->
    <div class="card">
		<div class="card-body">
			<div class="table-container no-shadow mb-2 overflow-x-auto text-nowrap">
				<table border="0" cellpadding="0" cellspacing="0" class="table table-striped mb-0" width="100%">
					<thead><tr>
						<th width="15%" class="align-center h-px-35">Nhân viên</th>
						<th width="300px" class="align-center bg-lighter h-px-35">Key search</th>
						<th width="150px" class="align-center bg-lighter h-px-35">Thời gian</th>
						<th class="align-left bg-lighter h-px-35">User-IP</th> 
					</tr> </thead>
					<tbody class="holder_logs">
						<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['list_preloaders']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
						<tr>
							<td><div class="animate-bg w-100 h-px-15 rounded-1"></td>
							<td><div class="animate-bg w-100 h-px-15 rounded-1"></td>
							<td><div class="animate-bg w-100 h-px-15 rounded-1"></td>
							<td><div class="animate-bg w-100 h-px-15 rounded-1"></td>
						</tr>
						<?php
}
}
?>
					</tbody>
				</table>
			</div>
			<div id="pager_search_logs"></div>
		</div>
    </div>
    <!--/ Basic Bootstrap Table -->
</div>

<?php echo '<script'; ?>
 type="text/javascript">
	$(function(){
		$Core.log.load_logs_search({});
	});
<?php echo '</script'; ?>
>
<?php }
}
