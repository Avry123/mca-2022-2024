<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<?php                     
$operation = $_POST['Action'];

$name = $_POST['name'];

$email = $_POST['email'];

$conn = mysqli_connect('localhost:3306','root','','students');



if ($conn) {
    // echo '<h1>Successfully connected</h1>';
} else {
   echo '<h1>Error', mysqli_error($conn),'</h1>';
}

$query = "INSERT INTO student(name,email) VALUES('$name', '$email')";

function insert_data() {
    GLOBAL $conn;
    GLOBAL $query;
    if ($conn->query($query)) {
        echo '<h1>Data inserted successfully</h1>';
       } else {
        echo '<h1>There was a problem', mysqli_error($conn) ,'</h1>';
       }
}

$query1 = 'SELECT * FROM student';

function show_data() {
    GLOBAL $conn;
    GLOBAL $query1;

    if ($stmt= $conn->query($query1)) {
        while ($db= $stmt->fetch_assoc()) {
            echo "<div class='pgrid'>
            <div class='child'>", $db['id'] ,"</div>
            <div class='child'>", $db['name'] ,"</div>
            <div class='child'>", $db['email'] ,"</div>
            </div>";
        }
    }

}



if ($operation == 'Insert') {
    insert_data();  
}

if ($operation == 'Show') {
    show_data();
}


?>    
</body>
</html>

