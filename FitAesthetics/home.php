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

            <div class="card mb-4 box-shadow">
                <div class="card-body">
                    <img class="rounded-circle" src="images/Profile-1.jpg" alt="Image1" width="140" height="140" />
                    <h2 class="my-4">Ulisess Jr</h2>
                    <p>Ulisses Jr is one of the most sought after and highly respected bodybuilding and body composition coaches in the World.</p>
                </div>

                <div class="w-100 mb-5">
                    <button type="button" class="btn btn-lg btn-outline-danger w-75 ">View Profile</button>
                </div>
            </div>

            <div class="card mb-4 box-shadow">
                <div class="card-body">
                    <img class="rounded-circle" src="images/Profile-2.jpg" alt="Image1" width="140" height="140" />
                    <h2 class="my-4">Ulisess Jr</h2>
                    <p>Ulisses Jr is one of the most sought after and highly respected bodybuilding and body composition coaches in the World.</p>
                </div>

                <div class="w-100 mb-5">
                    <button type="button" class="btn btn-lg btn-outline-danger w-75 ">View Profile</button>
                </div>
            </div>

            <div class="card mb-4 box-shadow">
                <div class="card-body">
                    <img class="rounded-circle" src="images/Profile-3.jpg" alt="Image1" width="140" height="140" />
                    <h2 class="my-4">Ulisess Jr</h2>
                    <p>Ulisses Jr is one of the most sought after and highly respected bodybuilding and body composition coaches in the World.</p>
                </div>

                <div class="w-100 mb-5">
                    <button type="button" class="btn btn-lg btn-outline-danger w-75 ">View Profile</button>
                </div>
            </div>

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

          <div class="carousel-item active">
                <div class="d-flex justify-content-center">
                    <img src="images/Profile-1.jpg" alt="Picture one" class="rounded-circle review-picture-settings" />
                </div>

                <div>
                    <h5 class="d-flex justify-content-center my-3">Rimzan Sadikeen</h5>
                    <p class="d-flex justify-content-center mb-5">Colombo</p>
                    <br />
                </div>

                <div class="d-flex justify-content-center ml-3 mr-2">
                    <div class="review-text-div">
                        <p class="text-center">"He asks how I am doing, demonstrates the movements for weightlifting or anything I am uncomfortable with, and pushes me to do that one extra rep! Time, money, and sweat well spent!"</p>
                    </div>
                </div>
          </div>



          <div class="carousel-item">
                <div class="d-flex justify-content-center">
                    <img src="images/Profile-2.jpg" alt="Picture one" class="rounded-circle review-picture-settings"  />
                </div>

                <div>
                    <h5 class="d-flex justify-content-center my-3">Rimzan Sadikeen</h5>
                    <p class="d-flex justify-content-center mb-5">Colombo</p>
                    <br />
                </div>

                <div class="d-flex justify-content-center ml-3 mr-2">
                    <div class="review-text-div">
                        <p class="text-center">"He asks how I am doing, demonstrates the movements for weightlifting or anything I am uncomfortable with, and pushes me to do that one extra rep! Time, money, and sweat well spent!"</p>
                    </div>
                </div>
          </div>

          <div class="carousel-item">
                <div class="d-flex justify-content-center">
                    <img src="images/Profile-3.jpg" alt="Picture one" class="rounded-circle review-picture-settings" />
                </div>

                <div>
                    <h5 class="d-flex justify-content-center my-3">Rimzan Sadikeen</h5>
                    <p class="d-flex justify-content-center mb-5">Colombo</p>
                    <br />
                </div>

                <div class="d-flex justify-content-center ml-3 mr-2">
                    <div class="review-text-div">
                        <p class="text-center">"He asks how I am doing, demonstrates the movements for weightlifting or anything I am uncomfortable with, and pushes me to do that one extra rep! Time, money, and sweat well spent!"</p>
                    </div>
                </div>
          </div>

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

    <div>

        <hr />
        <div class="my-3">
            <footer class="container py-4" >
                  <div class="row">

                    <div class="col-12 col-md">
                      <div id="info-text-settings">
                          <img src="images/mail.png" width="24" height="24"></img>
                          <p class="ml-2">info@fitaesthetics.com</p>
                      </div>

                      <div class="my-4">
                          <p>INSERT LOG HERE </p>
                      </div>
                    </div>

                    <div class="col-6 col-md">
                      <h5>FitAesthetics</h5>
                      <ul class="list-unstyled text-small">
                          <li><a class="text-muted" href="#">Careers</a></li>
                          <li><a class="text-muted" href="#">Contact Us</a></li>
                          <li><a class="text-muted" href="#">Help</a></li>
                          <li><a class="text-muted" href="#">Blog</a></li>
                       </ul>
                    </div>

                    <div class="col-6 col-md">
                      <h5>About</h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="text-muted" href="#">Our Team</a></li>
                            <li><a class="text-muted" href="#">Locations</a></li>
                            <li><a class="text-muted" href="#">Privacy</a></li>
                            <li><a class="text-muted" href="#">Terms</a></li>
                        </ul>
                    </div>

                  </div>

            </footer>
            <hr />
            <small class="d-block mb-3 text-muted my-3 text-center">&copy; FitAesthetics inc. All rights reserved</small>
        </div>
    </div>



