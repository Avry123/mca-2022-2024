<?php
$conn = mysqli_connect('localhost', 'root', '', 'nba');

$sql = 'SELECT * FROM players';

$result = mysqli_query($conn, $sql);

$no_of_records_per_page = 5;

$no_of_records = mysqli_num_rows($result);

$no_of_pages = ceil($no_of_records / $no_of_records_per_page);

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}

$start_page = ($page - 1) * $no_of_records_per_page; 

$sql1 =  "SELECT * FROM players LIMIT $start_page, $no_of_records_per_page";

$result1 = mysqli_query($conn, $sql1);

while ($i = mysqli_fetch_assoc($result1)) {
    #id , player_name, team_name
    echo '<h1>' . $i['id'] . ' , ' . $i['player_name'] , ' , ' , $i['team_name'] . '</h1>';
}

for ($i=1; $i <= $no_of_pages; $i++) { 
    echo "<a href='pageination.php?page=" . $i . "'>" . $i . '</a>';
}

mysqli_close($conn);

?>