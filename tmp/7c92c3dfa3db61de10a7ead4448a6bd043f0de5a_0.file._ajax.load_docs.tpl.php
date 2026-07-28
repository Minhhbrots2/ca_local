<?php
/* Smarty version 3.1.33, created on 2026-07-14 11:02:24
  from '/www/wwwroot/skyrealty.c-a.vn/application/views/document/_ajax.load_docs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a55b4d09534b5_04750456',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c92c3dfa3db61de10a7ead4448a6bd043f0de5a' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/views/document/_ajax.load_docs.tpl',
      1 => 1783944294,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a55b4d09534b5_04750456 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['_ss_view_docs']->value == "grid") {?>	

    <div class="form-row row-cols-1 row-cols-sm-2 row-cols-md-4 row-cols-lg-5">

		<?php if (!empty($_smarty_tpl->tpl_vars['lstDocs']->value)) {?>

		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lstDocs']->value, '_oItem');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oItem']->value) {
?>

			<?php $_smarty_tpl->_assignInScope('file_doc', $_smarty_tpl->tpl_vars['_oItem']->value['file_doc']);?>

				<div class="col box_item_doc item_doc_<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['doc_id'];?>
 mb-2">

					<div class="item_doc p-2 bg-lighter rounded-3 <?php if (!empty($_smarty_tpl->tpl_vars['file_doc']->value)) {?>cursor-pointer<?php } else { ?>cursor-no-drop<?php }?>" onDblClick="$Core.docs.view_doc(this,event)" data-view="<?php echo $_smarty_tpl->tpl_vars['_ss_view_docs']->value;?>
"  title="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['title'];?>
">

						<div class="d-flex justify-content-between align-items-center gap-2 p-2 text-dark">

							<div class="title_doc mb-0 fs-16 d-flex align-items-center gap-1">

								<?php if (!empty($_smarty_tpl->tpl_vars['_oItem']->value['is_important'])) {?><i class='bx bxs-star text-warning align-bottom' data-bs-toggle="tooltip" data-bs-placement="top" title="Quan trọng" ></i><?php }?> 

								<span class="limit_1line"><?php echo $_smarty_tpl->tpl_vars['_oItem']->value['title'];?>
</span>

								<?php if (!empty($_smarty_tpl->tpl_vars['_oItem']->value['content'])) {?>

									<span class="text-primary" data-url="/index.php?mod=document&act=load_intro&id=<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['doc_id'];?>
&table=Docs" data-toggle="webui-popover" data-trigger="hover" data-width="350" data-placement="top"><i class='bx bx-info-circle' ></i></span>

								<?php }?>

							</div>

							<div class="dropdown" data-bs-toggle="tooltip" data-bs-placement="top" title="Thao tác">

								<button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"> <i class="bx bx-dots-vertical-rounded"></i></button>

								<div class="dropdown-menu w-px-100 fs-14">

									<a class="dropdown-item pin px-2 fs-14 document_<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['doc_id'];?>
 <?php if (!empty($_smarty_tpl->tpl_vars['_oItem']->value['pinned'])) {?>active<?php }?>" onclick="$Core.docs.pin_doc(this,event)" doc_id="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['doc_id'];?>
" status="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['pinned'];?>
" href="javascript:void(0);"> <?php if (empty($_smarty_tpl->tpl_vars['_oItem']->value['pinned'])) {?>Ghim<?php } else { ?>Bỏ ghim<?php }?></a>

									<?php if (!empty($_smarty_tpl->tpl_vars['file_doc']->value)) {?>

									<a class="dropdown-item px-2 fs-14" onclick="$Core.docs.view_doc(this,event)" data-view="<?php echo $_smarty_tpl->tpl_vars['_ss_view_docs']->value;?>
" doc_id="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['doc_id'];?>
" href="javascript:void(0);"><i class="bx bx-bullseye me-1"></i> Xem</a>

									<?php }?>

									<a class="dropdown-item px-2 fs-14" onclick="$Core.docs.view_doc_detail(this,event)" doc_id="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['doc_id'];?>
" href="javascript:void(0);" title="Thông tin chi tiết văn bản"><i class="bx bx-info-circle me-1"></i> Chi tiết</a>

									<?php if ($_smarty_tpl->tpl_vars['profile_id']->value == $_smarty_tpl->tpl_vars['_oItem']->value['user_id']) {?>

									<a class="dropdown-item px-2 fs-14" onclick="$Core.docs.open_doc(this,event)" data-cat_id='<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['cat_id'];?>
' data-doc_id="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['doc_id'];?>
" href="javascript:void(0);"><i class='bx bx-edit-alt me-1'></i> Sửa</a>

									<a class="dropdown-item px-2 fs-14" href="javascript:void(0);" onclick="$Core.docs.delete_doc(this,event)" doc_id="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['doc_id'];?>
"><i class="bx bx-trash me-1"></i> Xóa</a>

									<?php }?>

								</div>

							</div>

						</div>

						<div class="px-4 py-5 d-flex justify-content-center bg-white rounded-1">

							<img src="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['icon'];?>
" alt="" class="" width="60">

						</div>

						<div class="d-flex justify-content-start align-items-start pt-3 pb-2">

							<div class="avatar avatar-xxs me-1">

						  		<img src="<?php echo $_smarty_tpl->tpl_vars['clsProfile']->value->getAvatar($_smarty_tpl->tpl_vars['_oItem']->value['user_id']);?>
" alt="Avatar" class="rounded-circle">

							</div>

							<div class="fs-13 info_bottom">

								<span class="" data-bs-toggle="tooltip" data-bs-placement="top" title="Người tạo"><?php echo $_smarty_tpl->tpl_vars['clsProfile']->value->getFullName($_smarty_tpl->tpl_vars['_oItem']->value['user_id']);?>
</span>

								<span class="time" data-bs-toggle="tooltip" data-bs-placement="top" title="Ngày tạo"><?php echo $_smarty_tpl->tpl_vars['_oItem']->value['time'];?>
</span>

							</div>

						</div>

						<?php if (!empty($_smarty_tpl->tpl_vars['file_doc']->value)) {?>

							<div class="lst_image">

								<?php if ($_smarty_tpl->tpl_vars['_oItem']->value['type'] == 'file') {?>

									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['file_doc']->value, '_oFile');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oFile']->value) {
?>

										<div class="item_file d-none" data-fancybox="gallery_<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['doc_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['_oFile']->value['file_type'] == "image") {?> data-src="<?php echo $_smarty_tpl->tpl_vars['_oFile']->value['link'];?>
"<?php } elseif ($_smarty_tpl->tpl_vars['_oFile']->value['file_type'] == "doc") {?> href="https://docs.google.com/viewer?embedded=true&url=<?php echo $_smarty_tpl->tpl_vars['DOMAIN_URL']->value;
echo $_smarty_tpl->tpl_vars['_oFile']->value['link'];?>
" data-type="iframe" <?php } elseif ($_smarty_tpl->tpl_vars['_oFile']->value['file_type'] == "excel") {?> href="https://view.officeapps.live.com/op/view.aspx?src=<?php echo @constant('FH_URL');
echo $_smarty_tpl->tpl_vars['_oFile']->value['link'];?>
." data-type="iframe" <?php } else { ?>href="<?php echo $_smarty_tpl->tpl_vars['_oFile']->value['link'];?>
" data-type="iframe" <?php }?> data-caption="<?php echo $_smarty_tpl->tpl_vars['_oFile']->value['name'];?>
" ><img src="<?php echo $_smarty_tpl->tpl_vars['_oFile']->value['link'];?>
" alt=""></div>

									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

								<?php } else { ?>

									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['file_doc']->value, '_oFile');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oFile']->value) {
?>

										<div class="item_file d-none" data-fancybox="gallery_<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['doc_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['_oFile']->value['file_type'] == "image") {?> data-src="<?php echo $_smarty_tpl->tpl_vars['_oFile']->value['link'];?>
"<?php } elseif ($_smarty_tpl->tpl_vars['_oFile']->value['file_type'] == "doc") {?> href="<?php echo $_smarty_tpl->tpl_vars['_oFile']->value['link'];?>
" data-type="iframe" <?php } elseif ($_smarty_tpl->tpl_vars['_oFile']->value['file_type'] == "excel") {?> href="<?php echo $_smarty_tpl->tpl_vars['_oFile']->value['link'];?>
" data-type="iframe" <?php } else { ?>href="<?php echo $_smarty_tpl->tpl_vars['_oFile']->value['link'];?>
" data-type="iframe" <?php }?> data-caption="<?php echo $_smarty_tpl->tpl_vars['_oFile']->value['name'];?>
" ><img src="<?php echo $_smarty_tpl->tpl_vars['_oFile']->value['link'];?>
" alt=""></div>

									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

								<?php }?>

								

							</div>

						<?php }?>

					</div>

				</div>

		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

		<?php } else { ?>

			<div class="p-2 text-center d-flex justify-content-center flex-column align-items-center w-100">

				<img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/listing-empty.svg" width="200" height="200">

				<p>Không có văn bản tài liệu nào</p>

			</div>

		<?php }?>

	</div>

<?php } else { ?>

	<div class="<?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?>table-container overflow-x-auto<?php }?> no-shadow lst_doc">

		<table cellpadding="0" cellspacing="0" class="table mb-0 text-dark" width="100%">

			<thead><tr>

				<th class="align-center h-px-35 text-left">Tiêu đề</th>

				<th class="align-center h-px-35 text-left">Nội dung</th>

				<th class="align-center h-px-35 text-left">Thời gian</th>

				<th class="align-center h-px-35 text-left">Người tạo</th>

				<th class="align-center w-px-50 text-left"></th>

			</tr></thead>

			<tbody class="holder_reports_activity_log">

				<?php if (!empty($_smarty_tpl->tpl_vars['lstDocs']->value)) {?>

				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lstDocs']->value, '_oItem');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oItem']->value) {
?>

					<?php $_smarty_tpl->_assignInScope('file_doc', $_smarty_tpl->tpl_vars['_oItem']->value['file_doc']);?>

					<tr onDblClick="$Core.docs.view_doc(this,event)" data-view="view_tr" class="item_doc item_doc_<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['doc_id'];?>
 <?php if (!empty($_smarty_tpl->tpl_vars['file_doc']->value)) {?>cursor-pointer<?php } else { ?>cursor-no-drop<?php }?>">

						<td><?php if (!empty($_smarty_tpl->tpl_vars['_oItem']->value['is_important'])) {?><i class='bx bxs-star text-warning align-top' title="Quan trọng" ></i><?php }?> <?php echo $_smarty_tpl->tpl_vars['_oItem']->value['title'];?>
</td>

						<td><?php echo $_smarty_tpl->tpl_vars['_oItem']->value['content'];?>
</td>

						<td><?php echo $_smarty_tpl->tpl_vars['_oItem']->value['time'];?>
</td>

						<td><?php echo $_smarty_tpl->tpl_vars['clsProfile']->value->getFullName($_smarty_tpl->tpl_vars['_oItem']->value['user_id']);?>
</td>

						<td class="text-center">

							<div class="dropdown dropstart">

								<button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"> <i class="bx bx-dots-vertical-rounded"></i></button>

								<div class="dropdown-menu w-px-100">

									<a class="dropdown-item px-2 fs-14 pin document_<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['doc_id'];?>
 <?php if (!empty($_smarty_tpl->tpl_vars['_oItem']->value['pinned'])) {?>active<?php }?>" onclick="$Core.docs.pin_doc(this,event)" doc_id="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['doc_id'];?>
" status="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['pinned'];?>
" href="javascript:void(0);"> <?php if (empty($_smarty_tpl->tpl_vars['_oItem']->value['pinned'])) {?>Ghim<?php } else { ?>Bỏ ghim<?php }?></a>

									<?php if (!empty($_smarty_tpl->tpl_vars['file_doc']->value)) {?>

									<a class="dropdown-item px-2 fs-14" onclick="$Core.docs.view_doc(this,event)"  data-view="view_td" doc_id="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['doc_id'];?>
" href="javascript:void(0);"><i class="bx bx-bullseye me-1"></i> Xem</a>

									<?php }?>

									<a class="dropdown-item px-2 fs-14" onclick="$Core.docs.view_doc_detail(this,event)" doc_id="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['doc_id'];?>
" href="javascript:void(0);" title="Thông tin chi tiết văn bản"><i class="bx bx-info-circle me-1"></i> Chi tiết</a>

									<?php if ($_smarty_tpl->tpl_vars['profile_id']->value == $_smarty_tpl->tpl_vars['_oItem']->value['user_id']) {?>

										<a class="dropdown-item px-2 fs-14" onclick="$Core.docs.open_doc(this,event)" data-cat_id='<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['cat_id'];?>
' data-doc_id="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['doc_id'];?>
" href="javascript:void(0);"><i class='bx bx-edit-alt me-1'></i> Sửa</a>

										<a class="dropdown-item px-2 fs-14" href="javascript:void(0);" onclick="$Core.docs.delete_doc(this,event)" doc_id="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['doc_id'];?>
"><i class="bx bx-trash me-1"></i> Xóa</a>

									<?php }?>

								</div>

							</div>

							<?php if (!empty($_smarty_tpl->tpl_vars['file_doc']->value)) {?>

								<div class="lst_image">

									<?php if ($_smarty_tpl->tpl_vars['_oItem']->value['type'] == 'file') {?>

										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['file_doc']->value, '_oFile');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oFile']->value) {
?>

											<div class="item_file d-none" data-fancybox="gallery_<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['doc_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['_oFile']->value['file_type'] == "image") {?> data-src="<?php echo $_smarty_tpl->tpl_vars['_oFile']->value['link'];?>
"<?php } elseif ($_smarty_tpl->tpl_vars['_oFile']->value['file_type'] == "doc") {?> href="https://docs.google.com/viewer?url=<?php echo $_smarty_tpl->tpl_vars['DOMAIN_URL']->value;
echo $_smarty_tpl->tpl_vars['_oFile']->value['link'];?>
&embedded=true" data-type="iframe" <?php } elseif ($_smarty_tpl->tpl_vars['_oFile']->value['file_type'] == "excel") {?> href="https://view.officeapps.live.com/op/view.aspx?src=<?php echo @constant('FH_URL');
echo $_smarty_tpl->tpl_vars['_oFile']->value['link'];?>
." data-type="iframe" <?php } else { ?>href="<?php echo $_smarty_tpl->tpl_vars['_oFile']->value['link'];?>
" data-type="iframe" <?php }?> data-caption="<?php echo $_smarty_tpl->tpl_vars['_oFile']->value['name'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['_oFile']->value['link'];?>
" alt=""></div>

										<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

									<?php } else { ?>

										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['file_doc']->value, '_oFile');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oFile']->value) {
?>

											<div class="item_file d-none" data-fancybox="gallery_<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['doc_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['_oFile']->value['file_type'] == "image") {?> data-src="<?php echo $_smarty_tpl->tpl_vars['_oFile']->value['link'];?>
"<?php } elseif ($_smarty_tpl->tpl_vars['_oFile']->value['file_type'] == "doc") {?> href="https://docs.google.com/viewer?url=<?php echo $_smarty_tpl->tpl_vars['DOMAIN_URL']->value;
echo $_smarty_tpl->tpl_vars['_oFile']->value['link'];?>
&embedded=true" data-type="iframe" <?php } elseif ($_smarty_tpl->tpl_vars['_oFile']->value['file_type'] == "excel") {?> href="<?php echo $_smarty_tpl->tpl_vars['_oFile']->value['link'];?>
" data-type="iframe" <?php } else { ?>href="<?php echo $_smarty_tpl->tpl_vars['_oFile']->value['link'];?>
" data-type="iframe" <?php }?> data-caption="<?php echo $_smarty_tpl->tpl_vars['_oFile']->value['name'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['_oFile']->value['link'];?>
" alt=""></div>

										<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

									<?php }?>



								</div>

							<?php }?>

						</td>

					</tr>

				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

				<?php } else { ?>

					<tr>

						<td class="text-center" colspan="5">Không có văn bản tài liệu nào</td>

					</tr>

				<?php }?>

			</tbody>

		</table>

	</div>

<?php }
}
}
