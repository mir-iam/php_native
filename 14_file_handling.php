<?php
/*
File handling is the ability to read and write files on the server.
PHP has built in functions for reading and writing files.
*/

$file='extras/users.txt';

// if u wanna check if file really exists
if(file_exists($file)){
	//echo readfile($file);

	// i'll create a variable $handle to be like a pointer to the file
	$handle=fopen($file,'r');
	$contents=fread($handle,filesize($file));
	fclose($handle);
	echo $contents;
}
else{
	$handle=fopen($file,'w');
	$contents='MARYAM'. PHP_EOL.'DAIANA'. PHP_EOL.'MIKA';
	fwrite($handle,$contents);
	fclose($handle );
}

?>