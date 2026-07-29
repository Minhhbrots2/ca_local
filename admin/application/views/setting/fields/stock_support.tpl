{* Tài khoản hỗ trợ theo từng loại bảng hàng: mỗi loại một tài khoản chính và
   một tài khoản phụ. Danh sách dòng và tên thành viên đã dựng sẵn ở controller
   ('bare' => true nên khối này tự dựng nhãn). *}
<div class="form-group">

	<div class="col-md-12">

		<label class="col-form-label">{$val.label|escape}</label>

		{foreach from=$val.support_rows item=_oRow}

		<div class="mb-3">

			<label class="col-form-label">Tài khoản hỗ trợ {$_oRow.title|escape}</label>

			<div class="mb-2">

				<select placeholder="{$val.placeholder|escape}" name="config[{$val.keyword|escape}][{$_oRow.property_id|escape}]" class="form-control iso-selectizeLiveSearch" data-url="{$PCMS_URL}/index.php?mod=member&act=get_member_search">

					{if $_oRow.main_id}<option value="{$_oRow.main_id|escape}" selected="selected">{$_oRow.main_name|escape}</option>{/if}

				</select>

			</div>

			<div class="mb-2">

				<select placeholder="{$val.placeholder|escape}" name="config[{$val.pair_keyword|escape}][{$_oRow.property_id|escape}]" class="form-control iso-selectizeLiveSearch" data-url="{$PCMS_URL}/index.php?mod=member&act=get_member_search">

					{if $_oRow.extra_id}<option value="{$_oRow.extra_id|escape}" selected="selected">{$_oRow.extra_name|escape}</option>{/if}

				</select>

			</div>

		</div>

		{/foreach}

	</div>

</div>
