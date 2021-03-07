


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
					<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Doctors <i class="fa fa-chevron-right"></i></span></p>
					<h1 class="mb-3 bread">Qualified Doctors</h1>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section bg-light">
		<div class="container">
			
			
		
		  
		
		
		
		
			
		<!--  put while loop -->	
			
			<div class="row">


			<?php
		
		$sql = "SELECT * FROM doctor";

		$result = mysqli_query($con, $sql);
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {?>

				<div class="col-md-6 col-lg-3 ftco-animate" >
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
						
							<img src="admin/<?php echo $row['img']; ?>"  height ="280" width="280">
						</div>


						<div class="text text-center">
							<h3 class="mb-0"><?php echo $row['name'] ?></h3>
							<span class="position mb-0"><?php echo $row['speciality'];  ?></span>
							<div class="faded">
								<span><?php  echo $row['description'] ?></span>
								<ul class="ftco-social text-center mb-0">
									<li class="ftco-animate mb-0"><span><i class="fa fa-address-book">&nbsp;&nbsp;</span></i><?php echo $row['contact'] ?></li>
									<li class="ftco-animate mb-0"><span><i class="fa fa-envelope-square"></i>&nbsp;&nbsp;</span></i><?php echo $row['email'] ?></li>
									<li class="ftco-animate mb-0"><span><i class="fa fa-map-marker"></i> &nbsp;</span></i><?php echo $row['address'] ?></li>
								</ul>
							</div>
						</div>
					<?php	if(!isset($_SESSION['d_id']))
					{?>


				
								
			<a href="appointment.php?doctor_id=<?php echo $row['d_id']?>" class= "btn btn-primary position ml-5 mt-3 text-center">make an appointment</a>
								
							<?php 	}  ?>
					
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