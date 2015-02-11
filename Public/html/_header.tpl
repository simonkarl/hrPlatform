
    <meta charset="utf-8">
<!-- CSS
  ================================================== -->
<!--     <link href='http://fonts.googleapis.com/css?family=Lato:400,700|Oswald' rel='stylesheet' type='text/css'> -->

    <link rel="stylesheet" href="{$WebSiteUrlPublic}/css/skeleton.css">
    <link rel="stylesheet" href="{$WebSiteUrlPublic}/css/styles.css">
    <link rel="stylesheet" href="{$WebSiteUrlPublic}/css/flexslider.css">
    <link rel="stylesheet" href="{$WebSiteUrlPublic}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{$WebSiteUrlPublic}/css/prettyPhoto.css">

    <!--[if lt IE 8]>
        <link rel="stylesheet" href="css/font-awesome-ie7.min.css">
    <![endif]-->

    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script type="text/javascript" src="{$WebSiteUrlPublic}/js/jquery.min.js"></script>

    <script type="text/javascript" src="{$WebSiteUrlPublic}/js/slide.js"></script>

    <script type="text/javascript" src="{$WebSiteUrlPublic}/js/Chart.js"></script>

    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">

    <!-- 可选的Bootstrap主题文件（一般不用引入） -->
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>

    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="{$WebSiteUrlPublic}/css/update.css">

    <script src="{$WebSiteUrlPublic}/js/public.js"></script>

    <!-- Favicons
    ================================================== -->
    <!-- <link rel="shortcut icon" href="{$WebSiteUrlPublic}/images/favicon.ico"> -->
    <link rel="apple-touch-icon" href="{$WebSiteUrlPublic}/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{$WebSiteUrlPublic}/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{$WebSiteUrlPublic}/images/apple-touch-icon-114x114.png">

        <!-- Header Area
    ================================================== -->


<style>

.wrapHeader{
    width:100%;
    height: 135px;;
    display:-moz-box;
    display:-webkit-box;
    display:box;
  border-bottom: solid 1px rgb(216,216,216);
  box-shadow: 0 0 3px rgb(216,216,216);
  -webkit-box-shadow: 0 0 3px rgb(216,216,216);
  -moz-box-shadow: 0 0 3px rgb(216,216,216);
    background: rgba(51,51,51,1);

    margin-top: -30px;
}
.sectionOne{
    -moz-box-flex:3;
    -webkit-box-flex:3;
    box-flex:3;
    width: 215px;
}
.sectionTwo{
    -moz-box-flex:2;
    -webkit-box-flex:2;
    box-flex:2;
}
.sectionThree{
    -moz-box-flex:1;
    -webkit-box-flex:1;
    box-flex:1;
}

.nav-tabs>li.active>a, .nav-tabs>li.active>a:hover, .nav-tabs>li.active>a:focus {
color: #fff;
font-weight: bold;
cursor: default;
background-color: rgb(231,76,60);
border: 1px solid #ddd;
border-bottom-color: transparent;

}

.nav-tabs li a{
    color: rgb(82,82,82);
}

.inputSearch{
    width: 340px;
    height: 35px;
    border: solid 3px rgb(231,76,60);
    text-indent: 5px;
}

.searchBtn{
    height: 35px;
    width: 70px;
    border: solid 3px rgb(231,76,60);
    background-color: rgb(231,76,60);
    color: #fff;
    font-weight: bold;
    margin-left: -5px;
}

.nav-tabs {
    border-bottom: none;
}

.main-nav ul li a{
    text-decoration: none;
    font-size: 16px;
    font-weight: bold;
    color: #fff;
    font-family: Arial,Helvetica,sans-serif;
}
.main-nav ul li a:hover{
    text-decoration: none;
    color: rgb(255,153,51);
    font-family: Arial,Helvetica,sans-serif;
}
.location{
    margin-left: 56px;
/* padding-top: 30px; */
height: 50px;
line-height: 50px;
color: rgb(44,62,80);
}
.loginOut{
    margin-right: 66px;
height: 50px;
text-align: right;
line-height: 51px;

cursor: pointer;
}
.loginOut:hover{
    margin-right: 66px;
height: 50px;
text-align: right;
line-height: 51px;
cursor: pointer;
color: rgb(231,76,60);
}
</style>





<!--     <div class="container main-header" style="width: 100%;"><!-- header container--> 

<article class="wrapHeader">   
    <section class="sectionOne">
        <div class="location"></div>
        <!-- Site Logo -->
        <div class="logo secondary-color five columns" onclick='window.location.href="{$websiteUrl}/home/index"' style="text-indent: 14px; line-height: 70px;">
        <img style="height: 55px;
margin-left: 42px;
margin-top: -6px;" src="{$WebSiteUrlPublic}/images/logo.png" />
        </div>

    </section>

    <section class="sectionTwo">

        <div style=" height: 25px;"></div>


    </section>

    <section class="sectionThree">
        <!-- Main Navigation-->
        <nav class="main-nav eleven columns" style="">

            <ul style="width: 414px;padding-top: 72px;height: 135px;">
                <li><a href="#" class="third-color" onclick='window.location.href="{$websiteUrl}/home/index"'>首页</a></li>
                <li><a href="#" class="third-color" onclick='window.location.href="{$websiteUrl}/home/servicesCustom"'>产品订阅</a></li>
                <li><a href="#" class="third-color" onclick='window.location.href="{$websiteUrl}/home/advancedSearch"'>简历筛选</a></li>
                <li><a href="#" class="third-color" onclick='window.location.href="{$websiteUrl}/home/pushInfo"'>行业资讯</a></li>

                {if $whether_login  == 1}

                <li><a href="#" class="third-color" onclick='window.location.href="{$websiteUrl}/user/userCenter"'>用户中心</a></li>

                {else}

                <li>
                    <a href="#" class="third-color" onclick='window.location.href="{$websiteUrl}/user/companyLogin"'>登陆</a>

                    <a href="#" class="third-color" onclick='window.location.href="{$websiteUrl}/user/companyRegister"'>注册</a>
                </li>

                {/if}

            </ul>
        </nav>
    </section>
</article>



<script>

$('#myTab a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})


setPublic('{$websiteUrl}')


</script>
<script type="text/javascript" src="{$WebSiteUrlPublic}/js/search.js"></script>


    