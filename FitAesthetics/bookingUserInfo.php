<?php

session_start();

include('connect_mysql.php');
$trainerID =mysqli_real_escape_string($dbcon, $_GET['trainerID']);
$startDate = mysqli_real_escape_string($dbcon, $_GET['startDate']);
$endDate = mysqli_real_escape_string($dbcon, $_GET['endDate']);

if(isset($_SESSION['uID'])){

  function dateDiffInMonths($date1, $date2) {
      $ts1 = strtotime($date1);
      $ts2 = strtotime($date2);

      $year1 = date('Y', $ts1);
      $year2 = date('Y', $ts2);

      $month1 = date('n', $ts1);
      $month2 = date('n', $ts2);

      return abs((($year2 - $year1) * 12) + ($month2 - $month1));
  }

  $months = dateDiffInMonths($startDate,$endDate);

  $_SESSION['months'] = $months;
  $_SESSION['trainerID'] = $trainerID;

  header('Location: bookingInfo.php');
}

else {
echo '<script language="javascript">';
echo 'alert("Please sign in to follow the booking process")';
echo '</script>';
header( "refresh:0.5;url=trainerBio.php?id=".$trainerID."" );
exit();

}





?>
