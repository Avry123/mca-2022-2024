<?php

$servername = 'localhost';
$username = 'root';
$password = 'avry';
$db = 'student';

$conn = new mysqli($servername, $username, $password, $db);


if ($conn->connect_error) {
  die('Connection failed' . $conn->connect_error);
}

$sql = "SELECT * FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - First Name " . $row["first_name"]. " Last Name " . $row["last_name"]. " email  " . $row['email'] .  "<br><br>";
  }
} else {
  echo "0 results";
}
$conn->close();


 ?>
