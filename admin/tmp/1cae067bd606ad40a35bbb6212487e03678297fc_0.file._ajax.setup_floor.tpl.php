<?php
/* Smarty version 3.1.33, created on 2026-07-27 17:52:14
  from '/www/wwwroot/skyrealty.c-a.vn/admin/application/views/project/_ajax.setup_floor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a67385e2ce184_81884111',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1cae067bd606ad40a35bbb6212487e03678297fc' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/admin/application/views/project/_ajax.setup_floor.tpl',
      1 => 1783289340,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a67385e2ce184_81884111 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-dialog">

	<div class="modal-content">

		<div class="modal-header"> 

			<a href="javascript:void();" class="closeEv close_pop close"><span>×</span></a> 

			<h3 class="modal-title"><strong>Cài đặt tầng đặc biệt</strong></h3>

		</div>

		<form method="post" action="" enctype="multipart/form-data">

			<div class="modal-body modal-body-scrollable">

				<table class="table">

					<thead><tr>

						<th class="text-center border-end" width="5%">Tầng</th>

						<th class="text-center border-end" width="5%">Tên thay thế</th>

						<th class="text-center border-end" width="10%">Layout header</th>

						<th class="text-center border-end" width="10%">Không theo thứ tự</th>

						<th>Loại tầng</th>

					</tr></thead>

					<?php if (!empty($_smarty_tpl->tpl_vars['lst_floor']->value)) {?>

						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lst_floor']->value, '_floor', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['_floor']->value) {
?>

							<?php $_smarty_tpl->_assignInScope('_cfg', $_smarty_tpl->tpl_vars['floor_arrs']->value[$_smarty_tpl->tpl_vars['_floor']->value]);?>

						<tr>

							<td class="text-center border-end"><?php echo $_smarty_tpl->tpl_vars['_floor']->value;?>
</td>

							<td class="text-center border-end">

								<input class="form-control" type="text" name="floor_config[<?php echo $_smarty_tpl->tpl_vars['_floor']->value;?>
][name_floor]" value="<?php echo $_smarty_tpl->tpl_vars['_cfg']->value['name_floor'];?>
">

							</td>

							<td class="text-center border-end">

								<label class="switch">

									<input type="checkbox" name="floor_config[<?php echo $_smarty_tpl->tpl_vars['_floor']->value;?>
][is_special]"<?php if ($_smarty_tpl->tpl_vars['_cfg']->value['is_special'] == '1') {?> checked<?php }?> value="1">

									<span class="slider round"></span>

								</label>

							</td>

							<td class="text-center border-end">

								<label class="switch">

									<input type="checkbox" name="floor_config[<?php echo $_smarty_tpl->tpl_vars['_floor']->value;?>
][is_out_order]"<?php if ($_smarty_tpl->tpl_vars['_cfg']->value['is_out_order'] == '1') {?> checked<?php }?> value="1">

									<span class="slider round"></span>

								</label>

							</td>

							<td class="text-center">

								<div class="input-group d-flex" style="min-width: 200px">

									<select name="floor_config[<?php echo $_smarty_tpl->tpl_vars['_floor']->value;?>
][floor_type]" class="form-control no-border-right">

										<?php echo $_smarty_tpl->tpl_vars['clsProperty']->value->getSelectOptimizeProperty('_FLOOR_TYPE',$_smarty_tpl->tpl_vars['_cfg']->value['floor_type'],$_smarty_tpl->tpl_vars['arrFloorType']->value);?>


									</select>

									<input type="text" class="form-control" name="floor_config[<?php echo $_smarty_tpl->tpl_vars['_floor']->value;?>
][cell_merge]" value="<?php echo $_smarty_tpl->tpl_vars['_cfg']->value['cell_merge'];?>
" >

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

			<div class="modal-footer">

				<button type="button" class="btn btn-success" building_id="<?php echo $_smarty_tpl->tpl_vars['building_id']->value;?>
" onClick="$Core.project.save_setup_floor(this, event)">Cập nhật</button>

				<button type="button" class="btn btn-default mr-half pull-right" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Close');?>
</button>

			</div>

		</form>

	</div>

</div><?php }
}
