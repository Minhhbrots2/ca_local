<?php
/* Smarty version 3.1.33, created on 2026-07-13 18:29:30
  from '/www/wwwroot/skyrealty.c-a.vn/application/blocks/stock_hug_search/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a54cc1a746c50_83713325',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a765ca93a40f8f193f0e1fe95109d8127445368f' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/blocks/stock_hug_search/index.tpl',
      1 => 1783308764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a54cc1a746c50_83713325 (Smarty_Internal_Template $_smarty_tpl) {
?><form id="frmIssue" method="POST" onSubmit="return false;">

	<div class="form-group mb-2">

		<div class="form-label mb-1">Tìm theo từ khóa</div>

		<div class="input-group input-group-merge mr-2">

			<span class="input-group-text"><i class="bx bx-search"></i></span>

			<input class="form-control search_keyword_field search_field" name="keysearch" 

				data-field="keysearch" onClick="this.select();" placeholder="Nhập từ khóa & enter để tìm kiếm...">

		</div>

	</div>

	<div class="form-group mb-2">	

		<div class="form-label mb-1">Tình trạng</div>

		<select class="form-control search_field iso-select2" 

			onchange="$Core.stock_hug.do_search(this, event)" multiple="true" data-width="100%"

				data-allow-clear="true" data-field="status_id[]" name="status_id">

			<?php echo $_smarty_tpl->tpl_vars['clsProperty']->value->getSelectByProperty('_STATUS_STOCK_HUG',@constant('_STOCK_HUG_STATUS_DEF_ID'));?>


		</select>	

	</div>

	<?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?>

	<div class="form-group mb-2">

		<label class="form-label mb-1">Dự án</label>

		<select placeholder="Chọn dự án" class="iso-selectize search_field w-100" uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" 

			name="project_id" data-field="project_id" call_from="search">

			<option value="0">Dự án</option>

			<?php if (!empty($_smarty_tpl->tpl_vars['arr_projects']->value)) {?>

				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr_projects']->value, '_oProject');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oProject']->value) {
?>

				<option<?php if ($_smarty_tpl->tpl_vars['get_project_id']->value == $_smarty_tpl->tpl_vars['_oProject']->value['setting_id']) {?> selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['_oProject']->value['setting_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_oProject']->value['title'];?>
</option>

				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

			<?php }?>

		</select>

	</div>

	<?php }?>

	<hr class="my-2" />

	<div class="form-row mb-2">

		<div class="col-6 col-md-6">

			<?php $_smarty_tpl->_assignInScope('uid', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>

			<div class="form-floating">

				<input type="date" class="form-control search_field" id="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" data-field="start_date" placeholder="dd/mm/yy" aria-describedby="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" />

				<label for="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">Từ ngày</label>

			</div>

		</div>

		<div class="col-6 col-md-6">

			<?php $_smarty_tpl->_assignInScope('uid', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>

			<div class="form-floating">

				<input type="date" class="form-control search_field" data-field="to_date" id="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" placeholder="dd/mm/yy" aria-describedby="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" onchange="$Core.stock_hug.do_search(this, event)">

				<label for="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">Tới ngày</label>

			</div>

		</div>

	</div>

	<hr class="my-2" />

	<div class="form-group">

		<button gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" type="button" onClick="$Core.stock_hug.toggle_search(this, event)" class="btn btn-outline-primary">Tìm kiếm</button>

		<button type="reset" onClick="$Core.stock_hug.do_search(this, event)" holderG="_reset" class="btn btn-warning"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->makeIcon('bx-refresh','Xóa');?>
</button>

	</div>

</form><?php }
}
