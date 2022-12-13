<?php 
 class A {
    function show() {
        echo '<h1>Hello this is show function';
        echo '<h2>the class is ' . __CLASS__ . '</h1>';
        echo '<h2>The method is '. __METHOD__ . '</h1>';
    }
    

}
class B extends A {
    function show() {
        parent::show();
        echo '<h1>Class,' .__CLASS__ . __METHOD__ . '</h1>';
    }

}

$m = new B();

$m->show();
?>