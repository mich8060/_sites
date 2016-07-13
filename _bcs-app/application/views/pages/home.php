<div id="home" style="background:#ededed;padding:10px;">
<div class="global-banner" style="margin:-10px -10px 10px -10px">Free 2-Day Shipping on Orders Over $50*</div>
<a href="collections" class="hero collect" style="background-image:url(img/layout/HHR_collections.jpg);">
    <img src="img/layout/collections.jpg" class="mobile">
    <div class="copy">
        <div class="headline">Mountain Townie</div>
        <div class="subcopy">Must-Have Summer Looks</div>
    </div>
</a>
	<?php
        
		//$json = json_decode(file_get_contents('http://localhost:8888/app_api/home'));
		//$json = json_decode(file_get_contents('http://design.backcountry.com/mobile/services/home'));
		$json = json_decode(file_get_contents('http://design.backcountry.com/mobile/services/home.json'));	
		
		foreach($json as $j){
            if($j->postType == "articles") {
				echo '<a href="#" class="posts local" local="'.htmlspecialchars($j->content).'">';
				echo '<div class="author '.$j->postType.'">';
				echo '<div class="image" style="background-image:url('.$j->authorImageUrl.');"></div>';
				echo '<h5>'.$j->title.'</h5>';
				echo '<div>'.$j->postedOn.'</div>';
				echo '</div>';
				echo '<img src="'.$j->listImage->url.'" alt="" />';
				echo '<div class="readout">';
				echo '<h4>'.$j->title.'</h4>';
				echo '<div>'.substr($j->excerpt, 0, 130).'...</div>';
				echo '</div>';
				echo '<div class="action">Read Full Article</div>';
				echo '</a>';
			}elseif($j->postType == "instagram"){
				echo '<a href="#" class="posts">';
				echo '<div class="author '.$j->postType.'">';
				echo '<div class="image" style="background-image:url('.$j->authorImageUrl.');"></div>';
				echo '<h5>'.$j->authorName.'</h5>';
				echo '<div>'.$j->timeAgo.'</div>';
				echo '</div>';
				echo '<div class="instagram-image"><div class="instagram-image-container"><img src="'.$j->listImage->url.'" /></div></div>';
				echo '<div class="readout">';
				echo '<div>'.substr($j->excerpt, 0, 130).'...</div>';
				echo '</div>';
				echo '<div class="action">Share</div>';
				echo '</a>';
			}elseif($j->postType == "videos") {
    			echo '<a href="#" class="posts">';
    			echo '<div class="author '.$j->postType.'">';
    			echo '<div class="image" style="background-image:url('.$j->authorImageUrl.');"></div>';
    			echo '<h5>'.$j->title.'</h5>';
    			echo '<div>'.$j->postedOn.'</div>';
    			echo '</div>';
    			echo '<img src="'.$j->listImage->url.'" alt="" />';
    			echo '<div class="readout">';
    			echo '<h4>'.$j->title.'</h4>';
    			echo '<div>'.substr($j->excerpt, 0, 130).'...</div>';
    			echo '</div>';
    			echo '<div class="action">Read Full Article</div>';
    			echo '</a>';
    		}elseif($j->postType == "products"){
    			echo '<a href="'.$j->id.'" class="posts direct-product">';
    			echo '<div class="product">';
    			echo '<div class="author">';
    			echo '<h5>New Arrival</h5>';
    			echo '<div>'.$j->activationDate.'</div>';
    			echo '</div>';
    			echo '<div class="thumbnail">';
    			echo '<img src="'.$j->images[0].'" alt="" />';
    			echo '</div>';
    			echo '<div class="title">';
    			echo '<strong>'.$j->brand->name.'</strong> '.$j->title.'';
    			echo '<div>$'.$j->lowestListPrice.'</div>';
    			echo '</div>';
    			echo '</div>';
    			echo '</a>';
    		}elseif($j->postType == "hero"){    
                echo '<a href="#" class="hero direct-back" style="background-image:url('.$j->desktop.');">';
                echo '<img src="'.$j->mobile.'" class="mobile" />';
                echo '<div class="copy">';
                echo '<div class="headline">'.$j->title.'</div>';
                echo '<div class="subcopy">'.$j->description.'</div>';
                echo '</div>';
                echo '</a>';
    		}elseif($j->postType == "promotion"){
    		    if($j->type == 1){
    		        echo '<a href="#" class="posts direct-search" term="'.$j->search->term.'">';
            		echo '<div class="promotion deeplink">';
            		echo '<h5>'.$j->title.'</h5>';
            		echo '<div>'.$j->targetTitle.'</div>';
            		echo '</div>';
            		echo '</a>';
    		    }
    		}elseif($j->postType == "goatworthy"){
                echo '<a href="#" class="posts goatworthy">';
                echo '<div class="overlay" style="background-image:url('.$j->listImage->url.');">';
                echo '<div class="gradient"></div>';
                echo '<div class="icons-social">&#62253;</div>';
                echo '<div class="profile"><img src="'.$j->authorImageUrl.'" /></div>';
                echo '<div class="name">';
                echo '<div><strong>'.$j->authorName.'</strong></div>';
                echo '<div>'.$j->timeAgo.'</div>';
                echo '</div>';
                echo '</div>';
                echo '<div style="padding:20px 10px;">'.$j->excerpt.'</div>';
                echo '<div class="clear"></div>';
                echo '</a>';
		    }
		}

        
	?>
	<div class="product-widget">
        <div class="grid_1 fluff" style="border-bottom:solid 1px #ccc">
            <h4 class="uppercase">Items from your Wishlist</h4>
        </div>
        <div class="clear"></div>
        <div class="touchswipe">
            <div class="overflow">
                <?php
                    $widget = json_decode(file_get_contents('http://design.backcountry.com/mobile/services/wishlist'));
                    $items = $widget->items;
                    foreach($items as $i){
                        echo '<a href="#" class="rec-product">';
                        echo '<div class="image"><img src='.$i->largeImageUrl.' /></div>';
                        echo '<div><strong>'.$i->brand.'</strong></div>';
                        echo '<div class="desc">'.$i->skuDescription.'</div>';
                        echo '<div class="desc">$'.$i->listPrice.'</div>';
                        echo '</a>';
                    }

                ?>
            </div>
        </div>
        <div class="clear"></div>
    </div>    
    <div class="clear"></div>
	<div style="height:35px;"></div>
</div>

