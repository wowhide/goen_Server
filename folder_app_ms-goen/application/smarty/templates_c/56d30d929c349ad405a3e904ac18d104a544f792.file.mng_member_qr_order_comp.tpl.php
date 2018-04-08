<?php /* Smarty version Smarty-3.1.19, created on 2018-04-03 17:00:35
         compiled from "../../folder_app_ms-goen/application/smarty/templates/mng_member_qr_order_comp.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2766126825ac309f9556ad5-39427920%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56d30d929c349ad405a3e904ac18d104a544f792' => 
    array (
      0 => '../../folder_app_ms-goen/application/smarty/templates/mng_member_qr_order_comp.tpl',
      1 => 1522742416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2766126825ac309f9556ad5-39427920',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ac309f958c9e6_95050617',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac309f958c9e6_95050617')) {function content_5ac309f958c9e6_95050617($_smarty_tpl) {?><!DOCTYPE html>
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

<p class="breadcrumb"><a href="../mng/dispmemberlist">会員様一覧</a> ＞ 会員様QR発注</p>
<div id="contents">
<h2>会員様QR発注完了</h2>
<!-- <p>ご発注ありがとうございます。<br />
    QRコードを掲載したアプリのご案内は、ご発注から約30分～40分でダウンロード可能となります。<br />
    今しばらくお待ち願います。</p> -->
<p>ご発注ありがとうございます。<br />
    QRコードを掲載したアプリのご案内は、会員様一覧にてダウンロード可能です。<br />
    </p>
<!-- <p class="note"><span class="aka">※</span>QRコードの発行には営業時間内（9:00～18:00）で、約30～40分お時間を頂いております。<br>
営業時間外にご発注頂いた場合や発行時間が営業時間を超える場合、翌日の発行になりますのでご了承願います。</p> -->
</div><!-- contents -->
</div><!-- jsok -->
</div><!-- main -->
<?php echo $_smarty_tpl->getSubTemplate ("include/mng_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div><!-- container -->
</body>
</html>
<?php }} ?>
