<div class="suggestions">
	<div class="grid_1 fluff">
		<h4><?php echo $title; ?></h4>
	</div>
	<div class="clear"></div>
	<div class="container">
		<div class="overflow">
			<div class="item">
				<?php 
					$options = array(
						"image"		=>	"http://www.backcountry.com/images/items/medium/LLE/LLE1178/DMWARGRE.jpg",
						"brand"		=>	"Lolë",
						"title"		=>	"Casual Full-Zip Hoodie - Women's",
						"price"		=>	"$54.97",
						"from"		=>	true,
						"sale"		=>	false,
						"outlet"	=>	true
					);
					$this->load->view('component/listing', $options);
				?>
			</div>
			<div class="item">
				<?php 
					$options = array(
						"image"		=>	"http://content.backcountry.com/images/items/medium/LLE/LLE1032/FRO.jpg",
						"brand"		=>	"Lolë",
						"title"		=>	"Casual Full-Zip Hoodie - Women's",
						"price"		=>	"$45.48",
						"from"		=>	false,
						"sale"		=>	false,
						"outlet"	=>	true
					);
					$this->load->view('component/listing', $options);
				?>
			</div>
			<div class="item">
				<?php 
					$options = array(
						"image"		=>	"http://www.backcountry.com/images/items/medium/VAN/VAN0924/METGD.jpg",
						"brand"		=>	"Vans",
						"title"		=>	"Spicoli 4 Shades - Men's",
						"price"		=>	"$7.17",
						"from"		=>	false,
						"sale"		=>	true,
						"outlet"	=>	false
					);
					$this->load->view('component/listing', $options);
				?>
			</div>
			<div class="item">
				<?php 
					$options = array(
						"image"		=>	"http://www.backcountry.com/images/items/large/VLC/VLC8607/BK.jpg",
						"brand"		=>	"Volcom",
						"title"		=>	"Full Stone Sock",
						"price"		=>	"$6.26",
						"from"		=>	false,
						"sale"		=>	false,
						"outlet"	=>	true
					);
					$this->load->view('component/listing', $options);
				?>
			</div>
			<div class="item">
				<?php 
					$options = array(
						"image"		=>	"http://www.backcountry.com/images/items/large/NIX/NIX1047/WHFINSTR.jpg",
						"brand"		=>	"Nixon",
						"title"		=>	"Showoff Bi-Fold Wallet - Men's",
						"price"		=>	"$13.96",
						"from"		=>	true,
						"sale"		=>	false,
						"outlet"	=>	true
					);
					$this->load->view('component/listing', $options);
				?>
			</div>
		</div>
	</div>
</div>