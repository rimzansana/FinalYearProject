<?php

    include('connect_mysql.php');

    $bookingID = mysqli_real_escape_string($dbcon, $_POST['bookingID']);
    $rating = mysqli_real_escape_string($dbcon, $_POST['userRating']);
    $review = mysqli_real_escape_string($dbcon, $_POST['userReview']);

    //Inserting the rating record into the database

    $insert = "INSERT INTO rating(rating, review, bookingID)
    VALUES('$rating','$review','$bookingID')";
    mysqli_query($dbcon,$insert);
    header('Location: myTrainers.php');

 ?>
