<?php /* Smarty version Smarty-3.1.19, created on 2018-04-03 18:23:27
         compiled from "../../folder_app_ms-goen/application/smarty/templates/mng_member_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15632697715abf01815a95b4-15977870%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e63a0961e163eb939f93e4712da93187746a614' => 
    array (
      0 => '../../folder_app_ms-goen/application/smarty/templates/mng_member_list.tpl',
      1 => 1522747405,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15632697715abf01815a95b4-15977870',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5abf0181636314_97020178',
  'variables' => 
  array (
    'searchFrom' => 0,
    'searchTo' => 0,
    'searchMemberName' => 0,
    'searchMemberMailAddress' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5abf0181636314_97020178')) {function content_5abf0181636314_97020178($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>ご縁アプリ管理システム</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="robots" content="noindex,nofollow">
<meta name="author" content="株式会社デジタルスペースワウ" />
<link rel="stylesheet" type="text/css" media="all" href="../../../../ms-goen/css/default.css">
<link rel="stylesheet" type="text/css" media="all" href="../../../../ms-goen/css/layout.css">
<link rel="stylesheet" type="text/css" media="screen" href="../../../../ms-goen/css/smoothness/jquery-ui-1.10.4.custom.min.css" />
<script type="text/javascript" src="../../../../ms-goen/js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="../../../../ms-goen/js/jquery-ui-1.10.4.custom.min.js"></script>
<script type="text/javascript" src="../../../../ms-goen/js/jquery.ui.datepicker-ja.js"></script>
<script type="text/javascript" src="../../../../ms-goen/js/deceased-list.js"></script>
</head>
<body>
<div id="container">
<div id="main">
<?php echo $_smarty_tpl->getSubTemplate ("include/mng_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("include/jsng.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="jsok" style="display:none;">
<?php echo $_smarty_tpl->getSubTemplate ("include/mng_menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="contents">
<h2>会員様一覧</h2>
<p class="entry_btn"><a class="btn" href="../mng/dispmemberqrorder">会員様QR発注</a></p>

<div id="search">
<form method="get" action="../mng/dispmembersearch">
    入会日　 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <!-- 入会日From -->
    <input id="datepickerFrom" type="text" name="search_from" value="<?php echo $_smarty_tpl->tpl_vars['searchFrom']->value;?>
" readonly="readonly" placeholder="From" />
    ～
    <!-- 入会日to -->
    <input id="datepickerTo" type="text" name="search_to" value="<?php echo $_smarty_tpl->tpl_vars['searchTo']->value;?>
" readonly="readonly" placeholder="To" />
   <br /> <br />
    <!-- 会員様名 -->
    会員様名　&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" name="search_member_name" value="<?php echo $_smarty_tpl->tpl_vars['searchMemberName']->value;?>
" placeholder="会員様名" />
    &nbsp;&nbsp;&nbsp;&nbsp;入力の際、苗字と名前の間は<span style="color:red;">半角スペース</span>を空けてください。
    <br /><br />

    メールアドレス&nbsp;&nbsp;&nbsp;
    <input type="text" name="search_member_mailaddress" value="<?php echo $_smarty_tpl->tpl_vars['searchMemberMailAddress']->value;?>
" placeholder="メールアドレス" />
    <br /><br /><br />

    <!-- ボタン -->
    <input id="search_btn" class="btn" type="submit" name="search" value="検索" />
    <input id="clear_btn" class="btn" type="submit" name="clear" value="条件解除" />
</form>
</div>

<div id="reload_member">
<?php echo $_smarty_tpl->getSubTemplate ('mng_member_list_reload.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div><!-- reload -->
</div><!-- contents -->
</div><!-- jsok -->
</div><!-- main -->
<?php echo $_smarty_tpl->getSubTemplate ("include/mng_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div><!-- container -->

<div id="dialog" title="会員様QR発注キャンセル">
<p>会員様QRの発注をキャンセルします。<br />よろしいですか？</p>
</div><!-- dialog -->

</body>
</html>
<?php }} ?>
