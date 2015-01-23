
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
    /*background-color: yellow;*/
    /*width: 100%;*/
    padding-left: 20px;
    
}
.sectionLeft{
    background:#fff;
    -moz-box-flex:1;
    -webkit-box-flex:1;
    box-flex:1;
    /*background-color: rgb(250,250,250);*/
    width: 65%;;
    padding-left: 30px;

    border-right: solid 2px rgb(241,241,241);
}
.postionLabel{
    height: 50px;
    font-size: 22px;
    line-height: 50px;
    color: rgb(44,62,80);
    overflow: hidden;
}
.titleBorder{
    /*border-bottom: solid 5px rgb(71,135,191);*/
}
.otherBorder{
    /*border-bottom: solid 2px rgb(71,135,191);*/
    color: rgb(49,49,49);
    padding-right: 10px;
}   
.table{
    border: solid 1px rgb(221,221,221);
    margin-top: 30px;    
}
.table tr td {
        border: solid 1px rgb(221,221,221);
        color:rgb(44,62,80);
        
}
.job_description{
   /* border: solid 1px red;*/
}

.onlineResume{
     height: 60px; 
     line-height: 60px; 
     background-color: rgb(242,242,242); 
     font-weight: bold; 
     text-indent: 20px;
     margin-top: 20px;
}
.resumeBtn{
    height: 45px;
    width: 110px;
    border: none;
    font-weight: bold;
    color: #fff;
    font-size: 24px;
    background-color: rgb(71,135,191);
    margin-top: 50px;
}

.companyBorder{
    /*border-bottom: solid 3px rgb(71,135,191);*/
}
.companyDiv{
     height: 80px;
     line-height: 80px;
     font-size: 24px;
     text-align: center;
}
.companyOtherDiv{
    height: 45px;
    line-height: 45px;
    overflow: hidden;
}
.companyOtherDiv a{
    font-weight: normal;
}


</style>

<body style=" background-image: url('{$WebSiteUrlPublic}/images/body-bg.jpg');">
<section>
<div style="min-height: 35em; border-radius: 5px; -webkit-border-radius: 5px; -moz-border-radius: 5px; border: solid 1px #ccc;width: 1170px; margin: 0 auto; margin-top: 10px;">

<article class="wrapSearch">
    <section class="sectionLeft">
        <div style=" height: 45px;"></div>
        <div class="postionLabel"><b class="titleBorder">职位名称:</b>&nbsp;&nbsp;{$job_name}</div>

            <table class="table">
                <tr>
                    <td><b class="otherBorder">薪资:</b>{$salary_range}</td>
                    <td><b class="otherBorder">学历:</b>{$formal_schooling}</td>
                </tr>
                <tr>
                    <td><b class="otherBorder">工作经验:</b>{$work_year}</td>
                    <td><b class="otherBorder">工作地点:</b>{$working_place}</td>
                </tr>
                <tr>
                    <td><b class="otherBorder">发布时间:</b>{$created_at}</td>
                    <td><b class="otherBorder"></b></td>
                </tr>
            </table>

        <div class="job_description">
            {$job_description}
        </div>

<!--         <div class="onlineResume">可在线投递简历</div>

        <div style="text-align: right;">
            <button type="button" class="resumeBtn">投简历</button>
        </div> -->
        <div style=" height: 40px;"></div>
    </section>

    <section class="sectionRight">
         <div style=" height: 50px;"></div>
        <div class="companyOtherDiv">
            <b>公司名称:</b>
            <a style="color: rgb(71,135,191); font-weight: bold;" href='{$websiteUrl}/company/companyDetail/?id={$company_id}'>&nbsp;&nbsp;&nbsp;{$company_name}</a>
        </div>

        {if {$company_industry}}

            <div class="companyOtherDiv">
                <b>所属领域:</b>&nbsp;&nbsp;&nbsp;{$company_industry}
            </div>

        {else}

        {/if}

        {if {$company_scale}}

            <div class="companyOtherDiv">
                <b>企业规模:</b>&nbsp;&nbsp;&nbsp;{$company_scale}
            </div>

        {else}

        {/if}


        {if {$company_website}}

            <div class="companyOtherDiv">
                <b>公司网址:</b>&nbsp;&nbsp;&nbsp;&nbsp;
                <a style="color: rgb(71,135,191);" href='{$company_website}'>{$company_website}</a>

            </div>

        {else}

        {/if}


        {if {$company_nature}}

            <div class="companyOtherDiv">
                <b>企业性质:</b>&nbsp;&nbsp;&nbsp;{$company_nature}
            </div>

        {else}

        {/if}



        {if {$company_address}}

            <div class="companyOtherDiv" style=" overflow: inherit">
                <b>公司地址:</b>&nbsp;&nbsp;&nbsp;&nbsp;<span style=" font-weight: normal">{$company_address}</span>
            </div>

        {else}

        {/if}

    </section>

</article>

</div>
</section>

</body>
{include file="$path/_footer.tpl"}
