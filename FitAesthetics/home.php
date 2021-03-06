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

    <title>FitAesthetics</title>

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




<!-- Seacrh Bar Component -->

    <div class="jumbotron jumbotron-fluid search-container">

        <div class="container" id="search-content">

            <div class="ml-5">

                <h1 class="display-4 white-text-color">FitAesthetics</h1>
                <p class="lead white-text-color" >We bring fitness to your fingertips. Find your personal trainer now.</p>
                <hr class="my-4" />

                <form action="search.php" class="form-inline" method="post">
                    <input class="form-control mr-sm-2 w-75 p-4 " type="search" placeholder="Try Bambalapitiya" aria-label="Search" id="search-input" name="search" />
                    <button class="btn my-2 my-sm-0 p-3 white-text-color red-button-color " type="submit" id="search-button" name="index-search">Search</button><
                </form>

            </div>
         </div>

     </div>


<!-- Featured Trainer Component -->

    <div class="featured-trainers">

        <div class="pb-md-4 mx-auto text-center">
            <h1 class="display-5 text-center">Our Featured Trainers</h1>
            <p class="lead">Pick from the highest rated trainers for this month</p>
        </div>

        <div class="container">

        <div class="card-deck text-center">

          <?php

            include('connect_mysql.php');

            $sql = "SELECT trainer.trainerID,trainer.fName, trainer.lName,trainer.image, LEFT(trainer.bio, 130) AS bio FROM trainer WHERE rating>=4 ORDER BY RAND()
            LIMIT 3";
            $featuredTrainers = mysqli_query($dbcon,$sql);

            while($row= mysqli_fetch_assoc($featuredTrainers)){

              echo "<div class='card mb-4 box-shadow'>
                  <div class='card-body'>
                      <img class='rounded-circle' src='".$row['image']."' alt='trainer-Image' width='140' height='140' />
                      <h2 class='my-4'>".$row['fName']."&nbsp;".$row['lName']."</h2>
                      <p>".$row['bio']."<strong>...</strong></p>

                  </div>

                  <div class='w-100 mb-5'>
                    <a href='trainerBio.php?id=".$row['trainerID']."' id='text-decoration-none'><button type='button' class='btn btn-lg btn-outline-danger w-75' >View Profile</button> </a>
                  </div>
              </div>";
            }

             ?>

        </div>
        </div>
    </div>

<!-- Trainer sign up Component -->


    <div class="jumbotron jumbotron-fluid search-container">
        <div class="container d-flex flex-row-reverse">

            <div>
                <h1 class="display-5 text-right white-text-color">Are you a personal trainer looking to <br />grow your client base?</h1>
                <br />
                <p class="lead d-flex flex-row-reverse white-text-color">Sign up to work with new local clients</p>
                <hr class="my-4" />
                <a href="trainerSignup.php"><button class="btn my-2 my-sm-1 p-3 float-right w-50 white-text-color red-button-color">Learn more</button></a>
            </div>
        </div>

    </div>


<!-- Review slider Component -->

    <div id="review-header-container">
        <h1 class="display-5 text-center red-text-color">Our Clients</h1>
        <p class="lead text-center">Say About our Trainers</p>
    </div>




    <div id="carouselMovement" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner" id="slider-container">

          <?php

          $sqlReviews= "SELECT rating.review , user.fName , user.lName

              FROM rating
              INNER JOIN booking
              ON rating.bookingID=booking.bookingID
              INNER JOIN user
              ON booking.userID=user.userID
              ORDER BY RAND()
              LIMIT 3";

          $trainerReviews= mysqli_query($dbcon,$sqlReviews);
          $fNames = array();
          $lNames = array();
          $reviews = array();


         while($row= mysqli_fetch_assoc($trainerReviews)){
           $fNames[] = $row['fName'];
           $lNames[] = $row['lName'];
           $reviews[] = $row['review'];
         }




        echo "<div class='carousel-item active'>
                <div class='d-flex justify-content-center'>
                    <img src='images/User.png' alt='Picture one' class='rounded-circle review-picture-settings' />
                </div>

                <div>
                    <h5 class='d-flex justify-content-center my-3'>$fNames[0]&nbsp;$lNames[0]</h5>
                    <p class='d-flex justify-content-center mb-5'>Colombo</p>
                    <br />
                </div>

                <div class='d-flex justify-content-center ml-3 mr-2'>
                    <div class='review-text-div'>
                        <p class='text-center'>$reviews[0]</p>
                    </div>
                </div>
          </div>



          <div class='carousel-item'>
                <div class='d-flex justify-content-center'>
                    <img src='images/User.png' alt='Picture one' class='rounded-circle review-picture-settings'  />
                </div>

                <div>
                    <h5 class='d-flex justify-content-center my-3'>$fNames[1]&nbsp;$lNames[1]</h5>
                    <p class='d-flex justify-content-center mb-5'>Colombo</p>
                    <br />
                </div>

                <div class='d-flex justify-content-center ml-3 mr-2'>
                    <div class='review-text-div'>
                        <p class='text-center'>$reviews[1]</p>
                    </div>
                </div>
          </div>

          <div class='carousel-item'>
                <div class='d-flex justify-content-center'>
                    <img src='images/User.png' alt='Picture one' class='rounded-circle review-picture-settings' />
                </div>

                <div>
                    <h5 class='d-flex justify-content-center my-3'>$fNames[2]&nbsp;$lNames[2]</h5>
                    <p class='d-flex justify-content-center mb-5'>Colombo</p>
                    <br />
                </div>

                <div class='d-flex justify-content-center ml-3 mr-2'>
                    <div class='review-text-div'>
                        <p class='text-center'>'$reviews[2]'</p>
                    </div>
                </div>
          </div>";

          ?>


        </div>

        <a class="carousel-control-prev" href="#carouselMovement" role="button" data-slide="prev">
            <span>
                <img src="images/Chevron-left.png" alt="icon name" class="mb-5"/>
            </span>
            <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#carouselMovement" role="button" data-slide="next">
            <span>
              <img src="images/Chevron-right.png" alt="icon name" class="mb-5"/>
            </span>
            <span class="sr-only">Next</span>
        </a>

    </div>


<!-- Footer Component -->

  <?php
  include_once 'Components/footer.php';
  ?>














    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>

  </script>
  </body>
</html>
