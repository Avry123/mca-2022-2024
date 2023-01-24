<?php

$servername = 'localhost';
$username = 'root';
$password = 'avry';
$db = 'fifa';

$conn = new mysqli($servername, $username, $password, $db);
$id = $_POST['id'];



if ($conn->connect_error) {
  die('Connection failed' . $conn->connect_error);
}

$sql = "DELETE FROM fifa WHERE id='$id' ";

if ($conn->query($sql) === TRUE) {
  echo "data has been delted successfully";
  include 'fifateam.php';
} else {
  echo "Error is " . $sql . "<br>" . $conn->error;
}

$conn->close();




?>
