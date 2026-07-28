<?php
/* Smarty version 3.1.33, created on 2026-07-06 17:22:54
  from '/www/wwwroot/skyrealty.futureglobal.vn/admin/application/views/_footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a4b81fe8fe8c1_17260330',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3744690222b6119c4d8e43a5c9040c1aca9e410' => 
    array (
      0 => '/www/wwwroot/skyrealty.futureglobal.vn/admin/application/views/_footer.tpl',
      1 => 1783330803,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a4b81fe8fe8c1_17260330 (Smarty_Internal_Template $_smarty_tpl) {
?>		
	</div>
	<div class="clearfix"></div>
	<div id="page-footer">
		Powered by <?php echo @constant('BRAND_NAME');?>
 &copy; 2023-<?php echo date('Y');?>
<br />
		Developed by Future Tech. Email: <a href="mailto:info@futurehomes.com">info@futurehomes.com</a>.
	</div>	       
</div>
<form class="form-upload d-none" method="post" action="" enctype="multipart/form-data">
	<input type="file" name="attachment" class="selectFile" />
</form>
<div id="ajax_loading"></div>

<?php echo '<script'; ?>
 type="text/javascript">
	$.feedback({
		ajaxURL: path_ajax_script+'/feedback.cfg',
		html2canvasURL: 'html2canvas.min.js'
	});
<?php echo '</script'; ?>
>
<?php }
}
