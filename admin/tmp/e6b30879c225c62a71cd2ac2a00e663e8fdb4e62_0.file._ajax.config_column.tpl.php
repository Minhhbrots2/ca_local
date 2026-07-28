<?php
/* Smarty version 3.1.33, created on 2026-07-03 10:18:53
  from '/www/wwwroot/ca.futurehomes.vn/admin/application/views/project/_ajax.config_column.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a472a1d7eec59_46079794',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6b30879c225c62a71cd2ac2a00e663e8fdb4e62' => 
    array (
      0 => '/www/wwwroot/ca.futurehomes.vn/admin/application/views/project/_ajax.config_column.tpl',
      1 => 1781150638,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a472a1d7eec59_46079794 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-dialog">

	<form class="modal-content">

		<div class="modal-header"> 

			<a href="javascript:void();" class="closeEv close_pop close"><span>×</span></a> 

			<h3 class="modal-title"><strong><?php echo $_smarty_tpl->tpl_vars['title_content']->value;?>
</strong></h3>

		</div>

		<div class="modal-body">

			<div class="form-group" style="max-height: calc(100vh - 200px);overflow-y: auto">

				<table width="100%" class="table table-vertical mb-0 table-stripped">

					<thead style="position: sticky;top: 0;background: #FFF;z-index: 2"><tr>

						<th width="5%">No.</th>

						<th width="35%">Thuộc tính</th>

						<th width="5%" class="text-center"><button type="button" class="btn btn-default" onclick="$Core.project.add_field(this,event)" _openfrom="_project" project_id="31" _holderg="_attrs">+ Thêm</button></th>

					</tr></thead>

					<tbody class="tbody_attrs connectedSortable md_sortable">

						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr_field']->value, 'title', false, 'field', 'i', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value => $_smarty_tpl->tpl_vars['title']->value) {
?>

							<?php $_smarty_tpl->_assignInScope('gId', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>

							<tr id="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" class="tr_attrs">

								<td class="text-center">

									<div class="mySortableHandler"><i class="fa fa-arrows"></i></div>

								</td>

								<td class="text-left">

									<select name="config_column[]" id="" class="form-select form-control required">

										<option value="" >--Chọn--</option>

										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lstField']->value, 'label', false, 'key', 'i', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['label']->value) {
?>

											<option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value == $_smarty_tpl->tpl_vars['key']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['label']->value;?>
</option>

										<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

									</select>

								</td>

								<td class="text-center">

									<a title="Xóa" href="javascript:void(0);" class="btn btn-default" uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" onClick="$Core.project.delete_field(this,event)"><i class="fa fa-trash"></i></a>

								</td>

							</tr>

						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

					</tbody>

				</table>

			</div>

			

		</div>

		<div class="modal-footer">

			<input type="hidden" name="block_type" value="<?php echo $_smarty_tpl->tpl_vars['block_type']->value;?>
">

			<input type="hidden" name="project_id" value="<?php echo $_smarty_tpl->tpl_vars['project_id']->value;?>
">

			<button type="button" class="btn btn-success pull-right" stock_shape_id="<?php echo $_smarty_tpl->tpl_vars['stock_shape_id']->value;?>
" 

				onClick="$Core.project.save_config(this, event)" >Cập nhật</button>

			<button type="button" class="btn btn-default mr-2 pull-right" data-dismiss="modal">Đóng</button>

		</div>

		

	</form>

</div>

<?php }
}
