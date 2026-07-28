/*
 * Import giao dịch (billing) từ Google Sheet.
 * $Core.billingImport — mở modal, chọn sheet, map cột (config dùng chung),
 * Xem trước (dry-run, KHÔNG ghi) rồi mới Ghi vào hệ thống.
 * Server: mod=home&act=open_billing_import|get_billing_sheets|config_billing_import|save_billing_import_config|run_billing_import
 */
(function(){
	window.$Core = window.$Core || {};
	var MOD = 'home';

	function esc(v){
		if(v === null || v === undefined){ return ''; }
		return String(v).replace(/[&<>"']/g, function(c){
			return {'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#39;'}[c];
		});
	}

	function money(v){
		var n = parseFloat(v);
		if(isNaN(n)){ return esc(v); }
		return n.toLocaleString('vi-VN');
	}

	$Core.billingImport = {
		/** Mở modal import chính. */
		open: function(_this, e){
			if(e){ e.preventDefault(); }
			$Core.util.toggleIndicatior(1);
			$.post(PCMS_URL + '/index.php?mod=' + MOD + '&act=open_billing_import', {}, function(resp){
				$Core.util.toggleIndicatior(0);
				if(resp.result === false){ $Core.alert.error(resp.msg); return; }
				$Core.popup.open('auto', 'auto', resp.html, resp.uid);
			}, 'json');
			return false;
		},

		/** Nạp danh sách tab khi nhập/đổi Spreadsheet ID. */
		loadSheets: function(_this, e){
			if(e){ e.preventDefault(); }
			var spreadsheetId = $(_this).val(), toId = $(_this).attr('toId');
			if($Core.util.isEmpty(spreadsheetId)){ return false; }
			$Core.util.toggleIndicatior(1);
			$.post(PCMS_URL + '/index.php?mod=' + MOD + '&act=get_billing_sheets', {spreadsheetId: spreadsheetId}, function(resp){
				$Core.util.toggleIndicatior(0);
				if(!resp.result){ $Core.alert.error(resp.msg); }
				else { $('#' + toId).html(resp.html); }
			}, 'json');
			return false;
		},

		/** Mở modal cấu hình map cột. */
		openConfig: function(_this, e){
			if(e){ e.preventDefault(); }
			var _form = $(_this).closest('form'),
				spreadsheetId = $('input[name=spreadsheetId]', _form).val(),
				sheet_name = $('select[name=sheet_name]', _form).val(),
				header_row = $('input[name=header_row]', _form).val(),
				start_row = $('input[name=start_row]', _form).val();
			if($Core.util.isEmpty(spreadsheetId) || $Core.util.isEmpty(sheet_name)){
				$Core.swal.error('Thông báo', 'Nhập Spreadsheet ID và chọn sheet trước.');
				return false;
			}
			$Core.util.toggleIndicatior(1);
			$.post(PCMS_URL + '/index.php?mod=' + MOD + '&act=config_billing_import', {
				spreadsheetId: spreadsheetId,
				sheet_name: sheet_name,
				header_row: header_row,
				start_row: start_row
			}, function(resp){
				$Core.util.toggleIndicatior(0);
				$Core.popup.open('auto', 'auto', resp.html, resp.uid);
			}, 'json');
			return false;
		},

		/** Lưu cấu hình map cột (dùng chung). */
		saveConfig: function(_this, e){
			if(e){ e.preventDefault(); }
			var _form = $(_this).closest('form');
			$Core.util.toggleIndicatior(1);
			_form.ajaxSubmit({
				type: 'POST',
				url: PCMS_URL + '/index.php?mod=' + MOD + '&act=save_billing_import_config',
				dataType: 'json',
				success: function(resp){
					$Core.util.toggleIndicatior(0);
					if(resp.result){
						alertify.success(resp.msg);
						$('.btn-close', _form).trigger('click');
					} else {
						alertify.error(resp.msg);
					}
				}
			});
			return false;
		},

		/** Xem trước (dry-run). */
		preview: function(_this, e){
			return $Core.billingImport._run(_this, e, 1);
		},

		/** Xác nhận rồi ghi thật. */
		confirmRun: function(_this, e){
			if(e){ e.preventDefault(); }
			if($(_this).hasClass('disabled')){ return false; }
			if(!window.confirm('Ghi các giao dịch hợp lệ vào hệ thống? Thao tác này ghi trực tiếp lên dữ liệu thật.')){
				return false;
			}
			return $Core.billingImport._run(_this, e, 0);
		},

		/** Gọi import. isPreview=1: chỉ xem trước; 0: ghi thật. */
		_run: function(_this, e, isPreview){
			if(e){ e.preventDefault(); }
			var _form = $(_this).closest('form');
			var _error = 0;
			$('select.required,input.required', _form).each(function(){
				if($Core.util.isEmpty($(this).val())){ $(this).addClass('is-invalid'); _error++; }
				else { $(this).removeClass('is-invalid'); }
			});
			if(_error > 0){
				$Core.alert.error('Nhập đủ Spreadsheet ID, sheet, dòng bắt đầu và loại hình giao dịch.');
				return false;
			}
			$('input[name=is_preview]', _form).val(isPreview);
			$Core.util.toggleIndicatior(1);
			_form.ajaxSubmit({
				type: 'POST',
				url: PCMS_URL + '/index.php?mod=' + MOD + '&act=run_billing_import',
				dataType: 'json',
				success: function(resp){
					$Core.util.toggleIndicatior(0);
					if(resp.result === false){ $Core.alert.error(resp.msg); return; }
					$Core.billingImport.renderReport(_form, resp, isPreview);
				},
				error: function(){
					$Core.util.toggleIndicatior(0);
					$Core.alert.error('Có lỗi khi import. Thử lại.');
				}
			});
			return false;
		},

		/** Render báo cáo kết quả vào .billing-import-report trong modal. */
		renderReport: function(_form, resp, isPreview){
			var box = $('.billing-import-report', _form);
			var okLabel = isPreview ? 'Sẽ ghi' : 'Đã ghi';
			var head = isPreview ? 'Kết quả xem trước' : 'Kết quả import';
			var html = '';
			html += '<div class="alert ' + (resp.errors > 0 ? 'alert-warning' : 'alert-success') + ' py-2 mb-2">';
			html += '<strong>' + esc(head) + ':</strong> ' + resp.total + ' dòng — ';
			html += '<span class="text-success">' + esc(okLabel) + ': ' + resp.inserted + '</span> · ';
			html += '<span class="text-warning">Trùng (bỏ qua): ' + resp.skipped + '</span> · ';
			html += '<span class="text-danger">Lỗi: ' + resp.errors + '</span>';
			html += '</div>';
			html += '<div class="table-responsive" style="max-height:320px;overflow:auto">';
			html += '<table class="table table-sm table-bordered mb-0"><thead><tr class="bg-lighter">';
			html += '<th>Dòng</th><th>Trạng thái</th><th>Nhân viên</th><th>Mã căn</th><th>Ngày PS</th><th class="text-end">Số tiền</th><th>Ghi chú</th>';
			html += '</tr></thead><tbody>';
			var rows = resp.rows || [];
			for(var i = 0; i < rows.length; i++){
				var r = rows[i], p = r.preview || {};
				var badge = 'bg-label-success', label = okLabel;
				if(r.status === 'skip'){ badge = 'bg-label-warning'; label = 'Trùng'; }
				else if(r.status === 'error'){ badge = 'bg-label-danger'; label = 'Lỗi'; }
				var note = r.reason ? esc(r.reason) : '';
				if(r.warnings && r.warnings.length){
					note += (note ? '<br>' : '') + '<span class="text-warning">' + esc(r.warnings.join('; ')) + '</span>';
				}
				html += '<tr>';
				html += '<td>' + esc(r.line) + '</td>';
				html += '<td><span class="badge ' + badge + '">' + esc(label) + '</span></td>';
				html += '<td>' + esc(p.staff) + '</td>';
				html += '<td>' + esc(p.stock_code) + '</td>';
				html += '<td>' + esc(p.deposit_date) + '</td>';
				html += '<td class="text-end">' + money(p.totalgrand) + '</td>';
				html += '<td><small>' + note + '</small></td>';
				html += '</tr>';
			}
			html += '</tbody></table></div>';
			box.html(html);
			// Bật nút ghi thật khi xem trước có dòng hợp lệ
			var runBtn = $('.bi-btn-run', _form);
			if(isPreview && resp.inserted > 0){
				runBtn.removeClass('disabled').prop('disabled', false);
			} else if(!isPreview){
				runBtn.addClass('disabled').prop('disabled', true);
				if(resp.inserted > 0){
					box.append('<button type="button" class="btn btn-sm btn-outline-primary mt-2" onclick="location.reload()"><i class="bx bx-refresh me-1"></i> Tải lại danh sách</button>');
				}
			}
		}
	};

	/*
	 * Quản lý tỷ lệ hoa hồng bậc thang theo vị trí (TPKD, Giám đốc, CV/TP/GĐ PTĐT).
	 * $Core.commissionTier — chỉ Admin trưởng mở được (gate ở server).
	 * Server: mod=home&act=open_commission_tier|save_commission_tier
	 */
	$Core.commissionTier = {
		/** Mở popup cấu hình. */
		open: function(_this, e){
			if(e){ e.preventDefault(); }
			$Core.util.toggleIndicatior(1);
			$.post(PCMS_URL + '/index.php?mod=' + MOD + '&act=open_commission_tier', {}, function(resp){
				$Core.util.toggleIndicatior(0);
				if(resp.result === false){ $Core.alert.error(resp.msg); return; }
				$Core.popup.open('auto', 'auto', resp.html, resp.uid);
				setTimeout($Core.commissionTier._initPrice, 120);
			}, 'json');
			return false;
		},

		/** Format phân tách nghìn cho ô mốc doanh số. */
		_initPrice: function(){
			if($.fn.priceFormat){
				$('.js__tier-row .price-In:not(.priceFormat)').priceFormat({thousandsSeparator: '.', clearOnEmpty: true, centsLimit: ''});
			}
		},

		/** Thêm 1 bậc mới cho vị trí. Bậc cuối còn trống thì focus vào đó, không đẻ thêm dòng rỗng. */
		addRow: function(_this, e, role){
			if(e){ e.preventDefault(); }
			var rows = $('[data-role="' + role + '"]');
			var last = $('.js__tier-row:last input.price-In', rows);
			if(last.length && $Core.util.isEmpty(last.val())){
				last.focus();
				return false;
			}
			var idx = 'n' + (new Date().getTime());
			var html = '<div class="d-flex align-items-center gap-2 mb-2 js__tier-row">'
				+ '<div class="input-group">'
				+ '<input type="text" class="form-control text-end price-In numberonly" name="tiers[' + role + '][' + idx + '][min]" value="">'
				+ '<span class="input-group-text">đ</span></div>'
				+ '<div class="input-group w-px-125 flex-grow-0">'
				+ '<input type="text" class="form-control text-end" name="tiers[' + role + '][' + idx + '][rate]" value="">'
				+ '<span class="input-group-text">%</span></div>'
				+ '<button type="button" class="btn btn-icon btn-outline-danger flex-shrink-0" title="Xoá bậc" onclick="$Core.commissionTier.removeRow(this,event)"><i class="bx bx-trash"></i></button>'
				+ '</div>';
			rows.append(html);
			$Core.commissionTier._initPrice();
			$('.js__tier-row:last input.price-In', rows).focus();
			return false;
		},

		/** Xoá 1 bậc. */
		removeRow: function(_this, e){
			if(e){ e.preventDefault(); }
			$(_this).closest('.js__tier-row').remove();
			return false;
		},

		/** Lưu cấu hình. */
		save: function(_this, e){
			if(e){ e.preventDefault(); }
			var _form = $(_this).closest('form');
			$Core.util.toggleIndicatior(1);
			_form.ajaxSubmit({
				type: 'POST',
				url: PCMS_URL + '/index.php?mod=' + MOD + '&act=save_commission_tier',
				dataType: 'json',
				success: function(resp){
					$Core.util.toggleIndicatior(0);
					if(resp.result){
						alertify.success(resp.msg);
						$('.btn-close', _form).trigger('click');
					} else {
						alertify.error(resp.msg);
					}
				},
				error: function(){
					$Core.util.toggleIndicatior(0);
					$Core.alert.error('Có lỗi khi lưu. Thử lại.');
				}
			});
			return false;
		}
	};

	/**
	 * $Core.billingSettlement — modal Quyết toán 1 giao dịch.
	 * Server: mod=home&act=open_billing_settlement|save_billing_settlement
	 *
	 * Số hiện live ở đây CHỈ để xem trước; server luôn tính lại bằng BillingCalc rồi mới lưu.
	 * Công thức dưới đây phải soi gương models/BillingCalc.php — sửa một bên thì sửa cả hai.
	 */
	$Core.billingSettlement = {

		/** Đọc ô tiền: bỏ dấu phân cách nghìn rồi ép nguyên. */
		_money: function($f, sel){
			var v = $(sel, $f).val();
			if(!v){ return 0; }
			v = String(v).replace(/[₫\s;()]/g, '').replace(/,/g, '.').replace(/\./g, '');
			var n = parseInt(v, 10);
			return isNaN(n) ? 0 : n;
		},

		/** Đọc ô phần trăm: GIỮ phần thập phân (3.6 là 3,6% chứ không phải 36%). */
		_pct: function($f, sel, def){
			var v = $(sel, $f).val();
			if(v === undefined || v === null || String(v).trim() === ''){ return def; }
			v = String(v).replace(/[₫%\s;()]/g, '').replace(/,/g, '.');
			var n = parseFloat(v);
			return isNaN(n) ? def : n;
		},

		_fmt: function(n){
			return Math.round(n).toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');
		},

		/**
		 * Tính lại toàn bộ số dẫn xuất mỗi khi người dùng gõ.
		 * $f là form CỦA CHÍNH modal đang thao tác — popup cũ chỉ bị ẩn chứ không gỡ khỏi DOM,
		 * nên bám selector toàn cục sẽ vớ phải form của giao dịch mở trước đó.
		 */
		recalc: function($f){
			if(!$f || !$f.length){ return; }
			var st = $Core.billingSettlement;
			var R = st._money($f, '[name="_r_base"]');
			var T = st._pct($f, '[name="_t_rate"]', 0);
			var AB = st._money($f, '[name="total_deduction"]');
			var AC = st._pct($f, '[name="total_deduction_percent_sales"]', 0);
			var AE = st._money($f, '[name="total_deduction_company"]');
			// Ô "Sales chịu" để trống = trả về tự tính, khớp hành vi phía server
			var adRaw = $('[name="total_deduction_sales"]', $f).val();
			var AD = (adRaw === undefined || adRaw === null || String(adRaw).trim() === '')
				? (AB * AC / 100)
				: st._money($f, '[name="total_deduction_sales"]');
			var AF = AB - AD - AE;

			$('.js__st-out-af', $f).val(st._fmt(AF));

			// Mọi số hoa hồng đều PER-SALE: mỗi dòng có tỷ lệ chia VÀ % hoa hồng riêng.
			// Tổng cả căn phải CỘNG các dòng, không được tính lại ở tỷ lệ 100% — vì AI khác nhau từng người.
			var totalAG = 0, totalAJ = 0, totalAL = 0, totalAM = 0, over = 0;
			$f.find('tbody tr[data-ratio]').each(function(){
				var $tr = $(this);
				var r = (parseFloat($tr.attr('data-ratio')) || 0) / 100;
				var ai = st._pct($tr, '.js__st-row-ai', 50);
				if(ai <= 0){ ai = 50; }
				// Gõ nhầm % hoa hồng thổi tiền lên nhiều lần mà không có gì báo — tô đỏ ngay ô đó
				if(ai > 100){ over++; }
				$('.js__st-row-ai', $tr).toggleClass('is-invalid', ai > 100);
				var ag = (R * r * T / 100) - (AF * r);
				var aj = ag * ai / 100;
				var al = AD * r;
				totalAG += Math.round(ag);
				totalAJ += Math.round(aj);
				totalAL += Math.round(al);
				totalAM += Math.round(aj - al);
				$('.js__st-row-ag', $tr).text(st._fmt(ag));
				$('.js__st-row-aj', $tr).text(st._fmt(aj));
				$('.js__st-row-al', $tr).text(st._fmt(al));
				$('.js__st-row-am', $tr).text(st._fmt(aj - al));

				// CTV ăn trên AG của CHÍNH dòng này. Ô tiền để trống = tự tính (khớp phía server),
				// nên chỉ hiện số gợi ý chứ KHÔNG điền vào ô — điền vào là biến nó thành giá trị đè.
				var sid = $tr.attr('data-sid');
				if(sid){
					var $amt = $('.js__st-ctv-amount[data-sid="' + sid + '"]', $f);
					var $hint = $('.js__st-ctv-hint[data-sid="' + sid + '"]', $f);
					var crate = st._pct($f, '[name="share[' + sid + '][ctv_rate]"]', 0);
					var auto = ag * crate / 100;
					var typed = String($amt.val() || '').trim() !== '';
					$hint.text((!typed && crate > 0) ? ('tự tính: ' + st._fmt(auto) + ' đ') : '');
				}
			});
			$('.js__st-out-ag-total', $f).text(st._fmt(totalAG));
			$('.js__st-out-aj', $f).text(st._fmt(totalAJ));
			$('.js__st-out-al', $f).text(st._fmt(totalAL));
			$('.js__st-out-am', $f).text(st._fmt(totalAM));
			$('.js__st-warn-ai', $f).toggleClass('d-none', over === 0);

			// Đại lý ăn trên R của CẢ CĂN (khác CTV ăn trên AG từng sale). Cũng chỉ gợi ý, không điền.
			var arate = st._pct($f, '[name="agency_rate"]', 0);
			var $aamt = $('.js__st-agency-amount', $f);
			var atyped = String($aamt.val() || '').trim() !== '';
			$('.js__st-agency-hint', $f).text((!atyped && arate > 0) ? ('tự tính: ' + st._fmt(R * arate / 100) + ' đ') : '');
		},

		/** Gắn sự kiện cho ĐÚNG modal vừa mở, tìm theo uid mà server trả về. */
		_bind: function(uid){
			var $f = $('#' + uid).find('form').first();
			if(!$f.length){ return; }
			if($.fn.priceFormat){
				$('.price-In:not(.priceFormat)', $f).priceFormat({thousandsSeparator: '.', clearOnEmpty: true, centsLimit: ''});
			}
			$f.off('keyup.st change.st').on('keyup.st change.st', 'input', function(){
				$Core.billingSettlement.recalc($f);
			});
			$Core.billingSettlement.recalc($f);
		},

		/** Mở modal Quyết toán của 1 giao dịch. */
		open: function(_this, e){
			if(e){ e.preventDefault(); }
			var billing_id = $(_this).attr('billing_id');
			$Core.util.toggleIndicatior(1);
			$.post(PCMS_URL + '/index.php?mod=' + MOD + '&act=open_billing_settlement', {billing_id: billing_id}, function(resp){
				$Core.util.toggleIndicatior(0);
				if(resp.result === false){ $Core.alert.error(resp.msg); return; }
				$Core.popup.open('auto', 'auto', resp.html, resp.uid);
				setTimeout(function(){ $Core.billingSettlement._bind(resp.uid); }, 150);
			}, 'json');
			return false;
		},

		/** Lưu. Chỉ gửi ô người dùng nhập; số dẫn xuất để server tự tính lại. */
		save: function(_this, e){
			if(e){ e.preventDefault(); }
			// Bám form chứa chính nút vừa bấm — không dùng selector toàn cục, tránh gửi nhầm
			// billing_id của modal mở trước đó (popup cũ chỉ bị ẩn, vẫn còn trong DOM)
			var $f = $(_this).closest('form');
			if(!$f.length){ return false; }
			$Core.util.toggleIndicatior(1);
			$.ajax({
				type: 'POST',
				url: PCMS_URL + '/index.php?mod=' + MOD + '&act=save_billing_settlement',
				data: $f.serialize(),
				dataType: 'json',
				success: function(resp){
					$Core.util.toggleIndicatior(0);
					if(resp.result){
						$Core.swal.success('Thông báo', 'Đã lưu quyết toán.');
						setTimeout(function(){ window.location.reload(); }, 900);
					} else {
						$Core.alert.error(resp.msg || 'Lưu quyết toán thất bại.');
					}
				},
				error: function(){
					$Core.util.toggleIndicatior(0);
					$Core.alert.error('Có lỗi khi lưu. Thử lại.');
				}
			});
			return false;
		}
	};
})();
