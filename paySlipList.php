<?php require "connect.php";

date_default_timezone_set("Asia/Dhaka");

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
        .forms-body {
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

            <!--Enter Your Code here-->
            <div class="modal-content">
                <div class="forms-body">
                    <form action="" method="post" enctype="multipart/form-data">

                        <div class="row">
                            <div class="col-md-12">
                                <h3 style="margin:10px;">Pay Slip List</h3>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">

                                <select class="form-control" name="year" id="">
                                    <?php 
                                                for($i=1900;$i<=date("Y");$i++){
                                                
                                                ?>
                                    <option class="form-control" value="<?php echo $i;?>" selected><?php echo $i;?></option>
                                    <?php }?>
                                </select>
                            </div>
                            <div class="col-md-4">

                                <select name="month" class=" form-control">
                                    <option value="">Select Month</option>
                                    <option value="Jan">Jan</option>
                                    <option value="Feb">Feb</option>
                                    <option value="Mar">Mar</option>
                                    <option value="Apr">Apr</option>
                                    <option value="May">May</option>
                                    <option value="Jun">Jun</option>
                                    <option value="Jul">Jul</option>
                                    <option value="Aug">Aug</option>
                                    <option value="Sep">Sep</option>
                                    <option value="Oct">Oct</option>
                                    <option value="Nov">Nov</option>
                                    <option value="Dec">Dec</option>
                                </select>

                            </div>
                            <div class="col-md-4">
                                <input class="btn btn-primary" type="submit" name="submit" id="" value="Get Employee List">
                            </div>
                        </div>

                        <!-- <div class="row">
                            <div class="col-md-12">                                
                            </div>
                        </div> -->

                    </form>
                </div>
            </div>
            <?php 
            if(isset($_POST['submit'])){
                
                $year=$_POST['year'];
                $Month=$_POST['month'];
                $sl=1;
                $sql="SELECT * From payroll Where Salary_Year='$year' && salary_Month='$Month'";
                $query=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_array($query)){
                    
            
            
            
            
            
            ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="modal-content">
                        <div class="forms-body">
                        
                        <table class="table table-striped table-bordered">
                           
                           <tr>
                               <th>S.l</th>
                               <th>Employee</th>
                               <th>Salary Year</th>
                               <th>Salary Month</th>
                               <th>Salary Status</th>
                               <th>Action</th>
                           </tr>
                            
                            <tr>
                                <td><?php echo $sl++;?></td>
                                <td><?php echo $row['employee_id'];?></td>
                                <td><?php echo $row['Salary_Year'];?></td>
                                <td><?php echo $row['salary_Month'];?></td>
                                <td><?php echo $row['salary_Status'];?></td>
                                <td><a class="btn btn-primary" href="payslip.php">Pay Slip</a></td>
                            </tr>
                            <?php     }
                            }?>
                        </table>
                        </div>
                    </div>
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
