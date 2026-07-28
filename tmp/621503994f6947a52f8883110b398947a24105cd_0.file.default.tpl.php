<?php
/* Smarty version 3.1.33, created on 2026-07-21 10:56:25
  from '/www/wwwroot/skyrealty.c-a.vn/application/views/viewer/default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a5eede98abcf2_55210199',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '621503994f6947a52f8883110b398947a24105cd' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/views/viewer/default.tpl',
      1 => 1783308728,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a5eede98abcf2_55210199 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container py-2">

	<div class="row"><div class="col-xs-12 col-md-8 offset-lg-2">

		<div id="slider" class="owl-carousel">

		<?php if (!empty($_smarty_tpl->tpl_vars['list_files']->value)) {?>

			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_files']->value, 'path', false, 'id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['path']->value) {
?>

			<div class="item">

				<div class="bg-lightest<?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?> p-1<?php } else { ?> p-2<?php }?> text-center overflow-hidden">

					<img src="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->genGoogleURL($_smarty_tpl->tpl_vars['id']->value);?>
" class="img-fluid radius-3" style="max-height:calc(100% - 80px)" />

					<div class="py-2"><?php echo $_smarty_tpl->tpl_vars['path']->value;?>
</div>

				</div>

			</div>

			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

		<?php }?>

		</div>

	</div></div>

</div>



<?php echo '<script'; ?>
 type="text/javascript">

	$('#slider').owlCarousel({

		items: 1,

		margin: 0,

		pagination: true,

		slideSpeed: 400,

		addClassActive: true,

		scrollPerPage: false,

		touchDrag: true,

		autoplay: false,

		autoHeight: false,

		nav: true,

		dots: false,

		loop: false,

		lazyLoad:false,

		responsive: {

			0: {items: 1},

			480: {items: 1},

			768: {items: 1},

			1200: {items: 1}

		},

		navText: [

			'<i class=\'fa fa-angle-left\'></i>',

			'<i class=\'fa fa-angle-right\'></i>'

		]

	});

<?php echo '</script'; ?>
>

<?php }
}
