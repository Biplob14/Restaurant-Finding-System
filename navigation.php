<?php session_start(); ?>

<nav class="navbar  navbar-inverse navbar-light" style="background-color:  #38006f; opacity:0.8" >
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" rel="home" href="index.php" title="Treat dao restaurant Finder">
        <img style="max-width:100px; margin-top: -7px;"
             src="resource/rms.png" alt="treat dao icon">
    </a>
      <a class="navbar-brand" href="index.php" title="Resturant Finder System">Resturant Finder System</a>
    </div>
    <div class="collapse navbar-collapse sticky-top">

<?php
        if (isset($_SESSION['email'])) {   //user logic

              $img= $_SESSION['image'];

                            echo "
                                          <ul class='nav navbar-nav navbar-right'>

                                            <div class='collapse navbar-collapse sticky-top'>
                                                      <ul class='nav navbar-nav navbar-right'>

                                                        <li><a style='color:grey;'>{$_SESSION['name']}</a></li>



                                                  <li><a><img class='img-responsive' src='$img' height='30px' width='30px'></a></li>


                                                  <li><a href='logout.php' ><span class=''></span> Log Out</a></li>

                                                </ul>
                                            </div>

                                          </ul>

                                        ";

                                      }

                                      else if (isset($_SESSION['admin'])) { //admin logic
                                        // $img= $_SESSION['image'];

                                        echo "


                                          <ul class='nav navbar-nav navbar-right'>

                                            <div class='collapse navbar-collapse sticky-top'>
                                                      <ul class='nav navbar-nav navbar-right'>



                                                  <li><a><img class='img-responsive' src='resource/admin.png' height='35px' width='35px'></a></li>

                                                  <li><a href='admin/admin_index.php' ><span class=''></span> Admin</a></li>

                                                  <li><a href='logout.php' ><span class=''></span> Log Out</a></li>

                                                </ul>
                                            </div>

                                          </ul>

                                        ";
                                       
                                      }


                                      else if (isset($_SESSION['r_email'])) {  //restaurant logic
                                                $img= $_SESSION['r_image'];

                                                  echo "
                                                  <ul class='nav navbar-nav navbar-right'>

                                                    <div class='collapse navbar-collapse sticky-top'>
                                                              <ul class='nav navbar-nav navbar-right'>

                                                                <li><a href='restaurant_home.php?name={$_SESSION['r_name']}' style='color:#64b5f6;'><b>{$_SESSION['r_name']}</b></a></li>



                                                          <li><a><img class='img-responsive' src='$img' height='30px' width='30px'></a></li>

                                                          <li><a href='admin/admin_index.php' ><span class=''></span> Admin</a></li>
                                                          <li><a href='logout.php' ><span class=''></span> Log Out</a></li>

                                                        </ul>
                                                    </div>

                                                  </ul>

                                                ";
                                              }

                                else
                                  {     //default logic
                                    echo "
                                      <ul class='nav navbar-nav navbar-right'>

                                          <div class='collapse navbar-collapse sticky-top'>
                                            <ul class='nav navbar-nav navbar-right'>

                                              <li class='dropdown'>
                                                <a class='dropdown-toggle' data-toggle='dropdown' href='#' title='Click to sign-up for an account'>Sign-Up<span class='caret'></span></a>
                                                        <ul class='dropdown-menu'>
                                                          <li><a href='signup.php'>User Sign-Up</a></li>
                                                          <li><a href='restaurant_signup.php'>Restaurant Sign-Up</a></li>
                                                        </ul>                                                      

                                              <li><a href='login.php' title='Click to login on your account'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>

                                            </ul>
                                          </div>

                                      </ul>



                                    ";
                                  }




?>

<!--       <ul class='nav navbar-nav navbar-right'>

        <li class='dropdown'>
          <a class='dropdown-toggle' data-toggle='dropdown' href='#'>Sign-Up<span class='caret'></span></a>
          <ul class='dropdown-menu'>
            <li><a href='signup.php'>User Sign-Up</a></li>
            <li><a href='restaurant_signup.php'>Resturant Sign-Up</a></li>
          </ul>
        </li>


        <li><a href='login.php' ><span class='glyphicon glyphicon-log-in'></span> Login</a></li>


        <li><a href='admin/rms_admin.php' ><span class=''></span> Admin</a></li>

      </ul> -->








    </div>
  </div>


</nav>

