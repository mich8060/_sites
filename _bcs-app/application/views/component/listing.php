<div class="listing">
	<div class="image"><img src="<?php echo $image; ?>" alt="" /></div>
	<div class="brand"><strong><?php echo $brand; ?></strong></div>
	<div class="title"><?php echo $title; ?></div>
	<?php if($outlet){ ?>
		<div class="price outlet">Outlet <?php if($from) { echo "from"; } ?> <?php echo $price; ?></div>
	<?php }elseif($sale){ ?>
		<div class="price sale">Sale <?php if($from) { echo "from"; } ?> <?php echo $price; ?></div>
	<?php }else{ ?>
		<div class="price"><?php echo $price; ?></div>
	<?php } ?>
</div>