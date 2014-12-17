<?php /* Smarty version Smarty-3.0-RC2, created on 2014-09-23 12:53:06
         compiled from "/web/www/AMC/Lib/User/Tpl/User/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16708536105420fcb29a5772-88072058%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '646fafec692850a1433a8164d51954f54ca4efac' => 
    array (
      0 => '/web/www/AMC/Lib/User/Tpl/User/login.tpl',
      1 => 1411446513,
    ),
  ),
  'nocache_hash' => '16708536105420fcb29a5772-88072058',
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
/user/loginAjax' method='post'>

             邮箱:<input type='text' name='user_email'>
             密码:<input type='text' name='user_password'>

             <input type='submit' name='' value='提交'>


        </form>

       
            
    </body>
    
</html>
