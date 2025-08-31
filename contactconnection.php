<?php

	session_start();
	include_once 'db-connection.php';
	if(isset($_POST['submit']))
	{
		$yourName   							= 	$_POST['your_name'];
		$mobile									=	$_POST['mobile'];
		$email									=	$_POST['email'];
		$message								=	$_POST['message'];
		$createdAt								=	date("Y-m-d h:i:sa");
		$namelength							=	strlen($yourName);
		$messagelength							=	strlen($message);
		$contactlength							=	strlen($mobile);

		if(is_null($yourName) ||  $yourName == '' )
		{
			$_SESSION['error_message'] = "Please enter your full name";
			header('location: contact.php');
		}
		elseif ($namelength>50) 
		{
			$_SESSION['error_message']="check the limit please";
			header('location: contact.php');
		}
		elseif (is_null($email) ||   $email == '')
		{

			$_SESSION['error_message'] ="check your email please";
			header('location: contact.php');
		}

		elseif (is_null($mobile) || $mobile ==  '')
		{
			$_SESSION['error_message']="check  your number length please";
			header('location:contact.php');
		}
		elseif ($contactlength <10 || $contactlength>12)
		{
			$_SESSION['error_message']="check your number length please";
			header('location:contact.php');
		}		
		elseif (is_null($message) ||  $message == "")
		{
			$_SESSION['error_message']="fill your message please";
			header('location:contact.php');
		}

		elseif ($messagelength>=250)
		{
			$_SESSION['error_message']="write your message please";
			header('location:contact.php');
		}
		else
		{
			mysqli_query($conn,"INSERT INTO contact_us(your_name,mobile,email,message,created_at)
			VALUES ('$yourName', '$mobile', '$email','$message','$createdAt')");
			$_SESSION['success_message']="Your Message successfully done";
			header('location:contact.php');

		}
	}
?>



			


			
