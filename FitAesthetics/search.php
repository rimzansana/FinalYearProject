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

    <div>

      <!-- Navbar Component -->

      <?php

          session_start();
          if(isset($_SESSION['loggedIn'])){
            if($_SESSION['loggedIn'] == '1'){
            include('Components/search-logged_nav.php');
            }else {
              include('Components/search-unlogged_nav.php');
            }
          }else {
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

    <!-- Result Text Component -->

    <div class="container">
      <div class="row container">
        <h5><p>We have found</p></h5>
        <h5><p> &nbsp;200</p></h5>
        <h5><p> &nbsp;results</p></h5>
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

             <ul id="filter1" class="dropdown-menu" aria-labelledby="dropdownMenuButton">
               <li> <a class="dropdown-item" href="#">Colombo</a></li>
               <li><a class="dropdown-item" href="#">Kolpity</a><li>
               <li> <a class="dropdown-item" href="#">Nugegoda</a><li>
               <li> <a class="dropdown-item" href="#">Dehiwala</a><li>

             </div>
        </div>

        <div class="col-3 p-1 d-flex justify-content-center">

          <div class="dropdown">
            <button class="btn btn-lg dropdown-toggle filter-button-settings btn-outline-danger filter2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
             Goal <span class="caret"></span>
            </button>

             <ul id="filter2" class="dropdown-menu sure" aria-labelledby="dropdownMenuButton">
               <li> <a class="dropdown-item" href="#">Muscle gain</a></li>
               <li><a class="dropdown-item" href="#">Weight loss</a><li>
               <li> <a class="dropdown-item" href="#">Fat loss</a><li>

             </div>
        </div>

        <div class="col-3 p-1 d-flex justify-content-center">

          <div class="dropdown">
            <button class="btn btn-lg dropdown-toggle filter-button-settings btn-outline-danger filter3" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
             Gender <span class="caret"></span>
            </button>

             <ul id="filter3" class="dropdown-menu" aria-labelledby="dropdownMenuButton">
               <li> <a class="dropdown-item" href="#">Male</a></li>
               <li><a class="dropdown-item" href="#">Female</a><li>


             </div>
        </div>

        <div class="col-3 p-1 d-flex justify-content-center">

          <div class="dropdown">
            <button class="btn btn-lg dropdown-toggle filter-button-settings btn-outline-danger filter4" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
             Sort By <span class="caret"></span>
            </button>

             <ul id="filter4" class="dropdown-menu" aria-labelledby="dropdownMenuButton">
               <li> <a class="dropdown-item" href="#">Highest price</a></li>
               <li><a class="dropdown-item" href="#">Lowest price</a><li>
               <li> <a class="dropdown-item" href="#">Rating</a><li>

             </div>
        </div>


      </div>



    </div>


    <!-- Search Result cards Component -->

    <div class="container my-5">

    <div class="row mb-2">

        <div class="col-md-6">

            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <img class="card-img-right flex-auto d-none d-md-block h-100" src="images/card-profile.jpg" alt="Card image cap" width="160" />
                <div class="card-body d-flex flex-column align-items-start">

                    <h3 class="mb-0">
                    <a class="text-dark">Lazar Angelov</a>
                    </h3>

                <div class="text-muted">Body building , Calisthenics and cardio</div>

                <div class="container">
                    <div class=" row my-3">
                    <p> Experience : </p>
                    <p> &nbsp; 5 Years</p>
                    </div>

                    <div class=" row mb-auto">
                    <p>15000</p>
                    <p> &nbsp;LKR per month</p>
                    </div>
                </div>

                <div class="w-100">

                    <div class="row">
                        <div class="col w-50">
                        <a href="trainerBio.php" id="text-decoration-none">View Profile</a>
                        </div>

                        <div class="col d-flex justify-content-end">
                        *****
                        </div>

                    </div>
                </div>

                </div>

            </div>

        </div>

        <div class="col-md-6">

            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <img class="card-img-right flex-auto d-none d-md-block h-100" src="images/card-profile.jpg" alt="Card image cap" width="160" />
                <div class="card-body d-flex flex-column align-items-start">

                    <h3 class="mb-0">
                    <a class="text-dark">Lazar Angelov</a>
                    </h3>

                 <div class="text-muted">Body building , Calisthenics and cardio</div>

                <div class="container">
                    <div class=" row my-3">
                    <p> Experience : </p>
                    <p> &nbsp; 5 Years</p>
                    </div>

                    <div class=" row mb-auto">
                    <p>15000</p>
                    <p> &nbsp;LKR per month</p>
                    </div>
                </div>

                <div class="w-100">

                    <div class="row">
                        <div class="col w-50">
                        <a href="trainerBio.php" id="text-decoration-none">View Profile</a>
                        </div>

                        <div class="col d-flex justify-content-end">
                        *****
                        </div>

                    </div>
                </div>

                </div>

            </div>

        </div>



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
