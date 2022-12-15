<?php 

class MyCalc implements Calc1, Calc2 {
    function sum() {
        echo '<h1>', Calc1::a , '</h1>';
    }
    function multiply() {}
    function div() {}
    function square() {}
    // $a = 14.4;
}

abstract class Name extends MyCalc {

}

interface Calc1 {
    const a = 12.5;
    function sum();
    function multiply();
}

interface Calc2 {
    function sum();
    function div();
    function square();
    // $a = 13.4;
}


$s = new MyCalc;
$s->sum();
$s1= new Name;
$s1->sum();
?>