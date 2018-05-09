<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- My Custom CSS -->

    <link rel="stylesheet" type="text/css" href="MainCSS/main.css">
    <link rel="stylesheet" type="text/css" href="css/datepicker.css">

    <title>FitAesthetics</title>

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




  <!-- Profile Header Component -->

  <?php

    include('connect_mysql.php');
    $trainerID = mysqli_real_escape_string($dbcon,$_GET['id']);


    $sql = "SELECT * FROM trainer WHERE trainerID='$trainerID'";
    $result = mysqli_query($dbcon,$sql);
    $queryResults = mysqli_num_rows($result);



    if($queryResults>0){
      while($row= mysqli_fetch_assoc($result)){

        if($row['rating']== 5){
              $rating = '';
              for ( $i = 0; $i <$row['rating']; $i++ ){
              $rating .= "<img src='images/Rating.png' alt='Smiley face' height='23' width='23'>";
            }

            }

                else if($row['rating']== 4) {
                  $rating = '';
                  for ( $i = 0; $i <$row['rating']; $i++ ){
                  $rating .= "<img src='images/Rating.png' alt='Smiley face' height='23' width='23'> ";
                }
              }

                else if($row['rating']== 3) {
                  $rating = '';
                  for ( $i = 0; $i <$row['rating']; $i++ ){
                  $rating .= "<img src='images/Rating.png' alt='Smiley face' height='23' width='23'>";
                }
            }

            else if($row['rating']== 2) {
              $rating = '';
              for ( $i = 0; $i <$row['rating']; $i++ ){
              $rating .= "<img src='images/Rating.png' alt='Smiley face' height='23' width='23'>";
                }
            }

          else if($row['rating']== 1) {
            $rating = '';
            for ( $i = 0; $i <$row['rating']; $i++ ){
            $rating .= "<img src='images/Rating.png' alt='Smiley face' height='23' width='23'>";
                }
        }

    echo "<div class='container my-5 pt-5'>

               <div class='row d-flex align-items-center' id='row-height'>

                   <div class='col-sm'>
                      <div class='bio-profile-picture' id='profile-picture'>
                      <img class='flex-auto d-none d-md-block h-100 w-100 box-shadow' src='".$row['image']."' alt='Card image cap' />
                    </div>
                   </div>

                   <div class='col-sm size'>

                       <div class='row container'>
                       <h1 class='text-dark'>".$row['fName']."</h1>
                       <h1 class='text-dark'>&nbsp;".$row['lName']."</h1>
                       </div>

                       <p class='lead'>".$row['location']."</p>
                       <br />
                       <div class='row container'>
                       <p class='lead'><strong>Experience :</strong></p>
                       <p class='lead ml-1'><strong>".$row['experience']."</strong></p>
                       <p class='lead ml-1'><strong>&nbsp;Years</strong></p>
                       </div>
                   </div>

                   <div class='col-sm d-flex justify-content-end size'>
                      <div class='row container d-flex justify-content-end'>
                      $rating
                       </div>
                   </div>

              </div>

          </div>


          <!-- Bio body Component -->

          <div class='trainer-bio-bio-body my-3'>

           <div class='container'>
           <div class='row'>
                <div class='container col-8'>

                    <!--  Bio text Component -->

                    <p class='lead'>".$row['bio']."</p>
                    <hr />";
          }
        }



  ?>


    <!-- Specialization Component -->


    <?php

              $trainerID = mysqli_real_escape_string($dbcon,$_GET['id']);

              //Retrieving specilizations
              $sqlSpecialization = "SELECT specialization.specializationName
              FROM trainerspecialization
              INNER JOIN specialization
              ON trainerspecialization.specializationID=specialization.specializationID
              INNER JOIN trainer
              ON trainerspecialization.trainerID=trainer.trainerID
              WHERE trainer.trainerID='$trainerID'";

              $specializationResult = mysqli_query($dbcon,$sqlSpecialization);

              //Retrieving goals
              $sqlGoal = "SELECT goal.goalName
              FROM trainergoal
              INNER JOIN goal
              ON trainergoal.goalID=goal.goalID
              INNER JOIN trainer
              ON trainergoal.trainerID=trainer.trainerID
              WHERE trainer.trainerID='$trainerID'";

              $goalResult = mysqli_query($dbcon,$sqlGoal);

              //Retrieving reviews

              $trainerID = mysqli_real_escape_string($dbcon,$_GET['id']);
              $sqlReviews= "SELECT rating.review , user.fName , user.lName

                  FROM rating
                  INNER JOIN booking
                  ON rating.bookingID=booking.bookingID
                  INNER JOIN user
                  ON booking.userID=user.userID
                  WHERE booking.trainerID='$trainerID'";


              $trainerReviews= mysqli_query($dbcon,$sqlReviews);


              echo "
                  <!-- Specialization Component -->

                  <div class='row'>
                  <img src='images/Trophy-icon.png' class='image-prop' />
                  <h6 class='ml-5'>Specialized in</h6>
                  </div>
                  <ul class='my-4 p-1'>";

                      //Printing the specializations

                      while($row= mysqli_fetch_assoc($specializationResult)){
                      echo "<li>".$row['specializationName']."</li>";
                      }


                  echo "</ul>
                  <hr />

                  <!-- Goals Component -->

                  <h6>Goals you could accomplish with me</h6>

                  <ul class='my-4 p-1'>";

                      //Printing the goals

                      while($row= mysqli_fetch_assoc( $goalResult)){
                      echo "<li>".$row['goalName']."</li>";
                      }


                  echo "</ul>

                  <hr />
                  <!-- Reviews Component -->
                  <div class='row'>

                    <div class='col-sm'>
                    <h6>Reviews</h6>
                    </div>

                    <div class='col-sm d-flex justify-content-end'>
                    <img src='images/Review-icon.png' class='image-prop'/>
                    </div>

                      <div class='my-3 container pb-2'>";

                      while($row= mysqli_fetch_assoc($trainerReviews)){
                      echo "<p>'".$row['review']."'</p>

                        <div class='row container p-1'>
                        <p>-&nbsp;</p>
                        <p><strong>".$row['fName']."&nbsp;".$row['lName']."</strong></p>
                        </div>";
                            }

                    echo"    </div>
                        </div>

                  </div>";




  ?>



          <!-- Booking box Component -->

    <?php

          //Getting the trainer fee


            $trainerID = mysqli_real_escape_string($dbcon,$_GET['id']);
            $sql = "SELECT * FROM trainer WHERE trainerID='$trainerID'";
            $result = mysqli_query($dbcon,$sql);

            $row= mysqli_fetch_assoc($result);
            $trainerID = $row['trainerID'];
            $trainerFee = $row['fee'];

          // Checking for booked status

            if(isset($_SESSION['uID'])){
              $userID = $_SESSION['uID'];
              $isBooked = "SELECT * FROM booking
              WHERE booking.userID='$userID' AND booking.trainerID='$trainerID' ";
              $result1 = mysqli_query($dbcon,$isBooked);
              $count  = mysqli_num_rows($result1);

            }

            error_reporting(0);
            ini_set('display_errors', 0);




            echo "<div class='col-4 w-100' id='booking-box-settings'>

                <div class='container d-flex justify-content-center' id='sticky'>
                <div class='card-deck mb-3 text-center'>
                <div class='card mb-4 box-shadow'>

                  <div class='card-header d-flex justify-content-center'>
                      <div class='row'>
                      <h5>Rs.</h5>

                      <h5 class='my-0 font-weight-normal'>$trainerFee

                      <small class='text-muted'> per month</small>
                      </h5>
                      </div>
                  </div>


                <div class='card-body'>

                  <div class='row ml-4'>

                       <div class='col-3 d-flex align-items-center'>From</div>
                       <div class='col-9'>
                    <form action='bookingUserInfo.php'>
                      <input type='hidden' value='$trainerID' name='trainerID'>

                         <div class='input-group date w-100' data-date-format='yyyy-mm-dd'>
                         <input class='form-control' type='date' name='startDate' required>
                         <span class='input-group-addon'></span>
                         </div>

                       </div>

                       <div class='w-100 my-2'></div>
                       <div class='col-3 d-flex align-items-center'>To</div>
                       <div class='col-9'>

                         <div class='input-group date w-100' data-date-format='yyyy-mm-dd'>
                         <input class='form-control' type='date' name='endDate' required>
                         <span class='input-group-addon'></span>
                         </div>

                       </div>
                 </div> ";

                 //Checking if the trainer is already booked

                   if(isset($_SESSION['uID'])){
                      if($count>0){
                        echo "<button type='button' class='btn btn-block btn-success my-3'>You already booked this trainer</button>";
                      }

                      else{

                        if($_SESSION['isZero']==false){
                          echo "<button type='submit' class='btn btn-lg btn-block btn-danger my-3'>Book</button>";
                        }

                        else{

                          echo "<button type='submit' class='btn btn-lg btn-block btn-danger my-3' data-toggle='popover' title='Oops'data-placement='right'   data-content='Bookings are only allowed from 1 month upwards'>Book</button>";
                          $_SESSION['isZero']=false;

                        }

                      }
                    }

                    else{
                      echo "<button type='submit' class='btn btn-lg btn-block btn-danger my-3'>Book</button>";
                    }

                    echo "</form>";
                     ?>
                     <hr />

                    <div class="row">
                        <div class="col-9">You can hire your trainer upto<strong> 12 months</strong></div>
                        <div class="col-2"><img src="images/Calendar-icon.png" /></div>
                    </div>

                </div>

              </div>
              </div>
              </div>

          </div>





     </div>
     </div>
    </div>


    <!-- Footer Component -->

    <?php
    include_once 'Components/footer.php';
     ?>

    <!-- Log in modal Component -->


    <?php
    include_once 'Components/login-modal.php';
     ?>


    <!-- Sign up modal Component -->

    <?php
    include_once 'Components/signup-modal.php';
    ?>

    <!-- Reset Password modal Component -->

    <?php
    include_once 'Components/resetpassword-modal.php';
    ?>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
	  <script type="text/javascript" src="js/jquery.min.js"></script>
	  <script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>



    <script>

    $('[data-toggle="popover"]').popover('show');

    </script>


    <script type="text/javascript">
	   $(function(){
		 $(".datepicker").datepicker({
			autoclose: true,
			todayHighlight: true
		  }).datepicker('update', new Date());
	     });


     </script>

  </script>
  </body>
</html>
