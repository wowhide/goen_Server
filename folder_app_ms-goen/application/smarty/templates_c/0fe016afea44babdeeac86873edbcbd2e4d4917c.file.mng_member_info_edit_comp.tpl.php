<?php /* Smarty version Smarty-3.1.19, created on 2018-04-06 17:11:27
         compiled from "../../folder_app_ms-goen/application/smarty/templates/mng_member_info_edit_comp.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11351978525ac72baf5c7ba9-93557927%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0fe016afea44babdeeac86873edbcbd2e4d4917c' => 
    array (
      0 => '../../folder_app_ms-goen/application/smarty/templates/mng_member_info_edit_comp.tpl',
      1 => 1522994672,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11351978525ac72baf5c7ba9-93557927',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'memberId' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ac72baf615782_75724866',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac72baf615782_75724866')) {function content_5ac72baf615782_75724866($_smarty_tpl) {?><!DOCTYPE html>
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
</head>
<body>
<div id="container">
<div id="main">
<?php echo $_smarty_tpl->getSubTemplate ("include/mng_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("include/jsng.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="jsok" style="display:none;">
<?php echo $_smarty_tpl->getSubTemplate ("include/mng_menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<p class="breadcrumb"><a href="../mng/dispmemberlist">会員様一覧</a> ＞ <a href="../mng/dispmemberinfo?did=<?php echo $_smarty_tpl->tpl_vars['memberId']->value;?>
">会員様表示</a> ＞ 会員様編集</p>
<div id="contents">
<h2>会員様編集完了</h2>
<p>編集が完了しました。</p>
</div><!-- contents -->
</div><!-- jsok -->
</div><!-- main -->
<?php echo $_smarty_tpl->getSubTemplate ("include/mng_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div><!-- container -->
</body>
</html>
<?php }} ?>
