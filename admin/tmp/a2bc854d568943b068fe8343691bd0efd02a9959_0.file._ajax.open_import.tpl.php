<?php
/* Smarty version 3.1.33, created on 2026-07-21 08:56:29
  from '/www/wwwroot/skyrealty.c-a.vn/admin/application/views/profile/_ajax.open_import.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a5ed1cd6b3ae7_59079877',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2bc854d568943b068fe8343691bd0efd02a9959' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/admin/application/views/profile/_ajax.open_import.tpl',
      1 => 1783675937,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a5ed1cd6b3ae7_59079877 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-dialog" style="width:540px">
	<div class="modal-content">
		<div class="modal-header">
			<a href="javascript:void(0)" class="closeEv close_pop close"><span>×</span></a>
			<h3 class="modal-title"><strong>Import nhân sự từ Google Sheet</strong></h3>
		</div>
		<form method="POST" action="" id="form_profile_import">
			<div class="modal-body">
				<div class="form-group">
					<label class="col-form-label">Link Google Sheet <span class="text-red">*</span></label>
					<input type="text" name="sheet_url" class="form-control" placeholder="https://docs.google.com/spreadsheets/d/..../edit#gid=0" />
					<small class="text-muted">Sheet phải chia sẻ công khai (Bất kỳ ai có đường liên kết). Chọn đúng tab qua <b>gid</b> trên link.</small>
				</div>
				<div class="form-group">
					<label class="col-form-label">Mật khẩu mặc định cho tài khoản mới</label>
					<input type="text" name="default_pass" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['default_pass']->value;?>
" />
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-success pull-right" onClick="read_import(this, event)">Tải &amp; chọn cột</button>
				<button type="button" class="btn btn-default mr-half pull-right" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Close');?>
</button>
			</div>
		</form>
	</div>
</div>
<?php }
}
