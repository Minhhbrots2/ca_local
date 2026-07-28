<?php
/* Smarty version 3.1.33, created on 2026-07-13 10:22:35
  from '/www/wwwroot/skyrealty.c-a.vn/application/views/home/project/default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a5459fb30edf8_61524547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '392568e57af602a54df3daeaa6fee09e13a415db' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/views/home/project/default.tpl',
      1 => 1783308698,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a5459fb30edf8_61524547 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-xxl flex-grow-1 pt-2 container-p-y">

	<nav aria-label="breadcrumb">

		<ol class="breadcrumb">

			<?php if ($_smarty_tpl->tpl_vars['show']->value == 'project') {?>

				<li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['oneProject']->value['title'];?>
</li>

			<?php } elseif ($_smarty_tpl->tpl_vars['show']->value == 'block') {?>

				<li class="breadcrumb-item">

					<a href="<?php echo $_smarty_tpl->tpl_vars['clsProject']->value->getLinkPr($_smarty_tpl->tpl_vars['project_id']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['oneProject']->value['title'];?>
</a>

				</li>

				<li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['oneBlock']->value['title'];?>
</li>

			<?php } else { ?>

				<li class="breadcrumb-item">

					<a href="<?php echo $_smarty_tpl->tpl_vars['clsProject']->value->getLinkPr($_smarty_tpl->tpl_vars['project_id']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['oneProject']->value['title'];?>
</a>

				</li>

				<li class="breadcrumb-item">

					<a href="<?php echo $_smarty_tpl->tpl_vars['clsProject']->value->getLinkBl($_smarty_tpl->tpl_vars['project_id']->value,$_smarty_tpl->tpl_vars['block_id']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['clsProperty']->value->getTitle($_smarty_tpl->tpl_vars['block_id']->value);?>
</a>

				</li>

			<?php }?>

		</ol>

	</nav>		  

	<div class="row">

		<div class="col-12 col-lg-4 col-xxl-3 order-2 order-lg-1">

			<?php if (!empty($_smarty_tpl->tpl_vars['more_information']->value['attrs'])) {?>

			<div class="card no-shadow mb-4">

				<div class="card-body">

					<small class="text-muted text-uppercase">Tổng quan</small>

					<ul class="list-unstyled fs-6 mt-3 mb-0">

						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['more_information']->value['attrs'], '_oAttr');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oAttr']->value) {
?>

						<li class="d-flex align-items-center mb-2">

							<i class="material-icons-outlined no-translate">done</i>

							<span class="fw-medium mx-2"><?php echo $_smarty_tpl->tpl_vars['_oAttr']->value['title'];?>
:</span> 

							<span><?php echo $_smarty_tpl->tpl_vars['_oAttr']->value['content'];?>
</span>

						</li>

						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

					</ul>

				</div>

			</div>

			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['show']->value != 'project') {?>

			<div class="card no-shadow mb-4">

				<div class="card-header flex-grow-0">

					<div class="d-flex">

						<div class="avatar flex-shrink-0 me-3">

							<img src="https://khudothixanhvn.com/wp-content/uploads/2021/11/vinhomes-ocean-park-logo.png" alt="User" class="rounded-circle">

						</div>

						<div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-1">

							<div class="me-2">

								<h5 class="mb-0">

									<a href="<?php echo $_smarty_tpl->tpl_vars['clsProject']->value->getLinkPr($_smarty_tpl->tpl_vars['project_id']->value);?>
" class="text-link"><?php echo $_smarty_tpl->tpl_vars['oneProject']->value['title'];?>
</a>

								</h5>

								<small class="text-muted">Cập nhật: <?php echo $_smarty_tpl->tpl_vars['clsISO']->value->convertTimeToText($_smarty_tpl->tpl_vars['oneProject']->value['upd_date'],true);?>
</small>

							</div>

						</div>

					</div>

				</div>

				<img class="img-fluid" src="<?php echo @constant('FH_URL');
echo $_smarty_tpl->tpl_vars['oneProject']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['oneProject']->value['title'];?>
">

				<div class="card-body">

					<p class="line-clamp-3"><?php echo $_smarty_tpl->tpl_vars['oneProject']->value['intro'];?>
</p>

					<div class="d-flex gap-2">

						<span class="badge bg-label-primary">Chung cư</span>

						<span class="badge bg-label-primary">Shophouse</span>

						<span class="badge bg-label-primary">Biệt thự</span>

					</div>

				</div>

			</div>

			<?php }?>

			<div class="card no-shadow mb-4">

				<div class="card-body">

					<?php if ($_smarty_tpl->tpl_vars['show']->value == 'project' || ($_smarty_tpl->tpl_vars['show']->value == 'block' && $_smarty_tpl->tpl_vars['block_type']->value == @constant('_BLOCK_TYPE_LOWFLOOR_SALE'))) {?>

					<small class="text-muted text-uppercase">Phân khu</small>

					<ul class="list-unstyled mb-4 mt-3">

						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_blocks']->value, '_oBlock', false, NULL, 'i', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oBlock']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['total'];
?>

						<li class="d-flex py-2<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['last'] : null)) {?> border-bottom<?php }?> align-items-center">

							<i class="bx bx-chevron-right me-1"></i>

							<a class="text-link fs-6" href="<?php echo $_smarty_tpl->tpl_vars['clsProject']->value->getLinkBl($_smarty_tpl->tpl_vars['project_id']->value,$_smarty_tpl->tpl_vars['_oBlock']->value['property_id']);?>
">Phân khu <?php echo $_smarty_tpl->tpl_vars['_oBlock']->value['title'];?>
</a>

						</li>

						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

					</ul>

					<?php }?>

					<?php if (($_smarty_tpl->tpl_vars['show']->value == 'block' && $_smarty_tpl->tpl_vars['block_type']->value == @constant('_BLOCK_TYPE_HIGHLEVEL_SALE')) || $_smarty_tpl->tpl_vars['show']->value == 'building') {?>

					<small class="text-muted text-uppercase">Tòa nhà</small>

					<ul class="list-unstyled mb-4 mt-3">

						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_buildings']->value, '_oBuilding', false, NULL, 'i', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oBuilding']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['total'];
?>

						<li class="d-flex py-2<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['last'] : null)) {?> border-bottom<?php }?> align-items-center">

							<i class="bx bx-chevron-right me-1"></i>

							<a class="text-link fs-6" href="<?php echo $_smarty_tpl->tpl_vars['clsProject']->value->getLinkBu($_smarty_tpl->tpl_vars['project_id']->value,$_smarty_tpl->tpl_vars['block_id']->value,$_smarty_tpl->tpl_vars['_oBuilding']->value['property_id']);?>
">Tòa nhà <?php echo $_smarty_tpl->tpl_vars['_oBuilding']->value['title'];?>
</a>

						</li>

						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

					</ul>

					<?php }?>

				</div>

			</div>

		</div>

		<div class="col-12 col-lg-8 col-xxl-9 order-1 order-xxl-2 mb-4 mb-md-0 mb-lg-0 mb-xxl-0">

			<div class="card no-shadow">

				<div class="card-header">



					<?php if ($_smarty_tpl->tpl_vars['show']->value == 'project') {?>

						<h3 class="fs-30 fw-bold mb-1"><?php echo $_smarty_tpl->tpl_vars['oneProject']->value['title'];?>
</h3>

						<p class="text-muted mb-0">

							<i class="material-icons-outlined">location_on</i>

							<?php echo $_smarty_tpl->tpl_vars['more_information']->value['address'];?>


						</p>

					<?php } elseif ($_smarty_tpl->tpl_vars['show']->value == 'block') {?>

						<h3 class="fs-30 fw-bold mb-1">Phân khu <?php echo $_smarty_tpl->tpl_vars['oneBlock']->value['title'];?>
</h3>

					<?php } else { ?>

						<h3 class="fs-30 fw-bold mb-1">Tòa nhà <?php echo $_smarty_tpl->tpl_vars['oneBuilding']->value['title'];?>
</h3>

					<?php }?>

				</div>

				<div class="card-body">

					<div class="mb-3">

						<?php if (!empty($_smarty_tpl->tpl_vars['list_props']->value)) {?>

						<div class="list-results d-flex flex-wrap gap-2">

							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_props']->value, '_oResult');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oResult']->value) {
?>

							<div class="badge bg-label-primary">

								<a class="fs-6" data-fancybox<?php if ($_smarty_tpl->tpl_vars['_oResult']->value['is_driver'] == '1') {?> data-type="iframe"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['_oResult']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['_oResult']->value['title'];?>
</a>

							</div>

							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

						</div>

						<?php }?>

					</div>

					<?php if ($_smarty_tpl->tpl_vars['show']->value == 'project') {?>

						<h1 class="my-4">Giới thiệu <?php echo $_smarty_tpl->tpl_vars['oneProject']->value['title'];?>
</h1>

					<?php } elseif ($_smarty_tpl->tpl_vars['show']->value == 'block') {?>

						<h1 class="my-4">Giới thiệu <?php echo $_smarty_tpl->tpl_vars['oneBlock']->value['title'];?>
</h1>

					<?php } else { ?>

						<h1 class="my-4">Giới thiệu <?php echo $_smarty_tpl->tpl_vars['oneBuilding']->value['title'];?>
</h1>

					<?php }?>

					<div class="tinyContent">

						<?php if ($_smarty_tpl->tpl_vars['show']->value == 'project') {?>

							<?php echo $_smarty_tpl->tpl_vars['oneProject']->value['content'];?>


						<?php } elseif ($_smarty_tpl->tpl_vars['show']->value == 'block') {?>

							<?php echo $_smarty_tpl->tpl_vars['oneBlock']->value['intro'];?>


						<?php } else { ?>

							<?php echo $_smarty_tpl->tpl_vars['oneBuilding']->value['intro'];?>


						<?php }?>

					</div>

				</div>

			</div>	

		</div>

	</div>

</div><?php }
}
