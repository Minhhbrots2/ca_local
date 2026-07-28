<?php
/* Smarty version 3.1.33, created on 2026-07-27 18:04:57
  from '/www/wwwroot/skyrealty.c-a.vn/application/views/tool/_ajax.calendar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a673b59022f29_19451274',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d0f32a89f76f3dd8c175b5ac410c1a99b9ebf37' => 
    array (
      0 => '/www/wwwroot/skyrealty.c-a.vn/application/views/tool/_ajax.calendar.tpl',
      1 => 1783308749,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a673b59022f29_19451274 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/www/wwwroot/skyrealty.c-a.vn/core/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="modal-dialog modal-dialog-centered">

	<form method="POST" class="modal-content">

		<div class="modal-header">

			<h5 class="modal-title"><?php if ($_smarty_tpl->tpl_vars['action']->value == '_edit') {?>Sửa<?php } else { ?>Đăng ký<?php }?> lịch phòng họp</h5>

			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

		</div>

		<div class="modal-body">

			<div class="form-group mb-2">

				<label for="name" class="form-label mb-1">Tiêu đề</label>

				<input type="text" name="title" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == '_edit') {
echo $_smarty_tpl->tpl_vars['oneCalendar']->value['title'];
}?>" 

				class="form-control required" placeholder="Tiêu đề" maxlength="255" charset="UTF-8" autocomplete="off">

			</div>

			<div class="form-group mb-2">

				<label for="name" class="form-label mb-1">Thành phần tham gia</label>

				<div class="pl-3">

					<ul class="list-unstyled">

						<li class="mb-2">

							<label for="name" class="form-label mb-1">Phong ban</label>

							<select id="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid();?>
" multiple="multiple" class="form-control iso-selectizeNotSearch" placeholder="Chọn phòng ban" data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=ajax&act=load_department" name="list_department_id[]" data-optgroup="false"><?php echo $_smarty_tpl->tpl_vars['html_dep_options']->value;?>
</select>

						</li>

						<li class="mb-2">

							<label for="name" class="form-label mb-1">Đội nhóm</label>

							<select id="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid();?>
" multiple="multiple" class="form-control iso-selectizeNotSearch" placeholder="Chọn đội nhóm" data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=ajax&act=load_group_staff" name="list_group_id[]" data-optgroup="false"><?php echo $_smarty_tpl->tpl_vars['html_group_options']->value;?>
</select>

						</li>

						<li class="mb-2">

							<label for="name" class="form-label mb-1">Nhân viên</label>

							<select id="<?php echo $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid();?>
" multiple="multiple" class="form-control iso-selectizeNotSearch" placeholder="Chọn nhân viên" data-url="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=home&act=list_staff&holderG=permiss" name="list_staff_id[]" data-optgroup="false"><?php echo $_smarty_tpl->tpl_vars['html_staff_options']->value;?>
</select>

						</li>

					</ul>

				</div>

			</div>	

			<div class="form-group mb-4">

				<label class="form-label mb-1">Màu sắc</label>

				<div class="d-flex my-3 pl-3 gap-4">

					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_colors']->value, '_oColor');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_oColor']->value) {
?>

					<label class="el-radio-color mr-3">

						<input<?php if ($_smarty_tpl->tpl_vars['oneCalendar']->value['bgcolor'] == $_smarty_tpl->tpl_vars['_oColor']->value) {?> checked<?php }?> name="bgcolor" 

						value="<?php echo $_smarty_tpl->tpl_vars['_oColor']->value;?>
" style="color:<?php echo $_smarty_tpl->tpl_vars['_oColor']->value;?>
" type="radio" />

					</label>

					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

				</div>

			</div>

			<div class="form-group form-row mt-1">

				<div class="col-6">

					<label for="name" class="form-label mb-1">Ngày</label>

					<input type="date" name="regis_date" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oneCalendar']->value['start_date'],'%Y-%m-%d');?>
" class="form-control required" 

					placeholder="dd/mm/YYYY" maxlength="255" charset="UTF-8" autocomplete="off" />

				</div>

				<div class="col-6">

					<label for="name" class="form-label mb-1">Tới thời gian</label>

					<div class="input-group mb-2">

						<input type="time" name="start_time" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oneCalendar']->value['start_date'],'%H:%M');?>
" 

						class="form-control required" placeholder="hh:ii" maxlength="255" charset="UTF-8" autocomplete="off"  />

						<input type="time" name="end_time" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oneCalendar']->value['end_date'],'%H:%M');?>
" 

						class="form-control required" placeholder="hh:ii" maxlength="255" charset="UTF-8" autocomplete="off" />

					</div>

				</div>

			</div>

			<div class="form-group">

				<div class="form-check">

					<?php $_smarty_tpl->_assignInScope('uid', $_smarty_tpl->tpl_vars['clsISO']->value->getUniqid());?>

					<input class="form-check-input"<?php if ($_smarty_tpl->tpl_vars['oneCalendar']->value['is_fullday'] == '1') {?> checked<?php }?> 

						type="checkbox" value="1" id="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" name="is_fullday" onChange="$Core.calendar.set_fullday(this, event)">

					<label class="form-check-label" for="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
"> Cả ngày</label>

				</div>

			</div>

		</div>

		<div class="modal-footer border-top">

			<button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Đóng</button>

			<button type="button" calendar_id="<?php echo $_smarty_tpl->tpl_vars['calendar_id']->value;?>
" data-toggle="ripple" onClick="$Core.calendar.save(this, event)" 

			class="btn btn-primary">Lưu lại</button>

		</div>

	</form>

</div>

<?php }
}
