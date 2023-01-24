<?php

if (isset($_POST['submit'])) {
  $file = $_FILES['file10'];
  $file_name = $file['name'];
  $file_tmp_name = $file['tmp_name'];
  $file_error = $file['error'];
  $file_size = $file['size'];


  $fileExt = explode(".", $file_name);
  $fileActualExtension = strtolower(end($fileExt));

$allowed = array("jpg", "jpeg", "png", "pdf", "svg", "xlsx");

if (in_array($fileActualExtension, $allowed)) {
  if ($file_error === 0) {
    if ($file_size < 1000000) {
      $file_new_name = uniqid('', true) . ' . ' . $fileActualExtension;
      $fileDestination = "upload/" . $file_new_name;
      move_uploaded_file($file_tmp_name, $fileDestination);
      echo "The task has been done";
    } else {
      echo "The file size is very high";
      echo "the file size is "  . $file['size'];
    }
  } else {
    echo "Sorry an error occured";
  }
}

} else {
  echo "do something";
}

 ?>
