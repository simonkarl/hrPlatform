<?php /* Smarty version Smarty-3.0-RC2, created on 2015-01-06 11:47:25
         compiled from "/Users/Lev/Sites/hrPlatform/Public/html//_userLogin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:203669654ab5acd2be4f1-71797846%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a117ced11ff76660d26eac727976d48b8677d55' => 
    array (
      0 => '/Users/Lev/Sites/hrPlatform/Public/html//_userLogin.tpl',
      1 => 1420516043,
    ),
  ),
  'nocache_hash' => '203669654ab5acd2be4f1-71797846',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/js/user.js"></script>
<style>

.loginedTable{
	 height: 330px;
	 width: 111%;
	 margin: -11px;
}
.loginedTable tr td{
	border: solid 1px #ccc;
font-size: 24px;
font-weight: bold;
text-align: center;
width: 50%;
line-height: 68px;
cursor: pointer;
}
.loginedTable tr td:hover{
	color: rgb(231,76,60);
}
.loginedTable tr td span{
	font-size: 32px;
}
</style>

<?php if ($_smarty_tpl->getVariable('whether_login')->value==1){?>

	 <table class="loginedTable">
	 	<tr>
	 		<td>简历库<br /><span class="glyphicon glyphicon-folder-open"></span></td>
	 		<td>订阅<br /><span class="glyphicon glyphicon-send"></span></td>
	 	</tr>
	 	<tr>
	 		<td>消息<br /><span class="glyphicon glyphicon-envelope"></span></td>
	 		<td onclick="userlogout()">退出<br /><span class="glyphicon glyphicon-exclamation-sign"></span></td>
	 	</tr>
	 </table>

<?php }else{ ?>
<div style="font-size: 20px; border-bottom: solid 1px #ccc; font-weight: bold;color:rgb(44,62,81);height: 50px; line-height: 50px;">用户登录</div>
<div style="font-size: 16px; margin-top: 15px; font-weight: bold;color:rgb(44,62,81)">邮箱:</div>
<div style=" margin-top: 12px; margin-bottom: 12px;">
    <input type="email" class="form-control" id="userLoginEmail" placeholder="请输入登陆邮箱">
</div>
<div style="font-size: 16px;font-weight: bold;color:rgb(44,62,81);">密码:</div>
<div style=" margin-top: 12px; margin-bottom: 12px;">
    <input type="password" class="form-control" id="userLoginPassword" placeholder="请输入密码">
</div>

<div style=" text-align: center;">
    <button onclick='userLogin()' type="button" style="width: 200px;background-color: rgb(71,135,191);border: solid 1px #369;color: #fff;height: 35px;font-size: 16px; border-radius: 5px; --webkit-border-radius: 5px; --moz-border-radius: 5px; margin-top: 30px;">
        登 录
    </button>
</div>

<?php }?>

