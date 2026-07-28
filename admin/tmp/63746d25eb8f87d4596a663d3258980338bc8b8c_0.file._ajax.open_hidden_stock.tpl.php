<?php
/* Smarty version 3.1.33, created on 2026-03-14 15:52:59
  from '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/setting/_ajax.open_hidden_stock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_69b521eb57f6b4_81001129',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63746d25eb8f87d4596a663d3258980338bc8b8c' => 
    array (
      0 => '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/setting/_ajax.open_hidden_stock.tpl',
      1 => 1742876919,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69b521eb57f6b4_81001129 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-dialog modal-md" style="max-width: 600px">
	<div class="modal-content">
		<div class="modal-header"> 
			<a href="javascript:void();" class="closeEv close_pop close"><span>×</span></a> 
			<h3 class="modal-title"><strong><?php echo $_smarty_tpl->tpl_vars['titlePage']->value;?>
</strong></h3>
		</div>
		<form method="post" action="" enctype="multipart/form-data">
			<div class="modal-body">
				<div class="form-row">
					<div class="<?php if (!empty($_smarty_tpl->tpl_vars['oneItem']->value)) {?>col-md-12<?php } else { ?>col-md-8<?php }?>">
						<div class="form-group">
							<label class="form-label">Tiêu đề</label>
							<input class="form-control required" placeholder="Tiêu đề" name="title" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
" />
						</div>
					</div>			
					<div class="col-md-4 <?php if (!empty($_smarty_tpl->tpl_vars['oneItem']->value)) {?>d-none<?php }?>">						
						<div class="form-group">
							<label class="form-label">Site</label>
							<select name="site" class="form-control">
								<option value="_FH" <?php if ($_smarty_tpl->tpl_vars['oneItem']->value['site'] == '_FH') {?>selected<?php }?>>CA</option>
								<option value="_MOC" <?php if ($_smarty_tpl->tpl_vars['oneItem']->value['site'] == '_MOC') {?>selected<?php }?>>MOC</option>
							</select>
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-6">						
						<div class="form-group">
							<label class="form-label">Dự án</label>
							<select name="project_id" onchange="$Core.property.select_block(this, event)" toid="slb_Block_Id_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" class="form-control">
								<option value="0">Chọn dự án</option>
								<?php echo $_smarty_tpl->tpl_vars['clsProject']->value->getSelectOptions($_smarty_tpl->tpl_vars['oneItem']->value['project_id']);?>

							</select>
						</div>
					</div>
					<div class="col-md-6">						
						<div class="form-group">
							<label class="form-label">Phân khu</label>
							<select class="form-control" name="block_id" id="slb_Block_Id_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">
								<?php echo $_smarty_tpl->tpl_vars['clsProperty']->value->getSelectByPropertyOrigin('_BLOCK',$_smarty_tpl->tpl_vars['project_id']->value,$_smarty_tpl->tpl_vars['oneItem']->value['block_id']);?>

							</select>
						</div>
					</div>
				</div>
				<div class="form-group form-row">
					<label class="col-md-2 col-form-label">Là quỹ Vin</label>
					<div class="col-md-10">
						<label class="switch">
							<input type="checkbox" name="is_vin" value="1" <?php if ($_smarty_tpl->tpl_vars['oneItem']->value['is_vin'] == 1) {?>checked<?php }?>>
							<span class="slider round"></span>
						</label>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" onClick="$Core.property.save_hidden_stock(this, event)" agency_hidden_stock_id="<?php echo $_smarty_tpl->tpl_vars['agency_hidden_stock_id']->value;?>
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
