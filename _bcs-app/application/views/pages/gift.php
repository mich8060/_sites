<div class="container">
	<div class="hero-text">
		<h3 class="presentation uppercase">Backcountry</h3>
		<h4 class="presentation light">eGift Certificates</h4>
	</div>
	<div class="clear"></div>
	<div class="inner-container">
		<div class="grid_1 fluff-vertical">
		    <a href="#" class="selector"><label>Select an Option</label> <span><img src="http://design.backcountry.com/mobile/img/layout/selector_arrow.jpg" alt="" /></span></a>
		</div>
		<div class="grid_1 flush-vertical">
			<label for="">Recipent’s Information</label>
			<input type="text" placeholder="Recipent’s Name" />
			<input type="email" placeholder="Recipent’s Email" />
		</div>
		<div class="grid_1">
			<a href="#" class="message">Add a Message</a>
		</div>
		<div class="message-block" style="display:none;">
			<div class="grid_1">
				<label for="">Recipent's Message (Optional)</label>
				<textarea placeholder="Recipent's Message"></textarea>
			</div>
		</div>
		<div class="desktop">
			<div class="grid_1">
				<a href="#" class="button blue">Add to Cart</a>
				<span class="hint text-center">
					Delivers to recipent’s email usually within 24 hours
				</span>
			</div>
		</div>
		<div class="mobile">
			<div class="grid_2"><a href="#" class="button blue">Add to Cart</a></div>
			<div class="grid_1 flush hint text-center">
				Delivers to recipent’s email usually within 24 hours
			</div>
		</div>
		<?php  $this->load->view('component/share'); ?>
		<div class="grid_1 fluff-vertial text-center">
			<?php 
			
				$options = array(
					"titlebar"	=>	true,
					"title"		=>	"eGifting Details",
					"body"		=>	"
										<p>
											<div><strong>Arrives via email within 24hrs</strong></div>
											After you buy a Backcountry eGift Certificate, the lucky recipient will receive 
											it in his or her email inbox within 24 hours, complete with the certificate ID and 
											password needed at checkout.
										</p>
										<p>
											<div><strong>Redeemable on multiple Backcountry sites</strong></div>
											The eGift certificate you purchase is redeemable at the following Backcountry.com 
											online shops: Backcountry.com, Competitivecyclist.com, and Dogfunk.com.
										</p>
										<p>
											<div><strong>Perfect for gearheads who have everything</strong></div>
											This way, they can buy that obscure piece of gear you’ve never heard of, or they can 
											wait until they need to replace something. Either way, you’re a winner.
										</p>"
				);
				$this->load->view('component/modal', $options);
			
			?>
			<a href="#" class="modal-btn fqa">Frequently Asked Questions</a>
		</div>
		<?php  $this->load->view('component/help'); ?>
	</div>
	<div class="clear"></div>
</div>