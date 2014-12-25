<?php

class UserAction extends Action {


	//个人登陆
	function personLogin(){



		$this->display();
	}


	//个人注册
	function personRegister(){

		$this->display();
	}
	//企业注册
	public function companyRegister(){

		if(!empty($_GET['email']) && !empty($_GET['password'])){
			
			$userApi = new userApi();

			$result = $userApi->companyRegister($_GET['email'],$_GET['password']);
			print_r($result);
		}
		
		$this->display();

	}
	//个人中心
	public function userCenter(){

		$this->display();

	}
}

?>
