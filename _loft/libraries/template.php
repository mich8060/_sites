<?php

include_once('./libraries/dom.php');

class Template {
    
    private function service($url){
		$ch = curl_init($url);
			  curl_setopt($ch, CURLOPT_TIMEOUT, 20);
			  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 20);
			  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$data = curl_exec($ch);
		curl_close($ch);
		return json_decode($data);
    }

	private function scrap($url){
		$options = array(
		    'http'=>array(
		        'method'=>"GET",
		        'header'=>"User-Agent: Mozilla/5.0 (iPad; U; CPU OS 3_2 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko) Version/4.0.4 Mobile/7B334b Safari/531.21.102011-10-16 20:23:10\r\n" 
		    )
		);
		$context = stream_context_create($options);
		$html = file_get_html($url,false,$context);

		$data['image'] = $html->find('.blog-primary-img-cont', 0)->getAttribute('style');
		$data['image'] = str_replace("background-image: url('","",$data["image"]);
		$data['image'] = str_replace("');","",$data["image"]);
		if(count($html->find('.video-screenshot'))){
			$data['type'] = 'video';
			$video = $html->find('.video-player',0);
			$iframe = $video->find('iframe',0)->getAttribute('data-src');
			$data['video'] = '<iframe src="'.$iframe.'" class="articleVideo" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
		}else{
			$data['type'] = 'image';
			$data['video'] = '';
		}
		
		$data['date'] = $html->find('.post-meta',0)->innertext;
		$data['date'] = trim(str_replace("posted on&nbsp;","",$data['date']));
		$data['title'] = trim($html->find('.post-title', 0)->innertext);
		$data['description'] = $html->find('.body p', 0)->innertext;
		return $data;
	}
    
	public function button($item){
		return $this->compile('elements/button.php',null);
	}

    public function dropdown($item){
        $template = $item->attr['template'];
        return $this->compile('modules/dropdowns/'.$template.'.php',null);
    }
	
	public function options($item){
		$data = array(
            "name"		=> $item->innertext,
            "value"   	=> $item->value,
            "image"     => $item->attr['image']
        );
		return $this->compile('modules/options.php',$data);
	}

	public function footer() {
		return $this->compile('modules/footer.php',null);
	}
	
	public function guide($item){
		// Compose Guide Page
		$header = $this->compile('guide/header.php',null);
		$menu = $this->compile('guide/menu.php',null);
		$aside = $this->compile('guide/aside.php',null);
		$content = $item->innertext;
		$main  = $menu;
		$main .= $header;
		$main .= '<div class="container-full">';
		if($item->attr['menu'] == "true"){
			$main .= '<div class="guide-main">';
			$main .= $aside;
			$main .= '<div class="guide-load-container">';
			$main .= '<div class="guide-load">';
		}else{
			$main .= '<div class="guide-main full">';
			$main .= '<div class="guide-load-container">';
			$main .= '<div class="guide-load full">';
		}
		$main .= $content;
		$main .= '</div>';
		$main .= '</div>';
		$main .= '</div>';
		$main .= '</div>';
        return $main;
    }

    public function header(){
        return $this->compile('modules/header.php',null);
    }
    
    public function menu(){
        return $this->compile('modules/menu.php',null);
    }
    
    public function nav(){
        return $this->compile('modules/nav.php',null);
    }
    
    public function preformat($item){
        $item = str_replace("<", "&lt;", $item);
        $item = str_replace(">", "&gt;", $item);
        return $item;
    }

	public function globaltext(){
    	return $this->compile('modules/global-text.php', $data);
	}
    
    public function group_listing_card($item){
        $data = array(
            "title"         => $item->attr['title'],
            "description"   => $item->attr['description'],
            "image"         => $item->attr['image']
        );
        return $this->compile('modules/group_listing_card.php', $data);
    }

	public function term($item){
		$term = urlencode($item->attr['term']);
		$limit = $item->attr['limit'];
		$offset = ($item->attr['offset'] != "") ? $item->attr['offset'] : 0;
		$json = $this->service("http://api.backcountry.com/mobile/products/search/".$term."?limit=".$limit."&offset=".$offset."&site=steepcheap");
		$product = "";
		foreach($json->products as $j){
			$data = array(
                "href"          => $item->attr['href'],
                "classes"       => $item->attr['class'],
                "sku"           => $j->id,
                "brand"         => $j->brand->name,
                "title"         => $j->title,
                "image"         => $j->thumbnail,
                "reviews"       => $j->customerReviews->average,
                "listPrice"     => '$'.round($j->lowestListPrice),
                "salePrice"     => '$'.round($j->lowestSalePrice),
                "discount"      => $j->percentOff,
                "exclusives"    => '',
            );
			$data['image'] = str_replace("/medium/","/900/",$data['image']);
	        if($data['listPrice'] == $data['salePrice']){ $data['salePrice'] = ''; }
	        if($data['discount'] == '0% off'){ $data['discount'] = ''; }
	        $product .= $this->compile('modules/listing.php', $data);
		}
		return $product;
	}
	
	public function filters($item){
        $term = $item->attr['term'];
	    $limit = $item->attr['limit'];
    	$json = $this->service("http://api.backcountry.com/v1/search/".$term."?site=bcs&limit=".$limit);
		$facets = $json->metadata->facets;
		return $this->compile('modules/filters.php', $data);
	}
	
	public function articlelist($item){
		$article = $item->attr['href'];
		$name = explode("/", $article);
		$filename = './cache/'.array_pop((array_slice($name, -1))).'.json';
        if(file_exists($filename)) {
            $data = get_object_vars(json_decode(file_get_contents($filename)));
		}else{
			$file = fopen($filename, "w");
			$data = $this->scrap($article);
			fwrite($file,json_encode($data));
            fclose($file);
		}
		$data['href'] = $item->attr['href'];
		$data['classes'] = $item->attr['class'];
		return $this->compile('modules/listing-article.php', $data);
	}
	
	public function listingresultsbar($item){
        $term = $item->attr['term'];
		$data['term'] = $term;
    	$json = $this->service("http://api.backcountry.com/mobile/products/search/".$term."?site=bcs&limit=1");
		$data['results'] = number_format($json->total);
		return $this->compile('modules/listingresultsbar.php', $data);
	}
    
	public function look($item){
        $tag = $item->attr['tag'];
        $filename = './cache/'.$tag.'.json';
		if(file_exists($filename)) {
            $json = json_decode(file_get_contents($filename));
			//print_r($json[0]->images[0]->url);
			$data['href'] = $item->attr['href'];
			$data['classes'] = $item->attr['class'];
			$data['front-image'] = $json[0]->images[0]->url;
			$data['back-image'] = $json[0]->images[1]->url;
			$data['title'] = $json[0]->title;
			
			$products = null;
			foreach($json[0]->skus as $s){
				$sku = array(
					"href"          => '#',
                    "classes"       => 'listing',
					"brand"			=>	$s->brand,
					"title"			=>	$s->title,
					"image"			=>	$s->image,
					"salePrice"		=>	'',
					"listPrice"		=>	"$".$s->price,
					"discount"		=>	'',
					"exclusives"    => 	''
				);
				
				if(count($s->options) > 4){
					$sku['classes'] = 'listing long';
				}
				
				$options = null;
				foreach($s->options as $o){
					$option["options"] = $o;
					$option["type"] = (gettype($o * 1) == "double") ? " number" : "";
					$option["selected"] = (count($s->options) == 1) ? " selected" : "";
					$options .= $this->compile('modules/option-blocks.php', $option);
				}
				$sku["options"] = $options;
				
				$swatches = null;
				foreach($s->swatches as $s){
					$swatches .= '<div class="listing-swatches-swatch '.$s.'"></div>';
				}
				$sku["swatches"] = $swatches;
				
				$products .= $this->compile('modules/listing.php', $sku);
			}
			$data['products'] = $products;
        }
		return $this->compile('modules/look.php', $data);
	}

    public function listing($item){
        $sku = $item->attr['sku'];
        
        if(isset($item->attr['cache'])){
            $filename = './cache/'.$sku.'.json';
            if(file_exists($filename)) {
                $data = get_object_vars(json_decode(file_get_contents($filename)));
            }else{
                $file = fopen($filename, "w");
                $json = $this->service("http://api.backcountry.com/v1/products/".$item->attr['sku']."?site=bcs&fields=id,title,skus,brand.name,customerReviews,listPrice,tags");
                $data = array(
                    "href"          => $item->attr['href'],
                    "classes"       => $item->attr['class'],
                    "sku"           => $sku,
                    "brand"         => $json->products[0]->brand->name,
                    "title"         => $json->products[0]->title,
                    "image"         => 'http://content.backcountry.com'.$json->products[0]->skus[0]->image->url,
                    "reviews"       => $json->products[0]->customerReviews->average,
	                "listPrice"     => '$'.round($json->metadata->productSummary->$sku->listPrice->max),
	                "salePrice"     => '$'.round($json->metadata->productSummary->$sku->salePrice->min),
                    "discount"      => $json->metadata->productSummary->$sku->discountPercent->max,
                    "exclusives"    => '',
                );
                fwrite($file,json_encode($data));
                fclose($file);
				chmod($filename, 0777);
            }
        }else{
            $json = $this->service("http://api.backcountry.com/v1/products/".$item->attr['sku']."?site=bcs&fields=id,title,skus,brand.name,customerReviews,listPrice,tags");
            $data = array(
                "href"          => $item->attr['href'],
                "classes"       => $item->attr['class'],
                "sku"           => $sku,
                "brand"         => $json->products[0]->brand->name,
                "title"         => $json->products[0]->title,
                "image"         => 'http://content.backcountry.com'.$json->products[0]->skus[0]->image->url,
                "reviews"       => $json->products[0]->customerReviews->average,
                "listPrice"     => '$'.round($json->metadata->productSummary->$sku->listPrice->max),
                "salePrice"     => '$'.round($json->metadata->productSummary->$sku->salePrice->min),
                "discount"      => $json->metadata->productSummary->$sku->discountPercent->max,
                "exclusives"    => '',
            );
        }
		
        
        if($data['listPrice'] == $data['salePrice']){ $data['salePrice'] = ''; }
        if($data['discount'] == '0% off'){ $data['discount'] = ''; }
        //if(isset($json->products[0]->tags)){ $data['exclusives'] = $json->products[0]->tags[0]; }
        return $this->compile('modules/listing.php', $data);
    }
    
    private function compile($file, $data) {
        $file = "./libraries/".$file;
        if(file_exists($file)){
            $output = file_get_contents($file);
            if(isset($data)){
                foreach($data as $key => $value){
                    $tags = "{".$key."}";
                    $output = str_replace($tags, $value, $output);
                }
            }
            return $output;
        }
    }
}

?>