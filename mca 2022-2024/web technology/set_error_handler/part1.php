<?php 

function myErrorHandler($errno,$errstr,$errline) {
    echo '<h1>The error number is ,' . $errno . '</h1>';
    echo '<h1>The error line is, ' . $errline . '</h1>';
    echo '<h1>The error is being caused by ' . $errstr . '</h1>';
}

set_error_handler('myErrorHandler');

$test = 1;

if ($test < 2) {
    trigger_error('Hello this is great');
}

?>