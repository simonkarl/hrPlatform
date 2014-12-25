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

	
		
		$this->display();

	}

	public function companyRegisterAjax(){

	    if(!empty($_GET['email']) && !empty($_GET['password'])){
			
			$userApi = new userApi();

			$result = $userApi->companyRegister($_GET['email'],$_GET['password']);

			if(!empty($result['code']) && $result['code'] > 0){

				echo '1002';

				die;

			} else{

				if(!empty($result['user_id']) > 0){

					set_user_session($result);

					echo '0';

					die;
				}

			}
		}

	}


	public function loginAjax(){

		 if(!empty($_GET['email']) && !empty($_GET['password'])){
			
			$userApi = new userApi();

			$result = $userApi->companyLogin($_GET['email'],$_GET['password']);

			if(!empty($result['code']) && $result['code'] > 0){

				echo '1001';

				die;

			} else{

				if(!empty($result['user_id']) && $result['user_id'] > 0){

					set_user_session($result);

					

					echo '0';

					die;
				}

			}
		}

	}


	//个人中心
	public function userCenter(){

		$this->display();

	}
}

?>
