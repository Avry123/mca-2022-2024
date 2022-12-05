<?php 
$subjects = array("web technology", "DBMS ");

echo "<br>The length of the subjects array is ", count($subjects);

for ($i = 0; $i< count($subjects); $i++) {
    echo '<BR> ', $subjects[$i];
}

echo "<br> using print_r() ", print_r($subjects) ;

foreach ($subjects as $key => $value) {
    echo '<br> ' .  $key . " " . $value;
}

?>