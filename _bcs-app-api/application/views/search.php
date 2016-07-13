<?php

$identifier = strtolower(mysql_real_escape_string($this->uri->segment(2)));

$options = array(
    'http'=>array(
        'method'=>"GET",
        'header'=>"User-Agent: Mozilla/5.0 (iPad; U; CPU OS 3_2 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko) Version/4.0.4 Mobile/7B334b Safari/531.21.102011-10-16 20:23:10\r\n" // i.e. An iPad 
    )
);
$context = stream_context_create($options);

$json = json_decode(file_get_contents("https://api.backcountry.com/mobile/products/search/".$identifier,false,$context));

echo '<div class="product-listing" data="'.$json->total.'">';

echo '<div class="global-banner">Free 2-Day Shipping on Orders Over $50*</div>';

if($identifier == "kayaks" || $identifier == "kayak"){
    echo '<a href="brand" class="hero direct-back" style="border:none;background-image:url(http://promoimages.backcountry.com.s3.amazonaws.com/promo_upload/bcs/2015/30348/lp/video/Oru-hero-600.gif);">';
    echo '<img src="http://promoimages.backcountry.com.s3.amazonaws.com/promo_upload/bcs/2015/30348/lp/video/Oru-hero-600.gif" class="mobile" />';
    echo '<div class="copy">';
    echo '<div class="headline">Get to Know Oru</div>';
    echo '<div class="subcopy">The Backstory: Oru Kayak</div>';
    echo '</div>';
    echo '</a>';   
}
foreach($json->products as $j){
    echo '<a href="#" class="listing" data="'.$j->id.'">';
    echo '<div class="image"><img src="'.$j->thumbnail.'"></div>';
    echo '<div class="title"><strong>'.$j->brand->name.'</strong> '.$j->title.'</div>';
    echo '<div class="price">$'.$j->lowestListPrice.'</div>';
    echo '<div class="stars">
            <div class="star-container rating-'.$j->customerReviews->average.'">
                <div class="rating-active">&#9733; &#9733; &#9733; &#9733; &#9733;</div>
                <div class="rating-inactive">&#9733; &#9733; &#9733; &#9733; &#9733;</div>
            </div>
          </div>';
    echo '<span class="count">['.$j->customerReviews->count.']</span></a>';
}
echo '</div>';

?>