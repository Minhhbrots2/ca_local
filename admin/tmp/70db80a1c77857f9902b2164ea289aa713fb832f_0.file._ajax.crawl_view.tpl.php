<?php
/* Smarty version 3.1.33, created on 2026-07-06 10:20:00
  from '/www/wwwroot/ca.futurehomes.vn/admin/application/views/news/_ajax.crawl_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a4b1ee010f715_79695763',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70db80a1c77857f9902b2164ea289aa713fb832f' => 
    array (
      0 => '/www/wwwroot/ca.futurehomes.vn/admin/application/views/news/_ajax.crawl_view.tpl',
      1 => 1782303594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a4b1ee010f715_79695763 (Smarty_Internal_Template $_smarty_tpl) {
?><style>.cm-cover input:checked + img{ border-color:#a4161a; box-shadow:0 0 0 2px rgba(164,22,26,.22) }</style>
<div class="ui-card__header" style="display:flex;justify-content:space-between;align-items:center;padding:14px 18px;border-bottom:1px solid #eee">
	<h2 class="ui-heading" style="margin:0">Duyệt &amp; đăng tin</h2>
	<button type="button" class="ui-button ui-button--small" onclick="crawlClose()">&times; Đóng</button>
</div>
<div class="ui-card__section" style="padding:18px">
	<p class="type--subdued" style="margin-bottom:12px">
		Nguồn <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['source_code'], ENT_QUOTES, 'UTF-8', true);?>
</strong> ·
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['source_url'], ENT_QUOTES, 'UTF-8', true);?>
" target="_blank" rel="noopener">link gốc &rarr;</a>
		· bấm <strong>Duyệt &amp; đăng</strong> = đăng thẳng lên website (<?php echo count($_smarty_tpl->tpl_vars['o']->value['images_arr']);?>
 ảnh)
	</p>

	<div class="mb-2"><label>Tiêu đề (sửa lại)</label>
		<input class="form-control" id="cm_title" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
"></div>
	<div class="mb-2"><label>Tóm tắt</label>
		<textarea class="form-control" id="cm_summary" rows="2"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['summary'], ENT_QUOTES, 'UTF-8', true);?>
</textarea></div>

	<div class="row mb-2">
		<div class="col-md-6"><label>Website (đăng lên)</label>
			<select class="form-control" id="cm_domain" onchange="$Core.news.loadCategory(this,event)" cat_id="0" toId="cm_cat">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['domains']->value, 'd');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['d']->value['cat_id'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['d']->value['domain'], ENT_QUOTES, 'UTF-8', true);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</select>
		</div>
		<div class="col-md-6"><label>Danh mục <span style="color:#a4161a">*</span></label>
			<select class="form-control" id="cm_cat">
				<option value="0">— Chọn danh mục —</option>
				<?php echo $_smarty_tpl->tpl_vars['clsProperty']->value->getListOption("_NEWS_CATEGORY",$_smarty_tpl->tpl_vars['src_cat']->value,$_smarty_tpl->tpl_vars['def_domain']->value);?>

			</select>
		</div>
	</div>

	<div class="mb-2"><label>Nội dung — <strong>viết lại</strong> (không copy nguyên văn)</label>
		<textarea class="form-control isoTextArea" id="cm_content" rows="12"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['content'], ENT_QUOTES, 'UTF-8', true);?>
</textarea></div>

	<?php if (!empty($_smarty_tpl->tpl_vars['o']->value['images_arr'])) {?>
	<div class="mb-2"><label>Ảnh đại diện — bấm chọn 1 (tải về local khi đăng)</label>
		<div style="display:flex;flex-wrap:wrap;gap:8px;margin-top:4px">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['o']->value['images_arr'], 'img', false, NULL, 'im', array (
  'index' => true,
  'first' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['img']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_im']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_im']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_im']->value['index'];
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_im']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_im']->value['index'] : null) < 8) {?>
			<label class="cm-cover" style="cursor:pointer;margin:0" title="Chọn làm ảnh đại diện">
				<input type="radio" name="cm_cover" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['img']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_im']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_im']->value['first'] : null)) {?> checked<?php }?> style="display:none">
				<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['img']->value, ENT_QUOTES, 'UTF-8', true);?>
" style="height:72px;border-radius:6px;border:2px solid #e4e7ec;display:block">
			</label>
		<?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	</div>
	<?php }?>

	<div style="background:#fff8e1;border:1px solid #ffe7a3;border-radius:6px;padding:10px;margin:12px 0">
		<label style="font-weight:600;color:#946a00;margin:0">
			<input type="checkbox" id="cm_rewritten"> Tôi đã <strong>viết lại</strong> nội dung (không sao chép nguyên văn)
		</label>
	</div>

	<div style="display:flex;justify-content:flex-end;gap:8px">
		<button type="button" class="ui-button" onclick="crawlReject(<?php echo $_smarty_tpl->tpl_vars['o']->value['crawl_id'];?>
); crawlClose();">Bỏ tin</button>
		<button type="button" class="ui-button ui-button--primary" onclick="crawlApprove(<?php echo $_smarty_tpl->tpl_vars['o']->value['crawl_id'];?>
)">Duyệt &amp; đăng</button>
	</div>
</div>
<?php }
}
