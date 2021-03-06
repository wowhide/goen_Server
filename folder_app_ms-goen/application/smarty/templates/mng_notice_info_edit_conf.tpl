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
<script type="text/javascript" src="../../../../ms-goen/js/jquery-ui-1.10.4.custom.min.js"></script>
<script type="text/javascript" src="../../../../ms-goen/js/jquery.ui.datepicker-ja.js"></script>
<script type="text/javascript" src="../../../../ms-goen/js/notice-info.js"></script>
</head>
<body>
<div id="container">
<div id="main">
{include file="include/mng_header.html"}
{include file="include/jsng.html"}
<div id="jsok" style="display:none;">
{include file="include/mng_menu.html"}
<p class="breadcrumb"><a href="../mng/dispnoticeinfolist">通知情報一覧</a> ＞ <a href="../mng/dispnoticeinfo?nino={$noticeInfoNo}">通知情報表示</a> ＞ 通知情報編集</p>
<div id="contents">
<h2>通知情報編集確認</h2>
<p>下記内容で更新します。<br />よろしければ更新ボタンをクリックして下さい。</p>
<form method="post" action="../mng/compeditnoticeinfo" enctype="multipart/form-data" onSubmit="return double()">
    <h2>通知情報</h2>
    <table id="notice_input">
        <tr><th>通知条件</th>
        {if $search_category == 0}
            <td> すべての故人様 </td>
        {/if}
        {if $search_category == 1}
            <td>担当者名：{$chargeName}&nbsp;様</td>
        {/if}
        {if $search_category == 2}
            <td>会館名：{$hallName}</td>
        {/if}
        {if $search_category == 3}
            <td>故人様名：{$searchName}&nbsp;&nbsp;命日：{$searchYMD}</td>
        {/if}
        {if $search_category == 4}
            <td>{$deathMonth}月が命日の故人様</td>
        {/if}
        {if $search_category == 5}
            <td>{$memorialYear}{$memorialMonth}に{$memorialEvent}法要の故人様</td>
        {/if}
        </tr>
        <tr><th>通知先故人様</th><td><a href="../mng/dispdeceasedlistpopup" onclick="javascript:openDeceasedList(this.href);return false;">{$targetCount}名様</a></td></tr>
        <tr><th>通知予定日</th><td>{$noticeSchedule}</td></tr>
        <tr><th>登録方法</th>
{if $entryMethod == "1"}
            <td>通知情報を直接入力</td>
{else}
            <td>通知情報としてWebページを表示</td>
{/if}
        </tr>
        <tr>
            <th>タイトル</th>
            <td>{$noticeTitle|escape}</td>
        </tr>
{if $entryMethod == "1"}
        <tr><th>テンプレート</th>
            <td>{$template}</td>
            <input type="hidden" name="template_id" value="{$templateId}" />
        </tr>
        <tr>
            <th>本文</th>
            <td>{$noticeText|escape|nl2br}</td>
        </tr>
        <tr>
            <th>お知らせに表示<br />する画像</th>
            <td>
    {if $imageExistenceFlg == 1}
            <img src="../mng/readimage?{$cacheKey}" {$imgWH} />
    {else}
            －
    {/if}
            </td>
        </tr>
{/if}
        <tr>
{if $entryMethod == "1"}
            <th>お知らせからリンク<br />させたいURL</th>
{else}
            <th>お知らせに表示する<br />ページのURL</th>
{/if}
            <td>{$url}</td>
        </tr>
    </table>
    <input class="btn" type="submit" name="back" value="戻る" />
    <input class="btn" type="submit" name="edit" value="更新" />
    <input type="hidden" name="token" value="{$token}">
</form>
</div><!-- contents -->
</div><!-- jsok -->
</div><!-- main -->
{include file="include/mng_footer.html"}
</div><!-- container -->
</body>
</html>
