<?php 

session_start();

$email = $_POST['email'];

$password = $_POST['password'];

$servername = 'localhost';

$username = 'root';

$password = 'avry';

$db = 'nba';

// Set a session variable
$_SESSION['email'] = $email;

$conn = mysqli_connect($servername,$username,$password,$db);

$sql = "SELECT * FROM signin WHERE email = '$email' AND password = '$password'";

if ($conn) {
    $result = mysqli_query($conn, $sql);
    if ($result) {
      include 'operation.php';
    } else {
        echo "Record does not exist";
    }
} else {
    echo '<h1>The connection is unsuccessful', mysqli_connect_error($conn), '</h1>';
}

?>