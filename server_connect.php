
<?php 


$db= mysqli_connect("localhost","root","","rms");


if (!isset($db)) {
	echo "not connected". mysqli_error($db);
}else{

	// echo "connected"."</br>";
}

 ?>