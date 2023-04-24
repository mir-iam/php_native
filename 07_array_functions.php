<?php

$fruits=['apple','orange','pear'];

// Get array length
	//echo count($fruits);


// search in array for a specific value
	//var_dump(in_array('peaches',$fruits));





// Add to array

	   /* [1] */  $fruits[]='grape';
   /* [2] */	array_push($fruits,'blueberries','peaches','strawberries');
 // to add elements in the beginning of the array
 array_unshift($fruits,'blackberries');
   //print_r($fruits);


   // Remove array elements from the end
   array_pop($fruits);
   // Remove array elements from the end
   array_shift($fruits);
   // if you wanna remove a specific element
  		// unset($fruits[2]);
   
	// if we wanna break the array into chuncks we can do that with array_chunk
	// split array into 2 chuncks
  //print_r($fruits);

  $chuncked_array=array_chunk($fruits,2);
  //print_r($chuncked_array);

  // if we wanna concatenate arrays we can do that by using array_merge
	
  $arr1=[1,2,3];
  $arr2=[4,5,6];

  $arr3=array_merge($arr1,$arr2);
  $arr4=[...$arr1, ...$arr2]; // another way to merge two arrays together without using array_merge

  // print_r($arr3);
  //print_r($arr4);
	
	// combine two arrays

  $a=[' green ',' red ',' yellow '];
  $b=[' avocado ',' apple ',' banana '];
	
	$c=array_combine($a,$b);
  //print_r($c);
	

	// if we want an arrray of keys use array_keys
$keys=array_keys($c);
//print_r($keys);

	
// if u wanna flip an array use array_flip

$flipped=array_flip($c);
//print_r($flipped);


$numbers=range(1,20);
//print_r($numbers);

//now let's take this array and create a new array using array_map,
//where we can use these values in each item in the new array

$new_numbers=array_map(function($number) {
return"Number {$number}";
},$numbers);
//print_r($new_numbers);


// we have array_filter which works in a similar way but can make a condition
// so if we wanna strip out 

//$less_than_ten=array_filter($numbers,fn($number)=>$number<=10);
//print_r($less_than_ten);

$less_than_ten=array_filter($numbers,function($number){
  return $number<=10;
});
//print_r($less_than_ten);


// the closure takes two things 
// 1) carry => which holds thr return value of the previous iteration
$sum=array_reduce($numbers,fn($carry,$number)=>$carry+$number);
var_dump($sum);











?>