<?php
/* Smarty version 3.1.33, created on 2026-06-09 23:23:13
  from '/www/wwwroot/ca.futurehomes.vn/admin/application/views/project/_ajax.progress_media.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a283df1c25016_49548619',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69611a0eaf7b278f20d11595d3b8e28af6fb7397' => 
    array (
      0 => '/www/wwwroot/ca.futurehomes.vn/admin/application/views/project/_ajax.progress_media.tpl',
      1 => 1781022065,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a283df1c25016_49548619 (Smarty_Internal_Template $_smarty_tpl) {
?><tr id="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
_media" class="tr_attrs">
    <td class="text-center"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['i']->value)===null||$tmp==='' ? '' : $tmp);?>
</td>
    <td class="text-center">
        <input class="form-control" name="attrs_media[<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
][title]" placeholder="Nhập tiêu đề" type="text" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" /></td>
    <td class="text-center">
        <input class="form-control" name="attrs_media[<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
][images]" placeholder="Nhập giá trị" type="text" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['images'];?>
" />
    </td>
    <td class="text-center">
        <input class="form-control" name="attrs_media[<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
][videos]" placeholder="Nhập giá trị" type="text" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['videos'];?>
" />
    </td>
    <td class="text-center">
        <a class="btn btn-default" progress_id="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" title="Xóa" href="javascript:void(0);" uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" project_id="<?php echo $_smarty_tpl->tpl_vars['item']->value['project_id'];?>
" block_id="<?php echo $_smarty_tpl->tpl_vars['item']->value['block_id'];?>
" building_id="<?php echo $_smarty_tpl->tpl_vars['item']->value['building_id'];?>
" onClick="delete_progress_media(this, event)"><?php echo $_smarty_tpl->tpl_vars['core']->value->makeIcon('trash');?>
</a>
    </td>
</tr><?php }
}
