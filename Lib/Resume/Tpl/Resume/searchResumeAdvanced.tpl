<style>
    .tableContentTr{
        text-indent: 20px;
        height: 2.5em;
        line-height: 2.5em;
        border: solid 1px #ccc;
    }

.tableContentTrTag{
    cursor: pointer;

}

.tableContentTrTag:hover{
    cursor: pointer;
    background-color: rgb(241,241,241);

}
</style>

<div style="">
    {if $result == ""}
    <div style=" width: 1170px; min-height: 150x; margin-top: 40px; text-align: center">
        没有符合条件的信息

    </div>

    {else}
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

                    <tr class="tableContentTrTag" onclick='window.open("{$websiteUrl}/resume/resumeDetail/?id={$results.resume_id}")'>
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

    {/if}


</div>

    <div style="text-align: center; margin-top: 30px; font-size: 16px;">
    {$fenye}
    </div>

  
