<?php 

session_start();

$_username = $_SESSION['email_10'];

$servername = 'localhost';

$username = 'root';

$password = 'avry';

$db = 'nba';

$title = $_POST['title'];

$message = $_POST['message'];

#echo '<h1>' . $title . '</h1>';

#echo '<h1>' . $message . '</h1>';

echo "<a href='fileReading.php'>Read your own blog</h1>";

$result10 = '<br>' . $title . '<br>' . $message . '<br>';

$conn = new mysqli($servername,$username,$password,$db);

if ($conn) {
    echo '<h1>Connection is successful</h1>';
    $query = "SELECT blog_name FROM blog WHERE username = '$_username'";
    $result = $conn->query($query);
    while ($row = mysqli_fetch_assoc($result)) {
        $file = fopen($row['blog_name'] . '.txt', 'a');
        fwrite($file,$result10);
        fclose($file);
    }
    

} else {
    echo '<h1>' , mysqli_errno($conn) , '</h1>';
}

?>