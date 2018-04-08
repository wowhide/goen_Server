<?php /* Smarty version Smarty-3.1.19, created on 2017-09-08 10:30:02
         compiled from "../../folder_app_ms-kazuya/application/smarty/templates/mng_deceased_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:206225515959b1f29a28db35-96782318%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c51c56da96e5d3b77ceafe053252772b1513942' => 
    array (
      0 => '../../folder_app_ms-kazuya/application/smarty/templates/mng_deceased_list.tpl',
      1 => 1504834167,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206225515959b1f29a28db35-96782318',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'searchFrom' => 0,
    'searchTo' => 0,
    'searchDeceasedName' => 0,
    'searchPersonInCharge' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59b1f29a2e9e81_15855860',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b1f29a2e9e81_15855860')) {function content_59b1f29a2e9e81_15855860($_smarty_tpl) {?><!DOCTYPE html>
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
<script type="text/javascript" src="http://ms-kazuya.memorial-srv.com/js/deceased-list.js"></script>
</head>
<body>
<div id="container">
<div id="main">
<?php echo $_smarty_tpl->getSubTemplate ("include/mng_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("include/jsng.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="jsok" style="display:none;">
<?php echo $_smarty_tpl->getSubTemplate ("include/mng_menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="contents">
<h2>故人様一覧</h2>
<p class="entry_btn"><a class="btn" href="../mng/dispdeceasedqrorder">故人様QR発注</a></p>

<div id="search">
<form method="get" action="../mng/dispdeceasedsearch">
    発注日　&nbsp;&nbsp;&nbsp;&nbsp;
    <!-- 発注日From -->
    <input id="datepickerFrom" type="text" name="search_from" value="<?php echo $_smarty_tpl->tpl_vars['searchFrom']->value;?>
" readonly="readonly" placeholder="From" />
    ～
    <!-- 発注日to -->
    <input id="datepickerTo" type="text" name="search_to" value="<?php echo $_smarty_tpl->tpl_vars['searchTo']->value;?>
" readonly="readonly" placeholder="To" />
   <br /> <br />
    <!-- 故人名 -->   
    故人名　&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" name="search_deceased_name" value="<?php echo $_smarty_tpl->tpl_vars['searchDeceasedName']->value;?>
" placeholder="故人名" />
    &nbsp;&nbsp;&nbsp;&nbsp;入力の際、苗字と名前の間は<span style="color:red;">半角スペース</span>を空けてください。
    <br /><br />

    担当者名&nbsp;&nbsp;&nbsp;
    <input type="text" name="search_deceased_personincharge" value="<?php echo $_smarty_tpl->tpl_vars['searchPersonInCharge']->value;?>
" placeholder="担当者名" />
    <br /><br /><br />

    <!-- ボタン -->
    <input id="search_btn" class="btn" type="submit" name="search" value="検索" />
    <input id="clear_btn" class="btn" type="submit" name="clear" value="条件解除" />
</form>
</div>

<div id="reload">
<?php echo $_smarty_tpl->getSubTemplate ('mng_deceased_list_reload.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div><!-- reload -->
</div><!-- contents -->
</div><!-- jsok -->
</div><!-- main -->
<?php echo $_smarty_tpl->getSubTemplate ("include/mng_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div><!-- container -->

<div id="dialog" title="故人様QR発注キャンセル">
<p>故人様QRの発注をキャンセルします。<br />よろしいですか？</p>
</div><!-- dialog -->

</body>
</html>
<?php }} ?>
