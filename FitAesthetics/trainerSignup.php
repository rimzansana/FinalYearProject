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
      if(isset($_SESSION['email'])){
        include('Components/logged_nav.php');
      }
      else{
        include('Components/unlogged_nav.php');
      }

      ?>




    <!-- Trainer Banner Component -->

        <div class="jumbotron jumbotron-fluid search-container" >

            <div class="container">
              <h1 class="white-text-color">We connect trainers like you <br />to clients</h1>
            </div>

        </div>


    <!-- Input Form Component -->

    <div class="container" id="input-form-container-size">

        <p class="lead" id="form-header-size">Send us your details by filling the fields below and our team will get back to you right away.</p>

        <form action="trainer-signup-query.php" method="POST">

        <div class="form-group my-5 w-75">
            <label>What is your name?</label>
            <input type="text" class="form-control " placeholder="Name" aria-describedby="h-1" name="name" required/>
            <small id="h-1" class="form-text text-muted"> Give us your full name !</small>
        </div>

        <div class="form-group my-5 w-75">
            <label>Tell us your area</label>
            <input type="text" class="form-control" placeholder="ex : ‘Rajagiriya’" name="area" required/>
        </div>


        <div class="form-group my-5 w-75">
            <label>How long have you been training clients for?</label>
            <input type="text" class="form-control" placeholder="Years" aria-describedby="h-3" name="experience" required/>
        </div>

        <div class="form-group my-5 w-75">
            <label>Select your area of expertise</label>
            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="expertise" >
              <option default>Choose...</option>
              <option value="1">Bodybuilding</option>
              <option value="2">Calisthenics</option>
              <option value="3">Bodyweight training</option>
              <option value="4">Cardio training</option>
            </select>
         </div>


        <div class="form-group my-5 w-75">
            <label>Give us your email address</label>
            <input type="email" class="form-control" placeholder="Email Address" name="email" required/>
        </div>

        <button type="submit" class="btn red-button-color white-text-color my-3 w-25" name="trainer-signup-button">Submit</button>

        </form>

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
  </body>
</html>
