<?php /* Smarty version Smarty-3.1.19, created on 2018-04-04 10:05:02
         compiled from "../../folder_app_ms-goen/application/smarty/templates/mng_deceased_qr_order_conf.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7417626495ac424be131239-48530448%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3abfca0c624ea2fc16261742201f6c1b779b4cae' => 
    array (
      0 => '../../folder_app_ms-goen/application/smarty/templates/mng_deceased_qr_order_conf.tpl',
      1 => 1522387638,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7417626495ac424be131239-48530448',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'chargeName' => 0,
    'souke' => 0,
    'deceasedLastName' => 0,
    'deceasedFirstName' => 0,
    'deceasedBirthday' => 0,
    'deceasedDeathday' => 0,
    'kyonenGyonen' => 0,
    'deathAge' => 0,
    'allowPush' => 0,
    'hallName' => 0,
    'imageExistenceFlg' => 0,
    'cacheKey' => 0,
    'token' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ac424be1d84a3_41792883',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac424be1d84a3_41792883')) {function content_5ac424be1d84a3_41792883($_smarty_tpl) {?><!DOCTYPE html>
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

<p class="breadcrumb"><a href="../mng/dispdeceasedlist">故人様一覧</a> ＞ 故人様QR発注</p>
<div id="contents">
<div id="qr_order">
<h2>故人様QR発注確認</h2>
<p>下記内容で発注します。<br />よろしければ送信ボタンをクリックして下さい。</p>
<form method="post" action="../mng/compdeceasedqrorder" enctype="multipart/form-data" onSubmit="return double()">
    <table>
        <tr><th>担当者名</th><td><?php echo $_smarty_tpl->tpl_vars['chargeName']->value;?>
　様</td></tr>
        <tr><th>葬家様名</th><td><?php echo $_smarty_tpl->tpl_vars['souke']->value;?>
　家様</td></tr>
        <tr><th>故人様名</th><td><?php echo $_smarty_tpl->tpl_vars['deceasedLastName']->value;?>
　<?php echo $_smarty_tpl->tpl_vars['deceasedFirstName']->value;?>
　様</td></tr>
        <tr><th>生年月日</th><td><?php echo $_smarty_tpl->tpl_vars['deceasedBirthday']->value;?>
</td></tr>
        <tr><th>没年月日</th><td><?php echo $_smarty_tpl->tpl_vars['deceasedDeathday']->value;?>
</td></tr>
        <tr><th>享年行年</th><td><?php echo $_smarty_tpl->tpl_vars['kyonenGyonen']->value;?>
</td></tr>
        <tr><th>没年齢</th><td><?php echo $_smarty_tpl->tpl_vars['deathAge']->value;?>
　歳</td></tr>
        <tr><th>プッシュ通知</th><td><?php echo $_smarty_tpl->tpl_vars['allowPush']->value;?>
</td></tr>
        <tr><th>会館名</th><td><?php echo $_smarty_tpl->tpl_vars['hallName']->value;?>
</td></tr>
        <tr><th>写真</th>
            <td>
<?php if ($_smarty_tpl->tpl_vars['imageExistenceFlg']->value==1) {?>
                <img src="../mng/readdeceasedtempimage?<?php echo $_smarty_tpl->tpl_vars['cacheKey']->value;?>
" width=200 />
<?php } else { ?>
                －
<?php }?>
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
