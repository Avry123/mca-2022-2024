<?php 

$conn = mysqli_conn('localhost:3306', 'root','', 'students')

if ($conn) {
    echo '<h1>Successfyl'
}

$query = 'CREATE TABLE mcafy IF NOT EXISTS(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    dept VARCHAR(20),
    batch VARCHAR(20)
)'

if ($stmt = $conn->query($query)) {
    echo '<h1>Table created</h1>';
} else {
    echo '<h1>Table not created</h1>';
}
?>