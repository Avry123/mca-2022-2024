<?php 

$servername = 'localhost';

$username = 'root';

$password = '';

$db = 'zoo';

$conn = mysqli_connect($servername,$username,$password,$db);

$query = 'SELECT * FROM zoo';

$stmt1 = mysqli_query($conn,$query);

$rows = mysqli_num_rows($stmt1);

$no_of_records = 3;

$no_of_pages = ceil($rows/$no_of_records);

$start = 

$query1 = 'SELECT * FROM zoo' . LIMIT
?>