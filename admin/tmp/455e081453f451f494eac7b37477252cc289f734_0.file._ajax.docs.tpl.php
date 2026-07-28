<?php
/* Smarty version 3.1.33, created on 2026-05-07 17:06:58
  from '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/docs/_ajax.docs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_69fc64424c44f0_80282611',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '455e081453f451f494eac7b37477252cc289f734' => 
    array (
      0 => '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/docs/_ajax.docs.tpl',
      1 => 1758622689,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69fc64424c44f0_80282611 (Smarty_Internal_Template $_smarty_tpl) {
if (!empty($_smarty_tpl->tpl_vars['list_docs']->value)) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_docs']->value, '_odocs', false, NULL, 'i', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_odocs']->value) {
?>
	<?php $_smarty_tpl->_assignInScope('list_tags', $_smarty_tpl->tpl_vars['_odocs']->value['list_tags']);?>
	<tr>
		<td class="text-center">
			<div class="checkbox">
				<input type="checkbox" name="p_key[]" class="chkitem styled" 
				value="<?php echo $_smarty_tpl->tpl_vars['_odocs']->value['id'];?>
" />
				<label></label>
			</div>
		</td>
		<td><strong class="font-bold"><?php echo $_smarty_tpl->tpl_vars['_odocs']->value['title'];?>
</strong><br />
			<?php echo $_smarty_tpl->tpl_vars['_odocs']->value['title_search'];?>

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
				<?php }?>
			</div>
		</td>
		<td><a href="<?php echo $_smarty_tpl->tpl_vars['_odocs']->value['content'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['_odocs']->value['content'];?>
" data-toggle="tooltip" target="_blank">Link</a></td>
		<td class="text-left"><?php echo $_smarty_tpl->tpl_vars['_odocs']->value['type'];?>
</td>
		<td class="text-left"><?php echo $_smarty_tpl->tpl_vars['_odocs']->value['project_name'];?>
</td>
		<td class="text-left"><?php echo $_smarty_tpl->tpl_vars['_odocs']->value['block_name'];?>
</td>
		<td class="text-left"><?php echo $_smarty_tpl->tpl_vars['_odocs']->value['building_name'];?>
</td>
		<td class="text-left"><?php echo $_smarty_tpl->tpl_vars['_odocs']->value['cat_name'];?>
</td>
		<td class="text-left text-nowrap"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatDate($_smarty_tpl->tpl_vars['_odocs']->value['upd_date'],4);?>
</td>
		<td class="text-center">
			<div class="d-flex gap-2 align-items-center">
				<button onClick="$Core.docs.open(this, event)" project_meta_id="<?php echo $_smarty_tpl->tpl_vars['_odocs']->value['id'];?>
" class="btn btn-icon btn-sm btn-default"><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('pencil');?>
</button>
				<button onClick="$Core.docs.delete(this, event)" project_meta_id="<?php echo $_smarty_tpl->tpl_vars['_odocs']->value['id'];?>
" class="btn btn-icon btn-sm btn-default"><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('trash');?>
</button>
			</div>
			
		</td>
	</tr>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
