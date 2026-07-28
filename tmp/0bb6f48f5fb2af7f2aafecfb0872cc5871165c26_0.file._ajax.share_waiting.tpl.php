<?php
/* Smarty version 3.1.33, created on 2026-07-14 00:47:24
  from '/www/wwwroot/skyrealty.c-a.vn/application/views/home/_ajax.share_waiting.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a5524aca00f93_56181852',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0bb6f48f5fb2af7f2aafecfb0872cc5871165c26' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/views/home/_ajax.share_waiting.tpl',
      1 => 1783308695,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a5524aca00f93_56181852 (Smarty_Internal_Template $_smarty_tpl) {
if (!empty($_smarty_tpl->tpl_vars['is_report']->value)) {?>

	<div class="modal right fade show" id="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" role="dialog">

		<div class="modal-dialog">

			<div class="modal-content">

				<div class="modal-header">

					<h5 class="modal-title text-main">Báo cáo tiếp khách chờ duyệt</h5>

					<button type="button" class="btn-close close_pop" data-bs-dismiss="modal" aria-label="Close"></button>

				</div>

				<div class="modal-body">

					<?php if (!empty($_smarty_tpl->tpl_vars['list_shares']->value)) {?>

						<ul class="p-0 m-0 p-0 m-0 overflow-y-auto" style="max-height: calc(100vh - 100px)">

							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_shares']->value, '_oItem', false, 'key', 'i', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['_oItem']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['total'];
?>

								<li class="d-flex cursor-pointer pb-2 align-items-center p-2 bg-lighter rounded-2 share_item_<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['share_id'];?>
 <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['last'] : null)) {?> mb-2<?php }?>" onclick="$Core.global.share.open_share(this,event)" share_id="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['share_id'];?>
" >

									<div class="avatar mt-1 avatar-sm position-relative flex-shrink-0 me-2" data-trigger="hover" data-width="300" data-url="/index.php?mod=home&act=load_profile_popover&user_id=<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['user_id'];?>
" data-toggle="webui-popover" >

										<img src="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['db_profile']['avatar'];?>
" onerror="this.src='<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/no-avatar.jpg'" alt="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['db_profile']['name'];?>
" class="rounded-pill" />

										<?php echo $_smarty_tpl->tpl_vars['clsProfile']->value->get_icon_verified($_smarty_tpl->tpl_vars['_oItem']->value['user_id'],$_smarty_tpl->tpl_vars['_oItem']->value['db_profile']['more_information']);?>


									</div>

									<div class="w-100">

										<div class="d-flex w-100 flex-wrap align-items-center justify-content-between mb-1">

											<small class="text-muted d-block"><?php echo $_smarty_tpl->tpl_vars['_oItem']->value['db_profile']['name'];?>
 • <?php echo $_smarty_tpl->tpl_vars['_oItem']->value['db_profile']['role'];?>
-<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['db_profile']['more_information']['department_name'];?>
</small>

										</div>

										<h6 class="mb-0 limit_1line"><?php echo $_smarty_tpl->tpl_vars['_oItem']->value['title'];?>
</h6>

									</div>

									<a href="javascript:void(0)" class="text-link"><i class="bx bx-link-external text-fs-14"></i></a>

								</li>

							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

						</ul>

					<?php } else { ?>

						<div class="mt-3">

							<div class="p-5">

								<div class="text-center">

									<img class="mb-2" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAE0AAABqCAIAAAB2wktpAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyBpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBXaW5kb3dzIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkY0RTUxMzM1OEZBQTExRThBOUQxQjhGNDMzNjRGM0JDIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkY0RTUxMzM2OEZBQTExRThBOUQxQjhGNDMzNjRGM0JDIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6RjRFNTEzMzM4RkFBMTFFOEE5RDFCOEY0MzM2NEYzQkMiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6RjRFNTEzMzQ4RkFBMTFFOEE5RDFCOEY0MzM2NEYzQkMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz6dXDCjAAAD+ElEQVR42uycC0/aUBTHaSm1iI6HlJfR4URnNDoU39F9fDcQhOjMHo4Z5SXjIaUKqDx21C0xxUkbq97Wc0JI7k1J+NH/edx7T6FEUby4uNiOxgWhatCCURS1MD/n8bgVfYputVrhSEwrkGCdTiee2CuVyso4fyYPRfHMoClrt9vRWELR16aPjlIGDVqz2Yxs79TrdZnXM1dXV3fHNpt1aMhBGhXcDACTTDYajXA4tr6+zLJsb07JOPhh1mLpJ40zm811c4Kd12oQQVdXFo1GYw/dSsc0rS0BVypCPLELHquMU4uWzxd2d/d1yAkpVDKTyea+fT/QG+eYf3RwYEAymUwePpA7NMkJAXZ5eYHjOMn8l/2vcGN15Z8Auby0wDDSfAGOem+ppOE4NDg4sBgKSjLK/0olbcdbKGnmg3OSsASZ9nM4CqlVV3nF7eZnZqYkk5eXl9uRHXjXVf58OzoSCLy7t1SC1Zh+OMHeTwaAtrtUikbjt6USo0UquFfFYqlLwC6YlLhlsVSGCBwMzmqSM5XKwEvmxZBROTOnE90+bFAqvQpOzcSh7mpWn5zT01OPXP1rIw4B5MfN9YpQbf/Lhw8bVAjxxJ72OG83Ohx2m8yL6/WGDvcT9OOfyKl2HCqXT3O5fLvTJmVF5nD4fB6VOaFoDEdiPfcOn9OOj9MMY3S5eDV1WxVEoiD/Suy0orJ/2u3W7p2YlzWKonjeqbJuOY7b2FgF/7x38/9FcqmLd9psVvXjkKW/PzA+hnkFOZETOZETOZET1yvddpL/nUplCKlyKcrA8/yYf1RlzqooxmIJou5PoVDqY00+n1dN3Z6f1wiUYlVRP5jMRS3H9ZEVV2jaq6SVUZZuWda0ubEGUmnJ21Z8ege9/ukV7ejKjUMsyw4Pew2aNcyfyImcyImcyPkSdTxU8PKPH5/BrNY3JpNJZc5ms7m1FRHPCHosAkq09bUV+SWRLN0WS2WiIA3XJ9ZX6UxWZf/sk/FAwfObuav/9rG6tdttM9NTqXSGqHOHkZFh9eOQ3z/qV7J+x7yCnMiJnMiJnMj5etYrlYqQzeZaxHTX8LzT43apzFmr1T993iatT2ppacElu7VGlm4rgkBin1T5VGX/hDqe6fVg8AtI1zmksm7NN31SmewJKeeCN/7pcNjVj0MWi2VyYhzzCnIiJ3IiJ3IiJ3IiJ3IiJ3IiJ3IiJ3IiJ3IiJ3IiJ3I+NWdHF1xSCul+/MHBL0XPd5NphUJRyknT9N1Tk1Q6Ay+didZopGmf16N75/R6PPTkZIBlTTqGZFkWGGmzmQuF5vWKClyhUBAYKVEUYVxvNA5+JHMnpPwTxOONYRiv1z0xMX7bvvpHgAEAO0R+YvoBo4cAAAAASUVORK5CYII=" width="40px">

									<p>Không có bất kỳ hoạt động nào<br> với khách hàng này</p><p>

								</p></div>

							</div>

						</div>

					<?php }?>

				</div>

			</div>

		</div>

	</div>

<?php } else { ?>

	<?php if (!empty($_smarty_tpl->tpl_vars['list_shares']->value)) {?>

		<div class="card mb-2">

			<div class="card-header d-flex justify-content-between align-items-center">

				<h5 class="card-title m-1 me-2">Báo cáo tiếp khách chờ xác thực</h5>

				<span class="">Tổng <strong class="text-main fw-bold"><?php echo $_smarty_tpl->tpl_vars['total_record']->value;?>
</strong></span>

			</div>

			<div class="card-body">

				<ul class="p-0 m-0 p-0 m-0 overflow-y-auto" style="max-height: 300px">

					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_shares']->value, '_oItem', false, 'key', 'i', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['_oItem']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['total'];
?>

						<li class="d-flex cursor-pointer pb-2 align-items-center p-2 bg-lighter rounded-2 <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['last'] : null)) {?> mb-2<?php }?>" onclick="$Core.share.open_share(this,event)" share_id="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['share_id'];?>
" >

							<div class="avatar mt-1 avatar-sm position-relative flex-shrink-0 me-2" data-trigger="hover" data-width="300" data-url="/index.php?mod=home&act=load_profile_popover&user_id=<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['user_id'];?>
" data-toggle="webui-popover" >

								<img src="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['db_profile']['avatar'];?>
" onerror="this.src='<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/no-avatar.jpg'" alt="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['db_profile']['name'];?>
" class="rounded-pill" />

								<?php echo $_smarty_tpl->tpl_vars['clsProfile']->value->get_icon_verified($_smarty_tpl->tpl_vars['_oItem']->value['user_id'],$_smarty_tpl->tpl_vars['_oItem']->value['db_profile']['more_information']);?>


							</div>

							<div class="w-100">

								<div class="d-flex w-100 flex-wrap align-items-center justify-content-between mb-1">

									<small class="text-muted d-block"><?php echo $_smarty_tpl->tpl_vars['_oItem']->value['db_profile']['name'];?>
 • <?php echo $_smarty_tpl->tpl_vars['_oItem']->value['db_profile']['role'];?>
-<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['db_profile']['more_information']['department_name'];?>
</small>

								</div>

								<h6 class="mb-0 limit_1line"><?php echo $_smarty_tpl->tpl_vars['_oItem']->value['title'];?>
</h6>

							</div>

							<a href="javascript:void(0)" class="text-link"><i class="bx bx-link-external text-fs-14"></i></a>

						</li>

						<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration'] : null) == 10) {
break 1;
}?>

					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

				</ul>

			</div>

		</div>	

	<?php }?>

<?php }?>

<?php }
}
