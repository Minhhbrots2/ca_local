<?php
/* Smarty version 3.1.33, created on 2026-06-17 14:20:14
  from '/www/wwwroot/ca.futurehomes.vn/admin/application/views/static_page/default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a324aae1f7782_44238590',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '590a8d7da467f06f151112fd9ee50cf02bc4fcb4' => 
    array (
      0 => '/www/wwwroot/ca.futurehomes.vn/admin/application/views/static_page/default.tpl',
      1 => 1781150644,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a324aae1f7782_44238590 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/www/wwwroot/ca.futurehomes.vn/core/smarty/plugins/function.cycle.php','function'=>'smarty_function_cycle',),1=>array('file'=>'/www/wwwroot/ca.futurehomes.vn/core/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="ui-title-bar-container ui-title-bar-container--full-width">
	<div class="ui-title-bar">
		<div class="ui-title-bar__main-group">
			<div class="ui-title-bar__heading-group">
				<h1 class="ui-title-bar__title w-100">Trang tĩnh</h1>
				<p class="type--subdued">Quản lý nội dung các trang tĩnh (điều khoản, chính sách...) hiển thị ở cổng MyFuture.</p>
			</div>
		</div>
		<div class="action-bar">
			<div class="ui-title-bar__mobile-primary-actions">
				<div class="ui-title-bar__actions">
					<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=edit" class="ui-button ui-button--primary ui-title-bar__action">Thêm trang</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="ui-layout ui-layout--full-width">
	<div class="ui-layout__sections">
		<div class="ui-layout__section">
			<div class="ui-layout__item">
				<div class="ui-card">
					<div class="ui-card__section has-bulk-actions pages">
						<form method="post">
							<div class="form-search form-inline">
								<div class="form-group">
									<input type="text" class="form-control" name="keyword" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['keyword']->value, ENT_QUOTES, 'UTF-8', true);?>
" placeholder="Tìm theo tiêu đề..." />
								</div>
								<input type="hidden" name="filter" value="filter" />
								<button type="submit" class="btn btn-success"><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('search','Tìm');?>
</button>
								<div class="form-group pull-right">
									<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
" class="btn text-white btn-warning<?php if ($_smarty_tpl->tpl_vars['type_list']->value != 'Trash') {?> active<?php }?>">
										<i class="icon-folder-open icon-white"></i>
										<span>Tất cả (<?php echo $_smarty_tpl->tpl_vars['number_all']->value;?>
)</span>
									</a>
									<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&type_list=Trash" class="btn text-white btn-danger<?php if ($_smarty_tpl->tpl_vars['type_list']->value == 'Trash') {?> active<?php }?>">
										<i class="icon-warning-sign icon-white"></i>
										<span>Thùng rác (<?php echo $_smarty_tpl->tpl_vars['number_trash']->value;?>
)</span>
									</a>
								</div>
							</div>
							<div class="hastable">
								<table class="table table-vertical table-striped" cellspacing="0" cellpadding="0" width="100%">
									<thead><tr>
										<th class="text-left" width="80px">Ảnh</th>
										<th class="text-left">Tiêu đề</th>
										<th class="text-center" width="8%">Số mục</th>
										<th class="text-right" width="14%">Cập nhật lần cuối</th>
										<th class="text-center" width="10%">Trạng thái</th>
										<th class="text-center" width="40px">Action</th>
									</tr></thead>
									<?php if ($_smarty_tpl->tpl_vars['allItem']->value) {?>
									<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['allItem']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
									<tr class="<?php echo smarty_function_cycle(array('values'=>"row1,row2"),$_smarty_tpl);?>
">
										<td class="text-center">
											<a class="aspect-ratio aspect-ratio--square aspect-ratio--square--50 aspect-ratio--interactive" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=edit&page_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['page_id']);?>
">
												<?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['image']) {?><img class="aspect-ratio__content" src="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['image'];?>
" width="80px" /><?php } else { ?><span class="text-muted">&mdash;</span><?php }?>
											</a>
										</td>
										<td>
											<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=edit&page_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['page_id']);?>
"><strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title'], ENT_QUOTES, 'UTF-8', true);?>
</strong></a>
											<?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_trash'] == '1') {?><span class="fr text-red">Trong thùng rác</span><?php }?>
											<?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['_subtitle']) {?><div class="type--subdued"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['_subtitle'], ENT_QUOTES, 'UTF-8', true);?>
</div><?php }?>
										</td>
										<td class="text-center"><?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['_section_count'];?>
</td>
										<td class="text-right"><?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['_last_updated'] > 0) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['_last_updated'],"%d/%m/%Y");
} else { ?>&mdash;<?php }?></td>
										<td class="text-center">
											<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=toggle&page_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['page_id']);
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
&type_list=<?php echo $_smarty_tpl->tpl_vars['type_list']->value;?>
" title="Đổi trạng thái hiển thị">
												<?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_online'] == '1') {?><i class="fa fa-check-circle green"></i><?php } else { ?><i class="fa fa-minus-circle red"></i><?php }?>
											</a>
										</td>
										<td class="text-center" style="white-space: nowrap;">
											<div class="btn-group dropdown">
												<button class="btn iso-button-standard dropdown-toggle" type="button" data-toggle="dropdown"><i class="icon-cog"></i> <span class="caret"></span></button>
												<ul class="dropdown-menu" style="right:0px !important; left:auto">
													<?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_trash'] == '0') {?>
													<li><a title="Sửa" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=edit&page_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['page_id']);?>
"><i class="icon-edit"></i> <span>Sửa</span></a></li>
													<li><a title="Xoá vào thùng rác" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=trash&page_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['page_id']);
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
&type_list=<?php echo $_smarty_tpl->tpl_vars['type_list']->value;?>
"><i class="icon-trash"></i> <span>Thùng rác</span></a></li>
													<?php } else { ?>
													<li><a title="Khôi phục" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=restore&page_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['page_id']);
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
&type_list=<?php echo $_smarty_tpl->tpl_vars['type_list']->value;?>
"><i class="icon-refresh"></i> <span>Khôi phục</span></a></li>
													<li><a title="Xoá vĩnh viễn" class="confirm_delete" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=delete&page_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['page_id']);
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
&type_list=<?php echo $_smarty_tpl->tpl_vars['type_list']->value;?>
"><i class="icon-remove"></i> <span>Xoá vĩnh viễn</span></a></li>
													<?php }?>
												</ul>
											</div>
										</td>
									</tr>
									<?php
}
}
?>
									<?php } else { ?>
									<tr><td colspan="6" class="text-center type--subdued" style="padding:24px">Chưa có trang nào.</td></tr>
									<?php }?>
								</table>
								<div class="t-grid-pager-boder">
									<div class="t-pager t-reset fix-margin-pager">
										<?php echo $_smarty_tpl->tpl_vars['html_pager']->value;?>

									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php }
}
