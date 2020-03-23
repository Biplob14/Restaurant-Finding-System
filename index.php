<?php include "header.php" ?>
<?php include "server_connect.php" ?>

<style type="text/css">
	body{
		background: url("resource/f2.jpg") no-repeat;
		background-size: cover;
		z-index: -1;
		opacity: .9;
		
	}
	div>label{
		color:#0dc0ea;
	}
	.result-table{
		color:#0dc0ea;
		font-size: 1.6rem;
	}
	.result-table>a{
		font-size:1.8rem;
	}
	#wrap{
		margin-bottom: 6%;

	}
	.checked {
  	color: orange;
	}
	#map{
		height: 100%;
	}
</style>
	<div class="container" id="wrap">
		<div class="row">
			<div class="col-lg-6">

      <div class="col-lg-6 maps">
        <div class="map-responsive" style="width: 500px;height: 600px;">

      		<div id="map"></div>
      		<?php include "map.php" ?>

		</div>
      </div>
				
			</div>


		<div class="col-lg-6">
			<form action="index.php" method="post">
				<div class="form-group">
			      <label for="">Resturant</label>
			      <input type="text" class="form-control" id="" placeholder="Resturant name" name="r_name">
			    </div>
			    <div class="form-group">
			      <label for="pwd">Price Range</label>
			      <input type="text" class="form-control" id="pwd" placeholder="Price Range" name="food_price">
			    </div>
			    <div class="form-group">
			    	<label for="sel1">Food Item (select one):</label>
      				<select class="form-control" id="sel1" name="food_item">
      					<option></option>
      					
      					<?php 

      						$query = "SELECT * FROM menu";
      						$posts=mysqli_query($db,$query);

      						while ($row=mysqli_fetch_assoc($posts)) {
					            // $user_index = $row['id'];

					            $food_name = $row['food_name'];

					            echo "<option value = "; echo str_replace(' ', '_', $food_name); echo ">{$food_name}</option> ";
					            }
      					 ?>
      					

      				</select>
			    	
			    </div>

			    <button type="submit" name="submit" value="submit" class="btn btn-primary center-block">Submit</button>
			</form>
			  <hr>
			</br>

			<div class="result-table">
				<table class="table table-hover table-striped">

				<?php 
					// if (isset($_POST['submit'])) {
					// $r_name = $_POST['r_name'];
					// $food_price = $_POST['food_price'];
					// $food_name = $_POST['food_item'];

					
					// if ($r_name !=="" || $food_price !=="" || $food_name!=="") {
					
					


					// for all selection
					// if (isset($_POST['r_name'], $_POST['food_item'], $_POST['food_price']) )  {

					// 	$query = "SELECT * FROM r_signup WHERE r_name = '$r_name' OR food_name = '$food_name' OR food_price >= '$food_price'";
					// 	$data = mysqli_query($db, $query);

					// 	echo "for three query";
					// 	echo $food_price;
					// 	echo $food_name;
					// 	while ($row = mysqli_fetch_assoc($data)) {
							
						
					// 	$r_name = $row['r_name'];
					// 	$r_address = $row['r_address'];
					// 	$rating = $row['rating'];
						

					// 	echo "<tr>";
					// 	echo "<td> <a href = 'restaurant_home.php?name=$r_name'>{$r_name}</a></td>";
					// 	echo "<td>{$rating} <span class='fa fa-star checked'></span> </td>";
					// 	echo "<td>{$r_address}</td>";
					// 	// <span class="fa fa-star checked"></span>
					// 	// <span class="fa fa-star checked"></span>
					// 	// <span class="fa fa-star checked"></span>
					// 	// <span class="fa fa-star checked"></span>
					// 	// <span class="fa fa-star"></span>
					// 	echo "</tr>";
					// 	}
					// }

					// for restaurant name and food name selection
					// else if (isset($r_name) AND isset($food_name))  {

					// 	$query = "SELECT * FROM r_signup WHERE r_name = '$r_name' OR food_name = '$food_name'";
					// 	$data = mysqli_query($db, $query);

					// 	while ($row = mysqli_fetch_assoc($data)) {
							
						
					// 	$r_name = $row['r_name'];
					// 	$r_address = $row['r_address'];
					// 	$rating = $row['rating'];
						
					// 	echo "for two query r_name and food_name";

					// 	echo "<tr>";
					// 	echo "<td> <a href = 'restaurant_home.php?name=$r_name'>{$r_name}</a></td>";
					// 	echo "<td>{$rating} <span class='fa fa-star checked'></span> </td>";
					// 	echo "<td>{$r_address}</td>";
					// 	// <span class="fa fa-star checked"></span>
					// 	// <span class="fa fa-star checked"></span>
					// 	// <span class="fa fa-star checked"></span>
					// 	// <span class="fa fa-star checked"></span>
					// 	// <span class="fa fa-star"></span>
					// 	echo "</tr>";
					// 	}
					// }



				// }



						// obsolete code
					
						 // else
						 // 	include"restaurant_list.php";

				if (isset($_POST['submit'])) {
					
					$r_names = $_POST['r_name'];
					$food_prices = $_POST['food_price'];
					$food_names = $_POST['food_item'];

					if ($r_names != "" || $food_prices != "" || $food_names !="") {
						$query = "SELECT * FROM r_signup WHERE r_name = '$r_names' OR food_name = '$food_names' OR food_price >= '$food_prices'";

						$data = mysqli_query($db, $query);
						if (mysqli_num_rows($data)>0) {
							while ($row = mysqli_fetch_assoc($data)) {
								$r_name = $row['r_name'];
								$r_address = $row['r_address'];
								$rating = $row['rating'];
								$food_name = $row['food_name'];
								$food_price = $row['food_price'];


								$food_names = str_replace("_", " ", $food_names);
								// echo $food_names."sssssssssssssssssss";
								// var_dump($r_names);
								// var_dump($food_prices);
								// var_dump($food_names);

								// echo $food_prices."Taka";

									// for restaurant name input
								if($r_names == $r_name && $food_names == "" && $food_prices == ""){
										// echo "for r_names";

									echo "<tr>";
									echo "<td> <a href = 'restaurant_home.php?name=$r_name'>{$r_name}</a></td>";
									echo "<td>{$rating} <span class='fa fa-star checked'></span> </td>";
									echo "<td>{$r_address}</td>";
									// <span class="fa fa-star checked"></span>
									// <span class="fa fa-star checked"></span>
									// <span class="fa fa-star checked"></span>
									// <span class="fa fa-star checked"></span>
									// <span class="fa fa-star"></span>
									echo "</tr>";
									}
									// for price input
									elseif ($r_names == "" && $food_names == "" && $food_prices !=="") {
										if ($food_price>=$food_prices) {
											// echo "price filter";
											echo "<tr>";
											echo "<td> <a href = 'restaurant_home.php?name=$r_name'>{$r_name}</a></td>";
											echo "<td>{$rating} <span class='fa fa-star checked'></span> </td>";
											echo "<td>{$r_address}</td>";
											// <span class="fa fa-star checked"></span>
											// <span class="fa fa-star checked"></span>
											// <span class="fa fa-star checked"></span>
											// <span class="fa fa-star checked"></span>
											// <span class="fa fa-star"></span>
											echo "</tr>";
										}
										
									}
									// food name filter
									elseif ($r_names =="" && $food_names == $food_name && $food_prices == "") {
										// echo "food name filterrrrrrrrrrrrrrrrrrr";
										echo "<tr>";
										echo "<td> <a href = 'restaurant_home.php?name=$r_name'>{$r_name}</a></td>";
										echo "<td>{$rating} <span class='fa fa-star checked'></span> </td>";
										echo "<td>{$r_address}</td>";
										// <span class="fa fa-star checked"></span>
										// <span class="fa fa-star checked"></span>
										// <span class="fa fa-star checked"></span>
										// <span class="fa fa-star checked"></span>
										// <span class="fa fa-star"></span>
										echo "</tr>";
									}
									// restaurant name and food name filter

									elseif ($r_names === $r_name && $food_names === $food_name && $food_prices === "") {
										// echo "restaurant name and food name filterccccc";
										echo "<tr>";
										echo "<td> <a href = 'restaurant_home.php?name=$r_name'>{$r_name}</a></td>";
										echo "<td>{$rating} <span class='fa fa-star checked'></span> </td>";
										echo "<td>{$r_address}</td>";
										// <span class="fa fa-star checked"></span>
										// <span class="fa fa-star checked"></span>
										// <span class="fa fa-star checked"></span>
										// <span class="fa fa-star checked"></span>
										// <span class="fa fa-star"></span>
										echo "</tr>";
									}
									//restaurant name and food price
									elseif ($r_names === $r_name && $food_prices !=="" && $food_names === "") {
										if ($food_price>=$food_prices) {
											// echo "restaurant name and food price search";
											echo "<tr>";
											echo "<td> <a href = 'restaurant_home.php?name=$r_name'>{$r_name}</a></td>";
											echo "<td>{$rating} <span class='fa fa-star checked'></span> </td>";
											echo "<td>{$r_address}</td>";
											// <span class="fa fa-star checked"></span>
											// <span class="fa fa-star checked"></span>
											// <span class="fa fa-star checked"></span>
											// <span class="fa fa-star checked"></span>
											// <span class="fa fa-star"></span>
											echo "</tr>";
										}
										

									}									
									//food name and food price search
									elseif ($r_names === "" && $food_prices !=="" && $food_names === $food_name) {
										if ($food_price>=$food_prices) {
											// echo "food name and food price search";											
											echo "<tr>";
											echo "<td> <a href = 'restaurant_home.php?name=$r_name'>{$r_name}</a></td>";
											echo "<td>{$rating} <span class='fa fa-star checked'></span> </td>";
											echo "<td>{$r_address}</td>";
											// <span class="fa fa-star checked"></span>
											// <span class="fa fa-star checked"></span>
											// <span class="fa fa-star checked"></span>
											// <span class="fa fa-star checked"></span>
											// <span class="fa fa-star"></span>
											echo "</tr>";
										}
										
									}

									elseif ($r_names === $r_name && $food_names === $food_name && $food_prices  !=="" ) {
										if ($food_price>=$food_prices) {
											// echo "food name and food price search";
										//                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 
										echo "<tr>";
										echo "<td> <a href = 'restaurant_home.php?name=$r_name'>{$r_name}</a></td>";
										echo "<td>{$rating} <span class='fa fa-star checked'></span> </td>";
										echo "<td>{$r_address}</td>";
										// <span class="fa fa-star checked"></span>
										// <span class="fa fa-star checked"></span>
										// <span class="fa fa-star checked"></span>
										// <span class="fa fa-star checked"></span>
										// <span class="fa fa-star"></span>
										echo "</tr>";
										}
								}							
							}
						}
					}

					if ($r_names == "" && $food_names == "" && $food_prices == "") {
									echo "<p class='text-center'> <img  src='resource/not_found.png' height='300px' width='300px'></p>";
									echo "<p class='text-center'><b><-------Please Fill any field and search-------></b>";
								}
				}
				else
					include "restaurant_list.php";

?>
</table>



			</div>

			</div>

		</div>


		
		
	</div>

</body>



<?php include "footer.php" ?>
