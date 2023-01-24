<?php 
abstract class A {
    abstract public function add();
    abstract public function showMessage();
}
class B extends A {
    public $num1;
    public $num2;
    public $message;
    public function __construct($num1,$num2, $message)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->message = $message;
    }

    public function add() {
        return $this->num1 + $this->num2;
    }

    public function showMessage() {
        return $this->message;
    }


}

$b10 = new B(10,20, 'Hello World');
echo($b10->add());
echo($b10->showMessage());

?>