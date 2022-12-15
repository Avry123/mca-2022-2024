<?php 
abstract class Calc {
    // Abstract class can have only constant data memebers
    // If class constains abstract method class mush be declared as abstract
    // abstract class can have both abstract and normal methods
    // abstract keyword is musht if you wnat to declare a method
    // An abstract class may or may not have abstract methhod
    // You cannot create the object of the abstract class.
    function __construct() {
        echo '<h1>The class is 1 ' , __CLASS__ , '</h1>';
    }
    abstract function sum($a,$b) ;
    function null($a,$b) {
        return $a * $b;
    }
    static function info() {
        echo '<h1>Static Function' . __CLASS__. 'Method'. __METHOD__ . '</h1>';
    }
}

class MyCalc extends Calc {
    // Child Class inheriting from parent abstract class must define/implement all parent
    // Abstract methods or declare itself as abstract
    // child class which override all abstract methods of parent class can be instantiated.
    function __construct() {
        // parent::__construct();
        parent::info();
        echo '<br>' , __CLASS__, 'method: ', __METHOD__;
    }
    function sum($a,$b) {return $a + $b;} //method overriding
    function div($a,$b) {return $a/$b;}
}

// $c = new Calc;
$c1 = new MyCalc;

echo '<h3>' . $c1->sum(2,2) . '</h1>';
echo '<h3>' . $c1->div(4,2) . '</h1>';
?>