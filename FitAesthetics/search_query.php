<?php

include_once 'connect_mysql.php';

/* Search criteria for the search page */

if(isset($_POST['search-button'])){


  $search = mysqli_real_escape_string($dbcon,$_POST['search']);
  $key = "SELECT * FROM trainer WHERE location LIKE '$search' OR fName LIKE '$search' OR lName LIKE '$search'";
  $result1 = mysqli_query($dbcon,$key);
  $queryResult = mysqli_num_rows($result1);



  if($queryResult>0){

    echo "<div class='container'>
      <div class='row container'>
        <h5><p>We have found</p></h5>
        <h5><p> &nbsp;".$queryResult."</p></h5>
        <h5><p> &nbsp;results</p></h5>
      </div>
    </div>";

    while($row= mysqli_fetch_assoc($result1)){



      echo "<div class='col-md-6 pt-3'>
        <div class='card flex-md-row mb-4 box-shadow h-md-250'>
                <img class='card-img-right flex-auto d-none d-md-block h-100' src='images/card-profile.jpg' alt='Card image cap' width='160' />
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
                    </div>

                    <div class='row mb-auto'>
                    <p>".$row['fee']."</p>
                    <p> &nbsp;LKR per month</p>
                    </div>
                </div>

                <div class='w-100'>

                    <div class='row'>
                        <div class='col w-50'>
                        <a href='trainerBio.php' id='text-decoration-none'>View Profile</a>
                        </div>

                        <div class='col d-flex justify-content-end'>
                        *****
                        </div>

                    </div>
                </div>

                </div>

            </div>

        </div>";


  }}

  else{
    echo '<script language="javascript">';
    echo 'alert("We do not have results , please try again ")';
    echo '</script>';



  }



}


/* Search criteria for the Index page */

else if(isset($_POST['index-search'])){


  $search = mysqli_real_escape_string($dbcon,$_POST['search']);
  $key = "SELECT * FROM trainer WHERE location LIKE '$search' OR fName LIKE '$search' OR lName LIKE '$search'";
  $result1 = mysqli_query($dbcon,$key);
  $queryResult = mysqli_num_rows($result1);



  if($queryResult>0){

    echo "<div class='container'>
      <div class='row container'>
        <h5><p>We have found</p></h5>
        <h5><p> &nbsp;".$queryResult."</p></h5>
        <h5><p> &nbsp;results</p></h5>
      </div>
    </div>";

    while($row= mysqli_fetch_assoc($result1)){


      echo "<div class='col-md-6 pt-3'>
        <div class='card flex-md-row mb-4 box-shadow h-md-250'>
                <img class='card-img-right flex-auto d-none d-md-block h-100' src='images/card-profile.jpg' alt='Card image cap' width='160' />
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
                    </div>

                    <div class='row mb-auto'>
                    <p>".$row['fee']."</p>
                    <p> &nbsp;LKR per month</p>
                    </div>
                </div>

                <div class='w-100'>

                    <div class='row'>
                        <div class='col w-50'>
                        <a href='trainerBio.php' id='text-decoration-none'>View Profile</a>
                        </div>

                        <div class='col d-flex justify-content-end'>
                        *****
                        </div>

                    </div>
                </div>

                </div>

            </div>

        </div>";


  }}

  else{
    echo '<script language="javascript">';
    echo 'alert("We do not have results , please try again ")';
    echo '</script>';
    

  }



}


/* General search */

else{


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



            echo "<div class='col-md-6 pt-3'>
              <div class='card flex-md-row mb-4 box-shadow h-md-250'>
                      <img class='card-img-right flex-auto d-none d-md-block h-100' src='images/card-profile.jpg' alt='Card image cap' width='160' />
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
                          </div>

                          <div class='row mb-auto'>
                          <p>".$row['fee']."</p>
                          <p> &nbsp;LKR per month</p>
                          </div>
                      </div>

                      <div class='w-100'>

                          <div class='row'>
                              <div class='col w-50'>
                              <a href='trainerBio.php' id='text-decoration-none'>View Profile</a>
                              </div>

                              <div class='col d-flex justify-content-end'>
                              *****
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
