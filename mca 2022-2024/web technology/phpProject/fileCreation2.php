<?php 
session_start();

$x = $_SESSION['email_10'];

$title = $_POST['title'];

$message = $_POST['message'];

$t_m = $title . $message;

// Establish a connection to the database
$mysqli = new mysqli("localhost", "root", "avry", "nba");

// Check for errors
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

// Collect the data from the form
$username = $x;
$blog_name = $_POST['blog_name'];

// Escape the data to prevent SQL injection attacks
// $username = $mysqli->real_escape_string($username);
// $blog_name = $mysqli->real_escape_string($blog_name);

// Construct the INSERT query
$query = "INSERT INTO blog (username, blog_name) VALUES ('$username', '$blog_name')";

// Execute the query
if ($mysqli->query($query)) {
    echo $username;
    echo "Query successful.\n";
    $file = fopen($blog_name. '.txt', 'w');
    fwrite($file , $t_m);
    fclose($file);
    echo "<h1><a href='fileOperation.php'>Change Operation</a></h1>";
} else {
    echo "Query failed.\n";
}


// Close the connection
$mysqli->close();


?>