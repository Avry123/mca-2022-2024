<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .outside {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 1em;
        
    }
    .inside {
        display: flex;
        justify-content: space-between;
        background: red;
    }

    .inside2 {
        min-width: 80px;
    }
</style>
<body>
<?php 
// Key and Value

$array1 = array("team1" => 'Cleveland Cavaliers', 'team2' => 'Dallas Mavericks', 'team3' => 'Utah Jazz');

echo 'Accesing assosciative array with print_r';

echo '<h1> Keys ' . print_r(array_keys($array1)) . '</h1>';

echo '<h1> Values '. print_r(array_values($array1)) . '</h1>';

echo '<h1>Count : ' . count($array1) . ' sizeof ' . sizeof($array1) . '</h1>';

foreach ($array1 as $key => $value) {
    echo '<h1>The key is ' .  $key . ' the value is ' . $value . '</h1>'; 
};

$emp = array(
    "101" => array(
        'email' => 'neel12@gmail.com',
        'mobile' => 12345678,
        'dept' => 'Testing',
        'city' => 'Mumbai'
    ),
    "102" => array(
        'email' => 'reet12@gmail.com',
        'mobile' => 23456789,
        'dept' => '.Net',
        'city' => 'Pune'
    ),
    "103" => array(
        'email' => 'uday@gmail.com',
        'mobile' => 34567891,
        'dept' => 'JavScript',
        'city' => 'Mumbai'
    ),
    '104' => array(
        'email' => 'gaurange@gmail.com',
        'mobile' => 45678911,
        'dept' => 'Python',
        'city' => 'Banglore'
    )
    );

$empid = array_keys($emp);
echo '<div class="outside">';

for($i = 0; $i < count($empid); $i ++) {
    echo '<div class="inside">';
    foreach($emp[$empid[$i]] as $key => $value) {
        
        echo '<div class="inside2">', $value, '</div>';
       
    }
    echo '</div>';

}
echo '</div>';

?>
</body>
</html>