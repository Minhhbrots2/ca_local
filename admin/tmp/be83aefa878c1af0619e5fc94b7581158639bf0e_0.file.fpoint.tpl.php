<?php
/* Smarty version 3.1.33, created on 2025-12-20 17:55:45
  from '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/setting/fpoint.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_694680b1957145_99717127',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be83aefa878c1af0619e5fc94b7581158639bf0e' => 
    array (
      0 => '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/setting/fpoint.tpl',
      1 => 1742284958,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694680b1957145_99717127 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/fhgroupt/ca.futurehomes.vn/core/smarty/plugins/function.cycle.php','function'=>'smarty_function_cycle',),));
?>
<header class="ui-title-bar-container ">
	<div class="ui-title-bar">
		<div class="ui-title-bar__navigation">
			<div class="ui-breadcrumbs">
				<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
" class="btn btn-default ui-breadcrumb">
					<?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('angle-left mr-5');?>

					<span class="ui-breadcrumb__item"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Setting');?>
</span>
				</a>
			</div>
		</div>
	</div>
	<div class="ui-title-bar ui-title-bar--separator">
		<div class="ui-title-bar__main-group">
			<div class="ui-title-bar__heading-group">
				<h1 class="ui-title-bar__title">Cấu hình F-Point</h1>
			</div>
		</div>
	</div>
</header>
<form method="post" action="" enctype="multipart/form-data" class="validate-form">
	<div class="ui-layout">
		<div class="ui-layout__sections"><div class="ui-layout__section">
			<section class="ui-annotated-section-container">
				<div class="ui-annotated-section">
					<div class="ui-annotated-section__content">
						<div class="next-card">
							<div class="next-card__section">
								<table class="table table-bordered">
									<thead><tr>
										<th rowspan="2"></th>
										<th colspan="2" class="text-center">Giám đốc dự án</th>
										<th colspan="2" class="text-center">Giám đốc kinh doanh</th>
										<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['list_departments']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = min(($__section_i_0_loop - 0), (int)@$_smarty_tpl->tpl_vars['total_departments']->value < 0 ? $__section_i_0_loop : (int)@$_smarty_tpl->tpl_vars['total_departments']->value);
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
										<th></th>
										<?php
}
}
?>
									</tr>
									<tr>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_departments']->value, '_oDep');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oDep']->value) {
?>
										<th class="text-center"><?php echo $_smarty_tpl->tpl_vars['_oDep']->value['title'];?>
</th>
										<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</tr></thead>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_props']->value, '_oProp');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oProp']->value) {
?>
									<tr class='<?php echo smarty_function_cycle(array('values'=>"odd,even"),$_smarty_tpl);?>
'>
										<td class="bg-danger" width="15%"><?php echo $_smarty_tpl->tpl_vars['_oProp']->value['title'];?>
</td>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_departments']->value, '_oDep');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oDep']->value) {
?>
										<?php $_smarty_tpl->_assignInScope('_okey', (($_smarty_tpl->tpl_vars['_oDep']->value['id']).("_")).($_smarty_tpl->tpl_vars['_oProp']->value['property_id']));?>
										<td class="text-center">
											<input type="number" name="fpoint_configs[<?php echo $_smarty_tpl->tpl_vars['_okey']->value;?>
][score]" placeholder="Điểm" class="form-control mb-1 nunberonly" value="<?php echo $_smarty_tpl->tpl_vars['fpoint_configs']->value[$_smarty_tpl->tpl_vars['_okey']->value]['score'];?>
" />
											<input type="text" name="fpoint_configs[<?php echo $_smarty_tpl->tpl_vars['_okey']->value;?>
][content]" placeholder="Nội dung" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['fpoint_configs']->value[$_smarty_tpl->tpl_vars['_okey']->value]['content'];?>
" />
										</td>
										<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</tr>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</table>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="ui-annotated-section-container">
				<div class="ui-annotated-section">
					<div class="row">
						<div class="col-md-3">
							<div class="ui-annotated-section__title">
								<h2 class="ui-heading">BO</h2>
							</div>
							<div class="ui-annotated-section__description">Cấu hình điểm số F-Point cho khối BO.</div>
						</div>
						<div class="col-md-9">
							<div class="ui-annotated-section__content">
								<div class="next-card">
									<div class="next-card__section">
										<div class="ui-form__section form-horizontal">
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_BO_levels']->value, '_oI', false, NULL, 'i', array (
  'first' => true,
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oI']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['index'];
?>
											<?php $_smarty_tpl->_assignInScope('_okey', ($_smarty_tpl->tpl_vars['_oI']->value['property_id']).("_seniority"));?>
											<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['first'] : null)) {?>
											<div class="form-row">
												<label class="col-form-label text-right col-xs-12 col-md-4"></label>
												<label class="col-form-label col-xs-12 col-md-2">Điểm</label>
												<label class="col-form-label col-xs-12 col-md-6">Nội dung</label>
											</div>
											<?php }?>
											<div class="form-group form-row">
												<label class="col-form-label text-right col-xs-12 col-md-3"><?php echo $_smarty_tpl->tpl_vars['_oI']->value['title'];?>
</label>
												<label class="col-form-label col-xs-12 col-md-1 text-center">=</label>
												<div class="col-xs-12 col-md-2">
													<input type="number" placeholder="Số điểm" name="fpoint_configs[<?php echo $_smarty_tpl->tpl_vars['_okey']->value;?>
][score]" class="form-control nunberonly" value="<?php if (!empty($_smarty_tpl->tpl_vars['fpoint_configs']->value[$_smarty_tpl->tpl_vars['_okey']->value])) {
echo $_smarty_tpl->tpl_vars['fpoint_configs']->value[$_smarty_tpl->tpl_vars['_okey']->value]['score'];
}?>" />
												</div>
												<div class="col-xs-12 col-md-6">
													<input type="text" placeholder="Nội dung" name="fpoint_configs[<?php echo $_smarty_tpl->tpl_vars['_okey']->value;?>
][content]" 
													class="form-control" value="<?php if (!empty($_smarty_tpl->tpl_vars['fpoint_configs']->value[$_smarty_tpl->tpl_vars['_okey']->value])) {
echo $_smarty_tpl->tpl_vars['fpoint_configs']->value[$_smarty_tpl->tpl_vars['_okey']->value]['content'];
}?>" />
												</div>
											</div>
											<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_points']->value, '_OGoup', false, '_OGrkey');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_OGrkey']->value => $_smarty_tpl->tpl_vars['_OGoup']->value) {
?>
			<?php $_smarty_tpl->_assignInScope('list_actions', $_smarty_tpl->tpl_vars['_OGoup']->value['actions']);?>
			<section class="ui-annotated-section-container">
				<div class="ui-annotated-section">
					<div class="row">
						<div class="col-md-3">
							<div class="ui-annotated-section__title">
								<h2 class="ui-heading"><?php echo $_smarty_tpl->tpl_vars['_OGoup']->value['title'];?>
</h2>
							</div>
							<div class="ui-annotated-section__description"><?php echo $_smarty_tpl->tpl_vars['_OGoup']->value['description'];?>
</div>
						</div>
						<div class="col-md-9">
							<div class="ui-annotated-section__content">
								<div class="next-card">
									<div class="next-card__section">
										<div class="ui-form__section form-horizontal">
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_actions']->value, '_oText', false, '_okey', 'i', array (
  'first' => true,
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_okey']->value => $_smarty_tpl->tpl_vars['_oText']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['index'];
?>
											<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['first'] : null)) {?>
											<div class="form-row">
												<label class="col-form-label text-right col-xs-12 col-md-4"></label>
												<label class="col-form-label col-xs-12 col-md-2">Điểm</label>
												<label class="col-form-label col-xs-12 col-md-6">Nội dung</label>
											</div>
											<?php }?>
											<div class="form-group form-row">
												<label class="col-form-label text-right col-xs-12 col-md-3"><?php echo $_smarty_tpl->tpl_vars['_oText']->value;?>
</label>
												<label class="col-form-label col-xs-12 col-md-1 text-center">+</label>
												<div class="col-xs-12 col-md-2">
													<input type="number" name="fpoint_configs[<?php echo $_smarty_tpl->tpl_vars['_okey']->value;?>
][score]" class="form-control nunberonly" value="<?php if (!empty($_smarty_tpl->tpl_vars['fpoint_configs']->value[$_smarty_tpl->tpl_vars['_okey']->value])) {
echo $_smarty_tpl->tpl_vars['fpoint_configs']->value[$_smarty_tpl->tpl_vars['_okey']->value]['score'];
}?>" />
												</div>
												<div class="col-xs-12 col-md-6">
													<input type="text" name="fpoint_configs[<?php echo $_smarty_tpl->tpl_vars['_okey']->value;?>
][content]" class="form-control" value="<?php if (!empty($_smarty_tpl->tpl_vars['fpoint_configs']->value[$_smarty_tpl->tpl_vars['_okey']->value])) {
echo $_smarty_tpl->tpl_vars['fpoint_configs']->value[$_smarty_tpl->tpl_vars['_okey']->value]['content'];
}?>" />
												</div>
											</div>
											<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div></div>
	</div>
	<div class="clearfix"></div>
	<div class="ui-page-actions ui-page-actions--has-secondary">
		<div class="ui-page-actions__container">
			<div class="ui-page-actions__actions ui-page-actions__actions--secondary"></div>
			<div class="ui-page-actions__actions ui-page-actions__actions--primary">
				<input value="Update" name="submit" type="hidden">
				<div class="ui-page-actions__button-group"><?php echo $_smarty_tpl->tpl_vars['saveBtn']->value;?>
</div>
			</div>
		</div>
	</div>
</form><?php }
}
