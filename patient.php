<?php
session_start();
include('header.php');

?>
	<!-- END nav -->

	<?php $con = mysqli_connect("localhost","root","","click-medic"); ?> 

	
	<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-end justify-content-start">
				<div class="col-md-9 ftco-animate pb-5">
					<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Patient  <i class="fa fa-chevron-right"></i></span></p>
					<h1 class="mb-3 bread">Our Patients</h1>
				</div>
			</div>
		</div>
	</section>

	
	
					<!-- copy -->
					
					<section class="ftco-section bg-light">
		<div class="container">
			
			
		
		  
		
		
		
		
			
		<!--  put while loop -->	
			
			<div class="row">


			<?php
		
		$sql = "SELECT * FROM patient";

		$result = mysqli_query($con, $sql);
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {?>

				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
						
							<img src="admin/<?php echo $row['img']; ?>"  height ="280" width="280">
						</div>


						<div class="text text-center">
							<h3 class="mb-2"><?php echo $row['name'] ?></h3>
						
							<div class="faded">
								<p><?php  echo $row['description'] ?></p>
						
			
									
								</ul>
							</div>
						</div>
					
					</div>
				
				
				</div>
			
				<?php } ?>


<?php } ?>	
			
			</div>



		
		
        </div>
	
	</section>

	
	
					

					
					


				


			



	


	<!--  footer -->

	<?php include('footer.php');

?>