<?php /* Smarty version Smarty-3.1.19, created on 2017-09-08 17:51:46
         compiled from "../../folder_app_ms-kazuya/application/smarty/templates/mng_deceased_info_edit_conf.tpl" */ ?>
<?php /*%%SmartyHeaderCode:187104980659b25a225d4b82-71331476%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '836dad2a21a5be18f05420f9be1485cc1c4cae7f' => 
    array (
      0 => '../../folder_app_ms-kazuya/application/smarty/templates/mng_deceased_info_edit_conf.tpl',
      1 => 1504834167,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '187104980659b25a225d4b82-71331476',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'deceasedId' => 0,
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
  'unifunc' => 'content_59b25a2265fb99_20349602',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b25a2265fb99_20349602')) {function content_59b25a2265fb99_20349602($_smarty_tpl) {?><!DOCTYPE html>
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
<script type="text/javascript" src="http://ms-kazuya.memorial-srv.com/js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="http://ms-kazuya.memorial-srv.com/js/deceased-input.js"></script>
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
<div id="deceased_edit">
<h2>故人様編集確認</h2>
<p>下記内容で保存します。<br />よろしければ保存ボタンをクリックして下さい。</p>
<form method="post" action="../mng/compeditdeceasedinfo" enctype="multipart/form-data" onSubmit="return double()">
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
        <tr><th>会館名</th>
            <td>
<?php if (strcmp($_smarty_tpl->tpl_vars['hallName']->value,'')!=0) {?>
                <?php echo $_smarty_tpl->tpl_vars['hallName']->value;?>

<?php } else { ?>
                －
<?php }?>
            </td>
        </tr>
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
    <input class="btn" type="submit" name="save" value="保存" />
    <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
">
</form>
</div><!-- deceased_edit -->
</div><!-- contents -->
</div><!-- jsok -->
</div><!-- main -->
<?php echo $_smarty_tpl->getSubTemplate ("include/mng_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div><!-- container -->
</body>
</html>
<?php }} ?>
