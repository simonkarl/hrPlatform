<?php /* Smarty version Smarty-3.0-RC2, created on 2015-01-23 11:15:09
         compiled from "/web/www/hrPlatform/Public/html//_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:170773917954c1bcbda23f48-06855509%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '094b4a89e50bf6f0811d8a64abda070cb876ed3d' => 
    array (
      0 => '/web/www/hrPlatform/Public/html//_footer.tpl',
      1 => 1421982796,
    ),
  ),
  'nocache_hash' => '170773917954c1bcbda23f48-06855509',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<!-- Contact Section
    ================================================== -->
    <div style=" height: 30px;"></div>

    <div class="container contact fullwidth sub-page" id="contact" style=" background-image: url('<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/images/bottom-bg.png'); width: 100%;">
        <strong style="color:rgb(116,119,127);">Connect with us:</strong> <a href="#">Facebook</a> | <a href="#">Twitter</a> | <a href="#">Behance</a> <br />
        <div class="copyright" style="color: #fff ">Copyright &copy; 2014 Hirelib. All rights reserved.</div>
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
