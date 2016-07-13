<?php

header("Access-Control-Allow-Orgin: *");
header("Access-Control-Allow-Methods: *");
header("Content-Type: application/json");
/*
$options = array(
    'http'=>array(
        'method'=>"GET",
        'header'=>"User-Agent: Mozilla/5.0 (iPad; U; CPU OS 3_2 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko) Version/4.0.4 Mobile/7B334b Safari/531.21.102011-10-16 20:23:10\r\n" // i.e. An iPad 
    )
);
$context = stream_context_create($options);

$json = json_decode(file_get_contents('http://itemapi-vip.bcinfra.net:8581/v1/production/items/collection/2750047'));

$collections = $json->items[0]->description;
$collections = (array) json_decode($collections);

$feed = array();

foreach($collections['subcollections'] as $s){
    $sku = array();
    foreach($s->skus as $k){
        $parts = explode("-",$k->id);
        $parent = $parts[0];
        $colorway = $parts[1];
        $vendor = substr($parent, 0, 3);
        
        $data = json_decode(file_get_contents("http://api.backcountry.com/mobile/products/".$parent, false, $context));
        
        array_push($sku,array(
            'sku'       => $parent,
            'colorway'  => $colorway,
            'brand'     => $data->brand->name,
            'title'     => $data->title,
            'lowestListPrice'   => $data->lowestListPrice,
            'lowestSalePrice'   => $data->lowestSalePrice,
            'onSale'    =>  $data->onSale,
            'image'     => 'http://www.backcountry.com/images/items/medium/'.$vendor.'/'.$parent.'/'.$colorway.'.jpg'
        ));
    }
    array_push($feed, array(
        'name'      => $s->name,
        'banner'    =>  $s->catHeroBanner->gridUrl->mobile,
        'skus'      => $sku
    ));
}

$feed = json_encode($feed);
$feed = json_decode($feed);
*/

