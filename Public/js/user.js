


function userLogin(){

   var email = $('#userLoginEmail').val();

   var password = $('#userLoginPassword').val();

   if(email != '' && password != ''){

   	 var api_url = domain + '/user/loginAjax';

   	 var params = {

   	 	'email':email,

   	 	'password':password
   	 }

   	 res = webSiteAjaxRequst(api_url,params,'get');

   	 switch(res){

   	 	case '1001':

   	 	  $(".alert-danger").show();
        $(".alert-danger").html('邮件或密码错误');
        setTimeout("$('.alert-danger').hide()", 3000);

   	 	return false;

   	 	break;

   	 	case '0':

   	  $(".alert-success").show();
      $(".alert-success").html('登陆成功');
      setTimeout("$('.alert-success').hide()", 3000);

      window.location.href = domain

   	 	return false;
   	 }

   }else{
        $(".alert-danger").show();
        $(".alert-danger").html('邮箱或密码为空');
        setTimeout("$('.alert-danger').hide()", 3000);
   }
}

function userlogout(){

   var api_url = domain + '/user/userLogout';

       var params = {

       }

       res = webSiteAjaxRequst(api_url,params,'get');


       alert(domain);

      location.reload();

}