<?php 
function staticDemo() {
    static $counter = 0;

    echo '<h1>Call made to ' .  __FUNCTION__ . ' no of times to times  ' . $counter . '</h1>';

    $counter++;

}

staticDemo();
staticDemo();
staticDemo();
staticDemo();

?>