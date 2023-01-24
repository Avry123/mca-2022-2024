<?php

$server = "localhost";
$username = "root";
$password = "avry";
$database = "customer10";

$conn = new mysqli( $server, $username, $password, $database );

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];

echo "$email";
echo "$password";

$sql = "INSERT INTO customer10 (email, password) VALUES('$email', '$password')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

 ?>
