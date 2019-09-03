<!-- user signup -->
<?php include "header.php"?>

<style type="text/css">
    #wrap{
        margin-bottom: 10%;
    }
</style>

<div class="container" id="wrap">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form action="server.php" method="post" accept-charset="utf-8" class="form" role="form" enctype="multipart/form-data">   <legend>Sign Up</legend>

                    <div class="row">
                        <div class="col-xs-6 col-md-6">
                            <label>First-Name</label>
                            <input type="text" name="first_name" value="" class="form-control input-lg" placeholder="First Name" required/>                        </div>
                        <div class="col-xs-6 col-md-6">
                            <label>Last-Name</label>
                            <input type="text" name="last_name" value="" class="form-control input-lg" placeholder="Last Name"  required/>                        </div>
                    </div>


                    <label>Mobile Number</label>
                    <input type="text" name="mobile_no" value="" class="form-control input-lg" placeholder="01*********"  required/>
                    <label>E-mail</label>
                    <input type="text" name="email" value="" class="form-control input-lg" placeholder="example@email.com" required />
                    <label>Password</label>

                    <input type="password" name="password" value="" class="form-control input-lg" placeholder="Password" required />
                    <label>Confirm Password</label>

                    <input type="password" name="password_2" value="" class="form-control input-lg" placeholder="Confirm Password"  /> 
                    <br>


                     <label>Gender : </label>                    <label class="radio-inline">
                        <input type="radio" name="gender" value="Male" id= "male" required/>                        Male
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="gender" value="Female" id= "female" required/>                        Female
                    </label>
                    <br />

                    <label>Upload Image:</label>
                    <input type="file" class="custom-file-input" id="customFile" name="file" required/>
                    <br><br>



              <span class="help-block">By clicking Create my account, you agree to our Terms and that you have read our Data Use Policy, including our Cookie Use.</span>
                    <button class="btn btn-lg btn-primary btn-block signup-btn" name="submit" value="submit" type="submit">
                        Create my account</button>
            </form>          
          </div>
</div>            
</div>

<style type="text/css">
  legend{
    color: #337AB7;
    font-size: 30px;
    text-align: center;
    margin-bottom: 20px;
  }

</style>

<?php include "footer.php" ?>