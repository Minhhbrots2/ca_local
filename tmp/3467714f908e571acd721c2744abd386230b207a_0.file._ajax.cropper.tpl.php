<?php
/* Smarty version 3.1.33, created on 2026-07-24 14:00:42
  from '/www/wwwroot/skyrealty.c-a.vn/application/views/member/_ajax.cropper.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a630d9add9086_47020686',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3467714f908e571acd721c2744abd386230b207a' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/views/member/_ajax.cropper.tpl',
      1 => 1783308725,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a630d9add9086_47020686 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-dialog modal-xxs">
	<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Crop image');?>
</h5>
		</div>
		<form method="post" id="frmCropper" enctype="multipart/form-data">
			<div class="modal-body">
				<img id="cropper_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" class="w-100" style="min-height:300px" src="<?php echo $_smarty_tpl->tpl_vars['objectUrl']->value;?>
" />
				<input type="hidden" id="cropper-width-<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" value="0" />
				<input type="hidden" id="cropper-height-<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" value="0" />
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-warning" data-bs-dismiss="modal">
					<i class="icon-retweet icon-white"></i> <span> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Close');?>
</span>
				</button>
				<button type="button" class="btn btn-primary ui-cropper-tool" tour_id="<?php echo $_smarty_tpl->tpl_vars['tour_id']->value;?>
" data-method="getCroppedCanvas">
					<i class="icon-ok icon-white"></i> <span> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Save');?>
</span>
				</button>
			</div>
		</form>
	</div>
</div>

<style type="text/css">
	.cropper-view-box{
		border-radius:50%;
		-moz-border-radius:50%;
		-webkit-border-radius:50%;
		-khtml-border-radius:50%;
	}
</style>
<?php }
}
