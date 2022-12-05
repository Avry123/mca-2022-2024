<?php 

// call by reference

function add5(&$num1) {
    return $num1 += 5;
}

$a = 10;

echo "<br><h2>Before the call by ref a $a";
echo "<br><h2>After first call a= ", add5($a);
echo "<br>after the second call a = ", add5($a);
echo "<br>after call by ref twice a = $a"; 

?>