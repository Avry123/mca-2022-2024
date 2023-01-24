<?php
session_start();
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
     <h1>Advance Java</h1>
     <?php
     if(!isset($_SESSION["counter"])) {
       $_SESSION["counter"] = 1;
     } else {
       $_SESSION["counter"] ++ ;
     }
     echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
     echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
     echo "page counter" . $_SESSION["counter"];
      ?>
  </body>
</html>
