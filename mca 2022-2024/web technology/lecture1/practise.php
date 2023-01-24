
<?php
echo (__LINE__);

echo "THIS GIVES THE FILE NAME " . __FILE__ ;

$name = "neel";
define("name2", "reet", FALSE);

echo "<br><br>" . name2;

class name {

  public static $name3 = "Bob";

  public static function hello() {
    echo "hello man";
    echo "<br><br>";
    echo "the method is " . __METHOD__ . "." ;
  }


}

$GLOBALS['X'] = "gaurang";

echo "<br><br>" . name::$name3 ;
echo "<br><br>";
echo  name::hello();

$name4 = new name();
echo "<br><br>";
$name4 -> hello();
echo "<br><br>";
echo "$X" ;

echo "<br><br>";

echo "Classname::class" . name::class . ".";

function name($num1 , $num2 = 20) {
  return $num1 + $num2 ;
}

$res = name(10);

echo "<br><br>";

echo "$res";

class neel {

  function hello2() {
    echo "hello and welcome";
  }
}

$name20 = new neel();
echo "<br><br>";
$name20 -> hello2();

 ?>
