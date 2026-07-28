<?php
/* Smarty version 3.1.33, created on 2026-06-24 21:29:51
  from '/www/wwwroot/ca.futurehomes.vn/admin/application/views/news/crawl_source.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a3be9df36dde0_45576152',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '050e9d15152eb8ec271578ddabd671494c078dab' => 
    array (
      0 => '/www/wwwroot/ca.futurehomes.vn/admin/application/views/news/crawl_source.tpl',
      1 => 1782309975,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a3be9df36dde0_45576152 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/www/wwwroot/ca.futurehomes.vn/core/smarty/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
<div class="ui-title-bar-container ui-title-bar-container--full-width">
	<div class="ui-title-bar">
		<div class="ui-title-bar__main-group">
			<div class="ui-title-bar__heading-group">
				<h1 class="ui-title-bar__title w-100">Nguồn báo crawl</h1>
				<p class="type--subdued">Thêm/sửa nguồn — tương lai có báo mới chỉ cần dán RSS vào đây. Selector để trống = engine tự bóc.</p>
			</div>
		</div>
		<div class="action-bar">
			<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=news&act=crawl_list" class="ui-button ui-title-bar__action">Tin đã crawl &rarr;</a>
		</div>
	</div>
</div>
<div class="ui-layout ui-layout--full-width">
	<div class="ui-layout__sections">
		<div class="ui-layout__section">
			<div class="ui-layout__item">

				<div class="ui-card">
					<div class="ui-card__section">
						<div class="table-responsive">
						<table class="table table-striped" width="100%">
							<thead><tr>
								<th>Tên</th><th>RSS feed</th><th class="text-center">Giới hạn</th><th>Sức khỏe</th><th class="text-center">Bật</th><th></th>
							</tr></thead>
							<tbody>
								<?php if (!empty($_smarty_tpl->tpl_vars['sources']->value)) {?>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sources']->value, 's');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
?>
									<tr>
										<td><strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</strong><br><span class="type--subdued"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value['code'], ENT_QUOTES, 'UTF-8', true);?>
</span></td>
										<td style="word-break:break-all"><small><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value['rss_url'], ENT_QUOTES, 'UTF-8', true);?>
</small></td>
										<td class="text-center"><?php echo $_smarty_tpl->tpl_vars['s']->value['crawl_limit'];?>
</td>
										<td>
											<?php if ($_smarty_tpl->tpl_vars['s']->value['last_status'] == 'error') {?><span class="badge" style="background:#ffe0db;color:#d83a2b">Lỗi</span> <small><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['s']->value['last_error'],40), ENT_QUOTES, 'UTF-8', true);?>
</small>
											<?php } elseif ($_smarty_tpl->tpl_vars['s']->value['last_status'] == 'ok') {?><span class="badge" style="background:#e8fadf;color:#3a7d22">OK</span> <small><?php if ($_smarty_tpl->tpl_vars['s']->value['last_run']) {
echo $_smarty_tpl->tpl_vars['clsISO']->value->convertTimeToText($_smarty_tpl->tpl_vars['s']->value['last_run'],true);
}?></small>
											<?php } else { ?><span class="type--subdued">chưa chạy</span><?php }?>
										</td>
										<td class="text-center"><?php if ($_smarty_tpl->tpl_vars['s']->value['is_active']) {?><span style="color:#3a7d22">●</span><?php } else { ?><span class="type--subdued">○</span><?php }?></td>
										<td class="text-nowrap">
											<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=news&act=crawl_source&source_id=<?php echo $_smarty_tpl->tpl_vars['s']->value['source_id'];?>
" class="ui-button ui-button--small">Sửa</a>
											<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=news&act=crawl_source_delete&source_id=<?php echo $_smarty_tpl->tpl_vars['s']->value['source_id'];?>
" class="ui-button ui-button--small" onclick="return confirm('Xoá nguồn này?')">Xoá</a>
										</td>
									</tr>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								<?php } else { ?>
									<tr><td colspan="6" class="text-center type--subdued" style="padding:18px">Chưa có nguồn nào</td></tr>
								<?php }?>
							</tbody>
						</table>
						</div>
					</div>
				</div>

				<div class="ui-card">
					<div class="ui-card__header"><h2 class="ui-heading"><?php if ($_smarty_tpl->tpl_vars['edit']->value) {?>Sửa nguồn<?php } else { ?>Thêm nguồn mới<?php }?></h2></div>
					<div class="ui-card__section">
						<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=news&act=crawl_source_save" id="crawlSrcForm">
							<input type="hidden" name="source_id" value="<?php if ($_smarty_tpl->tpl_vars['edit']->value) {
echo $_smarty_tpl->tpl_vars['edit']->value['source_id'];
}?>">
							<div class="row">
								<div class="col-md-6 mb-2"><label>Tên nguồn</label><input class="form-control" name="name" value="<?php if ($_smarty_tpl->tpl_vars['edit']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['edit']->value['name'], ENT_QUOTES, 'UTF-8', true);
}?>" required></div>
								<div class="col-md-3 mb-2"><label>Mã (code)</label><input class="form-control" name="code" value="<?php if ($_smarty_tpl->tpl_vars['edit']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['edit']->value['code'], ENT_QUOTES, 'UTF-8', true);
}?>" required></div>
								<div class="col-md-3 mb-2"><label>Giới hạn bài/lần</label><input class="form-control" name="crawl_limit" type="number" value="<?php if ($_smarty_tpl->tpl_vars['edit']->value) {
echo $_smarty_tpl->tpl_vars['edit']->value['crawl_limit'];
} else { ?>20<?php }?>"></div>
							</div>
							<div class="row">
								<div class="col-md-3 mb-2"><label>Kiểu nguồn</label>
									<select class="form-control" name="is_rss" id="f_isrss" onchange="crawlToggleType()">
										<option value="1"<?php if (!$_smarty_tpl->tpl_vars['edit']->value || $_smarty_tpl->tpl_vars['edit']->value['is_rss']) {?> selected<?php }?>>RSS feed</option>
										<option value="0"<?php if ($_smarty_tpl->tpl_vars['edit']->value && !$_smarty_tpl->tpl_vars['edit']->value['is_rss']) {?> selected<?php }?>>Trang danh sách (HTML)</option>
									</select>
								</div>
								<div class="col-md-9 mb-2" id="f_rss_wrap"><label>RSS feed URL</label><input class="form-control" id="f_rss" name="rss_url" value="<?php if ($_smarty_tpl->tpl_vars['edit']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['edit']->value['rss_url'], ENT_QUOTES, 'UTF-8', true);
}?>" placeholder="https://...rss"></div>
								<div class="col-md-9 mb-2" id="f_list_wrap"><label>URL trang danh sách <small class="type--subdued">(báo không có RSS — vd https://batdongsan.com.vn/tin-tuc)</small></label><input class="form-control" id="f_list" name="list_url" value="<?php if ($_smarty_tpl->tpl_vars['edit']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['edit']->value['list_url'], ENT_QUOTES, 'UTF-8', true);
}?>" placeholder="https://.../tin-tuc"></div>
							</div>
							<div class="row">
								<div class="col-md-4 mb-2"><label>Chuyên mục (cat_id)</label><input class="form-control" name="cat_id" type="number" value="<?php if ($_smarty_tpl->tpl_vars['edit']->value) {
echo $_smarty_tpl->tpl_vars['edit']->value['cat_id'];
} else { ?>0<?php }?>"></div>
								<div class="col-md-4 mb-2"><label>Giữ tin (ngày)</label><input class="form-control" name="retention_days" type="number" value="<?php if ($_smarty_tpl->tpl_vars['edit']->value) {
echo $_smarty_tpl->tpl_vars['edit']->value['retention_days'];
} else { ?>30<?php }?>"></div>
							</div>
							<details class="mb-2" style="border:1px dashed #ccc;border-radius:6px;padding:10px">
								<summary style="cursor:pointer;font-weight:600">Selector nâng cao (để trống = tự bóc JSON-LD/OG/readability)</summary>
								<div class="row" style="margin-top:10px">
									<div class="col-md-6 mb-2"><label>Nội dung (CSS)</label><input class="form-control" id="f_sel" name="content_selector" value="<?php if ($_smarty_tpl->tpl_vars['edit']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['edit']->value['content_selector'], ENT_QUOTES, 'UTF-8', true);
}?>" placeholder=".fck_detail"></div>
									<div class="col-md-6 mb-2"><label>Loại bỏ rác (CSS, phẩy)</label><input class="form-control" name="remove_selectors" value="<?php if ($_smarty_tpl->tpl_vars['edit']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['edit']->value['remove_selectors'], ENT_QUOTES, 'UTF-8', true);
}?>" placeholder=".box-tinlienquan"></div>
								</div>
							</details>
							<div class="mb-2">
								<label><input type="checkbox" name="is_active" value="1" <?php if (!$_smarty_tpl->tpl_vars['edit']->value || $_smarty_tpl->tpl_vars['edit']->value['is_active']) {?>checked<?php }?>> Đang bật</label>
							</div>
							<button type="button" class="ui-button" onclick="crawlTest()">⚡ Test ngay</button>
							<button type="submit" class="ui-button ui-button--primary">Lưu nguồn</button>
						</form>
						<div id="crawlTestResult" style="margin-top:16px"></div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>

<?php echo '<script'; ?>
>
// Escape text trước khi nhét vào innerHTML (title/summary là plain-text từ trang nguồn → chống XSS admin)
function nxEsc(s){ return String(s==null?'':s).replace(/[&<>"']/g, function(c){ return {'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#39;'}[c]; }); }
function crawlToggleType(){
	var t = document.getElementById('f_isrss').value;
	var rw = document.getElementById('f_rss_wrap'), lw = document.getElementById('f_list_wrap');
	if(rw) rw.style.display = (t=='0') ? 'none' : '';
	if(lw) lw.style.display = (t=='0') ? '' : 'none';
}
function crawlTest(){
	var t = document.getElementById('f_isrss').value;
	var rss = document.getElementById('f_rss').value;
	var list = document.getElementById('f_list').value;
	var sel = document.getElementById('f_sel') ? document.getElementById('f_sel').value : '';
	var box = document.getElementById('crawlTestResult');
	if((t=='0' && !list) || (t!='0' && !rss)){ box.innerHTML = '<div class="ui-card"><div class="ui-card__section" style="color:#d83a2b">Nhập URL trước</div></div>'; return; }
	box.innerHTML = '<div class="ui-card"><div class="ui-card__section">Đang test…</div></div>';
	$.post(path_ajax_script+'/index.php?mod=news&act=crawl_test', {is_rss:t, rss_url:rss, list_url:list, content_selector:sel}, function(r){
		if(!r || r.ok!=1){ box.innerHTML = '<div class="ui-card"><div class="ui-card__section" style="color:#d83a2b">✗ '+nxEsc((r&&r.error)||'lỗi')+'</div></div>'; return; }
		var tl = r.tier_log||{};
		var tiers = 'JSON-LD:'+(tl.jsonld?'✓':'–')+' · OG:'+(tl.og?'✓':'–')+' · tier:'+nxEsc(tl.tier||'?')+' · '+(parseInt(tl.words,10)||0)+' từ';
		// r.content đã được _sanitize_html ở server (script/onerror/iframe đã loại) → render HTML; title/summary/url plain-text → escape
		var imgs = (r.images||[]).slice(0,1).map(function(u){return '<img src="'+nxEsc(u)+'" style="max-width:200px;border-radius:6px">';}).join('');
		box.innerHTML = '<div class="ui-card"><div class="ui-card__section">'
			+ '<div style="color:#3a7d22;font-weight:600">✓ Bóc OK — '+tiers+'</div>'
			+ '<p style="font-weight:600;margin:8px 0">'+nxEsc(r.title||'')+'</p>'
			+ '<p class="type--subdued">'+nxEsc(r.summary||'')+'</p>'+imgs
			+ '<div style="max-height:200px;overflow:auto;border:1px solid #eee;border-radius:6px;padding:10px;margin-top:8px;font-size:13px">'+(r.content||'')+'</div>'
			+ '<small class="type--subdued">'+(r.images||[]).length+' ảnh · '+nxEsc(r.source_url||'')+'</small>'
			+ '</div></div>';
	}, 'json').fail(function(){ box.innerHTML = '<div class="ui-card"><div class="ui-card__section" style="color:#d83a2b">Lỗi kết nối</div></div>'; });
}
crawlToggleType();
<?php echo '</script'; ?>
>

<?php }
}
