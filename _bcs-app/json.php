<?php

	$json = json_decode(file_get_contents('http://api.backcountry.com/mobile/posts/0/2.2.0'));
	
	foreach($json->posts as $j){
		echo $j->postType;
	}

?>