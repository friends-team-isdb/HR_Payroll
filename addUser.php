<?php require "connect.php";
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $fullname=$_POST['fullname'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $accountCreation=date("Y-m-d");
    $status=$_POST['status'];
    $s="SELECT * FROM user_table WHERE email='$email'";
    $result=mysqli_query($conn,$s);
    $num=mysqli_num_rows($result);
    if($num==1){
        echo "Email  Already Exits";
    }else{
       $sqls="INSERT INTO `user_table`( `user_name`, `full_name`, `email`, `phone`, `passwords`,`account_creation_date`,`user_status`)Values('$username','$fullname','$email','$phone','$password','$accountCreation','$status')";
    $query=mysqli_query($conn,$sqls);
        header("location:userManage.php");
    }
}
?>

<!doctype html>
<html lang="en" class="light-theme">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
  <!--plugins-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
  <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
  <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
  <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
  <link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
  <!-- Bootstrap CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/bootstrap-extended.css" rel="stylesheet" />
  <link href="assets/css/style.css" rel="stylesheet" />
  <link href="assets/css/icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />

  <!--Theme Styles-->
  <link href="assets/css/dark-theme.css" rel="stylesheet" />
  <link href="assets/css/light-theme.css" rel="stylesheet" />
  <link href="assets/css/semi-dark.css" rel="stylesheet" />
  <link href="assets/css/header-colors.css" rel="stylesheet" />

  <title>HR PAYROLL SOFTWARE</title>
  <style>
    
    
      .forms-body{
          margin: 10px;
      }
    </style>
</head>

<body>


  <!--start wrapper-->
  <div class="wrapper">
    <!--start top header-->
      <header class="top-header">        
       <?php require "headers.php"?>
      </header>
       <!--end top header-->

        <!--start sidebar -->
        <aside class="sidebar-wrapper" data-simplebar="true">
          <?php require "SidebarMenu.php"?>
       </aside>
       <!--end sidebar -->

       <!--start content-->
          <main class="page-content">
              
<!--           Enter Your Code here-->
    <div class="modal-content">
      <div class="forms-body">
        <form action="" method="post" enctype="multipart/form-data">      
            <div class="row">
                <div class="col-md-12">
                  <h3 style="margin:10px;">Add Users</h3>
                </div>
            </div><hr>
<!--            Jakir vai code here-->
            <div class="row">
                <div class="col-md-6">
                    <h4 style="margin:10px;">Profile Details</h4>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="text" name="username" class="form-control mt-3" id="" placeholder="Please Write Your User Name" required> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="text" name="fullname" class="form-control mt-3" id="" placeholder="Please Write Your Full Name" required> 
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12">
                            <input type="number" name="phone" class="form-control mt-3" id="" placeholder="Please Write Your Phone Number" required> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                        <input type="email" name="email" class="form-control mt-3" id="" placeholder="Please Write Your Email Address" required> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="password" class="form-control mt-3" name="password" id="" placeholder="Please Write Your Password" required> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                               <select name="status" class="form-control mt-3"id="">
                                    <option value="">Select Your Status</option>
                                    <option value="active" selected>Active</option>
                                    <option value="inactive">Inactive</option>
                               </select>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <h4 style="margin:10px;">Module Access</h4>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            Employee: <input type="checkbox"  name="" id="" value="">View
                            <input type="checkbox"  name="" id="" value="">Add
                            <input type="checkbox"  name="" id="" value="">Edit
                            <input type="checkbox"  name="" id="" value="">Delete
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            Department: <input type="checkbox"  name="" id="" value="">View
                            <input type="checkbox"  name="" id="" value="">Add
                            <input type="checkbox"  name="" id="" value="">Edit
                            <input type="checkbox"  name="" id="" value="">Delete
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            Attendance: <input type="checkbox"  name="" id="" value="">View
                            <input type="checkbox"  name="" id="" value="">Add
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            Leave: <input type="checkbox"  name="" id="" value="">View
                            <input type="checkbox"  name="" id="" value="">Add
                            <input type="checkbox"  name="" id="" value="">Edit
                            <input type="checkbox"  name="" id="" value="">Delete
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            Payslip: <input type="checkbox"  name="" id="" value="">View
                            <input type="checkbox"  name="" id="" value="">Add
                            <input type="checkbox"  name="" id="" value="">Delete
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            Holiday: <input type="checkbox"  name="" id="" value="">View
                            <input type="checkbox"  name="" id="" value="">Add
                            <input type="checkbox"  name="" id="" value="">Edit
                            <input type="checkbox"  name="" id="" value="">Delete
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-md-4">
                    
                </div>
                <div class="col-md-4">
                    <input class="btn btn-primary mt-3 " type="submit" name="submit" id="" value="Save">
                </div>
                <div class="col-md-4">
                   
                </div>
            </div>
               
        </form>
      </div>
    </div>


           
           
           
           
           
           
            
          </main>
       <!--end page main-->

       <!--start overlay-->
        <div class="overlay nav-toggle-icon"></div>
       <!--end overlay-->

       <!--Start Back To Top Button-->
		     <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
       <!--End Back To Top Button-->

  </div>
  <!--end wrapper-->


  <!-- Bootstrap bundle JS -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <!--plugins-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
  <script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
  <script src="assets/plugins/easyPieChart/jquery.easypiechart.js"></script>
  <script src="assets/plugins/peity/jquery.peity.min.js"></script>
  <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
  <script src="assets/js/pace.min.js"></script>
  <script src="assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
	<script src="assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
  <script src="assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
  <script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
	<script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
  <!--app-->
  <script src="assets/js/app.js"></script>
  <script src="assets/js/index.js"></script>

  <script>
     new PerfectScrollbar(".best-product")
     new PerfectScrollbar(".top-sellers-list")
  </script>

</body>

</html>