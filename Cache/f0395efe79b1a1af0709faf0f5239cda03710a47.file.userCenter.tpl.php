<?php /* Smarty version Smarty-3.0-RC2, created on 2015-01-08 11:35:49
         compiled from "/Users/Lev/Sites/hrPlatform/Lib/User/Tpl/User/userCenter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:160482856554adfb15403eb5-93371631%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0395efe79b1a1af0709faf0f5239cda03710a47' => 
    array (
      0 => '/Users/Lev/Sites/hrPlatform/Lib/User/Tpl/User/userCenter.tpl',
      1 => 1420688147,
    ),
  ),
  'nocache_hash' => '160482856554adfb15403eb5-93371631',
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
	    			<td ><a href='"<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/user/collect"'></a>我的收藏</td>
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


<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
