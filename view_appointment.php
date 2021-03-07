<?php session_start();
$con = mysqli_connect("localhost","root","","click-medic");
if(isset($_SESSION['d_name'])){// execute when doctor is logged in
$d_id = $_SESSION['d_id'];
$user = $_SESSION['d_name'];
$sql="SELECT * FROM `appointment` AS a INNER JOIN doctor AS b ON (a.d_id =$d_id AND b.d_id=$d_id)";
$query=mysqli_query($con,$sql);
}

elseif(isset($_SESSION['p_name'])){//execute when patient is logged in
    $p_id = $_SESSION['p_id'];
    $user = $_SESSION['p_name'];
$sql="SELECT * FROM `appointment` AS a INNER JOIN patient AS b ON (a.p_id =$p_id AND b.p_id=$p_id)";
$query=mysqli_query($con,$sql);
}

?>
<?php include('header.php');?>
<br><br><br>
<h2 class="text-center text-success"><?php echo $user;?> Appointmnt List </h2>
<table class="table container">
  <thead class="">
    <tr>
      <th scope="col">Serial no</th>
      <th scope="col">Doctor Name</th>
      <th scope="col">Appointment Date</th>
      <th scope="col">Appointment time</th>
      <th scope="col">Patient Name</th>
      <th scope="col">Patient Diseases</th>
      <th scope="col">Patient Message</th>
    </tr>
  </thead>
  <tbody>
    
  <?php while($row=mysqli_fetch_assoc($query)){?>
    <tr>
      <th scope="row"><?php echo $row['a_id']?></th>
      <td><?php echo $row['dname']?></td>
      <td><?php echo $row['date']?></td>
      <td><?php echo $row['time']?></td>
      <td><?php echo $row['pname']?></td>
      <td><?php echo $row['diseasename']?></td>
      <td><?php echo $row['message']?></td>
    </tr>
  <?php }?>
  </tbody>
</table>