<?php 
session_start();
include('header.php');



?>
<!-- END nav -->

<?php
 
 
if(isset($_POST['submit']))
{
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $con = mysqli_connect("localhost","root","","click-medic"); 

  $sql = "INSERT into user_contact (name,  email, subject, message) VALUES('$name','$email','$subject','$message')";
  if(mysqli_query($con,$sql))
  {
    echo "<script>alert('YOUR MESSAGE HAS BEEN SUBMITTED SUCCESSFULLY ');</script>";
  }
  


}





?>



<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-start">
      <div class="col-md-9 ftco-animate pb-5">
       <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Contact us <i class="fa fa-chevron-right"></i></span></p>
       <h1 class="mb-3 bread">Contact us</h1>
     </div>
   </div>
 </div>
</section>

<section class="ftco-section contact-section">
  <div class="container">
    <div class="row d-flex contact-info mb-5">
      <div class="col-md-6 col-lg-3 d-flex ftco-animate">
       <div class="align-self-stretch box p-4 text-center bg-light">
        <div class="icon d-flex align-items-center justify-content-center">
         <span class="flaticon-flag"></span>
       </div>
       <h3 class="mb-4">Address</h3>
       <p>198 West 21th Street, Suite 721 New York NY 10016</p>
     </div>
   </div>
   <div class="col-md-6 col-lg-3 d-flex ftco-animate">
     <div class="align-self-stretch box p-4 text-center bg-light">
      <div class="icon d-flex align-items-center justify-content-center">
       <span class="flaticon-phone-call"></span>
     </div>
     <h3 class="mb-4">Contact Number</h3>
     <p><a href="tel://1234567920">+ 1235 2355 98</a></p>
   </div>
 </div>
 <div class="col-md-6 col-lg-3 d-flex ftco-animate">
   <div class="align-self-stretch box p-4 text-center bg-light">
    <div class="icon d-flex align-items-center justify-content-center">
     <span class="flaticon-paper-plane"></span>
   </div>
   <h3 class="mb-4">Email Address</h3>
   <p><a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
 </div>
</div>
<div class="col-md-6 col-lg-3 d-flex ftco-animate">
 <div class="align-self-stretch box p-4 text-center bg-light">
  <div class="icon d-flex align-items-center justify-content-center">
   <span class="flaticon-world-wide-web-on-grid"></span>
 </div>
 <h3 class="mb-4">Website</h3>
 <p><a href="#">yoursite.com</a></p>
</div>
</div>
</div>
<div class="row no-gutters block-9">
  <div class="col-md-6 order-md-last d-flex">
    <form action="#" method="post" class="bg-light p-5 contact-form" >
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Your Name" name = "name" required>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Your Email" name="email" required>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Subject" name = "subject" required>
      </div>
      <div class="form-group">
        <textarea  id="" cols="30" rows="7" class="form-control" placeholder="Message" name="message" required></textarea>
      </div>
      <div class="form-group">
        <input type="submit" value="Send Message" name = "submit" class="btn btn-secondary py-3 px-5">
      </div>
    </form>
    
  </div>

  <div class="col-md-6 d-flex">
   <div id="map" class="bg-white"></div>
 </div>
</div>
</div>
</section>

<?php include('footer.php');

?>