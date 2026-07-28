<?php
/* Smarty version 3.1.33, created on 2026-07-06 15:56:02
  from '/www/wwwroot/skyrealty.futureglobal.vn/application/blocks/ranking_dept/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a4b6da2018f53_54375337',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67de0f7581a5c034b5cc345c53d53af12343db55' => 
    array (
      0 => '/www/wwwroot/skyrealty.futureglobal.vn/application/blocks/ranking_dept/index.tpl',
      1 => 1783314237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a4b6da2018f53_54375337 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/www/wwwroot/skyrealty.futureglobal.vn/core/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
if ($_smarty_tpl->tpl_vars['type']->value == 'area' || $_smarty_tpl->tpl_vars['type']->value == '') {?>

	<div class="ranking-gbox ranking-regional rounded-2 mb-2">

		<div class="ranking-dept-header mb-3">

			<div class="d-flex align-items-center gap-3">

				<img class="w-px-50" src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/logo-f.png" />

				<div class="ranking-title ext text-yellow">

					<span class="text-uppercase">BXH Vùng KD <?php echo smarty_modifier_date_format(time(),"%Y");?>
</span>

					<br /><small class="font-normal text-white text-fs-12">(Cập nhật <?php echo smarty_modifier_date_format(time(),"%d/%m/%Y");?>
)</small>

				</div>

			</div>

		</div>

		<div class="ranking-dept-body">

			<div class="ranking__dept-menu mb-3">

				<ul class="d-flex justify-content-between ranking__dept-nav ranking__dept-panel">

					<li class="flex-fill"><a href="javascript:void(0);" onClick="$Core.dashboard.handle_ranking_dept(this, event)" 

					date_type="_month" gId="regional_<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" class="text-white text-center ranking__dept-link active">Tháng <?php echo $_smarty_tpl->tpl_vars['current_month']->value;?>
</a></li>

					<li class="flex-fill"><a href="javascript:void(0);" onClick="$Core.dashboard.handle_ranking_dept(this, event)" 

					date_type="_quarter" gId="regional_<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" class="text-white text-center ranking__dept-link">Quý 0<?php echo $_smarty_tpl->tpl_vars['current_quarter']->value;?>
</a></li>

					<li class="flex-fill"><a href="javascript:void(0);" onClick="$Core.dashboard.handle_ranking_dept(this, event)" 

					date_type="_year" gId="regional_<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" class="text-white text-center ranking__dept-link">Năm <?php echo $_smarty_tpl->tpl_vars['current_year']->value;?>
</a></li>

				</ul>

			</div>

			<div class="d-flex align-items-center justify-content-between mb-1">

				<div class="text-upper text-white text-fs-12">Phòng ban</div>

				<div class="d-flex gap-1 text-fs-12 pr-2 text-white align-items-center">

					<div class="text-upper text-center w-px-40">Số GD</div>

					<div class="text-upper text-center w-px-80">Doanh số</div>

				</div>

			</div>

			<div class="ajax" gId="regional_<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&sub=dashboard&act=load_department_billing&tp=regional" 

				data-options='{"disp":"table"}'>

				<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['list_preloaders']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = min(($__section_i_0_loop - 0), 10);
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>

				<div class="d-flex align-items-center justify-content-between py-1/5 px-2 bg-white-100 rounded-2 mb-1">

					<div class="d-flex gap-1 align-items-center">

						<div class="avatar avatar-xs rounded-pill animate-bg"></div>

						<div class="d-flex text-white flex-column gap-0">

							<h4 class="text-fs-13 mb-1">

								<div class="animate-bg w-px-100 rounded-pill h-px-15"></div>

							</h4>

							<span class="text-fs-10">

								<div class="animate-bg w-px-50 rounded-pill h-px-15"></div>

							</span>

						</div>

					</div>

					<div class="d-flex gap-2 text-white text-center align-items-center">

						<div class="d-flex justify-content-center text-center w-px-40">

							<div class="animate-bg w-px-30 rounded-pill h-px-15"></div>

						</div>

						<div class="d-flex justify-content-center text-center w-px-90">

							<div class="animate-bg w-px-50 rounded-pill h-px-15"></div>

						</div>

					</div>

				</div>

				<?php
}
}
?>

			</div>

		</div>

	</div>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['type']->value == 'department' || $_smarty_tpl->tpl_vars['type']->value == '') {?>

<div class="ranking-gbox ranking-dept rounded-2">

	<div class="ranking-dept-header mb-3">

		<div class="d-flex align-items-center gap-3">

			<img class="w-px-50" src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/logo-f.png" />

			<div class="ranking-title ext text-yellow">

				<span class="text-uppercase">BXH Phòng KD <?php echo smarty_modifier_date_format(time(),"%Y");?>
</span>

				<br /><small class="font-normal text-white text-fs-12">(Cập nhật <?php echo smarty_modifier_date_format(time(),"%d/%m/%Y");?>
)</small>

			</div>

		</div>

	</div>

	<div class="ranking-dept-body">

		<div class="ranking__dept-menu mb-3">

			<ul class="d-flex justify-content-between ranking__dept-nav ranking__dept-panel">

				<li class="flex-fill"><a href="javascript:void(0);" onClick="$Core.dashboard.handle_ranking_dept(this, event)" 

				date_type="_month" gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" class="text-white text-center ranking__dept-link active">Tháng <?php echo $_smarty_tpl->tpl_vars['current_month']->value;?>
</a></li>

				<li class="flex-fill"><a href="javascript:void(0);" onClick="$Core.dashboard.handle_ranking_dept(this, event)" 

				date_type="_quarter" gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" class="text-white text-center ranking__dept-link">Quý 0<?php echo $_smarty_tpl->tpl_vars['current_quarter']->value;?>
</a></li>

				<li class="flex-fill"><a href="javascript:void(0);" onClick="$Core.dashboard.handle_ranking_dept(this, event)" 

				date_type="_year" gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" class="text-white text-center ranking__dept-link">Năm <?php echo $_smarty_tpl->tpl_vars['current_year']->value;?>
</a></li>

			</ul>

		</div>

		<div class="d-flex align-items-center justify-content-between mb-1">

			<div class="text-upper text-white text-fs-12">Phòng ban</div>

			<div class="d-flex gap-1 text-fs-12 pr-2 text-white align-items-center">

				<div class="text-upper text-center w-px-40">Số GD</div>

				<div class="text-upper text-center w-px-80">Doanh số</div>

			</div>

		</div>

		<div class="ajax" gId="<?php echo $_smarty_tpl->tpl_vars['gId']->value;?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&sub=dashboard&act=load_department_billing&tp=department" 

			data-options='{"disp":"table"}'>

			<?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['list_preloaders']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = min(($__section_i_1_loop - 0), 10);
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>

			<div class="d-flex align-items-center justify-content-between py-1/5 px-2 bg-white-100 rounded-2 mb-1">

				<div class="d-flex gap-1 align-items-center">

					<div class="avatar avatar-xs rounded-pill animate-bg"></div>

					<div class="d-flex text-white flex-column gap-0">

						<h4 class="text-fs-13 mb-1">

							<div class="animate-bg w-px-100 rounded-pill h-px-15"></div>

						</h4>

						<span class="text-fs-10">

							<div class="animate-bg w-px-50 rounded-pill h-px-15"></div>

						</span>

					</div>

				</div>

				<div class="d-flex gap-2 text-white text-center align-items-center">

					<div class="d-flex justify-content-center text-center w-px-40">

						<div class="animate-bg w-px-30 rounded-pill h-px-15"></div>

					</div>

					<div class="d-flex justify-content-center text-center w-px-90">

						<div class="animate-bg w-px-50 rounded-pill h-px-15"></div>

					</div>

				</div>

			</div>

			<?php
}
}
?>

		</div>

	</div>

</div>

<?php }?>

<style>

	.ranking-gbox{

		width: 100%;

		position: relative;

		padding: 30px 30px 20px 30px;

	}

	.ranking-regional{

		background:linear-gradient(-45deg, #20040a, #520202, #af0324);

		background-size: 400% 400%;

		-webkit-animation: gradient 15s ease infinite;

		animation: gradient 15s ease infinite;

	}

	.ranking-dept {

		background: linear-gradient(-45deg, #20040a, #9d0909, #7a162a);

		background-size: 400% 400%;

		-webkit-animation: gradient 15s ease infinite;

		animation: gradient 15s ease infinite;

	}

	.ranking-title.ext {

		font-size: 20px;

		line-height: 22px;

	}

	@media screen and (max-width:1400px){

		.ranking-gbox{

			padding: 20px 1.05rem 20px 1.05rem !important;

		}

		.ranking-title.ext{

			font-size:16px;

		}

	}

	@media screen and (max-width:575px){

		.ranking-gbox{ 

			padding:20px 1.05rem !important;

		}

		.ranking-title.ext{

			font-size:16px;

		}

	}

</style><?php }
}
