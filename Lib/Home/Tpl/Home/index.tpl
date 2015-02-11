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

<div style="height: 80px;width: 100%;margin-top: 20px; line-height: 80px; font-size: 24px; text-align: center; color: rgb(60,89,86);  border-bottom: solid 1px rgb(216,216,216);
  box-shadow: 0 0 3px rgb(216,216,216);
  -webkit-box-shadow: 0 0 3px rgb(216,216,216);
  -moz-box-shadow: 0 0 3px rgb(216,216,216);">
    新增HR用户
    <b style="color: rgb(255,119,51);">{$user_count}</b>人
    、目前有<b style="color: rgb(255,119,51);">{$allPosition}</b>个职位、今日新增职位<b style="color: rgb(255,119,51);">{$toDay}</b>个、今日下载简历<b style="color: rgb(255,119,51);">217</b>份

</div>


    <!-- Services Section
    ================================================== -->
    <div class="container page services" id="services">
        <div class="title-borders"><h1 style=" line-height: 0.6em;">产品介绍</h1></div>
        <div class="subtitle">帮助HR通过合适的方法找到合适的人才，精选三类服务方式,全方位满足HR查阅方式、通过精准的数据筛选和分析得出报表数据，帮助HR实时掌握所关注行业资讯动态发展趋势。</div>
    </div><!-- close services header -->

    <div class="fullwidth" style=" background-image: url('{$WebSiteUrlPublic}/images/body-bg.jpg');">
        <div class="container sub-page">
            <div class="one-third column about-text">
                <div class="icon-services-circle"><img src="{$WebSiteUrlPublic}/images/icons/icon-megaphone.png" alt="Creativity" /></div>
                <h3 style=" cursor: pointer" onclick='window.location.href="{$websiteUrl}/home/pushInfo"'>资讯推送</h3>
                <p>注册后HR即可定时收到通过邮件形式发送的行业招聘资讯，公司动态，职位发布等数据，帮助HR时时了解招聘动态，调整招聘需求和招聘策略。</p>
            </div>

            <div class="one-third column about-text">
                <div class="icon-services-circle"><img src="{$WebSiteUrlPublic}/images/icons/icon-cog.png" alt="Creativity" /></div>
                <h3 style=" cursor: pointer" onclick='window.location.href="{$websiteUrl}/home/servicesCustom"'>产品订阅</h3>
                <p>通过设置更细化的自定义资讯推送条件，订阅关键职位、目标公司等信息，帮助HR锁定人才，提高招聘效率。</p>
            </div>

            <div class="one-third column about-text">
                <div class="icon-services-circle"><img src="{$WebSiteUrlPublic}/images/icons/icon-bulb.png" alt="Creativity" /></div>
                <h3 style=" cursor: pointer" onclick='window.location.href="{$websiteUrl}/home/advancedSearch"'>精准搜索</h3>
                <p>通过设置简历筛选器条件，用全方位的简历测评报告帮助HR快速找到符合岗位需求的简历。
</p>
            </div>
        </div><!-- close container -->
    </div><!-- close services fullwidth -->


    {include file="$path/_footer.tpl"}
</body>
</html>