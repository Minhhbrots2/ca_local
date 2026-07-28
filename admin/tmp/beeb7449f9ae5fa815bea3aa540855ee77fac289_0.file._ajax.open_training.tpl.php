<?php
/* Smarty version 3.1.33, created on 2026-07-27 14:18:00
  from '/www/wwwroot/skyrealty.c-a.vn/admin/application/views/training/_ajax.open_training.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a670628463953_21476641',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'beeb7449f9ae5fa815bea3aa540855ee77fac289' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/admin/application/views/training/_ajax.open_training.tpl',
      1 => 1783314600,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a670628463953_21476641 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-dialog modal-sm modal-dialog-centered">

	<div class="modal-content">

		<div class="modal-header"> 

			<a href="javascript:void();" class="closeEv close close_pop"><span>×</span></a> 

			<h3 class="modal-title"><strong>Tạo khóa học</strong></h3>

		</div>

		<form action="" method="post" id="frmIssue" encrupt="miltipart/form-data">

			<div class="modal-body">

				<div class="form-group form-row">

					<label class="col-md-12 col-form-label">Tên khóa học*</label>

					<div class="col-xs-12">

						<input type="text" class="form-control form_field required" placeholder="Nhập tên khóa học" name="title" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
">

					</div>

				</div>

			</div>

			<div class="modal-footer">

				<input type="hidden" name="field_id" value="<?php echo $_smarty_tpl->tpl_vars['field_id']->value;?>
">

				<button type="button" class="btn btn btn-primary" onClick="$Core.training.addTraining(this,event)" data-type='_SAVE'>Tạo</button>

			</div>

		</form>

	</div>

</div>

<?php }
}
