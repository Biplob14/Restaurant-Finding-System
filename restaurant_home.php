<?php include "header.php";?>

<!DOCTYPE html>
<html>
<head>
	<title>Mad Chef</title>
</head>
<body>
		<div class="container">
			<div class="text-center">
				<h2 class="text-primary">Mad Chef</h2>
			</div>
		
		<div class="row form-group"><?php include "r_slider.php" ?> </div>
		<div class="row form-group">
			<div class="col-lg-9"> <!-- food items -->

				<div class="row form-group">
					<div class="col-lg-4">
						<img src="resource/item1.jpg" height="200px" width="100%">
						<p>Burger</p>
						
					</div>

					<div class="col-lg-4">
						<img src="resource/item2.jpg" height="200px" width="100%">
						<p>Pasta</p>
					</div>

					<div class="col-lg-4">
						<img src="resource/item3.jpg"height="200px" width="100%">
						<p>Mojito</p>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-lg-4">
						<img src="resource/item4.jpg" height="200px" width="100%">
						<p>Pizza</p>
					</div>

					<div class="col-lg-4">
						<img src="resource/item5.jpg" height="200px" width="100%">
						<p>Chicken</p>
					</div>

					<div class="col-lg-4">
						<img src="resource/item6.jpg" height="200px" width="100%">
						<p>Speghatti</p>
					</div>
				</div>

				

			</div>

			<div class="col-lg-3 align-self-center" >
				
				<img src="resource/r_logo.png" class="rounded mx-auto d-block" height="100px" width="100px" align="align-self-center">
				<label class="font-primary"><h2>Food Menu</h2></label>
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
		background-color: 	#ffd51e;
		text-decoration: bold;
		text-transform: uppercase;
		letter-spacing: 3px;
		font-weight: bold;

	}
</style>




<?php include "footer.php";?>