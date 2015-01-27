
{include file="$path/_header.tpl"}



<style>

    .positionWarpDiv{
        width: 1170px;
        margin: 0 auto;
        border: solid 1px rgb(221,221,221);
        border-radius: 5px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
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
        border-left: none;
        border-right: none;
    }
    .topResume{
        width: 100%;
        border-bottom: solid 1px rgb(221,221,221);  
    }
    .topCompany{
        width: 100%;
    }
    .titleCenter{
        font-size: 18px;
        font-weight: bold;
        height: 40px;
        text-align: center;
        line-height: 40px;
    }


    .tableContent{
        width: 90%;
        margin: 0 auto;
        margin-top: 10px;
        margin-bottom: 20px;
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
</style>

<body style=" background-image: url('{$WebSiteUrlPublic}/images/body-bg.jpg');">
    <section>

        <div style="height: 50px;
             line-height: 50px;
             width: 1170px;
             margin: 0 auto;
             font-size: 20px;
             font-weight: bold;
             text-align: center;">关于{$keyword}职位</div>
        <div class="positionWarpDiv">
            <article class="positionWrapContent">
                <section class="positionSectionOne">
                    <div class="contentTitle">资讯推送</div>
                    <div style="padding-left: 30px; margin-top: 5px;">你可能对以下咨询或推送信息感兴趣...</div>
                    <div class="contentContent">
                        <div>
                            <a onclick='window.location.href = "{$websiteUrl}/home/pushInfoDetail"'>1.茫茫人海中如何找到你的"Ta"</a>
                        </div>
                        <div>
                            <a onclick='window.location.href = "{$websiteUrl}/home/pushInfoDetail"'>2.互联网行业近几年发展趋势图标分析</a>
                        </div>
                        <div style="margin-bottom: 5px;">
                            <a onclick='window.location.href = "{$websiteUrl}/home/pushInfoDetail"'>3.互联网行业招聘"潜规则" 行业趋势以及图标分析</a>
                        </div>
                    </div>

                </section>
                <section class="positionSectionTwo">
                    <div class="contentTitle">基本参考</div>
                    <div class="contentContent" style=" margin-top: 0px;">
                        <div>平均学历:<span>{$education}</span></div>
                        <div>平均薪资:<span>{$compensation}</span></div>
                        <div>平均工作年限:<span>{$work_experience}</span></div>
                        <div>
                            面试及智能评分:&nbsp;&nbsp;<a>精选面试题目及答案</a>
                        </div>
                    </div>
                </section>
            </article>

            <div class="chartWarp">
                <div class="titleCenter">最来{$keyword}职位需求人数趋势</div>

                {if {$xArray} == ""}

                    <div style=" font-size: 18px; text-align: center; margin-top: 30px;margin-bottom: 30px; height:45px;line-height: 45px; background-color: rgb(241,241,241); ">暂无数据</div>
                {else}

                    <div style=" width: 70%; margin: 0 auto; margin-bottom: 20px;">
                        <canvas id="canvas" height="100" width="300"></canvas>
                    </div>

                {/if}

            </div>


            <div class="topResume">
                <div class="titleCenter">精选{$keyword}TOP5简历</div>

                {if $top_resumeArray != ""}
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

                        {foreach from=$top_resumeArray item=results}

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

                {else}

                    <div style=" font-size: 18px; text-align: center; margin-top: 30px;margin-bottom: 30px; height:45px;line-height: 45px; background-color: rgb(241,241,241); ">暂无数据</div>

                {/if}

            </div>


            <div class="topCompany">
                <div class="titleCenter">热招{$keyword}的TOP5公司</div>

                {if $top_companyArray != ""}
                    <table class="tableContent">

                        <tr class="tableContentTr">
                            <td class="ContentNameTd">公司名称</td>
                            <td class="ContentNameTd">学历要求</td>
                            <td class="ContentNameTd">薪资待遇</td>
                        </tr>


                        {foreach from=$top_companyArray item=results}

                            <tr class="tableContentTrTag" onclick='window.location.href = "{$websiteUrl}/position/positionDetail/?id={$results.position[0].positions_id}"'>
                                <td class="ContentNameTd">{$results.company.company_name}</td>

                                {if $results.position[0].formal_schooling != ""}
                                    <td class="ContentNameTd">{$results.position[0].formal_schooling}</td>
                                {else}
                                    <td class="ContentNameTd">不限</td>
                                {/if}

                                <td class="ContentNameTd">{$results.position[0].salary_range}</td>
                            </tr>

                        {/foreach}

                    </table>

                {else}

                    <div style=" font-size: 18px; text-align: center; margin-top: 30px;margin-bottom: 30px; height:45px;line-height: 45px; background-color: rgb(241,241,241); ">暂无数据</div>

                {/if}

            </div>
        </div>

        <script>

            var xArray = eval('{$xArray}')

            var yArray = eval('{$yArray}')

            $(function () {

                var lineChartData = {
                    labels: xArray,
                    datasets: [
                        {
                            label: "My First dataset",
                            fillColor: "rgba(220,220,220,0.2)",
                            strokeColor: "rgba(220,220,220,1)",
                            pointColor: "rgba(220,220,220,1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(151,187,205,1)",
                            data: yArray
                        }
                    ]

                }

                window.onload = function () {
                    var ctx = document.getElementById("canvas").getContext("2d");
                    window.myLine = new Chart(ctx).Line(lineChartData, {
                        responsive: true
                    });
                }

            })

        </script>

    </section>
</body>
{include file="$path/_footer.tpl"}

