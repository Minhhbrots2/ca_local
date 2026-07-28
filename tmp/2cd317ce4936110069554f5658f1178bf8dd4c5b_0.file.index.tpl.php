<?php
/* Smarty version 3.1.33, created on 2026-07-10 17:57:10
  from '/www/wwwroot/skyrealty.c-a.vn/application/blocks/top_ranker_dep/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a50d0067179d8_70432220',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2cd317ce4936110069554f5658f1178bf8dd4c5b' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/blocks/top_ranker_dep/index.tpl',
      1 => 1783662784,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a50d0067179d8_70432220 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/www/wwwroot/skyrealty.c-a.vn/core/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="top-ranker mt-2 rounded-2 bg-lighter">
	<div class="top-ranker-header mb-3 d-flex justify-content-between align-items-center">
		<div class="d-flex align-items-center gap-2">
			<img class="w-px-40" src="<?php echo $_smarty_tpl->tpl_vars['header_configs']->value['LogoWhite'];?>
" />
			<div class="ranking-title ext text-white <?php if ($_smarty_tpl->tpl_vars['deviceType']->value != 'phone') {?>fs-18<?php } else { ?>fs-16<?php }?>">
				TOP 10 THI ĐUA CÁ NHÂN Phòng <?php echo $_smarty_tpl->tpl_vars['department_name']->value;?>
 <?php echo smarty_modifier_date_format(time(),"%Y");?>
 <br /> 
				<small>( <?php echo $_smarty_tpl->tpl_vars['start_date']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['end_date']->value;?>
 )</small>
			</div>
		</div>
		<input class="js__handle-department" type="hidden"  name="department_id" gid="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['oneProfile']->value['department_id'];?>
">
	</div>
	<div class="top-ranker-body position-relative zindex-2">
		<table class="table table-ranker" cellpadding="0" cellspacing="0">
			<thead><tr>
				<th class="align-center w-px-50 lg:d-none h-px-40 text-center">STT</th>
				<th class="align-center h-px-40">Họ và tên</th>
				<th class="align-center h-px-40 text-center">Điểm số</th>
				<?php if ($_smarty_tpl->tpl_vars['deviceType']->value != 'phone') {?>
				<th class="align-center h-px-40 text-center">Du lịch</th><?php }?>
			</tr></thead>
			<tbody class="ajax js__block-report-today" data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=campaign&act=top_10_ranker">
				<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['list_preloaders']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = min(($__section_i_0_loop - 0), 10);
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
				<tr class="nohover">
					<td class="lg:d-none">
						<div class="animate-bg w-100 h-px-15 rounded-2"></div>
					</td>
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
</div>

	<style>
		.slt_form_ranker_dep {
			background: #FFF0;
			color: #FFF;
		}
		.slt_form_ranker_dep option {
			color: #333;
		}
		.slt_form_ranker_dep:focus {
			background: #FFF0 !important;
			color: #FFF !important;
			border-color: #FFF !important;
		}
	</style>
<?php }
}
