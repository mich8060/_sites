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

<div class="product-listing">
    <div class="wall">
        <div class="wall-container">

            <?php
            
            $data = array(
                "label" => "Default",
                "id" => "ARC003W",
                "title" => "Cerium SV Hooded Down Jacket - Men's",
                "brand" => array(
                    "name" => "Arc'teryx"
                ),
                "lowestListPrice" => 498.95,
                "lowestSalePrice" => 498.95,
                "onSale" => 0,
                "percentOff" => 0,
                "storeCredits" => 0,
                "thumbnail" => "http://content.backcountry.com/images/items/large/ARC/ARC003W/POS.jpg",
                "isOutlet" => 0,
                "rating"    => 5,
                "hasDifferentPrices" => false, 
                "isPastSeason" => false,           
            );
            
            load('components/listing-block.php', $data);
            
            $data = array(
                "label" => "Sale/Outlet",
                "id" => "DAK00HY",
                "title" => "April Beanie - Women's",
                "brand" => array(
                    "name" => "DAKINE"
                ),
                "lowestListPrice" => 19.95,
                "lowestSalePrice" => 19.95,
                "onSale" => 1,
                "percentOff" => 20,
                "storeCredits" => 0,
                "thumbnail" => "http://content.backcountry.com/images/items/900/DAK/DAK00HY/BK.jpg",
                "isOutlet" => 0,
                "rating"    => 4,
                "hasDifferentPrices" => false, 
                "isPastSeason" => false,               
            );

            load('components/listing-block.php', $data);
            
            $data = array(
                "label" => "Sale/Outlet Range",
                "id" => "MAR2274",
                "title" => "Trestles 15 Sleeping Bag",
                "brand" => array(
                    "name" => "Marmot"
                ),
                "lowestListPrice" => 108.95,
                "lowestSalePrice" => 87.16,
                "onSale" => 1,
                "percentOff" => 20,
                "storeCredits" => 0,
                "thumbnail" => "http://content.backcountry.com/images/items/900/MAR/MAR2274/PEABL.jpg",
                "isOutlet" => 0,
                "rating"    => 4,
                "hasDifferentPrices" => true, 
                "isPastSeason" => false,               
            );

            load('components/listing-block.php', $data);
            
            $data = array(
                "label" => "Credit",
                "id" => "PYR0005",
                "title" => "Fusion Kayak",
                "brand" => array(
                    "name" => "Pyranha"
                ),
                "lowestListPrice" => 998.95,
                "lowestSalePrice" => 998.95,
                "onSale" => 0,
                "percentOff" => 0,
                "storeCredits" => 50,
                "thumbnail" => "http://content.backcountry.com/images/items/900/PYR/PYR0005/YEL.jpg",
                "isOutlet" => 0               
            );

            load('components/listing-block.php', $data);
            
            $data = array(
                "label" => "Gift with Purchase",
                "id" => "BNG0007",
                "title" => "Silver Fork Softshell Jacket - Men's",
                "brand" => array(
                    "name" => "Basin and Range"
                ),
                "lowestListPrice" => 129.95,
                "lowestSalePrice" => 129.95,
                "onSale" => 0,
                "percentOff" => 0,
                "storeCredits" => 0,
                "thumbnail" => "http://content.backcountry.com/images/items/medium/BNG/BNG0007/BL.jpg",
                "isOutlet" => 0,
                "rating"    => 4,
                "hasDifferentPrices" => false, 
                "isPastSeason" => false,
                "gift" => true              
            );

            load('components/listing-block.php', $data);
            
            $data = array(
                "label" => "Single Image",
                "id" => "SIC000Q",
                "title" => "Antarctica Quilted Shirt - Long-Sleeve - Men's",
                "brand" => array(
                    "name" => "Stoic"
                ),
                "lowestListPrice" => 49.95,
                "lowestSalePrice" => 49.95,
                "onSale" => 0,
                "percentOff" => 0,
                "storeCredits" => 0,
                "thumbnail" => "http://content.backcountry.com/images/items/900/SIC/SIC000Q/IND.jpg",
                "isOutlet" => 0               
            );

            load('components/listing-block.php', $data);
            
            $data = array(
                "label" => "Multiple Images",
                "id" => "PRA00B3",
                "title" => "Nadia Dress - Women's",
                "brand" => array(
                    "name" => "prAna"
                ),
                "lowestListPrice" => 88.95,
                "lowestSalePrice" => 88.95,
                "onSale" => 0,
                "percentOff" => 0,
                "storeCredits" => 0,
                "thumbnail" => "http://content.backcountry.com/images/items/large/PRA/PRA00B3/DEETL.jpg",
                "isOutlet" => 0,
                "rating"    => 5           
            );

            load('components/listing-block.php', $data);
            
            $data = array(
                "label" => "Long Product Names",
                "id" => "DAK00HY",
                "title" => "Wyoming Rocky Mountain Maps and Illustrated Trails",
                "brand" => array(
                    "name" => "National Geographic Maps: Trails Illustrated"
                ),
                "lowestListPrice" => 9.95,
                "lowestSalePrice" => 9.95,
                "onSale" => 0,
                "percentOff" => 0,
                "storeCredits" => 0,
                "thumbnail" => "http://content.backcountry.com/images/items/large/NGO/NGO0045/WY.jpg",
                "isOutlet" => 0               
            );

            load('components/listing-block.php', $data);
            
            $data = array(
                "label" => "Exclusive",
                "id" => "BNG000F",
                "title" => "Summit Park Polartec Fleece Hoody - Men's",
                "brand" => array(
                    "name" => "Basin and Range"
                ),
                "lowestListPrice" => 129.95,
                "lowestSalePrice" => 129.95,
                "onSale" => 0,
                "percentOff" => 0,
                "storeCredits" => 0,
                "thumbnail" => "http://content.backcountry.com/images/items/900/BNG/BNG000F/NV.jpg",
                "isOutlet" => 0,
                "rating"    => 5,
                "hasDifferentPrices" => false, 
                "isPastSeason" => false,             
            );

            load('components/listing-block.php', $data);
 
            $data = array(
                "label" => "Favorite Active",
                "id" => "BEL0083",
                "title" => "Sequence Helmet",
                "brand" => array(
                    "name" => "Bell"
                ),
                "lowestListPrice" => 79.95,
                "lowestSalePrice" => 79.95,
                "onSale" => 0,
                "percentOff" => 0,
                "storeCredits" => 0,
                "thumbnail" => "http://content.backcountry.com/images/items/900/BEL/BEL0083/MATTITHER.jpg",
                "isOutlet" => 0,
                "rating"    => 4,
                "hasDifferentPrices" => false, 
                "isPastSeason" => false,
                "favorite" => true             
            );

            load('components/listing-block.php', $data); 
            
            $data = array(
                "label" => "Worst Case",
                "id" => "BNG0001",
                "title" => "Backcountry Exclusive - Wasatch 800 Fill Down Jacket - Men's",
                "brand" => array(
                    "name" => "Basin and Range - Backcountry Exclusive"
                ),
                "lowestListPrice" => 229.95,
                "lowestSalePrice" => 229.95,
                "onSale" => 1,
                "percentOff" => 25,
                "storeCredits" => 0,
                "thumbnail" => "http://content.backcountry.com/images/items/900/BNG/BNG0001/CI.jpg",
                "isOutlet" => 0,   
                "rating"    => 4,
                "hasDifferentPrices" => true,  
                "gift" => true,
                "favorite" => true     
            );

            load('components/listing-block.php', $data);
            
            ?>
            <a href="#" class="listing" exclusive="false" sku="BEL0083" loaded="true">
                <div class="pli-label">Colorways</div>    <div class="product-details">
                    <div class="favorite">   

                        <svg class="heart" viewBox="-255 334 20 20" version="1.1">
                            <path class="path-1" stroke-width="1" d="M-245,334c0.5,0,2.6,6.2,3.1,6.6c0.5,0.4,6.7,0.5,6.9,1.1c0.2,0.5-4.8,4.5-5,5.1c-0.2,0.7,1.6,6.9,1.2,7.2 c-0.4,0.3-5.5-3.4-6.2-3.4c-0.7,0-5.7,3.7-6.2,3.4c-0.4-0.3,1.4-6.6,1.2-7.2c-0.2-0.7-5.2-4.6-5-5.1c0.2-0.5,6.4-0.7,6.9-1.1 S-245.5,334-245,334z"></path>
                            <path class="path-2" stroke-width="1" d="M-245,334c0.5,0,2.6,6.2,3.1,6.6c0.5,0.4,6.7,0.5,6.9,1.1c0.2,0.5-4.8,4.5-5,5.1c-0.2,0.7,1.6,6.9,1.2,7.2 c-0.4,0.3-5.5-3.4-6.2-3.4c-0.7,0-5.7,3.7-6.2,3.4c-0.4-0.3,1.4-6.6,1.2-7.2c-0.2-0.7-5.2-4.6-5-5.1c0.2-0.5,6.4-0.7,6.9-1.1 S-245.5,334-245,334z"></path>
                        </svg>
                    </div>
                    <div class="gallery-container">
                        <div class="quickview">
                            <span class="btn black tiny">Quick View</span>
                        </div>
                        <div class="lazyload">
                            <ul class="gallery" data="9">
                                <li data="3d" class="ratio one regular" style="background-image:url('http://content.backcountry.com/images/items/large/BEL/BEL0083/MATTITHER.jpg');"></li>
                                <li data="3d" class="ratio one regular left" style="background-image:url('http://content.backcountry.com/images/items/large/BEL/BEL0083/MATBKHER.jpg');"></li>
                                <li data="3a" sale="true" class="ratio one regular selected" style="background-image:url('http://content.backcountry.com/images/items/large/BEL/BEL0083/MATBLUACE.jpg');"></li>
                                <li data="3b" class="ratio one regular right" style="background-image:url('http://content.backcountry.com/images/items/large/BEL/BEL0083/MATINFHER.jpg');"></li>
                                <li data="3d" class="ratio one regular" style="background-image:url('http://content.backcountry.com/images/items/large/BEL/BEL0083/MATWHIBUR.jpg');"></li>
                            </ul>
                            <div class="colorways overflow">
                                <div class="colorway" style="background-color:#ccc;"></div>
                                <div class="colorway" style="background-color:#000;"></div>
                                <div class="colorway selected" style="background-color:#369;"></div>
                                <div class="colorway" style="background-color:#f93;"></div>
                                <div class="colorway" style="background-color:#ccc;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="info">
                        <div class="brand">Bell</div>
                        <div class="product-name">Sequence Helmet</div>
                        <div class="pricing">
                            <span class="sale "> sale $79.95</span>
                            <span class="product-price">$79.95</span>
                        </div> 
                        <rating rate="4"></rating>
                    </div>
                </div>
                <div class="placeholder-product">
                    <div class="placeholder-gallery">
                        <div class="placeholder-gallery-container">
                            <div class="ratio one regular">
                                <div class="content">Image Placeholder</div>
                            </div>
                        </div>
                    </div>
                    <div class="placeholder-info">
                        <div class="placeholder-brand">Brand Placeholder</div>
                        <div class="placeholder-name">Title Placeholder</div>
                        <div class="placeholder-pricing">
                            <span class="placeholder-sale">Sale Placeholder</span>
                            <span class="placeholder-price">Price Placeholder</span>
                        </div>     
                        <rating rate="5"></rating>
                    </div>
                </div>
            </a>
            <div class="clear"></div>
        </div>
    </div>    
    <div class="gap3"></div>
</div>