<?php
/* Smarty version 3.1.33, created on 2026-07-22 11:36:25
  from '/www/wwwroot/skyrealty.c-a.vn/application/views/home/_ajax.email_deposit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a6048c9bb3901_63565983',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ff9ffa9f586e4c4b34e62c629006c5f951b9444' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/views/home/_ajax.email_deposit.tpl',
      1 => 1783886700,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a6048c9bb3901_63565983 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-dialog modal-ipad">
	<form class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title">
				Mẫu email xác nhận đặt cọc</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
			<?php if (!empty($_smarty_tpl->tpl_vars['message']->value)) {?>
				<div class="alert alert-warning" role="alert">Thông tin giao dịch còn thiếu: <?php echo $_smarty_tpl->tpl_vars['message']->value;?>
. <br>Hãy đọc và kiểm tra thông tin chính xác trước khi gửi tới khách hàng</div>
			<?php }?>
			<div class="position-relative mb-3">
				<label for="trans_code" class="form-label mb-1 w-100 text-main fs-5">Tiêu đề mail</label>
				<a href="javascript:void(0)" onclick="copyContentToClipboard(this, event)" data-bs-toggle="tooltip" data-bs-trigger="click" class="text-dark fs-6 position-absolute top-0 right-0" title="Sao chép tiêu đề email" aria-label="Sao chép tiêu đề email" style="right:0" toId="title_copy_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
"><i class="bx bx-copy"></i></a>
				<h2 class="content_copy mb-0 w-100 fs-5" id="title_copy_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
</h2>
			</div>
			<div class="position-relative">
				<label for="trans_code" class="form-label mb-1 w-100 text-main fs-5">Nội dung mail</label>
				<div class="content_copy" id="content_copy_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
"><?php echo html_entity_decode($_smarty_tpl->tpl_vars['content']->value);?>
</div>
				<a href="javascript:void(0)" onclick="copyContentToClipboard(this, event)" data-bs-toggle="tooltip" data-bs-trigger="click" class="text-dark fs-6 position-absolute top-0 right-0" title="Sao chép nội dung email" aria-label="Sao chép nội dung email" style="right:0" toId="content_copy_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
"><i class="bx bx-copy"></i></a>
			</div>
			<?php if (!empty($_smarty_tpl->tpl_vars['company_email']->value)) {?>
				<div class="position-relative">
					<label for="trans_code" class="form-label mb-1 w-100 text-main fs-5">Gửi email tới địa chỉ:</label>
					<div class="fs-5" id="email_copy_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['company_email']->value;?>
</div>
					<a href="javascript:void(0)" onclick="copyContentToClipboard(this, event)" data-bs-toggle="tooltip" class="text-dark fs-6 position-absolute top-0 right-0" title="Sao chép địa chỉ email" style="right:0" toId="email_copy_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
"><i class="bx bx-copy"></i></a>
				</div>
			<?php }?>
		</div>
	</form>
</div>
<?php }
}
