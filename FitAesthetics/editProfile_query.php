<?php
include_once 'connect_mysql.php';
session_start();
$user=$_SESSION['uID'];

if (isset($_POST['update-button'])){


  $firstname = mysqli_real_escape_string($dbcon, $_POST['first']);
  $lastname = mysqli_real_escape_string($dbcon, $_POST['last']);
  $date = mysqli_real_escape_string($dbcon, $_POST['birth']);
  $gender = mysqli_real_escape_string($dbcon, $_POST['gender']);
  $email = mysqli_real_escape_string($dbcon, $_POST['email']);
  $password = mysqli_real_escape_string($dbcon, $_POST['password']);
  $telno = mysqli_real_escape_string($dbcon, $_POST['telno']);
  $address = mysqli_real_escape_string($dbcon, $_POST['address']);


  $update = "UPDATE user SET fName='$firstname', lName='$lastname',dob='$date', gender='$gender' , email='$email', password='$password', telno='$telno', address='$address' WHERE userID='$user'";

  mysqli_query($dbcon,$update);
  header( "refresh:1;url=editProfile.php" );
  exit();


  }



?>
