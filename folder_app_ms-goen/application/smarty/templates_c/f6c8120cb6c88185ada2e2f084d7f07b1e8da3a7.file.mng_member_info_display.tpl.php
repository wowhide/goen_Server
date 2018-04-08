<?php /* Smarty version Smarty-3.1.19, created on 2018-04-07 14:01:40
         compiled from "../../folder_app_ms-goen/application/smarty/templates/mng_member_info_display.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7085875845ac351d71166e7-73857112%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6c8120cb6c88185ada2e2f084d7f07b1e8da3a7' => 
    array (
      0 => '../../folder_app_ms-goen/application/smarty/templates/mng_member_info_display.tpl',
      1 => 1523077295,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7085875845ac351d71166e7-73857112',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ac351d72078b9_91844940',
  'variables' => 
  array (
    'issueStateCode' => 0,
    'issueDatetime' => 0,
    'entryDatetime' => 0,
    'memberName' => 0,
    'memberBirthday' => 0,
    'memberPostalcode' => 0,
    'memberTel' => 0,
    'memberMailaddress' => 0,
    'allowPush' => 0,
    'hallName' => 0,
    'memberId' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac351d72078b9_91844940')) {function content_5ac351d72078b9_91844940($_smarty_tpl) {?><!DOCTYPE html>
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
<script type="text/javascript" src="../../../../ms-goen/js/deceased-info.js"></script>
</head>
<body>
<div id="container">
<div id="main">
<?php echo $_smarty_tpl->getSubTemplate ("include/mng_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("include/jsng.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="jsok" style="display:none;">
<?php echo $_smarty_tpl->getSubTemplate ("include/mng_menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<p class="breadcrumb"><a href="../mng/dispmemberlist">会員様一覧</a> ＞ 会員様表示</p>
<div id="contents">
<div id="deceased">
<h2>会員様表示</h2>
<table>
    <tr><th>発注日時</th>
        <td>
            <?php if ($_smarty_tpl->tpl_vars['issueStateCode']->value=="1") {?>
                －
            <?php } else { ?>
                <?php echo date('Y/m/d G:i',strtotime($_smarty_tpl->tpl_vars['issueDatetime']->value));?>

            <?php }?>
        </td></tr>
    <tr><th>発行日</th>
        <td>
            <?php if (strlen($_smarty_tpl->tpl_vars['entryDatetime']->value>0)) {?>
                <?php echo date('Y/m/d',strtotime($_smarty_tpl->tpl_vars['entryDatetime']->value));?>

            <?php } else { ?>
                －
            <?php }?>
        </td>
    </tr>
    <tr><th>会員様名</th><td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['memberName']->value, ENT_QUOTES, 'UTF-8', true);?>
　様</td></tr>
    <tr><th>生年月日</th><td><?php echo date('Y/m/d',strtotime($_smarty_tpl->tpl_vars['memberBirthday']->value));?>
</td></tr>
    <tr><th>郵便番号</th><td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['memberPostalcode']->value, ENT_QUOTES, 'UTF-8', true);?>
</td></tr>   
    <tr><th>電話番号</th><td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['memberTel']->value, ENT_QUOTES, 'UTF-8', true);?>
</td></tr>
    <tr><th>メールアドレス</th><td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['memberMailaddress']->value, ENT_QUOTES, 'UTF-8', true);?>
</td></tr>
    <tr><th>プッシュ通知</th><td><?php echo $_smarty_tpl->tpl_vars['allowPush']->value;?>
</td></tr>
<!--     <tr><th>会館名</th>
        <td>
            <?php if (strlen($_smarty_tpl->tpl_vars['hallName']->value)>0) {?>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hallName']->value, ENT_QUOTES, 'UTF-8', true);?>

            <?php } else { ?>
                －
            <?php }?>
        </td>
    </tr> -->

</table>

<div class="btn_row">
<form method="get" action="../mng/dispmemberreturn" onSubmit="return double()">
    <input class="btn" type="submit" value="戻る" />
</form>
<?php if ($_smarty_tpl->tpl_vars['issueStateCode']->value=="3") {?>
    <form id="del_form" method="post" action="../mng/delmemberinfo" onSubmit="return double()">
        <input type="hidden" name="member_id" value="<?php echo $_smarty_tpl->tpl_vars['memberId']->value;?>
">
        <input class="btn" id="deceased_info_del" type="button" value="削除" />
    </form>
    <form method="post" action="../mng/dispeditmemberinfo" onSubmit="return double()">
        <input type="hidden" name="member_id" value="<?php echo $_smarty_tpl->tpl_vars['memberId']->value;?>
">
        <input class="btn" type="submit" value="編集" />
    </form>
<?php }?>
</div><!-- btn_row -->

</div><!-- deceased -->
</div><!-- contents -->
</div><!-- jsok -->
</div><!-- main -->
<?php echo $_smarty_tpl->getSubTemplate ("include/mng_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div><!-- container -->

<div id="dialog" title="会員情報削除">
<p>会員情報を削除します。<br />よろしいですか？</p>
</div><!-- dialog -->

</body>
</html>
<?php }} ?>
