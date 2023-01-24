<?php
namespace reet;
    $name = "neel";
    echo  "My name is $name";

    function increment() {
     static $num1 = 5;
     $num1 = $num1 + 1;
     echo $num1;
    }

    define("name", "neel", false);
    define("division", "A", false);

    const firstname = "Miachel";
    const lastname = "Jordan";

    echo "<br>" . name  . "<br>";
    echo ("<br>". division . "<br>");

    echo ("the first name is" . firstname . "<br>" . "the last name is " . lastname . "<br>");
    increment();
    increment();
    increment();

    echo ("<h1> Magin Constant </h1> ");

    echo "<br>the line number is " . __LINE__ ;
    echo "<br>the line number is " . __LINE__;
  echo "<br>this gives the file name  " . __FILE__ ;
  echo "<br>this gives the directory name " . __DIR__ ;

    function hello() {
      echo("<BR>User is calling me " . __FUNCTION__  . "<BR>");
    }

    hello();


    class mca {

        function attendance() {
          echo "the clas name is ::" . __CLASS__ . ".<br><br>";
          echo "the method name is ::" . __METHOD__ . ".";
          echo "the namepace name is ::" . __NAMESPACE__ . ".";
        }
    }

    $obj1 = new mca();
    $obj1->attendance();
    echo "Classname::class" . mca::class . ".";
     ?>
