<?php 

$operation = $_POST['operation'];


if ($operation == 'Teams') {
 
    header("Location: teams.php");
    exit;

} else if ($operation == 'Player') {
    header("Location: player.php");
    exit;
} else if ($operation == 'File_Handling') {
    header("Location: fileOperation.php");
    exit;
}

?>