<?php 

if (isset($_POST['no']) && isset($_POST['team_name']) && isset($_POST['player_name'])) {
   $id = $_POST['no'];
   $player_name = $_POST['team_name'];
   $team_name = $_POST['player_name'];
   $conn = mysqli_connect('localhost', 'root', '', 'nba');
   try {
   $sql = "INSERT INTO players (id,player_name, team_name) VALUES('$id','$player_name', '$team_name')";
   mysqli_query($conn,$sql);   
} catch (Exception $e) {
    echo $e;
   }
} else {
    echo '<h1>There is no data</h1>';
}

?>