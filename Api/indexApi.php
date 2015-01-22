<?php

class indexApi extends Api {

    public function getPositionCount() {

        $api_url = $this->api_url . '/position_count';

        $result = transferData($api_url, 'get');

        return json_decode($result, true);
    }


}

?>