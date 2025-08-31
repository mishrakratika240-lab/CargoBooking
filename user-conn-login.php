<?php
    session_start();
    include_once 'db-connection.php';

    if(isset($_POST['submit']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        if($email == '' || $password == ''){
            $_SESSION['error_message']="Please write your email and password";
            header('location:login.php');
        }
        else{

            $result = mysqli_query($conn,"SELECT count(*) as cntUser FROM  user_registrations WHERE email = '".$email."' AND password = '".$password."'");
            $row = mysqli_fetch_array($result);
            $olduser = mysqli_query($conn,"SELECT mobile,email,password FROM user_registrations WHERE email='$email'AND password='$password'");
            $user =  mysqli_fetch_array($olduser);   
            // print_r('STRING');die(); 
            if($row['cntUser']>0){
                    $_SESSION['email'] = $email;
                    $_SESSION['password'] = $password;
                    $_SESSION['id'] =  $row[$id];
                    header('location:dashboard.php');
                }
            if($row['cntUser']==0){
                $_SESSION['error_message']= "wrong password or email ";
                // print_r($_POST);die();
                header('location:login.php');
            }

        }
        
    }


?>
