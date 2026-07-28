<?php
/* Smarty version 3.1.33, created on 2026-02-27 12:04:28
  from '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/setting/field_data_center.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_69a125dc035167_06715367',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1715c66e65709c41471bb84500281d247e701e1' => 
    array (
      0 => '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/setting/field_data_center.tpl',
      1 => 1744086793,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69a125dc035167_06715367 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="ui-title-bar-container ui-title-bar-container--full-width">
	<div class="ui-title-bar">
		<div class="ui-title-bar__main-group">
			<div class="ui-title-bar__heading-group">
				<h1 class="ui-title-bar__title w-100">Cấu hình cột hiển thị dữ liệu cư dân VHOP</h1>
				<p class="type--subdued"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('This system allows you to manage & edit static pages in Systems');?>
</p>
			</div>
		</div>
		<div class="action-bar">
			<div class="ui-title-bar__mobile-primary-actions">
				<div class="ui-title-bar__actions">
					<button type="button" onClick="$Core.property.open_field_data_center(this,event)" class="btn btn-default" field_data_center_id=""><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('plus-circle',$_smarty_tpl->tpl_vars['core']->value->get_Lang('Addnew'));?>
</button>
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
						<div class="hastable">
							<table class="table mb-0 table-striped" cellspacing="0" cellpadding="0" width="100%">
								<thead><tr>
									<th class="text-left" width="5%">No.</th>
									<th class="text-left">Tiêu đề</th>
									<th class="text-left" width="20%">Name code</th>
									<th class="text-left" width="20%">Trạng thái</th>
									<th class="text-left" width="10%"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Actions');?>
</th>
								</tr></thead>
								<tbody>
									<?php if (!empty($_smarty_tpl->tpl_vars['field_data_center']->value)) {?>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field_data_center']->value, '_oItem', false, 'key', 'i', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['_oItem']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']++;
?>
											<tr>
												<td data-label="No."><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration'] : null);?>
</td>
												<td class="text-nowrap" data-label="Tiêu đề"><?php echo $_smarty_tpl->tpl_vars['_oItem']->value['title'];?>
</td>
												<td class="text-nowrap" data-label="Name code"><?php echo $_smarty_tpl->tpl_vars['_oItem']->value['code'];?>
</td>
												<td class="text-nowrap" data-label="Trạng thái"><?php if (!empty($_smarty_tpl->tpl_vars['_oItem']->value['is_default'])) {?> <span class="label-success">Mặc định</span><?php } else { ?>--<?php }?></td>
												<td data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Actions');?>
">
													<div class="d-flex btn-group btn-group-xs ui-btn-group-custom">
														<button class="btn btn-default" onClick="$Core.property.open_field_data_center(this,event)" class="btn btn-default" field_data_center_id="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" ><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('pencil');?>
</button>
														<button class="btn btn-default" onClick="$Core.property.save_field_data_center(this,event)" field_data_center_id="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" data-action="delete"><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('trash');?>
</button>
													</div>
												</td>
											</tr>
										<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									<?php } else { ?>
										<tr><td class="text-center" colspan="5">Danh sách trống</td></tr>
									<?php }?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><?php }
}
