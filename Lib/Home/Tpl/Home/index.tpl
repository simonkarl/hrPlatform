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
<body class="third-color" style=" background-image: url('{$WebSiteUrlPublic}/images/body-bg.jpg');">

    

  
{include file="$path/_headerIndex.tpl"}

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

<div style="height: 80px;width: 100%;margin-top: 20px; line-height: 80px; font-size: 24px; text-align: center; color: rgb(60,89,86);  border-bottom: solid 1px rgb(216,216,216);
  box-shadow: 0 0 3px rgb(216,216,216);
  -webkit-box-shadow: 0 0 3px rgb(216,216,216);
  -moz-box-shadow: 0 0 3px rgb(216,216,216);">
    新增HR用户
    <b style="color: rgb(255,119,51);">{$user_count}</b>人
    、目前有<b style="color: rgb(255,119,51);">{$allPosition}</b>个职位、今日新增职位<b style="color: rgb(255,119,51);">{$toDay}</b>个

</div>


    <!-- Services Section
    ================================================== -->
    <div class="container page services" id="services">
        <div class="title-borders"><h1 style=" line-height: 0.6em;">产品介绍</h1></div>
        <div class="subtitle">帮助HR通过合适的方法找到合适的人才.精选三类服务方式, 全方位满足HR查阅方式.通过精准的数据筛选和分析得出报表数据, 帮助HR实时掌握所关注行业资讯动态发展趋势.</div>
    </div><!-- close services header -->

    <div class="fullwidth" style=" background-image: url('{$WebSiteUrlPublic}/images/body-bg.jpg');">
        <div class="container sub-page">
            <div class="one-third column about-text">
                <div class="icon-services-circle"><img src="{$WebSiteUrlPublic}/images/icons/icon-megaphone.png" alt="Creativity" /></div>
                <h3 style=" cursor: pointer" onclick='window.location.href="{$websiteUrl}/home/pushInfo"'>信息推送</h3>
                <p>通过邮件的形式向HR发送其订阅的行业资讯, 职位信息, 公司信息和报表数据, 进一步满足HR线下使用的基本需求.</p>
            </div>

            <div class="one-third column about-text">
                <div class="icon-services-circle"><img src="{$WebSiteUrlPublic}/images/icons/icon-cog.png" alt="Creativity" /></div>
                <h3 style=" cursor: pointer" onclick='window.location.href="{$websiteUrl}/home/servicesCustom"'>服务定制</h3>
                <p></p>
            </div>

            <div class="one-third column about-text">
                <div class="icon-services-circle"><img src="{$WebSiteUrlPublic}/images/icons/icon-bulb.png" alt="Creativity" /></div>
                <h3 style=" cursor: pointer" onclick='window.location.href="{$websiteUrl}/home/advancedSearch"'>精准搜索</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec libero molestie ipsum dignissim condimentum. Donec at ligula elit. Nunc nec ipsum lectus. Quisque facilisis dolor et elit semper mattis. Vivamus molestie consectetur sem eu luctus. Duis placerat molestie tellus, venenatis blandit eros.</p>
            </div>
        </div><!-- close container -->
    </div><!-- close services fullwidth -->


    {include file="$path/_footer.tpl"}
</body>
</html>