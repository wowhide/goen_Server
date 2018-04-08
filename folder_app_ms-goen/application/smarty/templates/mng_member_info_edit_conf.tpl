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
<script type="text/javascript" src="../../../../ms-goen/js/jquery-1.11.0.min.js"></script>
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
<div id="member_edit">
<h2>会員様編集確認</h2>
<p>下記内容で保存します。<br />よろしければ保存ボタンをクリックして下さい。</p>
<form method="post" action="../mng/compeditmemberinfo" enctype="multipart/form-data" onSubmit="return double()">
    <table>
        <tr><th>会員様名</th><td>{$memberLastName}　{$memberFirstName}　様</td></tr>
        <tr><th>生年月日</th><td>{$memberBirthday}</td></tr>
        <tr><th>郵便番号</th><td>{$memberPostalcode}</td></tr>
        <tr><th>電話番号</th><td>{$memberTel}</td></tr>
        <tr><th>メールアドレス</th><td>{$memberMailaddress}</td></tr>
        <tr><th>プッシュ通知</th><td>{$allowPush}</td></tr>
    </table>
    <input class="btn" type="submit" name="back" value="戻る" />
    <input class="btn" type="submit" name="save" value="保存" />
    <input type="hidden" name="token" value="{$token}">
</div><!-- contents -->
</form>
</div><!-- member_edit -->
</div><!-- jsok -->
</div><!-- main -->
{include file="include/mng_footer.html"}
</div><!-- container -->
</body>
</html>
