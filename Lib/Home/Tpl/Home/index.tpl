<!DOCTYPE html>
<head>
    <!-- Basic Page Needs
  ================================================== -->
    <title>HR Platform</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

</head>
<body class="third-color">

    {include file="$path/_header.tpl"}

    <div class="container header-banner"><!-- main header banner -->

        <div class="home-text-wrapper">
            <h1 class="secondary-color" onclick='window.location.href="{$websiteUrl}/home/index"'>Hirelib</h1>
            <h2 class="primary-color">致力于HR平台服务及数据设计</h2>

            <!-- Flexslider in main banner-->
                <div id="home-slider" class="flexslider">
                <div class="slider-borders"></div>
                    <ul class="slides">
                        <li class="home-slide">精&nbsp;&nbsp;&nbsp;&nbsp;准</li>
                        <li class="home-slide">创&nbsp;造&nbsp;力</li>
                        <li class="home-slide">Stylish</li>
                        <li class="home-slide">连接</li>
                        <li class="home-slide">Coded</li>
                    </ul>
                </div><!-- end flexslider -->

        </div><!-- end home text wrapper -->
    </div><!-- close main header banner -->


    <!-- About Us Section
    ================================================== -->


    <!-- Services Section
    ================================================== -->
    <div class="container page services" id="services">
        <div class="title-borders"><h1 style=" line-height: 0.6em;">产品介绍</h1></div>
        <div class="subtitle">We are a <span class="highlight">creative agency</span> located in San Francisco, California. We’ve won a <span class="highlight">ton of awards</span> and have been featured in all of the magazines.</div>
    </div><!-- close services header -->

    <div class="fullwidth">
        <div class="container sub-page">
            <div class="one-third column about-text">
                <div class="icon-services-circle"><img src="{$WebSiteUrlPublic}/images/icons/icon-megaphone.png" alt="Creativity" /></div>
                <h3 style=" cursor: pointer" onclick='window.location.href="{$websiteUrl}/home/pushInfo"'>信息推送</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec libero molestie ipsum dignissim condimentum. Donec at ligula elit. Nunc nec ipsum lectus. Quisque facilisis dolor et elit semper mattis. Vivamus molestie consectetur sem eu luctus. Duis placerat molestie tellus, venenatis blandit eros.</p>
            </div>

            <div class="one-third column about-text">
                <div class="icon-services-circle"><img src="{$WebSiteUrlPublic}/images/icons/icon-cog.png" alt="Creativity" /></div>
                <h3 style=" cursor: pointer" onclick='window.location.href="{$websiteUrl}/home/servicesCustom"'>服务定制</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec libero molestie ipsum dignissim condimentum. Donec at ligula elit. Nunc nec ipsum lectus. Quisque facilisis dolor et elit semper mattis. Vivamus molestie consectetur sem eu luctus. Duis placerat molestie tellus, venenatis blandit eros.</p>
            </div>

            <div class="one-third column about-text">
                <div class="icon-services-circle"><img src="{$WebSiteUrlPublic}/images/icons/icon-bulb.png" alt="Creativity" /></div>
                <h3 style=" cursor: pointer" onclick='window.location.href="{$websiteUrl}/home/acurateSearch"'>精准搜索</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec libero molestie ipsum dignissim condimentum. Donec at ligula elit. Nunc nec ipsum lectus. Quisque facilisis dolor et elit semper mattis. Vivamus molestie consectetur sem eu luctus. Duis placerat molestie tellus, venenatis blandit eros.</p>
            </div>
        </div><!-- close container -->
    </div><!-- close services fullwidth -->

<!--     <div class="container page">
        <div class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec libero molestie ipsum dignissim condimentum. Donec at ligula elit. Nunc nec ipsum lectus. </div>
        <a href="#" class="btn">Contact Us</a>
    </div><!-- close services header --> 

    <!-- Parallax Section 3
    ================================================== -->

    {include file="$path/_footer.tpl"}
</body>
</html>