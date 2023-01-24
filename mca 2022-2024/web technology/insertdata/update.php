<?php

$servername = "localhost";
$username = "root";
$password = "avry";
$db = "student";

$conn = new mysqli($servername, $username, $password, $db);

$id = $_POST['id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];

$sql = "UPDATE student SET first_name = '$fname', last_name = '$lname', email = '$email' Where id = '$id'";

if ($conn->query($sql) === TRUE) {
  echo "data has been inserted successfully";
} else {
  echo "The Error is " . $sql . "<br>" . $conn->error;
}

$conn->close();
 ?>
