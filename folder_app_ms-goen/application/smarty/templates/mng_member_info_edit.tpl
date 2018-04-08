<!DOCTYPE html>
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
{include file="include/mng_header.html"}
{include file="include/jsng.html"}
<div id="jsok" style="display:none;">
{include file="include/mng_menu.html"}
<p class="breadcrumb"><a href="../mng/dispmemberlist">会員様一覧</a> ＞ <a href="../mng/dispmemberinfo?did={$memberId}">会員様表示</a> ＞ 会員様編集</p>
<div id="contents">
<div id="deceased_edit">
<h2>会員様編集</h2>
<p class="input_caution">※パソコンで入力できない旧漢字等の文字や環境依存文字は使用できませんのでご了承ください。</p>
<p class="message">{$message}</p>
<form method="post" action="../mng/confeditmemberinfo" enctype="multipart/form-data" onSubmit="return double()">
<table>
    <tr><th>会員様名（必須）</th>
        <td>
            <input id="deceased_last_name" type="text" name="member_last_name" value="{$memberLastName}" maxlength="10" style="ime-mode: active;" />
            <input id="deceased_first_name" type="text" name="member_first_name" value="{$memberFirstName}" maxlength="10" style="ime-mode: active;" />　様
            <span style="margin-left:30px;">※苗字は編集できます。必要に応じて修正してください。</span>
        </td>
    </tr>
    <tr><th>生年月日（必須）</th>
        <td>
            西暦&nbsp;<input id="deceased_birthday_y" type="text" name="member_birthday_y" value="{$memberBirthdayY}" maxlength="4" style="ime-mode: disabled;" />&nbsp;年
            <input id="deceased_birthday_m" type="text" name="member_birthday_m" value="{$memberBirthdayM}" maxlength="2" style="ime-mode: disabled;" />&nbsp;月
            <input id="deceased_birthday_d" type="text" name="member_birthday_d" value="{$memberBirthdayD}" maxlength="2" style="ime-mode: disabled;" />&nbsp;日
        </td>
    </tr>

    <tr><th>郵便番号（必須）</th>
        <td>〒
            <input id="deceased_birthday_y" type="text" name="member_postalcode_f" value="{$memberPostalcodeF}" maxlength="3" style="ime-mode: disabled;" />&nbsp;-
            <input id="deceased_birthday_y" type="text" name="member_postalcode_r" value="{$memberPostalcodeR}" maxlength="4" style="ime-mode: disabled;" />&nbsp;
        </td>
    </tr>

    <tr><th>電話番号（必須）</th>
        <td>
            <input id="deceased_birthday_y" type="text" name="member_tel_f" value="{$memberTelF}" maxlength="3" style="ime-mode: disabled;" />&nbsp;-
            <input id="deceased_birthday_y" type="text" name="member_tel_c" value="{$memberTelC}" maxlength="4" style="ime-mode: disabled;" />&nbsp;-
            <input id="deceased_birthday_y" type="text" name="member_tel_r" value="{$memberTelR}" maxlength="4" style="ime-mode: disabled;" />&nbsp;
        </td>
    </tr>

    <tr><th>メールアドレス必須）</th>
        <td>
            <input id="member_mailaddress" type="text" name="member_mailaddress" value="{$memberMailaddress}" style="ime-mode: disabled;" />&nbsp;
        </td>
    </tr>

    <tr><th>パスワード（必須）</th>
        <td>
            <input id="hall_name" type="password" name="member_entrypassword" value="{$memberEntrypassword}" maxlength="10" style="ime-mode: active;" />
                <span>4～10字の（半角英数字）</span>
        </td>
    </tr>

    <tr><th>プッシュ通知(必須)</th>
        <td>
            <input type="radio" name="allow_push" value="1" {$checked5}>&nbsp;通知する&nbsp;&nbsp;
            <input type="radio" name="allow_push" value="2" {$checked6}>&nbsp;通知しない&nbsp;&nbsp;
        </td>
    </tr>

</table>

<div class="btn_row">
<input type="hidden" name="member_id" value="{$memberId}" />
<input class="btn" type="submit" name="back" value="戻る" />
<input class="btn" type="submit" name="confirm" value="確認" />
</form>
</div><!-- btn_row -->

</div>
</div><!-- contents -->
</div><!-- jsok -->
</div><!-- main -->
{include file="include/mng_footer.html"}
</div><!-- container -->
</body>
</html>
