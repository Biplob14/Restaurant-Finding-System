<?php include "header.php" ?>

<style type="text/css">
	#wrap{
		margin-bottom: 30%;
	}
</style>

<div class="container" id="wrap">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <form action="server_login.php" method="post" accept-charset="utf-8" class="form" role="form">   <legend>Login</legend>
          <input type="text" name="email" value="" class="form-control input-lg" placeholder="Your Email"  /><br>
          <input type="password" name="password" value="" class="form-control input-lg" placeholder="Password"  /><br>
              
          <label class="radio-inline">
            <input type="radio" name="log_type" value="user"><b>User</b>
          </label>
          <label class="radio-inline">
            <input type="radio" name="log_type" value="restaurant"><b>Restaurant</b>
          </label>
              <br><br>
          <button class="btn btn-lg btn-primary btn-block signup-btn" type="submit">LogIn</button>
      </form>          
    </div>
  </div>            
</div>

<?php include "footer.php" ?>