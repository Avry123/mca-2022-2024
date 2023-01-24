<?php


$servername = "localhost";
$username = "root";
$password = "avry";
$dbname = "employee";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$id = $_POST['id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$sql = "INSERT INTO employee (id, first_name, last_name, email) VALUES ('$id', '$fname' , '$lname' , '$email')";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  echo $fname . ' ' . $lname . ' ' . $email . ' ' . $id;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

 ?>
