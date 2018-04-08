<table id="deceased_list">
    <tr>
        <th class="deceased_name">会員様名</th><th class="issue_day">生年月日</th><th class="issue_day">入会日</th><th class="state">メールアドレス</th><th class="entry_day">郵便番号</th><th class="charge">発行状態</th><th class="operate1"></th><th class="operate2"></th>
    </tr>
{foreach from = $memberInfoList item = "memberInfo"}
    
{if $memberInfo.issue_state_code == "1"}
    <tr class="issue_data">
{elseif $memberInfo.issue_state_code == "2"}
    <tr class="issued_data">
{elseif $memberInfo.issue_state_code == "4"}
    <tr class="del_data">
{else}
    <tr>
{/if}
        <!-- 会員様名 -->
        <td>{$memberInfo.member_name|escape}&nbsp;様</td> 
        <!-- 生年月日 -->
        <td>{date('Y/m/d', strtotime($memberInfo.member_birthday))}</td>
        <!-- 入会日 -->
        <td>{$memberInfo.issue_datetime|date_format:"%Y/%m/%d"}</td>
        <!-- メールアドレス -->
        <td>{$memberInfo.member_mailaddress|escape}&nbsp;</td>
        <!-- 郵便番号 -->
        <td>{$memberInfo.member_postalcode|escape}&nbsp;</td>
        <!-- 発行状態 -->
        <td>
{if $memberInfo.issue_state_code == "1"}
            発行依頼済み
{elseif $memberInfo.issue_state_code == "2"}
            発行中
{elseif $memberInfo.issue_state_code == "3"}
            発行完了
{elseif $memberInfo.issue_state_code == "4"}
            削除
{/if}
        </td>
{if $memberInfo.issue_state_code == "1"}
        <td class="operate">
            <a class="btn_mini" href="../mng/dispmemberinfo?did={$memberInfo.member_id}">表示</a>
        </td>
        <td class="operate">
            <a class="cancel_btn btn_mini" href="../mng/cancelmemberqrorder?did={$memberInfo.member_id}" onclick="return false;" >キャンセル</a>
        </td>
{elseif $memberInfo.issue_state_code == "2"}
        <td class="operate">－</td>
        <td class="operate">－</td>
{elseif $memberInfo.issue_state_code == "3"}
        <td class="operate">
            <a class="btn_mini" href="../mng/dispmemberinfo?did={$memberInfo.member_id}">表示</a>
        </td>
        <td class="operate">
            <a class="btn_mini" href="../mng/downloadqrpdf?did={$memberInfo.member_id}">ダウンロード</a>
        </td>
{elseif $memberInfo.issue_state_code == "4"}
        <td class="operate">－</td>
        <td class="operate">－</td>
{/if}
        </td>
    </tr>
{/foreach}
</table>

<p class="page">{$now}/{$all}ページ　{$total}件中{$firstItemNumber}～{$lastItemNumber}件を表示</p>
<p class="page">
{foreach from = $pagesInRange item = "page"}
    {if $page == $now}
        {$page}&nbsp;&nbsp;
    {else}
        <a href="../mng/dispmemberpaging?page={$page}">{$page}</a>&nbsp;&nbsp;
    {/if}
{/foreach}
</p>
