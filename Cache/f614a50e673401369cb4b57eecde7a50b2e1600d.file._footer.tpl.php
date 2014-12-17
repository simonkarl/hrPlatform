<?php /* Smarty version Smarty-3.0-RC2, created on 2014-12-01 17:11:19
         compiled from "/Users/Lev/Sites/hrPlatform/Public/html//_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:486416152547c30b70076f0-84732172%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f614a50e673401369cb4b57eecde7a50b2e1600d' => 
    array (
      0 => '/Users/Lev/Sites/hrPlatform/Public/html//_footer.tpl',
      1 => 1417424967,
    ),
  ),
  'nocache_hash' => '486416152547c30b70076f0-84732172',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<!-- Contact Section
    ================================================== -->
    <div style=" height: 30px;"></div>

    <div class="container contact fullwidth sub-page" id="contact" style=" background-color: #ecf0f1; width: 100%;">
        <strong>Connect with us:</strong> <a href="#">Facebook</a> | <a href="#">Twitter</a> | <a href="#">Behance</a> <br />
        <div class="copyright">Copyright &copy; 2014 Hirelib. All rights reserved.</div>
    </div><!-- close work section -->

    <!-- Javascript Plugins
    ================================================== -->
     <script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/js/jquery.flexslider.js"></script>
     <script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/js/jquery.parallax-1.1.3.js"></script>
     <script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/js/jquery.smooth-scroll.js"></script>
     <script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/js/jquery.prettyPhoto.js"></script>
     <script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/js/main.js"></script>  

  <!--   首页 锚 向下滑动效果 以及上下滚动字幕 -->
 <script> 
    $(document).ready(function() {
        ////// Enable Page Scrolling
        $('nav.main-nav li a').smoothScroll();

        ////// Enable PrettyPhoto
        $("a[rel^='prettyPhoto']").prettyPhoto({
            social_tools:false,
            deeplinking: false
        });
    });
 </script>  


<!-- End Document
================================================== -->
