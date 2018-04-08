<?php /* Smarty version Smarty-3.1.19, created on 2017-09-08 16:14:09
         compiled from "../../folder_app_ms-kazuya/application/smarty/templates/mng_notice_info_entry.tpl" */ ?>
<?php /*%%SmartyHeaderCode:152887396359b2434197c689-25453670%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46212847e13e88a6e529c48b0f4de095761b75b2' => 
    array (
      0 => '../../folder_app_ms-kazuya/application/smarty/templates/mng_notice_info_entry.tpl',
      1 => 1504834168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '152887396359b2434197c689-25453670',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settingChecked0' => 0,
    'settingChecked1' => 0,
    'chargeList' => 0,
    'chargeName' => 0,
    'settingChecked2' => 0,
    'hallList' => 0,
    'hallName' => 0,
    'settingChecked3' => 0,
    'searchName' => 0,
    'searchYear' => 0,
    'searchMonth' => 0,
    'searchDay' => 0,
    'settingChecked4' => 0,
    'deathMonthList' => 0,
    'deathMonth' => 0,
    'settingChecked5' => 0,
    'memorialYearList' => 0,
    'memorialYear' => 0,
    'memorialMonthList' => 0,
    'memorialMonth' => 0,
    'memorialList' => 0,
    'memorialEvent' => 0,
    'selectedCategory' => 0,
    'deceasedInfoList' => 0,
    'deceasedInfo' => 0,
    'message' => 0,
    'noticeSchedule' => 0,
    'checked1' => 0,
    'checked2' => 0,
    'noticeTitle' => 0,
    'template' => 0,
    'templateId' => 0,
    'noticeText' => 0,
    'imageExistenceFlg' => 0,
    'cacheKey' => 0,
    'imgWH' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59b24341abc576_70572586',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b24341abc576_70572586')) {function content_59b24341abc576_70572586($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/virtual/htdocs/library/Smarty/libs/plugins/function.html_options.php';
?><!DOCTYPE html>
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
<script type="text/javascript" src="http://ms-kazuya.memorial-srv.com/js/notice-info.js"></script>
<script type="text/javascript">
//<![CDATA[
$(function() {
    //表示時にラジオボタンのクリックイベントを実行して入力欄の表示非表示を設定する
    var entryMethod = $('[name="entry_method"]:checked').val();
    if (entryMethod == 1) {
        $('[name="entry_method"]:eq(0)').click().change();
    } else {
        $('[name="entry_method"]:eq(1)').click().change();
    }

    //ラジオボタンの選択に合わせて検索部品を設定する
    updateNoticeSetting();

    //表示時に通知条件設定テーブルに合わせて故人一覧テーブルの高さを設定する
    var tableHeight = $('#notice_setting').height();
    var headerHeight = $('#deceased_table_header').height();
    $('#deceased_table_body').height(tableHeight - headerHeight);

    //全てチェックボタン押下で全ての故人様のチェックを付ける
    $('#checkall').on('click', function() {
        $('[name="deceased_checkbox[]"]').prop('checked', true);
    });

    //チェックをクリアボタン押下で全ての故人様のチェックを外す
    $('#uncheckall').on('click', function() {
        $('[name="deceased_checkbox[]"]').prop('checked', false);
    });

    //通知条件設定のラジオボタン選択時
    $('input[name="search_category"]:radio').change(function() {
        updateNoticeSetting();
    });

    //通知条件設定をラジオボタンに合わせて可不可切り替え
    function updateNoticeSetting() {
        $('#charge_name_combo').prop('disabled', true);
        $('#hall_name_combo').prop('disabled', true);
        $('#search_name').prop('disabled', true);
        $('#search_year').prop('disabled', true);
        $('#search_month').prop('disabled', true);
        $('#search_day').prop('disabled', true);
        $('#death_day_combo').prop('disabled', true);
        $('#memorial_year_combo').prop('disabled', true);
        $('#memorial_month_combo').prop('disabled', true);
        $('#memorial_combo').prop('disabled', true);

        switch($('input[name="search_category"]:checked').val()){
            case '1':
                $('#charge_name_combo').prop('disabled', false);
                break;
            case '2':
                $('#hall_name_combo').prop('disabled', false);
                break;
            case '3':
                $('#search_name').prop('disabled', false);
                $('#search_year').prop('disabled', false);
                $('#search_month').prop('disabled', false);
                $('#search_day').prop('disabled', false);
                break;
            case '4':
                $('#death_day_combo').prop('disabled', false);
                break;
            case '5':
                $('#memorial_year_combo').prop('disabled', false);
                $('#memorial_month_combo').prop('disabled', false);
                $('#memorial_combo').prop('disabled', false);
                break;
        }
    }
});
//]]>
</script>
</head>
<body>
<div id="container">
<div id="main">
<?php echo $_smarty_tpl->getSubTemplate ("include/mng_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("include/jsng.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="jsok" style="display:none;">
<?php echo $_smarty_tpl->getSubTemplate ("include/mng_menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<p class="breadcrumb"><a href="../mng/dispnoticeinfolist">通知情報一覧</a> ＞ 通知情報登録</p>
<div id="contents">
<div id="notice_entry">
<form method="post" action="../mng/confentrynoticeinfo" enctype="multipart/form-data" onSubmit="return double()">
    <!-- 故人様の検索条件設定テーブル -->
    <div id="notice_setting_area">
        <h2>通知条件設定</h2>
        <table id="notice_setting">
            <tr><th><input type="radio" id="search_category0" name="search_category" value="0" <?php echo $_smarty_tpl->tpl_vars['settingChecked0']->value;?>
 /></th>
                <td>全ての故人様</td>
            </tr>
            <tr><th><input type="radio" id="search_category1" name="search_category" value="1" <?php echo $_smarty_tpl->tpl_vars['settingChecked1']->value;?>
 /></th>
                <td>
                    担当者名&nbsp;<?php echo smarty_function_html_options(array('id'=>'charge_name_combo','name'=>'charge_name_combo','options'=>$_smarty_tpl->tpl_vars['chargeList']->value,'selected'=>$_smarty_tpl->tpl_vars['chargeName']->value),$_smarty_tpl);?>
&nbsp;様
                </td>
            </tr>
            <tr><th><input type="radio" id="search_category2" name="search_category" value="2" <?php echo $_smarty_tpl->tpl_vars['settingChecked2']->value;?>
 /></th>
                <td>
                    会館名&nbsp;<span style="margin-left:1em"><?php echo smarty_function_html_options(array('id'=>'hall_name_combo','name'=>'hall_name_combo','options'=>$_smarty_tpl->tpl_vars['hallList']->value,'selected'=>$_smarty_tpl->tpl_vars['hallName']->value),$_smarty_tpl);?>
</span>
                </td>
            </tr>
            <tr><th><input type="radio" id="search_category3" name="search_category" value="3" <?php echo $_smarty_tpl->tpl_vars['settingChecked3']->value;?>
 /></th>
                <td>
                    故人様名&nbsp;<input type="text" id="search_name" name="search_name" value="<?php echo $_smarty_tpl->tpl_vars['searchName']->value;?>
" />&nbsp;様
                    <div id="search_deathday" style="margin-top: 5px;">
                        命日
                        <span style="margin-left: 2em">
                            <input type="text" id="search_year"  name="search_year"  value="<?php echo $_smarty_tpl->tpl_vars['searchYear']->value;?>
"  maxlength="4" style="ime-mode: disabled;" />&nbsp;年&nbsp;
                            <input type="text" id="search_month" name="search_month" value="<?php echo $_smarty_tpl->tpl_vars['searchMonth']->value;?>
" maxlength="2" style="ime-mode: disabled;" />&nbsp;月&nbsp;
                            <input type="text" id="search_day"   name="search_day"   value="<?php echo $_smarty_tpl->tpl_vars['searchDay']->value;?>
"   maxlength="2" style="ime-mode: disabled;" />&nbsp;日&nbsp;
                        </span>
                    </div>
                </td>
            </tr>
            <tr><th><input type="radio" id="search_category4" name="search_category" value="4" <?php echo $_smarty_tpl->tpl_vars['settingChecked4']->value;?>
 /></th>
                <td><?php echo smarty_function_html_options(array('id'=>'death_day_combo','name'=>'death_day_combo','options'=>$_smarty_tpl->tpl_vars['deathMonthList']->value,'selected'=>$_smarty_tpl->tpl_vars['deathMonth']->value),$_smarty_tpl);?>
 が命日の故人様</td>
            </tr>
            <tr><th><input type="radio" id="search_category5" name="search_category" value="5" <?php echo $_smarty_tpl->tpl_vars['settingChecked5']->value;?>
 /></th>
                <td>
                    <?php echo smarty_function_html_options(array('id'=>'memorial_year_combo','name'=>'memorial_year_combo','options'=>$_smarty_tpl->tpl_vars['memorialYearList']->value,'selected'=>$_smarty_tpl->tpl_vars['memorialYear']->value),$_smarty_tpl);?>
の
                    <?php echo smarty_function_html_options(array('id'=>'memorial_month_combo','name'=>'memorial_month_combo','options'=>$_smarty_tpl->tpl_vars['memorialMonthList']->value,'selected'=>$_smarty_tpl->tpl_vars['memorialMonth']->value),$_smarty_tpl);?>
に
                    <?php echo smarty_function_html_options(array('id'=>'memorial_combo','name'=>'memorial_combo','options'=>$_smarty_tpl->tpl_vars['memorialList']->value,'selected'=>$_smarty_tpl->tpl_vars['memorialEvent']->value),$_smarty_tpl);?>
法要の故人様
                </td>
            </tr>
        </table>
        <div id="search_btn"><input type="submit" name="search" value="この条件で検索" onclick="javascript:if(!searchExecute())return false;" /></div>
        <input type="hidden" id="selected_category" name="selected_category" value="<?php echo $_smarty_tpl->tpl_vars['selectedCategory']->value;?>
" />
    </div>
    <!-- 故人一覧表示テーブル -->
    <div id="deceased_table_area">
        <h2 style="float: left;">条件に一致する故人様： <?php echo count($_smarty_tpl->tpl_vars['deceasedInfoList']->value);?>
名</h2>
        <span style="float: right;">
            <input type="button" id="checkall" value="全てチェック" style="margin-right: 5px;" />
            <input type="button" id="uncheckall" value="チェックをクリア"/>
        </span>
        <table id="deceased_table" style="clear:both;">
            <thead id="deceased_table_header">
                <tr>
                    <th id="checkbox_column"></th>
                    <th id="name_column">故人様名</th>
                    <th id="deathday_column">命日</th>
                </tr>
            </thead>
            <tbody id="deceased_table_body">
                <?php  $_smarty_tpl->tpl_vars["deceasedInfo"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["deceasedInfo"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['deceasedInfoList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["deceasedInfo"]->key => $_smarty_tpl->tpl_vars["deceasedInfo"]->value) {
$_smarty_tpl->tpl_vars["deceasedInfo"]->_loop = true;
?>
                <tr>
                    <?php if ($_smarty_tpl->tpl_vars['deceasedInfo']->value['selected']) {?>
                    <td id="deceased_selection"><input type="checkbox" name="deceased_checkbox[]" value="<?php echo $_smarty_tpl->tpl_vars['deceasedInfo']->value['deceased_id'];?>
" checked="checked" /></td>
                    <?php } else { ?>
                    <td id="deceased_selection"><input type="checkbox" name="deceased_checkbox[]" value="<?php echo $_smarty_tpl->tpl_vars['deceasedInfo']->value['deceased_id'];?>
" /></td>
                    <?php }?>
                    <td id="deceased_name">
                        <a href="../mng/dispdeceasedinfopopup?did=<?php echo $_smarty_tpl->tpl_vars['deceasedInfo']->value['deceased_id'];?>
" onclick="javascript:openDeceasedInfo(this.href);return false;"><?php echo $_smarty_tpl->tpl_vars['deceasedInfo']->value['deceased_name'];?>
&nbsp;様</a>
                    </td>
                    <td id="deceased_deathday"><?php echo date('Y/m/d',strtotime($_smarty_tpl->tpl_vars['deceasedInfo']->value['deceased_deathday']));?>
</td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        ※チェックされている故人様にお知らせが配信されます
    </div>
    <!-- 通知情報入力 -->
    <h2>通知情報登録</h2>
    <p class="message"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
    <table id="notice_input">
        <tr><th>通知予定日（必須）</th>
            <td><input id="datepicker" type="text" name="notice_schedule" value="<?php echo $_smarty_tpl->tpl_vars['noticeSchedule']->value;?>
" readonly="readonly" /><br>
                <span class="input_caution">※指定できる予定日は翌日～2か月後までです。</span></td></tr>
        <tr><th>登録方法（必須）</th>
            <td><input type="radio" name="entry_method" value="1" <?php echo $_smarty_tpl->tpl_vars['checked1']->value;?>
>&nbsp;通知情報を直接入力する&nbsp;&nbsp;<input type="radio" name="entry_method" value="2" <?php echo $_smarty_tpl->tpl_vars['checked2']->value;?>
>&nbsp;通知情報としてWebページを表示する</td></tr>
        <tr>
            <th>タイトル（必須）</th>
            <td><input id="title" type="text" name="notice_title" value="<?php echo $_smarty_tpl->tpl_vars['noticeTitle']->value;?>
" maxlength="50" style="ime-mode: active;" /><br>
                <span class="input_caution">※50文字以内</span></td>
        </tr>
        <tr class="display_control">
            <th>テンプレート<br>(自動入力)</th><td><?php echo $_smarty_tpl->tpl_vars['template']->value;?>
</td>
            <input type="hidden" name="template_id" value="<?php echo $_smarty_tpl->tpl_vars['templateId']->value;?>
" />
        </tr>
        <tr class="display_control">
            <th>本文（必須）</th>
            <td><textarea id="text" name="notice_text" rows="15" maxlength="1000" style="ime-mode: active;"><?php echo $_smarty_tpl->tpl_vars['noticeText']->value;?>
</textarea><br>
                <span class="input_caution">※1000文字以内</span></td>
        </tr>
        <tr class="display_control">
            <th>お知らせに表示<br />する画像（任意）</th>
            <td>
                <?php if ($_smarty_tpl->tpl_vars['imageExistenceFlg']->value==1) {?>
                <p id="image"><img src="../mng/readimage?<?php echo $_smarty_tpl->tpl_vars['cacheKey']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['imgWH']->value;?>
 /><br></p>
                <?php }?>
                <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                <input type="file" name="notice_image" /><br>
                <span class="input_caution">※10MB以内</span><br>
                <input id="image_clear" type="button" value="画像を削除する" />
                <input type="hidden" name="image_existence_flg" value="<?php echo $_smarty_tpl->tpl_vars['imageExistenceFlg']->value;?>
" />
            </td>
        </tr>
        <tr>
            <th id="url">お知らせからリンク<br />させたいURL（任意）</th>
            <td><input id="url" type="text" name="url" value="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" maxlength="200" style="ime-mode: disabled;" /><br>
                <span class="input_caution">※URLは、「http://」もしくは「https://」から入力して下さい。</span><br>
                <span class="input_caution">※200文字以内</span></td>
        </tr>
    </table>
    <div class="btn_row">
        <input class="btn" type="submit" name="back" value="戻る" />
        <input class="btn" type="submit" name="conf" value="登録確認" onclick="javascript:undisabled();" />
    </div>
</form>
</div><!-- notice_entry -->
</div><!-- contents -->
</div><!-- jsok -->
</div><!-- main -->
<?php echo $_smarty_tpl->getSubTemplate ("include/mng_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div><!-- container -->
</body>
</html>
<?php }} ?>
