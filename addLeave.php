<?php require "connect.php";?>


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
                  <h3 style="margin:10px;">Add Leave</h3>
                </div>
            </div><hr>
            <div class="row">
              <div class="col-md-3"></div>
              <div class="col-md-6">
                <div class="form-group">
                 <?php 
    
                                                $sql="SELECT employee_name FROM employee";
                                                $query=mysqli_query($conn,$sql);
            $rowcount=mysqli_num_rows($query);
            ?>
            <select class="form-control" name="select_employee" id="">
                
                <option value="">Select Employee</option>
                
                <?php 
                for($i=1;$i<=$rowcount;$i++){
                    $row=mysqli_fetch_array($query);
                    ?>
                    <option value="<?php echo $row['employee_name'];?>"><?php echo $row['employee_name'];?></option>
                    <?php
                }
                
                ?>
                
            </select><br>
            
                </div>
                <div class="form-group">
                  <?php 
    
                                                $sql="SELECT leave_type FROM leave_type";
                                                $query=mysqli_query($conn,$sql);
            $rowcount=mysqli_num_rows($query);
            ?>
            <select class="form-control" name="leave_type" id="">
                
                <option value="">Select Leave Type</option>
                
                <?php 
                for($i=1;$i<=$rowcount;$i++){
                    $row=mysqli_fetch_array($query);
                    ?>
                    <option value="<?php echo $row['leave_type'];?>"><?php echo $row['leave_type'];?></option>
                    <?php
                }
                
                ?>
                
            </select>
                </div>
              
                <div class="form-group">
                    Leave Start Date
                    <input class="form-control mt-1 mb-1 " name="leave_start_date" id="" type="date">
                </div>
                <div class="form-group">      
                    Leave Ends Date
                    <input class="form-control mt-1  " name="leave_ends_date" id="" type="date">
                </div>
                <div class="form-group">
                    <textarea class="form-control mt-3" name="description" id="" cols="10" rows="2" placeholder="Please enter your message"></textarea><br>
                </div>
                <div class="form-group">
                      <?php 
    
                                                $sql="SELECT document_Name FROM employee_document";
                                                $query=mysqli_query($conn,$sql);
            $rowcount=mysqli_num_rows($query);
            ?>
            <select class="form-control" name="support_document" id="">
                
                <option value="">Select Support Document</option>
                
                <?php 
                for($i=1;$i<=$rowcount;$i++){
                    $row=mysqli_fetch_array($query);
                    ?>
                    <option value="<?php echo $row['document_Name'];?>"><?php echo $row['document_Name'];?></option>
                    <?php
                }
                
                ?>
                </select>
                </div>
                <div class="form-group">
                    <select class="form-control mt-3" name="leave_status" id="">
                      <option value="">Select Status</option>
                      <option value="pending">Pending</option>
                      <option value="aproved">Aproved</option>
                    </select> 
                </div>
                <div class="form-group">
                  <input class="btn btn-primary bx-pull-right mt-3" type="submit" name="submit" value="save">
                </div>
              </div>
              <div class="col-md-3"></div>
            </div>
        </form>
      </div>
    </div>


<!--  php insert code-->>

<?php 

        if(isset($_POST['submit'])){
            $select_employee=$_POST['select_employee'];
            $leave_type=$_POST['leave_type'];
            $leave_start_date=$_POST['leave_start_date'];
            $leave_ends_date=$_POST['leave_ends_date'];
            $description=$_POST['description'];
            $support_document=$_POST['support_document'];
            $leave_status=$_POST['leave_status'];
            
            $sql="INSERT INTO leaves ( leave_start_date, leave_end_date, leave_for, supported_document, leave_status) VALUES ('$leave_start_date', '$leave_ends_date', '$description', '$support_document', '$leave_status')";
            $query= mysqli_query($conn, $sql);
            
            if($query){
                echo 'Your leave document added successfully';
                header("location:leaveManage.php");
            }
            else{
                echo 'Your leave document is not added';
            }
            
        }



?>
           
           
           
           
           
           
            
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