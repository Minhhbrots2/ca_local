<?php
/* Smarty version 3.1.33, created on 2026-07-08 15:29:47
  from '/www/wwwroot/skyrealty.c-a.vn/application/views/org_chart/default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a4e0a7b675c06_59004004',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '904d77be2fdfd708b2e07ed21721107a6cabaa3a' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/views/org_chart/default.tpl',
      1 => 1783314320,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a4e0a7b675c06_59004004 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-xxl flex-grow-1 pt-2 container-p-y">

	<div class="form-row">

		<div class="col-12 col-xxxl-12">

			<div class="card">

				<div class="card-header py-0 pt-5">

					<div class="d-flex  align-items-center justify-content-center">

						<h5 class="chat-title mb-0 <?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?>fs-6<?php } else { ?>fs-2<?php }?> text-main fw-bold text-upper text-center">Cơ cấu tổ chức Future Homes</h5>

					</div>

				</div>

				<div class="card-body">

					<div id="tree-level-container">

						<?php if (!empty($_smarty_tpl->tpl_vars['arr_node_level']->value)) {?>

							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr_node_level']->value, 'lstNode', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['lstNode']->value) {
?>

								<div class="tree-level" data-level="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">

									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lstNode']->value, '_oNode');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oNode']->value) {
?>

										<?php $_smarty_tpl->_assignInScope('oneRole', $_smarty_tpl->tpl_vars['_oNode']->value['oneRole']);?>

										<?php $_smarty_tpl->_assignInScope('oneStaff', $_smarty_tpl->tpl_vars['_oNode']->value['oneStaff']);?>

										<?php if (!empty($_smarty_tpl->tpl_vars['_oNode']->value['staff_id'])) {?>

											<div id="<?php echo $_smarty_tpl->tpl_vars['_oNode']->value['id'];?>
" class="node" data-id="<?php echo $_smarty_tpl->tpl_vars['_oNode']->value['id'];?>
" data-level="<?php echo $_smarty_tpl->tpl_vars['_oNode']->value['level'];?>
" data-parent-id="<?php echo $_smarty_tpl->tpl_vars['_oNode']->value['parentId'];?>
" data-common-parent-ids="<?php echo $_smarty_tpl->tpl_vars['_oNode']->value['commonParentIds'];?>
" data-role_id="<?php echo $_smarty_tpl->tpl_vars['_oNode']->value['role_id'];?>
" data-staff_id="<?php echo $_smarty_tpl->tpl_vars['_oNode']->value['staff_id'];?>
" data-text_name="<?php echo $_smarty_tpl->tpl_vars['_oNode']->value['text_name'];?>
" style="left: <?php echo $_smarty_tpl->tpl_vars['_oNode']->value['position']['left'];?>
%; top: <?php echo $_smarty_tpl->tpl_vars['_oNode']->value['position']['top'];?>
%;" data-url="/index.php?mod=home&act=load_profile_popover&user_id=<?php echo $_smarty_tpl->tpl_vars['_oNode']->value['staff_id'];?>
&type=org_chart" data-toggle="webui-popover" data-trigger="hover" data-width="350">

												<div class="img_node"><img class="avatar m-0 rounded-pill" src="<?php echo $_smarty_tpl->tpl_vars['clsProfile']->value->getAvatar($_smarty_tpl->tpl_vars['staff_id']->value,$_smarty_tpl->tpl_vars['oneStaff']->value);?>
" onerror="this.src='<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/no-avatar.jpg'"></div>

												<div class="box_content">

													<h3 class="txt_name fw-bold"><?php echo $_smarty_tpl->tpl_vars['clsProfile']->value->getFullname($_smarty_tpl->tpl_vars['staff_id']->value,$_smarty_tpl->tpl_vars['oneStaff']->value);?>
</h3>

													<span class="txt_role"><?php ob_start();
echo $_smarty_tpl->tpl_vars['_oNode']->value["text_name"];
$_prefixVariable1 = ob_get_clean();
if (!empty($_prefixVariable1)) {
echo $_smarty_tpl->tpl_vars['_oNode']->value["text_name"];
} else {
echo $_smarty_tpl->tpl_vars['oneRole']->value["title"];
}?></span>

												</div>

											</div>

										<?php } else { ?>

											<div id="<?php echo $_smarty_tpl->tpl_vars['_oNode']->value['id'];?>
" class="node" data-id="<?php echo $_smarty_tpl->tpl_vars['_oNode']->value['id'];?>
" data-level="<?php echo $_smarty_tpl->tpl_vars['_oNode']->value['level'];?>
" data-parent-id="<?php echo $_smarty_tpl->tpl_vars['_oNode']->value['parentId'];?>
" data-common-parent-ids="<?php echo $_smarty_tpl->tpl_vars['_oNode']->value['commonParentIds'];?>
" data-role_id="<?php echo $_smarty_tpl->tpl_vars['_oNode']->value['role_id'];?>
" data-staff_id="<?php echo $_smarty_tpl->tpl_vars['_oNode']->value['staff_id'];?>
" data-text_name="<?php echo $_smarty_tpl->tpl_vars['_oNode']->value['text_name'];?>
" style="left: <?php echo $_smarty_tpl->tpl_vars['_oNode']->value['position']['left'];?>
%; top: <?php echo $_smarty_tpl->tpl_vars['_oNode']->value['position']['top'];?>
%;">

												<div class="img_node d-none"><img class="avatar m-0 rounded-pill" src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/no-avatar.jpg" onerror="this.src='<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/no-avatar.jpg'"></div>

												<div class="box_content no_staff d-flex justify-content-center align-items-center mt-0" style="height: 82px;padding: 5px">

													<span class="txt_role"><?php ob_start();
echo $_smarty_tpl->tpl_vars['_oNode']->value["text_name"];
$_prefixVariable2 = ob_get_clean();
if (!empty($_prefixVariable2)) {
echo $_smarty_tpl->tpl_vars['_oNode']->value["text_name"];
} else {
echo $_smarty_tpl->tpl_vars['oneRole']->value["title"];
}?></span>

												</div>

											</div>

										<?php }?>

									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

								</div>

							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

						<?php }?>

						<svg id="tree-connectors"></svg>			

						<?php if (!empty($_smarty_tpl->tpl_vars['lst_point']->value)) {?>

							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lst_point']->value, '_oPoint');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oPoint']->value) {
?>

								<?php $_smarty_tpl->_assignInScope('position', $_smarty_tpl->tpl_vars['_oPoint']->value['position']);?>

								<div class="control-handle dragged" data-index="<?php echo $_smarty_tpl->tpl_vars['_oNode']->value['id'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['_oPoint']->value['id'];?>
" left="<?php echo $_smarty_tpl->tpl_vars['position']->value['left'];?>
" top="<?php echo $_smarty_tpl->tpl_vars['position']->value['top'];?>
" style="left:<?php echo $_smarty_tpl->tpl_vars['position']->value['left'];?>
%;top:<?php echo $_smarty_tpl->tpl_vars['position']->value['top'];?>
%"></div>

							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

						<?php }?>

					</div>

				</div>

			</div>

		</div>

	</div>

</div><?php }
}
