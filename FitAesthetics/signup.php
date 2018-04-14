<?php

if (isset($_POST['signup-button'])){
  include_once 'connect_mysql.php';

  $email = mysqli_real_escape_string($dbcon, $_POST['email']);
  $first = mysqli_real_escape_string($dbcon, $_POST['first']);
  $last = mysqli_real_escape_string($dbcon, $_POST['last']);
  $pass = mysqli_real_escape_string($dbcon, $_POST['pass']);

  //Hashing the password

  //$hashedpwd = password_hash($pass,PASSWORD_DEFAULT);

  //Inserting the user into the database

  $insert = "INSERT INTO user(fName, lName, email, password) VALUES('$first','$last','$email','$pass')";
  mysqli_query($dbcon,$insert);
  session_start();
  $_SESSION['loggedIn'] = '1';
  $_SESSION['email'] = $email;
  header('Location: home.php');
  exit();
}

else{
  header("Location: index.php");
  exit();
}

?>
