<?php
session_start();
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";
 ?>


 <?php
include_once("header.html");
  ?>

  <div>

    <a href="bs.php">Business Statistics</a>
      <a href="aj.php">Advance Java</a>
        <a href="daa.php">Data analysis and algorthims</a>
          <a href="wt.php">Web technology.</a>
  </div>
<?php
include_once("footer.html");
  ?>
