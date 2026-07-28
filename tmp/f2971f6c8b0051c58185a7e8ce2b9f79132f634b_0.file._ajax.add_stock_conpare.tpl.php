<?php
/* Smarty version 3.1.33, created on 2026-07-20 21:29:07
  from '/www/wwwroot/skyrealty.c-a.vn/application/views/home/project/_ajax.add_stock_conpare.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a5e30b38e6b98_88029835',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2971f6c8b0051c58185a7e8ce2b9f79132f634b' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/views/home/project/_ajax.add_stock_conpare.tpl',
      1 => 1783283460,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a5e30b38e6b98_88029835 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-dialog modal-dialog-centered modal-sm">

	<form class="modal-content" id="frmIssue" enctype="multipart/form-data">

		<div class="modal-header">

			<h5 class="modal-title">Thêm căn hộ so sánh</h5>

			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

		</div>

		<div class="modal-body">

			<div class="form-group mb-2">

				<label for="name" class="form-label mb-1">Dự án</label>

				<select name="project_id" id="" class="form-control form-select" onChange="$Core.global.compare.load_block_building(this,event)" _type="block" >

					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lstProject']->value, '_oItem', false, 'key', 'i', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['_oItem']->value) {
?>

						<option value="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['project_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_oItem']->value['title'];?>
</option>

					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

				</select>

			</div>

			<div class="form-group mb-2">

				<label for="name" class="form-label mb-1">Phân khu</label>

				<select name="block_id" id="" class="form-control form-select" onChange="$Core.global.compare.load_block_building(this,event)" _type="building">

				</select>

			</div>

			<div class="form-group mb-2">

				<label for="name" class="form-label mb-1">Tòa/dãy</label>

				<select name="building_id" id="" class="form-control form-select">

				</select>

			</div>

			<div class="form-group position-relative">

				<label for="name" class="form-label mb-1">Mã căn</label>

				<input class="form-control" type="text" name="ms_code" value="" onkeyup="$Core.global.compare.do_search_stock(this, event)" uid="sugget_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" >

				<div id="sugget_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" class="autosugget d-none" style="top: 60px"></div>

				<input type="hidden" name="stock_id" value="0">

			</div>

		</div>

		<div class="modal-footer justify-content-end">

			<button type="button" block_id="<?php echo $_smarty_tpl->tpl_vars['block_id']->value;?>
" onclick="$Core.global.compare.add_stock_compare(this,event)" _tp="modal" action="add" toId="<?php echo $_smarty_tpl->tpl_vars['toId']->value;?>
" 

				class="btn btn-primary">Lưu lại</button>

		</div>

	</form>

</div>

<?php }
}
