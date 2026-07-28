<?php
/* Smarty version 3.1.33, created on 2025-10-30 14:49:34
  from '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/news/edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6903188e63b872_09721845',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69481d8bdbead7f4ef1f57eb6772c8768036b7bc' => 
    array (
      0 => '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/news/edit.tpl',
      1 => 1759302461,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6903188e63b872_09721845 (Smarty_Internal_Template $_smarty_tpl) {
?>	<style>
		#edititem .content-image{
			width: 100%;
			/* height: 120px; */
			border: 1px solid rgba(195, 207, 216, .3);
			border-radius: 8px;
			display: flex;
			flex-wrap: wrap;
			flex-direction: row;
			align-items: center;
			padding: 10px;
		}
		#edititem .item-choosed{
			height: 120px;
			border-radius: 8px;
			display: flex;
			flex-direction: row;
			align-items: center;
		}

		#edititem .dropzone {
			--bs-dz-icon-bg: #eeedf0;
			position: relative;
			border: 2px dashed #e4e6e8;
			border-radius: .5rem;
			cursor: pointer;
			inline-size: 100%;
		}

		#edititem .dropzone .dz-message {
			font-size: 1.5rem;
			font-weight: 500;
			margin-block: 4rem 3rem;
			margin-inline: 0;
		}
		#edititem .img-empty {
			width: 100px;
			height: 100px;
			border: 2px dashed #e4e6e8;
		}
		#edititem .item-img {
			position: relative;
			display: inline-block;
			align-items: center;
			justify-content: center;
			text-align: center;
			font-size: 30px;
			color: #e4e6e8;
			margin-left: 5px;
			margin-top: 5px;
		}
		#edititem .item-img.img-empty {
			display: flex;
			align-items: center;
			justify-content: center;
			text-align: center;
			font-size: 30px;
			color: #e4e6e8;
			margin-left: 5px;
			margin-top: 5px;
		}
		#edititem .item-img .btn-del-image {
			position: absolute;
			top: -12px;
			right: -12px;
			background: rgba(255, 255, 255, 0.8);
			border: none;
			cursor: pointer;
			z-index: 10;
			border-radius: 50%;
			width: 25px;
			height: 25px;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		#edititem .item-img .btn-del-image i {
			color: red;
		}
	</style>
<div class="ui-title-bar-container">
	<div class="ui-title-bar">
		<div class="ui-title-bar__navigation">
			<div class="ui-breadcrumbs">
				<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
" class="btn btn-default ui-breadcrumb">
					<?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('angle-left mr-5');?>

					<span class="ui-breadcrumb__item"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('NewsPage');?>
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
			<div class="action-bar__item action-bar__item--link-container">
				<div class="action-bar__top-links">
					<a href="<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;
echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getLink($_smarty_tpl->tpl_vars['pvalTable']->value);?>
" class="ui-button ui-button--transparent action-bar__link"  target="_blank"><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('eye',$_smarty_tpl->tpl_vars['core']->value->get_Lang('ViewOnWeb'));?>
</a>
				</div>
			</div>
			<?php } else { ?>
			<h1 class="ui-title-bar__title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Addnew News');?>

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
</label>
									<input type="text" class="form-control required" name="iso-title" value="<?php if ($_smarty_tpl->tpl_vars['pvalTable']->value > '0') {
echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTitle($_smarty_tpl->tpl_vars['pvalTable']->value);
}?>" required maxlength="255" />
								</div>
								<div class="form-group">
									<label class="col-form-label">Mô tả ngắn</label>
									 <textarea name="iso-intro" id="" cols="30" rows="5" class="form-control w-100"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['intro'];?>
</textarea>
								</div>
								<div class="form-group">
									<label class="col-form-label"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Content');?>
