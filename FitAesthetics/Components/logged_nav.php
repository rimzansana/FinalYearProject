<?php

$name=$_SESSION['name'];

echo "<!DOCTYPE html>
  <html>
  <head>
  	<title></title>
  </head>
  <body>
  	<nav class='navbar fixed-top navbar-expand-lg navbar-light' id='nav-container'>
        <a class='navbar-brand white-text-color' href='home.php'>FitAesthetics.LK</a>
        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNavDropdown' aria-controls='navbarNavDropdown' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
        </button>

        <div class='collapse navbar-collapse flex-row-reverse' id='navbarNavDropdown'>
            <ul class='navbar-nav'>
                <li class='nav-item active'>
                    <a class='nav-link white-text-color' href='./editProfile.php'>My profile<span class='sr-only'>(current)</span></a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link white-text-color' href='./mytrainers.php'>My trainers</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link white-text-color' href='./search.php'>Browse</a>
                </li>

                <li class='nav-item'>

              <div class='dropdown pt-1'>
              <button id='logout' class='dropdown-toggle red-button-color white-text-color' type='text' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
              ".$name."
              </button>
              <div class='dropdown-menu dropdown-menu-right' aria-labelledby='dropdownMenuButton'>
                <a class='dropdown-item' href='./logout.php'>Log out</a>

              </div>
              </div>

            </li>

            </ul>
        </div>
    </nav>


  </body>
  </html>";

 ?>
