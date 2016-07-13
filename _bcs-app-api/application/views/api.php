<?php
	//header("Access-Control-Allow-Orgin: *");
	//header("Access-Control-Allow-Methods: *");
	//header("Content-Type: application/json");
	//echo json_encode($query);

    if($query){
        foreach($query as $q){
    	    $child = ($q->hasChild ? ' class="hasChild"' : ' class="only"');
    	    echo '<a href="#"'.$child.' data="'.$q->bcs_id.'">';
    	    echo $q->name;
    	    echo '</a>';
    	}
    }

?>