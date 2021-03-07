
<?php $con = mysqli_connect("localhost","root","","click-medic"); ?>













<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign IN</title>
</head>
<link rel="stylesheet" href='./signin.css'>
<body>
<div>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a  href="siignup.php">Patient Sign Up</a></li>
        <li><a  href="doctorsignup.php">Doctor Sign Up</a></li>
        <li><a  href="patientsignin.php">Sign in As Patient </a></li>
        <li><a class="active" href="doctorsignin.php">Sign in As Doctor  </a></li>
      </ul>
    </div>
    <section>
    <div class="box">

<div class="form">


<h2>LOG IN As Doctor </h2>
<form action="doctorprofile.php" method="post">
<div class="inputbx">

<input type="text" placeholder='username' name='email'>
<img src='./user.png' class="photo">
</div>
<div class="inputbx">
    <input type="password" placeholder="password" name='pass'>
    <img src="./lock.png" class="photo">
</div>
<div class="inputbx">

    <input type='submit' value='login' name ="submit">

</div>

</form>
<p><a href="./doctorsignup.php">SIGN UP???</a></p>

</div>


    </div>
    </section>
</body>
</html>