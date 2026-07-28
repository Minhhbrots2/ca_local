<?php
/* Smarty version 3.1.33, created on 2025-12-20 15:07:00
  from '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/slide/default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_69465924e3f606_58964418',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b42657b59b99f024502753598c5012793cb7143' => 
    array (
      0 => '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/slide/default.tpl',
      1 => 1766218019,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69465924e3f606_58964418 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/fhgroupt/ca.futurehomes.vn/core/smarty/plugins/function.cycle.php','function'=>'smarty_function_cycle',),1=>array('file'=>'/home/fhgroupt/ca.futurehomes.vn/core/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_assignInScope('toId', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>
<div class="ui-title-bar-container ui-title-bar-container--full-width">
	<div class="ui-title-bar">
		<div class="ui-title-bar__main-group">
			<div class="ui-title-bar__heading-group">
				<h1 class="ui-title-bar__title w-100">Slider</h1>
				<p class="type--subdued"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('This system allows you to manage & edit static pages in Systems');?>
</p>
			</div>
		</div>
		<div class="action-bar">
			<div class="ui-title-bar__mobile-primary-actions">
				<div class="ui-title-bar__actions">
					<a href="javascript:void(0);" onClick="$Core.slide.open(this, event)" <?php echo $_smarty_tpl->tpl_vars['pkeyTable']->value;?>
="0" class="ui-button ui-button--primary ui-title-bar__action mr-2"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Addnew');?>
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
					<li class="filter-tab-item" data-tab-index="1">
						<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
" class="filter-tab filter-tab-active show-all-items next-tab next-tab--is-active"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('AllPage');?>
</a>
					</li>
				</ul>
			</div>
			<div class="ui-card__section has-bulk-actions pages">
				<form method="post">
					<div class="form-search form-inline">
						<input type="hidden" name="filter" value="filter" />
						<button type="submit" onClick="$Core.docs.do_search(this, event)" class="btn btn-success"><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('search','Search');?>
</button>
						<div class="form-group pull-right">
							<a href="javascript:void(0)" clsTable="<?php echo $_smarty_tpl->tpl_vars['classTable']->value;?>
" class="btn btn-danger text-white btn-delete-all" style="display:none"> 
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
								<th class="text-left" style="width: 100px">Hình ảnh</th>
								<th class="text-left">Tiêu đề</th>
								<th class="text-left" width="12%">Website</th>
								<th class="text-left" width="15%">Link</th>
								<th class="text-left" width="15%">Nội dung</th>
								<th class="text-center" width="5%"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('status');?>
</th>
								<th class="text-right" width="12%"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('update');?>
</th>
								<th class="text-center" colspan="4" width="4%"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('move');?>
</th>
								<th class="text-center" width="40px">Action</th>
							</tr></thead>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allItem']->value, '_oItem');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oItem']->value) {
?>
								<tr class="<?php echo smarty_function_cycle(array('values'=>"row1,row2"),$_smarty_tpl);?>
">
									<td class="text-center">
										<div class="checkbox">
											<input type="checkbox" name="p_key[]" class="chkitem styled" value="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value[$_smarty_tpl->tpl_vars['pkeyTable']->value];?>
" />
											<label></label>
										</div>
									</td>
									<td class="text-left"><img src="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getUrlImageFH($_smarty_tpl->tpl_vars['_oItem']->value['image'],100);?>
" alt=""></td>
									<td class="text-left"><a href="javascript:void(0);" onClick="$Core.shop.open(this, event)" shop_id="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value[$_smarty_tpl->tpl_vars['pkeyTable']->value];?>
">
										<strong class="fs-16"><?php echo $_smarty_tpl->tpl_vars['_oItem']->value['title'];?>
</strong></a>
										<?php if ($_smarty_tpl->tpl_vars['_oItem']->value['is_trash'] == '1') {?><span class="fr text-red"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('intrash');?>
</span><?php }?>
									</td>
									<td style="text-align:left;font-weight:700"><?php if (!empty($_smarty_tpl->tpl_vars['_oItem']->value['_site'])) {?> <a href="<?php echo $_smarty_tpl->tpl_vars['arr_domain']->value[$_smarty_tpl->tpl_vars['_oItem']->value['_site']]['link'];?>
" target="_blank" ><?php echo $_smarty_tpl->tpl_vars['_oItem']->value['_site'];?>
 <i class="bx bx-link-external text-fs-14"></i></a><?php } else { ?>--<?php }?></td>
									<td class="text-left"><a href="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['link'];?>
">Link</a></td>
									<td class="text-left"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->truncateWord(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['_oItem']->value['content']),10);?>
</td>
									<td class="text-center bg-gray">
										<a href="javascript:void(0);" class="SiteClickPublic" clsTable="Slide" pkey="<?php echo $_smarty_tpl->tpl_vars['pkeyTable']->value;?>
" sourse_id="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value[$_smarty_tpl->tpl_vars['pkeyTable']->value];?>
" rel="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('is_online',$_smarty_tpl->tpl_vars['_oItem']->value[$_smarty_tpl->tpl_vars['pkeyTable']->value]);?>
" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Click to change status');?>
">
											<?php if ($_smarty_tpl->tpl_vars['clsClassTable']->value->getOneField('is_online',$_smarty_tpl->tpl_vars['_oItem']->value[$_smarty_tpl->tpl_vars['pkeyTable']->value]) == '1') {?>
											<i class="fa fa-check-circle green"></i>
											<?php } else { ?>
											<i class="fa fa-minus-circle red"></i>
											<?php }?>
										</a>
									</td>
									<td style="text-align:right"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['_oItem']->value['reg_date'],"%d/%m/%Y %H:%M");?>
</td>
									<td class="text-center">
										<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] : null)) {?>
										<a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('movetop');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=move&direct=movetop&<?php echo $_smarty_tpl->tpl_vars['pkeyTable']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['_oItem']->value[$_smarty_tpl->tpl_vars['pkeyTable']->value]);
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
"><i class="icon-circle-arrow-up"></i></a>
										<?php }?>
									</td>
									<td class="text-center">
										<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['last'] : null)) {?>
										<a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('movebottom');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=move&direct=movebottom&<?php echo $_smarty_tpl->tpl_vars['pkeyTable']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['_oItem']->value[$_smarty_tpl->tpl_vars['pkeyTable']->value]);
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
"><i class="icon-circle-arrow-down"></i></a>
										<?php }?>
									</td>
									<td class="text-center">
										<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['first'] : null)) {?>
										<a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('moveup');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=move&direct=moveup&<?php echo $_smarty_tpl->tpl_vars['pkeyTable']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['_oItem']->value[$_smarty_tpl->tpl_vars['pkeyTable']->value]);
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
"><i class="icon-arrow-up"></i></a>
										<?php }?>
									</td>
									<td class="text-center">
										<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['last'] : null)) {?>
										<a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('movedown');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=move&direct=movedown&<?php echo $_smarty_tpl->tpl_vars['pkeyTable']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['_oItem']->value[$_smarty_tpl->tpl_vars['pkeyTable']->value]);
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
												<?php if ($_smarty_tpl->tpl_vars['_oItem']->value['is_trash'] == '0') {?>
												<li><a href="javascript:void(0);" onClick="$Core.slide.open(this, event)" <?php echo $_smarty_tpl->tpl_vars['pkeyTable']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value[$_smarty_tpl->tpl_vars['pkeyTable']->value];?>
"><i class="icon-edit"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
</span>
												</a></li>
												<li><a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=trash&<?php echo $_smarty_tpl->tpl_vars['pkeyTable']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['_oItem']->value[$_smarty_tpl->tpl_vars['pkeyTable']->value]);
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
"><i class="icon-trash"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('trash');?>
</span></a></li>
												<?php } else { ?>
												<li><a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=restore&<?php echo $_smarty_tpl->tpl_vars['pkeyTable']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['_oItem']->value[$_smarty_tpl->tpl_vars['pkeyTable']->value]);
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
"><i class="icon-refresh"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('restore');?>
</span></a></li>
												<li><a class="confirm_delete" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=delete&<?php echo $_smarty_tpl->tpl_vars['pkeyTable']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['_oItem']->value[$_smarty_tpl->tpl_vars['pkeyTable']->value]);
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
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</table>
						<div class="d-flex justify-content-center">
							<ul class="pagination">
								<?php echo $_smarty_tpl->tpl_vars['html_pager']->value;?>

							</ul>
						</div>
					</div>
				</form>
			</div>
		</div></div>
	</div></div>
</div>
<?php echo '<script'; ?>
>
	var _type=`<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
`;
<?php echo '</script'; ?>
><?php }
}
