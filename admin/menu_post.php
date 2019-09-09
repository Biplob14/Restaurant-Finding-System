<?php include "admin_header.php"; ?>
<?php ob_start(); ?>

    <div id="wrapper">

<?php include "admin_navigation.php" ;?>
<?php include "admin_sidebar.php" ;?>
<?php include "server_connect.php" ;?>


<div class="row">
<div class="col-lg-12">
    <h1 class="page-header">
        Food Post Creation
        <small>Dashboard</small>
    </h1>
    <ol class="breadcrumb">
        <li>
            <i class="fa fa-dashboard"></i>  <a href="dashboard.php">Food Post</a>
        </li>
        <li class="active">
            <i class="fa fa-file"></i> Admin Panel
        </li>
    </ol>

    <!-- Include your text and Page Here -->

<!-- food menu table -->

<div class="container">




				<table class="table table-hover table-striped">

					<h2 align="center"><b><u>FOOD   MENU</u></b></h2> <br><br>


					<th>Food Name</th>
					<th>Price</th>
			
					
						<?php 
							// $query= "SELECT * FROM menu "

							// $select_posts = mysqli_query($db,$query);

								$r_name = $_SESSION['r_name'];
								$query = "SELECT * FROM menu WHERE r_name = '$r_name'";
								$posts=mysqli_query($db,$query);

								while ($row=mysqli_fetch_assoc($posts)) {
					            // $user_index = $row['id'];

					            $food_name = $row['food_name'];
					            $food_price = $row['food_price'];
					            $menu_id= $row['menu_id'];
							echo "<tr>";
					
							echo "<td>{$food_name}</td>";
							echo "<td>{$food_price}</td>";
							// <span class="fa fa-star checked"></span>
							// <span class="fa fa-star checked"></span>
							// <span class="fa fa-star checked"></span>
							// <span class="fa fa-star checked"></span>
							// <span class="fa fa-star"></span>

							echo"<td><a href='menu_post.php?delete={$menu_id}'>Delete</a></td>";
							echo "</tr>";
						}

						if (isset($_GET['delete'])) {
							$menu_id = $_GET['delete'];
							$query = "DELETE FROM menu WHERE menu_id ={$menu_id}";
							$delete_query = mysqli_query($db, $query);

							header("Location:menu_post.php");
						 }


						
						?>


				</table>



</div>



<!-- food menu post form -->
    	

<form action="" method="post" enctype="multipart/form-data">


	<div class="form-group">
		<label for="title">Food Name</label>
		<input type="text" class="form-control" name="food_name" placeholder="Name">
	</div>

		<div class="form-group">
		<label for="title">Food Price</label>
		<input type="text" class="form-control" name="food_price" placeholder="price">
	</div>




	<div class="form-group">
		<input class="btn btn-primary" type="submit" name="submit" value="submit">
	</div>
	


</form>



            </div>


<?php include "admin_footer.php" ;?>



<?php 
if (isset($_POST['submit'])) {

	$r_name = $_SESSION['r_name'];

	$food_name= $_POST['food_name'];
	$food_price= $_POST['food_price'];

	$insert= "INSERT INTO menu(r_name,food_name,food_price) VALUES ('$r_name','$food_name','$food_price')";
	$insert2= "INSERT INTO r_signup (r_name, food_name, food_price) VALUES ('$r_name', '$food_name', '$food_price')";

	$results = mysqli_query($db, $insert);
           		// var_dump($insert);

           		if ($results) {
             	// echo 'Saved!';
           			header("Location:menu_post.php");
           		}
           		else{
            		echo mysqli_error($db);
            		echo "Not saved!";
           		} 

     mysqli_query($db, $insert2);	
}


 ?>