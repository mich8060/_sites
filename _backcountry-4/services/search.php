<?php

$identifier = strtolower(mysql_real_escape_string($this->uri->segment(2)));

$options = array(
    'http'=>array(
        'method'=>"GET",
        'header'=>"User-Agent: Mozilla/5.0 (iPad; U; CPU OS 3_2 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko) Version/4.0.4 Mobile/7B334b Safari/531.21.102011-10-16 20:23:10\r\n" // i.e. An iPad 
    )
);
$context = stream_context_create($options);
$json = json_decode(file_get_contents("https://api.backcountry.com/mobile/products/search/".$identifier,false,$context));



?>