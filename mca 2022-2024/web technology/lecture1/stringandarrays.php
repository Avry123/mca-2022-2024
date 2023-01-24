<?php
//String functions.
echo "substr";

$name = "neel";

echo (substr($name, 0));


echo "strlen";
echo strlen("Super");

echo "Str_replace()";
Echo("world", "neel", "hello world");


echo "trim()";
$message = "hello and good morning";
$trimmed = trim($message, "hello" );

echo "$trimmed";

//Arrays.

echo "Indexed arrays";

$countries = array("India", "Japan", "Canada");

echo "$cars[0]";

//how to traverse indexed arrays.

for($x = 0; $x < $arrlength; $x++) {
  echo $countries[$x];
  echo "<br>";
}

//Assosciative arrays.

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

echo $age['Peter'];

//How to traverse this array.

foreach($age as $x => $x_value) {
  		echo "Key=" . $x . ", Value=" . $x_value;
  		echo "<br>";
		}

echo "multidimensional array";

$countries10 = array (
  array("Germany",22,18),
  array("India",15,13),
  array("Japan",5,2),
  array("America",17,15)
);

echo $countires10[0][0];

//How to traverse this array.

$bikes = array(
array('BMW', '10', '10'),
array('Aprilla', '20', '20'),
array('Ducati', '30', '30'),
array('Triumph', '40', '40')
);

For ($row = 0; $row < 4; $row ++ ) {
For($column= 0; $column < 3; $column ++) {
echo     $bikes[$row][$col];                              }
                                                        }



 ?>
