<?php 

try {
    $no = $_POST['no'];
    $player_name = $_POST['player_name'];
    $team_name = $_POST['team_name'];
    $conn = mysqli_connect('localhost', 'root', '', 'nba');
    $sql = "UPDATE players SET player_name = '$player_name' AND team_name = '$team_name' WHERE id = '$no' ";
    mysqli_query($conn,$sql);
    echo "<h1>Data has been update</h1>";
} catch (Exception $e) {
    echo ('<h2>The error is ' .  $e . '</h2>');
}

?>