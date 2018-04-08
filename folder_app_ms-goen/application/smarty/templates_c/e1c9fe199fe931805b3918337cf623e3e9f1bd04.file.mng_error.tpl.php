<?php /* Smarty version Smarty-3.1.19, created on 2018-04-03 16:58:54
         compiled from "../../folder_app_ms-goen/application/smarty/templates/mng_error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:286696135ac3343eeda342-49031453%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1c9fe199fe931805b3918337cf623e3e9f1bd04' => 
    array (
      0 => '../../folder_app_ms-goen/application/smarty/templates/mng_error.tpl',
      1 => 1522387638,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '286696135ac3343eeda342-49031453',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ac3343ef11ba0_10873207',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac3343ef11ba0_10873207')) {function content_5ac3343ef11ba0_10873207($_smarty_tpl) {?><!DOCTYPE html>
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
