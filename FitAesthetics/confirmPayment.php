<html>
<body>

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


  ?>

  <script src="js/sweetalert2.all.min.js"></script>
  <script src="js/sweetalert2.min.js"></script>
  <script>swal({
  position: 'center',
  type: 'success',
  allowOutsideClick: false,
  allowEscapeKey: false,
  title: 'Congratulations',
  text:'Your booking was successfully placed',
  showConfirmButton: false,
  timer: 3800
  })</script>

  <?php

  header( "refresh:3.8;url=home.php" );

  ?>


</body>
</html>
