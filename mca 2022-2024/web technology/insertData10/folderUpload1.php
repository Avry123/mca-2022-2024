<?php 

if ($_FILES['file']) {
    $file = $_FILES['file'];
    $file_name = $file['name'];
    $file_temp_location = $file['tmp_name'];
    $ideal_location = `F:\new xampp\htdocs\phpstuff\insertData10\upload\ ` ;
    $move_to = $ideal_location . $file_name;
    move_uploaded_file($file_temp_location, $move_to); 
    echo 'File uploaded';
}

?>