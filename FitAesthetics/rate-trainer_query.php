<?php

    include('connect_mysql.php');

    $bookingID = mysqli_real_escape_string($dbcon, $_POST['bookingID']);
    $rating = mysqli_real_escape_string($dbcon, $_POST['userRating']);
    $review = mysqli_real_escape_string($dbcon, $_POST['userReview']);

    //Inserting the rating record into the database

    $insert = "INSERT INTO rating(rating, review, bookingID)
    VALUES('$rating','$review','$bookingID')";

    //Updating the isRated status

    $update = "UPDATE booking SET isRated='1' WHERE bookingID='$bookingID'";

    mysqli_query($dbcon,$insert);
    mysqli_query($dbcon,$update);
    header('Location: myTrainers.php');

 ?>
