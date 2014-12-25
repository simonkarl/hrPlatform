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

   	 	alert('邮件或密码错误!');

   	 	return false;

   	 	break;

   	 	case '0':

   	 	alert('登录成功!');

   	 	return false;
   	 }

   }
}