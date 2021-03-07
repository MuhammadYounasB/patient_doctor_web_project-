
<?php 
 session_start();
include('header.php');
?>
	<?php $con = mysqli_connect("localhost","root","","click-medic"); ?> 

	<!-- END nav -->


	
	
	
	<section class="hero-wrap js-fullheight" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
				<div class="col-lg-6 ftco-animate">
					<div class="mt-5">
						<h1 class="mb-4">The Most Valuable Thing is Your Health</h1>
						<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
						
										
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pt ftco-no-pb ftco-services-2 bg-light">
		<div class="container">
			<div class="row d-flex">
				<div class="col-md-7 py-5">
					<div class="py-lg-5">
						<div class="row justify-content-center pb-5 container">
							<div class="col-md-12 heading-section ftco-animate">
								<h2 class="mb-3">Welcome to <span>Click Medic</span></h2>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
								<div class="media block-6 services d-flex">
									<div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-ambulance"></span></div>
									<div class="media-body pl-md-4">
										<h3 class="heading mb-3">Emergency Help</h3>
										<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
									</div>
								</div>      
							</div>
							<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
								<div class="media block-6 services d-flex">
									<div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-ophthalmologist"></span></div>
									<div class="media-body pl-md-4">
										<h3 class="heading mb-3">Qualified Doctors</h3>
										<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
									</div>
								</div>      
							</div>
							<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
								<div class="media block-6 services d-flex">
									<div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-flag"></span></div>
									<div class="media-body pl-md-4">
										<h3 class="heading mb-3">Location &amp; Directions</h3>
										<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
									</div>
								</div>      
							</div>
							<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
								<div class="media block-6 services d-flex">
									<div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-stethoscope"></span></div>
									<div class="media-body pl-md-4">
										<h3 class="heading mb-3">Medical Treatment</h3>
										<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
									</div>
								</div>      
							</div>
						</div>
					</div>
				</div>
				
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
		<div class="container">
			<div class="row d-flex">
				<div class="col-md-6 col-lg-5 d-flex">
					<div class="img w-100 d-flex align-self-stretch align-items-center" style="background-image:url(images/about.jpg);">
					</div>
				</div>
				<div class="col-md-6 col-lg-7 pl-lg-5 py-md-5">
					<div class="py-md-5">
						<div class="row justify-content-start pb-3">
							<div class="col-md-12 heading-section ftco-animate p-4 p-lg-5">
								<h2 class="mb-4">We Are <span>Click Medic</span> A Healthcare Provider</h2>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
								<p ><a href="doctors.php" class="btn btn-primary py-3 px-4"  >Make an appointment</a> <a href="#" class="btn btn-secondary py-3 px-4">Contact us</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-intro img" style="background-image: url(images/bg_3.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row justify-content-end">
				<div class="col-md-7">
					<h2>Your Health is Our Priority</h2>
					<p>We can manage your dream building A small river named Duden flows by their place</p>
					<p class="mb-0"><a href="doctors.php" class="btn btn-white px-4 py-3">Make An Appointment</a></p>
				</div>
			</div>
		</div>
	</section>

	

	<!-- this doctors part-->

	<h2 class="mb-4">Our Qualified Doctors</h2>

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

				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
						
							<img src="admin/<?php echo $row['img']; ?>"  height ="280" width="280">
						</div>


						<div class="text text-center">
							<h3 class="mb-2"><?php echo $row['name'] ?></h3>
							<span class="position mb-2"><?php echo $row['speciality'];  ?></span>
							<div class="faded">
								<p><?php  echo $row['description'] ?></p>
								<ul class="ftco-social text-center">
									<li class="ftco-animate"><span><i class="fa fa-address-book">&nbsp;&nbsp;</span></i><?php echo $row['contact'] ?></li>
									<li class="ftco-animate"><span><i class="fa fa-envelope-square"></i>&nbsp;&nbsp;</span></i><?php echo $row['email'] ?></li>
									<li class="ftco-animate"><span><i class="fa fa-map-marker"></i> &nbsp;</span></i><?php echo $row['address'] ?></li>
									
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



	

	<section class="ftco-section bg-light">
		<div class="container-fluid px-md-5">
			<div class="row justify-content-center mb-5 pb-5">
				<div class="col-md-10 heading-section text-center ftco-animate">
					<h2 class="mb-4">Latest Blog Updates</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
				</div>
			</div>
			<div class="row d-flex">
				<div class="col-lg-4 ftco-animate">
					<div class="blog-entry">
						<a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
						</a>
						<div class="d-flex">
							<div class="meta pt-3 text-right pr-2">
								<div><a href="#"><span class="fa fa-calendar mr-2"></span>Aug. 12, 2020</a></div>
								<div><a href="#"><span class="fa fa-user mr-2"></span>Admin</a></div>
								<div><a href="#" class="meta-chat"><span class="fa fa-comment mr-2"></span> 3</a></div>
							</div>
							<div class="text d-block">
								<h3 class="heading"><a href="#">Scary Thing That You Don’t Get Enough Sleep</a></h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia...</p>
								<p><a href="blog.html" class="btn btn-secondary btn-outline-secondary py-2 px-3">Read more</a></p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 ftco-animate">
					<div class="blog-entry">
						<a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
						</a>
						<div class="d-flex">
							<div class="meta pt-3 text-right pr-2">
								<div><a href="#"><span class="fa fa-calendar mr-2"></span>Aug. 12, 2020</a></div>
								<div><a href="#"><span class="fa fa-user mr-2"></span>Admin</a></div>
								<div><a href="#" class="meta-chat"><span class="fa fa-comment mr-2"></span> 3</a></div>
							</div>
							<div class="text d-block">
								<h3 class="heading"><a href="#">Scary Thing That You Don’t Get Enough Sleep</a></h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia...</p>
								<p><a href="blog.html" class="btn btn-secondary btn-outline-secondary py-2 px-3">Read more</a></p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 ftco-animate">
					<div class="blog-entry">
						<a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
						</a>
						<div class="d-flex">
							<div class="meta pt-3 text-right pr-2">
								<div><a href="#"><span class="fa fa-calendar mr-2"></span>Aug. 12, 2020</a></div>
								<div><a href="#"><span class="fa fa-user mr-2"></span>Admin</a></div>
								<div><a href="#" class="meta-chat"><span class="fa fa-comment mr-2"></span> 3</a></div>
							</div>
							<div class="text d-block">
								<h3 class="heading"><a href="#">Scary Thing That You Don’t Get Enough Sleep</a></h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia...</p>
								<p><a href="blog.html" class="btn btn-secondary btn-outline-secondary py-2 px-3">Read more</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



	<!-- footer-->

	<?php include('footer.php');

?>