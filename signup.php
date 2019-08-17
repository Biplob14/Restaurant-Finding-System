<?php include "header.php"?>

<style type="text/css">
    #wrap{
        margin-bottom: 10%;
    }
</style>

<div class="container" id="wrap">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form action="server.php" method="post" accept-charset="utf-8" class="form" role="form">   <legend>Sign Up</legend>

                    <div class="row">
                        <div class="col-xs-6 col-md-6">
                            <label>First-Name</label>
                            <input type="text" name="first_name" value="" class="form-control input-lg" placeholder="First Name"  />                        </div>
                        <div class="col-xs-6 col-md-6">
                            <label>Last-Name</label>
                            <input type="text" name="last_name" value="" class="form-control input-lg" placeholder="Last Name"  />                        </div>
                    </div>


                    <label>Mobile Number</label>
                    <input type="text" name="mobile_no" value="" class="form-control input-lg" placeholder="01*********"  />
                    <label>E-mail</label>
                    <input type="text" name="email" value="" class="form-control input-lg" placeholder="example@email.com"  />
                    <label>Password</label>

                    <input type="password" name="password" value="" class="form-control input-lg" placeholder="Password"  />
                    <label>Confirm Password</label>


                    <input type="password" name="password_2" value="" class="form-control input-lg" placeholder="Confirm Password"  /> 


                     <label>Gender : </label>                    <label class="radio-inline">
                        <input type="radio" name="gender" value="M" id= "male" />                        Male
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="gender" value="F" id= "female" />                        Female
                    </label>
                    <br />
              <span class="help-block">By clicking Create my account, you agree to our Terms and that you have read our Data Use Policy, including our Cookie Use.</span>
                    <button class="btn btn-lg btn-primary btn-block signup-btn" name="submit" value="submit" type="submit">
                        Create my account</button>
            </form>          
          </div>
</div>            
</div>


<?php include "footer.php" ?>