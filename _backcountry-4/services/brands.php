<?php

    $options = array(
        'http'=>array(
            'method'=>"GET",
            'header'=>"User-Agent: Mozilla/5.0 (iPad; U; CPU OS 3_2 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko) Version/4.0.4 Mobile/7B334b Safari/531.21.102011-10-16 20:23:10\r\n" // i.e. An iPad 
        )
    );
    $context = stream_context_create($options);
    $json = json_decode(file_get_contents("http://api.backcountry.com/mobile/brands",false,$context));
    
    $exclusives = array(
        "Backcountry",
        "Basin and Range",
        "Folsom Skis",
        "Haglöfs",
        "Houdini",
        "Norrøna",
        "Uber",
        "White Dot Skis"
    );

    $new = array(
        "SAM",
        "Fat Moose",
        "Parajumpers",
        "Colmar",
        "SKEA",
        "Polar" 
    );
    
    $proxy = array();
    $item = array();
    $alpha = "#";
    $count = 0;
    
    foreach($json as $j){
        $list = array();
        
        // Detect a Change
        if($alpha != strtoupper($j->name[0]) && ctype_alpha($j->name[0])){
            $item['alpha'] = $alpha;
            $item['count'] = $count;
            $proxy[] = $item;
            $alpha = strtoupper($j->name[0]); 
            $item = array();  
            $count = 0;    
        }
        
        // Individual Modifications
        $list['name'] = $j->name;
        $list['exclusive'] = (in_array($j->name, $exclusives) ? true : false);
        $list['new'] = (in_array($j->name, $new) ? true : false);
        $item['items'][] = $list;
        $count++;
        

    }
    $item['alpha'] = $alpha;
    $item['count'] = $count;
    $proxy[] = $item;
    
    echo json_encode($proxy);

?>