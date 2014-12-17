<?php /* Smarty version Smarty-3.0-RC2, created on 2014-10-20 11:46:15
         compiled from "/Users/Lev/Sites/AMC/Lib/Home/Tpl/Home/artist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2085677542544485873dbda7-28236864%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f740c2d3471301ea8a0ccbed1324d69721b3370' => 
    array (
      0 => '/Users/Lev/Sites/AMC/Lib/Home/Tpl/Home/artist.tpl',
      1 => 1413776755,
    ),
  ),
  'nocache_hash' => '2085677542544485873dbda7-28236864',
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

        <section id="services" class="white-bg padding-top-bottom" style=" background-color: rgb(243,243,243); margin-top: 90px;">
        
            <div class="container" style="margin-top: 70px; width: 80%;">
                
                <h1 class="section-title">艺术家</h1>
                <p class="section-description">
                    我们有一些艺术家的相关简介和作品展示
                </p>
                
                <div class="row services">
                
                    <div class="col-sm-3 item text-center scrollimation fade-right d2" style=" opacity: 1; margin-left: 9%;">
                
                        <div style="height: 250px;
width: 300px;"><img style="margin: 0 auto; max-width: 300px; height: 200px" class="img-responsive" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/assets/amc/zhou.JPG" alt=""/></div>
                        <br />
                        <h3>周曈</h3>
                        <p style=" width: 300px; text-align: left">
                            2003—2007  <br />  北方工业大学艺术设计学院
                        </p>
                        
                    </div>
                    
                    <div class="col-sm-3 item text-center scrollimation fade-right" style=" opacity: 1; margin-left: 100px;">
                
                        <div style="height: 250px;
width: 300px;"><img style="margin: 0 auto; max-width: 300px; height: 200px" class="img-responsive" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/assets/amc/wang.png" alt=""/>
                        </div>
                         <br />
                        <h3>汪翀</h3>
                        <p style=" text-align: left;width: 300px;">
                            2001—2006  <br />  加拿大安大略美术设计学院绘画系 <br /> 2002—2003 <br />  意大利佛罗伦萨OCAD Off—Campus Program
2007—2009  <br />  纽约艺术学院 硕士 <br /> 
                        </p>
                        
                    </div>
                    
                    <div class="col-sm-3 item text-center scrollimation fade-left" style="opacity: 1; margin-left: -104px;">
                
                        <div style="height: 250px;
width: 300px;"><img style="margin: 0 auto; max-width: 300px; height: 200px"  class="img-responsive" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/assets/amc/yu.JPG" alt=""/></div>
                        <br />
                        <h3>余霁</h3>
                        <p style=" text-align: left;width: 300px;">
                            2000—2003 <br />   北京城市学院 文物鉴赏与保护（含修复专业) <br />
 2005—2007 <br />   中央美术学院 国画系绘画专业
<br /> 2008—2008 <br />   西班牙萨拉曼卡留学
                        </p>
                        
                    </div>
                    
                </div>
                
                <div style="width: 980px;margin: 0 auto;
                    text-align: right; cursor: pointer">

                    <a onclick='window.location.href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/home/moreArtist"'>更多艺术家</a>
                </div>

            </div>
            
        </section>

        <?php $_template = new Smarty_Internal_Template('_footer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
</body>

