<?php 
class MCAException extends Exception {
      function get_Message() {
        echo '<div>
              <h1>The message is,', $this->getMessage() ,'</h1>
              <h1>The line where the error occured is  , ', $this->getLine() , '</h1>
              <h1>The error code is,', $this->getCode() , '</h1>
              </div>';
      }

}

// function MCAException($e) {
//    echo '<h1>the message is,', $e->getMessage() , '</h1>';
// }

// set_exception_handler("MCAException");

try {
    // $s = 5 /0;
    throw new MCAException('good morning');
}
catch (MCAException $e) {
    echo '<h1>This is event handling ,', $e->getMessage() , '</h1>';
     echo '<h1>This is event handling ,', $e->get_Message() , '</h1>';    
}
?>