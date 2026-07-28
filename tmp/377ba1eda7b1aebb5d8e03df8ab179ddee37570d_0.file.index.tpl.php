<?php
/* Smarty version 3.1.33, created on 2026-07-06 15:56:02
  from '/www/wwwroot/skyrealty.futureglobal.vn/application/blocks/top_ranker_25/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a4b6da2059f99_55933451',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '377ba1eda7b1aebb5d8e03df8ab179ddee37570d' => 
    array (
      0 => '/www/wwwroot/skyrealty.futureglobal.vn/application/blocks/top_ranker_25/index.tpl',
      1 => 1783314243,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a4b6da2059f99_55933451 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="my-zoom-wrapper" class="w-100 overflow-hidden rounded-2 position-relative zoom-container-wrapper mb-3">
    <div class="w-100 h-100 zoom-container">
		<div class="box_ranker rounded-2 position-relative overflow-hidden mb-3">			
			<div class="menu_rank menu_rank_pc">
				<button class="btn btn-icon text-white dropdown-toggle  hide-arrow" data-bs-toggle="dropdown">
					<i class='bx bx-menu fs-30'></i>
				</button>
				<div class="rank__tab-menu dropdown-menu">
					<ul class="d-flex justify-content-between rank__tab-nav">
						<li><a onclick="$Core.helper.load_top_ranking25(this, event)" tp="month" class="text-white rank_link">Tháng</a></li>
						<li><a onclick="$Core.helper.load_top_ranking25(this, event)" tp="quarter" class="text-white rank_link">Quý</a></li>
						<li><a onclick="$Core.helper.load_top_ranking25(this, event)" tp="year" class="text-white rank_link">Năm</a></li>
					</ul>
				</div>
			</div>
			<div class="box_content position-absolute left-0">
				<div class="box_title position-relative d-inline-block">
					<div class="d-flex align-item-start gap-1">
						<div class="menu_rank menu_rank_mobile">
							<button class="btn btn-icon text-white dropdown-toggle  hide-arrow" data-bs-toggle="dropdown">
								<i class='bx bx-menu fs-30'></i>
							</button>
							<div class="rank__tab-menu dropdown-menu">
								<ul class="d-flex justify-content-between rank__tab-nav">
									<li><a onclick="$Core.helper.load_top_ranking25(this, event)" tp="month" class="text-white rank_link">Tháng</a></li>
									<li><a onclick="$Core.helper.load_top_ranking25(this, event)" tp="quarter" class="text-white rank_link">Quý</a></li>
									<li><a onclick="$Core.helper.load_top_ranking25(this, event)" tp="year" class="text-white rank_link">Năm</a></li>
								</ul>
							</div>
						</div>
						<img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/logo_FH_white2.png" class="image_logo" width="200">
					</div>
					<h2 class="text-upper mb-2">Đại lộ danh vọng</h2>
					<div class="light_title position-absolute left-0 w-100"></div>
				</div>
				<div class="box_body_content text-white">
					<h3 class="text-upper fs-3 mb-2"><?php echo $_smarty_tpl->tpl_vars['title_content']->value;?>
</h3>
					<p class=" fs-16 text-white">(<?php echo $_smarty_tpl->tpl_vars['title_content_time']->value;?>
)</p>
				</div>
			</div>
			<div class="d-flex align-items-end lst_chart">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lstItem']->value, '_oItem', false, 'key', 'i', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['_oItem']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['total'];
?>
				<div class="item_ranker flex-flow position-relative<?php if (!empty($_smarty_tpl->tpl_vars['_oItem']->value['is_none'])) {?> is_none<?php }?> rounded-1" 
					style="height:<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['col_height'];?>
%; background-color:<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['bgcolor'];?>
;" >
					<div class="box_avt position-absolute d-flex align-items-center justify-content-center cursor-pointer" style="background:url(<?php echo $_smarty_tpl->tpl_vars['_oItem']->value['bg_image'];?>
); background-size:100%; background-position: bottom; background-repeat: no-repeat;<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['last'] : null)) {?> width:calc(100% * 1.8)<?php }?>">
						<img src="<?php echo $_smarty_tpl->tpl_vars['URL_IMAGES']->value;?>
/no-avatar.jpg?v=<?php echo $_smarty_tpl->tpl_vars['upd_version']->value;?>
" 
							class="rounded-pill w-100" width="30" height="30">
					</div>
					<div class="text-center fw-bold d-flex flex-column info_ranker">
						<span class="text-warning"></span>
						<span class="text-main"></span>
					</div>
				</div>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>	
		</div>
	</div>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
	$(() => {
		setTimeout(() => {
			$('.rank_link[tp=month]:first-child').trigger('click');
		}, 500)
	});
<?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['deviceType']->value == 'phone') {?>

<?php echo '<script'; ?>
>
	$('#my-zoom-wrapper').zoomPan({
		zoomStep: 0.5,
		minScale: 1,
		maxScale: 5
	});
<?php echo '</script'; ?>
>

<?php } else { ?>

<?php echo '<script'; ?>
>
	$(() => {
		$(".box_ranker").buoyant({
			numberOfItems: 20,
			backgroundColor: "#C0392B",
			minRadius: 5,
			maxRadius: 15,
			elementClass: 'circles'
		});
	});			
<?php echo '</script'; ?>
>

<?php }?>

<style>
	.menu_rank {
		position: absolute;
		left: 20px;
		z-index: 2;
	}
	.menu_rank_mobile{
		display: none;
		position: unset
	}
	.menu_rank .rank__tab-menu {
		box-shadow: 0px 0px 0px;
		min-width: 0
	}
	.menu_rank .rank__tab-menu .rank__tab-nav {
		flex-direction: column;
	}
	.menu_rank .rank__tab-menu .rank__tab-nav > li > a {
		cursor:pointer;
		padding: 5px 10px !important;
		min-width: 100px;
	}
	.menu_rank .rank__tab-menu .rank__tab-nav > li {
		padding: 2px 5px;
	}
	.zoom-container-wrapper{
		height:620px;
	}
	.box_ranker {
		padding: 4.5rem;
		padding-bottom: 62.5px;
		position:relative;
		background: #9F223A;
		background: radial-gradient(circle at 50% 30%, rgba(209, 209, 209, 0.04) 0%, rgba(209, 209, 209, 0.04) 50%, rgba(138, 138, 138, 0.04) 50%, rgba(138, 138, 138, 0.04) 100%), radial-gradient(circle at 9% 40%, rgba(209, 209, 209, 0.04) 0%, rgba(209, 209, 209, 0.04) 50%, rgba(71, 71, 71, 0.04) 50%, rgba(71, 71, 71, 0.04) 100%), radial-gradient(circle at 84% 81%, rgba(147, 147, 147, 0.04) 0%, rgba(147, 147, 147, 0.04) 50%, rgba(253, 253, 253, 0.04) 50%, rgba(253, 253, 253, 0.04) 100%), linear-gradient(266deg, rgb(159 34 58), rgb(159 53 34));
		transform-origin: top left;
		transition: transform 0.1s linear; /* zoom mượt */
	}
	.box_ranker:after {
		content:"";
		display:block;
		width:100%;
		height: 100%;
		position:absolute;
		bottom: 0;
		left:0;
		background-image: url(/application/themes/images/rank/bg_rank.png);
		background-size: 100% 50%;
		background-position: bottom;
		background-repeat: no-repeat;
		pointer-events: none
	}
	.box_ranker .image_logo{
		margin-bottom: 20px
	}
	.box_ranker .box_title{
	    margin-bottom: 40px;
	}
	.box_ranker .box_title:after {
		content: "";
		position: absolute;
		display: block;
		width: 50%;
		height: 20px;
		left: 50%;
		bottom: 0;
		transform: translate(-50%, 50%);
		background: rgba(255, 230, 120, 1);
		z-index: 1;
		border-radius: 100%;
		filter: blur(28px);
		pointer-events: none;
		mix-blend-mode: screen;
		opacity: 0.9;
	}
	.box_ranker .light_title {
		height: 17px;
		clip-path: polygon(50% 40%, 100% 46%, 100% 56%, 50% 60%, 0 56%, 0 46%);
		background: linear-gradient(90deg, rgba(0, 0, 0, 0) 0%, rgba(255, 230, 120, 1) 40%, rgb(253 247 226) 50%, rgba(255, 230, 120, 1) 60%, rgba(0, 0, 0, 0) 100%);
	}
	.box_ranker .box_title h2{
		color: #FFF;
		font-weight: 400;
		font-size: 48px;
		font-weight: 400;
		font-family: serif;
		background: linear-gradient(90deg, #ffc688, #ffffff, #ffc688);
		-webkit-background-clip: text;
		-webkit-text-fill-color: transparent;
	}
	.box_ranker .box_avt{
		aspect-ratio: 1 / 1;
		top: 0px;
    	left: 50%;
		transform: translate(-50%, -100%);
		padding: 15%;
		width: 100%
	}
	.item_ranker{
		cursor:pointer;
		transition:all .3s ease-in-out;
		-mz-transition:all .3s ease-in-out;
		-webkit-transition:all .3s ease-in-out;
	}
	.item_ranker:hover{
		transform: translateY(-10px);
	}
	.box_ranker .item_ranker.is_none {
		opacity: 0.5;
	}
	.box_ranker .item_ranker.is_none .box_avt {
		width: 100% !important;
	}
	.box_ranker .box_avt img{
		max-width: 70%;
   	 	aspect-ratio: 1 / 1;
		height: auto;
		object-fit: contain
	}
	.box_ranker,.box_ranker .box_body_content,.box_ranker .box_title {
		padding-left: 4.5rem;
		padding-right: 4.5rem;
	}
	.box_ranker .lst_chart{
		height: 500px;
		gap: .25rem
	}
	.box_ranker .info_ranker{
		font-size: 10px;
		padding: .25rem
	}
	@media screen and (max-width:1280px) {
		.box_ranker, .box_ranker .box_body_content, .box_ranker .box_title {
			padding-left: 1.5rem;
			padding-right: 1.5rem;
		}
		.box_ranker .info_ranker {
			font-size: 9px;
			padding: 3px;
		}
		.menu_rank {
			top: 10px;
		}
		.menu_rank_pc{
			display: none
		}
		.menu_rank_mobile{
			display: block
		}
	}
	@media screen and (max-width:1023px) {
		.box_ranker {
			padding-top: 50px;
			padding-bottom: 70px;
		}
		.box_ranker, .box_ranker .box_body_content, .box_ranker .box_title {
			padding-left: 1rem;
			padding-right: 1rem;
		}
		.box_ranker .info_ranker {
			font-size: 9px;
			padding: 3px 0px;
		}
		.box_ranker .lst_chart{
			gap: 3px;
			height: 300px;
		}
	}
	@media screen and (max-width:991px) {
		.box_ranker {
			padding-bottom: 50px;
			padding-top: 50px;
		}
		.box_ranker .info_ranker {
			font-size: 7px;
			padding: 2px 0px;
		}
		.box_ranker, .box_ranker .box_body_content, .box_ranker .box_title {
			padding-left: 10px;
			padding-right: 10px;
		}
		.box_ranker .box_title h2 {
			font-size: 40px;
		}
		.menu_rank {
			left: 10px;
		}
		.menu_rank .rank__tab-menu .rank__tab-nav > li > a {
			min-width: 100px;
		}
	}
	@media screen and (max-width:767px) {
		.box_ranker .info_ranker {
			font-size: 5px;
		}
		.box_ranker .box_body_content h3 {
			font-size: 16px !important;
		}
		.box_ranker .box_content {
			max-width: 90%;
		}
		.box_ranker .box_body_content p {
			font-size: 12px !important;
		}
		.box_ranker .box_title h2 {
			font-size: 30px;
		}
		.box_ranker .lst_chart {
			height: 280px;
		}
		.box_ranker .image_logo {
			margin-bottom: 9px;
		}
	}
	@media screen and (max-width:575px) {
		.zoom-container-wrapper{
			height:300px;
		}
		.box_ranker .info_ranker {
			font-size: 3px;
		}
		.box_ranker {
			padding-bottom: 30px;
			padding-top:30px
		}
		.box_ranker .box_title h2 {
			font-size: 24px;
			margin-bottom: 0 !important;
		}
		.box_ranker .box_title {
			margin-bottom: 24px;
		}
		.box_ranker .lst_chart {
			height: 240px;
		}
	}
	@media screen and (max-width:400px) {
		.box_ranker .box_title h2 {
			font-size: 20px;
		}
		.box_ranker .box_body_content h3 {
			font-size: 14px !important;
			margin-bottom: 2px !important;
		}
	}
</style>
<?php }
}
