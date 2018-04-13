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
  include_once 'Components/navbar.php';
   ?>

  <!-- Profile Header Component -->

    <div class="container my-5 ">

         <div class="row d-flex align-items-center" id="row-height">

             <div class="col-sm ">
                <div class="bio-profile-picture">
                <img class="flex-auto d-none d-md-block h-100 box-shadow" src="images/Lazar-Bio.jpg" alt="Card image cap" id="profile-picture"/>
              </div>
             </div>

             <div class="col-sm size">
                 <h1>Lazar Angelov</h1>
                 <p class="lead">Kotte , Sri Jayawardanapura</p>
                 <br />
                 <div class="row container">
                 <p class="lead"><strong>Experience :</strong></p>
                 <p class="lead ml-1"><strong> 8 Years</strong></p>
                 </div>
             </div>

             <div class="col-sm d-flex justify-content-end size">
                <div class="row container d-flex justify-content-end">
                <p class="lead">5</p>
                <p class="lead">&nbsp;Reviews</p>
                 </div>
             </div>

        </div>

    </div>


    <!-- Bio body Component -->

    <div class="trainer-bio-bio-body my-3" id="bio-body-height">

     <div class="container">
     <div class="row">
          <div class="container col-8">

              <!--  Bio text Component -->

              <p class="lead ">Before becoming a bodybuilder and a personal trainer, Lazar Angelov played professional basketball for 10 years. He led his team in scoring for multiple seasons and was one of the best point guards of his class. At the age of 16 he joined the junior national team of Bulgaria and played for a couple of teams in the National Basketball Association of Bulgaria. At the age of 18 he spent an year and a half in the Army, where he found his vocation – bodybuilding. It became a constant part of his life and he went on to earn a certificate for a personal trainer from the National Sports Academy. Lazar started working with people, helping them to reach their maximum potential in developing their bodies.</p>
              <hr />

              <!-- Specialization Component -->

              <div class="row">
              <img src="images/Trophy-icon.png" class="image-prop" />
              <h6 class="ml-5">Specialized in</h6>
              </div>
              <hr />

              <!-- Goals Component -->

              <h6>Goals you could accomplish with me</h6>
              <hr />

              <!-- Reviews Component -->
              <div class="row">

                <div class="col-sm">
                <h6>Reviews</h6>
                </div>

                <div class="col-sm d-flex justify-content-end">
                <img src="images/Review-icon.png" class="image-prop"/>
                </div>


                <div class="my-5">
                <p>"He asks how I am doing, demonstrates the movements for weightlifting or anything I am uncomfortable with, and pushes me to do that one extra rep! Time, money, and sweat well spent!"</p>

                <div class="row container">
                <p>-</p>
                <p>Rimzan Sadikeen</p>
                </div>

                </div>
                </div>

          </div>

          <!-- Booking box Component -->

          <div class="col-4 w-100" id="booking-box-settings">

              <div class="container d-flex justify-content-center " id="sticky">
              <div class="card-deck mb-3 text-center">
              <div class="card mb-4 box-shadow">

                <div class="card-header d-flex justify-content-center">
                    <div class="row">
                    <h5>Rs.</h5>
                    <h5 class="my-0 font-weight-normal">20000
                    <small class="text-muted"> per month</small>
                    </h5>
                    </div>
                </div>


                <div class="card-body">

                  <div class="row ml-4">

                        <div class="col-3 d-flex align-items-center">From</div>
                        <div class="col-9">

                          <div class="input-group date w-75 datepicker" data-date-format="dd-mm-yyyy">
                          <input class="form-control" type="text" name="">
                          <span class="input-group-addon"></span>
                          </div>

                        </div>

                        <div class="w-100 my-2"></div>
                        <div class="col-3 d-flex align-items-center">To</div>
                        <div class="col-9">

                          <div  class="input-group date w-75 datepicker" data-date-format="dd-mm-yyyy">
                          <input class="form-control" type="text" name="">
                          <span class="input-group-addon"></span>
                          </div>

                        </div>
                  </div>


                    <button type="submit" class="btn btn-lg btn-block btn-danger my-3">Book</button>
                    </form>
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
