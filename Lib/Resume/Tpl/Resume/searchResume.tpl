
{include file="$path/_header.tpl"}


<style>
.wrapSearch{
    display:-moz-box;
    display:-webkit-box;
    display:box;

    font-size: 1.1em;
}
.sectionRight{
    -moz-box-flex:2;
    -webkit-box-flex:2;
    box-flex:2;

    width: 100%;
    
}
.sectionLeft{
    background:purple;
    -moz-box-flex:1;
    -webkit-box-flex:1;
    box-flex:1;

    width: 25.5%;
}
/*
----------*/

.tableContent{
    width: 90%;
    margin: 0 auto;
    margin-top: 20px;
}
.tableContentTr{
    text-indent: 20px;
    height: 2.5em;
    line-height: 2.5em;
    border: solid 1px #ccc;
}
.tableContentTrTag{
    height: 2.5em;
    line-height: 2.5em;
    border: solid 1px #ccc;
    cursor: pointer;
}
.tableContentTrTag:hover{
    height: 2.5em;
    line-height: 2.5em;
    border: solid 1px #ccc;
    cursor: pointer;
    background-color: rgb(241,241,241);
}

.tableContentTrTag td{
 /*   border: solid 1px #ccc;*/
    text-indent: 20px;
}
.ContentNameTd{
    font-weight: bold;
}
.tableContent th{
    border: solid 1px #ccc;
}
.contentTableHeader{
    width: 90%;
margin: 0 auto;
height: 2em;
margin-top: 40px;
line-height: 2em;
text-align: center;
text-align: center;
font-size: 1.6em;
font-weight: bold;
}

</style>

<section>
<div style=" min-height: 35em; border-radius: 5px; -webkit-border-radius: 5px; -moz-border-radius: 5px; border: solid 1px #ccc;width: 1170px; margin: 0 auto; margin-top: 10px;">

<article class="wrapSearch">
   <!--  <section class="sectionLeft">01</section> -->
    <section class="sectionRight">

    </section>

</article>

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

             <tr class="tableContentTrTag" onclick='window.location.href="{$websiteUrl}/resume/resumeDetail/?id={$results.resume_id}"'>
                    <td>{$results.sex}</td>  
                    <td>{$results.age}</td>
                    <td>{$results.zhuanye}</td>
                    <td>{$results.xueli}</td>
                    <td>{$results.gongzuonianxian}</td>
                    <td>{$results.juzhudi}</td>
                    <td>{$results.gengxinshijian}</td>
               
            </tr>

            {/foreach}

        </table>


</div>

 <div style="text-align: center; margin-top: 30px; font-size: 16px;">

  {$fenye}
</div>

</div>
</section>
{include file="$path/_footer.tpl"}
