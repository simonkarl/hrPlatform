
{include file="$path/_header.tpl"}

<style>
.titleBorder{
    border-bottom: solid 5px rgb(71,135,191);
    font-size: 20px;
}

.reportStyle dl dt{
	font-size: 16px;
	margin-top: 30px;
}

.reportStyle dl dd{
	font-size: 14px;
}
</style>


<section>
<div style=" min-height: 30em;width: 1170px; margin: 0 auto; border: solid 1px #ccc;padding-left: 60px;">

        <div style="height: 100px;line-height: 100px;">
        	<b class="titleBorder">服务定制:</b>
        </div>

        <div style="width: 540px;
line-height: 25px;">根据大量数据分析和技术手段的加工我们为你提供行业信息的五大报表.进一步帮助你把握行业动态,凸显职业专业性.了解同行业公司的招聘方向和职位竞争,也许你所需要的人才就在他那里...</div>
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
<script>
	$(function(){

	    $(".sureBuyStyle").click(function() {
	      /* Act on the event */

	      window.open('{$websiteUrl}/home/rss')
	    });

	})

</script>


{include file="$path/_footer.tpl"}
