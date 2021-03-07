


<?php $con = mysqli_connect("localhost","root","","click-medic"); ?> 
<?php

if(isset($_POST['submit']))
{

$name = $_POST['name'];

$description  = $_POST['description'];

$filename= $_FILES["img"]["name"];

$filetemp = $_FILES["img"]["tmp_name"];

$folder = "admin/pro_image/".$filename;

$pic="pro_image/".$filename;

//echo  $folder;

move_uploaded_file($filetemp,$folder);

$contact =$_POST['contactinfo'];



$email = $_POST['email'];

$password = $_POST['pass'];

$gender = $_POST['gender'];






$sql = "INSERT INTO patient (name ,	description ,img,  contacinfo ,  email, password, 	gender )
VALUES ('$name',  '	$description', '$pic', '$contact' ,  '$email', '$password', '$gender' )";

if(mysqli_query($con,$sql))
{

echo"<script>alert('YOU ARE SIGNUP SUCCESSFULLY NOW YOU CAN LOGIN');</script>";
}
else{
    echo"<script>alert('New Record added');</script>";
}

}
?>









<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Click Medic </title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href='./signin.css'> 
    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all"> 
</head>

<body>

<div>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a class="active" href="siignup.php">Patient Sign Up</a></li>
        <li><a  href="doctorsignup.php">Doctor Sign Up</a></li>
        <li><a  href="patientsignin.php">Sign in As Patient </a></li>
        <li><a  href="doctorsignin.php">Sign in As Doctor  </a></li>
      </ul>
    </div>  
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registration Info of Patient</h2>
                    <form  action=""   method="post" enctype="multipart/form-data">
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="NAME" name="name">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="email" placeholder="email" name="email">
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="password" placeholder="password" name="pass">
                        </div>

                 
                        <div class="form-group">
    <label for="exampleFormControlSelect1">Gender</label>
    <select class="form-control" id="exampleFormControlSelect1" name="gender">
      <option value="MALE">MALE</option>
      <option value="FEMALE"> FEMALE</option>
      <option value="OTHER">OTHER</option>
     
    </select>

  </div>
                        
                 <br>

                   
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Contact number" name="contactinfo">
                        </div>
                           
                           
                        <div class="form-group">
                                        <label class="col-md-12"> Patient  Description  </label>
                                        <div class="col-md-12">
                                            <textarea rows="5" class="form-control form-control-line" name="description"></textarea>
                                        </div>
                                    </div>

                                    
                                    <div class="form-group">
                                        <label class="col-md-12">Patient image </label>
                                        <div class="col-md-12">
                                            <input type="file"  class="form-control form-control-line" name="img">
                                        </div>
                                    </div>
            

                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" name="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>
<!-- end document-->
