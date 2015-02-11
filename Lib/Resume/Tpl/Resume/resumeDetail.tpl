
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
    background-color: #ccc;
    
}
.companyDetailSectionLeft{
    -moz-box-flex:1;
    -webkit-box-flex:1;
    box-flex:1;
    width: 100%;;
    font-size: 14px;
}

/*.companyDetailSectionLeft table{
    border:solid 1px rgb(221,221,221);
}

.companyDetailSectionLeft table tr{
    height: 40px;
    line-height: 40px;
}
.companyDetailSectionLeft table tr td{
     border:solid 1px rgb(221,221,221);
}
.resumeTitle{
    font-size: 18px;
    font-weight: bold;
}



.resumeContentTable{
    width: 100%;
}

.hintTd{
    width: 85px;
    padding-right: 10px;

        text-align:justify;
      text-justify:distribute-all-lines;
      text-align-last:justify;
      -moz-text-align-last:justify;
      -webkit-text-align-last:justify;

      color: rgb(76,76,76);
      font-weight: bold;

}

.hintTd span{ display: inline-block; padding-left: 100%; }*/


.resumeWarp{
    margin-top: 10px;
    width: 820px;
    min-height: 30em;
    border:solid 2px rgb(255,153,51);
    margin: 0 auto;
    margin-top: 30px;
}
.personInfo{

    width: 98%;
    border: solid 1px rgb(255,153,51);
    margin: 0 auto;
    margin-top: 10px;
    padding: 10px;
}
.personInfo .name{
font-size: 20px;
font-weight: bold;
border-bottom: dashed 1px rgb(255,153,51);
height: 50px;
line-height: 50px;
padding-left: 10px;
}
.ageExperience b{
    color: rgb(255,153,51);
    margin-left: 15px;
    height: 40px;
    line-height: 40px;
    font-size: 14px;
}

.privacyInfo{
padding-left: 15px;
}
.privacyInfo span{

}

.addressStyle{
    height: 30px;
line-height: 30px;
    padding-left: 15px;

}
.contentSpan{
    padding-left: 20px;
}


.workRecently{
    width:98%;
    margin: 0 auto;
    height:200px;
    display:-moz-box;
    display:-webkit-box;
    display:box;

}
.recentlyCompanyInfo{
     /*background:orange;*/
    -moz-box-flex:2;
    -webkit-box-flex:2;
    box-flex:2;
width: 50%;
padding: 10px;
}
.recentlyEducationInfo{
    /*background:purple;*/
    -moz-box-flex:1;
    -webkit-box-flex:1;
    box-flex:1;
    width: 50%;
    padding: 10px;
}

.catroyTitle{
    color: rgb(255,153,51);
    margin-left: 15px;
    height: 40px;
    line-height: 40px;
    font-size: 16px;
    font-weight: bold;
}
.catroyTitle b{
    font-size: 14px;
    color: rgb(96,96,96);
    margin-left: 10px;
}

.resumeTitle{
    border-bottom: solid 1px rgb(77,77,77);
width: 98%;
margin: 0 auto;
font-size: 16px;
font-weight: bold;
padding-left: 25px;
height: 40px;
line-height: 40px;
color: rgb(255,153,51);

}
.ziwopingjia{
    width: 98%;
    margin: 0 auto;
    padding-left: 25px;
    margin-top: 10px;
}
.workDescribe{
    padding-left: 15px;
    width: 98%;
    margin: 0 auto;
}
.toolStyle{
    height: 80px;
    margin-bottom: 20px;
    text-align: center;
    background-color: rgb(241,241,241);

}

</style>

<body style=" background-image: url('{$WebSiteUrlPublic}/images/body-bg.jpg');">
<section>
<div style="  min-height: 35em; border-radius: 5px; -webkit-border-radius: 5px; -moz-border-radius: 5px; border: solid 1px #bbb;width: 1170px; margin: 0 auto; margin-top: 10px;">

<article class="companyDetailwrap">
    <section class="companyDetailSectionLeft">
    <div class="toolStyle">
            <button type="button" class="btn btn-default btn-lg">
              <span class="glyphicon glyphicon-print"></span>  打印
            </button>
            <button type="button" class="btn btn-default btn-lg">
              <span class="glyphicon glyphicon-star"></span> 收藏
            </button>
            <button type="button" class="btn btn-info btn-lg" onclick='window.location.href="{$websiteUrl}/resume/report"'>
              HireLib评测报告
            </button>
            <button type="button" class="btn btn-primary btn-lg">
              购买此简历
            </button>

    </div>

    <div class="resumeWarp">
        <div class="personInfo">
            <div class="name">关键字:&nbsp;&nbsp;{$keyword}</div>
            <div class="ageExperience">
                <b>{$gongzuojingyan}</b><b>{$xingbei}</b><b>{$birth}</b>
            </div>
