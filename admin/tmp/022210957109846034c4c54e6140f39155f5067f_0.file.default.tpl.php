<?php
/* Smarty version 3.1.33, created on 2025-11-19 10:54:12
  from '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/download/default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_691d3f64891712_33683508',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '022210957109846034c4c54e6140f39155f5067f' => 
    array (
      0 => '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/download/default.tpl',
      1 => 1730083834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_691d3f64891712_33683508 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/fhgroupt/ca.futurehomes.vn/core/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="ui-title-bar-container ui-title-bar-container--full-width">
	<div class="ui-title-bar">
		<div class="ui-title-bar__main-group">
			<div class="ui-title-bar__heading-group">
				<h1 class="ui-title-bar__title w-100"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Documents');?>
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
&act=category" class="btn btn-md btn-danger mr-2">
						<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Category');?>

					</a>
					<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=edit" class="btn btn-md text-white btn-success">
						<?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('plus',$_smarty_tpl->tpl_vars['core']->value->get_Lang('Addnew'));?>

					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="ui-layout ui-layout--full-width">
	<div class="ui-layout__sections"><div class="ui-layout__section">
		<div class="ui-layout__item"><div class="ui-card">
			<div class="next-tab__container">
				<ul class="next-tab__list filter-tab-list">
					<li class="filter-tab-item">
						<a class="filter-tab filter-tab-active show-all-items next-tab next-tab--is-active"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('All Documents');?>
</a>
					</li>
				</ul>
			</div>
			<div class="ui-card__section has-bulk-actions pages">
				<form method="post">
					<div class="form-search form-inline">
						<div class="form-group w-200px">
							<select name="cat_id" data-width="100%" class="form-control w-100 iso-selectize required">
								<?php echo $_smarty_tpl->tpl_vars['clsCategory']->value->makeSelectboxOption(0,'_DOWNLOAD',$_smarty_tpl->tpl_vars['cat_id']->value);?>

							</select>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="keyword" value="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('search');?>
" />
						</div>
						<input type="hidden" name="filter" value="filter" />
						<button type="submit" class="btn btn-success"><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('search','Search');?>
</button>
						<div class="pull-right">
							<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
" class="btn btn-warning text-white">
								<?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('folder-o',$_smarty_tpl->tpl_vars['core']->value->get_Lang('all'));?>
 (<?php echo $_smarty_tpl->tpl_vars['number_all']->value;?>
)
							</a>
							<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&type_list=Trash" class="btn btn-primary text-white">
								<?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('trash',$_smarty_tpl->tpl_vars['core']->value->get_Lang('trash'));?>
 (<?php echo $_smarty_tpl->tpl_vars['number_trash']->value;?>
)
							</a>
						</div>	
					</div>
				</form>
				<div class="hastable">
					<table class="table table-vertical table-striped" cellspacing="0" cellpadding="0" width="100%">
						<thead><tr>
							<th class="gridheader"><strong>STT</strong></th>
							<th class="gridheader" style="text-align:left"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('titleofarticle');?>
</strong></th>
							<th class="gridheader" style="text-align:left"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('category');?>
</strong></th>
							<th class="gridheader" style="width:6%;"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('status');?>
</strong></th>
							<th class="gridheader" style="width:12%; text-align:right"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('update');?>
</strong></th>
							<th class="gridheader" colspan="4" style="width:4%"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('move');?>
</strong></th>
							<th class="gridheader"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('func');?>
</strong></td>
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
						<tr>
							<td class="text-center"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)+1;?>
</td>
							<td class="text-left">
								<strong><?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_online'] == 0) {?><span class="text-danger">[PRIVATE]</span><?php } else { ?><span class="text-success">[PUBLISH]</span><?php }?>
								<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTitle($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['download_id']);?>
</strong>
								<?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_trash'] == '1') {?>
								<span class="fr" style="color:#CCC"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('intrash');?>
</span>
								<?php }?>
							</td>
							<td class="text-left">
								<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?admin&mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&downloadcat_id=<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['downloadcat_id'];?>
">
								<i class="fa fa-folder-open"></i> <?php echo $_smarty_tpl->tpl_vars['clsCategory']->value->getTitle($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cat_id']);?>
</a>
							</td>
							<td class="text-center">
								<a href="javascript:void(0);" class="SiteClickPublic" clsTable="Download" pkey="<?php echo $_smarty_tpl->tpl_vars['pkeyTable']->value;?>
" sourse_id="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)][$_smarty_tpl->tpl_vars['pkeyTable']->value];?>
" rel="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_online'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Click to change status');?>
">
									<?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_online'] == '1') {?>
										<i class="fa fa-check-circle green"></i>
									<?php } else { ?>
										<i class="fa fa-minus-circle red"></i>
									<?php }?>
								</a>
							</td>
							<td class="text-right"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reg_date'],"%d/%m/%Y %H:%M");?>
</td>
							<td class="text-center">
								<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] : null)) {?>
								<a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('movetop');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=move&direct=movetop&download_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['download_id']);
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
"><i class="icon-circle-arrow-up"></i></a>
								<?php }?>
							</td>
							<td class="text-center">
								<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['last'] : null)) {?>
								<a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('movebottom');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=move&direct=movebottom&download_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['download_id']);
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
"><i class="icon-circle-arrow-down"></i></a>
								<?php }?>
							</td>
							<td class="text-center">
								<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] : null)) {?>
								<a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('moveup');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=move&direct=moveup&download_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['download_id']);
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
"><i class="icon-arrow-up"></i></a>
								<?php }?>
							</td>
							<td class="text-center">
								<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['last'] : null)) {?>
								<a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('movedown');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=move&direct=movedown&download_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['download_id']);
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
"><i class="icon-arrow-down"></i></a>
								<?php }?>
							</td>
							<td class="text-center" style="width:40px; white-space:nowrap;">
								<div class="btn-group">
									<button class="btn iso-button-standard dropdown-toggle" type="button" data-toggle="dropdown">
										<i class="icon-cog"></i> <span class="caret"></span>
									</button>
									<ul class="dropdown-menu" style="right:0px !important">
										<?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_trash'] == '0') {?>
										<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=edit&download_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['download_id']);?>
"><i class="icon-edit"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
</span></a></li>
										<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('trash');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=trash&download_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['download_id']);
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
"><i class="icon-trash"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('trash');?>
</span></a></li>
										<?php } else { ?>
										<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('restore');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=restore&download_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['download_id']);
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
"><i class="icon-refresh"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('restore');?>
</span></a></li>
										<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
" class="confirm_delete" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=delete&download_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['download_id']);
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
"><i class="icon-remove"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
</span></a></li>
										<?php }?>
										<?php if ($_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteHasDuplicate_News')) {?>
										<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('duplicate');?>
" class="ajDuplicateNews" download_id="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['download_id'];?>
"><i class="icon-share"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('duplicate');?>
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
			</div>
		</div></div>
	</div></div>
</div><?php }
}
