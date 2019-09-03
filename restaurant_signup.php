<?php include "header.php"?>

<div class="container" id="wrap">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form action="r_signup_db.php" method="post" accept-charset="utf-8" class="form" role="form" enctype="multipart/form-data">   <legend>Sign Up for Restaurant</legend>

                    <div class="row">
                        
                            <label>Restaurant Name</label>
                            <input type="text" name="r_name" value="" class="form-control input-lg" placeholder="Resturant Name"  required />                     

                        <label>Mobile Number</label>
                        <input type="text" name="mobile_no" value="" class="form-control input-lg" placeholder="01*********"  required/>
                    
                        <label>E-mail</label>
                    <input type="text" name="email" value="" class="form-control input-lg" placeholder="example@email.com"  required/>
                    <label>Password</label>

                    <input type="password" name="password" value="" class="form-control input-lg" placeholder="Password"  required/>
                    <label>Confirm Password</label>


                    <input type="password" name="password_2" value="" class="form-control input-lg" placeholder="Confirm Password"  required/> 


                     <label>Address : </label>     

                     <textarea rows="5" cols="12" class="form-control input-lg" name="r_address"> </textarea>

                     <label>Upload Image:</label>
                    <input type="file" class="custom-file-input" id="customFile" name="file" required/>


                    <br />
              <span class="help-block">By clicking Create Restaurant Account, you agree to our Terms and that you have read our Data Use Policy, including our Cookie Use.</span>
                    <button class="btn btn-lg btn-primary btn-block signup-btn" name="submit" value="submit" type="submit" style="margin-bottom: 60px;">
                        Create Restaurant Account</button>

                      </div>
            </form>          
          </div>
</div> 


</div>


<style type="text/css">
  legend{
    color: #337AB7;
    font-size: 30px;
    text-align: center;
  }

</style>

<?php include "footer.php" ?>   