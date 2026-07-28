<?php
/* Smarty version 3.1.33, created on 2026-07-11 09:24:17
  from '/www/wwwroot/skyrealty.c-a.vn/application/views/ajax/_ajax.policy.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a51a951e64338_71763097',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cda64472f733c7078c7e7cb5711f8c372fb761ad' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/views/ajax/_ajax.policy.tpl',
      1 => 1783308688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a51a951e64338_71763097 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['tp']->value == '_update') {?>
<div class="modal-dialog modal-xl">
	<form class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title">Cập nhật chính sách bán hàng</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
			<div class="form-group form-row mb-2">
				<label class="col-12 col-md-3 col-form-label">Cho phép hiển thị</label>
				<div class="col-12 col-md-9">
					<label class="switch">
						<input type="checkbox" name="status"<?php if ($_smarty_tpl->tpl_vars['sale_policy']->value['status'] == '1') {?> checked<?php }?> value="1" />
						<span class="slider round"></span>
					</label>
				</div>
			</div>
			<div class="form-group mb-3">
				<label class="form-label">Nội dung</label>
				<div class="clearfix"></div>
				<textarea id="tinyMCE<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" class="form-control isoTextArea" data-name="policy" rows="2"><?php echo $_smarty_tpl->tpl_vars['sale_policy']->value['policy'];?>
</textarea>
			</div>
		</div>
		<div class="modal-footer">
			<input type="hidden" name="submit" value="Update" />
			<button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
			<button type="button" onClick="$Core.helper.update_policy(this, event)" class="btn btn-primary">Lưu lại</button>
		</div>
	</form>
</div>
<?php } else { ?>
<div class="modal-dialog modal-standard">
	<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title">Chính sách bán hàng <br />
				<span class="text-muted fs-12">
					<i style="transform:translateY(5px);" class="material-icons-outlined">update</i>
					<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->convertTimeToText($_smarty_tpl->tpl_vars['sale_policy']->value['upd_date'],true);?>

				</span>
			</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body mr-1 p-0">
			<div class="tinyContent p-3">
				<?php echo $_smarty_tpl->tpl_vars['sale_policy']->value['policy'];?>

			</div>
		</div>
	</div>
</div>
<?php }
}
}
