<?php 
$connection = mysqli_connect('localhost:3306','root','','zoo');

// mysqli_connect('host:portno', 'user','password','database_name-optional');
// $connevction = mysqli_connect('localhost:3306', 'root',''); connects to the mysql server.
if ($connection) {
    echo '<h1>Connection established</h1>';
} else {
    echo '<h1>The connection failed because of, ' , mysqli_error($connection), '</h1>';
}
?>