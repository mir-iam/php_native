<?php

$string='Hello World';

/* for getting the length of a string
	echo strlen($string);         */

/*  To find the position of the first occurrence strpos
	echo strpos($string,'l');    */

/* to find the position of the last occurrence
	echo strrpos($string,'l')      */

/* to reverse a string
	echo strrev($string)            */

/* To convert all characters to lower case
	echo strtolower($string);        */

/* To convert all characters to upper case
	echo strtoupper($string);         */


/* if u wanna capitalize just the first character of each word
	echo ucwords($string);         */

/* if u wanna replace a substring
	echo str_replace('World','Everybody',$string);         */


/* if u wanna return a portion of a string specified by the offset and length
	echo substr($string,0,5);         
	echo substr($string,5);         */

/* starts with which gives us true or false
	 if(str_starts_with($string,'bb')){
	 echo "Yes";
	 }
	 else{
	 echo'nooooope';
	 };                                                              */

/*ends with which gives us true or false
	 if(str_ends_with($string,'d')){
		echo "Yes";
	 }
	 else{
		 echo'nooooope';
	 };*/
	

 /* a couple other string functions [html entities & html special chars]
 both are very similar and used for security and they won't parse the html
*/
$string2='<script>alert(1)</script>';
//echo htmlspecialchars($string2);

/* formatted string which is good when u have outside data like 
when u have users provide data. */

//printf('%s likes to %s','Brad','code');

printf('1+1=%f',1+1);

?>