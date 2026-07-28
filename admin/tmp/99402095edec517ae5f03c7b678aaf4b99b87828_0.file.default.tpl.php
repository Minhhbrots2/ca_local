<?php
/* Smarty version 3.1.33, created on 2025-11-28 17:49:22
  from '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/page/default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_69297e32167b36_48320906',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99402095edec517ae5f03c7b678aaf4b99b87828' => 
    array (
      0 => '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/page/default.tpl',
      1 => 1730083834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69297e32167b36_48320906 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/fhgroupt/ca.futurehomes.vn/core/smarty/plugins/function.cycle.php','function'=>'smarty_function_cycle',),1=>array('file'=>'/home/fhgroupt/ca.futurehomes.vn/core/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="ui-title-bar-container ui-title-bar-container--full-width">
	<div class="ui-title-bar">
		<div class="ui-title-bar__main-group">
			<div class="ui-title-bar__heading-group">
				<h1 class="ui-title-bar__title w-100"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Page');?>
</h1>
				<p class="type--subdued"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('This system allows you to manage & edit static pages in Systems');?>
</p>
			</div>
		</div>
		<div class="action-bar">
			<div class="ui-title-bar__mobile-primary-actions">
				<div class="ui-title-bar__actions">
					<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=edit<?php echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
" class="ui-button ui-button--primary ui-title-bar__action"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Addnew');?>
</a>
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
								<div class="form-group">
									<input type="text" class="form-control" name="keyword" value="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('search');?>
" />
								</div>
								<input type="hidden" name="filter" value="filter" />
								<button type="submit" class="btn btn-success"><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('search','Search');?>
</button>
								<div class="form-group pull-right">
									<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
" class="btn text-white btn-warning">
										<i class="icon-folder-open icon-white"></i> 
										<span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('all');?>
 (<?php echo $_smarty_tpl->tpl_vars['number_all']->value;?>
)</span>
									</a>
									<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&type_list=Trash<?php echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
" class="btn text-white btn-danger">
										<i class="icon-warning-sign icon-white"></i> 
										<span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('trash');?>
(<?php echo $_smarty_tpl->tpl_vars['number_trash']->value;?>
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
								<table class="table table-vertical table-striped" cellspacing="0" cellpadding="0" width="100%">
									<thead><tr>
										<th width="5%" class="text-center">
											<div class="checkbox">
												<input type="checkbox" id="check_all" class="check_all styled" value="1" />
												<label></label>
											</div>
										</th>
										<th class="text-left" width="80px"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Image');?>
</th>
										<th class="text-left"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('titleofarticle');?>
</th>
										<th class="text-center" width="10%"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('status');?>
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
										<td class="text-center">
											<a class="aspect-ratio aspect-ratio--square aspect-ratio--square--50 aspect-ratio--interactive" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=edit&page_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['page_id']);?>
">
												<img class="aspect-ratio__content" src="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['image'];?>
" width="80px" />
											</a>
										</td>
										<td><a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=edit&page_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['page_id']);?>
"><?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTitle($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['page_id']);?>
</a>
											<?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_trash'] == '1') {?><span class="fr text-red"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('intrash');?>
</span><?php }?>
                                        </td>
										<td class="text-center">
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
												<button class="btn iso-button-standard dropdown-toggle" type="button" data-toggle="dropdown"> <i class="icon-cog"></i> <span class="caret"></span></button>
												<ul class="dropdown-menu" style="right:0px !important; left:auto">
													<?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_trash'] == '0') {?>
													<li><a href="<?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;
echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getLink($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['page_id']);?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('view');?>
"><i class="icon-eye-open"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('view');?>
</span></a></li>
													<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=edit&page_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['page_id']);?>
"><i class="icon-edit"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
</span></a></li>
													<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('trash');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=trash&page_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['page_id']);
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
"><i class="icon-trash"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('trash');?>
</span></a></li>
													<?php } else { ?>
													<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('restore');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=restore&page_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['page_id']);
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
"><i class="icon-refresh"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('restore');?>
</span></a></li>
													<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
" class="confirm_delete" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=delete&page_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['page_id']);
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
</div><?php }
}
