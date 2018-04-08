<?php /* Smarty version Smarty-3.1.19, created on 2017-09-08 10:30:02
         compiled from "../../folder_app_ms-kazuya/application/smarty/templates/include/mng_menu.html" */ ?>
<?php /*%%SmartyHeaderCode:214361699459b1f29a314701-83730085%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3de0a578a85af6ce1670c6f145754e4d080f160d' => 
    array (
      0 => '../../folder_app_ms-kazuya/application/smarty/templates/include/mng_menu.html',
      1 => 1504834169,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214361699459b1f29a314701-83730085',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59b1f29a317e56_15649271',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b1f29a317e56_15649271')) {function content_59b1f29a317e56_15649271($_smarty_tpl) {?><div id="menu">
<ul>
    <li><a href="../mng/dispdeceasedlist">&gt;故人様一覧</a></li>
    <li><a href="../mng/dispnoticeinfolist">&gt;通知情報一覧</a></li>
    <li>設定
        <ul>
            <li><a href="../mng/dispchargelist">&gt;担当者様</a></li>
            <li><a href="../mng/disppasswordchange">&gt;ﾛｸﾞｲﾝﾊﾟｽﾜｰﾄﾞ</a></li>
        </ul>
    </li>
    <li><a href="../mng/logout">&gt;&gt;ログアウト</a></li>
</ul>
</div>
<div class="clear"></div>
<?php }} ?>
