
<!-- 新 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">

<!-- 可选的Bootstrap主题文件（一般不用引入） -->
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="{$WebSiteUrlPublic}/css/font-awesome.min.css">


<style>

.reportBodyWarp{
  width: 770px;
  min-height: 35em;
  border: solid 3px rgb(255,153,51);
  margin: 0 auto; 
  background: #fff;

}


.reportHeader{
  /*background-color: rgb(198,219,239);*/

   font-size: 14px; 
   color: rgb(51,51,51);

}
.reportHeader div{
  margin-top: 10px;
}
.headerTitle{
  text-align: center;
  font-size: 32px;
  height:100px;
  line-height: 100px;
  border-bottom: solid 2px rgb(255,153,51);
}

.reportTitle{
  font-size: 18px;
  font-weight: bold;
  text-indent: 20px;
}
.reportContent{
  color: rgb(80,80,80);
}
.reportContent ul li{
  margin-top: 15px;
}
</style>

<script type="text/javascript" src="{$WebSiteUrlPublic}/js/Chart.js"></script>


<body style=" background-image: url('{$WebSiteUrlPublic}/images/body-bg.jpg');">
<section>

{include file="$path/_sempleHeader.tpl"}


  <div class="reportBodyWarp">
    <div class="reportHeader">
      <div><span>评测对象：简历对象</span></div>
      <div>评测机构：<i>HireLib&nbsp;评测中心</i></div>
      <div>评测日期：<i>2015-1-28</i></div>

      <div class="headerTitle">Hirelib评测报告</div>
    </div>

    <div>
      <div class="reportTitle" style=" margin-top: 30px;">工作中的优势</div>
      <div class="reportContent">
        <div style=" padding-left: 20px; margin-top: 10px;">根据职业性格特点，其在工作红的优势表现为：</div>
        <ul>
          <li>适应能力强，能迅速改变自己的行事速度及目标；</li>
          <li>加有一种天生的求知欲和搜集自己所需信息的技能；</li>
          <li>公能统观全局，能看出行为和思想之间潜在的含义，交际能力强，能以有感染力的热诚和精神激励他人；</li>
          <li>能洞察别人，能理解他们的需要和动机。</li>

        </ul>

      </div>

      <div class="reportTitle">个人能力素质综合展示</div>
      <div class="reportContent">
            <div style="width:50%; text-align: center">
      <canvas id="canvas" style=" margin-left: 44%;" height="450" width="450"></canvas>
    </div>
      </div>

      <div class="reportTitle">职业匹配度</div>
      <div class="reportContent">
        <div style=" padding-left: 20px; margin-top: 10px;">在职业性格进行全面评测的基础上，将其职业性格与七大典型职业类别工作的要求进行对比，对其是否合适工作岗位进行基本判断。
        </div>

        <img style=" height:300px;" src="{$WebSiteUrlPublic}/images/pcjy.png">


      </div>


      <div class="reportTitle">发展建议</div>
      <div class="reportContent">
        <div style=" padding-left: 20px; margin-top: 10px;">根据评测结果，针对其不足之处及未来发展需要，我们提出如下发展改进建议：
        </div>
        <ul>
          <li>公司应多提供团队方面的拓展训练，使其更好地融入团队，并鼓励在团队中依靠他人，信任他人，并增强沟通的主动性；</li>
          <li>加强思维训练，分析问题时注意把握事物之间的关联，以提高掌握规律和本质的准确性；</li>
          <li>公司培训部门应该提供一些人际交往技巧等相关培训，增强其人际沟通的主动性以及处理人际问题的能力；</li>
          <li>学习经营管理知识，增强对形势的辨别力，加强资源综合运用及配置的意识和效率，上级领导要增加其需要配置和使用资源的任务，并在其执行任务的过程中给予指导和反馈，加强其使用和配置资源的有效性。</li>

        </ul>

      </div>
    </div>


</div>

</section>

</body>

  <script>


  var radarChartData = {
    labels: ["责任心", "正直诚信", "团队合作", "执行力", "创新思维", "系统思考", "技术能力"],
    datasets: [

      {
        label: "My Second dataset",
        fillColor: "rgba(151,187,205,0.2)",
        strokeColor: "rgba(151,187,205,1)",
        pointColor: "rgba(151,187,205,1)",
        pointStrokeColor: "#fff",
        pointHighlightFill: "#fff",
        pointHighlightStroke: "rgba(151,187,205,1)",
        data: [28,48,40,19,52,27,60]
      }
    ]
  };

  window.onload = function(){

    window.myRadar = new Chart(document.getElementById("canvas").getContext("2d")).Radar(radarChartData, {
      responsive: true
    });

  }




  </script>

