<?php

if($_SERVER['HTTP_HOST'] == "localhost:8888"){
    $service = 'http://localhost:8888/_sites/_bcs-app-api/categories';
}else{
   $service = 'http://design.backcountry.com/mobile/services/categories'; 
}
$service = 'http://localhost:8888/_sites/_bcs-app-api/categories';

?>

<menu>
	<div class="sidebar">
		<div class="sidebar-container">
			<a href="home"  class="direct">Home</a>
			<a href="#">Messages <span>1</span></a>
			<a href="wishlist" class="direct-share">Wish List</a>
			<a href="orders" class="direct">Orders</a>
			<a href="tel:1-855-712-0515">Help</a>
			<a href="#" class="more-btn" data="more">More...</a>
		</div>
	</div>
	<div class="menu-container scroll">
        <div class="alphabet">
            <a href="#">#</a><a href="#">A</a><a href="#">B</a><a href="#">C</a><a href="#">D</a><a href="#">E</a><a href="#">F</a>
            <a href="#">G</a><a href="#">H</a><a href="#">I</a><a href="#">J</a><a href="#">K</a><a href="#">L</a>
            <a href="#">M</a><a href="#">N</a><a href="#">N</a><a href="#">O</a><a href="#">P</a><a href="#">Q</a>
            <a href="#">R</a><a href="#">S</a><a href="#">T</a><a href="#">U</a><a href="#">V</a><a href="#">W</a>
            <a href="#">X</a><a href="#">Y</a><a href="#">Z</a>
        </div>
		<div class="profile">
            <a href="profile" class="profile-bubble" data="account">
                <span class="circle"><img src="http://iris.backcountry.com/image/view/p1236002/300/300" alt="" /></span>
                <span class="name">John Doe</span>
            </a>
			<a href="#" class="button blue">Sign In</a>
		</div>
        <div class="navigation-spacer"></div>
		<div class="navigation scroll">
            <div class="navigation-head">
                <a href="#" class="nav-back">Main Menu</a>
            </div>
            <div class="navigation-body scroll">
                <?php
					$ch = curl_init($service);
						  curl_setopt($ch, CURLOPT_TIMEOUT, 20);
						  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 20);
						  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
					$data = curl_exec($ch);
					curl_close($ch);
					echo $data;
				?>
            </div>
		</div>
		<?php $this->load->view('component/help'); ?>
		<div class="copyright">
			&copy; Backcountry.com <br />
			All Rights Reserved <br />
			Version 2.0
		</div>
	</div>
</menu>