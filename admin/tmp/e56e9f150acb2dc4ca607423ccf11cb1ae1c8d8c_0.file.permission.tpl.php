<?php
/* Smarty version 3.1.33, created on 2026-07-07 13:25:21
  from '/www/wwwroot/skyrealty.futureglobal.vn/admin/application/views/setting/permission.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6a4c9bd117d214_60190287',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e56e9f150acb2dc4ca607423ccf11cb1ae1c8d8c' => 
    array (
      0 => '/www/wwwroot/skyrealty.futureglobal.vn/admin/application/views/setting/permission.tpl',
      1 => 1783405251,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a4c9bd117d214_60190287 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="breadcrumb">
    <a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('Home');?>
</a>
    <a>&raquo;</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['PCMS_URL']->value;?>
/index.php?mod=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
&act=central" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->get_Lang('System Settings');?>
</a>
    <a href="javascript:window.history.back();" class="back fr">Quay lại</a>
</div>
<div class="container-fluid">
    <div class="page-title">
        <h2><i class="fa fa-shield"></i> Cấu hình &raquo; Nhân sự &amp; phân quyền</h2>
        <p>Gán nhân sự vào nhóm quyền — lưu ra configs/business.php</p>
    </div>
    <div class="clearfix"></div>
    <div style="background:#fff3cd;padding:10px 14px;border-radius:6px;margin-bottom:14px;font-family:monospace;font-size:13px;color:#664d03;">
        DEBUG — staffList: <?php if (isset($_smarty_tpl->tpl_vars['staffList']->value)) {?>SET, count = <?php echo count($_smarty_tpl->tpl_vars['staffList']->value);
} else { ?><b style="color:#a4161a;">KHÔNG SET → handler default_permission() KHÔNG chạy (IonCube dispatch không gọi handler cho act mới)</b><?php }?>
    </div>
    <form method="post" action="" class="validate-form">
        <div class="cfg-grid">
            <div class="cfg-main">

                <section class="cfg-card">
                    <h3 class="cfg-card__title"><i class="fa fa-shield"></i> Nhóm quyền hệ thống</h3>
                    <p style="color:#a4161a; font-size:13px; padding:4px 0 12px; line-height:1.5;">
                        <i class="fa fa-exclamation-triangle"></i> Người trong nhóm này được cấp <b>toàn quyền</b>. Khách mới phải gán lại đúng nhân sự — để trống là an toàn (không ai được cấp).
                    </p>
                    <div class="cfg-row" style="align-items:start;">
                        <label class="cfg-row__label">Super Admin (toàn quyền)<br><small style="font-family:monospace;color:#9aa1ad;">_PROFILE_SUPPER_ID</small></label>
                        <div class="cfg-row__control">
                            <select name="perm_supper[]" multiple size="8" class="cfg-input" style="height:auto; padding:4px;">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['staffList']->value, 'm', false, 'pid');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pid']->value => $_smarty_tpl->tpl_vars['m']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['pid']->value;?>
"<?php if (isset($_smarty_tpl->tpl_vars['sel_supper']->value[$_smarty_tpl->tpl_vars['pid']->value])) {?> selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m']->value['full_name'], ENT_QUOTES, 'UTF-8', true);?>
 (#<?php echo $_smarty_tpl->tpl_vars['pid']->value;?>
)</option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                            <small style="color:#9aa1ad;">Giữ Ctrl (Windows) / Cmd (Mac) để chọn nhiều người.</small>
                        </div>
                    </div>
                </section>

                <section class="cfg-card">
                    <h3 class="cfg-card__title"><i class="fa fa-user"></i> Vai trò chủ chốt</h3>
                    <div class="cfg-row">
                        <label class="cfg-row__label">Admin tối cao<br><small style="font-family:monospace;color:#9aa1ad;">_USER_ADMIN_SUPER_ID</small></label>
                        <div class="cfg-row__control">
                            <select name="perm_user_admin" class="cfg-input">
                                <option value="0">— Chọn nhân sự —</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['staffList']->value, 'm', false, 'pid');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pid']->value => $_smarty_tpl->tpl_vars['m']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['pid']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['pid']->value == $_smarty_tpl->tpl_vars['cur_user_admin']->value) {?> selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m']->value['full_name'], ENT_QUOTES, 'UTF-8', true);?>
 (#<?php echo $_smarty_tpl->tpl_vars['pid']->value;?>
)</option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>
                    </div>
                    <div class="cfg-row">
                        <label class="cfg-row__label">Giám đốc điều hành<br><small style="font-family:monospace;color:#9aa1ad;">_PROFILE_CEO_ID</small></label>
                        <div class="cfg-row__control">
                            <select name="perm_ceo" class="cfg-input">
                                <option value="0">— Chọn nhân sự —</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['staffList']->value, 'm', false, 'pid');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pid']->value => $_smarty_tpl->tpl_vars['m']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['pid']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['pid']->value == $_smarty_tpl->tpl_vars['cur_ceo']->value) {?> selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m']->value['full_name'], ENT_QUOTES, 'UTF-8', true);?>
 (#<?php echo $_smarty_tpl->tpl_vars['pid']->value;?>
)</option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>
                    </div>
                    <div class="cfg-row">
                        <label class="cfg-row__label">Quản trị kỹ thuật<br><small style="font-family:monospace;color:#9aa1ad;">_PROFILE_TECH_ID</small></label>
                        <div class="cfg-row__control">
                            <select name="perm_tech" class="cfg-input">
                                <option value="0">— Chọn nhân sự —</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['staffList']->value, 'm', false, 'pid');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pid']->value => $_smarty_tpl->tpl_vars['m']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['pid']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['pid']->value == $_smarty_tpl->tpl_vars['cur_tech']->value) {?> selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m']->value['full_name'], ENT_QUOTES, 'UTF-8', true);?>
 (#<?php echo $_smarty_tpl->tpl_vars['pid']->value;?>
)</option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>
                    </div>
                    <div class="cfg-row">
                        <label class="cfg-row__label">Admin hệ thống<br><small style="font-family:monospace;color:#9aa1ad;">_PROFILE_ADMIN_ID</small></label>
                        <div class="cfg-row__control">
                            <select name="perm_admin" class="cfg-input">
                                <option value="0">— Chọn nhân sự —</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['staffList']->value, 'm', false, 'pid');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pid']->value => $_smarty_tpl->tpl_vars['m']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['pid']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['pid']->value == $_smarty_tpl->tpl_vars['cur_admin']->value) {?> selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m']->value['full_name'], ENT_QUOTES, 'UTF-8', true);?>
 (#<?php echo $_smarty_tpl->tpl_vars['pid']->value;?>
)</option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>
                    </div>
                </section>

            </div>
        </div>
        <div class="cfg-footer">
            <button type="submit" class="save_setting">Lưu thay đổi</button>
            <input type="hidden" name="submit" value="SavePermission">
        </div>
    </form>
</div>
<?php }
}
