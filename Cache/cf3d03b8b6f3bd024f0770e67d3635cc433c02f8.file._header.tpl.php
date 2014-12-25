<?php /* Smarty version Smarty-3.0-RC2, created on 2014-12-25 15:39:23
         compiled from "/Users/Lev/Sites/hrPlatform/Public/html//_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1307818405549bbf2b3331a2-34015389%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf3d03b8b6f3bd024f0770e67d3635cc433c02f8' => 
    array (
      0 => '/Users/Lev/Sites/hrPlatform/Public/html//_header.tpl',
      1 => 1419493018,
    ),
  ),
  'nocache_hash' => '1307818405549bbf2b3331a2-34015389',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

    <meta charset="utf-8">
<!-- CSS
  ================================================== -->
<!--     <link href='http://fonts.googleapis.com/css?family=Lato:400,700|Oswald' rel='stylesheet' type='text/css'> -->

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/css/skeleton.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/css/styles.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/css/flexslider.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/css/prettyPhoto.css">

    <!--[if lt IE 8]>
        <link rel="stylesheet" href="css/font-awesome-ie7.min.css">
    <![endif]-->

    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/js/jquery.min.js"></script>

    <script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/js/slide.js"></script>


    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">

    <!-- 可选的Bootstrap主题文件（一般不用引入） -->
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>

    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/css/update.css">

    <script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/js/public.js"></script>

    <!-- Favicons
    ================================================== -->
    <!-- <link rel="shortcut icon" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/images/favicon.ico"> -->
    <link rel="apple-touch-icon" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/images/apple-touch-icon-114x114.png">

        <!-- Header Area
    ================================================== -->


<style>

.wrapHeader{
    width:100%;
    height: 135px;;
    display:-moz-box;
    display:-webkit-box;
    display:box;
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
}
.main-nav ul li a:hover{
    text-decoration: none;
    color: rgb(231,76,60);
}
</style>

<script>
    
    $(function(){

        var website = '<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
'
        setPublic(website)
    })

</script>



<!--     <div class="container main-header" style="width: 100%;"><!-- header container--> 

<div style=" border: solid 2px rgb(231,76,70)"></div>
<article class="wrapHeader">
    <section class="sectionOne">

        <!-- Site Logo -->
        <div class="logo secondary-color five columns" onclick='window.location.href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/home/index"' style="text-indent: 14px; line-height: 160px;"><i style="text-indent: 36px;" class="icon-asterisk primary-color"></i> Hirelib
        </div>

    </section>

    <section class="sectionTwo">

        <div style=" height: 25px;"></div>

    <!-- 搜索 -->
<span style="width: 35%;">
    <ul class="nav nav-tabs" role="tablist" style="width: 85%;">
      <li role="presentation" class="active"><a href="#home" role="tab" data-toggle="tab">职位</a></li>
      <li role="presentation"><a href="#profile" role="tab" data-toggle="tab">公司</a></li>
      <li role="presentation"><a href="#messages" role="tab" data-toggle="tab">简历</a></li>
    </ul>

    <div class="tab-content">
      <div role="tabpanel" class="tab-pane fade in active" id="home">

        <form action='<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/home/acurateSearch' method="post" id='form0' name='form0'>
            <span>
                <input type="hidden" name='type' value='0'>

                <input type="text" class="inputSearch"  id='keyword' name="keyword" placeholder="快来“全民搜索”热门职位,试试手气"  />
                <input type="button" class="searchBtn" onclick='searchBefore("form0")' name="positionBtn" value="搜 索"  />
            </span>

        </form>
      </div>

      <div role="tabpanel" class="tab-pane fade" id="profile">

        <form action='<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/company/searchCompany' method="post" id='form2' name='form2'>

            <input type="hidden" name='type' value='1'>

            <span><input type="text" class="inputSearch" id='keyword' name="keyword"  placeholder="看看别的企业在干嘛..."  />
            <input type="button" class="searchBtn" onclick='searchBefore("form2")' name="companyBtn" value="搜 索"  />
            </span>

        </form>
      </div>

      <div role="tabpanel" class="tab-pane fade" id="messages">

        <form action='<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/home/acurateSearch' method="post" id='form2' name='form2'>
        <input type="hidden" name='type' value='2'>
        <span><input type="text" class="inputSearch" id='keyword' name="keyword" placeholder="各种“高大上”的简历等着你..."   />
        <input type="button" class="searchBtn" onclick='searchBefore("form2")' name="resumeBtn" value="搜 索" />
        </span>
        </form>
      </div>
    </div>
</span>
<!-- 搜索 -->


    </section>

    <section class="sectionThree">

        <!-- Main Navigation-->
        <nav class="main-nav eleven columns" style="">

            <ul style="width: 405px;padding-top: 70px;height: 135px;">
                <li><a href="#" class="third-color" onclick='window.location.href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/home/index"'>首页</a></li>
                <li><a href="#" class="third-color" onclick='window.location.href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/home/pushInfo"'>信息推送</a></li>
                <li><a href="#" class="third-color" onclick='window.location.href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/home/servicesCustom"'>服务定制</a></li>
                <li><a href="#" class="third-color" onclick='window.location.href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/home/forum"'>招聘论坛</a></li>
                <li><a href="#" class="third-color" onclick='window.location.href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/home/advancedSearch"'>高级搜索</a></li>

            </ul>
        </nav>
    </section>
</article>

<style>

.twoBanner{
     /*border: solid 1px red;*/
     height: 45px;
     line-height: 45px;
width: 1170px;
     background-color: rgb(215,48,39);
     color: #fff;
     margin: 0 auto;
}
    
.twoBanner span a{
    color: #fff;
    cursor: pointer;
    margin-left: 8px;
}
</style>

<div class="twoBanner">
    <span style="font-size: 16px;font-weight: bold;margin-left: 8px;">热门搜索：</span>
    <span>
        <a href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/home/acurateSearch?keyword=交互设计&type=0">交互设计</a>
        <a href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/home/acurateSearch?keyword=.NET&type=0">.NET</a>
        <a href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/home/acurateSearch?keyword=项目经理&type=0">项目经理</a>
        <a href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/home/acurateSearch?keyword=UI设计&type=0">UI设计</a>
        <a href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/home/acurateSearch?keyword=移动产品经理&type=0">移动产品经理</a>
        <a href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/home/acurateSearch?keyword=IOS&type=0">IOS</a>
        <a href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/home/acurateSearch?keyword=金融分析师&type=0">金融分析师</a>
    </span>
    <span><img style="width: 170px; float: right;" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/images/ba2.png"></span>

</div>


<script>

$('#myTab a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})

</script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/js/search.js"></script>


    