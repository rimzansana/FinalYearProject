<?php

  session_start();
  include('connect_mysql.php');

  $startDate = $_SESSION['startDate'];
  $endDate = $_SESSION['endDate'];
  $goal = $_SESSION['goal'];
  $frequency = $_SESSION['frequency'];
  $totalFee = $_SESSION['totalFee'];
  $userID = $_SESSION['uID'];
  $trainerID = $_SESSION['trainerID'];


  //Inserting the booking record into the database

  $insert = "INSERT INTO booking(startDate, endDate, goal, frequency, totalFee, userID, trainerID) VALUES('$startDate','$endDate','$goal','$frequency','$totalFee','$userID','$trainerID')";
  mysqli_query($dbcon,$insert);
  header('Location: home.php');



?>
