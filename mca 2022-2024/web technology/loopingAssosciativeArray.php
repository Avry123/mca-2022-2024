<?php 

$a = array(1 => 'a1', 2 => 'a2', 3 => 'a3');

$a = array(1 => array('Neel Chalke', 'Comedy'));

foreach ($a as $key => $value) {
    foreach ($value as $i) {
        echo $i;
    }
}

?>