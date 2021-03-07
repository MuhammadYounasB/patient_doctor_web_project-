<?php session_start(); ?>


<?php $conn = mysqli_connect("localhost","root","","click-medic"); ?> 

<?php

$delete_id= $_REQUEST['delete_id'];



// sql to delete a record
$sql = "DELETE FROM patient WHERE p_id= $delete_id";

if (mysqli_query($conn, $sql)) 
{
  echo "<script>alert('Record deleted successfully');</script>";

  header('location:siignup.php');
} 
else {
  echo "<scritp>alert('Record  not deleted successfully');</script>";
}




?>