$hardcoded = array(
    'sections' => array(
            'Morning',
            'Afternoon',
            'Evening'
    ),
    'subcollections' => array(
        array(
            'name' 	    => "Morning",
            'banner' 	=> "http://promoimages.backcountry.com.s3.amazonaws.com/collections/Women's Mountain Lifestyle/outfit1_CGD.jpg",
            'skus' 	    => array(
                array(
                    'sku' => "DYL0018",
                    'colorway' => "NAPK",
                    'brand' => "Dylan",
                    'title' => "Forward Fit Tank Top - Women's",
                    'lowestListPrice' => 51.95,
                    'lowestSalePrice' => 31.17,
                    'onSale' => true,
                    'image' => "http://www.backcountry.com/images/items/medium/DYL/DYL0018/NAPK.jpg"
                ),array(
                    'sku' => "WLL000V",
                    'colorway' => "CRE",
                    'brand' => "Will Leather Goods",
                    'title' => "Hazel Crossbody Purse",
                    'lowestListPrice' => 295,
                    'lowestSalePrice' => 295,
                    'onSale' => false,
                    'image' => "http://www.backcountry.com/images/items/medium/WLL/WLL000V/CRE.jpg"
                ),array(
                    'sku' => "RVC00MF",
                    'colorway' => "DUSOV",
                    'brand' => "RVCA",
                    'title' => "Bangerang Skirt - Women's",
                    'lowestListPrice' => 47.95,
                    'lowestSalePrice' => 28.77,
                    'onSale' => true,
                    'image' => "http://www.backcountry.com/images/items/medium/RVC/RVC00MF/DUSOV.jpg"
                ),array(
                    'sku' => "BRK0004",
                    'colorway' => "TOB",
                    'brand' => "Birkenstock",
                    'title' => "Gizeh Sandal - Women's",
                    'lowestListPrice' => 94.95,
                    'lowestSalePrice' => 94.95,
                    'onSale' => false,
                    'image' => "http://www.backcountry.com/images/items/medium/BRK/BRK0004/TOB.jpg"
                ),array(
                    'sku' => "BAN0002",
                    'colorway' => "ANSI",
                    'brand' => "Bandits",
                    'title' => "Buffalo Spirit Cuff",
                    'lowestListPrice' => 167.95,
                    'lowestSalePrice' => 58.78,
                    'onSale' => true,
                    'image' => "http://www.backcountry.com/images/items/medium/BAN/BAN0002/ANSI.jpg"
                ),array(
                    'sku' => "DYL001F",
                    'colorway' => "WHI",
                    'brand' => "Dylan",
                    'title' => "Asymmetrical Poncho - Women's",
                    'lowestListPrice' => 75.95,
                    'lowestSalePrice' => 49.37,
                    'onSale' => true,
                    'image' => "http://www.backcountry.com/images/items/medium/DYL/DYL001F/WHI.jpg"
                ),array(
                    'sku' => "DSK001B",
                    'colorway' => "BKFULGRA",
                    'brand' => "Dansko",
                    'title' => "Margie Shoe - Women's",
                    'lowestListPrice' => 140,
                    'lowestSalePrice' => 140,
                    'onSale' => false,
                    'image' => "http://www.backcountry.com/images/items/medium/DSK/DSK001B/BKFULGRA.jpg"
                ),array(
                    'sku' => "PRA00G0",
                    'colorway' => "RAI",
                    'brand' => "prAna",
                    'title' => "Kendall Dress - Women's",
                    'lowestListPrice' => 79.95,
                    'lowestSalePrice' => 59.96,
                    'onSale' => true,
                    'image' => "http://www.backcountry.com/images/items/medium/PRA/PRA00G0/RAI.jpg"
                ),array(
                    'sku' => "WLR004N",
                    'colorway' => "ATL",
                    'brand' => "Woolrich",
                    'title' => "Spring Fever Tank Top - Women's",
                    'lowestListPrice' => 48.95,
                    'lowestSalePrice' => 31.82,
                    'onSale' => true,
                    'image' => "http://www.backcountry.com/images/items/medium/WLR/WLR004N/ATL.jpg"
                ),array(
                    'sku' => "BGB0008",
                    'colorway' => "TRUBK",
                    'brand' => "Bridge & Burn",
                    'title' => "Lily Skirt - Women's",
                    'lowestListPrice' => 159.95,
                    'lowestSalePrice' => 95.97,
                    'onSale' => true,
                    'image' => "http://www.backcountry.com/images/items/medium/BGB/BGB0008/TRUBK.jpg"    
                ),array(
                    'sku' => "FRY003O",
                    'colorway' => "WHI",
                    'brand' => "Frye",
                    'title' => "Jenny Fold Over Clutch - Women's",
                    'lowestListPrice' => 297.95,
                    'lowestSalePrice' => 297.95,
                    'onSale' => false,
                    'image' => "http://www.backcountry.com/images/items/medium/FRY/FRY003O/WHI.jpg"
                ),array(
                    'sku' => "DSK001D",
                    'colorway' => "BKFULGRA",
                    'brand' => "Dansko",
                    'title' => "Maisie Shoe - Women's",
                    'lowestListPrice' => 135,
                    'lowestSalePrice' => 135,
                    'onSale' => false,
                    'image' => "http://www.backcountry.com/images/items/medium/DSK/DSK001D/BKFULGRA.jpg"
                )   
            )
        ),
        array(
            'name'      => "Afternoon",
            'banner'    => "http://promoimages.backcountry.com.s3.amazonaws.com/collections/Women's Mountain Lifestyle/outfit2_CGD.jpg",
            'skus'      => array(
                array(
                    'sku' => "PAT00UO",
                    'colorway' => "CHABL",
                    'brand' => "Patagonia",
                    'title' => "Chesser Island Dress - Women's",
                    'lowestListPrice' => 0,
                    'lowestSalePrice' => 0,
                    'onSale' => false,
                    'image' => "http://www.backcountry.com/images/items/medium/PAT/PAT00UO/CHABL.jpg"
                ),array(
                    'sku' => "FRY001V",
                    'colorway' => "BK",
                    'brand' => "Frye",
                    'title' => "Carson Ankle Zip Sandal - Women's",
                    'lowestListPrice' => 197.95,
                    'lowestSalePrice' => 197.95,
                    'onSale' => false,
                    'image' => "http://www.backcountry.com/images/items/medium/FRY/FRY001V/BK.jpg"
                ),array(
                    'sku' => "DYL0012",
                    'colorway' => "ICYMAU",
                    'brand' => "Dylan",
                    'title' => "Soft Shimmer Shirt - Long-Sleeve - Women's",
                    'lowestListPrice' => 63.95,
                    'lowestSalePrice' => 35.17,
                    'onSale' => true,
                    'image' => "http://www.backcountry.com/images/items/medium/DYL/DYL0012/ICYMAU.jpg"
                ),array(
                    'sku' => "HAA0004",
                    'colorway' => "NA",
                    'brand' => "Hat Attack",
                    'title' => "Raffia Braid Wide Brim Continental Hat",
                    'lowestListPrice' => 89.95,
                    'lowestSalePrice' => 89.95,
                    'onSale' => false,
                    'image' => "http://www.backcountry.com/images/items/medium/HAA/HAA0004/NA.jpg"
                ),array(
                    'sku' => "RBN0117",
                    'colorway' => "RUBLBLGR",
                    'brand' => "Ray-Ban",
                    'title' => "Erika Sunglasses - Women's",
                    'lowestListPrice' => 114.95,
                    'lowestSalePrice' => 114.95,
                    'onSale' => false,
                    'image' => "http://www.backcountry.com/images/items/medium/RBN/RBN0117/RUBLBLGR.jpg"
                ),array(
                    'sku' => "WLL000G",
                    'colorway' => "TN",
                    'brand' => "Will Leather Goods",
                    'title' => "Small Classic Carry All Tote",
                    'lowestListPrice' => 75,
                    'lowestSalePrice' => 75,
                    'onSale' => false,
                    'image' => "http://www.backcountry.com/images/items/medium/WLL/WLL000G/TN.jpg"
                ),array(
                    'sku' => "DYL001A",
                    'colorway' => "VNJAQYEL",
                    'brand' => "Dylan",
                    'title' => "Vintage Chino Short - Women's",
                    'lowestListPrice' => 0,
                    'lowestSalePrice' => 0,
                    'onSale' => false,
                    'image' => "http://www.backcountry.com/images/items/medium/DYL/DYL001A/VNJAQYEL.jpg"
                ),array(
                    'sku' => "BRK0009",
                    'colorway' => "TPSE",
                    'brand' => "Birkenstock",
                    'title' => "Arizona Leather Narrow Sandal  - Women's",
                    'lowestListPrice' => 99.95,
                    'lowestSalePrice' => 99.95,
                    'onSale' => false,
                    'image' => "http://www.backcountry.com/images/items/medium/BRK/BRK0009/TPSE.jpg"
                ),array(
                    'sku' => "DYL0011",
                    'colorway' => "ICYMAU",
                    'brand' => "Dylan",
                    'title' => "Bliss Tank Top - Women's",
                    'lowestListPrice' => 45.95,
                    'lowestSalePrice' => 29.87,
                    'onSale' => true,
                    'image' => "http://www.backcountry.com/images/items/medium/DYL/DYL0011/ICYMAU.jpg"
                ),array(
                    'sku' => "FRP0001",
                    'colorway' => "WH",
                    'brand' => "Free People",
                    'title' => "Long Beach Tank Top - Women's",
                    'lowestListPrice' => 20,
                    'lowestSalePrice' => 20,
                    'onSale' => false,
                    'image' => "http://www.backcountry.com/images/items/medium/FRP/FRP0001/WH.jpg"
                ),array(
                    'sku' => "WLR004J",
                    'colorway' => "ATL",
                    'brand' => "Woolrich",
                    'title' => "Spoil Her Printed Popover Shirt - Short-Sleeve - Women's",
                    'lowestListPrice' => 58.95,
                    'lowestSalePrice' => 38.32,
                    'onSale' => true,
                    'image' => "http://www.backcountry.com/images/items/medium/WLR/WLR004J/ATL.jpg"
                ),array(
                    'sku' => "DYL000Z",
                    'colorway' => "DM",
                    'brand' => "Dylan",
                    'title' => "Fly Away Shirt - Long-Sleeve - Women's",
                    'lowestListPrice' => 91.95,
                    'lowestSalePrice' => 55.17,
                    'onSale' => true,
                    'image' => "http://www.backcountry.com/images/items/medium/DYL/DYL000Z/DM.jpg"
                ),array(
                    'sku' => "DYL001H",
                    'colorway' => "VNBK",
                    'brand' => "Dylan",
                    'title' => "Wanderer Skirt - Women's",
                    'lowestListPrice' => 77.95,
                    'lowestSalePrice' => 46.77,
                    'onSale' => true,
                    'image' => "http://www.backcountry.com/images/items/medium/DYL/DYL001H/VNBK.jpg"
                ),array(
                    'sku' => "PRA00FQ",
                    'colorway' => "CHDIA",
                    'brand' => "prAna",
                    'title' => "Kara Denim Pant - Women's",
                    'lowestListPrice' => 84.95,
                    'lowestSalePrice' => 55.22,
                    'onSale' => true,
                    'image' => "http://www.backcountry.com/images/items/medium/PRA/PRA00FQ/CHDIA.jpg"
                ),array(
                    'sku' => "DYL000M",
                    'colorway' => "ICYGRE",
                    'brand' => "Dylan",
                    'title' => "Navajo Stitchdown Skirt - Women's",
                    'lowestListPrice' => 123.95,
                    'lowestSalePrice' => 68.17,
                    'onSale' => true,
                    'image' => "http://www.backcountry.com/images/items/medium/DYL/DYL000M/ICYGRE.jpg"
                ),array(
                    'sku' => "DYL000N",
                    'colorway' => "VNKH",
                    'brand' => "Dylan",
                    'title' => "Wanderlust Cargo Pant - Women's",
                    'lowestListPrice' => 127.95,
                    'lowestSalePrice' => 70.37,
                    'onSale' => true,
                    'image' => "http://www.backcountry.com/images/items/medium/DYL/DYL000N/VNKH.jpg"
                ),array(
                    'sku' => "OLU001C",
                    'colorway' => "BLA",
                    'brand' => "Olukai",
                    'title' => "Hema Sandal - Women's",
                    'lowestListPrice' => 125,
                    'lowestSalePrice' => 125,
                    'onSale' => false,
                    'image' => "http://www.backcountry.com/images/items/medium/OLU/OLU001C/BLA.jpg"
                ),array(
                    'sku' => "KAV0356",
                    'colorway' => "BKSM",
                    'brand' => "Kavu",
                    'title' => "Lady Leah Sun Hat - Women's",
                    'lowestListPrice' => 0,
                    'lowestSalePrice' => 0,
                    'onSale' => false,
                    'image' => "http://www.backcountry.com/images/items/medium/KAV/KAV0356/BKSM.jpg"
                ),array(
                    'sku' => "RBN0004",
                    'colorway' => "BLAGN",
                    'brand' => "Ray-Ban",
                    'title' => "Original Wayfarer Sunglasses",
                    'lowestListPrice' => 154.95,
                    'lowestSalePrice' => 154.95,
                    'onSale' => false,
                    'image' => "http://www.backcountry.com/images/items/medium/RBN/RBN0004/BLAGN.jpg"
                ),array(
                    'sku' => "WLL000J",
                    'colorway' => "GRE",
                    'brand' => "Will Leather Goods",
                    'title' => "Reversible Weaver's House Tote",
                    'lowestListPrice' => 120,
                    'lowestSalePrice' => 120,
                    'onSale' => false,
                    'image' => "http://www.backcountry.com/images/items/medium/WLL/WLL000J/GRE.jpg"
                )
            )
        ),
        array(
            'name'      => "Evening",
            'banner'    => "http://promoimages.backcountry.com.s3.amazonaws.com/collections/Women's Mountain Lifestyle/outfit3_CGD.jpg",
            'skus'      => array(
                array(
                    'sku' => "BIL01CZ",
                    'colorway' => "COOWIP",
                    'brand' => "Billabong",
                    'title' => "Out At Sea Dress - Women's",
                    'lowestListPrice' => 49.95,
                    'lowestSalePrice' => 32.47,
                    'onSale' => true,
                    'image' => "http://www.backcountry.com/images/items/medium/BIL/BIL01CZ/COOWIP.jpg"
                ),array(
                    'sku' => "TNF019V",
                    'colorway' => "PRUBL",
                    'brand' => "The North Face",
                    'title' => "Bridgette Wrap Sweater - Women's",
                    'lowestListPrice' => 59.95,
                    'lowestSalePrice' => 38.97,
                    'onSale' => true,
                    'image' => "http://www.backcountry.com/images/items/medium/TNF/TNF019V/PRUBL.jpg"
                ),array(
                    'sku' => "HAA0007",
                    'colorway' => "NA",
                    'brand' => "Hat Attack",
                    'title' => "Toast Braided Sun Hat with Vachetta Trim",
                    'lowestListPrice' => 87.95,
                    'lowestSalePrice' => 87.95,
                    'onSale' => false,
                    'image' => "http://www.backcountry.com/images/items/medium/HAA/HAA0007/NA.jpg"
                ),array(
                    'sku' => "FRY001Y",
                    'colorway' => "WHI",
                    'brand' => "Frye",
                    'title' => "Izzy Artisan Sling Sandal - Women's",
                    'lowestListPrice' => 287.95,
                    'lowestSalePrice' => 287.95,
                    'onSale' => false,
                    'image' => "http://www.backcountry.com/images/items/medium/FRY/FRY001Y/WHI.jpg"
                ),array(
                    'sku' => "DYL001C",
                    'colorway' => "VNWH",
                    'brand' => "Dylan",
                    'title' => "Crop Shirt - Long-Sleeve - Women's",
                    'lowestListPrice' => 115.95,
                    'lowestSalePrice' => 69.57,
                    'onSale' => true,
                    'image' => "http://www.backcountry.com/images/items/medium/DYL/DYL001C/VNWH.jpg"
                ),array(
                    'sku' => "LVS001G",
                    'colorway' => "COMBLSHA",
                    'brand' => "Levi's",
                    'title' => "Commuter Skinny Denim Pants - Women's",
                    'lowestListPrice' => 87.95,
                    'lowestSalePrice' => 43.98,
                    'onSale' => true,
                    'image' => "http://www.backcountry.com/images/items/medium/LVS/LVS001G/COMBLSHA.jpg"
                ),array(
                    'sku' => "PAT00R4",
                    'colorway' => "CHABL",
                    'brand' => "Patagonia",
                    'title' => "Brookgreen Shirt - Sleeveless - Women's",
                    'lowestListPrice' => 59,
                    'lowestSalePrice' => 35.4,
                    'onSale' => true,
                    'image' => "http://www.backcountry.com/images/items/medium/PAT/PAT00R4/CHABL.jpg"
                ),array(
                    'sku' => "PIC000X",
                    'colorway' => "CUE",
                    'brand' => "Pikolinos",
                    'title' => "Santorini Shoe - Women's",
                    'lowestListPrice' => 0,
                    'lowestSalePrice' => 0,
                    'onSale' => false,
                    'image' => "http://www.backcountry.com/images/items/medium/PIC/PIC000X/CUE.jpg"
                ),array(
                    'sku' => "DYL001D",
                    'colorway' => "VNWH",
                    'brand' => "Dylan",
                    'title' => "Hi Lo Shirt - Sleeveless - Women's",
                    'lowestListPrice' => 0,
                    'lowestSalePrice' => 0,
                    'onSale' => false,
                    'image' => "http://www.backcountry.com/images/items/medium/DYL/DYL001D/VNWH.jpg"
                ),array(
                    'sku' => "WLR005N",
                    'colorway' => "SUM",
                    'brand' => "Woolrich",
                    'title' => "Cropped Rebel Ryan Shirt - Long-Sleeve - Women's",
                    'lowestListPrice' => 84.95,
                    'lowestSalePrice' => 42.48,
                    'onSale' => true,
                    'image' => "http://www.backcountry.com/images/items/medium/WLR/WLR005N/SUM.jpg"
                ),array(
                    'sku' => "FRY003B",
                    'colorway' => "OFFWHMUL",
                    'brand' => "Frye",
                    'title' => "Phillip Seam Ankle Sandal - Women's",
                    'lowestListPrice' => 177.5,
                    'lowestSalePrice' => 177.5,
                    'onSale' => false,
                    'image' => "http://www.backcountry.com/images/items/medium/FRY/FRY003B/OFFWHMUL.jpg"
                ),array(
                    'sku' => "HAA0004",
                    'colorway' => "TOB",
                    'brand' => "Hat Attack",
                    'title' => "Raffia Braid Wide Brim Continental Hat",
                    'lowestListPrice' => 89.95,
                    'lowestSalePrice' => 89.95,
                    'onSale' => false,
                    'image' => "http://www.backcountry.com/images/items/medium/HAA/HAA0004/TOB.jpg"
                ),array(
                    'sku' => "BGB0007",
                    'colorway' => "OVDRA",
                    'brand' => "Bridge & Burn",
                    'title' => "Ellis Pant - Women's",
                    'lowestListPrice' => 127.95,
                    'lowestSalePrice' => 63.98,
                    'onSale' => true,
                    'image' => "http://www.backcountry.com/images/items/medium/BGB/BGB0007/OVDRA.jpg"
                ),array(
                    'sku' => "BGB0004",
                    'colorway' => "CADBL",
                    'brand' => "Bridge & Burn",
                    'title' => "Market Trouser - Women's",
                    'lowestListPrice' => 127.95,
                    'lowestSalePrice' => 70.37,
                    'onSale' => true,
                    'image' => "http://www.backcountry.com/images/items/medium/BGB/BGB0004/CADBL.jpg"
                ),array(
                    'sku' => "JOU002C",
                    'colorway' => "CHASPO",
                    'brand' => "Joules",
                    'title' => "Elise Dress - Women's",
                    'lowestListPrice' => 114.95,
                    'lowestSalePrice' => 74.72,
                    'onSale' => true,
                    'image' => "http://www.backcountry.com/images/items/medium/JOU/JOU002C/CHASPO.jpg"
                ),array(
                    'sku' => "BGB000B",
                    'colorway' => "SUN",
                    'brand' => "Bridge & Burn",
                    'title' => "Orchard Dress - Women's",
                    'lowestListPrice' => 119.95,
                    'lowestSalePrice' => 83.96,
                    'onSale' => true,
                    'image' => "http://www.backcountry.com/images/items/medium/BGB/BGB000B/SUN.jpg"
                ),array(
                    'sku' => "FRY000T",
                    'colorway' => "SAD",
                    'brand' => "Frye",
                    'title' => "Campus Mini Purse - Women's",
                    'lowestListPrice' => 197.95,
                    'lowestSalePrice' => 197.95,
                    'onSale' => false,
                    'image' => "http://www.backcountry.com/images/items/medium/FRY/FRY000T/SAD.jpg"
                ),array(
                    'sku' => "FRY001W",
                    'colorway' => "CAM",
                    'brand' => "Frye",
                    'title' => "Courtney Slip On Shoe - Women's",
                    'lowestListPrice' => 257.95,
                    'lowestSalePrice' => 257.95,
                    'onSale' => false,
                    'image' => "http://www.backcountry.com/images/items/medium/FRY/FRY001W/CAM.jpg"
                ),array(
                    'sku' => "WLL000R",
                    'colorway' => "DHUCOLS4",
                    'brand' => "Will Leather Goods",
                    'title' => "Dhurrie Tote",
                    'lowestListPrice' => 495,
                    'lowestSalePrice' => 495,
                    'onSale' => false,
                    'image' => "http://www.backcountry.com/images/items/medium/WLL/WLL000R/DHUCOLS4.jpg"
                )
            )
        )
    )
    
);


echo json_encode($hardcoded);

?>