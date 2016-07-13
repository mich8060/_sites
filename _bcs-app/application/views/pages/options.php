<?php 
    $sku = $this->uri->segment(2);
    $link = "http://api.backcountry.com/mobile/products/".$sku;
    $json = json_decode(file_get_contents($link));
?>

<ul class="tableview">
    <?php
    
        foreach($json->skus as $s){
            echo '<li><a href="#">';
            echo '<label>'.$s->title.'</label>';
            echo '<span>$'.number_format((float)$s->listPrice, 2, '.', '').'</span>';
            echo '</a></li>';
        }
    
    ?>
</ul>