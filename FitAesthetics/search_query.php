<?php

    include_once 'connect_mysql.php';

    $sql = "SELECT * FROM user";
    $result = mysqli_query($dbcon,$sql);
    $queryResults = mysqli_num_rows($result);

    if($queryResults>0){

        while($row= mysqli_fetch_assoc($result)){

          echo "<div class='col-md-6 pt-3'>
            <div class='card flex-md-row mb-4 box-shadow h-md-250'>
                    <img class='card-img-right flex-auto d-none d-md-block h-100' src='images/card-profile.jpg' alt='Card image cap' width='160' />
                    <div class='card-body d-flex flex-column align-items-start'>

                        <h3 class='mb-0'>
                        <a class='text-dark'>".$row['fName']."</a>
                        </h3>

                    <div class='text-muted'>".$row['lName']."</div>

                    <div class='container'>
                        <div class='row my-3'>
                        <p> Experience : </p>
                        <p> &nbsp; ".$row['email']."</p>
                        </div>

                        <div class='row mb-auto'>
                        <p>15000</p>
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


 ?>
