
{include file="$path/_header.tpl"}


<style>
.companyDetailwrap{
    display:-moz-box;
    display:-webkit-box;
    display:box;

    font-size: 1.1em;

    width: 1170px; 
     margin: 0 auto; 
     border: solid 1px #ccc;
     border-radius: 5px;
     -webkit-border-radius: 5px;
     -moz-border-radius: 5px;
     margin-top: 10px;
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
    border-right: solid 1px #ccc;
    width: 65%;
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
    /*border-bottom: solid 5px rgb(71,135,191);*/
}

.companyInfo{
   /* border: solid 1px red;*/
}
.companyPosition{
    /*border: solid 1px red;*/
}
.companyPosition b{
    /*border-bottom: solid 3px rgb(71,135,191);*/
    font-size: 18px;
}
.companyOtherPositionTable{
    margin-top: 15px;
   /* border: solid 1px red;*/
    width: 100%;
}
.companyOtherPositionTable tr{
    border: solid 1px #ccc;
    border-right: none;
}
.companyOtherPositionTable tr:hover{
    cursor: pointer;
    background-color: rgb(246,246,246);
}

.companyOtherPositionTable tr td{

    border-left: none;
    font-size: 16px;
    height: 40px;
    line-height: 40px;
}


</style>

<section>

<article class="companyDetailwrap">
    <section class="companyDetailSectionLeft">
    
    <div class="companyTitle">
       <b>{$company_name}</b>
    </div>

    <div class="companyInfo">
        {$company_info}
    </div>
    <div class="companyPosition">
        <b>本公司热招职位:</b>
        <table class="companyOtherPositionTable">

            {foreach from=$otherPositionList item=otherPositionLists}
            <tr onclick='window.location.href="{$websiteUrl}/position/positionDetail/?id={$otherPositionLists.id}"'>
                <td style="text-indent: 10px;width: 75%;">{$otherPositionLists.name}</td>
                <td>{$otherPositionLists.company_update_time}</td>
            </tr>
            {/foreach}

        </table>

    </div>

    <div style=" height: 50px;"></div>


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

</section>
{include file="$path/_footer.tpl"}
