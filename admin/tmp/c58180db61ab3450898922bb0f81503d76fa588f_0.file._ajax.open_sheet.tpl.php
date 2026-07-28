<?php
/* Smarty version 3.1.33, created on 2026-07-27 17:00:11
  from '/www/wwwroot/skyrealty.c-a.vn/admin/application/views/ajax/_ajax.open_sheet.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a672c2b63ca83_32364320',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c58180db61ab3450898922bb0f81503d76fa588f' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/admin/application/views/ajax/_ajax.open_sheet.tpl',
      1 => 1783314565,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a672c2b63ca83_32364320 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">

	<form action="" method="post" class="modal-content" encrypt="miltipart/form-data">

		<div class="modal-header"> 

			<a href="javascript:void();" class="closeEv close close_pop"><span>×</span></a> 

			<h3 class="modal-title"><strong>Lựa chọn Sheet</strong></h3>

		</div>

		<div class="modal-body">

			<table class="table">

				<thead><tr>

					<th width="5%"></th>

					<th width="10%">Sheet ID</th>

					<th >Sheet Name</th>

				</tr></thead>

				<?php if (!empty($_smarty_tpl->tpl_vars['arr_worksheets']->value)) {?>

					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr_worksheets']->value, '_oSheet', false, '_oKey');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oKey']->value => $_smarty_tpl->tpl_vars['_oSheet']->value) {
?>

					<tr>

						<td class="align-center text-center">

							<label class="switch">

								<input type="radio" class="<?php echo $_smarty_tpl->tpl_vars['spreadsheetId']->value;?>
" name="sheet" sheet_id="<?php echo $_smarty_tpl->tpl_vars['_oKey']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['_oSheet']->value;?>
">

								<span class="slider round"></span>

							</label>

						</td>

						<td class="align-center text-left"><?php echo $_smarty_tpl->tpl_vars['_oKey']->value;?>
</td>

						<td class="align-center text-left"><?php echo $_smarty_tpl->tpl_vars['_oSheet']->value;?>
</td>

					</tr>

					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

				<?php }?>

			</table>

		</div>

		<div class="modal-footer">

			<button type="button" onclick="$Core.project.update_sheet(this, event)" gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" stock_type="<?php echo $_smarty_tpl->tpl_vars['stock_type']->value;?>
" spreadsheetId="<?php echo $_smarty_tpl->tpl_vars['spreadsheetId']->value;?>
" 

				title="Lưu sheet" class="btn btn-primary">

				<i class="fa fa-plus"></i> Lưu chọn

			</button>

		</div>

	</form>

</div><?php }
}
