<?php 
// if (isset($_FILES['file'])) {
//   $file = $_FILES['file'];
//   $file_name = $file['name'];
//   $file_path = $file['full_path'];
//   $temporary_location = $file['tmp_name'];
//   $size = $file['size'];
//   $file_moveto = 'F:\new xampp\htdocs\phpstuff\file_upload\fileUpload';
  
//   move_uploaded_file($temporary_location,  $file_moveto);
// }


if (isset($_FILES['file'])) {
    $file = $_FILES['file'];
    $file_name = $file['name'];
    $temporary_location = $file['tmp_name'];
    $file_moveto = 'F:\new xampp\htdocs\phpstuff\file_upload\fileUpload' . $file_name;
    
    move_uploaded_file($temporary_location,  $file_moveto);
  }
  
?>