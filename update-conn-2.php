
<?php


include_once 'db-connection.php';
$id = $_GET['id'];
if (isset($_POST['submit']))
	{
		$name 			= $_POST['full_name'];
		$email 			= $_POST['email'];
		$phoneNumber			= $_POST['phone_number'];
		$adharNumber 		= $_POST['adhar_number'];
		$bookingDate		=$_POST['booking_date'];
		$bookingTime		=	$_POST['booking_time'];
		$pickupLocation	=	$_POST['pickup_location'];
		$dropoffLocation	=	$_POST['drop_off_location'];
		$materialWeight	=	$_POST['material_weight'];
		$materialUnit	=	$_POST['material_unit'];
		$cargoType	=	$_POST['cargo_type'];
		$namelength		=	strlen($name);
		$contactlength		=	strlen($phoneNumber);
		$bookinglength	=	strlen($bookingDate);


		mysqli_query($conn,"UPDATE cargo_bookings set 
			full_name = '$name',
			email = '$email',
			phone_number = '$phoneNumber',
			adhar_number = '$adharNumber',
			booking_date = '$bookingDate',
			booking_time = '$bookingTime',
			pickup_location = '$pickupLocation',
			drop_off_location = '$dropoffLocation',
			material_weight = '$materialWeight',
			material_unit = '$materialUnit',
			cargo_type = '$cargoType'
			WHERE id = '$id'
			");
		// print_r('string');die();
		if(is_null($name) ||  $name == '' )
		{
			$_SESSION['error_message'] = "Please enter your full name";
			header('location: dashboard2.php');
		}
		elseif ($namelength>50) 
		{
			$_SESSION['error_message']="check the limit please";
			header('location: dashboard2.php');
		}
		
		
		elseif (is_null($email) ||   $email == '')
		{

			$_SESSION['error_message'] ="check your email please";
			header('location: dashboard2.php');
		}
		elseif(!is_numeric($phoneNumber)){
			$_SESSION['error_message']="field is requiresd";
			header('location:dashboard2.php');
		}
		elseif (is_null($adharNumber) ||   $adharNumber == '' )
		{

			$_SESSION['error_message'] ="check your password please";
			header('location: dashboard2.php');
		}
		elseif (is_null($bookingDate) ||   $bookingDate == '' )
		{

			$_SESSION['error_message'] ="confirm your password please";
			header('location: dashboard2.php');
		}
		// elseif($password!=$confirmPassword){
		// 	$_SESSION['error_message']="please match your password";
		// 	header('location:dashboard1.php');
		// }

		elseif ($contactlength <10 || $contactlength>12)
		{
			$_SESSION['error_message']="check your number length please";
			header('location:dashboard2.php');
		}		
		

		// elseif ($message_length>=250)
		// {
		// 	$_SESSION['error_message']="write your message please";
		// 	header('location:contact.php');
		// }
		else
		{	
			$_SESSION['success_message']="Successfully updated";
			header('location:dashboard2.php');		
			mysqli_query($conn,"INSERT INTO user_registrations(full_name,email,phone_number,adhar_number,booking_date,booking_time,pickup_location,drop_off_location,material_weight,material_unit,cargo_type)
			VALUES('$name','$email','$phoneNumber,'$adharNumber','$adharNumber','$bookingDate','$bookingTime','$pickupLocation','$dropoffLocation','$materialWeight','$materialUnit','$cargoType')");
		}
	}
?>







