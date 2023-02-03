<?php 

class A {
    public function __construct($num1,$num2) {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }
}

class B extends A {
    public function __construct($num1,$num2,$num3) {
        parent::__construct($num1,$num2);
        $this->num3 = $num3;
    }

    public function show() {
        return ($this->num1 . ' ' . $this->num2 . ' ' . $this->num3);
    }
}

$b = new B(10,20,30);

echo $b->show()

?>