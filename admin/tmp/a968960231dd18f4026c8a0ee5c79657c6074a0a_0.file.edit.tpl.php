<?php
/* Smarty version 3.1.33, created on 2026-06-17 14:20:19
  from '/www/wwwroot/ca.futurehomes.vn/admin/application/views/static_page/edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a324ab370f201_82452854',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a968960231dd18f4026c8a0ee5c79657c6074a0a' => 
    array (
      0 => '/www/wwwroot/ca.futurehomes.vn/admin/application/views/static_page/edit.tpl',
      1 => 1781150644,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a324ab370f201_82452854 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/www/wwwroot/ca.futurehomes.vn/core/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="ui-title-bar-container">
	<div class="ui-title-bar">
		<div class="ui-title-bar__navigation">
			<div class="ui-breadcrumbs">
				<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
" class="btn btn-default ui-breadcrumb">
					<?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('angle-left mr-5');?>

					<span class="ui-breadcrumb__item">Trang tĩnh</span>
				</a>
			</div>
		</div>
	</div>
	<div class="ui-title-bar__main-group">
		<div class="ui-title-bar__heading-group">
			<?php if ($_smarty_tpl->tpl_vars['pvalTable']->value > '0') {?>
			<h1 class="ui-title-bar__title w-100"><?php echo $_smarty_tpl->tpl_vars['pvalTable']->value;?>
#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oneItem']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</h1>
			<?php } else { ?>
			<h1 class="ui-title-bar__title">Thêm trang tĩnh</h1>
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
									<label class="col-form-label">Tiêu đề <span class="text-red">*</span></label>
									<input type="text" class="form-control required" name="title" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oneItem']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" required maxlength="255" />
								</div>
								<div class="form-group">
									<label class="col-form-label">Mô tả ngắn / phụ đề</label>
									<textarea class="form-control" name="subtitle" rows="3" placeholder="Mô tả ngắn hiển thị dưới tiêu đề"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtitle']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
								</div>
								<div class="form-row form-group">
									<div class="col-md-6">
										<label class="col-form-label">Cập nhật lần cuối</label>
										<input type="date" class="form-control" name="last_updated" value="<?php if ($_smarty_tpl->tpl_vars['last_updated']->value > 0) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['last_updated']->value,'%Y-%m-%d');
}?>" />
									</div>
									<div class="col-md-6">
										<label class="col-form-label">Icon tiêu đề (hero)</label>
										<input type="text" class="form-control" name="hero_icon" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hero_icon']->value, ENT_QUOTES, 'UTF-8', true);?>
" placeholder="vd: fa-shield" />
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="ui-card mt-half">
						<header class="ui-card__header">
							<h2 class="ui-heading">Các mục nội dung</h2>
						</header>
						<div class="ui-card__section">
							<div id="sp_sections" data-mod="<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['sections_html']->value;?>
</div>
							<a href="javascript:void(0)" id="sp_add" class="btn btn-default"><i class="fa fa-plus-circle mr-5"></i> Thêm mục</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-xs-12">
				<div class="ui-layout__item">
					<div class="ui-card">
						<header class="ui-card__header">
							<h2 class="ui-heading">Trạng thái</h2>
						</header>
						<div class="ui-card__section">
							<div class="ui-type-container">
								<div class="form-group">
									<div class="custom-radio-wrapper core-radio-custom">
										<label class="">
											<input <?php if ($_smarty_tpl->tpl_vars['oneItem']->value['is_online'] == '1' || $_smarty_tpl->tpl_vars['pvalTable']->value == '0') {?>checked="checked"<?php }?> name="is_online" value="1" type="radio"> <span class="custom-radio custom-icon"></span>
										</label> Hiện
									</div>
								</div>
								<div class="form-group">
									<div class="custom-radio-wrapper core-radio-custom">
										<label class="">
											<input<?php if ($_smarty_tpl->tpl_vars['oneItem']->value['is_online'] != '1' && $_smarty_tpl->tpl_vars['pvalTable']->value > '0') {?> checked="checked"<?php }?> name="is_online" value="0" type="radio"> <span class="custom-radio custom-icon"></span>
										</label> Ẩn
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="ui-card mt-half">
						<header class="ui-card__header">
							<h2 class="ui-heading">Ảnh tiêu đề</h2>
						</header>
						<div class="ui-card__section">
							<div class="ui-type-container">
								<div id="article-image-drop" class="article-image-drop">
									<div class="aspect-ratio aspect-ratio--square aspect-ratio--interactive">
										<input type="hidden" id="isoman_hidden_image" name="isoman_url_image" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oneItem']->value['image'], ENT_QUOTES, 'UTF-8', true);?>
" />
										<img class="aspect-ratio__content" id="isoman_show_image" src="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
">
									</div>
									<div class="clearfix"></div>
									<div class="ui-stack ui-stack--wrap">
										<div class="ui-stack-item ui-stack-item--fill">
											<button type="button" class="ui-button btn--link ajOpenDialog" isoman_for_id="image" isoman_val="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oneItem']->value['image'], ENT_QUOTES, 'UTF-8', true);?>
" isoman_name="image">Đổi ảnh</button>
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
					<a class="btn btn-warning confirm_delete" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=trash&<?php echo $_smarty_tpl->tpl_vars['pkeyTable']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['pvalTable']->value);?>
">Xoá vào thùng rác</a>
					<?php }?>
				</div>
			</div>
			<div class="ui-page-actions__actions ui-page-actions__actions--primary">
				<div class="ui-page-actions__button-group">
					<a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
">Huỷ</a>
					<?php echo $_smarty_tpl->tpl_vars['saveBtn']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['saveList']->value;?>

				</div>
			</div>
		</div>
	</div>
</form>

<style type="text/css">
	.sp-section__head{display:flex;gap:10px;align-items:flex-start;flex-wrap:wrap}
	.sp-col-icon{width:160px}
	.sp-col-title{flex:1 1 240px}
	.sp-col-act{padding-top:26px;white-space:nowrap}
	#sp_sections .sp-section{border:1px solid #e3e3e3}
</style>

<?php }
}
