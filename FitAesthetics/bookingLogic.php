
<?php

    session_start();

    if(isset($_SESSION['uID'])){

    header('Location: bookingInfo.php');
    }

    else {
    echo '<script language="javascript">';
    echo 'alert("Please sign in to follow the booking process")';
    echo '</script>';
    header( "refresh:0.5;url=search.php" );
    exit();

    }


 ?>
