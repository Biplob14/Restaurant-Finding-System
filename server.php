

<?php 
session_start();

$db= mysqli_connect("localhost","root","","rms");


if (!isset($db)) {
  echo "not connected". mysqli_error($db);
}else{

  echo "connected"."</br>";
}

if (isset($_POST['submit'])) {
	
//insert Data
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$mobile_no = $_POST['mobile_no'];
$password = $_POST['password'];
$password_2 = $_POST['password_2'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$insert = "";
//email check
if($password == $password_2){
$sql_e = "SELECT * FROM signup WHERE email='$email'";
$res_e = mysqli_query($db, $sql_e);
if(mysqli_num_rows($res_e) > 0){
  	  echo "Sorry... email already taken"; 	
  	}else{
  			$password = md5($password);
           $insert = "INSERT INTO signup (first_name, last_name, mobile_no,email, password, gender ) VALUES ('$first_name','$last_name','$mobile_no','$email', '$password','$gender')";
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

//get value from database
// $sql = "SELECT * FROM signup";

// $result = mysqli_query($db, $sql);

// if(mysqli_num_rows($result) > 0){
// 	while($row = mysqli_fetch_assoc($result)) {
// 		echo "First Name: " .$row["first_name"] ."</br>";
// 	}
// }

mysqli_close($db);





 ?>