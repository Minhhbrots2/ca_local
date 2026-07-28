<?php
/* Smarty version 3.1.33, created on 2026-02-24 11:29:36
  from '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/stock/_ajax.add_line.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_699d2930c080c8_21825804',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd59cea91aa39316c091dd3fecee539219ee19ed' => 
    array (
      0 => '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/stock/_ajax.add_line.tpl',
      1 => 1730083834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_699d2930c080c8_21825804 (Smarty_Internal_Template $_smarty_tpl) {
?><tr class="sop_row sop_add_line sop_row_<?php echo $_smarty_tpl->tpl_vars['stock_id']->value;?>
">
	<td width="50px">
		<div class="checkbox">
			<input type="checkbox" class="checkitem stock_item" value="<?php echo $_smarty_tpl->tpl_vars['stock_id']->value;?>
" />
			<label></label>
		</div>
	</td>
	<td width="120px">
		<div class="btn-group d-flex">
			<button type="button" class="btn btn-xs btn-default" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Delete');?>
" onClick="delete_line(this, event)" stock_id="<?php echo $_smarty_tpl->tpl_vars['stock_id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('trash');?>
</button>
			<button type="button" class="btn btn-xs btn-default" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Edit');?>
" onClick="open_stock(this, event)" stock_id="<?php echo $_smarty_tpl->tpl_vars['stock_id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('pencil');?>
</button>
		</div>
	</td>
	<td class="text-left">
		<input type="text" class="form-control text-bold stock_field w-100px" stock_id="<?php echo $_smarty_tpl->tpl_vars['stock_id']->value;?>
" data-field="ms_code" />
	</td>
	<td class="text-left">
		<input type="text" class="form-control stock_field price-In w-120px" stock_id="<?php echo $_smarty_tpl->tpl_vars['stock_id']->value;?>
" data-field="total_price_vat" />
	</td>
	<td class="text-left">
		<input type="text" class="form-control stock_field price-In w-120px" stock_id="<?php echo $_smarty_tpl->tpl_vars['stock_id']->value;?>
" data-field="total_price" />
	</td>
	<td class="text-left">
		<select class="form-control stock_field w-120px" stock_id="<?php echo $_smarty_tpl->tpl_vars['stock_id']->value;?>
" data-field="status_id">
			<?php echo $_smarty_tpl->tpl_vars['clsProperty']->value->getSelectByProperty('_STATUS');?>

		</select>
	</td>
	<td class="text-left">
		<select class="form-control stock_field w-120px" stock_id="<?php echo $_smarty_tpl->tpl_vars['stock_id']->value;?>
" data-field="agency_id">
			<?php echo $_smarty_tpl->tpl_vars['clsProperty']->value->getSelectByProperty('_AGENCY');?>

		</select>
	</td>
	<?php if ($_smarty_tpl->tpl_vars['block_type']->value == @constant('_BLOCK_TYPE_HIGHLEVEL_SALE')) {?>
	<td class="text-left">
		<input type="text" class="form-control stock_field numberonly w-60px" stock_id="<?php echo $_smarty_tpl->tpl_vars['stock_id']->value;?>
" data-field="floor" />
	</td>
	<td class="text-left">
		<input type="text" class="form-control stock_field numberonly w-60px" stock_id="<?php echo $_smarty_tpl->tpl_vars['stock_id']->value;?>
" data-field="code" />
	</td>
	<?php } else { ?>
	<td class="text-left">
		<input type="text" class="form-control stock_field w-100px" stock_id="<?php echo $_smarty_tpl->tpl_vars['stock_id']->value;?>
" data-field="block_name" 
		value="<?php echo $_smarty_tpl->tpl_vars['list_stocks']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['block_name'];?>
" />
	</td>
	<?php }?>
	<td class="text-left">
		<div class="input-group-suffix">
			<input type="text" class="form-control stock_field numberonly w-90px" stock_id="<?php echo $_smarty_tpl->tpl_vars['stock_id']->value;?>
" data-field="DT_TT" />
			<span class="suffix">m2</span>
		</div>
	</td>
	<td class="text-left">
		<div class="input-group-suffix">
			<input type="text" class="form-control stock_field numberonly w-90px" stock_id="<?php echo $_smarty_tpl->tpl_vars['stock_id']->value;?>
" data-field="DT_Tim" />
			<span class="suffix">m2</span>
		</div>
	</td>
	<?php if ($_smarty_tpl->tpl_vars['block_type']->value == @constant('_BLOCK_TYPE_HIGHLEVEL_SALE')) {?>
	<td class="text-left">
		<select class="form-control stock_field w-120px" stock_id="<?php echo $_smarty_tpl->tpl_vars['stock_id']->value;?>
" data-field="bedroom_id">
			<?php echo $_smarty_tpl->tpl_vars['clsProperty']->value->getSelectByProperty('_BEDROOM');?>

		</select>
	</td>
	<?php }?>
	<td class="text-left">
		<select class="form-control stock_field w-100px" stock_id="<?php echo $_smarty_tpl->tpl_vars['stock_id']->value;?>
" data-field="home_direction_id">
			<?php echo $_smarty_tpl->tpl_vars['clsProperty']->value->getSelectByProperty('_DIRECTION');?>

		</select>
	</td>
	<td class="text-left">
		<select class="form-control stock_field w-120px" stock_id="<?php echo $_smarty_tpl->tpl_vars['stock_id']->value;?>
" data-field="type_id">
			<?php if ($_smarty_tpl->tpl_vars['block_type']->value == @constant('_BLOCK_TYPE_HIGHLEVEL_SALE')) {?>
				<?php echo $_smarty_tpl->tpl_vars['clsProperty']->value->getSelectByProperty('_TYPE');?>

			<?php } else { ?>
				<?php echo $_smarty_tpl->tpl_vars['clsProperty']->value->getSelectByProperty('_TYPE_VILLA');?>

			<?php }?>
		</select>
	</td>
	<?php if ($_smarty_tpl->tpl_vars['block_type']->value == @constant('_BLOCK_TYPE_HIGHLEVEL_SALE')) {?>
	<td class="text-left">
		<select class="form-control stock_field w-120px" stock_id="<?php echo $_smarty_tpl->tpl_vars['stock_id']->value;?>
" data-field="view_id">
			<?php echo $_smarty_tpl->tpl_vars['clsProperty']->value->getSelectByProperty('_VIEW');?>

		</select>
	</td>
	<?php }?>
	<td class="text-left">
		<input type="text" class="form-control stock_field w-120px" stock_id="<?php echo $_smarty_tpl->tpl_vars['stock_id']->value;?>
" data-field="CSBH" value="" />
	</td>
	<?php if ($_smarty_tpl->tpl_vars['block_type']->value == @constant('_BLOCK_TYPE_LOWFLOOR_SALE')) {?>
	<td class="text-left">
		<input type="text" class="form-control stock_field w-120px" stock_id="<?php echo $_smarty_tpl->tpl_vars['stock_id']->value;?>
" data-field="deposit_date" value="" />
	</td>
	<td class="text-left">
		<input type="text" class="form-control stock_field w-120px" stock_id="<?php echo $_smarty_tpl->tpl_vars['stock_id']->value;?>
" data-field="bank_cart" value="" />
	</td>
	<?php }?>
	<td class="text-center">
		<button class="btn btn-xs btn-default" stock_id="<?php echo $_smarty_tpl->tpl_vars['stock_id']->value;?>
" onClick="open_notes(this, event)" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Add Notes');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('plus-circle',$_smarty_tpl->tpl_vars['core']->value->get_Lang('Notes'));?>
</button>
	</td>
</tr><?php }
}
