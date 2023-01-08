<?php

// Connect to the database
$conn = new mysqli("localhost", "root", "avry", "nba");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set the number of records to display per page
$records_per_page = 5;

// Determine the current page number
$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

// Calculate the offset based on the current page number
$offset = ($current_page - 1) * $records_per_page;

// Retrieve the total number of records
$query = "SELECT COUNT(*) FROM team";
$result = $conn->query($query);
$row = $result->fetch_row();
$total_records = $row[0];

// Calculate the total number of pages needed
$total_pages = ceil($total_records / $records_per_page);

// Retrieve the records for the current page
$query = "SELECT * FROM player LIMIT $records_per_page OFFSET $offset";
$result = $conn->query($query);

// Change operation

echo "<a href='operation.php'><h1>Change Operation</h1></a>";

// Display the records
echo "<table>";

// Output the table headers
echo "<tr>";
echo "<th>Player Name</th>";
echo "<th>Team Name</th>";
echo "<th>Points</th>";
echo "<th>Assists</th>";
echo "<th>Rebounds</th>";
echo "</tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['player_name'] . "</td>";
    echo "<td>" . $row['team_name'] . "</td>";
    echo "<td>" . $row['points'] . "</td>";
    echo "<td>" . $row['assists'] . '</td>';
    echo "<td>" . $row['rebounds'] . "</td>";
    echo "</tr>";
}

echo "</table>";

// Display the pagination links
echo "<div class='pagination'>";

// Previous page link
if ($current_page > 1) {
    echo "<a href='?page=" . ($current_page - 1) . "'>Previous</a>";
}

// Page links
for ($i = 1; $i <= $total_pages; $i++) {
    if ($i == $current_page) {
        echo "<span class='current'>" . $i . "</span>";
    } else {
        echo "<a href='?page=$i'>$i</a>";
    }
}

// Next page link
if ($current_page < $total_pages) {
    echo "<a href='?page=" . ($current_page + 1) . "'>Next</a>";
}

echo "</div>";

// Close the database connection
$conn->close();

?>
