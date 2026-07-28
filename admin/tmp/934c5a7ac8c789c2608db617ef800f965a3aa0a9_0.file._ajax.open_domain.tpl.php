<?php
/* Smarty version 3.1.33, created on 2026-04-06 19:19:02
  from '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/setting/_ajax.open_domain.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_69d3a4b6912d84_48381041',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '934c5a7ac8c789c2608db617ef800f965a3aa0a9' => 
    array (
      0 => '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/setting/_ajax.open_domain.tpl',
      1 => 1764327928,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69d3a4b6912d84_48381041 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header"> 
			<a href="javascript:void();" class="closeEv close_pop close"><span>×</span></a> 
			<h3 class="modal-title"><strong><?php echo $_smarty_tpl->tpl_vars['titlePage']->value;?>
</strong></h3>
		</div>
		<form method="post" action="" enctype="multipart/form-data">
			<div class="modal-body">
				<div class="form-row">
					<div class="col-xs-12 col-md-6">
						<div class="form-group">
							<label class="form-label">Tiêu đề</label>
							<input class="form-control required" placeholder="Nhập tiêu đề" name="title" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
" />
						</div>
					</div>
					<div class="col-xs-12 col-md-6">
						<div class="form-group">
							<label class="form-label">Đường dẫn</label>
							<input class="form-control required" placeholder="Nhập đường dẫn" name="link" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['link'];?>
" />
						</div>						
					</div>
				</div>
				<div class="form-row">
					<div class="col-xs-12 col-md-6">
						<div class="form-group">
							<label class="form-label">Domain</label>
							<input class="form-control required" placeholder="Nhập tên miền" name="domain" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['domain'];?>
" />
						</div>						
					</div>
					<div class="col-xs-12 col-md-6">
						<div class="form-group">
							<label class="form-label">Danh mục Tin</label>
							<select name="cat_id" id="" class="form-select form-control iso-select2">
								<?php echo $_smarty_tpl->tpl_vars['clsProperty']->value->getSelectByProperty("_NEWS_CATEGORY",$_smarty_tpl->tpl_vars['oneItem']->value['cat_id']);?>

							</select>
						</div>					
					</div>
				</div>
				<div class="form-row">
					<div class="col-xs-12 col-md-6">
						<div class="form-group">
							<label class="form-label">Giới thiệu</label>
							<select name="about_us_id" class="form-select form-control iso-select2">
								<option value="0">Chọn bài giới thiệu</option>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lstPage']->value, '_oItem', false, 'key', 'i', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['_oItem']->value) {
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['page_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['oneItem']->value['about_us_id'] == $_smarty_tpl->tpl_vars['_oItem']->value['page_id']) {?>selected<?php }?> ><?php echo $_smarty_tpl->tpl_vars['_oItem']->value['title'];?>
</option>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</select>
						</div>	
					</div>
					<div class="col-xs-12 col-md-6">
						<div class="form-group">
							<label class="form-label">Danh mục FAQs</label>
							<select name="cat_faqs_id" class="form-select form-control iso-select2">
								<?php echo $_smarty_tpl->tpl_vars['clsProperty']->value->getSelectByProperty("_CATEGORYFAQS",$_smarty_tpl->tpl_vars['oneItem']->value['cat_faqs_id']);?>

							</select>
						</div>					
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" onClick="$Core.setting.save_domain(this, event)" class="btn btn-success" 
					data-action="save" domain_id="<?php echo $_smarty_tpl->tpl_vars['domain_id']->value;?>
">
					<span>Lưu lại</span>
				</button>
				<button type="button" class="btn btn-default mr-half pull-right" data-dismiss="modal">
					<span>Đóng</span>
				</button>
			</div>
		</form>
	</div>
</div>
<?php }
}
