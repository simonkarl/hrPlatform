
{include file="$path/_header.tpl"}



<style>

.positionWarpDiv{
    width: 1170px;
    margin: 0 auto;
    border: solid 1px rgb(221,221,221);
         border-radius: 5px;
     -webkit-border-radius: 5px;
     -moz-border-radius: 5px;
     margin-top: 10px;

}


.positionWrapContent{
    width:100%;
    display:-moz-box;
    display:-webkit-box;
    display:box;
}
.positionSectionOne{
    border-right: solid 1px rgb(221,221,221);
    -moz-box-flex:2;
    -webkit-box-flex:2;
    box-flex:2;
    width: 50%;
}
.positionSectionTwo{
    width: 50%;
    -moz-box-flex:1;
    -webkit-box-flex:1;
    box-flex:1;
}
.contentTitle{
    font-size: 18px;
font-weight: bold;
height: 40px;
line-height: 40px;
padding-left: 30px;
}
.contentContent{
    padding-left: 30px;
    margin-top: 10px;
    line-height: 25px;
    cursor: pointer;
}
.contentContent div span{
    padding-left: 10px;
    color: rgb(143,159,171);
    font-weight: bold;
}   
.chartWarp{
    width: 100%;
    border: solid 1px rgb(221,221,221);
    height: 200px;
    border-left: none;
    border-right: none;
}
.topResume{
    width: 100%;
    border-bottom: solid 1px rgb(221,221,221);
    height: 200px;
}
.topCompany{
        width: 100%;
    height: 200px;


}
.titleCenter{
        font-size: 18px;
font-weight: bold;
height: 40px;
text-align: center;
line-height: 40px;
}
</style>

<section>

<div class="positionWarpDiv">

    <article class="positionWrapContent">
    <section class="positionSectionOne">
        <div class="contentTitle">资讯推送</div>
        <div style="padding-left: 30px; margin-top: 5px;">你可能对以下咨询或推送信息感兴趣...</div>
        <div class="contentContent">
            <div>
                <a onclick='window.location.href="{$websiteUrl}/home/pushInfoDetail"'>1.茫茫人海中如何找到你的"Ta"</a>
            </div>
            <div>
                <a onclick='window.location.href="{$websiteUrl}/home/pushInfoDetail"'>2.互联网行业近几年发展趋势图标分析</a>
            </div>
            <div style="margin-bottom: 5px;">
                <a onclick='window.location.href="{$websiteUrl}/home/pushInfoDetail"'>3.互联网行业招聘"潜规则" 行业趋势以及图标分析</a>
            </div>
        </div>

    </section>
    <section class="positionSectionTwo">
        <div class="contentTitle">基本参考</div>
        <div class="contentContent" style=" margin-top: 0px;">
            <div>平均学历:<span>本科</span></div>
            <div>平均薪资:<span>7000～9000</span></div>
            <div>平均工作年限:<span>3~5年</span></div>
            <div>
                面试及智能评分:&nbsp;&nbsp;<a>精选面试题目及答案</a>
            </div>
        </div>
    </section>
    </article>

    <div class="chartWarp">
        <div class="titleCenter">基础图表分析</div>
    </div>


    <div class="topResume">
        <div class="titleCenter">TOP5简历</div>
    </div>


    <div class="topCompany">
        <div class="titleCenter">TOP5公司</div>
    </div>


</div>
</section>

{include file="$path/_footer.tpl"}

