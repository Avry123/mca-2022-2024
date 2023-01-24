<?php 

session_start();

$email = $_SESSION['email'];

echo '<h1>The username is', $email , '</h1>';

?>