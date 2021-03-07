<?php session_start(); ?>

<?php $con = mysqli_connect("localhost","root","","click-medic");







?> 

<?php

$edit_id= $_REQUEST['edite_id'];

$query= "SELECT * FROM patient where p_id = $edit_id";

$result = mysqli_query($con, $query);
if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_assoc($result)) {

        $name = $row['name'];
        $email = $row['email'];
    $password = $row['password'];
    $contacinfo = $row['contacinfo'];
    
    $gender = $row['gender'];
    $description  = $row['description'];
    
    
    $img = $row['img'];
    
    
    
}
} 





?>


<?php

if(isset($_POST['update']))
{
    
    $edit_id= $_REQUEST['edite_id'];
    
    $editename = $_POST['editname']; 
    $editemail = $_POST['editemail'];
    
    $editpassword = $_POST['editpassword'];
    $editcontacinfo = $_POST['editcontacinfo'];
    $editdescription= $_POST['editdescription'];
    
    $editgender =$_POST['editgender'];

    //session variable updating after changes in profile data

    $_SESSION['p_name']=$editename;
    $_SESSION['p_email']=$editemail ;
    $_SESSION['p_password']=$editpassword ;
    $_SESSION['p_no']=$editcontacinfo; 
    $_SESSION['p_desc']=$editdescription ;
    $_SESSION['p_gender']=$editgender;
    
    $img_sql= "SELECT img FROM patient where p_id='$edit_id'";
    $img_query=mysqli_query($con,$img_sql);
    $img=mysqli_fetch_assoc($img_query);
    $_SESSION['img']= $img['img'];
    //$filename= $_FILES["img"]["name"];
    
    //$filetemp = $_FILES["img"]["tmp_name"];
    
    //$folder = "pro_image/".$filename;
    
    //move_uploaded_file($filetemp,$folder);
    
    
    
    $sql = "UPDATE patient  SET name='$editename', description='$editdescription' , email='$editemail', password='$editpassword',gender ='$editgender', contacinfo='$editcontacinfo'	  WHERE  p_id = $edit_id ";
    
    if(mysqli_query($con,$sql))
    {
        
        echo"<script>alert('New Record Updated successfully ');</script>";
        header("Location:patientprofile.php");
        
        
    }
    else{
        echo"<script>alert('New Record not  Updated successfully ');</script>";
    }
    
}
?>

<?php  include("header.php");?>

<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <center class="m-t-30"> <img src="admin/<?php echo  $img;   ?>" class="rounded-circle" width="150" />
                                <h4 class="card-title m-t-10"><?php echo $name?> </h4>
                                   
                                  
                                </center>
                            </div>
                            <div>
                                <hr> </div>
                            <div class="card-body"> <small class="text-muted">Email address </small>
                                <h6></h6> <small class="text-muted p-t-30 db">Phone</small>
                                <h6><?php echo $row['contacinfo']?></h6> <small class="text-muted p-t-30 db">Address</small>
                                <h6>#</h6>
                                
                                <br/>
                                
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material"  action="" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label class="col-md-12">Full Name</label>
                                        <div class="col-md-12">
                                            <input type="text" Value ="<?php echo  $name;?>" name = 'editname' class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="email" Value="<?php echo $email; ?>" name='editemail' class="form-control form-control-line" name="example-email" id="example-email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Password</label>
                                        <div class="col-md-12">
                                            <input type="password" value="<?php echo $password; ?>" name='editpassword' class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Phone No</label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?php echo $contacinfo;?>" name ='editcontacinfo'class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Message</label>
                                        <div class="col-md-12">
                                        <textarea rows="5" class="form-control form-control-line" name='editdescription'><?php echo $description; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-12">Gender</label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?php echo $gender?>" name='editgender' class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success" name="update">update Member </button>
                                        </div>
                                    </div>

                                   




                                   
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>