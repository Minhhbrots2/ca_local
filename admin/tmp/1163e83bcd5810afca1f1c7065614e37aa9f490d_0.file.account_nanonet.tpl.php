<?php
/* Smarty version 3.1.33, created on 2025-12-25 13:33:50
  from '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/setting/account_nanonet.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_694cdacec5c416_20264850',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1163e83bcd5810afca1f1c7065614e37aa9f490d' => 
    array (
      0 => '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/setting/account_nanonet.tpl',
      1 => 1743666542,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694cdacec5c416_20264850 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/fhgroupt/ca.futurehomes.vn/core/smarty/plugins/function.cycle.php','function'=>'smarty_function_cycle',),1=>array('file'=>'/home/fhgroupt/ca.futurehomes.vn/core/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="ui-title-bar-container ui-title-bar-container--full-width">
	<div class="ui-title-bar">
		<div class="ui-title-bar__main-group">
			<div class="ui-title-bar__heading-group">
				<h1 class="ui-title-bar__title w-100">Quản lý tài khoản</h1>
				<p class="type--subdued"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('This system allows you to manage & edit static pages in Systems');?>
</p>
			</div>
		</div>
		<div class="action-bar">
			<div class="ui-title-bar__mobile-primary-actions">
				<div class="ui-title-bar__actions">
					<a href="javascript:void(0)" onClick="$Core.account.open(this,event)" data-key="" data-action="_add" class="ui-button ui-button--primary ui-title-bar__action"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Addnew');?>
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
							<div class="hastable">
								<table class="table table-vertical table-striped" cellspacing="0" cellpadding="0" width="100%">
									<thead><tr>
										<th width="5%" class="text-center">
											STT
										</th>
										<th class="text-left" >API key</th>
										<th class="text-left">Model ID</th>
										<th class="text-left">Sử dụng</th>
										<th class="text-left">Ngày cập nhật cuối</th>
										<th class="text-left">Ngày reset</th>
										<th class="text-left">Lần sử dụng cuối</th>
										<th class="text-center" width="40px">Action</th>
									</tr></thead>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lst_account']->value, '_oItem', false, 'key', 'i', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['_oItem']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']++;
?>
										<?php $_smarty_tpl->_assignInScope('model_ids', $_smarty_tpl->tpl_vars['_oItem']->value['model_ids']);?>
										<tr class="<?php echo smarty_function_cycle(array('values'=>"row1,row2"),$_smarty_tpl);?>
">
											<td class="text-center">
												<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration'] : null);?>

											</td>
											<td><?php echo $_smarty_tpl->tpl_vars['_oItem']->value['api_key'];?>
</td>
											<td><?php if ($_smarty_tpl->tpl_vars['_oItem']->value['model_id']['key']) {
echo $_smarty_tpl->tpl_vars['_oItem']->value['model_id']['key'];
} else { ?>--<?php }?></td>
											<td><?php echo $_smarty_tpl->tpl_vars['_oItem']->value['model_id']['number'];?>
 lượt</td>
											<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['_oItem']->value['model_id']['date'],"%d/%m/%Y");?>
</td>
											<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['_oItem']->value['model_id']['upd_date'],"%d/%m/%Y");?>
</td>
											<td><?php if (!empty($_smarty_tpl->tpl_vars['_oItem']->value['time_upd_last'])) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['_oItem']->value['time_upd_last'],"%d/%m/%Y");
} else { ?>--<?php }?></td>
											<td class="text-center" style="white-space: nowrap;">
												<div class="btn-group dropdown">
													<button class="btn iso-button-standard dropdown-toggle" type="button" data-toggle="dropdown"> <i class="icon-cog"></i> <span class="caret"></span></button>
													<ul class="dropdown-menu" style="right:0px !important; left:auto">
														<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
" href="javascript:void(0)" onClick="$Core.account.open(this,event)" data-action="_edit" data-key="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><i class="icon-edit"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
</span></a></li>
														<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
" href="javascript:void(0)" onClick="$Core.account.delete(this,event)" data-key="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><i class="icon-remove"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
</span></a></li>
													</ul>
												</div>
											</td>
										</tr>									
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
