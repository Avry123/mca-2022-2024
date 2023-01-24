<?php 

$conn = mysqli_connect('localhost', 'root', '', 'nba');

$sql = 'SELECT * FROM players';

$result = mysqli_query($conn,$sql);

$no_of_records_of_page = mysqli_num_rows($result);

$no_of_records_page = 5;

if (isset($_POST['page'])) {
   $page = $_POST['page'];
} else {
    $page = 1;
}

$start_page = ($page - 1) * $no_of_records_page;
$sqli1 = 'SELECT * FROM players LIMIT' . $start_page . ',' . $no_of_records_page;

$result1 = mysqli_query($conn,$sql1);

while ($i = mysqli_fetch_assoc($result1)) {
    print_r($i);
}

for ($i=0; $i < $result1 ; $i++) { 
    
}
?>