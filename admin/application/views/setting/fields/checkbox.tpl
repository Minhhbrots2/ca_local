{* Công tắc bật/tắt. Tự dựng cả khối vì nhãn nằm cạnh ô đánh dấu ('bare' => true).
   Ô ẩn cùng name đứng trước để khi bỏ tick vẫn gửi lên 0 thay vì thiếu hẳn key. *}
<div class="form-group">

	<div class="col-md-12">

		<div class="checkbox">

			<label>

				<input type="hidden" name="config[{$keyword|escape}]" value="0" />

				<input type="checkbox" name="config[{$keyword|escape}]" value="1"{if $val.is_checked} checked="checked"{/if} /> {$val.label|escape}

			</label>

		</div>

		{if !empty($val.help)}<span class="help-block">{$val.help|escape}</span>{/if}

		{if !empty($val.attention)}<span class="help-block text-red">{$val.attention|escape}</span>{/if}

	</div>

</div>
