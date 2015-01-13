<style>

.infoWarp{
	 margin: 0 auto; 
	 border: solid 1px #ccc;
}

.titleInfo{
	font-size: 16px;
	font-weight: bold;
	margin-top: 22px;
}

.contentInfo .form-group label{

	text-align: right;
}

.contentInfo .form-group input{
	width: 240px;
	margin-left: -15px;
	margin-top: -5px;
}


.borderStyle{
border-bottom: solid 1px rgb(230,230,230);
width: 653px;
/* float: right; */
float: left;
margin-left: 136px;
margin-top: -12px;
}
.titleBtnStyle{

	/* width: 100px; */
/* float: right; */
float: right;
margin-top: -28px;
margin-right: 60px;

}
.titleStyle{
	 margin-left: 67px;
	 color: rgb(66,48,9);

}
.titleBtnStyle button{
width: 45px;
height: 30px;
border-radius: 15px;
text-indent: -1px;
padding-top: 3px;
font-weight: normal;
font-size: 9px;
background: rgb(241,241,241);
border: solid 1px rgb(230,230,230);
}
.titleBtnStyle button:hover{
	width: 45px;
height: 30px;
border-radius: 15px;
text-indent: -1px;
padding-top: 3px;
font-weight: normal;
font-size: 9px;
background: rgb(241,241,241);
border: solid 1px rgb(230,230,230);

color: #fff;
background-color: rgb(231,76,60);
}

.explainStyle{
	padding-top: -44px;
display: block;
margin-top: -28px;
margin-left: 230px;
color: rgb(120,120,120);
}

.noBorder{
	border: none;
	box-shadow: none;
}
</style>


<div class="infoWarp">

	<div class="titleInfo">
		<div class="titleStyle">基本信息</div>
		<div class="borderStyle"></div>
		<div class="titleBtnStyle">
			<button id="editBasic" type="button">编辑</button>
		</div>
	</div>
	<div class="contentInfo">
		<div style="height: 38px;"></div>
		<div class="form-group">
		    <label for="inputEmail3" class="col-sm-2 control-label">账号:</label>
		    <div class="col-sm-10">
		      <input type="email" style="border: none; box-shadow: none;" class="form-control" id="accountEmail" placeholder="">
		    </div>
		 </div>
		 <div style="height: 48px;"></div>
		  <div class="form-group">
		    <label for="inputPassword3" class="col-sm-2 control-label">接收订阅邮箱:</label>
		    <div class="col-sm-10">
		      <input type="email" class="form-control" id="acceptTakeEmail" placeholder="">
		    </div>
		  </div>
	</div>


	<div style=" height: 30px;"></div>
		<div class="titleInfo">
		<div class="titleStyle">招聘信息</div>
		<div class="borderStyle"></div>
		<div class="titleBtnStyle">
			<button type="button" id="editInvite">编辑</button>
		</div>
	</div>
	<div class="contentInfo">
			<div style="height: 38px;"></div>
		  <div class="form-group">
		    <label for="inputPassword3" class="col-sm-2 control-label">公司名称:</label>
		    <div class="col-sm-10">
		      <input type="email" class="form-control" id="acceptEmail" placeholder="">
		    </div>
		  </div>
		  		<div style="height: 48px;"></div>
		  <div class="form-group">
		    <label for="inputPassword3" class="col-sm-2 control-label">公司电话:</label>
		    <div class="col-sm-10">
		      <input type="email" class="form-control" id="acceptEmail" placeholder="">
		    </div>
		  </div>
		 		<div style="height: 48px;"></div>
		  	<div class="form-group">
		    <label for="inputEmail3" class="col-sm-2 control-label">HR联系方式:</label>
		    <div class="col-sm-10">
		      <input type="email" class="form-control" id="accountEmail" placeholder="">
		      <span class="explainStyle">*请填写真实有效的电话号码,方便与您及时取得联系</span>
		    </div>
		 </div>

		 		<div style="height: 48px;"></div>
		  <div class="form-group">
		    <label for="inputPassword3" class="col-sm-2 control-label">接收简历邮箱:</label>
		    <div class="col-sm-10">
		      <input type="email" class="form-control" id="acceptEmail" placeholder="">
		      <span class="explainStyle">*该邮箱必须为企业邮箱，审核通过后不可更改</span>
		    </div>
		  </div>
	</div>
	<div style=" height: 70px;"></div>

</div>

<script>

	$(function(){

		$("#editBasic").click(function(event) {
			/* Act on the event */

			if($(this).html()=="编辑"){
				$(this).html('保存');



			}else{
				$("#acceptTakeEmail").removeClass('noBorder');
				$(this).html('编辑');
			}
		});

	})



</script>

