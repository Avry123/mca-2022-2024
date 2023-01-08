<?php 

$username = $_POST['name'];

$message = $_POST['review'];

$review =  '<br>' . $username . ' ' . '<br><br>' . $message;

$file = fopen('file1.txt', 'a');

fwrite($file, $review);

fclose($file);

echo '<h1>The record has been inserted</h1>';

echo "<a href='fileOperation.php'>Check your review if the review has been recorded</a>";

?>