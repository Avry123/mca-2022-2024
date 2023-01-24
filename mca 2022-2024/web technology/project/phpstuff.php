<?php
include("navbar.html");
 ?>

 <div class="php">
    <h2>Creating (Declaring) PHP Variables</h2>
    <h3>In PHP, a variable starts with the $ sign, followed by the name of the variable:</h3>
    <h3>After the execution of the statements above, the variable $txt will hold the value Hello world!, the variable $x will hold the value 5, and the variable $y will hold the value 10.5.</h3>
    <h3>Note: When you assign a text value to a variable, put quotes around the value.<br>
Note: Unlike other programming languages, PHP has no command for declaring a variable. It is created the moment you first assign a value to it.</h3>
  <h2>PHP Variables</h2>
  <h3>A variable can have a short name (like x and y) or a more descriptive name (age, carname, total_volume).</h3>
  <h3>Rules for PHP variables:</h3>
  <ul>
    <li>A variable starts with the $ sign, followed by the name of the variable</li>
    <li>A variable name must start with a letter or the underscore character</li>
    <li>A variable name cannot start with a number</li>
    <li>A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )</li>
    <li>Variable names are case-sensitive ($age and $AGE are two different variables)</li>
  </ul>
  <h3>Output Variables</h3>
  <h2>The PHP echo statement is often used to output data to the screen.</h2>
  <h2>PHP Data Types</h2>
  <h3>Variables can store data of different types, and different data types can do different things.</h3>
  <h4>PHP supports the following data types:</h4>
  <ul>
    <li>String</li>
    <li>Integer</li>
    <li>Float (floating point numbers - also called double)</li>
    <li>Boolean</li>
    <li>Array</li>
    <li>Object</li>
    <li>NULL</li>
    <li>Resource</li>
  </ul>

  <br><br>
  <h2>PHP String</h2>
  <h3>A string is a sequence of characters, like "Hello world!".</h3>
  <h3>A string can be any text inside quotes. You can use single or double quotes:</h3>
    <br><br>
    <h2>PHP Integer</h2>
    <h3>An integer data type is a non-decimal number between -2,147,483,648 and 2,147,483,647.</h3>
    <h3>Rules for integers:</h3>
    <ul>
      <li>An integer must have at least one digit</li>
        <li>An integer must not have a decimal point</li>
          <li>An integer can be either positive or negative</li>
            <li>Integers can be specified in: decimal (base 10), hexadecimal (base 16), octal (base 8), or binary (base 2) notation</li>
    </ul>
    <br><br>
    <h2>PHP Float</h2>
    <h3>A float (floating point number) is a number with a decimal point or a number in exponential form.</h3>
     <br><br>
     <h2>PHP Boolean</h2>
     <h3>A Boolean represents two possible states: TRUE or FALSE.</h3>
     <h3>Booleans are often used in conditional testing. You will learn more about conditional testing in a later chapter of this tutorial.</h3>
     <br><br>
     <h2>PHP Array</h2>
     <h3>An array stores multiple values in one single variable.</h3>
     <?php
     $cars = array("Volvo","BMW","Toyota");
      var_dump($cars);
      ?>

      <br><br>
      <h2>PHP Object</h2>
      <h3>Classes and objects are the two main aspects of object-oriented programming.</h3>
      <h3>A class is a template for objects, and an object is an instance of a class.</h3>
      <h3>When the individual objects are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.</h3>
      <?php
      class Car {
public $color;
public $model;
public function __construct($color, $model) {
 $this->color = $color;
 $this->model = $model;
}
public function message() {
 return "My car is a " . $this->color . " " . $this->model . "!";
}
}

