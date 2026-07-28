<?php
/* Smarty version 3.1.33, created on 2026-06-24 19:54:39
  from '/www/wwwroot/ca.futurehomes.vn/admin/application/views/news/crawl_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a3bd38f0aca22_07099993',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68cfc0829b9eb04b34ebf3be1a18e709da42b10d' => 
    array (
      0 => '/www/wwwroot/ca.futurehomes.vn/admin/application/views/news/crawl_list.tpl',
      1 => 1782304860,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a3bd38f0aca22_07099993 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/www/wwwroot/ca.futurehomes.vn/core/smarty/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
<div class="ui-title-bar-container ui-title-bar-container--full-width">
	<div class="ui-title-bar">
		<div class="ui-title-bar__main-group">
			<div class="ui-title-bar__heading-group">
				<h1 class="ui-title-bar__title w-100">Tin đã crawl</h1>
				<p class="type--subdued">Duyệt → viết lại → đẩy sang tin nháp. Tổng <strong><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</strong> tin.</p>
			</div>
		</div>
		<div class="action-bar">
			<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=news&act=crawl_source" class="ui-button ui-title-bar__action">Nguồn báo</a>
		</div>
	</div>
</div>
<div class="ui-layout ui-layout--full-width">
	<div class="ui-layout__sections">
		<div class="ui-layout__section">
			<div class="ui-layout__item">
				<div class="ui-card">
					<div class="ui-card__section">
						<form method="get" action="index.php" class="form-inline mb-2">
							<input type="hidden" name="mod" value="news"><input type="hidden" name="act" value="crawl_list">
							<select name="f_source" class="form-control mr-1">
								<option value="0">Tất cả nguồn</option>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sources']->value, 'so');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['so']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['so']->value['source_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['f']->value['f_source'] == $_smarty_tpl->tpl_vars['so']->value['source_id']) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['so']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</select>
							<select name="f_status" class="form-control mr-1">
								<option value="">Mọi trạng thái</option>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array('new'=>'Mới','blocked'=>'Bị chặn','pushed'=>'Đã đẩy','rejected'=>'Đã bỏ'), 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['f']->value['f_status'] == $_smarty_tpl->tpl_vars['k']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</select>
							<input type="text" name="kw" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['f']->value['kw'], ENT_QUOTES, 'UTF-8', true);?>
" class="form-control mr-1" placeholder="Tìm tiêu đề…">
							<button class="ui-button">Lọc</button>
						</form>

						<div class="table-responsive">
						<table class="table table-striped" width="100%">
							<thead><tr><th>Tiêu đề</th><th>Nguồn</th><th>Ngày</th><th class="text-center">Ảnh</th><th class="text-center">Trạng thái</th><th></th></tr></thead>
							<tbody>
								<?php if (!empty($_smarty_tpl->tpl_vars['rows']->value)) {?>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
?>
									<tr>
										<td><strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['r']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</strong><br><small class="type--subdued"><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['r']->value['summary'],90), ENT_QUOTES, 'UTF-8', true);?>
</small></td>
										<td><span class="badge" style="background:#e7e7ff;color:#5f61c4"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['r']->value['source_code'], ENT_QUOTES, 'UTF-8', true);?>
</span></td>
										<td><small><?php if ($_smarty_tpl->tpl_vars['r']->value['pub_date']) {
echo $_smarty_tpl->tpl_vars['clsISO']->value->convertTimeToText($_smarty_tpl->tpl_vars['r']->value['pub_date'],true);
}?></small></td>
										<td class="text-center"><?php echo $_smarty_tpl->tpl_vars['r']->value['img_count'];?>
</td>
										<td class="text-center">
											<?php if ($_smarty_tpl->tpl_vars['r']->value['status'] == 'new') {?><span class="badge" style="background:#fff2d6;color:#9a6a00">Mới</span>
											<?php } elseif ($_smarty_tpl->tpl_vars['r']->value['status'] == 'pushed') {?><span class="badge" style="background:#e8fadf;color:#3a7d22">Đã đẩy #<?php echo $_smarty_tpl->tpl_vars['r']->value['news_id'];?>
</span>
											<?php } elseif ($_smarty_tpl->tpl_vars['r']->value['status'] == 'rejected') {?><span class="badge" style="background:#eceef1;color:#777">Đã bỏ</span>
											<?php } elseif ($_smarty_tpl->tpl_vars['r']->value['status'] == 'blocked') {?><span class="badge" style="background:#ffe0db;color:#d83a2b">Bị chặn</span>
											<?php } else {
echo $_smarty_tpl->tpl_vars['r']->value['status'];
}?>
										</td>
										<td class="text-nowrap">
											<?php if ($_smarty_tpl->tpl_vars['r']->value['status'] == 'new') {?>
												<button class="ui-button ui-button--small ui-button--primary" onclick="crawlView(<?php echo $_smarty_tpl->tpl_vars['r']->value['crawl_id'];?>
)">Xem / Duyệt</button>
												<button class="ui-button ui-button--small" onclick="crawlReject(<?php echo $_smarty_tpl->tpl_vars['r']->value['crawl_id'];?>
, this)">Bỏ</button>
											<?php } elseif ($_smarty_tpl->tpl_vars['r']->value['status'] == 'pushed') {?>
												<a class="ui-button ui-button--small" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=news&act=edit&news_id=<?php echo $_smarty_tpl->tpl_vars['r']->value['news_id'];?>
">Mở tin nháp</a>
											<?php } else { ?>—<?php }?>
										</td>
									</tr>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								<?php } else { ?>
									<tr><td colspan="6" class="text-center type--subdued" style="padding:18px">Không có tin</td></tr>
								<?php }?>
							</tbody>
						</table>
						</div>

						<?php if ($_smarty_tpl->tpl_vars['total_page']->value > 1) {?>
						<div class="text-center" style="margin-top:12px">
							<?php
$__section_p_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['total_page']->value+1) ? count($_loop) : max(0, (int) $_loop));
$__section_p_0_start = min(1, $__section_p_0_loop);
$__section_p_0_total = min(($__section_p_0_loop - $__section_p_0_start), $__section_p_0_loop);
$_smarty_tpl->tpl_vars['__smarty_section_p'] = new Smarty_Variable(array());
if ($__section_p_0_total !== 0) {
for ($__section_p_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index'] = $__section_p_0_start; $__section_p_0_iteration <= $__section_p_0_total; $__section_p_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index']++){
?>
								<a class="ui-button ui-button--small<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_p']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index'] : null) == $_smarty_tpl->tpl_vars['page']->value) {?> ui-button--primary<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=news&act=crawl_list&page=<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_p']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index'] : null);
echo $_smarty_tpl->tpl_vars['qs']->value;?>
"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_p']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index'] : null);?>
</a>
							<?php
}
}
?>
						</div>
						<?php }?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="crawlModal" style="display:none;position:fixed;inset:0;background:rgba(0,0,0,.45);z-index:9999;overflow:auto;padding:24px">
	<div style="max-width:820px;margin:0 auto;background:#fff;border-radius:8px" id="crawlModalBody"></div>
</div>

<?php echo '<script'; ?>
>
function crawlEditorKill(){ // gỡ editor cũ (plugin admin isoTextArea KHÔNG tự dọn trước init → phải gỡ tay)
	if(typeof tinyMCE !== 'undefined'){ try { if(tinyMCE.get('cm_content')) tinyMCE.execCommand('mceRemoveControl', false, 'cm_content'); } catch(e){} }
}
function crawlView(id){
	var m=document.getElementById('crawlModal'), b=document.getElementById('crawlModalBody');
	crawlEditorKill();
	b.innerHTML='<div style="padding:24px">Đang tải…</div>'; m.style.display='block';
	$.post(path_ajax_script+'/index.php?mod=news&act=crawl_view',{crawl_id:id},function(r){
		b.innerHTML=r.html;
		// gắn editor lên textarea#cm_content vừa inject (đồng bộ ngay sau innerHTML); convert_urls tắt → giữ URL ảnh tuyệt đối cho crawImage
		if(typeof tinyMCE !== 'undefined' && $.fn.isoTextArea){ try { crawlEditorKill(); $('#cm_content').isoTextArea(); } catch(e){} }
	},'json');
}
function crawlClose(){ crawlEditorKill(); document.getElementById('crawlModal').style.display='none'; }
function crawlReject(id, el){
	if(!confirm('Bỏ tin này?')) return;
	$.post(path_ajax_script+'/index.php?mod=news&act=crawl_reject',{crawl_id:id},function(r){
		if(r&&r.msg=='_success'){ if(el){var tr=el.closest('tr'); if(tr) tr.style.opacity=.4;} }
	},'json');
}
function crawlApprove(id){
	if(!document.getElementById('cm_rewritten').checked){ alert('Phải tích "Đã viết lại" trước khi duyệt (tránh copy nguyên văn — vi phạm bản quyền).'); return; }
	var catEl = document.getElementById('cm_cat');
	if(catEl && (parseInt(catEl.value,10)||0) <= 0){ alert('Hãy chọn Danh mục trước khi đăng.'); catEl.focus(); return; }
	if(typeof tinyMCE !== 'undefined' && tinyMCE.triggerSave) tinyMCE.triggerSave(); // flush HTML iframe → textarea trước khi đọc .value
	var cover = document.querySelector('input[name="cm_cover"]:checked');
	$.post(path_ajax_script+'/index.php?mod=news&act=crawl_approve', {
		crawl_id:id, is_rewritten:1,
		title:document.getElementById('cm_title').value,
		summary:document.getElementById('cm_summary').value,
		content:document.getElementById('cm_content').value,
		domain_id:(document.getElementById('cm_domain')||{}).value||0,
		cat_id:(catEl||{}).value||0,
		cover: cover ? cover.value : ''
	}, function(r){
		if(r&&r.msg=='_success'){ alert('Đã đăng tin #'+r.news_id+' lên website.'+((r.cover==0)?' (Lưu ý: ảnh bìa chưa tải được — kiểm tra lại trong tin.)':'')); crawlClose(); location.reload(); }
		else if(r&&r.msg=='_need_rewrite'){ alert('Phải tích "Đã viết lại".'); }
		else if(r&&r.msg=='_need_cat'){ alert('Hãy chọn Danh mục trước khi đăng.'); }
		else { alert('Lỗi duyệt.'); }
	},'json');
}
document.getElementById('crawlModal').addEventListener('click',function(e){ if(e.target===this) crawlClose(); });
<?php echo '</script'; ?>
>

<?php }
}
