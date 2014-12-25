
{include file="$path/_header.tpl"}


<style>
.companyDetailwrap{
    display:-moz-box;
    display:-webkit-box;
    display:box;

    font-size: 1.1em;
}
.companyDetailSectionRight{
    -moz-box-flex:2;
    -webkit-box-flex:2;
    box-flex:2;
    /*background-color: yellow;*/
    /*width: 100%;*/
    padding-left: 20px;
    
}
.companyDetailSectionLeft{
    background:#fff;
    -moz-box-flex:1;
    -webkit-box-flex:1;
    box-flex:1;
    background-color: rgb(250,250,250);
    width: 65%;;
    padding-left: 30px;
}

.companyDetailOtherDiv{
    height: 45px;
    line-height: 45px;
    overflow: hidden;
}

.companyTitle{
    /*border: solid 1px red;*/
font-size: 24px;
height: 100px;
line-height: 100px;
}
.companyTitle b{
    border-bottom: solid 5px rgb(71,135,191);
}

.companyInfo{
   /* border: solid 1px red;*/
}
.companyPosition{
    /*border: solid 1px red;*/
}
.companyOtherPositionTable{
    margin-top: 15px;
   /* border: solid 1px red;*/
    width: 100%;
}
.companyOtherPositionTable tr{
    border: solid 1px #ccc;
}
.companyOtherPositionTable tr:hover{
    cursor: pointer;
    color: rgb(71,135,191);
}

.companyOtherPositionTable tr td{

    border-left: none;
    font-size: 16px;
    height: 40px;
    line-height: 40px;
}


</style>

<section>
<div style=" min-height: 27em; border: solid 1px #ccc;width: 1170px; margin: 0 auto;">

<article class="companyDetailwrap">
    <section class="companyDetailSectionLeft">
    
    <div class="companyTitle">
       <b>{$company_name}</b>
    </div>

    <div class="companyInfo">
        {$company_info}
    </div>
    <div class="companyPosition">
        <b>本公司其他职位:</b>
        <table class="companyOtherPositionTable">

            {foreach from=$otherPositionList item=otherPositionLists}
            <tr onclick='window.location.href="{$websiteUrl}/home/acurateSearch?keyword={$otherPositionLists.name}&type=0"'>
                <td style="text-indent: 10px;width: 75%; font-weight: bold">{$otherPositionLists.name}</td>
                <td>{$otherPositionLists.company_update_time}</td>
            </tr>
            {/foreach}

        </table>

    </div>


    </section>

    <section class="companyDetailSectionRight">
        <div style=" height: 50px;"></div>

        <div class="companyDetailOtherDiv">
            <b>所属领域:</b>&nbsp;&nbsp;&nbsp;{$company_industry}
        </div>
        <div class="companyDetailOtherDiv">
            <b>企业规模:</b>&nbsp;&nbsp;&nbsp;{$company_scale}
        </div>
        <div class="companyDetailOtherDiv">
            <b>企业性质:</b>&nbsp;&nbsp;&nbsp;{$company_nature}
        </div>

    </section>

</article>

</div>
</section>
{include file="$path/_footer.tpl"}
