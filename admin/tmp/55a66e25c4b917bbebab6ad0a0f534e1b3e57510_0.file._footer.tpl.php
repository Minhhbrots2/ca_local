<?php
/* Smarty version 3.1.33, created on 2026-07-06 10:12:59
  from '/www/wwwroot/ca.futurehomes.vn/admin/application/views/_footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a4b1d3b35e6d1_02867869',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55a66e25c4b917bbebab6ad0a0f534e1b3e57510' => 
    array (
      0 => '/www/wwwroot/ca.futurehomes.vn/admin/application/views/_footer.tpl',
      1 => 1781150602,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a4b1d3b35e6d1_02867869 (Smarty_Internal_Template $_smarty_tpl) {
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
