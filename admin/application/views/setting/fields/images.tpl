{* Chọn ảnh qua trình quản lý file. isoman ghi kết quả vào #isoman_hidden_<for_id>
   nên id của ô nhập bắt buộc theo đúng khuôn đó. *}
<div class="input-group">

	<input type="text" class="form-control" id="isoman_hidden_{$keyword|escape}" name="config[{$keyword|escape}]" value="{$current|escape}"{if !empty($val.placeholder)} placeholder="{$val.placeholder|escape}"{/if} />

	<div class="input-group-btn">

		<button type="button" class="btn btn-default ajOpenDialog" isoman_for_id="{$keyword|escape}" isoman_val="{$current|escape}" isoman_name="{$keyword|escape}"><i class="fa fa-image"></i></button>

	</div>

</div>
