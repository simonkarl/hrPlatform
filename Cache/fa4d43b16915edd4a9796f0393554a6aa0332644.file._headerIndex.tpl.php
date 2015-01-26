<?php /* Smarty version Smarty-3.0-RC2, created on 2015-01-23 11:14:59
         compiled from "/web/www/hrPlatform/Public/html//_headerIndex.tpl" */ ?>
<?php /*%%SmartyHeaderCode:128537176154c1bcb3e7b444-23548195%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa4d43b16915edd4a9796f0393554a6aa0332644' => 
    array (
      0 => '/web/www/hrPlatform/Public/html//_headerIndex.tpl',
      1 => 1421982796,
    ),
  ),
  'nocache_hash' => '128537176154c1bcb3e7b444-23548195',
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

    <script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/js/Chart.js"></script>

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
  border-bottom: solid 1px rgb(216,216,216);
  box-shadow: 0 0 3px rgb(216,216,216);
  -webkit-box-shadow: 0 0 3px rgb(216,216,216);
  -moz-box-shadow: 0 0 3px rgb(216,216,216);
    /*background: rgba(236,240,241,1);*/
    background-color: rgb(51,51,51);
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
background-color: rgb(255,153,51);
border: 1px solid rgb(255,153,51);
border-bottom-color: transparent;

}

.nav-tabs>li>a:hover {

border: 1px solid rgb(144,109,109);

}

.nav-tabs li a{
    color: rgb(201,201,201);
}

.inputSearch{
    width: 340px;
    height: 35px;
    border: solid 3px rgb(255,153,51);
    text-indent: 5px;
}

.searchBtn{
    height: 35px;
    width: 70px;
    border: solid 3px rgb(255,153,51);
    background-color: rgb(255,153,51);
    color: #fff;
    font-weight: bold;
    margin-left: -5px;
}

.nav-tabs {
    border-bottom: none;
}


.nav>li>a:hover, .nav>li>a:focus {
text-decoration: none;
background-color: rgb(144,109,109);;
}

.main-nav ul li a{
    text-decoration: none;
    font-size: 16px;
    font-weight: bold;
    color: #fff;
}
.main-nav ul li a:hover{
    text-decoration: none;
    color: rgb(255,153,51);
}
.location{
    margin-left: 56px;
/* padding-top: 30px; */
height: 50px;
line-height: 50px;
color: #fff;
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

<div style=" border: solid 2px rgb(255,153,51)"></div>
<article class="wrapHeader">   
    <section class="sectionOne">
        <div class="location">当前城市:
            <select>  
              <option value ="1">上海</option>  
              <option value ="2">北京</option>  
              <option value="3">广州</option>  
            </select> 
        </div>
        <!-- Site Logo -->
        <div class="logo secondary-color five columns" onclick='window.location.href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/home/index"' style="text-indent: 14px; line-height: 70px;">
        <img style="height: 55px;
margin-left: 42px;
margin-top: -24px;" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/images/logo.png" />
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
/resume/searchResume' method="post" id='form1' name='form1'>
        <input type="hidden" name='type' value='2'>
        <span><input type="text" class="inputSearch" id='keyword' name="keyword" placeholder="各种“高大上”的简历等着你..."   />
        <input type="button" class="searchBtn" onclick='searchBefore("form1")' name="resumeBtn" value="搜 索" />
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

            <ul style="width: 412px;padding-top: 72px;height: 135px;">
                <li><a href="#" class="third-color" onclick='window.location.href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/home/index"'>首页</a></li>
                <li><a href="#" class="third-color" onclick='window.location.href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/home/advancedSearch"'>筛选服务</a></li>
                <li><a href="#" class="third-color" onclick='window.location.href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/home/pushInfo"'>行业资讯</a></li>
                <li><a href="#" class="third-color" onclick='window.location.href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/home/servicesCustom"'>订阅产品</a></li>

                <?php if ($_smarty_tpl->getVariable('whether_login')->value==1){?>

                <li><a href="#" class="third-color" onclick='window.location.href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/user/userCenter"'>个人中心</a></li>

                <?php }else{ ?>

                <li>
                    <a href="#" class="third-color" onclick='window.location.href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/user/companyLogin"'>登陆</a>

                    <a href="#" class="third-color" onclick='window.location.href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/user/companyRegister"'>注册</a>
                </li>

                <?php }?>

            </ul>
        </nav>
    </section>
</article>



<script>

$('#myTab a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})


</script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/js/search.js"></script>


    