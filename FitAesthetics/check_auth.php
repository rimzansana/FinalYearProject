<?php

if(isset($_POST['submitted'])){

    include('connect_mysql.php');

    if (isset($_POST['emailx']))
    {
    $emailx= $_POST["emailx"];
    $emailx = stripcslashes($emailx);
    }
    if (isset($_POST['passwordx']))
    {
    $passwordx= $_POST["passwordx"];
    $passwordx = stripcslashes($passwordx);
    }

}

	if(count($_POST)>0) {
		$result = mysqli_query($dbcon,"SELECT * FROM user WHERE email='$emailx' and password = '$passwordx'");
		$count  = mysqli_num_rows($result);
		if($count==0) {
			$message = "Invalid Username or Password!";
			echo $message;
		} else {
			session_start();
			$_SESSION['loggedIn'] = '1';
			$_SESSION['emailx'] = $emailx;
			header('Location: home.php');
		}
	}

?>
