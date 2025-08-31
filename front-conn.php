<?php 

include_once 'db-connection.php';
if(isset($_POST['submit'])){
	$fileName	=	$_FILES['image']['name'];
	$tempname	=	$_FILES['image']['tmp_name'];
	$folder		=	"picture/".$fileName;
	$query		=	mysqli_query($conn,"INSERT INTO  picture (image) value('$fileName')");
	if(move_uploaded_file($tempname, $folder)){
		echo "successfully uploaded ";
	}
	else{
		echo "not uploaded";
	}
}


?>