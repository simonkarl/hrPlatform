<?php /* Smarty version Smarty-3.0-RC2, created on 2014-09-29 17:08:20
         compiled from "/web/www/AMC/Lib/Home/Tpl/Home/artSpace.tpl" */ ?>
<?php /*%%SmartyHeaderCode:69173555454292184eb6ee5-05131308%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92ed1d9273f621f7b9996c1eeb7c2d16a6803fc8' => 
    array (
      0 => '/web/www/AMC/Lib/Home/Tpl/Home/artSpace.tpl',
      1 => 1411960660,
    ),
  ),
  'nocache_hash' => '69173555454292184eb6ee5-05131308',
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

       <section id="portfolio" class="gray-bg padding-top-bottom">
        
            <div class="container">
                
                <h1 class="section-title">艺术空间</h1>
                <p class="section-description">这里有我们为您精选的部分画展</p>
                
                <!--==== Portfolio Filters ====-->
                    
                <div id="filter-works">
                
                    <ul>
                        <li class="active">
                            <a href="#" data-filter="*">全部分类</a>
                        </li>
                        <li>
                            <a href="#" data-filter=".web-design">油画展</a>
                        </li>
                        <li>
                            <a href="#" data-filter=".apps">国画展</a>
                        </li>
                        <li>
                            <a href="#" data-filter=".psd">展厅</a>
                        </li>
                    </ul>
                    
                </div><!--End portfolio filters --> 
                
                <div class="projects-container scrollimation">
                
                    <div class="row">
                        
                        <!-- ==============================================
                        SINGLE PROJECT ITEM
                        =============================================== -->
                        
                        <article class="col-md-4 col-sm-6 project-item web-design apps psd">
                        
                            <!--==== Project Thumbnail & Title ====-->
                            
                            <div class="project-thumb">
                                <a href="#" class="main-link">
                                    <img class="img-responsive img-center" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/assets/projects/placeholder-400x300.jpg" alt=""/>
                                    <h2 class="project-title">Project Title</h2>
                                    <span class="overlay-mask"></span>
                                </a>
                                <a class="enlarge" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/assets/projects/placeholder-full-size.jpg" title="Title"><i class="fa fa-expand fa-fw"></i></a>
                                <a class="link" href="#"><i class="fa fa-eye fa-fw"></i></a>
                            </div><!-- End Thumbnail -->
                            
                            <!--==== Project Preview Content ====-->
                            
                            <div class="preview-content" data-images="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/assets/projects/placeholder-645x430.jpg,assets/projects/placeholder-645x430.jpg">
                                
                                <p class="preview-subtitle">A project about bills</p>
                                
                                <p>Lorem ipsum dolor sit amet, <a href="">consectetur</a> adipiscing elit. Donec ac odio sed enim bibendum luctus. Morbi consectetur augue nec erat congue accumsan. Pellentesque ac tempor ipsum. Fusce in nisl adipiscing, luctus ipsum in, dictum mi. </p>
                                
                                <a href="#link" target="_blank" title="Visit Website"><img class="img-responsive img-center" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/assets/projects/placeholder-600x200.jpg" alt=""/></a>
                                
                                <p>Morbi et gravida tellus, quis malesuada odio. Quisque facilisis cursus mi condimentum lobortis. Maecenas eros erat, varius et felis at, pretium aliquam ante. </p>
                                <p>Pellentesque dictum vulputate ornare. In hac habitasse platea dictumst. Proin pellentesque viverra tortor sit amet feugiat. Etiam varius neque quam, a tincidunt odio congue quis. Sed nec est leo. Curabitur nec eleifend magna. Nunc blandit laoreet ornare.</p>
                                
                                <p class="text-center"><a class="btn btn-qubico" href="#externallink" target="_blank">Visit Website</a></p>
                                
                            </div><!-- End Project Preview -->
                            
                        </article>
                        <!-- ==============================================
                        END PROJECT ITEM
                        =============================================== -->     
                        
                        <article class="col-md-4 col-sm-6 project-item apps">
                        
                            <div class="project-thumb">
                                <a href="#" class="main-link">
                                    <img class="img-responsive img-center" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/assets/projects/placeholder-400x300.jpg" alt=""/>
                                    <h2 class="project-title">Project Title</h2>
                                    <span class="overlay-mask"></span>
                                </a>
                                <a class="link centered" href=""><i class="fa fa-eye fa-fw"></i></a>
                            </div>
                            
                            <div class="preview-content" data-images="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/assets/projects/placeholder-645x430.jpg,<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/assets/projects/placeholder-645x430.jpg,<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/assets/projects/placeholder-645x430.jpg">
                                
                                
                                <p>Second Title ipsum dolor sit amet, <a href="">consectetur</a> adipiscing elit. Donec ac odio sed enim bibendum luctus. Morbi consectetur augue nec erat congue accumsan. Pellentesque ac tempor ipsum. Fusce in nisl adipiscing, luctus ipsum in, dictum mi. </p>
                                
                                <p>Morbi et gravida tellus, quis malesuada odio. Quisque facilisis cursus mi condimentum lobortis. Maecenas eros erat, varius et felis at, pretium aliquam ante. </p>
                                <p>Pellentesque dictum vulputate ornare. In hac habitasse platea dictumst. Proin pellentesque viverra tortor sit amet feugiat. Etiam varius neque quam, a tincidunt odio congue quis. Sed nec est leo. Curabitur nec eleifend magna. Nunc blandit laoreet ornare.</p>
                                
                                <p class="text-center"><a class="btn btn-qubico" href="#externallink" target="_blank">Visit Website</a></p>
                                
                            </div>
                        </article>
                        
                        <article class="col-md-4 col-sm-6 project-item web-design psd">
                        
                            <div class="project-thumb">
                                <a href="#" class="main-link">
                                    <img class="img-responsive img-center" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/assets/projects/placeholder-400x300.jpg" alt=""/>
                                    <h2 class="project-title">Project Title</h2>
                                    <span class="overlay-mask"></span>
                                </a>
                                <a class="enlarge centered" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/assets/projects/placeholder-full-size.jpg" title="Title"><i class="fa fa-expand fa-fw"></i></a>
                            </div><!-- End Thumbnail -->
                            
                        </article>
                        
                        <article class="col-md-4 col-sm-6 project-item apps">
                            <div class="project-thumb">
                                <a href="#" class="main-link">
                                    <img class="img-responsive img-center" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/assets/projects/placeholder-400x300.jpg" alt=""/>
                                    <h2 class="project-title">Project Title</h2>
                                    <span class="overlay-mask"></span>
                                </a>
                                <a class="enlarge" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/assets/projects/placeholder-full-size.jpg" title="Title"><i class="fa fa-expand fa-fw"></i></a>
                                <a class="link" href="#"><i class="fa fa-eye fa-fw"></i></a>
                            </div>
                            <div class="preview-content">
                                
                                <p class="preview-subtitle">This is another cool project</p>
                                
                                <p>Second Title ipsum dolor sit amet, <a href="">consectetur</a> adipiscing elit. Donec ac odio sed enim bibendum luctus. Morbi consectetur augue nec erat congue accumsan. Pellentesque ac tempor ipsum. Fusce in nisl adipiscing, luctus ipsum in, dictum mi. </p>
                                
                                <p>Morbi et gravida tellus, quis malesuada odio. Quisque facilisis cursus mi condimentum lobortis. Maecenas eros erat, varius et felis at, pretium aliquam ante. </p>
                                <p>Pellentesque dictum vulputate ornare. In hac habitasse platea dictumst. Proin pellentesque viverra tortor sit amet feugiat. Etiam varius neque quam, a tincidunt odio congue quis. Sed nec est leo. Curabitur nec eleifend magna. Nunc blandit laoreet ornare.</p>
                                
                                <p class="text-center"><a class="btn btn-qubico" href="#externallink" target="_blank">Visit Website</a></p>
                                
                            </div>
                        </article>
                        
                        <article class="col-md-4 col-sm-6 project-item web-design psd">
                        
                            <div class="project-thumb">
                                <a href="#" class="main-link">
                                    <img class="img-responsive img-center" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/assets/projects/placeholder-400x300.jpg" alt=""/>
                                    <h2 class="project-title">Project Title</h2>
                                    <span class="overlay-mask"></span>
                                </a>
                                <a class="enlarge" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/assets/projects/placeholder-full-size.jpg" title="Title"><i class="fa fa-expand fa-fw"></i></a>
                                <a class="link" href="#"><i class="fa fa-eye fa-fw"></i></a>
                            </div>
                            
                            <div class="preview-content" data-images="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/assets/projects/placeholder-645x430.jpg,<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/assets/projects/placeholder-645x430.jpg,<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/assets/projects/placeholder-645x430.jpg">
                                
                                
                                <p>Second Title ipsum dolor sit amet, <a href="">consectetur</a> adipiscing elit. Donec ac odio sed enim bibendum luctus. Morbi consectetur augue nec erat congue accumsan. Pellentesque ac tempor ipsum. Fusce in nisl adipiscing, luctus ipsum in, dictum mi. </p>
                                
                                <p>Morbi et gravida tellus, quis malesuada odio. Quisque facilisis cursus mi condimentum lobortis. Maecenas eros erat, varius et felis at, pretium aliquam ante. </p>
                                <p>Pellentesque dictum vulputate ornare. In hac habitasse platea dictumst. Proin pellentesque viverra tortor sit amet feugiat. Etiam varius neque quam, a tincidunt odio congue quis. Sed nec est leo. Curabitur nec eleifend magna. Nunc blandit laoreet ornare.</p>
                                
                                <p class="text-center"><a class="btn btn-qubico" href="#externallink" target="_blank">Visit Website</a></p>
                                
                            </div>
                        </article>
                        
                        <article class="col-md-4 col-sm-6 project-item web-design apps">
                            <div class="project-thumb">
                                <a href="#" class="main-link">
                                    <img class="img-responsive img-center" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/assets/projects/placeholder-400x300.jpg" alt=""/>
                                    <h2 class="project-title">Project Title</h2>
                                    <span class="overlay-mask"></span>
                                </a>
                                <a class="enlarge" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/assets/projects/placeholder-full-size.jpg" title="Title"><i class="fa fa-expand fa-fw"></i></a>
                                <a class="link" href="#"><i class="fa fa-eye fa-fw"></i></a>
                            </div>
                            <div class="preview-content" data-images="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/assets/projects/placeholder-645x430.jpg,<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/assets/projects/placeholder-645x430.jpg">
                                
                                <p class="preview-subtitle">Listen to the music of Sonor!</p>
                                
                                <p>Second Title ipsum dolor sit amet, <a href="">consectetur</a> adipiscing elit. Donec ac odio sed enim bibendum luctus. Morbi consectetur augue nec erat congue accumsan. Pellentesque ac tempor ipsum. Fusce in nisl adipiscing, luctus ipsum in, dictum mi. </p>
                                
                                <p>Morbi et gravida tellus, quis malesuada odio. Quisque facilisis cursus mi condimentum lobortis. Maecenas eros erat, varius et felis at, pretium aliquam ante. </p>
                                <p>Pellentesque dictum vulputate ornare. In hac habitasse platea dictumst. Proin pellentesque viverra tortor sit amet feugiat. Etiam varius neque quam, a tincidunt odio congue quis. Sed nec est leo. Curabitur nec eleifend magna. Nunc blandit laoreet ornare.</p>
                                
                                <p class="text-center"><a class="btn btn-qubico" href="#externallink" target="_blank">Visit Website</a></p>
                                
                            </div>
                        </article>
                        
                    </div><!-- End Row -->
                    
                </div><!-- End Projects Container -->
                
            <!--     <p class="text-center"><a id="ajax-load" class="btn btn-qubico" href="#"><i class="fa fa-plus-circle"></i>Load More</a></p> -->
                
            </div><!-- End container -->
            
            <!--==== Project Preview Panel (DO NOT REMOVE)====-->
            
            <div id="preview-scroll"></div>
            
            <div id="project-preview">
                
                <div class="container">
                
                    <div class="preview-header text-center">
                        <a class="close-preview" href="#">&times;</a>
                        <h1 class="preview-title"></h1>
                        <p class="preview-subtitle"></p>
                    </div>
                    
                    <div class="imac-frame">
                    
                        <img class="img-responsive img-center" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/assets/imac.png" alt=""/>
                        <span class="loader"></span>
                        <div class="imac-screen imac-slider flexslider"></div>
                        
                    </div>
                    
                    <div class="row">
                        <div id="preview-content" class="col-sm-10 col-sm-offset-1"></div>
                    </div>
                    
                    <div class="preview-footer text-center">
                        <a class="close-preview" href="#">&times;</a>
                    </div>
                        
                    
                </div><!--End container -->
                
            </div><!--End #project-preview panel-->
            
        </section>

        <?php $_template = new Smarty_Internal_Template('_footer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
</body>

