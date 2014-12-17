<?php /* Smarty version Smarty-3.0-RC2, created on 2014-10-18 14:11:14
         compiled from "/web/www/amc/Lib/Home/Tpl/Home/exhibition.tpl" */ ?>
<?php /*%%SmartyHeaderCode:917300838544204829b6ab8-18929827%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b8286d4032b45420adf71e5054695c1a437b27d' => 
    array (
      0 => '/web/www/amc/Lib/Home/Tpl/Home/exhibition.tpl',
      1 => 1412998096,
    ),
  ),
  'nocache_hash' => '917300838544204829b6ab8-18929827',
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
  
    <body data-spy="scroll" data-target="#main-nav" data-offset="400">
 
        
        <?php $_template = new Smarty_Internal_Template('_header.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

        <section id="about" class="white-bg padding-top-bottom">
        
            <div class="container features">
                
                <h1 class="section-title">展览</h1>
                <p class="section-description">这里有一些AMC的展示作品欣赏</p>
                
                <div class="row">
                
                    <div class="col-sm-4 scrollimation fade-up">
                        
                        <div class="media">
                           <!--  <div class="icon pull-left">
                               <i class="media-object icon-1 fa fa-html5"></i>
                                <i class="media-object icon-2 fa fa-css3"></i> 
                            </div> -->
                             <img style=" width: 360px; height: 250px;" class="img-responsive" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/assets/amc/stj.jpg" alt="" />
                            <br /><br />

                            <div class="media-body">
                                
                                <a href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/home/showDetail" target="view_window"><h4>双瞳记——党震个展·上海</h4></a>


                                <p>展览时间：周二——周四 10:00——18:00<br />
                                    展览地点：上海市黄浦区老码头16号楼 中山南路505弄 16号<br />
                                    合作单位：北京大道融元文化发展有限公司、无为逸品艺术策展工作室、上海商报.
                                </p>
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="col-sm-4 scrollimation fade-up d1">
                        
                        <div class="media">
                         <!--    <div class="icon pull-left">
                                <i class="media-object icon-1 fa fa-mobile"></i>
                                <i class="media-object icon-2 fa fa-desktop"></i>
                            </div> -->
                            <img style="width: 360px; height: 250px;" class="img-responsive" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/assets/amc/yhys.jpg" alt="" />
                            <br /><br />
                            
                            <div class="media-body">
                                <a href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/home/showDetail" target="view_window"><h4>中国当代水墨状态·鸿蒙变</h4></a>
                                
                                <p>展览时间：周五——周日 10:00——20:00<br />
                                    展览地点：上海市黄浦区老码头16号楼 中山南路505弄 16号<br />
                                    合作单位：北京大道融元文化发展有限公司、无为逸品艺术策展工作室、上海商报.
                                </p>
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="col-sm-4 scrollimation fade-up d2">
                        
                        <div class="media">
                         <!--    <div class="icon pull-left">
                                <i class="media-object icon-1 fa fa-leaf"></i>
                                <i class="media-object icon-2 fa fa-pencil"></i>
                            </div> -->

                            <img style="width: 360px; height: 250px;" class="img-responsive" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/assets/amc/hmb.png" alt="" />
                            <br /><br />

                            <div class="media-body">
                              <a href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/home/showDetail" target="view_window"><h4>中国当代水墨状态·鸿蒙变</h4></a>
                                <p>开幕典礼：2014.04.19下午4点   <br />   
                                    展期：2014.04.19-06.10 <br />
                                    地址：上海市黄浦区老码头16号楼 中山南路505弄 16号<br />
                                    合作单位：北京大道融元文化发展有限公司、无为逸品艺术策展工作室、上海商报.
                                </p>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>

            </div>
            
        </section>
        

        <?php $_template = new Smarty_Internal_Template('_footer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
</body>

