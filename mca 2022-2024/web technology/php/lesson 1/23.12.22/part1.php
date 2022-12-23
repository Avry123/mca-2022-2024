<?php 

$conn = mysqli_connect('localhost:3306', 'root', '', 'students');

if ($conn) {
    echo '<h1>The connection  is successful</h1>';
} else {
    echo '<h1>The connection is unnsuccessful</h1>';
}

$stmt = $conn->prepare('insert into student(id,name) VALUES (?,?)');

$stmt->bind_param('ss', $id,$name);

$name = 'neel@gmail.com';
$id = '2';
#$utype ='admininstrator';

if ($stmt->execute()) {
    echo '<h1>Prepared statement executed and record inserted</h1>';
}

$name = 'reet@gmail.com';
$id = '3';
$stmt->execute();
#$utype = 'admin';




?>