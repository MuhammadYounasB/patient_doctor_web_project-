<?php 
session_start();
include('header.php');

?>

<?php $con = mysqli_connect("localhost","root","","click-medic"); ?> 
<!-- END nav -->

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-start">
      <div class="col-md-9 ftco-animate pb-5">
       <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Services <i class="fa fa-chevron-right"></i></span></p>
       <h1 class="mb-3 bread">Services</h1>
     </div>
   </div>
 </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb ftco-services-2 bg-light">
 <div class="container">
  <div class="row d-flex">
   <div class="col-md-7 py-5">
    <div class="py-lg-5">
     <div class="row justify-content-center pb-5">
       <div class="col-md-12 heading-section ftco-animate">
         <h2 class="mb-3">Our <span>Services</span></h2>
       </div>
     </div>
     <div class="row">


     <?php 
     
     $sql = "SELECT * FROM services";

     $result = mysqli_query($con, $sql);

     if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {?>
     
     
     
     
      
      
     
      <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
       <div class="media block-6 services d-flex">
         <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-ambulance"></span></div>
         <div class="media-body pl-md-4">
           <h3 class="heading mb-3"><?php  echo $row['tittle'];?></h3>
           <p><?php echo $row['description']; ?></p>
         </div>
       </div>      
     </div>
     
      <?php } ?>

      <?php } ?>

     
     </div>



   </div>
 </div>
</div>
<div class="col-md-5 d-flex align-items-stretch">
 <div class="img w-100" style="background-image: url(images/about.jpg);"></div>
</div>
</div>

</div>
</section>
<?php include('footer.php');

?>