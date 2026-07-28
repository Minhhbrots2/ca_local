<?php
/* Smarty version 3.1.33, created on 2026-06-06 11:34:51
  from '/www/wwwroot/ca.futurehomes.vn/admin/application/views/shop/default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a23a36b4dcb77_79817087',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ebd1f17dad73a2280bd6edd725cae1b0a99e691' => 
    array (
      0 => '/www/wwwroot/ca.futurehomes.vn/admin/application/views/shop/default.tpl',
      1 => 1780720351,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a23a36b4dcb77_79817087 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/www/wwwroot/ca.futurehomes.vn/core/smarty/plugins/function.cycle.php','function'=>'smarty_function_cycle',),1=>array('file'=>'/www/wwwroot/ca.futurehomes.vn/core/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="ui-title-bar-container ui-title-bar-container--full-width">

	<div class="ui-title-bar">

		<div class="ui-title-bar__main-group">

			<div class="ui-title-bar__heading-group">

				<h1 class="ui-title-bar__title w-100">Cửa hàng/ Dịch vụ / Tiện ích</h1>

				<p class="type--subdued"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('This system allows you to manage & edit static pages in Systems');?>
</p>

			</div>

		</div>

		<div class="action-bar">

			<div class="ui-title-bar__mobile-primary-actions">

				<div class="ui-title-bar__actions">

					<a href="javascript:void(0);" onClick="$Core.shop.open(this, event)" shop_id="0" class="ui-button ui-button--primary ui-title-bar__action <?php if ($_smarty_tpl->tpl_vars['clsISO']->value->_DEV()) {?>dev<?php }?>"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Addnew');?>
</a>

					<a href="?mod=setting&act=property&group=general#_SHOP" target="_blank" class="ui-button ui-button--default ui-title-bar__action <?php if ($_smarty_tpl->tpl_vars['clsISO']->value->_DEV()) {?>dev<?php }?>"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Category');?>
</a>

					<a href="?mod=setting&act=setting#_LIST_FORM_BUSINESS" target="_blank" class="ui-button ui-button--default ui-title-bar__action <?php if ($_smarty_tpl->tpl_vars['clsISO']->value->_DEV()) {?>dev<?php }?>">Loại hình</a>

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

					<div class="next-tab__container">

						<ul class="next-tab__list filter-tab-list">

							<li class="filter-tab-item" data-tab-index="1">

								<a class="filter-tab filter-tab-active show-all-items next-tab next-tab--is-active">

                                    <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('AllPages');?>


                                </a>

							</li>

						</ul>

					</div>

					<div class="ui-card__section has-bulk-actions pages">

						<form method="post">

							<div class="form-search form-inline">

								<?php $_smarty_tpl->_assignInScope('toId', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>

								<div class="form-group" style="width: 200px">

									<select name="project_id" class="form-control w-100" onChange="$Core.shop.select_block(this, event)" toId="<?php echo $_smarty_tpl->tpl_vars['toId']->value;?>
_Block_Id">

										<option value="0">Chọn dự án</option>

										<?php if (!empty($_smarty_tpl->tpl_vars['list_projects']->value)) {?>

											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_projects']->value, '_project', false, NULL, 'i', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_project']->value) {
?>

											<option<?php if ($_smarty_tpl->tpl_vars['project_id']->value == $_smarty_tpl->tpl_vars['_project']->value['project_id']) {?> selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['_project']->value['project_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_project']->value['title'];?>
</option>

											<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

										<?php }?>

									</select>

								</div>

								<div class="form-group">

									<select name="block_id" class="form-control" toId="<?php echo $_smarty_tpl->tpl_vars['toId']->value;?>
_Block_Id" id="<?php echo $_smarty_tpl->tpl_vars['toId']->value;?>
_Block_Id">

										<option value="0">Chọn phân khu</option>

										<?php if (!empty($_smarty_tpl->tpl_vars['list_blocks']->value)) {?>

											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_blocks']->value, '_oblock');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oblock']->value) {
?>

											<option<?php if ($_smarty_tpl->tpl_vars['block_id']->value == $_smarty_tpl->tpl_vars['_oblock']->value['property_id']) {?> selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['_oblock']->value['property_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_oblock']->value['title'];?>
</option>

											<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

										<?php }?>

									</select>

								</div>

								<div class="form-group<?php if (empty($_smarty_tpl->tpl_vars['list_buildings']->value)) {?> d-none<?php }?>">

									<select name="building_id" class="form-control" id="<?php echo $_smarty_tpl->tpl_vars['toId']->value;?>
_Building_Id">

										<option value="0">Chọn phân khu</option>

										<?php if (!empty($_smarty_tpl->tpl_vars['list_buildings']->value)) {?>

											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_buildings']->value, '_obuilding');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_obuilding']->value) {
?>

											<option<?php if ($_smarty_tpl->tpl_vars['building_id']->value == $_smarty_tpl->tpl_vars['_obuilding']->value['property_id']) {?> selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['_obuilding']->value['property_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_obuilding']->value['title'];?>
</option>

											<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

										<?php }?>

									</select>

								</div>

								<div class="form-group" style="width: 200px">

									<select name="cat_id" class="form-control w-100">

										<option value="0">Chọn danh mục</option>

										<?php echo $_smarty_tpl->tpl_vars['clsProperty']->value->getListOption('_SHOP',$_smarty_tpl->tpl_vars['cat_id']->value);?>


									</select>

								</div>

								<input type="hidden" name="filter" value="filter" />

								<div class="form-group">

									<input type="text" class="form-control" name="keyword" value="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('search');?>
" />

								</div>

								<button type="submit" class="btn btn-success"><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('search','Search');?>
</button>

								<div class="form-group pull-right">

									<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
" class="btn text-white btn-warning">

										<i class="icon-folder-open icon-white"></i> 

										<span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('all');?>
 (<?php echo $_smarty_tpl->tpl_vars['total_record']->value;?>
)</span>

									</a>

									<a href="javascript:void(0)" clsTable="News" class="btn btn-danger text-white btn-delete-all" style="display:none"> 

                           				<i class="icon-remove icon-white"></i> 

                           				<span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Delete');?>
</span> 

                           			</a>

								</div>

							</div>

							<div class="hastable">

								<table class="table mb-0 table-striped" cellspacing="0" cellpadding="0" width="100%">

									<thead><tr>

										<th width="5%" class="text-center">

											<div class="checkbox">

												<input type="checkbox" id="check_all" class="check_all styled" value="1" />

												<label></label>

											</div>

										</th>

										<th class="text-left"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('titleofarticle');?>
</th>

										<th class="text-left" width="15%">Phân khu</th>

										<th class="text-left" width="15%">Tòa</th>

										<th class="text-left" width="15%">Danh mục</th>

										<th class="text-center" width="5%"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('status');?>
</th>

										<th class="text-right" width="12%"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('update');?>
</th>

										<th class="text-center" colspan="4" width="4%"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('move');?>
</th>

										<th class="text-center" width="40px">Action</th>

									</tr></thead>

									<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['allItem']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] = ($__section_i_0_iteration === 1);
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['last'] = ($__section_i_0_iteration === $__section_i_0_total);
?>

									<tr class="<?php echo smarty_function_cycle(array('values'=>"row1,row2"),$_smarty_tpl);?>
">

										<td class="text-center">

											<div class="checkbox">

												<input type="checkbox" name="p_key[]" class="chkitem styled" value="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['page_id'];?>
" />

												<label></label>

											</div>

										</td>

										<td class="text-left"><a href="javascript:void(0);" onClick="$Core.shop.open(this, event)" shop_id="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)][$_smarty_tpl->tpl_vars['pkeyTable']->value];?>
">

											<strong class="fs-16"><?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title'];?>
</strong></a>

											<?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_trash'] == '1') {?><span class="fr text-red"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('intrash');?>
</span><?php }?>

                                        </td>

										<td class="text-left"><?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['block_name'];?>
</td>

										<td class="text-left"><?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['building_name'];?>
</td>

										<td class="text-left"><?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cat_name'];?>
</td>

										<td class="text-center bg-gray">

											<a href="javascript:void(0);" class="SiteClickPublic" clsTable="News" pkey="<?php echo $_smarty_tpl->tpl_vars['pkeyTable']->value;?>
" sourse_id="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)][$_smarty_tpl->tpl_vars['pkeyTable']->value];?>
" rel="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('is_online',$_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)][$_smarty_tpl->tpl_vars['pkeyTable']->value]);?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Click to change status');?>
">

												<?php if ($_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('is_online',$_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)][$_smarty_tpl->tpl_vars['pkeyTable']->value]) == '1') {?>

												<i class="fa fa-check-circle green"></i>

												<?php } else { ?>

												<i class="fa fa-minus-circle red"></i>

												<?php }?>

											</a>

										</td>

										<td style="text-align:right"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reg_date'],"%d/%m/%Y %H:%M");?>
</td>

										<td class="text-center">

											<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] : null)) {?>

											<a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('movetop');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=move&direct=movetop&page_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['page_id']);
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
"><i class="icon-circle-arrow-up"></i></a>

											<?php }?>

										</td>

										<td class="text-center">

											<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['last'] : null)) {?>

											<a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('movebottom');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=move&direct=movebottom&page_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['page_id']);
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
"><i class="icon-circle-arrow-down"></i></a>

											<?php }?>

										</td>

										<td class="text-center">

											<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] : null)) {?>

											<a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('moveup');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=move&direct=moveup&page_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['page_id']);
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
"><i class="icon-arrow-up"></i></a>

											<?php }?>

										</td>

										<td class="text-center">

											<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['last'] : null)) {?>

											<a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('movedown');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=move&direct=movedown&page_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['page_id']);
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
"><i class="icon-arrow-down"></i></a>

											<?php }?>

										</td>

										<td class="text-center" style="white-space: nowrap;">

											<div class="btn-group dropdown">

												<button class="btn iso-button-standard dropdown-toggle" type="button" data-toggle="dropdown">

													<i class="icon-cog"></i> 

													<span class="caret"></span>

												</button>

												<ul class="dropdown-menu" style="right:0px !important; left:auto">

													<?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_trash'] == '0') {?>

													<li><a href="javascript:void(0);" onClick="$Core.shop.open(this, event)" shop_id="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)][$_smarty_tpl->tpl_vars['pkeyTable']->value];?>
"><i class="icon-edit"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
</span>

													</a></li>

													<li><a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=trash&shop_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['shop_id']);
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
"><i class="icon-trash"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('trash');?>
</span></a></li>

													<?php } else { ?>

													<li><a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=restore&shop_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['shop_id']);
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
"><i class="icon-refresh"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('restore');?>
</span></a></li>

													<li><a class="confirm_delete" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=delete&shop_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['shop_id']);
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
"><i class="icon-remove"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
</span></a></li>

													<?php }?>

												</ul>

											</div>

										</td>

									</tr>

									<?php
}
}
?>

								</table>

								<div class="d-flex justify-content-center">

									<ul class="pagination">

										<?php echo $_smarty_tpl->tpl_vars['html_pager']->value;?>


									</ul>

								</div>

							</div>

						</form>

					</div>

				</div>

			</div>

		</div>

	</div>

</div>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL_CSS']->value;?>
/shop.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php }
}
