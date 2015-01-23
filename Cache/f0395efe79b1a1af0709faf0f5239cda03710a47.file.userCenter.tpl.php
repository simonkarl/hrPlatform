<?php /* Smarty version Smarty-3.0-RC2, created on 2015-01-22 15:27:02
         compiled from "/Users/Lev/Sites/hrPlatform/Lib/User/Tpl/User/userCenter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:130376260254c0a6464af3d7-18120592%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0395efe79b1a1af0709faf0f5239cda03710a47' => 
    array (
      0 => '/Users/Lev/Sites/hrPlatform/Lib/User/Tpl/User/userCenter.tpl',
      1 => 1421911620,
    ),
  ),
  'nocache_hash' => '130376260254c0a6464af3d7-18120592',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

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
	font-weight: bold;
}
.userCenterTable tr td a:hover{
	text-decoration: none;
	color: rgb(255,153,51);
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

<body style=" background-image: url('<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/images/body-bg.jpg');">
<article class="userCenterWrap">
    <section class="userCenterSectionLfet">
    	<div style=" width: 100%; height: 500px;">
	    	<table class="userCenterTable">
	    		<tr>
	    			<td ><a href='<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/user/userCenter?action=info'>基本信息</a></td>
	    		</tr>
	    		<tr>
	    			<td><a href='<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/user/userCenter?action=dingyue'>我的订阅</a></td>
	    		</tr>
	    		<tr>
	    			<td><a href='<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/user/userCenter?action=shouchang'>我的收藏</a></td>
	    		</tr>
	    		<tr>
	    			<td><a href='<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/user/userCenter?action=xiaoxi'>我的消息</a></td>
	    		</tr>
	    		<tr>
	    			<td><a href='<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/user/userCenter?action=fuwu'>我的服务</a></td>
	    		</tr>
	    		<tr>
	    			<td><a href='<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/user/userCenter?action=jianliku'>我的简历库</a></td>
	    		</tr>

	    	</table>
	    </div>
    </section>
    <section class="userCenterSectionRight">

    	<?php echo $_smarty_tpl->getVariable('right')->value;?>

    </section>
</article>
</body>
<script>
	$(function(){
		$(".userCenterTable tr td").click(function(event) {
			/* Act on the event */
			$(this).css("background-color","rgb(255,153,51)");
		});

	})

</script>


<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
