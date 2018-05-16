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

    <title>Set your goal</title>

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




    <!-- Booking info banner Component -->

    <div class="jumbotron jumbotron-fluid search-container">

          <div class="container">
            <h2 class="white-text-color">Start your life changing journey <br /> now</h2>
          </div>

    </div>

    <!-- Booking info steps Component -->

    <div class="booking-info-booking-steps-text container my-5">
        <h5>Follow two simple steps to book your training sessions.</h5>

        <div  class="row container my-5">
        <p><strong>1. Define your goal</strong></p>
         <p> &nbsp;&nbsp;&nbsp;> &nbsp;  2. Confirm and pay</p>
        </div>

      </div>

    <!-- Booking info Breadcrumb Component -->

    <div class="card container breadcrumb-card-shadow">
        <div class="card-body card-props">
            <div class="row">
              <div class="col-2">
                <img src="images/Timer-icon.png" class="image-prop" />
              </div>

              <div class="col-10 d-flex align-items-center">
                <p class="p ml-5 w-100 breadcrumb-p-props"><strong>Easy hiring</strong> &nbsp;&nbsp;&nbsp;  Book your trainer upto 12 months</p>
              </div>
            </div>


        </div>
    </div>

    <!-- Booking info Goal Container Component -->

    <div class="d-flex goal-container-height my-5">
      <div class="container my-5">

      <div class="row">

            <div class="col">

                <h3>Define your goal</h3>

                <div class="my-5">

                    <p class="goal-font-size lead">What is your goal?</p>

                    <form action="paymentUserInfo.php">

                    <div class="input-group-md mb-3" >
                    <select name="fitnessGoal" class="form-control form-control-md" required>
                      <option disabled selected>Select your fitness goal</option>
                      <option>Weight loss</option>
                      <option>Weight gain</option>
                      <option>Muscle gain</option>
                      <option>Aerobic fitness</option>
                      <option>Endurance</option>
                    </select>
                    </div>



                    <div class="my-5">
                    <p class="goal-font-size lead">I want to train</p>

                    <div class="input-group mb-3 w-100 ">
                    <select name="frequency" class="form-control form-control-md" required>
                      <option disabled selected>Select your frequency</option>
                      <option>1-3 days a Week</option>
                      <option>2-5 days a Week</option>
                      <option>5-7 times a Week</option>
                    </select>
                    </div>

                    </div>

                  <button type="submit" class="btn my-3 w-50 white-text-color red-button-color">Continue</button>

                  </form>

                </div>
            </div>

    <!-- Booking info Box Component -->

    <?php
    include_once 'Components/bookingbox.php';
    ?>


      </div>
      </div>
    </div>

    <!-- Booking info footer Component -->

    <?php
    include_once 'Components/minorfooter.php';
    ?>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>

  </script>
  </body>
</html>