</label>
									 <?php echo $_smarty_tpl->tpl_vars['clsForm']->value->showInput('content');?>

								</div>
																		<div class="config-gallery">
										<div class="form-group">
											<label class="col-form-label">Kiểu hiển thị</label>
											<select name="type_display_gallery" class="form-control" data="">
												<option value="slide" <?php if (!empty($_smarty_tpl->tpl_vars['more_information']->value['config_gallery']['type_display_gallery']) && $_smarty_tpl->tpl_vars['more_information']->value['config_gallery']['type_display_gallery'] == 'slide') {?> selected <?php }?>>Slide</option>
												<option value="grid" <?php if (!empty($_smarty_tpl->tpl_vars['more_information']->value['config_gallery']['type_display_gallery']) && $_smarty_tpl->tpl_vars['more_information']->value['config_gallery']['type_display_gallery'] == 'grid') {?> selected <?php }?>>Danh sách ô</option>
											</select>
										</div>
										<label class="col-form-label">Chọn ảnh</label>
										<div class="dropzone content-image " style="cursor: pointer;">
											<?php $_smarty_tpl->_assignInScope('imagesGallery', $_smarty_tpl->tpl_vars['more_information']->value['config_gallery']['images']);?>
											<?php if (!empty($_smarty_tpl->tpl_vars['imagesGallery']->value)) {?>
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['imagesGallery']->value, '_item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_item']->value) {
?>
													<div class="item-img" isoman_for_id="image-content" isoman_val="" isoman_name="image">
														<img width="100" height="100" id="isoman_show_image-content" src="<?php echo $_smarty_tpl->tpl_vars['_item']->value;?>
">
														<button type="button" class="btn btn-del-image"><i class="fa fa-times-circle" aria-hidden="true"></i></button>
														<input type="hidden" name="image_gallery[]" value="<?php echo $_smarty_tpl->tpl_vars['_item']->value;?>
">
													</div>
												<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
											<?php }?>
											<div class="item-img img-empty ajOpenDialog" isoman_for_id="image-content" isoman_multiple="1" isoman_val="" isoman_name="image">
												<i class="fa fa-plus-circle"></i>
											</div>
										</div>
									</div>
								<?php $_smarty_tpl->_assignInScope('toId', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>
								<div class="form-group">
									<label class="col-form-label">Hiển thị</label>
									<div class="clearfix"></div>
									<div class="btn-group d-flex btn-group-toggle" data-toggle="buttons">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_domains']->value, '_oDomain', false, NULL, 'i', array (
  'first' => true,
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oDomain']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['index'];
?>
										<?php if (!empty($_smarty_tpl->tpl_vars['_oDomain']->value['cat_id'])) {?>
										<label class="btn btn-default <?php if ($_smarty_tpl->tpl_vars['_oDomain']->value['cat_id'] == $_smarty_tpl->tpl_vars['oneItem']->value['domain_id'] || (empty($_smarty_tpl->tpl_vars['oneItem']->value['domain_id']) && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['first'] : null))) {?> active<?php }?> flex-fill" role="button">
											<input type="radio" name="domain_id" value="<?php echo $_smarty_tpl->tpl_vars['_oDomain']->value['cat_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['_oDomain']->value['cat_id'] == $_smarty_tpl->tpl_vars['oneItem']->value['domain_id'] || (empty($_smarty_tpl->tpl_vars['oneItem']->value['domain_id']) && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['first'] : null))) {?> checked="checked"<?php }?> onChange="$Core.news.loadCategory(this,event)" cat_id="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['cat_id'];?>
" toId="sltCategory"> <?php echo $_smarty_tpl->tpl_vars['_oDomain']->value['domain'];?>

										</label>
										<?php }?>
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
									<select name="iso-cat_id" class="form-control required" id="sltCategory">
										<option value="">Chọn</option>
										<?php echo $_smarty_tpl->tpl_vars['clsProperty']->value->getListOption("_NEWS_CATEGORY",$_smarty_tpl->tpl_vars['oneItem']->value['cat_id'],$_smarty_tpl->tpl_vars['catParent_id']->value);?>

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
					<a class="btn btn-warning" onClick="delete_globe(this)" clsTable="News" pval_id="<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
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
</form>
<?php echo '<script'; ?>
 type="text/javascript">
	var $type = '_NEWS';
	var $news_id = '<?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
';
<?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript">
		var urls = <?php echo json_encode($_smarty_tpl->tpl_vars['imageGallery']->value);?>
;
		urls = urls.length > 0 ? JSON.parse(urls) : [];
		$('.display-image').on('change', function() {
			if ($(this).is(':checked')) {
				$('.config-gallery').show();
			} else {
				$('.config-gallery').hide();
			}
		});
		$('.content-image').on('click', '.btn-del-image', function() {
			let url_image = $(this).parents('.item-img').find('img').attr('src');
			urls = urls.filter(item => item !== url_image);
			$(this).parents('.item-img').remove();
			console.log('urls', urls);
		});
		function isoman_callback(isoman_for_id) {
			$(".isoman-image.isoman-checked").each(function() {
				let isoman_url = $(this).attr("isoman_url");
				if (!urls.includes(isoman_url)) {
					urls.push(isoman_url);
					let html = `<div class="item-img" isoman_for_id="image-content" isoman_val="" isoman_name="image">
									<img width="100" height="100" id="isoman_show_image-content" src="`+isoman_url+`">
									<button type="button" class="btn btn-del-image"><i class="fa fa-times-circle" aria-hidden="true"></i></button>
									<input type="hidden" name="image_gallery[]" value="`+isoman_url+`">
								</div>`;
					$(html).insertBefore('.img-empty')			
				}
			});
		}
	<?php echo '</script'; ?>
>
<?php }
}
