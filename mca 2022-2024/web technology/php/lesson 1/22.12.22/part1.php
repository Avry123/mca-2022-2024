<?php 
set_error_handler(function($errno, $errstr) {
    throw new Exception($errstr);
});             

$i = 10;
$j = 20;
$age = 16;


$arr = array(11,22);


try {
    // echo $i/$j;
    // echo $arr[3];
    $f = fopen('nofile.txt', 'r');
    // throw new Exception('thwowing sample exception');

}  
catch (DivisionByZeroError $th) {
    echo '<h1>This is specific exception', $th->getMessage()  ,'</h1>';
    echo '<h1>This is specific exception', $th->getFile()  ,'</h1>';
    echo '<h1>This is specific exception', $th->getLine()  ,'</h1>';
 }  
//  catch (FileNotFound $th) {
//     echo '<h1>,', $th->getMessage()  ,',</h1>';
// } 
catch (Exception $th) {
    echo '<h1>Generalised exception', $th->getMessage()  ,'</h1>';
    echo '<h1>This is generalised exception', $th->getFile()  ,'</h1>';
    echo '<h1>This is generalised exception', $th->getLine()  ,'</h1>';
// } catch (Exception $th) {
//     echo '<h1>,', $th->getMessage()  ,',</h1>';
 } 
finally {
    echo "<h1>This will always execute</h1>";
}

echo '<h1>The line of code after exception handling</h1>';

?>