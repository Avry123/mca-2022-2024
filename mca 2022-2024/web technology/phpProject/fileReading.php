<?php 
session_start();

$_username = $_SESSION['email_10'];

$servername = 'localhost';

$username = 'root';

$password = 'avry';

$db = 'nba';


$conn = new mysqli($servername,$username,$password, $db);

if ($conn) {
    echo '<h1>Connection is successful</h1>';
    $query = "SELECT blog_name FROM blog WHERE username = '$_username'";
    $result = $conn->query($query);
    while ($row = mysqli_fetch_assoc($result)) {
        $file = fopen($row['blog_name'] . '.txt', 'r');
        while (!feof($file)) {
            $line = fgets($file);
             echo $line , '<br><br>';
        }
        fclose($file);
    }
    

} else {
    echo '<h1>' , mysqli_errno($conn) , '</h1>';
}

?>