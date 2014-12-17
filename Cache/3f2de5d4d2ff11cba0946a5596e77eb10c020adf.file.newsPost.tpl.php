<?php /* Smarty version Smarty-3.0-RC2, created on 2014-10-20 18:31:16
         compiled from "/Users/Lev/Sites/AMC/Lib/Home/Tpl/Home/newsPost.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4594789325444e47423e970-01991976%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f2de5d4d2ff11cba0946a5596e77eb10c020adf' => 
    array (
      0 => '/Users/Lev/Sites/AMC/Lib/Home/Tpl/Home/newsPost.tpl',
      1 => 1413800912,
    ),
  ),
  'nocache_hash' => '4594789325444e47423e970-01991976',
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

a:hover{
    color: rgb(211,14,72);
}
.member-details:hover{
    color: #FFF;
}
  </style>
    <body data-spy="scroll" data-target="#main-nav" data-offset="400">
 
        
        <?php $_template = new Smarty_Internal_Template('_header.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

         <section id="team" class="white-bg padding-top-bottom" style="margin-top: 150px;">
        
            <div class="container" style="width: 950px;">
                
                <h1 class="section-title">公共项目</h1>
                <p class="section-description">以下是我们公共项目的相关内容 </p>


                <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('posts')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['post']->key;
?>

                 <?php if (($_smarty_tpl->tpl_vars['k']->value+1)%2==1){?>

                      <div class="row team-member">
                
                    <div class="col-sm-3 col-sm-offset-1 member-thumb scrollimation fade-right">
                    
                        <img class="img-responsive img-center" src="<?php echo $_smarty_tpl->tpl_vars['post']->value['project_photo'];?>
" alt="" />
                      
                    </div>
                    
                    <div class="col-sm-7 scrollimation fade-left">
                    
                        <div class="" style=" border: solid 1px #ccc; border-radius: 10px; padding-left: 10px; padding-top: 10px; height: 160px;">
                            <a href="#" target="view_window"><?php echo $_smarty_tpl->tpl_vars['post']->value['project_content'];?>
</a>

                        </div>
                    </div>
                </div>

                 <?php }else{ ?>


                 <div class="row team-member right">
                
                    <div class="col-sm-3 col-sm-push-8 member-thumb scrollimation fade-left">
                    
                        <img class="img-responsive img-center" src="<?php echo $_smarty_tpl->tpl_vars['post']->value['project_photo'];?>
" alt="" />
                      
                    <!--     <h4>Jane Doe</h4>
                        <p class="title">Designer</p> -->
                        
                    </div>
                    
                    <div class="col-sm-7 col-sm-pull-2 scrollimation fade-right">
                    
                        <div class=""  style=" border: solid 1px #ccc; border-radius: 10px; padding-left: 10px; padding-top: 10px; height: 160px;">
                            <!-- <?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/home/newDetail -->
                            <a href="#" target="view_window"><?php echo $_smarty_tpl->tpl_vars['post']->value['project_content'];?>
</a>
                            
             <!--                <ul class="member-socials">
                                <li><a href="mailto:mail@example.com"><i class="fa fa-envelope fa-fw"></i></a></li>
                                <li><a href="#link"><i class="fa fa-twitter fa-fw"></i></a></li>
                                <li><a href="#link"><i class="fa fa-facebook fa-fw"></i></a></li>
                                <li><a href="#link"><i class="fa fa-linkedin fa-fw"></i></a></li>
                            </ul> -->
                        </div>
                    </div>
                </div>
                


                 <?php }?>

                <?php }} ?>
                
            </div>
            
        </section>

        <?php $_template = new Smarty_Internal_Template('_footer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
</body>

