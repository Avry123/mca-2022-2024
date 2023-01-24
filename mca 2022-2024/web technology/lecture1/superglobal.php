<?php

echo "<br> provides the server name " . $_SERVER["PHP_SELF"] . "<BR>";

echo "<br> using superglobal_server " . $_SERVER["SERVER_NAME"] . "<BR>";

echo "<br> using superglobal _server " . $_SERVER["HTTP_HOST"] . "<BR>";

echo "<br> using superglobal_server " .$_SERVER["SCRIPT_NAME"] . "<BR>";

echo "<br> using superglobal _server " . $_SERVER["HTTP_USER_AGENT"] . "<BR>";

function name($name) {
   echo "Good morning " . $name . ".";
}

function add($num1 , $num2) {
  return $num1 + $num2;
}

$res = add(30, 40);

name("neel");

echo "<br><br>the other way of calling things " . $res ;

echo "<br><br>the total addition is " . add(10,20) ;

function course($name , $course = "MCA") {
  return "hello $name, you are from $course right?";
}

$a = 10;

$b = 10;

function add5(&$num1, &$num2) {
  $num1+=5;
  $num2+=5;

  echo "<br> <br> a=" . $num1 . " and b = " . $num2 ."<br>";
}

echo "<br><br> Using the default value is  " . course("neel");

echo "<br><br> Giving the value to both things" . course("neel", "MBA");

add5($a, $b);

echo "<br> a = " . $a  ." and b = " .  $b ."<br>";

echo "$a , $b";

echo "<br> a = " . $a . " and b =" .$b . "<br>" ;


function numbers(...$number) {

  $res = 0;

  foreach( $number as $n) {
    $res += $n;
  }
  echo " <br><br>the total number is " . $res . ".";
}

numbers(10, 20, 30);

numbers(50, 60, 809);

numbers(34,54,64,33);

$friends = array("neel", "reet", "mangesh", "tanvi", "gaurang");

echo "<br><br>" . print_r($friends);

echo "<br><br>" . var_dump($friends);

foreach($friends as $name) {
  echo "<br><br>" . $name;
}

 ?>
