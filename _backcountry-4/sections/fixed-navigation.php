<?php

$fixnav = array( 
    "Men's Clothing" => array(
        "Jackets",
        "Pants",
        "Shirts",
        "Baselayers",
        "Shorts"
    ),
    "Women's Clothing" => array(
        "Jackets",
        "Pants",
        "Tops",
        "Dresses &amp; Skirts",
        "Shorts"
    ),
    "Kids' Clothing" => array(
        "Boys' Clothing",
        "Girls' Clothing",
        "Toddler",
        "Infants",
        "Accessories"
    ),
    "Ski" => array(
        "Air Bag Packs &amp; Accessories",
        "Ski Clothing"
    ),
    "Snowboard" => array(
        "Air Bag Packs &amp; Accessories",
        "Snowboard Clothing"
    ),
    "Shoes &amp; Footwear" => array(
        "Men's Shoes &amp; Boots",
        "Women's Shoes & Boots",
        "Kids' Shoes &amp; Boots"
    ),
    "Hike &amp; Camp" => array(
        "Sleeping Bags",
        "Tents",
        "Backpacks"
    ),
    "Shoes &amp; Footwear" => array(
        "Women's Winter Boots &amp; Shoes",
        "Women's Casual Boots &amp; Shoes",
        "Women's Hiking, Backpacking &amp; Mountaineering Boots",
        "Women's Running Shoes",
        "Women's Rain Boots &amp; Shoes"
    ),
    "Accessories" => array(
        "Hats, Caps & Beanies",
        "Gloves & Mittens",
        "Men's Accessories",
        "Women's Accessories",
        "Kids' Accessories"
    ),
    "Climb" => array(
        "Rock Climb",
        "Ice Climbing Gloves",
        "Approach Shoes",
        "Mountaineering",
        "Approach Shoes"
    ),
    "Travel" => array(
        "Luggage",
        "Travel Organizers"
    )
);

?>
<div class="fixnav" style="display:block;">
    <div class="fixnav-primary">
        <div class="container">
            <div class="fixnav-primary-name">The North Face</div>
            <a href="#" class="btn secondary small">Shop All The North Face</a>
            <div class="fixnav-primary-shop">
                <a href="#">Most Popular</a>
                <a href="#">Best Sellers</a>
                <a href="#">New Arrivals</a>
            </div>
        </div>
    </div>
    <div class="fixnav-secondary">
        <div class="container">
            <?php
            foreach($fixnav as $key => $value){
                echo '<div class="fixnav-secondary-parent">';
                echo '<a href="#">'.$key.'</a>';
                echo '<div class="fixnav-secondary-parent-menu">';
                foreach($value as $v){
                    echo '<a href="#">'.$v.'</a>';
                }
                echo '</div>';
                echo '</div>';
            }

            ?>
        </div>
    </div>
</div>