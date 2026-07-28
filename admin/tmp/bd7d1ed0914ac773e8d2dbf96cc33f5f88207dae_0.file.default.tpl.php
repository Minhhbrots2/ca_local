<?php
/* Smarty version 3.1.33, created on 2026-02-23 19:16:50
  from '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/leasing/default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_699c45322a45a1_10043717',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd7d1ed0914ac773e8d2dbf96cc33f5f88207dae' => 
    array (
      0 => '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/leasing/default.tpl',
      1 => 1730083834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_699c45322a45a1_10043717 (Smarty_Internal_Template $_smarty_tpl) {
?><header class="ui-title-bar-container ui-title-bar-container--full-width">
	<div class="ui-title-bar">
		<div class="ui-title-bar__navigation">
			<div class="ui-breadcrumbs">
				<a class="btn btn-default ui-breadcrumb" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=home" title="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Setting');?>
">
					<?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('angle-left mr-5');?>

					<span class="ui-breadcrumb__item"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Home');?>
</span>
				</a>
			</div>
		</div>
	</div>
	<div class="ui-title-bar">
		<div class="ui-title-bar__main-group">
			<div class="ui-title-bar__heading-group">
				<h1 class="ui-title-bar__title">Bảng hàng cho thuê</h1>
			</div>
		</div>
		<div class="action-bar">
			<div class="ui-title-bar__mobile-primary-actions">
				<div class="ui-title-bar__actions">
					<a href="javascript:void(0)" onClick="$Core.global.open_setting(this, event)" mod_page="<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
" class="ui-button ui-button--transparent ui-title-bar__action">Cài đặt</a>
				</div>
			</div>
		</div>
	</div>
</header>
<div class="clearfix"></div>
<div class="ui-layout ui-layout--full-width">
	<div class="ui-layout__sections"><div class="ui-layout__section">
		<div class="ui-layout__item"><div class="ui-card">
			<div class="next-tab__container">
				<ul class="next-tab__list filter-tab-list">
					<li class="filter-tab-item" data-tab-index="1">
						<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
" class="filter-tab filter-tab-active show-all-items next-tab next-tab--is-active">Bảng hàng cho thuê</a>
					</li>
				</ul>
			</div>
			<div class="ui-card__section has-bulk-actions pages">
				<form method="post">
					<div class="form-search d-flex justify-content-between align-items-center">
						<div class="form-inline d-flex align-items-end">
							<div class="form-group d-flex flex-column mr-2 w-px-250">
								<label class="col-form-label mr-2">Từ khóa</label>
								<input type="text" class="form-control" name="keyword" value="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('search');?>
" />
							</div>
							<div class="form-group mr-2">
								<label class="col-form-label mr-2">Người đăng</label>
								<select name="user_id" class="form-control iso-select2">
									<option value="">Người đăng</option>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lstMember']->value, '_oMember');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oMember']->value) {
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['_oMember']->value['user_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['_oMember']->value['user_id'] == $_smarty_tpl->tpl_vars['user_id']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_oMember']->value['full_name'];?>
</option>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</select>
							</div>
							<div class="form-group mr-2">
								<label class="col-form-label mr-2">Tình trạng</label>
								<select name="type_list" class="form-control iso-select2">
									<option value="">Tình trạng</option>
									<option value="0" <?php if ($_smarty_tpl->tpl_vars['type_list']->value == "0") {?>selected<?php }?>>Chờ duyệt</option>
									<option value="1" <?php if ($_smarty_tpl->tpl_vars['type_list']->value == "1") {?>selected<?php }?>>Đã duyệt</option>
									<option value="2" <?php if ($_smarty_tpl->tpl_vars['type_list']->value == "2") {?>selected<?php }?>>Không duyệt</option>
								</select>
							</div>
							<div class="form-group mr-2">
								<label class="col-form-label mr-2">Cho thuê HOT</label>
								<select name="is_hot" class="form-control iso-select2">
									<option value="">Chọn</option>
									<option value="1" <?php if ($_smarty_tpl->tpl_vars['is_hot']->value == "1") {?>selected<?php }?>>Cho thuê HOT</option>
									<option value="0" <?php if ($_smarty_tpl->tpl_vars['is_hot']->value == "0") {?>selected<?php }?>>Không là cho thuê HOT</option>
								</select>
							</div>
							<input type="hidden" name="filter" value="filter" />
							<button type="submit" class="btn btn-success"><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('search','Search');?>
</button>
						</div>
						<div class="btn-group d-flex">
							<button type="button" class="btn btn-primary do_action d-none" data-action="approve_multi" onClick="$Core.leasing.approve_leasing(this, event);"><i class="fa fa-check" aria-hidden="true"></i> Duyệt</button>
							<button type="button" class="btn btn-danger do_action d-none" data-action="noapprove_multi" onClick="$Core.leasing.show_notes(this,event)"><i class="fa fa-times" aria-hidden="true"></i> Không duyệt</button>
						</div>
					</div>
					<div class="hastable">
						<div class="freeze-table dragscroll">
							<table id="tableCall" cellspacing="0" class="table table-vertical table-striped" cellpadding="0" width="100%">
								<thead><tr>
									<th class="text-left">
										<div class="checkbox">
											<input type="checkbox" class="checkAll" />
											<label></label>
										</div>
									</th>
									<th class="text-left" width="3%">No.</th>
									<th class="text-left border-end" width="10%">Mã căn</th>
									<th class="text-left" width="10%">Giá full VAT</th>
									<th class="text-left" width="10%">Loại căn</th>
									<th class="text-left">Người liên hệ</th>
									<th class="text-left">Tình trạng</th>
									<th class="text-left" width="3%">HOT</th>
									<th class="text-left" width="6%">Trạng thái</th>
									<th class="text-left" width="6%">Xác minh</th>
									<th class="text-left" width="10%">Ngày tạo</th>
									<th width="45px"></th>
								</tr></thead>
								<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['allItem']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $__section_i_0_total; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['last'] = ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] === $__section_i_0_total);
?>
									<?php $_smarty_tpl->_assignInScope('more_information', $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['more_information']);?>
								<tr<?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['status_id'] == @constant('_STATUS_STAFF_OFF_ID')) {?> class="tr_Off"<?php }?>>
									<td width="40px">
										<div class="checkbox">
											<input type="checkbox" class="checkitem leasing_item" value="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['leasing_id'];?>
" />
											<label></label>
										</div>
									</td>
									<td><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null);?>
</td> 
									<td class="border-end"><a class="fw-bold" href="<?php echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getLink($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['leasing_id'],$_smarty_tpl->tpl_vars['more_information']->value['stock_code']);?>
" target="_blank" stock_id="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['stock_id'];?>
" leasing_id="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['leasing_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['stock_code'];
if ($_smarty_tpl->tpl_vars['more_information']->value['having_dq'] == 1) {?> <span class="bg-danger text-danger px-2 rounded-2">ĐQ</span><?php }?></a></td>
									<td><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->priceFormat($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price']);?>
</td>
									<td>
										<?php if (!empty($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['bedroom']) || !empty($_smarty_tpl->tpl_vars['more_information']->value['bedroom_num'])) {?>
											<?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['bedroom']) {
echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['bedroom'];
} else {
echo $_smarty_tpl->tpl_vars['more_information']->value['bedroom_num'];?>
PN<?php }?>
										<?php } else { ?>
											-
										<?php }?>
										<?php if (!empty($_smarty_tpl->tpl_vars['more_information']->value['DT_TT'])) {?>
											/<?php echo $_smarty_tpl->tpl_vars['more_information']->value['DT_TT'];?>
<span class="text-muted">m<sup>2</sup></span>
										<?php } else { ?>
											-
										<?php }?>
									</td>
									<td><?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['contact_name'];?>
 / <span class="d-inline-block px-2 py-1 border radius-half"><?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['contact_phone'];?>
</span></td>
									<td><?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_locked'] == 0 && $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_solded'] == 0) {?>
											Đang mở cho thuê
										<?php } else { ?>
											<?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_solded'] == 1) {?>Đã cho thuê 
											<?php } else { ?>Đã khoá<?php }?>
										<?php }?>
									</td>
									<td class="text-center bg-gray">
										<a href="javascript:void(0);" class="SiteClickPublic" clsTable="Leasing" pkey="<?php echo $_smarty_tpl->tpl_vars['pkeyTable']->value;?>
" 
										   sourse_id="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)][$_smarty_tpl->tpl_vars['pkeyTable']->value];?>
" rel="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_hot'];?>
" toField="is_hot">
											<?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_hot'] == '1') {?>
											<i class="fa fa-check-circle green"></i>
											<?php } else { ?>
											<i class="fa fa-minus-circle red"></i>
											<?php }?>
										</a>
									</td>
									<td><?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_online'] == 2) {?>
											<span style="color: #BC2A4D">Không duyệt</span>
										<?php } elseif ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_online'] == 1) {?>
											<span style="color:#368AD2">Đã duyệt</span>
										<?php } else { ?>
											<span style="color:#f0ad4e">Chờ duyệt</span>
										<?php }?>
									</td>
									<td class="text-center">
										<label class="switch">
										  <input type="checkbox" onChange="$Core.leasing.verified(this, event)" 
											leasing_id="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['leasing_id'];?>
"<?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_verified'] == '1') {?> checked="checked"<?php }?> value="1" />
										  <span class="slider round"></span>
										</label>
									</td>
									<td class="text-left">
										<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->convertTimeToText($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reg_date'],true);?>

									</td>
									<td class="text-center" style="white-space: nowrap;">
										<div class="btn-group<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['last'] : null)) {?> dropup<?php }?>">
											<button class="btn btn-xs btn-default dropdown-toggle" type="button" data-toggle="dropdown">
												<?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('cog');?>
 <span class="caret"></span>
											</button>
											<ul class="dropdown-menu" style="right:0;left: unset;min-width: 100px;">
												<li <?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_online'] == 1) {?> style="display: none"<?php }?>><a title="Duyệt" data-action="approve" href="javascript:void(0)" data-leasing_id="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['leasing_id'];?>
" onClick="$Core.leasing.approve_leasing(this,event)">
													<?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('check','Duyệt');?>
</a>
												</li>
												<li <?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_online'] == 2) {?> style="display: none"<?php }?>><a title="Huỷ duyệt" data-action="noapprove" data-leasing_id="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['leasing_id'];?>
" href="javascript:void(0)" onClick="$Core.leasing.show_notes(this,event)">
													<?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('close','Không duyệt');?>
</a>
												</li>
												<li <?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_online'] == 0 || $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_online'] == 2) {?> style="display: none"<?php }?>><a title="Huỷ duyệt" data-action="unapprove" data-leasing_id="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['leasing_id'];?>
" href="javascript:void(0)" onClick="$Core.leasing.approve_leasing(this,event)">
													<?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('refresh','Huỷ duyệt');?>
</a>
												</li>
												<li><a title="Xoá" data-action="unapprove" data-leasing_id="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['leasing_id'];?>
" href="javascript:void(0)" onClick="delete_leasing(this,event)"> 
													<?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('minus','Xoá');?>
</a>
												</li>
											</ul>
										</div>
									</td>
								</tr>
								<?php
}
}
?>
							</table>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="d-flex justify-content-center">
						<ul class="pagination">
							<?php echo $_smarty_tpl->tpl_vars['html_pager']->value;?>

						</ul>
					</div>
				</form>
			</div></div>
		</div></div>
	</div>
</div>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL_VIEWS']->value;?>
/leasing/js/jquery.leasing.js?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
"><?php echo '</script'; ?>
>
<?php }
}
