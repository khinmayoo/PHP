<?php

/*$num1 = "1";
$num2 = 1;

if ($num1 === $num2) {
    echo 'Equal';
} else {
    echo 'Not Equal';
} */

// $num = ['a', 'b', 'c'];
// array_unshift($num, 'd');

//unset($num[0]);
//array_shift($num);
//$num = json_encode($num);
//var_dump($num);

// foreach($num as $i) {
//     echo $i;
// }
// $ans = 6;

// //$result = $ans > 4 ? 'Correct' : 'Not correct';
// $result = $ans <= 4 ? $ans : 10;
// echo $result;


// $isCorrect = 'true';

// $result = !isEmpty($isCorrect) ?? false ;
// var_dump($result);

// $cars = ['Honda', 'Lexus', 'BMW', 'Toyota'];
// foreach ($cars as $car) {
//     echo $car;
//     echo "<br/>";
// }

// $ages = ['KoPhyo' => 32, 'KoNaing' => 30, "KoMyo" => 34];
// foreach ($ages as $key => $age) {
//     echo $key . " " . $age;
//     echo "<br/>";
// }

// $marks = [
//     'MgMg' => ['Physic' => 30, 'Chemistry' => 25, 'Math' => 26],
//     'AyeAye' => ['Physic' => 25, 'Chemistry' => 20, 'Math' => 35],
// ];

// foreach ($marks as $k => $student) {
//     echo "Marks for student " . $k;
//     echo "<br/>";
//     foreach ($student as $key => $mark) {
//         echo $key . "is ". $mark;
//         echo "<br/>";
//     }
//     echo "<hr/>";
// }

// $i = 0;
// for ($i ; $i < 10 ; $i++) {
//         echo $i;
// }
// $cars = array("Volvo", "BMW", "Toyota");
// unset($cars[0]);
// var_dump($cars);

// $cars[5] = "Volvo";
// $cars[7] = "BMW";
// $cars[14] = "Toyota";

// array_push($cars, "Ford");
// var_dump($cars);

//Write a PHP program to compute the sum of the two given integers. If the sum is in the range 10..20 inclusive return 30.
// Define a function that checks the sum of two numbers
// function test($a, $b)
// {
//     // Check if the sum of $a and $b is between 10 and 20 (inclusive)
//     // If true, return 30; otherwise, return the actual sum
//     return $a + $b >= 10 && $a + $b <= 20 ? 30 : $a + $b;
// }

// // Test the function with different pairs of numbers
// echo test(12, 17)."\n";
// echo test(2, 17)."\n";
// echo test(22, 17)."\n";
// echo test(20, 0)."\n";

// $cars = array("Volvo", "BMW", "Toyota");
// foreach ($cars as &$x) {
//   $x = "Ford";
// }
// unset($x);
// var_dump($cars);

// $cars = array("Volvo", "BMW", "Toyota");
// 		array_splice($cars, 1, 2);
// 		var_dump($cars);

function myFunction() {
    echo "This text comes from a function";
}
// create array:
$myArr = array("Volvo", 15, ["apples", "bananas"], myFunction);

// calling the function from the array item:
$myArr[3]();




?>

<!-- <?php
echo "
<p>visit Again-" . date("Y") . " geeks for geeks.com</p>
";
?>  -->