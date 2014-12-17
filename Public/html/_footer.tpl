

<!-- Contact Section
    ================================================== -->
    <div style=" height: 30px;"></div>

    <div class="container contact fullwidth sub-page" id="contact" style=" background-color: #ecf0f1; width: 100%;">
        <strong>Connect with us:</strong> <a href="#">Facebook</a> | <a href="#">Twitter</a> | <a href="#">Behance</a> <br />
        <div class="copyright">Copyright &copy; 2014 Hirelib. All rights reserved.</div>
    </div><!-- close work section -->

    <!-- Javascript Plugins
    ================================================== -->
     <script type="text/javascript" src="{$WebSiteUrlPublic}/js/jquery.flexslider.js"></script>
     <script type="text/javascript" src="{$WebSiteUrlPublic}/js/jquery.parallax-1.1.3.js"></script>
     <script type="text/javascript" src="{$WebSiteUrlPublic}/js/jquery.smooth-scroll.js"></script>
     <script type="text/javascript" src="{$WebSiteUrlPublic}/js/jquery.prettyPhoto.js"></script>
     <script type="text/javascript" src="{$WebSiteUrlPublic}/js/main.js"></script>  

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
