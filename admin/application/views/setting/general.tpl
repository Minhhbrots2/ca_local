<header class="ui-title-bar-container ">

	<div class="ui-title-bar">

		<div class="ui-title-bar__navigation">

			<div class="ui-breadcrumbs">

				<a href="{$PCMS_URL}/index.php?mod={$mod}" class="btn btn-default ui-breadcrumb">

					{$core->makeIcon('angle-left mr-5')}

					<span class="ui-breadcrumb__item">{$core->get_Lang('Setting')}</span>

				</a>

			</div>

		</div>

	</div>

	<div class="ui-title-bar ui-title-bar--separator">

		<div class="ui-title-bar__main-group">

			<div class="ui-title-bar__heading-group">

				<h1 class="ui-title-bar__title">Cấu hình</h1>

			</div>

		</div>

	</div><div class="collapsible-header"><div class="collapsible-header__heading"></div></div>

</header>

<div class="clearfix"></div>

<form method="post" action="" enctype="multipart/form-data" class="validate-form">

	<div class="ui-layout">

		<div class="ui-layout__sections">

			<div class="ui-layout__section setting-general__groups">

				{foreach from=$configGroups item=_oGroup}

				{include file="./_config_group.tpl" group=$_oGroup}

				{/foreach}

			</div>

		</div>

	</div>

	<div class="clearfix"></div>

	<div class="ui-page-actions ui-page-actions--has-secondary">

		<div class="ui-page-actions__container">

			<div class="ui-page-actions__actions ui-page-actions__actions--secondary"></div>

			<div class="ui-page-actions__actions ui-page-actions__actions--primary">

				<input value="Update" name="submit" type="hidden">

				<div class="ui-page-actions__button-group">{$saveBtn}</div>

			</div>

		</div>

	</div>

</form>
{literal}
<script type="text/javascript">
	$(function(){
		/* Bảng màu và ô text đi cặp: ô text mới là giá trị được lưu. */
		$('.setting-general__groups').on('input change', '.config-color__picker', function(){
			$(this).closest('.input-group').find('.config-color__value').val($(this).val());
		}).on('input change', '.config-color__value', function(){
			var _value = ($(this).val() || '').trim();

			if(/^#[0-9a-fA-F]{6}$/.test(_value)){
				$(this).closest('.input-group').find('.config-color__picker').val(_value);
			}
		});
	});
</script>
{/literal}
