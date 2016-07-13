<?php $this->load->view('sections/head'); ?>
<?php $this->load->view('sections/titlebar'); ?>
<article>
	<div class="menu-overlay"></div>
	<?php $this->load->view('component/notifications'); ?>
	<?php $this->load->view('component/dialog'); ?>
	<?php $this->load->view('component/modal'); ?>
	<?php $this->load->view('component/search-toolbar'); ?>
	<?php $this->load->view('component/mini-cart'); ?>
	<?php $this->load->view('component/share'); ?>
	<div class="nav touchswipe">
        <a href="#" data="Morning" class="active">Morning</a>
        <a href="#" data="Afternoon">Afternoon</a>
        <a href="#" data="Evening">Evening</a>
        <a href="#">Weekends</a>
    </div>
	<main class="scroll" style="padding-top:20px;">
        <div class="main-container">
            <?php $this->load->view($template); ?>
        </div>
	</main>
	<?php $this->load->view('sections/toolbar'); ?>
    <?php  $this->load->view('component/options'); ?>
    <?php  $this->load->view('component/selector'); ?>
</article>
<?php $this->load->view('sections/menu'); ?>
<?php $this->load->view('sections/foot'); ?>