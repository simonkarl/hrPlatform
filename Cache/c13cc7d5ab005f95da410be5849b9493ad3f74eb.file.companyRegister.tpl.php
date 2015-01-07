<?php /* Smarty version Smarty-3.0-RC2, created on 2015-01-06 15:44:36
         compiled from "/Users/Lev/Sites/hrPlatform/Lib/User/Tpl/User/companyRegister.tpl" */ ?>
<?php /*%%SmartyHeaderCode:176356735554ab92640a50f7-39720432%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c13cc7d5ab005f95da410be5849b9493ad3f74eb' => 
    array (
      0 => '/Users/Lev/Sites/hrPlatform/Lib/User/Tpl/User/companyRegister.tpl',
      1 => 1420530236,
    ),
  ),
  'nocache_hash' => '176356735554ab92640a50f7-39720432',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<!-- 新 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">

<!-- 可选的Bootstrap主题文件（一般不用引入） -->
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/css/font-awesome.min.css">

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

.form-group label{
    font-size: 18px;
    margin-bottom: 10px;
margin-top: 12px;
}

#exampleInputEmail1{
    width: 120%;
}
#exampleInputPassword1{
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
</style>

<section>

<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/_sempleHeader.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>


  <div style=" height: 52px; width: 40%; margin: 0 auto">
      <div style=" margin-top: 12px; height: 40px;line-height: 8px;" class="alert alert-danger" role="alert"></div>

      <div style=" margin-top: 12px; height: 40px;line-height: 8px;" class="alert alert-success" role="alert"></div>

  </div>

    <div class="regisiterWarp">


      <article class="companyReWarp">

        <div style=" width: 150px;"></div>
            <form role="form">
                <div class="form-group">
                     <div style=" font-size: 24px; margin-top: 20px; height: 80px; line-height: 80px;">现在就加入&nbsp;&nbsp;<b>Hirelib</b>
                     </div>

                              <label for="exampleInputEmail1">邮箱</label>
                              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="请输入邮箱">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">密码</label>
                              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="请输入密码">
                            </div>
                            <div class="checkbox">
                              <label style="font-size: 14px;margin-top: 10px; color: rgb(81,87,74); font-weight: bold;">
                                <input type="checkbox">我已阅读并同意相关协议
                              </label>
                            </div>
                            <button type="button" id="btnRegister" style=" width: 120px;height: 40px;margin-top: 20px;
                  line-height: 20px;" class="btn btn-primary btn-lg">注&nbsp;&nbsp;册</button>
            </form>

      </article>

      <div style=" height: 40px"></div>
      <div style=" height: 80px;background-color: rgb(244,244,244); padding-left: 150px;color: rgb(136,153,166);">
        <div style=" padding-top: 20px;">已有账号?
          <b onclick='window.location.href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/user/companyLogin"'><a style=" cursor: pointer">立即登陆</a></b>
        </div>
        <div style=" margin-top: 9px;">新用户注册免激活</div>

      </div>


    </div>
</section>
<script>
  $(function(){
    $("#btnRegister").click(function(event) {
      /* Act on the event */

      userRegister();

    });

    function userRegister(){

      if (!/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/.test($("#exampleInputEmail1").val())) { 
              $(".alert-danger").show();
              $(".alert-danger").html('邮箱格式不正确，请检查后重新输入！');
              setTimeout("$('.alert-danger').hide()", 3000);

          } 
          else { 
  
              if($("#exampleInputPassword1").val() ==''){
                     $(".alert-danger").show();
                     $(".alert-danger").html('密码不能为空！');
                     setTimeout("$('.alert-danger').hide()", 3000);
                     return false;
                  }else{

                    $.ajax({
                             type: "get",
                             url: "<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/user/companyRegisterAjax",
                             data: {
                              email:$("#exampleInputEmail1").val(),
                              password:$("#exampleInputPassword1").val(),

                             },

                             success: function(res){
                              
                                if(res == 0){

                                  $(".alert-success").show();
                                  $(".alert-success").html('恭喜，你已注册成功 将在3秒后跳转到首页');

                                  setTimeout("window.open('<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/home/index')", 3000);
                                  setTimeout("$('.alert-success').hide()", 3000);

                                  return false;
                                } else if(res == 1002){

                                  $(".alert-danger").show();
                                  $(".alert-danger").html('该邮箱已经注册，请直接登录！');
                                  setTimeout("$('.alert-danger').hide()", 3000);

                                  return false;
                                }
                             },
                             error: function(){
                                  $(".alert-danger").show();
                                  $(".alert-danger").html('网络异常');
                                  setTimeout("$('.alert-danger').hide()", 3000);
                             }
                        });


                  }
       
              }
    }


  })


</script>

