<?php

//   > | < | <= | >= | == | != | === | !==

// 1) If Statements


$age=17;
// if($age>=18){
// 	echo 'You are old enough to vote';
// }
// else{
// 	echo 'Sorry, you are not old enough to vote';
// }



$t=date('H');
// echo $t;
// if($t<12){
// echo 'Good Morning';
// }
// elseif($t==12){
// 	echo 'Good Afternoon' ;
// }
// else{
// 	echo 'Good Evening';
// }


$posts=['First Post'];
// if(!empty($posts)){
// 	echo $posts[0];
// }
// else{
// 	echo 'NO POSTS !!!!!!!!!!!!!!!!!!!!';
// }


//echo  !empty($posts)? $posts[0] : 'No Posts';


// $first_post= !empty($posts)? $posts[0]:'No posts';
// echo $first_post;



// $first_post=$posts[0]?? null;
// echo $first_post;



// if u do have a bunch of if elses,
// it might be cleaner to use a switch


$favorite_color='yellow';
switch($favorite_color){
	case 'red' :
		echo 'Your Favorite Color is Red';
		break;
	case 'blue';
		echo 'Your Favorite Color is Blue';
		break;
	case 'green';
		echo 'Your Favorite Color is Green';
		break;
	default:
		echo'Your Favorite Color is not Red Or Blue Or Green';
}

?>