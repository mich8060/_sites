<?php

    header("Access-Control-Allow-Orgin: *");
    header("Access-Control-Allow-Methods: *");
    header("Content-Type: application/json");

	$identifier = mysql_real_escape_string(strtolower($this->uri->segment(2)));
	
	$options = array(
        'http'=>array(
            'method'=>"GET",
            'header'=>"User-Agent: Mozilla/5.0 (iPad; U; CPU OS 3_2 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko) Version/4.0.4 Mobile/7B334b Safari/531.21.102011-10-16 20:23:10\r\n" // i.e. An iPad 
        )
    );
    $context = stream_context_create($options);
	
	$suggestions = json_decode(file_get_contents("http://api.backcountry.com/mobile/products/search/suggestions/".$identifier,false,$context));
	$search = json_decode(file_get_contents("https://api.backcountry.com/mobile/products/search/".$identifier,false,$content));

    if(isset($search->metadata->facets[0]->filters)){
        $filters = $search->metadata->facets[0]->filters;

    	for($x = 0;$x < sizeof($filters);$x++){
    	    $cat = $filters[$x]->name;
    	    $cat = str_replace("1.bcs.", "", $cat);
    	    $suggest_categories[] = array(
    	       "name"   =>  $cat,
    	       "filterQueries"  =>  $filters[$x]->filterQueries
    	    );
    	}
    	

    	for($y = 0; $y < sizeof($filters); $y++){
    	    $suggestions[$y]->categories = $suggest_categories[$y];
    	}
    }
	
	echo json_encode($suggestions);

?>