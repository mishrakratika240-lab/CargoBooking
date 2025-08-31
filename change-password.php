<?php
		session_start();
		include_once 'db-connection.php';
		$email = $_SESSION['email'];
		// $findresult = mysqli_query($conn, "SELECT * FROM user_registrations WHERE email='$email'");
		// if ($res = mysqli_fetch_array($findresult)) {

		// 	$username = $res['email'];
		// 	$password = $res['password'];

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>password</title>
</head>
<body>

	<?php   

	if(isset($_POST['changepassword'])){
		$currentPassword = $_POST['currentpassword'];
		$password = $_POST['password'];
		$passwordconfirm = $_POST['changepassword'];
		$result = mysqli_query($conn,"SELECT password  FROM  user_registrations WHERE email = '".$email."'" );
        $row = mysqli_fetch_array($result);

        if(password_verify($currentPassword,$row['password'])){
        	if($passwordconfirm==''){
        		$error[] = "confirm your password";

        	}
        	if($password !=$passwordconfirm){
        		$error[] = "password donot match";
        	}
        	if(strlen($password<2)&& strlen($password>20)){
        		$error[] = "check the length";
        	}
        }
        if(!isset($error)){
        	$options = array("cost"=>4);
        	$password = password_hash($password,PASSWORD_BCRYPT,$options);
        	$result = mysqli_query($conn,"UPDATE user_registrations SET password = '$password' WHERE email ='$email'");
        	if($result){
        		header('location:login.php?password_update=1');

        	}
        	else{
        		$error[] = 'something went wrong';
        	}
        }
        else{
        	$error[] = 'current password donot match';
        }
        if(isset($error)){
        	foreach($error as $error){
        		echo ' <p class = "errmsg">'.$error.'</p>';
        	}
        }
	}
	?>
	<form action="" method="post">
		<label>Current Password</label>
		<input type="password" name="currentpassword">
		<label>New Password</label>
		<input type="password" name="password">
		<label>Confirm Password</label>
		<input type="password" name="passwordconfirm">
		<button  name="changepassword">Change password</button>
		
	</form>



</body>
</html>