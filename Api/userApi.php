<?php

class userApi extends Api {


	public function companyRegister($email,$password){

		$api_url = $this->api_url.'/register?user_email='.$email.'&password='.$password;

		//$result = transferData($api_url,'get');
		$result = file_get_contents($api_url);

		return json_decode($result,true);

	}

	public function companyLogin($email,$password){

		$api_url = $this->api_url.'/login?user_email='.$email.'&password='.$password;

		//$result = transferData($api_url,'get');
		$result = file_get_contents($api_url);

		return json_decode($result,true);

	}

}
?>