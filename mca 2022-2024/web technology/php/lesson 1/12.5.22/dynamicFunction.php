<?php 
function dynamic10(...$a) {
    $sum = 0;
    foreach ($a as $atotal) {
        $sum += $atotal;
    };
    echo $sum ;
}

dynamic10(10,20,30,40,50);
?>