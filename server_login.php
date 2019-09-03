<!-- server login db -->
<?php 
// 	session_start();
// 	ob_start();
// 	//get values pases from form in server.php
// 	$email = $_POST["email"];
// 	$password = md5($_POST["password"]);

// 	//connect to the server and select database
// 	$db=mysqli_connect("localhost", "root", "", "rms");


// 	$sql = "SELECT * FROM signup WHERE email = '$email' AND password = '$password'";
// 	$result = mysqli_query($db, $sql);
// 	if (!$result) {
// 		echo mysqli_error($db);;
// 	}else{
// 		$row=mysqli_fetch_assoc($result);
// 		echo print_r($row);

// 	}

// 	// $result = mysqli_query($success, "SELECT * FROM signup WHERE email = '$email' AND password = '$password'") or die("Failed to query database " . mysql_error());

	
// 	if ($row['email'] == $email && $row['password'] == $password){
// 		echo "Login success!!! Welcome ".$row['email'];
// 	}else {
// 		echo "Faled to login!";
// 	}






// mysqli_close($db);

	session_start();
	ob_start();
	//get values pases from form in server.php
	$email = $_POST["email"];
	$password = md5($_POST["password"]);

	$user_type="";



if (isset($_POST['log_type'])) {

		$user_type= $_POST["log_type"];
	
}


	$admin_email="admin@admin.com";
	$admin_pass="admin";

		//connect to the server and select database
	$db=mysqli_connect("localhost", "root", "", "rms");


	if ($user_type=='user') {




	$sql = "SELECT * FROM signup WHERE email = '$email' AND password = '$password' " ;
	$post_sql = "SELECT * FROM food_post";
	$result = mysqli_query($db, $sql);



	
	if (!$result) {
		echo mysqli_error($db);;
	}else{
		$row=mysqli_fetch_assoc($result);
		echo print_r($row);

	}

	// $result = mysqli_query($success, "SELECT * FROM signup WHERE email = '$email' AND password = '$password'") or die("Failed to query database " . mysql_error());

	
	if ($row['email'] == $email && $row['password'] == $password){

		$_SESSION['email']=$row['email'];
		$_SESSION['name']=$row['first_name']." ".$row['last_name'];
		$_SESSION['image']=$row['user_img'];

		



		// header("Location: test.php");

		header("Location: index.php");


		// echo "Login success!!! Welcome ".$row['email'];
	}else {
		echo " Failed to login!";
	}

}

else if ($email==$admin_email && $_POST["password"]==$admin_pass) {




	$_SESSION['admin']= $admin_email;
	// $_SESSION['name']=$row['first_name'];
	// $_SESSION['image']=$row['user_img'];

	header("Location: admin/admin_index.php");


	
}

else{
				// restaurant

				$sql = "SELECT * FROM r_signup WHERE email = '$email' AND r_password = '$password' " ;
				$result = mysqli_query($db, $sql);



				
				if (!$result) {
					echo mysqli_error($db);
				}else{
					$row=mysqli_fetch_assoc($result);
					echo print_r($row);

				}

				// $result = mysqli_query($success, "SELECT * FROM signup WHERE email = '$email' AND password = '$password'") or die("Failed to query database " . mysql_error());

				
				if ($row['email'] == $email && $row['r_password'] == $password){

					$_SESSION['r_email']=$row['email'];

					$_SESSION['r_name']=$row['r_name'];

					$_SESSION['r_image']=$row['r_img'];

					



					// header("Location: test.php");

					header("Location: index.php");


					// echo "Login success!!! Welcome ".$row['email'];
				}else {
					echo " Failed to login!";
				}







}













 ?>