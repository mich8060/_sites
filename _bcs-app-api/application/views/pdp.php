<div class="pdp">
    <?php 
    
        $options = array(
            'http'=>array(
                'method'=>"GET",
                'header'=>"User-Agent: Mozilla/5.0 (iPad; U; CPU OS 3_2 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko) Version/4.0.4 Mobile/7B334b Safari/531.21.102011-10-16 20:23:10\r\n" // i.e. An iPad 
            )
        );
        $context = stream_context_create($options);
    
        $sku = $this->uri->segment(2);
        $link = "http://api.backcountry.com/mobile/products/".$sku;
        $json = json_decode(file_get_contents($link,false,$context));
        
        $recommended = "http://www.backcountry.com/Store/services/product/".$sku."/xsellProducts";
        

        
        $suggested = (json_decode(file_get_contents($recommended,false,$context)) ? json_decode(file_get_contents($recommended,false,$context)) : false);
    ?>
    <div class="pdp-container">
        <div class="conditional">
            Swipe Between Products &ndash; <a href="#">Got it</a>
        </div>
        <div class="hit"></div>
        <div class="hit" style="right:0;left:auto;"></div>
        <div class="gallery">
        	<div class="grid_1">
        		<img src="<?php echo str_replace("/medium/", "/900/", $json->skus[0]->image->url); ?>" alt="" />
        	</div>
            <div class="clear"></div>
        </div>
        <div class="pdp-panel">
        	<div class="buy-panel">
        		<div class="grid_1">
        			<div class="ranking">
        				<?php 
        				
        				    if($json->customerReviews->count){
        				        $options = array("rating" => $json->customerReviews->average); 
        				        $this->load->view('component/stars',$options);
        				        echo "[";
        				        echo $json->customerReviews->count;
        				        echo "]";
        				    }

        				?>
        			</div>
        			<div class="title">
        				<strong><?php echo $json->brand->name; ?></strong>
        				<?php echo $json->title; ?>
        			</div>
        			<div class="price">Reg. $<?php echo number_format((float)$json->skus[0]->listPrice, 2, '.', ''); ?></div>
        			<div>
        			    <a href="#" class="selector" data="<?php echo $sku; ?>"><label>Select an Option</label> <span><img src="http://design.backcountry.com/mobile/img/layout/selector_arrow.jpg" alt="" /></span></a>
        			</div>
        		</div>
        		<div class="grid_2"><a href="#" data="cart" class="add button blue">Add to Cart</a></div>
        		<div class="grid_2"><a href="#" class="button white-outline">Add to Wish List</a></div>
        		<div class="clear"></div>
        	</div>
        	<div class="clear"></div>
        	<div class="mobile">
        		<div class="grid_1">
        		    <?php if(isset($json->shortDescription) || isset($json->description)) { ?>
        			<div class="more">
        				<input type="checkbox" id="read_more_0">
        				<label for="read_more_0">
        					<span>more...</span>
        					<span>less...</span>
        				</label>
        				<span>
    						<?php 
    						    if(isset($json->shortDescription)){
    						        echo '<p>'.$json->shortDescription.'</p>';
    						    }else{
    						        if(isset($json->description)){
        						        $desc = str_replace("<p>", "", $json->description);
            						    $desc = str_replace("</p>", "", $desc);
            						    $desc = str_replace("<br>", "", $desc);
            						    $desc = substr($desc, 0, 130)."...";
        						        echo $desc;
						            }
    						    }
    						?>
        				</span>
        				<span>
        					<?php
        					    if($json->description){
        					        echo $json->description;
        					    }
        					
        					?>
        				</span>
        			</div>
        		</div>
        		<?php } ?>
        	</div>
        	<div class="clear"></div>
        	<div class="scroll-panel">
        		<div class="grid_1 flush-horizontal">
        			<ul class="tableview">
        				<li class="desktop"><a href="#" class="haschild">Gallery</a></li>
        				<li class="desktop"><a href="#" class="haschild">Description</a></li>
        				<li><a href="#" class="haschild">Tech Specs</a></li>
        				<li><a href="#" class="haschild">Sizing Chart</a></li>
        				<li><a href="#" class="haschild">Reviews [<?php echo $json->customerReviews->count; ?>] <?php $options = array("rating" => $json->customerReviews->average); $this->load->view('component/stars',$options); ?></a></li>
        				<li><a href="#" class="haschild">Photos [2]</a></li>
        			</ul>
        		</div>
        		<div class="grid_1">
        			<div class="grid_2"><a href="#" class="button white-outline">Share Photo</a></div>
        			<div class="grid_2"><a href="#" class="button white-outline">Write Review</a></div>
        		</div>
        		<div class="grid_1 pillars">
        			<div class="grid_2 flush-vertical">
        				<a href="#">
        					<div><strong>Returns</strong></div>
        					Satisfaction guaranteed
        				</a>
        			</div>
        			<div class="grid_2 flush-vertical">
        				<a href="#">
        					<div><strong>Price-Match Guarantee</strong></div>
        					Buy with confidence
        				</a>
        			</div>
        			<div class="clear"></div>
        		</div>	
        		<div class="clear"></div>
                <div class="frequent">
                    <h4>Best Sellers</h4>
                    <div class="frequent-container">
                        <div class="frequent-products">
                            <a href="#">
                                <img src="//www.backcountry.com/images/items/small/NIX/NIX1854/BN.jpg"  />
                                <strong>Nixon</strong>
                                <div class="title">Showcard Card Wallet</div>
                                <div class="price">$17.45</div>
                            </a>
                            <a href="#">
                                <img src="http://www.backcountry.com/images/items/medium/FLG/FLG000E/NT.jpg">
                                <strong>FlyLow Gear</strong> 
                                <div class="title">Quantum Pro Jacket - Men's</div>
                                <div class="price">$379.95</div>
                            </a>
                            <a href="#">
                                <img src="http://www.backcountry.com/images/items/medium/ARC/ARC3663/NIG.jpg"  />
                                <strong>Arc'teryx</strong>
                                <div class="title">Cerium LT Down Jacket - Men's</div>
                                <div class="price">$324.95</div>
                            </a>      
                            <a href="#">
                                <img src="http://www.backcountry.com/images/items/medium/TNF/TNF000Y/TNRDHEBL.jpg"  />
                                <strong>The North Face</strong>
                                <div class="title">Half Dome T-Shirt - Short-Sleeve - Men's</div>
                                <div class="price">$24.95</div>
                            </a>
                            <a href="#">
                                <img src="http://www.backcountry.com/images/items/medium/PAT/PAT00EO/FEAGRE.jpg"  />
                                <strong>Patagonia</strong>
                                <div class="title">Nano-Air Insulated Hooded Jacket - Men's</div>
                                <div class="price">$299.00</div>
                            </a>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
        		<?php $this->load->view('component/help'); ?>
        	</div>
        </div>
    </div>
</div>