<?php
/* Smarty version 3.1.33, created on 2025-11-19 10:56:39
  from '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/download/edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_691d3ff7de13a0_28565962',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '492df12ef30ac0235ed6eeba45196d93ae76ff9a' => 
    array (
      0 => '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/download/edit.tpl',
      1 => 1730083834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_691d3ff7de13a0_28565962 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="ui-title-bar-container">
	<div class="ui-title-bar">
		<div class="ui-title-bar__navigation">
			<div class="ui-breadcrumbs">
				<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
" class="btn btn-default ui-breadcrumb">
					<?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('angle-left mr-5');?>

					<span class="ui-breadcrumb__item"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Documents');?>
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
			<h1 class="ui-title-bar__title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('add');?>
 <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('download');?>
</h1>
			<?php }?>
		</div>
	</div>
</div>
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
*</label>
									<input type="text" class="form-control required" name="iso-<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" value="<?php if ($_smarty_tpl->tpl_vars['pvalTable']->value > '0') {
echo $_smarty_tpl->tpl_vars['oneItem']->value[$_smarty_tpl->tpl_vars['title']->value];
}?>" required maxlength="255" />
								</div>
								<div class="form-group">
									<label class="col-form-label"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Category');?>
*</label>
									<select name="cat_id" class="form-control iso-selectize required">
										<?php echo $_smarty_tpl->tpl_vars['clsCategory']->value->makeSelectboxOption(0,'_DOWNLOAD',$_smarty_tpl->tpl_vars['cat_id']->value);?>

									</select>
								</div>
								<div class="form-group">
									<label class="col-form-label"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Content');?>
</label>
									 <?php echo $_smarty_tpl->tpl_vars['clsForm']->value->showInput($_smarty_tpl->tpl_vars['content']->value);?>

								</div>
								<div class="form-group">
									<label class="col-form-label"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Attachment File');?>
</label>
									<div class="clearfix"></div>
									<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['attachment_file'] != '') {?>
									<a class="download" href="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['attachment_file'];?>
"><i class="fa fa-download"></i> <span><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['attachment_file'];?>
</span></a><?php }?>
									<input type="file" class="filestyle" name="attachment_file" maxlength="255" />
									<label class="col-form-label"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('OR');?>
</label>
									<input type="text" class="form-control" name="iso-attachment_url" value="<?php if ($_smarty_tpl->tpl_vars['pvalTable']->value > '0') {
echo $_smarty_tpl->tpl_vars['oneItem']->value['attachment_url'];
}?>" placeholder="Đường dẫn URL" maxlength="255" />
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
							<h2 class="ui-heading"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Image');?>
</h2>
						</header>
						<div class="ui-card__section">
							<div class="ui-type-container">
								<div id="article-image-drop" class="article-image-drop">
									<div class="aspect-ratio aspect-ratio--square aspect-ratio--interactive">
										<input type="hidden" id="isoman_hidden_image" name="isoman_url_image" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
" />
										<img class="aspect-ratio__content" id="isoman_show_image" src="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
">
									</div>
									<div class="clearfix"></div>
									<div class="ui-stack ui-stack--wrap">
										<div class="ui-stack-item ui-stack-item--fill">
											<button type="button" class="ui-button btn--link ajOpenDialog" isoman_for_id="image" isoman_val="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
" isoman_name="image"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Change');?>
</button>
										</div>
										<div class="ui-stack-item<?php if ($_smarty_tpl->tpl_vars['pvalTable']->value > '0' && $_smarty_tpl->tpl_vars['oneItem']->value['image']) {
} else { ?> hidden<?php }?>">
											<button type="button" pvalTable="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" clsTable="News" g="imgItem" class="ui-button btn--link deleteItemImage">Xóa</button>
										</div>
									</div>
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
					<a class="btn btn-warning" onClick="delete_globe(this)" clsTable="Service" pval_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" pkey="<?php echo $_smarty_tpl->tpl_vars['pkeyTable']->value;?>
" return_url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Delete');?>
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

				</div>
			</div>
		</div>
	</div>
</form><?php }
}
