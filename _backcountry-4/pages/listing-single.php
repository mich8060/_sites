<?php

$options = array(
    'http'=>array(
        'method'=>"GET",
        'header'=>"User-Agent: Mozilla/5.0 (iPad; U; CPU OS 3_2 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko) Version/4.0.4 Mobile/7B334b Safari/531.21.102011-10-16 20:23:10\r\n" // i.e. An iPad 
    )
);

$context = stream_context_create($options);
$json = json_decode(file_get_contents("https://api.backcountry.com/mobile/products/search/womens%20down%20jackets?limit=100",false,$context));

?>
<div class="promo">
    <div class="ratio five short">
        <div class="content"><img src="img/layout/pli_promo.jpg" alt="" /></div>
    </div>
</div>
<div class="product-listing">
    <?php load('components/facets.php', $json); ?>
    <?php load('components/toolbar.php'); ?>
    <div class="wall">

        <div class="wall-container">
            <?php
                
                $data = array(
                    "id" => "IND0007",
                    "title" => "Cozy Melange Tunic Sweater - Women's",
                    "brand" => array(
                        "name" => "Indigenous Designs"
                    ),
                    "lowestListPrice" => 195.95,
                    "lowestSalePrice" => 195.95,
                    "onSale" => 0,
                    "percentOff" => 0,
                    "storeCredits" => 0,
                    "thumbnail" => "http://content.backcountry.com/images/items/900/IND/IND0007/BKGRA.jpg",
                    "isOutlet" => 0,
                    "rating" => 3               
                );

                load('components/listing-block.php', $data);
            
                $count = 0;
                foreach($json->products as $p){
                    if($count == 5){
                        echo '<div class="clear"></div>';
                    }
                    if($count == 6){
                        include('components/listing-ad.php');
                    }
                    
                    if($count == 18){
                        include('components/listing-ad-single.php');
                    }
                    load('components/listing-block.php',$p);
                    $count++;
                }
            ?>
            <div class="clear"></div>
        </div>
    </div>    
    <div class="gap3"></div>
</div>