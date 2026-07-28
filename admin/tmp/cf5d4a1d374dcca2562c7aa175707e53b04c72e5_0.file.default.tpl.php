<?php
/* Smarty version 3.1.33, created on 2026-07-10 13:55:58
  from '/www/wwwroot/skyrealty.c-a.vn/admin/application/views/feedback/default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a50977e02a8e6_54011039',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf5d4a1d374dcca2562c7aa175707e53b04c72e5' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/admin/application/views/feedback/default.tpl',
      1 => 1783314575,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a50977e02a8e6_54011039 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="ui-title-bar-container ui-title-bar-container--full-width">
	<div class="ui-title-bar">
		<div class="ui-title-bar__main-group">
			<div class="ui-title-bar__heading-group">
				<h1 class="ui-title-bar__title w-100"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Feedback');?>
</h1>
				<p class="type--subdued"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('This system allows you to manage & edit static pages in Systems');?>
</p>
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
								<a class="filter-tab filter-tab-active show-all-items next-tab next-tab--is-active"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('All');?>
</a>
							</li>
						</ul>
					</div>
					<div class="ui-card__section has-bulk-actions pages">
						<form method="post">
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
								<div class="form-group pull-right">
									<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&type_list=Approved<?php echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
" class="btn text-white btn-warning">
										<i class="icon-folder-open icon-white"></i> 
										<span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Offered');?>
 (<?php echo $_smarty_tpl->tpl_vars['number_process']->value;?>
)</span>
									</a>
									<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&type_list=Pendding<?php echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
" class="btn text-white btn-danger">
										<i class="icon-warning-sign icon-white"></i> 
										<span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Reminding');?>
 (<?php echo $_smarty_tpl->tpl_vars['number_unprocess']->value;?>
)</span>
									</a>
									<a href="javascript:void(0)" clsTable="News" class="btn btn-danger text-white btn-delete-all" style="display:none"> 
                           				<i class="icon-remove icon-white"></i> 
                           				<span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Delete');?>
</span> 
                           			</a>
								</div>
							</div>
						</form>
						<div class="hastable table_wrapper">
							<table width="100%" cellspacing="0" class="table table-vertical table-striped">
								<thead><tr>
									<th class="text-center" width="5%">No.</th>
									<th class="text-left"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Full Name');?>
</strong></th>
									<th class="text-left"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('phone');?>
</strong></th>
									<th class="text-left"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('email');?>
</strong></th>
									<th class="text-right"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Datetime');?>
</strong></th>
									<th class="text-left" style="width:10%"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('status');?>
</strong></th>
									<th class="text-center" style="width:6%"><strong><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('action');?>
</strong></th>
								</tr></thead>
								<?php if ($_smarty_tpl->tpl_vars['listItem']->value[0]['feedback_id'] != '') {?>
									<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listItem']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $__section_i_0_total; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
									<?php $_smarty_tpl->_assignInScope('FEEDBACKVALUE', $_smarty_tpl->tpl_vars['clsISO']->value->getArrayFromString($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['feedback_store']));?>
									<tr>
										<td class="text-center"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null);?>
</td>
										<td class="text-left"><?php echo $_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['full_name'];?>
</td>
										<td class="text-left"><?php echo $_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['phone'];?>
</td> 
										<td class="text-left"><?php echo $_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['email'];?>
</td>
										<td class="text-right"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->convertTimeToText($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reg_date'],true);?>
</td>
										<td class="text-center">
											<?php if ($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_done'] == '0') {?>
											<span class="label label-info"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Reminding');?>
</span>
											<?php } elseif ($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_done'] == '2') {?>
											<span class="label"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Reviewed');?>
</span>
											<?php } else { ?>
											<span class="label label-success"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Offered');?>
</span>
											<?php }?>
										</td>
										<td  class="text-center" style="white-space: nowrap;">
											<div class="btn-group">
												<button class="btn iso-button-standard dropdown-toggle" type="button" data-toggle="dropdown">
													<i class="icon-cog"></i> <span class="caret"></span>
												</button>
												<ul class="dropdown-menu" style="right:0px !important; left:auto">
													<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('view');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=edit&feedback_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['feedback_id']);?>
"><i class="icon-edit"></i> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('view');?>
</a></li>
													<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
" class="confirm_delete" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=delete&feedback_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['listItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['feedback_id']);
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
"><i class="icon-remove"></i> <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
</a></li>
												</ul>
											</div>
										</td>
									</tr>	
									<?php
}
}
?>
								<?php } else { ?>
									<tr>
										<td colspan="20" style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('nodata');?>
</td>
									</tr>
								<?php }?>
							</table>
							<div class="t-grid-pager-boder">
								<div class="t-pager t-reset fix-margin-pager">
									<?php echo $_smarty_tpl->tpl_vars['html_pager']->value;?>

								</div>
							</div>
						</div>
					</div>
				<div>
			</div>
		</div>
	</div>
</div>
<?php }
}
