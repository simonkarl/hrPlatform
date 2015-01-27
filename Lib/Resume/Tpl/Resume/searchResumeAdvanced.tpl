<div style="">

    <div class="contentTableHeader">简历关键字搜索列表</div>
    <table class="tableContent">
        <tr class="tableContentTr">
            <td class="ContentNameTd">性别</td>
            <td class="ContentNameTd">年龄</td>
            <td class="ContentNameTd">专业</td>
            <td class="ContentNameTd">学历</td>
            <td class="ContentNameTd">工作经验</td>
            <td class="ContentNameTd">居住地</td>
            <td class="ContentNameTd">更新日期</td>
        </tr>

        {foreach from=$result item=results}

            <tr class="tableContentTrTag" onclick='window.location.href = "{$websiteUrl}/resume/resumeDetail/?id={$results.resume_id}"'>
                <td>{$results.sex}</td>  
                <td>{$results.age}</td>
                <td>{$results.major}</td>
                <td>{$results.education}</td>
                <td>{$results.work_year}</td>
                <td>{$results.address}</td>
                <td>{$results.update_time}</td>

            </tr>

        {/foreach}

    </table>


</div>

<div style="text-align: center; margin-top: 30px; font-size: 16px;">

    {$fenye}
</div>