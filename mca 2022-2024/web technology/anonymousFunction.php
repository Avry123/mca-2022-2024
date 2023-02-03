<?php 

$a = [1,2,3,4,5,6];

$b = array_map(function ($a1) {
       return $a1 * $a1;
}, $a);

print_r($b);

?>