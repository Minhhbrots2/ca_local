<?php
/* Smarty version 3.1.33, created on 2026-05-08 11:35:36
  from '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/profile/_ajax.cropper.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_69fd6818820b08_17978800',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b51fbeab1646c90d7b887fefbe255ee6a7b2a7e3' => 
    array (
      0 => '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/profile/_ajax.cropper.tpl',
      1 => 1730083834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69fd6818820b08_17978800 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Crop image');?>
</h4>
		</div>
		<form method="post" id="frmCropper" enctype="multipart/form-data">
			<div class="modal-body">
				<div class="row">
					<div class="col-xs-12 col-md-8">
						<div class="cropper-wrap">
							<img id="cropper" class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['objectUrl']->value;?>
" />
						</div>
					</div>
					<div class="col-xs-12 col-md-4">
						<ul class="ui-cropper-tools">
							<li><a class="ui-cropper-tool ui-rotate-left-right" data-method="scaleX" data-option="-1" href="javascript:void(0)">
								<span class="ico"></span> 
								<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Rotate left and right');?>

							</a></li>
							<li><a class="ui-cropper-tool ui-rotate-up-bottom" data-method="scaleX" data-option="-1" href="javascript:void(0)">
								<span class="ico"></span> 
								<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Rotate up bottom');?>

							</a></li>
							<li><a class="ui-cropper-tool ui-rotate-left-side" data-method="move" data-option="-10" data-second-option="0" href="javascript:void(0)">
								<span class="ico"></span> 
								<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Left side');?>

							</a></li>
							<li><a class="ui-cropper-tool ui-rotate-right-side" data-method="move" data-option="10" data-second-option="0" href="javascript:void(0)">
								<span class="ico"></span> 
								<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Right side');?>

							</a></li>
							<li>
								<div class="form-row">
									<div class="col-md-6">
										<label class="col-form-label">Width</label>
										<input type="text" class="form-control numberonly" id="cropper-width" placeholder="width" value="0" />
									</div>
									<div class="col-md-6">
										<label class="col-form-label">Height</label>
										<input type="text" class="form-control numberonly" id="cropper-height" placeholder="height" value="0" />
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="reset" class="btn btn-warning" data-dismiss="modal">
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
