<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- My Custom CSS -->

    <link rel="stylesheet" href="MainCSS/main.css">

    <title>My Trainers</title>

    <link href="images/Trophy-icon.png" rel="icon" type="image/png" />

  </head>
  <body>

    <!-- Navbar Component -->

    <?php

    session_start();
    if(isset($_SESSION['uID'])){
      include('Components/logged_nav.php');
    }
    else{
      include('Components/unlogged_nav.php');
    }

    ?>

    <!-- Header text Component -->

    <div class="container my-5 pt-5">
      <div class="row">
      <h2>My trainers</h2>
      <p id="italic-settings" class="p-2"><i>&nbsp;&nbsp;Tell us what you think </i></p>
      </div>
    </div>

    <!-- My trainers card Component -->


    <?php

    include('connect_mysql.php');
    $userID = $_SESSION['uID'];

    $sqlTrainers = "SELECT trainer.fName , trainer.lName ,trainer.image ,booking.bookingID, booking.totalFee , booking.startDate , booking.endDate , booking.goal ,booking.isRated

        FROM booking
        INNER JOIN trainer
        ON booking.trainerID=trainer.trainerID
        INNER JOIN user
        ON booking.userID=user.userID
        WHERE user.userID='$userID'";


    $myTrainers = mysqli_query($dbcon,$sqlTrainers);

    function dateDiffInMonths($date1, $date2) {
        $ts1 = strtotime($date1);
        $ts2 = strtotime($date2);

        $year1 = date('Y', $ts1);
        $year2 = date('Y', $ts2);

        $month1 = date('n', $ts1);
        $month2 = date('n', $ts2);

        return abs((($year2 - $year1) * 12) + ($month2 - $month1));
    };

    while($row = mysqli_fetch_assoc($myTrainers)){

          $start = $row['startDate'];
          $end = $row['endDate'];
          $month = dateDiffInMonths($start, $end);
          $isRated = $row['isRated'];

      echo "<div class='container my-3 p-2'>


              <div class='card flex-md-row mb-4 box-shadow h-md-250 w-75 p-2'>
                  <img class='card-img-right flex-auto d-none d-md-block h-100' src='".$row['image']."' alt='Card image cap' width='160' />
                  <div class='card-body d-flex flex-column align-items-start'>

                  <div class='row w-100'>
                    <div class='col'>
                      <h3 class='mb-0'>
                      <p class='text-dark'>".$row['fName']."&nbsp;".$row['lName']."</p>
                      </h3>
                      <p class='text-muted pt-2'>My goal :&nbsp;".$row['goal']."</p>
                    </div>

                    <div class='col'>
                      <div class='row  d-flex justify-content-end'>
                      <p><strong>Training total</strong></p>
                    </div>
                      <div class='row d-flex justify-content-end'>
                        <p>Rs.&nbsp;".$row['totalFee']."</p>
                      </div>

                    </div>
                  </div>


                  <div class='w-100' id='card-bottom'>

                      <div class='row '>
                          <div class='col w-50'>
                            <div class='container'>
                            <div class='row'>
                              <p>Hired for :</p>";

                              if($month==1){
                                echo "<p>&nbsp;$month&nbsp;month </p>";
                              }

                              else{
                                echo "<p>&nbsp;$month&nbsp;months </p>";
                              }

                          echo "
                            </div>
                          </div>
                          </div>

                          <div class='col d-flex justify-content-end'>";

                          //Checking isRated logic

                          if($isRated==1){
                              echo "<button class='btn btn-danger disabled'>Feedback left</button>";
                          }

                          else{
                            echo "<button class='btn red-button-color white-text-color' data-toggle='modal' onclick='addBookingID(".$row['bookingID'].")' data-target='#Review'>Rate this trainer</button>";
                          }

                      echo" </div>

                      </div>
                  </div>

                  </div>

              </div>
      </div>";

    }

    ?>




    <!-- Footer Component -->

    <?php
    include_once 'Components/footer.php';
     ?>

     <!-- Review modal Component -->

     <?php
     include_once 'Components/review-modal.php';
      ?>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>

    <script>

    function addBookingID( bookingID ) {

  $('#add-bookingID').attr('value',bookingID)
  }

    </script>
  </body>
</html>
