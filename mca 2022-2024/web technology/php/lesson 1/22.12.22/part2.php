<?php 
$conn = mysqli_connect('localhost:3306', 'root', '');

if ($conn) {
    echo '<h1>Congragulations, connection has been established</h1>';
} else {
    echo '<h1>My sqli error,', mysqli_error($conn) , '</h1>';
}

if ($stmt = $conn->query('SHOW DATABASES')) {
    echo '<h1>Total number of rows are , ', $stmt->num_rows  ,'</h1>';
}
while ($db=$stmt->fetch_assoc()) {
    echo '<h3>', $db['Database'], '</h3>';
}

if ($stmt = $conn->query('USE students')) {
    echo '<h1>IT WORKS</h1>';
}  else {
    echo '<h1>Database does not exists</h1>';
}

$query1 = "INSERT INTO student VALUES (1, 'Neel Chalke', 'neel@gmail.com')";

if ($stmt = $conn->query($query1)) {
    echo '<h1>They value is inserted</h1>';
} else {
    echo '<h1>The value is not inserted</h1>';
}

if ($stmt = $conn->query('SHOW TABLES')) {
    echo '<h1>The tables in above database are' , $stmt->num_rows , '</h1>';
}

while ($tb = $stmt->fetch_assoc()) {
    echo '<h3>', $tb['Tables_in_students'] ,'</h3>';
}

$query2 = 'CREATE TABLE  IF NOT EXISTS mcaFY(
    id INT NOT NULL AUTO_INCREMENT  PRIMARY KEY,
    dept VARCHAR(20),
    batch VARCHAR(10)
)';

if ($stmt = $conn->query($query2)) {
    echo '<h1>Table created</h1>';
} else {
    echo '<h1>There is a problem',mysqli_error($conn),'</h1>';
}

$query3 = "
INSERT INTO mcafy VALUES(1, '2022-2024', 'web technology')
";

if ($conn->query($query3)) {
    echo '<h1>The value has been inserd</h1>';
} else {
    echo '<h1>The error is ', mysqli_error($conn) , '</h1>';
}

?>
