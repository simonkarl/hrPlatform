<?php

class CompanyAction extends Action {


	public function companyDetail(){

		if(!empty($_REQUEST['id'])){

			$companyApi = new companyApi();

			$result = $companyApi->getCompanyDetail($_REQUEST['id']);

			var_dump($result);
		}

		$this->display();
	}

	public function searchCompany(){

		 $companyApi = new companyApi();

         if(!empty($_REQUEST['page'])){

            $page = $_REQUEST['page'];

         } else{

            $page = 1;

         }

         $result = $companyApi->serachCompany($_REQUEST['keyword'],$page);


         var_dump($result);

         die;

     
         $page = new page('company/searchCompany',$_REQUEST['keyword'],$_REQUEST['type']);

         $fenye = $page->coutPage($result['current_page'],$result['fina_page']);

         $this->assign('result',$result['data']);

         $this->assign('fenye',$fenye);

         $this->display('serach_company');
	}

}