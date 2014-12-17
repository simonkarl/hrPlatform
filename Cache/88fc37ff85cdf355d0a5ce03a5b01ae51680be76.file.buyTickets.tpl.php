<?php /* Smarty version Smarty-3.0-RC2, created on 2014-10-20 18:31:44
         compiled from "/Users/Lev/Sites/AMC/Lib/Home/Tpl/Home/buyTickets.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20110415505444e49047d692-97683890%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88fc37ff85cdf355d0a5ce03a5b01ae51680be76' => 
    array (
      0 => '/Users/Lev/Sites/AMC/Lib/Home/Tpl/Home/buyTickets.tpl',
      1 => 1413800912,
    ),
  ),
  'nocache_hash' => '20110415505444e49047d692-97683890',
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



<style>
.buyStyle{

    /*border: solid 1px red;*/
    width: 980px;
    margin: 0 auto;

}
.buyTdStyle{
  /*  border: solid 1px red;*/
    text-align: center;
}

.mpStyleImg{
     width: 400px; 
     height: 150px;
}
.mpDescribe{

    font-size: 15px;
}
</style>

         <section id="contact" class="gray-bg padding-top-bottom" style=" background-color: #fff; margin-top: 150px;">
            
            <div class="container">
            
                <h1 class="section-title">购买门票</h1>
                <p class="section-description" style=" color: #000;">购票成功后，请凭支付宝支付成功记录到展厅兑换纸质门票，进入展馆进行参观。</p>


                <div style='width: 990px; margin: 0 auto;'>

                <?php  $_smarty_tpl->tpl_vars['tickets'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('ticket')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['tickets']->key => $_smarty_tpl->tpl_vars['tickets']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['tickets']->key;
?>

                

            <table class="buyStyle" style='width: 220px;float: left;margin-left: 10px;'>


                <tr>
                    
                    <td class="buyTdStyle">
                        <img class="mpStyleImg" src="<?php echo $_smarty_tpl->tpl_vars['tickets']->value['ticket_photo'];?>
">
                    </td>
                   
                </tr>

                <tr style="height: 50px;">
                    <td class="buyTdStyle">
                        <b style=" color: rgb(211,14,72);">RMB <?php echo $_smarty_tpl->tpl_vars['tickets']->value['ticket_cost'];?>
</b>
                    </td>
                   
                </tr>

                <tr style="height: 30px;">
                    <td class="buyTdStyle mpDescribe">
                        
                        <?php echo $_smarty_tpl->getVariable('ticket')->value['ticket_title'];?>

                    </td>
                    
                </tr>
                <tr style="height: 80px;">
                    <td class="buyTdStyle">
                        <button type="button" style=" background-color: rgb(211,14,72);" class="btn btn-danger" onclick='window.location.href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/user/userCenter"'>立即购买</button>
                    </td>
                    
                </tr>

            </table>

                <?php }} ?>


            </div>

           
                
            </div>
            
        </section>
        <?php $_template = new Smarty_Internal_Template('_footer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
</body>

