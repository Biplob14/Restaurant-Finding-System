
        <?php session_start(); ?>   

            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>


                    </li>

<?php 

if (isset($_SESSION['r_name'])) {


    echo "

                    <li class=''>
                        <a href='blank_page.php'><i class='fa fa-fw fa-file'></i> Blank Page</a>    <!-- restaurant -->
                    </li>




                    </li>
                    <li>
                        <a href='create_post.php'><i class='fa fa-fw fa-edit'></i> Food Post</a>    <!-- restaurant -->
                    </li>



                    <li>
                        <a href='menu_post.php'><i class='fa fa-fw fa-edit'></i> Food Menu Post</a> <!-- restaurant -->
                    </li>


    ";




} else{
    echo "


                    <li>
                        <a href='user_count.php'><i class='fa fa-fw fa-bar-chart-o'></i>User Count</a> <!-- admin -->
                    </li>
                    <li>
                        <a href='restaurant_data.php'><i class='fa fa-fw fa-table'></i> Restaurant List</a>     <!-- admin -->





                <li> <!-- admin -->
                    <a href='javascript:;' data-toggle='collapse' data-target='#demo'><i class='fa fa-fw fa-arrows-v'></i>All Information<i class='fa fa-fw fa-caret-down'></i></a>
                    <ul id='demo' class='collapse'>
                        <li>
                        <a href='user_list.php'>User List</a>
                        </li>
                        <li>
                        <a href='restaurant_data.php'>Restaurant List</a>
                        </li>
                        </ul>
                </li>


                    <li class=''>
                        <a href='blank_page.php'><i class='fa fa-fw fa-file'></i> Blank Page</a>    <!-- restaurant -->
                    </li>




                    </li>
                    <li>
                        <a href='create_post.php'><i class='fa fa-fw fa-edit'></i> Food Post</a>    <!-- restaurant -->
                    </li>



                    <li>
                        <a href='menu_post.php'><i class='fa fa-fw fa-edit'></i> Food Menu Post</a> <!-- restaurant -->
                    </li>


";


}


 ?>





                </ul>
            </div>
            <!-- /.navbar-collapse -->


        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">



