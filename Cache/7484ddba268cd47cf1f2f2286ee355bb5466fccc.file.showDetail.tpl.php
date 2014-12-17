<?php /* Smarty version Smarty-3.0-RC2, created on 2014-10-21 09:10:50
         compiled from "/Users/Lev/Sites/AMC/Lib/Home/Tpl/Home/showDetail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6820778755445b29adab510-90180432%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7484ddba268cd47cf1f2f2286ee355bb5466fccc' => 
    array (
      0 => '/Users/Lev/Sites/AMC/Lib/Home/Tpl/Home/showDetail.tpl',
      1 => 1413853811,
    ),
  ),
  'nocache_hash' => '6820778755445b29adab510-90180432',
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
  
  <style>

.showDetailwarp{
width: 90.5%;
margin-left: 3.5%;
}
.exhibition{
width: 955px;
margin-left: 135px;
border-bottom: solid 2px #ccc;
line-height: 100px;
height: 100px;
font-size: 28px;
font-weight: bold;
}
.exhibitionTitle{
    margin-left: 20px;
    cursor: pointer;
}
  </style>
    <body data-spy="scroll" data-target="#main-nav" data-offset="400">
 
        
        <?php $_template = new Smarty_Internal_Template('_header.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

        <div class =" showDetailwarp" style="margin-top: 150px;">

            <div class="exhibition">
                <span >正在展览</span>
                <span class="exhibitionTitle">即将展览</span>
                <span class="exhibitionTitle">过去展览</span>
            </div>

            <div style="width: 955px;
                margin-left: 135px;
                border-bottom: solid 2px #ccc;
                line-height: 100px;
                height: 100px;
                font-size: 28px;
                font-weight: bold;">
                正在展览
            </div>

            


<div style='width:950px; margin: 0 auto;'>

    <?php echo $_smarty_tpl->getVariable('show')->value['exhibition_content'];?>

    
    </div>

        </div>



<div style=" height: 70px;"></div>
        <?php $_template = new Smarty_Internal_Template('_footer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
</body>

