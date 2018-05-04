<?php

session_start();

include('connect_mysql.php');
$trainerID =mysqli_real_escape_string($dbcon, $_GET['trainerID']);
$startDate = mysqli_real_escape_string($dbcon, $_GET['startDate']);
$endDate = mysqli_real_escape_string($dbcon, $_GET['endDate']);

$sql = "SELECT * FROM trainer WHERE trainerID='$trainerID'";
$result = mysqli_query($dbcon,$sql);
$row= mysqli_fetch_assoc($result);
$fee = $row['fee'];



if(isset($_SESSION['uID'])){

  //Calculating the month differences

  function dateDiffInMonths($date1, $date2) {
      $ts1 = strtotime($date1);
      $ts2 = strtotime($date2);

      $year1 = date('Y', $ts1);
      $year2 = date('Y', $ts2);

      $month1 = date('n', $ts1);
      $month2 = date('n', $ts2);

      return abs((($year2 - $year1) * 12) + ($month2 - $month1));
  }




  //Calculating the total fee

  function totalFee($fee,$months ) {

    $totalFee = $fee*$months;
    return $totalFee;

  }



  $months = dateDiffInMonths($startDate,$endDate);
  $total = totalFee($fee,$months);

  $_SESSION['startDate'] = $startDate;
  $_SESSION['endDate']  = $endDate;
  $_SESSION['months'] = $months;
  $_SESSION['trainerID'] = $trainerID;
  $_SESSION['totalFee'] = $total;


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