$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();


       ?>

       <br><br>
       <h2>PHP NULL Value</h2>
       <h3>Null is a special data type which can have only one value: NULL.</h3>
       <h3>A variable of data type NULL is a variable that has no value assigned to it.</h3>
       <h3>Tip: If a variable is created without a value, it is automatically assigned a value of NULL.</h3>
       <h3>Variables can also be emptied by setting the value to NULL:</h3>
       <?php
       $x = "Hello world!";
       $x = null;
       var_dump($x);

        ?>
       <br><br>
       <h2>PHP Resource</h2>
       <h3>The special resource type is not an actual data type. It is the storing of a reference to functions and resources external to PHP.</h3>
       <h3>A common example of using the resource data type is a database call.</h3>
       <h3>We will not talk about the resource type here, since it is an advanced topic.</h3>
       <br><br>
       <h2>PHP String Functions</h2>
       <h3>In this chapter we will look at some commonly used functions to manipulate strings.</h3>
       <h2>strlen() - Return the Length of a String</h2>
       <h3>The PHP strlen() function returns the length of a string.</h3>
       <?php
          echo strlen("Hello world!");
        ?>
        <br><br>
        <h2>str_word_count() - Count Words in a String</h2>
        <h3>The PHP str_word_count() function counts the number of words in a string.</h3>
        <?php
           echo str_word_count("Hello world!");
         ?>
         <h2>strrev() - Reverse a String</h2>
         <h3>The PHP strrev() function reverses a string.</h3>
         <?php
          echo strrev("Hello world!");
          ?>
          <h2>strpos() - Search For a Text Within a String</h2>
          <h3>The PHP strpos() function searches for a specific text within a string. If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE.</h3>
          <?php
            echo strpos("Hello world!", "world");
           ?>
           <h2>str_replace() - Replace Text Within a String</h2>
           <h3>The PHP str_replace() function replaces some characters with some other characters in a string.</h3>
           <?php
               echo str_replace("world", "Dolly", "Hello world!");
            ?>
            <br><br>
            <h2>PHP Numbers</h2>
            <h4>One thing to notice about PHP is that it provides automatic data type conversion.</h4>
            <h4>So, if you assign an integer value to a variable, the type of that variable will automatically be an integer. Then, if you assign a string to the same variable, the type will change to a string.</h4>
            <h4>This automatic conversion can sometimes break your code.</h4>
            <br>
            <h2>PHP Integers</h2>
            <h4>2, 256, -256, 10358, -179567 are all integers.</h4>
            <h4>An integer is a number without any decimal part.</h4>
            <h4>An integer data type is a non-decimal number between -2147483648 and 2147483647 in 32 bit systems, and between -9223372036854775808 and 9223372036854775807 in 64 bit systems. A value greater (or lower) than this, will be stored as float, because it exceeds the limit of an integer.</h4>
            <h4>Note: Another important thing to know is that even if 4 * 2.5 is 10, the result is stored as float, because one of the operands is a float (2.5).</h4>
            <h4>Here are some rules for integers:</h4>
            <ul>
              <li>An integer must have at least one digit</li>
              <li>An integer must NOT have a decimal point</li>
              <li>An integer can be either positive or negative</li>
              <li>Integers can be specified in three formats: decimal (10-based), hexadecimal (16-based - prefixed with 0x) or octal (8-based - prefixed with 0)</li>
            </ul>
            <h3>PHP has the following predefined constants for integers:</h3>
            <ul>
              <li>  <h4>PHP_INT_MAX - The largest integer supported</h4>  </li>
              <li>  <h4>PHP_INT_MIN - The smallest integer supported</h4>  </li>
              <li>  <h4>PHP_INT_SIZE -  The size of an integer in bytes</h4>  </li>
            </ul>
            <br>
            <h3>PHP has the following functions to check if the type of a variable is integer:</h3>
            <ul>
              <li> <h4>is_int()</h4> </li>
              <li> <h4>is_integer() - alias of is_int()</h4> </li>
              <li> <h4>is_long() - alias of is_int()</h4> </li>
            </ul>
            <?php
            $x = 5985;
           var_dump(is_int($x));

            $x = 59.85;
            var_dump(is_int($x));
             ?>
             <br>
             <h2>PHP Floats</h2>
             <h3>A float is a number with a decimal point or a number in exponential form.</h3>
             <h3>2.0, 256.4, 10.358, 7.64E+5, 5.56E-5 are all floats.</h3>
             <h3>The float data type can commonly store a value up to 1.7976931348623E+308 (platform dependent), and have a maximum precision of 14 digits.</h3>
             <h3>PHP has the following predefined constants for floats (from PHP 7.2):</h3>
             <ul>
               <li> <h4>PHP_FLOAT_MAX - The largest representable floating point number</h4> </li>
                <li> <h4>PHP_FLOAT_MIN - The smallest representable positive floating point number</h4> </li>
                 <li> <h4>- PHP_FLOAT_MAX - The smallest representable negative floating point number</h4> </li>
                  <li> <h4>PHP_FLOAT_DIG - The number of decimal digits that can be rounded into a float and back without precision loss</h4> </li>
                  <li> <h4>PHP_FLOAT_EPSILON - The smallest representable positive number x, so that x + 1.0 != 1.0</h4> </li>
             </ul>
             <h3>PHP has the following functions to check if the type of a variable is float:</h3>
             <h4>is_float()</h4>
             <h4>is_double() - alias of is_float()</h4>
             <br>
             <h3>PHP Casting Strings and Floats to Integers</h3>
             <h4>Sometimes you need to cast a numerical value into another data type.</h4>
             <h4>The (int), (integer), or intval() function are often used to convert a value to an integer.</h4>
             <?php
             $x = 23465.768;
              $int_cast = (int)$x;
              echo $int_cast;

              echo "<br>";

             // Cast string to int
             $x = "23465.768";
             $int_cast = (int)$x;
             echo $int_cast;
              ?>

              <br><br>
              <h2>PHP Function Arguments</h2>
              <h3>Information can be passed to functions through arguments. An argument is just like a variable.</h3>
              <h3>Arguments are specified after the function name, inside the parentheses. You can add as many arguments as you want, just separate them with a comma.</h3>
              <h3>The following example has a function with one argument ($fname). When the familyName() function is called, we also pass along a name (e.g. Jani), and the name is used inside the function, which outputs several different first names, but an equal last name:</h3>
              <?php
              function familyName($fname) {
              echo "$fname Refsnes.<br>";
                                         }

               familyName("Jani");
              familyName("Hege");
              familyName("Stale");
              familyName("Kai Jim");
              familyName("Borge");
               ?>
               <br><br>
               <h2>PHP Arrays</h2>
               <h3>An array stores multiple values in one single variable:</h3>
              <br>
               <h3>Create an Array in PHP</h3>
               <h4>In PHP, the array() function is used to create an array:</h4>
               <h4>array();</h4>
               <h3>In PHP, there are three types of arrays:</h3>
               <ul>
                 <li> <h4>Indexed arrays - Arrays with a numeric index</h4> </li>
                 <li> <h4>Associative arrays - Arrays with named keys</h4> </li>
                 <li> <h4>Multidimensional arrays - Arrays containing one or more arrays</h4> </li>
               </ul>
               <br><br>
               <h3>PHP Indexed Arrays</h3>
               <h4>There are two ways to create indexed arrays:</h4>
               <h4>The index can be assigned automatically (index always starts at 0), like this:</h4>
               <h4>$cars = array("Volvo", "BMW", "Toyota");</h4>
               <?php
               $cars = array("Volvo", "BMW", "Toyota");
                echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
                ?>
                <br>
                <h3>PHP Associative Arrays</h3>
                <h4>Associative arrays are arrays that use named keys that you assign to them.</h4>
                <h4>There are two ways to create an associative array: </h4>
                <h4>$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");</h4>
                <?php
                $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
                echo "Peter is " . $age['Peter'] . " years old.";
                 ?>
                 <br>
                 <h3>PHP - Multidimensional Arrays</h3>
                 <h4>A multidimensional array is an array containing one or more arrays.</h4>
                 <h4>PHP supports multidimensional arrays that are two, three, four, five, or more levels deep. However, arrays more than three levels deep are hard to manage for most people.</h4>
                 <?php
                 $cars = array (
                          array("Volvo",22,18),
                          array("BMW",15,13),
                          array("Saab",5,2),
                          array("Land Rover",17,15) );

                          echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
                          echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
                          echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
                          echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
                  ?>

                  <br><br>
                  <h3>PHP Global Variables - Superglobals</h3>
                  <h4>Some predefined variables in PHP are "superglobals", which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.</h4>
                  <h4>The PHP superglobal variables are:</h4>
                  <ul>
                    <li> <h4>$GLOBALS</h4> </li>
                    <li> <h4>$_SERVER</h4> </li>
                    <li> <h4>$_REQUEST</h4> </li>
                    <li> <h4>$_POST</h4> </li>
                    <li> <h4>$_GET</h4> </li>
                    <li> <h4>$_FILES</h4> </li>
                    <li> <h4>$_ENV</h4> </li>
                    <li> <h4>$_COOKIE</h4> </li>
                    <li> <h4>$_SESSION</h4> </li>
                  </ul>
                  <h2>PHP $GLOBALS</h2>
                  <h3>$GLOBALS is a PHP super global variable which is used to access global variables from anywhere in the PHP script (also from within functions or methods).</h3>
                  <h3>PHP stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable.</h3>
                  <h3>The example below shows how to use the super global variable $GLOBALS:</h3>
                  <?php
                  $x = 75;
                  $y = 25;

                function addition() {
                $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
                   }

                  addition();
                  echo $z;


                   ?>
                   <h2>PHP $_SERVER</h2>
                   <h3>$_SERVER is a PHP super global variable which holds information about headers, paths, and script locations.</h3>
                   <h3>The example below shows how to use some of the elements in $_SERVER:</h3>
                   <?php
                   echo $_SERVER['PHP_SELF'];
                   echo "<br>";
                   echo $_SERVER['SERVER_NAME'];
                   echo "<br>";
                   echo $_SERVER['HTTP_HOST'];
                   echo "<br>";
                   echo $_SERVER['HTTP_REFERER'];
                   echo "<br>";
                   echo $_SERVER['HTTP_USER_AGENT'];
                   echo "<br>";
                   echo $_SERVER['SCRIPT_NAME'];

                    ?>
                    <br><br>
                    <h3>PHP $_REQUEST</h3>
                    <h4>PHP $_REQUEST is a PHP super global variable which is used to collect data after submitting an HTML form.</h4>
                    <h4>The example below shows a form with an input field and a submit button. When a user submits the data by clicking on "Submit", the form data is sent to the file specified in the action attribute of the <form> tag. In this example, we point to this file itself for processing form data. If you wish to use another PHP file to process form data, replace that with the filename of your choice. Then, we can use the super global variable $_REQUEST to collect the value of the input field:</h4>
                      <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                       Name: <input type="text" name="fname">
                       <input type="submit">
                      </form>
                      <?php
                      if ($_SERVER["REQUEST_METHOD"] == "POST") {
                      // collect value of input field
                      $name = $_REQUEST['fname'];
                      if (empty($name)) {
                      echo "Name is empty";
                      } else {
                          echo $name;
                                }
                                  }

                       ?>
                       <br><br>
                       <h3>PHP $_POST</h3>
                       <h4>PHP $_POST is a PHP super global variable which is used to collect form data after submitting an HTML form with method="post". $_POST is also widely used to pass variables.</h4>
                        <h4>The example below shows a form with an input field and a submit button. When a user submits the data by clicking on "Submit", the form data is sent to the file specified in the action attribute of the <form> tag. In this example, we point to the file itself for processing form data. If you wish to use another PHP file to process form data, replace that with the filename of your choice. Then, we can use the super global variable $_POST to collect the value of the input field:</h4>
                          <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                           Name: <input type="text" name="fname">
                          <input type="submit">
                          </form>
                          <?php
                          if ($_SERVER["REQUEST_METHOD"] == "POST") {
                          // collect value of input field
                         $name = $_POST['fname'];
                         if (empty($name)) {
                          echo "Name is empty";
                         } else {
                            echo $name;
                                 }
                                     }
   ?>
   <h3>PHP $_GET</h3>
   <h4>PHP $_GET is a PHP super global variable which is used to collect form data after submitting an HTML form with method="get".</h4>
   <h4>$_GET can also collect data sent in the URL.</h4>
   <br><br>
   <h3>What is a Cookie?</h3>
   <h4>A cookie is often used to identify a user. A cookie is a small file that the server embeds on the user's computer. Each time the same computer requests a page with a browser, it will send the cookie too. With PHP, you can both create and retrieve cookie values.</h4>
   <h3>Create Cookies With PHP</h3>
   <h4>A cookie is created with the setcookie() function.</h4>
   <h4>setcookie(name, value, expire, path, domain, secure, httponly);</h4>
   <?php
   $cookie_name = "user";
   $cookie_value = "John Doe";
  setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>


