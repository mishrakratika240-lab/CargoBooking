<?php


session_start();
include_once 'db-connection.php';
if(isset($_POST['submit'])){
        $email = $_POST['email'];
        // print_r($email);die();

        $results = mysqli_query($conn,"SELECT password FROM user_registrations  WHERE  email='$email'");
                // header('location:forget1.php');
        $count = mysqli_fetch_array($results);
        if($count>0){
                // $conn = mysqli_query($conn,"UPDATE user_registrations SET password='$newpassword' WHERE email = '$email'");
                // $_SESSION['success_message']=" email succefully match ";
                
                $_SESSION['verify_email']=$email;
                // print_r($_SESSION['verify_email']=$email);die();

                header('location:forget-connection.php');

        }
        else{
                $_SESSION['error_message']="password donot match";
                header('location:login.php');
        }

}

?>