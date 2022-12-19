<?php 
$i = 0;
$q = 1.2;
$w = 222;
$e = 'This is a string';

class A {}

$r = new A;

$file = fopen('file1.txt', 'r');

echo '<h1>This is to show get_type ' . gettype($file) . '</h1>';

echo '<h1>This is to show var_dump' . var_dump($file) . '</h1>';


fclose($file);

echo 'This is to show var_dump' . var_dump($i); 

echo '<br>This is to show var_dump' . var_dump($q);

echo '<br>This is to show var_dump' . var_dump($w); 

echo '<br>This is to show var_dump string' . var_dump($e);


echo 'This is to show get_type ' . gettype($i);

echo '<br>This is to show get_type ' . gettype($q);

echo '<br>This is to show get_type ' . gettype($w); 

echo '<br>This is to show get_type string ' . gettype($e);


echo '<h1>This is class' . $r . '</h1>';



?>