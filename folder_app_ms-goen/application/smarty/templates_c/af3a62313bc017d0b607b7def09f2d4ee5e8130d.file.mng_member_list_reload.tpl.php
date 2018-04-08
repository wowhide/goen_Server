<?php /* Smarty version Smarty-3.1.19, created on 2018-04-07 13:39:41
         compiled from "../../folder_app_ms-goen/application/smarty/templates/mng_member_list_reload.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1254746975abf04882ba493-29461556%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af3a62313bc017d0b607b7def09f2d4ee5e8130d' => 
    array (
      0 => '../../folder_app_ms-goen/application/smarty/templates/mng_member_list_reload.tpl',
      1 => 1523075975,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1254746975abf04882ba493-29461556',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5abf048843dca8_96091833',
  'variables' => 
  array (
    'memberInfoList' => 0,
    'memberInfo' => 0,
    'now' => 0,
    'all' => 0,
    'total' => 0,
    'firstItemNumber' => 0,
    'lastItemNumber' => 0,
    'pagesInRange' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5abf048843dca8_96091833')) {function content_5abf048843dca8_96091833($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/virtual/htdocs/library/Smarty/libs/plugins/modifier.date_format.php';
?><table id="deceased_list">
    <tr>
        <th class="deceased_name">会員様名</th><th class="issue_day">生年月日</th><th class="issue_day">入会日</th><th class="state">メールアドレス</th><th class="entry_day">郵便番号</th><th class="charge">発行状態</th><th class="operate1"></th><th class="operate2"></th>
    </tr>
<?php  $_smarty_tpl->tpl_vars["memberInfo"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["memberInfo"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['memberInfoList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["memberInfo"]->key => $_smarty_tpl->tpl_vars["memberInfo"]->value) {
$_smarty_tpl->tpl_vars["memberInfo"]->_loop = true;
?>
    
<?php if ($_smarty_tpl->tpl_vars['memberInfo']->value['issue_state_code']=="1") {?>
    <tr class="issue_data">
<?php } elseif ($_smarty_tpl->tpl_vars['memberInfo']->value['issue_state_code']=="2") {?>
    <tr class="issued_data">
<?php } elseif ($_smarty_tpl->tpl_vars['memberInfo']->value['issue_state_code']=="4") {?>
    <tr class="del_data">
<?php } else { ?>
    <tr>
<?php }?>
        <!-- 会員様名 -->
        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['memberInfo']->value['member_name'], ENT_QUOTES, 'UTF-8', true);?>
&nbsp;様</td> 
        <!-- 生年月日 -->
        <td><?php echo date('Y/m/d',strtotime($_smarty_tpl->tpl_vars['memberInfo']->value['member_birthday']));?>
</td>
        <!-- 入会日 -->
        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['memberInfo']->value['issue_datetime'],"%Y/%m/%d");?>
</td>
        <!-- メールアドレス -->
        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['memberInfo']->value['member_mailaddress'], ENT_QUOTES, 'UTF-8', true);?>
&nbsp;</td>
        <!-- 郵便番号 -->
        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['memberInfo']->value['member_postalcode'], ENT_QUOTES, 'UTF-8', true);?>
&nbsp;</td>
        <!-- 発行状態 -->
        <td>
<?php if ($_smarty_tpl->tpl_vars['memberInfo']->value['issue_state_code']=="1") {?>
            発行依頼済み
<?php } elseif ($_smarty_tpl->tpl_vars['memberInfo']->value['issue_state_code']=="2") {?>
            発行中
<?php } elseif ($_smarty_tpl->tpl_vars['memberInfo']->value['issue_state_code']=="3") {?>
            発行完了
<?php } elseif ($_smarty_tpl->tpl_vars['memberInfo']->value['issue_state_code']=="4") {?>
            削除
<?php }?>
        </td>
<?php if ($_smarty_tpl->tpl_vars['memberInfo']->value['issue_state_code']=="1") {?>
        <td class="operate">
            <a class="btn_mini" href="../mng/dispmemberinfo?did=<?php echo $_smarty_tpl->tpl_vars['memberInfo']->value['member_id'];?>
">表示</a>
        </td>
        <td class="operate">
            <a class="cancel_btn btn_mini" href="../mng/cancelmemberqrorder?did=<?php echo $_smarty_tpl->tpl_vars['memberInfo']->value['member_id'];?>
" onclick="return false;" >キャンセル</a>
        </td>
<?php } elseif ($_smarty_tpl->tpl_vars['memberInfo']->value['issue_state_code']=="2") {?>
        <td class="operate">－</td>
        <td class="operate">－</td>
<?php } elseif ($_smarty_tpl->tpl_vars['memberInfo']->value['issue_state_code']=="3") {?>
        <td class="operate">
            <a class="btn_mini" href="../mng/dispmemberinfo?did=<?php echo $_smarty_tpl->tpl_vars['memberInfo']->value['member_id'];?>
">表示</a>
        </td>
        <td class="operate">
            <a class="btn_mini" href="../mng/downloadqrpdf?did=<?php echo $_smarty_tpl->tpl_vars['memberInfo']->value['member_id'];?>
">ダウンロード</a>
        </td>
<?php } elseif ($_smarty_tpl->tpl_vars['memberInfo']->value['issue_state_code']=="4") {?>
        <td class="operate">－</td>
        <td class="operate">－</td>
<?php }?>
        </td>
    </tr>
<?php } ?>
</table>

<p class="page"><?php echo $_smarty_tpl->tpl_vars['now']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['all']->value;?>
ページ　<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
件中<?php echo $_smarty_tpl->tpl_vars['firstItemNumber']->value;?>
～<?php echo $_smarty_tpl->tpl_vars['lastItemNumber']->value;?>
件を表示</p>
<p class="page">
<?php  $_smarty_tpl->tpl_vars["page"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["page"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pagesInRange']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["page"]->key => $_smarty_tpl->tpl_vars["page"]->value) {
$_smarty_tpl->tpl_vars["page"]->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['page']->value==$_smarty_tpl->tpl_vars['now']->value) {?>
        <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&nbsp;&nbsp;
    <?php } else { ?>
        <a href="../mng/dispmemberpaging?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a>&nbsp;&nbsp;
    <?php }?>
<?php } ?>
</p>
<?php }} ?>
