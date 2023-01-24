<?php 
class HelloException extends Exception {
      function say() {
        echo '<h1>The error is ' .  $this->getMessage() . '</h1>'; 
        echo '<h1>The line is ' . $this->getLine() . '</h1>';
      }
}

try {
    throw new HelloException('Hello World');
} catch (HelloException $e) {
    echo '<h1>The error is,  ' . $e . '</h1>';
}

?>