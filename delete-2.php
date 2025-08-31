<?php

include_once 'db-connection.php';
$id = $_GET['id'];
mysqli_query($conn,"DELETE FROM cargo_bookings where `cargo_bookings`.`id`=$id");
header('location:dashboard2.php');


?>