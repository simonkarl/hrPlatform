<script type="text/javascript" src="{$WebSiteUrlPublic}/js/user.js"></script>



{if $whether_login == 1}
dasjhdjkas

{else}
<div style="font-size: 20px; border-bottom: solid 1px #ccc; font-weight: bold;color:rgb(44,62,81);height: 50px; line-height: 50px;">用户登录</div>
<div style="font-size: 16px; margin-top: 15px; font-weight: bold;color:rgb(44,62,81)">邮箱:</div>
<div style=" margin-top: 12px; margin-bottom: 12px;">
    <input type="email" class="form-control" id="userLoginEmail" placeholder="请输入登陆邮箱">
</div>
<div style="font-size: 16px;font-weight: bold;color:rgb(44,62,81);">密码:</div>
<div style=" margin-top: 12px; margin-bottom: 12px;">
    <input type="password" class="form-control" id="userLoginPassword" placeholder="请输入密码">
</div>

<div style=" margin-top: 10px;">
    <b style=" margin-left: 5px; cursor: pointer">忘记密码？</b>
    <b id="register" style=" margin-left: 65px; color: #333; cursor: pointer">免费注册</b>
</div>

<div style=" text-align: center;">
    <button onclick='userLogin()' type="button" style="width: 200px;background-color: rgb(71,135,191);border: solid 1px #369;color: #fff;height: 35px;font-size: 16px; border-radius: 5px; --webkit-border-radius: 5px; --moz-border-radius: 5px; margin-top: 30px;">
        登 录
    </button>
</div>

{/if}

