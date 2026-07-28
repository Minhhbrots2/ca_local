<?php
/* Smarty version 3.1.33, created on 2026-05-14 14:19:17
  from '/www/wwwroot/ca.futurehomes.vn/admin/application/views/project/title_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a0577753a57e1_75816566',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6aa84cd761fd7d8669ba2104d2a69f7c6764d5a7' => 
    array (
      0 => '/www/wwwroot/ca.futurehomes.vn/admin/application/views/project/title_item.tpl',
      1 => 1778742044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a0577753a57e1_75816566 (Smarty_Internal_Template $_smarty_tpl) {
?><tr id="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" class="tr_attrs">
    <td class="text-center">1</td>
    <td class="text-center">
        <input class="form-control" name="title" placeholder="Nhập tiêu đề" type="text" /></td>
    <td class="text-center">
        <input class="form-control" name="progress_date" placeholder="Nhập giá trị" type="text" />
    </td>
    <td class="text-center">
        <input name="is_active" value="<?php echo $_smarty_tpl->tpl_vars['_Item']->value['is_active'];?>
" type="checkbox" />
    </td>
    <td class="text-center">
        <a class="btn btn-default" title="Xóa" href="javascript:void(0);" uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" onClick="delete_progress(this, event)"><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('trash');?>
</a>
    </td>
</tr><?php }
}
