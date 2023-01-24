<?php 

function setErrorHandler($errno, $errstr, $errline) {
echo '<h1>This is the errono' . $errno . '</h1>';
echo '<h1>The error string is ' . $errstr . '</h1>';
echo '<h1>The error line number is ' . $errline . '</h1>';
}

set_error_handler('setErrorHandler');

$x = TRUE;

if ($x == TRUE) {
    trigger_error('Hello everyone');
}

?>
