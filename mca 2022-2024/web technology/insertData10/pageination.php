<?php 
$conn = mysqli_connect('localhost', 'root', '', 'nba');

$no_of_records_per_page = 5;

$sql = 'SELECT * FROM teams10';

$result = mysqli_query($conn,$sql);

$no_of_records = mysqli_num_rows($result);

$no_of_pages = ceil($no_of_records/$no_of_records_per_page);

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1 ;
}

$start_page = ($page - 1) * $no_of_records_per_page;

$sql1 = "SELECT * FROM teams10 LIMIT $start_page , $no_of_records_per_page";

$result1 = mysqli_query($conn,$sql1);

while ($i = mysqli_fetch_assoc($result1)) {
    print_r($i);
}

for ($i=1; $i <= $no_of_pages; $i++) { 
    echo "<a href='pageination.php?page=" . $i . "'>" . $i . "</a>";
}

?>