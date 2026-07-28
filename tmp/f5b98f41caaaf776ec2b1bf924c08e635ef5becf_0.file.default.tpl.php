<?php
/* Smarty version 3.1.33, created on 2026-07-10 15:37:26
  from '/www/wwwroot/skyrealty.c-a.vn/application/views/map/default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a50af468b09d4_19029482',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5b98f41caaaf776ec2b1bf924c08e635ef5becf' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/views/map/default.tpl',
      1 => 1783308743,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a50af468b09d4_19029482 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" type="text/css" href="<?php echo URL_CSS;?>
/leaflet/leaflet.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" />

<link rel="stylesheet" href="<?php echo URL_CSS;?>
/leaflet/leaflet.draw.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"/>

<link rel="stylesheet" href="<?php echo URL_CSS;?>
/leaflet/leaflet-routing-machine.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" />

<?php echo '<script'; ?>
 src="<?php echo URL_JS;?>
/leaflet/leaflet.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo URL_JS;?>
/leaflet/leaflet.draw.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo URL_JS;?>
/leaflet/Path.Drag.min.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
> 

<?php echo '<script'; ?>
 src="<?php echo URL_JS;?>
/leaflet/leaflet-routing-machine.min.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>

<div class="container-xxl flex-grow-1 pt-2 container-p-y">

	<div class="row">

		<div class="d-flex justify-content-between align-items-center header-page">

			<div class="d-flex flex-column">

				<h5 class="fw-bold mb-1">Bản đồ vị trí dự án</h5> 

				<span class="text-muted">Vị trí dự án bất động sản.</span>

			</div>

			<div class="mt-2">

				<button data-toggle="ripple" class="btn btn-outline-default dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="inside" aria-haspopup="true" aria-expanded="false">Chọn dự án (<?php echo count($_smarty_tpl->tpl_vars['info_locations']->value);?>
)</button>

				<?php if (!empty($_smarty_tpl->tpl_vars['info_locations']->value)) {?>

				<div class="dropdown-menu dropdown-menu-end" style="z-index: 1003;">

					<div class="p-3 router" style="height: 50vh;overflow: auto;">

						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['info_locations']->value, '_oProject', false, 'key', 'loop', array (
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['_oProject']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_loop']->value['index']++;
?>

						<h3 class="card-title mb-3 fs-5 item-router" data-index="<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_loop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_loop']->value['index'] : null);?>
" data-map-zoom="<?php echo $_smarty_tpl->tpl_vars['_oProject']->value['infomation_ex']['map_zoom'];?>
" style="cursor: pointer;"><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
 - <?php echo $_smarty_tpl->tpl_vars['_oProject']->value['title'];?>
</h3>

						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

					</div>

				</div>

				<?php }?>

			</div>

		</div>

    </div>

	<div class="mt-3 box-map">

		<div class="position-relative w-100 h-100">

			<div class="position-relative min-height-500 zindex-1" id="map" 

				data-location="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['location']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" data-map-zoom="<?php echo $_smarty_tpl->tpl_vars['map_zoom']->value;?>
"></div>

		</div>

	</div>

</div>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['info_locations']->value, '_oProject');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oProject']->value) {
?>

<div class="box-info-project card w-px-250 h-100 no-shadow project-<?php echo $_smarty_tpl->tpl_vars['_oProject']->value['project_id'];?>
 d-none">

	<a class="d-block" href="<?php echo $_smarty_tpl->tpl_vars['clsProject']->value->getLinkDetail($_smarty_tpl->tpl_vars['_oProject']->value['project_id'],0,0,'overview',$_smarty_tpl->tpl_vars['_oProject']->value);?>
" title="<?php echo $_smarty_tpl->tpl_vars['_oProject']->value['title'];?>
">

		<div class="position-relative text-white mb-3">

			<span class="position-absolute top-px-20 right-px-20 bg-success rounded-pill py-1 px-3 fs-12">Đang mở bán</span>

			<img class="card-img-top img-project img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['_oProject']->value['image'];?>
" style="width: 100%; width: 100%; height: 177px;">

		</div>

		<div class="d-flex align-items-center justify-content-between">

			<div class="awe__project-info">

				<h4 class="card-title mb-2">

					<span class="text-dark fw-semibold"><?php echo $_smarty_tpl->tpl_vars['_oProject']->value['title'];?>
</span>

				</h4>

				<p class="text-dark mb-1">

					<i class='bx bx-map'></i> <?php echo $_smarty_tpl->tpl_vars['_oProject']->value['infomation_ex']['address'];?>


				</p>

				<?php if (!empty($_smarty_tpl->tpl_vars['_oProject']->value['apartment'])) {?>

				<div class="d-flex gap-1 mb-1 align-items-center text-muted">

					<i class='bx bx-home-alt'></i> Quy mô: <?php echo $_smarty_tpl->tpl_vars['_oProject']->value['apartment'];?>


				</div>

				<?php }?>

				<?php if (!empty($_smarty_tpl->tpl_vars['_oProject']->value['arcreage'])) {?>

				<div class="d-flex gap-1 align-items-center text-muted">

					<i class='bx bx-code'></i> Diện tích: <?php echo $_smarty_tpl->tpl_vars['_oProject']->value['arcreage'];?>


				</div>

				<?php }?>

				<div class="d-flex group-button-detail mt-2 align-items-center gap-2">

					<a href="<?php echo $_smarty_tpl->tpl_vars['clsProject']->value->getLinkDetail($_smarty_tpl->tpl_vars['_oProject']->value['project_id'],0,0,'overview',$_smarty_tpl->tpl_vars['_oProject']->value);?>
" class="btn flex-fill btn-link">

						<i class='bx bx-right-arrow-alt'></i>Thông tin</a>

					<a href="<?php echo $_smarty_tpl->tpl_vars['clsProject']->value->getLinkInfo($_smarty_tpl->tpl_vars['_oProject']->value['project_id'],0,0,'_map');?>
" class="btn flex-fill btn-link">

						<i class='bx bx-right-arrow-alt'></i>Chi tiết</a>

				</div>

			</div>

		</div>

	</a>

</div>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php }
}
