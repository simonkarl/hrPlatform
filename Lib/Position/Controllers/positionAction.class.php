<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class PositionAction extends Action {


    function positionDetail(){

        if(!empty($_GET['id']) && $_GET['id'] > 0){

            $resumeApi = new resumeApi();

            $result = $resumeApi->getResumeDetail($_GET['id']);
        }

        $this->display();

    }

}
