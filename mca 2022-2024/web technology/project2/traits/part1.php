<?php 
trait Bank {
  public function add($a,$b) {
      return $a + $b;
  }

  public function substract($a,$b) {
    return $a - $b;
  }

  public function multiply($a,$b) {
    return $a * $b;
  }

}

class simple1 {
    use Bank;
  public $num1;
  public $num2;
  public function __construct($num1,$num2)
    {
        $this->num1 =  $num1;
        $this->num2 = $num2;
    }

}

$s1 = new simple1(10,20);
echo($s1->add($s1->num1,$s1->num2));

echo($s1->substract($s1->num1,$s1->num2));
?>