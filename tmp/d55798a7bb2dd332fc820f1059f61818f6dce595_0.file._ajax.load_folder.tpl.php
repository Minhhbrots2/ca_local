<?php
/* Smarty version 3.1.33, created on 2026-07-14 11:02:24
  from '/www/wwwroot/skyrealty.c-a.vn/application/views/document/_ajax.load_folder.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a55b4d07300b5_44158494',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd55798a7bb2dd332fc820f1059f61818f6dce595' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/views/document/_ajax.load_folder.tpl',
      1 => 1783308751,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a55b4d07300b5_44158494 (Smarty_Internal_Template $_smarty_tpl) {
if (!empty($_smarty_tpl->tpl_vars['lstFolder']->value)) {?>

	<div class="form-row row-cols-2 row-cols-sm-2 row-cols-md-4 row-cols-lg-5">

		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lstFolder']->value, '_oFolder');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oFolder']->value) {
?>

			<div class="col mb-2">

				<div class="card position-relative">					

					<?php if ($_smarty_tpl->tpl_vars['_oFolder']->value['user_id'] == $_smarty_tpl->tpl_vars['profile_id']->value && $_smarty_tpl->tpl_vars['_oFolder']->value['type'] == 1) {?>

					<div class="list_action_folder">

						<div class="dropdown" data-bs-toggle="tooltip" data-bs-placement="top" title="Thao tác">

							<button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"> <i class="bx bx-dots-vertical-rounded"></i></button>

							<div class="dropdown-menu w-px-100 fs-14">

								<a class="dropdown-item pin px-2 fs-14" onClick="$Core.docs.open_folder(this,event)" type="button" data-folder_id="<?php echo $_smarty_tpl->tpl_vars['_oFolder']->value['folder_id'];?>
" href="javascript:void(0);"> Sửa</a>

							</div>

						</div>

					</div>

					<?php }?>

					<div class="item_folder card-body d-flex flex-column align-items-center gap-2 mx-auto w-100 cursor-pointer" data-href="<?php echo $_smarty_tpl->tpl_vars['clsFolder']->value->getLink($_smarty_tpl->tpl_vars['_oFolder']->value['folder_id'],$_smarty_tpl->tpl_vars['_oFolder']->value);?>
" title="<?php echo $_smarty_tpl->tpl_vars['_oFolder']->value['title'];?>
" onClick="$Core.docs.redirectFolder(this,event)">

						<i class='bx bxs-folder icon_folder'></i>

						<div class="w-100 text-center">

							<div class="title_cat mb-0 fs-14 text-dark d-flex align-items-center justify-content-center gap-1">

								<span class="limit_1line"><?php echo $_smarty_tpl->tpl_vars['_oFolder']->value['title'];?>
</span>

								<?php if (!empty($_smarty_tpl->tpl_vars['_oFolder']->value['content'])) {?>

									<span class="text-primary" data-url="/index.php?mod=document&act=load_intro&id=<?php echo $_smarty_tpl->tpl_vars['_oFolder']->value['folder_id'];?>
&table=Folder" data-toggle="webui-popover" data-trigger="hover" data-width="350" data-placement="top"><i class='bx bx-info-circle' ></i></span>

								<?php }?>

							</div>

							<span class="text-muted fs-12">Có <?php echo $_smarty_tpl->tpl_vars['_oFolder']->value['total_doc'];?>
 tài liệu</span>

						</div>

					</div>

				</div>

			</div>

		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

	</div>

<?php }
}
}
