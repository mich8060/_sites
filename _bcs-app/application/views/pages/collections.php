<?php

//$json = json_decode(file_get_contents('http://localhost:8888/app_api/collections'));
$json = json_decode(file_get_contents('http://design.backcountry.com/mobile/services/collections'));

?>
<div class="collections">
    <a href="#" class="hero direct-back" style="display:block;border:None;margin:0;background-image:url(img/layout/HHR_collections.jpg);">
        <img src="img/layout/collections.jpg" class="mobile">
        <div class="copy">
            <div class="headline">Mountain Townie</div>
            <div class="subcopy">Must-Have Summer Looks</div>
        </div>
    </a>

    <?php foreach($json->subcollections as $sub) { ?>
    <div class="subcollection" data=""<?php if($sub->name != "Morning") { echo ' style="display:none;"'; } ?>>
        <div class="caption"><?php echo $sub->name; ?></div>
        <div class="products">
            <?php foreach($sub->skus as $item) { ?>
                <a href="<?php echo $item->sku; ?>" class="direct-product">
                    <div class="image"><img src="<?php echo $item->image; ?>" alt="" /></div>
                    <div class="brand"><?php echo $item->brand; ?></div>
                    <div class="title"><?php echo $item->title; ?></div>
                    <div class="price">$<?php echo number_format($item->lowestListPrice, 2, '.', ''); ?></div>
                </a>
            <?php } ?>
        </div>
        <div class="gap6"></div>
        <div style="text-align:center;">
            <h4 class="uppercase">More From</h4>
            <div>Mountain Townie</div>
            <div class="gap2"></div>
            <div class="categories">
                <img src="img/layout/outfit2_CGD.jpg" style="margin-bottom:1px" />
                <img src="img/layout/outfit3_CGD.jpg" alt="" />
                <img src="img/layout/outfit4_CGD.jpg" alt="" />
            </div>
        </div>
        <div class="gap4"></div>
    </div>
    <?php } ?>
</div>