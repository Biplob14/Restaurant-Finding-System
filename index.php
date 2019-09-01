<?php include "header.php" ?>

<style type="text/css">
	#wrap{
		margin-bottom: 6%;

	}
	.checked {
  	color: orange;
	}
	#map{
		height: 100%;
	}
</style>

	<div class="container" id="wrap">
		<div class="row">
			<div class="col-lg-6">
				<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> -->
      <div class="col-lg-6 maps">
        <div class="map-responsive" style="width: 500px;height: 600px;">
      		<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d386950.6511603643!2d-73.70231446529533!3d40.738882125234106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNueva+York!5e0!3m2!1ses-419!2sus!4v1445032011908" width="500" height="600" frameborder="0" style="border:0" allowfullscreen> -->
      		<!-- <iframe width="500" height="600">
      			
      		</iframe> -->
      		<div id="map"></div>
      		<?php include "map.php" ?>

		</div>
      </div>
				
			</div>


		<div class="col-lg-6">
			  <form action="#">
			    <div class="form-group">
			      <label for="">Resturant</label>
			      <input type="text" class="form-control" id="" placeholder="Resturant name" name="">
			    </div>
			    <div class="form-group">
			      <label for="pwd">Price Range</label>
			      <input type="" class="form-control" id="pwd" placeholder="Price Range" name="">
			    </div>
			    <div class="form-group">
			    	<label for="sel1">Select list (select one):</label>
      				<select class="form-control" id="sel1">
        				<option>Burger</option>
        				<option>Pizza</option>
        				<option>Hotdog</option>
        				<option>Cake</option>
        				<option>Pasta</option>
        				<option>Fuchka</option>
      				</select>
			    	
			    </div>

			    <button type="submit" class="btn btn-primary center-block">Submit</button>
			  </form>
			  <hr>
			</br>

			<div>



				<?php include"restaurant_list.php" ?>



			</div>

			</div>

		</div>


		
		
	</div>

</body>



<?php include "footer.php" ?>





















