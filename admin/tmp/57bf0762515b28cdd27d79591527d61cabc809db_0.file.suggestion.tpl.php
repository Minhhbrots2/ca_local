<?php
/* Smarty version 3.1.33, created on 2026-07-10 11:47:40
  from '/www/wwwroot/skyrealty.c-a.vn/admin/application/views/page/suggestion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a50796c2283c2_00586019',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57bf0762515b28cdd27d79591527d61cabc809db' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/admin/application/views/page/suggestion.tpl',
      1 => 1783314586,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a50796c2283c2_00586019 (Smarty_Internal_Template $_smarty_tpl) {
?><header class="ui-title-bar-container ">

	<div class="ui-title-bar ui-title-bar--separator">

		<div class="ui-title-bar__main-group">

			<div class="ui-title-bar__heading-group">

				<h1 class="ui-title-bar__title">Suggestion</h1>

			</div>

		</div> 

	</div>

</header>

<div class="clearfix"></div>

<form action="" method="post" enctype="multipart/form-data">

	<div class="ui-layout">

		<div class="ui-layout__sections">

			<div class="ui-layout__section">

				<section class="ui-annotated-section-container">

					<div class="ui-annotated-section d-flex flex-column" id="list_suggestion">

						<div class="mb-3 item_suggestion w-100 p-3 border">

							<textarea id="textarea_suggestion_editor_<?php echo $_smarty_tpl->tpl_vars['now']->value;?>
" class="textarea_intro_editor w-100" name="suggestion" style="width:100%"><?php echo $_smarty_tpl->tpl_vars['suggestion']->value;?>
</textarea>

						</div>

						

					</div>

				</section>

			</div>

		</div>

	</div>

	<div class="clearfix"></div>

	<div class="ui-page-actions ui-page-actions--has-secondary">

		<div class="ui-page-actions__container">

			<div class="ui-page-actions__actions ui-page-actions__actions--secondary"></div>

			<div class="ui-page-actions__actions ui-page-actions__actions--primary">

				<input value="UpdateSuggestion" name="submit" type="hidden">

				<div class="ui-page-actions__button-group"><?php echo $_smarty_tpl->tpl_vars['saveBtn']->value;?>
</div>

			</div>

		</div>

	</div>

</form><?php }
}
