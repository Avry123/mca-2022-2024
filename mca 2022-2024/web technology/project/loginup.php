<?php

$server = "localhost";
$username = "root";
$password = "avry";
$database = "customer10";

$conn = new mysqli($server, $username, $password, $database);

$email = $_POST['email'];
$password = $_POST['password'];


 //to prevent from mysqli injection
$username = stripcslashes($email);
$password = stripcslashes($password);
 $username = mysqli_real_escape_string($conn, $username);
 $password = mysqli_real_escape_string($conn , $password);

   $sql = "select * from customer10 where email = '$email' and password = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if($count == 1){
          include("start.php");
       }
       else{
           echo "<h1> Login failed. Invalid username or password.</h1>";
       }

 ?>
