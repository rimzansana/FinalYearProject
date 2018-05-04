<?php
include('connect_mysql.php');

$startDate = mysqli_real_escape_string($dbcon, $_GET['startDate']);
$endDate = mysqli_real_escape_string($dbcon, $_GET['endDate']);
$trainerID =mysqli_real_escape_string($dbcon, $_GET['trainerID']);

function dateDiffInMonths($date1, $date2) {
    $ts1 = strtotime($date1);
    $ts2 = strtotime($date2);

    $year1 = date('Y', $ts1);
    $year2 = date('Y', $ts2);

    $month1 = date('n', $ts1);
    $month2 = date('n', $ts2);

    return abs((($year2 - $year1) * 12) + ($month2 - $month1));
}
$bro = dateDiffInMonths($startDate,$endDate);
echo "$startDate </br>
$endDate</br>
$bro </br>
$trainerID";

?>
