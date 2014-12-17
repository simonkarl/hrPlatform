<?php /* Smarty version Smarty-3.0-RC2, created on 2014-10-20 18:04:37
         compiled from "/web/www/AMC/Lib/Home/Tpl/Home/addUs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19539129935444de354fb240-83497158%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28091607dc6df4316811b3892663ccf21fa2e45a' => 
    array (
      0 => '/web/www/AMC/Lib/Home/Tpl/Home/addUs.tpl',
      1 => 1413799013,
    ),
  ),
  'nocache_hash' => '19539129935444de354fb240-83497158',
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
                
               <div style="width: 990px;margin: 0 auto; margin-left: 50px;">

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

