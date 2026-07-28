<?php
/* Smarty version 3.1.33, created on 2026-07-24 11:57:47
  from '/www/wwwroot/skyrealty.c-a.vn/application/views/member/_ajax.social_channels.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a62f0cb0d5dc5_99634390',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98ac0d0fdcd46f880e1cb4b92c0d9dd9368c3515' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/views/member/_ajax.social_channels.tpl',
      1 => 1783308723,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a62f0cb0d5dc5_99634390 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-dialog modal-dialog-centered" role="document">
	<form class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title"><i class="bx bx-share-alt me-1"></i> Kênh mạng xã hội</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
		</div>
		<div class="modal-body">
			<div id="social_channels_<?php echo $_smarty_tpl->tpl_vars['_profile_id']->value;?>
" class="social-channels-container">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['social_channels']->value, '_oSC');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oSC']->value) {
?>
				<div class="social-channel-row d-flex gap-2 align-items-center mb-2">
					<select class="form-select form-control" name="category" style="width:150px;flex:0 0 150px">
						<option value="tiktok" <?php if ($_smarty_tpl->tpl_vars['_oSC']->value['category'] == 'tiktok') {?>selected<?php }?>>TikTok</option>
						<option value="youtube" <?php if ($_smarty_tpl->tpl_vars['_oSC']->value['category'] == 'youtube') {?>selected<?php }?>>Youtube</option>
						<option value="fanpage" <?php if ($_smarty_tpl->tpl_vars['_oSC']->value['category'] == 'fanpage') {?>selected<?php }?>>Fanpage</option>
						<option value="facebook" <?php if ($_smarty_tpl->tpl_vars['_oSC']->value['category'] == 'facebook') {?>selected<?php }?>>Facebook</option>
					</select>
					<input type="text" class="form-control" name="title" value="<?php echo $_smarty_tpl->tpl_vars['_oSC']->value['title'];?>
" placeholder="Tiêu đề" style="flex:1">
					<input type="text" class="form-control" name="link" value="<?php echo $_smarty_tpl->tpl_vars['_oSC']->value['link'];?>
" placeholder="Link" style="flex:2">
					<a href="javascript:void(0);" class="btn btn-icon btn-outline-danger" onclick="$(this).parent().remove()"><i class="bx bx-trash"></i></a>
				</div>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
			<div class="mt-3">
				<a href="javascript:void(0);" profile_id="<?php echo $_smarty_tpl->tpl_vars['_profile_id']->value;?>
" onclick="$Core.member.add_social_row(this,event)" class="btn btn-outline-secondary">
					<i class="bx bx-plus"></i> Thêm dòng mới
				</a>
			</div>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Đóng</button>
			<button type="button" class="btn btn-primary" onclick="$Core.member.save_social_channels(this,event)" profile_id="<?php echo $_smarty_tpl->tpl_vars['_profile_id']->value;?>
">
				<i class="bx bx-save me-1"></i> Lưu lại
			</button>
		</div>
	</form>
</div>
<?php }
}
