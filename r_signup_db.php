<!-- restaurant signup database-->

<?php include "server_connect.php" ?> <!-- database connect -->

<?php 



if (isset($_POST['submit'])) {
	
//insert Data
$r_name = $_POST['r_name'];

$mobile_no = $_POST['mobile_no'];
$password = $_POST['password'];
$password_2 = $_POST['password_2'];
$email = $_POST['email'];
$r_address = $_POST['r_address'];
$insert = "";
//email check
if($password == $password_2){
$sql_e = "SELECT * FROM signup WHERE email='$email'";
$res_e = mysqli_query($db, $sql_e);
if(mysqli_num_rows($res_e) > 0){
  	  echo "Sorry... email already taken"; 	
  	}else{
  			$password = md5($password);
           $insert = "INSERT INTO r_signup (r_name, mobile_num, email, r_password, r_address) VALUES ('$r_name','$mobile_no','$email', '$password', '$r_address')";
           $results = mysqli_query($db, $insert);
           var_dump($insert);
           if ($results) {
             echo 'Saved!';
           }else{
            echo mysqli_error($db);
            echo "Not saved!";
           }
           
           exit();
       }
}else{
	echo "Error: your password didn't match";
}





if (mysqli_multi_query($db, $insert)) {

	echo "record created";
	
}else{

	echo "error: ". $insert. mysqli_error($db);
}


}

mysqli_close($db);












 ?>