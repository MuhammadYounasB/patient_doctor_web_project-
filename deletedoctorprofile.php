


<?php 
session_start();
$conn = mysqli_connect("localhost","root","","click-medic"); ?> 

<?php

$delete_id= $_REQUEST['delete_id'];

echo $delete_id;

// sql to delete a record
$sql = "DELETE FROM doctor WHERE d_id = '$delete_id' ";

if (mysqli_query($conn, $sql)) 
{
  echo "<script>alert('Record deleted successfully'); </script>";

  header('location:doctorsignup.php');
} 
else {
  echo "<scritp>alert('Record  not deleted successfully');</script>";
}




?>