<?php 
    include_once('libraries/template.php');
    include_once('libraries/functions.php');
    include_once('libraries/dom.php');
	ini_set("log_errors", 1);
	ini_set("error_log", "./errors/php-error.log");

	$filename = '.htaccess';

	if(!file_exists($filename)){
	    $f = fopen('.htaccess','w');
		$text = "
		RewriteEngine On
		RewriteCond %{REQUEST_FILENAME} !-f
		RewriteCond %{REQUEST_FILENAME} !-d
		RewriteCond $1 !^(index\.php|sass|css|js|png|jpg|gif|jpeg|robots\.txt)
		RewriteRule ^(.*)$ index.php [L,QSA]";
		fwrite($f, $text);
		fclose($f);
	}

    $template = new Template;
    $filename = basename($_SERVER["REQUEST_URI"]);
	
	if($filename != basename(getcwd())){
		if(file_exists('pages/'.$filename.'.php')){
			$filename = 'pages/'.$filename.'.php';
		}elseif(file_exists('pages/'.$filename.'.html')){
			$filename = 'pages/'.$filename.'.html';
		}elseif(file_exists('pages/'.$filename)){
			$filename = 'pages/'.$filename;
		}
	}else{
		$filename = 'pages/index.html';
	}
	
	ob_start();
	include($filename);
	$source = ob_get_contents();
	ob_end_clean();

    $html = str_get_html($source);
    
    /* Pre Tags Prettifying Format */
    if($html->find('pre')){
        $preformatted = $html->find('pre');
        foreach($preformatted as $item){
            $item->innertext = $template->preformat($item->innertext);
        }
		$html = str_get_html($html);
    }
    
    /* Header */
    if($html->find('header')){
        $header = $html->find('header');
        foreach($header as $h){
            $head = $template->header($h);

			if($h->attr['globaltext'] == "true"){
				$head .= $template->globaltext();
			}
			
			
            $nav = str_get_html($head);
            if($nav->find('dropdown')){
                $dropdown = $nav->find('dropdown');
                foreach($dropdown as $d){
                    $d->outertext = $template->dropdown($d);
                }
				$head = $nav;
            }

			$h->outertext = $head;
			$html = $html;
        }
    }

    /* Guide Header */
    if($html->find('.guide')){
		$guide = $html->find('.guide');
		foreach($guide as $g){
            $g->innertext = $template->guide($g);
        }
		$html = str_get_html($html);
    }

	if($html->find('select')){
		$select = $html->find('select');
		foreach($select as $s){
			if($s->attr['custom']){
				$options = null;
				$option = $s->find('option');
				foreach($option as $o){
					$options .= $template->options($o);
				}
				$selector = '<div class="select" tabindex="0"><div class="select-value">'.$s->find('option',0)->innertext.'</div><div class="select-options">'.$options.'</div></div>';
                $s->outertext = $selector;
			}
		}
	}
    
    /* Group Listing */
    if($html->find('.group-listing-card')){
        $group = $html->find('.group-listing-card');
        foreach($group as $item){
            $item->outertext = $template->group_listing_card($item);
        }
    }

	/* Shop the Look */
	if($html->find('.look')){
		$look = $html->find('.look');
		foreach($look as $item){
			$item->outertext = $template->look($item);
		}
		$html = $html;
	}
	
	/* Loading Button */
	if($html->find('.btn')){
		$button = $html->find('.btn');
		foreach($button as $b){
			$b->innertext = $template->button($b).'<span>'.$b->innertext.'</span>';
		}
		$html = $html;
	}
    
    /* Product Listing */
    if($html->find('.listing')){
        $listing = $html->find('.listing');
        foreach($listing as $item){
            if(!trim($item->innertext)){
                if(isset($item->attr['sku'])){
                    $item->outertext = $template->listing($item);
                }elseif(isset($item->attr['term'])){
                    $item->outertext = $template->term($item);
                }
            }
        }
		$html = $html;
    }



	/* Listing Articles */
	if($html->find('.listing-article')){
		$article = $html->find('.listing-article');
		foreach($article as $item){
			$item->outertext = $template->articlelist($item);
		}
		$html = $html;
	}
	
	/* Listing Results & Filter Generation */
	if($html->find('.listing-results')){
		$results = $html->find('.listing-results');
		foreach($results as $r){
			$r->innertext = $template->filters($r).$r->innertext;
		}
		$html = $html;
		$results = $html->find('.listing-results');
		foreach($results as $r){
			$r->outertext = $template->listingresultsbar($r).$r->outertext;
		}
		$html = $html;

	}

    /* Footer */
    if($html->find('footer')){
        $footer = $html->find('footer');
        foreach($footer as $f){
            $f->outertext = $template->footer($f);
        }
		$html = $html;
    }
    
    echo $html;
    $html->clear(); 
    unset($html);
?>