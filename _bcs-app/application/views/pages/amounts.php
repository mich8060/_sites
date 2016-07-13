<?php

$amounts = array("$25","$30","$40","$50","$100","$125","$150","$175","$200","$225","$250","$500");

?>

<ul class="tableview">
    <?php
    
        foreach($amounts as $a){
            echo '<li><a href="#">';
            echo '<label>'.$a.'</label>';
            echo '</a></li>';
        }
    
    ?>
</ul>