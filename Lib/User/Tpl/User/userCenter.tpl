
{include file="$path/_header.tpl"}

<style>

.userCenterWrap{
    width: 1170px;
    margin: 0 auto;
    display:-moz-box;
    display:-webkit-box;
    display:box;
    border: solid 1px rgb(221,221,221);
    -webkit-border-radius: 5px;
   -moz-border-radius: 5px;
   margin-top: 10px;

}
.userCenterSectionLfet{
    -moz-box-flex:2;
    -webkit-box-flex:2;
    box-flex:2;
    width: 24.5%;
}
.userCenterSectionRight{
    -moz-box-flex:1;
    -webkit-box-flex:1;
    box-flex:1;
    width: 75.5%;
    min-height: 30em;
}
.userCenterTable{
	width: 100%;
}

.userCenterTable tr td a{
	width: 100%;
	display: block;
	padding-left: 40px;
}
.userCenterTable tr td a:hover{
	text-decoration: none;
}
.userCenterTable tr{
	height: 45px;
	font-size: 16px;
	letter-spacing: 2px;
	line-height: 45px;
	border-bottom: solid 1px rgb(221,221,221);
	cursor: pointer;
}

.userCenterTable tr:hover{
	height: 45px;
	font-size: 16px;
	letter-spacing: 2px;
	line-height: 45px;
	border-bottom: solid 1px rgb(221,221,221);
	cursor: pointer;

	background-color: rgb(241,241,241);
}

</style>

<article class="userCenterWrap">
    <section class="userCenterSectionLfet">
    	<div style=" width: 100%; height: 500px;">
	    	<table class="userCenterTable">
	    		<tr>
	    			<td ><a href='{$websiteUrl}/user/userCenter?action=info'>基本信息</a></td>
	    		</tr>
	    		<tr>
	    			<td><a href='{$websiteUrl}/user/userCenter?action=dingyue'>我的订阅</a></td>
	    		</tr>
	    		<tr>
	    			<td><a href='{$websiteUrl}/user/userCenter?action=shouchang'>我的收藏</a></td>
	    		</tr>
	    		<tr>
	    			<td><a href='{$websiteUrl}/user/userCenter?action=xiaoxi'>我的消息</a></td>
	    		</tr>
	    		<tr>
	    			<td><a href='{$websiteUrl}/user/userCenter?action=fuwu'>我的服务</a></td>
	    		</tr>
	    		<tr>
	    			<td><a href='{$websiteUrl}/user/userCenter?action=jianliku'>我的简历库</a></td>
	    		</tr>

	    	</table>
	    </div>
    </section>
    <section class="userCenterSectionRight">

    	{$right}
    </section>
</article>
<script>
	$(function(){
		$(".userCenterTable tr td").click(function(event) {
			/* Act on the event */
			$(this).css("background-color","red");
		});

	})

</script>


{include file="$path/_footer.tpl"}
