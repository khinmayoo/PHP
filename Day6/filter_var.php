<?php
// $int = 100.1;

// var_dump(filter_var($int, FILTER_VALIDATE_INT)); die;
// if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
//     echo ("Integer is valid");
// } else {
//     echo ("Integer is not valid");
// }

// $int = 0;

// //var_dump(filter_var($int, FILTER_VALIDATE_INT)); die;
// if (filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {
//     echo ("Integer is valid");
// } else {
//     echo ("Integer is not valid");
// }

//$ip = "127.0.0.1";
// $ip = "127.0.0.10";

// if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
//     echo ("$ip is a valid IP address");
// } else {
//     echo ("$ip is not a valid IP address");
// }

// $email = "john  @example.com";

// 		// Remove all illegal characters from email
// 		$email = filter_var($email, FILTER_SANITIZE_EMAIL);

// 		// Validate e-mail
// 		if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
//   			echo("$email is a valid email address");
// 		} else {
//  			 echo("$email is not a valid email address");
// 		}

// function myCallback($item) {
//     return strlen($item);
// }

// $strings = ["apple", "orange", "banana", "coconut"];
// $lengths = array_map("myCallback", $strings);
// print_r($lengths);

// $age = array("Peter"=>35, "Ben"=>37, "Jon"=>43);
// echo json_encode($age);

// $cars = array("Ford", "BMW", "Toyota");

// echo json_encode($cars);

// $jsonObj = '{"Peter":35,"Ben":37,"John":43}';
// 		var_dump(json_decode($jsonObj, true));

$number = [1, 2, 4, 6];
$ans = array_map(function($n){
	return $n * $n;
}, $number);

print_r($ans);

?>