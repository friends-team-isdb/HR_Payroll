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
        .forms-body {
            margin: 10px;
        }
        th{
            background-color: blue;
            color: white;
            font-weight: bold;
        }
        .emply{
            margin-left: 250px;
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
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="company">
                                <?php

                                            require "connect.php";
                                            
                                            $id=$_GET["aid"];

                                            $sqls=" SELECT * FROM company";
                                            $querrys= mysqli_query($conn, $sqls);
                                            while ($rows= mysqli_fetch_array($querrys)){
                                        ?>
                                    <h3 style="color:blue;"><?php echo $rows['Name'];?></h3>
                                    <p><?php echo $rows['Address'];?></p>
                                    <p><?php echo $rows['phone'];?></p>
                                    <p><?php echo $rows['email'];?></p>
                                </div>
                                <?php } ?>

                            </div>
                            <div class="col-md-6">
                               <h3 style="color:blue; margin-left:250px;">PaySlip</h3>
                            </div>

                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="employee_details">
                                <?php
                                            require "connect.php";
                                            $idd=$_GET["aid"];
                                            $sqlssss=" SELECT * FROM employee WHERE employee_name='$idd'";
                                            $querryssss= mysqli_query($conn, $sqlssss);
                                            while ($rowssss= mysqli_fetch_array($querryssss)){
                                        ?>
                                    <h3 style="color:white;background-color:blue; padding:5px; width:300px; height:auto;">Employee Details</h3>
                                    <p>Name: <?php echo $rowssss['employee_name'];?></p>
                                    <p>Designation: <?php echo $rowssss['employee_status'];?></p>
                                    <p>Phone: <?php echo $rowssss['phone'];?></p>
                                    <p>Email: <?php echo $rowssss['email'];?></p>
                                </div>
                                <?php } ?>
                            </div>
                            <div class="col-md-6">
                                <table class="table-sm table-bordered emply">
                                <?php
                                            require "connect.php";
                                            
                                            $sqlss=" SELECT * FROM salary";
                                            $querryss= mysqli_query($conn, $sqlss);
                                            while ($rowss= mysqli_fetch_array($querryss)){
                                        ?>
                                    <tr>
                                        <th>Salary Date</th>
                                        <th>Salary Type</th>
                                       
                                    </tr>
                                    <tr>
                                        
                                        <td><?php echo $rowss['salary_date']?></td>	
                                        <td><?php echo $rowss['salary_type_id']?></td>
                                    </tr>
                               <?php } ?>
                               
                                    <tr>
                                        <th>Salary Month</th>
                                        <th>Salary Year</th>
                                       
                                    </tr>
                                    <?php
                                            require "connect.php";
                                            
                                            $sqlsss=" SELECT * FROM payroll";
                                            $querrysss= mysqli_query($conn, $sqlsss);
                                            while ($rowsss= mysqli_fetch_array($querrysss)){
                                        ?>

                                    <tr>
                                        
                                        <td><?php echo $rowsss['salary_Month'];?></td>
                                        <td><?php echo $rowsss['Salary_Year'];?></td>
                                    </tr>
                                    <?php } ?>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                        <div class="span"><h3>Payslip Table</h3></div>
                            <div class="col-md-12">
                                <table class="table table-striped">            
                                        <tr>
                                            <th>Details</th>
                                            <th>Amount</th>
                                        </tr>
                                        <?php
                                            require "connect.php";
                                            
                                            $sql=" SELECT * FROM salary";
                                            $querry= mysqli_query($conn, $sql);
                                            while ($row= mysqli_fetch_array($querry)){
                                        ?>
                                        <tr>
                                            <td>Basic Salary</td>
                                            <td><?php echo $row['basic_salary']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Medical</td>
                                            <td><?php echo $row['medical']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>House Rent</td>
                                            <td><?php echo $row['house_rent']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Food</td>
                                            <td><?php echo $row['food']; ?></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>Net Salary</td>
                                            <td><?php echo $row['net_salary']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Gross Salary</td>
                                            <td><?php echo $row['gross_salary']; ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr class="table-info">
                                            <td>Total</td>
                                            <td>#</td>
                                        </tr>
                                   
                                </table>
                            </div>
                        </div>
                        
                        <div class="row">
                        <div class="span"><h3>Deduction Table</h3></div>
                            <div class="col-md-12">
                                <table class="table table-striped">            
                                        <tr>
                                            <th>Details</th>
                                            <th>Amount</th>
                                        </tr>
                                    
                                        <tr>
                                            <td>Provident Fund</td>
                                            <td><?php echo $row['provident_fund']; ?></td>
                                        </tr>
                                        <?php } ?>
                                        <tr>
                                            <td>Description</td>
                                            <td>#</td>
                                        </tr>
                                        
                                        <tr>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr class="table-info">
                                            <td>Total</td>
                                            <td>#</td>
                                        </tr>
                                   
                                </table>
                            </div>
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
