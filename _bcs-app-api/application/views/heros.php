<?php

header("Access-Control-Allow-Orgin: *");
header("Access-Control-Allow-Methods: *");
header("Content-Type: application/json");

    $options = array(
        'http'=>array(
            'method'=>"GET",
            'header'=>"User-Agent: Mozilla/5.0 (iPad; U; CPU OS 3_2 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko) Version/4.0.4 Mobile/7B334b Safari/531.21.102011-10-16 20:23:10\r\n" // i.e. An iPad 
        )
    );
    $context = stream_context_create($options);

    $html = file_get_html('http://www.backcountry.com/',false,$context);
    $count = 0;
    foreach($html->find('.ui-heroslider-item') as $element){
        $attributes = $element->find('div',0)->class;
        $item[$count]['postType'] = "hero";
        $item[$count]['desktop'] = $element->getAttribute('data-background-image');
        $item[$count]['title'] = $element->find('.header-1', 0)->plaintext;
        $item[$count]['description'] = $element->find('.descrip', 0)->plaintext;
        $item[$count]['cta'] = array();
        foreach($element->find('.btn-revert') as $a){
            $item[$count]['cta'][] = $a->plaintext;
        }
        if(strpos($attributes,'center') !== false) {
            $item[$count]['align'] = "center";
        }elseif(strpos($attributes,'left') !== false){
            $item[$count]['align'] = "left";
        }
        if(strpos($attributes,'contrast') !== false) {
            $item[$count]['color'] = "white";
        }else{
            $item[$count]['color'] = "black";
        }
        $count++;
    }
    
    $option = array(
        'http' => array(
            'method' => 'GET',
            'header' => 'User-Agent: Mozilla/5.0 (iPhone; CPU iPhone OS 5_0 like Mac OS X) AppleWebKit/534.46 (KHTML, like Gecko) Version/5.1 Mobile/9A334 Safari/7534.48.3',
        )
    );
    $context = stream_context_create($option);
    
    $mobile = file_get_html('http://www.backcountry.com/', false, $context);
    
    $count = 0;
    foreach($mobile->find('.ui-heroslider-item') as $element){
        $item[$count]['mobile'] = $element->getAttribute('data-background-image');
        $count++;
    }
    

    echo json_encode($item);

?>