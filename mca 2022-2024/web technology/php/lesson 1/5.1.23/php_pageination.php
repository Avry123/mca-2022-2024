<?php 

// if (isset($_GET['page'])) {
//     $page = 1;
//     $_GET['page'] = 1;
// }

$conn = mysqli_connect("localhost", 'root', '', 'zoo');

$query = 'SELECT * FROM zoo';

$res = mysqli_query($conn,$query);

$total_records = mysqli_num_rows($res);

$rec_per_pages = 2;

$no_of_pages = ceil($total_records/$rec_per_pages);

echo '<h1>Total number of pages  ', $rec_per_pages , ' the get page is ', $_GET['page'] ,' </h1>';

$limit_query = "SELECT * FROM `zoo` LIMIT "  . ($_GET['page'] - 1) * $rec_per_pages .  ","  . $rec_per_pages ;


echo '<h1>The list query is, ', $limit_query  , '  </h1>';

$res1 = mysqli_query($conn,$limit_query);

while ($db = $res1->fetch_assoc()) {
    echo '<h1>', $db['id'] , '</h1>';
    echo '<h1>', $db['name'] , '</h1>';
}

if ($_GET['page'] >= 2) 
    echo '<a href="php_pageination.php?page= ' . ($_GET['page'] - 1) . '">Previous</a>';



for ($i = 1; $i <= $no_of_pages; $i++) 
    echo '<a href="php_pageination.php?page= ' . $i . '">' . $i .'</a>';


if ($_GET['page'] < $no_of_pages) 
    echo '<a href="php_pageination.php?page= ' . ($_GET['page'] + 1) . '">Next</a>';


?>

