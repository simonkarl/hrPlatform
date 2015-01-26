<?php

class resumeApi extends Api {

    public function serachResume($keyword, $page) {

        $api_url = $this->api_url . '/position?keyword=' . $keyword . '&page=' . $page;


        $result =  file_get_contents($api_url);
        
        return json_decode($result, true);
    }

    public function getResumeDetail($id) {

        if (!empty($id) && $id > 0) {
            
            $api_url = $this->api_url . '/positionDetail?id=' . $id;
            //$result = transferData($api_url, 'get');
            $result = file_get_contents($api_url);

            return json_decode($result, true);
        }
    }

     public function getResumeAdvanced($info,$page) {


        $string = 'name='.$info['position'].'&work_experience='.$info['work_experience'].'&salary='.$info['salary'].'&page='.$page;

        $api_url = $this->api_url . '/advanced?' . $string;

        //$result = transferData($api_url, 'get');
        $result = file_get_contents($api_url);

        return json_decode($result, true);
       
    }

    //根据关键字获取简历信息

    public function searchResumeByKeyWord($keyword,$page){

        $api_url = $this->api_url . '/search_resume?keyword=' . $keyword . '&page=' . $page;
        
        //$result = transferData($api_url, 'get');
        $result = file_get_contents($api_url);

        return json_decode($result, true);

    }

      public function getResumeDetailByResume_id($resume_id){

        $api_url = $this->api_url . '/resumeDetail?id=' . $resume_id ;

        //$result = transferData($api_url, 'get');
        $result = file_get_contents($api_url);

        return json_decode($result, true);

    }


}

?>