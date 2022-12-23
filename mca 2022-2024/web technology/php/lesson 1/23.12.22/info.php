<?php 

$name = $_POST['name'];

$email = $_POST['email'];

#$password = $_POST['password'];

#$_REQUEST[],  works for both get and post

#echo $name , ' ', $email, ' ', $password ;

$conn = mysqli_connect('localhost:3306', 'root', '', 'students');

if ($conn) {
    echo '<h1>The connection is successfull';
} else {
    echo '<h1>The connection is dead', mysqli_error($conn) ,'</h1>';
}

$query = "INSERT INTO student(name,email) VALUES('$name','$email')";

#DON'T FORGET ''
#echo $query;

if ($conn->query($query)) {
    echo '<h1>Successfully record inserted</h1>';
} else {
    echo '<h1>There was a problem with insertion', mysqli_error($conn) ,'</h1>';
}



?>