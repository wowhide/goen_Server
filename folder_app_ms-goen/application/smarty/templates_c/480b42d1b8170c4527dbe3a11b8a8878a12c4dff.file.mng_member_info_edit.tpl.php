<?php /* Smarty version Smarty-3.1.19, created on 2018-04-07 17:01:40
         compiled from "../../folder_app_ms-goen/application/smarty/templates/mng_member_info_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11256585205ac6fc6d000dd1-95845141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '480b42d1b8170c4527dbe3a11b8a8878a12c4dff' => 
    array (
      0 => '../../folder_app_ms-goen/application/smarty/templates/mng_member_info_edit.tpl',
      1 => 1523088090,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11256585205ac6fc6d000dd1-95845141',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ac6fc6d0dbe83_39269539',
  'variables' => 
  array (
    'memberId' => 0,
    'message' => 0,
    'memberLastName' => 0,
    'memberFirstName' => 0,
    'memberBirthdayY' => 0,
    'memberBirthdayM' => 0,
    'memberBirthdayD' => 0,
    'memberPostalcodeF' => 0,
    'memberPostalcodeR' => 0,
    'memberTelF' => 0,
    'memberTelC' => 0,
    'memberTelR' => 0,
    'memberMailaddress' => 0,
    'memberEntrypassword' => 0,
    'checked5' => 0,
    'checked6' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac6fc6d0dbe83_39269539')) {function content_5ac6fc6d0dbe83_39269539($_smarty_tpl) {?><!DOCTYPE html>
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
<script type="text/javascript" src="../../../../ms-goen/js/deceased-input.js"></script>
</head>
<body>
<div id="container">
<div id="main">
<?php echo $_smarty_tpl->getSubTemplate ("include/mng_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("include/jsng.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="jsok" style="display:none;">
<?php echo $_smarty_tpl->getSubTemplate ("include/mng_menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<p class="breadcrumb"><a href="../mng/dispmemberlist">会員様一覧</a> ＞ <a href="../mng/dispmemberinfo?did=<?php echo $_smarty_tpl->tpl_vars['memberId']->value;?>
">会員様表示</a> ＞ 会員様編集</p>
<div id="contents">
<div id="deceased_edit">
<h2>会員様編集</h2>
<p class="input_caution">※パソコンで入力できない旧漢字等の文字や環境依存文字は使用できませんのでご了承ください。</p>
<p class="message"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
<form method="post" action="../mng/confeditmemberinfo" enctype="multipart/form-data" onSubmit="return double()">
<table>
    <tr><th>会員様名（必須）</th>
        <td>
            <input id="deceased_last_name" type="text" name="member_last_name" value="<?php echo $_smarty_tpl->tpl_vars['memberLastName']->value;?>
" maxlength="10" style="ime-mode: active;" />
            <input id="deceased_first_name" type="text" name="member_first_name" value="<?php echo $_smarty_tpl->tpl_vars['memberFirstName']->value;?>
" maxlength="10" style="ime-mode: active;" />　様
            <span style="margin-left:30px;">※苗字は編集できます。必要に応じて修正してください。</span>
        </td>
    </tr>
    <tr><th>生年月日（必須）</th>
        <td>
            西暦&nbsp;<input id="deceased_birthday_y" type="text" name="member_birthday_y" value="<?php echo $_smarty_tpl->tpl_vars['memberBirthdayY']->value;?>
" maxlength="4" style="ime-mode: disabled;" />&nbsp;年
            <input id="deceased_birthday_m" type="text" name="member_birthday_m" value="<?php echo $_smarty_tpl->tpl_vars['memberBirthdayM']->value;?>
" maxlength="2" style="ime-mode: disabled;" />&nbsp;月
            <input id="deceased_birthday_d" type="text" name="member_birthday_d" value="<?php echo $_smarty_tpl->tpl_vars['memberBirthdayD']->value;?>
" maxlength="2" style="ime-mode: disabled;" />&nbsp;日
        </td>
    </tr>

    <tr><th>郵便番号（必須）</th>
        <td>〒
            <input id="deceased_birthday_y" type="text" name="member_postalcode_f" value="<?php echo $_smarty_tpl->tpl_vars['memberPostalcodeF']->value;?>
" maxlength="3" style="ime-mode: disabled;" />&nbsp;-
            <input id="deceased_birthday_y" type="text" name="member_postalcode_r" value="<?php echo $_smarty_tpl->tpl_vars['memberPostalcodeR']->value;?>
" maxlength="4" style="ime-mode: disabled;" />&nbsp;
        </td>
    </tr>

    <tr><th>電話番号（必須）</th>
        <td>
            <input id="deceased_birthday_y" type="text" name="member_tel_f" value="<?php echo $_smarty_tpl->tpl_vars['memberTelF']->value;?>
" maxlength="3" style="ime-mode: disabled;" />&nbsp;-
            <input id="deceased_birthday_y" type="text" name="member_tel_c" value="<?php echo $_smarty_tpl->tpl_vars['memberTelC']->value;?>
" maxlength="4" style="ime-mode: disabled;" />&nbsp;-
            <input id="deceased_birthday_y" type="text" name="member_tel_r" value="<?php echo $_smarty_tpl->tpl_vars['memberTelR']->value;?>
" maxlength="4" style="ime-mode: disabled;" />&nbsp;
        </td>
    </tr>

    <tr><th>メールアドレス必須）</th>
        <td>
            <input id="member_mailaddress" type="text" name="member_mailaddress" value="<?php echo $_smarty_tpl->tpl_vars['memberMailaddress']->value;?>
" style="ime-mode: disabled;" />&nbsp;
        </td>
    </tr>

    <tr><th>パスワード（必須）</th>
        <td>
            <input id="hall_name" type="password" name="member_entrypassword" value="<?php echo $_smarty_tpl->tpl_vars['memberEntrypassword']->value;?>
" maxlength="10" style="ime-mode: active;" />
                <span>4～10字の（半角英数字）</span>
        </td>
    </tr>

    <tr><th>プッシュ通知(必須)</th>
        <td>
            <input type="radio" name="allow_push" value="1" <?php echo $_smarty_tpl->tpl_vars['checked5']->value;?>
>&nbsp;通知する&nbsp;&nbsp;
            <input type="radio" name="allow_push" value="2" <?php echo $_smarty_tpl->tpl_vars['checked6']->value;?>
>&nbsp;通知しない&nbsp;&nbsp;
        </td>
    </tr>

</table>

<div class="btn_row">
<input type="hidden" name="member_id" value="<?php echo $_smarty_tpl->tpl_vars['memberId']->value;?>
" />
<input class="btn" type="submit" name="back" value="戻る" />
<input class="btn" type="submit" name="confirm" value="確認" />
</form>
</div><!-- btn_row -->

</div>
</div><!-- contents -->
</div><!-- jsok -->
</div><!-- main -->
<?php echo $_smarty_tpl->getSubTemplate ("include/mng_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div><!-- container -->
</body>
</html>
<?php }} ?>
