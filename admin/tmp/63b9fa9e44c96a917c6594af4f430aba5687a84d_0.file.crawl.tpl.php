<?php
/* Smarty version 3.1.33, created on 2026-07-08 17:17:48
  from '/www/wwwroot/skyrealty.c-a.vn/admin/application/views/crawl/crawl.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a4e23cc72b521_07208320',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63b9fa9e44c96a917c6594af4f430aba5687a84d' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/admin/application/views/crawl/crawl.tpl',
      1 => 1783314571,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a4e23cc72b521_07208320 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="ui-title-bar-container ui-title-bar-container--full-width">

	<div class="ui-title-bar">

		<div class="ui-title-bar__main-group">

			<div class="ui-title-bar__heading-group">

				<h1 class="ui-title-bar__title w-100">Danh sách đại lý cập nhật cao tầng</h1>

				<p class="type--subdued mb-0"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('This system allows you to manage & edit static pages in Systems');?>
</p>

			</div>

		</div>

		<button title="Hướng dẫn sử dụng" onclick="$Core.crawl.open_help(this, event)" data-type="highfloor" data-toggle="ripple" class="btn btn-icon btn-outline-default"><i class="fa fa-info-circle" style="font-size:24px"></i></button>

	</div>

</div>

<div class="ui-layout ui-layout--full-width">

	<div class="ui-layout__sections"><div class="ui-layout__section">

		<div class="ui-layout__item"><div class="ui-card">

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

				<div class="freeze-table dragscroll" style="overflow-x: scroll; width:100%;">

					<table id="tableCall" cellspacing="0" class="table table-vertical table-striped no-maxwidth" width="100%">

						<thead><tr>

							<th class="align-center text-right align-center" width="60px" rowspan="2"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Actions');?>
</th>

							<th class="align-center text-left" rowspan="2">Tiêu đề</th>

							<th class="align-center text-center" width="" colspan="<?php echo count($_smarty_tpl->tpl_vars['list_blocks']->value);?>
">Phân khu</th>

						</tr>

						<tr>

							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_blocks']->value, '_block_name');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_block_name']->value) {
?>

							<th class="text-center" width=""><?php echo $_smarty_tpl->tpl_vars['_block_name']->value;?>
</th>

							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

						</tr></thead>

						<tbody>

						<?php if (!empty($_smarty_tpl->tpl_vars['list_agency']->value)) {?>

							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_agency']->value, '_oItem', false, NULL, 'i', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oItem']->value) {
?>

								<?php $_smarty_tpl->_assignInScope('block_crawl', $_smarty_tpl->tpl_vars['_oItem']->value['block_crawl']);?>

								<?php $_smarty_tpl->_assignInScope('more_information', $_smarty_tpl->tpl_vars['_oItem']->value['more_information']);?>

								<?php if (!empty($_smarty_tpl->tpl_vars['more_information']->value['spreadsheetId'])) {?>

								<tr class="tr_agency tr_agency_<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['property_id'];?>
">

									<td class="text-center" data-label="<?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Actions');?>
">

										<button class="btn btn-icon btn-default" onClick="$Core.crawl.open_agency(this,event)" stock_type="<?php echo @constant('_BLOCK_TYPE_HIGHLEVEL_SALE');?>
" class="btn btn-default" agency_id="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['property_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('pencil');?>
</button>

									</td>

									<td class="text-nowrap" data-label="Tiêu đề"><?php echo $_smarty_tpl->tpl_vars['_oItem']->value['title'];?>
</td>

									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_blocks']->value, '_block_name', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['_block_name']->value) {
?>

									<td class="text-center">

										<label class="switch">

											<input type="checkbox" onchange="$Core.crawl.handle_status(this, event)" stock_type="<?php echo @constant('_BLOCK_TYPE_HIGHLEVEL_SALE');?>
" project_id="" block_id="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" agency_id="<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['property_id'];?>
" value="1" class="switch_<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid();?>
" name="is_crawl" <?php if (!empty($_smarty_tpl->tpl_vars['block_crawl']->value[$_smarty_tpl->tpl_vars['key']->value]['is_crawl'])) {?>checked<?php }?>>

											<span class="slider round"></span>

										</label>

									</td>

									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

								</tr>

								<?php }?>

							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

						<?php } else { ?>

							<tr><td class="text-center" colspan="4">Danh sách trống</td></tr>

						<?php }?>

						</tbody>

					</table>

				</div>

			</div>

		</div></div>

	</div></div>

</div>



<style type="text/css">

	.w-100px{width:100px !important;}

	.w-120px{width:120px !important;}

	.w-250px{width:250px !important;}

	.table{margin-bottom:0;max-width:18000px;}

	.input-group-suffix .suffix{ right:10px;}

	.freeze-table {

        user-select: none;

        -moz-user-select: none;

        -khtml-user-select: none;

        -webkit-user-select: none;

        -o-user-select: none;

	}

	tr.stock_mask > td:first-child{

		position:relative;

	} 

	tr.stock_mask > td:first-child:before{

		content: "";

		position: absolute;

		left: -8px; top: -3px;

		border-bottom: 10px solid #C00000;

		border-left: 10px solid transparent;

		border-right: 10px solid transparent;

		transform: rotate(-45deg);

		-moz-transform: rotate(-45deg);

		-webkit-transform: rotate(-45deg);

	}

	.mega-dropdown-menu{

		min-width:300px;

	}

	.dropdown-menu > li > a.disabled{

		color:gray;

		opacity:0.2l

		filter:alpha(opacity=20);

	}

</style>

<?php echo '<script'; ?>
 type="text/javascript">

	$(function(){

		setTimeout(() => {

			$('.freeze-table').freezeTable({

				'columnNum': 2,

				'scrollable': true

			});

		},1000);

	});

<?php echo '</script'; ?>
>

<?php }
}
