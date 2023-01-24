<?php

$servername = 'localhost';
$username = 'root';
$password = 'avry';
$db = 'fifa';

$conn = new mysqli($servername, $username, $password, $db);
$id = $_POST['id'];
$team = $_POST['team'];
$date = $_POST['date'];


if ($conn->connect_error) {
  die('Connection failed' . $conn->connect_error);
}

$sql = "UPDATE fifa SET team = '$team' , date = '$date' WHERE id = '$id' ";

if ($conn->query($sql) === TRUE) {
  echo "data has been updated successfully";
  include 'fifateam.php';
} else {
  echo "Error is " . $sql . "<br>" . $conn->error;
}

$conn->close();




?>
