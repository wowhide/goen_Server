<?php /* Smarty version Smarty-3.1.19, created on 2017-09-08 15:56:03
         compiled from "../../folder_app_ms-kazuya/application/smarty/templates/mng_notice_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:150217440059b23f0343e912-83790559%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed4abe57eb09aadbf533fa4b70539feb8b93b272' => 
    array (
      0 => '../../folder_app_ms-kazuya/application/smarty/templates/mng_notice_view.tpl',
      1 => 1504834168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150217440059b23f0343e912-83790559',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'noticeTitle' => 0,
    'noticeText' => 0,
    'url' => 0,
    'imageExistenceFlg' => 0,
    'noticeInfoNo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59b23f034af0b6_55644264',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b23f034af0b6_55644264')) {function content_59b23f034af0b6_55644264($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" media="all" href="http://ms-kazuya.memorial-srv.com/css/default.css">
<link rel="stylesheet" type="text/css" media="all" href="http://ms-kazuya.memorial-srv.com/css/view.css?20140527">
</head>
<body>
<div id="container">
<div id="main">
<div id="contents">
<h2><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['noticeTitle']->value, ENT_QUOTES, 'UTF-8', true);?>
</h2>
<p id="text"><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['noticeText']->value, ENT_QUOTES, 'UTF-8', true));?>
</p>
<?php if (empty($_smarty_tpl->tpl_vars['url']->value)==false) {?>
    <p id="url"><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['url']->value;?>
</a></p>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['imageExistenceFlg']->value==1) {?>
    <p id="image"><img src="../mng/readimage?nino=<?php echo $_smarty_tpl->tpl_vars['noticeInfoNo']->value;?>
" /></p>
<?php }?>
<hr>
<p id="funeral"><b>有限会社かずや</b><br>
〒865-0023<br>
熊本県玉名市大倉1408-1<br>
<a href="tel:0968733420">0968-73-3420</a><br>
<a href="http://www.kazuya-group.comß">http://www.kazuya-group.comß</a></p>
</div>
</div>
<div id="foot">
<p>&copy; 2017 有限会社　かずや</p>
</div>
</div>
</body>
</html>
<?php }} ?>
