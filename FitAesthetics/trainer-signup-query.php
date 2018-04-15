
<link rel="stylesheet" href="css/bootstrap.min.css">

<?php

if (isset($_POST['trainer-signup-button'])){
  include_once 'connect_mysql.php';

  $name = mysqli_real_escape_string($dbcon, $_POST['name']);
  $area = mysqli_real_escape_string($dbcon, $_POST['area']);
  $experience = mysqli_real_escape_string($dbcon, $_POST['experience']);
  $expertise = mysqli_real_escape_string($dbcon, $_POST['expertise']);
  $email = mysqli_real_escape_string($dbcon, $_POST['email']);



  //Sending the trainer request

  $insert = "INSERT INTO request(fullName, area, experience, expertise, email) VALUES('$name','$area','$experience','$expertise', '$email')";
  mysqli_query($dbcon,$insert);
  echo '<script language="javascript">';
  echo 'alert("Thank you for submitting your details. Our team will contact you soon :)")';
  echo '</script>';
  header( "refresh:1;url=index.php" );
  exit();



}

?>
