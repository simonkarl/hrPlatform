<?php /* Smarty version Smarty-3.0-RC2, created on 2014-12-25 15:09:27
         compiled from "/web/www/hrPlatform/Public/html//_userLogin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:412206470549bb827b09576-06729497%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5f2375c28e97100663bbb59061cfd61e37dd984' => 
    array (
      0 => '/web/www/hrPlatform/Public/html//_userLogin.tpl',
      1 => 1419489694,
    ),
  ),
  'nocache_hash' => '412206470549bb827b09576-06729497',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/js/user.js"></script>



<?php if ($_smarty_tpl->getVariable('whether_login')->value==1){?>
dasjhdjkas

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

<div style=" margin-top: 10px;">
    <b style=" margin-left: 5px; cursor: pointer">忘记密码？</b>
    <b id="register" style=" margin-left: 65px; color: #333; cursor: pointer">免费注册</b>
</div>

<div style=" text-align: center;">
    <button onclick='userLogin()' type="button" style="width: 200px;background-color: rgb(71,135,191);border: solid 1px #369;color: #fff;height: 35px;font-size: 16px; border-radius: 5px; --webkit-border-radius: 5px; --moz-border-radius: 5px; margin-top: 30px;">
        登 录
    </button>
</div>

<?php }?>

