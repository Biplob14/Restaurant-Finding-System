<?php 
	session_start();
	ob_start();
	//get values pases from form in server.php
	$email = $_POST["email"];
	$password = md5($_POST["password"]);

	//connect to the server and select database
	$db=mysqli_connect("localhost", "root", "", "rms");


	$sql = "SELECT * FROM signup WHERE email = '$email' AND password = '$password'";
	$result = mysqli_query($db, $sql);
	if (!$result) {
		echo mysqli_error($db);;
	}else{
		$row=mysqli_fetch_assoc($result);
		echo print_r($row);

	}

	// $result = mysqli_query($success, "SELECT * FROM signup WHERE email = '$email' AND password = '$password'") or die("Failed to query database " . mysql_error());

	
	if ($row['email'] == $email && $row['password'] == $password){
		echo "Login success!!! Welcome ".$row['email'];
	}else {
		echo "Faled to login!";
	}






mysqli_close($db);
 ?>