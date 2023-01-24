<?php 

function setMyErrorHandler($errno,$errstr,$errline) {
    echo '<h1>The error no is' , $errno , '</h1>';
    echo '<h1>The error name is ', $errstr, '</h1>';
    echo '<h1>The errline is ', $errline , '</h1>';
}

set_error_handler('setMyErrorHandler');

$trust = 1;

if ($trust > 0) {
    trigger_error('Hello Everyone');
}

?>