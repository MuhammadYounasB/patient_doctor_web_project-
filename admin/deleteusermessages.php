<?php
session_start();

$usernm=$_SESSION['username'];
$pass =$_SESSION['pass'];

if($usernm==true && $pass ==true )
{

}
else{

    header('location:login.php');
}


?>

<?php  include("header.php");?>



<?php $conn = mysqli_connect("localhost","root","","click-medic"); ?> 

<?php

$delete_id = $_REQUEST['delete_id'];



// sql to delete a record
$sql = "DELETE FROM User_contact WHERE id = '$delete_id'";

if (mysqli_query($conn, $sql)) 
{
  echo "<script>alert('Record deleted successfully'); </script>";
  header('location:viewuser_messages.php');
} 
else {
  echo "<scritp>alert('Record  not deleted successfully');</script>";
}




?>