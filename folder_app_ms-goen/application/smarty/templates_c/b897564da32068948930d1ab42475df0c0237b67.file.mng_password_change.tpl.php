<?php /* Smarty version Smarty-3.1.19, created on 2017-09-08 15:52:13
         compiled from "../../folder_app_ms-kazuya/application/smarty/templates/mng_password_change.tpl" */ ?>
<?php /*%%SmartyHeaderCode:130801546159b23e1d894f77-47646121%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b897564da32068948930d1ab42475df0c0237b67' => 
    array (
      0 => '../../folder_app_ms-kazuya/application/smarty/templates/mng_password_change.tpl',
      1 => 1504834168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130801546159b23e1d894f77-47646121',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
    'nowPassword' => 0,
    'newPassword' => 0,
    'confPassword' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59b23e1d8d51a5_75690605',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b23e1d8d51a5_75690605')) {function content_59b23e1d8d51a5_75690605($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>有限会社かずや法要アプリ管理システム</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="robots" content="noindex,nofollow"> 
<meta name="author" content="株式会社デジタルスペースワウ" />
<link rel="stylesheet" type="text/css" media="all" href="http://ms-kazuya.memorial-srv.com/css/default.css">
<link rel="stylesheet" type="text/css" media="all" href="http://ms-kazuya.memorial-srv.com/css/layout.css">
<link rel="stylesheet" type="text/css" media="screen" href="http://ms-kazuya.memorial-srv.com/css/smoothness/jquery-ui-1.10.4.custom.min.css" />
<script type="text/javascript" src="http://ms-kazuya.memorial-srv.com/js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="http://ms-kazuya.memorial-srv.com/js/jquery-ui-1.10.4.custom.min.js"></script>
<script type="text/javascript" src="http://ms-kazuya.memorial-srv.com/js/jquery.ui.datepicker-ja.js"></script>
</head>
<body>
<div id="container">
<div id="main">
<?php echo $_smarty_tpl->getSubTemplate ("include/mng_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("include/jsng.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="jsok" style="display:none;">
<?php echo $_smarty_tpl->getSubTemplate ("include/mng_menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<p class="breadcrumb">設定 ＞ ログインパスワード</p>
<div id="contents">
<div id="password_change">
<h2>ログインパスワード変更</h2>
<p>半角英数字6～10文字で設定してください</p>
<p class="message"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
<form method="post" action="../mng/confpasswordchange" enctype="multipart/form-data">
<table>
    <tr><th>現在のパスワード</th><td><input id="password" type="password" name="now_password" value="<?php echo $_smarty_tpl->tpl_vars['nowPassword']->value;?>
" maxlength="20"></input></td></tr>
    <tr><th>新しいパスワード</th><td><input id="password" type="password" name="new_password" value="<?php echo $_smarty_tpl->tpl_vars['newPassword']->value;?>
" maxlength="10"></input></td></tr>
    <tr><th>新しいパスワード（確認）</th><td><input id="password" type="password" name="conf_password" value="<?php echo $_smarty_tpl->tpl_vars['confPassword']->value;?>
" maxlength="10"></input></td></tr>
</table>
<input class="btn" type="submit" value="確認" />
</form>
</div>
</div><!-- contents -->
</div><!-- jsok -->
</div><!-- main -->
<?php echo $_smarty_tpl->getSubTemplate ("include/mng_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div><!-- container -->
</body>
</html>
<?php }} ?>
