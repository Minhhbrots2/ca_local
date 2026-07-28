<?php
/* Smarty version 3.1.33, created on 2025-10-27 15:46:11
  from '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/_footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_68ff3153c96d37_71725424',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1cbc85e9820fae556110f8d8c7633a2c810f91a4' => 
    array (
      0 => '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/_footer.tpl',
      1 => 1730083834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68ff3153c96d37_71725424 (Smarty_Internal_Template $_smarty_tpl) {
?>		
	</div>
	<div class="clearfix"></div>
	<div id="page-footer">
		Powered by Future Homes &copy; 2023-<?php echo date('Y');?>
<br />
		Developed by Future Homes Technical Team. Email: <a href="mailto:info@futurehomes.com">info@futurehomes.com</a>.
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
