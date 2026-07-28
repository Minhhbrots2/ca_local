<?php
/* Smarty version 3.1.33, created on 2026-07-22 20:55:51
  from '/www/wwwroot/skyrealty.c-a.vn/application/views/home/_ajax.load_top_share.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a60cbe7aed147_21277369',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b3bb61888805a29ddd68140847834565aae7c9c' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/views/home/_ajax.load_top_share.tpl',
      1 => 1783283460,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a60cbe7aed147_21277369 (Smarty_Internal_Template $_smarty_tpl) {
if (!empty($_smarty_tpl->tpl_vars['list_shares']->value)) {?>
<div class="owl-carousel owl-share-slider">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_shares']->value, '_oShare');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oShare']->value) {
?>
	<div class="box_img bg-fill radius-3 overflow-hidden position-relative" data-caption="<?php echo $_smarty_tpl->tpl_vars['_oShare']->value['title'];?>
" data-fancybox="gallery" data-src="<?php echo $_smarty_tpl->tpl_vars['_oShare']->value['image'];?>
" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getUrlImageFH($_smarty_tpl->tpl_vars['_oShare']->value['image'],320,480);?>
);">
		<?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?>
		<div class="position-absolute bottom-0 w-100 p-1 figure">
			<h5 class="fs-11 text-white mb-0"><?php echo $_smarty_tpl->tpl_vars['_oShare']->value['full_name'];?>
</h5>
			<span class="text-white fs-10">
				<i class='bx bx-time'></i>
				<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getTimeAgo($_smarty_tpl->tpl_vars['_oShare']->value['reg_date']);?>

			</span>
		</div>
		<?php } else { ?>
		<div class="w-100 position-absolute bottom-0 p-2 figure">
			<h5 class="fs-11 text-white mb-1"><?php echo $_smarty_tpl->tpl_vars['_oShare']->value['full_name'];?>
</h5>
			<span class="text-muted fs-10">
				<i class='bx bx-time fs-10'></i>
				<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getTimeAgo($_smarty_tpl->tpl_vars['_oShare']->value['reg_date']);?>

			</span>			
		</div>
		<?php }?>
	</div>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php if (!empty($_smarty_tpl->tpl_vars['list_blanks']->value)) {?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_blanks']->value, '_oBlank');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oBlank']->value) {
?>
		<div class="box_img d-flex flex-column align-items-center justify-content-center w-100 h-px-<?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?>90<?php } else { ?>125<?php }?> text-center rounded-1 border p-2 cursor-pointer" onclick="$Core.share.open(this, event)" holderg="share" share_id="0" action="_add">
			<div class="text-center">
				<i class="bx bx-image fs-30"></i>
			</div>
			<span class="text-muted lh-base fs-10">Thêm ảnh tiếp khách</span>
		</div>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }?>
</div>
<?php } else { ?>
<div class="owl-carousel owl-share-slider">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_blanks']->value, '_oBlank');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oBlank']->value) {
?>
	<div class="box_img d-flex flex-column align-items-center justify-content-center w-100 text-center rounded-1 border p-2 cursor-pointer" onclick="$Core.share.open(this, event)" 
	holderg="share" share_id="0" action="_add">
		<div class="text-center">
			<i class="bx bx-image-add fs-30"></i>
		</div>
		<span class="text-muted lh-base fs-10">Thêm ảnh tiếp khách</span>
	</div>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }
echo '<script'; ?>
 type="text/javascript">
	var number_item = '<?php echo $_smarty_tpl->tpl_vars['number_item']->value;?>
';
<?php echo '</script'; ?>
>

<style type="text/css">
	.box_img{ height:180px; }
	@media screen and (max-width:1600px){
		.box_img{ height:125px; }
	}
	.bg-fill{
		background-size: cover;
		background-position: center; 
		background-repeat:no-repeat;
	}
	.figure{ 
		background: linear-gradient(0deg,rgba(0,0,0,0.60) 0%, rgba(0,0,0,0.00) 100%); 
		pointer-events: none;
	}
</style>
<?php }
}
