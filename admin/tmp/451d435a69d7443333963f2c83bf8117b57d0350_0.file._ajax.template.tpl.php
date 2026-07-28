<?php
/* Smarty version 3.1.33, created on 2026-03-12 13:14:11
  from '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/shop/_ajax.template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_69b259b39e9933_74544288',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '451d435a69d7443333963f2c83bf8117b57d0350' => 
    array (
      0 => '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/shop/_ajax.template.tpl',
      1 => 1757998213,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69b259b39e9933_74544288 (Smarty_Internal_Template $_smarty_tpl) {
if (!empty($_smarty_tpl->tpl_vars['configForm']->value)) {?>
    <?php $_smarty_tpl->_assignInScope('dynamic', $_smarty_tpl->tpl_vars['more_information']->value['dynamic']);?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['configForm']->value, 'item', false, 'key', 'name', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
    <?php $_smarty_tpl->_assignInScope('fieldName', ("dynamic_").($_smarty_tpl->tpl_vars['item']->value['field_code']));?>
    <div class="form-group <?php if ($_smarty_tpl->tpl_vars['item']->value['type'] == 'input_image_mutiple') {?> config-gallery <?php }?> form-row">
        <label class="col-md-2 col-form-label text-right"><?php echo $_smarty_tpl->tpl_vars['item']->value['field'];?>
</label>
        <div class="col-md-10">
            <?php if ($_smarty_tpl->tpl_vars['item']->value['type'] == 'input') {?>
            <input type="text" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['item']->value['field_placeholder'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['dynamic']->value[$_smarty_tpl->tpl_vars['fieldName']->value])===null||$tmp==='' ? '' : $tmp);?>
">
            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] == 'input_time') {?>
                <input type="time" name="dynamic_<?php echo $_smarty_tpl->tpl_vars['item']->value['field_code'];?>
" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['dynamic']->value[$_smarty_tpl->tpl_vars['fieldName']->value])===null||$tmp==='' ? '' : $tmp);?>
">
            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] == 'input_password') {?>
                <input type="password" name="dynamic_<?php echo $_smarty_tpl->tpl_vars['item']->value['field_code'];?>
" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['dynamic']->value[$_smarty_tpl->tpl_vars['fieldName']->value])===null||$tmp==='' ? '' : $tmp);?>
">
            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] == 'input_datetime') {?>
                <input type="datetime-local" name="dynamic_<?php echo $_smarty_tpl->tpl_vars['item']->value['field_code'];?>
" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['dynamic']->value[$_smarty_tpl->tpl_vars['fieldName']->value])===null||$tmp==='' ? '' : $tmp);?>
">
            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] == 'input_checkbox') {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['option'], 'itemOption', false, 'keyOption', 'nameOption', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['keyOption']->value => $_smarty_tpl->tpl_vars['itemOption']->value) {
?>
                    <div class="d-flex">
                        <input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['itemOption']->value;?>
" name="dynamic_<?php echo $_smarty_tpl->tpl_vars['item']->value['field_code'];?>
[]" placeholder="<?php echo $_smarty_tpl->tpl_vars['item']->value['field_placeholder'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['itemOption']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkItemInArray($_smarty_tpl->tpl_vars['itemOption']->value,$_smarty_tpl->tpl_vars['dynamic']->value[$_smarty_tpl->tpl_vars['fieldName']->value])) {?> checked <?php }?>>
                        <label class="col-form-label ml-2" for="<?php echo $_smarty_tpl->tpl_vars['itemOption']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['itemOption']->value;?>
</label>
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] == 'input_radio') {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['option'], 'itemOption', false, 'keyOption', 'nameOption', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['keyOption']->value => $_smarty_tpl->tpl_vars['itemOption']->value) {
?>
                    <div class="d-flex">
                        <input type="radio" id="<?php echo $_smarty_tpl->tpl_vars['itemOption']->value;?>
" name="dynamic_<?php echo $_smarty_tpl->tpl_vars['item']->value['field_code'];?>
" class="form-check-input" value="<?php echo $_smarty_tpl->tpl_vars['itemOption']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['dynamic']->value[$_smarty_tpl->tpl_vars['fieldName']->value] == $_smarty_tpl->tpl_vars['itemOption']->value) {?> checked <?php }?>>
                        <label class="col-form-label ml-2" for="<?php echo $_smarty_tpl->tpl_vars['itemOption']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['itemOption']->value;?>
</label>
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] == 'input_image') {?>
                <div class="item-img img-add js-box-select-image box-<?php echo $_smarty_tpl->tpl_vars['item']->value['field_code'];?>
 js-box-<?php echo $_smarty_tpl->tpl_vars['item']->value['field_code'];?>
">
                    <img width="100%" height="100%" id="isoman_show_<?php echo $_smarty_tpl->tpl_vars['item']->value['field_code'];?>
" src="<?php if ($_smarty_tpl->tpl_vars['dynamic']->value[$_smarty_tpl->tpl_vars['fieldName']->value]) {?> <?php echo $_smarty_tpl->tpl_vars['dynamic']->value[$_smarty_tpl->tpl_vars['fieldName']->value];?>
 <?php } else {
echo FH_URL;?>
/admin/application/themes/images/no-image.jpg<?php }?>">
                    <button class="btn btn-exchange ajOpenDialog d-none" isoman_for_id="<?php echo $_smarty_tpl->tpl_vars['item']->value['field_code'];?>
" isoman_val="" isoman_name="image" style="left:unset; width: 96px;">
                        <i class="fa fa-exchange fs-5 text-dark"></i>
                    </button>
                    <button type="button" class="btn btn-del-<?php echo $_smarty_tpl->tpl_vars['item']->value['field_code'];?>
 d-none" onclick="$Core.shop.del_photo_menu(this, event)">
                        <i class="fa fa-times-circle" aria-hidden="true"></i>
                    </button>
                    <input type="hidden" id="isoman_url_<?php echo $_smarty_tpl->tpl_vars['item']->value['field_code'];?>
" name="dynamic_<?php echo $_smarty_tpl->tpl_vars['item']->value['field_code'];?>
" value="<?php if ($_smarty_tpl->tpl_vars['dynamic']->value[$_smarty_tpl->tpl_vars['fieldName']->value]) {?> <?php echo $_smarty_tpl->tpl_vars['dynamic']->value[$_smarty_tpl->tpl_vars['fieldName']->value];?>
 <?php }?>">
                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] == 'input_image_mutiple') {?>
                <?php if (!empty($_smarty_tpl->tpl_vars['dynamic']->value[$_smarty_tpl->tpl_vars['fieldName']->value])) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dynamic']->value[$_smarty_tpl->tpl_vars['fieldName']->value], '_item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_item']->value) {
?>
                        <div class="item-img" isoman_for_id="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
" isoman_val="" isoman_name="image">
                            <img width="100" height="100" id="isoman_show_<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
" src="<?php echo $_smarty_tpl->tpl_vars['_item']->value;?>
">
                            <button type="button" class="btn btn-del-image"><i class="fa fa-times-circle" aria-hidden="true"></i></button>
                            <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
[]" value="<?php echo $_smarty_tpl->tpl_vars['_item']->value;?>
">
                        </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
                <div class="dropzone content-image" style="cursor: pointer;">
                    <div class="item-img img-empty ajOpenDialog" isoman_for_id="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
" isoman_multiple="1" isoman_val="" isoman_name="image">
                        <i class="fa fa-plus-circle"></i>
                    </div>
                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] == 'select') {?>
                <select class="form-control group-option-type" name="dynamic_<?php echo $_smarty_tpl->tpl_vars['item']->value['field_code'];?>
">
                    <option value="">-- Chọn ---</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['option'], 'itemOption', false, 'keyOption', 'nameOption', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['keyOption']->value => $_smarty_tpl->tpl_vars['itemOption']->value) {
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['itemOption']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['dynamic']->value[$_smarty_tpl->tpl_vars['fieldName']->value] == $_smarty_tpl->tpl_vars['itemOption']->value) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['itemOption']->value;?>
</option>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] == 'select_multiple') {?>
                <select name="dynamic_<?php echo $_smarty_tpl->tpl_vars['item']->value['field_code'];?>
[]" multiple="multiple" class="form-control iso-select2">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['option'], 'itemOption', false, 'keyOption', 'nameOption', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['keyOption']->value => $_smarty_tpl->tpl_vars['itemOption']->value) {
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['itemOption']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['clsISO']->value->checkItemInArray($_smarty_tpl->tpl_vars['itemOption']->value,$_smarty_tpl->tpl_vars['dynamic']->value[$_smarty_tpl->tpl_vars['fieldName']->value])) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['itemOption']->value;?>
</option>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] == 'textarea') {?>
                <textarea name="dynamic_<?php echo $_smarty_tpl->tpl_vars['item']->value['field_code'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['item']->value['field_placeholder'];?>
"></textarea>
            <?php }?>
        </div>
    </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
