<?php /* Smarty version Smarty-3.1.19, created on 2017-09-08 17:51:56
         compiled from "../../folder_app_ms-kazuya/application/smarty/templates/mng_deceased_info_edit_comp.tpl" */ ?>
<?php /*%%SmartyHeaderCode:86072260959b25a2c2aa662-22800639%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd98a0315967b333d89e66c43146b49b2478b3291' => 
    array (
      0 => '../../folder_app_ms-kazuya/application/smarty/templates/mng_deceased_info_edit_comp.tpl',
      1 => 1504834167,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86072260959b25a2c2aa662-22800639',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'deceasedId' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59b25a2c2dee95_64783129',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b25a2c2dee95_64783129')) {function content_59b25a2c2dee95_64783129($_smarty_tpl) {?><!DOCTYPE html>
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

<p class="breadcrumb"><a href="../mng/dispdeceasedlist">故人様一覧</a> ＞ <a href="../mng/dispdeceasedinfo?did=<?php echo $_smarty_tpl->tpl_vars['deceasedId']->value;?>
">故人様表示</a> ＞ 故人様編集</p>
<div id="contents">
<h2>故人様編集完了</h2>
<p>編集が完了しました。</p>
</div><!-- contents -->
</div><!-- jsok -->
</div><!-- main -->
<?php echo $_smarty_tpl->getSubTemplate ("include/mng_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div><!-- container -->
</body>
</html>
<?php }} ?>
