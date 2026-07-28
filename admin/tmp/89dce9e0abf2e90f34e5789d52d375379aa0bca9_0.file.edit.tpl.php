<?php
/* Smarty version 3.1.33, created on 2025-11-03 17:20:54
  from '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/meta/edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6908820696cb19_76016749',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89dce9e0abf2e90f34e5789d52d375379aa0bca9' => 
    array (
      0 => '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/meta/edit.tpl',
      1 => 1730083834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6908820696cb19_76016749 (Smarty_Internal_Template $_smarty_tpl) {
?><header class="ui-title-bar-container ">
	<div class="ui-title-bar">
		<div class="ui-title-bar__navigation">
			<div class="ui-breadcrumbs">
				<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
" class="btn btn-default ui-breadcrumb">
					<?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('angle-left mr-5');?>

					<span class="ui-breadcrumb__item"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Meta Tags');?>
</span>
				</a>
			</div>
		</div>
	</div>
	<div class="ui-title-bar ui-title-bar--separator">
		<div class="ui-title-bar__main-group">
			<div class="ui-title-bar__heading-group">
				<h1 class="ui-title-bar__title"><?php if ($_smarty_tpl->tpl_vars['pvalTable']->value > '0') {?>Cập nhật<?php } else { ?>Thêm<?php }?> Meta Tags</h1>
			</div>
		</div>
	</div><div class="collapsible-header"><div class="collapsible-header__heading"></div></div>
</header>
<div class="clearfix"></div>
<form method="post" action="" enctype="multipart/form-data" class="validate-form">
	<div class="ui-layout">
		<div class="ui-layout__sections">
			<div class="ui-layout__section">
				<section class="ui-annotated-section-container">
					<div class="ui-annotated-section">
						<div class="row">
							<div class="col-md-4">
								<div class="ui-annotated-section__title">
									<h2 class="ui-heading">Meta Tags</h2>
								</div>
								<div class="ui-annotated-section__description">
									Chỉnh sửa dữ liệu meta tags giúp tối ưu nội dung của bạn hiển thị trên công cụ tìm kiếm như Google, Bing...
								</div>
							</div>
							<div class="col-md-8">
								<div class="ui-annotated-section__content">
									<div class="next-card">
										<header class="ui-card__header">
											<div class="ui-stack ui-stack--wrap">
												<div class="ui-stack-item ui-stack-item--fill">
													<h2 class="ui-heading"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('PreviewSearchResult');?>
</h2>
												</div>
											</div>
										</header>
										<div class="ui-card__section">
											<div class="ui-type-container">
												<div class="holderPrevSeo">
													<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getPreviewSEO($_smarty_tpl->tpl_vars['pvalTable']->value);?>

												</div>
											</div>
										</div>
										<div class="next-card__section">
											<div class="ui-form__section ">
												<div class="form-group">	
													<label class="col-form-label"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Link');?>
</label>
													<div class="input-group">
														<span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;?>
</span>
														<input class="form-control" name="config_link" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['config_link'];?>
" maxlength="255" type="text" >
													</div>
												</div>
												<div class="form-group">
													<div class="ui-form__label-wrapper">
														<label class="col-form-label"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('TitlePage');?>
</label>
														<p class="type--subdued"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('NumberOfCharactersUsed');?>
: <span data-bind="titleCharsRemainingText()" class="title-counter__charactor">0</span>/70</p>
													</div>
													<input type="text" class="form-control" clsTable="Meta" pvalTable="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" name="config_value_title" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['config_value_title'];?>
" />
												</div>
												<div class="form-group">	
													<div class="ui-form__label-wrapper">
														<label class="col-form-label"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Meta Description');?>
</label>
														<p class="type--subdued"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('NumberOfCharactersUsed');?>
: <span class="description-counter__charactor">0</span>/320</p>
													</div>
													<textarea class="form-control" clsTable="Meta" pvalTable="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
" rows="4" name="config_value_intro"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['config_value_intro'];?>
</textarea>
												</div>
												<div class="form-group">	
													<label class="col-form-label"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Meta Keyword');?>
</label>
													<textarea class="form-control" rows="4" data-length-max="320" name="config_value_keyword"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['config_value_keyword'];?>
</textarea>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- End section -->
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="ui-page-actions ui-page-actions--has-secondary">
		<div class="ui-page-actions__container">
			<div class="ui-page-actions__actions ui-page-actions__actions--secondary">
				<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
" class="btn btn-default">
					<?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('angle-left',$_smarty_tpl->tpl_vars['core']->value->get_Lang('Meta Tags'));?>

				</a>
			</div>
			<div class="ui-page-actions__actions ui-page-actions__actions--primary">
				<input value="Update" name="submit" type="hidden">
				<div class="ui-page-actions__button-group"><?php echo $_smarty_tpl->tpl_vars['saveBtn']->value;?>
</div>
			</div>
		</div>
	</div>
</form>
<?php echo '<script'; ?>
 type="text/javascript"> 
	var pvalTable = '<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
',
		domain_name="<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;?>
";
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
	$().ready(function(){
		$('input[name=config_link]').on('keyup', $Core.util.delay(function(){
			var regex = domain_name,
				config_link = $(this).val();
			if(config_link.match(regex)){
				$(this).val(config_link.replace(regex,''));
			}
			load_preview_search('Meta', pvalTable);
		},100));
	});
<?php echo '</script'; ?>
>
<?php }
}
