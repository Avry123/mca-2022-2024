<?php 
trait ABC {
    function show() {echo '<h1>Called' , __METHOD__ , '</h1>';}
}

trait DEF {
    function display() {
        echo '<h1>Called',__METHOD__ , '</h1>';
    } 
}

trait FGH {
    public static $a = 'Hello';
}

class A {use ABC; use DEF; use FGH;}

$s1 = new A;
$s1->show();
echo '<h1>', $s1::$a ,'</h1>';


?>