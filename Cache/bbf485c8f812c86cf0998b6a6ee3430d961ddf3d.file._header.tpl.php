<?php /* Smarty version Smarty-3.0-RC2, created on 2014-10-18 12:35:33
         compiled from "/web/www/amc/Lib/Home/Tpl/Home/_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3272916155441ee15702561-26841568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbf485c8f812c86cf0998b6a6ee3430d961ddf3d' => 
    array (
      0 => '/web/www/amc/Lib/Home/Tpl/Home/_header.tpl',
      1 => 1412998096,
    ),
  ),
  'nocache_hash' => '3272916155441ee15702561-26841568',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
       <!-- ==============================================
        MAIN NAV
        =============================================== -->
<div>
        <div id="main-nav" class="navbar navbar-fixed-top">
            <div class="container">
            
                <div class="navbar-header">
                
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#site-nav">
                        <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                    </button>
                    
                    <!-- ======= LOGO ========-->
                    <a class="navbar-brand scrollto" href="#home" style="color: rgb(241,103,141); padding-left: 1.2em;">
                        <span class="logo-small">
                          <!--   <img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/assets/logo-small.png" alt=""/> -->
                        </span>
                        <span class="to-top"><i class="fa fa-arrow-up"></i></span>
                        
                        AMC
                        
                        <!-- ==== Image Logo ==== -->
                        <!--<img class="site-logo" src="assets/logo.png" alt="logo" />-->
                    </a>
                    
                </div>


                <div id="site-nav" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="sr-only">
                            <a href="#home" class="scrollto">Home</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" onclick='$("#homeDiv").toggle()' class="scrollto">首页</a>

    
       <div  id='homeDiv'style='position: absolute;
top: 100%;
left: 0;
z-index: 1000;
display: none;
float: left;
min-width: 60px;
padding: 5px 0;
margin: 2px 0 0;
list-style: none;
font-size: 14px;
background-color: #fff;
border: 1px solid #ccc;
border: 1px solid rgba(0,0,0,.15);
border-radius: 4px;
-webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
box-shadow: 0 6px 12px rgba(0,0,0,.175);
background-clip: padding-box;
}'>

                                <ul  style='padding:0'>

                                    <li style=' height: 20px; background: transparent;

border: 2px solid transparent;'><span style='cursor: pointer;width:100%;display: inline-block;' onclick='window.location.href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/home/index"' >过去</span></li>

                                     <li style=' height: 20px;background: transparent;

border: 2px solid transparent;'><span style='cursor: pointer;width:100%;display: inline-block;' onclick='window.location.href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/home/index"' >现在</span></li>

                                     <li style=' height: 20px;background: transparent;
border: 2px solid transparent;'><span style='cursor: pointer;width:100%;display: inline-block;' onclick='window.location.href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/home/index"' >即将</span></li>

                                </ul>

                            </div>                            
                        </li>
                        <li>
                            <a href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/home/exhibition" target="view_window">展览</a>
                        </li>

                        <li>
                            <a href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/home/artist" target="view_window">艺术家</a>
                        </li>
                        <li>
                            <a href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/home/newsPost" target="view_window">新闻发布</a>
                        </li>
                        <li>
                            <a href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/home/artSpace" target="view_window">艺术空间</a>
                        </li>
                        <li>
                            <a href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/home/artShop" target="view_window">艺术商店</a>
                        </li>
                        <li style=''>
                            <a onmouseover='$("#aboutDiv").toggle()' href="javascript:void(0)" >关于AMC</a>

                            <div  id='aboutDiv' style='position: absolute;
top: 100%;
left: 0;
z-index: 1000;
display: none;
float: left;
min-width: 70px;
padding: 5px 0;
margin: 2px 0 0;
list-style: none;
font-size: 14px;
background-color: #fff;
border: 1px solid #ccc;
border: 1px solid rgba(0,0,0,.15);
border-radius: 4px;
-webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
box-shadow: 0 6px 12px rgba(0,0,0,.175);
background-clip: padding-box;
}'>

                                <ul style='padding: 0;' id="ullist">

                                    <li style='background: transparent;
margin: 0 5px;
border: 2px solid transparent;'><span style='cursor: pointer;width:100%;display: inline-block;' onclick='$("#aboutDiv").hide();window.location.href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/home/about"' >公司简介</span></li>

                                     <li style='background: transparent;
margin: 0 5px;
border: 2px solid transparent;'><span style='cursor: pointer;width:100%;display: inline-block;' onclick='window.location.href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/home/about"' >联系方式</span></li>

                                     <li style='background: transparent;
margin: 0 5px;
border: 2px solid transparent;'><span style='cursor: pointer;width:100%;display: inline-block;' onclick='window.location.href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/home/about"' >加入我们</span></li>

                                </ul>

                            </div>
                        </li>
                        <li style="height: 30px;line-height: 57px;">

                            <?php if ($_smarty_tpl->getVariable('whether_login')->value==0){?>
                            <a href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/user/userCenter">登录/注册</a>

                            <?php }else{ ?>

                             <a href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/user/userCenter"><?php echo $_smarty_tpl->getVariable('userInfo')->value['user_email'];?>
</a>

                            <?php }?>

                        </li>
                        <li>
                            <a href="#">语言切换</a>
                        </li>
                    </ul>
                </div><!--End navbar-collapse -->
                
            </div><!--End container -->
            
        </div><!--End main-nav -->


</div>

<style>
    
  #aboutDiv ul li span:hover, #homeDiv ul li span:hover{

    background-color: #f5f5f5;
    color: #262626;
    text-decoration: none;

  }  

</style>
