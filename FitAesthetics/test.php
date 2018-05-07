<?php

session_start();
include('connect_mysql.php');
$userID = $_SESSION['uID'];



$sqlTrainers = "SELECT trainer.fName , trainer.lName , booking.totalFee , booking.startDate , booking.endDate

    FROM booking
    INNER JOIN trainer
    ON booking.trainerID=trainer.trainerID
    INNER JOIN user
    ON booking.userID=user.userID
    WHERE user.userID='$userID'";


$myTrainers = mysqli_query($dbcon,$sqlTrainers);
$row= mysqli_fetch_assoc($myTrainers);

$start = $row['startDate'];
$end = $row['endDate'];

function dateDiffInMonths($date1, $date2) {
    $ts1 = strtotime($date1);
    $ts2 = strtotime($date2);

    $year1 = date('Y', $ts1);
    $year2 = date('Y', $ts2);

    $month1 = date('n', $ts1);
    $month2 = date('n', $ts2);

    return abs((($year2 - $year1) * 12) + ($month2 - $month1));
}

$month = dateDiffInMonths($start, $end);


echo $row['fName'];
echo $row['lName'];
echo $row['totalFee'];
echo $month;


?>
