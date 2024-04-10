<?php

// function inverse($x) {
//     if (!$x) {
//         throw new Exception('Division by zero.');
//     }
//     return 1/$x;
// }

// try {
//     echo inverse(5) . "<br/>";
//     echo inverse(0) . "<br/>";
//     echo "Yes" . "<br/>";
// } catch (Exception $e) {
//     echo 'Caught exception: ',  $e->getMessage(), "<br/>";
// }

// // Continue execution
// echo "Hello World\n";

// function myFunction() {
//     echo "This text comes from a function";
// }
// // create array:
// $myArr = array("Volvo", 15, ["apples", "bananas"], "myFunction");

// // calling the function from the array item:
// $myArr[3]();

// $fruits = ['Apple', 'Orange', 'Banana'];
// array_splice($fruits, 2, 1);
// var_dump($fruits);
// array_push($fruits, "kivi");
// var_dump($fruits);

// unset($fruits[2]);
// var_dump($fruits);


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


// echo "
// <p>visit Again-" . date("Y") . " geeks for geeks.com</p>
// ";

// first assignment
function sum($x, $y)
{
    $z = $x + $y;
    if ($x >= 100 && $y <= 200) {
        return true;
    } else {
        return false;
    }
}
echo "<h3>First assignment</h3>";
var_dump(sum(100, 199));
echo "<br/>";
var_dump(sum(250, 300));
echo "<br/>";
var_dump(sum(105, 190));
echo "<br/>";
//second assignment
function sameSum($x, $y)
{
    $sum = $x + $y;
    if ($x === $y) {
        return $sum * 3;
    } else {
        return $sum;
    }
}
echo "<hr/>";
echo "<h3>Second Assignment</h3>";

echo sameSum(1, 2) . "<br/>";
echo sameSum(3, 2) . "<br/>";
echo sameSum(2, 2) . "<br/>";
echo "<hr/>";
echo "<h3>Third Assignment</h3>";
//third assignment
// {1,2,9,3}, 3
// {1,2,3,4,5,6}, 2
// {1,2,3,4,5,6}, 6
// {1,2,2,3}, 9
$array = array(1, 2, 9, 3, 5, 6);
$arrayNew = array(1, 2, 2, 3);
function checkFunction(array $first, array $second)
{
    //array_slice(array, start, length, preserve)
    $array = $first;
    $arrayNew = $second;
//   var_dump(array_slice($array,0,4));
    $array = array_slice($array, 0, 4);
    $arrayNew = array_slice($arrayNew, 0, 4);
    //in_array
    var_dump(in_array(3, $array));
    echo "<br/>";
    var_dump(in_array(2, $array));
    echo "<br/>";
    var_dump(in_array(6, $array));
    echo "<br/>";
    var_dump(in_array(9, $arrayNew));
}
echo checkFunction($array, $arrayNew);
echo "<hr/>";
//fourth assignment
echo "<h3>Fourth Assignment<h3/>";
// "abcdefgh", "abijsklm"
// "abcde", "osuefrcd"
// "pqrstuvwx", "pqkdiewx"
// Sample Output:
// 1
// 1
// 2
function testing($s1, $s2)
{
    // Initialize a counter variable
    $ctr = 0;

    // Iterate through substrings of the first string
    for ($i = 0; $i < strlen($s1)-1; $i++)
    {
        // Extract a two-character substring from the first string
        $firstString = substr($s1, $i, 2);

        // Iterate through substrings of the second string
        for ($j = 0; $j < strlen($s2)-1; $j++)
        {
            // Extract a two-character substring from the second string
            $secondString = substr($s2, $j, 2);

            // Check if the two substrings are equal, and increment the counter if they are
            if ($firstString == $secondString) 
                $ctr++;
        }
    }

    // Return the final count of common two-character substrings
    return $ctr;
}

// Test the function with different pairs of strings
echo (testing("abcdefgh", "abijsklm"))."\n";
echo (testing("abcde", "osuefrcd"))."\n";
echo (testing("pqrstuvwx", "pqkdiewx"))."\n";
// 4, 5, 7
// 7, 4, 12
// 10, 13, 12
// 17, 12, 18
// Sample Output:
// 16
// 11
// 13
// 17

echo "<hr/>";
// function exceptFun($x, $y, $z)
// {
//     $sum = 0;
//     if ($x >= 10 && $x <= 20 && $x != 13 && $x != 17) {
//         $x = 0;
//     }
//     if ($y >= 10 && $y <= 20 && $y != 13 && $y != 17) {
//         $y = 0;
//     }
//     if ($z >= 10 && $z <= 20 && $z != 13 && $z != 17) {
//         $z = 0;
//     }
//     $sum = $x + $y + $z;
//     return $sum;

// }
// echo exceptFun(4, 5, 7) . "<br/>";
// echo exceptFun(7, 4, 12) . "<br/>";
// echo exceptFun(10, 13, 12) . "<br/>";
// echo exceptFun(17, 12, 18) . "<br/>";

echo "<hr/>";

function test($x, $y, $z)
{
    // Call the 'fix_num' function on each input parameter and return the sum of fixed numbers
    echo fix_num($x) + fix_num($y) + fix_num($z);
}

// Define a function named 'fix_num' that takes a number as input and returns a fixed number based on conditions
function fix_num($n)
{
    // Check if $n is between 10 and 13 or between 17 and 21 (exclusive)
    // If true, return 0; otherwise, return the original number
    //return (($n < 13 && $n > 9) || ($n > 17 && $n < 21)) ? 0 : $n;
    return (($n < 13 && $n > 9) || ($n > 17 && $n < 21) || ($n > 13 && $n < 17)) ? 0 : $n;
}

// Test the 'test' function with different input values and display the results
echo (test(4, 5, 7))."\n";
echo (test(7, 4, 12))."\n";
echo (test(10, 13, 12))."\n";
echo (test(17, 12, 18))."\n";
echo (test(14, 15, 19))."\n";

echo "<hr/>";
// function subStrings($str1, $str2) {

//     $len1 = strlen($str1);
//     $len2 = strlen($str2);
    

//     $count = 0;


//     for ($i = 0; $i < $len1-1; $i++) {

//         $substring1 = substr($str1, $i, 2);
//         // echo $substring1; echo"<br />";
//         $substring2 = substr($str2, $i, 2); 
//         // echo $substring2;  echo"<br />";
//         if ($substring1 === $substring2) {
//             $count++;
//         }
//     }

//     return $count;
// }

// echo substrings("abcdefgh", "abijsklm");echo"<br />";
// echo substrings("abcde", "osucd");echo"<br />";
// echo substrings("pqrstuvwx", "pqkdiewx");echo"<br />";