<?php 

$conn = mysqli_connect('localhost:3306','root','');

if ($conn) {
    echo '<h1>Connection established successfully</h1>';
} else {
    echo '<h1>An error occured', mysqli_error($conn) , '</h1>';
}

if ($stmt = $conn->query('SHOW DATABASES')) {
    echo '<h1>The total number of rows are,' , $stmt->num_rows  , '</h1>';
}

while ($db = $stmt->fetch_assoc()) {
    echo '<h1>The values of the key are ' , $db['Database'] , '</h1>';
}

?>