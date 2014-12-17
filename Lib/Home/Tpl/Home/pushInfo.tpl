
{include file="$path/_header.tpl"}

<style>
.list-group-item{
	cursor: pointer;
}
.list-group-item:hover{
	background-color: rgb(236,240,241);
}
.badge{ background-color:rgb(241,91,64);}


.pushInfo_warpDiv{
	 min-height: 30em;
	 width: 1170px; 
	 margin: 0 auto; 
	 border: solid 1px #ccc;
}
.pushInfo_warpTitle{
	height: 2.5em; 
	line-height: 2.5em; 
	text-indent: 7px;
	background-color: rgb(240,240,240); 
	font-size: 1.2em; 
	font-weight: bold;
}
.pushInfo_freeSection{
	/*border: solid 1px red;*/

}
.pushInfo_vipSection{
	/*border: solid 1px red;*/
}
.pushInfo_freeTitle{	/*freeTitle and VIPTitie style*/
	height: 2em; 
	text-indent: 10px; 
	line-height: 2em;
	font-size: 1.2em; 
	width: 10%;
}

.lookMore{
	 text-align: right;
	 padding-right: 3px; 
	 cursor: pointer
}

</style>

<section>

<div class="pushInfo_warpDiv">

<div class="pushInfo_warpTitle">信息推送:</div>

<div style=" height: 10px;"></div>

<div class="pushInfo_freeSection">
	<div class="pushInfo_freeTitle">免费专区:</div>
	 <div style="width:87%; margin: 0 auto; ">
		<ul class="list-group">
		  <li class="list-group-item">
		    <span class="badge">2</span>
		    互联网行业招聘潜规则
		  </li>
		    <li class="list-group-item">
		    <span class="badge"></span>
		    制造业近几年发展趋势一般
		  </li>
		    <li class="list-group-item">
		    <span class="badge">3</span>
		    金融行业人才市场价格水涨船高
		  </li>
		</ul>
		<div class="lookMore">查看更多>></div>
	</div>
</div>

<div class="pushInfo_vipSection">
	<div class="pushInfo_freeTitle">VIP专区:</div>
	 <div style="width:87%; margin: 0 auto; ">
		<ul class="list-group">
		  <li class="list-group-item">
		    <span class="badge">2</span>
		    互联网行业招聘潜规则
		  </li>
		    <li class="list-group-item">
		    <span class="badge"></span>
		    制造业近几年发展趋势一般
		  </li>
		    <li class="list-group-item">
		    <span class="badge">3</span>
		    金融行业人才市场价格水涨船高
		  </li>
		</ul>
		<div class="lookMore">查看更多>></div>
	</div>
</div>

	<div style=" height: 20px;"></div>
</div>
</section>
{include file="$path/_footer.tpl"}
