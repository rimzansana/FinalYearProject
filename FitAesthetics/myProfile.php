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
    include_once 'Components/navbar.php';
     ?>

    <!-- My profile Body Component -->


    <div class="container" id="edit-container-settings">
    <div class="row">


      <div class="col-3">
        <h4>Edit Profile</h4>
      </div>


      <div class="col-9">

      <div class="row">

        <div class="card w-100">
        <h5 class="card-header">Required</h5>
        <div class="card-body">

        <form>

            <div class="form-group row">
            <label for="firstName" class="col-sm-2 col-form-label">First Name</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="firstName" placeholder="">
            </div>
            </div>

            <div class="form-group row pt-4">
            <label for="lastName" class="col-sm-2 col-form-label">Last Name</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="lastName" placeholder="">
            </div>
            </div>

            <div class="form-group row pt-4">
            <label for="dob" class="col-sm-2 col-form-label">Birth Date</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="dob" placeholder="">
            </div>
            </div>

            <div class="form-group row pt-4">
            <label for="gender" class="col-sm-2 col-form-label">Gender</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="gender" placeholder="">
            </div>
            </div>

            <div class="form-group row pt-4">
            <label for="email" class="col-sm-2 col-form-label">Email Address</label>
            <div class="col-sm-10">
            <input type="email" class="form-control" id="email" placeholder="">
            <small class="text-muted">We won’t share your private email adddress with other fitAesthetic users.</small>
            </div>
            </div>

            <div class="form-group row pt-4">
            <label for="password" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
            <input type="password" class="form-control" id="password" placeholder="">
            </div>
            </div>

            <div class="form-group row pt-4">
            <label for="phone" class="col-sm-2 col-form-label">Phone Number</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="phone" placeholder="">
            </div>
            </div>

            <div class="form-group row pt-4">
            <label for="address" class="col-sm-2 col-form-label">Address</label>
            <div class="col-sm-10">
            <textarea type="text" class="form-control" id="address" placeholder=""></textarea>
            <small class="text-muted">Your residential address is secure with us.</small>
            </div>
            </div>




            <div class="form-group row pt-4">
            <div class="col-sm-10">
            <button type="submit" class="btn white-text-color red-button-color">Save</button>
            </div>
            </div>

        </form>

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




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>

  </script>
  </body>
</html>
