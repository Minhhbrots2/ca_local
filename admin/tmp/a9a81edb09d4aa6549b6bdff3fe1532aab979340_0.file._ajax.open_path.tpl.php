<?php
/* Smarty version 3.1.33, created on 2026-06-12 10:03:24
  from '/www/wwwroot/ca.futurehomes.vn/admin/application/views/learning_path/_ajax.open_path.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a2b76fcc36089_75466251',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9a81edb09d4aa6549b6bdff3fe1532aab979340' => 
    array (
      0 => '/www/wwwroot/ca.futurehomes.vn/admin/application/views/learning_path/_ajax.open_path.tpl',
      1 => 1781167788,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a2b76fcc36089_75466251 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-dialog modal-sm modal-dialog-centered">
	<div class="modal-content">
		<div class="modal-header">
			<a href="javascript:void();" class="closeEv close close_pop"><span>×</span></a>
			<h3 class="modal-title"><strong>Tạo lộ trình học</strong></h3>
		</div>
		<form action="" method="post" id="frmIssue" encrupt="miltipart/form-data">
			<div class="modal-body">
				<div class="form-group form-row">
					<label class="col-md-12 col-form-label">Tên lộ trình*</label>
					<div class="col-xs-12">
						<input type="text" class="form-control form_field required" placeholder="Nhập tên lộ trình" name="title" value="">
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn btn-primary" onClick="$Core.learning_path.addPath(this,event)" data-type='_SAVE'>Tạo</button>
			</div>
		</form>
	</div>
</div>
<?php }
}
