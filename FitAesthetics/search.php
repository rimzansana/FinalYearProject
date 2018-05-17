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

    <title>Search your trainer</title>

    <link href="images/Trophy-icon.png" rel="icon" type="image/png" />

  </head>
  <body>

    <div>

      <!-- Navbar Component -->

      <?php

          session_start();
          if(isset($_SESSION['uID'])){
            include('Components/search-logged_nav.php');
          }
          else{
            include('Components/search-unlogged_nav.php');
          }

      ?>


    <!-- Search Banner Component -->

    <div class="jumbotron jumbotron-fluid search-container">

        <div class="container">
            <h1 class="white-text-color">Find your perfect trainer below</h1>
            <p class="lead my-5 white-text-color">Browse through our professional trainers to find the best fit for you.</p>
        </div>

    </div>


    <!-- Filter Buttons Component -->

    <div class="container my-3">

      <div class="row">

        <div class="col-3 p-1 d-flex justify-content-center">
          <div class="dropdown">
            <button class="btn btn-lg dropdown-toggle filter-button-settings btn-outline-danger filter1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
             City <span class="caret"></span>
            </button>

            <form action="search.php" method="post">
            <input type = "hidden" name = "filter1-button" value = "true" />

             <ul id="filter1" class="dropdown-menu" aria-labelledby="dropdownMenuButton">
               <li><a class="dropdown-item" href="#"><button class="btn" type="submit" value="Kolpity" name="Kolpity">Kolpity</button></a></li>
               <li><a class="dropdown-item" href="#"><button class="btn" type="submit" value="Nugegoda" name="Nugegoda">Nugegoda</button></a></li>
               <li><a class="dropdown-item" href="#"><button class="btn" type="submit" value="Bambalapitiya" name="Bambalapitiya">Bambalapitiya</button></a></li>
               <li><a class="dropdown-item" href="#"><button class="btn" type="submit" value="Borella" name="Borella">Borella</button></a></li>
               <li><a class="dropdown-item" href="#"><button class="btn" type="submit" value="Pannipitiye" name="Pannipitiye">Pannipitiye</button></a></li>

            </ul>
            </form>

             </div>
        </div>

        <div class="col-3 p-1 d-flex justify-content-center">

          <div class="dropdown">
            <button class="btn btn-lg dropdown-toggle filter-button-settings btn-outline-danger filter2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
             Goal <span class="caret"></span>
            </button>

            <form action="search.php" method="post">
            <input type = "hidden" name = "filter2-button" value = "true" />


             <ul id="filter2" class="dropdown-menu sure" aria-labelledby="dropdownMenuButton">
               <li><a class="dropdown-item" href="#"><button class="btn" type="submit" value="Weight loss" name="weightLoss">Weight Loss</button></a></li>
               <li><a class="dropdown-item" href="#"><button class="btn" type="submit" value="Muscle gain" name="muscleGain">Muscle Gain</button></a></li>
               <li><a class="dropdown-item" href="#"><button class="btn" type="submit" value="Toning" name="toning">Toning</button></a></li>
               <li><a class="dropdown-item" href="#"><button class="btn" type="submit" value="Endurance" name="endurance">Endurance</button></a></li>
               <li><a class="dropdown-item" href="#"><button class="btn" type="submit" value="Nutrition" name="nutrition">Nutrition</button></a></li>


            </ul>
          </form>
             </div>
        </div>

        <div class="col-3 p-1 d-flex justify-content-center">

          <div class="dropdown">
            <button class="btn btn-lg dropdown-toggle filter-button-settings btn-outline-danger filter3" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
             Gender <span class="caret"></span>
            </button>

            <form action="search.php" method="post">
            <input type = "hidden" name = "filter3-button" value = "true" />
             <ul id="filter3" class="dropdown-menu" aria-labelledby="dropdownMenuButton">
               <li><a class="dropdown-item" href="#"><button class="btn" type="submit" value="Male" name="Male">Male</button></a></li>
               <li><a class="dropdown-item" href="#"><button class="btn" type="submit" value="Female" name="Female">Female</button></a></li>
            </ul>
          </form>

             </div>
        </div>

        <div class="col-3 p-1 d-flex justify-content-center">

          <div class="dropdown">
            <button class="btn btn-lg dropdown-toggle filter-button-settings btn-outline-danger filter4" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
             Sort By <span class="caret"></span>
            </button>

            <form action="search.php" method="post">
            <input type = "hidden" name = "filter4-button" value = "true" />

             <ul id="filter4" class="dropdown-menu" aria-labelledby="dropdownMenuButton">
               <li><a class="dropdown-item" href="#"><button class="btn" type="submit" value="Highest" name="hPrice">Highest Price</button></a></li>
               <li><a class="dropdown-item" href="#"><button class="btn" type="submit" value="Lowest" name="lPrice">Lowest Price</button></a></li>
               <li><a class="dropdown-item" href="#"><button class="btn" type="submit" value="Rating" name="hRating">Highest Rating</button></a></li>
               <li><a class="dropdown-item" href="#"><button class="btn" type="submit" value="Rating" name="lRating">Lowest Rating</button></a></li>
            </ul>
          </form>
             </div>
        </div>


      </div>



    </div>


    <!-- Search Result cards Component -->


    <div class="container my-5">

    <div class="row mb-2">

    <?php
    include_once 'search_query.php';
    ?>

    </div>
    </div>


    <!-- Page Navigator Component -->

    <div class="container my-5">
          <nav>
               <ul class="pagination justify-content-center">
                  <li class="page-item disabled">
                  <a class="page-link" href="#" tabIndex="-1">Previous</a>
                  </li>

                  <li class="page-item item-danger active"><a class="page-link red-text-color" href="#">1</a></li>
                  <li class="page-item"><a class="page-link red-text-color" href="#">2</a></li>
                  <li class="page-item"><a class="page-link red-text-color" href="#">3</a></li>
                  <li class="page-item">

                  <a class="page-link red-text-color" href="#">Next</a>
                  </li>
               </ul>
         </nav>

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







    </div>

      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="js/bootstrap.min.js"></script>

      <!-- Filter button JavaScript -->
      <script>
      $("#filter1 li a").click(function(){

        $(".filter1:first-child").html($(this).text()+' <span class="caret"></span>');

      });

      $("#filter2 li a").click(function(){

        $(".filter2:first-child").html($(this).text()+' <span class="caret"></span>');

      });

      $("#filter3 li a").click(function(){

        $(".filter3:first-child").html($(this).text()+' <span class="caret"></span>');

      });

      $("#filter4 li a").click(function(){

        $(".filter4:first-child").html($(this).text()+' <span class="caret"></span>');

      });

      </script>



    </body>
  </html>
