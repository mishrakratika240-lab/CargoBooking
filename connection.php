<?php
	session_start();
	include_once 'db-connection.php';
	if(isset($_POST['submit']))
	{
		// print_r($_POST);die();
		$yourName  						= 	$_POST['name'];
		$mobile							=	$_POST['mobile'];
		$email							=	$_POST['email'];
		$password						=	$_POST['password'];
		$confirmPassword				=	$_POST['confirm_password'];
		$isTermsCondition				=	$_POST['s_agree_terms_conditions'];
		$createdAt						=	date("Y-m-d h:i:sa");
		$namelength						=	strlen($yourName);
		$contactlength					=	strlen($mobile);
		$passwordlength					=	strlen($password);

		// print_r('string');die();
		if(is_null($yourName) ||  $yourName == '' )
		{
			$_SESSION['error_message'] = "Please enter your full name";
			header('location: register.php');
		}
		elseif ($namelength>50) 
		{
			$_SESSION['error_message']="check the limit please";
			header('location: register.php');
		}
		elseif (is_null($mobile) || $mobile ==  '')
		{
			$_SESSION['error_message']="check please";
			header('location:register.php');
		}
		elseif(!is_numeric($mobile)){
			$_SESSION['error_message']="field is requiresd";
			header('location:register.php');
		}
		elseif (is_null($email) ||   $email == '')
		{

			$_SESSION['error_message'] ="check your email please";
			header('location: register.php');
		}
		elseif (is_null($password) ||   $password === '' )
		{

			$_SESSION['error_message'] ="check your password please";
			header('location: register.php');
		}
		// elseif (is_null($confirmPassword) ||   $confirmPassword == '' )
		// {

		// 	$_SESSION['error_message'] ="confirm your password please";
		// 	header('location: register.php');
		// }
		// elseif($password!=$confirmPassword){
		// 	$_SESSION['error_message']="please match your password";
		// 	header('location:register.php');
		// }

		elseif ($contactlength <10 || $contactlength>12)
		{
			$_SESSION['error_message']="check your number length please";
			header('location:register.php');
		}		
		elseif (is_null($passwordlength<8) ||  $passwordlength == "")
		{
			$_SESSION['error_message']="fill your password please correct order";
			header('location:register.php');
		}

		// elseif ($message_length>=250)
		// {
		// 	$_SESSION['error_message']="write your message please";
		// 	header('location:contact.php');
		// }
		else
		{
			if($password!=$confirmPassword)
			{
			 	$_SESSION['error_message']="please match your password";
			 	header('location:register.php');
				
				
				
			}
			else
			{

					$_SESSION['success_message'] = "Register successfully";	
					header('location:register.php');
					mysqli_query($conn,"INSERT INTO user_registrations(name,mobile,email,password,is_agree_terms_conditions,created_at)
					VALUES('$yourName', '$mobile', '$email','$password','$isTermsCondition','$createdAt')");
			}
		}
	}

		
				
		
?>


 		
