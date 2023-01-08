<?php 

$email = $_POST['email'];

$password10 = $_POST['password'];

$server = 'localhost';

$username = 'root';

$password = 'avry';

$db = 'nba';

$conn = mysqli_connect($server, $username, $password, $db);

$sql = $sql = "INSERT INTO signin (email, password) VALUES ('$email', '$password10')";

if ($conn) {
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
        echo "<a href='login.php'>Login</a>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} else {
    echo '<h1>Connection Unsuccessful', mysqli_connect_error($conn) ,'</h1>';
}

?>