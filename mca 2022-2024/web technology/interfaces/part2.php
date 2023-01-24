<?php 
interface A {
    public function sum();
}
interface B {
    public function minus();
}
interface C {
    public function division();
}
interface D {
    public function multiply();
}

class MathOperation10 implements A,B,C,D {
    public $num1;
    public $num2;

    public function __construct($num1,$num2) {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function sum() {
       return $this->num1 + $this->num2;
    }

    public function minus() {
        return $this->num1 - $this->num2;
    }

    public function division() {
        return $this->num1 / $this->num2;
    }
    public function multiply() {
        return $this->num1 * $this->num2;
    }
}

$m = new MathOperation10(10,20);
echo($m->sum());

?>