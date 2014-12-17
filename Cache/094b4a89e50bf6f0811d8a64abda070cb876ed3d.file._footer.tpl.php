<?php /* Smarty version Smarty-3.0-RC2, created on 2014-12-17 11:03:57
         compiled from "/web/www/hrPlatform/Public/html//_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2311398275490f29da97f25-38469024%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '094b4a89e50bf6f0811d8a64abda070cb876ed3d' => 
    array (
      0 => '/web/www/hrPlatform/Public/html//_footer.tpl',
      1 => 1418785339,
    ),
  ),
  'nocache_hash' => '2311398275490f29da97f25-38469024',
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
