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
<p class="breadcrumb"><a href="../mng/dispdeceasedlist">故人様一覧</a> ＞ <a href="../mng/dispdeceasedinfo?did={$deceasedId}">故人様表示</a> ＞ 故人様編集</p>
<div id="contents">
<div id="deceased_edit">
<h2>故人様編集確認</h2>
<p>下記内容で保存します。<br />よろしければ保存ボタンをクリックして下さい。</p>
<form method="post" action="../mng/compeditdeceasedinfo" enctype="multipart/form-data" onSubmit="return double()">
    <table>
        <tr><th>担当者名</th><td>{$chargeName}　様</td></tr>
        <tr><th>葬家様名</th><td>{$souke}　家様</td></tr>
        <tr><th>故人様名</th><td>{$deceasedLastName}　{$deceasedFirstName}　様</td></tr>
        <tr><th>生年月日</th><td>{$deceasedBirthday}</td></tr>
        <tr><th>没年月日</th><td>{$deceasedDeathday}</td></tr>
        <tr><th>享年行年</th><td>{$kyonenGyonen}</td></tr>
        <tr><th>没年齢</th><td>{$deathAge}　歳</td></tr>
        <tr><th>プッシュ通知</th><td>{$allowPush}</td></tr>
        <tr><th>会館名</th>
            <td>
{if strcmp($hallName, '') != 0}
                {$hallName}
{else}
                －
{/if}
            </td>
        </tr>
        <tr><th>写真</th>
            <td>
{if $imageExistenceFlg == 1}
                <img src="../mng/readdeceasedtempimage?{$cacheKey}" width=200 />
{else}
                －
{/if}
            </td></tr>
    </table>
    <input class="btn" type="submit" name="back" value="戻る" />
    <input class="btn" type="submit" name="save" value="保存" />
    <input type="hidden" name="token" value="{$token}">
</form>
</div><!-- deceased_edit -->
</div><!-- contents -->
</div><!-- jsok -->
</div><!-- main -->
{include file="include/mng_footer.html"}
</div><!-- container -->
</body>
</html>
