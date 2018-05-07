<?php

include('connect_mysql.php');

$booking = mysqli_real_escape_string($dbcon, $_POST['bookingID']);
echo $booking;

 ?>
