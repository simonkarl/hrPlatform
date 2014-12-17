<?php /* Smarty version Smarty-3.0-RC2, created on 2014-10-20 18:22:05
         compiled from "/web/www/AMC/Lib/Home/Tpl/Home/artist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8218072115444e24d7ae1c1-91433658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a90fc1335c82ec1c1d2aa492825560abfe6175ad' => 
    array (
      0 => '/web/www/AMC/Lib/Home/Tpl/Home/artist.tpl',
      1 => 1413800523,
    ),
  ),
  'nocache_hash' => '8218072115444e24d7ae1c1-91433658',
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
        
            <div class="container" style="margin-top: 70px; width: 970px">
                
                <h1 class="section-title">艺术家</h1>
                <p class="section-description">
                    我们有一些艺术家的相关简介和作品展示
                </p>
                
                <div class="row services">


                    <?php  $_smarty_tpl->tpl_vars['lists'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('artlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['lists']->key => $_smarty_tpl->tpl_vars['lists']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['lists']->key;
?>
                
                    <div class="col-sm-3 item text-center scrollimation fade-right d2" style=" opacity: 1; margin-left: 8%;">
                
                        <div style="height: 250px;
width: 300px;"><img style="margin: 0 auto; max-width: 300px; height: 200px" class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['lists']->value['artist_photo'];?>
" alt=""/></div>
                        <br />
                        <h3><?php echo $_smarty_tpl->tpl_vars['lists']->value['artist_name'];?>
</h3>
                        <p style=" width: 300px; text-align: left">
                           
                           <?php echo $_smarty_tpl->tpl_vars['lists']->value['artist_content'];?>

                        </p>
                        
                    </div>

                    <?php }} ?>
                    
                
                <?php if ($_smarty_tpl->getVariable('result')->value!=1){?>
                
                <div style="margin: 0 auto;
                    text-align: right; cursor: pointer;">

                    <a style=" color: #000" onclick='window.location.href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/home/moreArtist"'>更多艺术家</a>
                </div>

                <?php }?>

            </div>
            
        </section>

        <?php $_template = new Smarty_Internal_Template('_footer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
</body>

