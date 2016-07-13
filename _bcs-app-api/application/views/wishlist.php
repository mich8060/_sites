<?php

header("Access-Control-Allow-Orgin: *");
header("Access-Control-Allow-Methods: *");
header("Content-Type: application/json");


$json = array(
    "items" => array(
        array(
            "productId"         => "HYF0008",
            "listPrice"         => 25.99,
            "colorAndSize"      => "Acai Purple, One Size",
            "inventory"         => 2,
            "largeImageUrl"     => "http://www.backcountry.com/images/items/large/HYF/HYF0008/ACAPU.jpg",
            "brand"             => "Hydro Flask",
            "salePrice"         => 25.99,
            "quantity"          => 1,
            "productName"       => "Hydro Flask 18oz Wide Mouth Water Bottle",
            "skuDescription"    => "18oz Wide Mouth Water Bottle"
        ), array(
            "productId"         => "CAS0367",
            "listPrice"         => 89.95,
            "colorAndSize"      => "One Color, One Size",
            "inventory"         => 29,
            "largeImageUrl"     => "http://www.backcountry.com/images/items/large/CAS/CAS0367/SC.jpg",
            "brand"             => "MSR",
            "salePrice"         => 89.95,
            "quantity"          => 1,
            "productName"       => "MSR WhisperLite Stove",
            "skuDescription"    => "WhisperLite Stove"
        ), array(
            "productId"         => "WLR005R",
            "listPrice"         => 89.95,
            "colorAndSize"      => "Village Blue/Black Buffalo, One Size",
            "inventory"         => 5,
            "largeImageUrl"     => "http://www.backcountry.com/images/items/large/WLR/WLR005R/VILBLUBUF.jpg",
            "brand"             => "Woolrich",
            "salePrice"         => 89.95,
            "quantity"          => 1,
            "productName"       => "Woolrich Plus Backcountry Blanket",
            "skuDescription"    => "Plus Backcountry Blanket"
        ), array(
            "productId"         => "FJR001B",
            "listPrice"         => 23.95,
            "colorAndSize"      => "Dark Grey, One Size",
            "inventory"         => 3,
            "largeImageUrl"     => "http://www.backcountry.com/images/items/large/FJR/FJR001B/DARGRE.jpg",
            "brand"             => "Fjallraven",
            "salePrice"         => 23.95,
            "quantity"          => 1,
            "productName"       => "Fjallraven Canvas Belt",
            "skuDescription"    => "Canvas Belt"
        ), array(
            "productId"         => "JMB000F",
            "listPrice"         => 88.95,
            "colorAndSize"      => "Charcoal, 6.0",
            "largeImageUrl"     => "http://www.backcountry.com/images/items/large/JMB/JMB000F/CH.jpg",
            "brand"             => "Jambu",
            "salePrice"         => 66.71,
            "quantity"          => 1,
            "productName"       => "Jambu Blossom Sandal - Women\'s",
            "skuDescription"    => "Blossom Sandal - Women\'s"
        ), array(
            "productId"         => "KEN002W",
            "listPrice"         => 89.95,
            "colorAndSize"      => "Mineral Blue/Vapor, 6.0",
            "largeImageUrl"     => "http://www.backcountry.com/images/items/large/KEN/KEN002W/MINBLU.jpg",
            "brand"             => "KEEN",
            "salePrice"         => 89.95,
            "quantity"          => 1,
            "productName"       => "KEEN Cypress Sandal - Women\'s",
            "skuDescription"    => "Cypress Sandal - Women\'s"
        )
    )
);

$decode = json_encode($json);

echo $decode;

?>
