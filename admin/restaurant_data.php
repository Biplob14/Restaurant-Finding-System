
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
        All Restaurants
        <small>Restaurant Lists</small>
    </h1>
    <ol class="breadcrumb">
        <li>
            <i class="fa fa-dashboard"></i>  <a href="dashboard.php">Restaurants</a>
        </li>
        <li class="active">
            <i class="fa fa-file"></i> Admin
        </li>
    </ol>









<?php include_once "../server_connect.php"; ?>



                  <div>
                    <table class="table table-hover table-striped">

                    	<thead>

                        <th>Index</th>
                        <th>Restaurant ID</th>  
                        <th>Restaurant Name</th>
                        <th>Address</th>
                        <th>Contact</th>
                        <th>Rating (Scale-5)</th>

                        </thead>

                        <tbody>
 							<?php 
                        	        $query = "SELECT * FROM r_signup";
        							$select_posts=mysqli_query($db,$query);

        							$r_index=1;


                      
                        	while ($row=mysqli_fetch_assoc($select_posts)) {
						        $r_index = $row['id'];
						        $r_id = $row['id'];

						        $r_name = $row['r_name'];
						        $r_address = $row['r_address'];
						        $moblie_num = $row['mobile_num'];
						        $email = $row['email'];
						        $rating= $row['rating'];

						        echo "<tr>";

						        echo "<td>{$r_index}</td>";
						        echo "<td>{$r_id}</td>";
						        echo "<td>{$r_name}</td>";
						        echo "<td>{$r_address}</td>";
						        echo "<td>{$moblie_num}</br>{$email}</td>";
						        // echo "<td>{$email}</td>";
						        echo "<td>{$rating}*</td>";
						        echo "</tr>";

						        $r_index++;

						        }




  							?>

                        </tbody>
           
                    </table>
                </div>


<?php include "admin_footer.php" ?>
