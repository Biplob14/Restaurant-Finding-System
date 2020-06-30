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
$sql_e = "SELECT * FROM r_signup WHERE email='$email'";
$res_e = mysqli_query($db, $sql_e);
if(mysqli_num_rows($res_e) > 0){
  	  echo "Sorry... email already taken"; 	
  	}else{
  			$password = md5($password);
           $insert = "INSERT INTO r_signup (r_name, mobile_num, email, r_password, r_address, r_img) VALUES ('$r_name','$mobile_no','$email', '$password', '$r_address', '$fileDestination')";
           $results = mysqli_query($db, $insert);
           var_dump($insert);
           if ($results) {
             // echo 'Saved!';
            header("Location:signup_success.php");
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