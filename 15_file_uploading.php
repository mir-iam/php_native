<?php
if(isset($_POST['submit'])){
	$allowed_extensions= array('png', 'jpg', 'jpeg', 'gif');
	if(!empty($_FILES['upload']['name'])){	
		//print_r($_FILES);
		$file_name=$_FILES['upload']['name'];
		$file_size=$_FILES['upload']['size'];
		$file_tmp=$_FILES['upload']['tmp_name'];
		// now i'm gonna get the target direcctory:where do u wanna upload
		$target_dir= "uploads/{$file_name}" ;

		// Get file extension of the uploaded file
		$file_extension=explode('.',$file_name); // this will create an array of string
		$file_extension=strtolower(end($file_extension));

		// Validate file extension
		if(in_array($file_extension,$allowed_extensions)){
			if($file_size <= 1000000){
				move_uploaded_file($file_tmp,$target_dir);  // this is the function that we use to upload a file
				$message = '<p style="color: green;">File uploaded</p>';
			}else{
				$message = '<p style="color: red;">File is too large</p>';
			}

		}else{
			$message = '<p style="color: red;">Invalid file type</p>';
		}

	}else{
		$message = '<p style="color: red;">Please choose a file</p>';
	}
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>File Upload</title>
</head>
<body>
	<?php echo $message ?? null; /* if there's a message it will echo it*/?>
	<form action="<?php echo $_SERVER['PHP_SELF'];?>"
	method="POST" enctype="multipart/form-data">
	Select image to upload:
	<input type="file" name="upload">
	<input type="submit" value="Submit" name="submit">
</form>
</body>
</html>

<?php
/* if u're uploading a file there is a special attribute that u have to
add on to the form called enctype so u'll set it to "multipart/form-data"
and if u tried to upload a file without this attribute, it's not gonna work
*/
?>