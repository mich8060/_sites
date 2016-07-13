<?php

class Scrap_model extends CI_Model {
    function copy() {
        $json = json_decode(file_get_contents('http://explorepostsapi-vip.bcinfra.net:9000/v1/explore/posts?site=bcs&offset=0&limit=463'));

        foreach($json->posts as $j){

        }
    }
}

/* End of file scrap_model.php */
/* Location: ./application/controllers/scrap_model.php */