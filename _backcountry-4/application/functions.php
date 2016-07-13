<?php

    function views($view, $data){
        $data = $data;
        include($view.'.php');
    }
    
    function load($component, $data){
        $data = $data;
        include($component);
    }

?>