{* Nội dung một nhóm cấu hình. Slug làm neo #cfg-xxx để link thẳng tới nhóm. *}
<section class="ui-annotated-section-container" id="{$group.slug|escape}">

	<div class="ui-annotated-section">

		<div class="row">

			<div class="col-md-4">

				<div class="ui-annotated-section__title">

					<h2 class="ui-heading">{$core->makeIcon($group.icon_class)} {$group.label|escape}</h2>

				</div>

				<div class="ui-annotated-section__description">

					{$group.description|escape}

				</div>

			</div>

			<div class="col-md-8">

				<div class="ui-annotated-section__content">

					<div class="next-card">

						<div class="next-card__section">

							<div class="ui-form__section form-horizontal">

								<div class="p-md-3">

									{foreach from=$group.fields item=_oField}

									{assign var="keyword" value=$_oField.keyword}

									{if $_oField.bare}

									{include file="./fields/`$_oField.type`.tpl" keyword=$keyword val=$_oField current=$_oField.current}

									{else}

									<div class="form-group">

										<div class="col-md-12">

											<label class="col-form-label">{$_oField.label|escape}{if !empty($_oField.required)} <span class="text-red">*</span>{/if}{if !empty($_oField.link)} <a href="{$_oField.link|escape}" target="_blank" rel="noopener">{if !empty($_oField.title)}{$_oField.title|escape}{else}{$_oField.link|escape}{/if}</a>{/if}</label>

											{include file="./fields/`$_oField.type`.tpl" keyword=$keyword val=$_oField current=$_oField.current}

											{if !empty($_oField.help)}<span class="help-block">{$_oField.help|escape}</span>{/if}

											{if !empty($_oField.attention)}<span class="help-block text-red">{$_oField.attention|escape}</span>{/if}

										</div>

									</div>

									{/if}

									{/foreach}

								</div>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

</section>
