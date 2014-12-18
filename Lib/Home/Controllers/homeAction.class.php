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
    //精准搜索
    function acurateSearch(){
         $this->display();
        
    }
    //订阅
    function rss(){
         $this->display();
        
    }

}
