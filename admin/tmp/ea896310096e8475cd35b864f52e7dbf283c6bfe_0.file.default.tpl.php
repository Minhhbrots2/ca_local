<?php
/* Smarty version 3.1.33, created on 2026-06-11 14:26:02
  from '/www/wwwroot/ca.futurehomes.vn/admin/application/views/package/default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a2a630a062892_87548436',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea896310096e8475cd35b864f52e7dbf283c6bfe' => 
    array (
      0 => '/www/wwwroot/ca.futurehomes.vn/admin/application/views/package/default.tpl',
      1 => 1781150634,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a2a630a062892_87548436 (Smarty_Internal_Template $_smarty_tpl) {
?><header class="ui-title-bar-container">
	<div class="ui-title-bar ui-title-bar--separator">
		<div class="ui-title-bar__main-group">
			<div class="ui-title-bar__heading-group">
				<h1 class="ui-title-bar__title">Gói tài khoản</h1>
			</div>
		</div>
		<div class="action-bar">
			<div class="ui-title-bar__mobile-primary-actions">
				<div class="ui-title-bar__actions">
					<a href="javascript:void(0)" onClick="$Core.package.open(this, event)" property_id="0" class="ui-button ui-button--primary ui-title-bar__action"><i class="fa fa-plus"></i> Thêm gói</a>
				</div>
			</div>
		</div>
	</div>
</header>
<div class="clearfix"></div>
<form method="post" action="" enctype="multipart/form-data">
	<div class="ui-layout">
		<div class="ui-layout__sections">
			<div class="ui-layout__section">
				<div class="ui-layout__item">
					<div class="ui-card">
						<div class="next-tab__container">
							<ul class="next-tab__list filter-tab-list">
								<li class="filter-tab-item" data-tab-index="1">
									<a href="javascript:void(0);" class="filter-tab filter-tab-active next-tab next-tab--is-active">Danh sách gói</a>
								</li>
							</ul>
						</div>
						<div class="clearfix"></div>
						<div id="package" class="ui-card__section has-bulk-actions">
							<div class="form-search form-inline">
								<div class="form-group">
									<div class="input-group">
										<input type="text" class="form-control" name="keyword" value="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('search');?>
" />
									</div>
								</div>
								<input type="hidden" name="filter" value="filter" />
								<button type="submit" class="btn btn-success"><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('search','Search');?>
</button>
							</div>
							<div class="hastable">
								<table cellspacing="0" class="table table-vertical table-striped" width="100%">
									<thead><tr>
										<th class="text-center" width="5%">No.</th>
										<th class="text-left">Tên gói</th>
										<th class="text-left" width="10%">Mã</th>
										<th class="text-right" width="13%">3 tháng</th>
										<th class="text-right" width="11%">6 tháng</th>
										<th class="text-right" width="11%">12 tháng</th>
										<th class="text-center" width="8%">Dùng thử</th>
										<th class="text-center" width="90px"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Action');?>
</th>
									</tr></thead>
									<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['allItem']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $__section_i_0_total; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
									<tr class="<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)%2 == 0) {?>row1<?php } else { ?>row2<?php }?>">
										<td class="text-center"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null);?>
</td>
										<td class="text-left"><a href="javascript:void(0);" class="bold" onClick="$Core.package.open(this, event)" property_id="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['property_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title'];?>
</a></td>
										<td class="text-left"><?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['property_code'];?>
</td>
										<td class="text-right"><?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['mi']['price_3month_f'];?>
</td>
										<td class="text-right"><?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['mi']['price_6month_f'];?>
</td>
										<td class="text-right"><?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['mi']['price_year_f'];?>
</td>
										<td class="text-center"><?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['mi']['day_trial']) {
echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['mi']['day_trial'];?>
 ngày<?php } else { ?>-<?php }?></td>
										<td class="text-center" style="white-space:nowrap;">
											<div class="btn-group dropdown">
												<button class="btn iso-button-standard dropdown-toggle" type="button" data-toggle="dropdown"><i class="icon-cog"></i> <span class="caret"></span></button>
												<ul class="dropdown-menu" style="right:0px !important; left: auto">
													<li><a href="javascript:void(0);" title="Chỉnh sửa" onClick="$Core.package.open(this, event)" property_id="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['property_id'];?>
"><i class="icon-edit"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
</span></a></li>
													<li><a href="javascript:void(0);" title="Phân quyền" onClick="$Core.permiss.open(this, event)" profile_type="MF" for_id="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['property_id'];?>
"><i class="fa fa-key"></i> <span>Phân quyền</span></a></li>
													<li><a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=delete&property_id=<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['property_id'];?>
" title="Xóa" class="confirm_delete"><i class="icon-remove"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
</span></a></li>
												</ul>
											</div>
										</td>
									</tr>
									<?php
}
}
?>
								</table>
								<?php if ($_smarty_tpl->tpl_vars['totalPage']->value > 1) {?>
								<div class="statistical">
									<table width="100%" border="0" cellpadding="2" cellspacing="0">
										<tr>
											<td width="50%" align="left">
												<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('statistical');?>
 <strong><?php echo $_smarty_tpl->tpl_vars['totalRecord']->value;?>
</strong> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('records');?>
/<strong><?php echo $_smarty_tpl->tpl_vars['totalPage']->value;?>
</strong> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('page');?>
. <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('youareonpagenumber');?>
 <strong><?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
</strong>
											</td>
											<td width="50%" class="text-right">
												<div class="d-inline-flex align-items-center">
													<span class="mr-2"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('gotopage');?>
:</span>
													<select name="page" class="form-control w-40" onchange="window.location = this.options[this.selectedIndex].value">
														<?php
$__section_p_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listPageNumber']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_p_1_total = $__section_p_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_p'] = new Smarty_Variable(array());
if ($__section_p_1_total !== 0) {
for ($__section_p_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index'] = 0; $__section_p_1_iteration <= $__section_p_1_total; $__section_p_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index']++){
?>
														<option <?php if ($_smarty_tpl->tpl_vars['listPageNumber']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_p']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index'] : null)] == $_smarty_tpl->tpl_vars['currentPage']->value) {?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['link_page_current']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['listPageNumber']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_p']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index'] : null)];?>
"><?php echo $_smarty_tpl->tpl_vars['listPageNumber']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_p']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index'] : null)];?>
</option>
														<?php
}
}
?>
													</select>
												</div>
											</td>
										</tr>
									</table>
								</div>
								<?php }?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
<?php }
}
