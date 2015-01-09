
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
    background:purple;
    -moz-box-flex:1;
    -webkit-box-flex:1;
    box-flex:1;
    width: 75.5%;
}
.userCenterTable{
	width: 97%;
}
.userCenterTable tr td{
	height: 45px;
	font-size: 16px;
	letter-spacing: 2px;
	line-height: 45px;
	border: solid 1px rgb(221,221,221);
	cursor: pointer;
	padding-left: 40px;
}
.userCenterTable tr td:hover{
	height: 45px;
	font-size: 16px;
	letter-spacing: 2px;
	line-height: 45px;
	border: solid 1px rgb(221,221,221);
	cursor: pointer;
	padding-left: 40px;

	background-color: rgb(244,244,244);
}

</style>

<article class="userCenterWrap">
    <section class="userCenterSectionLfet">
    	<div style=" width: 100%; height: 500px;">
	    	<table class="userCenterTable">
	    		<tr>
	    			<td>基本信息</td>
	    		</tr>
	    		<tr>
	    			<td>我的订阅</td>
	    		</tr>
	    		<tr>
	    			<td>我的收藏</td>
	    		</tr>
	    		<tr>
	    			<td>我的消息</td>
	    		</tr>
	    		<tr>
	    			<td>我的服务</td>
	    		</tr>
	    		<tr>
	    			<td>我的简历库</td>
	    		</tr>

	    	</table>
	    </div>
    </section>
    <section class="userCenterSectionRight">02</section>
</article>


{include file="$path/_footer.tpl"}