<?php
if(!isset($_COOKIE[$cookie_name])) {
 echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
 echo "Cookie '" . $cookie_name . "' is set!<br>";
 echo "Value is: " . $_COOKIE[$cookie_name];
}

    ?>
    <br><br>
    <h3>What is a PHP Session?</h3>
    <h4>When you work with an application, you open it, do some changes, and then you close it. This is much like a Session. The computer knows who you are. It knows when you start the application and when you end. But on the internet there is one problem: the web server does not know who you are or what you do, because the HTTP address doesn't maintain state.</h4>
    <h4>Session variables solve this problem by storing user information to be used across multiple pages (e.g. username, favorite color, etc). By default, session variables last until the user closes the browser.</h4>
    <h4>So; Session variables hold information about one single user, and are available to all pages in one application.</h4>
    <br>
    <h3>Start a PHP Session</h3>
    <h4>A session is started with the session_start() function.</h4>
    <h4>Session variables are set with the PHP global variable: $_SESSION.</h4>
    <h4>Now, let's create a new page called "demo_session1.php". In this page, we start a new PHP session and set some session variables:</h4>
    <?php
    // Start the session
session_start();
?>


<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";


     ?>
   </div>
   <div>
<h1>File handling</h1>
<?php
echo "<h1>readfile</h1>";
echo readfile("anthillkids.txt");
echo "<br><br><br>";


$myfile = fopen("anthillkids.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("anthillkids.txt"));
fclose($myfile);

$myfile10 = fopen("anthillkids.txt", "w");

$txt = "Death and aftermath
On February 26, 2011, 63-year-old Thériault was found dead near his cell at Dorchester Penitentiary. His death is believed to be the result of an altercation with his cell mate, Matthew Gerrard MacDonald, a 60-year-old convicted murderer from Port au Port, Newfoundland and Labrador, who was charged with the killing.[12][13][14] MacDonald pleaded guilty to second-degree murder and was sentenced to life in prison, having already been serving a life sentence for a previous murder charge. MacDonald had stabbed Thériault in the neck with a shiv, walked to the guards' station, handed them the weapon, and proclaimed 'That piece of shit is down on the range. Here's the knife, I've sliced him up";

fwrite($myfile10, $txt);

fclose($myfile10);


 ?>
</div> <br><br>
<div>
  <form action="upload.php" method="post" enctype="multipart/form-data">
   Select image to upload:<br>
   <input type="file" name="fileToUpload" id="fileToUpload"><br>
   <input type="submit" value="Upload Image" name="submit"><br>
  </form>
</div>
  </body>
</html>
