<?php /* Smarty version Smarty-3.1.19, created on 2017-09-20 10:34:21
         compiled from "../../folder_app_ms-kazuya/application/smarty/templates/mng_error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:124321612859c1c59d03e7d6-40132054%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9eb411ae1895dccd8c248d7dfe320d9267b129df' => 
    array (
      0 => '../../folder_app_ms-kazuya/application/smarty/templates/mng_error.tpl',
      1 => 1504834168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124321612859c1c59d03e7d6-40132054',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59c1c59d2aa4c5_89798490',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c1c59d2aa4c5_89798490')) {function content_59c1c59d2aa4c5_89798490($_smarty_tpl) {?><!DOCTYPE html>
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
</head>
<body>
<div id="container">
<div id="main">
<?php echo $_smarty_tpl->getSubTemplate ("include/mng_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="contents">
<p class="message">エラーが発生しました。<br>お手数ですがもう一度最初から操作し直して下さい。</p>
<p><a href="../mng/index">トップに戻る</a></p>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("include/mng_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
</body>
</html>
<?php }} ?>
