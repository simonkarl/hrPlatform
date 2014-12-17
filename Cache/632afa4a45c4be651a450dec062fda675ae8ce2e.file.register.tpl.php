<?php /* Smarty version Smarty-3.0-RC2, created on 2014-09-26 10:51:56
         compiled from "/web/www/AMC/Lib/User/Tpl/User/register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14618789955420fd28af1d53-59392735%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '632afa4a45c4be651a450dec062fda675ae8ce2e' => 
    array (
      0 => '/web/www/AMC/Lib/User/Tpl/User/register.tpl',
      1 => 1411453946,
    ),
  ),
  'nocache_hash' => '14618789955420fd28af1d53-59392735',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html lang="en-US" class="no-js">
    <head>

        <!-- ==============================================
        Title and Meta Tags
        =============================================== -->
        <meta charset="utf-8">
       
    </head>
    
    <body>

        <form action='<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/user/registerAjax' method='post'>

             邮箱:<input type='text' name='user_email'>
             密码:<input type='text' name='user_password'>

             <input type='submit' name='' value='提交'>


        </form>

       
            
    </body>
    
</html>
