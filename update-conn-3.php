<?php


	include_once 'db-connection.php';
	$id = $_GET['id'];
	if (isset($_POST['submit']))
		{
			$name 			= $_POST['your_name'];
			$mobile			= $_POST['mobile'];
			$email 			= $_POST['email'];
			$message 		= $_POST['message'];
			$namelength		=	strlen($name);
			$contactlength		=	strlen($mobile);
			$messageLength	=	strlen($message);


			mysqli_query($conn,"UPDATE contact_us set 
				your_name 		= '$name',
				mobile 			= '$mobile',
				email 			= '$email',
				message 		= '$message'
				WHERE id 		= '$id'
				");
			// print_r('string');die();
			if(is_null($name) ||  $name == '' )
			{
				$_SESSION['error_message'] = "Please enter your full name";
				header('location: dashboard3.php');
			}
			elseif ($namelength>50) 
			{
				$_SESSION['error_message']="check the limit please";
				header('location: dashboard3.php');
			}
			elseif (is_null($mobile) || $mobile ==  '')
			{
				$_SESSION['error_message']="check please";
				header('location:dashboard3.php');
			}
			elseif(!is_numeric($mobile)){
				$_SESSION['error_message']="field is requiresd";
				header('location:dashboard3.php');
			}
			elseif (is_null($email) ||   $email == '')
			{

				$_SESSION['error_message'] ="check your email please";
				header('location: dashboard3.php');
			}
			elseif (is_null($message) ||   $message == '' )
			{

				$_SESSION['error_message'] ="check your password please";
				header('location: dashboard3.php');
			}
			elseif (is_null($confirmPassword) ||   $confirmPassword == '' )
			{

				$_SESSION['error_message'] ="confirm your password please";
				header('location: dashboard3.php');
			}
			

			elseif ($contactlength <10 || $contactlength>12)
			{
				$_SESSION['error_message']="check your number length please";
				header('location:dashboard3.php');
			}		
			

			// elseif ($message_length>=250)
			// {
			// 	$_SESSION['error_message']="write your message please";
			// 	header('location:contact.php');
			// }
			else
			{	
				$_SESSION['success_message']="Successfully updated";
				header('location:dashboard3.php');		
				mysqli_query($conn,"INSERT INTO contact_us(your_name,mobile,email,message,)
				VALUES('$name', '$mobile', '$email','$message')");
			}
		}
?>







