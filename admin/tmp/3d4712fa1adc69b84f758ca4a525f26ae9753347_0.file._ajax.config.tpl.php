<?php
/* Smarty version 3.1.33, created on 2026-06-20 14:46:22
  from '/www/wwwroot/ca.futurehomes.vn/admin/application/views/project/_ajax.config.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a36454e42efa6_45519568',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d4712fa1adc69b84f758ca4a525f26ae9753347' => 
    array (
      0 => '/www/wwwroot/ca.futurehomes.vn/admin/application/views/project/_ajax.config.tpl',
      1 => 1781150638,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a36454e42efa6_45519568 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-dialog">

	<form class="modal-content">

		<div class="modal-header"> 

			<a href="javascript:void();" class="closeEv close_pop close"><span>×</span></a> 

			<h3 class="modal-title"><strong>Cấu hình</strong></h3>

		</div>

		<div class="modal-body">

			<div class="form-group">

				<label class="col-form-label col-md-2">Min Zoom</label>

				<div class="col-md-4">

					<input type="text" class="form-control required" name="min_zoom"

						value="<?php echo $_smarty_tpl->tpl_vars['map_configs']->value['min_zoom'];?>
" />

				</div>

				<label class="col-form-label col-md-2">Max Zoom</label>

				<div class="col-md-4">

					<input type="text" class="form-control required" name="max_zoom" 

						value="<?php echo $_smarty_tpl->tpl_vars['map_configs']->value['max_zoom'];?>
" />

				</div>

			</div>

			<div class="form-group">

				<label class="col-form-label col-md-2">Tooltip</label>

				<div class="col-md-4">

					<div class="d-flex gap-2 align-items-center">

						<label class="switch">

							<input type="checkbox" name="show_tooltip" 

								value="1"<?php if ($_smarty_tpl->tpl_vars['map_configs']->value['show_tooltip'] == '1') {?> checked<?php }?>>

							<span class="slider round"></span>

						</label>

						<span class="text-muted">Hiển thị Tooltip</span>

					</div>

				</div>

				<label class="col-form-label col-md-2">Thiết lập</label>

				<div class="col-md-4">

					<div class="d-flex gap-2 align-items-center">

						<label class="switch">

							<input type="checkbox" name="enable_tooltip_position" 

								value="1"<?php if ($_smarty_tpl->tpl_vars['map_configs']->value['enable_tooltip_position'] == '1') {?> checked<?php }?>>

							<span class="slider round"></span>

						</label>

						<span class="text-muted">vị trí Tooltip</span>

					</div>

				</div>

			</div>

			<div class="form-group">

				<label class="col-form-label col-md-2">Cho phép</label>

				<div class="col-md-4">

					<select class="form-control iso-select2" name="list_building_id[]" multiple="multiple">

						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_buildings']->value, '_oB');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oB']->value) {
?>

						<option<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkInArray($_smarty_tpl->tpl_vars['list_building_arrs']->value,$_smarty_tpl->tpl_vars['_oB']->value['property_id'])) {?> selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['_oB']->value['property_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_oB']->value['title'];?>
</option>

						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

					</select>

				</div>

				<label class="col-form-label col-md-2">Thiết lập</label>

				<div class="col-md-4">

					<div class="d-flex gap-2 align-items-center">

						<label class="switch">

							<input type="checkbox" name="is_all_block" 

								value="1"<?php if ($_smarty_tpl->tpl_vars['map_configs']->value['is_all_block'] == '1') {?> checked<?php }?>>

							<span class="slider round"></span>

						</label>

						<span class="text-muted">tất cả block</span>

					</div>

				</div>

			</div>

		</div>

		<div class="modal-footer">

			<button type="button" class="btn btn-success pull-right" stock_shape_id="<?php echo $_smarty_tpl->tpl_vars['stock_shape_id']->value;?>
" 

				onClick="$Core.project.map_save_config(this, event)" >Cập nhật</button>

			<button type="button" class="btn btn-default mr-2 pull-right" data-dismiss="modal">Đóng</button>

		</div>

		

	</form>

</div>

<?php }
}
