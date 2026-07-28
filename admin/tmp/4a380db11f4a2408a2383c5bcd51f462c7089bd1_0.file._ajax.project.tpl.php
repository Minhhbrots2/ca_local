<?php
/* Smarty version 3.1.33, created on 2026-07-03 09:28:45
  from '/www/wwwroot/ca.futurehomes.vn/admin/application/views/project/_ajax.project.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a471e5dce32a1_46201005',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a380db11f4a2408a2383c5bcd51f462c7089bd1' => 
    array (
      0 => '/www/wwwroot/ca.futurehomes.vn/admin/application/views/project/_ajax.project.tpl',
      1 => 1781150639,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a471e5dce32a1_46201005 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header"> 
			<a href="javascript:void();" class="closeEv close_pop close"><span>×</span></a> 
			<h3 class="modal-title"><strong>Thêm mới dự án</strong></h3>
		</div>
		<form method="post" action="" enctype="multipart/form-data">
			<div class="modal-body">
				<div class="form-group">
					<label class="col-form-label">Tên dự án
						<span class="text-red">*</span>
					</label>
					<input type="text" class="form-control required" placeholder="Nhập tên dự án" name="title" />
				</div>
				<div class="form-group">
					<label class="col-form-label">Mô tả</label>
					<textarea id="adsIntro" class="form-control" name="content" rows="4"></textarea>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-success pull-right" onClick="pop_create_project(this, event)" project_id="<?php echo $_smarty_tpl->tpl_vars['project_id']->value;?>
">Tạo dự án</button>
				<button type="button" class="btn btn-default mr-half pull-right" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Close');?>
</button>
			</div>
		</form>
	</div>
</div><?php }
}
