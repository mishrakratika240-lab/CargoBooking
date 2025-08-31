<?php

include_once 'db-connection.php';
$id=$_GET['id'];
 mysqli_query($conn , "DELETE FROM `user_registrations` WHERE `user_registrations`.`id` = $id");
header('location:dashboard1.php');


?>