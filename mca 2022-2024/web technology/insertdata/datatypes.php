<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    $message = "Hello the following is a string";


    echo "<h1>This is a string</h1>";
    var_dump($message);

    $int = 10;


    echo "<br><br>";
    echo "<h1>This is a integer</h1>";
    echo "the following is a integer " . "<br>" .  var_dump($int) ;

    $double10 = 10.234;

    echo "<br><br>";
    echo "$double10";
    echo "<br>";
    echo "<h1>This is a float</h1>";
    echo "The following is  a" . var_dump($double10);

    $boo = TRUE;

    echo "<br><br>";
    echo "$boo";
    echo "<br>";
    echo "This is a boolean";
    echo "The following is a " . var_dump($boo);

    $array10 = array('Jim', 'Pam', 'Dwight', 'Miachle');

    echo "<br><br>";
    echo "<h1>This is a array</h1>";
    print_r($array10) ;
    echo "<br>";
    echo "The following is a " . var_dump($array10);


    class name {
      public function name10() {
        echo "<br><br>";
        echo "This is an object";
      }
    }

    $name20 = new name();

    echo "<h1>This is a object</h1>";
    $name20->name10();

    echo "<br><br>";
    $null10 = null;
    echo "<h1>This is a null</h1>";
    echo "The following is a " . var_dump($null10);


    echo "<h1 class='start'>The string function starts from here</h1>"
    $string10 = "      Trash Taste and Joe Rogan is the best podcast         ";
    echo "The follwing are different types of string functions.";

    echo "<h1>Echo is the first one</h1>";
    echo $string10;

    echo "<h1>Print is the second string functions</h1>";
    print $string10;

    echo "<h1>ltrim,gets rid of the character fromt the left side</h1>";
    echo ltrim($string10, "Trash taste");

    echo "<h1>rtrim, gets rid of the character from right side</h1>";
    echo rtrim($string10, "podcast");

    echo "<h1>Explode, it breaks the character into an array</h1>";
    print_r(explode("and", $string10));

    echo "<h1>Chop removes character from the right side</h1>";
    echo chop($string10 , "Joe Rogan");

    $blog = "Hello World, you are here";
    echo "<h1>substr allows you to get rid of characters , you need to define the number of characters.</h1>";
    echo "the string is " . $blog;
    echo "the substr is  " . substr($blog, 1);

    echo "<h1>strlen gives you the length of the string</h1>";
    echo "the string is  " . print_r($blog);
    echo "the string length is " . strlen($blog);

    echo "<h1>The str_replace allows you to replace charcaters by giving them the character you want to replace and the character you want to replace it with</h1>";
    $message = "Don't go quitely into the dark";

    $search = array("quitely");

    $replace = array("quite");

    $replaced = str_replace($search, $replace, $message);

    echo "<br.<br>";
    print_r($replaced);

    echo "<br><br>";
    echo "The strtolower allows you to lower case the letters from a string";
    $com = "HELLO AND GOOD MORNING";
    echo $com;
    echo "<br><br>";
    echo strtolower($com);
     ?>

  </body>
</html>
