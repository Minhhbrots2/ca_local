<?php
/* Smarty version 3.1.33, created on 2026-07-09 10:46:31
  from '/www/wwwroot/skyrealty.c-a.vn/admin/application/views/faqs/default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a4f19975a0796_26527607',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '481c62c60bc4ce5e237e266f618da6e8e2cede1c' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/admin/application/views/faqs/default.tpl',
      1 => 1783314575,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a4f19975a0796_26527607 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/www/wwwroot/skyrealty.c-a.vn/core/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="ui-title-bar-container">

	<div class="ui-title-bar">

		<div class="ui-title-bar__main-group">

			<div class="ui-title-bar__heading-group">

				<h1 class="ui-title-bar__title w-100"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('faqs');?>
</h1>

				<p class="type--subdued"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('This system allows you to manage & edit static pages in Systems');?>
</p>

			</div>

		</div>

		<div class="action-bar">

			<div class="ui-title-bar__mobile-primary-actions">

				<div class="ui-title-bar__actions">

					<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=setting&act=property&group=website" class="btn btn-primary text-white mr-2 ui-title-bar__action"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Category');?>
</a>

					<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=edit<?php echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
" class="btn btn-success ui-title-bar__action"><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('plus',$_smarty_tpl->tpl_vars['core']->value->get_Lang('Addnew'));?>
</a>

				</div>

			</div>

		</div>

	</div>

</div>

<div class="clearfix"></div>

<div class="ui-layout">

	<div class="ui-layout__sections">

		<div class="ui-layout__section">

			<div class="ui-layout__item">

				<div class="ui-card">

					<div class="next-tab__container">

						<ul class="next-tab__list filter-tab-list">

							<li class="filter-tab-item" data-tab-index="1">

								<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
" class="filter-tab filter-tab-active show-all-items next-tab next-tab--is-active"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('AllPages');?>
</a>

							</li>

						</ul>

					</div>

					<div class="ui-card__section has-bulk-actions pages">

						<form method="post">

							<div class="form-search d-flex align-items-center justify-content-between">

								<div class="d-flex form-inline w-60">

									<select name="domain" class="iso-selectize mr-2 required" style="width:30%">

										<option value="0">--<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Domain');?>
</option>

										<?php if (!empty($_smarty_tpl->tpl_vars['list_domains']->value)) {?>

											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_domains']->value, '_oDomain');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oDomain']->value) {
?>

											<option<?php ob_start();
echo $_smarty_tpl->tpl_vars['_oDomain']->value['domain'];
$_prefixVariable1 = ob_get_clean();
if ($_smarty_tpl->tpl_vars['domain']->value == $_prefixVariable1) {?> selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['_oDomain']->value['domain'];?>
"><?php echo $_smarty_tpl->tpl_vars['_oDomain']->value['title'];?>
</option>

											<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

										<?php }?>

									</select>

									<select name="cat_id" class="iso-selectize mr-2 required" style="width:30%">

										<option value="0">--<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('All');?>
</option>

										<?php echo $_smarty_tpl->tpl_vars['clsProperty']->value->getListOption('_CATEGORYFAQS',$_smarty_tpl->tpl_vars['cat_id']->value);?>


									</select>

									<input type="text" class="form-control mr-2" name="keyword" value="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('search');?>
" />

									<input type="hidden" name="filter" value="filter" />

									<button type="submit" class="btn btn-success"><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('search');?>
</button>

								</div>

								<div class="form-group pull-right d-flex">

									<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
" class="btn text-white btn-warning mr-2">

										<i class="icon-folder-open icon-white"></i> 

										<span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('all');?>
 (<?php echo $_smarty_tpl->tpl_vars['number_all']->value;?>
)</span>

									</a>

									<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&type_list=Trash" class="btn text-white btn-danger mr-2">

										<i class="icon-warning-sign icon-white"></i> 

										<span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('trash');?>
 (<?php echo $_smarty_tpl->tpl_vars['number_trash']->value;?>
)</span>

									</a>

									<a href="javascript:void(0)" class="btn btn-danger text-white btn-delete-all" 

									style="display: none" clsTable="FAQ"> 

                           				<i class="icon-remove icon-white"></i> 

                           				<span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Delete');?>
</span> 

                           			</a>

								</div>

							</div>

							<div class="hastable table-wrapper">

								<input type="hidden" id="list_selected_chkitem" value="" />

								<table cellspacing="0" class="table table-ilooca table-striped" width="100%">

									<thead><tr>

										<th class="text-center" width="3%">

											<div class="checkbox">

												<input type="checkbox" id="check_all" class="check_all styled" value="1">

												<label></label>

											</div>

										</th>

										<th class="text-left"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Title');?>
</th>

										<th class="text-left" width="6%"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Status');?>
</th>

										<th class="text-right" width="15%"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('update');?>
</th>

										<th class="text-center" colspan="4" width="4%"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('move');?>
</th>

										<th class="text-left" width="100px"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Action');?>
</th>

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

									<?php $_smarty_tpl->_assignInScope('faq_id', $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['faq_id']);?>

									<?php $_smarty_tpl->_assignInScope('list_tags', $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['list_tags']);?>

									<tr class="<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)%2 == 0) {?>row1<?php } else { ?>row2<?php }?>">

										<td class="text-center">

											<div class="checkbox">

												<input type="checkbox" name="p_key[]" class="chkitem styled" value="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['faq_id'];?>
">

												<label></label>

											</div>

										</td>

										<td class="text-left">

											<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTitle($_smarty_tpl->tpl_vars['faq_id']->value);?>


											<?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_trash'] == '1') {?>

											<span class="pull-right text-muted"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Trash');?>
</span>

											<?php }?>

											<?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cat_id'] > '0') {?>

											<div class="text-muted"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Category');?>
: <?php echo $_smarty_tpl->tpl_vars['clsProperty']->value->getTitle($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cat_id']);?>
</div>

											<?php }?>

											<?php if (!empty($_smarty_tpl->tpl_vars['list_tags']->value)) {?>

												<div class="mt-2">

													<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_tags']->value, 'tag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
?>

														<span class="label label-primary p-1 fs-tiny"><?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
</span>

													<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>												

												</div>

											<?php }?>

										</td>

										<td class="text-center">

											<a href="javascript:void(0);" class="SiteClickPublic" clsTable="FAQ" pkey="faq_id" sourse_id="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['faq_id'];?>
" rel="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('is_online',$_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['faq_id']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Click to change status');?>
">

												<?php if ($_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('is_online',$_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['faq_id']) == '1') {?>

												<i class="fa fa-check-circle green"></i>

												<?php } else { ?>

												<i class="fa fa-minus-circle red"></i>

												<?php }?>

											</a>

										</td>

										<td class="text-center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reg_date'],"%d/%m/%Y %H:%M");?>
</td>

										<td class="text-center">

											<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] : null)) {?>

											<a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('movetop');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=move&direct=movetop&faq_id=<?php echo $_smarty_tpl->tpl_vars['faq_id']->value;
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
"><i class="icon-circle-arrow-up"></i></a>

											<?php }?>

										</td>

										<td class="text-center">

											<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['last'] : null)) {?>

											<a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('movebottom');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=move&direct=movebottom&faq_id=<?php echo $_smarty_tpl->tpl_vars['faq_id']->value;
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
"><i class="icon-circle-arrow-down"></i></a>

											<?php }?>

										</td>

										<td class="text-center">

											<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] : null)) {?>

											<a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('moveup');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=move&direct=moveup&faq_id=<?php echo $_smarty_tpl->tpl_vars['faq_id']->value;
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
"><i class="icon-arrow-up"></i></a>

											<?php }?>

										</td>

										<td class="text-center">

											<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['last'] : null)) {?>

											<a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('movedown');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=move&direct=movedown&faq_id=<?php echo $_smarty_tpl->tpl_vars['faq_id']->value;
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
"><i class="icon-arrow-down"></i></a>

											<?php }?>

										</td>

										<td class="text-center" style="white-space:nowrap;">

											<div class="btn-group dropdown">

												<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">

													<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Action');?>


													<span class="caret"></span>

												</button>

												<ul class="dropdown-menu" style="right:0px !important; left:auto">

													<?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_trash'] == '0') {?>

													<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=edit&faq_id=<?php echo $_smarty_tpl->tpl_vars['faq_id']->value;
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
"><i class="icon-edit"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
</span></a></li>

													<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('trash');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=trash&faq_id=<?php echo $_smarty_tpl->tpl_vars['faq_id']->value;
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
"><i class="icon-trash"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('trash');?>
</span></a></li>

													<?php } else { ?>

													<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('restore');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=restore&faq_id=<?php echo $_smarty_tpl->tpl_vars['faq_id']->value;
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
"><i class="icon-refresh"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('restore');?>
</span></a></li>

													<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
" class="confirm_delete" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=delete&faq_id=<?php echo $_smarty_tpl->tpl_vars['faq_id']->value;
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

								<div class="statistical mt5">

									<table width="100%" border="0" cellpadding="3" cellspacing="0">

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

											<td width="50%" align="right">

												<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('gotopage');?>
:

												<select name="page" onchange="window.location = this.options[this.selectedIndex].value">

													<?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listPageNumber']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] = ($__section_i_1_iteration === 1);
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['last'] = ($__section_i_1_iteration === $__section_i_1_total);
?>

													<option <?php if ($_smarty_tpl->tpl_vars['listPageNumber']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)] == $_smarty_tpl->tpl_vars['currentPage']->value) {?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['link_page_current']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['listPageNumber']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)];?>
"><?php echo $_smarty_tpl->tpl_vars['listPageNumber']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)];?>
</option>

													<?php
}
}
?>

												</select>

											</td>

										</tr>

									</table>

								</div>

							</div>

						</form>

					</div>

				</div>

			</div>

		</div>

	</div>

</div><?php }
}
