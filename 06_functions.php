<?php
$y=12;
function registerUser($email){
	echo $email.' :  registered';
}
// registerUser('loralie');

// function sum($n1=4, $n2=5) /* default values in case you didn't pass anything in*/{
// 	return $n1+$n2;
// }

// $number=sum(4,6);
// echo $number;

// we can have anonymous functions and set them to variables

$subtract = function ($n1,$n2){
	return $n1-$n2;
};
//echo $subtract(5,2);

// $multiply = fn($n1,$n2) => $n1 * $n2;
// echo $multiply(9,9);


// $addition=fn($n1, $n2)=>$n1 + $n2;
// echo $addition(9,9);

$division=fn($n1, $n2)=>$n1 / $n2;
echo $division(50,2);



// $reminder=function($n1,$n2){
// 	return $n1 % $n2;
// };
// echo $reminder(11,5)

?>