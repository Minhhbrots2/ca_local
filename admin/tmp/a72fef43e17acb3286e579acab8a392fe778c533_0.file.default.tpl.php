<?php
/* Smarty version 3.1.33, created on 2025-12-26 19:31:05
  from '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/email_template/default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_694e800966b518_34727275',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a72fef43e17acb3286e579acab8a392fe778c533' => 
    array (
      0 => '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/email_template/default.tpl',
      1 => 1730083834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694e800966b518_34727275 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/fhgroupt/ca.futurehomes.vn/core/smarty/plugins/function.cycle.php','function'=>'smarty_function_cycle',),));
?>
<header class="ui-title-bar-container ">
	<div class="ui-title-bar">
		<div class="ui-title-bar__navigation">
			<div class="ui-breadcrumbs">
				<a class="btn btn-default ui-breadcrumb" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=setting" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Setting');?>
">
					<?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('angle-left mr-5');?>

					<span class="ui-breadcrumb__item"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Setting');?>
</span>
				</a>
			</div>
		</div>
	</div>
	<div class="ui-title-bar ui-title-bar--separator">
		<div class="ui-title-bar__main-group">
			<div class="ui-title-bar__heading-group">
				<h1 class="ui-title-bar__title"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('emailtemplate');?>
</h1>
			</div>
		</div>
		<div class="action-bar">
			<div class="ui-title-bar__mobile-primary-actions">
				<div class="ui-title-bar__actions">
					<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=edit" class="ui-button ui-button--primary ui-title-bar__action" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Addnew');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Addnew');?>
</a>
				</div>
			</div>
		</div>
	</div>
</header>
<div class="clearfix"></div>
<div class="ui-layout"><div class="ui-layout__sections">
	<div class="ui-layout__section">
		<div class="ui-annotated-section__content"><div class="ui-form__section form-horizontal ui-card__section">
			<section class="ui-annotated-section-container">
				<div class="ui-annotated-section">
					<div class="row">
						<div class="col-md-4">
							<div class="ui-annotated-section__title">
								<h2 class="ui-heading">Nội dung email</h2>
							</div>
							<div class="ui-annotated-section__description">
								Những email này được gửi tự động tới bạn hoặc khách hàng. Click vào tên mẫu email để chỉnh sửa
							</div>
						</div>
						<div class="col-md-8">
							<div class="ui-annotated-section__content" >
								<div class="next-card">
									<div class="next-card__header">
										<h2 class="next-heading"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('All Email Template');?>
</h2>
									</div>
									<div class="section-content">
										<div class="next-card__section">
											<div class="has-bulk-actions pages">
												<div class="hastable">
													<table class="table table-vertical table-striped" cellspacing="0" cellpadding="0" width="100%">
														<?php if ($_smarty_tpl->tpl_vars['allItem']->value) {?>
															<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['allItem']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
															<tr class="<?php echo smarty_function_cycle(array('values'=>"row1,row2"),$_smarty_tpl);?>
">
																<td class="text-left"><?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getTitle($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['email_template_id']);?>
</td>
																<td class="text-center" width="60px" style="white-space: nowrap;">
																	<div class="btn-group">
																		<button class="btn iso-button-standard dropdown-toggle" type="button" data-toggle="dropdown">
																			<i class="icon-cog"></i> 
																			<span class="caret"></span>
																		</button>
																		<ul class="dropdown-menu" style="right:0px !important; left:auto">
																			<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('edit');?>
" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=edit&email_template_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptId($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['email_template_id']);?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('pencil',$_smarty_tpl->tpl_vars['core']->value->get_Lang('edit'));?>
</a></li>
																			<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->_DEV()) {?>
																			<li><a title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
" class="confirm_delete" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=delete&email_template_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptId($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['email_template_id']);?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('times',$_smarty_tpl->tpl_vars['core']->value->get_Lang('delete'));?>
</a></li>
																			<?php }?>
																		</ul>
																	</div>
																</td>
															</tr>	
															<?php
}
}
?>
														<?php } else { ?>
															<tr><td colspan="10" class="text-center"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('No Data');?>
 !</td></tr>
														<?php }?>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="ui-annotated-section-container">
				<div class="ui-annotated-section">
					<div class="row">
						<div class="col-md-4">
							<div class="ui-annotated-section__title"><h2 class="ui-heading">Thông báo đơn hàng</h2></div>
							<div class="ui-annotated-section__description">Nhận thông báo về đơn hàng qua email hoặc điện thoại.</div>
							<button class="btn btn-primary" onClick="open_email_notifier(this)" holderG="order">
								<?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('plus-circle','Thêm thông báo đơn hàng');?>

							</button>
						</div>
						<div class="col-md-8">
							<div class="ui-annotated-section__content" >
								<div class="next-card">
									<div class="section-content">
										<form method="post" action="" enctype="multipart/form-data">
											<div class="next-card__section">
												<table class="table table-vertical table-striped" cellpadding="0" cellspacing="0" width="100%">
													<thead><tr>
														<th>Thông báo</th>
														<th width="6%"></th>
														<th width="6%"></th>
													</tr></thead>
													<tbody id="holder_email_order">
														<tr><td colspan="3" class="text-center">Loading...</td></tr>
													</tbody>
												</table>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="ui-annotated-section-container">
				<div class="ui-annotated-section">
					<div class="row">
						<div class="col-md-4">
							<div class="ui-annotated-section__title"><h2 class="ui-heading">Thông báo liên hệ</h2></div>
							<div class="ui-annotated-section__description">Nhận thông báo về liên hệ qua email hoặc điện thoại.</div>
							<button class="btn btn-primary" onClick="open_email_notifier(this)" holderG="contact">
								<?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('plus-circle','Thêm thông báo liên hệ');?>

							</button>
						</div>
						<div class="col-md-8">
							<div class="ui-annotated-section__content" >
								<div class="next-card">
									<div class="section-content">
										<form method="post" action="" enctype="multipart/form-data">
											<div class="next-card__section">
												<table class="table table-vertical table-striped" cellpadding="0" cellspacing="0" width="100%">
													<thead><tr>
														<th>Thông báo</th>
														<th width="6%"></th>
														<th width="6%"></th>
													</tr></thead>
													<tbody id="holder_email_contact">
														<tr><td colspan="3" class="text-center">Loading...</td></tr>
													</tbody>
												</table>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div></div>
	</div></div>
</div><?php }
}
