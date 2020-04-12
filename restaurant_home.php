<?php include "header.php";?>
<?php include "server_connect.php"; ?>
<style>
	<?php include "style/restaurant_home.css" ?>
</style>
<?php 
	if (isset($_SESSION['r_name'])) {
	
	$r_name = $_SESSION['r_name'];
	$query = "SELECT * FROM food_post WHERE r_name = '$r_name'";
	$posts=mysqli_query($db,$query);

	while ($row=mysqli_fetch_assoc($posts)) {
            // $user_index = $row['id'];
			$r_name = $row['r_name'];
            $food_name = $row['food_name'];
            $food_img = $row['food_img'];
        }

}
			$r_name = $_GET['name'];

 ?>
<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
		<div class="container">
			<div class="text-center">
				<h2 class="text-primary" title="Restaurant name"><?php echo $r_name;?></h2>
			</div>
		
		<div class="row form-group"><?php include "r_slider.php" ?> </div>
		<div class="transparent-box">
			<p class="slider-text">Find  your  test  from  our  best</p>
		</div>
		<div class="row form-group">
			<div class="col-lg-9"> <!-- food items -->

				<div class="row form-group">
					<div class="col-lg-4 itm_img">
						<img src="resource/item1.jpg" height="200px" width="100%">

						<div class="middle">
    					<div class="text">Burger</div>
  						</div>

						<p>Burger</p>
						
					</div>

					<div class="col-lg-4 itm_img">
						<img src="resource/item2.jpg" height="200px" width="100%">

						<div class="middle">
    					<div class="text">Pasta</div>
  						</div>

						<p>Pasta</p>

					</div>

					<div class="col-lg-4 itm_img">
						<img src="resource/item3.jpg"height="200px" width="100%">

						<div class="middle">
    					<div class="text">Mojito</div>
  						</div>

						<p>Mojito</p>

					</div>
				</div>

				<div class="row form-group">
					<div class="col-lg-4 itm_img">
						<img src="resource/item4.jpg" height="200px" width="100%">

						<div class="middle">
    					<div class="text">Pizza</div>
  						</div>

						<p>Pizza</p>

					</div>

					<div class="col-lg-4 itm_img">
						<img src="resource/item5.jpg" height="200px" width="100%">

						<div class="middle">
    					<div class="text">Chicken</div>
  						</div>

						<p>Chicken</p>

					</div>

					<div class="col-lg-4 itm_img">
						<img src="resource/item6.jpg" height="200px" width="100%">

						<div class="middle">
    					<div class="text">Spheghatti</div>
  						</div>

						<p>Speghatti</p>

					</div>
				</div>

				

			</div>

			<div class="col-lg-3 align-self-center" >
				
				<img src="resource/r_logo.png" class="rounded mx-auto d-block" height="100px" width="100px" align="align-self-center">
				<?php echo"<label class='font-primary'><h2><a href='menu.php?name=$r_name'>Food Menu</a></h2></label>"?>
				<img src="resource/menu.jpg" height="366px" width="100%">
			</div>
			
		</div>
		</div>

		
		
	</div>
</body>
</html>

<style type="text/css">
	.col-lg-9 p{

		text-align: center;
		background-color: #ffd51e;
		text-decoration: bold;
		text-transform: uppercase;
		letter-spacing: 3px;
		font-weight: bold;

	}
	.itm_img {
		opacity: 1;
		display: block;
		transition: .5s ease;
		backface-visibility: hidden;
	}

	.middle {
		transition: .5s ease;
		opacity: 0;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		-ms-transform: translate(-50%, -50%);
		text-align: center;
	}
	.text {
		border-radius: 25px;
  		background-color: #38006F;
  		color: white;
  		font-size: 16px;
  		padding: 16px 32px;


	}
	.text-primary{
		border-radius: 25px;
  		background-color: #38006F;
  		color: white;
  		font-size: 40px;
	}

	.itm_img:hover {
  		opacity: 0.7;
	}

	.middle:hover {
  		opacity: 1;
	}
</style>

<div class="container">
	
<!-- 	<marquee behavior="scroll" direction="left" scrollamount="10">Faster...</marquee> -->


	<!-- Offer scrolling from db -->
	<?php include "server_connect.php" ?>
	<?php 


 							$query = "SELECT * FROM food_post" ;
        					$select_posts=mysqli_query($db,$query);


                      
                        	while ($row=mysqli_fetch_assoc($select_posts)) {
						        $food_offer = $row['food_offer'];


						        echo "<marquee behavior='scroll' direction='right' scrollamount='10'>{$food_offer}</marquee>";


						        }
						   



	?>




</div>


<?php include "footer.php";?>