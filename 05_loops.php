<?php

// 1) for loop

// for($x=0; $x<=10; $x++){
// echo 'Number '.$x.'<br>';
// }

// 2) while loop


// $x=1;
// while($x<=15){
// 	echo 'Number '.$x.'<br>';
// 	$x++;
// }


// 3) do..while loop
// excutes the condition at least once

// $x=7;
// do{
// 	echo'Number '.$x.'<br>';
// 	$x++;
// }
// while($x<=5)


// 4) foreach loop

 $posts=['First Post','Second Post','Third Post'];
// for($i=0;$i< count($posts);$i++){
// 	echo $posts[$i].'<br>';	
// }


// foreach($posts as $post){
// 	echo $post.'<br>';
// }



// To Get The Index 

// foreach($posts as $i=>$post){
// 	echo $i . ' - ' . $post.'<br>';
// }


// To Start The Index from One NOT Zero

// foreach($posts as $i=>$post){
// 	echo $i +1 . ' - ' . $post.'<br>';
// }



$person=[
	'first_name'=>'memo',
	'last_name'=>'saint james',
	'email'=>'memojames@gmail.com',
];
foreach($person as $key=>$value){
	echo "$key  :  $value <br>";
}


















?>