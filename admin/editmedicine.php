
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

<?php $con = mysqli_connect("localhost","root","","click-medic"); ?> 

<?php

$edit_id = $_REQUEST['edit_id'];

$query= "SELECT * FROM products where id = '$edit_id'";

$result = mysqli_query($con, $query);
if (mysqli_num_rows($result) > 0) {
    
while($row = mysqli_fetch_assoc($result)) {

    $mdname = $row['mdname'];
    $mddescription = $row['mddescription'];
    $price = $row['price'];
    
   
      
    }
  } 





?>


<?php

if(isset($_POST['update']))
{

$edit_id= $_REQUEST['edit_id'];

$editname = $_POST['editname'];

$editprice = $_POST['editprice'];

$filename= $_FILES["img"]["name"];

$filetemp = $_FILES["img"]["tmp_name"];

$folder = "pro_image/".$filename;

move_uploaded_file($filetemp,$folder);

$editdescription= $_POST['editdescription'];



$sql = "UPDATE products SET mdname='$$editname', 	mddescription = ' $editdescription' ,	mdimg ='$folder', price='$editprice'  WHERE id='$edit_id' ";

if(mysqli_query($con,$sql))
{

echo"<script>alert('New Record Updated successfully ');</script>";
}
else{
    echo"<script>alert('New Record not  Updated successfully ');</script>";
}

}
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
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <a href="index.php" class="logo">
                            <!-- Logo icon -->
                           
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                                <!-- dark Logo text -->
                                <img src="assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo text -->
                                <img src="assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
                            </span>
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti-more"></i>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin6">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box">
                            <a class="nav-link waves-effect waves-dark" href="javascript:void(0)">
                                <div class="d-flex align-items-center">
                                    <i class="mdi mdi-magnify font-20 mr-1"></i>
                                    <div class="ml-1 d-none d-sm-block">
                                        <span>Search</span>
                                    </div>
                                </div>
                            </a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter">
                                <a class="srh-btn">
                                    <i class="ti-close"></i>
                                </a>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="profile.php"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>

                                <a class="dropdown-item" href="logout.php"><i class="ti-email m-r-5 m-l-5"></i> logout </a>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php" aria-expanded="false">
                                <i class="mdi mdi-av-timer"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="profile.php" aria-expanded="false">
                                <i class="mdi mdi-account-network"></i>
                                <span class="hide-menu">Profile</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="adddoctor.php" aria-expanded="false">
                                <i class="mdi mdi-account-network"></i>
                                <span class="hide-menu">Add New Doctor </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="viewdoctors.php" aria-expanded="false">
                                <i class="mdi mdi-account-network"></i>
                                <span class="hide-menu">view Doctor details </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="addpatient.php" aria-expanded="false">
                                <i class="mdi mdi-account-network"></i>
                                <span class="hide-menu">Add New Patient </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="viewpatient.php" aria-expanded="false">
                                <i class="mdi mdi-account-network"></i>
                                <span class="hide-menu">View Patient Details </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="addservices.php" aria-expanded="false">
                                <i class="mdi mdi-account-network"></i>
                                <span class="hide-menu">Add services</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="viewservices.php" aria-expanded="false">
                                <i class="mdi mdi-account-network"></i>
                                <span class="hide-menu">view services</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="addmedicine.php" aria-expanded="false">
                                <i class="mdi mdi-account-network"></i>
                                <span class="hide-menu">Add Medicine Product</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="viewmedicine.php" aria-expanded="false">
                                <i class="mdi mdi-account-network"></i>
                                <span class="hide-menu">view Medicine Product </span>
                            </a>
                        </li>
                        
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="viewappointment.php" aria-expanded="false">
                                <i class="mdi mdi-account-network"></i>
                                <span class="hide-menu">View Appointment </span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="viewuser_messages.php" aria-expanded="false">
                                <i class="mdi mdi-account-network"></i>
                                <span class="hide-menu"> Veiw users Messages </span>
                            </a>
                        </li>
                        
                      
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
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
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
                <!-- Email campaign chart -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-8">
                    <form class="form-horizontal form-material" action="" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label class="col-md-12"> Medicine Name </label>
                                        <div class="col-md-12">
                                            <input type="text"  class="form-control form-control-line" name="editname" value="<?php echo  $mdname; ?>" >
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-12"> Medicine price  </label>
                                        <div class="col-md-12">
                                            <input type="text"  class="form-control form-control-line" name="editprice" value="<?php echo  $price; ?>" >
                                        </div>
                                    </div>
                                   
                                   
                                  
                                    <div class="form-group">
                                        <label class="col-md-12">Medicine image </label>
                                        <div class="col-md-12">
                                            <input type="file"  class="form-control form-control-line" name="img">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12"> Medicine Description  </label>
                                        <div class="col-md-12">
                                            <textarea rows="5" class="form-control form-control-line" name="editdescription"  > <?php echo $mddescription;   ?>
                                            </textarea>
                                        </div>
                                    </div>
                                  
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success" name="update">update Service </button>
                                        </div>
                                    </div>
                                </form>
                    </div>
                </div>
                </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->

            


                  
              
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
 

            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <?php include("footer.php")  ?>