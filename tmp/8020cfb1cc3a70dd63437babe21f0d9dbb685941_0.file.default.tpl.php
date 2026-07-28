<?php
/* Smarty version 3.1.33, created on 2026-07-08 14:32:31
  from '/www/wwwroot/skyrealty.c-a.vn/application/views/template/default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a4dfd0fedcb37_17947899',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8020cfb1cc3a70dd63437babe21f0d9dbb685941' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/views/template/default.tpl',
      1 => 1783314330,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a4dfd0fedcb37_17947899 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-xxl flex-grow-1 pt-2 container-p-y">

	<div class="form-row">

		<div class="col-12 col-lg-9 col-xxxl-7 mx-auto">

			<div class="card">

				<div class="card-header">

					<div class="d-flex  align-items-center justify-content-between">

						<h5 class="chat-title mb-0"><a href="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getLink('billing');?>
" class="btn btn-sm btn-outline-warning me-2"><i class="bx bx-reply"></i> GD chốt</a>Mẫu lời chúc</h5>

						<button onClick="$Core.template.openTemplate(this, event)" template_id="0" type="button" class="btn btn-outline-default <?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?>btn-sm<?php }?>">

							<i class="bx bx-plus"></i> Thêm mẫu

						</button>

					</div>

				</div>

				<div class="card-body">

					<div class="table-container no-shadow overflow-x-auto mb-3">

						<table cellpadding="0" cellspacing="0" width="100%" class="table table-striped dragable table-bordered">

							<thead><tr>

								<!--<th class="align-center h-px-35 bg-lighter">Type</th> -->

								<th class="align-center h-px-35 bg-lighter" width="40px">STT</th>

								<th class="align-center h-px-35 bg-lighter" >Tiêu đề</th>

								<th class="align-center h-px-35 bg-lighter text-center">Thời gian</th>

								<th class="align-center h-px-35 bg-lighter" width="40px"></th>

							</tr></thead>

							<tbody class="holder_chatlogs">

								<?php if (!empty($_smarty_tpl->tpl_vars['lstItem']->value)) {?>

									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lstItem']->value, '_oItem', false, 'key', 'i', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['_oItem']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']++;
?>

										<tr class="tr">

											<td class="text-left" width="40"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration'] : null);?>
</td>

											<td class="text-left"><?php echo $_smarty_tpl->tpl_vars['_oItem']->value['title'];?>
</td>

											<td class="text-nowrap text-center"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatTimeDate($_smarty_tpl->tpl_vars['_oItem']->value['upd_date']);?>
</td>

											<td class="text-nowrap text-center">

												<div class="btn-group">

													<a href="javascript:void(0);" title="Sửa" class="btn btn-icon btn-sm btn-outline-default" onclick="$Core.template.openTemplate(this,event)" template_id="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['template_id'];?>
"><i class="bx bx-edit-alt"></i></a>

													<a href="javascript:void(0);" title="Xóa" class="btn btn-icon btn-sm btn-outline-default" onclick="$Core.template.deleteTemplate(this,event)" template_id="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['template_id'];?>
"><i class="bx bx-trash"></i></a>

												</div>

											</td>

										</tr>

									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 

								<?php } else { ?>

									<tr class="tr">

										<td colspan="4" class="text-center">Danh sách trống</td>

									</tr>

								<?php }?>

							</tbody>

						</table>

					</div>

						<?php if (!empty($_smarty_tpl->tpl_vars['html_pager']->value)) {?>

							<div class="pagination justify-content-center"><?php echo $_smarty_tpl->tpl_vars['html_pager']->value;?>
</div>

						<?php }?>

				</div>

			</div>

		</div>

	</div>

</div><?php }
}
