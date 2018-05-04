<?php

session_start();

include('connect_mysql.php');
$fitnessGoal =mysqli_real_escape_string($dbcon, $_GET['fitnessGoal']);
$frequency =mysqli_real_escape_string($dbcon, $_GET['frequency']);

$_SESSION['goal'] = $fitnessGoal;
$_SESSION['frequency'] = $frequency ;

header('Location: paymentInfo.php');

?>
