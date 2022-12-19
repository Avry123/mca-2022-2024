<?php 
$f = fopen('file1.txt', 'r');

echo '<h1>' , $f , '</h1>';

$age = 15;

if ($age<18) {
     trigger_error('age not valid for registration', E_USER_WARNING);
    //  Warning: age not valid for registration in D:\neel_chalke\htdocs\php\19.12.22\part1.php on line 9
}

// Creating custom error handler.
// step 1: create your custom error handler function

function myErrorHandler($errno,$errfile,$errline) {
    echo '<h3>myErrorHandler: ', $errno, ' the error line is ', $errline, ' the error file is  ', $errfile ,'</h3>';
}

function myErrorHandlerNotice($errno,$errstr,$errfile,$errline) {
    echo '<h3>MCANoticeNo:', $errno, ' at line ', $errline , ' the file where the error occured is ' , $errfile ,   '</h3>';
}
// Step 2: set the custom errorHandler as default
// set_error_handler('myErrorHandler', E_USER_WARNING);

set_error_handler('myErrorHandlerNotice', E_USER_NOTICE);

// trigger the custom err hndler as per your business login or with wrondg syntax
// $f1 = fopen('randomFile.pdf', 'r');

trigger_error('checking warnings,' , E_USER_WARNING);

trigger_error('checking notices', E_USER_NOTICE);

?>