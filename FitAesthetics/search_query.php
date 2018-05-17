<?php

include_once 'connect_mysql.php';

  /* Search criteria for the search page */

  if(isset($_POST['search-button'])){


    $search = mysqli_real_escape_string($dbcon,$_POST['search']);
    $key = "SELECT * FROM trainer WHERE location LIKE '$search' OR fName LIKE '$search' OR lName LIKE '$search'";
    $result1 = mysqli_query($dbcon,$key);
    $queryResult = mysqli_num_rows($result1);

    //result text condition

    if($queryResult==1){
        $resultText = 'result';
        }

        else{
          $resultText = 'results';
    }


    if($queryResult>0){

      echo "<div class='container'>
        <div class='row container'>
          <h5><p>We have found</p></h5>
          <h5><p> &nbsp;".$queryResult."</p></h5>

          <h5><p> &nbsp;$resultText</p></h5>
        </div>
      </div>";

      while($row= mysqli_fetch_assoc($result1)){

        // Printing the rating Icon

        if($row['rating']== 5){
              $rating = '';
              for ( $i = 0; $i <$row['rating']; $i++ ){
              $rating .= "<img src='images/Rating.png' alt='Smiley face' height='18' width='18'>";
            }

            }

                else if($row['rating']== 4) {
                  $rating = '';
                  for ( $i = 0; $i <$row['rating']; $i++ ){
                  $rating .= "<img src='images/Rating.png' alt='Smiley face' height='18' width='18'> ";
                }
              }

                else if($row['rating']== 3) {
                  $rating = '';
                  for ( $i = 0; $i <$row['rating']; $i++ ){
                  $rating .= "<img src='images/Rating.png' alt='Smiley face' height='18' width='18'>";
                }
            }

            else if($row['rating']== 2) {
              $rating = '';
              for ( $i = 0; $i <$row['rating']; $i++ ){
              $rating .= "<img src='images/Rating.png' alt='Smiley face' height='18' width='18'>";
                }
            }

          else if($row['rating']== 1) {
            $rating = '';
            for ( $i = 0; $i <$row['rating']; $i++ ){
            $rating .= "<img src='images/Rating.png' alt='Smiley face' height='18' width='18'>";
                }
        }



        echo "<div class='col-md-6 pt-3'>
          <div class='card flex-md-row mb-4 box-shadow h-md-250'>
                  <img class='card-img-right flex-auto d-none d-md-block h-100' src='".$row['image']."' alt='Card image cap' width='160' />
                  <div class='card-body d-flex flex-column align-items-start'>

                      <h3 class='mb-0 container'>
                      <div class='row'>
                      <a class='text-dark'>".$row['fName']."</a>
                      <a class='text-dark'>&nbsp;".$row['lName']."</a>
                      </div>


                      </h3>

                  <div class='text-muted'>".$row['location']."</div>

                  <div class='container'>
                      <div class='row my-3'>
                      <p> Experience : </p>
                      <p> &nbsp; ".$row['experience']."</p>
                      <p> &nbsp;Years</p>
                      </div>

                      <div class='row mb-auto'>
                      <p>".$row['fee']."</p>
                      <p> &nbsp;LKR per month</p>
                      </div>
                  </div>

                  <div class='w-100'>

                      <div class='row'>
                          <div class='col w-50'>
                          <a href='trainerBio.php?id=".$row['trainerID']."' id='text-decoration-none'>View Profile</a>
                          </div>

                          <div class='col d-flex justify-content-end'>
                          $rating
                          </div>

                      </div>
                  </div>

                  </div>

              </div>

          </div>";


    }}

    else{
      echo "<div class='alert alert-danger alert-dismissible fade show w-100' role='alert'>
      <strong>Holy guacamole we couldnt find a match :(</strong> &nbsp;&nbsp;Check out these featured trainers below.
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
      </button>
      </div>";



            $sql = "SELECT * FROM trainer";
            $result = mysqli_query($dbcon,$sql);
            $queryResults = mysqli_num_rows($result);

            //result text condition

            if($queryResults==1){
              $resultText = 'result';
              }

              else{
                $resultText = 'results';
            }

            if($queryResults>0){

              echo "<div class='container'>
                <div class='row container'>
                  <h5><p>We have found</p></h5>
                  <h5><p> &nbsp;".$queryResults."</p></h5>
                  <h5><p> &nbsp;$resultText</p></h5>
                </div>
              </div>";

                while($row= mysqli_fetch_assoc($result)){

                  // Printing the rating Icon

                  if($row['rating']== 5){
                        $rating = '';
                        for ( $i = 0; $i <$row['rating']; $i++ ){
                        $rating .= "<img src='images/Rating.png' alt='Smiley face' height='18' width='18'>";
                      }

                      }

                          else if($row['rating']== 4) {
                            $rating = '';
                            for ( $i = 0; $i <$row['rating']; $i++ ){
                            $rating .= "<img src='images/Rating.png' alt='Smiley face' height='18' width='18'> ";
                          }
                        }

                          else if($row['rating']== 3) {
                            $rating = '';
                            for ( $i = 0; $i <$row['rating']; $i++ ){
                            $rating .= "<img src='images/Rating.png' alt='Smiley face' height='18' width='18'>";
                          }
                      }

                      else if($row['rating']== 2) {
                        $rating = '';
                        for ( $i = 0; $i <$row['rating']; $i++ ){
                        $rating .= "<img src='images/Rating.png' alt='Smiley face' height='18' width='18'>";
                          }
                      }

                    else if($row['rating']== 1) {
                      $rating = '';
                      for ( $i = 0; $i <$row['rating']; $i++ ){
                      $rating .= "<img src='images/Rating.png' alt='Smiley face' height='18' width='18'>";
                          }
                  }


                  echo "<div class='col-md-6 pt-3'>
                    <div class='card flex-md-row mb-4 box-shadow h-md-250'>
                            <img class='card-img-right flex-auto d-none d-md-block h-100' src='".$row['image']."' alt='Card image cap' width='160' />
                            <div class='card-body d-flex flex-column align-items-start'>

                                <h3 class='mb-0 container'>
                                <div class='row'>
                                <a class='text-dark'>".$row['fName']."</a>
                                <a class='text-dark'>&nbsp;".$row['lName']."</a>
                                </div>


                                </h3>

                            <div class='text-muted'>".$row['location']."</div>

                            <div class='container'>
                                <div class='row my-3'>
                                <p> Experience : </p>
                                <p> &nbsp; ".$row['experience']."</p>
                                <p> &nbsp;Years</p>
                                </div>

                                <div class='row mb-auto'>
                                <p>".$row['fee']."</p>
                                <p> &nbsp;LKR per month</p>
                                </div>
                            </div>

                            <div class='w-100'>

                                <div class='row'>
                                    <div class='col w-50'>
                                    <a href='trainerBio.php?id=".$row['trainerID']."' id='text-decoration-none'>View Profile</a>
                                    </div>

                                    <div class='col d-flex justify-content-end'>
                                    $rating
                                    </div>

                                </div>
                            </div>

                            </div>

                        </div>

                    </div>";


                  }
            }



      }



    }


  /* Search criteria for the Index page */

  else if(isset($_POST['index-search'])){


    $search = mysqli_real_escape_string($dbcon,$_POST['search']);
    $key = "SELECT * FROM trainer WHERE location LIKE '$search' OR fName LIKE '$search' OR lName LIKE '$search'";
    $result1 = mysqli_query($dbcon,$key);
    $queryResult = mysqli_num_rows($result1);

    //result text condition

    if($queryResult==1){
      $resultText = 'result';
      }

      else{
        $resultText = 'results';
    }

    if($queryResult>0){

      echo "<div class='container'>
        <div class='row container'>
          <h5><p>We have found</p></h5>
          <h5><p> &nbsp;".$queryResult."</p></h5>
          <h5><p> &nbsp;$resultText</p></h5>
        </div>
      </div>";

      while($row= mysqli_fetch_assoc($result1)){

        // Printing the rating Icon

        if($row['rating']== 5){
              $rating = '';
              for ( $i = 0; $i <$row['rating']; $i++ ){
              $rating .= "<img src='images/Rating.png' alt='Smiley face' height='18' width='18'>";
            }

            }

                else if($row['rating']== 4) {
                  $rating = '';
                  for ( $i = 0; $i <$row['rating']; $i++ ){
                  $rating .= "<img src='images/Rating.png' alt='Smiley face' height='18' width='18'> ";
                }
              }

                else if($row['rating']== 3) {
                  $rating = '';
                  for ( $i = 0; $i <$row['rating']; $i++ ){
                  $rating .= "<img src='images/Rating.png' alt='Smiley face' height='18' width='18'>";
                }
            }

            else if($row['rating']== 2) {
              $rating = '';
              for ( $i = 0; $i <$row['rating']; $i++ ){
              $rating .= "<img src='images/Rating.png' alt='Smiley face' height='18' width='18'>";
                }
            }

          else if($row['rating']== 1) {
            $rating = '';
            for ( $i = 0; $i <$row['rating']; $i++ ){
            $rating .= "<img src='images/Rating.png' alt='Smiley face' height='18' width='18'>";
                }
        }



        echo "<div class='col-md-6 pt-3'>
          <div class='card flex-md-row mb-4 box-shadow h-md-250'>
                  <img class='card-img-right flex-auto d-none d-md-block h-100' src='".$row['image']."' alt='Card image cap' width='160' />
                  <div class='card-body d-flex flex-column align-items-start'>

                      <h3 class='mb-0 container'>
                      <div class='row'>
                      <a class='text-dark'>".$row['fName']."</a>
                      <a class='text-dark'>&nbsp;".$row['lName']."</a>
                      </div>


                      </h3>

                  <div class='text-muted'>".$row['location']."</div>

                  <div class='container'>
                      <div class='row my-3'>
                      <p> Experience : </p>
                      <p> &nbsp; ".$row['experience']."</p>
                      <p> &nbsp;Years</p>
                      </div>

                      <div class='row mb-auto'>
                      <p>".$row['fee']."</p>
                      <p> &nbsp;LKR per month</p>
                      </div>
                  </div>

                  <div class='w-100'>

                      <div class='row'>
                          <div class='col w-50'>
                          <a href='trainerBio.php?id=".$row['trainerID']."' id='text-decoration-none'>View Profile</a>
                          </div>

                          <div class='col d-flex justify-content-end'>
                          $rating
                          </div>

                      </div>
                  </div>

                  </div>

              </div>

          </div>";


    }}

    else{

      echo "<div class='alert alert-danger alert-dismissible fade show w-100' role='alert'>
      <strong>Holy guacamole we couldnt find a match :(</strong> &nbsp;&nbsp;Check out these featured trainers below.
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
      </button>
      </div>";

            $sql = "SELECT * FROM trainer";
            $result = mysqli_query($dbcon,$sql);
            $queryResults = mysqli_num_rows($result);

            if($queryResults>0){

              echo "<div class='container'>
                <div class='row container'>
                  <h5><p>We have found</p></h5>
                  <h5><p> &nbsp;".$queryResults."</p></h5>
                  <h5><p> &nbsp;results</p></h5>
                </div>
              </div>";

                while($row= mysqli_fetch_assoc($result)){

                  // Printing the rating Icon

                  if($row['rating']== 5){
                        $rating = '';
                        for ( $i = 0; $i <$row['rating']; $i++ ){
                        $rating .= "<img src='images/Rating.png' alt='Smiley face' height='18' width='18'>";
                      }

                      }

                          else if($row['rating']== 4) {
                            $rating = '';
                            for ( $i = 0; $i <$row['rating']; $i++ ){
                            $rating .= "<img src='images/Rating.png' alt='Smiley face' height='18' width='18'> ";
                          }
                        }

                          else if($row['rating']== 3) {
                            $rating = '';
                            for ( $i = 0; $i <$row['rating']; $i++ ){
                            $rating .= "<img src='images/Rating.png' alt='Smiley face' height='18' width='18'>";
                          }
                      }

                      else if($row['rating']== 2) {
                        $rating = '';
                        for ( $i = 0; $i <$row['rating']; $i++ ){
                        $rating .= "<img src='images/Rating.png' alt='Smiley face' height='18' width='18'>";
                          }
                      }

                    else if($row['rating']== 1) {
                      $rating = '';
                      for ( $i = 0; $i <$row['rating']; $i++ ){
                      $rating .= "<img src='images/Rating.png' alt='Smiley face' height='18' width='18'>";
                          }
                  }


                  echo "<div class='col-md-6 pt-3'>
                    <div class='card flex-md-row mb-4 box-shadow h-md-250'>
                            <img class='card-img-right flex-auto d-none d-md-block h-100' src='".$row['image']."' alt='Card image cap' width='160' />
                            <div class='card-body d-flex flex-column align-items-start'>

                                <h3 class='mb-0 container'>
                                <div class='row'>
                                <a class='text-dark'>".$row['fName']."</a>
                                <a class='text-dark'>&nbsp;".$row['lName']."</a>
                                </div>


                                </h3>

                            <div class='text-muted'>".$row['location']."</div>

                            <div class='container'>
                                <div class='row my-3'>
                                <p> Experience : </p>
                                <p> &nbsp; ".$row['experience']."</p>
                                <p> &nbsp;Years</p>
                                </div>

                                <div class='row mb-auto'>
                                <p>".$row['fee']."</p>
                                <p> &nbsp;LKR per month</p>
                                </div>
                            </div>

                            <div class='w-100'>

                                <div class='row'>
                                    <div class='col w-50'>
                                    <a href='trainerBio.php?id=".$row['trainerID']."' id='text-decoration-none'>View Profile</a>
                                    </div>

                                    <div class='col d-flex justify-content-end'>
                                    $rating
                                    </div>

                                </div>
                            </div>

                            </div>

                        </div>

                    </div>";


                  }
            }



      }



    }


  /* Filter for cities */
  else if(isset($_POST['filter1-button'])){

          if (isset($_POST['Kolpity']))
          {
          $city= $_POST["Kolpity"];
          $city = stripcslashes($city);
          }

          if (isset($_POST['Nugegoda']))
          {
          $city= $_POST["Nugegoda"];
          $city = stripcslashes($city);

          }

          if (isset($_POST['Bambalapitiya']))
          {
          $city= $_POST["Bambalapitiya"];
          $city = stripcslashes($city);

          }

          if (isset($_POST['Borella']))
          {
          $city= $_POST["Borella"];
          $city = stripcslashes($city);

          }

          if (isset($_POST['Pannipitiye']))
          {
          $city= $_POST["Pannipitiye"];
          $city = stripcslashes($city);
          }

          $key = "SELECT * FROM trainer WHERE location='$city'";
          $result1 = mysqli_query($dbcon,$key) or die(" error getting data".mysqli_error($dbcon));
          $queryResult = mysqli_num_rows($result1);

          if($queryResult==1){
              $resultText = 'result';
              }

              else{
                $resultText = 'results';
          }


            echo "<div class='container'>
              <div class='row container'>
                <h5><p>We have found</p></h5>
                <h5><p> &nbsp;".$queryResult."</p></h5>

                <h5><p> &nbsp;$resultText</p></h5>
              </div>
            </div>";

            while($row= mysqli_fetch_assoc($result1)){

              // Printing the rating Icon

              if($row['rating']== 5){
                    $rating = '';
                    for ( $i = 0; $i <$row['rating']; $i++ ){
                    $rating .= "<img src='images/Rating.png' alt='Smiley face' height='18' width='18'>";
                  }

                  }

                      else if($row['rating']== 4) {
                        $rating = '';
                        for ( $i = 0; $i <$row['rating']; $i++ ){
                        $rating .= "<img src='images/Rating.png' alt='Smiley face' height='18' width='18'> ";
                      }
                    }

                      else if($row['rating']== 3) {
                        $rating = '';
                        for ( $i = 0; $i <$row['rating']; $i++ ){
                        $rating .= "<img src='images/Rating.png' alt='Smiley face' height='18' width='18'>";
                      }
                  }

                  else if($row['rating']== 2) {
                    $rating = '';
                    for ( $i = 0; $i <$row['rating']; $i++ ){
                    $rating .= "<img src='images/Rating.png' alt='Smiley face' height='18' width='18'>";
                      }
                  }

                else if($row['rating']== 1) {
                  $rating = '';
                  for ( $i = 0; $i <$row['rating']; $i++ ){
                  $rating .= "<img src='images/Rating.png' alt='Smiley face' height='18' width='18'>";
                      }
              }



              echo "<div class='col-md-6 pt-3'>
                <div class='card flex-md-row mb-4 box-shadow h-md-250'>
                        <img class='card-img-right flex-auto d-none d-md-block h-100' src='".$row['image']."' alt='Card image cap' width='160' />
                        <div class='card-body d-flex flex-column align-items-start'>

                            <h3 class='mb-0 container'>
                            <div class='row'>
                            <a class='text-dark'>".$row['fName']."</a>
                            <a class='text-dark'>&nbsp;".$row['lName']."</a>
                            </div>


                            </h3>

                        <div class='text-muted'>".$row['location']."</div>

                        <div class='container'>
                            <div class='row my-3'>
                            <p> Experience : </p>
                            <p> &nbsp; ".$row['experience']."</p>
                            <p> &nbsp;Years</p>
                            </div>

                            <div class='row mb-auto'>
                            <p>".$row['fee']."</p>
                            <p> &nbsp;LKR per month</p>
                            </div>
                        </div>

                        <div class='w-100'>

                            <div class='row'>
                                <div class='col w-50'>
                                <a href='trainerBio.php?id=".$row['trainerID']."' id='text-decoration-none'>View Profile</a>
                                </div>

                                <div class='col d-flex justify-content-end'>
                                $rating
                                </div>

                            </div>
                        </div>

                        </div>

                    </div>

                </div>";


          }

          }

  /* Filter for Gender */
  else if(isset($_POST['filter3-button'])){

          if (isset($_POST['Male']))
          {
          $gender= $_POST["Male"];
          $gender = stripcslashes($gender);
          }

          if (isset($_POST['Female']))
          {
          $gender= $_POST["Female"];
          $gender = stripcslashes($gender);

          }

          $key = "SELECT * FROM trainer WHERE gender='$gender'";
          $result1 = mysqli_query($dbcon,$key) or die(" error getting data".mysqli_error($dbcon));
          $queryResult = mysqli_num_rows($result1);

          if($queryResult==1){
              $resultText = 'result';
              }

              else{
                $resultText = 'results';
          }


            echo "<div class='container'>
              <div class='row container'>
                <h5><p>We have found</p></h5>
                <h5><p> &nbsp;".$queryResult."</p></h5>

                <h5><p> &nbsp;$resultText</p></h5>
              </div>
            </div>";

            while($row= mysqli_fetch_assoc($result1)){

              // Printing the rating Icon

              if($row['rating']== 5){
                    $rating = '';
                    for ( $i = 0; $i <$row['rating']; $i++ ){
                    $rating .= "<img src='images/Rating.png' alt='Smiley face' height='18' width='18'>";
                  }

                  }

                      else if($row['rating']== 4) {
                        $rating = '';
                        for ( $i = 0; $i <$row['rating']; $i++ ){
                        $rating .= "<img src='images/Rating.png' alt='Smiley face' height='18' width='18'> ";
                      }
                    }

                      else if($row['rating']== 3) {
                        $rating = '';
                        for ( $i = 0; $i <$row['rating']; $i++ ){
                        $rating .= "<img src='images/Rating.png' alt='Smiley face' height='18' width='18'>";
                      }
                  }

                  else if($row['rating']== 2) {
                    $rating = '';
                    for ( $i = 0; $i <$row['rating']; $i++ ){
                    $rating .= "<img src='images/Rating.png' alt='Smiley face' height='18' width='18'>";
                      }
                  }

                else if($row['rating']== 1) {
                  $rating = '';
                  for ( $i = 0; $i <$row['rating']; $i++ ){
                  $rating .= "<img src='images/Rating.png' alt='Smiley face' height='18' width='18'>";
                      }
              }



              echo "<div class='col-md-6 pt-3'>
                <div class='card flex-md-row mb-4 box-shadow h-md-250'>
                        <img class='card-img-right flex-auto d-none d-md-block h-100' src='".$row['image']."' alt='Card image cap' width='160' />
                        <div class='card-body d-flex flex-column align-items-start'>

                            <h3 class='mb-0 container'>
                            <div class='row'>
                            <a class='text-dark'>".$row['fName']."</a>
                            <a class='text-dark'>&nbsp;".$row['lName']."</a>
                            </div>


                            </h3>

                        <div class='text-muted'>".$row['location']."</div>

                        <div class='container'>
                            <div class='row my-3'>
                            <p> Experience : </p>
                            <p> &nbsp; ".$row['experience']."</p>
                            <p> &nbsp;Years</p>
                            </div>

                            <div class='row mb-auto'>
                            <p>".$row['fee']."</p>
                            <p> &nbsp;LKR per month</p>
                            </div>
                        </div>

                        <div class='w-100'>

                            <div class='row'>
                                <div class='col w-50'>
                                <a href='trainerBio.php?id=".$row['trainerID']."' id='text-decoration-none'>View Profile</a>
                                </div>

                                <div class='col d-flex justify-content-end'>
                                $rating
                                </div>

                            </div>
                        </div>

                        </div>

                    </div>

                </div>";


          }

          }


  /* Filter for Sort by*/
  else if(isset($_POST['filter4-button'])){

          if (isset($_POST['hPrice']))
          {
          $highestPrice= $_POST["hPrice"];
          $highestPrice = stripcslashes($highestPrice);
          $key = "SELECT * FROM trainer ORDER BY fee DESC";
          }

          if (isset($_POST['lPrice']))
          {
          $lowestPrice= $_POST["lPrice"];
          $lowestPrice = stripcslashes($lowestPrice);
          $key = "SELECT * FROM trainer ORDER BY fee";
          }

          if (isset($_POST['hRating']))
          {
          $highestRating= $_POST["hRating"];
          $highestRating = stripcslashes($highestRating);
          $key = "SELECT * FROM trainer ORDER BY rating DESC";
          }

          if (isset($_POST['lRating']))
          {
          $lowestRating= $_POST["lRating"];
          $lowestRating = stripcslashes($lowestRating);
          $key = "SELECT * FROM trainer ORDER BY rating";
          }


          $result1 = mysqli_query($dbcon,$key) or die(" error getting data".mysqli_error($dbcon));
          $queryResult = mysqli_num_rows($result1);

          if($queryResult==1){
              $resultText = 'result';
              }

              else{
                $resultText = 'results';
          }


            echo "<div class='container'>
              <div class='row container'>
                <h5><p>We have found</p></h5>
                <h5><p> &nbsp;".$queryResult."</p></h5>

                <h5><p> &nbsp;$resultText</p></h5>
              </div>
            </div>";

            while($row= mysqli_fetch_assoc($result1)){

              // Printing the rating Icon

              if($row['rating']== 5){
                    $rating = '';
                    for ( $i = 0; $i <$row['rating']; $i++ ){
                    $rating .= "<img src='images/Rating.png' alt='Smiley face' height='18' width='18'>";
                  }

                  }

                      else if($row['rating']== 4) {
                        $rating = '';
                        for ( $i = 0; $i <$row['rating']; $i++ ){
                        $rating .= "<img src='images/Rating.png' alt='Smiley face' height='18' width='18'> ";
                      }
                    }

                      else if($row['rating']== 3) {
                        $rating = '';
                        for ( $i = 0; $i <$row['rating']; $i++ ){
                        $rating .= "<img src='images/Rating.png' alt='Smiley face' height='18' width='18'>";
                      }
                  }

                  else if($row['rating']== 2) {
                    $rating = '';
                    for ( $i = 0; $i <$row['rating']; $i++ ){
                    $rating .= "<img src='images/Rating.png' alt='Smiley face' height='18' width='18'>";
                      }
                  }

                else if($row['rating']== 1) {
                  $rating = '';
                  for ( $i = 0; $i <$row['rating']; $i++ ){
                  $rating .= "<img src='images/Rating.png' alt='Smiley face' height='18' width='18'>";
                      }
              }



              echo "<div class='col-md-6 pt-3'>
                <div class='card flex-md-row mb-4 box-shadow h-md-250'>
                        <img class='card-img-right flex-auto d-none d-md-block h-100' src='".$row['image']."' alt='Card image cap' width='160' />
                        <div class='card-body d-flex flex-column align-items-start'>

                            <h3 class='mb-0 container'>
                            <div class='row'>
                            <a class='text-dark'>".$row['fName']."</a>
                            <a class='text-dark'>&nbsp;".$row['lName']."</a>
                            </div>


                            </h3>

                        <div class='text-muted'>".$row['location']."</div>

                        <div class='container'>
                            <div class='row my-3'>
                            <p> Experience : </p>
                            <p> &nbsp; ".$row['experience']."</p>
                            <p> &nbsp;Years</p>
                            </div>

                            <div class='row mb-auto'>
                            <p>".$row['fee']."</p>
                            <p> &nbsp;LKR per month</p>
                            </div>
                        </div>

                        <div class='w-100'>

                            <div class='row'>
                                <div class='col w-50'>
                                <a href='trainerBio.php?id=".$row['trainerID']."' id='text-decoration-none'>View Profile</a>
                                </div>

                                <div class='col d-flex justify-content-end'>
                                $rating
                                </div>

                            </div>
                        </div>

                        </div>

                    </div>

                </div>";


          }

          }
  /* General search */


  else{


        $sql = "SELECT * FROM trainer";
        $result = mysqli_query($dbcon,$sql);
        $queryResults = mysqli_num_rows($result);

        if($queryResults==1){
          $resultText = 'result';
        }

        else{
          $resultText = 'results';
        }



        if($queryResults>0){

          echo "<div class='container'>
            <div class='row container'>
              <h5><p>We have found</p></h5>
              <h5><p> &nbsp;".$queryResults."</p></h5>
              <h5><p> &nbsp;$resultText</p></h5>
            </div>
          </div>";

            while($row= mysqli_fetch_assoc($result)){

        // Printing the rating Icon

        if($row['rating']== 5){
              $rating = '';
              for ( $i = 0; $i <$row['rating']; $i++ ){
              $rating .= "<img src='images/Rating.png' alt='Smiley face' height='18' width='18'>";
            }

            }

                else if($row['rating']== 4) {
                  $rating = '';
                  for ( $i = 0; $i <$row['rating']; $i++ ){
                  $rating .= "<img src='images/Rating.png' alt='Smiley face' height='18' width='18'> ";
                }
              }

                else if($row['rating']== 3) {
                  $rating = '';
                  for ( $i = 0; $i <$row['rating']; $i++ ){
                  $rating .= "<img src='images/Rating.png' alt='Smiley face' height='18' width='18'>";
                }
            }

            else if($row['rating']== 2) {
              $rating = '';
              for ( $i = 0; $i <$row['rating']; $i++ ){
              $rating .= "<img src='images/Rating.png' alt='Smiley face' height='18' width='18'>";
                }
            }

          else if($row['rating']== 1) {
            $rating = '';
            for ( $i = 0; $i <$row['rating']; $i++ ){
            $rating .= "<img src='images/Rating.png' alt='Smiley face' height='18' width='18'>";
                }
        }




              echo "<div class='col-md-6 pt-3'>
                <div class='card flex-md-row mb-4 box-shadow h-md-250'>
                        <img class='card-img-right flex-auto d-none d-md-block h-100' src='".$row['image']."' alt='Card image cap' width='160' />
                        <div class='card-body d-flex flex-column align-items-start'>

                            <h3 class='mb-0 container'>
                            <div class='row'>
                            <a class='text-dark'>".$row['fName']."</a>
                            <a class='text-dark'>&nbsp;".$row['lName']."</a>
                            </div>


                            </h3>

                        <div class='text-muted'>".$row['location']."</div>

                        <div class='container'>
                            <div class='row my-3'>
                            <p> Experience : </p>
                            <p> &nbsp; ".$row['experience']."</p>
                            <p> &nbsp;Years</p>
                            </div>

                            <div class='row mb-auto'>
                            <p>".$row['fee']."</p>
                            <p> &nbsp;LKR per month</p>
                            </div>
                        </div>

                        <div class='w-100'>

                            <div class='row'>
                                <div class='col w-50'>
                                <a href='trainerBio.php?id=".$row['trainerID']."' id='text-decoration-none'>View Profile</a>
                                </div>

                                <div class='col d-flex justify-content-end'>
                                $rating
                                </div>

                            </div>
                        </div>

                        </div>

                    </div>

                </div>";


              }
        }



  }








 ?>
