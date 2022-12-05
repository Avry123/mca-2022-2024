<?php 
function abc() {
    echo "<br><h2>you are at line:  ", __FUNCTION__;
}

echo "<br><h2>you are at line: ", __LINE__;
echo "<br><h2>your file name is: ", __FILE__;
echo "<br><h2>You are at line: ", __DIR__;
?>