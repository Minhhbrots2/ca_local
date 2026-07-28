<?php
/* Smarty version 3.1.33, created on 2026-07-23 14:32:05
  from '/www/wwwroot/skyrealty.c-a.vn/admin/application/views/stock/_ajax.open_import_file.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a61c375b65971_54229140',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8323b17788949e0342a6ae4803b8013b0c0d0f72' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/admin/application/views/stock/_ajax.open_import_file.tpl',
      1 => 1783314598,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a61c375b65971_54229140 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-dialog" style="width:375px">

	<div class="modal-content">

		<div class="modal-header"> 

			<a href="javascript:void();" class="closeEv close_pop close"><span>×</span></a> 

			<h3 class="modal-title"><strong>Import File</strong></h3>

		</div>

		<form method="POST" action="" enctype="multipart/form-data">

			<div class="modal-body">

				<div class="form-group">

					<label class="col-form-label">File đính kèm<span class="text-red">*</span></label>

					<input type="file" name="attachment" class="form-control" />

				</div>

				<?php if ($_smarty_tpl->tpl_vars['stock_type']->value != @constant('_BLOCK_TYPE_HIGHLEVEL_SALE')) {?>

				<div class="form-group ">

					<label class="col-form-label">Dự án<span class="text-red">*</span></label>

					<select name="project_id" class="form-control otherwise required">

						<option value="0">Chọn dự án</option>

						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_projects']->value, '_project', false, NULL, 'i', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_project']->value) {
?>

						<option value="<?php echo $_smarty_tpl->tpl_vars['_project']->value['project_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_project']->value['title'];?>
</option>

						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

					</select>

				</div>

				<?php }?>

			</div>

			<div class="modal-footer">

				<button type="button" class="btn btn-success pull-right" onClick="start_import_file(this, event)" 

				tp="<?php echo $_smarty_tpl->tpl_vars['tp']->value;?>
" stock_type="<?php echo $_smarty_tpl->tpl_vars['stock_type']->value;?>
" project_id="<?php echo $_smarty_tpl->tpl_vars['project_id']->value;?>
" block_id="<?php echo $_smarty_tpl->tpl_vars['block_id']->value;?>
" building_id="<?php echo $_smarty_tpl->tpl_vars['building_id']->value;?>
"><?php if ($_smarty_tpl->tpl_vars['tp']->value == 'blank') {?>Upload<?php } else { ?>Import<?php }?></button>

				<button type="button" class="btn btn-default mr-half pull-right" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Close');?>
</button>

			</div>

		</form>

	</div>

</div><?php }
}
