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
            <div class="copy">Women&rsquo;s Down Jackets</div>
            <div class="ratio five short">
                <div class="content"><img src="img/layout/wmns-jackets-hero.jpeg" alt="" /></div>
            </div>
        </div>
        <div class="product-listing">
            <?php load('components/toolbar.php'); ?>
            <div class="wall">
                <?php load('components/facets.php', $json); ?>
                <div class="wall-container">
                    <!-- #1 -->
                    <a href="pdp" class="listing" exclusive="false" sku="PJM0001" loaded="true">
                        <div class="product-details">
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
                                    <ul class="gallery" data="5">
                                        <li data="3c" class="ratio one regular left" style="background-image:url('http://content.backcountry.com/images/items/900/PJM/PJM0001/RD.jpg');"></li>
                                        <li data="3a" class="ratio one regular selected" style="background-image:url('img/layout/BLK.jpg');"></li>
                                        <li data="3b" class="ratio one regular right" style="background-image:url('http://content.backcountry.com/images/items/900/PJM/PJM0001/AR.jpg');"></li>
                                    </ul>
                                    <div class="swatches overflow">
                                        <div class="swatch" style="background-image:url('http://content.backcountry.com/images/items/900/PJM/PJM0001/RD.jpg');"></div>
                                        <div class="swatch selected" style="background-image:url('img/layout/BLK.jpg');"></div>
                                        <div class="swatch" style="background-image:url('http://content.backcountry.com/images/items/900/PJM/PJM0001/AR.jpg');"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <div class="brand">Parajumpers</div>
                                <div class="product-name">Long Bear Down Jacket - Women's</div>
                                <div class="pricing">
                                    <span class="sale "> sale $989.95</span>
                                    <span class="product-price">$989.95</span>
                                </div> 
                                <rating rate=""></rating>
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
                    <!-- #2 -->
                    <a href="#" class="listing" exclusive="true" sku="NRA003T" loaded="true">
                        <div class="product-details">
                            <div class="favorite">   

                                <svg class="heart" viewBox="-255 334 20 20" version="1.1">
                                    <path class="path-1" stroke-width="1" d="M-245,334c0.5,0,2.6,6.2,3.1,6.6c0.5,0.4,6.7,0.5,6.9,1.1c0.2,0.5-4.8,4.5-5,5.1c-0.2,0.7,1.6,6.9,1.2,7.2 c-0.4,0.3-5.5-3.4-6.2-3.4c-0.7,0-5.7,3.7-6.2,3.4c-0.4-0.3,1.4-6.6,1.2-7.2c-0.2-0.7-5.2-4.6-5-5.1c0.2-0.5,6.4-0.7,6.9-1.1 S-245.5,334-245,334z"></path>
                                    <path class="path-2" stroke-width="1" d="M-245,334c0.5,0,2.6,6.2,3.1,6.6c0.5,0.4,6.7,0.5,6.9,1.1c0.2,0.5-4.8,4.5-5,5.1c-0.2,0.7,1.6,6.9,1.2,7.2 c-0.4,0.3-5.5-3.4-6.2-3.4c-0.7,0-5.7,3.7-6.2,3.4c-0.4-0.3,1.4-6.6,1.2-7.2c-0.2-0.7-5.2-4.6-5-5.1c0.2-0.5,6.4-0.7,6.9-1.1 S-245.5,334-245,334z"></path>
                                </svg>
                            </div>
                            <div class="gallery-container">
                                <div class="exclusive">Exclusive</div>
                                <div class="quickview">
                                    <span class="btn black tiny">Quick View</span>
                                </div>
                                <div class="lazyload">
                                    <ul class="gallery" data="4">
                                        <li data="3c" class="ratio one regular left" style="background-image:url('http://content.backcountry.com/images/items/900/NRA/NRA003T/HOTCL.jpg');"></li>
                                        <li data="3b" class="ratio one regular selected" style="background-image:url('http://content.backcountry.com/images/items/900/NRA/NRA003T/CAV.jpg');"></li>
                                        <li data="3a" class="ratio one regular right" style="background-image:url('http://content.backcountry.com/images/items/900/NRA/NRA003T/OCSWE.jpg');"></li>
                                    </ul>
                                    <div class="swatches overflow">
                                        <div class="swatch" style="background-image:url('http://content.backcountry.com/images/items/900/NRA/NRA003T/HOTCL.jpg');"></div>
                                        <div class="swatch selected" style="background-image:url('http://content.backcountry.com/images/items/900/NRA/NRA003T/CAV.jpg');"></div>
                                        <div class="swatch" style="background-image:url('http://content.backcountry.com/images/items/900/NRA/NRA003T/OCSWE.jpg');"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <div class="brand">Norrøna</div>
                                <div class="product-name">Lyngen Lightweight Down750 Jacket - Women's</div>
                                <div class="pricing">
                                    <span class="sale "> sale $365.00</span>
                                    <span class="product-price">$365.00</span>
                                </div> 
                                <rating rate="5"></rating>
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
                    <!-- #3 -->
                    <a href="#" class="listing" exclusive="false" sku="GLB0002" loaded="true">
                        <div class="product-details">
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
                                    <ul class="gallery" data="2">
                                        <li data="2" class="ratio one regular selected" style="background-image:url('http://content.backcountry.com/images/items/900/GLB/GLB0002/DARMUD.jpg');"></li>
                                        <li class="ratio one regular right" style="background-image:url('http://content.backcountry.com/images/items/900/GLB/GLB0002/SD.jpg');"></li>
                                    </ul>
                                    <div class="swatches overflow">
                                        <div class="swatch selected" style="background-image:url('http://content.backcountry.com/images/items/900/GLB/GLB0002/DARMUD.jpg');"></div>
                                        <div class="swatch" style="background-image:url('http://content.backcountry.com/images/items/900/GLB/GLB0002/SD.jpg');"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <div class="brand">G-Lab</div>
                                <div class="product-name">Montana II Down Jacket - Women's</div>
                                <div class="pricing">
                                    <span class="sale "> sale $837.95</span>
                                    <span class="product-price">$837.95</span>
                                </div> 
                                <rating rate="5"></rating>
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
                    <!-- #4 -->
                    <a href="#" class="listing on-sale" exclusive="false" sku="MAR00LB" loaded="true">
                        <div class="product-details">
                            <div class="discount">25% off</div>
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
                                    <ul class="gallery" data="3">
                                        <li class="ratio one regular left" style="background-image:url('http://content.backcountry.com/images/items/900/MAR/MAR00LB/STE.jpg');"></li>
                                        <li sale="true" data="2" class="ratio one regular selected" style="background-image:url('http://content.backcountry.com/images/items/900/MAR/MAR00LB/MDNV.jpg');"></li>
                                        <li class="ratio one regular right" style="background-image:url('http://content.backcountry.com/images/items/900/MAR/MAR00LB/BK.jpg');"></li>
                                    </ul>
                                    <div class="swatches overflow">
                                        <div class="swatch" style="background-image:url('http://content.backcountry.com/images/items/900/MAR/MAR00LB/STE.jpg');"></div>
                                        <div class="swatch selected" style="background-image:url('http://content.backcountry.com/images/items/900/MAR/MAR00LB/MDNV.jpg');"></div>
                                        <div class="swatch" style="background-image:url('http://content.backcountry.com/images/items/900/MAR/MAR00LB/BK.jpg');"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <div class="brand">Marmot</div>
                                <div class="product-name">Alexie Down Jacket - Women's</div>
                                <div class="pricing">
                                    <span class="sale "> sale $284.95</span>
                                    <span class="product-price">$284.95</span>
                                </div> 
                                <rating rate=""></rating>
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
                    <!-- #5 -->
                    <a href="#" class="listing" exclusive="false" sku="MAR00AH" loaded="true">
                        <div class="product-details">
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
                                    <ul class="gallery" data="3">
                                        <li class="ratio one regular left" style="background-image:url('http://content.backcountry.com/images/items/900/MAR/MAR00AH/DARCN.jpg');"></li>
                                        <li data="2" class="ratio one regular selected" style="background-image:url('http://content.backcountry.com/images/items/900/MAR/MAR00AH/MDPU.jpg');"></li>
                                        <li class="ratio one regular right" style="background-image:url('http://content.backcountry.com/images/items/900/MAR/MAR00AH/BK.jpg');"></li>
                                    </ul>
                                    <div class="swatches overflow">
                                        <div class="swatch" style="background-image:url('http://content.backcountry.com/images/items/900/MAR/MAR00AH/DARCN.jpg');"></div>
                                        <div class="swatch selected" style="background-image:url('http://content.backcountry.com/images/items/900/MAR/MAR00AH/MDPU.jpg');"></div>
                                        <div class="swatch" style="background-image:url('http://content.backcountry.com/images/items/900/MAR/MAR00AH/BK.jpg');"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <div class="brand">Marmot</div>
                                <div class="product-name">Mountain Down Jacket - Women's</div>
                                <div class="pricing">
                                    <span class="sale "> sale $374.95</span>
                                    <span class="product-price">$374.95</span>
                                </div> 
                                <rating rate=""></rating>
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
                    <!-- #6 -->
                    <a href="#" class="listing push-2" exclusive="false" sku="MAR00BW" loaded="true">
                        <div class="product-details">
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
                                    <ul class="gallery" data="3">
                                        <li class="ratio one regular left" style="background-image:url('http://content.backcountry.com/images/items/900/MAR/MAR00BW/BK.jpg');"></li>
                                        <li data="2" class="ratio one regular selected" style="background-image:url('http://content.backcountry.com/images/items/900/MAR/MAR00BW/ARCNV.jpg');"></li>
                                        <li class="ratio one regular right" style="background-image:url('http://content.backcountry.com/images/items/900/MAR/MAR00BW/DARCN.jpg');"></li>
                                    </ul>
                                    <div class="swatches overflow">
                                        <div class="swatch" style="background-image:url('http://content.backcountry.com/images/items/900/MAR/MAR00BW/BK.jpg');"></div>
                                        <div class="swatch selected" style="background-image:url('http://content.backcountry.com/images/items/900/MAR/MAR00BW/ARCNV.jpg');"></div>
                                        <div class="swatch" style="background-image:url('http://content.backcountry.com/images/items/900/MAR/MAR00BW/DARCN.jpg');"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <div class="brand">Marmot</div>
                                <div class="product-name">Alderbrook Down Jacket - Women's</div>
                                <div class="pricing">
                                    <span class="sale "> sale $294.95</span>
                                    <span class="product-price">$294.95</span>
                                </div> 
                                <rating rate=""></rating>
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
                    <!-- #Promo Placement - Double Wide -->
                    <?php include('components/listing-ad.php'); ?>
                    <!-- #7 -->
                    <a href="#" class="listing" exclusive="false" sku="PAT00YV" loaded="true">
                        <div class="product-details">
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
                                    <ul class="gallery" data="3">
                                        <li class="ratio one regular left" style="background-image:url('http://content.backcountry.com/images/items/900/PAT/PAT00YV/OXBRD.jpg');"></li>
                                        <li data="2" class="ratio one regular selected" style="background-image:url('http://content.backcountry.com/images/items/900/PAT/PAT00YV/BK.jpg');"></li>
                                        <li class="ratio one regular right" style="background-image:url('http://content.backcountry.com/images/items/900/PAT/PAT00YV/UNDBL.jpg');"></li>
                                    </ul>
                                    <div class="swatches overflow">
                                        <div class="swatch" style="background-image:url('http://content.backcountry.com/images/items/900/PAT/PAT00YV/OXBRD.jpg');"></div>
                                        <div class="swatch selected" style="background-image:url('http://content.backcountry.com/images/items/900/PAT/PAT00YV/BK.jpg');"></div>
                                        <div class="swatch" style="background-image:url('http://content.backcountry.com/images/items/900/PAT/PAT00YV/UNDBL.jpg');"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <div class="brand">Patagonia</div>
                                <div class="product-name">Ultralight Down Jacket - Women's</div>
                                <div class="pricing">
                                    <span class="sale "> sale $299.00</span>
                                    <span class="product-price">$299.00</span>
                                </div> 
                                <rating rate=""></rating>
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
                    <!-- #8 -->
                    <a href="#" class="listing" exclusive="false" sku="PAT00Q6" loaded="true">
                        <div class="product-details">
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
                                        <li data="3d" class="ratio one regular" style="background-image:url('http://content.backcountry.com/images/items/900/PAT/PAT00Q6/UNDBL.jpg');"></li>
                                        <li data="3d" class="ratio one regular" style="background-image:url('http://content.backcountry.com/images/items/900/PAT/PAT00Q6/SUMRD.jpg');"></li>
                                        <li data="3d" class="ratio one regular" style="background-image:url('http://content.backcountry.com/images/items/900/PAT/PAT00Q6/NVBL.jpg');"></li>
                                        <li data="3c" class="ratio one regular left" style="background-image:url('http://content.backcountry.com/images/items/900/PAT/PAT00Q6/CONPU.jpg');"></li>
                                        <li data="3a" class="ratio one regular selected" style="background-image:url('http://content.backcountry.com/images/items/900/PAT/PAT00Q6/FEAGRE.jpg');"></li>
                                        <li data="3b" class="ratio one regular right" style="background-image:url('http://content.backcountry.com/images/items/900/PAT/PAT00Q6/ANDBL.jpg');"></li>
                                        <li data="3d" class="ratio one regular" style="background-image:url('http://content.backcountry.com/images/items/900/PAT/PAT00Q6/TAIGRE.jpg');"></li>
                                        <li data="3d" sale="true" class="ratio one regular" style="background-image:url('http://content.backcountry.com/images/items/900/PAT/PAT00Q6/COCRD.jpg');"></li>
                                    </ul>
                                    <div class="swatches overflow">
                                        <div class="swatch" style="background-image:url('http://content.backcountry.com/images/items/900/PAT/PAT00Q6/UNDBL.jpg');"></div>
                                        <div class="swatch" style="background-image:url('http://content.backcountry.com/images/items/900/PAT/PAT00Q6/SUMRD.jpg');"></div>
                                        <div class="swatch" style="background-image:url('http://content.backcountry.com/images/items/900/PAT/PAT00Q6/NVBL.jpg');"></div>
                                        <div class="swatch" style="background-image:url('http://content.backcountry.com/images/items/900/PAT/PAT00Q6/CONPU.jpg');"></div>
                                        <div class="swatch selected" style="background-image:url('http://content.backcountry.com/images/items/900/PAT/PAT00Q6/FEAGRE.jpg');"></div>
                                        <div class="swatch" style="background-image:url('http://content.backcountry.com/images/items/900/PAT/PAT00Q6/ANDBL.jpg');"></div>
                                        <div class="swatch" style="background-image:url('http://content.backcountry.com/images/items/900/PAT/PAT00Q6/TAIGRE.jpg');"></div>
                                        <div class="swatch" style="background-image:url('http://content.backcountry.com/images/items/900/PAT/PAT00Q6/COCRD.jpg');"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <div class="brand">Patagonia</div>
                                <div class="product-name">Down Sweater Jacket - Women's</div>
                                <div class="pricing">
                                    <span class="sale "> sale $229.00</span>
                                    <span class="product-price">$229.00</span>
                                </div> 
                                <rating rate=""></rating>
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
                    <!-- #9 -->  
                    <a href="#" class="listing" exclusive="false" sku="HOL002F" loaded="true">
                        <div class="product-details">
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
                                    <ul class="gallery" data="1">
                                        <li data="1" class="ratio one regular selected" style="background-image:url('http://content.backcountry.com/images/items/900/HOL/HOL002F/BK.jpg');"></li>
                                    </ul>
                                    <div class="swatches overflow">
                                        <div class="swatch selected" style="background-image:url('http://content.backcountry.com/images/items/900/HOL/HOL002F/BK.jpg');"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <div class="brand">Holden</div>
                                <div class="product-name">Cumulus Down Jacket - Women's</div>
                                <div class="pricing">
                                    <span class="sale "> sale $199.95</span>
                                    <span class="product-price">$199.95</span>
                                </div> 
                                <rating rate=""></rating>
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
                    <!-- #10 -->  
                    <a href="#" class="listing" exclusive="false" sku="PJM000B" loaded="true">
                        <div class="product-details">
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
                                    <ul class="gallery" data="2">
                                        <li data="2" class="ratio one regular selected" style="background-image:url('http://content.backcountry.com/images/items/900/PJM/PJM000B/ANT.jpg');"></li>
                                        <li class="ratio one regular right" style="background-image:url('http://content.backcountry.com/images/items/900/PJM/PJM000B/BK.jpg');"></li>
                                    </ul>
                                    <div class="swatches overflow">
                                        <div class="swatch selected" style="background-image:url('http://content.backcountry.com/images/items/900/PJM/PJM000B/ANT.jpg');"></div>
                                        <div class="swatch" style="background-image:url('http://content.backcountry.com/images/items/900/PJM/PJM000B/BK.jpg');"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <div class="brand">G-Lab</div>
                                <div class="product-name">Montana II Down Jacket - Women's</div>
                                <div class="pricing">
                                    <span class="sale "> sale $989.95</span>
                                    <span class="product-price">$989.95</span>
                                </div> 
                                <rating rate="0"></rating>
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
                    <!-- #11 -->
                    <a href="#" class="listing" exclusive="false" sku="PAT00HX" loaded="true">
                        <div class="product-details">
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
                                    <ul class="gallery" data="6">
                                        <li data="3d" class="ratio one regular" style="background-image:url('http://content.backcountry.com/images/items/900/PAT/PAT00HX/FEAGRE.jpg');"></li>
                                        <li data="3c" class="ratio one regular left" style="background-image:url('http://content.backcountry.com/images/items/900/PAT/PAT00HX/OXBRD.jpg');"></li>
                                        <li data="3a" class="ratio one regular selected" style="background-image:url('http://content.backcountry.com/images/items/900/PAT/PAT00HX/ARBGN.jpg');"></li>
                                        <li data="3b" class="ratio one regular right" style="background-image:url('http://content.backcountry.com/images/items/900/PAT/PAT00HX/OXBRD.jpg');"></li>
                                        <li data="3d" class="ratio one regular" style="background-image:url('http://content.backcountry.com/images/items/900/PAT/PAT00HX/BK.jpg');"></li>
                                    </ul>
                                    <div class="swatches overflow">
                                        <div class="swatch" style="background-image:url('http://content.backcountry.com/images/items/900/PAT/PAT00HX/FEAGRE.jpg');"></div>
                                        <div class="swatch" style="background-image:url('http://content.backcountry.com/images/items/900/PAT/PAT00HX/OXBRD.jpg');"></div>
                                        <div class="swatch selected" style="background-image:url('http://content.backcountry.com/images/items/900/PAT/PAT00HX/ARBGN.jpg');"></div>
                                        <div class="swatch" style="background-image:url('http://content.backcountry.com/images/items/900/PAT/PAT00HX/OXBRD.jpg');"></div>
                                        <div class="swatch" style="background-image:url('http://content.backcountry.com/images/items/900/PAT/PAT00HX/BK.jpg');"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <div class="brand">Patagonia</div>
                                <div class="product-name">Down Shirt Jacket - Women's</div>
                                <div class="pricing">
                                    <span class="sale "> sale $199.00</span>
                                    <span class="product-price">$199.00</span>
                                </div> 
                                <rating rate=""></rating>
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
                    <!-- #12 -->   
                    <a href="#" class="listing" exclusive="false" sku="TNF00LW" loaded="true">
                        <div class="product-details">
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
                                    <ul class="gallery" data="5">
                                        <li data="3d" class="ratio one regular" style="background-image:url('http://content.backcountry.com/images/items/900/TNF/TNF00LW/TNFBK.jpg');"></li>
                                        <li data="3c" class="ratio one regular left" style="background-image:url('http://content.backcountry.com/images/items/900/TNF/TNF00LW/HIGRISGRE.jpg');"></li>
                                        <li data="3a" class="ratio one regular selected" style="background-image:url('http://content.backcountry.com/images/items/900/TNF/TNF00LW/GARPU.jpg');"></li>
                                        <li data="3b" class="ratio one regular right" style="background-image:url('http://content.backcountry.com/images/items/900/TNF/TNF00LW/GARPU.jpg');"></li>
                                    </ul>
                                    <div class="swatches overflow">
                                        <div class="swatch" style="background-image:url('http://content.backcountry.com/images/items/900/TNF/TNF00LW/TNFBK.jpg');"></div>
                                        <div class="swatch" style="background-image:url('http://content.backcountry.com/images/items/900/TNF/TNF00LW/HIGRISGRE.jpg');"></div>
                                        <div class="swatch selected" style="background-image:url('http://content.backcountry.com/images/items/900/TNF/TNF00LW/GARPU.jpg');"></div>
                                        <div class="swatch" style="background-image:url('http://content.backcountry.com/images/items/900/TNF/TNF00LW/GARPU.jpg');"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <div class="brand">The North Face</div>
                                <div class="product-name">Quince Down Jacket - Women's</div>
                                <div class="pricing">
                                    <span class="sale "> sale $248.95</span>
                                    <span class="product-price">$248.95</span>
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
                    <!-- #Promo Placement - Single Wide -->
                    <?php include('components/listing-ad-single.php'); ?>
                    <!-- #13 --> 
                    <a href="#" class="listing pull-1" exclusive="false" sku="ODR002Y" loaded="true">
                        <div class="product-details">
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
                                    <ul class="gallery" data="3">
                                        <li class="ratio one regular left" style="background-image:url('http://content.backcountry.com/images/items/900/ODR/ODR002Y/BK.jpg');"></li>
                                        <li data="2" class="ratio one regular selected" style="background-image:url('http://content.backcountry.com/images/items/900/ODR/ODR002Y/DESSUN.jpg');"></li>
                                        <li class="ratio one regular right" style="background-image:url('http://content.backcountry.com/images/items/900/ODR/ODR002Y/ORC.jpg');"></li>
                                    </ul>
                                    <div class="swatches overflow">
                                        <div class="swatch" style="background-image:url('http://content.backcountry.com/images/items/900/ODR/ODR002Y/BK.jpg');"></div>
                                        <div class="swatch selected" style="background-image:url('http://content.backcountry.com/images/items/900/ODR/ODR002Y/DESSUN.jpg');"></div>
                                        <div class="swatch" style="background-image:url('http://content.backcountry.com/images/items/900/ODR/ODR002Y/ORC.jpg');"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <div class="brand">The North Face</div>
                                <div class="product-name">Filament Down Jacket - Women's</div>
                                <div class="pricing">
                                    <span class="sale "> sale $264.95</span>
                                    <span class="product-price">$264.95</span>
                                </div> 
                                <rating rate="3"></rating>
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
                    <!-- #14 --> 
                    <a href="#" class="listing" exclusive="false" sku="MAR2866" loaded="true">
                        <div class="product-details">
                            <div class="discount">26% off</div>
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
                                    <ul class="gallery" data="4">
                                        <li data="3c" sale="true" class="ratio one regular left" style="background-image:url('http://content.backcountry.com/images/items/900/MAR/MAR2866/BK.jpg');"></li>
                                        <li data="3a" sale="true" class="ratio one regular selected" style="background-image:url('http://content.backcountry.com/images/items/900/MAR/MAR2866/STEONY.jpg');"></li>
                                        <li data="3b" class="ratio one regular right" style="background-image:url('http://content.backcountry.com/images/items/900/MAR/MAR2866/DARCN.jpg');"></li>
                                    </ul>
                                    <div class="swatches overflow">
                                        <div class="swatch" style="background-image:url('http://content.backcountry.com/images/items/900/MAR/MAR2866/BK.jpg');"></div>
                                        <div class="swatch selected" style="background-image:url('http://content.backcountry.com/images/items/900/MAR/MAR2866/STEONY.jpg');"></div>
                                        <div class="swatch" style="background-image:url('http://content.backcountry.com/images/items/900/MAR/MAR2866/DARCN.jpg');"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <div class="brand">Marmot</div>
                                <div class="product-name">Montreal Down Coat - Women's</div>
                                <div class="pricing">
                                    <span class="sale long">from sale $284.95</span>
                                    <span class="product-price">$210.14</span>
                                </div> 
                                <rating rate=""></rating>
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
                    <!-- #15 -->
                    <a href="#" class="listing on-sale" exclusive="false" sku="MAR2847" loaded="true">
                        <div class="product-details">
                            <div class="discount">40% off</div>
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
                                    <ul class="gallery" data="1">
                                        <li sale="true" data="1" class="ratio one regular selected" style="background-image:url('http://content.backcountry.com/images/items/900/MAR/MAR2847/BK.jpg');"></li>
                                    </ul>
                                    <div class="swatches overflow">
                                        <div class="swatch selected" style="background-image:url('http://content.backcountry.com/images/items/900/MAR/MAR2847/BK.jpg');"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <div class="brand">Marmot</div>
                                <div class="product-name">Quasar Hooded Down Jacket - Women's</div>
                                <div class="pricing">
                                    <span class="sale "> sale $349.95</span>
                                    <span class="product-price">$209.97</span>
                                </div> 
                                <rating rate=""></rating>
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
                    <!-- #16 -->
                    <a href="#" class="listing" exclusive="false" sku="SPD006A" loaded="true">
                        <div class="product-details">
                            <div class="favorite">   

                                <svg class="heart" viewBox="-255 334 20 20" version="1.1">
                                    <path class="path-1" stroke-width="1" d="M-245,334c0.5,0,2.6,6.2,3.1,6.6c0.5,0.4,6.7,0.5,6.9,1.1c0.2,0.5-4.8,4.5-5,5.1c-0.2,0.7,1.6,6.9,1.2,7.2 c-0.4,0.3-5.5-3.4-6.2-3.4c-0.7,0-5.7,3.7-6.2,3.4c-0.4-0.3,1.4-6.6,1.2-7.2c-0.2-0.7-5.2-4.6-5-5.1c0.2-0.5,6.4-0.7,6.9-1.1 S-245.5,334-245,334z"></path>
                                    <path class="path-2" stroke-width="1" d="M-245,334c0.5,0,2.6,6.2,3.1,6.6c0.5,0.4,6.7,0.5,6.9,1.1c0.2,0.5-4.8,4.5-5,5.1c-0.2,0.7,1.6,6.9,1.2,7.2 c-0.4,0.3-5.5-3.4-6.2-3.4c-0.7,0-5.7,3.7-6.2,3.4c-0.4-0.3,1.4-6.6,1.2-7.2c-0.2-0.7-5.2-4.6-5-5.1c0.2-0.5,6.4-0.7,6.9-1.1 S-245.5,334-245,334z"></path>
                                </svg>
                            </div>
                            <div class="gallery-container focus-on-selected">
                                <div class="quickview">
                                    <span class="btn black tiny">Quick View</span>
                                </div>
                                <div class="lazyload">
                                    <ul class="gallery" data="1">
                                        <li data="1" class="ratio one regular selected" style="background-image:url('http://content.backcountry.com/images/items/900/SPD/SPD006A/BKMELFAB.jpg');"></li>
                                    </ul>
                                    <div class="swatches overflow">
                                        <div class="swatch selected" style="background-image:url('http://content.backcountry.com/images/items/900/SPD/SPD006A/BKMELFAB.jpg');"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <div class="brand">Spyder</div>
                                <div class="product-name">Aimie Down Jacket - Women's</div>
                                <div class="pricing">
                                    <span class="sale "> sale $548.95</span>
                                    <span class="product-price">$548.95</span>
                                </div> 
                                <rating rate=""></rating>
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
                    <!-- #17 -->
                    <a href="#" class="listing on-sale" exclusive="false" sku="PAT3102" loaded="true">
                        <div class="product-details">
                            <div class="discount">45% off</div>
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
                                    <ul class="gallery" data="1">
                                        <li sale="true" data="1" class="ratio one regular selected" style="background-image:url('http://content.backcountry.com/images/items/900/PAT/PAT3102/BK.jpg');"></li>
                                    </ul>
                                    <div class="swatches overflow">
                                        <div class="swatch selected" style="background-image:url('http://content.backcountry.com/images/items/900/PAT/PAT3102/BK.jpg');"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <div class="brand">Patagonia</div>
                                <div class="product-name">Ultralight Down Hooded Jacket - Women's</div>
                                <div class="pricing">
                                    <span class="sale "> sale $349.00</span>
                                    <span class="product-price">$191.95</span>
                                </div> 
                                <rating rate=""></rating>
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