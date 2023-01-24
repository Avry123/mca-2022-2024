<?php  
try {
    $x = 4;
    $y = 'Hello';
    $z = $x + $y;
    echo $z;
} catch (TypeError $e) {
    echo $e;
}

?>