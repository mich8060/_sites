<?php
    header("Access-Control-Allow-Orgin: *");
    header("Access-Control-Allow-Methods: *");
    header("Content-Type: application/json");
    
    $options = array(
        'http'=>array(
            'method'=>"GET",
            'header'=>"User-Agent: Mozilla/5.0 (iPad; U; CPU OS 3_2 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko) Version/4.0.4 Mobile/7B334b Safari/531.21.102011-10-16 20:23:10\r\n" // i.e. An iPad 
        )
    );
    $context = stream_context_create($options);
    
    $json = json_decode(file_get_contents('http://api.backcountry.com/mobile/posts/0',false,$context));

    $posts = $json->posts;
    
    $industry = array(
        'camper',
        'sleep',
        'sleeping',
        'bag',
        'tent',
        'tents',
        'backpack',
        'backpacks',
        'kitchen',
        'fly',
        'rod',
        'rods',
        'reel',
        'reels',
        'wading',
        'wade',
        'gear',
        'flies',
        'men',
        'men\'s',
        'clothes',
        'clothing',
        'bikes',
        'women',
        'women\'s',
        'parts',
        'yoga',
        'pants',
        'tops',
        'bras',
        'bra',
        'camis',
        'tanks',
        'mats',
        'mat',
        'accessories',
        'bindings',
        'boots',
        'shoes',
        'shoe',
        'safety',
        'PFD\'s',
        'PFD',
        'kids\'',
        'luggage',
        'rack',
        'racks',
        'audio',
        'wetsuits',
        'rashguards',
        'synthetic',
        'bivy',
        'sacks',
        'socks',
        'liners',
        '3-season',
        '4-season',
        'shelters',
        'tarps',
        'screen',
        'hydration',
        'water',
        'bottle',
        'bottles',
        'purification',
        'bladders',
        'reservoirs',
        'packs',
        'pack',
        'trekking',
        'pole',
        'poles',
        'dog',
        'towel',
        'towels',
        'dogs',
        'solar',
        'aid',
        'wilderness',
        'daypacks',
        'daypack',
        'headlamp',
        'headlamps',
        'lanterns',
        'lantern',
        'handheld',
        'flashlight',
        'flashlights',
        'batteries',
        'lightweight',
        'campground',
        'midweight',
        'pillows',
        'pillow',
        'hammocks',
        'chairs',
        'chair',
        'hammock',
        'cots',
        'cot',
        'showers',
        'shower',
        'tables',
        'table',
        'pots',
        'pot',
        'pan',
        'pans',
        'flatware',
        'utensils',
        'utensil',
        'cup',
        'cups',
        'mug',
        'mugs',
        'flasks',
        'flask',
        'coffee',
        'tea',
        'plate',
        'plates',
        'bowls',
        'bowl',
        'gps',
        'compasses',
        'compass',
        'binoculars',
        'binocular',
        'monoculars',
        'monocular',
        'personal',
        'locator',
        'beacon',
        'beacons',
        'altimeters',
        'altimeter',
        'weight',
        'net',
        'nets',
        'carrier',
        'carriers',
        'floatant',
        'hemostats',
        'pliers',
        'nippers',
        'lanyards',
        'retractors',
        'shot',
        'indicators',
        'packages',
        'package',
        'wading',
        'waders',
        'boots',
        'boot',
        'sandals',
        'sandal',
        'vest',
        'vests',
        'gloves',
        'glove',
        'hat',
        'hats',
        'beanies',
        'buffs',
        'buff',
        'floating',
        'float',
        'line',
        'spey',
        'shorts',
        'terrestrial',
        'nymph',
        'wet',
        'dry',
        'tubes',
        'tube',
        'pontoon',
        'pontoons',
        'rafts',
        'raft',
        'classic',
        'nordic',
        'vises',
        'tune',
        'tuning',
        'skate',
        'avalanche',
        'survival',
        'probes',
        'goggles',
        'goggle',
        'eyeware-compatible',
        'toddler',
        'toddlers',
        'infant',
        'infants',
        'skin',
        'skins',
        'impact',
        'telemark',
        'gaiters',
        'gaiter',
        'multi-tools',
        'camera',
        'cameras',
        'helmet',
        'helmets',
        'audio',
        'triathlon',
        'jersey',
        'jersey\'s',
        'jerseys',
        'knickers',
        'knicker',
        'tight',
        'tights',
        'bib',
        'bibs',
        'jacket',
        'jackets',
        'brakes',
        'brake',
        'derailleurs',
        'derailleur',
        'pedal',
        'pedals',
        'wheel',
        'wheels',
        'trainers',
        'tops',
        'underwear',
        'baselayer',
        'dresses',
        'dress',
        'skirt',
        'skirts',
        'freestyle',
        'cruisers',
        'protection',
        'lace',
        'Boa',
        'replacement',
        'lense',
        'lenses',
        'windbreaker',
        'windbreakers',
        'heart',
        'monitors',
        'monitor',
        'sunglasses',
        'barefoot',
        'minimalist',
        'tandem',
        'roof',
        'truck',
        'cargo',
        'mount',
        'mounts',
        'oars',
        'oar',
        'recreational',
        'whitewater',
        'inflatable',
        'necessities',
        'compasses',
        'rope',
        'ropes',
        'harnesses',
        'harness',
        'belay',
        'crampons',
        'crampon',
        'ascenders',
        'ascender',
        'pulley',
        'pulleys',
        'big-wall',
        'axes',
        'axe',
        'anchors',
        'anchor',
        'swimwear',
        'bikinis',
        'board',
        'one-piece',
        'swim',
        'swimming',
        'swims',
        'stand-up',
        'booties',
        'hoods',
        'leashes',
        'traction',
        'rolling',
        'carry-on',
        'duffel',
        'headphones',
        'earbuds',
        'dvd',
        'dvds',
        'dock',
        'speakers',
        'speaker',
        'phone',
        'charger',
        'chargers',
        'hitch',
        'hitches',
        'organizers',
        'organizer',
        'lock',
        'locks',
        'watch',
        'watches',
        'casual',
        'technical',
        'rain',
        'wind',
        'winter',
        'slippers',
        'slipper',
        'sweaters',
        'sweater',
        'wallet',
        'wallets',
        'hoodies',
        'hoody',
        'mittens',
        'mitten',
        'tight',
        'tights',
        'softshell',
        'softshells',
        'button-down',
        'polo',
        'flannel',
        't-shirt',
        't-shirts',
        'lifestyle',
        'interchangeable',
        'photochromic',
        'altimeters',
        'altimeter'
    );
    
    $activities = array(
        'climbing',
        'canyoneering',
        'longboards',
        'longboarding',
        'longboard',
        'shortboard',
        'shortboarding',
        'shortboards',
        'surfboard',
        'surfboarding',
        'surfboards',
        'paddleboard',
        'paddleboarding',
        'paddleboards',
        'swimming',
        'surfboarding',
        'shortboarding',
        'longboarding',
        'canyoneering',
        'telemark',
        'alpine',
        'mountaineering',
        'surfing',
        'paddling',
        'kayaking',
        'snowboarding',
        'backpacking',
        'camping',
        'hiking',
        'running',
        'rock',
        'road',
        'mountain',
        'surf',
        'mountaineering',
        'ice',
        'climb',
        'climbing',
        'rock',
        'hike',
        'hiking',
        'hiker',
        'camp',
        'camping',
        'backpacking',
        'fish',
        'fishing',
        'ski',
        'skiing',
        'telemark',
        'alpine',
        'tour',
        'touring',
        'cross',
        'bike',
        'biking',
        'snowboard',
        'snowboards',
        'snowboarding',
        'run',
        'running',
        'kayak',
        'kayaks',
        'kayaking',
        'paddle',
        'paddling',
        'snowshoe',
        'snowshoes',
        'travel',
        'surf',
        'surfing',
        'surfboards',
        'ice'
    );
    
    $results = array();
    $count = 0;
    
    foreach($posts as $p){
        if($p->postType == "articles"){
            $html = str_get_html($p->content);
            $string = $html->find('div[class=content-wrap]',0)->plaintext;
            $string = strip_tags($string);
            $string = htmlspecialchars($string);
            $ascii = array(
                array("&amp;#x2019;", "'"),
                array("&amp;#x2026;",""),
                array("&amp;#x201C;","\""),
                array("&amp;#x201D;","\""),
                array("&amp;#x2014;"," "),
                array("&amp;#xA0;",''),
                array("&amp;amp;","&"),
                array("&amp;","&"),
                array("/"," "),
                array("("," "),
                array(")"," ")
                
            );
            for($x = 0;$x < count($ascii);$x++){
               $string = str_replace($ascii[$x][0],$ascii[$x][1],$string); 
            }
            $string = str_replace("\n", "", $string);
            $string = str_replace("\r", "", $string);
            $string = str_replace(".", "", $string);
            $string = str_replace(",", "", $string);
            $string = str_replace("?", "", $string);
            $string = str_replace("!", "", $string);
            $string = str_replace(";", "", $string);
            $string = str_replace("\"", "", $string);
            $string = str_replace(":", "", $string);
            $terms = explode(" ", $string);
            $test = null;
            
            for($z = 0;$z < count($terms);$z++){
                if($terms[$z] === null){
                    unset($terms[$z]);
                }else{
                    $terms[$z] = strtolower($terms[$z]);
                    if($terms[$z] == "" || $terms[$z] == " " || $terms[$z] == "."){
                        unset($terms[$z]);
                    }
                }
            }
            
            $result = array_intersect($terms, $industry);
            $result = array_unique($result);
            
            $actions = array_intersect($terms, $activities);
            $actions = array_unique($actions);
            
            $links = array();
            
            foreach($html->find('a') as $element){
                $links[] = $element->plaintext;
            }
            
            $results[$count]['exploreId'] = $p->exploreId;
            $results[$count]['authorId'] = $p->authorId;
            $results[$count]['keywords'] = $result;
            $results[$count]['products'] = $links;
            $results[$count]['types'] = $actions;
            $count++;
        }
    }
    
    echo json_encode($results);

?>