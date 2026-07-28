<?php
/* Smarty version 3.1.33, created on 2025-12-26 09:37:51
  from '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/page/help_page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_694df4ffe7bd12_87679261',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a19f18a1f271b4ded791c696c015210842871d9b' => 
    array (
      0 => '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/page/help_page.tpl',
      1 => 1730083834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694df4ffe7bd12_87679261 (Smarty_Internal_Template $_smarty_tpl) {
?><header class="ui-title-bar-container ">
	<div class="ui-title-bar ui-title-bar--separator">
		<div class="ui-title-bar__main-group">
			<div class="ui-title-bar__heading-group">
				<h1 class="ui-title-bar__title">Hiệu suất đầu tư</h1>
			</div>
		</div> 		 
		<div class="action-bar" style="margin-top: -5px">
			<div class="ui-title-bar__mobile-primary-actions">
				<div class="ui-title-bar__actions">
					<a href="javascript:void(0);" onClick="$Core.loan_interest.add_page(this,event)" class="ui-button ui-button--primary ui-title-bar__action">Thêm page</a>
				</div>
			</div>
		</div>
	</div>
</header>
<div class="clearfix"></div>
<form action="" method="post" enctype="multipart/form-data">
	<div class="ui-layout">
		<div class="ui-layout__sections">
			<div class="ui-layout__section">
				<section class="ui-annotated-section-container">
					<div class="ui-annotated-section" id="list_page">
						<div class="item_bank mb-3">  
							<div class="p-3 next-card">  
								<div class="item_body collapse in"  id="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
									<div class="form-row form-group">
										<div class="col-md-6">
											<label class="col-form-label">Key page <span class="text-red">*</span></label>
											<input type="text" class="form-control require" required="true" placeholder="Key page" name="data[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
][key_page]" value="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['key_page'];?>
">
										</div>
										<div class="col-md-6">
											<label class="col-form-label">Class Name <span class="text-red">*</span></label>
											<div class="input-group input-group-merge d-flex align-items-center">
												<input type="text" class="form-control mr-2" value="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['className'];?>
" placeholder="Class Name" id="className" name="data[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
][className]">
											</div>
										</div>
									</div>
									<div class="form-row form-group">
										<div class="col-md-12">
											<label class="col-form-label">Tiêu đề <span class="text-red">*</span></label>										
											<div class="input-group d-flex">
												<input type="text" class="form-control calc_field" value="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['title'];?>
" placeholder="Tiêu đề" id="title" name="data[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
][title]" >
											</div>
										</div>
										<div class="col-md-12">
											<label class="col-form-label">Hình ảnh</label>	
											<div class="input-group">
												<input type="text" class="form-control" name="image" placeholder="Chọn hình ảnh" id="isoman_url_image" value="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['image'];?>
">
												<div class="input-group-btn">
													<button class="btn btn-default ajOpenDialog" isoman_for_id="image" isoman_val="" isoman_name="image" style="padding:9px 10px"><i class="fa fa-image"></i></button>
												</div>	
											</div>
										</div>
										<div class="col-md-12">
											<label class="col-form-label">Nội dung <span class="text-red">*</span></label>										
											<div class="input-group d-flex w-100">
												<textarea id="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid();?>
" class="form-control isoTextArea w-100 " name="data[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
][intro]" cols="255" rows="15"><?php echo $_smarty_tpl->tpl_vars['_oItem']->value['intro'];?>
</textarea>
											</div>
										</div>
									</div>
									<div class="d-flex justify-content-end">
										<button class="btn btn-danger ml-2" title="Xoá" type="button" onclick="$Core.loan_interest.delete_item_bank(this,event)">Xoá</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				
			</div>
		</div>
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
