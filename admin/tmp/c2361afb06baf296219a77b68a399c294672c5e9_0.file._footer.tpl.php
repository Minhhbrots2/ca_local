<?php
/* Smarty version 3.1.33, created on 2026-07-27 18:58:34
  from '/www/wwwroot/skyrealty.c-a.vn/admin/application/views/_footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a6747ea060d69_58746483',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2361afb06baf296219a77b68a399c294672c5e9' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/admin/application/views/_footer.tpl',
      1 => 1783676159,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a6747ea060d69_58746483 (Smarty_Internal_Template $_smarty_tpl) {
?>		
	</div>
	<div class="clearfix"></div>
	<div id="page-footer">
		Powered by Future Tech &copy; 2023-<?php echo date('Y');?>
<br />
	</div>	       
</div>
<form class="form-upload d-none" method="post" action="" enctype="multipart/form-data">
	<input type="file" name="attachment" class="selectFile" />
</form>
<div id="ajax_loading"></div>

<!--<?php echo '<script'; ?>
 type="text/javascript">
	$.feedback({
		ajaxURL: path_ajax_script+'/feedback.cfg',
		html2canvasURL: 'html2canvas.min.js'
	});
<?php echo '</script'; ?>
>-->
<?php }
}
