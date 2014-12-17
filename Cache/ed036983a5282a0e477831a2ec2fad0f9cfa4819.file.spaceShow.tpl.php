<?php /* Smarty version Smarty-3.0-RC2, created on 2014-10-20 18:30:38
         compiled from "/Users/Lev/Sites/AMC/Lib/Home/Tpl/Home/spaceShow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16731574605444e44ea39bb1-48815156%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed036983a5282a0e477831a2ec2fad0f9cfa4819' => 
    array (
      0 => '/Users/Lev/Sites/AMC/Lib/Home/Tpl/Home/spaceShow.tpl',
      1 => 1413800912,
    ),
  ),
  'nocache_hash' => '16731574605444e44ea39bb1-48815156',
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

        <section id="about" class="white-bg padding-top-bottom" style=" padding: 0px; margin-top: 250px;">
        
            <div class="container features" style="margin-top: 70px;width: 950px">
                
                <h1 class="section-title">空间介绍</h1>
                <p style="margin-bottom: -30px;" class="section-description">由中国文化传媒集团旗下，上海中传国际文化产业有限公司倾力打造的艺术殿堂——中传艺术空间（A.M.Center）将于今秋在沪隆重开幕</p>



                
                <div class="row">
                
                    <div class="col-sm-4 scrollimation fade-up">
                        
                        <div class="media">
                           <!--  <div class="icon pull-left">
                               <i class="media-object icon-1 fa fa-html5"></i>
                                <i class="media-object icon-2 fa fa-css3"></i> 
                            </div> -->
                             <img style=" width: 360px; height: 250px;" class="img-responsive" src="  <?php echo $_smarty_tpl->getVariable('space')->value[0]['space_photo'];?>
" alt="" />
                            <br /><br />

                            <div class="media-body">

                                <p>

                                      <?php echo $_smarty_tpl->getVariable('space')->value[0]['space_content'];?>

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
                           <img style=" width: 360px; height: 250px;" class="img-responsive" src="  <?php echo $_smarty_tpl->getVariable('space')->value[1]['space_photo'];?>
" alt="" />
                            <br /><br />
                            
                            <div class="media-body">
                                
                                <p><?php echo $_smarty_tpl->getVariable('space')->value[1]['space_content'];?>

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

                            <img style="width: 360px; height: 250px;" class="img-responsive" src="<?php echo $_smarty_tpl->getVariable('space')->value[2]['space_photo'];?>
" alt="" />
                            <br /><br />

                            <div class="media-body">
                                <p><?php echo $_smarty_tpl->getVariable('space')->value[2]['space_content'];?>

                                </p>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>

            </div>
            
        </section>
               

        <div style=" margin-top: 100px;"></div>
        <?php $_template = new Smarty_Internal_Template('_footer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
</body>

