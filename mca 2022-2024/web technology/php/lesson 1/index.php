 
<?php
$txt = "Dallas Mavericks";
echo "<h1>I love " . $txt . "!</h1>";

echo "we are doing great ", "We the best music ", "Imagine what you will know tommorow";

// Access modifier.

// Access Specifier 

// Scope of variables.

// Global

// Local

// Static 

function info() {
    $x = 5; 
    echo "This is is a local variable, " . $x ;
};

info();

$global10 = 10; 

function globalDemonstration() {
    global $global10;
    echo('This is to show how the global variable works '. $global10);
};


$y = 10 ;

function globalKeyWord() {
    $y = 30 ;
    echo('<p>The value of y with GLOBALS["y"]' . $GLOBALS['y'] . '</p>');
    echo('<p>This is without the word GLOBALS["y"] ' . $y . "</p>" );
}

echo($y);
globalKeyWord();


echo('<h1>This is to show value passing into function and doing things</h1>');

function add($num1, $num2) {
    echo $num1 + $num2;
}

add(5,10);

echo('<h1>Default Parameter.</h1>');

echo('<h2>Don"t set the first and middle value as default type</h2>');

function defaultValue10($num1, $num2, $num3 = 40) {
    echo $num1 + $num2  + $num3 ;
}

defaultValue10(10,20);

?>

