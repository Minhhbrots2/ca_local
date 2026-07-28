<?php
/* Smarty version 3.1.33, created on 2026-06-10 15:07:37
  from '/www/wwwroot/ca.futurehomes.vn/admin/application/views/order/default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a291b4972c3d1_40687620',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38d311943f31b88718d9738aae140793543825e4' => 
    array (
      0 => '/www/wwwroot/ca.futurehomes.vn/admin/application/views/order/default.tpl',
      1 => 1780937014,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a291b4972c3d1_40687620 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/www/wwwroot/ca.futurehomes.vn/core/smarty/plugins/function.cycle.php','function'=>'smarty_function_cycle',),));
?>
<div class="ui-title-bar-container ui-title-bar-container--full-width">

	<div class="ui-title-bar">

		<div class="ui-title-bar__main-group">

			<div class="ui-title-bar__heading-group">

				<h1 class="ui-title-bar__title w-100">Thanh toán gói dịch vụ My Ocean City</h1>

				<p class="type--subdued"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('This system allows you to manage & edit static pages in Systems');?>
</p>

			</div>

		</div>

	</div>

</div>

<div class="ui-layout ui-layout--full-width">

	<div class="ui-layout__sections">

		<div class="ui-layout__section">

			<div class="ui-layout__item">

				<div class="ui-card">

					<div class="next-tab__container">

						<ul class="next-tab__list filter-tab-list">

							<li class="filter-tab-item" data-tab-index="1">

								<a class="filter-tab filter-tab-active show-all-items next-tab next-tab--is-active">

                                    <?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('AllPages');?>


                                </a>

							</li>

						</ul>

					</div>

					<div class="ui-card__section has-bulk-actions pages">

						<form method="post">

							<div class="form-search radius-4 form-inline">

								<div class="form-group">

									<input type="text" class="form-control" name="keyword" value="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('search');?>
" />

								</div>

								<input type="hidden" name="filter" value="filter" />

								<button type="submit" class="btn btn-success"><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('search','Search');?>
</button>

								<div class="form-group pull-right">

									<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&status=1<?php echo $_smarty_tpl->tpl_vars['pUrl2']->value;?>
" class="btn text-white btn-success">

										<i class="icon-folder-open icon-white"></i> 

										<span>Đã thanh toán (<?php echo $_smarty_tpl->tpl_vars['total_active']->value;?>
)</span>

									</a>

									<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&status=0<?php echo $_smarty_tpl->tpl_vars['pUrl2']->value;?>
" class="btn text-white btn-warning">

										<i class="icon-folder-open icon-white"></i> 

										<span>Chưa thanh toán (<?php echo $_smarty_tpl->tpl_vars['total_noactive']->value;?>
)</span>

									</a>

									<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&status=2<?php echo $_smarty_tpl->tpl_vars['pUrl2']->value;?>
" class="btn text-white btn-danger">

										<i class="icon-folder-open icon-white"></i> 

										<span>Đã huỷ (<?php echo $_smarty_tpl->tpl_vars['total_cancel']->value;?>
)</span>

									</a>

									<a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;
echo $_smarty_tpl->tpl_vars['pUrl2']->value;?>
" class="btn btn-default">

										<i class="icon-folder-open"></i> 

										<span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('all');?>
 (<?php echo $_smarty_tpl->tpl_vars['total_all']->value;?>
)</span>

									</a>

									<a href="javascript:void(0)" clsTable="Order" class="btn btn-danger text-white btn-delete-all" style="display:none"> 

                           				<i class="icon-remove icon-white"></i> 

                           				<span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Delete');?>
</span> 

                           			</a>

								</div>

							</div>

							<div class="hastable">

								<table class="table mb-0 table-striped" cellspacing="0" cellpadding="0" width="100%">

									<thead><tr>

										<th width="3%" class="text-center">

											<div class="checkbox">

												<input type="checkbox" id="check_all" class="check_all styled" value="1" />

												<label></label>

											</div>

										</th>

										<th class="text-left" width="15%">Mã thanh toán</th> 

										<th class="text-left">Tài khoản</th>

										<th class="text-left" width="200">Gói dịch vụ</th> 

										<th class="text-left" width="150">Tiền</th> 

										<th class="text-left" width="150">Tình trạng</th> 

										<th class="text-left" width="6%">Trạng thái</th>

										<th class="text-left" width="150">Thời gian tạo</th>

										<th class="text-left" width="150">Thời gian thanh toán</th>

										<th class="text-center" width="40px">Action</th>

									</tr></thead>

									<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['allItem']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>

									<tr class="<?php echo smarty_function_cycle(array('values'=>"row1,row2"),$_smarty_tpl);?>
">

										<td class="text-center">

											<div class="checkbox">

												<input type="checkbox" name="p_key[]" class="chkitem styled" value="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['order_id'];?>
" />

												<label></label>

											</div>

										</td>

										<td class="text-left"><?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['order_code'];?>
</a>

                                        </td>

										<td class="text-left">

											<div class="">

												<p class="mb-1">(ID: <?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['profile_id'];?>
) <strong><?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['member_name'];?>
</strong></p>

												<p class="mb-1"><i class="fa fa-envelope-o mr-2" aria-hidden="true"></i><?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['member_email'];?>
</p>

												<p class="mb-0"><i class="fa fa-phone mr-2" aria-hidden="true"></i><?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['member_phone'];?>
</p>

											</div>

										</td>

										<td class="text-left"><?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['package_name'];?>
 - <?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['time_package'];?>
</a>

										<td class="text-left"><span class="text-danger"><?php echo $_smarty_tpl->tpl_vars['clsISO']->value->formatPrice($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['amount']);?>
đ</span></td>

										<td class="text-left txt_status">

											<?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_cancel']) {?>

											<span class="text-danger">Đã hủy</span>

											<?php } elseif ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['status'] == 0) {?>

											<span class="text-warning">Đang chờ</span>

											<?php } else { ?>											

											<span class="text-success">Đã thanh toán</span>

											<?php }?>

										</td>

										<td class="text-center bg-gray">

											<?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['is_cancel']) {?>

											--

											<?php } else { ?>

												<label class="switch">

												  <input type="checkbox" onchange="$Core.order.updateStatus(this, event)" order_id="<?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['order_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['status'] == 1) {?>checked<?php }?> value="1" <?php if ($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['status'] == 1) {?>disabled <?php }?>>

												  <span class="slider round"></span>

												</label>

											<?php }?>

											

											

										</td>

										<td class="text-left"><?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['time_order'];?>
</td>

										<td class="text-left txt_status_date"><?php echo $_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['time_payment'];?>
</td>

										<td class="text-center" style="white-space: nowrap;">

											<div class="btn-group dropdown">

												<button class="btn iso-button-standard dropdown-toggle" type="button" data-toggle="dropdown">

													<i class="icon-cog"></i> 

													<span class="caret"></span>

												</button>

												<ul class="dropdown-menu" style="right:0px !important; left:auto">

													<li><a href="<?php echo @constant('MYOCEAN_URL');
echo $_smarty_tpl->tpl_vars['clsClassTable']->value->getLinkOrder($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['order_id'],$_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
" target="_blank"><i class="icon-eye-open"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('view');?>
</span></a></li>

													<li><a class="confirm_delete" href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=delete&order_id=<?php echo $_smarty_tpl->tpl_vars['core']->value->encryptID($_smarty_tpl->tpl_vars['allItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['order_id']);
echo $_smarty_tpl->tpl_vars['pUrl']->value;?>
"><i class="icon-remove"></i> <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('delete');?>
</span></a></li>

												</ul>

											</div>

										</td>

									</tr>

									<?php
}
}
?>

								</table>

								<div class="d-flex justify-content-center">

									<ul class="pagination">

										<?php echo $_smarty_tpl->tpl_vars['html_pager']->value;?>


									</ul>

								</div>

							</div>

						</form>

					</div>

				</div>

			</div>

		</div>

	</div>

</div><?php }
}
