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
    <link rel="stylesheet" href="{$WebSiteUrlPublic}/css/category.css">

   

</head>
<body class="third-color">

    

  
{include file="$path/_header.tpl"}

<div class="container header-banner" style="margin-top: 5px;"><!-- main header banner -->

    {include file="$path/_category.tpl"}


        <article class="wrapSection">
            <section class="sectionOnea">
                <div style="margin-top: -2px;">
                    {include file="$path/_slide.tpl"}
                </div>
            </section>

 <!--            <section class="sectionTwob"></section> -->
        </article>

</div><!-- close main header banner -->

    <!-- About Us Section
    ================================================== -->

<div style="height: 80px;width: 100%;margin-top: 20px; line-height: 80px; font-size: 24px; text-align: center; color: rgb(86,103,109);  border-bottom: solid 1px rgb(216,216,216);
  box-shadow: 0 0 3px rgb(216,216,216);
  -webkit-box-shadow: 0 0 3px rgb(216,216,216);
  -moz-box-shadow: 0 0 3px rgb(216,216,216);">
    新增HR用户
    <b style="color: rgb(231,76,60);">138</b>人
    、目前有<b style="color: rgb(231,76,60);">2276</b>个职位，今日新增职位<b style="color: rgb(231,76,60);">186</b>个

</div>


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


    {include file="$path/_footer.tpl"}
</body>
</html>