<?php 
class A {
    public $num1;
    private $num2;
    protected $message;

    public function __construct($num1,$num2,$message) {
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->message = $message;
    }

    public function show1() {
        return $this->num1;
    }

    private function show2() {
        return $this->num2;
    }

    protected function show3() {
        return $this->num3;
    }
}

class B extends A {
    public function show3() {
        return $this->num3;
    }
}

$b = new B(10,20,'Hello Message');

echo $b->show1();

?>