<?php /* Smarty version Smarty-3.1.19, created on 2017-09-08 16:26:11
         compiled from "../../folder_app_ms-kazuya/application/smarty/templates/mng_deceased_info_popup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:81798426259b24613506153-50687735%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a073befa54ceb60fae0bd9d837aef0c97792eda0' => 
    array (
      0 => '../../folder_app_ms-kazuya/application/smarty/templates/mng_deceased_info_popup.tpl',
      1 => 1504834167,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '81798426259b24613506153-50687735',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'chargeName' => 0,
    'hallName' => 0,
    'deceasedName' => 0,
    'deceasedBirthday' => 0,
    'deceasedDeathday' => 0,
    'kyonenGyonen' => 0,
    'deathAge' => 0,
    'imageExistenceFlg' => 0,
    'deceasedId' => 0,
    'cacheKey' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59b246135a5667_41145421',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b246135a5667_41145421')) {function content_59b246135a5667_41145421($_smarty_tpl) {?><!DOCTYPE html>
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
<script type="text/javascript" src="http://ms-kazuya.memorial-srv.com/js/deceased-info.js"></script>
</head>
<body>
<div id="container">
<div id="main">
<div id="jsok" style="display:none;">
<div id="contents">
<div id="deceased">
<h2>故人様情報</h2>
<table>
    <tr><th>担当者名</th>
        <td>
            <?php if (strlen($_smarty_tpl->tpl_vars['chargeName']->value)>0) {?>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chargeName']->value, ENT_QUOTES, 'UTF-8', true);?>
　様
            <?php } else { ?>
                －
            <?php }?>
        </td>
    </tr>
    <tr><th>会館名</th>
        <td>
            <?php if (strlen($_smarty_tpl->tpl_vars['hallName']->value)>0) {?>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hallName']->value, ENT_QUOTES, 'UTF-8', true);?>

            <?php } else { ?>
                －
            <?php }?>
        </td>
    </tr>
    <tr><th>故人様名</th><td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['deceasedName']->value, ENT_QUOTES, 'UTF-8', true);?>
　様</td></tr>
    <tr><th>生年月日</th><td><?php echo date('Y/m/d',strtotime($_smarty_tpl->tpl_vars['deceasedBirthday']->value));?>
</td></tr>
    <tr><th>没年月日</th><td><?php echo date('Y/m/d',strtotime($_smarty_tpl->tpl_vars['deceasedDeathday']->value));?>
</td></tr>
    <tr><th>没年齢</th><td><?php echo $_smarty_tpl->tpl_vars['kyonenGyonen']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['deathAge']->value;?>
　歳</td></tr>
    <tr><th>写真</th>
        <td>
            <?php if ($_smarty_tpl->tpl_vars['imageExistenceFlg']->value==1) {?>
                <img src="../mng/readdeceasedimage?did=<?php echo $_smarty_tpl->tpl_vars['deceasedId']->value;?>
&c=<?php echo $_smarty_tpl->tpl_vars['cacheKey']->value;?>
" width=200 />
            <?php } else { ?>
                －
            <?php }?>
        </td>
    </tr>
</table>

<div style="text-align: center;">
<input class="btn" type="button" value="閉じる" onclick="window.close();" />
</div>

</div><!-- deceased -->
</div><!-- contents -->
</div><!-- jsok -->
</div><!-- main -->
<?php echo $_smarty_tpl->getSubTemplate ("include/mng_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div><!-- container -->
</body>
</html>
<?php }} ?>
