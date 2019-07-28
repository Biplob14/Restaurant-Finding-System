<?php include "header.php"?>

<div class="container" id="wrap">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form action="server.php" method="post" accept-charset="utf-8" class="form" role="form">   <legend>Sign Up</legend>

                    <div class="row">
                        
                            <label>Resturant Name</label>
                            <input type="text" name="r_name" value="" class="form-control input-lg" placeholder="Resturant Name"  />                     

                        <label>Mobile Number</label>
                        <input type="text" name="mobile_no" value="" class="form-control input-lg" placeholder="01*********"  />
                    
                        <label>E-mail</label>
                    <input type="text" name="email" value="" class="form-control input-lg" placeholder="example@email.com"  />
                    <label>Password</label>

                    <input type="password" name="password" value="" class="form-control input-lg" placeholder="Password"  />
                    <label>Confirm Password</label>


                    <input type="password" name="password_2" value="" class="form-control input-lg" placeholder="Confirm Password"  /> 


                     <label>Address : </label>     

                     <textarea rows="5" cols="12" class="form-control input-lg"> </textarea>

                     <label>Upload Image:</label>
                    <input type="file" class="custom-file-input" id="customFile" name="filename" />


                    <br />
              <span class="help-block">By clicking Create Restaurant Account, you agree to our Terms and that you have read our Data Use Policy, including our Cookie Use.</span>
                    <button class="btn btn-lg btn-primary btn-block signup-btn" name="submit" value="submit" type="submit">
                        Create Restaurant Account</button>
            </form>          
          </div>
</div>            
</div>


<?php include "footer.php" ?>