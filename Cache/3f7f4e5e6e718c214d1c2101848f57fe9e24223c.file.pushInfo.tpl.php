<?php /* Smarty version Smarty-3.0-RC2, created on 2015-01-22 15:04:05
         compiled from "/Users/Lev/Sites/hrPlatform/Lib/Home/Tpl/Home/pushInfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:97459679854c0a0e5bfe3f9-73469788%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f7f4e5e6e718c214d1c2101848f57fe9e24223c' => 
    array (
      0 => '/Users/Lev/Sites/hrPlatform/Lib/Home/Tpl/Home/pushInfo.tpl',
      1 => 1421910027,
    ),
  ),
  'nocache_hash' => '97459679854c0a0e5bfe3f9-73469788',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<style>
.pushInfo_warpDiv{
	 min-height: 30em;
	 width: 1170px; 
	 margin: 0 auto; 
	 border: solid 1px #ccc;
	 border-radius: 5px;
	 -webkit-border-radius: 5px;
	 -moz-border-radius: 5px;
	 margin-top: 10px;
}
.pushInfo_warpTitle{ 
width: 87%;
text-indent: 7px;
margin: 0 auto;
height: 120px;
line-height: 28px;
}

.pushInfo_warpTitle div b{
	 color: rgb(71,135,191);
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
	width: 40%;
	padding-left: 65px;
	font-weight: bold;
	margin-top: 10px;
}

.table{
	border:solid 1px rgb(221,221,221);
}
.table tr{
	cursor: pointer;
}
.table tr:hover{
	background-color: rgb(236,240,241);
}
.table tr td{
	text-indent: 20px;
}
</style>

<body style=" background-image: url('<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/images/body-bg.jpg');">

<section>

<div class="pushInfo_warpDiv">

	<div style="font-size: 24px;
font-weight: bold;
padding-left: 7%;
<!-- background-color: rgb(244,244,244); -->
margin: 0 auto;
margin-bottom: 20px;
height: 70px;
line-height: 100px;">你真的知道如何招聘吗?</div>
<div class="pushInfo_warpTitle">
	<div>经调查发现有近<b>60%</b>的HR不知道招聘职位的关键字会对招聘有重大影响</div>
	<div>经调查发现有近<b>73.4%</b>的HR不知道如何发布有吸引力的招聘启事</div>
	<div>身为HR的你,了解行业发展的趋势吗?知道近几年职位的薪资水平的分布吗?...</div>
	<div><b>从Hirelib开始学习 开始了解 开始你的职业高级HR的旅程!</b></div>

</div>

<div style=" border-bottom: solid 1px rgb(221,221,221); width: 87%; margin: 0 auto;"></div>
<div style=" height: 10px;"></div>

<div class="pushInfo_freeSection">
	<div class="pushInfo_freeTitle">免费专区:</div>
	 <div style="width:87%; margin: 0 auto; ">
		<table class="table">
		    <tr onclick='window.location.href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/home/pushInfoDetail"'>
		    	<td>金融行业近几年发展趋势图标分析</td>
		    	<td>2015-1-6</td>
			</tr>
		    <tr onclick='window.location.href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/home/pushInfoDetail"'>
		    	<td>茫茫人海中如何找到你的"Ta"</td>
		    	<td>2015-1-6</td>
		  	</tr>
		  	<tr onclick='window.location.href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/home/pushInfoDetail"'>
		  		<td>互联网行业招聘"潜规则" 行业趋势以及图标分析</td>
		  		<td>2015-1-6</td>
			</tr>
		</table>
	</div>
</div>

<div class="pushInfo_vipSection">
	<div class="pushInfo_freeTitle">VIP专区:</div>
	 <div style="width:87%; margin: 0 auto; ">
		<table class="table">
		    <tr onclick='window.location.href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/home/pushInfoDetail"'>
		    	<td>金融行业近几年发展趋势图标分析</td>
		    	<td>2015-1-6</td>
			</tr>
		    <tr onclick='window.location.href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/home/pushInfoDetail"'>
		    	<td>茫茫人海中如何找到你的"Ta"</td>
		    	<td>2015-1-6</td>
		  	</tr>
		  	<tr onclick='window.location.href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/home/pushInfoDetail"'>
		  		<td>互联网行业招聘"潜规则" 行业趋势以及图标分析</td>
		  		<td>2015-1-6</td>
			</tr>
		</table>
	</div>
</div>

	<div style=" height: 20px;"></div>
</div>
</section>
</body>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
