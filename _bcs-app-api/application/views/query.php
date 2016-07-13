<?php

$options = array(
    'http'=>array(
        'method'=>"GET",
        'header'=>"User-Agent: Mozilla/5.0 (iPad; U; CPU OS 3_2 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko) Version/4.0.4 Mobile/7B334b Safari/531.21.102011-10-16 20:23:10\r\n" // i.e. An iPad 
    )
);


// size%3Asmall

$context = stream_context_create($options);
$search = $this->uri->segment(2);
$offset = $this->uri->segment(3);
$limit = $this->uri->segment(4);
$sizes = $this->uri->segment(5);

if(isset($limit) && $limit != ""){
    $search .= "?limit=".$limit;
}
if(isset($offset) && $offset != ""){
    $search .= "&offset=".$offset;
}
if(isset($sizes) && $sizes != ""){
    $search .= "&".$offset;
}

echo $search;

$json = json_decode(file_get_contents("https://api.backcountry.com/mobile/products/search/".$search."&size%3Asmall",false,$context));
$svg = "M-245,334c0.5,0,2.6,6.2,3.1,6.6c0.5,0.4,6.7,0.5,6.9,1.1c0.2,0.5-4.8,4.5-5,5.1c-0.2,0.7,1.6,6.9,1.2,7.2 c-0.4,0.3-5.5-3.4-6.2-3.4c-0.7,0-5.7,3.7-6.2,3.4c-0.4-0.3,1.4-6.6,1.2-7.2c-0.2-0.7-5.2-4.6-5-5.1c0.2-0.5,6.4-0.7,6.9-1.1 S-245.5,334-245,334z";

foreach($json->products as $p){
    
    
    if($p->onSale){ 
        $sale = ' sale="true"'; 
        $onsale = ' on-sale';
    }else{ 
        $sale = "";
        $onsale = '';
    }
?>

<a href="#" class="listing<?php echo $onsale; ?>" exclusive="false" sku="<?php echo $p->id; ?>">
    <div class="details">
        <?php if($p->onSale){  ?>
            <div class="discount"><?php echo $p->percentOff; ?>% off</div>
        <?php } ?>
        <?php if($p->storeCredits > 0) { ?>
            <div class="credits">$50 Credit</div>
        <?php } ?>
        <div class="favorite">  
            <svg class="heart" viewBox="-255 334 20 20" version="1.1">
                <path class="path-1" stroke-width="1" d="<?php echo $svg; ?>" />
                <path class="path-2" stroke-width="1" d="<?php echo $svg; ?>" />
            </svg>
        </div>
        <div class="gallery-container">
            <?php if($p->brand->name == "Basin and Range" || $p->brand->name == "Norrøna") { ?>
                <div class="exclusive">Exclusive</div>
            <?php } ?>
            <div class="quickview">
                <span class="btn black tiny">Quick View</span>
            </div>
            <div class="lazyload">
                <ul class="gallery">
                    <li<?php echo $sale; ?> class="ratio one regular selected" style="background-image:url('<?php echo $p->thumbnail; ?>');"></li>
                </ul>
                <div class="color-facet"></div>
                <div class="swatches overflow">
                    <div class="swatch selected" style="background-image:url('<?php echo $p->thumbnail; ?>');"></div>
                </div>

            </div>
        </div>
        <div class="info">
            <div class="brand"><?php echo $p->brand->name; ?></div>
            <div class="name"><?php echo $p->title; ?></div>
            <div class="pricing">
                <span class="sale">sale $<?php echo number_format($p->lowestListPrice, 2); ?></span>
                <span class="price">$<?php echo number_format($p->lowestSalePrice, 2); ?></span>
            </div> 
        </div>
    </div>
</a>

<?php
    }
?>