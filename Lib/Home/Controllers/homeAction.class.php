<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class HomeAction extends Action {

    //首页
    function index() {

      
        $this->display();
    }
    //推送信息
    function pushInfo() {

        $this->display();
    }
    //服务定制
    function servicesCustom(){

    	$this->display();
    	
    }

    //高级搜索
    function advancedSearch(){

        $this->display();
    }

    //招聘论坛
    function forum(){

        $this->display();
        
    }

    //精准搜索
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

                 $page = new page('home/acurateSearch',$_REQUEST['keyword'],$_REQUEST['type']);

                 $fenye = $page->coutPage($result['current_page'],$result['fina_page']);

                 $this->assign('result',$result['data']);

                 $this->assign('fenye',$fenye);

                 $this->display('serach_resume');

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
