<?php 
$con = mysqli_connect("localhost","root","","click-medic");
session_start();


$doctor_id=$_REQUEST['doctor_id'];

if(isset($_SESSION['p_name'])!=true){

	header("Location:siignup.php");
}

if(isset($_POST['Appointment'])){
    $p_id=$_SESSION['p_id'];
	$p_name= $_SESSION['p_name'];
	$disease= $_POST['disease'];
	$date= $_POST['date'];
	$time= $_POST['time'];
	$message= $_POST['message'];
		
	$query = "INSERT INTO appointment (p_id, d_id, pname,dname, diseasename,pcontact, date, time,message) 
    VALUES ((SELECT p_id FROM patient WHERE p_id=$p_id),(SELECT d_id FROM doctor WHERE d_id=$doctor_id),'$p_name',(SELECT name FROM doctor WHERE d_id=$doctor_id),'$disease',(SELECT contacinfo FROM patient WHERE p_id=$p_id),'$date','$time','$message')";
	
echo	$result = mysqli_query($con,$query)or die(mysqli_error());
	
	   
	   if($result){
	//    $_SESSION['id']=$data['ID'];
	//    $_SESSION['name']=$data['NAME'];
	//    $_SESSION['password']=$data['PASSWORD'];
	  header('Location:view_appointment.php');
	   }

	}

include('header.php');
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="./css/animate.css">
	
	<link rel="stylesheet" href="./css/owl.carousel.min.css">
	<link rel="stylesheet" href="./css/owl.theme.default.min.css">
	<link rel="stylesheet" href="./css/magnific-popup.css">

	<link rel="stylesheet" href="./css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="./css/jquery.timepicker.css">
	
	<link rel="stylesheet" href="./css/flaticon.css">
	<link rel="stylesheet" href="./css/style.css">


	<!--======================================== forlogin table=======================================================-->	
	<link rel="icon" type="image/png" href="admin//images/icons/favicon.ico"/>

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="admin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="admin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="admin/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="admin/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="admin/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="admin/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="admin/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="admin/css/util.css">
	<link rel="stylesheet" type="text/css" href="admin/css/main.css">
<!--===============================================================================================-->
<style>
  body{  
	   background-image:url("walter-otto-PT70CT6mATQ-unsplash.jpg");
	   background-position:cover;
  }
</style>

</head>
<body>





	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-17 p-b-17">
				<form class="login100-form validate-form flex-sb flex-w" action="" method="post">
					<span class="login100-form-title p-t-10 p-b-20">
						Appointment
					</span>

					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
						<input class="input100" type="text" name="p_name" value ="<?php echo $_SESSION['p_name']; ?>" disabled >
						<span class="focus-input100"></span>
					</div>
					
                    <div class="wrap-input100 validate-input m-b-16" >
                        <input class="input100" type="text" name="disease" placeholder="Patient Disease">
                        <span class="focus-input100"></span>
                    </div>
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
						<input class="input100" type="date" name="date">
						<span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
						<input class="input100" type="text" name="time" placeholder="Time">
						<span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
						<textarea class="input100" type="text" name="message" placeholder="Message" col="30" row="5"> </textarea>
						<span class="focus-input100"></span>
                    </div>
                   
					
					

					<div class="container-login100-form-btn ">
						<input type="submit" name="Appointment" class="login100-form-btn bg-success " value="Appointment">
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>


<?php include('footer.php'); ?>