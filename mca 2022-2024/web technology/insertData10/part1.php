<?php 

$conn = mysqli_connect('localhost', 'root', '', 'nba');

#$sql = 'CREATE TABLE teams10(team_name VARCHAR(25), state VARCHAR(25))';

#mysqli_query($conn,$sql);

$team_name = $_POST['team_name'];

$state = $_POST['state'];

$stmt = $conn->prepare("INSERT INTO teams10(team_name,state) VALUES(?,?)");

$stmt->bind_param('ss', $team_name,$state);

if ($stmt->execute()) {
    echo "<h1>Data Inserted,<a href='insertData.php'>Go Back</a></h1>";
}

?>