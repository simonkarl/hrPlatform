
{include file="$path/_header.tpl"}

<style>
.list-group-item{
	cursor: pointer;
}
.list-group-item:hover{
	background-color: rgb(236,240,241);
}
.badge{ background-color:rgb(241,91,64);}
.table-bordered tr td{ text-align: center;}
.table-bordered tr td span{ color: rgb(61,181,73);}
.servicesTitleTr{ font-size: 1em; font-weight: bold;}
.servicesTitleTr td{ font-size: 14px;}

.sureBuyStyle{
	width: 100px;height: 35px;background-color: rgba(71,135,191,1);color: #fff;border: none;font-size: 17px;font-weight: bold; cursor: pointer;
  border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px;
}
.s_dis{
  font-size: 0.7em; color: rgb(71,135,191);font-weight: bold;
}

</style>

<body style=" background-image: url('{$WebSiteUrlPublic}/images/body-bg.jpg');">
<section>
<div style=" min-height: 30em;width: 1170px; margin: 0 auto; border: solid 1px #ccc;">

<div style=" height: 5.5em; margin-top: 5px; line-height: 2.5em; text-indent: 7px;
background-color: rgb(236,240,241); font-size: 1.2em; font-weight: bold;">服务订阅: <span class="glyphicon glyphicon-volume-up" style=" color: rgb(233,141,36); font-size: 0.8em;"></span>
  <span style=" font-size: 0.7em;">
    所订阅服务信息将发送至您的邮箱,可在<a style=" cursor: pointer">个人中心</a>更换邮箱.
  </span>
  <div style="font-size: 14px;">
  说明：订阅邮件中包含以下信息,请根据你的具体需要选择不同套餐进行订阅!
  </div>
</div>

<div style=" height: 10px;"></div>

<div style="height: 2em; text-indent: 10px; line-height: 2em;font-size: 1.2em; width: 100%; border: dashed 1px #ccc">
	<span style=" font-weight: bold">HR套餐一:</span> 
	<span class="s_dis">(适用于HR)</span>
	<span style='float: right;padding-right: 10px;'><input class="checkboxStyle" type="checkbox"></span>
</div>

<table class="table table-bordered">
  <tr class="servicesTitleTr">
  	<td>各行业招聘最多的TOP5职位</td>
  	<td>行业热招TOP5职位有哪些公司在招聘</td>
  	<td>行业热招TOP5职位工作经验和人数分布</td>
  	<td>行业热招TOP5职位招聘时间</td>
  	<td>行业热招TOP5职位相似的职位发布名称</td>
  </tr>
  <tr>
  	<td><span style=" color: rgb(7,135,191)" class="glyphicon glyphicon-ok"></span></td>
  	<td><span style=" color: rgb(7,135,191)" class="glyphicon glyphicon-ok"></span></td>
  	<td><span style=" color: rgb(7,135,191)" class="glyphicon glyphicon-ok"></span></td>
  	<td></td>
  	<td></td>
  </tr>

</table>



<div style="height: 2em; text-indent: 10px; line-height: 2em;font-size: 1.2em; width: 100%; border: dashed 1px #ccc">
	<span style=" font-weight: bold">HR套餐二:</span> 
	<span class="s_dis">(适用于HR)</span>
	<span style='float: right;padding-right: 10px;'><input class="checkboxStyle" type="checkbox"></span>
</div>

<table class="table table-bordered">
  <tr class="servicesTitleTr">
    <td>各行业招聘最多的TOP5职位</td>
    <td>行业热招TOP5职位有哪些公司在招聘</td>
    <td>行业热招TOP5职位工作经验和人数分布</td>
    <td>行业热招TOP5职位招聘时间</td>
    <td>行业热招TOP5职位相似的职位发布名称</td>
  </tr>
  <tr>
  	<td><span style=" color: rgb(7,135,191)" class="glyphicon glyphicon-ok"></span></td>
  	<td><span style=" color: rgb(7,135,191)" class="glyphicon glyphicon-ok"></span></td>
  	<td><span style=" color: rgb(7,135,191)" class="glyphicon glyphicon-ok"></span></td>
  	<td><span style=" color: rgb(7,135,191)" class="glyphicon glyphicon-ok"></span></td>
  	<td><span style=" color: rgb(7,135,191)" class="glyphicon glyphicon-ok"></span></td>
  </tr>

</table>



<div style="height: 2em; text-indent: 10px; line-height: 2em;font-size: 1.2em; width: 100%;border: dashed 1px #ccc">
	<span style=" font-weight: bold">基础套餐:</span> 
	<span class="s_dis">(适用于HR和求职者)</span>
	<span style='float: right;padding-right: 10px;'><input class="checkboxStyle" type="checkbox"></span>
</div>

<table class="table table-bordered">
  <tr class="servicesTitleTr">
    <td>职位的行业资讯</td>
    <td>高端招聘信息</td>
    <td>行业热招TOP5职位有哪些公司在招聘</td>
    <td>行业热招TOP5职位工作经验和人数分布</td>
    <td>行业热招TOP5职位相似的职位发布名称</td>
  </tr>
  <tr>
  	<td><span style=" color: rgb(7,135,191)" class="glyphicon glyphicon-ok"></span></td>
  	<td><span style=" color: rgb(7,135,191)" class="glyphicon glyphicon-ok"></span></td>
  	<td><span style=" color: rgb(7,135,191)" class="glyphicon glyphicon-ok"></span></td>
  	<td><span style=" color: rgb(7,135,191)" class="glyphicon glyphicon-ok"></span></td>
  	<td><span style=" color: rgb(7,135,191)" class="glyphicon glyphicon-ok"></span></td>
  </tr>

</table>

	<div style=" width: 99.5%; text-align: right;">
    <button type="submit" class="sureBuyStyle btn btn-primary">下一步</button>
</div>


	<div style=" height: 20px;"></div>
</div>
</section>
</body>
<script>
	$(function(){
		$(".checkboxStyle").click(function() {
			/* Act on the event */
			if(this.checked){
				$(this).parent().parent().css("background-color","rgb(236,240,241)");
				$(this).parent().parent().css("color","rgb(215,48,39)");
			}else{
				$(this).parent().parent().css("background-color","#fff");
				$(this).parent().parent().css("color","#000");
			}

		});

    $(".sureBuyStyle").click(function() {
      /* Act on the event */

      window.open('{$websiteUrl}/home/rss')
    });

	})

</script>


{include file="$path/_footer.tpl"}
