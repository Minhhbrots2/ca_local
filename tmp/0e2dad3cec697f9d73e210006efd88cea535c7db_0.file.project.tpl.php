<?php
/* Smarty version 3.1.33, created on 2026-07-14 09:13:50
  from '/www/wwwroot/skyrealty.c-a.vn/application/views/home/project/project.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a559b5ec080c3_37386250',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e2dad3cec697f9d73e210006efd88cea535c7db' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/views/home/project/project.tpl',
      1 => 1783995229,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a559b5ec080c3_37386250 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-sm flex-grow-1 container-p-y pt-2">	
	<div class="form-row">
		<div class="col-xxl-10 mx-auto">
			<div class="d-flex align-items-center justify-content-between mb-3">
				<h4 class="fw-bold mb-0 fs-20">Danh sách dự án</h4>
				<div class="dropdown">
					<a  class="btn bg-warning text-white js__dropdown-stock" href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('stock');?>
" >Bảng hàng dự án</a>
									</div>
			</div>
			<?php if (!empty($_smarty_tpl->tpl_vars['lstArea']->value)) {?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lstArea']->value, '_oItem', false, 'key', 'i', array (
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['_oItem']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['index']++;
?>
					<?php if (!empty($_smarty_tpl->tpl_vars['arr_project_area']->value[$_smarty_tpl->tpl_vars['_oItem']->value['setting_id']])) {?>
						<div class="divider my-2">
							<div class="divider-text text-upper fs-2 fw-semibold text-main">
								<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['title'];?>
 <span class="fs-16">(<?php echo count($_smarty_tpl->tpl_vars['arr_project_area']->value[$_smarty_tpl->tpl_vars['_oItem']->value['setting_id']]);?>
 dự án)</span>
							</div>
						</div>
						<div class="form-row">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr_project_area']->value[$_smarty_tpl->tpl_vars['_oItem']->value['setting_id']], '_oProject');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oProject']->value) {
?>
							<div class="col-12 col-lg-4 col-xl-4 col-xxxl-3 mb-2">
								<div class="card project-card h-100 no-shadow">
									<a class="d-block" href="<?php echo $_smarty_tpl->tpl_vars['clsProject']->value->getLinkDetail($_smarty_tpl->tpl_vars['_oProject']->value['project_id'],0,0,'overview',$_smarty_tpl->tpl_vars['_oProject']->value);?>
" title="<?php echo $_smarty_tpl->tpl_vars['_oProject']->value['title'];?>
">
										<div class="position-relative text-white">
											<span class="position-absolute top-px-20 right-px-20 bg-success rounded-pill py-1 px-3 fs-12">Đang mở bán</span>
											<img decoding="async" class="card-img-top img-project img-fluid"  onerror="this.src='<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/no-image.png'" src="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->resize_image_url($_smarty_tpl->tpl_vars['_oProject']->value['image'],400,300);?>
" loading="lazy">
										</div>
										<div class="card-body">
											<div class="d-flex align-items-center justify-content-between">
												<div class="awe__project-info">
													<h4 class="card-title mb-2">
														<span class="text-dark text-fs-22 fw-semibold"><?php echo $_smarty_tpl->tpl_vars['_oProject']->value['title'];?>
</span>
													</h4>
													<p class="text-dark mb-1 text-fs-13">
														<i class='bx bx-map'></i> <?php echo $_smarty_tpl->tpl_vars['_oProject']->value['address'];?>

													</p>
													<div class="d-flex gap-1 mb-1 text-fs-13 align-items-center text-muted">
														<i class='bx bx-home-alt'></i> Quy mô: <?php echo $_smarty_tpl->tpl_vars['_oProject']->value['apartment'];?>

													</div>
													<div class="d-flex gap-1 text-fs-13 align-items-center text-muted">
														<i class='bx bx-code'></i> Diện tích: <?php echo $_smarty_tpl->tpl_vars['_oProject']->value['arcreage'];?>

													</div>	
												</div>
												<div class="awe__project-icon d-none d-lg-block">
													<img class="img-fluid h-px-50" src="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->resize_image_url($_smarty_tpl->tpl_vars['_oProject']->value['logo'],0,50);?>
"  onerror="this.src='<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/no-image.png'" loading="lazy" />
												</div>
											</div>																									
											<?php if (!empty($_smarty_tpl->tpl_vars['_oProject']->value['list_blocks'])) {?>
												<div class="d-flex flex-wrap gap-1 text-fs-13 align-items-center text-muted">
													<?php $_smarty_tpl->_assignInScope('start', 0);?>
													<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_oProject']->value['list_blocks'], '_oBlock', false, 'k_block');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k_block']->value => $_smarty_tpl->tpl_vars['_oBlock']->value) {
?>
														<?php $_smarty_tpl->_assignInScope('list_menu_buildings', $_smarty_tpl->tpl_vars['_oBlock']->value['list_menu_buildings']);?>
														<?php $_smarty_tpl->_assignInScope('more_block', $_smarty_tpl->tpl_vars['_oBlock']->value['more_information']);?>
														<?php if (!empty($_smarty_tpl->tpl_vars['list_menu_buildings']->value)) {?>	
															<?php if ($_smarty_tpl->tpl_vars['start']->value == 0) {?>
															<span class="text-muted"><i class='bx bx-table'></i> Tòa mở bán: </span>
															<?php }?>
															<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_menu_buildings']->value, '_oBuild', false, 'k_build', 'i', array (
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k_build']->value => $_smarty_tpl->tpl_vars['_oBuild']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['index']++;
?>
																<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['index'] : null) > 0) {?>, <?php }?> <a href="<?php echo $_smarty_tpl->tpl_vars['_oBuild']->value['link'];?>
" class="text-link text-nowrap" target="_blank"><?php echo $_smarty_tpl->tpl_vars['_oBuild']->value['title'];?>
</a>
															<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
															<?php $_smarty_tpl->_assignInScope('start', 1);?>
														<?php }?>
													<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
												</div>
											<?php }?>
										</div>
									</a>
								</div>
							</div>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</div>
					<?php }?>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php }?>
		</div>
	</div>
</div>
<?php }
}
