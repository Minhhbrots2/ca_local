<?php
/* Smarty version 3.1.33, created on 2026-07-11 09:03:42
  from '/www/wwwroot/skyrealty.c-a.vn/application/views/document/default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a51a47e8fa3d2_04168733',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da97d9b3ab3163af6b9dc9cd561eb8e87dedc410' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/views/document/default.tpl',
      1 => 1783308751,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a51a47e8fa3d2_04168733 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-xxl flex-grow-1 pt-2 container-p-y">

	<div class="d-flex align-items-center justify-content-between mb-2">

		<div class="yvBvmnviXh">

			<h4 class="fw-bold mb-0 <?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?>fs-6<?php }?>">Văn bản hệ thống</h4>

		</div>

		<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkPermission("add_folder") || 1 == 1) {?>

		<div class="d-flex align-items-center gap-1">

			<button class="btn btn-primary text-nowrap" onClick="$Core.docs.open_folder(this,event)" type="button" data-folder_id='0'>Thêm thư mục</button>

		</div>

		<?php }?>

	</div>

	<div class="card no-shadow">

		<div class="card-header mb-4">

			<?php echo $_smarty_tpl->tpl_vars['core']->value->getBlock("search_docs");?>


		</div>

		<div class="card-body">				

			<div class="box_doc_top position-relative mb-4">

				<div class="form-row header_doc">

					<h3 class="title_collapse title_pinned text-dark fs-6 d-inline-flex align-items-center px-2 py-1 rounded-pill mb-0" data-bs-toggle="collapse" href="#collapseTopDocs" role="button" aria-expanded="true" aria-controls="collapseTopDocs">Tệp đề xuất</h3>

				</div>

				<div class="body_collapse collapse show" id="collapseTopDocs">

					<div class="d-flex justify-content-between align-items-center box_view position-absolute">

						<span class=""></span>

						<div class="input-group w-auto">

							<button class="form-control btn btn-outline-default bg-white btn_left btn_view_docs btn-sm <?php if ($_smarty_tpl->tpl_vars['_ss_view_docs']->value == 'list') {?>active<?php }?>" onClick="$Core.docs.setView(this,event)" data-type="list" data-doc_type="top"><i class='bx bx-list-ul'></i></button>

							<button class="form-control btn btn-outline-default bg-white btn_right btn_view_docs btn-sm <?php if ($_smarty_tpl->tpl_vars['_ss_view_docs']->value == 'grid') {?>active<?php }?>" onClick="$Core.docs.setView(this,event)" data-type="grid" data-doc_type="top"><i class='bx bx-grid-alt' ></i></button>

						</div>

					</div>

					<div class="list_docs_top">



					</div>

				</div>

			</div>

			<div class="box_doc_pin position-relative mb-4">

				<div class="form-row header_doc">

					<h3 class="title_collapse title_pinned text-dark fs-6 d-inline-flex align-items-center px-2 py-1 rounded-pill mb-0" data-bs-toggle="collapse" href="#collapsePinned" role="button" aria-expanded="true" aria-controls="collapsePinned">Tệp đã ghim</h3>

				</div>

				<div class="body_collapse collapse show" id="collapsePinned">

					<div class="d-flex justify-content-between align-items-center box_view position-absolute">

						<span class=""></span>

						<div class="input-group w-auto">

							<button class="form-control btn btn-outline-default bg-white btn_left btn_view_docs btn-sm <?php if ($_smarty_tpl->tpl_vars['_ss_view_docs']->value == 'list') {?>active<?php }?>" onClick="$Core.docs.setView(this,event)" data-type="list" data-doc_type="pin"><i class='bx bx-list-ul'></i></button>

							<button class="form-control btn btn-outline-default bg-white btn_right btn_view_docs btn-sm <?php if ($_smarty_tpl->tpl_vars['_ss_view_docs']->value == 'grid') {?>active<?php }?>" onClick="$Core.docs.setView(this,event)" data-type="grid" data-doc_type="pin"><i class='bx bx-grid-alt' ></i></button>

						</div>

					</div>

					<div class="list_docs_pin">



					</div>

				</div>

			</div>

			<div class="box_folder_general position-relative mb-4">

				<div class="form-row header_doc">

					<h3 class="title_collapse title_pinned text-dark fs-6 d-inline-flex align-items-center px-2 py-1 rounded-pill mb-0" data-bs-toggle="collapse" href="#collapseFolder" role="button" aria-expanded="true" aria-controls="collapseFolder">Thư mục chung</h3>

				</div>

				<div class="body_collapse collapse show" id="collapseFolder">

					<div class="list_folder"></div>

				</div>

			</div>

			<div class="box_my_folder position-relative mb-4">

				<div class="form-row header_doc">

					<h3 class="title_collapse title_pinned text-dark fs-6 d-inline-flex align-items-center px-2 py-1 rounded-pill mb-0" data-bs-toggle="collapse" href="#collapseMyFolder" role="button" aria-expanded="true" aria-controls="collapseMyFolder">Thư mục được chia sẻ</h3>

				</div>

				<div class="body_collapse collapse show" id="collapseMyFolder">

					<div class="my_list_folder"></div>

				</div>

			</div>		

			

			

			

		</div>

	</div>

</div>



<?php echo '<script'; ?>
>

	$(function(){

		$Core.docs.load_folder({"type":"0"}); 

		$Core.docs.load_folder({"type":"1"}); 

		$Core.docs.load_docs({'type':"pin"}); 

		$Core.docs.load_docs({'type':"top"}); 

	})

<?php echo '</script'; ?>
>



<?php }
}
