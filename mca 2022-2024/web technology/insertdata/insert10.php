<?php

$servername = 'localhost';
$username = 'root';
$password = 'avry';
$db = 'fifa';

$conn = new mysqli($servername, $username, $password, $db);

$team = $_POST['team'];
$date = $_POST['date'];


if ($conn->connect_error) {
  die('Connection failed' . $conn->connect_error);
}

$sql = "INSERT INTO fifa(team, date ) VALUES ('$team', '$date' )";

if ($conn->query($sql) === TRUE) {
  echo "data has been inserted successfully";
  include 'fifateam.php';
} else {
  echo "Error is " . $sql . "<br>" . $conn->error;
}

$conn->close();




?>
