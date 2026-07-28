<?php
/* Smarty version 3.1.33, created on 2026-07-25 23:58:26
  from '/www/wwwroot/skyrealty.c-a.vn/application/views/home/project/_ajax.load_model.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a64eb32d14505_54229939',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a227c54697fa1249b6f24864590698b6cbb282b7' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/views/home/project/_ajax.load_model.tpl',
      1 => 1783283460,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a64eb32d14505_54229939 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal right fade show w-100" id="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" role="dialog">

	<div class="modal-dialog modal-dialog-scrollabe">

		<div class="modal-content overflow-y">

			<div class="modal-header border-bottom">

				<h5 class="modal-title" id="modalTopTitle"><?php if ($_smarty_tpl->tpl_vars['view_type']->value == 'is_handoverSpecs') {?>Tiêu chuẩn bàn giao<?php } else { ?>Hình ảnh, video nhà mẫu<?php }?></h5>

				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

			</div>

			<div class="modal-body overflow-y">

				<?php if (!empty($_smarty_tpl->tpl_vars['list_docs']->value)) {?>

					<div class="form-row row-cols-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxxl-5">

						<!-- End Post -->

						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_docs']->value, '_oDoc', false, 'k_doc', 'n_doc', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k_doc']->value => $_smarty_tpl->tpl_vars['_oDoc']->value) {
?>

						<div class="col mb-2">

							<?php $_smarty_tpl->_assignInScope('oneItem', $_smarty_tpl->tpl_vars['_oDoc']->value);?>

							<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock('item_doc',array('_type'=>"detail",'oneItem'=>$_smarty_tpl->tpl_vars['_oDoc']->value));?>


						</div>

						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

					</div>

				<?php } else { ?>

					<div class="d-flex justify-content-center">

						<div class="text-center p-4">

							<img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/no-data.png" height="200">

							<p class="text-muted mt-n2">Xin lỗi. Chưa có dữ liệu trong thư mục này!</p>

						</div>

					</div>

				<?php }?>

			</div>

		</div>

	</div>

</div><?php }
}
