<?php
/* Smarty version 3.1.33, created on 2026-07-25 20:44:08
  from '/www/wwwroot/skyrealty.c-a.vn/admin/application/views/stock/_ajax.open_stock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a64bda8b81bb2_05080813',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23418c72fd682998b3bbbd9533dafca57df1e6e1' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/admin/application/views/stock/_ajax.open_stock.tpl',
      1 => 1783314598,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a64bda8b81bb2_05080813 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-dialog modal-ipad">
	<div class="modal-content">
		<div class="modal-header"> 
			<a href="javascript:void();" class="closeEv close_pop close"><span>×</span></a> 
			<h3 class="modal-title"><strong><?php echo $_smarty_tpl->tpl_vars['titlePgae']->value;?>
</strong></h3>
		</div>
		<form method="post" action="" enctype="multipart/form-data">
			<div class="modal-body">
				<ul class="nav nav-tabs nav-tabs-bordered" id="myTab" role="tablist">
					<li class="nav-item active">
						<a href="#properties" class="nav-link" data-toggle="tab" role="tab">
							<span><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('cube','Thuộc tính');?>
</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="#content" class="nav-link" data-toggle="tab" role="tab">
							<span><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('plug','Phiếu tính giá');?>
</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="#history" class="nav-link" data-toggle="tab" role="tab">
							<span><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('history','Lịch sử');?>
</span>
						</a>
					</li>
				</ul>
				<div class="tab-content" id="myTabContent">
					<div id="properties" class="tab-pane fade py-3 active in" role="tabpanel">
						<table class="table table-striped vertical-center mb-2">
							<thead><tr>
								<th class="text-left" width="25%">Tiêu đề</th>
								<th class="text-left">Nội dung</th>
								<th width="40px"></th>
							</tr></thead>
							<tbody class="holder_property_<?php echo $_smarty_tpl->tpl_vars['stock_id']->value;?>
 no_group">
								<?php if (!empty($_smarty_tpl->tpl_vars['list_property']->value)) {?>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_property']->value, '_oT', false, 'uid');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['uid']->value => $_smarty_tpl->tpl_vars['_oT']->value) {
?>
									<tr class="tr_stock_line_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
 tr_stock_line_<?php echo $_smarty_tpl->tpl_vars['stock_id']->value;?>
">
										<td class="text-left">
											<input type="text" placeholder="Nhập tiêu đề" maxlength="255" name="properties[<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
][title]" value="<?php echo $_smarty_tpl->tpl_vars['_oT']->value['title'];?>
" class="form-control" />
										</td>
										<td class="text-left">
											<input type="text" placeholder="Nhập giá trị" maxlength="255" name="properties[<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
][content]" value="<?php echo $_smarty_tpl->tpl_vars['_oT']->value['content'];?>
" class="form-control" />
										</td>
										<td class="text-center">
											<button type="button" onClick="$Core.stock.delete_stock_line(this, event)" stock_id="<?php echo $_smarty_tpl->tpl_vars['stock_id']->value;?>
" uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" class="btn py-px-9 btn-default"><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('trash');?>
</button>
										</td>
									</tr>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								<?php } else { ?>
									<?php $_smarty_tpl->_assignInScope('uid', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>
									<tr class="tr_stock_line_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
 tr_stock_line_<?php echo $_smarty_tpl->tpl_vars['stock_id']->value;?>
">
										<td class="text-left">
											<input type="text" placeholder="Nhập tiêu đề" maxlength="255" name="properties[<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
][title]" class="form-control" />
										</td>
										<td class="text-left">
											<input type="text" placeholder="Nhập giá trị" maxlength="255" name="properties[<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
][content]" class="form-control" />
										</td>
										<td class="text-center"></td>
									</tr>
								<?php }?>
							</tbody>
						</table>
						<div class="d-flex">
							<button type="button" onClick="$Core.stock.add_stock_line(this, event)" stock_id="<?php echo $_smarty_tpl->tpl_vars['stock_id']->value;?>
" 
							class="btn btn-default">+ Thêm dòng</button>
						</div>
						<div class="modal-footer px-0">
							<div class="w-100 d-flex align-items-center justify-content-between">
								<div class="d-flex align-items-center ml-half">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_website']->value, '_oW');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oW']->value) {
?>
									<div class="checkbox mt-0 mr-3">
										<input type="checkbox"<?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkItemInArray($_smarty_tpl->tpl_vars['_oW']->value,$_smarty_tpl->tpl_vars['show_website_arrs']->value)) {?> checked<?php }?> 
										name="show_website[]" value="<?php echo $_smarty_tpl->tpl_vars['_oW']->value;?>
" stock_id="<?php echo $_smarty_tpl->tpl_vars['stock_id']->value;?>
" class="cb_stock_site" onchange="$Core.stock.toggle_site(this, event)" />
										<label><?php echo $_smarty_tpl->tpl_vars['_oW']->value;?>
</label>
									</div>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									<div class="checkbox mt-0 mr-3">
										<input type="checkbox" name="markup_price"<?php if (isset($_smarty_tpl->tpl_vars['more_information']->value['markup_price']) && $_smarty_tpl->tpl_vars['more_information']->value['markup_price'] == '1') {?> checked<?php }?> value="1" />
										<label>Có ++ hoa hồng</label>
									</div>
								</div>
								<div class="group_buttons">
									<button type="button" onClick="pop_save_stock(this, event)" stock_id="<?php echo $_smarty_tpl->tpl_vars['stock_id']->value;?>
" 
									class="btn btn-success"><span>Lưu lại</span></button>
									<button type="button" class="btn btn-default mr-half pull-right" data-dismiss="modal">
										<span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Close');?>
</span>
									</button>
								</div>
							</div>
						</div>
					</div>
					<div id="content" class="tab-pane fade py-3" role="tabpanel">
						<table class="table mb-2">
							<thead><tr>
								<th class="text-left" width="25%">Ngày</th>
								<th class="text-left">Số phiên bản</th>
								<th width="90px"></th>
							</tr></thead>
							<tbody class="holder_stock_price_<?php echo $_smarty_tpl->tpl_vars['stock_id']->value;?>
">
								<tr>
									<td colspan="3">Loading...</td>
								</tr>
							</tbody>
						</table>
						<div class="modal-footer px-0">
							<button type="button" onClick="open_stock_price(this, event)" stock_id="<?php echo $_smarty_tpl->tpl_vars['stock_id']->value;?>
" class="btn mr-half btn-default">+ Phiếu tính giá</button>
						</div>
					</div>
					<div id="history" class="tab-pane fade py-3" role="tabpanel">
						<table class="table" width="100%">
							<thead><tr>
								<th width="25%">Ngày thay đổi</th>
								<th>Người thay đổi</th>
								<th>Nội dung</th>
							</tr></thead>
							<?php if (!empty($_smarty_tpl->tpl_vars['list_logs']->value)) {?>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_logs']->value, '_oLog');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oLog']->value) {
?>
								<tr>
									<td><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->convertTimeToText($_smarty_tpl->tpl_vars['_oLog']->value['reg_date'],true);?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['_oLog']->value['full_name'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['clsStock']->value->getContentLog($_smarty_tpl->tpl_vars['_oLog']->value);?>
</td>
								</tr>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							<?php } else { ?>
								<tr>
									<td class="text-center" colspan="4">
										<img src="<?php echo @constant('_IMG_NODOCUMENT');?>
" width="40px" />
										<p>Không có bất kỳ lịch sử giá nào !</p>
									</td>
								</tr>
							<?php }?>
						</table>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>

<style type="text/css">
	.py-px-9{
		padding-top:9px;
		padding-bottom:9px;
	}
	.modal-footer.px-0{
		width:calc(100% + 30px);
		margin-left:-15px;
		margin-bottom:-15px;
	}
</style>
<?php }
}
