
{include file="$path/_header.tpl"}


<style>
.advSearchWarp{
    display:-moz-box;
    display:-webkit-box;
    display:box;

    font-size: 1.1em;
}
.advSectionRight{
    -moz-box-flex:2;
    -webkit-box-flex:2;
    box-flex:2;

    width: 263%;
    
}
.advSectionLeft{
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
}
.tableContentTrTag{
    height: 2.5em;
    line-height: 2.5em;
    border: solid 1px #ccc;
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
line-height: 2em;
text-align: center;
text-align: center;
font-size: 1.6em;

}

.filter{
font-size: 14px;
font-weight: bold;
text-indent: 10px;
height: 40px;
line-height: 40px;
}
.chooseCat{
    font-weight: normal;
padding-left: 90px;
font-size: 14px;
}
.cancel{
    margin-left: 87%;
    cursor: pointer;
    display: none;
    color: rgb(211,47,38);
}
.confim{
    margin-top: -30px;
text-align: right;
margin-right: 30px;
cursor: pointer;
font-weight: bold;
color: rgb(71,135,191);
display: none;
}
</style>

<section>
<div style=" min-height: 30em;width: 1170px; margin: 0 auto; border: solid 1px #ccc; border-radius: 5px;-webkit-border-radius: 5px;-moz-border-radius: 5px;margin-top: 10px;">

<article class="advSearchWarp">

    <form action='{$websiteUrl}/home/advancedSearch' method="get" id='formAdvanced' name='formAdvanced'>


   <!--  <section class="sectionLeft">01</section> -->
    <section class="advSectionRight">

        <div style=" margin-top: 20px;">


            <div class="panel panel-info" style=" width: 1170px;">
              <div class="panel-heading">
                <h3 class="panel-title" style=" text-align: center">高级搜索数据列表</h3>
              </div>
              <div class="panel-body">

                    <table class="tableContent" style=" margin-top: 20px;">
                    <tr class="tableContentTrTag">
                        <td class="ContentNameTd">职位名称</td>
                        <td class="ContentNameTd">公司名称</td>
                        <td class="ContentNameTd">招聘人数</td>
                        <td class="ContentNameTd">主要招聘地区</td>
                        <td class="ContentNameTd">更新日期</td>
                    </tr>

                    {foreach from=$result item=results}

                     <tr class="tableContentTrTag">
                        <td class="ContentNameTd"><a href='{$websiteUrl}/position/positionDetail/?id={$results.id}'>{$results.position_name}</a></td>
                        <td><a href='{$websiteUrl}/company/companyDetail/?id={$results.company_id}'>{$results.company_name}</a></td>
                        <td>{$results.hiring}</td>
                        <td>{$results.working_place}</td>
                        <td>{$results.update_time}</td>
                    </tr>

                    {/foreach}
                </table>

            <div style=" text-align: center; margin-top: 20px;">{$fenye}</div>

          </div>
        </div>

        </div>

    </div>

    </section>

</form>

</article>

<div style=" height: 30px;"></div>

</section>

<script>


</script>

{include file="$path/_footer.tpl"}
