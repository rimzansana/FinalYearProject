<?php

if(isset($_POST['submitted'])){

    include('connect_mysql.php');

    if (isset($_POST['email']))
    {
    $email= $_POST["email"];
    $email = stripcslashes($email);
    }
    if (isset($_POST['password']))
    {
    $password= $_POST["password"];
    $password = stripcslashes($password);
    }

}

	if(count($_POST)>0) {
		$result = mysqli_query($dbcon,"SELECT * FROM user WHERE email='$email' and password = '$password'");
		$count  = mysqli_num_rows($result);

		if($count==0) {
			$message = "<p>Incorrect username or password! Please try again :)</p>";
			echo $message;
      header( "refresh:2;url=index.php" );
      exit();

		} else {
			session_start();
			$_SESSION['loggedIn'] = '1';
			$_SESSION['email'] = $email;
			header('Location: home.php');
		}
	}

?>
