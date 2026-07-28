<?php
/* Smarty version 3.1.33, created on 2026-03-30 15:12:20
  from '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/setting/_ajax.open_add_field.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_69ca30642288f7_93484047',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2bf15438f53ca82b4810375c3316eee2d5f47fd3' => 
    array (
      0 => '/home/fhgroupt/ca.futurehomes.vn/admin/application/views/setting/_ajax.open_add_field.tpl',
      1 => 1757905737,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69ca30642288f7_93484047 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
.btn-property {
    width: 37px;
    height: 37px;
}
.item-field {
    border-bottom: 1px solid #ccc;
    padding-bottom: 1rem;
}
</style>
<div class="modal-dialog modal-standard">
    <div class="modal-content">
        <div class="modal-header"> 
            <a href="javascript:void();" class="closeEv close close_pop"><span>×</span></a> 
            <h3 class="modal-title"><strong>Chi tiết thuộc tính</strong></h3>
        </div>
        <div class="modal-body">
            <form method="post" action="" enctype="multipart/form-data">
                <div class="modal-body js-parent-item js-parent-item-property">
                    <?php if (!empty($_smarty_tpl->tpl_vars['configForm']->value)) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['configForm']->value, 'item', false, 'key', 'name', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                            <div class="form-group form-row item-field js-item-field align-items-center">
                                <div class="col-md-12 d-flex justify-content-between align-items-center">
                                    <div><h5><b>Thuộc tính</b></h5></div>
                                    <div class="group-button-property d-flex algin-items-center gap-1">
                                        <button type="button" class="btn btn-property js-btn-property js-btn-plus-property" onClick="$Core.setting.editAddProperty(this, event);" data-type="add"><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('plus');?>
</button>
                                        <button type="button" class="btn btn-property js-btn-property js-btn-minus-property <?php if (count($_smarty_tpl->tpl_vars['configForm']->value) <= 1) {?> d-none <?php }?>" onClick="$Core.setting.editAddProperty(this, event);" data-type="delele"><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('minus');?>
</button>
                                    </div>
                                </div>
                                <label class="col-md-2 mt-2 col-form-label text-center">Tên</label>
                                <div class="col-md-10 mt-2">
                                    <input class="form-control required" placeholder="Tên" maxlength="255" name="field[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['field'];?>
" />
                                </div>
                                <label class="col-md-2 mt-2 col-form-label text-center">Mã</label>
                                <div class="col-md-10 mt-2">
                                    <input class="form-control js-field-code required" placeholder="Mã" maxlength="255" name="field_code[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['field_code'];?>
" />
                                </div>
                                <label class="col-md-2 mt-2 col-form-label text-center">Placeholder</label>
                                <div class="col-md-10 mt-2">
                                    <input class="form-control required" placeholder="Placeholder" maxlength="255" name="field_placeholder[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['field_placeholder'];?>
" />
                                </div>
                                <label class="col-md-2 mt-2 col-form-label text-center">Kiểu nhập</label>
                                <div class="col-md-10 mt-2">
                                    <select class="form-control group-option-type" onChange="$Core.setting.addOption(this, event);" name="type[]">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, _LIST_TYPE_ARRAY, 'itemType', false, 'keyType', 'nameType', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['keyType']->value => $_smarty_tpl->tpl_vars['itemType']->value) {
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['keyType']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['type'] == $_smarty_tpl->tpl_vars['keyType']->value) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['itemType']->value;?>
</option>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                </div>
                                
                                <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['option'])) {?>
                                    <div class="col-md-2"></div>
                                    <div class="group-option-item col-md-8 js-parent-item">
                                    <div class=""><h5><b>Các lựa chọn:</b></h5></div>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['option'], 'itemOption', false, 'keyOption');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['keyOption']->value => $_smarty_tpl->tpl_vars['itemOption']->value) {
?>
                                        <div class="option-item d-flex js-item-field mt-2">
                                            <label class="d-flex text-right align-items-center" style="width: 45%"><span>Lựa chọn.</span> <span class="js-order-item"> <?php echo $_smarty_tpl->tpl_vars['keyOption']->value+1;?>
</span></label>
                                            <input class="form-control required ml-5 js-field-option" name="option[<?php echo $_smarty_tpl->tpl_vars['item']->value['field_code'];?>
][]" placeholder="tên lựa chọn" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['itemOption']->value;?>
" >
                                            <div class="group-button-property d-flex algin-items-center col-md-1 gap-1">
                                                <button type="button" class="btn btn-property js-btn-property js-btn-plus-property" onClick="$Core.setting.editAddProperty(this, event);" data-type="add"><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('plus');?>
</button>
                                                <button type="button" class="btn btn-property js-btn-property js-btn-minus-property <?php if (count($_smarty_tpl->tpl_vars['item']->value['option']) <= 1) {?> d-none <?php }?>" onClick="$Core.setting.editAddProperty(this, event);" data-type="delele"><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('minus');?>
</button>
                                            </div>
                                        </div>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </div>
                                <?php } else { ?>
                                    <div class="col-md-2"></div>
                                    <div class="group-option-item d-none col-md-8 js-parent-item">
                                        <div class=""><h5><b>Các lựa chọn:</b></h5></div>
                                        <div class="option-item d-flex js-item-field mt-2">
                                            <label class="d-flex text-right align-items-center" style="width: 45%"><span>Lựa chọn.</span> <span class="js-order-item"> 1</span></label>
                                            <input class="form-control required ml-5 js-field-option" name="option[]" placeholder="tên lựa chọn" maxlength="255" value="" >
                                            <div class="group-button-property d-flex algin-items-center col-md-1 gap-1">
                                                <button type="button" class="btn btn-property js-btn-property js-btn-plus-property" onClick="$Core.setting.editAddProperty(this, event);" data-type="add"><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('plus');?>
</button>
                                                <button type="button" class="btn btn-property js-btn-property js-btn-minus-property d-none" onClick="$Core.setting.editAddProperty(this, event);" data-type="delele"><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('minus');?>
</button>
                                            </div>
                                        </div>
                                    </div>
                                <?php }?>
                            </div>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php } else { ?>
                        <div class="form-group form-row item-field js-item-field align-items-center">
                            <div class="col-md-12 d-flex justify-content-between align-items-center">
                                <div><h5><b>Thuộc tính</b></h5></div>
                                <div class="group-button-property d-flex algin-items-center gap-1">
                                    <button type="button" class="btn btn-property js-btn-property js-btn-plus-property" onClick="$Core.setting.editAddProperty(this, event);" data-type="add"><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('plus');?>
</button>
                                    <button type="button" class="btn btn-property js-btn-property js-btn-minus-property <?php if (count($_smarty_tpl->tpl_vars['configForm']->value) <= 1) {?> d-none <?php }?>" onClick="$Core.setting.editAddProperty(this, event);" data-type="delele"><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('minus');?>
</button>
                                </div>
                            </div>
                            <label class="col-md-2 mt-2 col-form-label text-center">Tên</label>
                            <div class="col-md-10 mt-2">
                                <input class="form-control required" placeholder="Tên" maxlength="255" name="field[]" 
                                    value="" />
                            </div>
                            <label class="col-md-2 mt-2 col-form-label text-center">Mã</label>
                            <div class="col-md-10 mt-2">
                                <input class="form-control js-field-code required" placeholder="Mã" maxlength="255" name="field_code[]" value="" />
                            </div>
                            <label class="col-md-2 mt-2 col-form-label text-center">placeholder</label>
                                <div class="col-md-10 mt-2">
                                    <input class="form-control required" placeholder="Placeholder" maxlength="255" name="field_placeholder[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['field_placeholder'];?>
" />
                                </div>
                            <label class="col-md-2 mt-2 col-form-label text-center">Kiểu nhập</label>
                            <div class="col-md-10 mt-2">
                                <select class="form-control group-option-type" onChange="$Core.setting.addOption(this, event);" name="type[]">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, _LIST_TYPE_ARRAY, 'itemType', false, 'keyType', 'nameType', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['keyType']->value => $_smarty_tpl->tpl_vars['itemType']->value) {
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['keyType']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['itemType']->value;?>
</option>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>
                            <div class="col-md-2"></div>
                            <div class="group-option-item d-none col-md-8 js-parent-item">
                                <div class=""><h5><b>Các lựa chọn:</b></h5></div>
                                <div class="option-item d-flex js-item-field mt-2">
                                    <label class="d-flex text-right align-items-center" style="width: 45%"><span>Lựa chọn.</span> <span class="js-order-item"> 1</span></label>
                                    <input class="form-control required ml-5 js-field-option" name="option[]" placeholder="tên lựa chọn" maxlength="255" value="" >
                                    <div class="group-button-property d-flex algin-items-center col-md-1 gap-1">
                                        <button type="button" class="btn btn-property js-btn-property js-btn-plus-property" onClick="$Core.setting.editAddProperty(this, event);" data-type="add"><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('plus');?>
</button>
                                        <button type="button" class="btn btn-property js-btn-property js-btn-minus-property d-none" onClick="$Core.setting.editAddProperty(this, event);" data-type="delele"><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('minus');?>
</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                </div>
                <input type="hidden" name="setting_id" value="<?php echo $_smarty_tpl->tpl_vars['setting_id']->value;?>
">

                <div class="modal-footer">
                    <button type="button" onClick="$Core.setting.saveProperty(this, event)" class="btn btn-success">
                        <span>Lưu lại</span>
                    </button>
                    <button type="button" class="btn btn-default mr-half pull-right" data-dismiss="modal">
                        <span><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Close');?>
</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
>
$(document).ready(function() {
    $(".group-option-type").each(function () {
        this.onchange?.call(this, new Event("change"));
    });
})
<?php echo '</script'; ?>
><?php }
}
