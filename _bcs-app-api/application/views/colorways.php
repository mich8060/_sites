<?php

$options = array(
    'http'=>array(
        'method'=>"GET",
        'header'=>"User-Agent: Mozilla/5.0 (iPad; U; CPU OS 3_2 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko) Version/4.0.4 Mobile/7B334b Safari/531.21.102011-10-16 20:23:10\r\n" // i.e. An iPad 
    )
);
$context = stream_context_create($options);

$sku = $this->uri->segment(2);
$api = 'http://api.backcountry.com/mobile/products/'.$sku;
$json = json_decode(file_get_contents($api,false,$context));

$colorways = array();
$variants = array();


$colorname = '';

foreach($json->skus as $s){
    if($colorname != $s->color->name){
        $colorname = $s->color->name;
        $variants[] = array(
            'name'          =>  $s->color->name,
            'image'         =>  str_replace("/medium/","/900/",$s->image->url),
            'isPastSeason'  =>  $s->isPastSeason,
            'isOutlet'      =>  $s->isOutlet,
            'onSale'        =>  $s->onSale,
            'price'         =>  $s->listPrice,
        ); 
    }
}

$colorways = array("count" => count($variants));
$colorways['variants'] = $variants;   

$image = "";
$swatches = "";
$count = 0;
$halfway = (round(count($variants)) > 9 ? 5 : round(count($variants) / 2));

$tags = explode(" ", $json->categories->name);

foreach($colorways['variants'] as $c){
    if($count <= 9){
        $sale = "";
        if($c["onSale"]){
            $sale = ' sale="true"';
        }
        if(count($variants) > 3){
            if($count == 0){
                $selected_image = '<li data="3a"'.$sale.' class="ratio one regular selected" style="background-image:url(\''.$c["image"].'\');"></li>'."\n";
                $selected_swatches = '<div class="swatch selected" style="background-image:url(\''.$c["image"].'\');"></div>'."\n";      
            }else if($count == ($halfway + 1)){
                $image .= '<li data="3b"'.$sale.' class="ratio one regular right" style="background-image:url(\''.$c["image"].'\');"></li>'."\n";
                $swatches .= '<div class="swatch" style="background-image:url(\''.$c["image"].'\');"></div>'."\n";      
            }else if($count == ($halfway - 1)){
                $image .= '<li data="3c"'.$sale.' class="ratio one regular left" style="background-image:url(\''.$c["image"].'\');"></li>'."\n";
                $swatches .= '<div class="swatch" style="background-image:url(\''.$c["image"].'\');"></div>'."\n";      
            }else if($count == $halfway){
                $image .= $selected_image;
                $swatches .= $selected_swatches;
            }else{
                $image .= '<li data="3d"'.$sale.' class="ratio one regular" style="background-image:url(\''.$c["image"].'\');"></li>'."\n";
                $swatches .= '<div class="swatch" style="background-image:url(\''.$c["image"].'\');"></div>'."\n";        
            }
        }else if(count($variants) == 1){
            $image .= '<li'.$sale.' data="1" class="ratio one regular selected" style="background-image:url(\''.$c["image"].'\');"></li>'."\n";
            $swatches .= '<div class="swatch selected" style="background-image:url(\''.$c["image"].'\');"></div>'."\n";
        }else if(count($variants) == 2){
            if($count == 0){
                $image .= '<li'.$sale.' data="2" class="ratio one regular selected" style="background-image:url(\''.$c["image"].'\');"></li>'."\n";
                $swatches .= '<div class="swatch selected" style="background-image:url(\''.$c["image"].'\');"></div>'."\n";
            }else if($count == 1){
                $image .= '<li'.$sale.' class="ratio one regular right" style="background-image:url(\''.$c["image"].'\');"></li>'."\n";
                $swatches .= '<div class="swatch" style="background-image:url(\''.$c["image"].'\');"></div>'."\n";
            }
        }else if(count($variants) == 3){
            if($count == 0){
                $selected_image = '<li'.$sale.' data="2" class="ratio one regular selected" style="background-image:url(\''.$c["image"].'\');"></li>'."\n";
                $selected_swatches = '<div class="swatch selected" style="background-image:url(\''.$c["image"].'\');"></div>'."\n";
            }else if($count == 1){
                $image .= '<li'.$sale.' class="ratio one regular left" style="background-image:url(\''.$c["image"].'\');"></li>'."\n";
                $swatches .= '<div class="swatch" style="background-image:url(\''.$c["image"].'\');"></div>'."\n";
            }else if($count == 2){
                $image .= $selected_image;
                $swatches .= $selected_swatches;
                $image .= '<li'.$sale.' class="ratio one regular right" style="background-image:url(\''.$c["image"].'\');"></li>'."\n";
                $swatches .= '<div class="swatch" style="background-image:url(\''.$c["image"].'\');"></div>'."\n";
            }
        }else{
            if($count == 0){
                $selected_image = '<li data="4a"'.$sale.' class="ratio one regular selected" style="background-image:url(\''.$c["image"].'\');"></li>'."\n";
                $selected_swatches = '<div class="swatch selected" style="background-image:url(\''.$c["image"].'\');"></div>'."\n";
            }else if($count == 1){
                $image .= '<li data="4b"'.$sale.' class="ratio one regular left" style="background-image:url(\''.$c["image"].'\');"></li>'."\n";
                $swatches .= '<div class="swatch" style="background-image:url(\''.$c["image"].'\');"></div>'."\n";
            }else if($count == 2){
                $image .= $selected_image;
                $swatches .= $selected_swatches;
            }else if($count == 3){
                $image .= '<li data="4c"'.$sale.' class="ratio one regular left" style="background-image:url(\''.$c["image"].'\');"></li>'."\n";
                $swatches .= '<div class="swatch" style="background-image:url(\''.$c["image"].'\');"></div>'."\n";
            }
        }
        $count++;
    }
}



?>

<ul class="gallery" data="<?php echo count($variants); ?>">
    <?php echo $image; ?>
</ul>
<div class="swatches overflow">
    <?php echo $swatches; ?>
</div>
