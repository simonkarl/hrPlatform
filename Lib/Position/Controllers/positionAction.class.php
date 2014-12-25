<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class PositionAction extends Action {


    function positionDetail(){

        if(!empty($_GET['id']) && $_GET['id'] > 0){
        	header("Content-type:text/html;charset=utf-8");

            $resumeApi = new resumeApi();

            $resultPosition = $resumeApi->getResumeDetail($_GET['id']);
            $result = $resultPosition['position_detail'];
            $resultCompanyInfo = $resultPosition['company_info'];
            $position_label = $result['position_label'];
            $work_year = $result['work_year'];
            $working_place = $result['working_place'];
            $salary_range = $result['salary_range'];
            $formal_schooling = $result['formal_schooling'];
            $created_at = $result['created_at'];
            $updated_at = $result['updated_at'];
            $job_description = $result['job_description'];
            //公司信息
            $company_name = $resultCompanyInfo['company_name'];
            $company_address = $resultCompanyInfo['company_address'];
            $company_industry = strip_tags($resultCompanyInfo['company_industry']);
            $company_scale = $resultCompanyInfo['company_scale'];
            $company_nature = $resultCompanyInfo['company_nature'];
            // $company_website = $resultCompanyInfo['company_website'];

            $this->assign('position_label',$position_label);
            $this->assign('work_year',$work_year);
            $this->assign('working_place',$working_place);
            $this->assign('salary_range',$salary_range);
            $this->assign('formal_schooling',$formal_schooling);
            $this->assign('created_at',$created_at);
            $this->assign('updated_at',$updated_at);
            $this->assign('job_description',$job_description);

            $this->assign('company_name',$company_name);
            $this->assign('company_address',$company_address);
            $this->assign('company_industry',$company_industry);
            $this->assign('company_scale',$company_scale);
            $this->assign('company_nature',$company_nature);
            // $this->assign('company_website',$company_website);


             //  print_r($resultCompanyInfo);
        }

        $this->display();

    }

}
