<div class="modal">
	<a href="#" class="modal-close"><img src="<?php echo base_url(); ?>img/layout/close@3x.png" alt="" /></a>
	<?php if($titlebar){ ?>
	<div class="modal-titlebar">
		<div class="modal-title"><?php echo $title; ?></div>
	</div>
	<?php } ?>
	<div class="modal-body">
		<?php echo $body; ?>
	</div>
</div>