<!-- user signup -->
<?php include "server_connect.php" ?>

<?php 


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


//image upload
          $fileName = $_FILES['file'] ['name'];
          $fileTmpName = $_FILES['file'] ['tmp_name'];
          $fileSize = $_FILES['file'] ['size'];
          $fileError = $_FILES['file'] ['error'];
          $fileType = $_FILES['file'] ['type'];

          $fileExt = explode('.', $fileName);
          $fileActualExt = strtolower(end($fileExt));

          $allowed = array('jpg', 'jpeg', 'png');

          if (in_array($fileActualExt, $allowed)) {
            if ($fileError === 0) {
              if ($fileSize < 5000000) {
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = 'resource/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                //header("Location: show_image.php?uploadsuccess");
                echo "uploaded";
              }
              else{
                echo "Your file is too big!";
              }
            }else {
              echo "There was an error uploading your file!";
            }
          } else {
            echo "File extension error. Try to upload jeg, jpeg or png extension file";
          }





//email check
if($password == $password_2){
$sql_e = "SELECT * FROM signup WHERE email='$email'";
$res_e = mysqli_query($db, $sql_e);
if(mysqli_num_rows($res_e) > 0){
  	  echo "Sorry... email already taken"; 	
  	}else{
  			$password = md5($password);
           $insert = "INSERT INTO signup (first_name, last_name, mobile_no,email, password, gender, user_img) VALUES ('$first_name','$last_name','$mobile_no','$email', '$password','$gender', '$fileDestination')";
           $results = mysqli_query($db, $insert);
           var_dump($insert);
           if ($results) {
             // echo 'Saved!';
            header("Location:signup_success.php?signup-successful");
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