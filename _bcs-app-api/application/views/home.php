<?php
header("Access-Control-Allow-Orgin: *");
header("Access-Control-Allow-Methods: *");
header("Content-Type: application/json");

function curl_get_contents($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL,$url);
    $result = curl_exec($ch);
    curl_close($ch);
    
    return json_decode(json_encode(json_decode($result, true)));
}

$options = array(
    'http'=>array(
        'method'=>"GET",
        'header'=>"User-Agent: Mozilla/5.0 (iPad; U; CPU OS 3_2 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko) Version/4.0.4 Mobile/7B334b Safari/531.21.102011-10-16 20:23:10\r\n" // i.e. An iPad 
    )
);
$context = stream_context_create($options);

        
        $articles = $instagram = $video = $products = $promo = $goatworthy = $feed = array();
        
        $best = array(
            "postType"  =>  "bestSellers",
            "products"  =>  array(
                array(
                    "image" => "http://www.backcountry.com/images/items/medium/TNF/TNF013X/MONBL.jpg",
                    "brand" =>  "The North Face ",
                    "title" =>  "Cyclone Hooded Jacket - Men's",
                    "price" =>  59.95,
                    "rating"=>  2,
                    "sku"   =>  "TNF013X"
                ),
                array(
                    "image" => "http://www.backcountry.com/images/items/medium/TNF/TNF00EY/CERPK.jpg",
                    "brand" =>  "The North Face ",
                    "title" =>  "Osito 2 Fleece Jacket - Women's",
                    "price" =>  98.95,
                    "rating"=>  4,
                    "sku"   =>  "TNF00EY"
                ),
                array(
                    "image" => "http://www.backcountry.com/images/items/medium/TNF/TNF5507/TNFBLAPK.jpg",
                    "brand" =>  "The North Face ",
                    "title" =>  "Denali Thermal Fleece Jacket - Girls'",
                    "price" =>  98.95,
                    "rating"=>  4,
                    "sku"   =>  "TNF550"
                ),
                array(
                    "image" => "http://www.backcountry.com/images/items/medium/TNF/TNF3006/ACRORABN.jpg",
                    "brand" =>  "The North Face ",
                    "title" =>  "Base Camp Duffel Bag - 1525 - 9460cu in",
                    "price" =>  169.95,
                    "rating"=>  5,
                    "sku"   =>  "TNF3006"
                ),
                array(
                    "image" => "http://www.backcountry.com/images/items/medium/TNF/TNF00BQ/STRBLUGRE.jpg",
                    "brand" =>  "The North Face ",
                    "title" =>  "Furnace Sleeping Bag: 20 Degree Down",
                    "price" =>  189.95,
                    "rating"=>  4,
                    "sku"   =>  "TNF00BQ"
                )
            )
        );
        
        for($y = 0; $y <= 1;$y++){
            $json = json_decode(file_get_contents('http://api.backcountry.com/mobile/posts/'.$y, false, $context));
            
            if(!$y){ 
                $products = $json->products->newArrivals;
                foreach($products as $p){
                    $p->postType = 'products';
                }
            }
            $count = 0;
    		foreach($json->posts as $j){
    		    if($j->postType == "articles"){
    		        $articles[] = $j;
                }elseif($j->postType == "instagram"){ 
                    $instagram[] = $j;
                }elseif($j->postType == "videos"){ 
                    $video[] = $j;
                }elseif($j->postType == "promotion"){ 
                    $promo[] = $j;
                }elseif($j->postType == "goatworthy"){
                    $goatworthy[] = $j;
                }
            }
            foreach($promo as $p){
                if($p->type == 1){
                    $deeplink = $p->target;
                    $deeplink = str_replace("backcountry://", "", $deeplink)."";
                    $deeplink = explode("/", $deeplink);
                    $deeplink = array(
                        "search"    => $deeplink[0],
                        "term"      => $deeplink[1]
                    );
                    $p->search = $deeplink;
                }
            }
        }
        
        $hero = json_decode(file_get_contents('http://design.backcountry.com/mobile/services/heros'));
        
        if(isset($best)) { $feed[] = $best; }
        for($x = 0;$x <= 4;$x++){
            if(isset($articles[$x])) { $feed[] = $articles[$x]; }
            if(isset($products[$x])) { $feed[] = $products[$x]; }
            if(isset($hero[$x])) { $feed[] = $hero[$x]; }
            if(isset($promo[$x])) { $feed[] = $promo[$x]; }
            if(isset($instagram[$x])) { $feed[] = $instagram[$x]; }
            if(isset($goatworthy[$x])) { $feed[] = $goatworthy[$x]; }
            //if(isset($video[$x])) { $feed[] = $video[$x]; }
        }
        
        echo json_encode($feed);

?>
