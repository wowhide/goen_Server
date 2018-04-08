<?php /* Smarty version Smarty-3.1.19, created on 2018-03-31 12:27:48
         compiled from "../../folder_app_ms-goen/application/smarty/templates/include/mng_menu.html" */ ?>
<?php /*%%SmartyHeaderCode:13119401975abdceb7bf7222-88677703%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd3d5e7c6b50fc67417409c92ca9568428e658ca' => 
    array (
      0 => '../../folder_app_ms-goen/application/smarty/templates/include/mng_menu.html',
      1 => 1522466859,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13119401975abdceb7bf7222-88677703',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5abdceb7bf9125_32369621',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5abdceb7bf9125_32369621')) {function content_5abdceb7bf9125_32369621($_smarty_tpl) {?><div id="menu">
<ul>
	<li><a href="../mng/dispmemberlist">&gt;会員様一覧</a></li>
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
