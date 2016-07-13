<?php

if(gettype($data) == 'array'){
    $object = new stdClass();
    foreach ($data as $key => $value){
        if(gettype($value) == 'array'){
            $obj = new stdClass();
            foreach($value as $k => $v){
                $obj->$k = $v;
            }
            $object->$key = $obj;
        }else{
            $object->$key = $value; 
        }
    }
    $data = $object;
}

if($data->onSale){ 
    $sale = ' sale="true"'; 
    $onsale = ' on-sale';
}else{ 
    $sale = "";
    $onsale = '';
}

$svg = "M-245,334c0.5,0,2.6,6.2,3.1,6.6c0.5,0.4,6.7,0.5,6.9,1.1c0.2,0.5-4.8,4.5-5,5.1c-0.2,0.7,1.6,6.9,1.2,7.2 c-0.4,0.3-5.5-3.4-6.2-3.4c-0.7,0-5.7,3.7-6.2,3.4c-0.4-0.3,1.4-6.6,1.2-7.2c-0.2-0.7-5.2-4.6-5-5.1c0.2-0.5,6.4-0.7,6.9-1.1 S-245.5,334-245,334z";

if($data->brand->name == "Basin and Range" || $data->brand->name == "Norrøna" || $data->brand->name == "Basin and Range - Backcountry Exclusive") {
    $exclusives = 'true';
}else{
    $exclusives = 'false';
}

?>

<a href="#" class="listing<?php echo $onsale; ?>" exclusive="<?php echo $exclusives; ?>" sku="<?php echo $data->id; ?>">
    <?php if($data->label){ echo '<div class="pli-label">'.$data->label.'</div>'; } ?>
    <div class="product-details">
        <?php if($data->onSale){  ?>
            <div class="discount"><?php echo $data->percentOff; ?>% off</div>
        <?php } ?>
        <?php if($data->storeCredits > 0) { ?>
            <div class="credits">$50 Credit</div>
        <?php } ?>
        <?php if($data->favorite){ ?>
        <div class="favorite active">
        <?php }else{ ?>
        <div class="favorite">   
        <?php } ?>  
            <svg class="heart" viewBox="-255 334 20 20" version="1.1">
                <path class="path-1" stroke-width="1" d="<?php echo $svg; ?>" />
                <path class="path-2" stroke-width="1" d="<?php echo $svg; ?>" />
            </svg>
        </div>
        <div class="gallery-container">
            <?php if($data->brand->name == "Basin and Range" || $data->brand->name == "Norrøna" || $data->brand->name == "Basin and Range - Backcountry Exclusive") { ?>
                <div class="exclusive">Exclusive</div>
            <?php } ?>
            <div class="quickview">
                <span class="btn black tiny">Quick View</span>
            </div>
            <div class="lazyload">
                <ul class="gallery">
                    <li<?php echo $sale; ?> class="ratio one regular selected" style="background-image:url('<?php echo $data->thumbnail; ?>');"></li>
                </ul>
                <div class="color-facet"></div>
                <div class="swatches overflow">
                    <div class="swatch selected" style="background-image:url('<?php echo $data->thumbnail; ?>');"></div>
                </div>

            </div>
        </div>
        <div class="info">
            <div class="brand"><?php echo $data->brand->name; ?></div>
            <div class="product-name"><?php echo $data->title; ?></div>
            <div class="pricing">
                <span class="sale <?php if($data->hasDifferentPrices){ echo "long"; } ?>"><?php if($data->hasDifferentPrices){ echo "from"; } ?> sale $<?php echo number_format($data->lowestListPrice, 2); ?></span>
                <span class="product-price">$<?php echo number_format($data->lowestSalePrice, 2); ?></span>
            </div> 
            <rating rate="<?php echo $data->rating; ?>"></rating>
            <?php if($data->gift){ ?>
                <div class="gift">Free Gift with Purchase</div>
            <?php  } ?>
        </div>
    </div>
    <?php load('components/product_placeholder.php'); ?>
</a>

