<?php 

try {
    $id = $_POST['id'];
    $conn = mysqli_connect('localhost', 'root', '', 'nba');
    $sql = "DELETE FROM players WHERE id = '$id'";
    mysqli_query($conn, $sql);
    echo '<h1>The record has deleted.</h1>';
} catch (Exception $e) {
   echo '<h2>', $e ,'</h2>';
}

?>