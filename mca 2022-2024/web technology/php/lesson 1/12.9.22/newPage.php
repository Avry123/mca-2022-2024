<?php 
$email = $_REQUEST['email'];

$password = $_REQUEST['password'];

if ($email == 'neel@gmail.com' && $password == '12345') {
    echo '<h1>Login Succesfull</h1>';
    $email = '';
    $password = '';
} else {
    echo '<h1>Login Unsuccessfull.</h1>';
    echo "<a href='part2.php'>Go Back</a>";
}

?>
