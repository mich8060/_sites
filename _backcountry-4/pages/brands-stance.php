<div class="brand-hero ratio two tiny" style="background:#fff;margin-bottom:-50px;">
    <div class="content">
        <div class="message"><img src="img/layout/stance.png" alt="" /></div>
    </div>
</div>
<subnav class="no-border">
    <ul class="subnav">
        <li>
            <a href="#">Men</a>
            <ul>
                <li><a href="#">Men's Vests</a></li>
                <li><a href="#">Men's Casual Pants</a></li>
                <li><a href="#">Men's Shirts</a></li>
                <li><a href="#">Men's Accessories</a></li>
                <li><a href="#">Men's Hoodies &amp; Sweatshirts</a></li>
            </ul>
        </li>
        <li>
            <a href="#">Women</a>
            <ul>
                <li><a href="#">Women's Vests</a></li>
                <li><a href="#">Women's Tops</a></li>
            </ul>
        </li>
        <li>
            <a href="#">Kids</a>
            <ul>
                <li><a href="#">Women's Dresses</a></li>
            </ul>
        </li>
        <li>
            <a href="#">Footwear</a>
            <ul>
                <li><a href="#">Hiking Socks</a></li>
                <li><a href="#">Hats, Caps &amp; Beanies</a></li>
                <li><a href="#">Men's Accessories</a></li>
                <li><a href="#">Women's Accessories</a></li>
            </ul>
        </li>
        <li>
            <a href="#">Accessories</a>
            <ul>
                <li><a href="#">Hiking Socks</a></li>
                <li><a href="#">Hats, Caps &amp; Beanies</a></li>
                <li><a href="#">Men's Accessories</a></li>
                <li><a href="#">Women's Accessories</a></li>
            </ul>
        </li>
        <li>
            <a href="#">Fitness</a>
            <ul>
                <li><a href="#">Laptop Packs &amp; Bags</a></li>
                <li><a href="#">Weather Resistant Duffel Bags</a></li>
            </ul>
        </li>
        <li>
            <a href="#">Run</a>
            <ul>
                <li><a href="#">Laptop Packs &amp; Bags</a></li>
                <li><a href="#">Weather Resistant Duffel Bags</a></li>
            </ul>
        </li>
    </ul>   
    <div class="clear"></div>
</subnav>
<div class="gap3"></div>
<div class="brand-stories">
    <div class="container full">
    <div class="brands-product">
        
        <?php
        
        load('components/listing-text-title.php');
        
        $options = array(
            'http'=>array(
                'method'=>"GET",
                'header'=>"User-Agent: Mozilla/5.0 (iPad; U; CPU OS 3_2 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko) Version/4.0.4 Mobile/7B334b Safari/531.21.102011-10-16 20:23:10\r\n" // i.e. An iPad 
            )
        );

        $context = stream_context_create($options);
        $json = json_decode(file_get_contents("https://api.backcountry.com/mobile/products/search/stance?limit=7",false,$context));
        
        foreach($json->products as $p){
            load('components/listing-block.php',$p);
        }
        
        
        
        ?>
        </div>
        <div class="cols-1 text-center pad4">
            <a href="#" class="btn secondary">Shop All Stance</a>
        </div>
        <div class="gap2"></div>
    </div>
</div>
