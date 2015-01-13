
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
    width: 70%;
    margin: 0 auto;
    margin-top: 20px;
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
.tableContent tr{
    cursor: pointer;
}
.tableContent tr:hover{
    background-color: rgb(246,246,246);
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
<div style=" min-height: 35em; border: solid 1px #ccc;width: 1170px; margin: 0 auto;">

<article class="wrapSearch">
   <!--  <section class="sectionLeft">01</section> -->
    <section class="sectionRight">

    </section>

</article>

<div style="">

    <div class="contentTableHeader">相关公司名称</div>
        <table class="tableContent">

            {foreach from=$result item=results}

             <tr class="tableContentTrTag" onclick='window.location.href="{$websiteUrl}/company/companyDetail/?id={$results.id}"'>
                <td class="ContentNameTd">{$results.company_name}</td>
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
