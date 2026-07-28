<?php
/* Smarty version 3.1.33, created on 2025-11-28 14:38:38
  from '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/faqs/edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6929517e6bebb6_57555358',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf24f10afc7b56b868c32f9eaa96ef2e63cf7304' => 
    array (
      0 => '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/faqs/edit.tpl',
      1 => 1758172160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6929517e6bebb6_57555358 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="ui-title-bar-container">
	<div class="ui-title-bar">
		<div class="ui-title-bar__navigation">
			<div class="ui-breadcrumbs">
				<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
" class="btn btn-default ui-breadcrumb">
					<?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('angle-left mr-5');?>

					<span class="ui-breadcrumb__item"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('faqs');?>
</span>
				</a>
			</div>
		</div>
	</div>
	<div class="ui-title-bar__main-group">
		<div class="ui-title-bar__heading-group">
			<?php if ($_smarty_tpl->tpl_vars['pvalTable']->value > '0') {?>
			<h1 class="ui-title-bar__title w-100"><?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTitle($_smarty_tpl->tpl_vars['pvalTable']->value);?>
</h1>
			<?php } else { ?>
			<h1 class="ui-title-bar__title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Addnew');?>

			<?php }?>
		</div>
	</div>
</div>
<div class="clearfix"></div>
<form id="edititem" method="post" action="" enctype="multipart/form-data" class="validate-form">
	<div class="ui-layout">
		<div class="row">
			<div class="col-md-8 col-xs-12">
				<div class="ui-layout__item">
					<div class="ui-card">
						<div class="ui-card__section">
							<div class="ui-type-container">
								<div class="form-group">
									<label class="col-form-label"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Title');?>
</label>
									<input type="text" class="form-control required" name="iso-title" value="<?php if ($_smarty_tpl->tpl_vars['pvalTable']->value > '0') {
echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTitle($_smarty_tpl->tpl_vars['pvalTable']->value);
}?>" required maxlength="255" />
								</div>								
								<div class="form-group">
									<label class="form-label mb-1">Từ khóa tìm kiếm:</label>
									<input type="text" id="input-tags" class="input-tags" name="tags" placeholder="Nhập keyword" value="<?php if ($_smarty_tpl->tpl_vars['pvalTable']->value > 0) {
echo $_smarty_tpl->tpl_vars['oneItem']->value['tags'];
}?>" />
								</div>
								<div class="form-group">
									<label class="col-form-label"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Content');?>
</label>
									 <?php echo $_smarty_tpl->tpl_vars['clsForm']->value->showInput('content');?>

								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
			<div class="col-md-4 col-xs-12">
				<div class="ui-layout__item">
					<div class="ui-card">
						<header class="ui-card__header">
							<h2 class="ui-heading"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Status');?>
</h2>
						</header>
						<div class="ui-card__section">
							<div class="ui-type-container">
								<div class="form-group">
									<div class="custom-radio-wrapper core-radio-custom">
										<label class="">
											<input <?php if ($_smarty_tpl->tpl_vars['oneItem']->value['is_online'] == '1' || $_smarty_tpl->tpl_vars['pvalTable']->value == '0') {?> checked="checked"<?php }?> name="is_online" value="1" type="radio"> <span class="custom-radio custom-icon"></span>
										</label> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Show');?>

									</div>
								</div>
								<div class="form-group">
									<div class="custom-radio-wrapper core-radio-custom">
										<label class="">
											<input<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['is_online'] != '1' && $_smarty_tpl->tpl_vars['pvalTable']->value > '0') {?> checked="checked"<?php }?> name="is_online" value="0" type="radio"> <span class="custom-radio custom-icon"></span>
										</label> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Hide');?>

									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="ui-card mt-half">
						<header class="ui-card__header">
							<h2 class="ui-heading"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Category');?>
</h2>
						</header>
						<div class="ui-card__section">
							<div class="ui-type-container">
								<div class="form-group">
									<label class="col-form-label"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Category');?>
</label>
									<select name="iso-cat_id" class="form-control iso-selectize">
										<option value="">Chọn danh mục</option>
                                        <?php echo $_smarty_tpl->tpl_vars['clsProperty']->value->getListOption('_CATEGORYFAQS',$_smarty_tpl->tpl_vars['cat_id']->value);?>

									</select>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="ui-page-actions ui-page-actions--has-secondary">
		<input value="Update" name="submit" type="hidden">
		<div class="ui-page-actions__container">
			<div class="ui-page-actions__actions ui-page-actions__actions--secondary">
				<div class="ui-page-actions__button-group">
					<?php if ($_smarty_tpl->tpl_vars['pvalTable']->value > '0') {?>
					<a class="btn btn-warning" data-bind-event-click="deleteModal.show()"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Delete');?>
</a>
					<?php }?>
				</div>
			</div>
			<div class="ui-page-actions__actions ui-page-actions__actions--primary">
				<div class="ui-page-actions__button-group">
					<a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Calcel');?>
</a>
					<?php echo $_smarty_tpl->tpl_vars['saveBtn']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['saveList']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['saveCat']->value;?>

				</div>
			</div>
		</div>
	</div>
</form><?php }
}
