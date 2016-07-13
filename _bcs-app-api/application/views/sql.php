
<?php

foreach($query as $q){
    echo 'tx.executeSql(\'INSERT INTO CATEGORIES (id, bcs, name, haschild, parent, stack) VALUES ('.$q->id.', "'.$q->bcs_id.'", "'.$q->name.'", '.$q->hasChild.', "'.$q->parent.'","'.$q->order.'")\');';
    echo '<br />';
}

?>