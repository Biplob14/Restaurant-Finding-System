
<?php include "admin_header.php" ?>


    <div id="wrapper">

        <!-- Navigation -->
<?php include "admin_navigation.php" ?>

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
<?php include "admin_sidebar.php" ?>


<!-- Page Heading -->
<div class="row">
<div class="col-lg-12">
    <h1 class="page-header">
        Restaurant Post Creation
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
    	

<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
            <label >Select Resturant</label>
              <select class="form-control" name="restaurant_name">
                <option value="dominos" name="">Dominos</option>
                <option value="pizzaburg" name="">Pizza Burg</option>
                <option value="hotdoggy" name="">Hotdoggy</option>
                <option value="cake bean" name="">Cake Bean</option>
                <option value="pasta state" name="">Pasta State</option>
                <option value="doi fuchka" name="">Doi Fuchka</option>
              </select>
            
          </div>

	<div class="form-group">
		<label for="title">Food Name</label>
		<input type="text" class="form-control" name="food_name">
	</div>

<!-- 	<div class="form-group">
		<label for="post_category">Food Category</label>
		<input type="text" class="form-control" name="post_cat_id">
	</div> -->

	<div class="form-group">
		<label for="title">Price</label>
		<input type="text" class="form-control" name="food_price">
	</div>

	<div class="form-group">
		<label for="title">Food Image</label>
		<input type="file" name="food_image">
	</div>


	<div class="form-group">
		<label for="post_content">Offers</label>
		<textarea class="form-control" name="food_offer" id="" cols="30" rows="2"></textarea>
	</div>

	<div class="form-group">
		<input class="btn btn-primary" type="submit" name="submit" value="submit">
	</div>
	


</form>



    </div>
    <!-- /#wrapper -->


<!-- <?php include "admin_footer.php" ?> -->


<!-- Database -->

<?php include "../server_connect.php" ?>

<?php 

if (isset($_POST['submit'])) {

			$food_name = $_POST['food_name'];
			$food_price = $_POST['food_price'];
			$food_image = $_POST['food_image'];
			$food_offer = $_POST['food_offer'];
			$restaurant_name = $_POST['restaurant_name'];


			$insert = "INSERT INTO food_post(restaurant_name, food_name, food_price, food_image, food_offer) VALUES ('$restaurant_name', '$food_name', '$food_price', '$food_image', '$food_offer')";




			$results = mysqli_query($db, $insert);
           		var_dump($insert);
           		if ($results) {
             	echo 'Saved!';
           		}
           		else{
            		echo mysqli_error($db);
            		echo "Not saved!";
           		}
}




 ?>

 <?php include "admin_footer.php" ?>