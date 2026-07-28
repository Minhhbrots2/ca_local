<?php
/* Smarty version 3.1.33, created on 2026-07-27 22:05:21
  from '/www/wwwroot/skyrealty.c-a.vn/application/views/crawl/_ajax.start_crawl_stock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a6773b17ab3e5_53355605',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebefd91dad4cccd74ece846f0f0dd62654bbb128' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/views/crawl/_ajax.start_crawl_stock.tpl',
      1 => 1783308677,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a6773b17ab3e5_53355605 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-dialog modal-fullscreen">
	<div class="modal-content">
		<div class="modal-header"> 
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="position: absolute;right: 30px;top: 30px"></button>
			<h3 class="modal-title"><strong>Import bảng hàng Cao tầng </strong></h3>
		</div>
		<form method="POST">
			<div class="modal-body">
				<div class="d-flex flex-wrap align-items-center mb-3 p-3" style="border: 2px dashed #ff1c00">
					<label class="text-muted text-nowrap mr-2">Phân khu:</label>
					<div class="d-flex flex-wrap align-items-start">
						<?php if (!empty($_smarty_tpl->tpl_vars['lstBlock']->value)) {?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lstBlock']->value, 'block_name', false, 'block_id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['block_id']->value => $_smarty_tpl->tpl_vars['block_name']->value) {
?>
								<div class="radius-half p-2 px-3 mr-2">
									<div class="checkbox">
										<input class="form-check-input me-2" type="checkbox" id="block_<?php echo $_smarty_tpl->tpl_vars['block_id']->value;?>
" name="block_id[]" value="<?php echo $_smarty_tpl->tpl_vars['block_id']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['target_id']->value == $_smarty_tpl->tpl_vars['block_id']->value) {?>checked<?php }?>>
										<label for="block_<?php echo $_smarty_tpl->tpl_vars['block_id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['block_name']->value;?>
</label>
									</div>
								</div>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<?php } else { ?>
							<span class="text-main fw-bold">Bạn chưa được cấp quyền cập nhật bảng hàng</span>
						<?php }?>
					</div>
				</div>
				<div class="text-nowrap overflow-auto mb-0" style="height:calc(100vh - 300px)">					
					<?php if (empty($_smarty_tpl->tpl_vars['type']->value)) {?>
						<table cellspacing="0" cellpadding="0" class="table no-width table-bordered table-striped">	
							<thead style="position:sticky; top:-1px; background:#FFF">
								<tr>
									<?php
$__section_index_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['highestColumnIndex']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_index_0_start = min(0, $__section_index_0_loop);
$__section_index_0_total = min(($__section_index_0_loop - $__section_index_0_start), $__section_index_0_loop);
$_smarty_tpl->tpl_vars['__smarty_section_index'] = new Smarty_Variable(array());
if ($__section_index_0_total !== 0) {
for ($__section_index_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index'] = $__section_index_0_start; $__section_index_0_iteration <= $__section_index_0_total; $__section_index_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index']++){
?>													
										<?php $_smarty_tpl->_assignInScope('col', (isset($_smarty_tpl->tpl_vars['__smarty_section_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index'] : null));?>
										<th class="bg-white" style="min-width:125px" width="<?php echo $_smarty_tpl->tpl_vars['widthColumn']->value;?>
%">
											<select name="columns[<?php echo $_smarty_tpl->tpl_vars['col']->value;?>
]" data-width="100%" class="form-control form-select stock_import_field">
												<option value="">Lựa chọn</option>
												<?php echo $_smarty_tpl->tpl_vars['clsStock']->value->getHtmlColumnFieldCrawl($_smarty_tpl->tpl_vars['stock_type']->value,$_smarty_tpl->tpl_vars['arr_column']->value[$_smarty_tpl->tpl_vars['col']->value]);?>

											</select>
										</th>
									<?php
}
}
?>
								</tr>
							</thead>
							<tbody>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tblData']->value, 'rowData', false, NULL, 'i_row', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rowData']->value) {
?>
									<tr class=" ">
										<?php
$__section_index_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['highestColumnIndex']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_index_1_start = min(0, $__section_index_1_loop);
$__section_index_1_total = min(($__section_index_1_loop - $__section_index_1_start), $__section_index_1_loop);
$_smarty_tpl->tpl_vars['__smarty_section_index'] = new Smarty_Variable(array());
if ($__section_index_1_total !== 0) {
for ($__section_index_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index'] = $__section_index_1_start; $__section_index_1_iteration <= $__section_index_1_total; $__section_index_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index']++){
?>
											<td class="text-left"><?php echo $_smarty_tpl->tpl_vars['rowData']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index'] : null)];?>
</td>
										<?php
}
}
?>
									</tr>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</tbody>
						</table>
					<?php } else { ?>
						<table cellspacing="0" cellpadding="0" class="table no-width table-bordered table-striped mb-0">	
							<thead style="position:sticky; top:-1px; background:#FFF">
								<tr>
									<th class="bg-white text-center" style="min-width:50px">
										STT
									</th>
									<?php
$__section_index_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['highestColumnIndex']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_index_2_start = min(0, $__section_index_2_loop);
$__section_index_2_total = min(($__section_index_2_loop - $__section_index_2_start), $__section_index_2_loop);
$_smarty_tpl->tpl_vars['__smarty_section_index'] = new Smarty_Variable(array());
if ($__section_index_2_total !== 0) {
for ($__section_index_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index'] = $__section_index_2_start; $__section_index_2_iteration <= $__section_index_2_total; $__section_index_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index']++){
?>													
										<?php $_smarty_tpl->_assignInScope('col', (isset($_smarty_tpl->tpl_vars['__smarty_section_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index'] : null));?>
										<th class="bg-white" style="min-width:120px" width="120px">
											<select name="columns[<?php echo $_smarty_tpl->tpl_vars['col']->value;?>
]" data-width="100%" class="form-control form-select stock_import_field">
												<option value="">Lựa chọn</option>
												<?php echo $_smarty_tpl->tpl_vars['clsStock']->value->getHtmlColumnFieldCrawl($_smarty_tpl->tpl_vars['stock_type']->value,$_smarty_tpl->tpl_vars['arr_column']->value[$_smarty_tpl->tpl_vars['col']->value]);?>

											</select>
										</th>
									<?php
}
}
?>
								</tr>
							</thead>
						</table>
					<?php }?>
					<div id="spreadsheet_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" class="spreadsheet_hide_head"></div>
				</div>			
			</div>
			<div class="modal-footer align-items-center justify-content-between">	
				<div class="p__left d-flex gap-2">
					<div class="d-flex align-items-center">
						<label class="switch mr-2">
							<input type="checkbox" name="opt_ignore_empty" value="1" checked>
							<span class="slider round"></span>
						</label>
						<span>Bỏ qua giá trị trống</span>
					</div>
					<?php if (!empty($_smarty_tpl->tpl_vars['type']->value)) {?>
						<div class="d-flex align-items-center">
							<label class="switch mr-2">
								<input type="checkbox" name="opt_update_ptg_only" value="1" />
								<span class="slider round"></span>
							</label>
							<span>Chỉ cập nhật PTG</span>
						</div>
					<?php }?>
				</div>
				<input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">				
				<div class="p__right d-flex justify-content-end"><button type="button" class="btn btn-primary" agency_id="<?php echo $_smarty_tpl->tpl_vars['agency_id']->value;?>
" target_id="<?php echo $_smarty_tpl->tpl_vars['target_id']->value;?>
" stock_type="<?php echo $_smarty_tpl->tpl_vars['stock_type']->value;?>
" uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" onClick="$Core.crawl.do_import(this, event)" ><span>Cập nhật bảng hàng</span></button></div>
			</div>
		</form>
	</div>
</div><?php }
}
