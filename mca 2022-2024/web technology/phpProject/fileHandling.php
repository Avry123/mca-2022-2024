<?php 

$file_operation = $_POST['file_operation'];

if ($file_operation == 'read') {
//  opening the file
$file = fopen('file1.txt', 'r');
while (!feof($file)) {
    $line = fgets($file);
    echo '<h3>', $line , '</h3>';
}
fclose($file);

} if ($file_operation == 'write') {
    header("Location: fileHandlingForm.php");
    exit;
} if ($file_operation == 'create') {
    header("Location: fileCreation.php");
    exit;
} if ($file_operation == 'read_blog') {
    header('Location: fileReading.php');
    exit;
} if ($file_operation == 'continue_blog') {
    header("Location: continue2.php");
}

?>