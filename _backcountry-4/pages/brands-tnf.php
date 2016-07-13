<div class="brand-hero ratio two short" style="background-image:url(img/layout/TNF.jpg);background-size:100% auto !important;background-position:center center;">
    <div class="overlay"></div>
    <div class="content">
        <div class="message"><img src="img/layout/TNF.png" alt="" /></div>
    </div>
</div>
<subnav>
    <ul class="subnav">
        <?php
        foreach($fixnav as $key => $value){
            echo '<li>';
            echo '<a href="#">'.$key.'</a>';
            echo '<ul>';
            foreach($value as $v){
                echo '<li><a href="#">'.$v.'</a></li>';
            }
            echo '</ul>';
            echo '</li>';
        }

        ?>
    </ul>   
    <div class="clear"></div>
</subnav>
<div class="gap2"></div>
<div class="container large top4 bottom4">
    <div class="cols-2">
        <div class="ratio two regular" style="background-image:url(http://content.backcountry.com/promo_upload/bcs/2015/32624/HR.jpg);background-size:cover;">
            <div style="background:rgba(34,34,34,0.2);top:0;bottom:0;left:0;right:0;position:absolute;z-index:99999;"></div>
            <div class="content" style="color:#fff;text-align:center;z-index:999999;">
                <div style="width:220px;margin:80px auto;">
                    <div style="letter-spacing:-0.02em;font-weight:700;font-size:36px;line-height:32px;margin-bottom:10px;">New Jackets By The North Face</div>
                    <div class="btn transparent small" style="margin:0;">Shop Now</div>
                </div>
            </div>
        </div>
    </div>
    <div class="cols-2">
        <div class="ratio two regular" style="background-image:url(http://content.backcountry.com/promo_upload/bcs/2015/33991/HR.jpg);background-size:cover;">
            <div style="background:rgba(34,34,34,0.2);top:0;bottom:0;left:0;right:0;position:absolute;z-index:99999;"></div>
            <div class="content" style="color:#fff;text-align:right;z-index:999999;">
                <div style="margin:80px 20px;">
                    <div style="letter-spacing:-0.02em;font-weight:700;font-size:36px;line-height:32px;">Every Condition, Any Line</div>
                    <div style="font-size:21px;margin-bottom:10px;">The North Face Steep Series</div>
                    <div class="btn transparent small" style="margin:0;">Shop Now</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container large top4 bottom4 mobile-promo" style="display:None;">
    <div class="cols-2">
        <div class="ratio two regular" style="background-image:url(http://content.backcountry.com/promo_upload/bcs/2015/32624/HR.jpg);background-size:cover;">
            <div style="background:rgba(34,34,34,0.2);top:0;bottom:0;left:0;right:0;position:absolute;z-index:99999;"></div>
            <div class="content" style="color:#fff;text-align:center;z-index:999999;">
                <div style="width:220px;margin:80px auto;">
                    <div style="letter-spacing:-0.02em;font-weight:700;font-size:36px;line-height:32px;margin-bottom:10px;">New Jackets By The North Face</div>
                    <div class="btn transparent small" style="margin:0;">Shop Now</div>
                </div>
            </div>
        </div>
    </div>
    <div class="cols-2">
        <div class="ratio two regular" style="background-image:url(http://content.backcountry.com/promo_upload/bcs/2015/33991/HR.jpg);background-size:cover;">
            <div style="background:rgba(34,34,34,0.2);top:0;bottom:0;left:0;right:0;position:absolute;z-index:99999;"></div>
            <div class="content" style="color:#fff;text-align:right;z-index:999999;">
                <div style="margin:80px 20px;">
                    <div style="letter-spacing:-0.02em;font-weight:700;font-size:36px;line-height:32px;">Every Condition, Any Line</div>
                    <div style="font-size:21px;margin-bottom:10px;">The North Face Steep Series</div>
                    <div class="btn transparent small" style="margin:0;">Shop Now</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="brand-stories">
    <div class="container full">
    <div class="brands-product">
        
        <?php
        
        load('components/listing-text-title.php');
        
        $data = array(
            "id" => "TNF00RX",
            "title" => "Metropolis Down Parka - Women's",
            "brand" => array(
                "name" => "The North Face"
            ),
            "lowestListPrice" => 288.95,
            "lowestSalePrice" => 288.95,
            "onSale" => 0,
            "percentOff" => 0,
            "storeCredits" => 0,
            "thumbnail" => "http://content.backcountry.com/images/items/large/TNF/TNF00RX/FONTGN.jpg",
            "isOutlet" => 0,
            "rating" => 4               
        );

        load('components/listing-block.php', $data);
        
        $data = array(
            "id" => "TNF00RF",
            "title" => "Arctic Down Parka - Women's",
            "brand" => array(
                "name" => "The North Face"
            ),
            "lowestListPrice" => 298.95,
            "lowestSalePrice" => 298.95,
            "onSale" => 0,
            "percentOff" => 0,
            "storeCredits" => 0,
            "thumbnail" => "http://content.backcountry.com/images/items/large/TNF/TNF00RF/VAPGRE.jpg",
            "isOutlet" => 0,
            "rating" => 4               
        );

        load('components/listing-block.php', $data);
        
        $data = array(
            "id" => "TNF02GK",
            "title" => "Brooklyn Down Jacket - Women's",
            "brand" => array(
                "name" => "The North Face"
            ),
            "lowestListPrice" => 278.95,
            "lowestSalePrice" => 278.95,
            "onSale" => 0,
            "percentOff" => 0,
            "storeCredits" => 0,
            "thumbnail" => "http://content.backcountry.com/images/items/large/TNF/TNF02GK/GRAGRE.jpg",
            "isOutlet" => 0,
            "rating" => 5               
        );

        load('components/listing-block.php', $data);
        
        $data = array(
            "id" => "TNF5207",
            "title" => "Denali Fleece Jacket - Women's",
            "brand" => array(
                "name" => "The North Face"
            ),
            "lowestListPrice" => 178.95,
            "lowestSalePrice" => 178.95,
            "onSale" => 0,
            "percentOff" => 0,
            "storeCredits" => 0,
            "thumbnail" => "http://content.backcountry.com/images/items/large/TNF/TNF5207/REHIRIGRHEGR.jpg",
            "isOutlet" => 0,
            "rating" => 5               
        );

        load('components/listing-block.php', $data);
        
        $data = array(
            "id" => "TNF00V3",
            "title" => "ThermoBall Full-Zip Insulated Jacket - Men's",
            "brand" => array(
                "name" => "The North Face"
            ),
            "lowestListPrice" => 198.95,
            "lowestSalePrice" => 198.95,
            "onSale" => 0,
            "percentOff" => 0,
            "storeCredits" => 0,
            "thumbnail" => "http://content.backcountry.com/images/items/large/TNF/TNF00V3/MONBLA.jpg",
            "isOutlet" => 0,
            "rating" => 5               
        );

        load('components/listing-block.php', $data);
        
        $data = array(
            "id" => "TNF01KI",
            "title" => "Aconcagua Down Vest - Women's",
            "brand" => array(
                "name" => "The North Face"
            ),
            "lowestListPrice" => 98.95,
            "lowestSalePrice" => 98.95,
            "onSale" => 0,
            "percentOff" => 0,
            "storeCredits" => 0,
            "thumbnail" => "http://content.backcountry.com/images/items/large/TNF/TNF01KI/GARPU.jpg",
            "isOutlet" => 0,
            "rating" => 5               
        );

        load('components/listing-block.php', $data);
        
        $data = array(
            "id" => "TNF01KH",
            "title" => "Aconcagua Down Jacket - Women's",
            "brand" => array(
                "name" => "The North Face"
            ),
            "lowestListPrice" => 159.95,
            "lowestSalePrice" => 159.95,
            "onSale" => 0,
            "percentOff" => 0,
            "storeCredits" => 0,
            "thumbnail" => "http://content.backcountry.com/images/items/large/TNF/TNF01KH/TNFBK.jpg",
            "isOutlet" => 0,
            "rating" => 5               
        );

        load('components/listing-block.php', $data);
        
        ?>
        
        </div>
        <div class="cols-1 text-center pad4">
            <a href="#" class="btn secondary">Shop All The North Face</a>
        </div>
        <div class="gap2"></div>
    </div>
</div>
