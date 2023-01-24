


<?php

$cookie_name = "user";
$cookie_value = "John Doe";

setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/" );
 ?>

 <?php

 include_once("header.html");
echo "Value is: " . $_COOKIE[$cookie_name];

if (!isset($_COOKIE[$cookie_name])) {
  echo "the cookie value is not set.";
} else {
  echo "<br>retrieving cookie info";
  echo "<br>the cookie value is " . $_COOKIE[$cookie_name];
}

include_once("footer.html");
  ?>
