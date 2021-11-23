<?php 

require "connect.php";
if(isset($_POST['submit'])){
    
    $SelectEmployee=$_POST['SelectEmployee'];
    $dates=$_POST['dates'];
    $expensename=$_POST['expensename'];
    $amount=$_POST['amount'];
    $files=$_POST['files'];
    $status=$_POST['status'];
    
    
        $sql="INSERT INTO claims(employee_id,claims_date,type_of_expense,total_amount,claims_status) Values('$SelectEmployee','$dates','$expensename','$amount','$status')";
        $qurey=mysqli_query($conn,$sql);
        echo "Expense Added!";
       
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
               <h3 style="margin:10px;">Add Claims</h3>
           </div>
       </div>
       <hr>
        <div class="row">
           <div class="col-md-3">
               
           </div>
           <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <?php 
    
                                $sql="SELECT employee_name FROM employee";
                                $query=mysqli_query($conn,$sql);
                                $rowcount=mysqli_num_rows($query);
                                ?>
                                <select class="form-control" name="SelectEmployee" id="">

                                    <option value="">Select Employee</option>

                                    <?php 
                                    for($i=1;$i<=$rowcount;$i++){
                                        $row=mysqli_fetch_array($query);
                                        ?>
                                        <option value="<?php echo $row['employee_name'];?>"><?php echo $row['employee_name'];?></option>
                                        <?php
                                    }

                                    ?>

                                </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                       <input type="date" name="dates" class="form-control mt-3 mb-3 " >
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input type="text" name="expensename" class="form-control mt-3 mb-3 " placeholder="Please enter your expense type" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input type="number" name="amount" class="form-control mt-3 mb-3 " placeholder="Please enter your amount" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input type="file" name="files" class="form-control mt-3 mb-3 " >
                    </div>
                </div>
                <div class="row">
                     <div class="col-md-12">
                         <select class="form-control mt-3 mb-3" name="status" id="">
                             <option value="Select">Select Claims Status</option>
                             <option value="Paid">Paid</option>
                             <option value="Unpaid">Unpaid</option>
                         </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input class="btn btn-primary mt-3 mb-3 bx-pull-right" type="submit" name="submit" id="" value="Submit">
                    </div>
                </div>
           </div>
           <div class="col-md-3">
               
           </div>
        </div>
    </form>
    </div>
    </div>
<?php 
       
    if(isset($_POST['submit'])){
        $dates=$_POST['dates'];
        $expensename=$_POST['expensename'];
        $amount=$_POST['amount'];
        $picture="Samad";
        $status=$_POST['status'];
        $select="Jakir";
        $sql="INSERT INTO `claims` (`claims_date`, `type_of_expense`, `total_amount`, `file`, `claims_status`, `claim_status`) VALUES ('$dates', '$expensename', '$amount', '$picture', '$status', '$select') ";
        $query= mysqli_query($conn, $sql);
        if($query){
            echo 'Insert Data Successfully';
        }
        else{
            echo 'Data Insert Failed!';
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