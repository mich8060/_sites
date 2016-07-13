<?php $this->load->view('sections/head'); ?>
<article>
	<div class="body" style="left:0;">
        <div class="main-container">
            <?php $this->load->view($template); ?>
        </div>
	</div>
</article>
<?php $this->load->view('sections/foot'); ?>