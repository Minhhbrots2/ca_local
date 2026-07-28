<?php
/* Smarty version 3.1.33, created on 2026-07-11 18:43:08
  from '/www/wwwroot/skyrealty.c-a.vn/application/blocks/top_ranker/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a522c4c24c757_61843297',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c971e194809bafc646bcb7be7c0f463b49961344' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/blocks/top_ranker/index.tpl',
      1 => 1783770183,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a522c4c24c757_61843297 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="top-ranker mt-2 rounded-2">
	<div class="top-ranker-header d-flex justify-content-between align-items-start gap-1 mb-3">
		<div class="d-flex align-items-center gap-2 gap-lg-3">
			<img class="w-px-40" src="<?php echo $_smarty_tpl->tpl_vars['header_configs']->value['LogoWhite'];?>
" />
			<div class="ranking-title ext text-white <?php if ($_smarty_tpl->tpl_vars['deviceType']->value != 'phone') {?>fs-18<?php } else { ?>fs-16<?php }?>">
				TOP 10 THI ĐUA CÁ NHÂN <?php echo $_smarty_tpl->tpl_vars['current_year']->value;?>
 <br /> 
				<small>( <?php echo $_smarty_tpl->tpl_vars['start_date']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['end_date']->value;?>
 )</small> 
			</div>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkPermissionGroup('DIRECTOR')) {?>
		<div class="dropdown">
			<button type="button" class="btn p-0 btn-icon btn-sm text-white rounded-pill" data-bs-toggle="dropdown" aria-haspopup="true" 
				aria-expanded="false" style="background:#fafafa3d"><i class="bx bx-dots-vertical-rounded"></i></button>
			<div class="lst_option dropdown-menu dropdown-menu-end overflow-y-auto" style="max-height:300px">
				<a class="dropdown-item cursor-pointer active" uid="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" department_id="0" holderG="_department" 
					onclick="set_options(this, event)">Tất cả</a>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lstDepartment']->value, '_oDepartment');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oDepartment']->value) {
?>
				<a class="dropdown-item cursor-pointer item_option" uid="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" department_id="<?php echo $_smarty_tpl->tpl_vars['_oDepartment']->value['property_id'];?>
" 
					holderG="_department" onclick="set_options(this, event)">Phòng <?php echo $_smarty_tpl->tpl_vars['_oDepartment']->value['title'];?>
</a>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
		</div>
		<?php } elseif ($_smarty_tpl->tpl_vars['clsISO']->value->checkSale() || $_smarty_tpl->tpl_vars['clsISO']->value->checkPermissionGroup('SALE_DIRECTOR')) {?>
		<div class="dropdown">
			<button class="btn p-0 text-white btn-icon btn-sm rounded-pill" type="button" data-bs-toggle="dropdown" aria-haspopup="true" 
				aria-expanded="false" style="background: #fafafa3d"><i class="bx bx-dots-vertical-rounded"></i></button>
			<div class="lst_option dropdown-menu dropdown-menu-end overflow-y-auto" style="max-height: 300px">
				<a class="dropdown-item cursor-pointer active" uid="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" department_id="0" holderG="_department" 
					onclick="set_options(this, event)">Tất cả</a>
				<a class="dropdown-item cursor-pointer" uid="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" department_id="<?php echo $_smarty_tpl->tpl_vars['oneProfile']->value['department_id'];?>
" holderG="_department" 
					onclick="set_options(this, event)" >Phòng</a>
			</div>
		</div>
		<?php }?>
	</div>
	<div class="top-ranker-body position-relative zindex-2">
		<table class="table table-ranker" cellpadding="0" cellspacing="0">
			<thead><tr>
				<th class="align-center w-px-50 h-px-40 text-center">STT</th>
				<th class="align-center h-px-40">Họ và tên</th>
				<th class="align-center h-px-40 text-center">Điểm</th>
				<?php if ($_smarty_tpl->tpl_vars['deviceType']->value != 'phone') {?>
				<th class="align-center h-px-40 text-center lg:d-none">Xếp hạng</th><?php }?>
			</tr></thead>
			<tbody class="ajax" data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=campaign&act=top_10_ranker" 
				data-options="{}" id="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" data-bind="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
">
				<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['list_preloaders']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = min(($__section_i_0_loop - 0), 10);
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
				<tr class="nohover">
					<td class="lg:d-none"><div class="animate-bg w-100 h-px-15 rounded-2"></div></td>
					<td><div class="animate-bg w-100 h-px-15 rounded-2"></div></td>
					<td><div class="animate-bg w-100 h-px-15 rounded-2"></div></td>
					<?php if ($_smarty_tpl->tpl_vars['deviceType']->value != 'phone') {?>
					<td><div class="animate-bg w-100 h-px-15 rounded-2"></div></td>
					<?php }?>
				<tr>
				<?php
}
}
?>
			</tbody>
		</table>
	</div>
</div><?php }
}
