<?php

include_once 'db-connection.php';
$id = $_GET['id'];
mysqli_query($conn,"DELETE FROM contact_us where `contact_us`.`id`=$id");
header('location:dashboard3.php');


?>