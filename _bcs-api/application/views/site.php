<?php

	// http://api.backcountry.com/v1/products/TNF00TG?site=bcs&fields=id,title,skus,brand.name,customerReviews,listPrice,tags

	$url = array(
		"name"			=>	$this->uri->segment(1),
		"identifier"	=>	$this->uri->segment(2)
	);
	
	$api = "http://api.backcountry.com/v1/products/".$url['identifier']."?site=bcs&fields=id,title,skus,brand.name,customerReviews,listPrice,tags";
	
	$options = array(
        'http'=>array(
            'method'=>"GET",
            'header'=>"User-Agent: Mozilla/5.0 (iPad; U; CPU OS 3_2 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko) Version/4.0.4 Mobile/7B334b Safari/531.21.102011-10-16 20:23:10\r\n" // i.e. An iPad 
        )
    );

    $context = stream_context_create($options);
	$json = json_decode(file_get_contents($api, false, $context));
	
	header("Access-Control-Allow-Orgin: *");
	header("Access-Control-Allow-Methods: *");
	header("Content-Type: application/json");
	echo json_encode($json);

?>