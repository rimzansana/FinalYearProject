
<?php
session_start();
if(isset($_SESSION['loggedIn'])){
  if($_SESSION['loggedIn'] == '1'){
    header('Location: bookingInfo.php');
  }else {
    echo '<script language="javascript">';
    echo 'alert("Please sign in to follow the booking process")';
    echo '</script>';
    header( "refresh:1;url=trainerBio.php" );
    exit();

  }
}else {
  echo '<script language="javascript">';
  echo 'alert("Please sign in to follow the booking process")';
  echo '</script>';
  header( "refresh:0.5;url=trainerBio.php" );
  exit();
}


 ?>
