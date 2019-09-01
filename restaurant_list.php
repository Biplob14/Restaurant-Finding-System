<?php include "server_connect.php" ?>

<?php 
	$query = "SELECT * FROM r_signup";


  ?>


    




				<table class="table table-hover table-striped">
			
					
						<?php  
							$select_posts = mysqli_query($db,$query);

							while ($row = mysqli_fetch_assoc($select_posts)){
								
								$r_name = $row['r_name'];
								$rating = $row['rating'];
								$address = $row['r_address'];

							echo "<tr>";
							echo "<td> <a href = 'restaurant_home.php'>{$r_name}</a></td>";
							echo "<td>{$rating}*</td>";
							echo "<td>{$address}</td>";
							// <span class="fa fa-star checked"></span>
							// <span class="fa fa-star checked"></span>
							// <span class="fa fa-star checked"></span>
							// <span class="fa fa-star checked"></span>
							// <span class="fa fa-star"></span>
							echo "</tr>";
						}
						
						?>


				</table>





