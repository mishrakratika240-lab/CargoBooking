<?php


include_once 'db-connection.php';
$id = $_GET['id'];
if (isset($_POST['submit']))
	{
		$name 			= $_POST['name'];
		$mobile			= $_POST['mobile'];
		$email 			= $_POST['email'];
		$password 		= $_POST['password'];
		$namelength		=	strlen($yourName);
		$contactlength		=	strlen($mobile);
		$passwordlength	=	strlen($password);


		mysqli_query($conn,"UPDATE user_registrations set 
			name = '$name',
			mobile = '$mobile',
			email = '$email',
			password = '$password'
			WHERE id = '$id'
			");
		// print_r('string');die();
		if(is_null($name) ||  $name == '' )
		{
			$_SESSION['error_message'] = "Please enter your full name";
			header('location: dashboard1.php');
		}
		elseif ($namelength>50) 
		{
			$_SESSION['error_message']="check the limit please";
			header('location: dashboard1.php');
		}
		elseif (is_null($mobile) || $mobile ==  '')
		{
			$_SESSION['error_message']="check please";
			header('location:dashboard1.php');
		}
		elseif(!is_numeric($mobile)){
			$_SESSION['error_message']="field is requiresd";
			header('location:dashboard1.php');
		}
		elseif (is_null($email) ||   $email == '')
		{

			$_SESSION['error_message'] ="check your email please";
			header('location: dashboard1.php');
		}
		elseif (is_null($password) ||   $password == '' )
		{

			$_SESSION['error_message'] ="check your password please";
			header('location: dashboard1.php');
		}
		elseif (is_null($confirmPassword) ||   $confirmPassword == '' )
		{

			$_SESSION['error_message'] ="confirm your password please";
			header('location: dashboard1.php');
		}
		elseif($password!=$confirmPassword){
			$_SESSION['error_message']="please match your password";
			header('location:dashboard1.php');
		}

		elseif ($contactlength <10 || $contactlength>12)
		{
			$_SESSION['error_message']="check your number length please";
			header('location:dashboard1.php');
		}		
		elseif (is_null($passwordlength<8) ||  $passwordlength == "")
		{
			$_SESSION['error_message']="fill your password please";
			header('location:dashboard1.php');
		}

		// elseif ($message_length>=250)
		// {
		// 	$_SESSION['error_message']="write your message please";
		// 	header('location:contact.php');
		// }
		else
		{	
			$_SESSION['success_message']="Successfully updated";
			header('location:dashboard1.php');		
			mysqli_query($conn,"INSERT INTO user_registrations(name,mobile,email,password,confirm_password,is_agree_terms_conditions,created_at)
			VALUES('$name', '$mobile', '$email','$password')");
		}
	}
?>







