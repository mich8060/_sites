<?php 
    $sku = $this->uri->segment(2);
    $link = "http://api.backcountry.com/mobile/products/".$sku;
    $json = json_decode(file_get_contents($link));
?>

<?php
    echo '<a href="#" data="'.$json->id.'" class="explore-card">';
    echo '<img src="'.$json->images[0]->largeUrl.'" alt="" />';
    echo '<div class="ranking">';

    $options = array("rating" => $json->customerReviews->average); 
    $this->load->view('component/stars',$options);

    echo '['.$json->customerReviews->count.']';
    echo '</div>';
    echo '<div class="brand">'.$json->brand->name.'</div>';
    echo '<div class="title">'.$json->title.'</div>';
    echo '<div class="price">$'.number_format((float)$json->skus[0]->listPrice, 2, '.', '').'</div>';
    echo '</a>';
?>

