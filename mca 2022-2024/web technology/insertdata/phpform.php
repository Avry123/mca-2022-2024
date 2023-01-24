<?php


  $servername = 'localhost';
  $username = 'root';
  $password = 'avry';
  $db = 'student';

  $conn = new mysqli($servername, $username, $password, $db);

  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];

  if ($conn->connect_error) {
    die('Connection failed' . $conn->connect_error);
  }

  $sql = "INSERT INTO student(first_name, last_name, email ) VALUES ('$fname', '$lname'  , '$email' )";

  if ($conn->query($sql) === TRUE) {
    echo "data has been inserted successfully";
  } else {
    echo "Error is " . $sql . "<br>" . $conn->error;
  }

  $conn->close();




 ?>
