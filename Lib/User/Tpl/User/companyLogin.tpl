
<!-- 新 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">

<!-- 可选的Bootstrap主题文件（一般不用引入） -->
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="{$WebSiteUrlPublic}/css/font-awesome.min.css">





<style>
.companyReWarp{
    display:-moz-box;
    display:-webkit-box;
    display:box;

    font-size: 1.1em;
}
.regisiterWarp{
  border: solid 1px #ccc;
  border-radius: 5px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  width: 800px; 
  margin: 0 auto;

}

.form-control{
	width: 120%;
}
.alert-success{
    display: none;
    font-weight: bold;
    text-align: center;

}

.alert-danger{
  text-align: center;
  display: none;
  font-weight: bold;
}

.form-group {
	font-size: 18px;
	margin-top: 20px;
}

#userLoginEmail,#userLoginPassword{
	margin-top: 10px;
}

</style>

{include file="$path/_sempleHeader.tpl"}

<body style=" background-image: url('{$WebSiteUrlPublic}/images/body-bg.jpg');">
<section>
  <div style=" height: 52px; width: 40%; margin: 0 auto">
      <div style=" margin-top: 12px; height: 40px;line-height: 8px;" class="alert alert-danger" role="alert"></div>

      <div style=" margin-top: 12px; height: 40px;line-height: 8px;" class="alert alert-success" role="alert"></div>

  </div>

    <div class="regisiterWarp">
      <article class="companyReWarp">

        <div style=" width: 150px;"></div>
            <form role="form">
                <div class="form-group">

                     <div style=" font-size: 24px; height: 80px; line-height: 80px;"> 登录&nbsp;&nbsp;<b>Hirelib</b></div>

                            <label style=" margin-top: 20px;" for="userLoginEmail">邮箱</label>
                              <input type="email" class="form-control" id="userLoginEmail" placeholder="请输入邮箱">
                          </div>
                            <div class="form-group">
                              <label for="userLoginPassword">密码</label>
                              <input type="password" class="form-control" id="userLoginPassword" placeholder="请输入密码">
                            </div>


					<div>
					    <button onclick='userLogin()' type="button" style="width: 100px;background-color: rgb(71,135,191);border: solid 1px #369;color: #fff;height: 35px;font-size: 16px; border-radius: 5px; -webkit-border-radius: 5px; -moz-border-radius: 5px; margin-top: 30px;">
					        登 录
					    </button>
					    <span style=" font-size: 13px; cursor: pointer; margin-left: 10px;"><a>忘记密码?</a></span>

					</div>
            </form>

      </article>
      <div style=" height: 40px"></div>
      <div style=" height: 80px;background-color: rgb(244,244,244); padding-left: 150px;color: rgb(136,153,166);">
      	<div style=" padding-top: 20px;">新来&nbsp;Hirelib?
      		<b onclick='window.location.href="{$websiteUrl}/user/companyRegister"'><a style=" cursor: pointer">立即注册</a></b>
      	</div>
      	<div style=" margin-top: 9px;">新用户注册免激活</div>

      </div>

    </div>
</section>
</body>

 <script src="{$WebSiteUrlPublic}/js/public.js"></script>

<script type="text/javascript" src="{$WebSiteUrlPublic}/js/user.js"></script>

<script>
    
    $(function(){

        var website = '{$websiteUrl}'
        setPublic(website)
    })

</script>

