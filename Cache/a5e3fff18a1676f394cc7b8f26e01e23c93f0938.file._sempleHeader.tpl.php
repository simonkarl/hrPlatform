<?php /* Smarty version Smarty-3.0-RC2, created on 2015-01-22 16:06:05
         compiled from "/Users/Lev/Sites/hrPlatform/Public/html//_sempleHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:79020860154c0af6dabd002-59635623%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5e3fff18a1676f394cc7b8f26e01e23c93f0938' => 
    array (
      0 => '/Users/Lev/Sites/hrPlatform/Public/html//_sempleHeader.tpl',
      1 => 1421913963,
    ),
  ),
  'nocache_hash' => '79020860154c0af6dabd002-59635623',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
  
  <style>
.regHider{
  height: 60px;
  border-bottom: solid 1px rgb(216,216,216);
  box-shadow: 0 0 3px rgb(216,216,216);
  -webkit-box-shadow: 0 0 3px rgb(216,216,216);
  -moz-box-shadow: 0 0 3px rgb(216,216,216);
  color: rgb(231,76,60);
  font-size: 36px;
  padding-left: 75px;
}
.regHider span{
  cursor: pointer;
  font-size: 30px;
  color: rgb(44,62,80);
}
.regHider span b{
  cursor: pointer;
}
.regHider span b:hover{
  cursor: pointer;
  color: rgb(231,76,60);
}

  </style>

<div style='background-color: rgb(51,51,51);'>

  <!-- Site Logo -->
  <div class="regHider logo secondary-color five columns">
<!--     <i onclick='window.location.href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/home/index"' style="text-indent: 36px; cursor: pointer;" class="icon-asterisk primary-color"></i>  -->
  <img onclick='window.location.href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/home/index"' src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/images/logo.png" style="height: 45px; margin-top: 5px; cursor:pointer" />

  <span style=" color:#fff; float: right; font-size: 14px;line-height: 60px;margin-right: 150px;">语言: <strong>简体中文</strong></span>

  </div>
</div>