<!-- Log in modal Component -->

<!--
    <div class="modal fade" id="LogIN" tabIndex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

      <div class="modal-dialog modal-dialog-centered" role="document">

      <div class="modal-content modal-main-settings">

            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Log In</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="d-flex justify-content-center">

                <div class="d-flex justify-content-center modal-settings">

                  <form id="login-modal-form" action="index.php" method="post">
                  	<input type = "hidden" name = "submitted" value = "true" />
                      <input type="email" class="form-control"  placeholder="Email" name="emailx" id="emailx" />
                      <input type="password" class="form-control my-3"  placeholder="Password" name="passwordx" id="passwordx" />
                      <button type="submit" class="btn red-button-color white-text-color my-4 form-button-size">Log in</button>
                  </form>

                  <div>
                      <div class="d-flex justify-content-center">
                      <a class="red-text-color" href="" data-toggle="modal" data-target="#Reset" data-dismiss="modal" id="text-decoration-none">Forgot your password?</a>
                      </div>
                      <hr />
                  </div>


                  <div class="d-flex justify-content-center">
                    <div class="d-flex flex-row">
                      <p>Don't have an account?</p>
                      <a class="ml-2 red-text-color" href="" data-toggle="modal" data-target="#SignUP" data-dismiss="modal" id="text-decoration-none">Sign up</a>
                    </div>
                  </div>

                </div>

            </div>
      </div>
      </div>
    </div>


<!-- Sign up modal Component -->
<!--
    <div class="modal fade" id="SignUP" tabIndex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered" role="document">

        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Sign Up</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="d-flex justify-content-center">

            <div class="d-flex justify-content-center modal-settings">

               <form id="signup-modal-form" action="index.php" method="post" >
                <input type = "hidden" name = "submitted" value = "true" />
                  <fieldset>

                   <input type="email" name="email" class="form-control my-2"  placeholder="Email" id="email" />
                   <input type="text" name="fName" class="form-control my-2"  placeholder="First Name" id="fName"/>
                   <input type="text" name="lName" class="form-control my-2"  placeholder="Last Name" id="lName"/>
                   <input type="password" name="password" class="form-control my-2"  placeholder="Password" id="password"/>
                   <button type="submit" value="submit" class="btn red-button-color white-text-color my-4 form-button-size">Sign up</button>
                  </fieldset>
               </form>

               <div>
                <hr />
               </div>

               <div class="d-flex justify-content-center">
                 <div class="d-flex flex-row">
                     <p>Already have an account?</p>
                     <a class="ml-2 red-text-color" href="" data-toggle="modal" data-target="#LogIN" data-dismiss="modal" id="text-decoration-none">Log in</a>
                 </div>

               </div>

            </div>

            </div>
          </div>
          </div>
    </div>


<!-- Reset Password modal Component -->
<!--
    <div class="modal fade" id="Reset" tabIndex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered" role="document">

        <div class="modal-content">

            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Reset Password</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>


            <div class="d-flex justify-content-center">

                <div class="d-flex justify-content-center mt-4" id="reset-content-settings">

                  <form id="reset-modal-form">
                      <p class="lead text-center">Enter your email associated with your account and we will email you a link to reset your password</p>
                      <input type="email" class="form-control my-4"  placeholder="Email" />
                  </form>

                 </div>
             </div>

            <div class="d-flex justify-content-center mb-5">
                  <div class="d-flex flex-row">
                    <a class="my-2 mr-5 red-text-color" href="" data-toggle="modal" data-target="#LogIN" data-dismiss="modal" id="text-decoration-none"> Back to Login</a>
                    <button type="button" class="btn red-button-color white-text-color ml-5" >Send Link</button>
                  </div>

            </div>



        </div>
        </div>
    </div>


</div>














    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>

  </script>
  </body>
</html>
