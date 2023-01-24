<?php 
class MCAexception extends Exception {
    function myDetails() {
        echo '<h1>The error no is ' . $this->getMessage() . '<h1>';
        echo '<h1>The error message is ' . $this->getLine() . '</h1>';
        echo '<h1>The error line number is ' . $this->getCode() . '</h1>';
    }
}

try {
    throw new MCAexception('Good Morning');
} catch (MCAexception $e) {
    echo '<h1>The error message is ' , $e->getMessage() , '</h1>';
    echo '<h1>The error line is ' , $e->getLine() , '</h1>';
}

?>