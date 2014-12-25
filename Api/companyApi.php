<?php

class companyApi extends Api {

    public function serachCompany($keyword, $page) {

        $api_url = $this->api_url . '/company?keyword=' . $keyword . '&page=' . $page;

        $result = transferData($api_url, 'get');

        return json_decode($result, true);
    }

    public function getCompanyDetail($id) {

        if (!empty($id) && $id > 0) {
            
            $api_url = $this->api_url . '/companyDetail?id=' . $id;

            $result = transferData($api_url, 'get');

            return json_decode($result, true);
        }
    }


}

?>