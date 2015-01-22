<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class HomeAction extends Action {

    //首页
    function index() {

        $indexApi = new indexApi();
        
        $result = $indexApi->getPositionCount();

        // print_r($result);
        $toDay = $result['today'];
        $allPosition = $result['all'];
        $user_count = $result['user_count'];
        $this->assign('toDay',$toDay);
        $this->assign('allPosition',$allPosition);
        $this->assign('user_count',$user_count);
        $this->display();
    }
    //推送信息
    function pushInfo() {

        $this->display();
    }
    //推送信息
    function pushInfoDetail() {

        $this->display();
    }
    //服务定制
    function servicesCustom(){

    	$this->display();
    	
    }

    //高级搜索
    function advancedSearch(){

        $this->assign('request',json_encode($_REQUEST));

        if(!empty($_REQUEST)){

             if(!empty($_REQUEST['page'])){

                    $page = $_REQUEST['page'];

                 } else{

                    $page = 1;

                 }

                if(!empty($_REQUEST['position']) || !empty($_REQUEST['work_experience']) || !empty($_REQUEST['salary'])){

                $string = 'industry='.$_REQUEST['industry'].'&position='.$_REQUEST['position'].'&work_experience='.$_REQUEST['work_experience'].'&salary='.$_REQUEST['salary'];

                $resumeApi = new resumeApi();

                $result = $resumeApi->getResumeAdvanced($_REQUEST,$page);

                 $page = new page('home/advancedSearch','','',$string);

                 $fenye = $page->coutPage($result['current_page'],$result['fina_page']);

                 // echo $fenye;

                 $this->assign('result',$result['data']);

                 $this->assign('fenye',$fenye);

                }

          

        }

        $this->display();
    }

    //招聘论坛
    function forum(){

        $this->display();
        
    }

    //搜索 职位
    function acurateSearch(){

         switch ($_REQUEST['type']) {

             case '0':

                 $resumeApi = new resumeApi();

                 if(!empty($_REQUEST['page'])){

                    $page = $_REQUEST['page'];

                 } else{

                    $page = 1;

                 }

                 $result = $resumeApi->serachResume($_REQUEST['keyword'],$page);

                // print_r($result);
                $compensation = $result['compensation'];
                $work_experience = $result['work_experience'];
                $education = $result['education'];
                $statementArray = $result['statement'];
                $top_resumeArray = $result['top_resume'];
                $top_companyArray = $result['top_company'];
                $xArray =array_reverse($statementArray['x']);
                $yArray = $statementArray['y'];

                $this->assign('compensation',$compensation);
                $this->assign('work_experience',$work_experience);
                $this->assign('education',$education);
                $this->assign('top_resumeArray',$top_resumeArray);
                $this->assign('top_companyArray',$top_companyArray);
                $this->assign('xArray',json_encode($xArray));

                $this->assign('yArray',json_encode($yArray));


                $this->assign('keyword',$_REQUEST['keyword']);

                $this->display('serach_position');

                 break;
             
             default:
                 # code...
                 break;
         }

        

    
        
    }
    //订阅
    function rss(){
         $this->display();
        
    }

}
