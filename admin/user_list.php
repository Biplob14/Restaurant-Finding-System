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
        Admin
        <small>Dashboard</small>
    </h1>
    <ol class="breadcrumb">
        <li>
            <i class="fa fa-dashboard"></i>  <a href="dashboard.php">Dashboard</a>
        </li>
        <li class="active">
            <i class="fa fa-file"></i> Admin Panel
        </li>
    </ol>

    <!-- Include your text and Page Here -->


<?php include_once "../server_connect.php";  ?>


<div>
<table class="table table-hover table-striped">

    <thead>

    <th>Index</th>
    <th>User ID</th>  
    <th>Name</th>
    <th>Contact</th>
    <th>Gender</th>

    </thead>

    <tbody>
        <?php 
                $query = "SELECT * FROM signup";
                $users=mysqli_query($db,$query);

                $user_index=1;


  
        while ($row=mysqli_fetch_assoc($users)) {
            $user_index = $row['id'];
            $user_id = $row['id'];

            $first_name = $row['first_name'];
            $last_name = $row['last_name'];

            $moblie_no = $row['mobile_no'];
            $email = $row['email'];
            $gender= $row['gender'];

            echo "<tr>";

            echo "<td>{$user_index}</td>";

            echo "<td>{$user_id}</td>";

            echo "<td>{$first_name}</br>{$last_name}</td>";


            echo "<td>{$moblie_no}</br>{$email}</td>";


            echo "<td>{$gender}</td>";

            echo "</tr>";

            $user_index++;

            }




        ?>

    </tbody>

</table>
</div>
















    </div>
    <!-- /#wrapper -->


<?php include "admin_footer.php" ?>