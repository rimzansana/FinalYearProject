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

    <title>Confirm your payment</title>

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




    <!-- Payment info banner Component -->

    <div class="jumbotron jumbotron-fluid search-container">

          <div class="container">
            <h2 class="white-text-color">Start your life changing journey <br /> now</h2>
          </div>

    </div>

    <!-- Payment info steps Component -->

    <div class="booking-info-booking-steps-text container my-5">
        <h5>Follow two simple steps to book your training sessions.</h5>

        <div  class="row container my-5">
        <p><strong>1. Define your goal</strong></p>
         <p><strong> &nbsp;&nbsp;&nbsp;> &nbsp;  2. Confirm and pay</strong></p>
        </div>

      </div>

      <!-- Payment info Breadcrumb Component -->

      <div class="card container breadcrumb-card-shadow">
          <div class="card-body card-props">
              <div class="row">
                <div class="col-2">
                  <img src="images/Credit-icon.png" class="image-prop" />
                </div>

                <div class="col-10 d-flex align-items-center">
                  <p class="p ml-5 w-100 breadcrumb-p-props"><strong>Easy payment</strong> &nbsp;&nbsp;&nbsp;  Pay with your credit card and start training</p>
                </div>
              </div>


          </div>
      </div>

      <!-- Payment info Container Component -->

      <div class="d-flex payment-container-height my-5">
        <div class="container my-5">

        <div class="row">

              <div class="col">

                  <h3>Confirm and pay</h3>

                  <div class="my-5">

                      <p class="goal-font-size lead">Pay with</p>

                      <form action="confirmPayment.php">

                      <div class="input-group-md mb-3" >
                      <select class="form-control form-control-md">
                        <option>Credit card</option>

                      </select>
                      </div>



                      <p class="goal-font-size lead my-5">Name on the card</p>
                      <div class="input-group-md mb-3" >
                      <input type="text" class="form-control" placeholder="Type your name here">
                      </div>

                      <p class="goal-font-size lead my-5">Card Info</p>

                      <div class="input-group-md mb-3" >
                      <input type="text" class="form-control" placeholder="Card number">
                      </div>
                      <div class="input-group-md mb-3" >
                      <div class="row">
                        <div class="col">
                        <input type="text" class="form-control " placeholder="Expiration date mm/yy">
                        </div>
                        <div class="col">
                        <input type="text" class="form-control " placeholder="CVV">
                        </div>


                      </div>

                      </div>

                      <button type="submit" class="btn my-5 w-50 white-text-color red-button-color">Confirm and pay</button>

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
