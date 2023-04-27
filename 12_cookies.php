<?php
/*
cookies are a mechanism for storing data in the remote browser 
and thus tracking or identifying return users. 
You can set a specific data to be stored in the browser 
and then retrieve it when the user visits the site again
*/

// set a cookie

// this sets the cookie for 86400 seconds which means for a day and then expires
setcookie('name','Mariam', time()+86400);

// if u wanna get that cookie and use it u could first check for it using isset()

if(isset($_COOKIE['name'])){
	echo $_COOKIE['name'];
}

//setcookie('name','', time()-86400);


?>