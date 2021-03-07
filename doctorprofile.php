<?php session_start();



$con = mysqli_connect("localhost","root","","click-medic");




if(isset($_POST['submit'])){
    
    
    $email= $_POST['email'];
    $pass = $_POST['pass'];

    $sql="SELECT * FROM `doctor` WHERE email = '$email' AND PASSWORD = '$pass'";
 $result = mysqli_query($con, $sql);
 $row = mysqli_fetch_assoc($result);
   $_SESSION['d_id']=$row['d_id']; 
   $_SESSION['d_name']=$row['name']; 
   $_SESSION['d_email']=$row['email']; 
   $_SESSION['d_password']=$row['password']; 
   $_SESSION['d_no']=$row['contact']; 
   $_SESSION['d_desc']=$row['description']; 
   $_SESSION['img']=$row['img']; 
   $_SESSION['d_gender']=$row['gender']; 
   $_SESSION['profile'] = "doctorprofile";    
   $_SESSION['appointment'] = "view_appointment";    
   
   
   
   

   if($row==true)
   {
       // output data of each row
  
       echo "<script>alert('login successfully'); </script>";

       
    }
    else {
        echo "<script>alert('login falid'); </script>";
    header('location:patientsignin.php');
    
}
}else{
    
}

include('header.php'); 
?>



<body>
<!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
       
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Profile of Doctor  </h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="doctorprofile.php">Profile</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="signout.php">logout </a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
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
                                <center class="m-t-30"> <img src="admin/<?php echo $_SESSION['img'];  ?>" class="rounded-circle" width="150" />
                                    <h4 class="card-title m-t-10"><?php echo $_SESSION['d_name']?></h4>
                                   
                                  
                                </center>
                            </div>
                            <div>
                                <hr> </div>
                            <div class="card-body"> <small class="text-muted">Email address </small>
                                <h6><?php echo $_SESSION['d_email']?></h6> <small class="text-muted p-t-30 db">Phone</small>
                                <h6><?php echo $_SESSION['d_no']?></h6> <small class="text-muted p-t-30 db">Address</small>
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
                                <form class="form-horizontal form-material">
                                    <div class="form-group">
                                        <label class="col-md-12">Full Name</label>
                                        <div class="col-md-12">
                                            <input readonly type="text" Value ="<?php echo $_SESSION['d_name'];?>" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input readonly type="email" Value="<?php echo $_SESSION['d_email'];?>" class="form-control form-control-line" name="example-email" id="example-email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Password</label>
                                        <div class="col-md-12">
                                            <input readonly type="password" value="<?php echo $_SESSION['d_password'];?>" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Phone No</label>
                                        <div class="col-md-12">
                                            <input readonly type="text" value="<?php echo $_SESSION['d_no'];?>" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Message</label>
                                        <div class="col-md-12">
                                            <textarea readonly rows="5" class="form-control form-control-line"><?php echo $_SESSION['d_desc'];?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-12">Gender</label>
                                        <div class="col-md-12">
                                            <input readonly type="text" value="<?php echo $_SESSION['d_gender'];?>" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                        <a href="updatedprofile.php?edite_id=<?php echo $_SESSION['d_id']; ?>" class="btn btn-success btn-lg " role="button" aria-pressed="true">Update profile</a>
                                        </div>
                                    </div>

                                   
                                        <div class="col-sm-12">
                                        <a href="deletedoctorprofile.php?delete_id=<?php echo $_SESSION['d_id']; ?>" class="btn btn-danger btn-lg " role="button" aria-pressed="true">Delete Account </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <a href="view_appointment.php?view_appointment=<?php echo $_SESSION['d_id']; ?>" class="btn btn-primary btn-lg " role="button" aria-pressed="true">View Your Appointment  </a>
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
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <?php  include("footer.php");?>