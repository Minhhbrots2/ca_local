<?php
/* Smarty version 3.1.33, created on 2026-07-23 23:21:12
  from '/www/wwwroot/skyrealty.c-a.vn/application/views/ajax/helper/_ajax.Lpoint.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a623f782ac244_48811161',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2b7c2ef8e73ce04ca54e463cec63d62e1ff9599' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/views/ajax/helper/_ajax.Lpoint.tpl',
      1 => 1783308689,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a623f782ac244_48811161 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['template_type']->value == '_modal') {?>

<div class="modal-dialog modal-lg">

	<form class="modal-content">

		<div class="modal-header position-relative">

			<div class="d-flex w-100 justify-content-between align-items-center">

				<h5 class="modal-title text-upper">

					<?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?>

					<span class="text-muted fs-12">Điểm Loyalty</span><br />

					<?php echo $_smarty_tpl->tpl_vars['clsProfile']->value->getFullName($_smarty_tpl->tpl_vars['staff_id']->value,$_smarty_tpl->tpl_vars['oProfile']->value);?>


					<?php } else { ?>

					Điểm Loyalty <?php echo $_smarty_tpl->tpl_vars['clsProfile']->value->getFullName($_smarty_tpl->tpl_vars['staff_id']->value,$_smarty_tpl->tpl_vars['oProfile']->value);?>


					<?php }?>

				</h5>

				<div class="text-danger border rounded-2 px-2 fs-5">

					<img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/point.png" width="12px" />

					<strong><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatNumber($_smarty_tpl->tpl_vars['oProfile']->value['total_Lpoint']);?>
</strong>

				</div>

			</div>

			<button type="button" class="btn-close closeEv" data-bs-dismiss="modal" aria-label="Close"></button>

		</div>

		<div class="modal-body">

			<?php $_smarty_tpl->_assignInScope('Lpoint_Notes', $_smarty_tpl->tpl_vars['clsConfiguration']->value->getValue('SiteMsg_Lpoint_Notes'));?>

			<?php if (!empty($_smarty_tpl->tpl_vars['Lpoint_Notes']->value)) {?>

			<div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['Lpoint_Notes']->value;?>
</div>

			<?php }?>

		

			<div class="d-flex gap-2 align-items-center p-3 mb-2 bg-lighter rounded-2">

				<div class="form-group ">

					<input type="text" name="keyword" class="form-control no-focus" 

					placeholder="Nhập từ khoá..." />			

				</div>

				<div class="form-group ">

					<input type="date" name="reg_date" class="form-control no-focus" />			

				</div>

			</div>

			<div class="holder_Lpoint_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">

				<table class="table">

					<thead><tr>

						<th class="align-center text-center" width="5%">No.</th>

						<th class="align-center">Nội dung</th>

						<th class="align-center text-center" width="5%">Loại điểm</th>

						<th class="align-center text-center" width="5%">Số điểm</th>

						<th class="align-center">Thời gian</th>

					</tr></thead>

					<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['list_preloaders']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = min(($__section_i_0_loop - 0), 30);
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>

					<tr>

						<td><div class="animate-bg rounded-2 w-100 h-px-15"></td>

						<td><div class="animate-bg rounded-2 w-100 h-px-15"></td>

						<td><div class="animate-bg rounded-2 w-100 h-px-15"></td>

						<th class="align-center text-center" width="5%">Số điểm</th>

						<td><div class="animate-bg rounded-2 w-100 h-px-15"></td>

					</tr>

					<?php
}
}
?>

				</table>

			</div>

		</div>

	</form>

</div>

<?php } else { ?>

<div class="overflow-x-auto">

	<table class="table">

		<thead><tr>

			<th class="align-center text-center" width="5%">No.</th>

			<th class="align-center">Nội dung</th>

			<th class="align-center text-center" width="6%">Loại điểm</th>

			<th class="align-center text-center" width="5%">Số điểm</th>

			<th class="align-center">Thời gian</th>

		</tr></thead>

		<?php if (!empty($_smarty_tpl->tpl_vars['list_items']->value)) {?>

			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_items']->value, '_oI', false, NULL, 'i', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oI']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']++;
?>

			<tr class="text-nowrap<?php if ($_smarty_tpl->tpl_vars['_oI']->value['is_cancel'] == '1') {?> text-decoration-line-through<?php }?>">

				<td class="text-center"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration'] : null);?>
</td>

				<td><?php echo $_smarty_tpl->tpl_vars['_oI']->value['content'];?>
</td>

				<td class="text-left border-end"><?php echo $_smarty_tpl->tpl_vars['_oI']->value['score_type'];?>
</td>

				<td class="text-center text-main fw-bold"><?php echo $_smarty_tpl->tpl_vars['_oI']->value['symbol'];
echo $_smarty_tpl->tpl_vars['_oI']->value['score'];?>
</td>

				<td><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->convertTimeToText($_smarty_tpl->tpl_vars['_oI']->value['reg_date']);?>
</td>

			</tr>

			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

		<?php } else { ?>

			<tr>

				<td colspan="4" class="text-center">

					<img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/illustration-empty-results.svg" class="w-px-200" />

					<p class="text-muted">Chưa có lịch sử tích điểm</p>

				</td>

			</tr>

		<?php }?>

	</table>

</div>

<div id="pager_Lpoint_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" class="pager_Lpoint_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
"></div>

<?php }
}
}
