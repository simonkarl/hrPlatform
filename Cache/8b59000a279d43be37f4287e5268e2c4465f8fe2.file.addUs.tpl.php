<?php /* Smarty version Smarty-3.0-RC2, created on 2014-10-20 18:31:30
         compiled from "/Users/Lev/Sites/AMC/Lib/Home/Tpl/Home/addUs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2762270605444e482db7d51-54038167%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b59000a279d43be37f4287e5268e2c4465f8fe2' => 
    array (
      0 => '/Users/Lev/Sites/AMC/Lib/Home/Tpl/Home/addUs.tpl',
      1 => 1413800912,
    ),
  ),
  'nocache_hash' => '2762270605444e482db7d51-54038167',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<!DOCTYPE html>
<html lang="en-US" class="no-js">
    <head>


         <?php $_template = new Smarty_Internal_Template('_jsCssStyle.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
        
        
    </head>
  
    <body data-spy="scroll" data-target="#main-nav" data-offset="400">
 
        
        <?php $_template = new Smarty_Internal_Template('_header.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>





         <section id="contact" class="gray-bg padding-top-bottom" style=" background-color: #fff; margin-top: 150px;">
            
<style>
#addUsStyle{
/*    border: solid 1px red;*/
}
#addUsStyle td{
/*
    border: solid 1px red;*/
}

</style>

            <div class="container">
            
                <h1 class="section-title">加入我们</h1>
                <p class="section-description">你准备好了吗？赶快加入我们吧！</p>
                
               <div style="width: 990px;margin: 0 auto; margin-left: 74px;">

                <table id="addUsStyle">

                    <tr>

                        <?php  $_smarty_tpl->tpl_vars['add_us'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aboutUs')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['add_us']->key => $_smarty_tpl->tpl_vars['add_us']->value){
?>

                        <td style="width: 540px; padding-right: 20px; text-align: right">
                            <img style="width: 450px;" src="<?php echo $_smarty_tpl->tpl_vars['add_us']->value['add_us_photo'];?>
" />
                        </td>

                        <?php }} ?>
                       
                    </tr>

                </table>



               </div>
            
                
            </div>
            
        </section>
        <?php $_template = new Smarty_Internal_Template('_footer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
</body>

