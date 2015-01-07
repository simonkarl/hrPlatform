<?php

class CompanyAction extends Action {


	public function companyDetail(){

		if(!empty($_REQUEST['id'])){

			$companyApi = new companyApi();

			$result = $companyApi->getCompanyDetail($_REQUEST['id']);

		    

         $company_detail_array = $result['company_detail'];
         $company_name = $company_detail_array['company_name'];
         $company_info = $company_detail_array['company_info'];
         $company_industry = substr($company_detail_array['company_industry'],12);
         $company_scale = substr($company_detail_array['company_scale'],0,strlen($company_detail_array['company_scale'])-2);
         $company_nature = $company_detail_array['company_nature'];

         $otherPositionList = $result['list'];

         $this->assign('company_name',$company_name);
         $this->assign('company_info',$company_info);
         $this->assign('company_industry',$company_industry);
         $this->assign('company_nature',$company_nature);
         $this->assign('company_scale',$company_scale);

         $this->assign('otherPositionList',$otherPositionList);

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
     
         $page = new page('company/searchCompany',$_REQUEST['keyword'],$_REQUEST['type']);

         $fenye = $page->coutPage($result['current_page'],$result['fina_page']);

         $this->assign('result',$result['data']);

         $this->assign('fenye',$fenye);

         $this->display('searchCompany');
	}

}