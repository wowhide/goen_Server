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
<script type="text/javascript" src="../../../../ms-goen/js/deceased-list.js"></script>
</head>
<body>
<div id="container">
<div id="main">
{include file="include/mng_header.html"}
{include file="include/jsng.html"}
<div id="jsok" style="display:none;">
{include file="include/mng_menu.html"}
<div id="contents">
<h2>会員様一覧</h2>
<p class="entry_btn"><a class="btn" href="../mng/dispmemberqrorder">会員様QR発注</a></p>

<div id="search">
<form method="get" action="../mng/dispmembersearch">
    入会日　 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <!-- 入会日From -->
    <input id="datepickerFrom" type="text" name="search_from" value="{$searchFrom}" readonly="readonly" placeholder="From" />
    ～
    <!-- 入会日to -->
    <input id="datepickerTo" type="text" name="search_to" value="{$searchTo}" readonly="readonly" placeholder="To" />
   <br /> <br />
    <!-- 会員様名 -->
    会員様名　&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" name="search_member_name" value="{$searchMemberName}" placeholder="会員様名" />
    &nbsp;&nbsp;&nbsp;&nbsp;入力の際、苗字と名前の間は<span style="color:red;">半角スペース</span>を空けてください。
    <br /><br />

    メールアドレス&nbsp;&nbsp;&nbsp;
    <input type="text" name="search_member_mailaddress" value="{$searchMemberMailAddress}" placeholder="メールアドレス" />
    <br /><br /><br />

    <!-- ボタン -->
    <input id="search_btn" class="btn" type="submit" name="search" value="検索" />
    <input id="clear_btn" class="btn" type="submit" name="clear" value="条件解除" />
</form>
</div>

<div id="reload_member">
{include file='mng_member_list_reload.tpl'}
</div><!-- reload -->
</div><!-- contents -->
</div><!-- jsok -->
</div><!-- main -->
{include file="include/mng_footer.html"}
</div><!-- container -->

<div id="dialog" title="会員様QR発注キャンセル">
<p>会員様QRの発注をキャンセルします。<br />よろしいですか？</p>
</div><!-- dialog -->

</body>
</html>
