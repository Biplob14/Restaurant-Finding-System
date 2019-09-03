<?php include "header.php" ?>
<?php include "server_connect.php" ?>



<?php 
	$query = "SELECT * FROM r_signup";


  ?>


    <div class="container">




				<table class="table table-hover table-striped">

					<h2 align="center"><b><u>Food   Menu</u></b></h2> <br><br>


					<th>Food Name</th>
					<th>Price</th>
			
					
						<?php  
							$select_posts = mysqli_query($db,$query);

								$r_name = $_SESSION['r_name'];
								$query = "SELECT * FROM menu WHERE r_name = '$r_name'";
								$posts=mysqli_query($db,$query);

								while ($row=mysqli_fetch_assoc($posts)) {
					            // $user_index = $row['id'];

					            $food_name = $row['food_name'];
					            $food_price = $row['food_price'];
							echo "<tr>";
					
							echo "<td>{$food_name}</td>";
							echo "<td>{$food_price}</td>";
							// <span class="fa fa-star checked"></span>
							// <span class="fa fa-star checked"></span>
							// <span class="fa fa-star checked"></span>
							// <span class="fa fa-star checked"></span>
							// <span class="fa fa-star"></span>
							echo "</tr>";
						}
						
						?>


				</table>



				</div>








<?php include "footer.php" ?>