<!--             <table class="personInfoTable">
                <tr><td>居住地：</td><td>上海浦东</td><td>户口：</td><td>湖南</td></tr>
                <tr><td>电话：</td><td></td><td>Email：</td><td></td></tr>
            </table> -->

            <div class='addressStyle'>
                <span class="titleSpan">居住地:</span>
                <span class="contentSpan">{$juzhudi}</span>
                <span class="titleSpan" style=" margin-left: 30%;">户口:</span> 
                <span class="contentSpan">{$hukou}</span>
            </div>
            <div class="privacyInfo">
                <div style=" height: 30px;line-height: 30px;">
                    <span class="titleSpan">电&nbsp;&nbsp;&nbsp;&nbsp;话:</span> 
                    <span class="contentSpan">{$phone}--</span>
                </div>
                <div style=" height: 30px;line-height: 30px;">
                    <span class="titleSpan">邮&nbsp;&nbsp;&nbsp;&nbsp;箱:</span> 
                    <span class="contentSpan">{$email}--</span>
                </div>
            </div>
        </div>

            <article class="workRecently">
                <section class="recentlyCompanyInfo">
                    <div class="catroyTitle">最近工作<b>[3年10个月]</b></div>
                    <div class="addressStyle">
                        <span class="titleSpan">公司:</span>
                        <span class="contentSpan">{$company}</span>
                    </div>
                    <div class="addressStyle">
                        <span class="titleSpan">行业:</span>
                        <span class="contentSpan">{$hangye}</span>
                    </div>
                    <div class="addressStyle">
                        <span class="titleSpan">职位:</span>
                        <span class="contentSpan">{$zhiwei}</span>
                    </div>
                    <div class="addressStyle">
                        <span class="titleSpan">年薪:</span>
                        <span class="contentSpan">{$annual}</span>
                    </div>
                </section>
                <section class="recentlyEducationInfo">

                    <div class="catroyTitle">最高学历</div>
                    <div class="addressStyle">
                        <span class="titleSpan">学历:</span>
                        <span class="contentSpan">{$xueli}</span>
                    </div>
                    <div class="addressStyle">
                        <span class="titleSpan">专业:</span>
                        <span class="contentSpan">{$zhuanye}</span>
                    </div>
                    <div class="addressStyle">
                        <span class="titleSpan">学校:</span>
                        <span class="contentSpan">{$school}</span>
                    </div>

                </section>
            </article>

            <div class="resumeTitle">自我评价</div>
            <div class="ziwopingjia">{$ziwopingjia}</div>

            <div class="resumeTitle">求职意向</div>
            <div style=" padding: 10px; padding-left: 25px;">
                <div class="addressStyle">
                    <span class="titleSpan">期望薪资:</span>
                    <span class="contentSpan">{$qiwangyuexin}面议</span>
                </div>
                <div class="addressStyle">
                    <span class="titleSpan">期望行业:</span>
                    <span class="contentSpan">{$xiwanghangye}</span>
                </div>
                <div class="addressStyle">
                    <span class="titleSpan">目标地点:</span>
                    <span class="contentSpan">{$mubiaodidian}</span>
                </div>
                <div class="addressStyle">
                    <span class="titleSpan">到岗时间:</span>
                    <span class="contentSpan">{$daogangshijian}</span>
                </div>
            </div>


            <div class="resumeTitle">工作经历</div>
        <div style=" padding: 10px;">
            {foreach from=$work_experiencesArray item=results}
            <div style="padding-left: 25px;height: 40px;line-height: 40px;">
                <span><b>{$results.company_work_data}</b></span>
                <span style=" margin-left: 10px;"> {$results.company} </span>
                <span style=" margin-left: 10px;"> 少于50人 </span>
                <span style=" margin-left: 10px;"> [{$results.company_work_time}]</span>
             </div>
            <div class="addressStyle">
                <span class="titleSpan" style=" padding-left: 10px;">所属行业:</span>
                <span class="contentSpan" style=" padding-left: 10px;">{$results.hangye}</span>
            </div>
            <div class="addressStyle">
                <span class="titleSpan" style=" padding-left: 10px;"><b>{$results.bumen}</b></span>
                <span class="contentSpan" style=" padding-left: 10px;"><b>{$results.zhiwei}</b></span>
            </div>
            <div class="workDescribe">{$results.gongzuojieshao}</div>
            {/foreach}
        </div>



            <div class="resumeTitle">教育经历</div>
            <div style=" height: 40px; line-height: 40px;">
                <span style=" padding-left: 35px;">
                    {$studyTime}&nbsp;&nbsp;{$school}</span>
               <span style=" padding-left: 25px;">{$xueli}</span>
               <span style=" padding-left: 25px;">{$zhuanye}</span>
            </div>

    </div>

    <div style=" height: 30px;"></div>
    <div class="toolStyle">
            <button type="button" class="btn btn-default btn-lg">
              <span class="glyphicon glyphicon-print"></span>  打印
            </button>
            <button type="button" class="btn btn-default btn-lg">
              <span class="glyphicon glyphicon-star"></span> 收藏
            </button>
            <button type="button" class="btn btn-info btn-lg" onclick='window.location.href="{$websiteUrl}/resume/report"'>
              HireLib评测报告
            </button>
            <button type="button" class="btn btn-primary btn-lg">
              购买此简历
            </button>

    </div>
    </section>

    <section class="companyDetailSectionRight">

    </section>

</article>

</div>
</section>

</body>
{include file="$path/_footer.tpl"}
