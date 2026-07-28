<?php
/* Smarty version 3.1.33, created on 2025-10-30 13:54:08
  from '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/project/draw_map.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_69030b9083e9f9_21056180',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac76488cb6f26989e977224678a49f56cd33ea81' => 
    array (
      0 => '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/project/draw_map.tpl',
      1 => 1752028954,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69030b9083e9f9_21056180 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['URL_JS']->value;?>
/leaflet/leaflet.css?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.css"/>
<!-- <?php echo '<script'; ?>
 async src="https://docs.opencv.org/4.5.1/opencv.js"><?php echo '</script'; ?>
> -->
<!-- <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs"><?php echo '</script'; ?>
> -->
<!-- <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/@tensorflow-models/coco-ssd"><?php echo '</script'; ?>
> -->
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/leaflet.path.drag@0.0.6/src/Path.Drag.min.js"><?php echo '</script'; ?>
> 
<form method="post" action="#" class="p-5">
	<div class="d-flex align-items-center justify-content-between mb-3">
		<div class="d-flex align-items-center gap-2">
			<?php if ($_smarty_tpl->tpl_vars['stock_type']->value == @constant('_BLOCK_TYPE_HIGHLEVEL_SALE')) {?>
			<select class="form-control" required="true" name="project_id" toId="slb_BlockId" onChange="$Core.project.select_block(this, event)" stock_type="<?php echo $_smarty_tpl->tpl_vars['stock_type']->value;?>
">
				<?php if (!empty($_smarty_tpl->tpl_vars['list_projects']->value)) {?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_projects']->value, '_oProject');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oProject']->value) {
?>
					<option<?php if ($_smarty_tpl->tpl_vars['project_id']->value == $_smarty_tpl->tpl_vars['_oProject']->value['project_id']) {?> selected<?php }?> 
						value="<?php echo $_smarty_tpl->tpl_vars['_oProject']->value['project_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_oProject']->value['title'];?>
</option>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php }?>
			</select>
			<select class="form-control" name="block_id" id="slb_BlockId" stock_type="<?php echo $_smarty_tpl->tpl_vars['stock_type']->value;?>
" 
				onChange="$Core.project.select_building(this, event)" toId="slb_BuildingId">
				<option value="">Lựa chọn phân khu</option>
				<?php if (!empty($_smarty_tpl->tpl_vars['list_blocks']->value)) {?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_blocks']->value, '_oBlock');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oBlock']->value) {
?>
					<option<?php if ($_smarty_tpl->tpl_vars['block_id']->value == $_smarty_tpl->tpl_vars['_oBlock']->value['property_id']) {?> selected<?php }?> 
						value="<?php echo $_smarty_tpl->tpl_vars['_oBlock']->value['property_id'];?>
">Phân khu <?php echo $_smarty_tpl->tpl_vars['_oBlock']->value['title'];?>
</option>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php }?>
			</select>
			<select class="form-control" name="building_id" id="slb_BuildingId" stock_type="<?php echo $_smarty_tpl->tpl_vars['stock_type']->value;?>
">
				<option value="">Lựa chọn toà</option>
				<?php if (!empty($_smarty_tpl->tpl_vars['list_buildings']->value)) {?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_buildings']->value, '_oBuilding');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oBuilding']->value) {
?>
					<option<?php if ($_smarty_tpl->tpl_vars['building_id']->value == $_smarty_tpl->tpl_vars['_oBuilding']->value['property_id']) {?> selected<?php }?> 
						value="<?php echo $_smarty_tpl->tpl_vars['_oBuilding']->value['property_id'];?>
">Phân khu <?php echo $_smarty_tpl->tpl_vars['_oBuilding']->value['title'];?>
</option>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php }?>
			</select>
			<?php } else { ?>
			<select class="form-control" required="true" name="project_id" stock_type="<?php echo $_smarty_tpl->tpl_vars['stock_type']->value;?>
">
				<?php if (!empty($_smarty_tpl->tpl_vars['list_projects']->value)) {?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_projects']->value, '_oProject');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oProject']->value) {
?>
					<option<?php if ($_smarty_tpl->tpl_vars['project_id']->value == $_smarty_tpl->tpl_vars['_oProject']->value['project_id']) {?> selected<?php }?> 
						value="<?php echo $_smarty_tpl->tpl_vars['_oProject']->value['project_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_oProject']->value['title'];?>
</option>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php }?>
			</select>
			<?php }?>
			<input type="hidden" name="hid" value="hid" />
			<input type="hidden" name="stock_type" value="<?php echo $_smarty_tpl->tpl_vars['stock_type']->value;?>
" />
			<button type="submit" title="Tải lại" class="btn btn-icon btn-default">
				<?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('refresh');?>

			</button>
		</div>
		<div class="d-flex gap-2 align-items-center">
			<button type="button" onClick="$Core.project.save_stock_shapes(this, event)" project_id="<?php echo $_smarty_tpl->tpl_vars['project_id']->value;?>
" block_id="<?php echo $_smarty_tpl->tpl_vars['block_id']->value;?>
" building_id="<?php echo $_smarty_tpl->tpl_vars['building_id']->value;?>
" title="Lưu lại" stock_type="<?php echo $_smarty_tpl->tpl_vars['stock_type']->value;?>
" holderG="<?php if ($_smarty_tpl->tpl_vars['block_id']->value > '0' || $_smarty_tpl->tpl_vars['more_information']->value['has_block'] == '0') {?>stock<?php } else { ?>block<?php }?>" class="btn btn_save_all btn-default"><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('check','Lưu lại');?>
</button>
			<button type="button" onClick="$Core.project.open_map_config(this, event)" stock_type="<?php echo $_smarty_tpl->tpl_vars['stock_type']->value;?>
" project_id="<?php echo $_smarty_tpl->tpl_vars['project_id']->value;?>
" block_id="<?php echo $_smarty_tpl->tpl_vars['block_id']->value;?>
" building_id="<?php echo $_smarty_tpl->tpl_vars['building_id']->value;?>
" title="Lưu lại" class="btn btn-default"><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('cog','Cấu hình');?>
</button>
			<?php if ($_smarty_tpl->tpl_vars['stock_type']->value == @constant('_BLOCK_TYPE_LOWFLOOR_SALE')) {?>
			<button type="button" onClick="$Core.project.loadModalStock(this, event)" project_id="<?php echo $_smarty_tpl->tpl_vars['project_id']->value;?>
" block_id="<?php echo $_smarty_tpl->tpl_vars['block_id']->value;?>
" title="Lưu lại" stock_type="<?php echo $_smarty_tpl->tpl_vars['stock_type']->value;?>
" holderG="<?php if ($_smarty_tpl->tpl_vars['block_id']->value > '0' || $_smarty_tpl->tpl_vars['more_information']->value['has_block'] == '0') {?>stock<?php } else { ?>block<?php }?>" class="btn btn-default"><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('list','Quỹ căn');?>
</button>
			<?php } elseif ($_smarty_tpl->tpl_vars['map_configs']->value['enable_tooltip_position'] == '1') {?>
			<button type="button" onClick="$Core.project.open_setup_tooltip(this, event)" stock_type="<?php echo $_smarty_tpl->tpl_vars['stock_type']->value;?>
" project_id="<?php echo $_smarty_tpl->tpl_vars['project_id']->value;?>
" block_id="<?php echo $_smarty_tpl->tpl_vars['block_id']->value;?>
" building_id="<?php echo $_smarty_tpl->tpl_vars['building_id']->value;?>
" title="Lưu lại"  class="btn btn-default"><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('gavel','Thiết lập vị trí tooltip');?>
</button>
			<?php }?>
		</div>
	</div>
	<div id="map" class="map"></div>
</form>
<?php echo '<script'; ?>
 type="text/javascript">
	var block_id = '<?php echo $_smarty_tpl->tpl_vars['block_id']->value;?>
',
		project_id = '<?php echo $_smarty_tpl->tpl_vars['project_id']->value;?>
',
		stock_type = '<?php echo $_smarty_tpl->tpl_vars['stock_type']->value;?>
',
		building_id = '<?php echo $_smarty_tpl->tpl_vars['building_id']->value;?>
',
		has_block = '<?php echo $_smarty_tpl->tpl_vars['more_information']->value['has_block'];?>
';
<?php echo '</script'; ?>
>

<style type="text/css">
	.map {
		margin: auto;
		width: 100%;
		height: calc(100vh - 200px);
		position: relative;
		border-radius:3px;
		-moz-border-radius:3px;
		-khtml-border-radius:3px;
		-khtml-border-radius:3px;
	}
	.modal-backdrop{
		z-index: 1000
	}
	.leaflet-image-layer{
		border-radius:4px;
		-moz-border-radius:4px;
		-khtml-border-radius:4px;
		-khtml-border-radius:4px;
	}
	.leaflet-tooltip {
		font-weight: bold;
		font-size: 11px;
		color:var(--bs-white);
		background: #a04123;
		border: none !important;
		box-shadow: none !important;
		border-radius:10px 0 10px 0;
	}
	.leaflet-tooltip:before,
	.leaflet-tooltip .leaflet-tooltip-arrow {
		display: none;
	}
</style>
<?php echo '<script'; ?>
 type="text/javascript">
	$().ready(function(){
		var map = L.map('map', {
			crs: L.CRS.Simple,
			attributionControl: false,
			boxZoom: false,
			doubleClickZoom: true,
			dragging: true,
			keyboard: false,
			maxBoundsViscosity: 1.0,
			minZoom: -1,
			maxZoom: 10,
			scrollWheelZoom: true,
			tap: true,
			touchZoom: true,
			zoomControl: true,
			zoomSnap: 0
		});
		// Thêm lớp công cụ vẽ vào bản đồ
		var drawnItems = new L.FeatureGroup();
		map.addLayer(drawnItems);
		// Thêm ảnh nền
		var img = new Image(), 
			imageUrl = '<?php echo $_smarty_tpl->tpl_vars['image_map_src']->value;?>
';
		img.src = imageUrl;
		img.onload = () => {
			var natWidth = img.naturalWidth,
				natHeight = img.naturalHeight,
				imageBounds = [[0,0], [natHeight, natWidth]], // Kích thước ảnh (cao × rộng)
				maxBounds = [[-50,-50], [natHeight+100, natWidth+100]];  
			// var imageBounds = [[0, 0], [504, 971]]; 
			L.imageOverlay(imageUrl, imageBounds).addTo(map);
			// Cố định bản đồ vào đúng vùng ảnh
			map.fitBounds(imageBounds);
			// Giới hạn di chuyển bản đồ trong phạm vi ảnh
			map.setMaxBounds(maxBounds); 
			// Vẽ shapes
			draw_shapes(stock_type, project_id, block_id, building_id);
		};
		// Load shapes
		async function draw_shapes(stock_type, project_id, block_id, building_id){
			try {
				let response = await fetch(`/admin/index.php?mod=${mod}
					&act=get_shapes&stock_type=${stock_type}&project_id=${project_id}
					&block_id=${block_id}&building_id=${building_id}`),
					respJson = await response.json();
				if(respJson.msg.indexOf('_success') >= 0){
					drawnItems.clearLayers();
					$Core.project.shapes = respJson.shapes;
					$.each(respJson.shapes, (i, shape) => {
						let layer = null, coordinates = shape.coordinates;
						if (shape.shape_type === 'polygon') {
							layer = L.polygon(coordinates,{weight:1,draggable: false});
						} else if (shape.shape_type === 'rectangle') {
							layer = L.rectangle(coordinates,{weight:1,draggable: false});
						} else if(shape.shape_type === 'circlemarker'){
							layer = L.circleMarker(coordinates.center, {radius:coordinates.radius, weight:1,draggable: false});
						}
						layer.holderG = respJson.holderG;
						layer.shape_id = shape.shape_id;
						layer.on('click', async function(e) {
							let shape_id = shape.shape_id, 
								holderG = respJson.holderG;
							try {
								let response = await fetch(`/admin/index.php?mod=${mod}&act=get_pop
								&_leaflet_id=${layer._leaflet_id}&shape_id=${shape_id}&holderG=${holderG}
								&project_id=${project_id}&block_id=${block_id}&stock_type=${stock_type}
								&building_id=${building_id}`);
								let data = await response.text();
								layer.bindPopup(data, {minWidth:300}).openPopup();
							} catch (error){
								console.error("Error fetching popup content:", error);
							}
						});
						layer.on('dragend', function(e) {
							let shapes = $Core.project.shapes,
								shape_id = e.target.shape_id;
							if(shapes.length && !$Core.util.isEmpty(shape_id)){
								for (let i = 0; i < shapes.length; i++) {
									if(shape_id == shapes[i].shape_id){
										$Core.project.shapes[i]['coordinates'] = e.target._latlngs;
									}
								}
								// $('.btn_save_all').trigger('click');
							}
						});
						drawnItems.addLayer(layer);
					});
				}
			} catch (err) {
                console.error("Lỗi khi load hình:", err);
            }
		}
		drawControl = new L.Control.Draw({
			edit: {
				featureGroup: drawnItems,
				remove: true // Bật nút xóa
			},
			draw: {
				polyline: false,
				circle: false,
				marker: false,
				circlemarker : true,
			}
		});
		map.addControl(drawControl);
		// Xử lý khi người dùng vẽ xong
		map.on('draw:created', function (event) {
			var layer = event.layer,
				holderG = 'stock',
				shape_id = new Date().getTime(),
				shape_type = event.layerType;
			if(parseInt(block_id) == 0 && has_block == 1){
				holderG = 'block';
			}
			if (!layer) return;
			layer.holderG = holderG;
			layer.shape_id = shape_id;
			if(shape_type == 'circlemarker'){
				var radius = layer.getRadius(),
					center = layer.getLatLng(),
					coordinates = {center : center, 'radius':radius};
			} else {
				var coordinates = layer.getLatLngs()[0].map(function (latlng) {
					return [latlng.lat, latlng.lng]; // Đảm bảo đúng thứ tự
				});
			}
			$Core.project.shapes.push({shape_id, shape_type, coordinates, stock_id: 0});
			drawnItems.addLayer(layer);
			layer.on('click', async function(e) {
				let response = await fetch(`${path_ajax_script}/index.php?mod=${mod}&act=get_pop
					&_leaflet_id=${layer._leaflet_id}&shape_id=${shape_id}&holderG=${holderG}
					&stock_type=${stock_type}&project_id=${project_id}&block_id=${block_id}
					&building_id=${building_id}`);
				let data = await response.text();
				layer.bindPopup(data, {minWidth:300}).openPopup();
			});
		});
		map.on(L.Draw.Event.EDITED, (event) => {
			var shapes = $Core.project.shapes;
			event.layers.eachLayer((layer) => {
				for (let i = 0; i < shapes.length; i++) {
					if(layer.shape_id == shapes[i].shape_id){
						var shape_type = shapes[i].shape_type;
						if(shape_type == 'circlemarker'){
							var radius = layer.getRadius(),
								center = layer.getLatLng(),
								coordinates = {center : center, 'radius':radius};
						} else {
							var coordinates = layer.getLatLngs()[0].map(function (latlng) {
								return [latlng.lat, latlng.lng]; // Đảm bảo đúng thứ tự
							});
						}
						$Core.project.shapes[i]['coordinates'] = coordinates;
					}
				}	
			});
			// Lưu ở đây
			$('.btn_save_all').trigger('click');
		});
		map.on(L.Draw.Event.DELETED, (event) => {
			if (drawnItems.getLayers().length === 0){
				$Core.project.shapes = [];
			} else {
				event.layers.eachLayer((layer) =>  {
					$Core.project.shapes = $Core.project.shapes.filter(shape => shape.shape_id !== layer.shape_id);
					$('.btn_save_all').trigger('click');
				});
			}
		});
		// Hàm sửa hình
		window.edit_shape = function(_this, e) {
			var shape_id = $(_this).attr('shape_id'),
				_leaflet_id = $(_this).attr('_leaflet_id'),
				layer = drawnItems.getLayer(_leaflet_id);
			editHandler = new L.EditToolbar.Edit(map, {
				featureGroup: L.featureGroup([layer])
			});
			editHandler.enable();
			// layer.openPopup();
			$(`.js__edit_shape_${shape_id}`).after(`<button type="button" class="btn flex-fill btn-sm btn-default 
				js__update_shape_${shape_id}">Cập nhật sửa</button>`);
			$_document.on('click', `.js__update_shape_${shape_id}`, (e) => {
				e.preventDefault();
				// Tắt chỉnh sửa
				editHandler.disable(); 
				// Kích hoạt sự kiện EDITED
				map.fire(L.Draw.Event.EDITED, { layers: L.layerGroup([layer]) }); 
				layer.closePopup();
				setTimeout(() => {
					layer.openPopup()
				}, 300);
				return false;
			});	
		};
		window.copy_shape = function(_this, e){
			let shape_type = "polygon",
				shape_id = new Date().getTime(),
				holderG = $(_this).attr('holderG');
			let _leaflet_id = $(_this).attr('_leaflet_id'),
				_layer = drawnItems.getLayer(_leaflet_id);
			if(!_layer) return false;
			if (_layer instanceof L.Rectangle) {
				shape_type = "rectangle";
			} else if (_layer instanceof L.circleMarker) {
				shape_type = "circlemarker";
			}
			// Lấy tọa độ gốc
			let coordinates = _layer.getLatLngs()[0].map(latlng => 
				L.latLng(latlng.lat + 0, latlng.lng + 5) // Dịch chuyển vị trí mới
			);
			let newLayer;
			if(shape_type == 'polygon'){
				newLayer = L.polygon(coordinates, { color: 'yellow', draggable: true,});
			} else if(shape_type == 'rectangle') {
				newLayer = L.rectangle(coordinates, { color: 'yellow', draggable: true,});
			} else if(shape_type == 'circlemarker') {
				newLayer = L.circleMarker(coordinates, { color: 'yellow', draggable: true,});
			}
			$Core.project.shapes.push({shape_id, shape_type, coordinates, stock_id: 0});
			newLayer.holderG = holderG;
			newLayer.shape_id = shape_id;
			drawnItems.addLayer(newLayer);
			newLayer.on('click', async function(e) {
				let response = await fetch(`${path_ajax_script}/index.php?mod=${mod}&act=get_pop
					&_leaflet_id=${newLayer._leaflet_id}&shape_id=${shape_id}&holderG=${holderG}
					&project_id=${project_id}&block_id=${block_id}&stock_type=${stock_type}
					&building_id=${building_id}`),
					data = await response.text();
				newLayer.bindPopup(data, {minWidth:300}).openPopup();
			});
			newLayer.on('dragend', function(e) {
				let shapes = $Core.project.shapes,
					shape_id = e.target.shape_id;
				if(shapes.length && !$Core.util.isEmpty(shape_id)){
					for (let i = 0; i < shapes.length; i++) {
						if(shape_id == shapes[i].shape_id){
							$Core.project.shapes[i]['coordinates'] = e.target._latlngs;
						}
					}
					$('.btn_save_all').trigger('click');
				}
			});
			// Đóng Popup
			_layer.closePopup();
		};
		window.delete_shape = function (_this, e) {
			var shape_id = $(_this).attr('shape_id'),
				_leaflet_id = $(_this).attr('_leaflet_id'),
				layer = drawnItems.getLayer(_leaflet_id);
			drawnItems.removeLayer(layer);
			map.fire(L.Draw.Event.DELETED, { layers: L.layerGroup([layer]) }); 
		};
		window.add_stock = function(_this, e){
			e.preventDefault();
			var uid = $(_this).attr('uid'),
				shape_id = $(_this).attr('shape_id'),
				_leaflet_id = $(_this).attr('_leaflet_id'),
				project_id = $(_this).attr('project_id'),
				block_id = $(_this).attr('block_id'),
				stock_id = $(`input[name=stock_id][shape_id=${shape_id}]`).val(),
				stock_code = $(`input[name=stock_code][shape_id=${shape_id}]`).val();
			var direction = 'top';
			if($(`select[name=direction][shape_id=${shape_id}]`).length){
				direction = $(`select[name=direction][shape_id=${shape_id}]`).val();
			}
			if(!$Core.util.isEmpty(stock_id) && !$Core.util.isEmpty(stock_code)){
				$.each($Core.project.shapes, (_i, _shape) => {
					if(_shape.shape_id == shape_id){
						$Core.project.shapes[_i]['stock_id'] = stock_id;
						$Core.project.shapes[_i]['stock_code'] = stock_code;
						$Core.project.shapes[_i]['direction'] = direction;
						var layer = drawnItems.getLayer(_leaflet_id);
						layer.closePopup();
						$('.btn_save_all').trigger('click');
					}
				});
			} else {
				$(`input[uid=${uid}][shape_id=${shape_id}]`).focus();
			}
			return false;
		};
		window.add_block = function(_this, e){
			e.preventDefault();
			var shape_id = $(_this).attr('shape_id'),
				project_id = $(_this).attr('project_id'),
				_leaflet_id = $(_this).attr('_leaflet_id'),
				block_id = $(`select[name=block_id][shape_id=${shape_id}]`).val();
			if(!$Core.util.isEmpty(block_id)){
				$.each($Core.project.shapes, (_i, _shape) => {
					if(_shape.shape_id == shape_id){
						$Core.project.shapes[_i]['block_id'] = block_id;
						var layer = drawnItems.getLayer(_leaflet_id);
						layer.closePopup();
					}
				});
				$('.btn_save_all').trigger('click');
			} else {
				$(`select[name=block_id][shape_id=${shape_id}]`).focus();
			}
			return false;
		};
		window.do_copy = function(_this, e){
			var stock_id = $(_this).attr('stock_id'),
				stock_code = $(_this).attr('stock_code');
			if($('input[name=stock_code]:visible').length){
				var _wrapper = $('input[name=stock_code]:visible').closest('.leaflet-popup-content');
				$('input[name=stock_code]', _wrapper).val(stock_code);
				$('input[name=stock_id]', _wrapper).val(stock_id);
				$('.js__btn_add_stock',_wrapper).trigger('click');
			}
		}
	});	
<?php echo '</script'; ?>
>
<?php }
}
