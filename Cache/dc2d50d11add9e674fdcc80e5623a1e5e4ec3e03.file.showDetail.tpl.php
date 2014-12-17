<?php /* Smarty version Smarty-3.0-RC2, created on 2014-10-18 14:11:23
         compiled from "/web/www/amc/Lib/Home/Tpl/Home/showDetail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1485065555442048bb25639-47661255%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc2d50d11add9e674fdcc80e5623a1e5e4ec3e03' => 
    array (
      0 => '/web/www/amc/Lib/Home/Tpl/Home/showDetail.tpl',
      1 => 1412998096,
    ),
  ),
  'nocache_hash' => '1485065555442048bb25639-47661255',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<!DOCTYPE html>
<html lang="en-US" class="no-js">
    <head>


         <?php $_template = new Smarty_Internal_Template('_jscssStyle.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
        
        
    </head>
  
  <style>

.showDetailwarp{
    width: 100%;
    min-height: 300px;
/*    border: solid 1px red;*/
    margin-top: 90px;
}
.exhibition{
    border-bottom: solid 2px #ccc;
    height: 60px;
    line-height: 60px;
    /* padding-left: 80px; */
    width: 87%;
    margin-left: 8%;
}
.exhibitionTitle{
    margin-left: 20px;
    cursor: pointer;
}
  </style>
    <body data-spy="scroll" data-target="#main-nav" data-offset="400">
 
        
        <?php $_template = new Smarty_Internal_Template('_header.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

        <div class =" showDetailwarp">

            <div class="exhibition">
                <span >正在展览</span>
                <span class="exhibitionTitle">即将展览</span>
                <span class="exhibitionTitle">过去展览</span>
            </div>

            <div style="width: 87%;
                margin-left: 8%;
                border-bottom: solid 2px #ccc;
                line-height: 100px;
                height: 100px;
                font-size: 28px;
                font-weight: bold;">
                正在展览
            </div>

            <div style="width: 87%;
                margin-left: 8%;
                line-height: 100px;
                height: 100px;
                font-size: 18px;">
                中国当代水墨状态·鸿蒙变
        </div>
        <div style="width: 87%;
                margin-left: 8%;
                line-height: 100px;
                height: 100px;
                font-size: 18px;">
                时间：周二——周四 10:00——18:00
        </div>

        <div style="width: 87%; margin-left: 8%; margin-bottom: 30px;">
                <img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/assets/amc/hmb.png" />

            </div>

        </div>




        <?php $_template = new Smarty_Internal_Template('_footer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
</body>

