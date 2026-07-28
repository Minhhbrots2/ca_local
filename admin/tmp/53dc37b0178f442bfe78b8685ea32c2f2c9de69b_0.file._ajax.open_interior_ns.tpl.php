<?php
/* Smarty version 3.1.33, created on 2026-07-27 13:53:04
  from '/www/wwwroot/skyrealty.c-a.vn/admin/application/views/project/_ajax.open_interior_ns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a67005033f093_53053384',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53dc37b0178f442bfe78b8685ea32c2f2c9de69b' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/admin/application/views/project/_ajax.open_interior_ns.tpl',
      1 => 1783289340,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a67005033f093_53053384 (Smarty_Internal_Template $_smarty_tpl) {
?>
<style>
.it-toolbar{display:flex;gap:8px;align-items:center;margin-bottom:14px;flex-wrap:wrap}
.it-note{background:#fff7e6;border:1px solid #ffe0a3;color:#8a6d3b;padding:8px 12px;border-radius:6px;margin-bottom:12px;font-size:13px}
.interior-type-card{border:1px solid #e6e6e6;border-radius:8px;margin-bottom:14px;background:#fff}
.interior-type-card .it-head{display:flex;justify-content:space-between;align-items:center;gap:10px;padding:8px 12px;background:#f7f7f8;border-bottom:1px solid #eee;border-radius:8px 8px 0 0}
.interior-type-card .it-head-fields{display:flex;gap:8px;flex:1;flex-wrap:wrap}
.interior-type-card .it-bedroom{max-width:160px}
.interior-type-card .it-type{max-width:280px}
.interior-type-card .it-body{padding:12px}
.interior-type-card .it-cat{margin-bottom:6px}
.interior-type-card .it-cat .pm-label{font-weight:600;display:block;margin-bottom:6px}
.it-empty{padding:24px;text-align:center;border:1px dashed #ddd;border-radius:8px}
</style>

<div class="modal-dialog modal-lg">
	<div class="modal-content">
		<div class="modal-header">
			<a href="javascript:void();" class="closeEv close_pop close"><span>×</span></a>
			<h3 class="modal-title"><strong>Ảnh căn hộ theo loại — <?php echo $_smarty_tpl->tpl_vars['level_label']->value;
if ($_smarty_tpl->tpl_vars['parent_title']->value) {?>: <?php echo $_smarty_tpl->tpl_vars['parent_title']->value;
}?></strong></h3>
		</div>
		<form method="post" action="" enctype="multipart/form-data">
			<div class="modal-body">
				<?php if ($_smarty_tpl->tpl_vars['inherit_note']->value) {?><div class="it-note"><?php echo $_smarty_tpl->tpl_vars['inherit_note']->value;?>
</div><?php }?>
				<div class="it-toolbar">
					<button type="button" class="btn btn-default" onClick="add_interior_type(this, event)">+ Thêm Type</button>
					<small class="text-muted">Mỗi Type = 1 loại căn + nhãn Type. Dán link Google Drive folder để đọc ảnh tự động, hoặc Upload / dán link lẻ.</small>
				</div>
				<div class="it-holder" id="it_holder">
					<?php if (!empty($_smarty_tpl->tpl_vars['sections']->value)) {?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sections']->value, 'sec');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sec']->value) {
?>
						<?php echo $_smarty_tpl->tpl_vars['core']->value->build('_ajax.interior_type.tpl',array('s'=>$_smarty_tpl->tpl_vars['sec']->value,'arrBedrooms'=>$_smarty_tpl->tpl_vars['arrBedrooms']->value,'core'=>$_smarty_tpl->tpl_vars['core']->value));?>

						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php } else { ?>
						<div class="it-empty text-muted">Chưa có Type nào. Bấm "+ Thêm Type" để thêm.</div>
					<?php }?>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-success pull-right" onClick="save_interior_ns(this, event)" project_id="<?php echo $_smarty_tpl->tpl_vars['project_id']->value;?>
" building_id="<?php echo $_smarty_tpl->tpl_vars['building_id']->value;?>
" block_id="<?php echo $_smarty_tpl->tpl_vars['block_id']->value;?>
">Lưu lại</button>
				<button type="button" class="btn btn-default mr-2 pull-right" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Close');?>
</button>
			</div>
		</form>
	</div>
</div>
<?php }
}
