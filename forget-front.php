<?php


        session_start();
        include_once 'db-connection.php';
        if(isset($_POST['submit']))
        {
                $email = $_SESSION['verify_email'];
                // print_r($email);die();
                // $oldpassword = $_POST['password1'];
                $newpassword  = $_POST['password2'];
                $confirmPassword = $_POST['password3'];

                $results = mysqli_query($conn,"SELECT password FROM user_registrations  WHERE  email='$email'");
                $class = mysqli_fetch_array($results);
                        // print_r('string');die();
                if($class>0)
                {
                        $conn = mysqli_query($conn,"UPDATE user_registrations SET password='$newpassword' WHERE email = '$email'");
                        $_SESSION['success_message']="succefully change password";

                        header('location:login.php');

                }
                // else
                // {
                //         $_SESSION['error_message']="Password do not match";
                //         header('location:login.php');
                // }
                

               
                else{
                        mysqli_query($conn,"UPDATE   user_registrations set 
                        
                        password = '$newpassword'
                        WHERE email    =  '$email'
                        ");       
                        $_SESSION['success_message']="Successfully updated";
                        header('location:login.php');              
                        
                }
        }
?>