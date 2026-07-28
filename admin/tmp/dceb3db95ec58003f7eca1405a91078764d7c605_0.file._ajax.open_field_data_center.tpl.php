<?php
/* Smarty version 3.1.33, created on 2026-02-27 12:04:36
  from '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/setting/_ajax.open_field_data_center.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_69a125e48a1fb6_28263017',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dceb3db95ec58003f7eca1405a91078764d7c605' => 
    array (
      0 => '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/setting/_ajax.open_field_data_center.tpl',
      1 => 1744086385,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69a125e48a1fb6_28263017 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-dialog modal-sm" style="max-width: 600px">
	<div class="modal-content">
		<div class="modal-header"> 
			<a href="javascript:void();" class="closeEv close_pop close"><span>×</span></a> 
			<h3 class="modal-title"><strong><?php echo $_smarty_tpl->tpl_vars['titlePage']->value;?>
</strong></h3>
		</div>
		<form method="post" action="" enctype="multipart/form-data">
			<div class="modal-body">
				<div class="form-row">
					<div class="col-md-12">
						<div class="form-group">
							<label class="form-label">Tiêu đề</label>
							<input class="form-control required" placeholder="Tiêu đề" name="title" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
" />
						</div>
					</div>			
					<div class="col-md-12">						
						<div class="form-group">
							<label class="form-label">Code</label>
							<input class="form-control required" placeholder="Code" name="code" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['code'];?>
" />
						</div>
					</div>
				</div>
				<div class="form-group form-row">
					<label class="col-md-3 col-form-label">Mặc định</label>
					<div class="col-md-6">
						<label class="switch">
							<input type="checkbox" name="is_default" value="1" <?php if ($_smarty_tpl->tpl_vars['oneItem']->value['is_default'] == 1) {?>checked<?php }?>>
							<span class="slider round"></span>
						</label>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" onClick="$Core.property.save_field_data_center(this, event)" field_data_center_id="<?php echo $_smarty_tpl->tpl_vars['field_data_center_id']->value;?>
" class="btn btn-success" data-action="save">
					<span>Lưu lại</span>
				</button>
				<button type="button" class="btn btn-default mr-half pull-right" data-dismiss="modal">
					<span>Đóng</span>
				</button>
			</div>
		</form>
	</div>
</div>
<?php }
}
