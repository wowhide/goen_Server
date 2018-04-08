<?php /* Smarty version Smarty-3.1.19, created on 2018-04-07 19:04:17
         compiled from "../../folder_app_ms-goen/application/smarty/templates/mng_member_qr_order_conf.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1077738325ac2eedc30ba93-56917568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e3c84f94a905a3b206e34ebfe8ef09ff3049d91' => 
    array (
      0 => '../../folder_app_ms-goen/application/smarty/templates/mng_member_qr_order_conf.tpl',
      1 => 1523095452,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1077738325ac2eedc30ba93-56917568',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ac2eedc383600_75010331',
  'variables' => 
  array (
    'memberLastName' => 0,
    'memberFirstName' => 0,
    'memberBirthday' => 0,
    'memberPostalcode' => 0,
    'memberTel' => 0,
    'memberMailaddress' => 0,
    'memberAddress' => 0,
    'allowPush' => 0,
    'token' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac2eedc383600_75010331')) {function content_5ac2eedc383600_75010331($_smarty_tpl) {?><!DOCTYPE html>
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
<script type="text/javascript" src="../../../../ms-goen/js/deceased-input.js"></script>
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
<div id="qr_order">
<h2>会員様QR発注確認</h2>
<p>下記内容で発注します。<br />よろしければ送信ボタンをクリックして下さい。</p>
<form method="post" action="../mng/compmemberqrorder" enctype="multipart/form-data" onSubmit="return double()">
    <table>
        <tr><th>会員様名</th><td><?php echo $_smarty_tpl->tpl_vars['memberLastName']->value;?>
　<?php echo $_smarty_tpl->tpl_vars['memberFirstName']->value;?>
　様</td></tr>
        <tr><th>生年月日</th><td><?php echo $_smarty_tpl->tpl_vars['memberBirthday']->value;?>
</td></tr>
        <tr><th>郵便番号</th><td><?php echo $_smarty_tpl->tpl_vars['memberPostalcode']->value;?>
</td></tr>
        <tr><th>電話番号</th><td><?php echo $_smarty_tpl->tpl_vars['memberTel']->value;?>
</td></tr>
        <tr><th>メールアドレス</th><td><?php echo $_smarty_tpl->tpl_vars['memberMailaddress']->value;?>
</td></tr>
        <tr><th>住所</th><td><?php echo $_smarty_tpl->tpl_vars['memberAddress']->value;?>
</td></tr>
        <tr><th>プッシュ通知</th><td><?php echo $_smarty_tpl->tpl_vars['allowPush']->value;?>
</td></tr>
    </table>
    <input class="btn" type="submit" name="back" value="戻る" />
    <input class="btn" type="submit" name="send" value="送信" />
    <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
">
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
