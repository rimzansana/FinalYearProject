<?php


  include('connect_mysql.php');

  $trainerID = $_SESSION['trainerID'];
  $totalFee =  $_SESSION['totalFee'];
  $months = $_SESSION['months'];
  $sql = "SELECT * FROM trainer WHERE trainerID='$trainerID'";
  $result = mysqli_query($dbcon,$sql);





while($row= mysqli_fetch_assoc($result)){
  $firstName = $row['fName'];
  $lastName = $row['lName'];
  $location = $row['location'];
  $trainerFee = $row['fee'];
  $image = $row['image'];

  if($row['rating']== 5){
        $rating = '';

        for ( $i = 0; $i <$row['rating']; $i++ ){
        $rating .= "<img src='images/Rating.png' alt='Smiley face' height='16' width='16'>";
      }

      }

          else if($row['rating']== 4) {
            $rating = '';
            for ( $i = 0; $i <$row['rating']; $i++ ){
            $rating .= "<img src='images/Rating.png' alt='Smiley face' height='16' width='16'> ";
          }
        }

          else if($row['rating']== 3) {
            $rating = '';
            for ( $i = 0; $i <$row['rating']; $i++ ){
            $rating .= "<img src='images/Rating.png' alt='Smiley face' height='16' width='16'>";
          }
      }

      else if($row['rating']== 2) {
        $rating = '';
        for ( $i = 0; $i <$row['rating']; $i++ ){
        $rating .= "<img src='images/Rating.png' alt='Smiley face' height='16' width='16'>";
          }
      }

    else if($row['rating']== 1) {
      $rating = '';
      for ( $i = 0; $i <$row['rating']; $i++ ){
      $rating .= "<img src='images/Rating.png' alt='Smiley face' height='16' width='16'>";
          }
  }

echo "<div class='col d-flex justify-content-end'>

        <div class='trainer-bio-bio-booking-box'>

        <div class='container'>
        <div class='card-deck mb-3 text-center'>
        <div class='card mb-4 box-shadow'>


        <div class='card-body' id='info-box-height'>

            <div class='row'>

                <div class='col-7'>


                <h4 class='d-flex justify-content-start'>$firstName&nbsp;$lastName  </h4>
                  <p class='d-flex justify-content-start'>$location </p>
                  <p class='d-flex justify-content-start'>$rating</p>

                </div>

                <div class='col-1'>
                <img class='d-md-block h-100 box-shadow ml-2' src='$image' alt='Card image cap' id='booking-card-picture'/>
                </div>


            </div>

            <hr />

            <div class='row'>
                <div class='col'>
                <p class='d-flex justify-content-start'>Per month</p>
                <p class='d-flex justify-content-start'>Number of months</p>
                </div>

                <div class='col'>
                <div class='d-flex justify-content-end mr-3'>
                <div class='row'>

                <p>Rs.</p>
                <p>&nbsp;$trainerFee</p>
                </div>
                </div>
                <p class='d-flex justify-content-end'>$months</p>

                </div>

            </div>

            <hr />

            <div class='row'>
                  <div class='col'>
                  <p class='d-flex justify-content-start'><strong>Total Training fee</strong></p>
                  </div>

                  <div class='col'>
                  <div class='d-flex justify-content-end mr-3'>
                  <div class='row'>
                  <p><strong>Rs.</strong> </p>
                  <p><strong>&nbsp;$totalFee</strong></p>
                  </div>
                  </div>

                  </div>
            </div>

          </div>

          </div>
          </div>
          </div>
        </div>

</div>";
}
?>
