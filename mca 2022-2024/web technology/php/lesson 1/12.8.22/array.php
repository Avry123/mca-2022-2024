<?php 
$a = ['Neel','Reet','Mangesh'];

$b = ['a' => 'Mavericks', 'b' => 'Cavaliers'];

$c = ['Neel', 'Reet', 'Sunil'];

echo '<h1>Count an array ' . count($a) .'</h1>' ;

echo '<h1>To find the size of ' . sizeof($a) . '</h1>';

echo '<h1>This gives the number, of how many times it has repeated ' . array_count_values($a) . '</h1>';

echo '<h1>' . print_r(array_change_key_case($b,CASE_UPPER)) . '</h1>';

echo '<h1>This divides the array into chunks of array' . print_r(array_chunk($b,1)) . '</h1>';

echo '<h1>To get the value of a specific key in a array' . print_r(array_column($b,'A')) . '</h1>';

echo '<h1>Get the array difference ' . print_r(array_intersect($a,$c)) . '</h1>';

echo '<h1>Array Difference' . print_r(array_diff($a,$b)) . '</h1>';

echo '<h1>How to push items inside a list ' . array_push($a, 'Luka'). '</h1>';

echo '<h1> To show the result ' . print_r($a) . '</h1>';

array_push($b, 'C', 'Utah Jazz');

array_push($b, 'D', 'Boston Celtics');

echo '<hr>';

echo '<h1>After two push on sub array' . print_r($b) . '</h1>';

echo '<hr>';

$arr1 = array("apple", "banana", "orange");

$arr2 = array("mango", "grapes", "strawberry");

$merged_array = array_merge($arr1, $arr2);

echo '<h1>This is the output of the merged array ' , print_r($merged_array) , '</h1>';

echo '<hr>';

$nums = array(11,22,23);

echo '<hr>';

function add($n) {
    return $n * $n;
}

// function concat($n) {
//     $str = ''
//     foreach ($n as $element) {
//         $str .= $element;
//       }
//     return $str;
// };

array_map("add", $nums);



echo '<h1>h2 array_map ' . print_r(array_map("add", $nums)) . '</h1>';

// echo '<h1>Array_maps used with string ' . print_r(array_map("concat", $a)) . ' </h1>';

echo '<hr>';

// array merge

// array flip
echo '<hr>';
$arr = array("apple" => "red", "banana" => "yellow", "orange" => "orange");

// Use the array_flip() function to flip the keys and values
$flipped_array = array_flip($arr);

// Print the flipped array
print_r($flipped_array);

// Output: Array ( [red] => apple [yellow] => banana [orange] => orange )

?>