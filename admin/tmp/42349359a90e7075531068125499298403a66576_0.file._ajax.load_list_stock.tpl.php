<?php
/* Smarty version 3.1.33, created on 2026-07-23 10:09:54
  from '/www/wwwroot/skyrealty.c-a.vn/admin/application/views/project/_ajax.load_list_stock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a618602a06aa3_68704815',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42349359a90e7075531068125499298403a66576' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/admin/application/views/project/_ajax.load_list_stock.tpl',
      1 => 1783289340,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a618602a06aa3_68704815 (Smarty_Internal_Template $_smarty_tpl) {
?><ul class="list-unstyled d-flex flex-wrap" id="list_favourite" data-bs-popper="static">

	<?php if (!empty($_smarty_tpl->tpl_vars['list_stocks']->value)) {?>

		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_stocks']->value, '_oItem', false, NULL, 'i', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oItem']->value) {
?>

			<?php $_smarty_tpl->_assignInScope('moreInformation', $_smarty_tpl->tpl_vars['_oItem']->value['more_information']);?>

			<li class="py-1 item_pop_favourite w-50" >

				<div onClick="do_copy(this, event)" stock_id="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['stock_id'];?>
" stock_code="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['ms_code'];?>
" 

					class="d-flex justify-content-between align-items-center user-name" style="cursor: pointer">

					<span class="fw-medium"><?php echo $_smarty_tpl->tpl_vars['_oItem']->value['ms_code'];?>
</span>

				</div>

			</li>

		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>							

	<?php } else { ?>

		<div class="d-flex flex-wrap w-100 align-items-center justify-content-center p-3">

			<img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/listing-empty.svg" width="90px">

			<p class="w-100 text-center">Danh sách trống</p>

		</div>

	<?php }?>

</ul><?php }
}
