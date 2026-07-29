{* Một hàng ảnh của màn Thông tin công ty: xem trước + đường dẫn + kích thước + nút chọn.
   Tham số: keyword (key lưu trong bảng cấu hình), for_id (hậu tố id mà isoman ghi
   kết quả vào — giữ nguyên giá trị cũ để không gãy đoạn JS nào đang bám theo),
   label (nhãn hiển thị).
   Kích thước lưu thành 2 key phụ <keyword>_width / <keyword>_height, đọc lại ở
   template khác bằng $clsConfiguration->getImageAttr('<keyword>'). *}
<div class="cfg-row">

	<label class="cfg-row__label">{$label|escape}</label>

	<div class="cfg-row__control cfg-imgfield">

		<img class="isoman_img_pop" id="isoman_show_{$for_id|escape}" src="{$clsConfiguration->getValue($keyword)|escape}" alt="{$label|escape}" onerror="this.src='{$URL_IMAGES}/none_image.png'" />

		<input type="hidden" id="isoman_hidden_{$for_id|escape}" value="{$clsConfiguration->getValue($keyword)|escape}" />

		<input class="cfg-input" type="text" id="isoman_url_{$for_id|escape}" name="iso-{$keyword|escape}" value="{$clsConfiguration->getValue($keyword)|escape}" />

		<input class="cfg-input cfg-imgfield__size" type="number" name="iso-{$keyword|escape}_width" value="{$clsConfiguration->getImageWidth($keyword)}" min="0" step="1" title="Bề ngang (px)" aria-label="Bề ngang (px)" />

		<input class="cfg-input cfg-imgfield__size" type="number" name="iso-{$keyword|escape}_height" value="{$clsConfiguration->getImageHeight($keyword)}" min="0" step="1" title="Chiều cao (px)" aria-label="Chiều cao (px)" />

		<a href="#" class="ajOpenDialog cfg-pick" isoman_for_id="{$for_id|escape}" isoman_val="{$clsConfiguration->getValue($keyword)|escape}" isoman_name="image" title="{$label|escape}"><img src="{$URL_IMAGES}/general/folder-32.png" alt="Open" /></a>

	</div>

</div>
