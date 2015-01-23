
{include file="$path/_header.tpl"}

<style>
.servicesCustomWarp{
	 min-height: 30em;
	 width:1170px; 
	 margin: 0 auto; 
	 border: solid 1px #ccc;
	 	 -webkit-border-radius: 5px;
	 -moz-border-radius: 5px;
	 margin-top: 10px;
}
.reportStyle{
	padding-left: 95px;
}
.reportStyle dl dt{
	font-size: 16px;
	margin-top: 30px;
}

.reportStyle dl dd{
	font-size: 14px;
}
.planTable{
	 width: 83%;
	 margin: 0 auto;

}
.planTable tr td{
	text-align: center;
	color: #ccc;
}

.planTable tr td img{
	height: 20px;
width: 160px;
}
</style>

<body style=" background-image: url('{$WebSiteUrlPublic}/images/body-bg.jpg');">
<section>
<div class="servicesCustomWarp">

	<div style=" border-bottom: solid 1px rgb(221,221,221);  height: 195px;">
        <div style="height: 70px;line-height: 70px;font-size: 24px; font-weight: bold;border-bottom: solid 1px rgb(221,221,221); background: #fff; ">
        	<table class="planTable">
        		<tr>
        			<td style="color: rgb(44,62,80);">服务介绍</td>
        			<td><img src="{$WebSiteUrlPublic}/images/right2.png"></td>
        			<td>确认信息</td>
        			<td><img src="{$WebSiteUrlPublic}/images/right2.png"></td>
        			<td>完成支付</td>
        			<td><img src="{$WebSiteUrlPublic}/images/right2.png"></td>
        			<td>订阅成功</td>
        		</tr>
        	</table>
        </div>

        <div style="width: 550px;
line-height: 30px;
padding-left: 95px;
margin-top: 12px;">根据大量数据分析和技术手段的加工我们为你提供行业信息的五大报表.进一步帮助你把握行业动态,凸显职业专业性.了解同行业公司的招聘方向和职位竞争,也许你所需要的人才就在他那里...
        </div>
    </div>

        <div class="reportStyle">

        	<dl>
			  <dt>报表一: 各行业招聘最多的TOP5职位</dt>
			  <dd></dd>

			  <dt>报表二: 行业热招TOP5职位有哪些公司在招聘</dt>
			  <dd></dd>

			  <dt>报表三: 行业热招TOP5职位工作经验和人数分布</dt>
			  <dd></dd>

			  <dt>报表四: 行业热招TOP5职位招聘时间</dt>
			  <dd></dd>

			  <dt>报表五: 行业热招TOP5职位相似的职位发布名称</dt>
			  <dd></dd>
			</dl>

        </div>

	<div style="width: 87%; text-align: right;">

	{if $whether_login == 0}

	 <button type="submit" class=" btn btn-primary" onclick='javascript:alert("还未登录")'>下一步</button>

	{else}

	<button type="submit" class="sureBuyStyle btn btn-primary" >下一步</button>

	{/if}
    
	</div>

	<div style=" height: 30px;"></div>
</div>
</section>
</body>
<script>
	$(function(){

	    $(".sureBuyStyle").click(function() {
	      /* Act on the event */

	      window.location.href='{$websiteUrl}/home/rss';
	    });

	})

</script>


{include file="$path/_footer.tpl"}
