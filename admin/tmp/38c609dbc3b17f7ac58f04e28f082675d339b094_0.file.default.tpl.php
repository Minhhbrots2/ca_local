<?php
/* Smarty version 3.1.33, created on 2025-10-28 10:28:07
  from '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/project/default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_69003847a56262_13608088',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38c609dbc3b17f7ac58f04e28f082675d339b094' => 
    array (
      0 => '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/project/default.tpl',
      1 => 1761622082,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69003847a56262_13608088 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/fhgroupt/ca.futurehomes.vn/core/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<header class="ui-title-bar-container">
	<div class="ui-title-bar ui-title-bar--separator">
		<div class="ui-title-bar__main-group">
			<div class="ui-title-bar__heading-group">
				<h1 class="ui-title-bar__title">Dự án</h1>
			</div>
		</div>
		<div class="action-bar">
			<div class="ui-title-bar__mobile-primary-actions">
				<div class="ui-title-bar__actions">
					<a href="javascript:void(0)" onClick="$Core.project.sync_price_sheet(this, event)" project_id="0" class="ui-button mr-2 ui-button--transparent ui-title-bar__action" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Sync Block');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Sync Block');?>
</a>
					<a href="javascript:void(0)" onClick="sync_search(this, event)" project_id="0" class="ui-button mr-2 ui-button--transparent ui-title-bar__action" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Addnew');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Sync search');?>
</a>
					<a href="javascript:void(0)" onClick="open_project(this, event)" project_id="0" class="ui-button ui-button--primary ui-title-bar__action" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Addnew');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Addnew');?>
</a>
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
									<a href="javascript:void(0);" class="filter-tab filter-tab-active next-tab next-tab--is-active">Danh sách dự án</a>
								</li>
							</ul>
						</div>
						<div class="clearfix"></div>
						<div id="project" class="ui-card__section has-bulk-actions">
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
									<div class="pull-right">
										<a href="javascript:void(0)" class="btn text-white btn-danger btn-delete-all" clsTable="Ads" style="display: none">
											<?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('times',$_smarty_tpl->tpl_vars['core']->value->get_Lang('Delete Options'));?>

										 </a>
									</div>	
								</div>
								<div class="hastable">
									<table cellspacing="0" cellpadding="0" class="table table-striped table-vertical table_project" style="width:100%">
										<thead style="position:sticky; top:90px; background:#FFF; z-index:2"><tr>
											<th class="text-center" width="3%">No.</th>
											<th colspan="3" width="50%" class="text-left">Tên dự án</th>
											<th class="text-center" width="60px">Quick Menu</th>
											<th class="text-center" width="60px">Hot</th>
											<th class="text-center" width="60px">MNU Top MOC</th>
											<th class="text-center" width="60px">MNU Bảng Hàng</th>
											<th class="text-center" width="60px">MNU User.FH</th>
											<th class="text-center" width="60px">Hết hàng</th>
											<th class="text-center" width="60px">Q.Lý</th>
											<th class="text-left" width="100px"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('update');?>
</th>
											<th class="text-center" width="60px">Tools</th>
										</tr></thead>
										<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['allItem']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
											<?php $_smarty_tpl->_assignInScope('project_id', $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['project_id']);?>
											<?php $_smarty_tpl->_assignInScope('list_blocks', $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['list_blocks']);?>
											<tbody class="" id="<?php echo $_smarty_tpl->tpl_vars['project_id']->value;?>
s">
												<tr class="tr_selected <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)%2 == 0) {?>row1<?php } else { ?>row2<?php }?>">
													<td class="text-center"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)+1;?>
</td>
													<td colspan="3" class="text-left">
														<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=edit&project_id=<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['project_id'];?>
"><strong class="font16"><?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title'];?>
</strong></a>
													</td>
													<td bgcolor="#F5F5F5" class="text-center">
														<label class="switch">
															<input type="checkbox" onchange="set_quick_menu(this, event)" to_field="is_menu" tp="_project" value="1" for_id="<?php echo $_smarty_tpl->tpl_vars['project_id']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_menu'] == '1') {?> checked<?php }?>>
															<span class="slider round"></span>
														</label>
													</td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td class="text-center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reg_date'],"%d/%m/%Y %H:%M");?>
</td>
													<td class="text-center" style="white-space: nowrap;">
														<div class="btn-group">
															<button class="btn iso-button-standard dropdown-toggle" type="button" data-toggle="dropdown"> <i class="icon-cog"></i> <span class="caret"></span></button>
															<ul class="dropdown-menu" style="right:0px !important; left: auto">
																<?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_trash'] == '0') {?>
																<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=edit&project_id=<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['project_id'];?>
"><i class="icon-edit"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Edit');?>
</span></a></li>
																<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('trash');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=trash&project_id=<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['project_id'];
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
"><i class="icon-trash"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Trash');?>
</span></a></li>
																<?php } else { ?>
																<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('restore');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=restore&project_id=<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['project_id'];
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
"><i class="icon-refresh"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Restore');?>
</span></a></li>
																<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
" class="confirm_delete" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=delete&project_id=<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['project_id'];
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
"><i class="icon-remove"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Delete');?>
</span></a></li>
																<?php }?>
															</ul>
														</div>
													</td>
												</tr>
												<?php if (!empty($_smarty_tpl->tpl_vars['list_blocks']->value)) {?>
													<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_blocks']->value, '_oBlock');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oBlock']->value) {
?>
													<?php $_smarty_tpl->_assignInScope('_block_id', $_smarty_tpl->tpl_vars['_oBlock']->value['property_id']);?>
													<?php $_smarty_tpl->_assignInScope('_block_information', $_smarty_tpl->tpl_vars['_oBlock']->value['more_information']);?>
													<?php $_smarty_tpl->_assignInScope('list_buildings', $_smarty_tpl->tpl_vars['_oBlock']->value['list_buildings']);?>
													<tr>
														<td class="text-center"></td>
														<td class="text-center"><span class="label label-default">PK</span></td>
														<td colspan="2"><strong><?php echo $_smarty_tpl->tpl_vars['_oBlock']->value['title'];?>
</strong></td>	
														<td class="text-center">--</td>													
														<td bgcolor="#F5F5F5" class="text-center">
															<label class="switch">
																<input type="checkbox" onchange="set_quick_menu(this, event)" to_field="is_hot" tp="_block" value="1" for_id="<?php echo $_smarty_tpl->tpl_vars['_block_id']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['_block_information']->value['is_hot'] == '1') {?> checked<?php }?>>
																<span class="slider round"></span>
															</label>
														</td>
														<td class="text-center">--</td>
														<td bgcolor="#F5F5F5" class="text-center">
															<?php if (@constant('_BLOCK_TYPE_LOWFLOOR_SALE') == $_smarty_tpl->tpl_vars['_oBlock']->value['parent_id']) {?>
															<label class="switch">
																<input type="checkbox" onchange="set_quick_menu(this, event)" to_field="is_quick_menu" tp="_block" value="1" for_id="<?php echo $_smarty_tpl->tpl_vars['_block_id']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['_block_information']->value['is_quick_menu'] == '1') {?> checked<?php }?>>
																<span class="slider round"></span>
															</label>
															<?php } else { ?>
																--
															<?php }?>
														</td>
														<td bgcolor="#F5F5F5" class="text-center">
															<label class="switch">
																<input type="checkbox" onchange="set_quick_menu(this, event)" to_field="is_menu" tp="_block" value="1" for_id="<?php echo $_smarty_tpl->tpl_vars['_block_id']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['_block_information']->value['is_menu'] == '1') {?> checked<?php }?>>
																<span class="slider round"></span>
															</label>
														</td>												
														<td bgcolor="#F5F5F5" class="text-center">
															<label class="switch">
																<input type="checkbox" onchange="set_quick_menu(this, event)" to_field="is_out_stock" tp="_block" value="1" for_id="<?php echo $_smarty_tpl->tpl_vars['_block_id']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['_block_information']->value['is_out_stock'] == '1') {?> checked<?php }?>>
																<span class="slider round"></span>
															</label>
														</td>
														<td></td>
														<td class="text-center">
															<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['_oBlock']->value['rupd_date'],"%d/%m/%Y %H:%M");?>

														</td>
														<td class="text-center">
															<a class="btn btn-icon btn-default btn_edit_block_<?php echo $_smarty_tpl->tpl_vars['_oBlock']->value['property_id'];?>
" title="Chỉnh sửa" href="javascript:void(0);" uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" onClick="open_block(this, event)" block_id="<?php echo $_smarty_tpl->tpl_vars['_oBlock']->value['property_id'];?>
" project_id="<?php echo $_smarty_tpl->tpl_vars['project_id']->value;?>
" ><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('pencil');?>
</a>
														</td>
													</tr>
														<?php if (!empty($_smarty_tpl->tpl_vars['list_buildings']->value)) {?>
															<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_buildings']->value, '_oBuiling');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oBuiling']->value) {
?>
															<?php $_smarty_tpl->_assignInScope('_building_id', $_smarty_tpl->tpl_vars['_oBuiling']->value['property_id']);?>
															<?php $_smarty_tpl->_assignInScope('_more_information', $_smarty_tpl->tpl_vars['_oBuiling']->value['more_information']);?>
															<tr>
																<td width="3%" class="text-center"></td>
																<td width="3%" class="text-center"></td>
																<td width="3%" class="text-center"></td>
																<td width="3%" class="text-center"><span class="label label-default">TÒA</span></td>
																<td><?php echo $_smarty_tpl->tpl_vars['_oBuiling']->value['title'];?>
</td>
																<td class="text-center">--</td>
																<td bgcolor="#F5F5F5" class="text-center">
																	<label class="switch">
																		<input type="checkbox" onchange="set_quick_menu(this, event)" to_field="is_top_menu" tp="_building" value="1" for_id="<?php echo $_smarty_tpl->tpl_vars['_building_id']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['_more_information']->value['is_top_menu'] == '1') {?> checked<?php }?>>
																		<span class="slider round"></span>
																	</label>
																</td>
																<td bgcolor="#F5F5F5" class="text-center">
																	<label class="switch">
																		<input type="checkbox" onchange="set_quick_menu(this, event)" to_field="is_quick_menu" tp="_building" value="1" for_id="<?php echo $_smarty_tpl->tpl_vars['_building_id']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['_more_information']->value['is_quick_menu'] == '1') {?> checked<?php }?>>
																		<span class="slider round"></span>
																	</label>
																</td>
																<td bgcolor="#F5F5F5" class="text-center">
																	<label class="switch">
																		<input type="checkbox" onchange="set_quick_menu(this, event)" to_field="is_menu" tp="_building" value="1" for_id="<?php echo $_smarty_tpl->tpl_vars['_building_id']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['_more_information']->value['is_menu'] == '1') {?> checked<?php }?>>
																		<span class="slider round"></span>
																	</label>
																</td>
																<td bgcolor="#F5F5F5" class="text-center">
																	<label class="switch">
																		<input type="checkbox" onchange="set_quick_menu(this, event)" to_field="is_out_stock" tp="_building" value="1" for_id="<?php echo $_smarty_tpl->tpl_vars['_building_id']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['_more_information']->value['is_out_stock'] == '1') {?> checked<?php }?>>
																		<span class="slider round"></span>
																	</label>
																</td>
																<td class="text-center"><a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=stock&project_id=<?php echo $_smarty_tpl->tpl_vars['project_id']->value;?>
&block_id=<?php echo $_smarty_tpl->tpl_vars['_block_id']->value;?>
&building_id=<?php echo $_smarty_tpl->tpl_vars['_building_id']->value;?>
" building_id="<?php echo $_smarty_tpl->tpl_vars['_building_id']->value;?>
" title="QL.Tình trạng bán hàng tòa nhà" data-toggle="tooltip"  class="label label-default">Q.Lý</a></td>
																<td class="text-center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['_oBlock']->value['rupd_date'],"%d/%m/%Y %H:%M");?>
</td>
																<td class="text-center">
																	<a class="btn btn-icon btn-default btn_edit_building_<?php echo $_smarty_tpl->tpl_vars['_oBuiling']->value['property_id'];?>
" title="Chỉnh sửa" href="javascript:void(0);" uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" onClick="open_building(this, event)" block_id="<?php echo $_smarty_tpl->tpl_vars['_oBlock']->value['property_id'];?>
" project_id="<?php echo $_smarty_tpl->tpl_vars['project_id']->value;?>
" building_id="<?php echo $_smarty_tpl->tpl_vars['_oBuiling']->value['property_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('pencil');?>
</a>
																</td>
															</tr>
															<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
														<?php }?>
													<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
												<?php }?>
											</tbody>
										<?php
}
}
?>
									</table>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
<?php echo $_smarty_tpl->tpl_vars['script']->value;
}
}
