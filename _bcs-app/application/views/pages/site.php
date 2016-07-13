<!DOCTYPE HTML>
<html lang="en-US">
<head>
<title></title>
<meta charset="UTF-8">
<link rel="stylesheet" href="<?php echo base_url(); ?>css/screen.css" />
</head>
<body class="preview-body iphone-5-iframe">
<div class="preview-article">
	<div class="preview-header">
        <a href="#" class="preview-branding"><img src="<?php echo base_url(); ?>img/favicons/favicon-400×400.png" alt="" /></a>
        <div class="preview-list">
            <div class="current">Home</div>
            <div class="preview-dropdown">
                <a href="#">All Views</a>
                <a href="#">Home</a>
                <a href="#">Onboarding</a>
            </div>
        </div>
		<div class="preview-aside">
            <a href="#"><span class="icons">&#128241;</span></a>
            <a href="#"><span class="icons">&#59212;</span></a>
            <a href="#" class="refresh"><span class="icons">&#10227;</span></a>
            <!--<a href="#"><span class="icons">&#128247;</span></a>
            <a href="#"><span class="icons">&#128229;</span></a>-->
		</div>
		<div class="preview-nav">
			<a href="#" data="iphone-5-iframe" class="selected">iPhone 5</a>
			<a href="#" data="iphone-6-iframe">iPhone 6</a>
			<a href="#" data="iphone-6-Plus-iframe">iPhone 6 Plus</a>
			<a href="#" data="ipad-iframe">iPad</a>
		</div>
	</div>
	<div class="preview-main scroll">
		<div class="document">
			<div class="device-width">320px</div>
            <div class="status-bar">
                <div class="carrier"><img src="<?php echo base_url(); ?>img/system/carrier@3x.png" alt="" /></div>
                <div class="clock"></div>
                <div class="battery"><img src="<?php echo base_url(); ?>img/system/battery@3x.png" alt="" /></div>
            </div>
			<iframe id="frame" src="<?php echo base_url(); ?><?php echo $this->uri->segment(2); ?>" frameborder="0"></iframe>
		</div>
	</div>
</div>
<script src="<?php echo base_url(); ?>js/zepto.min.js"></script>
<script src="<?php echo base_url(); ?>js/zepto.touch.min.js"></script>
<script src="<?php echo base_url(); ?>js/zepto.fx.js"></script>
<script src="<?php echo base_url(); ?>js/zepto.fx_method.js"></script>
<script src="<?php echo base_url(); ?>js/zepto.preview.js"></script>
</body>
</html>