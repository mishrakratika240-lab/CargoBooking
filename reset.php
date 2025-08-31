<?php


        session_start();
        include_once 'db-connection.php';
        if(isset($_POST['submit']))
        {
                $email = $_SESSION['email'];
                $oldpassword = $_POST['password1'];
                $newpassword  = $_POST['password2'];
                $confirmPassword = $_POST['password3'];

                $results = mysqli_query($conn,"SELECT password FROM user_registrations  WHERE password ='$oldpassword' and email='$email'");
                $class = mysqli_fetch_array($results);
                if($class>0)
                {
                        $conn = mysqli_query($conn,"UPDATE user_registrations SET password='$newpassword' WHERE email = '$email'");
                        $_SESSION['message']="succefully change password";

                        header('location:dashboard.php');

                }
                else
                {
                        $_SESSION['error_message']="Password donot match";
                        header('location:login.php');
                }
        }

?>